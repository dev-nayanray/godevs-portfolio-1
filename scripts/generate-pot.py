#!/usr/bin/env python3
"""
GoDevs Portfolio — POT file generator.

Scans the theme's PHP source for WordPress internationalization function
calls and writes / regenerates `languages/godevs-portfolio.pot`.

This is the same workflow as `wp i18n make-pot . languages/godevs-portfolio.pot`,
implemented as a zero-dependency Python helper so contributors do not need
WP-CLI installed to regenerate the catalogue.

Usage
-----
From the theme root:

    python3 scripts/generate-pot.py

The generator writes the .pot file in place and prints a summary of how
many unique translatable strings were extracted.

Supported functions
-------------------
Single-argument:   __, _e, esc_html__, esc_html_e, esc_attr__, esc_attr_e
With context:      _x, _ex, esc_html_x, esc_attr_x
With plural:       _n, _nx
No-op variants:    _n_noop, _nx_noop, translate_noop_plural

Strings may be single- or double-quoted; basic escape sequences (\\n, \\t,
\\", \\', \\\\, \\$) are decoded. Concatenation with `.` and adjacent
string literals is collapsed so that split strings still extract cleanly.

Exit codes
----------
0 — .pot regenerated successfully.
1 — I/O error or malformed input.

License: GPL-2.0-or-later
"""

from __future__ import annotations

import os
import re
import sys
from datetime import datetime, timezone
from typing import Dict, List, Tuple

# ---------------------------------------------------------------------------
# Configuration
# ---------------------------------------------------------------------------

THEME_SLUG = "godevs-portfolio"
THEME_VERSION = "1.5.0"
GENERATOR_NAME = "GoDevs Portfolio POT Generator 1.0"
REPORT_BUGS_TO = "https://github.com/godevsltd/godevs-portfolio/issues"

# Directories whose PHP files should NOT be scanned for strings.
EXCLUDE_DIRS = {
    "node_modules",
    ".git",
    "vendor",
    "tests",
    "docs",
    ".cache",
}

# Only .php files are scanned. Block markup (.html templates/parts) and
# pattern content is intentionally excluded — WordPress.org treats pattern
# markup as content, not code, and does not require it to be gettext-wrapped.
INCLUDE_EXTENSIONS = (".php",)

# i18n functions and how many leading string arguments they carry.
# (function_name, arg_count) — arg_count is the number of leading
# string-literal arguments to capture from the call.
SINGLE_ARG_FUNCS = {
    "__", "_e", "esc_html__", "esc_html_e", "esc_attr__", "esc_attr_e",
}
CONTEXT_FUNCS = {  # (msgid, context) — context is the SECOND arg.
    "_x", "_ex", "esc_html_x", "esc_attr_x",
}
PLURAL_FUNCS = {  # (singular, plural) — plural is the SECOND arg.
    "_n",
}
PLURAL_CONTEXT_FUNCS = {  # (singular, plural, context)
    "_nx",
}
NOOP_FUNCS = {  # (singular, plural) — like _n but no translation at call time.
    "_n_noop", "_nx_noop",
}

# Build one regex that matches any i18n function call and captures the
# function name + the raw text of its arguments, so we can parse them
# uniformly regardless of arity.
ALL_FUNCS = (
    SINGLE_ARG_FUNCS
    | CONTEXT_FUNCS
    | PLURAL_FUNCS
    | PLURAL_CONTEXT_FUNCS
    | NOOP_FUNCS
)
FUNC_RE = re.compile(
    r"\b(" + "|".join(re.escape(f) for f in sorted(ALL_FUNCS)) + r")\s*\(",
)

# A PHP string literal (single- or double-quoted) with escape decoding.
STRING_RE = re.compile(
    r"""
    (['"])           # opening quote
    ((?:\\.|(?!\1).)*?)  # body: any escaped char or non-closing char
    \1               # closing quote (same as opening)
    """,
    re.VERBOSE | re.DOTALL,
)


