# GoDevs Portfolio — 10-Demo Design & QA Report

Version 1.4.0 · WordPress 7.1 (local XAMPP) · All 10 demos imported, rendered, screenshotted (desktop 1440×900 + mobile 390×844), audited programmatically (layout, overflow, heading order, image loading, WCAG contrast) and inspected visually.

Final screenshots: [`screenshots/`](screenshots/) — `<demo>-desktop-1..4.png` (top → bottom of page), `<demo>-mobile-1..2.png`.

---

## 1. Monolith

- **Target user:** Senior backend / systems engineer who wants a portfolio that reads like the tools they use.
- **Design goal:** A technical, terminal-inspired identity — confidence through structure and monospace metadata, not decoration.
- **Why this style:** Developers trust interfaces that look like their daily environment. The faux-terminal framing signals craft and credibility instantly to a technical audience (and to technical recruiters).
- **Key homepage sections:** Terminal hero (`$ whoami` eyebrow, huge display H1) → faux-terminal stats block (`$ uptime --career` … `$ exit 0`, bordered `surface-elevated` window) → numbered service cards → project directory listing with mono metrics → availability CTA (`$ status --availability`).
- **Unique visual/UX idea:** The entire evidence layer of the page (stats) lives inside a simulated terminal session.
- **Gutenberg patterns used:** demo pattern `godevs-portfolio/demos/monolith` + `header-dark` / `footer-dark` template parts; hairline separators, mono eyebrow labels, numbered card block styles.
- **Style variation:** Dark.
- **Desktop QA:** PASS — no overflow, single H1, correct heading order, no broken images, 0 contrast failures.
- **Mobile QA:** PASS — no horizontal overflow, clean stacking.
- **Issues found:** Stats labels/prompts used the `contrast` token inside the terminal block (invisible in Dark: 1.19:1); global heading color (`primary`) collided with the primary CTA band.
- **Issues fixed:** Terminal prompts → `foreground`, labels → `muted`; explicit `contrast` heading color inside primary bands; global muted-override CSS removed (see Systemic Fixes).
- **Final screenshot:** `screenshots/monolith-desktop-1.png`

## 2. Canvas

- **Target user:** Creative product/UI designer presenting case studies visually.
- **Design goal:** Large-visual storytelling — the work is the hero; chrome stays quiet.
- **Why this style:** Designers are judged on case-study depth. An immersive image-led narrative with editorial captions showcases process better than lists.
- **Key homepage sections:** Full-bleed cover hero → client logo wall → three case studies in alternating splits **broken by one full-bleed image interlude with a caption band** → capabilities cards → CTA.
- **Unique visual/UX idea:** The rhythm break — case study 2 is a full-bleed still with an overlaid `primary` caption band instead of a third split.
- **Gutenberg patterns used:** demo pattern `demos/canvas`; cover blocks, alternating columns, hover-reveal image cards; `header-transparent` / `footer-social`.
- **Style variation:** Creative.
- **Desktop QA:** PASS — layout intact, 0 real contrast failures (accent token darkened for AA).
- **Mobile QA:** PASS.
- **Issues found:** Creative accent `#D97706` failed AA (3.0:1) for accent text; duplicate `typography` JSON keys.
- **Issues fixed:** Accent → `#A16207` (4.7:1); JSON keys merged; per-demo client roster (ORBIT, PAPERKIT, Haven, LUMEN, DRAFT&CO).
- **Final screenshot:** `screenshots/canvas-desktop-1.png`

## 3. Aperture

- **Target user:** Professional photographer selling sessions.
- **Design goal:** Image-first gallery elegance with a commercial layer (packages/rates) buyers expect.
- **Why this style:** Photography sells through imagery; the minimal Editorial chrome keeps typographic noise near zero so the frames dominate, while a hairline pricing list answers the commercial question without breaking the mood.
- **Key homepage sections:** Full-bleed image hero (text docked bottom) → featured series showcase (21:9 + 60/40 caption + two-column gallery) → **Sessions & rates** hairline pricing list (Editorial Session $480 / Product Day $720 / Portrait Sitting $260) → quiet separator CTA.
- **Unique visual/UX idea:** A gallery that turns into a rate card — art and commerce on one continuous hairline grid.
- **Gutenberg patterns used:** demo pattern `demos/aperture`; cover, image showcase stacks, hairline list rows; `header-transparent` / `footer-minimal`.
- **Style variation:** Minimal.
- **Desktop QA:** PASS.
- **Mobile QA:** PASS.
- **Issues found:** Was miscategorized "(General)" — page mapping created an empty Work page and orphaned portfolio/journal pages.
- **Issues fixed:** Category corrected to Photography; page set now derived from existing pattern files (portfolio + journal import correctly).
- **Final screenshot:** `screenshots/aperture-desktop-1.png`

