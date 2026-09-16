# GoDevs Portfolio — Security

**Document version:** 1.5.0

Security is a feature. This document describes the actual security
model of the GoDevs Portfolio theme as it ships in v1.5.0.

> Note: earlier drafts of this document claimed "The theme is
> presentation-only — it processes no user input, stores no data, and
> exposes no admin UI." That was true of a much earlier prototype. It
> is **not** true of v1.5.0. This rewrite reflects the real shipping
> code.

---

## 1. What the theme actually does

v1.5.0 is an application-grade block theme. It:

- **Accepts user input** — the booking form (`[godevs_booking_form]`),
  the project-proposal form (`[godevs_proposal_form]`), the Theme
  Settings dashboard, the Header/Footer Builder, and the Demo Importer
  all accept and process user input.
- **Stores data** — 75+ option rows in `wp_options`, ~40 post-meta
  keys across 7 CPTs, 3 user-meta keys (notice dismissal + applied
  style tracking), and transients for rate-limiting and import
  concurrency control.
- **Exposes admin UI** — 7+ admin surfaces (GoDevs Settings, Content
  Manager, GoDevs Demos, Header/Footer Builder, onboarding notices,
  booking admin notices, diagnostic notice).
- **Handles AJAX** — 20 AJAX endpoints, all nonce-verified and
  capability-checked.

That is a significantly larger attack surface than a presentation-only
theme. The sections below document how each part is defended.

---

## 2. Security principles

1. **Escape at output, sanitize at input.** Never trust data — even
   data from WordPress core.
2. **Nonce every state-changing request.** Every AJAX endpoint and
   every form-meta save handler verifies a nonce before doing
   anything.
3. **Capability-check every privileged action.** Admin actions require
   `manage_options`; content edits require `edit_post` / `edit_posts`
   scoped to the post being edited.
4. **Sanitize every setting with its own callback.** Colors go through
   `godevs_portfolio_sanitize_hex_color`, numeric values through
   `absint`, URLs through `godevs_portfolio_sanitize_url`, everything
   else through `sanitize_text_field`. The mapping lives in
   `inc/theme-settings.php`.
5. **Escape every output.** `esc_html`, `esc_attr`, `esc_url`,
   `esc_textarea`, `wp_kses_post` are used throughout; no `echo` of
   raw user data.
6. **No inline JavaScript.** All JS lives in `assets/js/*.js` and is
   enqueued. Inline `onclick`, `onsubmit`, and `<script>` blocks were
   removed in P1.16.
7. **No `eval()`, no `exec()`, no shell commands.**
8. **Direct DB writes are exceptional and documented.** The demo
   importer uses `$wpdb->update()` in three places — see §8.

---

## 3. Input surface

### 3.1 Front-end forms

| Form | Shortcode | Handler | Stores |
|---|---|---|---|
| Booking | `[godevs_booking_form]` | `godevs_ajax_submit_booking()` | private `godevs_booking` post + meta |
| Proposal | `[godevs_proposal_form]` | `godevs_ajax_submit_proposal()` | private `godevs_proposal` post + meta + admin email |

Both handlers:

1. Verify a nonce (`godevs_booking_form` / `godevs_proposal_form`).
2. Run a honeypot check on the proposal form (the `godevs_hp` field —
   bots that fill it are rejected with HTTP 400).
3. Run an IP-based rate limit on the proposal form (≤ 5 submissions
   per IP per hour, enforced via a transient keyed
   `godevs_proposal_rl_<md5(ip)>` with a 1-hour TTL).
4. Sanitize every field with the appropriate WordPress function:
   `sanitize_text_field` for short text, `sanitize_email` for emails,
   `esc_url_raw` for URLs, `absint` for integers, and
   `sanitize_textarea_field` for the free-text message.
5. Validate required fields (`name`, `email`, `type`, `message`) and
   reject with a localized error message if missing.
6. Validate the email with `is_email()` and the URL with
   `wp_http_validate_url()`.
7. Insert the post as `private` (admin-only visibility) with
   `wp_insert_post()`.
8. Send an admin notification email via `wp_mail()` (non-fatal if no
   mail server is configured — the submission is still stored).

