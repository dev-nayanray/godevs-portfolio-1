<?php
/**
 * Title: Demo — Frame (Photography) — Work
 * Slug: godevs-portfolio/demo-frame-work
 * Description: FRAME gallery archive — filterable photography grid. Recommended style variation: Frame.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, frame, work, gallery, archive, photography
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-frame","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-frame alignfull">

	<!-- Header (minimal — floats over archive) -->
	<!-- wp:template-part {"slug":"header-frame","theme":"godevs-portfolio","tagName":"header"} /-->

	<!-- ═══ ARCHIVE HEADER — text-only, generous whitespace ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|70","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"className":"is-style-frame-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="is-style-frame-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:400">— Work</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":1,"className":"frame-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"300","letterSpacing":"-0.03em","lineHeight":"0.98","fontSize":"clamp(2.75rem, 8vw, 7.5rem)"}}} -->
			<h1 class="wp-block-heading frame-display" style="font-family:var(--wp--preset--font-family--display);font-weight:300;letter-spacing:-0.03em;line-height:0.98;font-size:clamp(2.75rem, 8vw, 7.5rem)">An archive of <span class="frame-italic">pictures.</span></h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:400;margin-top:var(--wp--preset--spacing--40)">836 photographs · 14 series · 2014 — 2026</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ FILTER — gallery chips ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:html -->
			<nav class="frame-filter" aria-label="Filter work by category">
				<a href="#" class="is-active">All</a>
				<a href="#">Portrait</a>
				<a href="#">Landscape</a>
				<a href="#">Architecture</a>
				<a href="#">Still Life</a>
				<a href="#">Street</a>
				<a href="#">Editorial</a>
			</nav>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ GALLERY GRID — image-dense, masonry feel ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Cluster A — three portrait plates (gallery grid) -->
			<!-- wp:html -->
			<div class="frame-gallery">
				<a class="frame-story" href="#" aria-label="View photograph — Quiet Coast I">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/frame/frame-story-2.webp' ); ?>" alt="Landscape photograph — minimalist coastline with a calm horizon at first light" loading="lazy">
				</a>
				<a class="frame-story" href="#" aria-label="View photograph — Vessel II">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/frame/frame-work-1.webp' ); ?>" alt="Still life photograph — single ceramic vessel in raking side light" loading="lazy">
				</a>
				<a class="frame-story" href="#" aria-label="View photograph — Ridges III">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/frame/frame-story-5.webp' ); ?>" alt="Landscape photograph — layered mountain ridges in atmospheric mist at dawn" loading="lazy">
				</a>
			</div>
			<!-- /wp:html -->

			<!-- Full-bleed wide plate — breaks the grid rhythm -->
			<!-- wp:html -->
			<a class="frame-story" href="#" style="display:block; aspect-ratio: 21/9;" aria-label="View photograph — Rain, Plaza">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/frame/frame-work-2.webp' ); ?>" alt="Street photograph — lone figure crossing a rain-soaked plaza at dusk" loading="lazy">
			</a>
			<!-- /wp:html -->
			<!-- wp:paragraph {"className":"frame-story-caption","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
			<p class="frame-story-caption has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.12em;text-transform:uppercase;font-weight:400;margin-top:var(--wp--preset--spacing--20)">Plate — Rain, Plaza · Lisbon, 2025</p>
			<!-- /wp:paragraph -->

			<!-- Cluster B — three portrait plates -->
			<!-- wp:html -->
			<div class="frame-gallery">
				<a class="frame-story" href="#" aria-label="View photograph — Wall Study I">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/frame/frame-story-3.webp' ); ?>" alt="Architectural photograph — minimalist concrete wall with raking shadows" loading="lazy">
				</a>
				<a class="frame-story" href="#" aria-label="View photograph — Drape I">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/frame/frame-work-3.webp' ); ?>" alt="Editorial photograph — draped fabric against a vast textured wall" loading="lazy">
				</a>
				<a class="frame-story" href="#" aria-label="View photograph — Detail I">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/frame/frame-detail-1.png' ); ?>" alt="Detail photograph — texture study of a weathered painted surface" loading="lazy">
				</a>
			</div>
			<!-- /wp:html -->

			<!-- Asymmetric pair — fs-3 portrait + fs-4 landscape -->
			<!-- wp:html -->
			<div class="frame-stories">
				<a class="frame-story fs-3" href="#" aria-label="View photograph — Vessel IV">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/frame/frame-story-4.webp' ); ?>" alt="Still life photograph — single vessel on a textured surface with raking light" loading="lazy">
				</a>
				<a class="frame-story fs-4" href="#" aria-label="View photograph — Drape II">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/frame/frame-story-6.webp' ); ?>" alt="Editorial photograph — draped fabric and figure in a vast empty space" loading="lazy">
				</a>
			</div>
			<!-- /wp:html -->

			<!-- Cluster C — three final plates -->
			<!-- wp:html -->
			<div class="frame-gallery">
				<a class="frame-story" href="#" aria-label="View photograph — Detail II">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/frame/frame-detail-2.webp' ); ?>" alt="Detail photograph — close study of folded fabric and light" loading="lazy">
				</a>
				<a class="frame-story" href="#" aria-label="View photograph — Still Life, Stone">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/frame/frame-work-4.webp' ); ?>" alt="Still life photograph — ceramic object on weathered stone surface" loading="lazy">
				</a>
				<a class="frame-story" href="#" aria-label="View photograph — Detail III">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/frame/frame-detail-3.webp' ); ?>" alt="Detail photograph — abstract surface study in low light" loading="lazy">
				</a>
			</div>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ PAGINATION — minimal ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"baseline"}} -->
		<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--40)">
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:400">01 / 04</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"400"}}} -->
			<p style="font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:400"><a href="#">Load more →</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- Footer -->
	<!-- wp:template-part {"slug":"footer-frame","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