## 4. Northbound

- **Target user:** Independent strategy/delivery consultant (solo, senior, trust-selling).
- **Design goal:** Credibility-first dark editorial: evidence, outcomes, and restrained confidence.
- **Why this style:** Consultants sell trust. A dark, structured, hairline-ruled system with metrics and client outcomes reads as senior and serious; the solo voice ("I") differentiates from agency boilerplate.
- **Key homepage sections:** Split hero ("Clear strategy. Shipped work.") with **track-record metrics strip** (12 yrs / 40+ engagements / 9 industries) → "How I help" numbered index list (Strategy Sprints, Delivery Rescue, Advisory Retainers) → selected client outcomes grid → two client testimonials → stats band → intro-call CTA.
- **Unique visual/UX idea:** Services presented as a scannable index ledger rather than cards — reading like an engagement menu.
- **Gutenberg patterns used:** demo pattern `demos/northbound`; numbered index list rows, metric strips, pull-quote testimonials; `header-dark` / `footer-multi-column`.
- **Style variation:** Dark.
- **Desktop QA:** PASS — 0 contrast failures, 0 overflow.
- **Mobile QA:** PASS.
- **Issues found:** Previously an agency "we" voice duplicating Monolith's skeleton; shared fake client roster with Canvas.
- **Issues fixed:** Reframed to consultant persona across home + 4 inner pages; own client roster and testimonial personas; metrics reframed to consulting credibility.
- **Final screenshot:** `screenshots/northbound-desktop-1.png`

## 5. Meridian

- **Target user:** Senior product designer / UX professional.
- **Design goal:** Evidence-driven design portfolio — process, metrics, before/after outcomes.
- **Why this style:** UX maturity is shown with numbers. A corporate-navy system with oversized numerals and quantified results frames the designer as a business asset, not a pixel-pusher.
- **Key homepage sections:** Stats-led asymmetric hero (8 yrs / 30+ flows as large paragraphs, headline, dual CTA) → "What I do" cards (Research / Interaction & Systems / Validation & Metrics) → **process rows** (Discover → Define → Design → Deliver) → **before/after results** (Checkout 62% → 84%, Onboarding 6 min → 90 s, Tickets −40%) → testimonials → case-studies preview → availability CTA.
- **Unique visual/UX idea:** The before→after ledger — a consulting-grade proof table inside a portfolio.
- **Gutenberg patterns used:** demo pattern `demos/meridian`; stat numerals, hairline result rows, quote cards, article list; `header` / `footer-multi-column`.
- **Style variation:** Corporate.
- **Desktop QA:** PASS.
- **Mobile QA:** PASS.
- **Issues found:** Hero stats were H2s before the H1 (heading-order failure); consultant persona; middle "What I do" card ~30px taller than siblings.
- **Issues fixed:** Stats demoted to paragraphs; reframed to product-designer persona + process section; card copy equalized; CTA heading contrast fixed.
- **Final screenshot:** `screenshots/meridian-desktop-1.png`

## 6. Plan

