# WordPress.org Compliance - GoDevs Portfolio

**Document version:** 1.5.0
**Submission status:** Not yet submitted. v1.5.0 ships plugin-territory
features that must be extracted into a companion plugin before the
theme can pass the WordPress.org Theme Review.

This document tracks the WordPress.org Theme Review Guidelines
compliance surface - what passes today, what fails today, and what the
plan is to get to a submittable theme.

> Note: earlier drafts of this document claimed "No CPTs, taxonomies,
> shortcodes, or settings pages" - that was true of an early prototype
> and is **not** true of v1.5.0. This rewrite is an honest pass/fail
> against the real shipping code.

---

## 1. Executive summary

| Area | Status | Detail |
|---|---|---|
| Block-theme architecture | ✅ PASS | `theme.json` + HTML templates + patterns + parts |
| `add_theme_support()` declarations | ✅ PASS | P1.2 added every Theme-Check-required declaration explicitly |
| File reads via `WP_Filesystem` | ✅ PASS | P1.5 replaced `file_get_contents()` for pattern reads |
| No inline JavaScript | ✅ PASS | P1.16 removed the last inline `<script>`/`onclick`/`onsubmit` |
| `.pot` file shipped | ✅ PASS | P1.14 generated `languages/godevs-portfolio.pot` (715 strings) |
| Version reconciliation | ✅ PASS | P1.1 aligned `style.css`, `functions.php`, `readme.txt` to 1.5.0 |
| Bundled font licenses | ✅ PASS | Inter + Newsreader OFL files ship in `assets/fonts/` |
| No external requests | ✅ PASS | No CDN, no Google Fonts, no telemetry |
| CPTs registered in the theme | ❌ FAIL | 9 CPTs (plugin territory) |
| Taxonomies registered in the theme | ❌ FAIL | 8 custom taxonomies (plugin territory) |
| Shortcodes registered in the theme | ❌ FAIL | 2 shortcodes (plugin territory) |
| Settings pages in the theme | ❌ FAIL | 7+ admin pages (plugin territory) |
| AJAX endpoints in the theme | ❌ FAIL | 20 AJAX endpoints (plugin territory) |

**Bottom line:** the presentation side passes; the application side
fails. The fix is Phase 2 of the v1.5.0 roadmap - extract the
plugin-territory surface into the **GoDevs Core** companion plugin.

---

## 2. What passes today

### 2.1 Block-theme architecture (PASS)

- `theme.json` is the global-styles source of truth (schema v2, WP 6.5+).
- 32 HTML templates, 44 HTML parts, 146 patterns, 21 style variations.
- Site Editor is the primary customization surface for layout.
- All chrome (header, footer, mobile menu) is in template parts.

### 2.2 Required `add_theme_support()` declarations (PASS - P1.2 fix)

`functions.php`'s `godevs_portfolio_setup()` explicitly declares every
`add_theme_support()` that Theme Check expects, even where block themes
auto-enable them:

```php
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'responsive-embeds' );
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
add_theme_support( 'editor-styles' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-logo', array( … ) );
add_theme_support( 'wp-block-styles' );
add_theme_support( 'align-wide' );
add_editor_style( 'assets/css/theme.css' );
```

### 2.3 File reads via `WP_Filesystem` (PASS - P1.5 fix)

Pattern files under `patterns/demos/*.php` are read for the demo
preview iframe via the WordPress `WP_Filesystem` abstraction rather
than `file_get_contents()`. `file_exists()` is used only for existence
checks before enqueuing (permitted).

### 2.4 No inline JavaScript (PASS - P1.16 fix)

Every JS interaction is attached via `addEventListener()` in one of
the 8 external scripts. The last three inline handlers were removed in
P1.16:

| Removed | Replacement |
|---|---|
| Inline `<script>` in `godevs_portfolio_diagnostic_notice()` (AJAX dismiss) | `assets/js/admin-diag.js`, enqueued via `godevs_portfolio_enqueue_admin_diag_script()` on `admin_enqueue_scripts`, localized `GODEVS_DIAG` global |
| Inline `onclick="return confirm(...)"` on the CPT-manager trash link | `data-confirm="..."` attribute + delegated listener in `assets/js/admin-cpt-manager.js`, enqueued on the CPT-manager admin page |
| Inline `onsubmit="return false"` on the HF newsletter form | Delegated submit listener in `assets/js/hf-frontend.js` (localized `GODEVS_HF` global) |

### 2.5 `.pot` file shipped (PASS - P1.14 fix)

`languages/godevs-portfolio.pot` exists and contains 715 unique
translatable strings extracted from the theme's PHP source. Regenerate
with `python3 scripts/generate-pot.py` or
`wp i18n make-pot . languages/godevs-portfolio.pot`. See
[`INTERNATIONALIZATION.md`](INTERNATIONALIZATION.md).

### 2.6 Version reconciliation (PASS - P1.1 fix)

`style.css` header, `functions.php` (`GODEVS_PORTFOLIO_VERSION`), and
`readme.txt` (`Stable tag`) all report `1.5.0`.

### 2.7 Licensing

- Theme code: GPL-2.0-or-later (`LICENSE`).
- Inter font: SIL OFL 1.1 (`assets/fonts/INTER-OFL.txt`).
- Newsreader font: SIL OFL 1.1 (`assets/fonts/NEWSREADER-OFL.txt`).
- No third-party PHP or JS bundled.

### 2.8 No external resources

- No external CSS / JS / fonts / images loaded from a CDN.
- No `wp_remote_get()` / `wp_remote_post()` / `curl`.
- No telemetry, no phone-home, no update checks beyond WordPress.org.

### 2.9 Escaping + sanitization

- Every output escaped (`esc_html`, `esc_attr`, `esc_url`,
  `wp_kses_post`).
- Every `register_setting()` has a `sanitize_callback` (colors → hex
  validation, numbers → `absint`, URLs → URL validation, text →
  `sanitize_text_field`).
- Every AJAX endpoint + form-meta handler verifies a nonce and checks
  a capability.

See [`SECURITY.md`](SECURITY.md) for the full model.

---

## 3. What fails today (plugin-territory violations)

The WordPress.org Theme Review Guidelines require that themes **do
not** register CPTs, taxonomies, shortcodes, settings pages, REST
routes, or AJAX endpoints - these belong in plugins. v1.5.0 ships all
of these in the theme so the user gets a working product from a single
ZIP.

### 3.1 Custom post types (FAIL)

9 CPTs registered by `inc/content/cpt.php` and
`inc/content/case-study.php`:

| CPT | Registered in |
|---|---|
| `godevs_project` | `inc/content/cpt.php` |
| `godevs_service` | `inc/content/cpt.php` |
| `godevs_team` | `inc/content/cpt.php` |
| `godevs_testimonial` | `inc/content/cpt.php` |
| `godevs_booking` | `inc/content/cpt.php` |
| `godevs_experience` | `inc/content/cpt.php` |
| `godevs_education` | `inc/content/cpt.php` |
| `godevs_faq` | `inc/content/cpt.php` |
| `godevs_case_study` | `inc/content/case-study.php` |

A 10th private CPT, `godevs_proposal`, is registered by
`inc/front-forms.php` for proposal-form submissions.

### 3.2 Custom taxonomies (FAIL)

8 custom taxonomies registered by `inc/content/taxonomies.php` (5)
and `inc/content/case-study.php` (3):

`godevs_project_category`, `godevs_project_tag`,
`godevs_service_category`, `godevs_team_department`,
`godevs_faq_category`, plus 3 case-study taxonomies
(`godevs_cs_industry`, `godevs_cs_role`, `godevs_cs_status`).

### 3.3 Shortcodes (FAIL)

2 shortcodes registered by `inc/front-forms.php`:

- `[godevs_booking_form]`
- `[godevs_proposal_form]`

### 3.4 Settings pages (FAIL)