### 3.2 Theme Settings dashboard

`inc/theme-settings.php` registers 75 settings under the
`godevs_portfolio_settings_group` option group. Every setting is
registered via `register_setting()` with its own sanitization callback:

```php
$sanitize_map = array(
    'accent_color'     => 'godevs_portfolio_sanitize_hex_color',
    'accent_hover'     => 'godevs_portfolio_sanitize_hex_color',
    'surface_color'    => 'godevs_portfolio_sanitize_hex_color',
    'background_color' => 'godevs_portfolio_sanitize_hex_color',
    'text_color'       => 'godevs_portfolio_sanitize_hex_color',
    'muted_color'      => 'godevs_portfolio_sanitize_hex_color',
    'header_cta_link'  => 'godevs_portfolio_sanitize_url',
    'container_width'  => 'absint',
    'content_width'    => 'absint',
    'card_radius'      => 'absint',
    'button_radius'    => 'absint',
);
foreach ( $defaults as $key => $val ) {
    $sanitize = $sanitize_map[ $key ] ?? 'sanitize_text_field';
    register_setting( 'godevs_portfolio_settings_group', 'godevs_portfolio_' . $key, array(
        'type'              => 'string',
        'sanitize_callback' => $sanitize,
    ) );
}
```

The AJAX save handler (`godevs_portfolio_ajax_save_settings()`)
re-validates colors and URLs a second time, defensively, before
writing — so even a crafted request that bypasses the Settings API
sanitization cannot inject an invalid color or URL into the dynamic CSS.

### 3.3 Header/Footer Builder

The HF Builder accepts layout JSON via 6 AJAX endpoints
(`save_layout`, `delete_layout`, `set_active`, `get_layouts`,
`render_preview`, `get_miniatures`). Every endpoint verifies the
`godevs_settings_save` nonce and requires `manage_options`. Layout
data is validated as an array of rows → columns → elements before
being stored as a theme mod.

### 3.4 Demo Importer

The importer accepts a demo slug via 6 AJAX endpoints (`import_demo`,
`remove_demo`, `get_import_details`, `preview_demo`,
`get_demo_pages`, `preview_demo_page`). Every endpoint verifies the
`godevs_demo_admin` nonce and requires `manage_options`. The demo slug
is validated against the canonical registry in `inc/demo-registry.php`
before any import work begins.

---

## 4. Stored data inventory

### 4.1 wp_options

| Option key | Purpose | Written by |
|---|---|---|
| `godevs_portfolio_settings` | Legacy combined-array option (back-compat) | `godevs_portfolio_seed_default_settings()` |
| `godevs_portfolio_<key>` (×75) | Per-setting rows | Settings API + AJAX save |
| `godevs_portfolio_dynamic_css` | Cached compiled CSS string | `godevs_portfolio_generate_dynamic_css()` |
| `theme_mods_*` | HF-builder active layouts, nav menu locations | `set_theme_mod()` |

### 4.2 Post meta (~40 keys across 7 CPTs)

Each CPT carries a namespaced meta prefix:

| CPT | Prefix | Keys |
|---|---|---|
| `godevs_project` | `_godevs_project_` | client, url, date, duration, location, role, status, featured (8) |
| `godevs_service` | `_godevs_service_` | icon, price, duration, featured, cta_label, cta_url (6) |
| `godevs_team` | `_godevs_team_` | job_title, email, phone, location, website, linkedin, twitter, facebook, instagram, featured (10) |
| `godevs_testimonial` | `_godevs_testimonial_` | client_name, client_role, company, rating, featured (5) |
| `godevs_experience` | `_godevs_experience_` | company, position, start, end, location, current (6) |
| `godevs_education` | `_godevs_education_` | institution, degree, field, start, end, location (6) |
| `godevs_case_study` | `_godevs_cs_` | client, year, industry, role, status, featured (6) |

Every meta key is registered via `register_post_meta()` with an
`auth_callback` of `current_user_can('edit_post', $object_id)` (or
`manage_options` for site-wide keys), and saved by a nonce-gated
`save_post` handler.

### 4.3 User meta

