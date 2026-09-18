<?php
/**
 * Title: Demo - Frame (Photography) - Journal
 * Slug: godevs-portfolio/demo-frame-journal
 * Description: FRAME journal archive - editorial essay index. Recommended style variation: Frame.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, frame, journal, essays, photography
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-frame","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-frame alignfull">

	<!-- Header (minimal - floats over archive) -->
	<!-- wp:template-part {"slug":"header-frame","theme":"godevs-portfolio","tagName":"header"} /-->

	<!-- === ARCHIVE HEADER - text-only, generous whitespace === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|70","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"className":"is-style-frame-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="is-style-frame-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:400">- Journal</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":1,"className":"frame-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"300","letterSpacing":"-0.03em","lineHeight":"0.98","fontSize":"clamp(2.75rem, 8vw, 7.5rem)"}}} -->
			<h1 class="wp-block-heading frame-display" style="font-family:var(--wp--preset--font-family--display);font-weight:300;letter-spacing:-0.03em;line-height:0.98;font-size:clamp(2.75rem, 8vw, 7.5rem)">Field notes from the <span class="frame-italic">studio.</span></h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.75rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:400;margin-top:var(--wp--preset--spacing--40)">48 essays · 2014 - 2026 · Updated monthly</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === CATEGORY FILTER - gallery chips === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:html -->
			<nav class="frame-filter" aria-label="Filter journal by category">
				<a href="#" class="is-active" aria-current="page">All</a>
				<a href="#">Essays</a>
				<a href="#">Process</a>
				<a href="#">Notes</a>
				<a href="#">Reviews</a>
			</nav>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === FEATURED ESSAY - dominant image + meta + linked H2 + excerpt === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"className":"is-style-frame-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
			<p class="is-style-frame-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:400;margin-bottom:var(--wp--preset--spacing--40)">Featured essay</p>
			<!-- /wp:paragraph -->
			<!-- wp:html -->
			<a class="frame-story" href="#" style="display:block; aspect-ratio: 21/9;" aria-label="Read featured essay - On the first hour of light">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/frame/frame-journal-1.webp' ); ?>" alt="Featured essay photograph - soft atmospheric dawn light over a minimal coastal horizon" loading="eager">
			</a>
			<!-- /wp:html -->
			<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:400">04.03.26 · Essay · 7 min</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"className":"frame-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 5vw, 4rem)","lineHeight":"1.0","letterSpacing":"-0.03em","fontWeight":"300"}}} -->
				<h2 class="wp-block-heading frame-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 5vw, 4rem);line-height:1.0;letter-spacing:-0.03em;font-weight:300"><a href="#" style="text-decoration:none;color:var(--wp--preset--color--foreground);">On the first hour of <span class="frame-italic">light</span></a></h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"var:preset|font-size|medium","lineHeight":"1.75","fontWeight":"300"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|30"}},"layout":{"selfStretch":"fit","flexSize":"56ch"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:var(--wp--preset--font-size--medium);line-height:1.75;font-weight:300;margin-top:var(--wp--preset--spacing--30);max-width:56ch">A short essay on the discipline of arriving early enough to be forgotten by the place - and the slow uncoupling of seeing from taking.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}},"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.75rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"400"}}} -->
				<p style="margin-top:var(--wp--preset--spacing--40);font-family:var(--wp--preset--font-family--body);font-size:0.75rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:400"><a href="#">Read <span style="font-family:var(--wp--preset--font-family--serif);font-style:italic;color:var(--wp--preset--color--accent);" aria-hidden="true">→</span></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === ESSAY INDEX - minimal gallery rows === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
				<!-- wp:paragraph {"className":"is-style-frame-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-frame-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:400">- Latest essays</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"className":"frame-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 6vw, 5rem)","lineHeight":"1.0","letterSpacing":"-0.03em","fontWeight":"300"}}} -->
				<h2 class="wp-block-heading frame-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 6vw, 5rem);line-height:1.0;letter-spacing:-0.03em;font-weight:300">The index</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->
			<!-- wp:html -->
			<div style="border-top:1px solid var(--frame-line);">
				<a class="frame-index-row" href="#" aria-label="Read essay - On waiting for light">
					<span class="frame-index-num">04.03.26</span>
					<span class="frame-index-title">On waiting for light</span>
					<span class="frame-index-meta">Essay · 7 min</span>
					<span class="frame-index-arrow" aria-hidden="true">→</span>
				</a>
				<a class="frame-index-row" href="#" aria-label="Read essay - The print as the photograph">
					<span class="frame-index-num">18.02.26</span>
					<span class="frame-index-title">The print as the photograph</span>
					<span class="frame-index-meta">Process · 9 min</span>
					<span class="frame-index-arrow" aria-hidden="true">→</span>
				</a>
				<a class="frame-index-row" href="#" aria-label="Read essay - Notes on scale and solitude">
					<span class="frame-index-num">02.02.26</span>
					<span class="frame-index-title">Notes on scale and solitude</span>
					<span class="frame-index-meta">Essay · 6 min</span>
					<span class="frame-index-arrow" aria-hidden="true">→</span>
				</a>
				<a class="frame-index-row" href="#" aria-label="Read essay - A short defence of slowness">
					<span class="frame-index-num">14.01.26</span>
					<span class="frame-index-title">A short defence of slowness</span>
					<span class="frame-index-meta">Notes · 5 min</span>
					<span class="frame-index-arrow" aria-hidden="true">→</span>
				</a>
			</div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === PAGINATION - minimal === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"baseline"}} -->
		<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--40)">
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:400">01 / 03</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"400"}}} -->
			<p style="font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:400"><a href="#">Next <span style="font-family:var(--wp--preset--font-family--serif);font-style:italic;color:var(--wp--preset--color--accent);" aria-hidden="true">→</span></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- Footer -->
	<!-- wp:template-part {"slug":"footer-frame","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
