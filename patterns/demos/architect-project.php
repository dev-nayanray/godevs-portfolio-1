<?php
/**
 * Title: Demo — Architect (Architecture) — Project
 * Slug: godevs-portfolio/demo-architect-project
 * Description: ARCHITECT single project — HOUSE N, immersive architectural editorial. Recommended style variation: Architect.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, architect, project, case study, architecture
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

	<!-- ═══ 01 — PROJECT HERO (typography, no image) ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"className":"is-style-arch-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.2em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
			<p class="is-style-arch-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.2em;text-transform:uppercase;font-weight:500">Project — 2026</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":1,"className":"arch-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"500","letterSpacing":"-0.035em","lineHeight":"0.92","fontSize":"clamp(3rem, 10vw, 8rem)"}}} -->
			<h1 class="wp-block-heading arch-display" style="font-family:var(--wp--preset--font-family--display);font-weight:500;letter-spacing:-0.035em;line-height:0.92;font-size:clamp(3rem, 10vw, 8rem)">House <span class="arch-italic">N</span></h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500;margin-top:var(--wp--preset--spacing--40)">Dhaka / Bangladesh / Residential / 2026</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 02 — FULL-WIDTH HERO IMAGE ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:image {"align":"wide","aspectRatio":"21/9","scale":"cover"} -->
			<figure class="wp-block-image alignwide"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/architect/architect-featured.png' ); ?>" alt="House N — double-height concrete living space with courtyard light and material warmth" style="aspect-ratio:21/9;object-fit:cover" loading="eager"/></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"className":"arch-caption","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="arch-caption has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.12em;text-transform:uppercase;font-weight:500">Fig. 01 — Double-height living space, courtyard elevation</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 03 — PROJECT STATEMENT + PROJECT FACTS (arch-2col is-wide-narrow) ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:html -->
			<div class="arch-2col is-wide-narrow">
				<div>
					<p class="is-style-arch-label" style="font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.2em;text-transform:uppercase;font-weight:500;color:var(--arch-muted);margin-bottom:1.25rem;">— Statement</p>
					<p style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.5rem, 3vw, 2.25rem);line-height:1.3;letter-spacing:-0.02em;font-weight:500;color:var(--arch-ink);max-width:34ch;">A contemporary residence organized around natural light, private courtyards and quiet transitions between interior and <span class="arch-italic">exterior</span>.</p>
					<p style="font-size:var(--wp--preset--font-size--medium);line-height:1.7;color:var(--arch-muted);margin-top:2rem;max-width:54ch;">House N is set on a narrow urban plot in Dhaka, where the climate asks for shade, cross-ventilation and a measured relationship between enclosure and open sky. The plan resolves these conditions through a series of layered courtyards, double-height volumes, and a single long skylight that draws the day deep into the house.</p>
				</div>
				<div>
					<p class="is-style-arch-label" style="font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.2em;text-transform:uppercase;font-weight:500;color:var(--arch-muted);margin-bottom:1.25rem;">— Project Facts</p>
					<dl class="arch-facts">
						<div class="arch-fact-row">
							<dt class="arch-fact-key">Area</dt>
							<dd class="arch-fact-val">4,800 sq ft</dd>
						</div>
						<div class="arch-fact-row">
							<dt class="arch-fact-key">Status</dt>
							<dd class="arch-fact-val">Completed</dd>
						</div>
						<div class="arch-fact-row">
							<dt class="arch-fact-key">Year</dt>
							<dd class="arch-fact-val">2026</dd>
						</div>
						<div class="arch-fact-row">
							<dt class="arch-fact-key">Role</dt>
							<dd class="arch-fact-val">Architecture / Interior</dd>
						</div>
						<div class="arch-fact-row">
							<dt class="arch-fact-key">Client</dt>
							<dd class="arch-fact-val">Private</dd>
						</div>
						<div class="arch-fact-row">
							<dt class="arch-fact-key">Site area</dt>
							<dd class="arch-fact-val">3,200 sq ft</dd>
						</div>
						<div class="arch-fact-row">
							<dt class="arch-fact-key">Budget</dt>
							<dd class="arch-fact-val">Withheld</dd>
						</div>
						<div class="arch-fact-row">
							<dt class="arch-fact-key">Team</dt>
							<dd class="arch-fact-val">N. Roy, M. Rahman, A. Hasan</dd>
						</div>
					</dl>
				</div>
			</div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 04 — DESIGN CONCEPT (eyebrow + H2 + text + pullquote) ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
				<!-- wp:paragraph {"className":"is-style-arch-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.2em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
				<p class="is-style-arch-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.2em;text-transform:uppercase;font-weight:500">— Concept</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"className":"arch-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.25rem, 5vw, 4rem)","lineHeight":"1.0","letterSpacing":"-0.03em","fontWeight":"500"}}} -->
				<h2 class="wp-block-heading arch-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.25rem, 5vw, 4rem);line-height:1.0;letter-spacing:-0.03em;font-weight:500">A house drawn by <span class="arch-italic">light.</span></h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->
			<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
			<div class="wp-block-columns">
				<!-- wp:column {"width":"55%"} -->
				<div class="wp-block-column" style="flex-basis:55%">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7"},"color":{"text":"var:preset|color|foreground"},"layout":{"selfStretch":"fit","flexSize":"48ch"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--foreground);font-size:var(--wp--preset--font-size--medium);line-height:1.7;max-width:48ch">The concept begins with the climate. In Dhaka, sunlight is abundant and harsh for much of the year, and the brief asked for a residence that could remain cool, calm and naturally lit without resorting to sealed glass. The answer was to push the house inward — three courtyards cut through the volume, each tuned to a different time of day, and a single north-facing skylight carrying diffuse light into the deepest rooms.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|40"}},"layout":{"selfStretch":"fit","flexSize":"48ch"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.7;margin-top:var(--wp--preset--spacing--40);max-width:48ch">The plan reads as a sequence: a shaded entry court, a double-height living volume, a private garden court, and a quiet upper level. Concrete is the structural and material constant — left raw where it can be touched, refined where it meets the hand.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":"45%"} -->
				<div class="wp-block-column" style="flex-basis:45%">
					<!-- wp:pullquote {"style":{"typography":{"fontFamily":"var:preset|font-family|serif","fontSize":"clamp(1.5rem, 3vw, 2.25rem)","lineHeight":"1.3","fontStyle":"italic","fontWeight":"400"},"color":{"text":"var:preset|color|foreground"}}} -->
					<figure class="wp-block-pullquote has-text-color" style="color:var(--wp--preset--color--foreground);font-family:var(--wp--preset--font-family--serif);font-size:clamp(1.5rem, 3vw, 2.25rem);line-height:1.3;font-style:italic;font-weight:400">
						<blockquote>
							<p>"We did not draw rooms. We drew the path of the sun, and let the rooms arrange themselves around it."</p>
							<cite>Nayan Roy — Principal Architect</cite>
						</blockquote>
					</figure>
					<!-- /wp:pullquote -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 05 — CONTEXT & APPROACH ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
				<!-- wp:paragraph {"className":"is-style-arch-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.2em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-arch-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.2em;text-transform:uppercase;font-weight:500">— Context &amp; Approach</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"className":"arch-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 4.5vw, 3.5rem)","lineHeight":"1.04","letterSpacing":"-0.025em","fontWeight":"500"}}} -->
				<h2 class="wp-block-heading arch-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 4.5vw, 3.5rem);line-height:1.04;letter-spacing:-0.025em;font-weight:500">Context &amp; approach</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->
			<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
			<div class="wp-block-columns">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:paragraph {"className":"is-style-arch-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
					<p class="is-style-arch-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">Site</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|20"}},"layout":{"selfStretch":"fit","flexSize":"40ch"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.7;margin-top:var(--wp--preset--spacing--20);max-width:40ch">The 3,200 sq ft plot sits in a dense residential district where neighbors share walls and the street is narrow. Privacy, ventilation and daylight — usually in tension — became the brief.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:paragraph {"className":"is-style-arch-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
					<p class="is-style-arch-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">Approach</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|20"}},"layout":{"selfStretch":"fit","flexSize":"40ch"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.7;margin-top:var(--wp--preset--spacing--20);max-width:40ch">Rather than enclosing the program against the street, the plan turns inward. Three courtyards thread through the volume, organizing circulation, light and air as a single spatial system.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 06 — LARGE IMAGE GALLERY ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Large image — architect-project-1.png 21/9 -->
			<!-- wp:image {"align":"wide","aspectRatio":"21/9","scale":"cover"} -->
			<figure class="wp-block-image alignwide"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/architect/architect-project-1.png' ); ?>" alt="House N — exterior architectural photograph, minimalist concrete and glass residence at golden hour" style="aspect-ratio:21/9;object-fit:cover" loading="lazy"/></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"className":"arch-caption","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="arch-caption has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.12em;text-transform:uppercase;font-weight:500">Fig. 02 — Street elevation at golden hour</p>
			<!-- /wp:paragraph -->

			<!-- 2-image pair (detail-1 + detail-2) -->
			<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"var:preset|spacing|60"}}}} -->
			<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--60)">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:image {"aspectRatio":"4/5","scale":"cover"} -->
					<figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/architect/architect-detail-1.png' ); ?>" alt="House N — interior detail, concrete stair and skylight" style="aspect-ratio:4/5;object-fit:cover" loading="lazy"/></figure>
					<!-- /wp:image -->
					<!-- wp:paragraph {"className":"arch-caption","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="arch-caption has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.12em;text-transform:uppercase;font-weight:500">Fig. 03 — Concrete stair under the north skylight</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:image {"aspectRatio":"4/5","scale":"cover"} -->
					<figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/architect/architect-detail-2.png' ); ?>" alt="House N — interior detail, central courtyard with raking light" style="aspect-ratio:4/5;object-fit:cover" loading="lazy"/></figure>
					<!-- /wp:image -->
					<!-- wp:paragraph {"className":"arch-caption","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="arch-caption has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.12em;text-transform:uppercase;font-weight:500">Fig. 04 — Central court, mid-afternoon</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 07 — MATERIAL PALETTE ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
				<!-- wp:paragraph {"className":"is-style-arch-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.2em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
				<p class="is-style-arch-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.2em;text-transform:uppercase;font-weight:500">— Material Palette</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 4.5vw, 3.5rem)","lineHeight":"1.04","letterSpacing":"-0.025em","fontWeight":"500"}}} -->
				<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 4.5vw, 3.5rem);line-height:1.04;letter-spacing:-0.025em;font-weight:500">Materials should be <span class="arch-italic">experienced.</span></h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- Material grid (4 close-ups) -->
			<!-- wp:html -->
			<div class="arch-materials">
				<figure class="arch-material">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/architect/architect-material-1.png' ); ?>" alt="House N — material close-up, raw cast concrete surface with formwork shadow" loading="lazy">
					<figcaption class="arch-material-label">Concrete</figcaption>
				</figure>
				<figure class="arch-material">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/architect/architect-material-2.png' ); ?>" alt="House N — material close-up, warm wood joinery and door detail" loading="lazy">
					<figcaption class="arch-material-label">Wood</figcaption>
				</figure>
				<figure class="arch-material">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/architect/architect-material-3.png' ); ?>" alt="House N — material close-up, travertine floor with natural veining" loading="lazy">
					<figcaption class="arch-material-label">Stone</figcaption>
				</figure>
				<figure class="arch-material">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/architect/architect-material-4.png' ); ?>" alt="House N — material close-up, frameless glazing capturing courtyard reflection" loading="lazy">
					<figcaption class="arch-material-label">Glass</figcaption>
				</figure>
			</div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 08 — DETAIL PHOTOGRAPHY ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:image {"align":"wide","aspectRatio":"16/9","scale":"cover"} -->
			<figure class="wp-block-image alignwide"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/architect/architect-detail-3.png' ); ?>" alt="House N — interior detail, evening view of double-height space with warm interior light" style="aspect-ratio:16/9;object-fit:cover" loading="lazy"/></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"className":"arch-caption","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="arch-caption has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.12em;text-transform:uppercase;font-weight:500">Fig. 05 — Living volume, evening</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 09 — NEXT PROJECT ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"className":"is-style-arch-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.2em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
			<p class="is-style-arch-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.2em;text-transform:uppercase;font-weight:500">— Next Project</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"className":"arch-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 8vw, 7rem)","lineHeight":"0.98","letterSpacing":"-0.03em","fontWeight":"500"}}} -->
			<h2 class="wp-block-heading arch-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 8vw, 7rem);line-height:0.98;letter-spacing:-0.03em;font-weight:500"><a href="#" style="color:inherit;">Next — Courtyard House <span class="arch-arrow" aria-hidden="true">→</span></a></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500;margin-top:var(--wp--preset--spacing--30)">Lisbon / Portugal / Residential / 2025</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- Footer -->
	<!-- wp:template-part {"slug":"footer-architect","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
