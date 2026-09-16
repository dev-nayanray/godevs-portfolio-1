# GoDevs Portfolio — Architecture

**Document version:** 1.5.0
**Phase:** Shipping product

This document describes the actual architecture of the GoDevs Portfolio block theme as it ships in v1.5.0. It is the authoritative reference for where new files belong and how the pieces fit together.

> Note: earlier drafts of this document described a "Phase 1 — Foundation" theme with no CPTs, no settings pages, and a tiny 3-file `inc/` directory. None of that is true of v1.5.0. This rewrite reflects the real shipping code.

---

## 1. What the theme actually is

GoDevs Portfolio is a **block theme** that also ships a substantial PHP application layer:

- `theme.json` for design tokens and global styles (the FSE side).
- 32 HTML templates + 44 HTML parts for layout.
- 146 block patterns (73 generic + 73 demo inner-pages).
- 21 style variations.
- A 19-file `inc/` application layer that registers 9 custom post types, 8 custom taxonomies, 2 shortcodes, 7+ admin pages, 20 AJAX endpoints, a 75-setting theme dashboard, a header/footer builder, a one-click demo importer, a booking system, and a proposal-inquiry system.

The application layer is what makes the theme a usable product out of the box. It is also what blocks WordPress.org submission (see §9 and [`WORDPRESS-ORG-COMPLIANCE.md`](WORDPRESS-ORG-COMPLIANCE.md)).

### 1.1 Block-theme side

- `theme.json` is the single source of truth for design tokens (palette, typography, spacing, layout, radii, shadows, per-block overrides).
- HTML files (block markup) for templates and template parts.
- PHP only where WordPress requires it (`functions.php`, pattern registration, `style.css` header).
- The Site Editor is the primary customization surface for layout.

### 1.2 Application side

- 9 CPTs and 8 taxonomies registered in `inc/content/`.
- Theme Settings dashboard at `inc/theme-settings.php` (75 settings, AJAX save, per-key sanitization).
- Header/Footer Builder at `inc/header-footer-builder.php` (custom layout CRUD + 6 AJAX endpoints).
- Demo Importer at `inc/demo-importer.php` (one-click import/remove + 6 AJAX endpoints).
- Booking + Proposal front-end forms at `inc/front-forms.php` (2 shortcodes + 2 AJAX endpoints + rate limiting + honeypot).

### 1.3 What it is NOT

- It is **not** a classic theme. No `header.php`, `sidebar.php`, or PHP-rendered templates.
- It is **not** plugin-free in spirit. It deliberately ships plugin-territory features inside the theme so a single ZIP gives the user a working product. The plan is to extract that surface into the **GoDevs Core** companion plugin (Phase 2 of the v1.5.0 roadmap — see §9).

---

## 2. functions.php bootstrap

`functions.php` is intentionally small (~645 lines, mostly because of the diagnostic notice). Its job is:

1. Define `GODEVS_PORTFOLIO_VERSION` (`1.5.0`).
2. Register theme supports and image sizes on `after_setup_theme`.
3. Enqueue front-end styles + the `reveal.js` script on `wp_enqueue_scripts`.
4. Preload above-the-fold fonts on `wp_head` priority 1.
5. Render the diagnostic admin notice on `admin_notices` + enqueue its dismiss script on `admin_enqueue_scripts`.
6. Seed default settings on `after_switch_theme`.
7. **Load every `inc/*.php` component** via a guarded `require_once` loop.

### 2.1 The inc/ loader loop

