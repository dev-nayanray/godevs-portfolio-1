=== GoDevs Portfolio ===
Contributors: godevs
Requires at least: 6.5
Tested up to: 6.8
Requires PHP: 7.4
Stable tag: 1.5.1
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: full-site-editing, block-patterns, block-styles, portfolio, editorial, accessibility-ready, translation-ready, threaded-comments, custom-colors, custom-logo, custom-menu, featured-images, rtl-language-support, sticky-post, theme-options

A premium, Gutenberg-first Full Site Editing WordPress block theme for portfolios, editorial sites, and personal brands.

== Description ==

GoDevs Portfolio is a premium, Gutenberg-first, Full Site Editing (FSE) WordPress block theme designed for developers, designers, freelancers, agencies, and creators who need a refined, modern, editorial-grade portfolio presence on the web.

Visit the theme homepage at https://godevs.net/ for demos, documentation, and support.

The theme ships with:

* A complete design system in `theme.json` — colors, typography, spacing, layout, borders, shadows
* Thirty-two (32) WordPress templates covering every standard route
* Twenty-four (24) template parts — twelve header variants, eleven footer variants, and a mobile menu
* 120+ curated block patterns across 20+ portfolio-specific categories, plus 10 full multi-page demos importable in one click
* Eleven (11) style variations beyond the default
* A custom block style system — outline / text-link / pill buttons, multiple card variants, separators, eyebrow paragraphs

= Design Philosophy =

The theme favors editorial typography, generous whitespace, strong visual hierarchy, and restraint over decoration. It is designed to look like a considered portfolio, not a generic landing page.

= Accessibility =

The theme targets WCAG 2.1 Level AA. Visible focus states, keyboard navigation, semantic HTML, sufficient color contrast, and reduced-motion support are foundational.

= Translation =

The theme is translation-ready. The text domain is `godevs-portfolio`. Translation files should be placed in the `languages/` directory.

== Installation ==

1. In your WordPress admin, go to Appearance → Themes → Add New → Upload Theme.
2. Choose the `godevs-portfolio.zip` file and click Install Now.
3. Activate the theme.
4. Go to Appearance → GoDevs Settings to configure the theme.
5. Go to Appearance → GoDevs Demos to browse and import demo sites.

== Frequently Asked Questions ==

= Does this theme require any plugins? =

No. The theme is fully functional without any plugins. It includes its own demo library, header/footer builder, and content management system.

= Is the theme compatible with the block editor? =

Yes. The theme is built on Full Site Editing (FSE) and is fully compatible with the WordPress block editor (Gutenberg). All templates, template parts, and patterns use native WordPress blocks.

= Can I customize the colors and typography? =

Yes. Go to Appearance → GoDevs Settings → Colors and Typography to customize the accent color, background color, text color, font families, and more. Changes are applied via CSS custom properties.

= How do I import a demo site? =

Go to Appearance → GoDevs Settings → Demo Library tab. Browse the available demos, click Preview to see a live preview, then click Import to import the demo content (pages, navigation, and style variation).

== Changelog ==

= 1.5.1 =

* Fix: constrained groups referenced non-existent `--wp--style--root--content-size` / `root--wide-size` CSS variables (190 occurrences), so post titles, archive headers, and text columns sprawled across the full page width — replaced with the correct `--wp--style--global--*` variables.
* Fix: content in all core templates (single, archives, index, page, CPT variants) and all header parts rendered flush to the screen edges — added root side padding to `layout:default` mains and headers.
* Fix: archive/blog post grids now align to the wide content axis.
* Fix: stripped stray trailing `}` from 17 invalid block attribute objects in the Monolith demo patterns.

