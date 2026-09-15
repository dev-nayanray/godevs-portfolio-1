<?php
/**
 * Title: Demo — Mono (Developer) — Writing
 * Slug: godevs-portfolio/demo-mono-writing
 * Description: MONO writing — technical journal archive. Recommended style variation: Mono.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, mono, writing, journal, blog
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-mono","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-mono alignfull">

	<!-- Header -->
	<!-- wp:template-part {"slug":"header-mono","theme":"godevs-portfolio","tagName":"header"} /-->

	<!-- ═══ 01 — ARCHIVE HEADER ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Eyebrow + meta row -->
			<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
				<p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">— Writing</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">12 notes · 2025 — 2026</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Display H1 -->
			<!-- wp:heading {"level":1,"className":"mono-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600","letterSpacing":"-0.03em","lineHeight":"1.0","fontSize":"clamp(2.5rem, 8vw, 7.5rem)"}}} -->
			<h1 class="wp-block-heading mono-display" style="font-family:var(--wp--preset--font-family--display);font-weight:600;letter-spacing:-0.03em;line-height:1.0;font-size:clamp(2.5rem, 8vw, 7.5rem)">Notes.</h1>
			<!-- /wp:heading -->

			<!-- Supporting copy -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.6"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|40","maxWidth":"60ch"}}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.6;margin-top:var(--wp--preset--spacing--40);max-width:60ch">Short essays on engineering, design and the craft of building software. Written slowly, edited often, published when there's something worth saying.</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 02 — CATEGORY FILTER ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"bottom":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--line);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:html -->
			<div class="mono-stack-list" style="display:flex;flex-wrap:wrap;gap:0.5rem;">
				<a class="mono-chip is-active" href="#" aria-current="page">All · 12</a>
				<a class="mono-chip" href="#">WordPress</a>
				<a class="mono-chip" href="#">Performance</a>
				<a class="mono-chip" href="#">Engineering</a>
				<a class="mono-chip" href="#">Design</a>
				<a class="mono-chip" href="#">Notes</a>
			</div>
			<!-- /wp:html -->
			<!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">Filter by category</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 03 — FEATURED ARTICLE ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Featured eyebrow -->
			<!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
			<p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">Featured · 04.03.26 · WordPress · 8 min</p>
			<!-- /wp:paragraph -->

			<!-- Big 16/9 image -->
			<!-- wp:image {"aspectRatio":"16/9","scale":"cover","style":{"border":{"radius":"6px"}}} -->
			<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mono/mono-writing-1.png' ); ?>" alt="Featured article cover — abstract minimal composition of grid blocks and type, neutral palette" style="border-radius:6px;aspect-ratio:16/9;object-fit:cover" loading="eager"/></figure>
			<!-- /wp:image -->

			<!-- Title + body -->
			<!-- wp:html -->
			<a href="#" style="display:block;text-decoration:none;color:inherit;margin-top:1.5rem;">
				<h2 class="mono-display" style="font-family:var(--wp--preset--font-family--display);font-weight:600;font-size:clamp(2rem, 5vw, 4rem);line-height:1.05;letter-spacing:-0.025em;margin:0 0 1.25rem 0;max-width:24ch;">Designing Better WordPress Block Themes</h2>
				<p style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.65;margin:0 0 1.5rem 0;max-width:60ch;">A working set of principles for block theme architecture — patterns as compositions, theme.json as the source of truth, and how to keep a WordPress codebase from drifting into the all-too-familiar tangle of overrides and templates.</p>
				<p style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500;color:var(--wp--preset--color--foreground);margin:0;">Read <span aria-hidden="true">→</span></p>
			</a>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 04 — ARTICLE LIST ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Section header -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
				<!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">— More notes</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"className":"mono-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.75rem, 3.5vw, 2.75rem)","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
				<h2 class="wp-block-heading mono-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 3.5vw, 2.75rem);line-height:1.1;letter-spacing:-0.02em;font-weight:600">Recent writing.</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- Article rows -->
			<!-- wp:html -->
			<div style="border-top: 1px solid var(--mono-line);">
				<a class="mono-row" href="#" style="grid-template-columns: 8rem 1fr auto 2rem;">
					<span class="mono-row-num">18.02.26</span>
					<span class="mono-row-title">What Makes a Website Feel Fast?</span>
					<span class="mono-row-desc" style="font-family: var(--wp--preset--font-family--mono); font-size: 0.75rem;">Performance · 6 min</span>
					<span class="mono-row-arrow" aria-hidden="true">→</span>
				</a>
				<a class="mono-row" href="#" style="grid-template-columns: 8rem 1fr auto 2rem;">
					<span class="mono-row-num">02.02.26</span>
					<span class="mono-row-title">Building Interfaces That Scale</span>
					<span class="mono-row-desc" style="font-family: var(--wp--preset--font-family--mono); font-size: 0.75rem;">Engineering · 9 min</span>
					<span class="mono-row-arrow" aria-hidden="true">→</span>
				</a>
				<a class="mono-row" href="#" style="grid-template-columns: 8rem 1fr auto 2rem;">
					<span class="mono-row-num">14.01.26</span>
					<span class="mono-row-title">A Practical Approach to Design Systems</span>
					<span class="mono-row-desc" style="font-family: var(--wp--preset--font-family--mono); font-size: 0.75rem;">Design · 7 min</span>
					<span class="mono-row-arrow" aria-hidden="true">→</span>
				</a>
				<a class="mono-row" href="#" style="grid-template-columns: 8rem 1fr auto 2rem;">
					<span class="mono-row-num">08.01.26</span>
					<span class="mono-row-title">Lessons From Shipping Real Products</span>
					<span class="mono-row-desc" style="font-family: var(--wp--preset--font-family--mono); font-size: 0.75rem;">Notes · 8 min</span>
					<span class="mono-row-arrow" aria-hidden="true">→</span>
				</a>
			</div>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 05 — PAGINATION ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">01 / 03 — Showing 5 of 12 notes</p>
			<!-- /wp:paragraph -->
			<!-- wp:html -->
			<a class="mono-link" href="#"><span class="mono-chip" style="text-decoration:none;">Next →</span></a>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- Footer -->
	<!-- wp:template-part {"slug":"footer-mono","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
