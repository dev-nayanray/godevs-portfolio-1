<?php
/**
 * Title: Front Page — Default Hero
 * Description: The theme's default homepage hero — centered mixed-serif display headline, accent eyebrow, dual pill CTAs, and a mono meta row on a hairline. Shown when no demo content is imported.
 * Slug: godevs-portfolio/front-page-default-hero
 * Categories: godevs-portfolio-hero
 * Keywords: front-page, homepage, hero, default
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-front-hero godevs-reveal","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"880px"}} -->
<section class="wp-block-group wp-block-godevs-front-hero alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"className":"godevs-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group godevs-reveal-stagger">
		<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
		<p class="is-style-eyebrow has-text-align-center has-text-color" style="color:var(--wp--preset--color--accent);text-transform:uppercase;letter-spacing:0.12em;font-weight:600">Portfolio · 2014 — 2026</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":1,"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xxx-large","lineHeight":"1.04","letterSpacing":"-0.03em","fontWeight":"700"}}} -->
		<h1 class="wp-block-heading has-text-align-center" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--xxx-large);line-height:1.04;letter-spacing:-0.03em;font-weight:700">Considered portfolio sites that hold up <em style="font-family:var(--wp--preset--font-family--serif);font-style:italic;font-weight:500">over time</em>.</h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.65"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
		<p class="has-text-align-center has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.65;margin-top:var(--wp--preset--spacing--40)">A decade of editorial design, accessibility, and front-end engineering. The work spans identity systems, publications, and product portfolios.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
			<!-- wp:button {"backgroundColor":"accent","textColor":"contrast","style":{"border":{"radius":"999px"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-accent-background-color has-background has-contrast-color has-text-color wp-element-button" href="/work" style="border-radius:999px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)">Browse the portfolio</a></div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"999px"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/about" style="border-radius:999px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)">About the practice</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|50"}},"border":{"top":{"color":"var:preset|color|border","style":"solid","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--border);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--40);margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small","letterSpacing":"0.1em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
		<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small);letter-spacing:0.1em;text-transform:uppercase;font-weight:500">Based in Berlin</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small","letterSpacing":"0.1em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
		<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small);letter-spacing:0.1em;text-transform:uppercase;font-weight:500">Working worldwide</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small","letterSpacing":"0.1em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
		<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small);letter-spacing:0.1em;text-transform:uppercase;font-weight:500">Available for Q4</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
