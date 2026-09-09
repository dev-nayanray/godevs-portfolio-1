<?php
/**
 * Title: Dynamic — Services Grid
 * Slug: godevs-portfolio/dynamic-services
 * Description: Live grid of services on a muted surface band — hairline-bordered cards, ghost numerals, display titles, and accent learn-more links. Updates automatically when you add services.
 * Categories: godevs-portfolio-services, godevs-portfolio-demos
 * Keywords: dynamic, services, grid, query, loop
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","backgroundColor":"surface-muted","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"}}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--wide-size)"}} -->
<section class="wp-block-group alignwide has-surface-muted-background-color has-background" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)"><!-- wp:group {"align":"wide","className":"godevs-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--wide-size)"}} -->
<div class="wp-block-group alignwide godevs-reveal-stagger"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"className":"is-style-eyebrow","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--accent);text-transform:uppercase;letter-spacing:0.12em;font-weight:600">What I Do</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large","lineHeight":"1.08","letterSpacing":"-0.03em","fontWeight":"700"}}} -->
<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--xx-large);line-height:1.08;letter-spacing:-0.03em;font-weight:700">Services, <em style="font-family:var(--wp--preset--font-family--serif);font-style:italic;font-weight:500">plainly stated</em>.</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":2,"query":{"perPage":6,"postType":"godevs_service","order":"asc","orderBy":"title","inherit":false}} -->
<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"is-style-card-bordered","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"surface","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-card-bordered has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|x-small","letterSpacing":"0.14em","textTransform":"uppercase"},"color":{"text":"var:preset|color|accent"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--x-small);letter-spacing:0.14em;text-transform:uppercase">Service</p>
<!-- /wp:paragraph -->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"var:preset|font-size|large","fontWeight":"600","letterSpacing":"-0.01em","lineHeight":"1.25"}}} /-->

<!-- wp:separator {"className":"is-style-thin","style":{"color":{"background":"var:preset|color|border"}}} /-->

<!-- wp:post-excerpt {"moreText":"Learn more →","excerptLength":20,"style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.6"},"color":{"text":"var:preset|color|secondary"}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","style":{"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-align-center has-text-color" style="color:var(--wp--preset--color--muted)">No services yet. Add your first service to see it here.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