```php
$_godevs_inc   = get_template_directory() . '/inc';
$_godevs_files = array(
    '/block-patterns.php',
    '/block-styles.php',
    '/content/cpt.php',
    '/content/taxonomies.php',
    '/content/meta-fields.php',
    '/content/case-study.php',
    '/booking-system.php',
    '/front-forms.php',
    '/settings-integration.php',
    '/demo-registry.php',
    '/demo-tracker.php',
    '/demo-renderer.php',
    '/cpt-archives.php',
    '/cpt-admin.php',
    '/theme-settings.php',
    '/demo-importer.php',
    '/header-footer-builder.php',
    '/settings-deadend-fixes.php',
    '/onboarding.php',
    '/seo.php',
);

foreach ( $_godevs_files as $_godevs_rel ) {
    $_godevs_full = $_godevs_inc . $_godevs_rel;
    if ( file_exists( $_godevs_full ) ) {
        require_once $_godevs_full;
        $GLOBALS['godevs_portfolio_loaded_files'][ $_godevs_rel ] = true;
    } else {
        $GLOBALS['godevs_portfolio_loaded_files'][ $_godevs_rel ] = false;
    }
}
```

That is **20 file entries** (`seo.php` is included but `inc/content/` ships 4 files, so 19 distinct `inc/` modules plus 4 content modules — see §3). Every file is loaded unconditionally on every request (front-end and admin), because:

- `is_admin()` is not reliably true at the moment `functions.php` loads (it can return false on multisite, rewritten admin URLs, or when a security plugin rewrites the admin path).
- Each admin-only module registers its hooks via `admin_menu` / `admin_init`, which only fire on admin requests — so the callbacks are never executed on the front-end even though the file is loaded.
- Each `require_once` is guarded by `file_exists()` so a missing file degrades gracefully instead of white-screening.

Load status is recorded in `$GLOBALS['godevs_portfolio_loaded_files']` and surfaced in the diagnostic admin notice (see §7).

---

## 3. The inc/ directory (real structure)

```
inc/
├── block-patterns.php              Pattern categories + registration
├── block-styles.php                Custom block style variations
├── theme-settings.php              Settings dashboard (75 settings) + Settings API + 2 AJAX
├── settings-integration.php        Settings → generate_dynamic_css() bridge
├── settings-deadend-fixes.php     Back-compat fixes for stale settings option shapes
├── header-footer-builder.php       HF layout builder + 6 AJAX + front-end enqueue
├── demo-importer.php               One-click demo import/remove + 6 AJAX
├── demo-registry.php                Demo metadata + page-set mapping + preview nonces
├── demo-renderer.php                Demo preview iframe renderer + 1 AJAX
├── demo-tracker.php                 Track imported demo pages for clean removal
├── onboarding.php                   First-run welcome notice + post-import notice + 2 AJAX
├── cpt-archives.php                 CPT archive layout/columns settings
├── cpt-admin.php                    Content Manager admin page (appearance_page_...)
├── booking-system.php               Booking CPT meta box + admin notices
├── front-forms.php                  [godevs_booking_form] + [godevs_proposal_form] + 2 AJAX + rate-limiting
├── seo.php                          SEO meta helpers
├── content/
│   ├── cpt.php                      8 CPTs (project, service, team, testimonial, booking, experience, education, faq)
│   ├── taxonomies.php               5 taxonomies (project cat+tag, service cat, team dept, faq cat)
│   ├── meta-fields.php              Post-meta registration + save handlers (nonce-gated)
│   └── case-study.php               Case-study CPT + 3 taxonomies + meta
└── admin/views/
    ├── admin-demos.php              GoDevs Demos admin page view
    └── admin-cpt-manager.php         Content Manager admin page view
```

Each module's responsibilities, in one line:

