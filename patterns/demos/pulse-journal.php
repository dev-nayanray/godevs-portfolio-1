<?php
/**
 * Title: Demo - Pulse (Designer) - Journal
 * Slug: godevs-portfolio/demo-pulse-journal
 * Description: PULSE insights archive - editorial article index with categories. Recommended style variation: Pulse.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, pulse, journal, insights, ux
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-pulse","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-pulse alignfull">

	<!-- Header -->
	<!-- wp:template-part {"slug":"header-pulse","theme":"godevs-portfolio","tagName":"header"} /-->

	<!-- === 01 - ARCHIVE HEADER === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|70","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Eyebrow + meta row -->
			<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"is-style-pulse-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-pulse-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;font-weight:500">- Insights</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"is-style-pulse-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-pulse-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;font-weight:500">12 articles · 2025 - 2026</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Display H1 -->
			<!-- wp:heading {"level":1,"className":"pulse-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600","letterSpacing":"-0.04em","lineHeight":"0.98","fontSize":"clamp(2.5rem, 7vw, 6.5rem)"}}} -->
			<h1 class="wp-block-heading pulse-display" style="font-family:var(--wp--preset--font-family--display);font-weight:600;letter-spacing:-0.04em;line-height:0.98;font-size:clamp(2.5rem, 7vw, 6.5rem)">Notes on product <span class="pulse-accent-text">& design.</span></h1>
			<!-- /wp:heading -->

			<!-- Supporting copy -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.6"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.6;margin-top:var(--wp--preset--spacing--40);max-width:60ch">Short essays from the practice - research methods, system design, and the small decisions that change how a product feels. Updated when I have something worth saying.</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 02 - CATEGORY FILTER === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"bottom":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--line);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:html -->
			<div class="pulse-filter">
				<a class="pulse-chip is-active" href="#" aria-current="page">All · 12</a>
				<a class="pulse-chip" href="#">Product</a>
				<a class="pulse-chip" href="#">Research</a>
				<a class="pulse-chip" href="#">Systems</a>
				<a class="pulse-chip" href="#">Process</a>
				<a class="pulse-chip" href="#">Notes</a>
			</div>
			<!-- /wp:html -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase">Filter by topic</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 03 - FEATURED ARTICLE === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Featured image 16/9 -->
			<!-- wp:image {"aspectRatio":"16/9","scale":"cover","style":{"border":{"radius":"8px"}}} -->
			<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pulse/pulse-journal-1.webp' ); ?>" alt="Featured journal visual - abstract editorial layout of grids, charts and typography fragments on a cool neutral field" style="border-radius:8px;aspect-ratio:16/9;object-fit:cover" loading="eager"/></figure>
			<!-- /wp:image -->

			<!-- Title + excerpt row -->
			<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--50)">
				<!-- wp:paragraph {"className":"is-style-pulse-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
				<p class="is-style-pulse-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;font-weight:500">Featured · 2026 · Systems · 8 min</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.25rem, 5vw, 4rem)","lineHeight":"1.0","letterSpacing":"-0.03em","fontWeight":"600"}}} -->
				<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.25rem, 5vw, 4rem);line-height:1.0;letter-spacing:-0.03em;font-weight:600"><a href="#" style="color:inherit;text-decoration:none;">Designing systems people can extend.</a></h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.6"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.6;margin-top:var(--wp--preset--spacing--30);max-width:62ch">A design system isn't the components - it's the contribution model around them. Notes from building three systems in three different teams, and the small rules that decided whether they lived or quietly died.</p>
				<!-- /wp:paragraph -->
				<!-- wp:html -->
				<div style="margin-top:1.5rem;">
					<a class="pulse-link" href="#" aria-label="Read the featured article - Designing systems people can extend">Read <span class="pulse-arrow" aria-hidden="true">→</span></a>
				</div>
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 04 - ARTICLE LIST (editorial index) === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Section header -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40)">
				<!-- wp:paragraph {"className":"is-style-pulse-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-pulse-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;font-weight:500">- All articles</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.75rem, 3.5vw, 2.75rem)","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
				<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 3.5vw, 2.75rem);line-height:1.1;letter-spacing:-0.02em;font-weight:600">More from the journal.</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- Editorial index rows -->
			<!-- wp:html -->
			<div>
				<a href="#" style="display:grid;grid-template-columns:1fr;gap:0.5rem;padding:1.75rem 0;border-bottom:1px solid var(--pulse-line);text-decoration:none;color:inherit;">
					<p style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;color:var(--pulse-muted);margin:0;">02 · Systems · 2026 · 8 min</p>
					<h3 style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.375rem, 2.5vw, 2rem);line-height:1.15;letter-spacing:-0.02em;font-weight:600;margin:0;color:var(--pulse-ink);">Designing systems people can extend <span aria-hidden="true" style="color:var(--pulse-accent);">→</span></h3>
				</a>
				<a href="#" style="display:grid;grid-template-columns:1fr;gap:0.5rem;padding:1.75rem 0;border-bottom:1px solid var(--pulse-line);text-decoration:none;color:inherit;">
					<p style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;color:var(--pulse-muted);margin:0;">03 · Research · 2026 · 6 min</p>
					<h3 style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.375rem, 2.5vw, 2rem);line-height:1.15;letter-spacing:-0.02em;font-weight:600;margin:0;color:var(--pulse-ink);">What user research actually uncovers <span aria-hidden="true" style="color:var(--pulse-accent);">→</span></h3>
				</a>
				<a href="#" style="display:grid;grid-template-columns:1fr;gap:0.5rem;padding:1.75rem 0;border-bottom:1px solid var(--pulse-line);text-decoration:none;color:inherit;">
					<p style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;color:var(--pulse-muted);margin:0;">04 · Process · 2025 · 5 min</p>
					<h3 style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.375rem, 2.5vw, 2rem);line-height:1.15;letter-spacing:-0.02em;font-weight:600;margin:0;color:var(--pulse-ink);">Prototyping as a thinking tool <span aria-hidden="true" style="color:var(--pulse-accent);">→</span></h3>
				</a>
				<a href="#" style="display:grid;grid-template-columns:1fr;gap:0.5rem;padding:1.75rem 0;border-bottom:1px solid var(--pulse-line);text-decoration:none;color:inherit;">
					<p style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;color:var(--pulse-muted);margin:0;">05 · Notes · 2025 · 9 min</p>
					<h3 style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.375rem, 2.5vw, 2rem);line-height:1.15;letter-spacing:-0.02em;font-weight:600;margin:0;color:var(--pulse-ink);">Measuring design beyond vanity metrics <span aria-hidden="true" style="color:var(--pulse-accent);">→</span></h3>
				</a>
			</div>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 05 - PAGINATION === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:html -->
			<div class="pulse-filter">
				<a class="pulse-chip is-active" href="#" aria-current="page">1</a>
				<a class="pulse-chip" href="#">2</a>
				<a class="pulse-chip" href="#">3</a>
				<a class="pulse-chip" href="#">Next →</a>
			</div>
			<!-- /wp:html -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase">Page 1 of 3 · 12 articles</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- Footer -->
	<!-- wp:template-part {"slug":"footer-pulse","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
