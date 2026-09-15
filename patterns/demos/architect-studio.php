<?php
/**
 * Title: Demo — Architect (Architecture) — Studio
 * Slug: godevs-portfolio/demo-architect-studio
 * Description: ARCHITECT studio — philosophy, principles, team, facts. Recommended style variation: Architect.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, architect, studio, about, philosophy
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

	<!-- ═══ 01 — STUDIO HERO (typography) ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"className":"is-style-arch-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.2em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
			<p class="is-style-arch-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.2em;text-transform:uppercase;font-weight:500">— Studio</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":1,"className":"arch-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"500","letterSpacing":"-0.03em","lineHeight":"0.98","fontSize":"clamp(3rem, 9vw, 8rem)"}},"layout":{"selfStretch":"fit","flexSize":"18ch"}} -->
			<h1 class="wp-block-heading arch-display" style="font-family:var(--wp--preset--font-family--display);font-weight:500;letter-spacing:-0.03em;line-height:0.98;font-size:clamp(3rem, 9vw, 8rem);max-width:18ch">Architecture is the relationship between people, space and <span class="arch-italic">light.</span></h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500;margin-top:var(--wp--preset--spacing--50)">Est. 2008 · Dhaka · Lisbon · 18 Years</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 02 — PHILOSOPHY (arch-2col, image left + text right) ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:html -->
			<div class="arch-2col" style="grid-template-columns: 1fr;">
				<div>
					<div class="arch-project-media" style="aspect-ratio: 4/5;">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/architect/architect-studio.png' ); ?>" alt="Architecture studio interior — long table with models and drawings, concrete walls, soft natural light" loading="lazy">
					</div>
					<p class="arch-caption">Fig. 01 — The Studio, Dhaka</p>
				</div>
				<div>
					<p class="is-style-arch-label" style="color: var(--wp--preset--color--muted); font-family: var(--wp--preset--font-family--body); font-size: 0.6875rem; letter-spacing: 0.2em; text-transform: uppercase; font-weight: 500; margin: 0 0 1.5rem;">— Philosophy</p>
					<h2 class="arch-display" style="font-family: var(--wp--preset--font-family--display); font-weight: 500; font-size: clamp(2rem, 4.5vw, 3.5rem); line-height: 1.04; letter-spacing: -0.025em; margin: 0 0 2rem; max-width: 20ch;">Buildings should outlast their <span class="arch-italic">trends.</span></h2>
					<p style="font-size: var(--wp--preset--font-size--medium); line-height: 1.7; color: var(--wp--preset--color--muted); margin: 0 0 1.5rem; max-width: 50ch;">We design residential, commercial and cultural environments with an emphasis on material honesty, natural light and long-term relevance. Every project begins with its surroundings — climate, culture, and the quiet patterns of daily use.</p>
					<p style="font-size: var(--wp--preset--font-size--medium); line-height: 1.7; color: var(--wp--preset--color--muted); margin: 0 0 1.5rem; max-width: 50ch;">We work in concrete, wood, stone, glass and steel — materials that age with grace, develop patina, and reveal themselves differently through the hours of the day. A wall is not a finish; it is a record of the hand that made it and the weather that has tested it.</p>
					<p style="font-size: var(--wp--preset--font-size--medium); line-height: 1.7; color: var(--wp--preset--color--muted); margin: 0; max-width: 50ch;">Our practice is small, deliberate, and international. We take on a limited number of projects each year so that design intent can be carried from concept through construction without dilution.</p>
				</div>
			</div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 03 — PRINCIPLES (numbered bordered list) ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
				<!-- wp:paragraph {"className":"is-style-arch-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.2em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-arch-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.2em;text-transform:uppercase;font-weight:500">— Principles</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"className":"arch-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 4.5vw, 3.5rem)","lineHeight":"1.04","letterSpacing":"-0.025em","fontWeight":"500"}}} -->
				<h2 class="wp-block-heading arch-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 4.5vw, 3.5rem);line-height:1.04;letter-spacing:-0.025em;font-weight:500">Four ideas we return to.</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- Principles list (static rows, no hover — arch-service-row grid reused without the link class) -->
			<!-- wp:html -->
			<div style="border-top: 1px solid var(--arch-line);">
				<div style="display: grid; grid-template-columns: 3rem 1fr 2fr; gap: 1.5rem; align-items: baseline; padding: 1.5rem 0; border-bottom: 1px solid var(--arch-line);">
					<span class="arch-service-num">01</span>
					<span class="arch-service-title">Context</span>
					<span class="arch-service-desc">Every project begins with its surroundings — climate, culture, and the daily rituals of the people who will inhabit it.</span>
				</div>
				<div style="display: grid; grid-template-columns: 3rem 1fr 2fr; gap: 1.5rem; align-items: baseline; padding: 1.5rem 0; border-bottom: 1px solid var(--arch-line);">
					<span class="arch-service-num">02</span>
					<span class="arch-service-title">Material</span>
					<span class="arch-service-desc">Materials should be experienced, not merely applied. We let concrete, wood, stone and steel age with grace.</span>
				</div>
				<div style="display: grid; grid-template-columns: 3rem 1fr 2fr; gap: 1.5rem; align-items: baseline; padding: 1.5rem 0; border-bottom: 1px solid var(--arch-line);">
					<span class="arch-service-num">03</span>
					<span class="arch-service-title">Light</span>
					<span class="arch-service-desc">Light defines how architecture is perceived. We design with the path of the sun, not against it.</span>
				</div>
				<div style="display: grid; grid-template-columns: 3rem 1fr 2fr; gap: 1.5rem; align-items: baseline; padding: 1.5rem 0; border-bottom: 1px solid var(--arch-line);">
					<span class="arch-service-num">04</span>
					<span class="arch-service-title">Longevity</span>
					<span class="arch-service-desc">Good architecture should remain relevant beyond trends — built once, well, and for a long time.</span>
				</div>
			</div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 04 — TEAM ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
				<!-- wp:paragraph {"className":"is-style-arch-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.2em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-arch-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.2em;text-transform:uppercase;font-weight:500">— Team</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"className":"arch-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 4.5vw, 3.5rem)","lineHeight":"1.04","letterSpacing":"-0.025em","fontWeight":"500"}}} -->
				<h2 class="wp-block-heading arch-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 4.5vw, 3.5rem);line-height:1.04;letter-spacing:-0.025em;font-weight:500">Four architects, one practice.</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- Team grid -->
			<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
			<div class="wp-block-columns">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:html -->
					<figure class="arch-team-member">
						<div class="arch-team-portrait">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/architect/architect-team-1.png' ); ?>" alt="Editorial portrait of Nayan Roy, Principal Architect" loading="lazy">
						</div>
						<figcaption>
							<p class="arch-team-name">Nayan Roy</p>
							<p class="arch-team-role">Principal Architect</p>
						</figcaption>
					</figure>
					<!-- /wp:html -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:html -->
					<figure class="arch-team-member">
						<div class="arch-team-portrait">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/architect/architect-team-2.png' ); ?>" alt="Editorial portrait of Maya Rahman, Design Director" loading="lazy">
						</div>
						<figcaption>
							<p class="arch-team-name">Maya Rahman</p>
							<p class="arch-team-role">Design Director</p>
						</figcaption>
					</figure>
					<!-- /wp:html -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:html -->
					<figure class="arch-team-member">
						<div class="arch-team-portrait">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/architect/architect-team-3.png' ); ?>" alt="Editorial portrait of Arif Hasan, Project Architect" loading="lazy">
						</div>
						<figcaption>
							<p class="arch-team-name">Arif Hasan</p>
							<p class="arch-team-role">Project Architect</p>
						</figcaption>
					</figure>
					<!-- /wp:html -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:html -->
					<figure class="arch-team-member">
						<div class="arch-team-portrait">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/architect/architect-team-4.png' ); ?>" alt="Editorial portrait of Sara Khan, Interior Architect" loading="lazy">
						</div>
						<figcaption>
							<p class="arch-team-name">Sara Khan</p>
							<p class="arch-team-role">Interior Architect</p>
						</figcaption>
					</figure>
					<!-- /wp:html -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 05 — STUDIO FACTS ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"className":"is-style-arch-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.2em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="is-style-arch-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.2em;text-transform:uppercase;font-weight:500">— Studio Facts (demo data)</p>
			<!-- /wp:paragraph -->
			<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:paragraph {"className":"arch-stat-num","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"500","fontSize":"clamp(2.75rem, 6vw, 5rem)","lineHeight":"0.95","letterSpacing":"-0.03em"}}} -->
					<p class="arch-stat-num" style="font-family:var(--wp--preset--font-family--display);font-weight:500;font-size:clamp(2.75rem, 6vw, 5rem);line-height:0.95;letter-spacing:-0.03em">24</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"arch-stat-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="arch-stat-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">Completed</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:paragraph {"className":"arch-stat-num","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"500","fontSize":"clamp(2.75rem, 6vw, 5rem)","lineHeight":"0.95","letterSpacing":"-0.03em"}}} -->
					<p class="arch-stat-num" style="font-family:var(--wp--preset--font-family--display);font-weight:500;font-size:clamp(2.75rem, 6vw, 5rem);line-height:0.95;letter-spacing:-0.03em">11</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"arch-stat-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="arch-stat-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">Cities</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:paragraph {"className":"arch-stat-num","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"500","fontSize":"clamp(2.75rem, 6vw, 5rem)","lineHeight":"0.95","letterSpacing":"-0.03em"}}} -->
					<p class="arch-stat-num" style="font-family:var(--wp--preset--font-family--display);font-weight:500;font-size:clamp(2.75rem, 6vw, 5rem);line-height:0.95;letter-spacing:-0.03em">18</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"arch-stat-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="arch-stat-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">Years</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:paragraph {"className":"arch-stat-num","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"500","fontSize":"clamp(2.75rem, 6vw, 5rem)","lineHeight":"0.95","letterSpacing":"-0.03em"},"color":{"text":"var:preset|color|accent"}}} -->
					<p class="arch-stat-num has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--display);font-weight:500;font-size:clamp(2.75rem, 6vw, 5rem);line-height:0.95;letter-spacing:-0.03em">07</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"arch-stat-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="arch-stat-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">Countries</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 06 — CTA (brief closing line) ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"}}} -->
			<p style="font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500"><a href="/contact">Start a project →</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- Footer -->
	<!-- wp:template-part {"slug":"footer-architect","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
