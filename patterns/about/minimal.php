<?php
/**
 * Title: About - Minimal
 * Description: An ultra-restrained about - accent eyebrow, one display line with a serif-italic accent, and a single body paragraph on a hairline ground. No stats, no images, no cards.
 * Slug: godevs-portfolio/about-minimal
 * Categories: godevs-portfolio-about
 * Keywords: about, minimal, restrained, sparse, gallery
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-about-minimal godevs-reveal","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"}}},"layout":{"type":"constrained","contentSize":"720px"}} -->
<section class="wp-block-group wp-block-godevs-about-minimal alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
	<!-- wp:group {"className":"godevs-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group godevs-reveal-stagger">
		<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
		<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--accent);text-transform:uppercase;letter-spacing:0.12em;font-weight:600">About</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large","lineHeight":"1.05","letterSpacing":"-0.03em","fontWeight":"700"}}} -->
		<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--xx-large);line-height:1.05;letter-spacing:-0.03em;font-weight:700">A working portfolio, kept <em style="font-family:var(--wp--preset--font-family--serif);font-style:italic;font-weight:500">current</em>.</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.65"},"color":{"text":"var:preset|color|secondary"},"spacing":{"margin":{"top":"var:preset|spacing|40"},"padding":{"top":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}}} -->
		<p class="has-text-color" style="color:var(--wp--preset--color--secondary);font-size:var(--wp--preset--font-size--medium);line-height:1.65;border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--40);margin-top:var(--wp--preset--spacing--40)">The practice: identity, editorial, and front-end engineering. The work below is selected from the last several years - kept current, archived honestly, and presented without decoration.</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small","letterSpacing":"0.1em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
		<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small);letter-spacing:0.1em;text-transform:uppercase;font-weight:500;margin-top:var(--wp--preset--spacing--50)">Identity · Editorial · Engineering</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
