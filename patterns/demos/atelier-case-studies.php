<?php
/**
 * Title: Demo — Atelier (Designer) — Case Studies
 * Slug: godevs-portfolio/demo-atelier-case-studies
 * Description: ATELIER single project case study — FORMA, editorial immersive layout. Recommended style variation: Atelier.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, atelier, case-study, project, designer
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) {
        exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-atelier","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-atelier alignfull">

        <!-- Header -->
        <!-- wp:template-part {"slug":"header-atelier","theme":"godevs-portfolio","tagName":"header"} /-->

        <!-- ═══ 01 — PROJECT HERO: typography IS the hero ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Top metadata row -->
                        <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
                                <!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">Case Study — 2026</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">Project N° 01 / 24</p>
                                <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Display H1 — Forma -->
                        <!-- wp:heading {"level":1,"className":"atelier-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"400","letterSpacing":"-0.02em","lineHeight":"0.92","fontSize":"clamp(3rem, 11vw, 8rem)"}}} -->
                        <h1 class="wp-block-heading atelier-display" style="font-family:var(--wp--preset--font-family--display);font-weight:400;letter-spacing:-0.02em;line-height:0.92;font-size:clamp(3rem, 11vw, 8rem)">Forma<span class="atelier-italic">.</span></h1>
                        <!-- /wp:heading -->

                        <!-- Mono meta row -->
                        <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500;margin-top:var(--wp--preset--spacing--40)">Visual Identity · Digital · Art Direction · 2026 · Forma Studio</p>
                        <!-- /wp:paragraph -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ 02 — FULL-WIDTH HERO VISUAL ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:image {"align":"wide","aspectRatio":"21/9","scale":"cover"} -->
                        <figure class="wp-block-image alignwide"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/atelier/atelier-project-forma.png' ); ?>" alt="FORMA — full-bleed hero image of the brand identity system: wordmark, typographic specimens and editorial collateral arranged on warm ivory paper" style="aspect-ratio:21/9;object-fit:cover" loading="eager"/></figure>
                        <!-- /wp:image -->
                        <!-- wp:paragraph {"className":"atelier-caption","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"0.8125rem"},"color":{"text":"var:preset|color|muted"}}} -->
                        <p class="atelier-caption has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:0.8125rem">Fig. 01 — The Forma identity, applied across editorial, digital and environmental surfaces.</p>
                        <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ 03 — OVERVIEW: wide / narrow editorial split ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- wp:html -->
                        <div class="atelier-2col is-wide-narrow">
                                <div>
                                        <p class="is-style-atelier-label" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">— Overview</p>
                                        <p class="atelier-statement" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.5rem, 2.6vw, 2.125rem);line-height:1.25;letter-spacing:-0.01em;font-weight:400;margin-top:var(--wp--preset--spacing--30);max-width:38ch">A complete identity for a contemporary design house — built to hold across digital, editorial and physical environments.</p>
                                        <p style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--normal);line-height:1.75;margin-top:var(--wp--preset--spacing--50);max-width:56ch">Forma is a contemporary design house working across objects, interiors and publications. The studio asked for a visual language that could carry the brand from a business card to a flagship interior without losing coherence — one that felt as considered as the work it framed. The result is a system built on restraint: a serif wordmark, a warm ivory palette and a photographic world designed to age well.</p>
                                        <p class="is-style-atelier-label" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500;margin-top:var(--wp--preset--spacing--60)">Project facts</p>
                                        <dl style="margin-top:1rem;display:grid;grid-template-columns:1fr;gap:0.6rem;font-family:var(--wp--preset--font-family--body);font-size:0.8125rem;color:var(--atelier-ink);">
                                                <div style="display:grid;grid-template-columns:8rem 1fr;gap:1rem;padding:0.65rem 0;border-top:1px solid var(--atelier-line);">
                                                        <dt style="color:var(--atelier-muted);text-transform:uppercase;letter-spacing:0.14em;font-size:0.6875rem;align-self:center;">Client</dt>
                                                        <dd style="margin:0;">Forma Studio</dd>
                                                </div>
                                                <div style="display:grid;grid-template-columns:8rem 1fr;gap:1rem;padding:0.65rem 0;border-top:1px solid var(--atelier-line);">
                                                        <dt style="color:var(--atelier-muted);text-transform:uppercase;letter-spacing:0.14em;font-size:0.6875rem;align-self:center;">Sector</dt>
                                                        <dd style="margin:0;">Design Objects &amp; Interiors</dd>
                                                </div>
                                                <div style="display:grid;grid-template-columns:8rem 1fr;gap:1rem;padding:0.65rem 0;border-top:1px solid var(--atelier-line);">
                                                        <dt style="color:var(--atelier-muted);text-transform:uppercase;letter-spacing:0.14em;font-size:0.6875rem;align-self:center;">Role</dt>
                                                        <dd style="margin:0;">Lead Creative Direction</dd>
                                                </div>
                                                <div style="display:grid;grid-template-columns:8rem 1fr;gap:1rem;padding:0.65rem 0;border-top:1px solid var(--atelier-line);">
                                                        <dt style="color:var(--atelier-muted);text-transform:uppercase;letter-spacing:0.14em;font-size:0.6875rem;align-self:center;">Services</dt>
                                                        <dd style="margin:0;">Identity · Art Direction · Digital · Editorial</dd>
                                                </div>
                                                <div style="display:grid;grid-template-columns:8rem 1fr;gap:1rem;padding:0.65rem 0;border-top:1px solid var(--atelier-line);border-bottom:1px solid var(--atelier-line);">
                                                        <dt style="color:var(--atelier-muted);text-transform:uppercase;letter-spacing:0.14em;font-size:0.6875rem;align-self:center;">Timeline</dt>
                                                        <dd style="margin:0;">14 weeks — Spring 2026</dd>
                                                </div>
                                        </dl>
                                </div>
                                <div>
                                        <p class="atelier-pullquote" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.5rem, 2.4vw, 2rem);line-height:1.22;letter-spacing:-0.01em;font-weight:400;max-width:22ch">Every detail feels intentional — the identity reads as confidently on a business card as it does across a flagship interior.</p>
                                        <p style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.14em;text-transform:uppercase;margin-top:var(--wp--preset--spacing--40)">Maya Rahman — Founder, Forma</p>
                                </div>
                        </div>
                        <!-- /wp:html -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ 04 — CHALLENGE ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns">
                                <!-- wp:column {"width":"30%"} -->
                                <div class="wp-block-column" style="flex-basis:30%">
                                        <!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">— The Challenge</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"width":"70%"} -->
                                <div class="wp-block-column" style="flex-basis:70%">
                                        <!-- wp:heading {"level":2,"className":"atelier-statement","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 4.2vw, 3.25rem)","lineHeight":"1.05","letterSpacing":"-0.015em","fontWeight":"400"}}} -->
                                        <h2 class="wp-block-heading atelier-statement" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 4.2vw, 3.25rem);line-height:1.05;letter-spacing:-0.015em;font-weight:400">The challenge.</h2>
                                        <!-- /wp:heading -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                        <!-- Two-column text -->
                        <!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--60)">
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|normal","lineHeight":"1.75"},"color":{"text":"var:preset|color|foreground"},"layout":{"selfStretch":"fit","flexSize":"46ch"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--foreground);font-size:var(--wp--preset--font-size--normal);line-height:1.75;max-width:46ch">Forma's work moves between surfaces — a furniture collection, an interior commission, a quarterly publication — and each surface had been designed in isolation. The studio had a strong point of view but no shared language to carry it across every touchpoint.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|normal","lineHeight":"1.75"},"color":{"text":"var:preset|color|foreground"},"layout":{"selfStretch":"fit","flexSize":"46ch"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--foreground);font-size:var(--wp--preset--font-size--normal);line-height:1.75;max-width:46ch">The brief was to build a system that could hold across all of it — flexible enough for digital, editorial and physical environments, restrained enough to feel like a single hand. Nothing decorative; a structure the studio could live inside for the next decade.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ 05 — APPROACH ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Section header -->
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns">
                                <!-- wp:column {"width":"30%"} -->
                                <div class="wp-block-column" style="flex-basis:30%">
                                        <!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">— The Approach</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"width":"70%"} -->
                                <div class="wp-block-column" style="flex-basis:70%">
                                        <!-- wp:heading {"level":2,"className":"atelier-statement","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 4.2vw, 3.25rem)","lineHeight":"1.05","letterSpacing":"-0.015em","fontWeight":"400"}}} -->
                                        <h2 class="wp-block-heading atelier-statement" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 4.2vw, 3.25rem);line-height:1.05;letter-spacing:-0.015em;font-weight:400">The approach.</h2>
                                        <!-- /wp:heading -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                        <!-- Approach text -->
                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.65","fontFamily":"var:preset|font-family|display"},"color":{"text":"var:preset|color|foreground"},"spacing":{"margin":{"top":"var:preset|spacing|60"}},"layout":{"selfStretch":"fit","flexSize":"62ch"}}} -->
                        <p class="has-text-color" style="color:var(--wp--preset--color--foreground);font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--medium);line-height:1.65;margin-top:var(--wp--preset--spacing--60);max-width:62ch">We started from type. A custom serif wordmark anchors the system — drawn with a single, consistent ductus — paired with a quiet sans for utility and a structured editorial grid that holds across print, screen and environment. From there, a warm ivory palette and a photographic language built on natural light and material close-ups gave every surface a shared atmosphere.</p>
                        <!-- /wp:paragraph -->

                        <!-- Approach detail image -->
                        <!-- wp:image {"align":"wide","aspectRatio":"16/9","scale":"cover"} -->
                        <figure class="wp-block-image alignwide" style="margin-top:var(--wp--preset--spacing--60)"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/atelier/atelier-forma-detail-1.png' ); ?>" alt="Forma — typographic system close-up: serif wordmark specimens, grid layout and editorial compositions on warm ivory paper" style="aspect-ratio:16/9;object-fit:cover" loading="lazy"/></figure>
                        <!-- /wp:image -->
                        <!-- wp:paragraph {"className":"atelier-caption","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"0.8125rem"},"color":{"text":"var:preset|color|muted"}}} -->
                        <p class="atelier-caption has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:0.8125rem">Fig. 02 — Type system: serif wordmark, sans pairing and the editorial grid that holds across formats.</p>
                        <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ 06 — GALLERY: two details side by side ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Section header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
                                <!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">— In Detail</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 4.2vw, 3.25rem)","lineHeight":"1.05","letterSpacing":"-0.015em","fontWeight":"400"}}} -->
                                <h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 4.2vw, 3.25rem);line-height:1.05;letter-spacing:-0.015em;font-weight:400">A closer <span style="font-style:italic">look.</span></h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Two-image gallery -->
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
                        <div class="wp-block-columns">
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:image {"aspectRatio":"4/5","scale":"cover"} -->
                                        <figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/atelier/atelier-forma-detail-2.png' ); ?>" alt="Forma — editorial collateral detail: business cards, letterhead and printed specimens on warm ivory paper" style="aspect-ratio:4/5;object-fit:cover" loading="lazy"/></figure>
                                        <!-- /wp:image -->
                                        <!-- wp:paragraph {"className":"atelier-caption","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"0.8125rem"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="atelier-caption has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:0.8125rem">Fig. 03 — Stationery system: debossed wordmark, ivory stock and a sans utility typeface for utility text.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:image {"aspectRatio":"4/5","scale":"cover"} -->
                                        <figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/atelier/atelier-forma-detail-3.png' ); ?>" alt="Forma — environmental application: large-format wordmark installed in a flagship interior with warm ivory surfaces and natural light" style="aspect-ratio:4/5;object-fit:cover" loading="lazy"/></figure>
                                        <!-- /wp:image -->
                                        <!-- wp:paragraph {"className":"atelier-caption","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"0.8125rem"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="atelier-caption has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:0.8125rem">Fig. 04 — Environmental application: the wordmark at architectural scale inside the Forma flagship.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ 07 — OUTCOME ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns">
                                <!-- wp:column {"width":"30%"} -->
                                <div class="wp-block-column" style="flex-basis:30%">
                                        <!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                        <p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">— The Outcome</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"width":"70%"} -->
                                <div class="wp-block-column" style="flex-basis:70%">
                                        <!-- wp:heading {"level":2,"className":"atelier-statement","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 4.2vw, 3.25rem)","lineHeight":"1.05","letterSpacing":"-0.015em","fontWeight":"400"}}} -->
                                        <h2 class="wp-block-heading atelier-statement" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 4.2vw, 3.25rem);line-height:1.05;letter-spacing:-0.015em;font-weight:400">The outcome.</h2>
                                        <!-- /wp:heading -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                        <!-- Outcome body -->
                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|normal","lineHeight":"1.75"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|60"}},"layout":{"selfStretch":"fit","flexSize":"62ch"}}} -->
                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--normal);line-height:1.75;margin-top:var(--wp--preset--spacing--60);max-width:62ch">The system launched across the studio's spring collection and flagship interior. It now carries every Forma surface — packaging, publications, signage and digital — held together by a shared typographic and material language. The studio continues to extend it without us, which is the point of a system built to last.</p>
                        <!-- /wp:paragraph -->

                        <!-- Stats line -->
                        <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"baseline"}} -->
                        <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60)">
                                <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 5vw, 3.25rem)","lineHeight":"1.0","letterSpacing":"-0.02em","fontWeight":"400"},"color":{"text":"var:preset|color|foreground"}}} -->
                                <p class="has-text-color" style="color:var(--wp--preset--color--foreground);font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 5vw, 3.25rem);line-height:1.0;letter-spacing:-0.02em;font-weight:400">+40<span style="font-style:italic">%</span></p>
                                <!-- /wp:paragraph -->
                                <!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500">brand recognition</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 5vw, 3.25rem)","lineHeight":"1.0","letterSpacing":"-0.02em","fontWeight":"400"},"color":{"text":"var:preset|color|foreground"}}} -->
                                <p class="has-text-color" style="color:var(--wp--preset--color--foreground);font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 5vw, 3.25rem);line-height:1.0;letter-spacing:-0.02em;font-weight:400">12<span style="font-style:italic">.</span></p>
                                <!-- /wp:paragraph -->
                                <!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500">touchpoints</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 5vw, 3.25rem)","lineHeight":"1.0","letterSpacing":"-0.02em","fontWeight":"400"},"color":{"text":"var:preset|color|foreground"}}} -->
                                <p class="has-text-color" style="color:var(--wp--preset--color--foreground);font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 5vw, 3.25rem);line-height:1.0;letter-spacing:-0.02em;font-weight:400">1<span style="font-style:italic"> system</span></p>
                                <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.625rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
                        <p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.625rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500;margin-top:var(--wp--preset--spacing--30)">(Demo data — illustrative figures for case-study layout purposes.)</p>
                        <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ 08 — NEXT PROJECT ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|120","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--120);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                        <p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">— Next Project</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:heading {"level":2,"className":"atelier-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 7vw, 5.5rem)","lineHeight":"1.0","letterSpacing":"-0.02em","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
                        <h2 class="wp-block-heading atelier-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 7vw, 5.5rem);line-height:1.0;letter-spacing:-0.02em;font-weight:400;margin-top:var(--wp--preset--spacing--30)"><a href="#" style="color:inherit;text-decoration:none;">Next — <span style="font-style:italic">Maison 24</span> <span class="atelier-arrow" aria-hidden="true">→</span></a></h2>
                        <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- Footer -->
        <!-- wp:template-part {"slug":"footer-atelier","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
