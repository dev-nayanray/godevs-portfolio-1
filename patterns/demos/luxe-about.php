<?php
/**
 * Title: Demo — Luxe (Fashion) — About
 * Slug: godevs-portfolio/demo-luxe-about
 * Description: LUXE about — designer biography, philosophy, collaborations. Recommended style variation: Luxe.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, luxe, about, designer, biography
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) {
        exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-luxe","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-luxe alignfull">

        <!-- Header -->
        <!-- wp:template-part {"slug":"header-luxe","theme":"godevs-portfolio","tagName":"header"} /-->

        <!-- ═══ 01 — HERO: the designer ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Top metadata row -->
                        <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
                                <!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">— The Designer</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">Based — Paris / Dhaka · Worldwide · Independent Practice</p>
                                <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- H1 -->
                        <!-- wp:heading {"level":1,"className":"luxe-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"400","letterSpacing":"-0.025em","lineHeight":"1.0","fontSize":"clamp(2.75rem, 8vw, 7.5rem)"}}} -->
                        <h1 class="wp-block-heading luxe-display" style="font-family:var(--wp--preset--font-family--display);font-weight:400;letter-spacing:-0.025em;line-height:1.0;font-size:clamp(2.75rem, 8vw, 7.5rem)">Clothing is <span class="luxe-italic">language.</span></h1>
                        <!-- /wp:heading -->

                        <!-- Supporting line -->
                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.6"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.6;margin-top:var(--wp--preset--spacing--40);max-width:52ch">An independent fashion practice — exploring identity, material and image through collection, editorial and campaign.</p>
                        <!-- /wp:paragraph -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ 02 — BIOGRAPHY ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Two-column: portrait / biography -->
                        <!-- wp:html -->
                        <div class="luxe-2col">
                                <div>
                                        <figure class="luxe-card" style="display:block;">
                                                <div class="luxe-card-media" style="aspect-ratio: 4/5;">
                                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/luxe/luxe-portrait.png' ); ?>" alt="Editorial portrait of the fashion designer, soft natural light, ivory backdrop, thoughtful" loading="lazy">
                                                </div>
                                                <p class="luxe-caption" style="margin-top: 1rem;">The Designer — in studio, Paris.</p>
                                        </figure>
                                </div>
                                <div>
                                        <p class="is-style-luxe-label" style="font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500;color:var(--luxe-muted);margin-bottom:1.5rem;">— Biography</p>
                                        <p style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.625rem, 3vw, 2.25rem);line-height:1.25;letter-spacing:-0.015em;font-weight:400;max-width:30ch;margin:0 0 2rem;">A practice shaped between two cities, and the slow accumulation of restraint.</p>
                                        <p style="font-size:var(--wp--preset--font-size--medium);line-height:1.75;color:var(--luxe-muted);max-width:60ch;margin:0 0 1.5rem;">Trained between the studios of Paris and the textile houses of Dhaka, the practice has spent over a decade learning how a single garment can hold meaning. The work began with a question — what does it mean to design quietly, in an industry built around noise?</p>
                                        <p style="font-size:var(--wp--preset--font-size--medium);line-height:1.75;color:var(--luxe-muted);max-width:60ch;margin:0 0 1.5rem;">Each collection begins with research: a textile sourced from a single mill, a silhouette drawn by hand, a colour pulled from a painting or a film. The studio resists trends; it favours restraint, proportion and the slow accumulation of detail. Garments are made to be worn for years, not seasons.</p>
                                        <p style="font-size:var(--wp--preset--font-size--medium);line-height:1.75;color:var(--luxe-muted);max-width:60ch;margin:0 0 1.5rem;">The studio operates as an independent practice — small, deliberate, accountable to the work itself. Collaborations are chosen carefully, often with photographers, architects and writers, and rarely more than a few each year. The aim is not to scale, but to make each piece feel inevitable.</p>
                                        <p style="font-size:var(--wp--preset--font-size--medium);line-height:1.75;color:var(--luxe-muted);max-width:60ch;margin:0;">The work has been shown in editorial and campaign contexts across Europe, South Asia and East Asia. It remains, at heart, a single practice — one designer, one atelier, and the slow pursuit of a coherent visual language.</p>
                                </div>
                        </div>
                        <!-- /wp:html -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ 03 — PHILOSOPHY ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Asymmetric layout: label / pullquote -->
                        <!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":"var:preset|spacing|80"}}} -->
                        <div class="wp-block-columns are-vertically-aligned-top">
                                <!-- wp:column {"verticalAlignment":"top","width":"32%"} -->
                                <div class="wp-block-column" style="flex-basis:32%">
                                        <!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">— Philosophy</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"verticalAlignment":"top","width":"68%"} -->
                                <div class="wp-block-column" style="flex-basis:68%">
                                        <!-- wp:html -->
                                        <blockquote class="luxe-pullquote" style="margin:0;max-width:26ch;">Restraint is not the absence of decoration — it is the presence of intention.</blockquote>
                                        <p class="luxe-caption" style="margin-top: 2rem;">— the designer</p>
                                        <!-- /wp:html -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ 04 — STUDIO IMAGE ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Eyebrow -->
                        <!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                        <p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">— The Atelier</p>
                        <!-- /wp:paragraph -->

                        <!-- Wide image -->
                        <!-- wp:image {"align":"wide","aspectRatio":"21/9","scale":"cover","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
                        <figure class="wp-block-image alignwide" style="margin-top:var(--wp--preset--spacing--40)"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/luxe/luxe-studio.png' ); ?>" alt="The atelier interior — quiet workroom with fabric, sewing forms and natural light, ivory and warm wood tones" style="aspect-ratio:21/9;object-fit:cover" loading="lazy"/></figure>
                        <!-- /wp:image -->

                        <!-- Caption -->
                        <!-- wp:paragraph {"className":"luxe-caption","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"0.875rem"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
                        <p class="luxe-caption has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:0.875rem;margin-top:var(--wp--preset--spacing--30)">The Atelier — Paris.</p>
                        <!-- /wp:paragraph -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ 05 — COLLABORATIONS ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                        <p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">— Selected Collaborations (demo content)</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:html -->
                        <div class="luxe-clients" style="margin-top: 2rem;" aria-label="Selected collaborations">
                                <span>Maison Forma</span><span>Aster</span><span>Monument</span><span>Sora</span><span>Mori</span><span>North</span><span>Atelier 24</span><span>Object Studio</span>
                        </div>
                        <!-- /wp:html -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ 06 — RECOGNITION / PRESS ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                        <p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">— Featured In (demo references)</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:html -->
                        <div class="luxe-clients" style="margin-top: 2rem;" aria-label="Featured press">
                                <span>Vogue</span><span>Dazed</span><span>Kinfolk</span><span>i-D</span><span>Wallpaper*</span><span>Monocle</span>
                        </div>
                        <!-- /wp:html -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ 07 — CLOSING LINE ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:paragraph {"className":"luxe-statement","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"clamp(1.75rem, 3.5vw, 2.75rem)","lineHeight":"1.2","letterSpacing":"-0.01em","fontWeight":"400"}}} -->
                        <p class="luxe-statement" style="font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:clamp(1.75rem, 3.5vw, 2.75rem);line-height:1.2;letter-spacing:-0.01em;font-weight:400;max-width:30ch">If the work resonates, the next conversation begins with a message.</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}},"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"1.0625rem"}}} -->
                        <p style="margin-top:var(--wp--preset--spacing--50);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:1.0625rem"><a href="/contact">Begin a conversation →</a></p>
                        <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- Footer -->
        <!-- wp:template-part {"slug":"footer-luxe","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
