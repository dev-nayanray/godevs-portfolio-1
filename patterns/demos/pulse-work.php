<?php
/**
 * Title: Demo - Pulse (Designer) - Work
 * Slug: godevs-portfolio/demo-pulse-work
 * Description: PULSE case studies archive - filterable grid with metrics. Recommended style variation: Pulse.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, pulse, work, case studies, archive, ux
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-pulse","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-pulse alignfull">

	<!-- Header -->
	<!-- wp:template-part {"slug":"header-pulse","theme":"godevs-portfolio","tagName":"header"} /-->

	<!-- === 01 - ARCHIVE HEADER === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|70","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Eyebrow + meta row -->
			<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"is-style-pulse-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-pulse-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;font-weight:500">- Case Studies</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"is-style-pulse-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-pulse-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;font-weight:500">12 case studies · 2014 - 2026</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Display H1 -->
			<!-- wp:heading {"level":1,"className":"pulse-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600","letterSpacing":"-0.04em","lineHeight":"0.98","fontSize":"clamp(2.5rem, 7vw, 6.5rem)"}}} -->
			<h1 class="wp-block-heading pulse-display" style="font-family:var(--wp--preset--font-family--display);font-weight:600;letter-spacing:-0.04em;line-height:0.98;font-size:clamp(2.5rem, 7vw, 6.5rem)">Work that shipped. <span class="pulse-accent-text">Outcomes that lasted.</span></h1>
			<!-- /wp:heading -->

			<!-- Supporting copy -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.6"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.6;margin-top:var(--wp--preset--spacing--40)">A selected archive of products I've designed end-to-end - research through launch. Each case study is paired with the metric that defined its success.</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 02 - CATEGORY FILTER === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"bottom":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--line);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:html -->
			<div class="pulse-filter">
				<a class="pulse-chip is-active" href="#">All · 12</a>
				<a class="pulse-chip" href="#">Mobile</a>
				<a class="pulse-chip" href="#">Web</a>
				<a class="pulse-chip" href="#">SaaS</a>
				<a class="pulse-chip" href="#">Health</a>
				<a class="pulse-chip" href="#">Fintech</a>
			</div>
			<!-- /wp:html -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase">Filter by discipline</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 03 - FEATURED CASE STUDY === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Featured image 21/9 -->
			<!-- wp:image {"aspectRatio":"21/9","scale":"cover","style":{"border":{"radius":"8px"}}} -->
			<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pulse/pulse-case-fintech.webp' ); ?>" alt="Fintech App featured case study - mobile banking dashboard with balance cards and charts" style="border-radius:8px;aspect-ratio:21/9;object-fit:cover" loading="eager"/></figure>
			<!-- /wp:image -->

			<!-- Title + metric row -->
			<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"top":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:var(--wp--preset--spacing--50)">
				<!-- wp:column {"verticalAlignment":"center","width":"62%"} -->
				<div class="wp-block-column" style="flex-basis:62%">
					<!-- wp:paragraph {"className":"is-style-pulse-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
					<p class="is-style-pulse-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;font-weight:500">Featured · Fintech · Mobile · 2026</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.25rem, 5vw, 4rem)","lineHeight":"1.0","letterSpacing":"-0.03em","fontWeight":"600"}}} -->
					<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.25rem, 5vw, 4rem);line-height:1.0;letter-spacing:-0.03em;font-weight:600">Fintech App</h2>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.6"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.6;margin-top:var(--wp--preset--spacing--30)">A mobile banking experience rebuilt around clarity and trust - from onboarding through daily use. Research-led, system-driven, and measured against the metrics that mattered.</p>
					<!-- /wp:paragraph -->
					<!-- wp:html -->
					<div style="margin-top:1.5rem;">
						<a class="pulse-link" href="/case-studies/fintech-app">View case study <span class="pulse-arrow" aria-hidden="true">→</span></a>
					</div>
					<!-- /wp:html -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"verticalAlignment":"center","width":"38%"} -->
				<div class="wp-block-column" style="flex-basis:38%">
					<!-- wp:html -->
					<div class="pulse-spec" style="border-left:1px solid var(--pulse-line);padding-left:1.5rem;">
						<p class="pulse-stat-num" style="color:var(--pulse-accent);font-size:clamp(3rem, 7vw, 5rem);">+38%</p>
						<p class="pulse-stat-label">Conversion uplift in 8 weeks</p>
						<p style="margin-top:1.5rem;">2.1× daily active use · −47% support tickets</p>
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

	<!-- === 04 - CASE STUDY GRID === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Section header -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
				<!-- wp:paragraph {"className":"is-style-pulse-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-pulse-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;font-weight:500">- All case studies</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.75rem, 3.5vw, 2.75rem)","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
				<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 3.5vw, 2.75rem);line-height:1.1;letter-spacing:-0.02em;font-weight:600">More selected work.</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- Row 1 -->
			<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
			<div class="wp-block-columns">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:html -->
					<a class="pulse-case" href="#" aria-label="View Analytics Platform case study">
						<div class="pulse-case-media" style="aspect-ratio:4/3;">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pulse/pulse-case-saas.webp' ); ?>" alt="SaaS Analytics - clean dashboard interface with data tables and charts" loading="lazy">
						</div>
						<div class="pulse-case-body">
							<p class="pulse-case-meta">SaaS · Web · 2025</p>
							<h3 class="pulse-case-title">Analytics Platform</h3>
							<p class="pulse-case-desc">Turning dense data into decisions - a dashboard people actually use.</p>
							<div class="pulse-metric">
								<span class="pulse-metric-num">2.1×</span>
								<span class="pulse-metric-label">Daily active use</span>
							</div>
						</div>
					</a>
					<!-- /wp:html -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:html -->
					<a class="pulse-case" href="#" aria-label="View Health Tracker case study">
						<div class="pulse-case-media" style="aspect-ratio:4/3;">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pulse/pulse-case-health.webp' ); ?>" alt="Health Tracker - clean medication tracking mobile interface" loading="lazy">
						</div>
						<div class="pulse-case-body">
							<p class="pulse-case-meta">Health · Mobile · 2025</p>
							<h3 class="pulse-case-title">Health Tracker</h3>
							<p class="pulse-case-desc">A medication companion designed for daily adherence and calm.</p>
							<div class="pulse-metric">
								<span class="pulse-metric-num">92%</span>
								<span class="pulse-metric-label">Adherence</span>
							</div>
						</div>
					</a>
					<!-- /wp:html -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- Row 2 -->
			<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:html -->
					<a class="pulse-case" href="#" aria-label="View Commerce Admin case study">
						<div class="pulse-case-media" style="aspect-ratio:4/3;">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pulse/pulse-case-ecommerce.webp' ); ?>" alt="Commerce Admin - clean order management dashboard interface" loading="lazy">
						</div>
						<div class="pulse-case-body">
							<p class="pulse-case-meta">E-commerce · Web · 2024</p>
							<h3 class="pulse-case-title">Commerce Admin</h3>
							<p class="pulse-case-desc">An admin that merchants understand without training.</p>
							<div class="pulse-metric">
								<span class="pulse-metric-num">−47%</span>
								<span class="pulse-metric-label">Support tickets</span>
							</div>
						</div>
					</a>
					<!-- /wp:html -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:html -->
					<a class="pulse-case" href="#" aria-label="View Data Studio case study">
						<div class="pulse-case-media" style="aspect-ratio:4/3;">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pulse/pulse-case-saas.webp' ); ?>" alt="Data Studio - analytics workspace with query builder and saved views" loading="lazy">
						</div>
						<div class="pulse-case-body">
							<p class="pulse-case-meta">SaaS · Web · 2024</p>
							<h3 class="pulse-case-title">Data Studio</h3>
							<p class="pulse-case-desc">A query-first analytics workspace built for power users and teams.</p>
							<div class="pulse-metric">
								<span class="pulse-metric-num">+1.8×</span>
								<span class="pulse-metric-label">Onboarding completion</span>
							</div>
						</div>
					</a>
					<!-- /wp:html -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 05 - PAGINATION === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:html -->
			<div class="pulse-filter">
				<a class="pulse-chip is-active" href="#" aria-current="page">1</a>
				<a class="pulse-chip" href="#">2</a>
				<a class="pulse-chip" href="#">3</a>
				<a class="pulse-chip" href="#">Next →</a>
			</div>
			<!-- /wp:html -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase">Page 1 of 3 · 12 case studies</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 06 - CLOSING NOTE === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase"><span class="pulse-dot" aria-hidden="true"></span>Looking for a specific case? Browse the full archive.</p>
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
