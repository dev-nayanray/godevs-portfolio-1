<?php
/**
 * Title: Services - Featured
 * Slug: godevs-portfolio/services-featured
 * Description: A hierarchical 60/40 split - one primary service in a hairline-bordered panel with ghost numeral and solid CTA, beside two stacked secondary services. Distinct in its featured-led emphasis.
 * Categories: godevs-portfolio-services
 * Keywords: services, featured, primary, hierarchical, emphasis
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"godevs-services-featured","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|90"}}},"layout":{"type":"constrained","contentSize":"var(--wp--style--global--wide-size)"}} -->
<section class="wp-block-group godevs-services-featured" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--90)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
	<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--70)">
		<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
		<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--accent);text-transform:uppercase;letter-spacing:0.12em;font-weight:600">Flagship service</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large","lineHeight":"1.05","letterSpacing":"-0.03em","fontWeight":"700"}}} -->
		<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--xx-large);line-height:1.05;letter-spacing:-0.03em;font-weight:700">One lead offer, two able <em style="font-family:var(--wp--preset--font-family--serif);font-style:italic;font-weight:500">seconds</em>.</h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","className":"godevs-reveal-stagger","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70","top":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns alignwide godevs-reveal-stagger">

		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">
			<!-- wp:group {"style":{"spacing":{"padding":"var:preset|spacing|60","blockGap":"var:preset|spacing|30"},"border":{"radius":"var(--wp--custom--radius--lg, 12px)","width":"1px","color":"var:preset|color|line","style":"solid"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
			<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--line);border-style:solid;border-width:1px;border-radius:12px;padding:var(--wp--preset--spacing--60)">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|large","fontWeight":"500","letterSpacing":"-0.02em"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--large);font-weight:500;letter-spacing:-0.02em">01</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"fontSize":"x-small","style":{"typography":{"letterSpacing":"0.08em","fontWeight":"500","textTransform":"uppercase"},"color":{"text":"var:preset|color|secondary"},"border":{"radius":"999px","width":"1px","color":"var:preset|color|line","style":"solid"},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}}} -->
					<p class="has-x-small-font-size has-text-color has-border-color" style="border-color:var(--wp--preset--color--line);border-style:solid;border-width:1px;border-radius:999px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--20);color:var(--wp--preset--color--secondary);text-transform:uppercase;letter-spacing:0.08em;font-weight:500">Most requested</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"700"}}} -->
				<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--x-large);line-height:1.1;letter-spacing:-0.02em;font-weight:700">The full studio engagement</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"},"color":{"text":"var:preset|color|secondary"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--secondary);line-height:1.7">Strategy, identity, design, and build in one accountable engagement - a weekly cadence, a single budget, and a site your team can edit without calling us. Most engagements run eight to twelve weeks.</p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
				<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)">
					<!-- wp:button -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/services/studio-engagement">Explore the engagement</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">
			<!-- wp:group {"className":"godevs-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
			<div class="wp-block-group godevs-reveal-stagger">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"bottom":"var:preset|spacing|50"}},"border":{"bottom":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
				<div class="wp-block-group" style="border-bottom:1px solid var(--wp--preset--color--line);padding-bottom:var(--wp--preset--spacing--50)">
					<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|large","fontWeight":"500","letterSpacing":"-0.02em"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--large);font-weight:500;letter-spacing:-0.02em">02</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":4,"isLink":true,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|large","lineHeight":"1.15","letterSpacing":"-0.02em","fontWeight":"700"}}} -->
					<h4 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--large);line-height:1.15;letter-spacing:-0.02em;font-weight:700"><a href="/services/brand-sprint">Brand sprint</a></h4>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"},"color":{"text":"var:preset|color|secondary"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--secondary);line-height:1.7">A two-week identity sprint for teams that need a sharp mark and a working palette, fast.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|large","fontWeight":"500","letterSpacing":"-0.02em"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--large);font-weight:500;letter-spacing:-0.02em">03</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":4,"isLink":true,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|large","lineHeight":"1.15","letterSpacing":"-0.02em","fontWeight":"700"}}} -->
					<h4 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--large);line-height:1.15;letter-spacing:-0.02em;font-weight:700"><a href="/services/performance-care">Performance care</a></h4>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"},"color":{"text":"var:preset|color|secondary"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--secondary);line-height:1.7">A monthly retainer that keeps your block theme fast, current, and quietly improving.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->
</section>
<!-- /wp:group -->
