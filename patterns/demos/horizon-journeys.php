<?php
/**
 * Title: Demo - Horizon (Photography) - Journeys
 * Slug: godevs-portfolio/demo-horizon-journeys
 * Description: HORIZON journeys archive - destination index. Recommended style variation: Horizon.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, horizon, journeys, archive, travel
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-horizon","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-horizon alignfull">

	<!-- Header -->
	<!-- wp:template-part {"slug":"header-horizon","theme":"godevs-portfolio","tagName":"header"} /-->

	<!-- === 01 - ARCHIVE HEADER === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Eyebrow + meta row -->
			<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40)">
				<!-- wp:paragraph {"className":"is-style-hor-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-hor-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500">- Journeys</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"is-style-hor-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.6875rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-hor-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">42 journeys · 06 continents · 2014 - 2026</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- H1 -->
			<!-- wp:heading {"level":1,"className":"hor-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.75rem, 8vw, 8rem)","lineHeight":"0.96","letterSpacing":"-0.04em","fontWeight":"600","textTransform":"uppercase"}}} -->
			<h1 class="wp-block-heading hor-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.75rem, 8vw, 8rem);line-height:0.96;letter-spacing:-0.04em;font-weight:600;text-transform:uppercase">An archive of <span class="hor-accent-text">journeys.</span></h1>
			<!-- /wp:heading -->

			<!-- Supporting line -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|serif","fontStyle":"italic","fontSize":"clamp(1.125rem, 2vw, 1.5rem)","lineHeight":"1.4","fontWeight":"400"}}} -->
			<p style="font-family:var(--wp--preset--font-family--serif);font-style:italic;font-size:clamp(1.125rem, 2vw, 1.5rem);line-height:1.4;font-weight:400;max-width:48ch">Twelve years of following light - every journey indexed by place, year and category.</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 02 - CATEGORY FILTER === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"},"bottom":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;border-bottom-color:var(--wp--preset--color--line);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:html -->
			<nav class="hor-filter" aria-label="Filter journeys by category" style="display:flex;flex-wrap:wrap;gap:1.75rem 2.25rem">
				<a href="#" class="is-active" style="font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500;color:var(--wp--preset--color--foreground);border-bottom:1px solid var(--wp--preset--color--foreground);padding-bottom:3px;text-decoration:none">All</a>
				<a href="#" style="font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500;color:var(--wp--preset--color--muted);text-decoration:none">Mountains</a>
				<a href="#" style="font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500;color:var(--wp--preset--color--muted);text-decoration:none">Cities</a>
				<a href="#" style="font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500;color:var(--wp--preset--color--muted);text-decoration:none">Coast</a>
				<a href="#" style="font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500;color:var(--wp--preset--color--muted);text-decoration:none">Desert</a>
				<a href="#" style="font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500;color:var(--wp--preset--color--muted);text-decoration:none">Culture</a>
				<a href="#" style="font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500;color:var(--wp--preset--color--muted);text-decoration:none">Wild</a>
			</nav>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 03 - FEATURED JOURNEY (large) === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Eyebrow -->
			<!-- wp:paragraph {"className":"is-style-hor-label","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}},"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
			<p class="is-style-hor-label has-text-color" style="color:var(--wp--preset--color--accent);margin-bottom:var(--wp--preset--spacing--30);font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500">- Featured · Most recent</p>
			<!-- /wp:paragraph -->

			<!-- Large featured destination -->
			<!-- wp:html -->
			<a class="hor-destination" href="/journey" style="display:block;aspect-ratio:21/9" aria-label="View featured journey - Patagonia">
				<div class="hor-destination-media"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/horizon/horizon-patagonia.webp' ); ?>" alt="Patagonia - granite spires at dawn over a glacial lake, cinematic wide" loading="lazy"></div>
				<div class="hor-destination-overlay" style="padding:2.5rem">
					<p class="hor-destination-meta">Featured · Mountains · 2026</p>
					<h2 class="hor-destination-name" style="font-size:clamp(2rem, 5vw, 4.5rem)">Patagonia</h2>
					<p class="hor-destination-coords">49°20′S 73°02′W · Argentina + Chile · 18 days expedition</p>
				</div>
			</a>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 04 - JOURNEY GRID === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Section header -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
				<!-- wp:paragraph {"className":"is-style-hor-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-hor-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500">Index · 06 of 42 journeys</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"className":"hor-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 7vw, 6rem)","lineHeight":"0.98","letterSpacing":"-0.04em","fontWeight":"600","textTransform":"uppercase"}}} -->
				<h2 class="wp-block-heading hor-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 7vw, 6rem);line-height:0.98;letter-spacing:-0.04em;font-weight:600;text-transform:uppercase">All Journeys</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- Journey grid (asymmetric) -->
			<!-- wp:html -->
			<div class="hor-journeys" aria-label="All journeys">
				<a class="hor-destination hj-1" href="/journey" aria-label="View journey - Patagonia">
					<div class="hor-destination-media"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/horizon/horizon-patagonia.webp' ); ?>" alt="Patagonia - granite spires at dawn" loading="lazy"></div>
					<div class="hor-destination-overlay">
						<p class="hor-destination-meta">Mountains · 2026</p>
						<h3 class="hor-destination-name">Patagonia</h3>
						<p class="hor-destination-coords">49°20′S 73°02′W · 18 days</p>
					</div>
				</a>
				<a class="hor-destination hj-2" href="/journey" aria-label="View journey - Iceland">
					<div class="hor-destination-media"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/horizon/horizon-iceland.webp' ); ?>" alt="Iceland - black sand coastline under low light" loading="lazy"></div>
					<div class="hor-destination-overlay">
						<p class="hor-destination-meta">Coast · 2026</p>
						<h3 class="hor-destination-name">Iceland</h3>
						<p class="hor-destination-coords">64°08′N 21°56′W · 21 days</p>
					</div>
				</a>
				<a class="hor-destination hj-3" href="/journey" aria-label="View journey - Kyoto">
					<div class="hor-destination-media"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/horizon/horizon-kyoto.webp' ); ?>" alt="Kyoto - temple courtyard in autumn light" loading="lazy"></div>
					<div class="hor-destination-overlay">
						<p class="hor-destination-meta">Culture · 2025</p>
						<h3 class="hor-destination-name">Kyoto</h3>
						<p class="hor-destination-coords">35°00′N 135°46′E · 12 days</p>
					</div>
				</a>
				<a class="hor-destination hj-4" href="/journey" aria-label="View journey - Dolomites">
					<div class="hor-destination-media"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/horizon/horizon-dolomites.webp' ); ?>" alt="Dolomites - alpine meadow at dusk" loading="lazy"></div>
					<div class="hor-destination-overlay">
						<p class="hor-destination-meta">Mountains · 2025</p>
						<h3 class="hor-destination-name">Dolomites</h3>
						<p class="hor-destination-coords">46°24′N 11°51′E · 11 days</p>
					</div>
				</a>
				<a class="hor-destination hj-5" href="/journey" aria-label="View journey - Morocco">
					<div class="hor-destination-media"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/horizon/horizon-morocco.webp' ); ?>" alt="Morocco - desert town at golden hour" loading="lazy"></div>
					<div class="hor-destination-overlay">
						<p class="hor-destination-meta">Desert · 2025</p>
						<h3 class="hor-destination-name">Morocco</h3>
						<p class="hor-destination-coords">31°47′N 7°05′W · 9 days</p>
					</div>
				</a>
				<a class="hor-destination hj-6" href="/journey" aria-label="View journey - Faroe Islands">
					<div class="hor-destination-media"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/horizon/horizon-faroe.webp' ); ?>" alt="Faroe Islands - sea cliffs in low drifting cloud" loading="lazy"></div>
					<div class="hor-destination-overlay">
						<p class="hor-destination-meta">Wild · 2024</p>
						<h3 class="hor-destination-name">Faroe Islands</h3>
						<p class="hor-destination-coords">62°00′N 6°47′W · 14 days</p>
					</div>
				</a>
			</div>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 05 - PAGINATION === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"className":"is-style-hor-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="is-style-hor-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500">01 / 03 · Page 1 of 3</p>
			<!-- /wp:paragraph -->
			<!-- wp:html -->
			<div style="display:flex;align-items:center;gap:2rem">
				<span style="font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500;color:var(--wp--preset--color--foreground);border-bottom:1px solid var(--wp--preset--color--foreground);padding-bottom:3px">01</span>
				<a href="#" style="font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500;color:var(--wp--preset--color--muted);text-decoration:none">02</a>
				<a href="#" style="font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500;color:var(--wp--preset--color--muted);text-decoration:none">03</a>
				<a class="hor-link" href="#" style="margin-left:1rem">Load more <span class="hor-arrow" aria-hidden="true">→</span></a>
			</div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- Footer -->
	<!-- wp:template-part {"slug":"footer-horizon","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
