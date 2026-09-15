<?php
/**
 * Title: Demo — Luxe (Fashion) — Editorial
 * Slug: godevs-portfolio/demo-luxe-editorial
 * Description: LUXE editorial archive — fashion stories index. Recommended style variation: Luxe.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, luxe, editorial, archive, fashion
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-luxe","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-luxe alignfull">

	<!-- Header -->
	<!-- wp:template-part {"slug":"header-luxe","theme":"godevs-portfolio","tagName":"header"} /-->

	<!-- ═══ 01 — ARCHIVE HEADER ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Top metadata row -->
			<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
				<!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
				<p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">— Editorial</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">12 Stories · 2024 / 2026 · Photography / Editorial / Campaign</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- H1 -->
			<!-- wp:heading {"level":1,"className":"luxe-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"400","letterSpacing":"-0.025em","lineHeight":"1.0","fontSize":"clamp(2.75rem, 9vw, 8rem)"}}} -->
			<h1 class="wp-block-heading luxe-display" style="font-family:var(--wp--preset--font-family--display);font-weight:400;letter-spacing:-0.025em;line-height:1.0;font-size:clamp(2.75rem, 9vw, 8rem)"><span class="luxe-italic">Stories.</span></h1>
			<!-- /wp:heading -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 02 — CATEGORY FILTER ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"bottom":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--line);border-bottom-style:solid;border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">— Filter by category</p>
			<!-- /wp:paragraph -->
			<!-- wp:html -->
			<style>
				.wp-block-godevs-demo-luxe .luxe-filter{display:flex;flex-wrap:wrap;gap:2rem;align-items:center;}
				.wp-block-godevs-demo-luxe .luxe-filter a{font-family:var(--wp--preset--font-family--body,"Inter",sans-serif);font-size:0.6875rem;font-weight:500;letter-spacing:0.22em;text-transform:uppercase;color:var(--luxe-muted);text-decoration:none;padding-bottom:6px;border-bottom:1px solid transparent;transition:color .3s ease,border-color .3s ease;}
				.wp-block-godevs-demo-luxe .luxe-filter a:hover,.wp-block-godevs-demo-luxe .luxe-filter a:focus-visible{color:var(--luxe-ink);border-bottom-color:var(--luxe-ink);outline:none;}
				.wp-block-godevs-demo-luxe .luxe-filter a[aria-current="true"]{color:var(--luxe-accent);border-bottom-color:var(--luxe-accent);}
			</style>
			<nav class="luxe-filter" aria-label="Filter editorial by category">
				<a href="#" aria-current="true">All</a>
				<a href="#">Photography</a>
				<a href="#">Editorial</a>
				<a href="#">Campaign</a>
				<a href="#">Portrait</a>
			</nav>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 03 — FEATURED EDITORIAL ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Featured eyebrow -->
			<!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
			<p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">Featured Story · 01 — The Quiet Image · Photography · 2026</p>
			<!-- /wp:paragraph -->

			<!-- Large 21/9 image -->
			<!-- wp:image {"align":"wide","aspectRatio":"21/9","scale":"cover"} -->
			<figure class="wp-block-image alignwide"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/luxe/luxe-editorial-1.webp' ); ?>" alt="THE QUIET IMAGE editorial — model in architectural garment, soft ivory backdrop, dramatic directional light" style="aspect-ratio:21/9;object-fit:cover" loading="eager"/></figure>
			<!-- /wp:image -->

			<!-- Title + meta + description + link -->
			<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|60"}}} -->
			<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--50)">
				<!-- wp:column {"width":"65%"} -->
				<div class="wp-block-column" style="flex-basis:65%">
					<!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">Photography · 2026 · Studio Lumen · 12 Frames</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":2,"className":"luxe-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 6vw, 5rem)","lineHeight":"1.0","letterSpacing":"-0.025em","fontWeight":"400"}}} -->
					<h2 class="wp-block-heading luxe-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 6vw, 5rem);line-height:1.0;letter-spacing:-0.025em;font-weight:400"><a href="#" style="color:inherit;text-decoration:none;">The Quiet Image.</a></h2>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":"35%"} -->
				<div class="wp-block-column" style="flex-basis:35%">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.7">A twelve-frame study in stillness — how photography holds a garment between movement and silence.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}},"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"1.0625rem"}}} -->
					<p style="margin-top:var(--wp--preset--spacing--40);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:1.0625rem"><a href="#">View Story →</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 04 — EDITORIAL GRID ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Section header -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
				<!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">— Index · 2024 / 2026</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"className":"luxe-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 5vw, 3.75rem)","lineHeight":"1.05","letterSpacing":"-0.02em","fontWeight":"400"}}} -->
				<h2 class="wp-block-heading luxe-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 5vw, 3.75rem);line-height:1.05;letter-spacing:-0.02em;font-weight:400">All stories.</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- Asymmetric grid: 4 stories -->
			<!-- wp:html -->
			<div class="luxe-grid">
				<a class="luxe-card lg-1" href="#" aria-label="View editorial — Soft Structures">
					<div class="luxe-card-media" style="aspect-ratio: 4/3;">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/luxe/luxe-editorial-2.webp' ); ?>" alt="SOFT STRUCTURES editorial — draped fabric close-up on figure, beige tones, soft directional light" loading="lazy">
					</div>
					<p class="luxe-card-num">02 — Soft Structures</p>
					<h3 class="luxe-card-title">Soft Structures</h3>
					<p class="luxe-card-meta"><span>Editorial</span><span>2025</span><span>Maya Rahman</span></p>
				</a>
				<a class="luxe-card lg-2" href="#" aria-label="View campaign — After Hours">
					<div class="luxe-card-media" style="aspect-ratio: 3/4;">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/luxe/luxe-editorial-3.webp' ); ?>" alt="AFTER HOURS campaign — figure in elegant evening wear, dramatic low light, charcoal palette" loading="lazy">
					</div>
					<p class="luxe-card-num">03 — After Hours</p>
					<h3 class="luxe-card-title">After Hours</h3>
					<p class="luxe-card-meta"><span>Campaign</span><span>2025</span><span>Studio Lumen</span></p>
				</a>
				<a class="luxe-card lg-3" href="#" aria-label="View editorial — The New Silhouette">
					<div class="luxe-card-media" style="aspect-ratio: 3/4;">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/luxe/luxe-collection-1.webp' ); ?>" alt="THE NEW SILHOUETTE editorial — full-length model in structured minimal garment, ivory backdrop" loading="lazy">
					</div>
					<p class="luxe-card-num">04 — The New Silhouette</p>
					<h3 class="luxe-card-title">The New Silhouette</h3>
					<p class="luxe-card-meta"><span>Editorial</span><span>2024</span><span>Studio Lumen</span></p>
				</a>
				<a class="luxe-card lg-4" href="#" aria-label="View editorial — Quiet Luxury">
					<div class="luxe-card-media" style="aspect-ratio: 4/3;">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/luxe/luxe-collection-5.webp' ); ?>" alt="QUIET LUXURY editorial — minimal garment study, soft natural light, ivory tones" loading="lazy">
					</div>
					<p class="luxe-card-num">05 — Quiet Luxury</p>
					<h3 class="luxe-card-title">Quiet Luxury</h3>
					<p class="luxe-card-meta"><span>Portrait</span><span>2024</span><span>Maya Rahman</span></p>
				</a>
			</div>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 05 — PAGINATION ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">01 / 02 — Showing 5 of 12 stories</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"1.0625rem"}}} -->
			<p style="font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:1.0625rem"><a href="#">Next →</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- Footer -->
	<!-- wp:template-part {"slug":"footer-luxe","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
