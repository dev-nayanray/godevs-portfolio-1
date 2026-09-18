<?php
/**
 * Title: Demo - Atelier (Designer) - Journal
 * Slug: godevs-portfolio/demo-atelier-journal
 * Description: ATELIER journal archive - editorial article index, categories. Recommended style variation: Atelier.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, atelier, journal, blog, insights, designer
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-atelier","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-atelier alignfull">

	<!-- Header -->
	<!-- wp:template-part {"slug":"header-atelier","theme":"godevs-portfolio","tagName":"header"} /-->

	<!-- === 01 - ARCHIVE HEADER: editorial asymmetric === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|70","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Top metadata row -->
			<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
				<!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">- Journal</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">Archive · 18 essays · 2024 - 2026</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Asymmetric H1 row -->
			<!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"blockGap":"var:preset|spacing|60","margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-columns are-vertically-aligned-bottom" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:column {"verticalAlignment":"bottom","width":"72%"} -->
				<div class="wp-block-column" style="flex-basis:72%">
					<!-- wp:heading {"level":1,"className":"atelier-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"400","letterSpacing":"-0.02em","lineHeight":"1.0","fontSize":"clamp(2.5rem, 7vw, 6.5rem)"}}} -->
					<h1 class="wp-block-heading atelier-display" style="font-family:var(--wp--preset--font-family--display);font-weight:400;letter-spacing:-0.02em;line-height:1.0;font-size:clamp(2.5rem, 7vw, 6.5rem)">Field notes from the <span class="atelier-italic">studio.</span></h1>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"verticalAlignment":"bottom","width":"28%"} -->
				<div class="wp-block-column" style="flex-basis:28%">
					<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"1.0625rem","lineHeight":"1.55"},"color":{"text":"var:preset|color|muted"},"layout":{"selfStretch":"fit","flexSize":"32ch"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:1.0625rem;line-height:1.55;max-width:32ch">Long-form essays on identity, typography and the slow practice of making - written between projects.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 02 - CATEGORY FILTER === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|50","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">Filter</p>
			<!-- /wp:paragraph -->
			<!-- wp:html -->
			<nav class="atelier-filter" aria-label="Journal categories">
				<a href="#" class="is-active">All</a>
				<a href="#">Identity</a>
				<a href="#">Art Direction</a>
				<a href="#">Editorial</a>
				<a href="#">Typography</a>
				<a href="#">Studio</a>
			</nav>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 03 - FEATURED ARTICLE === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Featured header label -->
			<!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
			<p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500;margin-bottom:var(--wp--preset--spacing--40)">Featured essay</p>
			<!-- /wp:paragraph -->

			<!-- Featured article -->
			<!-- wp:html -->
			<a href="#" class="atelier-featured" aria-label="Read featured essay - On slow practice" style="display:grid;grid-template-columns:1fr;gap:2rem;text-decoration:none;color:var(--atelier-ink);">
				<figure style="margin:0;">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/atelier/atelier-journal-1.webp' ); ?>" alt="Featured essay cover - abstract editorial composition with warm ivory paper folds and soft natural light" style="aspect-ratio:21/9;object-fit:cover;width:100%;height:auto;display:block;" loading="eager">
				</figure>
				<div style="display:grid;gap:1rem;max-width:60ch;">
					<p class="atelier-article-meta" style="margin:0;">26.03.26 · Studio · 12 min read</p>
					<h2 class="atelier-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 4.6vw, 3.75rem);line-height:1.05;letter-spacing:-0.015em;font-weight:400;margin:0;">On slow practice.</h2>
					<p style="font-size:var(--wp--preset--font-size--normal);line-height:1.75;color:var(--atelier-muted);margin:0;max-width:54ch;">A long-form essay on what twelve years of independent practice has taught me about patience, restraint, and the quiet economics of working on fewer things for longer - and why the studio has stayed deliberately small.</p>
					<p style="margin:0.5rem 0 0;"><span class="atelier-link">Read the essay <span class="atelier-arrow" aria-hidden="true">→</span></span></p>
				</div>
			</a>
			<style>
				@media (min-width: 1000px) {
					.wp-block-godevs-demo-atelier .atelier-featured { grid-template-columns: 1.4fr 1fr !important; gap: 4rem !important; align-items: center; }
				}
				.wp-block-godevs-demo-atelier .atelier-featured h2 { transition: color 0.4s ease, font-style 0.4s ease; }
				.wp-block-godevs-demo-atelier .atelier-featured:hover h2 { color: var(--atelier-accent); font-style: italic; }
			</style>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 04 - ARTICLE LIST === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Section header -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
				<!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">- Recent</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"className":"atelier-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 4.5vw, 3.5rem)","lineHeight":"1.0","letterSpacing":"-0.02em","fontWeight":"400"}}} -->
				<h2 class="wp-block-heading atelier-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 4.5vw, 3.5rem);line-height:1.0;letter-spacing:-0.02em;font-weight:400">More from the <span class="atelier-italic">journal.</span></h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- Article list - editorial, minimal -->
			<!-- wp:html -->
			<div style="border-top:1px solid var(--atelier-line);">
				<a class="atelier-article" href="#" style="display:grid;grid-template-columns:1fr;gap:0.5rem;padding:1.75rem 0;border-bottom:1px solid var(--atelier-line);">
					<div style="display:flex;justify-content:space-between;align-items:baseline;gap:1rem;">
						<p class="atelier-article-meta" style="margin:0;">18.02.26 · Brand · 6 min</p>
						<span class="atelier-arrow" style="font-style:italic;font-family:var(--wp--preset--font-family--display);font-size:1.25rem;color:var(--atelier-muted);">→</span>
					</div>
					<h3 class="atelier-article-title">What Makes a Visual Identity Memorable?</h3>
				</a>
				<a class="atelier-article" href="#" style="display:grid;grid-template-columns:1fr;gap:0.5rem;padding:1.75rem 0;border-bottom:1px solid var(--atelier-line);">
					<div style="display:flex;justify-content:space-between;align-items:baseline;gap:1rem;">
						<p class="atelier-article-meta" style="margin:0;">02.02.26 · Studio · 5 min</p>
						<span class="atelier-arrow" style="font-style:italic;font-family:var(--wp--preset--font-family--display);font-size:1.25rem;color:var(--atelier-muted);">→</span>
					</div>
					<h3 class="atelier-article-title">Notes From the Studio</h3>
				</a>
				<a class="atelier-article" href="#" style="display:grid;grid-template-columns:1fr;gap:0.5rem;padding:1.75rem 0;border-bottom:1px solid var(--atelier-line);">
					<div style="display:flex;justify-content:space-between;align-items:baseline;gap:1rem;">
						<p class="atelier-article-meta" style="margin:0;">14.01.26 · Typography · 7 min</p>
						<span class="atelier-arrow" style="font-style:italic;font-family:var(--wp--preset--font-family--display);font-size:1.25rem;color:var(--atelier-muted);">→</span>
					</div>
					<h3 class="atelier-article-title">The Role of Typography in Brand Culture</h3>
				</a>
				<a class="atelier-article" href="#" style="display:grid;grid-template-columns:1fr;gap:0.5rem;padding:1.75rem 0;border-bottom:1px solid var(--atelier-line);">
					<div style="display:flex;justify-content:space-between;align-items:baseline;gap:1rem;">
						<p class="atelier-article-meta" style="margin:0;">08.01.26 · Editorial · 9 min</p>
						<span class="atelier-arrow" style="font-style:italic;font-family:var(--wp--preset--font-family--display);font-size:1.25rem;color:var(--atelier-muted);">→</span>
					</div>
					<h3 class="atelier-article-title">On the Discipline of Editing</h3>
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
			<!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">Page 1 of 3</p>
			<!-- /wp:paragraph -->
			<!-- wp:html -->
			<nav class="atelier-pagination" aria-label="Journal pagination">
				<a href="#" aria-label="Previous page">← Prev</a>
				<a href="#" class="is-current" aria-current="page">1</a>
				<a href="#">2</a>
				<a href="#">3</a>
				<a href="#" aria-label="Next page">Next →</a>
			</nav>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- Footer -->
	<!-- wp:template-part {"slug":"footer-atelier","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
