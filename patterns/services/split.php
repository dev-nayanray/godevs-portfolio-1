<?php
/**
 * Title: Services — Split
 * Slug: godevs-portfolio/services-split
 * Description: An asymmetric editorial split — sticky-feel header with serif-italic accent heading and CTA on the left, hairline list of four services with mono numerals on the right.
 * Categories: godevs-portfolio-services
 * Keywords: services, split, asymmetric, two-column, editorial
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"godevs-services-split","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|90"}}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--wide-size)"}} -->
<section class="wp-block-group godevs-services-split" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--90)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80","top":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
				<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--accent);text-transform:uppercase;letter-spacing:0.12em;font-weight:600">What we do</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large","lineHeight":"1.05","letterSpacing":"-0.03em","fontWeight":"700"}}} -->
				<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--xx-large);line-height:1.05;letter-spacing:-0.03em;font-weight:700">The short version of a long <em style="font-family:var(--wp--preset--font-family--serif);font-style:italic;font-weight:500">story</em>.</h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"},"color":{"text":"var:preset|color|secondary"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--secondary);line-height:1.7">We take studios and ambitious teams from a blank page to a block-native site that loads fast, reads beautifully, and stays editable. The list on the right is the whole map.</p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact">Start a conversation</a></div>
					<!-- /wp:button -->
					<!-- wp:button {"className":"is-style-outline"} -->
					<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/services">All services</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">
			<!-- wp:group {"className":"godevs-reveal-stagger","style":{"border":{"top":{"color":"var:preset|color|border","style":"solid","width":"1px"},"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group godevs-reveal-stagger" style="border-top:1px solid var(--wp--preset--color--border);border-bottom:1px solid var(--wp--preset--color--border)">

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","verticalAlignment":"center","flexWrap":"nowrap"}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
					<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|large","fontWeight":"500","letterSpacing":"-0.02em"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"right":"var:preset|spacing|50"}}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--large);font-weight:500;letter-spacing:-0.02em;margin-right:var(--wp--preset--spacing--50)">01</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"isLink":true,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|large","lineHeight":"1.15","letterSpacing":"-0.02em","fontWeight":"700"}}} -->
					<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--large);line-height:1.15;letter-spacing:-0.02em;font-weight:700"><a href="/services/strategy">Strategy</a></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"align":"right","style":{"typography":{"fontSize":"var:preset|font-size|large","fontWeight":"500"},"color":{"text":"var:preset|color|accent"},"spacing":{"margin":{"left":"var:preset|spacing|50"}}}} -->
					<p class="has-text-align-right has-text-color" style="color:var(--wp--preset--color--accent);font-size:var(--wp--preset--font-size--large);font-weight:500;margin-left:var(--wp--preset--spacing--50)">→</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","verticalAlignment":"center","flexWrap":"nowrap"}} -->
				<div class="wp-block-group" style="border-top:1px solid var(--wp--preset--color--border);padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
					<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|large","fontWeight":"500","letterSpacing":"-0.02em"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"right":"var:preset|spacing|50"}}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--large);font-weight:500;letter-spacing:-0.02em;margin-right:var(--wp--preset--spacing--50)">02</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"isLink":true,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|large","lineHeight":"1.15","letterSpacing":"-0.02em","fontWeight":"700"}}} -->
					<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--large);line-height:1.15;letter-spacing:-0.02em;font-weight:700"><a href="/services/brand-identity">Brand identity</a></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"align":"right","style":{"typography":{"fontSize":"var:preset|font-size|large","fontWeight":"500"},"color":{"text":"var:preset|color|accent"},"spacing":{"margin":{"left":"var:preset|spacing|50"}}}} -->
					<p class="has-text-align-right has-text-color" style="color:var(--wp--preset--color--accent);font-size:var(--wp--preset--font-size--large);font-weight:500;margin-left:var(--wp--preset--spacing--50)">→</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","verticalAlignment":"center","flexWrap":"nowrap"}} -->
				<div class="wp-block-group" style="border-top:1px solid var(--wp--preset--color--border);padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
					<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|large","fontWeight":"500","letterSpacing":"-0.02em"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"right":"var:preset|spacing|50"}}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--large);font-weight:500;letter-spacing:-0.02em;margin-right:var(--wp--preset--spacing--50)">03</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"isLink":true,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|large","lineHeight":"1.15","letterSpacing":"-0.02em","fontWeight":"700"}}} -->
					<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--large);line-height:1.15;letter-spacing:-0.02em;font-weight:700"><a href="/services/web-design">Web design</a></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"align":"right","style":{"typography":{"fontSize":"var:preset|font-size|large","fontWeight":"500"},"color":{"text":"var:preset|color|accent"},"spacing":{"margin":{"left":"var:preset|spacing|50"}}}} -->
					<p class="has-text-align-right has-text-color" style="color:var(--wp--preset--color--accent);font-size:var(--wp--preset--font-size--large);font-weight:500;margin-left:var(--wp--preset--spacing--50)">→</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","verticalAlignment":"center","flexWrap":"nowrap"}} -->
				<div class="wp-block-group" style="border-top:1px solid var(--wp--preset--color--border);padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
					<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|large","fontWeight":"500","letterSpacing":"-0.02em"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"right":"var:preset|spacing|50"}}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--large);font-weight:500;letter-spacing:-0.02em;margin-right:var(--wp--preset--spacing--50)">04</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"isLink":true,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|large","lineHeight":"1.15","letterSpacing":"-0.02em","fontWeight":"700"}}} -->
					<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--large);line-height:1.15;letter-spacing:-0.02em;font-weight:700"><a href="/services/development">Development</a></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"align":"right","style":{"typography":{"fontSize":"var:preset|font-size|large","fontWeight":"500"},"color":{"text":"var:preset|color|accent"},"spacing":{"margin":{"left":"var:preset|spacing|50"}}}} -->
					<p class="has-text-align-right has-text-color" style="color:var(--wp--preset--color--accent);font-size:var(--wp--preset--font-size--large);font-weight:500;margin-left:var(--wp--preset--spacing--50)">→</p>
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
