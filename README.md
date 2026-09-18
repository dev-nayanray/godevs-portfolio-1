# GoDevs Portfolio

A premium, Gutenberg-first, Full Site Editing WordPress block theme for portfolios, editorial sites, agencies, freelancers, and personal brands.

**Version:** 1.5.0
**License:** GPL-2.0-or-later
**Text Domain:** `godevs-portfolio`
**Requires WordPress:** 6.5+
**Requires PHP:** 7.4+
**Homepage:** https://godevs.net/

---

## What it is

GoDevs Portfolio is a complete, production-ready Full Site Editing (FSE) block theme. It ships everything a working portfolio site needs out of the box - design system, templates, parts, patterns, style variations, a starter-site demo importer, a header/footer builder, a booking system, a project-proposal system, theme settings, and 9 custom post types for portfolio content.

It is **not** a "Phase 1 foundation" or a placeholder. v1.5.0 is the shipping product.

---

## What's in the box

| Artifact | Count | Notes |
|---|---|---|
| Templates | 32 | All core WP routes + every CPT archive/single + `page-about`, `page-services`, `page-portfolio`, `page-case-study`, `page-no-title` custom templates |
| Template parts | 44 | Per-demo headers/footers + 6 generic header/footer variants + mobile menu, newsletter, search, language switcher |
| Block patterns | 146 | 73 in `patterns/` (hero, about, services, portfolio, skills, experience, testimonials, cta, contact, faq, blog, stats, team, education, process, timeline, footer, home) + 73 demo inner-page patterns in `patterns/demos/` |
| Style variations | 21 | Default + 20 named variations (mono, noir, horizon, frame, pulse, journal, nova, atelier, luxe, architect, editorial, minimal, dark, modern, corporate, elegant, creative, portfolio, monochrome, neo, studio) |
| Production-ready demos | 10 | Mono, Noir, Horizon, Frame, Pulse, Journal, Nova, Atelier, Luxe, Architect - each a complete multi-page site imported in one click |
| Custom post types | 9 | Project, Service, Team, Testimonial, Booking, Experience, Education, FAQ, Case Study |
| Custom taxonomies | 8 | Project category + tag, service category, team department, FAQ category, + 3 case-study taxonomies |
| Shortcodes | 2 | `[godevs_booking_form]`, `[godevs_proposal_form]` |
| Admin surfaces | 7+ | GoDevs Settings, Content Manager, GoDevs Demos, Header/Footer Builder, onboarding notices, booking admin notices, diagnostic notice |
| AJAX endpoints | 20 | All nonce-verified + capability-checked |
| Theme settings | 75 | Per-section options registered via the Settings API, each with its own sanitization callback |
| Translatable strings | 715 | Extracted to `languages/godevs-portfolio.pot` |
| Documentation files | 10 | See [Documentation](#documentation) below |

---

## Installation

### From a ZIP upload

1. Download the theme as a ZIP file.
2. In your WordPress admin go to **Appearance → Themes → Add New → Upload Theme**.
3. Choose the ZIP and click **Install Now**.
4. Click **Activate**.
5. Visit **Appearance → GoDevs Settings** to configure the theme, or
   **Appearance → GoDevs Demos** to import a starter site.

### Manual install

1. Copy the `godevs-portfolio/` directory into `wp-content/themes/`.
2. Activate the theme under **Appearance → Themes**.
3. Visit **Appearance → GoDevs Settings** to configure the theme.

### First-run onboarding

On a brand-new install the theme auto-creates a Home, About, Work,
Services, Journal, and Contact page, a primary navigation menu, and
sets the front page - so the site is publish-ready before any demo
import. Existing sites are never touched.

### Importing a demo

1. Go to **Appearance → GoDevs Demos**.
2. Pick one of the 10 demos and click **Import**.
3. The importer creates the demo's pages, seeds demo services, builds
   the navigation menu, applies the matching style variation, and
   sets the homepage - all in one pass with live progress feedback.

Imported content is tracked, so a demo can be removed cleanly later
without touching your own posts.

---

## Architecture

```
godevs-portfolio/
├-- assets/
│   ├-- css/        11 stylesheets (theme, theme.min, editor, print,
│   │               front-forms, header-footer-builder, demo-preview,
│   │               admin-settings, admin-demos, admin-hf-builder,
│   │               admin-cpt-manager)
│   ├-- js/          8 scripts (reveal, hf-frontend, front-forms,
│   │               admin-settings, admin-demos, admin-hf-builder,
│   │               admin-cpt-manager, admin-diag)
│   ├-- fonts/       Inter + Newsreader woff2 + OFL license files
│   └-- images/     demo preview thumbnails + per-demo content images
├-- docs/           10 Markdown documentation files
├-- inc/
│   ├-- block-patterns.php          Pattern category + pattern registration
│   ├-- block-styles.php            Custom block style variations
│   ├-- theme-settings.php          75-setting dashboard + Settings API
│   ├-- settings-integration.php    Settings → dynamic CSS bridge
│   ├-- settings-deadend-fixes.php  Back-compat fixes for stale settings
│   ├-- header-footer-builder.php   Header/Footer layout builder + AJAX
│   ├-- demo-importer.php           One-click demo import/remove
│   ├-- demo-registry.php            Demo metadata + page-set mapping
│   ├-- demo-renderer.php            Demo preview iframe renderer
│   ├-- demo-tracker.php             Track imported demo pages
│   ├-- onboarding.php               First-run welcome + post-import notices
│   ├-- cpt-archives.php             CPT archive settings
│   ├-- cpt-admin.php                Content Manager admin page
│   ├-- booking-system.php           Booking post type + meta + admin
│   ├-- front-forms.php              Booking + proposal form shortcodes + AJAX
│   ├-- seo.php                      SEO meta helpers
│   ├-- content/
│   │   ├-- cpt.php                  8 CPT registrations
│   │   ├-- taxonomies.php           5 taxonomy registrations
│   │   ├-- meta-fields.php          Post-meta registration + save handlers
│   │   └-- case-study.php           Case-study CPT + 3 taxonomies + meta
│   └-- admin/views/
│       ├-- admin-demos.php           GoDevs Demos admin page view
│       └-- admin-cpt-manager.php     Content Manager admin page view
├-- languages/      godevs-portfolio.pot (715 strings)
├-- patterns/       146 block patterns (73 generic + 73 demo inner-pages)
├-- parts/          44 template parts (headers, footers, mobile menu, …)
├-- scripts/        generate-pot.py (i18n), minify-theme-css.py (CSS minify)
├-- styles/         21 style variation JSON files + LICENSE
├-- templates/      32 route templates (.html block markup)
├-- tests/          4 smoke-test suites + run.php runner
├-- functions.php   Theme bootstrap (loads inc/*.php, enqueues, setup)
├-- theme.json      Design system source of truth (palette, type, layout)
├-- style.css       WordPress theme header
├-- readme.txt      WordPress.org-format readme
├-- CHANGELOG.md    Versioned release history
├-- LICENSE         GPL-2.0 text
└-- README.md       This file
```

`functions.php` stays small: it defines the version constant, sets up
theme supports, enqueues assets, preloads fonts, and then loads every
`inc/*.php` component via a guarded `require_once` loop (each file is
gated by `file_exists()` so a missing file degrades gracefully instead
of white-screening). Load status is tracked in
`$GLOBALS['godevs_portfolio_loaded_files']` and surfaced in the
diagnostic admin notice.

See [`docs/ARCHITECTURE.md`](docs/ARCHITECTURE.md) for the full
architecture, data-flow, and dynamic-CSS pipeline.

---

## Key features

- **Full Site Editing** - every template and part is `.html` block markup; no classic PHP templates.
- **theme.json design system** - colors, typography, spacing, radii, layout widths, shadows defined as tokens and surfaced via the WordPress Global Styles API.
- **21 style variations** - intentional redesigns (palette + typography + component radius + link treatment), not palette swaps.
- **10 one-click demos** - each a complete multi-page site with its own style variation, header/footer, and inner pages.
- **Header/Footer Builder** - a visual admin builder for custom header and footer layouts, with mobile menu, sticky scroll, widget areas, and newsletter widgets.
- **9 custom post types** - Projects, Services, Team, Testimonials, Bookings, Experience, Education, FAQs, Case Studies - each gated by a module-enable setting.
- **Booking system** - front-end booking form (`[godevs_booking_form]`) that stores bookings as a private CPT for admin follow-up.
- **Proposal system** - front-end project-inquiry form (`[godevs_proposal_form]`) with honeypot spam protection + IP-based rate limiting (5/hour).
- **Theme Settings dashboard** - 75 settings across 16 sections (branding, typography, colors, layout, header, footer, blog, portfolio, services, team, testimonials, experience, education, case studies, demos, performance, modules), all saved via AJAX with per-key sanitization.
- **Dynamic CSS** - settings flow into a cached `godevs_portfolio_dynamic_css` option emitted at `wp_head` priority 11, so the front-end never recomputes styles.
- **Accessibility-first** - semantic landmarks, skip links, `:focus-visible` outlines, AA-contrast palettes per variation, `prefers-reduced-motion` guards.
- **Self-hosted fonts** - Inter + Newsreader woff2 bundled with OFL license files; no Google Fonts CDN.
- **No build step** - plain PHP, JS, and CSS. No bundler, no transpiler, no npm install required to run the theme.
- **No required plugins** - activates and renders a complete experience with zero plugins installed.
- **Translation-ready** - 715 translatable strings extracted to `languages/godevs-portfolio.pot`.

---

## Development setup

The theme is plain PHP/JS/CSS - there is no build step.

1. Clone the repo into `wp-content/themes/`:
   ```bash
   git clone https://github.com/godevsltd/godevs-portfolio.git wp-content/themes/godevs-portfolio
   ```
2. Activate the theme in **Appearance → Themes**.
3. Visit **Appearance → GoDevs Settings** and **Appearance → GoDevs Demos**.

### Running the smoke tests

The theme ships a PHP test suite under `tests/`. Run it from the theme
root:

```bash
php tests/run.php
```

The suite covers: theme activation, `theme.json` schema validation,
pattern file-header smoke checks, and template/part existence.

### Regenerating the .pot file

When user-facing PHP strings change, regenerate the translation
catalogue:

```bash
python3 scripts/generate-pot.py
```

or, if WP-CLI is available:

```bash
wp i18n make-pot . languages/godevs-portfolio.pot --domain=godevs-portfolio
```

See [`docs/INTERNATIONALIZATION.md`](docs/INTERNATIONALIZATION.md) for
the full translation workflow.

### Minifying the front-end CSS

```bash
python3 scripts/minify-theme-css.py
```

The minified `assets/css/theme.min.css` is loaded in production;
`SCRIPT_DEBUG` loads the unminified `theme.css` for development.

---

## Documentation

Full documentation lives in `docs/`:

- [`docs/ARCHITECTURE.md`](docs/ARCHITECTURE.md) - file structure, data flow, dynamic CSS pipeline, FSE architecture
- [`docs/CODING-STANDARDS.md`](docs/CODING-STANDARDS.md) - PHP, JS, CSS, and markup conventions
- [`docs/DESIGN-SYSTEM.md`](docs/DESIGN-SYSTEM.md) - design tokens, palette, typography, spacing reference
- [`docs/PATTERN-SYSTEM.md`](docs/PATTERN-SYSTEM.md) - pattern authoring conventions and category map
- [`docs/STYLE-VARIATIONS.md`](docs/STYLE-VARIATIONS.md) - the 21 variations and their design axes
- [`docs/DEMO-IMPORT-SYSTEM.md`](docs/DEMO-IMPORT-SYSTEM.md) - the 10 demos, the importer pipeline, and the tracker
- [`docs/WORDPRESS-ORG-COMPLIANCE.md`](docs/WORDPRESS-ORG-COMPLIANCE.md) - current WP.org submission readiness (and the known blockers)
- [`docs/SECURITY.md`](docs/SECURITY.md) - security model: input, storage, AJAX, escaping, nonces
- [`docs/INTERNATIONALIZATION.md`](docs/INTERNATIONALIZATION.md) - text domain, .pot generation, translation workflow
- [`docs/CONTRIBUTING.md`](docs/CONTRIBUTING.md) - contributor workflow

The versioned release history is in [`CHANGELOG.md`](CHANGELOG.md).

---

## WordPress.org submission status

GoDevs Portfolio is **not yet on WordPress.org**. v1.5.0 ships several
features that the WordPress.org Theme Review Guidelines classify as
plugin territory (CPTs, taxonomies, shortcodes, settings pages, AJAX
endpoints). The Phase 2 step of the v1.5.0 roadmap extracts the plugin
surface into a companion **GoDevs Core** plugin; once that lands, the
theme will be WordPress.org-ready.

See [`docs/WORDPRESS-ORG-COMPLIANCE.md`](docs/WORDPRESS-ORG-COMPLIANCE.md)
for the full pass/fail breakdown.

---

## Contributing

See [`docs/CONTRIBUTING.md`](docs/CONTRIBUTING.md) for the contributor
workflow.

---

## License

GPL-2.0-or-later. See [`LICENSE`](LICENSE).

Bundled fonts (Inter, Newsreader) are licensed under the SIL Open Font
License 1.1; their license files live in `assets/fonts/`.
