<?php
/**
 * Title: Demo — Architect (Architecture) — Journal
 * Slug: godevs-portfolio/demo-architect-journal
 * Description: ARCHITECT journal — architecture essays and notes. Recommended style variation: Architect.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, architect, journal, essays, architecture
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-architect","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-architect alignfull">

	<!-- Header -->
	<!-- wp:template-part {"slug":"header-architect","theme":"godevs-portfolio","tagName":"header"} /-->

	<!-- ═══ 01 — ARCHIVE HEADER (typography, minimal) ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|70","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"className":"is-style-arch-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.2em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
			<p class="is-style-arch-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.2em;text-transform:uppercase;font-weight:500">— Journal</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":1,"className":"arch-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"500","letterSpacing":"-0.03em","lineHeight":"0.98","fontSize":"clamp(3rem, 9vw, 8rem)"}},"layout":{"selfStretch":"fit","flexSize":"14ch"}} -->
			<h1 class="wp-block-heading arch-display" style="font-family:var(--wp--preset--font-family--display);font-weight:500;letter-spacing:-0.03em;line-height:0.98;font-size:clamp(3rem, 9vw, 8rem);max-width:14ch">Field <span class="arch-italic">notes.</span></h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500;margin-top:var(--wp--preset--spacing--40)">04 Essays · 04 Categories · 2026 Issue</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 02 — CATEGORY FILTER ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"},"bottom":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;border-bottom-color:var(--wp--preset--color--line);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:html -->
			<nav class="arch-filter" aria-label="Journal categories">
				<a class="is-active" href="#">All</a>
				<a href="#">Essays</a>
				<a href="#">Process</a>
				<a href="#">Materials</a>
				<a href="#">Notes</a>
			</nav>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 03 — FEATURED ARTICLE (dominant) ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"className":"is-style-arch-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.2em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
			<p class="is-style-arch-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.2em;text-transform:uppercase;font-weight:500">Featured Essay</p>
			<!-- /wp:paragraph -->

			<!-- Large image -->
			<!-- wp:image {"align":"wide","aspectRatio":"16/9","scale":"cover","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|30"}}}} -->
			<figure class="wp-block-image alignwide"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/architect/architect-journal-1.webp' ); ?>" alt="Featured essay image — concrete gallery interior with raking afternoon light" style="aspect-ratio:16/9;object-fit:cover" loading="lazy"/></figure>
			<!-- /wp:image -->

			<!-- Meta + Title + Excerpt -->
			<!-- wp:html -->
			<div style="max-width: 56rem;">
				<p class="arch-project-meta" style="margin: 0 0 1.25rem;"><span>28.03.26</span><span>Editorial</span><span>12 min read</span></p>
				<h2 class="arch-display" style="font-family: var(--wp--preset--font-family--display); font-weight: 500; font-size: clamp(2.25rem, 5vw, 4rem); line-height: 1.02; letter-spacing: -0.03em; margin: 0 0 1.5rem;"><a href="/journal" style="text-decoration: none; color: inherit;">Notes from the studio — spring <span class="arch-italic">2026.</span></a></h2>
				<p style="font-size: var(--wp--preset--font-size--medium); line-height: 1.7; color: var(--wp--preset--color--muted); margin: 0 0 2rem; max-width: 56ch;">A short reflection on what we have been thinking about this season — courtyards and slow light, the architecture of patience, and why a building should reveal itself one room at a time.</p>
				<p style="font-family: var(--wp--preset--font-family--body); font-size: 0.6875rem; letter-spacing: 0.18em; text-transform: uppercase; font-weight: 500; margin: 0;"><a href="/journal">Read essay <span class="arch-arrow" aria-hidden="true">→</span></a></p>
			</div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 04 — ARTICLE LIST ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
				<!-- wp:paragraph {"className":"is-style-arch-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.2em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-arch-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.2em;text-transform:uppercase;font-weight:500">— Index</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"className":"arch-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.75rem, 4vw, 3rem)","lineHeight":"1.05","letterSpacing":"-0.025em","fontWeight":"500"}}} -->
				<h2 class="wp-block-heading arch-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 4vw, 3rem);line-height:1.05;letter-spacing:-0.025em;font-weight:500">All essays, in reverse order.</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- Article list (arch-service-row with custom 4-col grid) -->
			<!-- wp:html -->
			<div style="border-top: 1px solid var(--arch-line);">
				<a class="arch-service-row" href="/journal" style="grid-template-columns: 8rem 1fr auto 2rem;">
					<span class="arch-service-num">04.03.26</span>
					<span class="arch-service-title">The Quiet Power of Natural Light</span>
					<span class="arch-service-desc" style="font-size: 0.6875rem; letter-spacing: 0.14em; text-transform: uppercase;">Essays · 7 min</span>
					<span class="arch-service-arrow" aria-hidden="true">→</span>
				</a>
				<a class="arch-service-row" href="/journal" style="grid-template-columns: 8rem 1fr auto 2rem;">
					<span class="arch-service-num">18.02.26</span>
					<span class="arch-service-title">Designing Around Courtyards</span>
					<span class="arch-service-desc" style="font-size: 0.6875rem; letter-spacing: 0.14em; text-transform: uppercase;">Process · 9 min</span>
					<span class="arch-service-arrow" aria-hidden="true">→</span>
				</a>
				<a class="arch-service-row" href="/journal" style="grid-template-columns: 8rem 1fr auto 2rem;">
					<span class="arch-service-num">02.02.26</span>
					<span class="arch-service-title">Material Honesty in Contemporary Architecture</span>
					<span class="arch-service-desc" style="font-size: 0.6875rem; letter-spacing: 0.14em; text-transform: uppercase;">Essays · 6 min</span>
					<span class="arch-service-arrow" aria-hidden="true">→</span>
				</a>
				<a class="arch-service-row" href="/journal" style="grid-template-columns: 8rem 1fr auto 2rem;">
					<span class="arch-service-num">14.01.26</span>
					<span class="arch-service-title">What Makes a Building Last?</span>
					<span class="arch-service-desc" style="font-size: 0.6875rem; letter-spacing: 0.14em; text-transform: uppercase;">Notes · 8 min</span>
					<span class="arch-service-arrow" aria-hidden="true">→</span>
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
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
			<div class="wp-block-columns are-vertically-aligned-center">
				<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
				<div class="wp-block-column" style="flex-basis:50%">
					<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">Page 01 / 03</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
				<div class="wp-block-column" style="flex-basis:50%">
					<!-- wp:paragraph {"align":"right","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"}}} -->
					<p class="has-text-align-right" style="font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500"><a href="#">Next →</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- Footer -->
	<!-- wp:template-part {"slug":"footer-architect","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