| Key | Purpose |
|---|---|
| `godevs_portfolio_welcome_dismissed` | Suppress the first-run onboarding notice |
| `godevs_portfolio_diag_dismissed` | Suppress the diagnostic admin notice |
| `godevs-portfolio-applied-style` | Remember which demo's style variation the user applied |

### 4.4 Transients

| Key | Purpose | TTL |
|---|---|---|
| `godevs_proposal_rl_<md5(ip)>` | Proposal-form rate limit (5/IP/hour) | `HOUR_IN_SECONDS` |
| `godevs_import_lock` | Demo-importer concurrency (one import at a time) | 60s |
| `godevs_hf_preview_layouts` | HF-builder preview cache | 60s |
| `godevs_portfolio_just_imported` | Drives the post-import onboarding notice | 5 min |
| `godevs_portfolio_just_imported_home` | Homepage ID for the post-import notice | 5 min |
| `godevs_portfolio_activation_redirect` | One-shot activation redirect to onboarding | 5 min |

---

## 5. Output escaping

### 5.1 Translation functions

All translatable strings use escaping-aware translation functions:

```php
esc_html__('Read more', 'godevs-portfolio')     // HTML body
esc_attr__('Search', 'godevs-portfolio')          // attribute value
esc_url__('https://example.com', 'godevs-portfolio') // hardcoded URL
wp_kses(__('By continuing… <a href="/terms">Terms</a>.', 'godevs-portfolio'), $allowed)
```

### 5.2 Dynamic output

Every dynamic value in `functions.php` and `inc/*.php` is escaped at
output: `esc_url()` for URLs (font preload, asset URIs, demo links),
`esc_attr()` for HTML attributes, `esc_html()` for user-visible text,
`wp_kses_post()` for the rare cases where a controlled subset of HTML
is allowed (e.g. the meta-summary line in the Content Manager).

No `echo` of unescaped user data anywhere in the theme.

### 5.3 The `phpcs:ignore` annotations

A small number of `phpcs:ignore WordPress.Security.EscapeOutput` and
`phpcs:disable WordPress.Security.NonceVerification.Recommended`
annotations exist. Each one is justified inline and falls into one of
two categories:

- **Core function returns safe HTML** — e.g.
  `get_the_post_thumbnail()`, `paginate_links()`, `wp_kses_post()` of
  a known-safe summary string built from already-escaped fragments.
- **Nonce already verified above** — the annotation sits below a
  `check_ajax_referer()` call so the nonce is verified; the annotation
  suppresses the redundant `$_POST` access warning.

---

## 6. Nonces

Every state-changing request carries a nonce. The nonce actions used
in the theme:

| Nonce action | Used by |
|---|---|
| `godevs_diag_dismiss` | Diagnostic notice dismissal |
| `godevs_settings_save` | Theme Settings save + every HF-builder endpoint |
| `godevs_demo_admin` | Every demo-importer endpoint |
| `godevs_booking_form` | Booking form submission |
| `godevs_proposal_form` | Proposal form submission |
| `godevs_proposal_status_save` | Proposal status workflow change |
| `godevs_render_demo_page` | Demo preview iframe render |
| `godevs_onboarding_dismiss` | Welcome notice dismissal |
| `godevs_onboarding_dismiss_imported` | Post-import notice dismissal |
| `godevs_hf_layout_meta` | HF-builder layout meta save |
| `godevs_booking_meta` | Booking post meta save |
| `godevs_cs_meta_save` | Case-study post meta save |

Nonces are verified with `check_ajax_referer()` (AJAX endpoints) or
`wp_verify_nonce()` (form-meta save handlers). A failed nonce check
calls `wp_send_json_error()` (AJAX) or `wp_die()` (form handler) and
aborts the request.

---

## 7. Capability checks

| Capability | Required for |
|---|---|
| `manage_options` | Theme Settings save/reset, every HF-builder endpoint, every demo-importer endpoint, onboarding dismissals, Content Manager access, diagnostic notice |
| `edit_posts` | Demo preview render |
| `edit_post` (scoped) | Saving post meta for a specific post (booking, case study, project, etc.) |

Every AJAX handler and every `save_post` meta handler begins with a
capability check. A failed check returns HTTP 403
(`wp_send_json_error(..., 403)`) or `wp_die()`.

