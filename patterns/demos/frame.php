<?php
/**
 * Title: Demo — Frame (Photography)
 * Slug: godevs-portfolio/demo-frame
 * Description: FRAME — Photographer. Dark gallery aesthetic, minimal chrome, image-first, large editorial photo layouts. Recommended style variation: Frame.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, frame, photography, photographer, gallery, portfolio
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-frame","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-frame alignfull">

	<!-- Header (minimal — floats over hero) -->
	<!-- wp:template-part {"slug":"header-frame","theme":"godevs-portfolio","tagName":"header"} /-->

	<!-- ═══ HERO — almost entirely photography ═══ -->
	<!-- wp:cover {"useFeaturedImage":false,"dimRatio":20,"overlayColor":"primary","minHeight":92,"isDark":true,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-cover" style="min-height:92vh;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
		<span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-20 has-background-dim"></span>
		<img class="wp-block-cover__image-background" alt="Spectacular dramatic landscape photograph — vast atmospheric sky over a minimalist horizon with a single distant figure for scale, golden hour" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/frame/frame-hero.webp' ); ?>" style="object-fit:cover;object-position:center" loading="eager"/>
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-cover__inner-container" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
			<!-- spacer to push content down -->
			<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|90"}}}} -->
			<p style="margin-bottom:var(--wp--preset--spacing--90)"></p>
			<!-- /wp:paragraph -->

			<!-- bottom-anchored content over the photo -->
			<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group alignfull">
				<!-- wp:paragraph {"className":"is-style-frame-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|contrast"}}} -->
				<p class="is-style-frame-label has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:400">Photography — Lisbon / Worldwide</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":1,"className":"frame-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"300","letterSpacing":"-0.03em","lineHeight":"0.98","fontSize":"clamp(2.75rem, 9vw, 8.5rem)"},"color":{"text":"var:preset|color|contrast"}}} -->
				<h1 class="wp-block-heading frame-display has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-weight:300;letter-spacing:-0.03em;line-height:0.98;font-size:clamp(2.75rem, 9vw, 8.5rem)">Pictures that <span class="frame-italic">hold still.</span></h1>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.6","fontWeight":"300"},"color":{"text":"var:preset|color|contrast"},"spacing":{"margin":{"top":"var:preset|spacing|40"}},"layout":{"selfStretch":"fit","flexSize":"44ch"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--contrast);font-size:var(--wp--preset--font-size--medium);line-height:1.6;font-weight:300;margin-top:var(--wp--preset--spacing--40);max-width:44ch">A photography practice working in light, space and silence — for editorial, brand and fine-art.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:cover -->

	<!-- ═══ INTRODUCTION — minimal, image-first breathing room ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
			<div class="wp-block-columns">
				<!-- wp:column {"width":"30%"} -->
				<div class="wp-block-column" style="flex-basis:30%">
					<!-- wp:paragraph {"className":"is-style-frame-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="is-style-frame-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:400">— About the work</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":"70%"} -->
				<div class="wp-block-column" style="flex-basis:70%">
					<!-- wp:paragraph {"className":"frame-pullquote","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.75rem, 3.5vw, 2.75rem)","lineHeight":"1.2","letterSpacing":"-0.02em","fontWeight":"300"},"layout":{"selfStretch":"fit","flexSize":"28ch"}}} -->
					<p class="frame-pullquote" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 3.5vw, 2.75rem);line-height:1.2;letter-spacing:-0.02em;font-weight:300;max-width:28ch">Photographs for editorial, brand and fine-art — made with patience, printed with care.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|normal","lineHeight":"1.75","fontWeight":"300"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|50"}},"layout":{"selfStretch":"fit","flexSize":"52ch"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--normal);line-height:1.75;font-weight:300;margin-top:var(--wp--preset--spacing--50);max-width:52ch">I make pictures for editors, brands and collectors — across portrait, landscape, architecture and still life. The work is slow, deliberate, and built to last longer than the brief that began it.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ SELECTED STORIES — large editorial image layouts ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Section header -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|70"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)">
				<!-- wp:paragraph {"className":"is-style-frame-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-frame-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:400">Selected Stories — 2024 / 2026</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"className":"frame-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 6vw, 5.5rem)","lineHeight":"0.98","letterSpacing":"-0.03em","fontWeight":"300"}}} -->
				<h2 class="wp-block-heading frame-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 6vw, 5.5rem);line-height:0.98;letter-spacing:-0.03em;font-weight:300">Selected Stories</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- Story 01 — large landscape (full-bleed wide) -->
			<!-- wp:html -->
			<a class="frame-story" href="#" style="display:block; aspect-ratio: 16/9;" aria-label="View story — Quiet Coast">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/frame/frame-story-1.webp' ); ?>" alt="Fine-art portrait — single figure against a vast textured wall with dramatic side light" loading="lazy">
			</a>
			<!-- /wp:html -->
			<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|80"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"baseline"}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--80)">
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.5rem, 2.5vw, 2.25rem)","fontWeight":"300","letterSpacing":"-0.015em","lineHeight":"1.1"}}} -->
				<p style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.5rem, 2.5vw, 2.25rem);font-weight:300;letter-spacing:-0.015em;line-height:1.1">01 — Quiet Coast</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"is-style-frame-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-frame-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:400">Landscape · 2026 · 14 plates</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Stories 02 + 03 — asymmetric pair -->
			<!-- wp:html -->
			<div class="frame-stories" style="margin-bottom:4rem;">
				<a class="frame-story fs-1" href="#" aria-label="View story — Wall Study">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/frame/frame-story-2.webp' ); ?>" alt="Architectural photograph — minimalist concrete staircase with dramatic shadows" loading="lazy">
				</a>
				<a class="frame-story fs-2" href="#" aria-label="View story — Rain, Plaza">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/frame/frame-story-3.webp' ); ?>" alt="Street photograph — lone figure crossing a rain-soaked plaza at dusk" loading="lazy">
				</a>
			</div>
			<!-- /wp:html -->
			<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|80"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"baseline"}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--80)">
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.25rem, 2vw, 1.75rem)","fontWeight":"300","letterSpacing":"-0.015em"}}} -->
				<p style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.25rem, 2vw, 1.75rem);font-weight:300;letter-spacing:-0.015em">02 — Wall Study &nbsp;·&nbsp; 03 — Rain, Plaza</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"is-style-frame-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-frame-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:400">Architecture · Street · 2025</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Story 04 — full-bleed wide -->
			<!-- wp:html -->
			<a class="frame-story" href="#" style="display:block; aspect-ratio: 21/9; margin-bottom:1.5rem;" aria-label="View story — Vessel">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/frame/frame-story-4.webp' ); ?>" alt="Still life photograph — single ceramic vessel on a textured surface with raking light" loading="lazy">
			</a>
			<!-- /wp:html -->
			<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|80"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"baseline"}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--80)">
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.5rem, 2.5vw, 2.25rem)","fontWeight":"300","letterSpacing":"-0.015em"}}} -->
				<p style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.5rem, 2.5vw, 2.25rem);font-weight:300;letter-spacing:-0.015em">04 — Vessel</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"is-style-frame-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-frame-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:400">Still life · 2025 · Commission</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Stories 05 + 06 — asymmetric pair (offset) -->
			<!-- wp:html -->
			<div class="frame-stories">
				<a class="frame-story fs-5" href="#" aria-label="View story — Ridges">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/frame/frame-story-5.webp' ); ?>" alt="Abstract landscape — layered mountain ridges in atmospheric mist at dawn" loading="lazy">
				</a>
				<a class="frame-story fs-6" href="#" aria-label="View story — Drape">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/frame/frame-story-6.webp' ); ?>" alt="Editorial fashion photograph — draped fabric and figure in a vast empty space" loading="lazy">
				</a>
			</div>
			<!-- /wp:html -->
			<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"baseline"}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)">
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.25rem, 2vw, 1.75rem)","fontWeight":"300","letterSpacing":"-0.015em"}}} -->
				<p style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.25rem, 2vw, 1.75rem);font-weight:300;letter-spacing:-0.015em">05 — Ridges &nbsp;·&nbsp; 06 — Drape</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"is-style-frame-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-frame-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:400">Landscape · Fashion · 2024</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- All work link -->
			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|90"}},"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.75rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"400"}}} -->
			<p style="margin-top:var(--wp--preset--spacing--90);font-family:var(--wp--preset--font-family--body);font-size:0.75rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:400"><a href="/work">View all stories →</a></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ FEATURED COMMISSION (full-bleed dark image break) ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:0;padding-bottom:0;padding-left:0;padding-right:0">
		<!-- wp:cover {"useFeaturedImage":false,"dimRatio":35,"overlayColor":"primary","minHeight":70,"isDark":true,"style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-cover" style="min-height:70vh;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
			<span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-35 has-background-dim"></span>
			<img class="wp-block-cover__image-background" alt="Featured commission — dramatic cloud formation at sunset over a minimal horizon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/frame/frame-journal-3.webp' ); ?>" style="object-fit:cover;object-position:center" loading="lazy"/>
			<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
			<div class="wp-block-cover__inner-container">
				<div class="wp-block-group alignwide">
					<!-- wp:paragraph {"className":"is-style-frame-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|accent"}}} -->
					<p class="is-style-frame-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:400">Featured Commission</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":2,"className":"frame-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 6vw, 5.5rem)","lineHeight":"0.98","letterSpacing":"-0.03em","fontWeight":"300"},"color":{"text":"var:preset|color|contrast"}}} -->
					<h2 class="wp-block-heading frame-display has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 6vw, 5.5rem);line-height:0.98;letter-spacing:-0.03em;font-weight:300">Sky Studies</h2>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|contrast"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:400">Fine-art · 2026 · 12 plates · Print edition</p>
					<!-- /wp:paragraph -->
				</div>
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:cover -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ JOURNAL — minimal index ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
				<!-- wp:paragraph {"className":"is-style-frame-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-frame-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:400">— Journal</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 6vw, 5rem)","lineHeight":"1.0","letterSpacing":"-0.03em","fontWeight":"300"}}} -->
				<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 6vw, 5rem);line-height:1.0;letter-spacing:-0.03em;font-weight:300">Field notes.</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- Article index — minimal gallery rows -->
			<!-- wp:html -->
			<div style="border-top:1px solid var(--frame-line);">
				<a class="frame-index-row" href="/journal">
					<span class="frame-index-num">04.03.26</span>
					<span class="frame-index-title">On waiting for light</span>
					<span class="frame-index-meta">Essay · 7 min</span>
					<span class="frame-index-arrow">→</span>
				</a>
				<a class="frame-index-row" href="/journal">
					<span class="frame-index-num">18.02.26</span>
					<span class="frame-index-title">The print as the photograph</span>
					<span class="frame-index-meta">Process · 9 min</span>
					<span class="frame-index-arrow">→</span>
				</a>
				<a class="frame-index-row" href="/journal">
					<span class="frame-index-num">02.02.26</span>
					<span class="frame-index-title">Notes on scale and solitude</span>
					<span class="frame-index-meta">Essay · 6 min</span>
					<span class="frame-index-arrow">→</span>
				</a>
				<a class="frame-index-row" href="/journal">
					<span class="frame-index-num">14.01.26</span>
					<span class="frame-index-title">A short defence of slowness</span>
					<span class="frame-index-meta">Notes · 5 min</span>
					<span class="frame-index-arrow">→</span>
				</a>
			</div>
			<!-- /wp:html -->

			<!-- All journal link -->
			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}},"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.75rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"400"}}} -->
			<p style="margin-top:var(--wp--preset--spacing--60);font-family:var(--wp--preset--font-family--body);font-size:0.75rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:400"><a href="/journal">Read the journal →</a></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- Footer -->
	<!-- wp:template-part {"slug":"footer-frame","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