- **block-patterns.php** — registers the `godevs-portfolio-*` inserter categories and declares pattern files under `patterns/`.
- **block-styles.php** — registers custom block style variations (button, card, separator, eyebrow).
- **theme-settings.php** — the `godevs_portfolio_settings` option, its 75-key defaults, the Settings API `register_setting()` calls with per-key sanitization callbacks, the settings admin page, and the AJAX save/reset endpoints.
- **settings-integration.php** — bridges saved settings into `godevs_portfolio_generate_dynamic_css()`, the function that compiles settings into a CSS string cached in the `godevs_portfolio_dynamic_css` option.
- **settings-deadend-fixes.php** — back-compat shim that rewrites option-shape changes from older versions so an upgrade never leaves the site in a broken state.
- **header-footer-builder.php** — the visual Header/Footer builder admin UI, its CRUD (`save_layout`, `delete_layout`, `set_active`, `get_layouts`, `render_preview`, `get_miniatures`), and the front-end rendering of saved layouts. Also enqueues `assets/js/hf-frontend.js` (mobile menu, sticky scroll, newsletter form) and `assets/css/header-footer-builder.css`.
- **demo-importer.php** — the `godevs_portfolio_import_demo` / `godevs_portfolio_remove_demo` AJAX pipeline: clears prior tracked content, creates pages from demo pattern files, seeds demo services, builds the nav menu, applies the style variation (written via `$wpdb->update()` to avoid `wp_unslash()` corrupting JSON font stacks — see [`SECURITY.md`](SECURITY.md)), sets the homepage, and enables `/%postname%/` permalinks. Plus 5 supporting AJAX endpoints (import details, preview, get-demo-pages, preview-page).
- **demo-registry.php** — the canonical list of the 10 importable demos, their titles, screenshots, categories, recommended style variations, and the page-set → pattern-file mapping.
- **demo-renderer.php** — renders a demo's pattern HTML inside the admin preview iframe (nonce-gated).
- **demo-tracker.php** — records which pages/menu/style-variation/homepage were created by a given import, so removal is clean and idempotent.
- **onboarding.php** — the welcome admin notice (fresh install) and the post-import "your demo is ready" notice. Both dismiss via AJAX.
- **cpt-archives.php** — exposes per-CPT archive layout/columns settings into the Theme Settings dashboard.
- **cpt-admin.php** — registers the "Content Manager" admin page under Appearance and enqueues its CSS (`admin-cpt-manager.css`) and JS (`admin-cpt-manager.js` — the delegated `data-confirm` confirmation dialog).
- **booking-system.php** — the booking CPT's meta box (date, time, service, status) and admin notices for new bookings.
- **front-forms.php** — the two front-end form shortcodes and their AJAX submission handlers. The proposal form carries honeypot + IP-based rate limiting (5 per IP per hour, via a transient).
- **seo.php** — emits `<meta>` description / Open Graph tags from post excerpt / site settings.

### 3.1 content/ subfolder

`inc/content/` holds the data-model layer, isolated so it can be lifted wholesale into the GoDevs Core plugin in Phase 2:

- **cpt.php** — `godevs_portfolio_register_post_types()` registers 8 CPTs (project, service, team, testimonial, booking, experience, education, faq), each gated by `godevs_portfolio_module_enabled()`.
- **taxonomies.php** — `godevs_portfolio_register_taxonomies()` registers 5 taxonomies.
- **meta-fields.php** — `register_post_meta()` calls + the nonce-gated `save_post` handlers.
- **case-study.php** — the case-study CPT (the 9th CPT), its 3 taxonomies, and its meta box.

### 3.2 admin/views/ subfolder

- **admin-demos.php** — the GoDevs Demos admin page (renders the demo grid + import progress overlay).
- **admin-cpt-manager.php** — the Content Manager admin page (per-CPT dashboard + list view + trash link with `data-confirm`).

---

## 4. The dynamic CSS pipeline

The theme compiles saved settings into a CSS string at save time and serves it from a cached option, so the front-end never recomputes styles.

```
User saves Theme Settings (AJAX, nonce-verified)
      │
      ▼
godevs_portfolio_ajax_save_settings()  [inc/theme-settings.php]
      │   1. re-validates every value with its sanitize callback
      │   2. update_option('godevs_portfolio_<key>', $sanitized)
      │
      ▼
godevs_portfolio_generate_dynamic_css()  [inc/settings-integration.php]
      │   reads every setting, builds a CSS string of :root custom
      │   properties + component rules
      │
      ▼
update_option('godevs_portfolio_dynamic_css', $css)
      │
      ▼
wp_head (priority 11)  [inc/settings-integration.php]
      │   if cached option exists, echo <style id="godevs-dynamic-css">
      │   else fall back to on-the-fly generation
      ▼
Front-end <head>
```

