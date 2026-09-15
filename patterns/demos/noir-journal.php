<?php
/**
 * Title: Demo — Noir (Film) — Journal
 * Slug: godevs-portfolio/demo-noir-journal
 * Description: NOIR journal — cinematic essays and notes. Recommended style variation: Noir.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, noir, journal, essays
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-noir","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-noir alignfull">

        <!-- Header (transparent over archive hero) -->
        <!-- wp:template-part {"slug":"header-noir","theme":"godevs-portfolio","tagName":"header"} /-->

        <!-- ═══ 01 — ARCHIVE HEADER ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|120","bottom":"var:preset|spacing|50","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--120);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40","maxWidth":"88ch"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide" style="max-width:88ch">

                        <!-- Eyebrow -->
                        <!-- wp:paragraph {"className":"is-style-noir-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                        <p class="is-style-noir-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">— Journal</p>
                        <!-- /wp:paragraph -->

                        <!-- H1 -->
                        <!-- wp:heading {"level":1,"className":"noir-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"700","letterSpacing":"-0.035em","lineHeight":"0.94","fontSize":"clamp(3rem, 9vw, 9rem)"}},"color":{"text":"var:preset|color|contrast"}} -->
                        <h1 class="wp-block-heading noir-display has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-weight:700;letter-spacing:-0.035em;line-height:0.94;font-size:clamp(3rem, 9vw, 9rem)">Field <span class="noir-italic">notes.</span></h1>
                        <!-- /wp:heading -->

                        <!-- Metadata -->
                        <!-- wp:paragraph {"className":"is-style-noir-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.2em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                        <p class="is-style-noir-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.2em;text-transform:uppercase;font-weight:500">28 Essays · 2024 / 2026 · Essays / Process / Notes / Behind the Scenes</p>
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
                        <nav class="noir-filter" aria-label="Filter journal by category">
                                <a href="#" class="is-active">All</a>
                                <a href="#">Essays</a>
                                <a href="#">Process</a>
                                <a href="#">Notes</a>
                                <a href="#">Behind the Scenes</a>
                        </nav>
                        <!-- /wp:html -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ 03 — FEATURED ESSAY ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Featured header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|40"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40)">
                                <!-- wp:paragraph {"className":"is-style-noir-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-noir-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">— Featured · 01</p>
                                <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Featured card (cinematic title card) -->
                        <!-- wp:html -->
                        <a class="noir-film" href="#" style="display:block; aspect-ratio: 21/9;" aria-label="Read essay — Notes on Light">
                                <div class="noir-film-media">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/noir/noir-journal-1.png' ); ?>" alt="Featured essay — Notes on Light — cinematic editorial still, single shaft of warm light across a dark interior" loading="lazy">
                                        <span class="noir-play" aria-hidden="true">→</span>
                                        <div class="noir-film-overlay">
                                                <p class="noir-film-num">04.03.26</p>
                                                <h3 class="noir-film-title">Notes on Light</h3>
                                                <p class="noir-film-meta"><span>Essay</span><span>7 min</span></p>
                                        </div>
                                </div>
                        </a>
                        <!-- /wp:html -->

                        <!-- Featured meta + excerpt -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|40"},"maxWidth":"62ch"}}} -->
                        <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40);max-width:62ch">
                                <!-- wp:paragraph {"className":"is-style-noir-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.2em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-noir-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.2em;text-transform:uppercase;font-weight:500">04.03.26 · Essay · 7 min read</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"className":"noir-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 4.5vw, 3.5rem)","lineHeight":"1.0","letterSpacing":"-0.03em","fontWeight":"700"}}} -->
                                <h2 class="wp-block-heading noir-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 4.5vw, 3.5rem);line-height:1.0;letter-spacing:-0.03em;font-weight:700"><a href="#">Notes on Light</a></h2>
                                <!-- /wp:heading -->
                                <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.7">A long meditation on the difference between light you design and light you find — and why, after twenty years behind a camera, I am still chasing the second kind. With notes from the set of Afterlight and a short reading list.</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}},"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.2em","textTransform":"uppercase","fontWeight":"600"}}} -->
                                <p style="margin-top:var(--wp--preset--spacing--30);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.2em;text-transform:uppercase;font-weight:600"><a href="#">Read →</a></p>
                                <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ 04 — ARTICLE LIST ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Section header -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
                                <!-- wp:paragraph {"className":"is-style-noir-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-noir-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">— More Essays · 04</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"className":"noir-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.25rem, 5vw, 4rem)","lineHeight":"1.0","letterSpacing":"-0.03em","fontWeight":"700"}}} -->
                                <h2 class="wp-block-heading noir-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.25rem, 5vw, 4rem);line-height:1.0;letter-spacing:-0.03em;font-weight:700">More from the journal.</h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Article index -->
                        <!-- wp:html -->
                        <div style="border-top: 1px solid var(--noir-line);">
                                <a class="noir-index-row" href="#">
                                        <span class="noir-index-num">18.02.26</span>
                                        <span class="noir-index-title">Behind the Scenes: Afterlight</span>
                                        <span class="noir-index-meta">Process · 9 min</span>
                                        <span class="noir-index-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="noir-index-row" href="#">
                                        <span class="noir-index-num">02.02.26</span>
                                        <span class="noir-index-title">Why Silence Matters in Film</span>
                                        <span class="noir-index-meta">Essay · 6 min</span>
                                        <span class="noir-index-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="noir-index-row" href="#">
                                        <span class="noir-index-num">14.01.26</span>
                                        <span class="noir-index-title">Building a Visual Language</span>
                                        <span class="noir-index-meta">Notes · 8 min</span>
                                        <span class="noir-index-arrow" aria-hidden="true">→</span>
                                </a>
                                <a class="noir-index-row" href="#">
                                        <span class="noir-index-num">08.01.26</span>
                                        <span class="noir-index-title">Frames From the Road</span>
                                        <span class="noir-index-meta">Notes · 5 min</span>
                                        <span class="noir-index-arrow" aria-hidden="true">→</span>
                                </a>
                        </div>
                        <!-- /wp:html -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ 05 — PAGINATION ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Page indicator -->
                        <!-- wp:paragraph {"className":"is-style-noir-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                        <p class="is-style-noir-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">01 / 03</p>
                        <!-- /wp:paragraph -->

                        <!-- Next link -->
                        <!-- wp:html -->
                        <nav class="noir-filter" aria-label="Pagination" style="gap: 0.5rem 1.25rem;">
                                <a href="#" class="is-active">01</a>
                                <a href="#">02</a>
                                <a href="#">03</a>
                                <a href="#" style="border-bottom-color: var(--noir-soft); color: var(--noir-soft);">Next →</a>
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
