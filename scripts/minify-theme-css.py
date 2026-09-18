#!/usr/bin/env python3
"""
GoDevs Portfolio - CSS minifier (P1.12)

Lightweight regex-based minifier for assets/css/theme.css.

Strategy:
  1. Extract the leading comment block (license/header) and preserve it.
  2. Remove all subsequent /* ... */ CSS comments.
  3. Protect quoted strings ("..." and '...') and url(...) calls by
     substituting them with NUL-delimited placeholders, so the inner
     content (spaces, commas, colons, parens) is not mangled by the
     later whitespace passes.
  4. Remove whitespace around { } ; , (selectors + declaration
     separators).
  5. Remove whitespace AFTER `:` only (preserves the descendant
     combinator + pseudo-class pattern like `.parent :hover`).
  6. Collapse runs of whitespace into a single space.
  7. Strip trailing `;` immediately before `}`.
  8. Strip empty rules defensively (none exist in source, but the
     pass keeps the file clean after future edits).
  9. Restore the placeholders.

Usage: python3 minify-theme-css.py <in.css> <out.css>
"""

import re
import sys


def minify_css(css: str) -> str:
    # 1. Preserve the leading header comment.
    header_match = re.match(r'^\s*/\*.*?\*/', css, re.DOTALL)
    header = header_match.group(0) if header_match else ''
    body = css[len(header):] if header else css

    # 2. Remove all other /* ... */ comments.
    body = re.sub(r'/\*.*?\*/', '', body, flags=re.DOTALL)

    # 3. Protect strings + url() with placeholders.
    placeholders: list[str] = []

    def stash(match: 're.Match[str]') -> str:
        placeholders.append(match.group(0))
        return f"\x00PH{len(placeholders) - 1}\x00"

    # url(...) - quoted or unquoted, no nested parens (rare in practice).
    body = re.sub(r'url\(\s*(?:"[^"]*"|\'[^\']*\'|[^)]*)\s*\)', stash, body)
    # Double-quoted strings.
    body = re.sub(r'"[^"]*"', stash, body)
    # Single-quoted strings.
    body = re.sub(r"'[^']*'", stash, body)

    # 4. Strip whitespace around { } ; ,
    body = re.sub(r'\s*([{};,])\s*', r'\1', body)

    # 5. Strip whitespace AFTER `:` only (NOT before) - preserves the
    #    descendant-combinator + pseudo-class pattern (e.g. `.parent :hover`
    #    and `> :first-child`).
    body = re.sub(r':\s+', ':', body)

    # 6. Collapse runs of whitespace to a single space.
    body = re.sub(r'\s+', ' ', body)

    # 7. Remove trailing `;` before `}`.
    body = re.sub(r';+}', '}', body)

    # 8. Remove empty rules defensively (loop for nested cases).
    prev = None
    while prev != body:
        prev = body
        # Match a selector that does NOT contain `@` or `/` (so we don't
        # accidentally eat @media or /* */ boundaries), followed by `{ }`.
        body = re.sub(r'(?:^|(?<=[\s}>+~,(]))[^{};@/]*\{\s*\}', '', body)

    # 9. Restore placeholders.
    def unstash(match: 're.Match[str]') -> str:
        idx = int(match.group(1))
        return placeholders[idx]

    body = re.sub(r'\x00PH(\d+)\x00', unstash, body)

    # 10. Combine header + body, trimmed.
    header_clean = header.strip()
    body_clean = body.strip()
    if header_clean and body_clean:
        return header_clean + '\n' + body_clean
    return header_clean + body_clean


def main() -> None:
    if len(sys.argv) != 3:
        print('Usage: minify-theme-css.py <in.css> <out.css>', file=sys.stderr)
        sys.exit(1)

    with open(sys.argv[1], 'r', encoding='utf-8') as f:
        css = f.read()

    minified = minify_css(css)

    with open(sys.argv[2], 'w', encoding='utf-8') as f:
        f.write(minified)
        f.write('\n')  # trailing newline - POSIX-friendly

    orig_size = len(css.encode('utf-8'))
    mini_size = len(minified.encode('utf-8'))
    reduction = 100 * (1 - mini_size / orig_size) if orig_size else 0

    # Sanity: open/close brace counts must match.
    # We compare the minified brace counts against the brace counts of
    # the original CSS with comments stripped - braces inside /* */
    # comments are text, not CSS, so they should not appear in the
    # minified output.
    css_no_comments = re.sub(r'/\*.*?\*/', '', css, flags=re.DOTALL)
    ref_open = css_no_comments.count('{')
    ref_close = css_no_comments.count('}')
    mini_open = minified.count('{')
    mini_close = minified.count('}')

    print(f'Original:  {orig_size:>8} bytes  ({ref_open} open / {ref_close} close braces, excl. comments)')
    print(f'Minified:  {mini_size:>8} bytes  ({mini_open} open / {mini_close} close braces)')
    print(f'Reduction: {reduction:.2f}%')

    if ref_open != ref_close or mini_open != mini_close:
        print('!! WARNING: brace mismatch detected', file=sys.stderr)
        sys.exit(2)
    if mini_open != ref_open:
        print('!! WARNING: minified brace count differs from original', file=sys.stderr)
        sys.exit(2)


if __name__ == '__main__':
    main()
