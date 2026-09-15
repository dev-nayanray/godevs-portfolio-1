<?php
/**
 * Title: Demo — Mono (Developer) — About
 * Slug: godevs-portfolio/demo-mono-about
 * Description: MONO about — biography, experience, philosophy, availability. Recommended style variation: Mono.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, mono, about, biography, developer
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-mono","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-mono alignfull">

        <!-- Header -->
        <!-- wp:template-part {"slug":"header-mono","theme":"godevs-portfolio","tagName":"header"} /-->

        <!-- ═══ 01 — HERO ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Eyebrow + meta row -->
                        <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                        <div class="wp-block-group">
                                <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">— About</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">Based — Europe / Asia · Working globally · 10+ years</p>
                                <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Display H1 -->
                        <!-- wp:heading {"level":1,"className":"mono-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600","letterSpacing":"-0.03em","lineHeight":"1.0","fontSize":"clamp(2.5rem, 8vw, 7.5rem)"}}} -->
                        <h1 class="wp-block-heading mono-display" style="font-family:var(--wp--preset--font-family--display);font-weight:600;letter-spacing:-0.03em;line-height:1.0;font-size:clamp(2.5rem, 8vw, 7.5rem)">Engineer by discipline. <span class="mono-accent-text">Designer by instinct.</span></h1>
                        <!-- /wp:heading -->

                        <!-- Supporting copy + status -->
                        <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50)">
                                <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.6"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"0","maxWidth":"60ch"}}}} -->
                                <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.6;margin-top:0;max-width:60ch">A short introduction to the engineer behind the work — background, approach, philosophy, and the way I collaborate with founders and product teams.</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|foreground"}}} -->
                                <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--foreground);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500"><span class="mono-dot" aria-hidden="true"></span>Available for selected projects</p>
                                <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ 02 — BIOGRAPHY (portrait + long-form bio) ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Mono-2col layout -->
                        <!-- wp:html -->
                        <div class="mono-2col">
                                <div>
                                        <figure style="margin:0;">
                                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mono/mono-portrait.png' ); ?>" alt="Editorial portrait of the developer in a minimal studio, soft natural light, neutral background" style="aspect-ratio:4/5;object-fit:cover;border-radius:6px;width:100%;" loading="lazy">
                                                <p class="mono-caption">Fig. 01 — Studio portrait, 2026.</p>
                                        </figure>
                                </div>
                                <div>
                                        <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">— Biography</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:heading {"level":2,"className":"mono-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 4.5vw, 3.5rem)","lineHeight":"1.05","letterSpacing":"-0.025em","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
                                        <h2 class="wp-block-heading mono-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 4.5vw, 3.5rem);line-height:1.05;letter-spacing:-0.025em;font-weight:600;margin-bottom:var(--wp--preset--spacing--40)">A decade of building things that ship.</h2>
                                        <!-- /wp:heading -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.7">I started writing code because I wanted to make interfaces that felt right — not just functional, but considered. That instinct carried me through a decade of work across product platforms, design systems and technical architecture, with a long detour through WordPress and WooCommerce that taught me how real businesses ship software.</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.7">Today I work as an independent developer and creative technologist, mostly with founders and small product teams. The work tends to live where engineering meets design: a typed API surface, a service layer that stays legible six months in, an interface that doesn't make the user think. I write code that other engineers want to maintain.</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.7">My approach is patient and deliberate. I prefer small, reversible changes over big-bang rewrites. I write tests early, measure twice, and keep design tokens, components and documentation as first-class artefacts. I ship often, but never without a clear reason for what's being shipped.</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.7">Outside of client work, I write about engineering and design, contribute to a handful of open-source projects, and tinker with small tools that make developer workflows a little less painful. I'm based between Europe and Asia, work globally, and keep a deliberately small calendar so I can do good work.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                        </div>
                        <!-- /wp:html -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ 03 — PHILOSOPHY (pullquote-style statement) ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Mono-2col asymmetric: statement + attribution -->
                        <!-- wp:html -->
                        <div class="mono-2col is-wide-narrow" style="align-items:start;">
                                <div>
                                        <p class="is-style-mono-label" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500;margin:0 0 1.5rem 0;">— Philosophy</p>
                                        <p class="mono-display" style="font-family:var(--wp--preset--font-family--display);font-weight:600;letter-spacing:-0.025em;line-height:1.05;font-size:clamp(1.875rem, 4vw, 3.25rem);margin:0;max-width:26ch;">Good software is invisible — it <span class="mono-accent-text">just works, beautifully.</span></p>
                                        <p class="is-style-mono-label" style="color:var(--wp--preset--color--foreground);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500;margin:1.5rem 0 0 0;">— the developer</p>
                                </div>
                                <div>
                                        <p style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.7;margin:0;">The best products disappear into use. When the engineering is right, the interface fades, the system stays legible, and the user is free to do their work. That is the standard I hold myself to — quiet, durable, useful.</p>
                                </div>
                        </div>
                        <!-- /wp:html -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ 04 — EXPERIENCE (mono-row timeline, demo content) ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns">
                                <!-- wp:column {"width":"30%"} -->
                                <div class="wp-block-column" style="flex-basis:30%">
                                        <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">— Experience (demo)</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"width":"70%"} -->
                                <div class="wp-block-column" style="flex-basis:70%">
                                        <!-- wp:heading {"level":2,"className":"mono-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 4.5vw, 3.5rem)","lineHeight":"1.05","letterSpacing":"-0.025em","fontWeight":"600"}}} -->
                                        <h2 class="wp-block-heading mono-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 4.5vw, 3.5rem);line-height:1.05;letter-spacing:-0.025em;font-weight:600">Where I've worked.</h2>
                                        <!-- /wp:heading -->
                                        <!-- wp:html -->
                                        <div style="margin-top: 2rem;">
                                                <div class="mono-row" style="text-decoration: none;">
                                                        <span class="mono-row-num">2026 — Now</span>
                                                        <span class="mono-row-title">Independent Developer</span>
                                                        <span class="mono-row-desc">Building digital products for startups and businesses.</span>
                                                        <span class="mono-row-arrow" aria-hidden="true">—</span>
                                                </div>
                                                <div class="mono-row" style="text-decoration: none;">
                                                        <span class="mono-row-num">2023 — 2026</span>
                                                        <span class="mono-row-title">Senior Frontend Engineer</span>
                                                        <span class="mono-row-desc">Product development and design systems.</span>
                                                        <span class="mono-row-arrow" aria-hidden="true">—</span>
                                                </div>
                                                <div class="mono-row" style="text-decoration: none;">
                                                        <span class="mono-row-num">2020 — 2023</span>
                                                        <span class="mono-row-title">Full-Stack Developer</span>
                                                        <span class="mono-row-desc">Web applications and digital platforms.</span>
                                                        <span class="mono-row-arrow" aria-hidden="true">—</span>
                                                </div>
                                                <div class="mono-row" style="text-decoration: none;">
                                                        <span class="mono-row-num">2016 — 2020</span>
                                                        <span class="mono-row-title">WordPress Developer</span>
                                                        <span class="mono-row-desc">Custom themes, plugins and WooCommerce.</span>
                                                        <span class="mono-row-arrow" aria-hidden="true">—</span>
                                                </div>
                                        </div>
                                        <!-- /wp:html -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ 05 — PRINCIPLES ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns">
                                <!-- wp:column {"width":"30%"} -->
                                <div class="wp-block-column" style="flex-basis:30%">
                                        <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">— Principles</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"width":"70%"} -->
                                <div class="wp-block-column" style="flex-basis:70%">
                                        <!-- wp:heading {"level":2,"className":"mono-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 4.5vw, 3.5rem)","lineHeight":"1.05","letterSpacing":"-0.025em","fontWeight":"600"}}} -->
                                        <h2 class="wp-block-heading mono-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 4.5vw, 3.5rem);line-height:1.05;letter-spacing:-0.025em;font-weight:600">How I build.</h2>
                                        <!-- /wp:heading -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                        <!-- Principles grid -->
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"var:preset|spacing|50"}}}} -->
                        <div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--50)">
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.04em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
                                        <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.04em;text-transform:uppercase;font-weight:600">01 — Simplicity</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.65"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.65">Remove unnecessary complexity.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.04em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
                                        <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.04em;text-transform:uppercase;font-weight:600">02 — Performance</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.65"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.65">Fast experiences are better experiences.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.04em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
                                        <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.04em;text-transform:uppercase;font-weight:600">03 — Accessibility</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.65"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.65">Products should work for everyone.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.04em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
                                        <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.04em;text-transform:uppercase;font-weight:600">04 — Maintainability</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.65"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.65">Good code should remain understandable.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.04em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
                                        <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.04em;text-transform:uppercase;font-weight:600">05 — Detail</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.65"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small);line-height:1.65">Small details create great products.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ 06 — STUDIO IMAGE (wide, captioned) ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Section header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
                                <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">— Studio</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.75rem, 3.5vw, 2.75rem)","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
                                <h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 3.5vw, 2.75rem);line-height:1.1;letter-spacing:-0.02em;font-weight:600">Where the work happens.</h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Wide studio image -->
                        <!-- wp:image {"aspectRatio":"21/9","scale":"cover","style":{"border":{"radius":"6px"}}} -->
                        <figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mono/mono-studio.png' ); ?>" alt="Clean minimal developer studio — laptop with abstract product interface, neutral desk, soft daylight" style="border-radius:6px;aspect-ratio:21/9;object-fit:cover" loading="lazy"/><p class="mono-caption">Fig. 02 — Workspace, Europe / Asia. Daylight, a laptop, and a deliberately small toolkit.</p></figure>
                        <!-- /wp:image -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ 07 — CLOSING CTA ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                        <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">— Closing</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.875rem","letterSpacing":"0.01em","fontWeight":"500"}}} -->
                        <p style="font-family:var(--wp--preset--font-family--mono);font-size:0.875rem;letter-spacing:0.01em;font-weight:500"><a href="/contact">Have a project worth building? →</a></p>
                        <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- Footer -->
        <!-- wp:template-part {"slug":"footer-mono","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
