<?php
/**
 * Title: Portfolio - Asymmetric
 * Slug: godevs-portfolio/portfolio-asymmetric
 * Description: A staggered two-row showcase with alternating 55/45 image-and-text columns, mono ghost numerals, pill meta chips, and hover-reveal covers. Distinct in its magazine-style asymmetric composition.
 * Categories: godevs-portfolio-portfolio
 * Keywords: portfolio, asymmetric, alternating, staggered, editorial
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"godevs-portfolio-asymmetric","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|90"}}},"layout":{"type":"constrained","contentSize":"var(--wp--style--global--wide-size)"}} -->
<section class="wp-block-group godevs-portfolio-asymmetric" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--90)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
	<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--70)">
		<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
		<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--accent);text-transform:uppercase;letter-spacing:0.12em;font-weight:600">Selected work</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large","lineHeight":"1.05","letterSpacing":"-0.03em","fontWeight":"700"}}} -->
		<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--xx-large);line-height:1.05;letter-spacing:-0.03em;font-weight:700">Two projects, told <em style="font-family:var(--wp--preset--font-family--serif);font-style:italic;font-weight:500">properly</em>.</h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","className":"godevs-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|90"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide godevs-reveal-stagger">

		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70","top":"var:preset|spacing|50"}}}} -->
		<div class="wp-block-columns are-vertically-aligned-center">
			<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
				<!-- wp:group {"className":"godevs-hover-reveal is-style-card-media","layout":{"type":"default"}} -->
				<div class="wp-block-group godevs-hover-reveal is-style-card-media">
					<!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--lg, 12px)"}}} -->
					<figure class="wp-block-image has-custom-border">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Studio Field identity refresh - cover" style="aspect-ratio:4/3;object-fit:cover;border-radius:12px"/>
					</figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|large","fontWeight":"500","letterSpacing":"-0.02em"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--large);font-weight:500;letter-spacing:-0.02em">01</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"fontSize":"x-small","style":{"typography":{"letterSpacing":"0.08em","fontWeight":"500","textTransform":"uppercase"},"color":{"text":"var:preset|color|secondary"},"border":{"radius":"999px","width":"1px","color":"var:preset|color|line","style":"solid"},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}}} -->
						<p class="has-x-small-font-size has-text-color has-border-color" style="border-color:var(--wp--preset--color--line);border-style:solid;border-width:1px;border-radius:999px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--20);color:var(--wp--preset--color--secondary);text-transform:uppercase;letter-spacing:0.08em;font-weight:500">Identity · 2026</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"700"}}} -->
					<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--x-large);line-height:1.1;letter-spacing:-0.02em;font-weight:700">Studio Field - identity refresh</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"},"color":{"text":"var:preset|color|secondary"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--secondary);line-height:1.7">A new visual language for a small studio practice - wordmark, type system, and a compact component library shipped as design tokens.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"600","letterSpacing":"0.02em"},"color":{"text":"var:preset|color|accent"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-size:var(--wp--preset--font-size--small);font-weight:600;letter-spacing:0.02em"><a href="/work/studio-field">View case study →</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70","top":"var:preset|spacing|50"}}}} -->
		<div class="wp-block-columns are-vertically-aligned-center">
			<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|large","fontWeight":"500","letterSpacing":"-0.02em"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--large);font-weight:500;letter-spacing:-0.02em">02</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"fontSize":"x-small","style":{"typography":{"letterSpacing":"0.08em","fontWeight":"500","textTransform":"uppercase"},"color":{"text":"var:preset|color|secondary"},"border":{"radius":"999px","width":"1px","color":"var:preset|color|line","style":"solid"},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}}} -->
						<p class="has-x-small-font-size has-text-color has-border-color" style="border-color:var(--wp--preset--color--line);border-style:solid;border-width:1px;border-radius:999px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--20);color:var(--wp--preset--color--secondary);text-transform:uppercase;letter-spacing:0.08em;font-weight:500">Editorial · 2026</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"700"}}} -->
					<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--x-large);line-height:1.1;letter-spacing:-0.02em;font-weight:700">Long-form Journal - publication system</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"},"color":{"text":"var:preset|color|secondary"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--secondary);line-height:1.7">A multi-author editorial site built Gutenberg-native - fluid typography, accessible color, and a reading column that stays calm at every breakpoint.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"600","letterSpacing":"0.02em"},"color":{"text":"var:preset|color|accent"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-size:var(--wp--preset--font-size--small);font-weight:600;letter-spacing:0.02em"><a href="/work/long-form-journal">View case study →</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
				<!-- wp:group {"className":"godevs-hover-reveal is-style-card-media","layout":{"type":"default"}} -->
				<div class="wp-block-group godevs-hover-reveal is-style-card-media">
					<!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--lg, 12px)"}}} -->
					<figure class="wp-block-image has-custom-border">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Long-form Journal editorial site - cover" style="aspect-ratio:4/3;object-fit:cover;border-radius:12px"/>
					</figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