---

## 8. Direct database writes (`$wpdb->update()`)

The demo importer makes three direct `$wpdb->update()` calls against
`$wpdb->posts` (in `inc/demo-importer.php`, ~lines 985, 1002, 1072).
This is deliberate and documented in the code:

> The importer writes the user global-styles JSON (the custom Styles
> post that backs the active style variation) directly to the
> `wp_posts` table via `$wpdb->update()`. Going through `wp_insert_post()`
> or `wp_update_post()` instead would run WordPress's `wp_unslash()`
> pipeline over `post_content`, which strips the backslashes from
> escaped quotes inside CSS `font-family` stacks (e.g.
> `"Inter", sans-serif`). The resulting invalid JSON makes WordPress
> reject the variation and print repeated
> `WP_Theme_JSON_Resolver` notices on the front end.

`$wpdb->update()` performs parameter binding internally (it builds a
prepared statement from the `$data` and `$where` arrays), so the write
is SQL-injection-safe. The values written are validated before the
call (the demo slug is checked against the registry; the post ID is
cast to `(int)`).

This is the **only** direct database write in the theme. Every other
read/write goes through the WordPress core APIs (`WP_Query`,
`get_posts()`, `wp_insert_post()`, `update_option()`,
`update_post_meta()`, `update_user_meta()`, `set_transient()`).

---

## 9. File operations

### 9.1 Read via `WP_Filesystem` (P1.5 fix)

Pattern files under `patterns/demos/*.php` are read for the demo
preview iframe via the WordPress `WP_Filesystem` abstraction (not
`file_get_contents()` directly). This was the P1.5 fix for the
WordPress.org Theme Review requirement that all filesystem access go
through the WP_Filesystem API.

`file_exists()` is used (via `get_template_directory()`) for
existence checks before enqueuing assets — this is permitted by the
guidelines because no file contents are read.

### 9.2 No file writes

The theme never writes to the filesystem. No `file_put_contents()`,
no logging to disk. The dynamic CSS is stored in `wp_options`, not in
a `.css` file.

### 9.3 No include of user files

The theme never `include`s or `require`s a file based on user input.
The `inc/*.php` loader in `functions.php` iterates a hard-coded array
of relative paths.

---

## 10. Remote requests

The theme makes **no outbound HTTP requests**. No `wp_remote_get()`,
no `wp_remote_post()`, no `curl`, no phone-home telemetry, no update
checks (handled by WordPress.org), no external font/image CDN.

The only outbound communication is `wp_mail()` on proposal
submission — and that is a WordPress core API call to the local mail
transport, not an HTTP request to a third party.

---

## 11. JavaScript security

### 11.1 No inline JS (P1.16 fix)

Inline event handlers (`onclick`, `onsubmit`, `onload`, …) and inline
`<script>` blocks were removed in P1.16. Every JS interaction is
attached via `addEventListener()` in one of the 8 external scripts:

| Script | Purpose |
|---|---|
| `assets/js/reveal.js` | Front-end scroll-reveal + header scroll shadow |
| `assets/js/hf-frontend.js` | Mobile menu toggle, sticky scroll, newsletter form default-prevention |
| `assets/js/front-forms.js` | Booking + proposal form AJAX submission |
| `assets/js/admin-settings.js` | Theme Settings dashboard AJAX save |
| `assets/js/admin-hf-builder.js` | Header/Footer Builder admin UI |
| `assets/js/admin-demos.js` | Demo importer admin UI + progress overlay |
| `assets/js/admin-cpt-manager.js` | Delegated `data-confirm` confirmation dialogs |
| `assets/js/admin-diag.js` | Diagnostic notice dismissal |

### 11.2 No `eval()`, no `Function()`

Forbidden in theme JS. No `document.write()`. No `innerHTML` with
user-provided content (the admin-demos progress overlay updates
`textContent` and class lists, never raw HTML from the server).

### 11.3 Localized data, not inline strings

AJAX URLs and nonces are passed from PHP to JS via
`wp_localize_script()` (the `GODEVS_DIAG`, `GODEVS_HF`, and demo-admin
globals), not via inline `<?php echo ?>` inside `<script>` blocks.

