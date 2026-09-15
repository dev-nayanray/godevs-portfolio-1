<?php
/**
 * Title: Demo — Mono (Developer) — Work
 * Slug: godevs-portfolio/demo-mono-work
 * Description: MONO work archive — filterable project index. Recommended style variation: Mono.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, mono, work, archive, developer
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-mono","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-mono alignfull">

	<!-- Header -->
	<!-- wp:template-part {"slug":"header-mono","theme":"godevs-portfolio","tagName":"header"} /-->

	<!-- ═══ 01 — ARCHIVE HEADER ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Eyebrow + meta row -->
			<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
				<p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">— Work</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">12 projects · 2023 — 2026</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Display H1 -->
			<!-- wp:heading {"level":1,"className":"mono-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600","letterSpacing":"-0.03em","lineHeight":"1.0","fontSize":"clamp(2.5rem, 8vw, 7.5rem)"}}} -->
			<h1 class="wp-block-heading mono-display" style="font-family:var(--wp--preset--font-family--display);font-weight:600;letter-spacing:-0.03em;line-height:1.0;font-size:clamp(2.5rem, 8vw, 7.5rem)">An archive of <span class="mono-accent-text">products.</span></h1>
			<!-- /wp:heading -->

			<!-- Supporting copy -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.6"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|40"},"maxWidth":"60ch"}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.6;margin-top:var(--wp--preset--spacing--40);max-width:60ch">Every project below was shipped end-to-end — product strategy, architecture, interface, code. Filter by category, or browse the catalog register below for the full list.</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 02 — CATEGORY FILTER ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"bottom":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--line);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:html -->
			<div class="mono-stack-list" style="display:flex;flex-wrap:wrap;gap:0.5rem;">
				<a class="mono-chip is-active" href="#" aria-current="page">All · 12</a>
				<a class="mono-chip" href="#">Web Apps</a>
				<a class="mono-chip" href="#">Mobile</a>
				<a class="mono-chip" href="#">E-commerce</a>
				<a class="mono-chip" href="#">WordPress</a>
				<a class="mono-chip" href="#">Developer Tools</a>
				<a class="mono-chip" href="#">Open Source</a>
			</div>
			<!-- /wp:html -->
			<!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">Filter by category</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 03 — FEATURED PROJECT: LUMA ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Featured eyebrow -->
			<!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
			<p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">Featured · Web App · 2026</p>
			<!-- /wp:paragraph -->

			<!-- Full-bleed 21/9 image -->
			<!-- wp:image {"aspectRatio":"21/9","scale":"cover","style":{"border":{"radius":"4px"}}} -->
			<figure class="wp-block-image has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mono/mono-project-1.webp' ); ?>" alt="LUMA — product platform dashboard UI, clean minimal analytics interface" style="border-radius:4px;aspect-ratio:21/9;object-fit:cover" loading="eager"/></figure>
			<!-- /wp:image -->

			<!-- Title + body row -->
			<!-- wp:html -->
			<a class="mono-project is-full" href="#" aria-label="View project — Luma" style="margin-top:1.5rem;">
				<div class="mono-project-body" style="flex-direction: row; flex-wrap: wrap; justify-content: space-between; align-items: baseline; gap: 1.5rem;">
					<div>
						<p class="mono-project-num">01 — LUMA</p>
						<h3 class="mono-project-title">Luma</h3>
						<p class="mono-project-meta"><span>Product Platform</span><span>2026</span></p>
						<p class="mono-project-desc" style="max-width: 52ch; margin-top: 0.5rem;">A product platform turning complex data into a simple, usable experience — built end-to-end with a typed API surface, a service layer and a PostgreSQL foundation.</p>
						<div class="mono-project-stack">
							<span class="mono-chip">Next.js</span>
							<span class="mono-chip">TypeScript</span>
							<span class="mono-chip">PostgreSQL</span>
						</div>
					</div>
					<p class="mono-project-arrow">View project <span aria-hidden="true">→</span></p>
				</div>
			</a>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 04 — PROJECT GRID ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Section header -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
				<!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">— More projects</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"className":"mono-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 6vw, 5.5rem)","lineHeight":"1.0","letterSpacing":"-0.03em","fontWeight":"600"}}} -->
				<h2 class="wp-block-heading mono-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 6vw, 5.5rem);line-height:1.0;letter-spacing:-0.03em;font-weight:600">Selected archive.</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- Project 02 — ATLAS (reversed, vertical) -->
			<!-- wp:html -->
			<a class="mono-project is-reversed" href="#" style="--mono-split: 1fr 1.3fr; margin-top: 2rem;" aria-label="View project — Atlas">
				<div class="mono-project-body">
					<p class="mono-project-num">02 — ATLAS</p>
					<h3 class="mono-project-title">Atlas</h3>
					<p class="mono-project-meta"><span>Data &amp; Analytics Platform</span><span>2025</span></p>
					<p class="mono-project-desc" style="max-width: 38ch;">A data and analytics platform built for clarity — dashboards people actually use.</p>
					<div class="mono-project-stack">
						<span class="mono-chip">React</span>
						<span class="mono-chip">Node.js</span>
						<span class="mono-chip">D3</span>
					</div>
					<p class="mono-project-arrow">View project <span aria-hidden="true">→</span></p>
				</div>
				<div class="mono-project-media" style="aspect-ratio: 3/4;">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mono/mono-project-2.webp' ); ?>" alt="ATLAS — data analytics mobile app UI, clean minimal charts and metrics" loading="lazy">
				</div>
			</a>
			<!-- /wp:html -->

			<!-- Project 03 — NORTH (image left, landscape) -->
			<!-- wp:html -->
			<a class="mono-project" href="#" style="--mono-split: 1.4fr 1fr; margin-top: 4rem;" aria-label="View project — North">
				<div class="mono-project-media" style="aspect-ratio: 4/3;">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mono/mono-project-3.webp' ); ?>" alt="NORTH — e-commerce website UI on laptop, clean minimal product grid" loading="lazy">
				</div>
				<div class="mono-project-body">
					<p class="mono-project-num">03 — NORTH</p>
					<h3 class="mono-project-title">North</h3>
					<p class="mono-project-meta"><span>E-commerce Experience</span><span>2025</span></p>
					<p class="mono-project-desc" style="max-width: 38ch;">A commerce experience engineered for speed and conversion.</p>
					<div class="mono-project-stack">
						<span class="mono-chip">Next.js</span>
						<span class="mono-chip">Stripe</span>
						<span class="mono-chip">AWS</span>
					</div>
					<p class="mono-project-arrow">View project <span aria-hidden="true">→</span></p>
				</div>
			</a>
			<!-- /wp:html -->

			<!-- Projects 04 + 05 — split pair -->
			<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"var:preset|spacing|60"}}}} -->
			<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--60)">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:html -->
					<a class="mono-project is-full" href="#" aria-label="View project — Forma">
						<div class="mono-project-media" style="aspect-ratio: 4/3;">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mono/mono-project-4.webp' ); ?>" alt="FORMA — creative collaboration tool UI, clean minimal interface with cards" loading="lazy">
						</div>
						<div class="mono-project-body" style="margin-top: 1rem;">
							<p class="mono-project-num">04 — FORMA</p>
							<h3 class="mono-project-title">Forma</h3>
							<p class="mono-project-meta"><span>Collaboration Tool</span><span>2024</span></p>
							<div class="mono-project-stack">
								<span class="mono-chip">React</span>
								<span class="mono-chip">WebSocket</span>
							</div>
						</div>
					</a>
					<!-- /wp:html -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:html -->
					<a class="mono-project is-full" href="#" aria-label="View project — Pulse">
						<div class="mono-project-media" style="aspect-ratio: 3/4;">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mono/mono-project-5.webp' ); ?>" alt="PULSE — mobile product app UI, clean minimal onboarding flow" loading="lazy">
						</div>
						<div class="mono-project-body" style="margin-top: 1rem;">
							<p class="mono-project-num">05 — PULSE</p>
							<h3 class="mono-project-title">Pulse</h3>
							<p class="mono-project-meta"><span>Mobile Product</span><span>2024</span></p>
							<div class="mono-project-stack">
								<span class="mono-chip">React Native</span>
								<span class="mono-chip">Expo</span>
							</div>
						</div>
					</a>
					<!-- /wp:html -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- Project 06 — GRID (reversed, landscape) -->
			<!-- wp:html -->
			<a class="mono-project is-reversed" href="#" style="--mono-split: 1fr 1.4fr; margin-top: 4rem;" aria-label="View project — Grid">
				<div class="mono-project-body">
					<p class="mono-project-num">06 — GRID</p>
					<h3 class="mono-project-title">Grid</h3>
					<p class="mono-project-meta"><span>Developer Platform</span><span>2023</span></p>
					<p class="mono-project-desc" style="max-width: 38ch;">A developer platform with documentation, CLI and API — built for other engineers.</p>
					<div class="mono-project-stack">
						<span class="mono-chip">TypeScript</span>
						<span class="mono-chip">Node.js</span>
						<span class="mono-chip">PostgreSQL</span>
					</div>
					<p class="mono-project-arrow">View project <span aria-hidden="true">→</span></p>
				</div>
				<div class="mono-project-media" style="aspect-ratio: 16/10;">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mono/mono-project-6.webp' ); ?>" alt="GRID — developer platform documentation UI, clean minimal code blocks and sidebar" loading="lazy">
				</div>
			</a>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 05 — COMPACT INDEX (catalog register) ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Section header -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
				<!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">— Catalog register</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.75rem, 3.5vw, 2.75rem)","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
				<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 3.5vw, 2.75rem);line-height:1.1;letter-spacing:-0.02em;font-weight:600">Full index.</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- Catalog rows -->
			<!-- wp:html -->
			<div style="border-top: 1px solid var(--mono-line);">
				<a class="mono-row" href="#" style="grid-template-columns: 3rem 8rem 1fr 16rem auto;">
					<span class="mono-row-num">01</span>
					<span class="mono-row-title" style="font-family: var(--wp--preset--font-family--mono); font-size: 0.75rem;">2026</span>
					<span class="mono-row-title">Luma</span>
					<span class="mono-row-desc" style="font-family: var(--wp--preset--font-family--mono); font-size: 0.75rem;">Product Platform · Next.js / TypeScript</span>
					<span class="mono-row-arrow" aria-hidden="true">→</span>
				</a>
				<a class="mono-row" href="#" style="grid-template-columns: 3rem 8rem 1fr 16rem auto;">
					<span class="mono-row-num">02</span>
					<span class="mono-row-title" style="font-family: var(--wp--preset--font-family--mono); font-size: 0.75rem;">2025</span>
					<span class="mono-row-title">Atlas</span>
					<span class="mono-row-desc" style="font-family: var(--wp--preset--font-family--mono); font-size: 0.75rem;">Analytics Platform · React / Node.js</span>
					<span class="mono-row-arrow" aria-hidden="true">→</span>
				</a>
				<a class="mono-row" href="#" style="grid-template-columns: 3rem 8rem 1fr 16rem auto;">
					<span class="mono-row-num">03</span>
					<span class="mono-row-title" style="font-family: var(--wp--preset--font-family--mono); font-size: 0.75rem;">2025</span>
					<span class="mono-row-title">North</span>
					<span class="mono-row-desc" style="font-family: var(--wp--preset--font-family--mono); font-size: 0.75rem;">E-commerce · Next.js / Stripe</span>
					<span class="mono-row-arrow" aria-hidden="true">→</span>
				</a>
				<a class="mono-row" href="#" style="grid-template-columns: 3rem 8rem 1fr 16rem auto;">
					<span class="mono-row-num">04</span>
					<span class="mono-row-title" style="font-family: var(--wp--preset--font-family--mono); font-size: 0.75rem;">2024</span>
					<span class="mono-row-title">Forma</span>
					<span class="mono-row-desc" style="font-family: var(--wp--preset--font-family--mono); font-size: 0.75rem;">Collaboration Tool · React / WebSocket</span>
					<span class="mono-row-arrow" aria-hidden="true">→</span>
				</a>
				<a class="mono-row" href="#" style="grid-template-columns: 3rem 8rem 1fr 16rem auto;">
					<span class="mono-row-num">05</span>
					<span class="mono-row-title" style="font-family: var(--wp--preset--font-family--mono); font-size: 0.75rem;">2024</span>
					<span class="mono-row-title">Pulse</span>
					<span class="mono-row-desc" style="font-family: var(--wp--preset--font-family--mono); font-size: 0.75rem;">Mobile Product · React Native / Expo</span>
					<span class="mono-row-arrow" aria-hidden="true">→</span>
				</a>
				<a class="mono-row" href="#" style="grid-template-columns: 3rem 8rem 1fr 16rem auto;">
					<span class="mono-row-num">06</span>
					<span class="mono-row-title" style="font-family: var(--wp--preset--font-family--mono); font-size: 0.75rem;">2023</span>
					<span class="mono-row-title">Grid</span>
					<span class="mono-row-desc" style="font-family: var(--wp--preset--font-family--mono); font-size: 0.75rem;">Developer Platform · TypeScript / Node.js</span>
					<span class="mono-row-arrow" aria-hidden="true">→</span>
				</a>
			</div>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 06 — PAGINATION ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">01 / 04 — Showing 6 of 12 projects</p>
			<!-- /wp:paragraph -->
			<!-- wp:html -->
			<a class="mono-link" href="#"><span class="mono-chip" style="text-decoration:none;">Load more →</span></a>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- Footer -->
	<!-- wp:template-part {"slug":"footer-mono","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
