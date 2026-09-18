<?php
/**
 * Title: Portfolio - Three Column Grid
 * Slug: godevs-portfolio/portfolio-three-column-grid
 * Description: A live three-column portfolio grid with hover-reveal 4:3 covers, hairline meta footers, and display titles - headed by an eyebrow, a serif-italic accent heading, and a see-all link.
 * Categories: godevs-portfolio-portfolio
 * Keywords: portfolio, grid, projects, work, three-column
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"godevs-portfolio-three-column-grid","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|90"}}},"layout":{"type":"constrained","contentSize":"var(--wp--style--global--wide-size)"}} -->
<section class="wp-block-group godevs-portfolio-three-column-grid" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--90)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
	<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--70)">
		<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
		<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--accent);text-transform:uppercase;letter-spacing:0.12em;font-weight:600">Our work</p>
		<!-- /wp:paragraph -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large","lineHeight":"1.05","letterSpacing":"-0.03em","fontWeight":"700"}}} -->
			<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--xx-large);line-height:1.05;letter-spacing:-0.03em;font-weight:700">Selected work, three across and <em style="font-family:var(--wp--preset--font-family--serif);font-style:italic;font-weight:500">unhurried</em>.</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
			<p class="has-small-font-size" style="font-size:var(--wp--preset--font-size--small);font-weight:600;margin-bottom:var(--wp--preset--spacing--20)"><a href="/work">See all work →</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {"queryId":40,"query":{"perPage":6,"postType":"godevs_project","order":"desc","orderBy":"date","inherit":false}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"className":"godevs-grid-3 godevs-reveal-stagger","layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"className":"godevs-hover-reveal is-style-card-media","layout":{"type":"default"}} -->
				<div class="wp-block-group godevs-hover-reveal is-style-card-media">
					<!-- wp:post-featured-image {"aspectRatio":"4/3","scale":"cover","isLink":true,"style":{"border":{"radius":"var(--wp--custom--radius--lg, 12px)"}}} /-->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"bottom":"var:preset|spacing|20"}},"border":{"bottom":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
					<div class="wp-block-group" style="border-bottom:1px solid var(--wp--preset--color--line);padding-bottom:var(--wp--preset--spacing--20)">
						<!-- wp:paragraph {"fontSize":"x-small","style":{"typography":{"letterSpacing":"0.08em","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
						<p class="has-x-small-font-size has-text-color" style="color:var(--wp--preset--color--muted);letter-spacing:0.08em;font-weight:500">2026 - Case study</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"fontSize":"x-small","style":{"typography":{"letterSpacing":"0.08em","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
						<p class="has-x-small-font-size has-text-color" style="color:var(--wp--preset--color--accent);letter-spacing:0.08em;font-weight:500">→</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|large","lineHeight":"1.15","letterSpacing":"-0.02em","fontWeight":"700"}}} /-->
					<!-- wp:post-excerpt {"excerptLength":20,"style":{"typography":{"lineHeight":"1.7"},"color":{"text":"var:preset|color|secondary"}}} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontFamily":"var:preset|font-family|serif","fontStyle":"italic","fontWeight":"500","fontSize":"var:preset|font-size|large"},"color":{"text":"var:preset|color|secondary"}}} -->
				<p class="has-text-align-center has-text-color" style="color:var(--wp--preset--color--secondary);font-family:var(--wp--preset--font-family--serif);font-style:italic;font-weight:500;font-size:var(--wp--preset--font-size--large)">Nothing to show - yet.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"align":"center","style":{"color":{"text":"var:preset|color|muted"}}} -->
				<p class="has-text-align-center has-text-color" style="color:var(--wp--preset--color--muted)">Publish your first GoDevs project and this grid will do the rest.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->
</section>
<!-- /wp:group -->
