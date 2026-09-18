<?php
/**
 * Title: Demo - Architect (Architecture) - Projects
 * Slug: godevs-portfolio/demo-architect-projects
 * Description: ARCHITECT projects archive - filterable project index. Recommended style variation: Architect.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, architect, projects, archive, architecture
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

	<!-- === 01 - ARCHIVE HERO (typographic, no image) === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|70","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"className":"is-style-arch-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.2em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
			<p class="is-style-arch-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.2em;text-transform:uppercase;font-weight:500">- Projects</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":1,"className":"arch-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"500","letterSpacing":"-0.03em","lineHeight":"0.98","fontSize":"clamp(3rem, 9vw, 8rem)"},"layout":{"selfStretch":"fit","flexSize":"18ch"}}} -->
			<h1 class="wp-block-heading arch-display" style="font-family:var(--wp--preset--font-family--display);font-weight:500;letter-spacing:-0.03em;line-height:0.98;font-size:clamp(3rem, 9vw, 8rem);max-width:18ch">An index of <span class="arch-italic">work.</span></h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500;margin-top:var(--wp--preset--spacing--40)">06 Projects · 04 Categories · 2008 - 2026</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 02 - CATEGORY FILTER === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"},"bottom":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;border-bottom-color:var(--wp--preset--color--line);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:html -->
			<nav class="arch-filter" aria-label="Project categories">
				<a class="is-active" href="#">All</a>
				<a href="#">Residential</a>
				<a href="#">Commercial</a>
				<a href="#">Cultural</a>
				<a href="#">Hospitality</a>
				<a href="#">Interior</a>
				<a href="#">Renovation</a>
			</nav>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 03 - PROJECT INDEX (6 projects, varied compositions) === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- PROJECT 01 - HOUSE N (full-width 21/9, with descriptive body) -->
			<!-- wp:html -->
			<a class="arch-project is-full" href="#" aria-label="View project - House N">
				<div class="arch-project-media" style="aspect-ratio: 21/9;">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/architect/architect-project-1.webp' ); ?>" alt="House N - Dhaka, minimalist concrete residence with courtyard, strong directional light" loading="lazy">
				</div>
				<div class="arch-project-body" style="flex-direction: row; flex-wrap: wrap; justify-content: space-between; align-items: baseline; gap: 1.5rem 3rem; margin-top: 1.5rem;">
					<div style="max-width: 38rem;">
						<p class="arch-project-num">Project 01</p>
						<h3 class="arch-project-title">House N</h3>
						<p class="arch-project-meta"><span>Dhaka</span><span>Bangladesh</span><span>Residential</span><span>2026</span></p>
						<p style="font-size:var(--wp--preset--font-size--small); line-height:1.65; color:var(--arch-muted); margin-top:0.85rem; max-width:42ch;">A contemporary residence organized around natural light, private courtyards and quiet transitions between interior and exterior.</p>
					</div>
					<p class="arch-project-arrow">View project <span class="arch-arrow" aria-hidden="true">→</span></p>
				</div>
			</a>
			<!-- /wp:html -->

			<!-- PROJECT 02 - COURTYARD HOUSE (is-reversed, text left, vertical image right) -->
			<!-- wp:html -->
			<a class="arch-project is-reversed" href="#" style="--arch-split: 1fr 1.1fr; margin-top: 5rem;" aria-label="View project - Courtyard House">
				<div class="arch-project-body">
					<p class="arch-project-num">Project 02</p>
					<h3 class="arch-project-title">Courtyard House</h3>
					<p class="arch-project-meta"><span>Lisbon</span><span>Portugal</span><span>Residential</span><span>2025</span></p>
					<p style="font-size:var(--wp--preset--font-size--small); line-height:1.65; color:var(--arch-muted); margin-top:0.85rem; max-width:42ch;">A residence organized around a central courtyard - Mediterranean light, white concrete walls, and a quiet sequence of inward-facing spaces.</p>
					<p class="arch-project-arrow">View project <span class="arch-arrow" aria-hidden="true">→</span></p>
				</div>
				<div class="arch-project-media" style="aspect-ratio: 4/5;">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/architect/architect-project-2.webp' ); ?>" alt="Courtyard House - Lisbon, white concrete walls with courtyard light, Mediterranean residence" loading="lazy">
				</div>
			</a>
			<!-- /wp:html -->

			<!-- PROJECT 03 - CONCRETE GALLERY (full-width 16/9, centered body) -->
			<!-- wp:html -->
			<a class="arch-project is-full" href="#" style="margin-top: 5rem;" aria-label="View project - Concrete Gallery">
				<div class="arch-project-media" style="aspect-ratio: 16/9;">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/architect/architect-project-3.webp' ); ?>" alt="Concrete Gallery - Berlin, brutalist cultural building, dramatic shadow patterns on monolithic concrete" loading="lazy">
				</div>
				<div class="arch-project-body" style="flex-direction: row; flex-wrap: wrap; justify-content: space-between; align-items: baseline; gap: 1.5rem 3rem; margin-top: 1.5rem;">
					<div style="max-width: 38rem;">
						<p class="arch-project-num">Project 03</p>
						<h3 class="arch-project-title">Concrete Gallery</h3>
						<p class="arch-project-meta"><span>Berlin</span><span>Germany</span><span>Cultural</span><span>2025</span></p>
						<p style="font-size:var(--wp--preset--font-size--small); line-height:1.65; color:var(--arch-muted); margin-top:0.85rem; max-width:42ch;">A brutalist gallery where concrete and shadow define the experience of art - mass, void, and a single long skylight.</p>
					</div>
					<p class="arch-project-arrow">View project <span class="arch-arrow" aria-hidden="true">→</span></p>
				</div>
			</a>
			<!-- /wp:html -->

			<!-- PROJECTS 04 + 05 - Editorial split pair (denser, 4/3 aspect) -->
			<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"var:preset|spacing|80"}}}} -->
			<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--80)">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:html -->
					<a class="arch-project is-full" href="#" aria-label="View project - Terrace 07">
						<div class="arch-project-media" style="aspect-ratio: 4/3;">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/architect/architect-project-4.webp' ); ?>" alt="Terrace 07 - Singapore interior architecture, warm wood and concrete, soft directional light" loading="lazy">
						</div>
						<div class="arch-project-body" style="margin-top: 1.25rem;">
							<p class="arch-project-num">Project 04</p>
							<h3 class="arch-project-title">Terrace 07</h3>
							<p class="arch-project-meta"><span>Singapore</span><span>Interior</span><span>2024</span></p>
						</div>
					</a>
					<!-- /wp:html -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:html -->
					<a class="arch-project is-full" href="#" aria-label="View project - Museum North">
						<div class="arch-project-media" style="aspect-ratio: 4/3;">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/architect/architect-project-5.webp' ); ?>" alt="Museum North - Copenhagen, contemporary cultural building with large glazing and reflective water" loading="lazy">
						</div>
						<div class="arch-project-body" style="margin-top: 1.25rem;">
							<p class="arch-project-num">Project 05</p>
							<h3 class="arch-project-title">Museum North</h3>
							<p class="arch-project-meta"><span>Copenhagen</span><span>Denmark</span><span>Cultural</span><span>2024</span></p>
						</div>
					</a>
					<!-- /wp:html -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- PROJECT 06 - MONOLITH (wide landscape, body to the left as is-reversed) -->
			<!-- wp:html -->
			<a class="arch-project is-reversed" href="#" style="--arch-split: 1fr 1.7fr; margin-top: 5rem; align-items: center;" aria-label="View project - Monolith">
				<div class="arch-project-body" style="justify-content: center;">
					<p class="arch-project-num">Project 06</p>
					<h3 class="arch-project-title">Monolith</h3>
					<p class="arch-project-meta"><span>Tokyo</span><span>Japan</span><span>Commercial</span><span>2023</span></p>
					<p style="font-size:var(--wp--preset--font-size--small); line-height:1.65; color:var(--arch-muted); margin-top:0.85rem; max-width:36ch;">A commercial building that reads as a single, restrained mass - dark stone, glass, and the city at dusk.</p>
					<p class="arch-project-arrow">View project <span class="arch-arrow" aria-hidden="true">→</span></p>
				</div>
				<div class="arch-project-media" style="aspect-ratio: 16/10;">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/architect/architect-project-6.webp' ); ?>" alt="Monolith - Tokyo, commercial architecture, dark stone and glass facade at dusk" loading="lazy">
				</div>
			</a>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 04 - COMPACT INDEX LIST (denser catalog view, visually distinct from above) === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
				<!-- wp:paragraph {"className":"is-style-arch-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.2em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-arch-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.2em;text-transform:uppercase;font-weight:500">- Index</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"className":"arch-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.75rem, 4vw, 3rem)","lineHeight":"1.05","letterSpacing":"-0.025em","fontWeight":"500"}}} -->
				<h2 class="wp-block-heading arch-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 4vw, 3rem);line-height:1.05;letter-spacing:-0.025em;font-weight:500">All projects, cataloged.</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- Compact project rows (re-use arch-service-row pattern with custom grid) -->
			<!-- wp:html -->
			<div style="border-top: 1px solid var(--arch-line);">
				<a class="arch-service-row" href="#" style="grid-template-columns: 3rem 1fr 9rem 9rem 2rem;">
					<span class="arch-service-num">01</span>
					<span class="arch-service-title">House N</span>
					<span class="arch-service-desc" style="font-size: 0.6875rem; letter-spacing: 0.14em; text-transform: uppercase;">Dhaka · BD</span>
					<span class="arch-service-desc" style="font-size: 0.6875rem; letter-spacing: 0.14em; text-transform: uppercase;">2026</span>
					<span class="arch-service-arrow" aria-hidden="true">→</span>
				</a>
				<a class="arch-service-row" href="#" style="grid-template-columns: 3rem 1fr 9rem 9rem 2rem;">
					<span class="arch-service-num">02</span>
					<span class="arch-service-title">Courtyard House</span>
					<span class="arch-service-desc" style="font-size: 0.6875rem; letter-spacing: 0.14em; text-transform: uppercase;">Lisbon · PT</span>
					<span class="arch-service-desc" style="font-size: 0.6875rem; letter-spacing: 0.14em; text-transform: uppercase;">2025</span>
					<span class="arch-service-arrow" aria-hidden="true">→</span>
				</a>
				<a class="arch-service-row" href="#" style="grid-template-columns: 3rem 1fr 9rem 9rem 2rem;">
					<span class="arch-service-num">03</span>
					<span class="arch-service-title">Concrete Gallery</span>
					<span class="arch-service-desc" style="font-size: 0.6875rem; letter-spacing: 0.14em; text-transform: uppercase;">Berlin · DE</span>
					<span class="arch-service-desc" style="font-size: 0.6875rem; letter-spacing: 0.14em; text-transform: uppercase;">2025</span>
					<span class="arch-service-arrow" aria-hidden="true">→</span>
				</a>
				<a class="arch-service-row" href="#" style="grid-template-columns: 3rem 1fr 9rem 9rem 2rem;">
					<span class="arch-service-num">04</span>
					<span class="arch-service-title">Terrace 07</span>
					<span class="arch-service-desc" style="font-size: 0.6875rem; letter-spacing: 0.14em; text-transform: uppercase;">Singapore · SG</span>
					<span class="arch-service-desc" style="font-size: 0.6875rem; letter-spacing: 0.14em; text-transform: uppercase;">2024</span>
					<span class="arch-service-arrow" aria-hidden="true">→</span>
				</a>
				<a class="arch-service-row" href="#" style="grid-template-columns: 3rem 1fr 9rem 9rem 2rem;">
					<span class="arch-service-num">05</span>
					<span class="arch-service-title">Museum North</span>
					<span class="arch-service-desc" style="font-size: 0.6875rem; letter-spacing: 0.14em; text-transform: uppercase;">Copenhagen · DK</span>
					<span class="arch-service-desc" style="font-size: 0.6875rem; letter-spacing: 0.14em; text-transform: uppercase;">2024</span>
					<span class="arch-service-arrow" aria-hidden="true">→</span>
				</a>
				<a class="arch-service-row" href="#" style="grid-template-columns: 3rem 1fr 9rem 9rem 2rem;">
					<span class="arch-service-num">06</span>
					<span class="arch-service-title">Monolith</span>
					<span class="arch-service-desc" style="font-size: 0.6875rem; letter-spacing: 0.14em; text-transform: uppercase;">Tokyo · JP</span>
					<span class="arch-service-desc" style="font-size: 0.6875rem; letter-spacing: 0.14em; text-transform: uppercase;">2023</span>
					<span class="arch-service-arrow" aria-hidden="true">→</span>
				</a>
			</div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 05 - PAGINATION === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
			<div class="wp-block-columns are-vertically-aligned-center">
				<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
				<div class="wp-block-column" style="flex-basis:50%">
					<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">Page 01 / 04</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
				<div class="wp-block-column" style="flex-basis:50%">
					<!-- wp:paragraph {"align":"right","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"}}} -->
					<p class="has-text-align-right" style="font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500"><a href="#">Load more →</a></p>
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
	<!-- wp:template-part {"slug":"footer-architect","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
