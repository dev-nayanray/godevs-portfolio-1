<?php
/**
 * Title: Testimonials — Modern Quote Cards
 * Slug: godevs-portfolio/testimonials-modern-cards
 * Description: Live grid of testimonial posts rendered as card-quote panels with serif-italic excerpts, circular accent initial avatars, and mono role micro-labels on a muted band. Updates automatically when you publish testimonials.
 * Categories: godevs-portfolio-testimonials
 * Keywords: testimonials, quotes, cards, modern, grid, reviews
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<!-- wp:group {"tagName":"section","backgroundColor":"surface-muted","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"}}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--wide-size)"}} -->
<section class="wp-block-group alignwide has-surface-muted-background-color has-background" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)"><!-- wp:group {"align":"wide","className":"godevs-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--wide-size)"}} -->
<div class="wp-block-group alignwide godevs-reveal-stagger"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"className":"is-style-eyebrow","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--accent);text-transform:uppercase;letter-spacing:0.12em;font-weight:600">Kind words</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large","lineHeight":"1.08","letterSpacing":"-0.03em","fontWeight":"700"}}} -->
<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--xx-large);line-height:1.08;letter-spacing:-0.03em;font-weight:700">What clients <em style="font-family:var(--wp--preset--font-family--serif);font-style:italic;font-weight:500">remember</em>.</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":301,"query":{"perPage":4,"postType":"godevs_testimonial","order":"desc","orderBy":"date"}} -->
<!-- wp:post-template {"className":"godevs-grid-3","layout":{"type":"grid","columnCount":2}} -->
<!-- wp:quote {"className":"is-style-card-quote","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"}},"backgroundColor":"surface","fontSize":"large"} -->
<blockquote class="wp-block-quote has-background has-surface-background-color has-large-font-size is-style-card-quote" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:post-excerpt {"showMoreOnNewLine":false,"style":{"typography":{"fontFamily":"var:preset|font-family|serif","fontStyle":"italic","fontWeight":"500","lineHeight":"1.45","letterSpacing":"-0.01em"}}} /--></blockquote>
<!-- /wp:quote -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"style":{"dimensions":{"width":"48px","height":"48px"},"border":{"radius":"999px"},"spacing":{"padding":{"top":"var:preset|spacing|20"}}},"backgroundColor":"accent","textColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-contrast-color has-accent-background-color has-text-color has-background" style="border-radius:999px;width:48px;height:48px"><!-- wp:post-featured-image {"isLink":false,"aspectRatio":"1/1","style":{"border":{"radius":"999px"},"layout":{"selfStretch":"fit","flexSize":"48px"}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":false,"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.01em","fontSize":"var:preset|font-size|medium"},"color":{"text":"var:preset|color|primary"}}} /-->

<!-- wp:post-meta {"key":"_godevs_testimonial_client_role","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|x-small","letterSpacing":"0.14em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","style":{"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-align-center has-text-color" style="color:var(--wp--preset--color--muted)">No testimonials yet. Publish your first testimonial to see it here.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
