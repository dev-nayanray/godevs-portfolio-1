<?php
/**
 * Title: Demo - Atelier (Designer) - Work
 * Slug: godevs-portfolio/demo-atelier-work
 * Description: ATELIER portfolio archive - editorial project grid, category filtering. Recommended style variation: Atelier.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, atelier, work, portfolio, archive, designer
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

        <!-- === 01 - ARCHIVE HEADER: editorial asymmetric === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|70","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Top metadata row -->
                        <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
                                <!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">- Work</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">Archive · 24 projects · 2024 - 2026</p>
                                <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Asymmetric H1 row -->
                        <!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"blockGap":"var:preset|spacing|60","margin":{"top":"var:preset|spacing|40"}}}} -->
                        <div class="wp-block-columns are-vertically-aligned-bottom" style="margin-top:var(--wp--preset--spacing--40)">
                                <!-- wp:column {"verticalAlignment":"bottom","width":"72%"} -->
                                <div class="wp-block-column" style="flex-basis:72%">
                                        <!-- wp:heading {"level":1,"className":"atelier-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"400","letterSpacing":"-0.02em","lineHeight":"1.0","fontSize":"clamp(2.5rem, 7vw, 6.5rem)"}}} -->
                                        <h1 class="wp-block-heading atelier-display" style="font-family:var(--wp--preset--font-family--display);font-weight:400;letter-spacing:-0.02em;line-height:1.0;font-size:clamp(2.5rem, 7vw, 6.5rem)">An archive of selected <span class="atelier-italic">projects.</span></h1>
                                        <!-- /wp:heading -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"verticalAlignment":"bottom","width":"28%"} -->
                                <div class="wp-block-column" style="flex-basis:28%">
                                        <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"1.0625rem","lineHeight":"1.55"},"color":{"text":"var:preset|color|muted"},"layout":{"selfStretch":"fit","flexSize":"32ch"}}} -->
                                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:1.0625rem;line-height:1.55;max-width:32ch">A working archive of identities, art direction, digital experiences and editorial work made between studio and client collaborations.</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 02 - CATEGORY FILTER === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|50","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                        <p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">Filter</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:html -->
                        <nav class="atelier-filter" aria-label="Project categories">
                                <a href="#" class="is-active">All</a>
                                <a href="#">Identity</a>
                                <a href="#">Art Direction</a>
                                <a href="#">Digital</a>
                                <a href="#">Editorial</a>
                                <a href="#">Campaign</a>
                                <a href="#">Installation</a>
                        </nav>
                        <!-- /wp:html -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 03 - EDITORIAL PROJECT LIST: structured, bordered, alternating === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- wp:html -->
                        <div class="atelier-archive" role="list" style="border-top:1px solid var(--atelier-line);">

                                <a class="atelier-archive-row" href="#" role="listitem" aria-label="View Forma project" style="display:grid;grid-template-columns:1fr;gap:1.5rem;padding:2.5rem 0;border-bottom:1px solid var(--atelier-line);align-items:center;">
                                        <div class="atelier-archive-text" style="display:grid;gap:0.6rem;">
                                                <p class="atelier-article-meta" style="margin:0;">01 · Identity · 2026</p>
                                                <h3 class="atelier-project-title" style="margin:0;">Forma</h3>
                                                <p style="font-size:var(--wp--preset--font-size--normal);line-height:1.65;color:var(--atelier-muted);max-width:46ch;margin:0;">A complete identity system for a contemporary design house - wordmark, type pairing, editorial templates and a photographic language carried across every touchpoint.</p>
                                                <p style="margin-top:0.4rem;"><span class="atelier-link">View project <span class="atelier-arrow" aria-hidden="true">→</span></span></p>
                                        </div>
                                        <div class="atelier-project-media" style="aspect-ratio:4/3;max-height:340px;">
                                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/atelier/atelier-project-forma.webp' ); ?>" alt="Forma - brand identity system for a contemporary design house, stationery flatlay on warm ivory paper" loading="lazy">
                                        </div>
                                </a>

                                <a class="atelier-archive-row is-reversed" href="#" role="listitem" aria-label="View Maison 24 project" style="display:grid;grid-template-columns:1fr;gap:1.5rem;padding:2.5rem 0;border-bottom:1px solid var(--atelier-line);align-items:center;">
                                        <div class="atelier-archive-text" style="display:grid;gap:0.6rem;">
                                                <p class="atelier-article-meta" style="margin:0;">02 · Art Direction · 2026</p>
                                                <h3 class="atelier-project-title" style="margin:0;">Maison 24</h3>
                                                <p style="font-size:var(--wp--preset--font-size--normal);line-height:1.65;color:var(--atelier-muted);max-width:46ch;margin:0;">Art direction for a fashion house's seasonal story - image world, casting, set and the editorial sequence that holds it together.</p>
                                                <p style="margin-top:0.4rem;"><span class="atelier-link">View project <span class="atelier-arrow" aria-hidden="true">→</span></span></p>
                                        </div>
                                        <div class="atelier-project-media" style="aspect-ratio:3/4;max-height:340px;">
                                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/atelier/atelier-project-maison24.webp' ); ?>" alt="Maison 24 - art direction fashion editorial, single figure in minimal architectural space" loading="lazy">
                                        </div>
                                </a>

                                <a class="atelier-archive-row" href="#" role="listitem" aria-label="View Noir Objects project" style="display:grid;grid-template-columns:1fr;gap:1.5rem;padding:2.5rem 0;border-bottom:1px solid var(--atelier-line);align-items:center;">
                                        <div class="atelier-archive-text" style="display:grid;gap:0.6rem;">
                                                <p class="atelier-article-meta" style="margin:0;">03 · Digital · 2025</p>
                                                <h3 class="atelier-project-title" style="margin:0;">Noir Objects</h3>
                                                <p style="font-size:var(--wp--preset--font-size--normal);line-height:1.65;color:var(--atelier-muted);max-width:46ch;margin:0;">A digital experience for a design objects gallery - interface, motion and an editorial system that treats objects as protagonists.</p>
                                                <p style="margin-top:0.4rem;"><span class="atelier-link">View project <span class="atelier-arrow" aria-hidden="true">→</span></span></p>
                                        </div>
                                        <div class="atelier-project-media" style="aspect-ratio:16/10;max-height:340px;">
                                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/atelier/atelier-project-noir.webp' ); ?>" alt="Noir Objects - digital product experience displayed on screen with warm ivory surroundings" loading="lazy">
                                        </div>
                                </a>

                                <a class="atelier-archive-row is-reversed" href="#" role="listitem" aria-label="View Sora project" style="display:grid;grid-template-columns:1fr;gap:1.5rem;padding:2.5rem 0;border-bottom:1px solid var(--atelier-line);align-items:center;">
                                        <div class="atelier-archive-text" style="display:grid;gap:0.6rem;">
                                                <p class="atelier-article-meta" style="margin:0;">04 · Identity · 2025</p>
                                                <h3 class="atelier-project-title" style="margin:0;">Sora</h3>
                                                <p style="font-size:var(--wp--preset--font-size--normal);line-height:1.65;color:var(--atelier-muted);max-width:46ch;margin:0;">A restrained visual identity for a skincare house - debossed wordmark, a quiet material system and packaging designed to age well.</p>
                                                <p style="margin-top:0.4rem;"><span class="atelier-link">View project <span class="atelier-arrow" aria-hidden="true">→</span></span></p>
                                        </div>
                                        <div class="atelier-project-media" style="aspect-ratio:1/1;max-height:340px;">
                                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/atelier/atelier-project-sora.webp' ); ?>" alt="Sora - visual identity mockup with folded paper collateral and debossed monogram" loading="lazy">
                                        </div>
                                </a>

                                <a class="atelier-archive-row" href="#" role="listitem" aria-label="View Field Notes project" style="display:grid;grid-template-columns:1fr;gap:1.5rem;padding:2.5rem 0;border-bottom:1px solid var(--atelier-line);align-items:center;">
                                        <div class="atelier-archive-text" style="display:grid;gap:0.6rem;">
                                                <p class="atelier-article-meta" style="margin:0;">05 · Editorial · 2025</p>
                                                <h3 class="atelier-project-title" style="margin:0;">Field Notes</h3>
                                                <p style="font-size:var(--wp--preset--font-size--normal);line-height:1.65;color:var(--atelier-muted);max-width:46ch;margin:0;">A 240-page publication documenting a year of studio practice - editorial design, image editing and a typographic system built for long-form reading.</p>
                                                <p style="margin-top:0.4rem;"><span class="atelier-link">View project <span class="atelier-arrow" aria-hidden="true">→</span></span></p>
                                        </div>
                                        <div class="atelier-project-media" style="aspect-ratio:3/4;max-height:340px;">
                                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/atelier/atelier-project-fieldnotes.webp' ); ?>" alt="Field Notes - editorial publication, open art book on warm ivory surface with typographic spreads" loading="lazy">
                                        </div>
                                </a>

                                <a class="atelier-archive-row is-reversed" href="#" role="listitem" aria-label="View Mori project" style="display:grid;grid-template-columns:1fr;gap:1.5rem;padding:2.5rem 0;border-bottom:1px solid var(--atelier-line);align-items:center;">
                                        <div class="atelier-archive-text" style="display:grid;gap:0.6rem;">
                                                <p class="atelier-article-meta" style="margin:0;">06 · Campaign · 2024</p>
                                                <h3 class="atelier-project-title" style="margin:0;">Mori</h3>
                                                <p style="font-size:var(--wp--preset--font-size--normal);line-height:1.65;color:var(--atelier-muted);max-width:46ch;margin:0;">A campaign for a botanical fragrance house - still life, motion and a flexible image system that carries across every channel.</p>
                                                <p style="margin-top:0.4rem;"><span class="atelier-link">View project <span class="atelier-arrow" aria-hidden="true">→</span></span></p>
                                        </div>
                                        <div class="atelier-project-media" style="aspect-ratio:16/10;max-height:340px;">
                                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/atelier/atelier-project-mori.webp' ); ?>" alt="Mori - campaign image, minimal still life with natural objects and soft shadow on warm ivory" loading="lazy">
                                        </div>
                                </a>

                        </div>

                        <style>
                                @media (min-width: 900px) {
                                        .wp-block-godevs-demo-atelier .atelier-archive-row {
                                                grid-template-columns: 1.2fr 1fr !important;
                                                gap: 4rem !important;
                                                padding: 3.5rem 0 !important;
                                        }
                                        .wp-block-godevs-demo-atelier .atelier-archive-row.is-reversed .atelier-archive-text { order: 2; }
                                        .wp-block-godevs-demo-atelier .atelier-archive-row .atelier-project-media { max-height: none; }
                                }
                                .wp-block-godevs-demo-atelier .atelier-archive-row {
                                        transition: padding 0.5s cubic-bezier(0.2, 0.8, 0.2, 1);
                                        text-decoration: none;
                                        color: var(--atelier-ink);
                                }
                                .wp-block-godevs-demo-atelier .atelier-archive-row:hover .atelier-project-title {
                                        color: var(--atelier-accent);
                                        font-style: italic;
                                }
                                .wp-block-godevs-demo-atelier .atelier-archive-row .atelier-project-title {
                                        transition: color 0.4s ease, font-style 0.4s ease;
                                }
                        </style>
                        <!-- /wp:html -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 04 - PAGINATION === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                        <p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">Page 1 of 3</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:html -->
                        <nav class="atelier-pagination" aria-label="Archive pagination">
                                <a href="#" aria-label="Previous page">← Prev</a>
                                <a href="#" class="is-current" aria-current="page">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#" aria-label="Next page">Next →</a>
                        </nav>
                        <!-- /wp:html -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 05 - CLOSING LINE === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns are-vertically-aligned-center">
                                <!-- wp:column {"verticalAlignment":"center","width":"65%"} -->
                                <div class="wp-block-column" style="flex-basis:65%">
                                        <!-- wp:paragraph {"className":"atelier-statement","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.5rem, 3vw, 2.25rem)","lineHeight":"1.2","letterSpacing":"-0.01em","fontWeight":"400"},"layout":{"selfStretch":"fit","flexSize":"28ch"}}} -->
                                        <p class="atelier-statement" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.5rem, 3vw, 2.25rem);line-height:1.2;letter-spacing:-0.01em;font-weight:400;max-width:28ch">Have something worth making? <span style="font-style:italic">Let's talk.</span></p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"verticalAlignment":"center","width":"35%"} -->
                                <div class="wp-block-column" style="flex-basis:35%">
                                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}},"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"1.25rem"}}} -->
                                        <p style="margin-top:var(--wp--preset--spacing--40);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:1.25rem"><a href="/contact">Start a conversation →</a></p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- Footer -->
        <!-- wp:template-part {"slug":"footer-atelier","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