Key points:

- The cached option is invalidated on every settings save, so the front-end always reflects the latest saved values without a page-build cost.
- On `after_switch_theme`, `godevs_portfolio_seed_default_settings()` writes the default option shape and triggers an initial `generate_dynamic_css()` so the site renders correctly on first load.
- The dynamic CSS sits alongside (not in place of) the `theme.json`-emitted styles, so the Site Editor's Global Styles still work for users who prefer that surface.

---

## 5. FSE architecture

```
theme.json  (design tokens: palette, typography, spacing, layout, radii, shadows)
      │
      │  emitted by WordPress core as CSS custom properties + Global Styles
      ▼
templates/*.html  (32 route templates — block markup)
      │
      │  reference template parts via core/template-part
      ▼
parts/*.html  (44 template parts — headers, footers, mobile menu, newsletter, …)
      │
      │  composed from core blocks, optionally consuming patterns
      ▼
patterns/**/*.php  (146 patterns — 73 generic + 73 demo inner-pages)
      │
      │  registered by inc/block-patterns.php, surfaced in the Inserter
      ▼
patterns/demos/*.php  (73 demo inner-page patterns, one per demo page)
      │
      │  consumed by inc/demo-importer.php to build demo pages
      ▼
styles/*.json  (21 style variations — each an intentional redesign)
```

Each layer overrides the one above for a specific concern:

| Layer | Concern | Lives in |
|---|---|---|
| Design tokens | Palette, type, spacing, radii | `theme.json` + `styles/*.json` |
| Route layout | Which blocks render for a given URL | `templates/*.html` |
| Chrome | Header / footer / mobile menu | `parts/*.html` |
| Reusable sections | Hero, about, services, CTA, … | `patterns/**/*.php` |
| Demo content | Per-demo pages + signature sections | `patterns/demos/*.php` |
| Theme bootstrap | Enqueues, theme supports, inc/ loader | `functions.php` + `inc/*.php` |
| Dynamic CSS | Settings → cached CSS string | `inc/settings-integration.php` |
| Supplementary styling | Things `theme.json` cannot express | `assets/css/theme.css` |
| Progressive enhancement | Mobile menu, sticky scroll, scroll-reveal, forms, admin UX | `assets/js/*.js` |

### 5.1 Why patterns is split into `patterns/` and `patterns/demos/`

Generic patterns (`patterns/hero.php`, `patterns/about.php`, …) are
inserter-facing — the user picks them from the Patterns panel in the
Site Editor. Demo inner-page patterns
(`patterns/demos/architect-about.php`, …) are import-facing — they are
consumed by the demo importer to build a demo's pages, and show up in
the inserter too, but their primary consumer is `inc/demo-importer.php`
via `inc/demo-registry.php`'s page-set mapping.

### 5.2 Why styles/ ships 21 JSON files

Each `styles/<name>.json` overrides `theme.json`'s `styles` subtree.
A style variation is an intentional redesign across multiple axes
(palette, typography, button radius, link treatment, spacing, separator
treatment) — not a palette swap. 10 of the 21 variations are the
"house style" of one of the 10 demos; the remaining 11 are standalone
designs the user can apply to any content.

---

## 6. Data flow

### 6.1 Template rendering

```
WordPress routing
      │
      ▼
templates/<route>.html     (e.g. single-godevs_project.html)
      │
      ▼
Block parser (core)
      │
      ▼
parts/*.html referenced via core/template-part
      │   (header/footer may instead be a HF-builder layout — see §6.3)
      ▼
Blocks render with theme.json-applied styles + dynamic CSS
      │
      ▼
Final HTML to browser
```

### 6.2 Demo import