- **Target user:** Architect / spatial strategist.
- **Design goal:** Editorial index-card restraint — information architecture as aesthetics.
- **Why this style:** Architecture clients buy rigor. A near-monochrome typographic system with data tables and a project index communicates precision the way a printed monograph does.
- **Key homepage sections:** Pure-typography hero ("Plan — selected work, 2014—2024.") → featured project split with data table (Location / Area / Status) → **project index** (4 hairline rows: mono number, name, location, year) → philosophy pull-quote trio → services → separator CTA.
- **Unique visual/UX idea:** The homepage doubles as a printed project catalog index.
- **Gutenberg patterns used:** demo pattern `demos/plan`; data-table rows, serif pull-quote, hairline index; `header-minimal` / `footer-minimal`.
- **Style variation:** Monochrome.
- **Desktop QA:** PASS (16 muted-on-surface contrast failures found, fixed).
- **Mobile QA:** PASS.
- **Issues found:** Monochrome `muted` `#737373` failed AA on `surface-muted` (4.05:1); single project undersold "selected work".
- **Issues fixed:** Muted → `#525252` (6.7:1); project index added; duplicate JSON key fixed.
- **Final screenshot:** `screenshots/plan-desktop-1.png`

## 7. Signature

- **Target user:** Creative professional building a personal brand.
- **Design goal:** Premium editorial elegance — strong serif typography, numbered sections, quiet luxury.
- **Why this style:** A personal brand site must feel authored. Serif italics, drop-cap numerals, and generous whitespace signal taste and deliberate craft.
- **Key homepage sections:** Split hero (serif-italic H1 + 3/4 portrait) → work grid → **numbered editorial services list** (01/02/03 serif-italic numerals) → full-width testimonial with rule ornament + attribution → CTA.
- **Unique visual/UX idea:** Services as a table of contents — a front-of-book index for a person.
- **Gutenberg patterns used:** demo pattern `demos/signature`; serif display type, numbered list rows, quote treatment; `header` / `footer-portfolio`.
- **Style variation:** Elegant.
- **Desktop QA:** PASS — 0 contrast failures.
- **Mobile QA:** PASS.
- **Issues found:** Miscategorized "(Brand)" → wrong page set (two blank pages, journal orphaned).
- **Issues fixed:** Category corrected to Personal; page set matches files; testimonial attribution redesigned.
- **Final screenshot:** `screenshots/signature-desktop-1.png`

## 8. Scholar

- **Target user:** Academic / researcher / writer.
- **Design goal:** Professional credibility — publications, evidence, and a CV-grade structure.
- **Why this style:** Academia evaluates citations, not vibes. A minimal serif system that foregrounds a publications ledger and teaching catalog mirrors how academics present themselves.
- **Key homepage sections:** Two-column bio hero with inline stats + **CV download button** → **selected publications list** (5 hairline rows: mono year, title, italic venue) → teaching course cards → contact CTA.
- **Unique visual/UX idea:** The homepage as a living CV — publication rows instead of stat cards.
- **Gutenberg patterns used:** demo pattern `demos/scholar`; hairline list rows, serif headings, outline button; `header-minimal` / `footer-minimal`.
- **Style variation:** Minimal.
- **Desktop QA:** PASS.
- **Mobile QA:** PASS.
- **Issues found:** Duplicate stats (hero + research cards both showed 12/4/3); no publications preview despite `#research` link.
- **Issues fixed:** Research stat-cards replaced by a publications list; CV download added; single stats instance.
- **Final screenshot:** `screenshots/scholar-desktop-1.png`

## 9. Minimal

- **Target user:** Minimal-leaning creative (editorial/portfolio hybrid).
- **Design goal:** Whitespace, typography, and a focused single CTA — restraint as identity.
- **Why this style:** When the work is visual-editorial, the container should disappear. No cards, no stats — just a magazine rhythm of images and lists.
- **Key homepage sections:** Editorial hero (70/30 bottom-aligned + quiet "Read the latest issue" CTA) → featured story split → **category row + magazine grid** (Home · Objects · Practice · Travel) → journal rows (thumb + excerpt + hairline separators) → CTA.
- **Unique visual/UX idea:** A category-filter row over an image grid gives magazine navigation without a single card component.
- **Gutenberg patterns used:** demo pattern `demos/minimal`; editorial hero columns, image grids, hairline journal rows; `header` / `footer-social`.
- **Style variation:** Editorial.
- **Desktop QA:** PASS.
- **Mobile QA:** PASS — clean single-column stacking, no overflow at 390px.
- **Issues found:** Hero was a dead end (no CTA); four demos recommended the same "Minimal" variation.
- **Issues fixed:** Hero CTA + category row added; recommended variation moved to Editorial.
- **Final screenshot:** `screenshots/minimal-desktop-1.png`

