<?php
/**
 * Title: Demo — Frame (Photography) — About
 * Slug: godevs-portfolio/demo-frame-about
 * Description: FRAME about — biography, philosophy, practice. Recommended style variation: Frame.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, frame, about, biography, photography
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-frame","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-frame alignfull">

	<!-- Header (minimal — floats over hero) -->
	<!-- wp:template-part {"slug":"header-frame","theme":"godevs-portfolio","tagName":"header"} /-->

	<!-- ═══ HERO — typography, text-only, generous whitespace ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"className":"is-style-frame-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="is-style-frame-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:400">— About</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":1,"className":"frame-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"300","letterSpacing":"-0.03em","lineHeight":"0.98","fontSize":"clamp(2.75rem, 9vw, 8.5rem)"}}} -->
			<h1 class="wp-block-heading frame-display" style="font-family:var(--wp--preset--font-family--display);font-weight:300;letter-spacing:-0.03em;line-height:0.98;font-size:clamp(2.75rem, 9vw, 8.5rem)">A practice of <span class="frame-italic">patience.</span></h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:400;margin-top:var(--wp--preset--spacing--40)"><span class="frame-dot" aria-hidden="true"></span>Available for commissions · 2026</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ PORTRAIT + BIO — frame-2col ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:columns {"align":"wide","className":"frame-2col","style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
		<div class="wp-block-columns alignwide frame-2col">
			<!-- wp:column {"width":"40%"} -->
			<div class="wp-block-column" style="flex-basis:40%">
				<!-- wp:html -->
				<figure class="frame-story" style="margin:0;aspect-ratio:4/5;background:var(--frame-surface);">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/frame/frame-portrait.png' ); ?>" alt="Studio portrait of the photographer in low side light, against a dark textured wall — Lisbon" loading="lazy" style="display:block;width:100%;height:100%;object-fit:cover;">
				</figure>
				<!-- /wp:html -->
				<!-- wp:paragraph {"className":"frame-story-caption","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="frame-story-caption has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.12em;text-transform:uppercase;font-weight:400">Studio portrait · Lisbon, 2026</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"width":"60%"} -->
			<div class="wp-block-column" style="flex-basis:60%">
				<!-- wp:paragraph {"className":"is-style-frame-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
				<p class="is-style-frame-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:400;margin-bottom:var(--wp--preset--spacing--30)">— Biography</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"clamp(1.125rem, 1.8vw, 1.375rem)","lineHeight":"1.65","fontWeight":"300","letterSpacing":"-0.01em"},"layout":{"selfStretch":"fit","flexSize":"52ch"}}} -->
				<p style="font-family:var(--wp--preset--font-family--body);font-size:clamp(1.125rem, 1.8vw, 1.375rem);line-height:1.65;font-weight:300;letter-spacing:-0.01em;max-width:52ch">I am a photographer working in light, space and silence — making pictures for editorial, brand and fine-art commissions from a small studio in Lisbon.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"var:preset|font-size|normal","lineHeight":"1.8","fontWeight":"300"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|40"}},"layout":{"selfStretch":"fit","flexSize":"56ch"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:var(--wp--preset--font-size--normal);line-height:1.8;font-weight:300;margin-top:var(--wp--preset--spacing--40);max-width:56ch">The work began in 2014 as a long study of the Atlantic coast — fourteen winters returning to the same kilometre of shoreline. That practice of waiting became the way I make every picture: slow, deliberate, made to last longer than the brief that began it.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"var:preset|font-size|normal","lineHeight":"1.8","fontWeight":"300"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|30"}},"layout":{"selfStretch":"fit","flexSize":"56ch"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:var(--wp--preset--font-size--normal);line-height:1.8;font-weight:300;margin-top:var(--wp--preset--spacing--30);max-width:56ch">Today the studio works across portrait, landscape, architecture and still life — for editors, brands and collectors who value restraint. Every commission is photographed on 4×5 film where the subject permits, and printed by hand on Hahnemühle Photo Rag.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"var:preset|font-size|normal","lineHeight":"1.8","fontWeight":"300"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|30"}},"layout":{"selfStretch":"fit","flexSize":"56ch"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:var(--wp--preset--font-size--normal);line-height:1.8;font-weight:300;margin-top:var(--wp--preset--spacing--30);max-width:56ch">I take on a small number of commissions each year — usually four to six — so that the work can keep the patience it needs. The rest of the time is spent on personal series, print editions and the slow project of looking.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ PHILOSOPHY — frame-pullquote, asymmetric ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"className":"is-style-frame-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"bottom":"var:preset|spacing|40","left":"8%"}}}} -->
			<p class="is-style-frame-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:400;margin-bottom:var(--wp--preset--spacing--40);margin-left:8%">— Philosophy</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"frame-pullquote","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 4.5vw, 3.75rem)","lineHeight":"1.15","letterSpacing":"-0.025em","fontWeight":"300"},"layout":{"selfStretch":"fit","flexSize":"28ch"},"spacing":{"margin":{"left":"8%"}}}} -->
			<p class="frame-pullquote" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 4.5vw, 3.75rem);line-height:1.15;letter-spacing:-0.025em;font-weight:300;max-width:28ch;margin-left:8%">Photography is the discipline of waiting for what is already there.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"is-style-frame-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|40","left":"8%"}}}} -->
			<p class="is-style-frame-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:400;margin-top:var(--wp--preset--spacing--40);margin-left:8%">— the studio</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ PRACTICE / CAPABILITIES — index list ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
				<!-- wp:paragraph {"className":"is-style-frame-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-frame-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:400">— Practice</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"className":"frame-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 6vw, 5.5rem)","lineHeight":"0.98","letterSpacing":"-0.03em","fontWeight":"300"}}} -->
				<h2 class="wp-block-heading frame-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 6vw, 5.5rem);line-height:0.98;letter-spacing:-0.03em;font-weight:300">Capabilities</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->
			<!-- wp:html -->
			<div style="border-top:1px solid var(--frame-line);">
				<a class="frame-index-row" href="/contact" aria-label="Enquire about editorial commissions">
					<span class="frame-index-num">01</span>
					<span class="frame-index-title">Editorial</span>
					<span class="frame-index-meta">Magazines · Long-form</span>
					<span class="frame-index-arrow" aria-hidden="true">→</span>
				</a>
				<a class="frame-index-row" href="/contact" aria-label="Enquire about brand commissions">
					<span class="frame-index-num">02</span>
					<span class="frame-index-title">Brand</span>
					<span class="frame-index-meta">Campaigns · Identity</span>
					<span class="frame-index-arrow" aria-hidden="true">→</span>
				</a>
				<a class="frame-index-row" href="/contact" aria-label="Enquire about fine-art prints">
					<span class="frame-index-num">03</span>
					<span class="frame-index-title">Fine-art prints</span>
					<span class="frame-index-meta">Editions · Archival</span>
					<span class="frame-index-arrow" aria-hidden="true">→</span>
				</a>
				<a class="frame-index-row" href="/contact" aria-label="Enquire about portrait commissions">
					<span class="frame-index-num">04</span>
					<span class="frame-index-title">Portraits</span>
					<span class="frame-index-meta">Studio · On location</span>
					<span class="frame-index-arrow" aria-hidden="true">→</span>
				</a>
				<a class="frame-index-row" href="/contact" aria-label="Enquire about architecture commissions">
					<span class="frame-index-num">05</span>
					<span class="frame-index-title">Architecture</span>
					<span class="frame-index-meta">Interiors · Buildings</span>
					<span class="frame-index-arrow" aria-hidden="true">→</span>
				</a>
				<a class="frame-index-row" href="/contact" aria-label="Enquire about commissioned series">
					<span class="frame-index-num">06</span>
					<span class="frame-index-title">Commissioned series</span>
					<span class="frame-index-meta">Long-form · Books</span>
					<span class="frame-index-arrow" aria-hidden="true">→</span>
				</a>
			</div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ STUDIO IMAGE — wide plate ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:html -->
			<a class="frame-story" href="#" style="display:block; aspect-ratio: 21/9;" aria-label="View the studio — Lisbon">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/frame/frame-studio.png' ); ?>" alt="The studio interior in Lisbon — large north-facing window, single chair, textured plaster wall, soft diffused daylight" loading="lazy">
			</a>
			<!-- /wp:html -->
			<!-- wp:paragraph {"className":"frame-story-caption","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="frame-story-caption has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.12em;text-transform:uppercase;font-weight:400">The studio — Lisbon</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ SELECTED CLIENTS / PUBLICATIONS — index list ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
				<!-- wp:paragraph {"className":"is-style-frame-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-frame-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:400">— Selected</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"className":"frame-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 6vw, 5.5rem)","lineHeight":"0.98","letterSpacing":"-0.03em","fontWeight":"300"}}} -->
				<h2 class="wp-block-heading frame-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 6vw, 5.5rem);line-height:0.98;letter-spacing:-0.03em;font-weight:300">Clients &amp; publications</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->
			<!-- wp:html -->
			<div style="border-top:1px solid var(--frame-line);">
				<a class="frame-index-row" href="#" aria-label="The New Yorker">
					<span class="frame-index-num">01</span>
					<span class="frame-index-title">The New Yorker</span>
					<span class="frame-index-meta">Editorial · 2025</span>
					<span class="frame-index-arrow" aria-hidden="true">→</span>
				</a>
				<a class="frame-index-row" href="#" aria-label="Wallpaper*">
					<span class="frame-index-num">02</span>
					<span class="frame-index-title">Wallpaper*</span>
					<span class="frame-index-meta">Editorial · 2024</span>
					<span class="frame-index-arrow" aria-hidden="true">→</span>
				</a>
				<a class="frame-index-row" href="#" aria-label="Kinfolk">
					<span class="frame-index-num">03</span>
					<span class="frame-index-title">Kinfolk</span>
					<span class="frame-index-meta">Editorial · 2024</span>
					<span class="frame-index-arrow" aria-hidden="true">→</span>
				</a>
				<a class="frame-index-row" href="#" aria-label="Aesop">
					<span class="frame-index-num">04</span>
					<span class="frame-index-title">Aesop</span>
					<span class="frame-index-meta">Brand · 2025</span>
					<span class="frame-index-arrow" aria-hidden="true">→</span>
				</a>
				<a class="frame-index-row" href="#" aria-label="North Studio">
					<span class="frame-index-num">05</span>
					<span class="frame-index-title">North Studio</span>
					<span class="frame-index-meta">Brand · 2023</span>
					<span class="frame-index-arrow" aria-hidden="true">→</span>
				</a>
				<a class="frame-index-row" href="#" aria-label="Monument Books">
					<span class="frame-index-num">06</span>
					<span class="frame-index-title">Monument Books</span>
					<span class="frame-index-meta">Publication · 2026</span>
					<span class="frame-index-arrow" aria-hidden="true">→</span>
				</a>
			</div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ CTA — brief closing line to /contact ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"className":"is-style-frame-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="is-style-frame-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:400">— Next</p>
			<!-- /wp:paragraph -->
			<!-- wp:html -->
			<a href="/contact" class="frame-display" style="display:block;font-family:var(--wp--preset--font-family--display);font-weight:300;font-size:clamp(2.5rem, 7vw, 6rem);line-height:1;letter-spacing:-0.03em;text-decoration:none;color:var(--wp--preset--color--foreground);transition:color 0.4s ease;">Start a <span class="frame-italic">conversation</span> <span style="font-family:var(--wp--preset--font-family--serif);font-style:italic;color:var(--wp--preset--color--accent);margin-left:0.4rem;" aria-hidden="true">→</span></a>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- Footer -->
	<!-- wp:template-part {"slug":"footer-frame","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
