<?php
/**
 * Title: Services — Feature Cards
 * Slug: godevs-portfolio/services-feature-cards
 * Description: A three-column grid of open feature cards — accent eyebrow, display title, considered description, and an accent link per service, anchored by a serif-italic display header.
 * Categories: godevs-portfolio-services
 * Keywords: services, features, offerings, cards, grid
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"godevs-services-feature-cards","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|90"}}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--wide-size)"}} -->
<section class="wp-block-group godevs-services-feature-cards" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--90)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
	<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--70)">
		<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
		<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--accent);text-transform:uppercase;letter-spacing:0.12em;font-weight:600">Capabilities</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large","lineHeight":"1.05","letterSpacing":"-0.03em","fontWeight":"700"}}} -->
		<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--xx-large);line-height:1.05;letter-spacing:-0.03em;font-weight:700">Three ways we <em style="font-family:var(--wp--preset--font-family--serif);font-style:italic;font-weight:500">help</em>.</h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","className":"godevs-reveal-stagger","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60","top":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns alignwide godevs-reveal-stagger">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
				<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--accent);text-transform:uppercase;letter-spacing:0.12em;font-weight:600">01 — Strategy</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|large","lineHeight":"1.15","letterSpacing":"-0.02em","fontWeight":"700"}}} -->
				<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--large);line-height:1.15;letter-spacing:-0.02em;font-weight:700">Positioning that holds</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"},"color":{"text":"var:preset|color|secondary"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--secondary);line-height:1.7">A written brief that names the three pages that actually matter — decided before anything is designed.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20"}},"border":{"top":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"600"}}} -->
				<p style="border-top:1px solid var(--wp--preset--color--border);padding-top:var(--wp--preset--spacing--20);font-size:var(--wp--preset--font-size--small);font-weight:600"><a href="/services/strategy">Learn more →</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
				<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--accent);text-transform:uppercase;letter-spacing:0.12em;font-weight:600">02 — Identity</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|large","lineHeight":"1.15","letterSpacing":"-0.02em","fontWeight":"700"}}} -->
				<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--large);line-height:1.15;letter-spacing:-0.02em;font-weight:700">Systems, not logos</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"},"color":{"text":"var:preset|color|secondary"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--secondary);line-height:1.7">Palette, typography, and the small set of rules that keep everything coherent — shipped as tokens.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20"}},"border":{"top":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"600"}}} -->
				<p style="border-top:1px solid var(--wp--preset--color--border);padding-top:var(--wp--preset--spacing--20);font-size:var(--wp--preset--font-size--small);font-weight:600"><a href="/services/brand-identity">Learn more →</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
				<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--accent);text-transform:uppercase;letter-spacing:0.12em;font-weight:600">03 — Build</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|large","lineHeight":"1.15","letterSpacing":"-0.02em","fontWeight":"700"}}} -->
				<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--large);line-height:1.15;letter-spacing:-0.02em;font-weight:700">Fast, and stays fast</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"},"color":{"text":"var:preset|color|secondary"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--secondary);line-height:1.7">Block-native builds with performance budgets under one second and handovers your team can run with.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20"}},"border":{"top":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"600"}}} -->
				<p style="border-top:1px solid var(--wp--preset--color--border);padding-top:var(--wp--preset--spacing--20);font-size:var(--wp--preset--font-size--small);font-weight:600"><a href="/services/development">Learn more →</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->
</section>
<!-- /wp:group -->
