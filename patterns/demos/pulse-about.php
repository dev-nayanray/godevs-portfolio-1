<?php
/**
 * Title: Demo - Pulse (Designer) - About
 * Slug: godevs-portfolio/demo-pulse-about
 * Description: PULSE about - biography, experience, skills, capabilities. Recommended style variation: Pulse.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, pulse, about, biography, ux
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-pulse","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-pulse alignfull">

	<!-- Header -->
	<!-- wp:template-part {"slug":"header-pulse","theme":"godevs-portfolio","tagName":"header"} /-->

	<!-- === 01 - HERO === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Metadata row -->
			<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"is-style-pulse-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-pulse-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;font-weight:500">- About</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"is-style-pulse-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-pulse-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;font-weight:500">Based - Berlin · Remote · 12 years · Focus - Product / UX / Systems</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Display heading -->
			<!-- wp:heading {"level":1,"className":"pulse-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600","letterSpacing":"-0.04em","lineHeight":"0.98","fontSize":"clamp(2.5rem, 7vw, 6.5rem)"}}} -->
			<h1 class="wp-block-heading pulse-display" style="font-family:var(--wp--preset--font-family--display);font-weight:600;letter-spacing:-0.04em;line-height:0.98;font-size:clamp(2.5rem, 7vw, 6.5rem)">Designing for <span class="pulse-accent-text">outcomes.</span></h1>
			<!-- /wp:heading -->

			<!-- Supporting copy -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.6"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.6;margin-top:var(--wp--preset--spacing--40);max-width:60ch">A product designer with twelve years of practice across fintech, health and SaaS. I work end-to-end - research, strategy, interaction, UI and design systems - and I'm accountable for the metrics that follow a launch, not just the screens that came before it.</p>
			<!-- /wp:paragraph -->

			<!-- Availability row -->
			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}},"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);margin-top:var(--wp--preset--spacing--50);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase"><span class="pulse-dot" aria-hidden="true"></span>Available for Q3 2026</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 02 - BIOGRAPHY === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":"var:preset|spacing|70"}}} -->
			<div class="wp-block-columns are-vertically-aligned-top">

				<!-- Portrait column -->
				<!-- wp:column {"verticalAlignment":"top","width":"40%"} -->
				<div class="wp-block-column" style="flex-basis:40%">
					<!-- wp:image {"aspectRatio":"4/5","scale":"cover","style":{"border":{"radius":"8px"}}} -->
					<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pulse/pulse-portrait.webp' ); ?>" alt="Editorial portrait of the product designer in a minimal studio with soft cool light" style="border-radius:8px;aspect-ratio:4/5;object-fit:cover" loading="lazy"/></figure>
					<!-- /wp:image -->
					<!-- wp:paragraph {"className":"pulse-caption","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}},"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.02em"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="pulse-caption has-text-color" style="color:var(--wp--preset--color--muted);margin-top:var(--wp--preset--spacing--20);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.02em">Fig. 01 - Studio portrait, Berlin · 2026</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- Bio column -->
				<!-- wp:column {"verticalAlignment":"top","width":"60%"} -->
				<div class="wp-block-column" style="flex-basis:60%">
					<!-- wp:paragraph {"className":"is-style-pulse-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="is-style-pulse-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;font-weight:500">- Biography</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.75rem, 3.5vw, 2.75rem)","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
					<h2 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--40);font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 3.5vw, 2.75rem);line-height:1.1;letter-spacing:-0.02em;font-weight:600">A practice built around outcomes.</h2>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7"},"color":{"text":"var:preset|color|foreground"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--foreground);font-size:var(--wp--preset--font-size--medium);line-height:1.7;margin-bottom:var(--wp--preset--spacing--30);max-width:54ch">I started designing interfaces in 2014 - agency years that taught me craft, deadlines and the value of a strong typographic system. By 2017 I was on product teams shipping mobile work for health and fintech, learning the difference between a screen that looks right and a flow that actually works for someone at 6 a.m. on a bus.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7"},"color":{"text":"var:preset|color|foreground"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--foreground);font-size:var(--wp--preset--font-size--medium);line-height:1.7;margin-bottom:var(--wp--preset--spacing--30);max-width:54ch">In 2020 I joined North Studio to lead the flagship product and build its design system from scratch - tokens, components, docs, contribution model. That work clarified what I care about: design that scales across teams, that other people can extend, that survives the next quarter.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7"},"color":{"text":"var:preset|color|foreground"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--foreground);font-size:var(--wp--preset--font-size--medium);line-height:1.7;margin-bottom:var(--wp--preset--spacing--30);max-width:54ch">Since 2023 I've been independent. I take two engagements a quarter - usually a research-led product redesign or a design-systems build - and I work directly with founders and product leaders. I write the brief, set the metric, and stay accountable to the number that comes after launch.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.7;max-width:54ch">My approach is research-led and system-driven: understand the job, design the smallest possible thing that does it, then make it scale. I prefer fewer, sharper screens - and the discipline to delete the rest.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 03 - PHILOSOPHY (pullquote) === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"className":"is-style-pulse-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
			<p class="is-style-pulse-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;font-weight:500">- Philosophy</p>
			<!-- /wp:paragraph -->
			<!-- wp:html -->
			<blockquote style="margin:0;padding:0;border:none;max-width:30ch;">
				<p style="font-family:var(--wp--preset--font-family--display);font-weight:600;font-size:clamp(1.75rem, 4.5vw, 3.25rem);line-height:1.05;letter-spacing:-0.03em;margin:0;color:var(--pulse-ink);">I design for the metrics that come after launch - not just the screens before it.</p>
				<p style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;color:var(--pulse-muted);margin-top:2rem;">- Pulse</p>
			</blockquote>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 04 - EXPERIENCE (timeline) === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
			<div class="wp-block-columns">
				<!-- wp:column {"width":"30%"} -->
				<div class="wp-block-column" style="flex-basis:30%">
					<!-- wp:paragraph {"className":"is-style-pulse-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="is-style-pulse-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;font-weight:500">- Experience · Demo data</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":"70%"} -->
				<div class="wp-block-column" style="flex-basis:70%">
					<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.75rem, 3.5vw, 2.75rem)","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
					<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 3.5vw, 2.75rem);line-height:1.1;letter-spacing:-0.02em;font-weight:600">Where I've worked.</h2>
					<!-- /wp:heading -->
					<!-- wp:html -->
					<div style="margin-top:2rem;">
						<div class="pulse-exp-row">
							<span class="pulse-exp-year">2023 - Now</span>
							<span class="pulse-exp-role">Independent Product Designer</span>
							<span class="pulse-exp-org">Selected engagements with fintech, health and SaaS teams.</span>
						</div>
						<div class="pulse-exp-row">
							<span class="pulse-exp-year">2020 - 2023</span>
							<span class="pulse-exp-role">Senior Product Designer</span>
							<span class="pulse-exp-org">North Studio - led design for the flagship product, built the design system.</span>
						</div>
						<div class="pulse-exp-row">
							<span class="pulse-exp-year">2017 - 2020</span>
							<span class="pulse-exp-role">Product Designer</span>
							<span class="pulse-exp-org">Orbit Labs - shipped 3 mobile products from research to launch.</span>
						</div>
						<div class="pulse-exp-row">
							<span class="pulse-exp-year">2014 - 2017</span>
							<span class="pulse-exp-role">UX Designer</span>
							<span class="pulse-exp-org">Arc Agency - agency work across brand, web and product.</span>
						</div>
					</div>
					<!-- /wp:html -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 05 - SKILLS (spec-sheet) === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
			<div class="wp-block-columns">
				<!-- wp:column {"width":"30%"} -->
				<div class="wp-block-column" style="flex-basis:30%">
					<!-- wp:paragraph {"className":"is-style-pulse-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="is-style-pulse-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;font-weight:500">- Skills · Demo data</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":"70%"} -->
				<div class="wp-block-column" style="flex-basis:70%">
					<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.75rem, 3.5vw, 2.75rem)","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
					<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 3.5vw, 2.75rem);line-height:1.1;letter-spacing:-0.02em;font-weight:600">What I bring.</h2>
					<!-- /wp:heading -->
					<!-- wp:html -->
					<div style="margin-top:2rem;">
						<div class="pulse-skill-row">
							<span class="pulse-skill-name">Product Strategy</span>
							<span class="pulse-skill-detail">Roadmapping · Jobs-to-be-done · Metric design · Opportunity framing</span>
							<div class="pulse-skill-bar" aria-hidden="true"><div class="pulse-skill-bar-fill" style="width:92%;"></div></div>
						</div>
						<div class="pulse-skill-row">
							<span class="pulse-skill-name">UX Research</span>
							<span class="pulse-skill-detail">User interviews · Usability testing · Diary studies · Quant analysis</span>
							<div class="pulse-skill-bar" aria-hidden="true"><div class="pulse-skill-bar-fill" style="width:88%;"></div></div>
						</div>
						<div class="pulse-skill-row">
							<span class="pulse-skill-name">Interaction Design</span>
							<span class="pulse-skill-detail">Flows · Wireframes · Prototyping · Accessibility · Motion</span>
							<div class="pulse-skill-bar" aria-hidden="true"><div class="pulse-skill-bar-fill" style="width:95%;"></div></div>
						</div>
						<div class="pulse-skill-row">
							<span class="pulse-skill-name">UI & Systems</span>
							<span class="pulse-skill-detail">Design systems · Component libraries · Tokens · Visual design</span>
							<div class="pulse-skill-bar" aria-hidden="true"><div class="pulse-skill-bar-fill" style="width:90%;"></div></div>
						</div>
						<div class="pulse-skill-row">
							<span class="pulse-skill-name">Tools</span>
							<span class="pulse-skill-detail">Figma · Framer · Notion · Linear · Maze · Hotjar</span>
							<div class="pulse-skill-bar" aria-hidden="true"><div class="pulse-skill-bar-fill" style="width:96%;"></div></div>
						</div>
					</div>
					<!-- /wp:html -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 06 - CAPABILITIES / SERVICES === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
				<!-- wp:paragraph {"className":"is-style-pulse-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-pulse-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;font-weight:500">- Capabilities</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.75rem, 3.5vw, 2.75rem)","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
				<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 3.5vw, 2.75rem);line-height:1.1;letter-spacing:-0.02em;font-weight:600">How I can help.</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- Capabilities grid -->
			<!-- wp:html -->
			<div class="pulse-2col" style="grid-template-columns:repeat(2, minmax(0, 1fr));gap:0;">
				<div class="pulse-skill-row" style="grid-template-columns:1fr;gap:0.75rem;padding:1.5rem 1.5rem 1.5rem 0;border-right:1px solid var(--pulse-line);">
					<p style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;color:var(--pulse-accent);margin:0;">01</p>
					<p class="pulse-skill-name" style="margin:0;">Product Design</p>
					<p class="pulse-skill-detail" style="margin:0;">End-to-end product work - from research and strategy through interaction, UI and design QA.</p>
				</div>
				<div class="pulse-skill-row" style="grid-template-columns:1fr;gap:0.75rem;padding:1.5rem 0 1.5rem 1.5rem;">
					<p style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;color:var(--pulse-accent);margin:0;">02</p>
					<p class="pulse-skill-name" style="margin:0;">Design Systems</p>
					<p class="pulse-skill-detail" style="margin:0;">Tokens, component libraries, contribution models and docs your team can extend.</p>
				</div>
				<div class="pulse-skill-row" style="grid-template-columns:1fr;gap:0.75rem;padding:1.5rem 1.5rem 1.5rem 0;border-right:1px solid var(--pulse-line);border-top:1px solid var(--pulse-line);">
					<p style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;color:var(--pulse-accent);margin:0;">03</p>
					<p class="pulse-skill-name" style="margin:0;">UX Research</p>
					<p class="pulse-skill-detail" style="margin:0;">Interviews, usability tests and diary studies - translated into decisions your team can act on.</p>
				</div>
				<div class="pulse-skill-row" style="grid-template-columns:1fr;gap:0.75rem;padding:1.5rem 0 1.5rem 1.5rem;border-top:1px solid var(--pulse-line);">
					<p style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;color:var(--pulse-accent);margin:0;">04</p>
					<p class="pulse-skill-name" style="margin:0;">Prototyping</p>
					<p class="pulse-skill-detail" style="margin:0;">High-fidelity Figma and Framer prototypes - used as a thinking tool, not a deliverable.</p>
				</div>
				<div class="pulse-skill-row" style="grid-template-columns:1fr;gap:0.75rem;padding:1.5rem 1.5rem 1.5rem 0;border-right:1px solid var(--pulse-line);border-top:1px solid var(--pulse-line);border-bottom:none;">
					<p style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;color:var(--pulse-accent);margin:0;">05</p>
					<p class="pulse-skill-name" style="margin:0;">Design Audit</p>
					<p class="pulse-skill-detail" style="margin:0;">A structured review of an existing product - usability, systems and metric gaps.</p>
				</div>
				<div class="pulse-skill-row" style="grid-template-columns:1fr;gap:0.75rem;padding:1.5rem 0 1.5rem 1.5rem;border-top:1px solid var(--pulse-line);border-bottom:none;">
					<p style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;color:var(--pulse-accent);margin:0;">06</p>
					<p class="pulse-skill-name" style="margin:0;">Workshops</p>
					<p class="pulse-skill-detail" style="margin:0;">Facilitated sessions for problem framing, alignment and design-systems kickoff.</p>
				</div>
			</div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 07 - STUDIO IMAGE === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:image {"aspectRatio":"16/9","scale":"cover","style":{"border":{"radius":"8px"}}} -->
			<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pulse/pulse-studio.webp' ); ?>" alt="Wide studio shot - minimal desk with product design artifacts, soft cool daylight" style="border-radius:8px;aspect-ratio:16/9;object-fit:cover" loading="lazy"/></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"className":"pulse-caption","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.02em"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="pulse-caption has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.02em">Fig. 02 - Studio, Berlin. Where most of the research, wireframes and prototypes happen.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 08 - CLOSING NOTE === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase">Looking for case studies? The archive pairs each project with the metric that defined it.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase"}}} -->
			<p style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase"><a href="/contact">Start a project →</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- Footer -->
	<!-- wp:template-part {"slug":"footer-pulse","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
