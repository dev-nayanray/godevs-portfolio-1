<?php
/**
 * Title: Demo — Atelier (Designer) — About
 * Slug: godevs-portfolio/demo-atelier-about
 * Description: ATELIER about — biography, philosophy, experience, capabilities. Recommended style variation: Atelier.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, atelier, about, biography, designer
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

	<!-- ═══ 01 — HERO: editorial asymmetric ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Top metadata row -->
			<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
				<!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">— About</p>
				<!-- /wp:paragraph -->
				<!-- wp:html -->
				<span class="atelier-status"><span class="atelier-dot" aria-hidden="true"></span>Available for selected projects</span>
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->

			<!-- Asymmetric H1 row -->
			<!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"blockGap":"var:preset|spacing|60","margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-columns are-vertically-aligned-bottom" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:column {"verticalAlignment":"bottom","width":"74%"} -->
				<div class="wp-block-column" style="flex-basis:74%">
					<!-- wp:heading {"level":1,"className":"atelier-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"400","letterSpacing":"-0.02em","lineHeight":"1.0","fontSize":"clamp(2.5rem, 7.5vw, 7rem)"}}} -->
					<h1 class="wp-block-heading atelier-display" style="font-family:var(--wp--preset--font-family--display);font-weight:400;letter-spacing:-0.02em;line-height:1.0;font-size:clamp(2.5rem, 7.5vw, 7rem)">A practice built on <span class="atelier-italic">intention.</span></h1>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"verticalAlignment":"bottom","width":"26%"} -->
				<div class="wp-block-column" style="flex-basis:26%">
					<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"1.0625rem","lineHeight":"1.55"},"color":{"text":"var:preset|color|muted"},"layout":{"selfStretch":"fit","flexSize":"30ch"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:1.0625rem;line-height:1.55;max-width:30ch">Twelve years of independent practice — working with founders, institutions and houses who care how things are made.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- Mono metadata row -->
			<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60)">
				<!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">Based — London / Copenhagen / Dhaka</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">Practice — Independent</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">Years — 12</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 02 — BIOGRAPHY: portrait + long-form ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- wp:html -->
			<div class="atelier-2col">
				<div>
					<figure style="margin:0;">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/atelier/atelier-about-portrait.webp' ); ?>" alt="Editorial portrait of the art director in profile against a warm ivory backdrop, soft side light" style="aspect-ratio:4/5;object-fit:cover;width:100%;height:auto;display:block;" loading="lazy">
					</figure>
					<p class="atelier-caption">Studio portrait — Spring 2026</p>
				</div>
				<div>
					<p class="is-style-atelier-label" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500;margin:0 0 var(--wp--preset--spacing--30);">— Biography</p>
					<h2 class="atelier-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 3.4vw, 2.75rem);line-height:1.15;letter-spacing:-0.015em;font-weight:400;margin:0 0 var(--wp--preset--spacing--40);max-width:24ch;">Designing slowly, across identity, digital and art direction.</h2>
					<p style="font-size:var(--wp--preset--font-size--normal);line-height:1.8;color:var(--wp--preset--color--foreground);margin:0 0 var(--wp--preset--spacing--40);max-width:58ch;">I'm an independent creative director and designer working between London, Copenhagen and Dhaka. The practice began in 2014 — a quiet decision, after years inside larger studios, to make work on terms that could hold: direct collaboration, considered output, time enough to refine.</p>
					<p style="font-size:var(--wp--preset--font-size--normal);line-height:1.8;color:var(--wp--preset--color--foreground);margin:0 0 var(--wp--preset--spacing--40);max-width:58ch;">My work moves between brand identity, digital experiences and art direction — for design houses, cultural institutions and founders who care about how things are made. I tend to take on fewer projects, and stay with them longer: building systems that are flexible enough to live in, restrained enough to feel like a single hand.</p>
					<p style="font-size:var(--wp--preset--font-size--normal);line-height:1.8;color:var(--wp--preset--color--foreground);margin:0 0 var(--wp--preset--spacing--40);max-width:58ch;">Before independent practice I led design in studios across Europe and Asia — building identities for fashion houses, museums and design-led brands. That work taught me to begin with the problem and the audience, to cast wide before narrowing, and to keep the studio deliberately small.</p>
					<p style="font-size:var(--wp--preset--font-size--normal);line-height:1.8;color:var(--wp--preset--color--foreground);margin:0;max-width:58ch;">The rest of the time is spent reading, looking and printing — the slow inputs that keep the work from settling into a formula.</p>
				</div>
			</div>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 03 — PHILOSOPHY: large pullquote ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
			<div class="wp-block-columns">
				<!-- wp:column {"width":"20%"} -->
				<div class="wp-block-column" style="flex-basis:20%">
					<!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">— Philosophy</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":"80%"} -->
				<div class="wp-block-column" style="flex-basis:80%">
					<!-- wp:paragraph {"className":"atelier-pullquote","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 4.4vw, 3.5rem)","lineHeight":"1.16","letterSpacing":"-0.015em","fontWeight":"400"},"layout":{"selfStretch":"fit","flexSize":"26ch"}}} -->
					<p class="atelier-pullquote" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 4.4vw, 3.5rem);line-height:1.16;letter-spacing:-0.015em;font-weight:400;max-width:26ch">Good design is what remains after everything unnecessary has been removed.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}},"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.14em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);margin-top:var(--wp--preset--spacing--50);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.14em;text-transform:uppercase">— The studio</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 04 — RECOGNITION: bordered list ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- wp:html -->
			<div class="atelier-2col is-wide-narrow">
				<div>
					<p class="is-style-atelier-label" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500;margin:0 0 var(--wp--preset--spacing--30);">— Recognition (demo content)</p>
					<h2 class="atelier-statement" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 3.4vw, 2.5rem);line-height:1.15;letter-spacing:-0.01em;font-weight:400;margin:0;max-width:22ch;">Selected recognition across identity, editorial and art direction.</h2>
				</div>
				<div>
					<dl style="margin:0;display:grid;grid-template-columns:1fr;gap:0;font-family:var(--wp--preset--font-family--body);font-size:0.875rem;color:var(--atelier-ink);">
						<div style="display:grid;grid-template-columns:5rem 1fr auto;gap:1.25rem;padding:1rem 0;border-top:1px solid var(--atelier-line);align-items:baseline;">
							<dt style="color:var(--atelier-muted);text-transform:uppercase;letter-spacing:0.14em;font-size:0.6875rem;">2026</dt>
							<dd style="margin:0;font-family:var(--wp--preset--font-family--display);font-size:1.0625rem;">D&amp;AD Pencil</dd>
							<span style="color:var(--atelier-muted);font-size:0.75rem;letter-spacing:0.1em;text-transform:uppercase;">Wood</span>
						</div>
						<div style="display:grid;grid-template-columns:5rem 1fr auto;gap:1.25rem;padding:1rem 0;border-top:1px solid var(--atelier-line);align-items:baseline;">
							<dt style="color:var(--atelier-muted);text-transform:uppercase;letter-spacing:0.14em;font-size:0.6875rem;">2025</dt>
							<dd style="margin:0;font-family:var(--wp--preset--font-family--display);font-size:1.0625rem;">Type Directors Club</dd>
							<span style="color:var(--atelier-muted);font-size:0.75rem;letter-spacing:0.1em;text-transform:uppercase;">Certificate</span>
						</div>
						<div style="display:grid;grid-template-columns:5rem 1fr auto;gap:1.25rem;padding:1rem 0;border-top:1px solid var(--atelier-line);align-items:baseline;">
							<dt style="color:var(--atelier-muted);text-transform:uppercase;letter-spacing:0.14em;font-size:0.6875rem;">2025</dt>
							<dd style="margin:0;font-family:var(--wp--preset--font-family--display);font-size:1.0625rem;">ADC Cube</dd>
							<span style="color:var(--atelier-muted);font-size:0.75rem;letter-spacing:0.1em;text-transform:uppercase;">Bronze</span>
						</div>
						<div style="display:grid;grid-template-columns:5rem 1fr auto;gap:1.25rem;padding:1rem 0;border-top:1px solid var(--atelier-line);align-items:baseline;">
							<dt style="color:var(--atelier-muted);text-transform:uppercase;letter-spacing:0.14em;font-size:0.6875rem;">2024</dt>
							<dd style="margin:0;font-family:var(--wp--preset--font-family--display);font-size:1.0625rem;">AIGA Medal</dd>
							<span style="color:var(--atelier-muted);font-size:0.75rem;letter-spacing:0.1em;text-transform:uppercase;">Nominee</span>
						</div>
						<div style="display:grid;grid-template-columns:5rem 1fr auto;gap:1.25rem;padding:1rem 0;border-top:1px solid var(--atelier-line);border-bottom:1px solid var(--atelier-line);align-items:baseline;">
							<dt style="color:var(--atelier-muted);text-transform:uppercase;letter-spacing:0.14em;font-size:0.6875rem;">2024</dt>
							<dd style="margin:0;font-family:var(--wp--preset--font-family--display);font-size:1.0625rem;">Brand New Notable</dd>
							<span style="color:var(--atelier-muted);font-size:0.75rem;letter-spacing:0.1em;text-transform:uppercase;">Identity</span>
						</div>
					</dl>
				</div>
			</div>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 05 — CAPABILITIES: numbered list ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
			<div class="wp-block-columns">
				<!-- wp:column {"width":"30%"} -->
				<div class="wp-block-column" style="flex-basis:30%">
					<!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">— Capabilities</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":"70%"} -->
				<div class="wp-block-column" style="flex-basis:70%">
					<!-- wp:heading {"level":2,"className":"atelier-statement","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 4.5vw, 3.5rem)","lineHeight":"1.05","letterSpacing":"-0.015em","fontWeight":"400"}}} -->
					<h2 class="wp-block-heading atelier-statement" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 4.5vw, 3.5rem);line-height:1.05;letter-spacing:-0.015em;font-weight:400">Disciplines I work across.</h2>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- Capabilities list -->
			<!-- wp:html -->
			<div class="atelier-expertise" role="list" style="margin-top:4rem;">
				<a class="atelier-expertise-row" href="/services" role="listitem">
					<span class="atelier-expertise-num">01</span>
					<span class="atelier-expertise-title">Art Direction</span>
					<span class="atelier-expertise-arrow" aria-hidden="true">→</span>
				</a>
				<a class="atelier-expertise-row" href="/services" role="listitem">
					<span class="atelier-expertise-num">02</span>
					<span class="atelier-expertise-title">Brand Identity</span>
					<span class="atelier-expertise-arrow" aria-hidden="true">→</span>
				</a>
				<a class="atelier-expertise-row" href="/services" role="listitem">
					<span class="atelier-expertise-num">03</span>
					<span class="atelier-expertise-title">Digital Design</span>
					<span class="atelier-expertise-arrow" aria-hidden="true">→</span>
				</a>
				<a class="atelier-expertise-row" href="/services" role="listitem">
					<span class="atelier-expertise-num">04</span>
					<span class="atelier-expertise-title">Editorial Design</span>
					<span class="atelier-expertise-arrow" aria-hidden="true">→</span>
				</a>
				<a class="atelier-expertise-row" href="/services" role="listitem">
					<span class="atelier-expertise-num">05</span>
					<span class="atelier-expertise-title">Campaigns</span>
					<span class="atelier-expertise-arrow" aria-hidden="true">→</span>
				</a>
				<a class="atelier-expertise-row" href="/services" role="listitem">
					<span class="atelier-expertise-num">06</span>
					<span class="atelier-expertise-title">Creative Strategy</span>
					<span class="atelier-expertise-arrow" aria-hidden="true">→</span>
				</a>
			</div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 06 — STUDIO IMAGE ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:image {"align":"wide","aspectRatio":"21/9","scale":"cover"} -->
			<figure class="wp-block-image alignwide"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/atelier/atelier-studio.webp' ); ?>" alt="The ATELIER studio interior — warm ivory walls, soft daylight, a long table covered in editorial specimens" style="aspect-ratio:21/9;object-fit:cover" loading="lazy"/></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"className":"atelier-caption","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"0.8125rem"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="atelier-caption has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:0.8125rem">Fig. 01 — The studio, somewhere between London and Copenhagen.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 07 — CLOSING CTA: brief ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
			<div class="wp-block-columns are-vertically-aligned-center">
				<!-- wp:column {"verticalAlignment":"center","width":"65%"} -->
				<div class="wp-block-column" style="flex-basis:65%">
					<!-- wp:paragraph {"className":"atelier-statement","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.5rem, 3vw, 2.25rem)","lineHeight":"1.2","letterSpacing":"-0.01em","fontWeight":"400"},"layout":{"selfStretch":"fit","flexSize":"28ch"}}} -->
					<p class="atelier-statement" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.5rem, 3vw, 2.25rem);line-height:1.2;letter-spacing:-0.01em;font-weight:400;max-width:28ch">Have something worth making? <span style="font-style:italic">Let's talk.</span></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"verticalAlignment":"center","width":"35%"} -->
				<div class="wp-block-column" style="flex-basis:35%">
					<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}},"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"1.25rem"}}} -->
					<p style="margin-top:var(--wp--preset--spacing--40);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:1.25rem"><a href="/contact">Start a conversation →</a></p>
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
	<!-- wp:template-part {"slug":"footer-atelier","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
