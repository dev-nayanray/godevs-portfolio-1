<?php
/**
 * Title: Demo — Journal (Writing) — About
 * Slug: godevs-portfolio/demo-journal-about
 * Description: JOURNAL about — writer biography, philosophy, publications. Recommended style variation: Journal.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, journal, about, author, biography
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-journal","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-journal alignfull">

	<!-- Header -->
	<!-- wp:template-part {"slug":"header-journal","theme":"godevs-portfolio","tagName":"header"} /-->

	<!-- ═══ 01 — HERO ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Eyebrow -->
			<!-- wp:paragraph {"className":"is-style-jour-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
			<p class="is-style-jour-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:600">— About the Writer</p>
			<!-- /wp:paragraph -->

			<!-- Display heading -->
			<!-- wp:heading {"level":1,"className":"jour-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"400","letterSpacing":"-0.025em","lineHeight":"1.0","fontSize":"clamp(2.5rem, 8vw, 7rem)"}}} -->
			<h1 class="wp-block-heading jour-display" style="font-family:var(--wp--preset--font-family--display);font-weight:400;letter-spacing:-0.025em;line-height:1.0;font-size:clamp(2.5rem, 8vw, 7rem)">I write about things that deserve a <span class="jour-italic">second look.</span></h1>
			<!-- /wp:heading -->

			<!-- Mono metadata row -->
			<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50)">
				<!-- wp:paragraph {"className":"is-style-jour-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-jour-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:600">Based — London / Dhaka</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"is-style-jour-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-jour-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:600">Writing independently since 2014</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 02 — BIOGRAPHY ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Two-column: portrait + long-form bio -->
			<!-- wp:html -->
			<div class="jour-2col" style="grid-template-columns: 1fr; gap: 2.5rem;">
				<div class="jour-bio-portrait">
					<figure class="wp-block-image" style="margin:0;">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/journal/journal-portrait.png' ); ?>" alt="Editorial portrait of the writer — warm natural light, neutral background, considered" style="aspect-ratio:4/5;object-fit:cover;width:100%;display:block;" loading="lazy">
					</figure>
					<p class="jour-caption" style="margin-top:0.85rem;">Fig. 01 — In the studio, late afternoon.</p>
				</div>
				<div class="jour-bio-body" style="max-width: 60ch;">
					<p class="jour-dropcap" style="font-family:var(--wp--preset--font-family--display,'Newsreader',serif);font-size:1.1875rem;line-height:1.75;color:var(--jour-ink);margin:0 0 1.5rem;">I began writing the way most writers begin — quietly, and without anyone watching. For years I kept a notebook of small observations: the way light falls in a particular room, the texture of a city at six in the morning, the strange dignity of objects that have been used for a long time. The journal, when it finally arrived, was an extension of that notebook — a place to think in public, slowly, and to take ideas seriously enough to give them room to breathe.</p>
					<p style="font-family:var(--wp--preset--font-family--body,'Inter',sans-serif);font-size:1.0625rem;line-height:1.75;color:var(--jour-ink);margin:0 0 1.5rem;max-width:58ch;">My work moves between essays, criticism and short-form notes, with a recurring set of concerns: attention and what we spend it on, design and the way it shapes everyday life, technology and the quiet assumptions buried inside it, and the slow craft of making things — sentences, rooms, habits — that hold up over time. I am drawn to the second look, the longer view, the question that arrives after the obvious answer has been given.</p>
					<p style="font-family:var(--wp--preset--font-family--body,'Inter',sans-serif);font-size:1.0625rem;line-height:1.75;color:var(--jour-ink);margin:0 0 1.5rem;max-width:58ch;">I write independently, which means I get to choose what I spend my attention on. Most essays begin as a question I cannot quite answer — a sentence in a book, an object on a shelf, a phrase someone uses without thinking — and end somewhere I did not expect to arrive. The discipline is not in the writing itself but in the willingness to keep following the idea when it would be easier to stop.</p>
					<p style="font-family:var(--wp--preset--font-family--body,'Inter',sans-serif);font-size:1.0625rem;line-height:1.75;color:var(--jour-ink);margin:0 0 1.5rem;max-width:58ch;">I divide my time between London and Dhaka, two cities that have almost nothing in common and almost everything to teach each other. I read more than I write, walk more than I read, and believe that the best ideas usually arrive when you are not looking for them — which is, perhaps, the only honest reason to keep a notebook at all.</p>
					<p style="margin-top:2rem;font-family:var(--wp--preset--font-family--display,'Newsreader',serif);font-style:italic;font-size:1.0625rem;"><a href="/contact">Get in touch →</a></p>
				</div>
			</div>
			<style scoped>
				@media (min-width: 800px) {
					.wp-block-godevs-demo-journal .jour-bio-portrait { max-width: 420px; }
				}
			</style>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 03 — PHILOSOPHY / QUOTE ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|120","bottom":"var:preset|spacing|120","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--120);padding-bottom:var(--wp--preset--spacing--120);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Quote -->
			<!-- wp:paragraph {"className":"jour-quote","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 5vw, 4rem)","lineHeight":"1.15","letterSpacing":"-0.02em","fontWeight":"400"}}} -->
			<p class="jour-quote" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 5vw, 4rem);line-height:1.15;letter-spacing:-0.02em;font-weight:400;max-width:24ch">Writing is thinking made visible — slow enough to be <span class="jour-italic">honest.</span></p>
			<!-- /wp:paragraph -->

			<!-- Attribution -->
			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}},"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);margin-top:var(--wp--preset--spacing--50);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:600">— the writer</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 04 — PUBLICATIONS ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Section header -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
				<!-- wp:paragraph {"className":"is-style-jour-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-jour-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:600">— Selected Publications</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"className":"jour-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 5vw, 4rem)","lineHeight":"1.05","letterSpacing":"-0.025em","fontWeight":"400"}}} -->
				<h2 class="wp-block-heading jour-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 5vw, 4rem);line-height:1.05;letter-spacing:-0.025em;font-weight:400">Books &amp; <span class="jour-italic">writing.</span></h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- Publications grid -->
			<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
			<div class="wp-block-columns">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:html -->
					<a class="jour-book" href="#">
						<div class="jour-book-image">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/journal/journal-book-1.png' ); ?>" alt="The Quiet Shape of Things — minimal hardcover book on warm paper surface" loading="lazy">
						</div>
						<div>
							<p class="jour-book-title">The Quiet Shape of Things</p>
							<p class="jour-book-meta">Essays · 2026</p>
						</div>
					</a>
					<!-- /wp:html -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:html -->
					<a class="jour-book" href="#">
						<div class="jour-book-image">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/journal/journal-book-2.png' ); ?>" alt="Ways of Looking — stack of minimal books, warm tones" loading="lazy">
						</div>
						<div>
							<p class="jour-book-title">Ways of Looking</p>
							<p class="jour-book-meta">Notes · 2025</p>
						</div>
					</a>
					<!-- /wp:html -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:html -->
					<a class="jour-book" href="#">
						<div class="jour-book-image">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/journal/journal-book-3.png' ); ?>" alt="Small Observations — open book pages with warm light" loading="lazy">
						</div>
						<div>
							<p class="jour-book-title">Small Observations</p>
							<p class="jour-book-meta">Collected Writing · 2024</p>
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

	<!-- ═══ 05 — SELECTED PRESS / FEATURED IN ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Press — 30/70 columns -->
			<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
			<div class="wp-block-columns">
				<!-- wp:column {"width":"30%"} -->
				<div class="wp-block-column" style="flex-basis:30%">
					<!-- wp:paragraph {"className":"is-style-jour-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="is-style-jour-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:600">— Featured In</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":"70%"} -->
				<div class="wp-block-column" style="flex-basis:70%">
					<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.5rem, 3vw, 2rem)","lineHeight":"1.8","fontWeight":"400"}}} -->
					<p style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.5rem, 3vw, 2rem);line-height:1.8;font-weight:400"><a href="#">The Atlantic</a> · <a href="#">Kinfolk</a> · <a href="#">Aeon</a> · <a href="#">Longreads</a> · <a href="#">3:AM Magazine</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 06 — CLOSING CTA ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Closing line -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"clamp(1.5rem, 3.5vw, 2.5rem)","lineHeight":"1.3","letterSpacing":"-0.01em"}}} -->
			<p style="font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:clamp(1.5rem, 3.5vw, 2.5rem);line-height:1.3;letter-spacing:-0.01em;max-width:42ch">If something here resonates — a piece, a question, an idea worth following — <a href="/contact">write to me</a>.</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- Footer -->
	<!-- wp:template-part {"slug":"footer-journal","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
