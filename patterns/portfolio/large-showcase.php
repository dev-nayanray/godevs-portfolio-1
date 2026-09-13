<?php
/**
 * Title: Portfolio — Hero + Grid Mix
 * Slug: godevs-portfolio/large-showcase
 * Description: A stacked editorial mix — one cinematic 21/9 hover-reveal hero project above a hairline-framed 3-up grid of secondary work. Distinct from Featured's side-by-side 60/40 split.
 * Categories: godevs-portfolio-portfolio
 * Keywords: portfolio, featured, hero, grid, mix, magazine, stacked, editorial
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"godevs-portfolio-large-showcase","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|90"}}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--wide-size)"}} -->
<section class="wp-block-group godevs-portfolio-large-showcase" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--90)">
	<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
		<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
			<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
			<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--accent);text-transform:uppercase;letter-spacing:0.12em;font-weight:600">Featured project</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large","lineHeight":"1.05","letterSpacing":"-0.03em","fontWeight":"700"}}} -->
			<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--xx-large);line-height:1.05;letter-spacing:-0.03em;font-weight:700">The headline act, then the <em style="font-family:var(--wp--preset--font-family--serif);font-style:italic;font-weight:500">ensemble</em>.</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"godevs-reveal","style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
		<div class="wp-block-group godevs-reveal" style="margin-bottom:var(--wp--preset--spacing--70)">
			<!-- wp:group {"className":"godevs-hover-reveal is-style-card-media","layout":{"type":"default"}} -->
			<div class="wp-block-group godevs-hover-reveal is-style-card-media">
				<!-- wp:image {"aspectRatio":"21/9","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--lg, 12px)"}}} -->
				<figure class="wp-block-image has-custom-border">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Featured project — cinematic full-width hero cover" style="aspect-ratio:21/9;object-fit:cover;border-radius:12px"/>
				</figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|large","fontWeight":"500","letterSpacing":"-0.02em"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--large);font-weight:500;letter-spacing:-0.02em">01</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"fontSize":"x-small","style":{"typography":{"letterSpacing":"0.08em","fontWeight":"500","textTransform":"uppercase"},"color":{"text":"var:preset|color|secondary"},"border":{"radius":"999px","width":"1px","color":"var:preset|color|line","style":"solid"},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}}} -->
				<p class="has-x-small-font-size has-text-color has-border-color" style="border-color:var(--wp--preset--color--line);border-style:solid;border-width:1px;border-radius:999px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--20);color:var(--wp--preset--color--secondary);text-transform:uppercase;letter-spacing:0.08em;font-weight:500">2026 · Identity + Web</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"700"}}} -->
			<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--x-large);line-height:1.1;letter-spacing:-0.02em;font-weight:700">Studio Field — full brand system</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"},"color":{"text":"var:preset|color|secondary"},"layout":{"selfStretch":"fit","flexSize":"640px"}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--secondary);line-height:1.7;max-width:640px">A complete identity system — wordmark, type pairing, editorial templates, and a block-native WordPress build. Six months, shipped on schedule.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|50"},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}},"padding":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group" style="border-top:1px solid var(--wp--preset--color--line);padding-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--50)">
			<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
			<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--accent);text-transform:uppercase;letter-spacing:0.12em;font-weight:600">More recent work</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"600"}}} -->
			<p class="has-small-font-size" style="font-size:var(--wp--preset--font-size--small);font-weight:600"><a href="/work">View all work →</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:columns {"className":"godevs-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
		<div class="wp-block-columns godevs-reveal-stagger">

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"godevs-hover-reveal is-style-card-media","layout":{"type":"default"}} -->
				<div class="wp-block-group godevs-hover-reveal is-style-card-media">
					<!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--md, 8px)"}}} -->
					<figure class="wp-block-image has-custom-border">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Editorial magazine redesign cover" style="aspect-ratio:4/3;object-fit:cover;border-radius:8px"/>
					</figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">2026 · Editorial</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":4,"style":{"typography":{"fontFamily":"var:preset|font-family|display","letterSpacing":"-0.01em","fontWeight":"700"}}} -->
				<h4 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);letter-spacing:-0.01em;font-weight:700">Long-form Journal</h4>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"godevs-hover-reveal is-style-card-media","layout":{"type":"default"}} -->
				<div class="wp-block-group godevs-hover-reveal is-style-card-media">
					<!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--md, 8px)"}}} -->
					<figure class="wp-block-image has-custom-border">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Product photography series cover" style="aspect-ratio:4/3;object-fit:cover;border-radius:8px"/>
					</figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">2026 · Photography</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":4,"style":{"typography":{"fontFamily":"var:preset|font-family|display","letterSpacing":"-0.01em","fontWeight":"700"}}} -->
				<h4 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);letter-spacing:-0.01em;font-weight:700">Foundry Co.</h4>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"godevs-hover-reveal is-style-card-media","layout":{"type":"default"}} -->
				<div class="wp-block-group godevs-hover-reveal is-style-card-media">
					<!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--md, 8px)"}}} -->
					<figure class="wp-block-image has-custom-border">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Web application dashboard cover" style="aspect-ratio:4/3;object-fit:cover;border-radius:8px"/>
					</figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">2026 · Product</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":4,"style":{"typography":{"fontFamily":"var:preset|font-family|display","letterSpacing":"-0.01em","fontWeight":"700"}}} -->
				<h4 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);letter-spacing:-0.01em;font-weight:700">Northbound</h4>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