```
User clicks Import on Appearance → GoDevs Demos
      │
      ▼
wp_ajax_godevs_portfolio_import_demo  [inc/demo-importer.php]
      │   1. check_ajax_referer('godevs_demo_admin')
      │   2. capability check: manage_options
      │   3. acquire concurrency lock (transient)
      │   4. clean up any previously-tracked import of this demo
      │   5. for each page in demo-registry page-set:
      │        - read the matching patterns/demos/<slug>.php
      │        - wp_insert_post() the page (page-no-title template)
      │        - record the new post ID in the demo tracker
      │   6. seed demo services (godevs_service posts)
      │   7. build nav menu from created pages
      │   8. apply style variation via $wpdb->update() on wp_posts
      │      (JSON written raw — wp_unslash() corrupts font stacks)
      │   9. set front page + show_on_front
      │  10. enable /%postname%/ permalinks + flush rewrite rules
      │  11. release lock (shutdown handler safety)
      ▼
Tracker records every created post ID for clean removal later
```

### 6.3 Header/Footer Builder rendering

```
Request hits a front-end page
      │
      ▼
godevs_hf_render_layout('header'|'footer')  [inc/header-footer-builder.php]
      │   - reads active layout slug from theme mod
      │   - if no active layout, returns '' (falls back to template part)
      │   - else walks the layout's rows → columns → elements
      │     and renders each element (logo, nav, cta, social, newsletter, widgets)
      ▼
Echoed into the template via the theme's header.html / footer.html part
      │
      ▼
assets/js/hf-frontend.js  (mobile menu toggle, sticky scroll, newsletter form)
```

### 6.4 Front-end form submission (booking / proposal)

```
User fills [godevs_proposal_form] and clicks Submit
      │
      ▼
POST /wp-admin/admin-ajax.php  action=godevs_submit_proposal  nonce=godevs_proposal_form
      │
      ▼
godevs_ajax_submit_proposal()  [inc/front-forms.php]
      │   1. check_ajax_referer('godevs_proposal_form', 'godevs_proposal_nonce')
      │   2. honeypot field must be empty
      │   3. rate-limit check: ≤5 submissions / IP / hour (transient)
      │   4. sanitize every field (sanitize_text_field, sanitize_email, esc_url_raw, absint)
      │   5. wp_insert_post() a private godevs_proposal post
      │   6. wp_mail() the site admin (non-fatal if no mail server)
      ▼
JSON response → form shows success / error message
```

---

## 7. Diagnostic admin notice

Because the theme loads 20 `inc/` files conditionally on `file_exists()`,
a half-uploaded or partially-deleted theme can silently break CPT
registration without an obvious error. `godevs_portfolio_diagnostic_notice()`
(in `functions.php`) renders an info notice on the dashboard and the
themes page that reports:

- the theme version,
- which `inc/` files loaded and which are missing,
- whether each CPT-registration function exists,
- whether each of the 9 CPTs is actually registered (post_type_exists),
- whether the demo-importer admin page is registered.

The notice is dismissible; the dismiss click fires an AJAX request
(`action=godevs_portfolio_dismiss_diag`, nonce `godevs_diag_dismiss`) handled
by `godevs_portfolio_dismiss_diag_ajax()`. The dismiss script lives in
`assets/js/admin-diag.js` and is enqueued only on `index.php` and
`themes.php` by `godevs_portfolio_enqueue_admin_diag_script()`.

---

## 8. File naming conventions

| Artifact | Convention | Example |
|---|---|---|
| Template | lowercase, hyphenated, matches WP template hierarchy | `single-godevs_project.html` |
| Template part | lowercase, hyphenated, descriptive | `header-transparent.html` |
| Generic pattern | lowercase, hyphenated, descriptive, in a category subfolder | `patterns/hero/split-profile.php` |
| Demo pattern | `<demo-slug>-<page>.php` in `patterns/demos/` | `patterns/demos/architect-about.php` |
| Style variation | lowercase, single word | `styles/mono.json` |
| CSS / JS | lowercase, hyphenated, scope-prefixed | `assets/js/admin-diag.js`, `assets/css/admin-cpt-manager.css` |
| PHP in `inc/` | lowercase, hyphenated | `inc/demo-importer.php` |