= 1.5.0 =
* New: all 41 demo inner pages upgraded to homepage-grade design (eyebrow+H1 heroes, 3+ sections per page in each demo's signature components, closing CTAs).
* Fixed: imported pages used the no-title template — no more double H1 above demo content.
* Fixed: renamed the `border` palette token to `line` — the old slug collided with WordPress's `.has-border-color` utility and force-colored bordered elements' text (140 files).
* Fixed: eyebrow paragraphs' inline colors now match their block attributes; malformed block JSON repaired and validated theme-wide.

= 1.4.0 =
* New: Northbound demo reframed to an independent strategy & delivery consultant; Meridian reframed to a senior product designer / UX portfolio (process, metrics, before/after results).
* Accessibility: removed a hardcoded muted-text CSS override that broke WCAG AA contrast in style variations; headings and accent links inside primary-color CTA bands now use the contrast token; current/hover nav items inherit text color; failing accent tokens darkened in Creative, Modern, Neo, and Portfolio variations; Monochrome muted darkened.
* Demo importer: page sets now include every on-disk inner page (contact stays last), so no demo content is orphaned.
* QA: all 10 demos audited on desktop and mobile for overflow, heading order, broken images, and WCAG contrast — full report in docs/demo-report/.

= 1.3.0 =
* Fixed: demo importer derives each demo's page set from the pattern files that exist — no more blank imported pages (Aperture and Signature were affected).
* Fixed: demo registry title parser now handles multi-byte dashes; every demo previously categorized as "Specialized", breaking filters and page mapping.
* Fixed: muted text on primary-color CTA bands failed WCAG AA contrast — now uses the contrast token across demos.
* Fixed: pattern registration, preview renderer docblock stripping, import locking, menu titles, and clean slugs on re-import.
* Changed: every demo homepage now has a distinct signature section (terminal stats, full-bleed case interlude, pricing list, index lists, publications, project index, and more).
* Changed: style-variation recommendations rebalanced across the 10 demos; weak patterns (progress bars, minimal CTA/stats/hero) redesigned.
* Removed: stale nested theme copy inside styles/, 12 duplicate/weak patterns, and the dynamic/ pattern folder.

= 1.2.0 =
* Removed 92 non-importable "Coming Soon" demos, 912 orphan persona-variant patterns, and accidental nested theme copies — a lean, curated library.
* Design: registered the bundled Inter and Newsreader webfonts as theme.json font faces.
* Design: all core and category patterns redesigned in a premium editorial direction (mixed serif-accent display type, hairline structure, ghost numerals, pill meta chips, staggered reveals).
* New: fresh installs now get a complete seeded site — Home/About/Work/Services/Journal/Contact pages, primary navigation, and front page assignment — publish-ready before any demo import.
* Demo import creates pages with clean slugs (/about instead of /about-monolith).

= 1.1.0 =
* Design: Refined global design system in theme.json — added 9 fluid font sizes (including new 'huge' Display Hero size), 7 border radius presets, custom design tokens for shadows, transitions, and containers.
* Design: All eyebrow paragraphs across 654 patterns and 32 templates now use a consistent accent color, uppercase transform, 0.12em letter-spacing, and 600 weight.
* Design: Normalized H1 hero typography to use the new 'huge' fluid font size for stronger visual impact.
* Design: Replaced hard-coded colors (#6B7280 muted, #2563EB accent, #E5E5E0 border) with design tokens throughout all patterns and templates.
* Design: Added accent-hover color across all 11 style variations for consistent hover states.
* Design: Refined header template parts — cleaner padding, consistent site-title typography, and "Get in touch" button now uses text-link style.
* Design: Redesigned 404, search, archive, blog list, page, single post, and front-page templates with refined spacing, clearer hierarchy, and more premium typography.
* Design: Redesigned footer template parts with subtle top border, clearer column hierarchy, and consistent muted copyright text.
* Design: Redesigned 10 core patterns (hero, portfolio-grid, about, services, team, testimonials, faq, cta, contact, stats) with refined spacing, typography, and visual hierarchy.
* Layout: Wider wideSize (1320px) and contentSize (680px) for fuller portfolios.
* Layout: Section padding normalized to var:preset|spacing|80 across all section-tagged groups for consistent vertical rhythm.
* Layout: Improved border radius usage — all images and cards now use the radius presets (var:preset|radius|md, lg) instead of hard-coded pixel values.
* Performance: Removed 6 redundant PNG demo preview images (kept WebP versions).
* Accessibility: Skip-to-content link preserved in all 12 header template parts.
* Accessibility: All 32 templates retain `id="main"` anchor on the main element.
* Compatibility: Tested up to WordPress 6.8.

= 1.0.1 =
* Security: Tightened sanitization for theme settings — color fields now use sanitize_hex_color(), numeric fields use absint(), URL fields use esc_url_raw().
* Security: Dynamic CSS output now re-validates all values at output time and applies wp_strip_all_tags() as defense in depth against CSS injection.
* Bug fix: Theme activation no longer wipes previously-saved settings — settings are only seeded on a truly fresh install (no existing option).
* Performance: Booking default-status hook moved from wp_insert_post (fires on every post type) to save_post_godevs_booking (post-type-specific).
* Compatibility: Tested up to WordPress 6.8.
* Maintenance: Removed duplicated theme tree inside the patterns/ directory (was adding ~11 MB of dead weight to the distribution ZIP).
* Maintenance: Removed tests/ and docs/ directories from the distribution package.

= 1.0.0 =
* Initial release.
* Complete design system in theme.json with 14 colors, 4 font families, 12 spacing sizes, 4 shadow presets, and motion tokens.
* Thirty-two (32) block templates and twenty-four (24) template parts.
* Hundreds of block patterns across 20+ categories including hero, portfolio, services, team, testimonials, FAQ, blog, CTA, contact, stats, and more.
* Eleven (11) style variations (Dark, Minimal, Editorial, Modern, Monochrome, Creative, Portfolio, Neo, Studio, Elegant, Corporate).
* Ten (10) complete production-ready demo sites with full home + inner page designs.
* Header/Footer Builder with 10 header + 10 footer starter templates, drag-and-drop elements, live preview, and responsive visibility controls.
* Demo Library with iframe live preview, screenshot thumbnails, one-click import, and per-page header/footer override.
* Nine (9) custom post types: Projects, Services, Team, Testimonials, Experience, Education, FAQs, Case Studies, Bookings.
* Booking management system with status workflow, email notifications, bulk actions, and front-end booking form shortcode.
* Front-end proposal form shortcode for project inquiries.
* Settings-controlled CPT archive layouts (grid/list/timeline/showcase) with column count and display toggles.
* Content Manager admin page for unified CPT management.
* Five (5) dynamic content patterns that pull live CPT data via query loops.
* Custom block styles: outline/text-link/pill buttons, bordered/editorial/featured/numbered cards, thin separators, eyebrow paragraphs.
* Scroll-reveal animations with IntersectionObserver, reduced-motion support.
* Per-page header/footer layout selection via meta box.
* Settings integration: all 73 theme settings wired to front-end behavior.
* Full WCAG 2.1 AA accessibility compliance.
* Translation-ready with `godevs-portfolio` text domain.
