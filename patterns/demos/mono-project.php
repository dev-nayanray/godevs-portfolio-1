<?php
/**
 * Title: Demo — Mono (Developer) — Project
 * Slug: godevs-portfolio/demo-mono-project
 * Description: MONO single project — LUMA, technical case study. Recommended style variation: Mono.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, mono, project, case study, developer
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-mono","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-mono alignfull">

        <!-- Header -->
        <!-- wp:template-part {"slug":"header-mono","theme":"godevs-portfolio","tagName":"header"} /-->

        <!-- ═══ 01 — PROJECT HERO (typography only) ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"bottom":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--line);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Eyebrow + breadcrumb row -->
                        <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                        <div class="wp-block-group">
                                <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">Project — 2026</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500"><a href="/work">← Back to work</a></p>
                                <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Display H1 — typography IS the hero -->
                        <!-- wp:heading {"level":1,"className":"mono-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600","letterSpacing":"-0.04em","lineHeight":"0.95","fontSize":"clamp(3rem, 10vw, 8rem)"}}} -->
                        <h1 class="wp-block-heading mono-display" style="font-family:var(--wp--preset--font-family--display);font-weight:600;letter-spacing:-0.04em;line-height:0.95;font-size:clamp(3rem, 10vw, 8rem)">Luma<span class="mono-accent-text">.</span></h1>
                        <!-- /wp:heading -->

                        <!-- Meta + description row -->
                        <!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns are-vertically-aligned-bottom" style="margin-top:var(--wp--preset--spacing--70)">
                                <!-- wp:column {"verticalAlignment":"bottom","width":"64%"} -->
                                <div class="wp-block-column" style="flex-basis:64%">
                                        <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">Product Platform · 2026 · Next.js / TypeScript / PostgreSQL</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.6"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.6;margin-top:var(--wp--preset--spacing--30)">A product platform that turns complex data into a simple, usable experience — designed and built end-to-end, from the database schema through the interface.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"verticalAlignment":"bottom","width":"36%"} -->
                                <div class="wp-block-column" style="flex-basis:36%">
                                        <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|foreground"}}} -->
                                        <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--foreground);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500"><span class="mono-dot" aria-hidden="true"></span>Shipped — In production</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ 02 — FULL-WIDTH HERO VISUAL ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:image {"aspectRatio":"21/9","scale":"cover","style":{"border":{"radius":"4px"}}} -->
                        <figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mono/mono-featured.png' ); ?>" alt="LUMA — dashboard overview showing analytics, filters and a clean product workspace" style="border-radius:4px;aspect-ratio:21/9;object-fit:cover" loading="eager"/></figure>
                        <!-- /wp:image -->
                        <!-- wp:paragraph {"className":"mono-caption","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em"},"color":{"text":"var:preset|color|muted"}}} -->
                        <p class="mono-caption has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em">Fig. 01 — Dashboard overview. The home view anchors the platform around a single answer: what should I act on next?</p>
                        <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ 03 — OVERVIEW + PROJECT FACTS ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:html -->
                        <div class="mono-2col is-wide-narrow">
                                <div>
                                        <p class="is-style-mono-label" style="color:var(--mono-muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500;margin:0 0 1.25rem 0;">— Overview</p>
                                        <p style="font-family:var(--wp--preset--font-family--body);font-size:1.0625rem;line-height:1.65;max-width:46ch;margin:0;">Luma is a product platform I designed and built for a team that had outgrown its tools. The existing workflow was fragmented across three dashboards, a spreadsheet pipeline and a manual export step. I rebuilt it as a single typed system: a Next.js application, a Node.js service layer and a PostgreSQL foundation, with a Redis cache for the hot paths. The result is a product people actually use end-to-end — not a tool they tolerate.</p>
                                </div>
                                <div>
                                        <p class="is-style-mono-label" style="color:var(--mono-muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500;margin:0 0 1rem 0;">— Project facts</p>
                                        <div class="mono-facts">
                                                <div class="mono-fact-row"><span class="mono-fact-key">Client</span><span class="mono-fact-val">Luma (Series B, in-house product)</span></div>
                                                <div class="mono-fact-row"><span class="mono-fact-key">Role</span><span class="mono-fact-val">Lead engineer · Architecture, frontend, API</span></div>
                                                <div class="mono-fact-row"><span class="mono-fact-key">Year</span><span class="mono-fact-val">2026</span></div>
                                                <div class="mono-fact-row"><span class="mono-fact-key">Status</span><span class="mono-fact-val">Shipped — in production</span></div>
                                                <div class="mono-fact-row"><span class="mono-fact-key">Platform</span><span class="mono-fact-val">Web (Next.js) · API (Node.js) · DB (PostgreSQL)</span></div>
                                                <div class="mono-fact-row"><span class="mono-fact-key">Team</span><span class="mono-fact-val">1 lead engineer · 2 engineers · 1 designer · 1 PM</span></div>
                                                <div class="mono-fact-row" style="border-bottom:none;"><span class="mono-fact-key">Duration</span><span class="mono-fact-val">14 weeks · Jan — Apr 2026</span></div>
                                        </div>
                                </div>
                        </div>
                        <!-- /wp:html -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ 04 — THE CHALLENGE ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Section header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
                                <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">— The Challenge</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"className":"mono-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.25rem, 5vw, 4rem)","lineHeight":"1.0","letterSpacing":"-0.03em","fontWeight":"600"}}} -->
                                <h2 class="wp-block-heading mono-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.25rem, 5vw, 4rem);line-height:1.0;letter-spacing:-0.03em;font-weight:600">The challenge.</h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- 2-col text -->
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns">
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.65"},"color":{"text":"var:preset|color|foreground"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--foreground);font-size:var(--wp--preset--font-size--medium);line-height:1.65">The product had grown faster than its foundations. What started as a single dashboard had accreted into three separate interfaces, each with its own data model, its own authentication, its own way of describing the same customer. Engineers dreaded touching the reporting code; users dreaded opening it.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.65"},"color":{"text":"var:preset|color|foreground"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--foreground);font-size:var(--wp--preset--font-size--medium);line-height:1.65">The constraint wasn't a missing feature — it was an architecture that resisted change. Every report required a bespoke SQL query; every new metric required a deploy. The brief was simple: rebuild the platform so the team can move again, without losing the data they'd already accumulated.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ 05 — THE APPROACH ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Section header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
                                <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">— The Approach</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"className":"mono-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.25rem, 5vw, 4rem)","lineHeight":"1.0","letterSpacing":"-0.03em","fontWeight":"600"}}} -->
                                <h2 class="wp-block-heading mono-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.25rem, 5vw, 4rem);line-height:1.0;letter-spacing:-0.03em;font-weight:600">The approach.</h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- 2-col text -->
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns">
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.65"},"color":{"text":"var:preset|color|foreground"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--foreground);font-size:var(--wp--preset--font-size--medium);line-height:1.65">I started by mapping the existing system as a graph: where the data lived, who owned it, where it was duplicated. Two weeks of audit produced a single diagram and a list of fourteen entities that needed unification. From there I designed the target architecture — typed end-to-end, with a service layer that owned the business logic and a thin API surface for the client.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.65"},"color":{"text":"var:preset|color|foreground"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--foreground);font-size:var(--wp--preset--font-size--medium);line-height:1.65">The build was incremental: ship the new API alongside the old, migrate the dashboards one at a time, decommission the legacy code path once usage dropped to zero. Every step was reversible, every deploy was behind a feature flag, every migration was tested against a snapshot of production. Fourteen weeks, no big-bang release.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ 06 — TECHNICAL ARCHITECTURE ═══ -->
        <!-- wp:group {"tagName":"section","className":"mono-dark","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"color":{"background":"var:preset|color|primary","text":"var:preset|color|contrast"}},"layout":{"type":"default"}} -->
        <section class="wp-block-group mono-dark alignfull has-contrast-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Section header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
                                <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">— Technical Architecture</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"className":"mono-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.25rem, 5vw, 4rem)","lineHeight":"1.0","letterSpacing":"-0.03em","fontWeight":"600"},"color":{"text":"var:preset|color|contrast"}}} -->
                                <h2 class="wp-block-heading mono-display has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-size:clamp(2.25rem, 5vw, 4rem);line-height:1.0;letter-spacing:-0.03em;font-weight:600">Technical architecture.</h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Intro text -->
                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.65","maxWidth":"62ch"},"color":{"text":"var:preset|color|contrast"}}} -->
                        <p class="has-text-color" style="color:var(--wp--preset--color--contrast);font-size:var(--wp--preset--font-size--medium);line-height:1.65;max-width:62ch">A typed, layered system. The client talks to typed API routes; the routes delegate to a service layer that owns business logic; the service layer reads and writes PostgreSQL, with Redis in front of the hot paths. No business logic in the client, no SQL in the routes.</p>
                        <!-- /wp:paragraph -->

                        <!-- Architecture diagram (code block) -->
                        <!-- wp:html -->
                        <div class="mono-code" style="margin-top:2rem;">
<span class="mono-code-muted">// request lifecycle</span>
<span class="mono-code-accent">client</span> → <span class="mono-code-accent">edge</span> (Next.js) → <span class="mono-code-accent">api</span> (route handlers)
                                ↓
                          <span class="mono-code-accent">service</span> (typed, owns logic)
                                ↓
                    ┌───────────┴───────────┐
                    ↓                       ↓
              <span class="mono-code-accent">postgres</span>           <span class="mono-code-accent">redis</span> (cache)
              (source of truth)       (hot reads, 60s ttl)

<span class="mono-code-muted">// invariant: no business logic above the service layer</span>
<span class="mono-code-muted">// invariant: no SQL outside the service layer</span>
                        </div>
                        <!-- /wp:html -->

                        <!-- Layer notes -->
                        <!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|50"}}} -->
                        <div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--60)">
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.04em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
                                        <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.04em;text-transform:uppercase;font-weight:600">Client</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.65"},"color":{"text":"var:preset|color|contrast"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--contrast);font-size:var(--wp--preset--font-size|small);line-height:1.65">Next.js (App Router) + React Server Components. Typed data fetching — no unknown shapes cross the network.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.04em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
                                        <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.04em;text-transform:uppercase;font-weight:600">Service</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.65"},"color":{"text":"var:preset|color|contrast"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--contrast);font-size:var(--wp--preset--font-size|small);line-height:1.65">Node.js layer that owns business rules, transactions and authorization. The only place that touches the database.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.04em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
                                        <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.04em;text-transform:uppercase;font-weight:600">Data</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.65"},"color":{"text":"var:preset|color|contrast"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--contrast);font-size:var(--wp--preset--font-size|small);line-height:1.65">PostgreSQL as source of truth, Redis for cached reads (60s TTL, invalidation on write). Migrations are versioned and reversible.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ 07 — DEVELOPMENT ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Section header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
                                <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">— Development</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"className":"mono-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.25rem, 5vw, 4rem)","lineHeight":"1.0","letterSpacing":"-0.03em","fontWeight":"600"}}} -->
                                <h2 class="wp-block-heading mono-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.25rem, 5vw, 4rem);line-height:1.0;letter-spacing:-0.03em;font-weight:600">Development.</h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- 2-col text -->
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns">
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.65"},"color":{"text":"var:preset|color|foreground"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--foreground);font-size:var(--wp--preset--font-size--medium);line-height:1.65">TypeScript end-to-end was the load-bearing decision. A shared types package — generated from the database schema — flows from Postgres through the service layer to the client. The frontend cannot receive a shape the backend didn't send. Most bugs we used to ship simply became impossible.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.65"},"color":{"text":"var:preset|color|foreground"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--foreground);font-size:var(--wp--preset--font-size--medium);line-height:1.65">CI ran typecheck, unit tests and Playwright e2e on every PR; deploys went through a staged pipeline (preview → staging → production) with one-click rollback. The design system was a separate package, versioned and consumed by the app — so the UI could evolve independently of the product surface.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ 08 — RESULTS ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Section header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
                                <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">— Results · Demo data</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"className":"mono-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.25rem, 5vw, 4rem)","lineHeight":"1.0","letterSpacing":"-0.03em","fontWeight":"600"}}} -->
                                <h2 class="wp-block-heading mono-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.25rem, 5vw, 4rem);line-height:1.0;letter-spacing:-0.03em;font-weight:600">Results.</h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Stats grid (4-col) -->
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
                        <div class="wp-block-columns">
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"className":"mono-stat-num","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600","fontSize":"clamp(2.5rem, 5vw, 4.5rem)","lineHeight":"0.95","letterSpacing":"-0.03em"},"color":{"text":"var:preset|color|accent"}}} -->
                                        <p class="mono-stat-num has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--display);font-weight:600;font-size:clamp(2.5rem, 5vw, 4.5rem);line-height:0.95;letter-spacing:-0.03em">−40%</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"className":"mono-stat-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="mono-stat-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em">Time-to-first-action · p95</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"className":"mono-stat-num","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600","fontSize":"clamp(2.5rem, 5vw, 4.5rem)","lineHeight":"0.95","letterSpacing":"-0.03em"},"color":{"text":"var:preset|color|foreground"}}} -->
                                        <p class="mono-stat-num has-text-color" style="color:var(--wp--preset--color--foreground);font-family:var(--wp--preset--font-family--display);font-weight:600;font-size:clamp(2.5rem, 5vw, 4.5rem);line-height:0.95;letter-spacing:-0.03em">2.0×</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"className":"mono-stat-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="mono-stat-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em">Daily active use</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"className":"mono-stat-num","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600","fontSize":"clamp(2.5rem, 5vw, 4.5rem)","lineHeight":"0.95","letterSpacing":"-0.03em"},"color":{"text":"var:preset|color|foreground"}}} -->
                                        <p class="mono-stat-num has-text-color" style="color:var(--wp--preset--color--foreground);font-family:var(--wp--preset--font-family--display);font-weight:600;font-size:clamp(2.5rem, 5vw, 4.5rem);line-height:0.95;letter-spacing:-0.03em">−47%</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"className":"mono-stat-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="mono-stat-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em">Support tickets · 90 days</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"className":"mono-stat-num","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600","fontSize":"clamp(2.5rem, 5vw, 4.5rem)","lineHeight":"0.95","letterSpacing":"-0.03em"},"color":{"text":"var:preset|color|foreground"}}} -->
                                        <p class="mono-stat-num has-text-color" style="color:var(--wp--preset--color--foreground);font-family:var(--wp--preset--font-family--display);font-weight:600;font-size:clamp(2.5rem, 5vw, 4.5rem);line-height:0.95;letter-spacing:-0.03em">3→1</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"className":"mono-stat-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="mono-stat-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em">Dashboards unified into one</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                        <!-- Demo data note -->
                        <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
                        <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500;margin-top:var(--wp--preset--spacing--60)">Figures are illustrative demo data — sample metrics for a representative case study, not actual customer results.</p>
                        <!-- /wp:paragraph -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ 09 — TECHNOLOGIES ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Section header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
                                <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">— Technologies</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"className":"mono-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.25rem, 5vw, 4rem)","lineHeight":"1.0","letterSpacing":"-0.03em","fontWeight":"600"}}} -->
                                <h2 class="wp-block-heading mono-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.25rem, 5vw, 4rem);line-height:1.0;letter-spacing:-0.03em;font-weight:600">Technologies.</h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Tech stack chips -->
                        <!-- wp:html -->
                        <div class="mono-stack-group">
                                <p class="mono-stack-label">Frontend</p>
                                <div class="mono-stack-list" style="display:flex;flex-wrap:wrap;gap:0.5rem;">
                                        <span class="mono-chip">Next.js</span>
                                        <span class="mono-chip">React</span>
                                        <span class="mono-chip">TypeScript</span>
                                        <span class="mono-chip">Tailwind CSS</span>
                                        <span class="mono-chip">React Query</span>
                                </div>
                        </div>
                        <div class="mono-stack-group" style="margin-top:1.5rem;">
                                <p class="mono-stack-label">Backend</p>
                                <div class="mono-stack-list" style="display:flex;flex-wrap:wrap;gap:0.5rem;">
                                        <span class="mono-chip">Node.js</span>
                                        <span class="mono-chip">Fastify</span>
                                        <span class="mono-chip">PostgreSQL</span>
                                        <span class="mono-chip">Prisma</span>
                                        <span class="mono-chip">Redis</span>
                                        <span class="mono-chip">Zod</span>
                                </div>
                        </div>
                        <div class="mono-stack-group" style="margin-top:1.5rem;">
                                <p class="mono-stack-label">Infrastructure</p>
                                <div class="mono-stack-list" style="display:flex;flex-wrap:wrap;gap:0.5rem;">
                                        <span class="mono-chip">AWS</span>
                                        <span class="mono-chip">Docker</span>
                                        <span class="mono-chip">GitHub Actions</span>
                                        <span class="mono-chip">Vercel</span>
                                        <span class="mono-chip">Sentry</span>
                                </div>
                        </div>
                        <!-- /wp:html -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ 10 — GALLERY ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Gallery header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
                                <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">— Gallery</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.75rem, 3.5vw, 2.75rem)","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
                                <h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 3.5vw, 2.75rem);line-height:1.1;letter-spacing:-0.02em;font-weight:600">Detail views.</h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Gallery image 1 — wide -->
                        <!-- wp:image {"aspectRatio":"16/9","scale":"cover","style":{"border":{"radius":"4px"}}} -->
                        <figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mono/mono-detail-1.png' ); ?>" alt="LUMA detail — analytics view with filter chips, time-range selector and a clean data table" style="border-radius:4px;aspect-ratio:16/9;object-fit:cover" loading="lazy"/></figure>
                        <!-- /wp:image -->
                        <!-- wp:paragraph {"className":"mono-caption","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em"},"color":{"text":"var:preset|color|muted"}}} -->
                        <p class="mono-caption has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em">Fig. 02 — Analytics view. Filter chips are typed queries, not strings — every option resolves to a documented shape the service layer understands.</p>
                        <!-- /wp:paragraph -->

                        <!-- Gallery image 2 + 3 — split pair -->
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"var:preset|spacing|60"}}}} -->
                        <div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--60)">
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"4px"}}} -->
                                        <figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mono/mono-detail-2.png' ); ?>" alt="LUMA detail — settings panel with typed forms, validation states and a clean sidebar" style="border-radius:4px;aspect-ratio:4/3;object-fit:cover" loading="lazy"/></figure>
                                        <!-- /wp:image -->
                                        <!-- wp:paragraph {"className":"mono-caption","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="mono-caption has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em">Fig. 03 — Settings. Form schema is generated from the same types package the backend uses — no hand-written validation drift.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"4px"}}} -->
                                        <figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mono/mono-detail-3.png' ); ?>" alt="LUMA detail — command palette with keyboard navigation over typed commands" style="border-radius:4px;aspect-ratio:4/3;object-fit:cover" loading="lazy"/></figure>
                                        <!-- /wp:image -->
                                        <!-- wp:paragraph {"className":"mono-caption","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="mono-caption has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em">Fig. 04 — Command palette. Every command is a typed handler — keyboard-first, accessible, and the fastest path through the product.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ 11 — NEXT PROJECT ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Eyebrow -->
                        <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
                        <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500;margin-bottom:var(--wp--preset--spacing--30)">— Next project</p>
                        <!-- /wp:paragraph -->

                        <!-- Next project big link -->
                        <!-- wp:html -->
                        <a class="mono-display" href="#" style="display:block;text-decoration:none;color:var(--mono-ink);line-height:0.98;font-family:var(--wp--preset--font-family--display);font-weight:600;letter-spacing:-0.04em;font-size:clamp(2.5rem, 7vw, 6rem);">Next — Atlas <span class="mono-accent-text" aria-hidden="true">→</span></a>
                        <!-- /wp:html -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- Footer -->
        <!-- wp:template-part {"slug":"footer-mono","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