---

## 9. The GoDevs Core extraction plan (Phase 2 of the v1.5.0 roadmap)

The theme deliberately ships plugin-territory features (CPTs, taxonomies,
shortcodes, settings pages, AJAX endpoints) so a single ZIP gives the
user a working product. The WordPress.org Theme Review Guidelines
classify all of those as plugin territory, which is why the theme is
**not yet on WordPress.org**.

Phase 2 of the v1.5.0 roadmap extracts that surface into a companion
**GoDevs Core** plugin:

| Currently in the theme | Moves to GoDevs Core |
|---|---|
| `inc/content/cpt.php` (8 CPTs) | Yes |
| `inc/content/case-study.php` (9th CPT + 3 taxonomies) | Yes |
| `inc/content/taxonomies.php` (5 taxonomies) | Yes |
| `inc/content/meta-fields.php` (post-meta + save handlers) | Yes |
| `inc/front-forms.php` (2 shortcodes + 2 AJAX + rate-limiting) | Yes |
| `inc/booking-system.php` (booking meta + admin) | Yes |
| `inc/theme-settings.php` (settings dashboard + 2 AJAX) | Stays in theme; reads plugin-owned CPTs |
| `inc/header-footer-builder.php` (HF builder + 6 AJAX) | Stays in theme |
| `inc/demo-importer.php` (demo importer + 6 AJAX) | Stays in theme |
| `inc/onboarding.php` (onboarding notices + 2 AJAX) | Stays in theme |
| `inc/demo-renderer.php` (preview iframe + 1 AJAX) | Stays in theme |
| `inc/cpt-admin.php` (Content Manager page) | Stays in theme; becomes a view over plugin-owned CPTs |

After Phase 2, the theme will own only presentation + the Theme Settings
dashboard + the HF Builder + the Demo Importer, and the plugin will own
all data-model + form-handling. At that point the theme will be
WordPress.org-ready (see [`WORDPRESS-ORG-COMPLIANCE.md`](WORDPRESS-ORG-COMPLIANCE.md)).

The `inc/content/` subfolder is structured the way it is precisely so
this lift is a copy-paste, not a refactor.

---

## 10. WordPress version compatibility

| Feature | Required WP | Notes |
|---|---|---|
| Block theme | 5.9+ | `theme.json` + HTML templates |
| `theme.json` schema v2 | 6.5+ | Fluid typography, spacingScale |
| `core/row` block | 6.6+ | Used in headers/footers |
| `aspectRatio` block support | 6.6+ | Used in portfolio grids |
| Style variations | 5.9+ | `styles/*.json` |
| Fluid typography | 6.1+ | `theme.json` settings.typography |

**Minimum supported:** WordPress 6.5, PHP 7.4.
**Recommended:** WordPress 6.6+, PHP 8.1+.

The `Requires at least` field in `style.css` and `readme.txt` reflects 6.5.

---

## 11. Separation of concerns (recap)

| Layer | Concern | Lives in |
|---|---|---|
| Design tokens | Colors, type, spacing | `theme.json` + `styles/*.json` |
| Route layout | Templates | `templates/*.html` |
| Chrome | Header / footer parts | `parts/*.html` + HF-builder layouts |
| Reusable sections | Patterns | `patterns/**/*.php` |
| Data model | CPTs, taxonomies, meta | `inc/content/*.php` (→ GoDevs Core) |
| Forms | Booking + proposal | `inc/front-forms.php` (→ GoDevs Core) |
| Settings | 75-setting dashboard | `inc/theme-settings.php` |
| Dynamic CSS | Settings → cached CSS | `inc/settings-integration.php` |
| Theme bootstrap | Enqueues, inc/ loader | `functions.php` + `inc/*.php` |
| Supplementary styling | `theme.json` cannot express | `assets/css/*.css` |
| Progressive enhancement | Menu, scroll, forms, admin | `assets/js/*.js` |
| Documentation | Project docs | `docs/*.md` |
