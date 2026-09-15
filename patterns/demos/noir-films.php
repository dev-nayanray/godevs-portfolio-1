<?php
/**
 * Title: Demo — Noir (Film) — Films
 * Slug: godevs-portfolio/demo-noir-films
 * Description: NOIR films archive — filterable cinematic film index. Recommended style variation: Noir.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, noir, films, archive, cinematic
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-noir","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-noir alignfull">

        <!-- Header (transparent over archive hero) -->
        <!-- wp:template-part {"slug":"header-noir","theme":"godevs-portfolio","tagName":"header"} /-->

        <!-- ═══ 01 — ARCHIVE HEADER ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|50","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Eyebrow -->
                        <!-- wp:paragraph {"className":"is-style-noir-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                        <p class="is-style-noir-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">— Films</p>
                        <!-- /wp:paragraph -->

                        <!-- H1 -->
                        <!-- wp:heading {"level":1,"className":"noir-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"700","letterSpacing":"-0.04em","lineHeight":"0.94","fontSize":"clamp(3rem, 9vw, 9rem)","textTransform":"uppercase"},"color":{"text":"var:preset|color|foreground"}}} -->
                        <h1 class="wp-block-heading noir-display has-text-color" style="color:var(--wp--preset--color--foreground);font-family:var(--wp--preset--font-family--display);font-weight:700;letter-spacing:-0.04em;line-height:0.94;font-size:clamp(3rem, 9vw, 9rem);text-transform:uppercase">An archive of films.</h1>
                        <!-- /wp:heading -->

                        <!-- Metadata -->
                        <!-- wp:paragraph {"className":"is-style-noir-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.2em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                        <p class="is-style-noir-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.2em;text-transform:uppercase;font-weight:500">42 Films · 2023 / 2026 · Commercial · Narrative · Documentary · Music · Fashion · Editorial</p>
                        <!-- /wp:paragraph -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ 02 — CATEGORY FILTER ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"bottom":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--line);border-bottom-style:solid;border-bottom-width:1px;padding-top:0;padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- wp:html -->
                        <nav class="noir-filter" aria-label="Filter films by category">
                                <a href="#" class="is-active">All</a>
                                <a href="#">Commercial</a>
                                <a href="#">Narrative</a>
                                <a href="#">Documentary</a>
                                <a href="#">Music</a>
                                <a href="#">Fashion</a>
                                <a href="#">Editorial</a>
                        </nav>
                        <!-- /wp:html -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ 03 — FEATURED FILM: AFTERLIGHT ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Featured header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|40"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40)">
                                <!-- wp:paragraph {"className":"is-style-noir-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-noir-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">— Featured · 01</p>
                                <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Featured film card -->
                        <!-- wp:html -->
                        <a class="noir-film" href="#" style="display:block; aspect-ratio: 21/9;" aria-label="View film — Afterlight">
                                <div class="noir-film-media">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/noir/noir-featured.png' ); ?>" alt="AFTERLIGHT — cinematic featured film still, close portrait in dramatic warm side light against deep black" loading="lazy">
                                        <span class="noir-play" aria-hidden="true">▶</span>
                                        <div class="noir-film-overlay">
                                                <p class="noir-film-num">01</p>
                                                <h3 class="noir-film-title">Afterlight</h3>
                                                <p class="noir-film-meta"><span>Commercial</span><span>2026</span><span>Director</span></p>
                                        </div>
                                </div>
                        </a>
                        <!-- /wp:html -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ 04 — RECENT FILMS GRID ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Section header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|40"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40)">
                                <!-- wp:paragraph {"className":"is-style-noir-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-noir-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">— Recent Films · 05</p>
                                <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Films 02 + 03 — split portrait pair -->
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"bottom":"var:preset|spacing|40"}}}} -->
                        <div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--40)">
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:html -->
                                        <a class="noir-film" href="#" style="display:block; aspect-ratio: 3/4;" aria-label="View film — The Last Summer">
                                                <div class="noir-film-media">
                                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/noir/noir-film-2.png' ); ?>" alt="THE LAST SUMMER — cinematic short film still, two figures silhouetted against a hazy sunset" loading="lazy">
                                                        <span class="noir-play" aria-hidden="true">▶</span>
                                                        <div class="noir-film-overlay">
                                                                <p class="noir-film-num">02</p>
                                                                <h3 class="noir-film-title">The Last Summer</h3>
                                                                <p class="noir-film-meta"><span>Short Film</span><span>2025</span></p>
                                                        </div>
                                                </div>
                                        </a>
                                        <!-- /wp:html -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:html -->
                                        <a class="noir-film" href="#" style="display:block; aspect-ratio: 3/4;" aria-label="View film — Monument">
                                                <div class="noir-film-media">
                                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/noir/noir-film-3.png' ); ?>" alt="MONUMENT — cinematic brand film still, massive concrete structure at dusk with dramatic light" loading="lazy">
                                                        <span class="noir-play" aria-hidden="true">▶</span>
                                                        <div class="noir-film-overlay">
                                                                <p class="noir-film-num">03</p>
                                                                <h3 class="noir-film-title">Monument</h3>
                                                                <p class="noir-film-meta"><span>Brand Film</span><span>2025</span></p>
                                                        </div>
                                                </div>
                                        </a>
                                        <!-- /wp:html -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                        <!-- Film 04 — full-width landscape -->
                        <!-- wp:html -->
                        <a class="noir-film" href="#" style="display:block; aspect-ratio: 21/9; margin-bottom: 2.5rem;" aria-label="View film — Nocturne">
                                <div class="noir-film-media">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/noir/noir-film-4.png' ); ?>" alt="NOCTURNE — cinematic music video still, performer in dramatic colored light and shadow" loading="lazy">
                                        <span class="noir-play" aria-hidden="true">▶</span>
                                        <div class="noir-film-overlay">
                                                <p class="noir-film-num">04</p>
                                                <h3 class="noir-film-title">Nocturne</h3>
                                                <p class="noir-film-meta"><span>Music Video</span><span>2024</span><span>Director</span></p>
                                        </div>
                                </div>
                        </a>
                        <!-- /wp:html -->

                        <!-- Films 05 + 06 — split landscape pair -->
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
                        <div class="wp-block-columns">
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:html -->
                                        <a class="noir-film" href="#" style="display:block; aspect-ratio: 16/9;" aria-label="View film — Between Tides">
                                                <div class="noir-film-media">
                                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/noir/noir-film-5.png' ); ?>" alt="BETWEEN TIDES — cinematic documentary still, vast ocean and sky at dawn with a distant figure" loading="lazy">
                                                        <span class="noir-play" aria-hidden="true">▶</span>
                                                        <div class="noir-film-overlay">
                                                                <p class="noir-film-num">05</p>
                                                                <h3 class="noir-film-title">Between Tides</h3>
                                                                <p class="noir-film-meta"><span>Documentary</span><span>2024</span></p>
                                                        </div>
                                                </div>
                                        </a>
                                        <!-- /wp:html -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                        <!-- wp:html -->
                                        <a class="noir-film" href="#" style="display:block; aspect-ratio: 16/9;" aria-label="View film — Form / Motion">
                                                <div class="noir-film-media">
                                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/noir/noir-film-6.png' ); ?>" alt="FORM / MOTION — cinematic campaign still, abstract motion blur of a figure in motion" loading="lazy">
                                                        <span class="noir-play" aria-hidden="true">▶</span>
                                                        <div class="noir-film-overlay">
                                                                <p class="noir-film-num">06</p>
                                                                <h3 class="noir-film-title">Form / Motion</h3>
                                                                <p class="noir-film-meta"><span>Campaign</span><span>2023</span></p>
                                                        </div>
                                                </div>
                                        </a>
                                        <!-- /wp:html -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ 05 — CATALOG REGISTER (compact index) ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Section header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
                                <!-- wp:paragraph {"className":"is-style-noir-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-noir-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">— Catalog Register · 42 Films</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"className":"noir-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.25rem, 5vw, 4rem)","lineHeight":"1.0","letterSpacing":"-0.03em","fontWeight":"700"}}} -->
                                <h2 class="wp-block-heading noir-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.25rem, 5vw, 4rem);line-height:1.0;letter-spacing:-0.03em;font-weight:700">All films, in order.</h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Compact index list -->
                        <!-- wp:html -->
                        <div style="border-top: 1px solid var(--noir-line);">
                                <a class="noir-index-row" href="#">
                                        <span class="noir-index-num">2026</span>
                                        <span class="noir-index-title">Afterlight</span>
                                        <span class="noir-index-meta">Commercial · 03:42</span>
                                        <span class="noir-index-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="noir-index-row" href="#">
                                        <span class="noir-index-num">2025</span>
                                        <span class="noir-index-title">The Last Summer</span>
                                        <span class="noir-index-meta">Short Film · 09:18</span>
                                        <span class="noir-index-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="noir-index-row" href="#">
                                        <span class="noir-index-num">2025</span>
                                        <span class="noir-index-title">Monument</span>
                                        <span class="noir-index-meta">Brand Film · 02:30</span>
                                        <span class="noir-index-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="noir-index-row" href="#">
                                        <span class="noir-index-num">2024</span>
                                        <span class="noir-index-title">Nocturne</span>
                                        <span class="noir-index-meta">Music Video · 04:05</span>
                                        <span class="noir-index-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="noir-index-row" href="#">
                                        <span class="noir-index-num">2024</span>
                                        <span class="noir-index-title">Between Tides</span>
                                        <span class="noir-index-meta">Documentary · 28:42</span>
                                        <span class="noir-index-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="noir-index-row" href="#">
                                        <span class="noir-index-num">2023</span>
                                        <span class="noir-index-title">Form / Motion</span>
                                        <span class="noir-index-meta">Campaign · 01:30</span>
                                        <span class="noir-index-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="noir-index-row" href="#">
                                        <span class="noir-index-num">2023</span>
                                        <span class="noir-index-title">A Slow Country</span>
                                        <span class="noir-index-meta">Editorial · 06:20</span>
                                        <span class="noir-index-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="noir-index-row" href="#">
                                        <span class="noir-index-num">2023</span>
                                        <span class="noir-index-title">Halcyon</span>
                                        <span class="noir-index-meta">Fashion · 02:48</span>
                                        <span class="noir-index-arrow" aria-hidden="true">→</span>
                                </a>
                        </div>
                        <!-- /wp:html -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ 06 — PAGINATION ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Page indicator -->
                        <!-- wp:paragraph {"className":"is-style-noir-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                        <p class="is-style-noir-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">01 / 04</p>
                        <!-- /wp:paragraph -->

                        <!-- Page numbers + Load more -->
                        <!-- wp:html -->
                        <nav class="noir-filter" aria-label="Pagination" style="gap: 0.5rem 1.25rem;">
                                <a href="#" class="is-active">01</a>
                                <a href="#">02</a>
                                <a href="#">03</a>
                                <a href="#">04</a>
                                <a href="#" style="border-bottom-color: var(--noir-soft); color: var(--noir-soft);">Load more →</a>
                        </nav>
                        <!-- /wp:html -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- Footer -->
        <!-- wp:template-part {"slug":"footer-noir","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
