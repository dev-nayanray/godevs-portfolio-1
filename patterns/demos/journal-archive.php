<?php
/**
 * Title: Demo — Journal (Writing) — Archive
 * Slug: godevs-portfolio/demo-journal-archive
 * Description: JOURNAL archive — editorial article index. Recommended style variation: Journal.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, journal, archive, articles, essays
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-journal","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-journal alignfull">

	<!-- Header -->
	<!-- wp:template-part {"slug":"header-journal","theme":"godevs-portfolio","tagName":"header"} /-->

	<!-- ═══ 01 — ARCHIVE HEADER ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|70","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Eyebrow -->
			<!-- wp:paragraph {"className":"is-style-jour-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="is-style-jour-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:600">— Archive</p>
			<!-- /wp:paragraph -->

			<!-- Display heading -->
			<!-- wp:heading {"level":1,"className":"jour-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"400","letterSpacing":"-0.025em","lineHeight":"1.0","fontSize":"clamp(2.5rem, 8vw, 7rem)"}}} -->
			<h1 class="wp-block-heading jour-display" style="font-family:var(--wp--preset--font-family--display);font-weight:400;letter-spacing:-0.025em;line-height:1.0;font-size:clamp(2.5rem, 8vw, 7rem)">The full <span class="jour-italic">archive.</span></h1>
			<!-- /wp:heading -->

			<!-- Metadata row -->
			<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:paragraph {"className":"is-style-jour-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-jour-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:600">128 entries · 04 years of writing</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"is-style-jour-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
				<p class="is-style-jour-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:600">Issue 09 · September 2026</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 02 — CATEGORY FILTER ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|50","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"},"bottom":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;border-bottom-color:var(--wp--preset--color--line);border-bottom-style:solid;border-bottom-width:1px;padding-top:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Filter nav -->
			<!-- wp:html -->
			<nav class="jour-filter" aria-label="Filter articles by category" style="display:flex;flex-wrap:wrap;gap:0.5rem 1.75rem;font-family:var(--wp--preset--font-family--body,'Inter',sans-serif);font-size:0.6875rem;font-weight:600;letter-spacing:0.18em;text-transform:uppercase;">
				<a href="#" class="is-active" style="color:var(--jour-ink);border-bottom:1px solid var(--jour-ink);padding-bottom:0.4rem;text-decoration:none;">All</a>
				<a href="#" style="color:var(--jour-muted);border-bottom:1px solid transparent;padding-bottom:0.4rem;text-decoration:none;transition:color 0.3s ease;">Essays</a>
				<a href="#" style="color:var(--jour-muted);border-bottom:1px solid transparent;padding-bottom:0.4rem;text-decoration:none;transition:color 0.3s ease;">Culture</a>
				<a href="#" style="color:var(--jour-muted);border-bottom:1px solid transparent;padding-bottom:0.4rem;text-decoration:none;transition:color 0.3s ease;">Design</a>
				<a href="#" style="color:var(--jour-muted);border-bottom:1px solid transparent;padding-bottom:0.4rem;text-decoration:none;transition:color 0.3s ease;">Technology</a>
				<a href="#" style="color:var(--jour-muted);border-bottom:1px solid transparent;padding-bottom:0.4rem;text-decoration:none;transition:color 0.3s ease;">Travel</a>
				<a href="#" style="color:var(--jour-muted);border-bottom:1px solid transparent;padding-bottom:0.4rem;text-decoration:none;transition:color 0.3s ease;">Books</a>
				<a href="#" style="color:var(--jour-muted);border-bottom:1px solid transparent;padding-bottom:0.4rem;text-decoration:none;transition:color 0.3s ease;">Notes</a>
			</nav>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 03 — FEATURED ARTICLE ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Featured header -->
			<!-- wp:paragraph {"className":"is-style-jour-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
			<p class="is-style-jour-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:600">— Featured · The lead essay</p>
			<!-- /wp:paragraph -->

			<!-- Featured article — dominant with-image entry -->
			<!-- wp:html -->
			<a class="jour-article with-image" href="#" style="margin-top: 1.5rem; padding-top: 2.5rem; border-top: 1px solid var(--jour-line); align-items: start;" aria-label="Read article — The Things We Notice When Everything Gets Quiet">
				<div class="jour-article-image" style="aspect-ratio: 16/9;">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/journal/journal-featured.webp' ); ?>" alt="Featured archive essay — quiet minimal interior with soft light through a window, warm tones" loading="lazy">
				</div>
				<div class="jour-article-body">
					<p class="jour-article-meta"><span>Essay</span><span>04.09.26</span><span>8 min read</span></p>
					<h3 class="jour-article-title" style="font-size: clamp(2rem, 4.5vw, 3.5rem); line-height: 1.05;">The Things We Notice When Everything Gets <span style="font-style:italic">Quiet</span></h3>
					<p class="jour-article-excerpt" style="font-size: 1.0625rem; max-width: 52ch; line-height: 1.7;">When the noise recedes, the small details — the quality of light, the texture of a surface, the rhythm of a day — become visible again. An essay on what we miss when we move too fast, and what returns when we let the room go quiet.</p>
					<p style="margin-top: 1rem;"><span class="jour-link">Read article <span class="jour-arrow" aria-hidden="true">→</span></span></p>
				</div>
			</a>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 04 — ARTICLE INDEX ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:0;padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Section header -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40)">
				<!-- wp:paragraph {"className":"is-style-jour-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-jour-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:600">— Index · Recent entries · 07</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Article 01 — with image, reversed -->
			<!-- wp:html -->
			<a class="jour-article with-image is-reversed" href="#" style="margin-top: 0;" aria-label="Read article — The Architecture of Everyday Things">
				<div class="jour-article-body">
					<p class="jour-article-meta"><span>Essay</span><span>04.09.26</span><span>7 min</span></p>
					<h3 class="jour-article-title">The Architecture of Everyday Things</h3>
					<p class="jour-article-excerpt">How the objects we use every day shape our attention, our routines and our sense of what matters.</p>
					<p style="margin-top: 0.75rem;"><span class="jour-link">Read article <span class="jour-arrow" aria-hidden="true">→</span></span></p>
				</div>
				<div class="jour-article-image" style="aspect-ratio: 4/3;">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/journal/journal-article-1.webp' ); ?>" alt="Editorial image about everyday architecture — minimal building facade with warm light" loading="lazy">
				</div>
			</a>
			<!-- /wp:html -->

			<!-- Article 02 — with image, normal -->
			<!-- wp:html -->
			<a class="jour-article with-image" href="#" style="margin-top: 0;" aria-label="Read article — What We Mean When We Say Simple">
				<div class="jour-article-image" style="aspect-ratio: 3/4;">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/journal/journal-article-2.webp' ); ?>" alt="Editorial image about simplicity — single object on warm paper surface" loading="lazy">
				</div>
				<div class="jour-article-body">
					<p class="jour-article-meta"><span>Notes</span><span>28.08.26</span><span>5 min</span></p>
					<h3 class="jour-article-title">What We Mean When We Say Simple</h3>
					<p class="jour-article-excerpt">Simplicity is not the absence of things — it's the presence of the right things in the right proportion.</p>
					<p style="margin-top: 0.75rem;"><span class="jour-link">Read article <span class="jour-arrow" aria-hidden="true">→</span></span></p>
				</div>
			</a>
			<!-- /wp:html -->

			<!-- Article 03 — text only -->
			<!-- wp:html -->
			<a class="jour-article" href="#" style="margin-top: 0;" aria-label="Read article — Notes From a City That Never Stops">
				<div class="jour-article-body">
					<p class="jour-article-meta"><span>Travel</span><span>21.08.26</span><span>9 min</span></p>
					<h3 class="jour-article-title">Notes From a City That Never Stops</h3>
					<p class="jour-article-excerpt">A week of walking, observing and listening in a place that moves faster than thought.</p>
					<p style="margin-top: 0.75rem;"><span class="jour-link">Read article <span class="jour-arrow" aria-hidden="true">→</span></span></p>
				</div>
			</a>
			<!-- /wp:html -->

			<!-- Article 04 — with image, reversed -->
			<!-- wp:html -->
			<a class="jour-article with-image is-reversed" href="#" style="margin-top: 0;" aria-label="Read article — The Long Way Around">
				<div class="jour-article-body">
					<p class="jour-article-meta"><span>Essay</span><span>14.08.26</span><span>8 min</span></p>
					<h3 class="jour-article-title">The Long Way Around</h3>
					<p class="jour-article-excerpt">Some ideas become clearer when we stop trying to reach them quickly.</p>
					<p style="margin-top: 0.75rem;"><span class="jour-link">Read article <span class="jour-arrow" aria-hidden="true">→</span></span></p>
				</div>
				<div class="jour-article-image" style="aspect-ratio: 3/4;">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/journal/journal-article-4.webp' ); ?>" alt="Editorial image about slow travel — winding road through warm landscape at golden hour" loading="lazy">
				</div>
			</a>
			<!-- /wp:html -->

			<!-- Article 05 — with image, normal -->
			<!-- wp:html -->
			<a class="jour-article with-image" href="#" style="margin-top: 0;" aria-label="Read article — Designing for Attention">
				<div class="jour-article-image" style="aspect-ratio: 4/3;">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/journal/journal-article-5.webp' ); ?>" alt="Editorial image about attention and design — abstract composition of layered paper forms" loading="lazy">
				</div>
				<div class="jour-article-body">
					<p class="jour-article-meta"><span>Design</span><span>07.08.26</span><span>6 min</span></p>
					<h3 class="jour-article-title">Designing for Attention</h3>
					<p class="jour-article-excerpt">In a world built to distract, the most generous thing design can do is make space for focus.</p>
					<p style="margin-top: 0.75rem;"><span class="jour-link">Read article <span class="jour-arrow" aria-hidden="true">→</span></span></p>
				</div>
			</a>
			<!-- /wp:html -->

			<!-- Article 06 — text only -->
			<!-- wp:html -->
			<a class="jour-article" href="#" style="margin-top: 0;" aria-label="Read article — On Making Things Slowly">
				<div class="jour-article-body">
					<p class="jour-article-meta"><span>Notes</span><span>31.07.26</span><span>4 min</span></p>
					<h3 class="jour-article-title">On Making Things Slowly</h3>
					<p class="jour-article-excerpt">Why the work that lasts is rarely the work that's rushed.</p>
					<p style="margin-top: 0.75rem;"><span class="jour-link">Read article <span class="jour-arrow" aria-hidden="true">→</span></span></p>
				</div>
			</a>
			<!-- /wp:html -->

			<!-- Article 07 — with image, reversed -->
			<!-- wp:html -->
			<a class="jour-article with-image is-reversed" href="#" style="margin-top: 0;" aria-label="Read article — Reading Like a Writer Again">
				<div class="jour-article-body">
					<p class="jour-article-meta"><span>Books</span><span>24.07.26</span><span>6 min</span></p>
					<h3 class="jour-article-title">Reading Like a Writer Again</h3>
					<p class="jour-article-excerpt">Returning to slow, attentive reading — and what it teaches us about our own work.</p>
					<p style="margin-top: 0.75rem;"><span class="jour-link">Read article <span class="jour-arrow" aria-hidden="true">→</span></span></p>
				</div>
				<div class="jour-article-image" style="aspect-ratio: 3/4;">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/journal/journal-article-6.webp' ); ?>" alt="Editorial image about slow reading — open book with warm afternoon light" loading="lazy">
				</div>
			</a>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 05 — PAGINATION ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group alignwide">

			<!-- Page indicator -->
			<!-- wp:paragraph {"className":"is-style-jour-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="is-style-jour-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:600">01 / 04 · Page 1 of 4</p>
			<!-- /wp:paragraph -->

			<!-- Page numbers + Load more -->
			<!-- wp:html -->
			<nav aria-label="Pagination" style="display:flex;flex-wrap:wrap;align-items:center;gap:0.5rem 1.25rem;font-family:var(--wp--preset--font-family--body,'Inter',sans-serif);font-size:0.6875rem;font-weight:600;letter-spacing:0.18em;text-transform:uppercase;">
				<a href="#" class="is-active" style="color:var(--jour-ink);border-bottom:1px solid var(--jour-ink);padding-bottom:0.35rem;text-decoration:none;">01</a>
				<a href="#" style="color:var(--jour-muted);padding-bottom:0.35rem;text-decoration:none;">02</a>
				<a href="#" style="color:var(--jour-muted);padding-bottom:0.35rem;text-decoration:none;">03</a>
				<a href="#" style="color:var(--jour-muted);padding-bottom:0.35rem;text-decoration:none;">04</a>
				<a href="#" style="font-family:var(--wp--preset--font-family--display,'Newsreader',serif);font-style:italic;font-size:1.0625rem;letter-spacing:0;text-transform:none;color:var(--jour-ink);border-bottom:1px solid var(--jour-ink);padding-bottom:0.2rem;text-decoration:none;">Load more →</a>
			</nav>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- Footer -->
	<!-- wp:template-part {"slug":"footer-journal","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
