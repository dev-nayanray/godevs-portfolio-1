<?php
/**
 * Title: Demo — Journal (Writing) — Article
 * Slug: godevs-portfolio/demo-journal-article
 * Description: JOURNAL single article — immersive long-form reading. Recommended style variation: Journal.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, journal, article, essay, reading
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

	<!-- ═══ 01 — ARTICLE HERO (typography only) ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"var(--wp--style--global--wide-size)"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Eyebrow / metadata -->
			<!-- wp:paragraph {"className":"is-style-jour-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
			<p class="is-style-jour-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:600">Essay · September 2026 · 8 min read</p>
			<!-- /wp:paragraph -->

			<!-- Article title -->
			<!-- wp:heading {"level":1,"className":"jour-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"400","letterSpacing":"-0.025em","lineHeight":"1.02","fontSize":"clamp(2.5rem, 7vw, 7rem)"}},"layout":{"selfStretch":"fit","flexSize":"18ch"}} -->
			<h1 class="wp-block-heading jour-display" style="font-family:var(--wp--preset--font-family--display);font-weight:400;letter-spacing:-0.025em;line-height:1.02;font-size:clamp(2.5rem, 7vw, 7rem);max-width:18ch">The Things We Notice When Everything Gets <span class="jour-italic">Quiet</span></h1>
			<!-- /wp:heading -->

			<!-- Metadata row -->
			<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:paragraph {"className":"is-style-jour-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-jour-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:600">Essay · 04.09.26 · By the Writer</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"is-style-jour-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-jour-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:600">Journal · Issue 09</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 02 — ARTICLE LEAD ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"constrained","contentSize":"65ch"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"48ch"}} -->
		<div class="wp-block-group alignwide">

			<!-- Lead paragraph — medium serif italic -->
			<!-- wp:paragraph {"className":"jour-lead","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"clamp(1.375rem, 2.4vw, 1.875rem)","lineHeight":"1.4","letterSpacing":"-0.005em","fontWeight":"400"}},"layout":{"selfStretch":"fit","flexSize":"42ch"}} -->
			<p class="jour-lead" style="font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:clamp(1.375rem, 2.4vw, 1.875rem);line-height:1.4;letter-spacing:-0.005em;font-weight:400;max-width:42ch">When the noise recedes, the small details — the quality of light, the texture of a surface, the rhythm of a day — become visible again. This is an essay about what we miss when we move too fast, and what returns when we let the room go quiet.</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 03 — FULL-WIDTH HERO IMAGE ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Hero image (21/9) -->
			<!-- wp:image {"aspectRatio":"21/9","scale":"cover"} -->
			<figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/journal/journal-essay.webp' ); ?>" alt="Featured essay image — vast quiet interior with a single chair by a window, warm afternoon light, contemplative" style="aspect-ratio:21/9;object-fit:cover" loading="lazy"/></figure>
			<!-- /wp:image -->

			<!-- Caption -->
			<!-- wp:paragraph {"className":"jour-caption","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"0.8125rem","lineHeight":"1.5"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="jour-caption has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:0.8125rem;line-height:1.5">Fig. 01 — A room in late afternoon, when the light moves slowly across the floor and the day begins to settle. Photograph by the author.</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 04 — BODY CONTENT (constrained reading-width) ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"65ch"}} -->
	<section class="wp-block-group alignfull" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group">

			<!-- Drop cap opening paragraph -->
			<!-- wp:paragraph {"className":"jour-dropcap","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.1875rem","lineHeight":"1.75","fontWeight":"400"},"color":{"text":"var:preset|color|foreground"}}} -->
			<p class="jour-dropcap has-text-color" style="color:var(--wp--preset--color--foreground);font-family:var(--wp--preset--font-family--display);font-size:1.1875rem;line-height:1.75;font-weight:400">There is a particular kind of attention that arrives only when the noise recedes. It comes not from thinking harder, but from giving the world room to appear — the way a photograph resolves when you stop trying to see and simply look. For most of the last year, I have been trying to learn this. Not as a discipline, but as a kind of permission.</p>
			<!-- /wp:paragraph -->

			<!-- Body paragraph 02 -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.1875rem","lineHeight":"1.75","fontWeight":"400"},"color":{"text":"var:preset|color|foreground"}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--foreground);font-family:var(--wp--preset--font-family--display);font-size:1.1875rem;line-height:1.75;font-weight:400">I had been living in a flat that looked out onto a busy street. The room itself was quiet enough, but the city pressed in at the edges — the slow idle of buses, the bleating crosswalk, the neighbours' televisions. I worked, mostly. I read in fragments. I noticed very little, and what I noticed was usually a problem.</p>
			<!-- /wp:paragraph -->

			<!-- Body paragraph 03 -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.1875rem","lineHeight":"1.75","fontWeight":"400"},"color":{"text":"var:preset|color|foreground"}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--foreground);font-family:var(--wp--preset--font-family--display);font-size:1.1875rem;line-height:1.75;font-weight:400">Then, for a week in February, the street was closed for repairs. The first morning I woke convinced something had broken — that the city had stopped, or I had. I sat at the window with a coffee and waited for the noise to start again. It did not. And slowly, in the space it had occupied, other things arrived: the long slide of light across the floor, the small click of the radiator, the way a chair holds the shape of the person who last sat in it.</p>
			<!-- /wp:paragraph -->

			<!-- Pull quote within text -->
			<!-- wp:paragraph {"className":"jour-quote","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.75rem, 3.5vw, 2.5rem)","lineHeight":"1.2","letterSpacing":"-0.02em","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"selfStretch":"fit","flexSize":"26ch"}} -->
			<p class="jour-quote" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 3.5vw, 2.5rem);line-height:1.2;letter-spacing:-0.02em;font-weight:400;max-width:26ch;margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)">Attention, it turns out, is not a muscle. It is a <span class="jour-italic">weather</span> — something that arrives when conditions allow.</p>
			<!-- /wp:paragraph -->

			<!-- Subheading -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.75rem, 3.5vw, 2.5rem)","lineHeight":"1.15","letterSpacing":"-0.02em","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|20"}}}} -->
			<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 3.5vw, 2.5rem);line-height:1.15;letter-spacing:-0.02em;font-weight:400;margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--20)">A grammar of <span style="font-style:italic">small things</span></h2>
			<!-- /wp:heading -->

			<!-- Body paragraph 04 -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.1875rem","lineHeight":"1.75","fontWeight":"400"},"color":{"text":"var:preset|color|foreground"}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--foreground);font-family:var(--wp--preset--font-family--display);font-size:1.1875rem;line-height:1.75;font-weight:400">I started keeping a list. Not of what I thought, but of what I noticed — a private grammar of small things. The way the kettle clicks twice before it begins to pour. The colour of the wall in the half-hour before the lamp goes on. The particular silence of a room in which someone has just been reading.</p>
			<!-- /wp:paragraph -->

			<!-- Body paragraph 05 -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.1875rem","lineHeight":"1.75","fontWeight":"400"},"color":{"text":"var:preset|color|foreground"}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--foreground);font-family:var(--wp--preset--font-family--display);font-size:1.1875rem;line-height:1.75;font-weight:400">It would be easy to call this slowness, but that isn't quite right. Slowness suggests a deficit — a thing you do when you cannot do faster. What I found, that week, was the opposite: a kind of speed inside the quiet, an attention so fine-grained it felt almost like memory. The room was not slower. I was simply present enough to notice how much of it there had been all along.</p>
			<!-- /wp:paragraph -->

			<!-- Body paragraph 06 — closing -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.1875rem","lineHeight":"1.75","fontWeight":"400"},"color":{"text":"var:preset|color|foreground"}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--foreground);font-family:var(--wp--preset--font-family--display);font-size:1.1875rem;line-height:1.75;font-weight:400">The street reopened, eventually. The buses returned, the crosswalks resumed their liturgy, the televisions leaked back through the walls. But something had moved. I had learned, briefly, to read the room — and a room, it turns out, will tell you most of what you need to know, if you are willing to let it go quiet long enough to hear.</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 05 — FILED UNDER ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"constrained","contentSize":"65ch"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
		<div class="wp-block-columns">
			<!-- wp:column {"width":"30%"} -->
			<div class="wp-block-column" style="flex-basis:30%">
				<!-- wp:paragraph {"className":"is-style-jour-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-jour-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:600">Filed under</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"width":"70%"} -->
			<div class="wp-block-column" style="flex-basis:70%">
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.125rem","lineHeight":"1.8"}}} -->
				<p style="font-family:var(--wp--preset--font-family--display);font-size:1.125rem;line-height:1.8"><a href="#">Essay</a> · <a href="#">Culture</a> · <a href="#">Attention</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 06 — AUTHOR BIO ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"constrained","contentSize":"65ch"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
		<div class="wp-block-columns are-vertically-aligned-center">
			<!-- wp:column {"verticalAlignment":"center","width":"22%"} -->
			<div class="wp-block-column" style="flex-basis:22%">
				<!-- wp:image {"aspectRatio":"1/1","scale":"cover"} -->
				<figure class="wp-block-image" style="max-width:96px"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/journal/journal-portrait.webp' ); ?>" alt="Portrait of the writer — editorial black and white, warm natural light, thoughtful expression" style="aspect-ratio:1/1;object-fit:cover;max-width:96px" loading="lazy"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"center","width":"78%"} -->
			<div class="wp-block-column" style="flex-basis:78%">
				<!-- wp:paragraph {"className":"is-style-jour-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-jour-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:600">— Written by</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.5rem, 3vw, 2rem)","lineHeight":"1.15","letterSpacing":"-0.02em","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|20"}}}} -->
				<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.5rem, 3vw, 2rem);line-height:1.15;letter-spacing:-0.02em;font-weight:400;margin-top:var(--wp--preset--spacing--10);margin-bottom:var(--wp--preset--spacing--20)">The Writer</h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.0625rem","lineHeight":"1.65"},"color":{"text":"var:preset|color|muted"}},"layout":{"selfStretch":"fit","flexSize":"58ch"}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--display);font-size:1.0625rem;line-height:1.65;max-width:58ch">An independent writer based between London and Dhaka, working slowly on essays, observations and conversations about design, culture and the quiet texture of everyday life. This journal is where most of that thinking happens in public.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}},"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"1.0625rem"}}} -->
				<p style="margin-top:var(--wp--preset--spacing--20);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:1.0625rem"><a href="/about">More about me →</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 07 — NEXT ARTICLE ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|120","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--120);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Eyebrow -->
			<!-- wp:paragraph {"className":"is-style-jour-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
			<p class="is-style-jour-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:600">— Next · Continue reading</p>
			<!-- /wp:paragraph -->

			<!-- Next article title (large serif italic arrow link) -->
			<!-- wp:paragraph {"className":"jour-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 6vw, 4.5rem)","lineHeight":"1.05","letterSpacing":"-0.025em","fontWeight":"400"}},"layout":{"selfStretch":"fit","flexSize":"22ch"}} -->
			<p class="jour-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 6vw, 4.5rem);line-height:1.05;letter-spacing:-0.025em;font-weight:400;max-width:22ch"><a href="#" style="color:inherit;text-decoration:none;border-bottom:none;">Next — What We Mean When We Say <span class="jour-italic">Simple</span> <span style="font-style:italic;font-weight:400;">→</span></a></p>
			<!-- /wp:paragraph -->

			<!-- Small meta -->
			<!-- wp:paragraph {"className":"is-style-jour-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
			<p class="is-style-jour-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:600;margin-top:var(--wp--preset--spacing--30)">Notes · 28.08.26 · 5 min read</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- Footer -->
	<!-- wp:template-part {"slug":"footer-journal","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
