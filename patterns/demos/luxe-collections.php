<?php
/**
 * Title: Demo — Luxe (Fashion) — Collections
 * Slug: godevs-portfolio/demo-luxe-collections
 * Description: LUXE collections archive — filterable collection index. Recommended style variation: Luxe.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, luxe, collections, archive, fashion
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
				<p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">— Collections</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">05 Collections · 2024 / 2026 · Index</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- H1 -->
			<!-- wp:heading {"level":1,"className":"luxe-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"400","letterSpacing":"-0.025em","lineHeight":"1.0","fontSize":"clamp(2.75rem, 7vw, 7rem)"}}} -->
			<h1 class="wp-block-heading luxe-display" style="font-family:var(--wp--preset--font-family--display);font-weight:400;letter-spacing:-0.025em;line-height:1.0;font-size:clamp(2.75rem, 7vw, 7rem)">An archive of <span class="luxe-italic">collections.</span></h1>
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
			<nav class="luxe-filter" aria-label="Filter collections by category">
				<a href="#" aria-current="true">All</a>
				<a href="#">Collection</a>
				<a href="#">Editorial</a>
				<a href="#">Campaign</a>
				<a href="#">Lookbook</a>
			</nav>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 03 — FEATURED COLLECTION: FORM ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Featured eyebrow -->
			<!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
			<p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">Featured Collection · 01 — Form · Spring / Summer 2026</p>
			<!-- /wp:paragraph -->

			<!-- Large full-bleed image -->
			<!-- wp:html -->
			<a class="luxe-card" href="#" aria-label="View collection — Form" style="display:block;margin-top:1.5rem;">
				<div class="luxe-card-media" style="aspect-ratio: 21/9;">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/luxe/luxe-collection-form.png' ); ?>" alt="FORM collection — draped fabric and silhouette study in ivory and charcoal tones" loading="lazy">
				</div>
			</a>
			<!-- /wp:html -->

			<!-- Title + statement + meta + link -->
			<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|60"}}} -->
			<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--50)">
				<!-- wp:column {"width":"65%"} -->
				<div class="wp-block-column" style="flex-basis:65%">
					<!-- wp:heading {"level":2,"className":"luxe-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.75rem, 6vw, 5.5rem)","lineHeight":"0.98","letterSpacing":"-0.025em","fontWeight":"400"}}} -->
					<h2 class="wp-block-heading luxe-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.75rem, 6vw, 5.5rem);line-height:0.98;letter-spacing:-0.025em;font-weight:400"><a href="#" style="color:inherit;text-decoration:none;">Form</a></h2>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"luxe-statement","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"clamp(1.375rem, 2.8vw, 2rem)","lineHeight":"1.3","letterSpacing":"-0.01em","fontWeight":"400"},"layout":{"selfStretch":"fit","flexSize":"32ch"}}} -->
					<p class="luxe-statement" style="font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:clamp(1.375rem, 2.8vw, 2rem);line-height:1.3;letter-spacing:-0.01em;font-weight:400;max-width:32ch">A study in proportion, texture and movement — restrained in palette, generous in form.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":"35%"} -->
				<div class="wp-block-column" style="flex-basis:35%">
					<!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">SS 2026 · Collection · 12 Looks</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.7;margin-top:var(--wp--preset--spacing--30)">The opening collection of the practice — built around the relationship between body, fabric and light.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}},"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"1.0625rem"}}} -->
					<p style="margin-top:var(--wp--preset--spacing--40);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:1.0625rem"><a href="#">View Collection →</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 04 — COLLECTION GRID ═══ -->
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
				<h2 class="wp-block-heading luxe-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 5vw, 3.75rem);line-height:1.05;letter-spacing:-0.02em;font-weight:400">All collections.</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- Asymmetric grid: 4 collections -->
			<!-- wp:html -->
			<div class="luxe-grid">
				<a class="luxe-card lg-1" href="#" aria-label="View collection — Silhouette">
					<div class="luxe-card-media" style="aspect-ratio: 4/3;">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/luxe/luxe-collection-2.png' ); ?>" alt="SILHOUETTE collection — silhouette study against warm charcoal backdrop" loading="lazy">
					</div>
					<p class="luxe-card-num">02 — Silhouette</p>
					<h3 class="luxe-card-title">Silhouette</h3>
					<p class="luxe-card-meta"><span>AW 2025</span><span>Collection</span><span>9 Looks</span></p>
				</a>
				<a class="luxe-card lg-2" href="#" aria-label="View editorial — After Dark">
					<div class="luxe-card-media" style="aspect-ratio: 3/4;">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/luxe/luxe-collection-3.png' ); ?>" alt="AFTER DARK editorial — intimate portrait with fabric detail, ivory and beige tones" loading="lazy">
					</div>
					<p class="luxe-card-num">03 — After Dark</p>
					<h3 class="luxe-card-title">After Dark</h3>
					<p class="luxe-card-meta"><span>FW 2025</span><span>Editorial</span></p>
				</a>
				<a class="luxe-card lg-3" href="#" aria-label="View campaign — Object / Body">
					<div class="luxe-card-media" style="aspect-ratio: 3/4;">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/luxe/luxe-collection-4.png' ); ?>" alt="OBJECT / BODY campaign — figure in motion with flowing garment, neutral palette" loading="lazy">
					</div>
					<p class="luxe-card-num">04 — Object / Body</p>
					<h3 class="luxe-card-title">Object / Body</h3>
					<p class="luxe-card-meta"><span>2024</span><span>Campaign</span></p>
				</a>
				<a class="luxe-card lg-4" href="#" aria-label="View collection — Quiet Luxury">
					<div class="luxe-card-media" style="aspect-ratio: 4/3;">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/luxe/luxe-collection-5.png' ); ?>" alt="QUIET LUXURY collection — minimal garment study, soft natural light, ivory tones" loading="lazy">
					</div>
					<p class="luxe-card-num">05 — Quiet Luxury</p>
					<h3 class="luxe-card-title">Quiet Luxury</h3>
					<p class="luxe-card-meta"><span>SS 2025</span><span>Collection</span><span>10 Looks</span></p>
				</a>
			</div>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 05 — CATALOG REGISTER (compact index list) ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Section header -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
				<!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">— Catalog Register</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"className":"luxe-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.875rem, 4vw, 3rem)","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"400"}}} -->
				<h2 class="wp-block-heading luxe-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.875rem, 4vw, 3rem);line-height:1.1;letter-spacing:-0.02em;font-weight:400">Register.</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- Compact register list -->
			<!-- wp:html -->
			<div>
				<a class="luxe-service-row" href="#" style="grid-template-columns: 3rem 1fr 14rem auto;">
					<span class="luxe-service-num">01</span>
					<span class="luxe-service-title">Form</span>
					<span class="luxe-service-desc" style="font-family: var(--wp--preset--font-family--body); font-size: 0.6875rem; letter-spacing: 0.18em; text-transform: uppercase;">SS 2026 · Collection · 12 Looks</span>
					<span class="luxe-service-arrow" aria-hidden="true">→</span>
				</a>
				<a class="luxe-service-row" href="#" style="grid-template-columns: 3rem 1fr 14rem auto;">
					<span class="luxe-service-num">02</span>
					<span class="luxe-service-title">Silhouette</span>
					<span class="luxe-service-desc" style="font-family: var(--wp--preset--font-family--body); font-size: 0.6875rem; letter-spacing: 0.18em; text-transform: uppercase;">AW 2025 · Collection · 9 Looks</span>
					<span class="luxe-service-arrow" aria-hidden="true">→</span>
				</a>
				<a class="luxe-service-row" href="#" style="grid-template-columns: 3rem 1fr 14rem auto;">
					<span class="luxe-service-num">03</span>
					<span class="luxe-service-title">After Dark</span>
					<span class="luxe-service-desc" style="font-family: var(--wp--preset--font-family--body); font-size: 0.6875rem; letter-spacing: 0.18em; text-transform: uppercase;">FW 2025 · Editorial · 6 Looks</span>
					<span class="luxe-service-arrow" aria-hidden="true">→</span>
				</a>
				<a class="luxe-service-row" href="#" style="grid-template-columns: 3rem 1fr 14rem auto;">
					<span class="luxe-service-num">04</span>
					<span class="luxe-service-title">Object / Body</span>
					<span class="luxe-service-desc" style="font-family: var(--wp--preset--font-family--body); font-size: 0.6875rem; letter-spacing: 0.18em; text-transform: uppercase;">2024 · Campaign · 4 Looks</span>
					<span class="luxe-service-arrow" aria-hidden="true">→</span>
				</a>
				<a class="luxe-service-row" href="#" style="grid-template-columns: 3rem 1fr 14rem auto;">
					<span class="luxe-service-num">05</span>
					<span class="luxe-service-title">Quiet Luxury</span>
					<span class="luxe-service-desc" style="font-family: var(--wp--preset--font-family--body); font-size: 0.6875rem; letter-spacing: 0.18em; text-transform: uppercase;">SS 2025 · Collection · 10 Looks</span>
					<span class="luxe-service-arrow" aria-hidden="true">→</span>
				</a>
			</div>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 06 — PAGINATION ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">01 / 03 — Showing 5 of 14 collections</p>
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
