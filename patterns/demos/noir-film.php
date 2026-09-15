<?php
/**
 * Title: Demo — Noir (Film) — Film
 * Slug: godevs-portfolio/demo-noir-film
 * Description: NOIR single film — AFTERLIGHT, immersive cinematic case study. Recommended style variation: Noir.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, noir, film, case study, cinematic
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-noir","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-noir alignfull">

	<!-- Header -->
	<!-- wp:template-part {"slug":"header-noir","theme":"godevs-portfolio","tagName":"header"} /-->

	<!-- ═══ 01 — FILM HERO (typography only) ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Eyebrow -->
			<!-- wp:paragraph {"className":"is-style-noir-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
			<p class="is-style-noir-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">Film — 2026</p>
			<!-- /wp:paragraph -->

			<!-- H1 AFTERLIGHT -->
			<!-- wp:heading {"level":1,"className":"noir-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"700","letterSpacing":"-0.04em","lineHeight":"0.9","fontSize":"clamp(3rem, 9vw, 9rem)","textTransform":"uppercase"},"color":{"text":"var:preset|color|foreground"}}} -->
			<h1 class="wp-block-heading noir-display has-text-color" style="color:var(--wp--preset--color--foreground);font-family:var(--wp--preset--font-family--display);font-weight:700;letter-spacing:-0.04em;line-height:0.9;font-size:clamp(3rem, 9vw, 9rem);text-transform:uppercase">Afterlight</h1>
			<!-- /wp:heading -->

			<!-- Metadata row -->
			<!-- wp:paragraph {"className":"is-style-noir-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.2em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="is-style-noir-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.2em;text-transform:uppercase;font-weight:500">Commercial · 2026 · Director · 03:42</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 02 — FULL-BLEED HERO VISUAL ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Showreel poster -->
			<!-- wp:html -->
			<figure class="noir-showreel" style="aspect-ratio: 21/9;">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/noir/noir-featured.png' ); ?>" alt="AFTERLIGHT — cinematic featured film still, close portrait in dramatic warm side light against deep black" loading="eager">
				<div class="noir-showreel-overlay">
					<a class="noir-play-btn" href="#" aria-label="Play Afterlight">▶</a>
					<p class="is-style-noir-label" style="color: var(--noir-soft); margin: 0;">View Film → &nbsp;·&nbsp; 03:42</p>
				</div>
			</figure>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 03 — SYNOPSIS + CREDITS ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- wp:html -->
			<div class="noir-2col is-wide-narrow">
				<div>
					<p class="is-style-noir-label" style="color: var(--noir-muted); margin: 0 0 1.5rem;">— Synopsis</p>
					<p style="font-family: var(--wp--preset--font-family--display); font-size: clamp(1.5rem, 2.6vw, 2.25rem); line-height: 1.25; letter-spacing: -0.02em; font-weight: 500; color: var(--noir-soft); margin: 0 0 2rem; max-width: 32ch;">A short visual story about memory, light and the quiet rooms that hold them — a single figure moves through spaces of warm and vanishing light, carrying something we never quite see.</p>
					<p style="font-size: var(--wp--preset--font-size--medium); line-height: 1.7; color: var(--noir-muted); margin: 0; max-width: 52ch;">Afterlight was developed around a single performance and a controlled lighting setup that allowed the morning light to enter the frame and withdraw across the duration of each take. The film was shot in sequence, in long unbroken takes, with no cuts inside the rooms themselves — the editing rhythm comes from the light itself, not the cut.</p>
				</div>
				<div>
					<p class="is-style-noir-label" style="color: var(--noir-muted); margin: 0 0 1.5rem;">— Credits</p>
					<div class="noir-credits">
						<div class="noir-credit-row"><span class="noir-credit-key">Director</span><span class="noir-credit-val">—</span></div>
						<div class="noir-credit-row"><span class="noir-credit-key">Client</span><span class="noir-credit-val">Aster Studio</span></div>
						<div class="noir-credit-row"><span class="noir-credit-key">Production</span><span class="noir-credit-val">Forma Films</span></div>
						<div class="noir-credit-row"><span class="noir-credit-key">Year</span><span class="noir-credit-val">2026</span></div>
						<div class="noir-credit-row"><span class="noir-credit-key">Location</span><span class="noir-credit-val">Lisbon, PT</span></div>
						<div class="noir-credit-row"><span class="noir-credit-key">Duration</span><span class="noir-credit-val">03:42</span></div>
						<div class="noir-credit-row"><span class="noir-credit-key">Cinematographer</span><span class="noir-credit-val">—</span></div>
						<div class="noir-credit-row"><span class="noir-credit-key">Editor</span><span class="noir-credit-val">—</span></div>
						<div class="noir-credit-row"><span class="noir-credit-key">Colorist</span><span class="noir-credit-val">—</span></div>
						<div class="noir-credit-row"><span class="noir-credit-key">Sound</span><span class="noir-credit-val">—</span></div>
					</div>
				</div>
			</div>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 04 — CREATIVE DIRECTION ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Section header -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
				<!-- wp:paragraph {"className":"is-style-noir-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-noir-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">— Creative Direction</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"className":"noir-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 6vw, 5.5rem)","lineHeight":"0.98","letterSpacing":"-0.035em","fontWeight":"700"}}} -->
				<h2 class="wp-block-heading noir-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 6vw, 5.5rem);line-height:0.98;letter-spacing:-0.035em;font-weight:700">Creative direction</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- 2-col text -->
			<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
			<div class="wp-block-columns">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.65"},"color":{"text":"var:preset|color|foreground"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--foreground);font-size:var(--wp--preset--font-size--medium);line-height:1.65">The brief was to make a film about absence rather than presence — to shoot what is leaving the frame, not what is arriving in it. Afterlight became a study of how light carries memory: the same room becomes a different room as the light changes, and the figure inside it becomes someone different.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.65"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.65">We built the visual language around a single lens, a single room and a single moving light source. The colour grade leans warm in the highlights and slightly cooled in the low midtones, building a quiet tension between comfort and distance. Every composition is built so the eye finds the figure last.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- Pullquote -->
			<!-- wp:heading {"level":2,"className":"noir-pullquote","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.75rem, 3.5vw, 2.75rem)","lineHeight":"1.2","letterSpacing":"-0.02em","fontWeight":"500"},"spacing":{"margin":{"top":"var:preset|spacing|70"}}}} -->
			<h2 class="wp-block-heading noir-pullquote" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 3.5vw, 2.75rem);line-height:1.2;letter-spacing:-0.02em;font-weight:500;margin-top:var(--wp--preset--spacing--70);max-width:30ch">Light is the only thing in this film that <span class="noir-italic">moves.</span></h2>
			<!-- /wp:heading -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 05 — PRODUCTION ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Section header -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
				<!-- wp:paragraph {"className":"is-style-noir-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-noir-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">— Production</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"className":"noir-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 6vw, 5.5rem)","lineHeight":"0.98","letterSpacing":"-0.035em","fontWeight":"700"}}} -->
				<h2 class="wp-block-heading noir-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 6vw, 5.5rem);line-height:0.98;letter-spacing:-0.035em;font-weight:700">Production</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- 2-col text -->
			<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
			<div class="wp-block-columns">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.65"},"color":{"text":"var:preset|color|foreground"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--foreground);font-size:var(--wp--preset--font-size--medium);line-height:1.65">The film was shot over two consecutive mornings in a single room facing east, with one camera, one lens and one moving practical light. Each take ran the full duration of the morning light — roughly eleven minutes — and the final film is built from three of those takes, edited end to end without internal cuts.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.65"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.65">Sound was recorded separately as a single ambient pass, layered with a low drone built from the room tone. There is no dialogue, no score in the traditional sense — the sound design follows the same rule as the image: only what is already leaving the room.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 06 — IMAGE GALLERY ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Section header -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
				<!-- wp:paragraph {"className":"is-style-noir-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
				<p class="is-style-noir-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">— Frames</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"className":"noir-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.25rem, 5vw, 4rem)","lineHeight":"1.0","letterSpacing":"-0.03em","fontWeight":"700"}}} -->
				<h2 class="wp-block-heading noir-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.25rem, 5vw, 4rem);line-height:1.0;letter-spacing:-0.03em;font-weight:700">Selected frames.</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- Full-bleed image with caption -->
			<!-- wp:html -->
			<figure class="noir-frame" style="aspect-ratio: 21/9;">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/noir/noir-detail-1.png' ); ?>" alt="AFTERLIGHT — full cinematic frame, the room as morning light enters and begins to withdraw" loading="lazy">
			</figure>
			<figcaption class="noir-caption">Frame 01 · Room with entering light · 06:14 take</figcaption>
			<!-- /wp:html -->

			<!-- Image pair (2-col) -->
			<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--50)">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:html -->
					<figure class="noir-frame" style="aspect-ratio: 4/5;">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/noir/noir-detail-2.png' ); ?>" alt="AFTERLIGHT — detail frame, hands in dramatic warm light" loading="lazy">
					</figure>
					<figcaption class="noir-caption">Frame 02 · Detail · The hands</figcaption>
					<!-- /wp:html -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:html -->
					<figure class="noir-frame" style="aspect-ratio: 4/5;">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/noir/noir-detail-3.png' ); ?>" alt="AFTERLIGHT — detail frame, profile in low-key side light" loading="lazy">
					</figure>
					<figcaption class="noir-caption">Frame 03 · Detail · The profile</figcaption>
					<!-- /wp:html -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 07 — NEXT FILM ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Eyebrow -->
			<!-- wp:paragraph {"className":"is-style-noir-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="is-style-noir-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">— Next Film · 02</p>
			<!-- /wp:paragraph -->

			<!-- Large next-film link -->
			<!-- wp:heading {"level":2,"className":"noir-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.75rem, 8vw, 7rem)","lineHeight":"0.96","letterSpacing":"-0.035em","fontWeight":"700","textTransform":"uppercase"}}} -->
			<h2 class="wp-block-heading noir-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.75rem, 8vw, 7rem);line-height:0.96;letter-spacing:-0.035em;font-weight:700;text-transform:uppercase"><a href="#" style="color: var(--noir-soft); text-decoration: none;">Next — The Last Summer <span class="noir-accent-text">→</span></a></h2>
			<!-- /wp:heading -->

			<!-- Meta -->
			<!-- wp:paragraph {"className":"is-style-noir-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.2em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="is-style-noir-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.2em;text-transform:uppercase;font-weight:500">Short Film · 2025 · 09:18</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- Footer -->
	<!-- wp:template-part {"slug":"footer-noir","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