---

## 12. CSP compatibility

The theme is compatible with strict Content-Security-Policy headers:

- No inline scripts → `script-src 'self'` works (P1.16 fix completed
  the last gap: the diagnostic notice's inline dismiss script).
- No external font/image CDN → `font-src 'self'`, `img-src 'self'`
  work.
- The dynamic CSS emitted at `wp_head` priority 11 is an inline
  `<style>` block, which requires `style-src 'self' 'unsafe-inline'`
  or a nonce. This matches WordPress core's own behavior (the style
  engine emits inline styles), so it does not add a new requirement.

---

## 13. Common vulnerabilities and mitigations

| Class | Mitigation |
|---|---|
| XSS | Every output escaped (`esc_html`, `esc_attr`, `esc_url`, `wp_kses_post`); no `echo` of raw user data; templates use core blocks which escape internally |
| CSRF | Every state-changing request carries a nonce; `check_ajax_referer()` / `wp_verify_nonce()` on every endpoint and form-meta handler |
| SQL injection | No raw SQL anywhere; the 3 `$wpdb->update()` calls use parameter binding; all other queries via `WP_Query` / `get_posts()` / `wp_insert_post()` which prepare internally |
| Brute-force form abuse | Proposal form rate-limited to 5/IP/hour via a transient; honeypot field rejects bots |
| Privilege escalation | Every AJAX endpoint and meta-save handler checks `manage_options` / `edit_post` / `edit_posts` before acting |
| File inclusion | The `inc/` loader iterates a hard-coded array; no user input reaches `require`/`include` |
| SSRF | No outbound HTTP requests |
| Information disclosure | No `display_errors` / `error_reporting` overrides; no `var_dump`/`print_r` in production code |
| Open redirect | No redirect functions based on user input |

---

## 14. Third-party dependencies

The user-facing theme has **zero** third-party PHP dependencies and
**zero** third-party JS dependencies in production. The only bundled
assets are the Inter and Newsreader webfonts (OFL-licensed). No
jQuery dependency on the front-end (the scripts are vanilla JS,
deferred).

Development-only helpers (`scripts/generate-pot.py`,
`scripts/minify-theme-css.py`) are Python 3 standard-library-only and
are not shipped to the production server.

---

## 15. Security audit checklist

Before every release:

### PHP
- [ ] All output uses escaping functions
- [ ] All translations use escaping-aware functions (`esc_html__`, `esc_attr__`, …)
- [ ] No `echo` of unescaped user data
- [ ] No `eval()`, `exec()`, `system()`, `passthru()`
- [ ] File reads go through `WP_Filesystem` (P1.5)
- [ ] No `include` / `require` with user input
- [ ] The only `$wpdb` direct writes are the 3 documented `$wpdb->update()` calls in `demo-importer.php`
- [ ] No `unserialize()` with user input
- [ ] No `preg_replace()` with `/e` modifier

### AJAX
- [ ] Every `wp_ajax_*` handler calls `check_ajax_referer()` first
- [ ] Every handler checks `current_user_can()` before acting
- [ ] Every `$_POST` / `$_GET` field is sanitized before use
- [ ] Every response is JSON via `wp_send_json_success()` / `wp_send_json_error()`

### JavaScript
- [ ] No inline JS in any PHP or HTML (P1.16)
- [ ] No `eval()`, `Function()`, `document.write()`
- [ ] AJAX URLs + nonces via `wp_localize_script()`, not inline `<?php ?>`

### Forms
- [ ] Nonce field on every form
- [ ] Honeypot on public forms
- [ ] Rate limiting on public forms
- [ ] `sanitize_*` on every field
- [ ] Required-field + format validation before storage

### Configuration
- [ ] Every `register_setting()` has a `sanitize_callback`
- [ ] No `add_menu_page()` / `add_theme_page()` without a capability check in the callback

---

## 16. Responsible disclosure

Found a security issue? Please report it privately to
**security@godevs.net** before opening a public issue. We acknowledge
reports within 48 hours and aim to ship a fix within 7 days for
critical issues.

Do not attempt to exploit the issue on production sites; demo sites at
https://godevs.net/ are available for responsible testing.
