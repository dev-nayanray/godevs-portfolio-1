<?php
/**
 * Title: Demo - Luxe (Fashion) - Journal
 * Slug: godevs-portfolio/demo-luxe-journal
 * Description: LUXE journal - fashion editorial notes. Recommended style variation: Luxe.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, luxe, journal, notes, fashion
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

	<!-- === 01 - ARCHIVE HEADER === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Top metadata row -->
			<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
				<!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
				<p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">- Journal</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">12 Articles · 2024 / 2026 · Essay / Process / Notes</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- H1 -->
			<!-- wp:heading {"level":1,"className":"luxe-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"400","letterSpacing":"-0.025em","lineHeight":"1.0","fontSize":"clamp(2.75rem, 8vw, 8rem)"}}} -->
			<h1 class="wp-block-heading luxe-display" style="font-family:var(--wp--preset--font-family--display);font-weight:400;letter-spacing:-0.025em;line-height:1.0;font-size:clamp(2.75rem, 8vw, 8rem)">Notes.</h1>
			<!-- /wp:heading -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 02 - CATEGORY FILTER === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"bottom":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--line);border-bottom-style:solid;border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">- Filter by category</p>
			<!-- /wp:paragraph -->
			<!-- wp:html -->
			<style>
				.wp-block-godevs-demo-luxe .luxe-filter{display:flex;flex-wrap:wrap;gap:2rem;align-items:center;}
				.wp-block-godevs-demo-luxe .luxe-filter a{font-family:var(--wp--preset--font-family--body,"Inter",sans-serif);font-size:0.6875rem;font-weight:500;letter-spacing:0.22em;text-transform:uppercase;color:var(--luxe-muted);text-decoration:none;padding-bottom:6px;border-bottom:1px solid transparent;transition:color .3s ease,border-color .3s ease;}
				.wp-block-godevs-demo-luxe .luxe-filter a:hover,.wp-block-godevs-demo-luxe .luxe-filter a:focus-visible{color:var(--luxe-ink);border-bottom-color:var(--luxe-ink);outline:none;}
				.wp-block-godevs-demo-luxe .luxe-filter a[aria-current="true"]{color:var(--luxe-accent);border-bottom-color:var(--luxe-accent);}
			</style>
			<nav class="luxe-filter" aria-label="Filter journal by category">
				<a href="#" aria-current="true">All</a>
				<a href="#">Essay</a>
				<a href="#">Process</a>
				<a href="#">Notes</a>
				<a href="#">Photography</a>
			</nav>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 03 - FEATURED ARTICLE === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Featured eyebrow -->
			<!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
			<p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">Featured Article · Essay · 12 min read</p>
			<!-- /wp:paragraph -->

			<!-- Large full-bleed image -->
			<!-- wp:html -->
			<a class="luxe-card" href="#" aria-label="Read featured article - Why Material Matters" style="display:block;margin-top:1.5rem;">
				<div class="luxe-card-media" style="aspect-ratio: 21/9;">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/luxe/luxe-journal-1.webp' ); ?>" alt="Featured journal image - editorial study in fabric, light and minimal composition, ivory tones" loading="lazy">
				</div>
			</a>
			<!-- /wp:html -->

			<!-- Title + meta + excerpt + link -->
			<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|60"}}} -->
			<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--50)">
				<!-- wp:column {"width":"65%"} -->
				<div class="wp-block-column" style="flex-basis:65%">
					<!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">04.03.26 · Essay · 12 min</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":2,"className":"luxe-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 6vw, 5rem)","lineHeight":"0.98","letterSpacing":"-0.025em","fontWeight":"400"}}} -->
					<h2 class="wp-block-heading luxe-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 6vw, 5rem);line-height:0.98;letter-spacing:-0.025em;font-weight:400"><a href="#" style="color:inherit;text-decoration:none;">Why Material <span class="luxe-italic">Matters.</span></a></h2>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":"35%"} -->
				<div class="wp-block-column" style="flex-basis:35%">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.7">An essay on why fabric is the first decision a designer makes - and how the texture, weight and fall of a single textile shapes everything that follows.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}},"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"1.0625rem"}}} -->
					<p style="margin-top:var(--wp--preset--spacing--40);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:1.0625rem"><a href="#">Read →</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 04 - ARTICLE LIST === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Section header -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
				<!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">- Index · 2026</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"className":"luxe-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.875rem, 4vw, 3rem)","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"400"}}} -->
				<h2 class="wp-block-heading luxe-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.875rem, 4vw, 3rem);line-height:1.1;letter-spacing:-0.02em;font-weight:400">More from the journal.</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- Article rows -->
			<!-- wp:html -->
			<div style="border-top: 1px solid var(--luxe-line);">
				<a class="luxe-service-row" href="/journal" style="grid-template-columns: 8rem 1fr auto 2rem;">
					<span class="luxe-service-num">18.02.26</span>
					<span class="luxe-service-title">The Return of Quiet Silhouettes</span>
					<span class="luxe-service-desc" style="font-family: var(--wp--preset--font-family--body); font-size: 0.6875rem; letter-spacing: 0.16em; text-transform: uppercase;">Notes · 6 min</span>
					<span class="luxe-service-arrow" aria-hidden="true">→</span>
				</a>
				<a class="luxe-service-row" href="/journal" style="grid-template-columns: 8rem 1fr auto 2rem;">
					<span class="luxe-service-num">02.02.26</span>
					<span class="luxe-service-title">Inside Collection 01</span>
					<span class="luxe-service-desc" style="font-family: var(--wp--preset--font-family--body); font-size: 0.6875rem; letter-spacing: 0.16em; text-transform: uppercase;">Process · 9 min</span>
					<span class="luxe-service-arrow" aria-hidden="true">→</span>
				</a>
				<a class="luxe-service-row" href="/journal" style="grid-template-columns: 8rem 1fr auto 2rem;">
					<span class="luxe-service-num">14.01.26</span>
					<span class="luxe-service-title">Photography as Fashion Language</span>
					<span class="luxe-service-desc" style="font-family: var(--wp--preset--font-family--body); font-size: 0.6875rem; letter-spacing: 0.16em; text-transform: uppercase;">Essay · 8 min</span>
					<span class="luxe-service-arrow" aria-hidden="true">→</span>
				</a>
				<a class="luxe-service-row" href="/journal" style="grid-template-columns: 8rem 1fr auto 2rem;">
					<span class="luxe-service-num">08.01.26</span>
					<span class="luxe-service-title">Notes on Contemporary Fashion</span>
					<span class="luxe-service-desc" style="font-family: var(--wp--preset--font-family--body); font-size: 0.6875rem; letter-spacing: 0.16em; text-transform: uppercase;">Notes · 7 min</span>
					<span class="luxe-service-arrow" aria-hidden="true">→</span>
				</a>
			</div>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 05 - PAGINATION === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">01 / 03 - Showing 5 of 12 articles</p>
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