def decode_php_string(raw: str, quote: str) -> str:
    """Decode a PHP string literal body into its actual value."""
    out = []
    i = 0
    while i < len(raw):
        ch = raw[i]
        if ch == "\\" and i + 1 < len(raw):
            nxt = raw[i + 1]
            mapping = {
                "n": "\n",
                "t": "\t",
                "r": "\r",
                "\\": "\\",
                "$": "$",
            }
            if nxt == quote:
                out.append(quote)
            elif nxt in mapping:
                out.append(mapping[nxt])
            else:
                # Unknown escape — keep the backslash + char verbatim.
                out.append("\\" + nxt)
            i += 2
        else:
            out.append(ch)
            i += 1
    return "".join(out)


def extract_string_literals(args_text: str) -> List[str]:
    """Pull consecutive leading string literals out of an arguments string.

    Handles simple concatenation: 'foo' . 'bar' is collapsed into 'foobar'.
    Stops at the first non-string, non-concatenation token (variables,
    function calls, etc.).
    """
    literals: List[str] = []
    pos = 0
    expecting_concat = False
    while pos < len(args_text):
        # Skip whitespace.
        while pos < len(args_text) and args_text[pos] in " \t\r\n":
            pos += 1
        if pos >= len(args_text):
            break
        ch = args_text[pos]
        if ch in ("'", '"'):
            m = STRING_RE.match(args_text, pos)
            if not m:
                break
            quote = m.group(1)
            body = m.group(2)
            literals.append(decode_php_string(body, quote))
            pos = m.end()
            expecting_concat = True
            continue
        if ch == "." and expecting_concat:
            pos += 1
            expecting_concat = False
            continue
        # Anything else (variable, number, function call) ends extraction.
        break
    return literals


def parse_call_arguments(source: str, open_paren_index: int) -> str:
    """Given source and the index of '(', return the text up to the
    matching ')'. Handles nested parentheses and string literals."""
    depth = 0
    i = open_paren_index
    in_string = False
    string_quote = ""
    while i < len(source):
        ch = source[i]
        if in_string:
            if ch == "\\":
                i += 2
                continue
            if ch == string_quote:
                in_string = False
                string_quote = ""
            i += 1
            continue
        if ch in ("'", '"'):
            in_string = True
            string_quote = ch
            i += 1
            continue
        if ch == "(":
            depth += 1
        elif ch == ")":
            depth -= 1
            if depth == 0:
                return source[open_paren_index + 1 : i]
        i += 1
    return source[open_paren_index + 1 :]


def scan_file(path: str, rel_path: str, catalogue: Dict[Tuple[str, str, str], List[str]]):
    """Scan a single PHP file for i18n calls and record references."""
    try:
        with open(path, "r", encoding="utf-8") as fh:
            source = fh.read()
    except (OSError, UnicodeDecodeError):
        return

    for match in FUNC_RE.finditer(source):
        func = match.group(1)
        open_paren = source.find("(", match.end() - 1)
        if open_paren == -1:
            continue
        args_text = parse_call_arguments(source, open_paren)
        literals = extract_string_literals(args_text)

        if func in SINGLE_ARG_FUNCS:
            if len(literals) >= 1:
                key = ("single", literals[0], "")
                catalogue.setdefault(key, []).append(rel_path)
        elif func in CONTEXT_FUNCS:
            if len(literals) >= 2:
                key = ("context", literals[0], literals[1])
                catalogue.setdefault(key, []).append(rel_path)
        elif func in PLURAL_FUNCS:
            if len(literals) >= 2:
                key = ("plural", literals[0], literals[1])
                catalogue.setdefault(key, []).append(rel_path)
        elif func in PLURAL_CONTEXT_FUNCS:
            if len(literals) >= 3:
                key = ("plural_context", literals[0], literals[1] + "\x00" + literals[2])
                catalogue.setdefault(key, []).append(rel_path)
        elif func in NOOP_FUNCS:
            if len(literals) >= 2:
                key = ("plural", literals[0], literals[1])
                catalogue.setdefault(key, []).append(rel_path)


def collect_php_files(root: str):
    for dirpath, dirnames, filenames in os.walk(root):
        # Prune excluded directories in place so os.walk skips them.
        dirnames[:] = [d for d in dirnames if d not in EXCLUDE_DIRS]
        for name in filenames:
            if name.endswith(INCLUDE_EXTENSIONS):
                full = os.path.join(dirpath, name)
                rel = os.path.relpath(full, root)
                yield full, rel