## 10. Director

- **Target user:** Film director / creative director.
- **Design goal:** Art-directed cinematic presentation — the portfolio as a title sequence.
- **Why this style:** Directors are judged by pacing and frame. A 92vh hero still, credits metadata, poster grid, and an awards ledger translate film language to the web.
- **Key homepage sections:** 92vh cinematic cover hero (dim 50) → featured film (21:9 still + credits/festival metadata table) → selected works poster grid → **awards ledger** (rule-separated rows) → press pull-quote → CTA.
- **Unique visual/UX idea:** Festival-credits metadata as design material — typography borrowed from film posters.
- **Gutenberg patterns used:** demo pattern `demos/director`; cover hero, metadata tables, poster grid, ledger rows; `header-dark` / `footer-dark`.
- **Style variation:** Dark.
- **Desktop QA:** PASS.
- **Mobile QA:** PASS.
- **Issues found:** Duplicated button class, attr/inline color mismatches, hero overlay too heavy (65%), inconsistent H2 sizes.
- **Issues fixed:** All corrected; unified H2 clamp scale; overlay 50.
- **Final screenshot:** `screenshots/director-desktop-1.png`

---

## Systemic fixes found during QA (apply across the theme)

1. **Hardcoded muted override removed** — `theme.css` forced `muted` text to `#4B5563 !important`, which failed WCAG AA in the Dark variation (2.6:1) and defeated every variation palette. Muted contrast is now governed by palettes only.
2. **Primary-band headings** — theme.json colors headings `primary`; inside `primary`-background CTA bands they were invisible. All headings in primary bands now carry explicit `contrast` color (demos + parts).
3. **Accent links/buttons on primary bands** — forced to `contrast` via CSS + pattern-level fixes (accent is tuned for base, not primary).
4. **Current/hover nav item** — forced accent color replaced with inherited color + weight/underline (passes on every header palette).
5. **Accent tokens failing AA on their own base** — darkened in Creative (`#A16207`), Modern (`#0369A1`), Neo (`#C2410C`), Portfolio (`#0369A1`).
6. **Monochrome muted** — `#737373` → `#525252` (6.7:1 on surface-muted).
7. **Registry: on-disk inner pages are never orphaned** — page sets include any existing `<demo>-<page>.php` (contact stays last).

## QA results summary

| Check | Result |
|---|---|
| Demo importer (10/10 demos, starter + safe modes) | PASS — pages, menu, homepage, style variation all applied |
| Page content populated (no blank pages) | PASS |
| Re-import / duplicate prevention / clean slugs | PASS — double import leaves exactly 5–6 pages, slug `home`, one menu |
| Templates (32) & parts (24) markup balance | PASS — no unbalanced block markup |
| Pattern registration & rendering | PASS — 123 patterns, valid JSON, no orphans |
| Responsive (390px mobile, all 10 demos) | PASS — zero horizontal overflow, zero off-screen elements |
| Heading hierarchy | PASS — one H1 per page, correct order (fixed: Meridian hero stats) |
| WCAG AA contrast (programmatic, all 10 × 2 viewports) | PASS — 0 failures (excluding text over dimmed cover images, which carry ≥40–50% overlays) |
| Broken images | PASS — 0 across all demos |
| PHP lint (all files) | PASS |
| Automated theme tests | PASS (4/4) |
| PHP 7.4 compatibility scan | PASS — no PHP 8-only syntax |
| Translation readiness | PASS — all strings in POT, admin JS translatable |
| Security (nonces, caps, escaping in importer/renderer) | PASS |
| Performance (lazy-load setting, 3.5 MB total imagery, no external deps) | PASS |

## Remaining known limitations

- Placeholder imagery is bundled stock-art (5 files) — real demo photography would elevate Aperture/Director further.
- Full-page screenshot capture of `vh`-based heroes can show capture artifacts (repeated hero) in Chromium; verified via viewport captures + DOM geometry that the rendered pages are correct.
- Text over cover images relies on the 40–50% overlay for contrast (standard practice; not machine-checkable against arbitrary imagery).
