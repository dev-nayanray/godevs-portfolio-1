<?php
/**
 * Title: Projects — Modern 4-Column Grid
 * Slug: godevs-portfolio/projects-modern-4col
 * Description: A dense live four-column grid of compact project cards — 1/1 hover-reveal covers, mono meta rows, and tight display titles. Built for showing volume.
 * Categories: godevs-portfolio-portfolio
 * Keywords: projects, grid, four-column, modern, compact, dense
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<!-- wp:group {"tagName":"section","className":"godevs-projects-modern-4col","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|90"}}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--wide-size)"}} -->
<section class="wp-block-group godevs-projects-modern-4col" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--90)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
	<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--70)">
		<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
		<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--accent);text-transform:uppercase;letter-spacing:0.12em;font-weight:600">Project wall</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large","lineHeight":"1.05","letterSpacing":"-0.03em","fontWeight":"700"}}} -->
		<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--xx-large);line-height:1.05;letter-spacing:-0.03em;font-weight:700">Density, done <em style="font-family:var(--wp--preset--font-family--serif);font-style:italic;font-weight:500">gently</em>.</h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {"queryId":39,"query":{"perPage":8,"postType":"godevs_project","order":"desc","orderBy":"date","inherit":false}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"className":"godevs-grid-4 godevs-reveal-stagger","layout":{"type":"grid","columnCount":4}} -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"className":"godevs-hover-reveal is-style-card-media","layout":{"type":"default"}} -->
				<div class="wp-block-group godevs-hover-reveal is-style-card-media">
					<!-- wp:post-featured-image {"aspectRatio":"1/1","scale":"cover","isLink":true,"style":{"border":{"radius":"var(--wp--custom--radius--md, 8px)"}}} /-->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:post-date {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|x-small","fontWeight":"500","letterSpacing":"0.08em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} /-->
					<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|medium","lineHeight":"1.2","letterSpacing":"-0.01em","fontWeight":"700"}}} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontFamily":"var:preset|font-family|serif","fontStyle":"italic","fontWeight":"500","fontSize":"var:preset|font-size|large"},"color":{"text":"var:preset|color|secondary"}}} -->
				<p class="has-text-align-center has-text-color" style="color:var(--wp--preset--color--secondary);font-family:var(--wp--preset--font-family--serif);font-style:italic;font-weight:500;font-size:var(--wp--preset--font-size--large)">The wall is bare.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"align":"center","style":{"color":{"text":"var:preset|color|muted"}}} -->
				<p class="has-text-align-center has-text-color" style="color:var(--wp--preset--color--muted)">Publish GoDevs projects to tile this dense grid.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->
</section>
<!-- /wp:group -->