def escape_pot(value: str) -> str:
    """Escape a string for the .pot msgid/msgstr format."""
    out = []
    for ch in value:
        if ch == "\\":
            out.append("\\\\")
        elif ch == '"':
            out.append('\\"')
        elif ch == "\n":
            out.append("\\n")
        elif ch == "\t":
            out.append("\\t")
        elif ch == "\r":
            out.append("\\r")
        else:
            out.append(ch)
    return "".join(out)


def write_pot(catalogue: Dict, out_path: str, root: str) -> int:
    now = datetime.now(timezone.utc).strftime("%Y-%m-%d %H:%M:%S UTC")
    lines: List[str] = []
    lines.append("# GoDevs Portfolio WordPress Theme")
    lines.append("# Copyright (C) 2026 GoDevs")
    lines.append("# This file is distributed under the GNU General Public License v2 or later.")
    lines.append(f"# Generated: {now}")
    lines.append("#")
    lines.append('msgid ""')
    lines.append('msgstr ""')
    lines.append(f'"Project-Id-Version: GoDevs Portfolio {THEME_VERSION}\\n"')
    lines.append(f'"Report-Msgid-Bugs-To: {REPORT_BUGS_TO}\\n"')
    lines.append('"POT-Creation-Date: 2026-09-16T00:00:00+00:00\\n"')
    lines.append('"MIME-Version: 1.0\\n"')
    lines.append('"Content-Type: text/plain; charset=UTF-8\\n"')
    lines.append('"Content-Transfer-Encoding: 8bit\\n"')
    lines.append(f'"X-Generator: {GENERATOR_NAME}\\n"')
    lines.append('"Language-Team: LANGUAGE <LL@li.org>\\n"')
    lines.append('"Last-Translator: Full Name <email@example.com>\\n"')
    lines.append('"Language: \\n"')
    lines.append('"Plural-Forms: nplurals=2; plural=(n != 1);\\n"')
    lines.append("")
    lines.append("#: (auto-generated — do not edit by hand)")
    lines.append("")

    # Deterministic ordering: by msgid text, then context.
    def sort_key(item):
        (kind, msgid, extra), _ = item
        return (msgid, extra, kind)

    count = 0
    for (kind, msgid, extra), refs in sorted(catalogue.items(), key=sort_key):
        # De-duplicate references per entry, preserving first-seen order.
        seen = []
        for r in refs:
            if r not in seen:
                seen.append(r)
        for ref in seen:
            lines.append(f"#: {ref}")
        if kind == "single":
            lines.append(f'msgid "{escape_pot(msgid)}"')
            lines.append('msgstr ""')
        elif kind == "context":
            lines.append(f'msgctxt "{escape_pot(extra)}"')
            lines.append(f'msgid "{escape_pot(msgid)}"')
            lines.append('msgstr ""')
        elif kind == "plural":
            plural = extra
            lines.append(f'msgid "{escape_pot(msgid)}"')
            lines.append(f'msgid_plural "{escape_pot(plural)}"')
            lines.append('msgstr[0] ""')
            lines.append('msgstr[1] ""')
        elif kind == "plural_context":
            plural, context = extra.split("\x00", 1)
            lines.append(f'msgctxt "{escape_pot(context)}"')
            lines.append(f'msgid "{escape_pot(msgid)}"')
            lines.append(f'msgid_plural "{escape_pot(plural)}"')
            lines.append('msgstr[0] ""')
            lines.append('msgstr[1] ""')
        lines.append("")
        count += 1

    with open(out_path, "w", encoding="utf-8") as fh:
        fh.write("\n".join(lines) + "\n")
    return count


def main() -> int:
    root = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))
    out_path = os.path.join(root, "languages", f"{THEME_SLUG}.pot")

    catalogue: Dict[Tuple[str, str, str], List[str]] = {}
    file_count = 0
    for full, rel in collect_php_files(root):
        scan_file(full, rel, catalogue)
        file_count += 1

    os.makedirs(os.path.dirname(out_path), exist_ok=True)
    count = write_pot(catalogue, out_path, root)

    print(f"Scanned {file_count} PHP files.")
    print(f"Extracted {count} unique translatable strings.")
    print(f"Wrote: {out_path}")
    return 0


if __name__ == "__main__":
    sys.exit(main())