3 top-level admin menu pages under Appearance, plus 4 admin
notice/management surfaces:

| Surface | Registered by |
|---|---|
| Appearance → GoDevs Settings | `inc/theme-settings.php` (`add_theme_page`) |
| Appearance → Content Manager | `inc/cpt-admin.php` (`add_theme_page`) |
| Appearance → GoDevs Demos | `inc/demo-importer.php` (`add_theme_page`) |
| Header/Footer Builder interface | `inc/header-footer-builder.php` (rendered within Settings) |
| Onboarding welcome notice | `inc/onboarding.php` (`admin_notices`) |
| Post-import onboarding notice | `inc/onboarding.php` (`admin_notices`) |
| Booking admin notices | `inc/booking-system.php` (`admin_notices`) |
| Diagnostic admin notice | `functions.php` (`admin_notices`) |

75 settings are registered via `register_setting()` under the
`godevs_portfolio_settings_group` option group.

### 3.5 AJAX endpoints (FAIL)

20 AJAX actions registered via `add_action('wp_ajax_*', …)`:

- `godevs_portfolio_dismiss_diag` (functions.php)
- 2 in `inc/theme-settings.php` (`save_settings`, `reset_settings`)
- 6 in `inc/header-footer-builder.php` (`save_layout`,
  `delete_layout`, `set_active`, `get_layouts`, `render_preview`,
  `get_miniatures`)
- 6 in `inc/demo-importer.php` (`import_demo`, `remove_demo`,
  `get_import_details`, `preview_demo`, `get_demo_pages`,
  `preview_demo_page`)
- 1 in `inc/demo-renderer.php` (`render_demo_page`)
- 2 in `inc/onboarding.php` (`dismiss`, `dismiss_imported`)
- 2 in `inc/front-forms.php` (`submit_booking`, `submit_proposal` -
  both also exposed `nopriv` for logged-out users)

All 20 are nonce-verified and capability-checked (see
[`SECURITY.md`](SECURITY.md) §6–7) - so they are **secure**, just in
the wrong place per the Theme Review Guidelines.

### 3.6 Direct database writes

The demo importer makes 3 `$wpdb->update()` calls against
`$wpdb->posts` (justified - `wp_unslash()` corrupts JSON font stacks;
`$wpdb->update()` uses prepared statements internally, so it is
SQL-injection-safe). This is documented and is unlikely to be flagged
by a reviewer, but it is technically outside the "no direct DB access"
expectation.

---

## 4. Other Theme Review items

### 4.1 Accessibility

- Semantic landmarks (`header`, `main`, `footer`, `nav`) on every
  template.
- Skip link to `#main`.
- `:focus-visible` outlines defined in `theme.json`.
- AA-contrast palettes per style variation.
- `prefers-reduced-motion` guards on every CSS transition.
- Form labels present on booking + proposal forms.
- Heading hierarchy: one `h1` per template, no skipped levels.

### 4.2 Internationalization

- Text domain `godevs-portfolio` loaded via `load_theme_textdomain()`.
- 715 translatable strings extracted to `languages/godevs-portfolio.pot`.
- RTL support inherited from the WordPress style engine.
- See [`INTERNATIONALIZATION.md`](INTERNATIONALIZATION.md).

### 4.3 Theme functionality

- `title-tag`, `post-thumbnails`, `automatic-feed-links`,
  `custom-logo`, `html5`, `wp-block-styles`, `align-wide`,
  `responsive-embeds`, `editor-styles` all declared.
- Navigation via `core/navigation` block (mobile overlay).
- Pagination via `core/query-pagination`.
- Comments via `core/comments`.

### 4.4 Privacy

- No cookies set by the theme.
- No PII collected beyond proposal/booking form submissions (name,
  email, message), which are stored in the WordPress database as
  private posts and emailed to the site admin.
- No tracking pixels.

---

## 5. The path to WordPress.org

### Phase 2 of the v1.5.0 roadmap: extract GoDevs Core

