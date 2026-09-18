<?php
/**
 * Title: Demo - Pulse (Designer) - Case Study
 * Slug: godevs-portfolio/demo-pulse-case-study
 * Description: PULSE single case study - Fintech App, immersive metric-driven layout. Recommended style variation: Pulse.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, pulse, case study, fintech, ux
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-pulse","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-pulse alignfull">

	<!-- Header -->
	<!-- wp:template-part {"slug":"header-pulse","theme":"godevs-portfolio","tagName":"header"} /-->

	<!-- === 01 - PROJECT HERO === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"bottom":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--line);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Eyebrow + breadcrumb row -->
			<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"is-style-pulse-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
				<p class="is-style-pulse-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;font-weight:500">Case Study - 2026</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase"><a href="/work">← Back to work</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Display H1 - typography IS the hero -->
			<!-- wp:heading {"level":1,"className":"pulse-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600","letterSpacing":"-0.045em","lineHeight":"0.95","fontSize":"clamp(3rem, 10vw, 8rem)"}}} -->
			<h1 class="wp-block-heading pulse-display" style="font-family:var(--wp--preset--font-family--display);font-weight:600;letter-spacing:-0.045em;line-height:0.95;font-size:clamp(3rem, 10vw, 8rem)">Fintech <span class="pulse-accent-text">App.</span></h1>
			<!-- /wp:heading -->

			<!-- Meta + metric row -->
			<!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|60"}}} -->
			<div class="wp-block-columns are-vertically-aligned-bottom" style="margin-top:var(--wp--preset--spacing--70)">
				<!-- wp:column {"verticalAlignment":"bottom","width":"64%"} -->
				<div class="wp-block-column" style="flex-basis:64%">
					<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase">Mobile banking · Research · UX · UI · Design system · 2026 · 16 weeks</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.6"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.6;margin-top:var(--wp--preset--spacing--30)">A mobile banking experience rebuilt around clarity and trust - from onboarding through daily use. Research-led, system-driven, and measured against the metrics that mattered.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"verticalAlignment":"bottom","width":"36%"} -->
				<div class="wp-block-column" style="flex-basis:36%">
					<!-- wp:paragraph {"className":"pulse-stat-num","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"700","fontSize":"clamp(3rem, 7vw, 5.5rem)","lineHeight":"0.95","letterSpacing":"-0.04em"},"color":{"text":"var:preset|color|accent"}}} -->
					<p class="pulse-stat-num has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--display);font-weight:700;font-size:clamp(3rem, 7vw, 5.5rem);line-height:0.95;letter-spacing:-0.04em">+38%</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"pulse-stat-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="pulse-stat-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase">Conversion uplift · 8 weeks to impact</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 02 - FULL-WIDTH HERO VISUAL === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:image {"aspectRatio":"21/9","scale":"cover","style":{"border":{"radius":"8px"}}} -->
			<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pulse/pulse-case-fintech.webp' ); ?>" alt="Fintech App - dashboard overview showing balance cards, transaction history and savings goals" style="border-radius:8px;aspect-ratio:21/9;object-fit:cover" loading="eager"/></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"className":"pulse-caption","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.04em"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="pulse-caption has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.04em">Fig. 01 - Dashboard overview. The home screen anchors the banking experience around balance clarity and one-tap actions.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 03 - OVERVIEW + PROJECT FACTS === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:html -->
			<div class="pulse-2col is-wide-narrow">
				<div>
					<p class="is-style-pulse-label" style="color:var(--pulse-muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;font-weight:500;margin:0 0 1.25rem 0;">- Overview</p>
					<p style="font-family:var(--wp--preset--font-family--body);font-size:1.0625rem;line-height:1.65;max-width:46ch;margin:0;">A regional bank asked us to rebuild their mobile app end-to-end. The product had stagnated: onboarding leaked 70% of new users, daily-active sessions averaged 90 seconds, and 1 in 3 support tickets was a usability complaint. We started with research, rebuilt the flows around clarity and trust, shipped a design system alongside the product, and measured the metrics that mattered.</p>
					<p class="is-style-pulse-label" style="color:var(--pulse-muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;font-weight:500;margin:2.5rem 0 1rem 0;">Project facts</p>
					<div class="pulse-spec">
						<p style="margin:0 0 0.35rem 0;"><strong>Client</strong> - Forma Bank (regional, 1.2M customers)</p>
						<p style="margin:0 0 0.35rem 0;"><strong>Sector</strong> - Financial services · Mobile banking</p>
						<p style="margin:0 0 0.35rem 0;"><strong>Role</strong> - Lead product designer (end-to-end)</p>
						<p style="margin:0 0 0.35rem 0;"><strong>Services</strong> - Research · UX · UI · Design system · Motion</p>
						<p style="margin:0 0 0.35rem 0;"><strong>Timeline</strong> - 16 weeks · Jan - May 2026</p>
						<p style="margin:0 0 0.35rem 0;"><strong>Platform</strong> - iOS &amp; Android (native, paired w/ eng)</p>
						<p style="margin:0;"><strong>Team size</strong> - 4 design · 6 engineering · 1 PM</p>
					</div>
				</div>
				<div>
					<p class="pulse-stat-num" style="color:var(--pulse-accent);">+38%</p>
					<p class="pulse-stat-label">Conversion uplift in 8 weeks post-launch</p>
					<p class="pulse-spec" style="margin-top:1.5rem;border-top:1px solid var(--pulse-line);padding-top:1.25rem;">The headline metric. Conversion = first successful transaction within 7 days of install.</p>
				</div>
			</div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 04 - THE CHALLENGE === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Section header -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
				<!-- wp:paragraph {"className":"is-style-pulse-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
				<p class="is-style-pulse-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;font-weight:500">- The Challenge</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.25rem, 5vw, 4rem)","lineHeight":"1.0","letterSpacing":"-0.03em","fontWeight":"600"}}} -->
				<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.25rem, 5vw, 4rem);line-height:1.0;letter-spacing:-0.03em;font-weight:600">A product people avoided using.</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- 2-col text -->
			<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
			<div class="wp-block-columns">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.65"},"color":{"text":"var:preset|color|foreground"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--foreground);font-size:var(--wp--preset--font-size--medium);line-height:1.65">The existing app had grown by accretion - every new feature had been bolted onto a structure built for a different era of mobile banking. The result was a home screen that mixed marketing, transactions and notifications, an onboarding flow that asked for everything up front, and a transfer flow that took nine taps end-to-end.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.65"},"color":{"text":"var:preset|color|foreground"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--foreground);font-size:var(--wp--preset--font-size--medium);line-height:1.65">Behind the numbers sat a more interesting problem: customers didn't trust the app to show them what mattered. They opened it, scanned a balance, and closed it - usually to open a competitor's app for the same purpose. Trust, not feature gaps, was the constraint on growth.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- Pullquote -->
			<!-- wp:html -->
			<blockquote style="border-top:1px solid var(--pulse-line);border-bottom:1px solid var(--pulse-line);padding:2.5rem 0;margin:0;">
				<p style="font-family:var(--wp--preset--font-family--display);font-weight:500;font-size:clamp(1.5rem, 3vw, 2.25rem);line-height:1.25;letter-spacing:-0.02em;margin:0;color:var(--pulse-ink);">"Customers didn't need more features. They needed to trust the few they already had."</p>
			</blockquote>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 05 - THE APPROACH === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Section header -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
				<!-- wp:paragraph {"className":"is-style-pulse-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
				<p class="is-style-pulse-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;font-weight:500">- The Approach</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.25rem, 5vw, 4rem)","lineHeight":"1.0","letterSpacing":"-0.03em","fontWeight":"600"}}} -->
				<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.25rem, 5vw, 4rem);line-height:1.0;letter-spacing:-0.03em;font-weight:600">Research-led, system-driven.</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- 2-col text -->
			<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
			<div class="wp-block-columns">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.65"},"color":{"text":"var:preset|color|foreground"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--foreground);font-size:var(--wp--preset--font-size--medium);line-height:1.65">We started with 18 contextual interviews and a diary study across two weeks. The patterns were stark - users opened the app to confirm a balance before a decision, not to discover features. That reframed the design problem around a single question: <strong>can a customer answer "am I safe to spend?" in under three seconds?</strong></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.65"},"color":{"text":"var:preset|color|foreground"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--foreground);font-size:var(--wp--preset--font-size--medium);line-height:1.65">From there we built the flows, the visual system and the motion grammar in parallel - a small set of components designed to scale. We prototyped in Figma, tested in Maze with 24 participants per round, and shipped a design system the engineering team owned from week one.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- Process image -->
			<!-- wp:image {"aspectRatio":"16/9","scale":"cover","style":{"border":{"radius":"8px"},"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
			<figure class="wp-block-image has-custom-border" style="margin-top:var(--wp--preset--spacing--60)"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pulse/pulse-process-research.webp' ); ?>" alt="PULSE process - research artifacts: interview scripts, affinity map and journey sketches pinned to a wall" style="border-radius:8px;aspect-ratio:16/9;object-fit:cover" loading="lazy"/></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"className":"pulse-caption","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.04em"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="pulse-caption has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.04em">Fig. 02 - Research artifacts. Eighteen interviews, affinity-mapped against five core jobs-to-be-done.</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 06 - GALLERY === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Gallery header -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
				<!-- wp:paragraph {"className":"is-style-pulse-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-pulse-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;font-weight:500">- Gallery</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.75rem, 3.5vw, 2.75rem)","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
				<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 3.5vw, 2.75rem);line-height:1.1;letter-spacing:-0.02em;font-weight:600">Two screens, two problems solved.</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- Gallery images -->
			<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
			<div class="wp-block-columns">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"8px"}}} -->
					<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pulse/pulse-fintech-detail-1.webp' ); ?>" alt="Fintech App detail - balance home screen with safe-to-spend callout and quick actions" style="border-radius:8px;aspect-ratio:4/3;object-fit:cover" loading="lazy"/></figure>
					<!-- /wp:image -->
					<!-- wp:paragraph {"className":"pulse-caption","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.04em"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="pulse-caption has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.04em">Fig. 03 - Home screen. A single safe-to-spend number, one-tap actions, no marketing.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"8px"}}} -->
					<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pulse/pulse-fintech-detail-2.webp' ); ?>" alt="Fintech App detail - transfer flow with confirmation and biometric verification" style="border-radius:8px;aspect-ratio:4/3;object-fit:cover" loading="lazy"/></figure>
					<!-- /wp:image -->
					<!-- wp:paragraph {"className":"pulse-caption","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.04em"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="pulse-caption has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.04em">Fig. 04 - Transfer flow. Five taps end-to-end, biometric at the boundary, no friction in between.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 07 - RESULTS === -->
	<!-- wp:group {"tagName":"section","className":"pulse-dark","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"color":{"background":"var:preset|color|primary","text":"var:preset|color|contrast"}},"layout":{"type":"default"}} -->
	<section class="wp-block-group pulse-dark alignfull has-contrast-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Section header -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
				<!-- wp:paragraph {"className":"is-style-pulse-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
				<p class="is-style-pulse-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;font-weight:500">- Results · Demo data</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.25rem, 5vw, 4rem)","lineHeight":"1.0","letterSpacing":"-0.03em","fontWeight":"600"},"color":{"text":"var:preset|color|contrast"}}} -->
				<h2 class="wp-block-heading has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-size:clamp(2.25rem, 5vw, 4rem);line-height:1.0;letter-spacing:-0.03em;font-weight:600">The outcome.</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- Stats grid (4-col) -->
			<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
			<div class="wp-block-columns">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:paragraph {"className":"pulse-stat-num","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"700","fontSize":"clamp(2.75rem, 6vw, 5rem)","lineHeight":"0.95","letterSpacing":"-0.04em"},"color":{"text":"var:preset|color|accent"}}} -->
					<p class="pulse-stat-num has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--display);font-weight:700;font-size:clamp(2.75rem, 6vw, 5rem);line-height:0.95;letter-spacing:-0.04em">+38%</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"pulse-stat-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="pulse-stat-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase">Conversion uplift</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:paragraph {"className":"pulse-stat-num","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"700","fontSize":"clamp(2.75rem, 6vw, 5rem)","lineHeight":"0.95","letterSpacing":"-0.04em"},"color":{"text":"var:preset|color|contrast"}}} -->
					<p class="pulse-stat-num has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-weight:700;font-size:clamp(2.75rem, 6vw, 5rem);line-height:0.95;letter-spacing:-0.04em">2.1×</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"pulse-stat-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="pulse-stat-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase">Daily active use</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:paragraph {"className":"pulse-stat-num","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"700","fontSize":"clamp(2.75rem, 6vw, 5rem)","lineHeight":"0.95","letterSpacing":"-0.04em"},"color":{"text":"var:preset|color|contrast"}}} -->
					<p class="pulse-stat-num has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-weight:700;font-size:clamp(2.75rem, 6vw, 5rem);line-height:0.95;letter-spacing:-0.04em">−47%</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"pulse-stat-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="pulse-stat-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase">Support tickets</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:paragraph {"className":"pulse-stat-num","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"700","fontSize":"clamp(2.75rem, 6vw, 5rem)","lineHeight":"0.95","letterSpacing":"-0.04em"},"color":{"text":"var:preset|color|contrast"}}} -->
					<p class="pulse-stat-num has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-weight:700;font-size:clamp(2.75rem, 6vw, 5rem);line-height:0.95;letter-spacing:-0.04em">4.9/5</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"pulse-stat-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="pulse-stat-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase">Store rating · 12k reviews</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 08 - TESTIMONIAL === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Section header -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
				<!-- wp:paragraph {"className":"is-style-pulse-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-pulse-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;font-weight:500">- Testimonial</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Testimonial card -->
			<!-- wp:html -->
			<figure class="pulse-testimonial" style="max-width:48rem;">
				<p style="font-family:var(--wp--preset--font-family--display);font-weight:500;font-size:clamp(1.375rem, 2.5vw, 1.875rem);line-height:1.3;letter-spacing:-0.02em;margin:0;color:var(--pulse-ink);">"Shipped on time, shipped on scope, and the product just worked. The +38% conversion wasn't a surprise - it was the design system doing its job. The team still owns what we built."</p>
				<div class="pulse-metric" style="margin-top:2rem;border-top:1px solid var(--pulse-line);">
					<span class="pulse-metric-num" style="font-size:1.25rem;">+38%</span>
					<span class="pulse-metric-label">Conversion · 8 weeks</span>
				</div>
				<p style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.02em;color:var(--pulse-muted);margin-top:1rem;">Idris Bello · Founder, Forma Bank</p>
			</figure>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 09 - NEXT CASE STUDY === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Eyebrow -->
			<!-- wp:paragraph {"className":"is-style-pulse-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
			<p class="is-style-pulse-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;font-weight:500;margin-bottom:var(--wp--preset--spacing--30)">- Next case study</p>
			<!-- /wp:paragraph -->

			<!-- Next case big link -->
			<!-- wp:html -->
			<a class="pulse-display" href="/case-studies/saas-analytics" style="display:block;text-decoration:none;color:var(--pulse-ink);line-height:1.05;font-size:clamp(2.5rem, 6vw, 5rem);">Next - SaaS Analytics <span class="pulse-accent-text" aria-hidden="true">→</span></a>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- Footer -->
	<!-- wp:template-part {"slug":"footer-pulse","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
