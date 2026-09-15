<?php
/**
 * Title: Demo — Frame (Photography) — Story
 * Slug: godevs-portfolio/demo-frame-story
 * Description: FRAME single photo story — immersive editorial layout, large plates. Recommended style variation: Frame.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, frame, story, photo essay, photography
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) {
        exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-frame","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-frame alignfull">

        <!-- Header (minimal — floats over the story) -->
        <!-- wp:template-part {"slug":"header-frame","theme":"godevs-portfolio","tagName":"header"} /-->

        <!-- ═══ STORY HERO — typography hero, no image ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|70","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:paragraph {"className":"is-style-frame-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"}}} -->
                        <p class="is-style-frame-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:400">Photo Story — 2026</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:heading {"level":1,"className":"frame-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"300","letterSpacing":"-0.03em","lineHeight":"0.96","fontSize":"clamp(3rem, 10vw, 9rem)"}}} -->
                        <h1 class="wp-block-heading frame-display" style="font-family:var(--wp--preset--font-family--display);font-weight:300;letter-spacing:-0.03em;line-height:0.96;font-size:clamp(3rem, 10vw, 9rem)">Quiet <span class="frame-italic">Coast</span></h1>
                        <!-- /wp:heading -->
                        <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:400;margin-top:var(--wp--preset--spacing--40)">Landscape · 2026 · 14 plates · Commission</p>
                        <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ PLATE 01 — full-bleed hero plate ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|30","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:html -->
                        <a class="frame-story" href="#" style="display:block; aspect-ratio: 21/9;" aria-label="View photograph — Plate 01">
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/frame/frame-story-1.webp' ); ?>" alt="Landscape photograph — vast atmospheric coastline horizon at dawn with soft grey light" loading="eager">
                        </a>
                        <!-- /wp:html -->
                        <!-- wp:paragraph {"className":"frame-story-caption","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"}}} -->
                        <p class="frame-story-caption has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.12em;text-transform:uppercase;font-weight:400">Plate 01 — Atlantic, first light</p>
                        <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ INTRODUCTION — frame-2col, is-wide-narrow ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:columns {"align":"wide","className":"frame-2col is-wide-narrow","style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
                <div class="wp-block-columns alignwide frame-2col is-wide-narrow">
                        <!-- wp:column {"width":"63%"} -->
                        <div class="wp-block-column" style="flex-basis:63%">
                                <!-- wp:paragraph {"className":"is-style-frame-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
                                <p class="is-style-frame-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:400;margin-bottom:var(--wp--preset--spacing--30)">— Introduction</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:paragraph {"className":"frame-pullquote","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.5rem, 3vw, 2.25rem)","lineHeight":"1.2","letterSpacing":"-0.02em","fontWeight":"300"},"layout":{"selfStretch":"fit","flexSize":"28ch"},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
                                <p class="frame-pullquote" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.5rem, 3vw, 2.25rem);line-height:1.2;letter-spacing:-0.02em;font-weight:300;max-width:28ch;margin-bottom:var(--wp--preset--spacing--50)">A series made along a single kilometre of Atlantic coast — fourteen plates, made over four winters, of the horizon holding still.</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"var:preset|font-size|normal","lineHeight":"1.75","fontWeight":"300"},"color":{"text":"var:preset|color|muted"},"layout":{"selfStretch":"fit","flexSize":"48ch"}}} -->
                                <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:var(--wp--preset--font-size--normal);line-height:1.75;font-weight:300;max-width:48ch">The work began as a commission for a small book on emptiness. I returned each winter to the same stretch of coastline and waited for the light to settle. The plates are arranged in the order they were made — a sequence of arrivals, not a sequence of views.</p>
                                <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:column -->
                        <!-- wp:column {"width":"37%"} -->
                        <div class="wp-block-column" style="flex-basis:37%">
                                <!-- wp:paragraph {"className":"is-style-frame-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
                                <p class="is-style-frame-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:400;margin-bottom:var(--wp--preset--spacing--30)">Series facts</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:html -->
                                <ul style="list-style:none;margin:0;padding:0;font-family:var(--wp--preset--font-family--body);font-size:0.8125rem;line-height:1.6;color:var(--wp--preset--color--foreground);">
                                        <li style="display:grid;grid-template-columns:5.5rem 1fr;gap:0 1rem;padding:0.7rem 0;border-top:1px solid var(--wp--preset--color--line);">
                                                <span style="font-size:0.625rem;letter-spacing:0.14em;text-transform:uppercase;color:var(--wp--preset--color--muted);">Title</span>
                                                <span style="font-weight:300;">Quiet Coast</span>
                                        </li>
                                        <li style="display:grid;grid-template-columns:5.5rem 1fr;gap:0 1rem;padding:0.7rem 0;border-top:1px solid var(--wp--preset--color--line);">
                                                <span style="font-size:0.625rem;letter-spacing:0.14em;text-transform:uppercase;color:var(--wp--preset--color--muted);">Year</span>
                                                <span style="font-weight:300;">2024 — 2026</span>
                                        </li>
                                        <li style="display:grid;grid-template-columns:5.5rem 1fr;gap:0 1rem;padding:0.7rem 0;border-top:1px solid var(--wp--preset--color--line);">
                                                <span style="font-size:0.625rem;letter-spacing:0.14em;text-transform:uppercase;color:var(--wp--preset--color--muted);">Format</span>
                                                <span style="font-weight:300;">4×5 film, digital print</span>
                                        </li>
                                        <li style="display:grid;grid-template-columns:5.5rem 1fr;gap:0 1rem;padding:0.7rem 0;border-top:1px solid var(--wp--preset--color--line);">
                                                <span style="font-size:0.625rem;letter-spacing:0.14em;text-transform:uppercase;color:var(--wp--preset--color--muted);">Plates</span>
                                                <span style="font-weight:300;">14</span>
                                        </li>
                                        <li style="display:grid;grid-template-columns:5.5rem 1fr;gap:0 1rem;padding:0.7rem 0;border-top:1px solid var(--wp--preset--color--line);">
                                                <span style="font-size:0.625rem;letter-spacing:0.14em;text-transform:uppercase;color:var(--wp--preset--color--muted);">Commission</span>
                                                <span style="font-weight:300;">Sternfeld Editions</span>
                                        </li>
                                        <li style="display:grid;grid-template-columns:5.5rem 1fr;gap:0 1rem;padding:0.7rem 0;border-top:1px solid var(--wp--preset--color--line);">
                                                <span style="font-size:0.625rem;letter-spacing:0.14em;text-transform:uppercase;color:var(--wp--preset--color--muted);">Edition</span>
                                                <span style="font-weight:300;">7 + 2 AP</span>
                                        </li>
                                        <li style="display:grid;grid-template-columns:5.5rem 1fr;gap:0 1rem;padding:0.7rem 0;border-top:1px solid var(--wp--preset--color--line);border-bottom:1px solid var(--wp--preset--color--line);">
                                                <span style="font-size:0.625rem;letter-spacing:0.14em;text-transform:uppercase;color:var(--wp--preset--color--muted);">Print run</span>
                                                <span style="font-weight:300;">500 books</span>
                                        </li>
                                </ul>
                                <!-- /wp:html -->
                        </div>
                        <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ STATEMENT — frame-pullquote, asymmetric ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:paragraph {"className":"frame-pullquote","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 4.5vw, 3.75rem)","lineHeight":"1.15","letterSpacing":"-0.025em","fontWeight":"300"},"layout":{"selfStretch":"fit","flexSize":"28ch"},"spacing":{"margin":{"left":"8%"}}}} -->
                        <p class="frame-pullquote" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 4.5vw, 3.75rem);line-height:1.15;letter-spacing:-0.025em;font-weight:300;max-width:28ch;margin-left:8%">The horizon held still long enough for the light to arrive.</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:paragraph {"className":"is-style-frame-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|40","left":"8%"}}}} -->
                        <p class="is-style-frame-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:400;margin-top:var(--wp--preset--spacing--40);margin-left:8%">— from the series</p>
                        <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ PLATE 02 — full-bleed wide ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|30","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:html -->
                        <a class="frame-story" href="#" style="display:block; aspect-ratio: 21/9;" aria-label="View photograph — Plate 02">
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/frame/frame-story-2.webp' ); ?>" alt="Landscape photograph — minimalist coastline horizon with low winter light" loading="lazy">
                        </a>
                        <!-- /wp:html -->
                        <!-- wp:paragraph {"className":"frame-story-caption","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"}}} -->
                        <p class="frame-story-caption has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.12em;text-transform:uppercase;font-weight:400">Plate 02 — Coast, midwinter</p>
                        <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ PLATE 03 — portrait, centered, narrow ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|30","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:html -->
                        <a class="frame-story" href="#" style="display:block; aspect-ratio: 3/4; max-width: 56%; margin: 0 auto;" aria-label="View photograph — Plate 03">
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/frame/frame-story-3.webp' ); ?>" alt="Landscape photograph — vertical study of mist over a calm sea horizon" loading="lazy">
                        </a>
                        <!-- /wp:html -->
                        <!-- wp:paragraph {"className":"frame-story-caption","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"}}} -->
                        <p class="frame-story-caption has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.12em;text-transform:uppercase;font-weight:400">Plate 03 — Sea fog, January</p>
                        <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ PLATES 04 + 05 — asymmetric pair ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|30","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:html -->
                        <div class="frame-stories">
                                <a class="frame-story fs-3" href="#" aria-label="View photograph — Plate 04">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/frame/frame-detail-1.png' ); ?>" alt="Detail photograph — texture study of weathered painted surface in low light" loading="lazy">
                                </a>
                                <a class="frame-story fs-4" href="#" aria-label="View photograph — Plate 05">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/frame/frame-detail-2.webp' ); ?>" alt="Detail photograph — close study of folded fabric catching low light" loading="lazy">
                                </a>
                        </div>
                        <!-- /wp:html -->
                        <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"baseline"}} -->
                        <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)">
                                <!-- wp:paragraph {"className":"frame-story-caption","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="frame-story-caption has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.12em;text-transform:uppercase;font-weight:400">Plate 04 &nbsp;·&nbsp; Plate 05</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:paragraph {"className":"is-style-frame-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-frame-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:400">Surface studies</p>
                                <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ PRINT & EDITION NOTE — frame-light section ═══ -->
        <!-- wp:group {"tagName":"section","className":"frame-light","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull frame-light" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:paragraph {"className":"is-style-frame-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"400"}}} -->
                        <p class="is-style-frame-label" style="font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:400">— Print edition</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.25rem, 2.5vw, 1.875rem)","lineHeight":"1.3","letterSpacing":"-0.015em","fontWeight":"300"},"layout":{"selfStretch":"fit","flexSize":"56ch"}}} -->
                        <p style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.25rem, 2.5vw, 1.875rem);line-height:1.3;letter-spacing:-0.015em;font-weight:300;max-width:56ch">Each plate is printed on Hahnemühle Photo Rag 308gsm, in an edition of seven with two artist's proofs. Prints are signed, numbered and dated on the verso.</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"var:preset|font-size|small","lineHeight":"1.7","fontWeight":"300"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
                        <p style="font-family:var(--wp--preset--font-family--body);font-size:var(--wp--preset--font-size--small);line-height:1.7;font-weight:300;margin-top:var(--wp--preset--spacing--30)">The series is also collected in a clothbound book of 500 copies, designed and bound in Lisbon, 2026. Enquiries: studio@frame.work.</p>
                        <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ NEXT STORY — large frame-display link ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:paragraph {"className":"is-style-frame-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"}}} -->
                        <p class="is-style-frame-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:400">— Next</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:html -->
                        <a href="#" class="frame-display" style="display:block;font-family:var(--wp--preset--font-family--display);font-weight:300;font-size:clamp(2.5rem, 7vw, 6rem);line-height:1;letter-spacing:-0.03em;text-decoration:none;color:var(--wp--preset--color--foreground);transition:color 0.4s ease;">Next — <span class="frame-italic">Wall Study</span> <span style="font-family:var(--wp--preset--font-family--serif);font-style:italic;color:var(--wp--preset--color--accent);margin-left:0.4rem;">→</span></a>
                        <!-- /wp:html -->
                        <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:400;margin-top:var(--wp--preset--spacing--30)">Architecture · 2025 · 9 plates</p>
                        <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- Footer -->
        <!-- wp:template-part {"slug":"footer-frame","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