| Currently in the theme | Moves to GoDevs Core plugin |
|---|---|
| `inc/content/cpt.php` (8 CPTs + `godevs_proposal`) | ✅ Yes |
| `inc/content/case-study.php` (9th CPT + 3 taxonomies + meta) | ✅ Yes |
| `inc/content/taxonomies.php` (5 taxonomies) | ✅ Yes |
| `inc/content/meta-fields.php` (post-meta + save handlers) | ✅ Yes |
| `inc/front-forms.php` (2 shortcodes + 2 AJAX + rate-limiting) | ✅ Yes |
| `inc/booking-system.php` (booking meta + admin) | ✅ Yes |
| `inc/theme-settings.php` (75-setting dashboard + 2 AJAX) | ❌ Stays in theme |
| `inc/header-footer-builder.php` (HF builder + 6 AJAX) | ❌ Stays in theme |
| `inc/demo-importer.php` (demo importer + 6 AJAX + `$wpdb->update()`) | ❌ Stays in theme |
| `inc/onboarding.php` (onboarding notices + 2 AJAX) | ❌ Stays in theme |
| `inc/demo-renderer.php` (preview iframe + 1 AJAX) | ❌ Stays in theme |
| `inc/cpt-admin.php` (Content Manager page) | ❌ Stays in theme (becomes a view over plugin-owned CPTs) |

### After Phase 2

After the plugin extraction:

- The theme will own only presentation + the Theme Settings dashboard
  + the HF Builder + the Demo Importer + onboarding.
- The Theme Settings dashboard, HF Builder, and Demo Importer will
  still touch `wp_options`, theme mods, and `wp_insert_post()` for
  pages - but these are within the WordPress.org-allowed theme surface
  (a theme may create pages on activation, store theme mods, and
  register Settings API options for theme presentation).
- The plugin will own all CPTs, taxonomies, shortcodes, post-meta,
  form handling, and the booking workflow.

At that point the theme will be WordPress.org-ready.

### Caveats that will remain after Phase 2

- The Demo Importer writes the user global-styles JSON via
  `$wpdb->update()`. This is a deliberate workaround for
  `wp_unslash()` corrupting JSON font stacks. It is SQL-injection-safe
  (prepared statements) and is likely acceptable, but a reviewer may
  ask about it - the inline code comment documents the justification.
- The Theme Settings dashboard registers 75 settings via the Settings
  API. WordPress.org allows themes to register presentation-related
  settings (colors, layout, typography) via the Settings API; the
  `module_*` toggles (which enable/disable CPT visibility) will move
  to the plugin and become plugin settings.

---

## 6. Submission package (target: post-Phase-2)

When the theme is submitted to WordPress.org, the package will include:

- The full theme directory (`godevs-portfolio/`) zipped, minus the
  `inc/content/` and `inc/front-forms.php` and `inc/booking-system.php`
  files (those move to the plugin).
- `readme.txt` (WordPress.org format).
- `README.md` (GitHub format).
- `CHANGELOG.md`.
- `LICENSE` (GPL-2.0 text).
- Bundled font license files (`INTER-OFL.txt`, `NEWSREADER-OFL.txt`).
- `languages/godevs-portfolio.pot`.
- The `docs/` suite.

The package will **not** include `tests/`, `scripts/`, `.git/`, or the
`docs/v1.5.0-improvement-plan.docx` working file.

---

## 7. Useful references

- Theme Review guidelines:
  https://make.wordpress.org/themes/handbook/review/
- Required theme supports + Theme Check:
  https://developer.wordpress.org/themes/release/required-theme-files/
- Block theme requirements:
  https://developer.wordpress.org/themes/block-themes/
- `theme.json` schema: https://schemas.wp.org/trunk/theme.json
- Accessibility-ready tag requirements:
  https://make.wordpress.org/themes/handbook/review/accessibility/
- Plugin territory (what belongs in a plugin, not a theme):
  https://developer.wordpress.org/themes/release/plugin-territory/
