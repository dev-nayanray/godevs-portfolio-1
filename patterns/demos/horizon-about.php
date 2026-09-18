<?php
/**
 * Title: Demo - Horizon (Photography) - About
 * Slug: godevs-portfolio/demo-horizon-about
 * Description: HORIZON about - photographer biography. Recommended style variation: Horizon.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, horizon, about, photographer
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-horizon","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-horizon alignfull">

	<!-- Header -->
	<!-- wp:template-part {"slug":"header-horizon","theme":"godevs-portfolio","tagName":"header"} /-->

	<!-- === 01 - HERO === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Eyebrow + meta row -->
			<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40)">
				<!-- wp:paragraph {"className":"is-style-hor-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-hor-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500">- About</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"is-style-hor-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.6875rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-hor-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">Alex Morgan · Lisbon · Since 2014</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- H1 -->
			<!-- wp:heading {"level":1,"className":"hor-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 7vw, 6.5rem)","lineHeight":"1.0","letterSpacing":"-0.035em","fontWeight":"600"}}} -->
			<h1 class="wp-block-heading hor-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 7vw, 6.5rem);line-height:1.0;letter-spacing:-0.035em;font-weight:600">I photograph places, people and the spaces between them.</h1>
			<!-- /wp:heading -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 02 - BIOGRAPHY (portrait + bio) === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- wp:html -->
			<div class="hor-2col hor-bio">
				<div class="hor-bio-portrait">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/horizon/horizon-portrait.webp' ); ?>" alt="Portrait of Alex Morgan - travel photographer in field clothing, soft natural light, contemplative" style="width:100%;height:100%;object-fit:cover;display:block;aspect-ratio:4/5" loading="lazy">
					<p class="hor-caption" style="margin-top:0.75rem">Fig. 01 - In the studio, Lisbon, 2026.</p>
				</div>
				<div class="hor-bio-body">
					<!-- wp:paragraph -->
					<p style="font-family:var(--wp--preset--font-family--serif);font-style:italic;font-size:clamp(1.25rem, 2vw, 1.5rem);line-height:1.5;color:var(--wp--preset--color--muted);margin-bottom:1.5rem">A travel photographer working in editorial, destination and brand stories - based in Lisbon, working worldwide.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph -->
					<p style="font-size:var(--wp--preset--font-size--medium);line-height:1.75;margin-bottom:1.25rem">I started photographing travel by accident - a borrowed camera on a long trip through the Indian Himalaya in 2014, with no formal training and no plan beyond the next pass. By the time the trip ended I had learned that the kind of attention photography demanded was the same kind of attention I had always wanted to bring to a place. I have been doing it ever since.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph -->
					<p style="font-size:var(--wp--preset--font-size--medium);line-height:1.75;margin-bottom:1.25rem">The work sits somewhere between editorial and documentary. I am interested in the quiet edges of a place - the hour between the weather changing and the light arriving, the side street that everyone walks past, the door that is half-open. My clients tend to be people who want restraint, not spectacle; presence, not performance.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph -->
					<p style="font-size:var(--wp--preset--font-size--medium);line-height:1.75;margin-bottom:1.25rem">I shoot primarily on a Leica Q3 and a Fuji GFX for medium format, with a small kit of primes. I edit deliberately and slowly. I travel light. I prefer walking to driving and mornings to afternoons.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph -->
					<p style="font-size:var(--wp--preset--font-size--medium);line-height:1.75">When I am not on assignment I am usually in Lisbon - reading, walking the river, or working on the long-form journal essays that I publish here on the site. I take on roughly twelve assignments a year and am selective about what I say yes to. If the work feels right, I will make the time.</p>
					<!-- /wp:paragraph -->
				</div>
			</div>
			<style>
				@media (min-width:800px){
					.wp-block-godevs-demo-horizon .hor-bio-portrait{max-width:420px}
				}
			</style>
			<!-- /wp:html -->

			<!-- Bio CTA -->
			<!-- wp:html -->
			<div style="margin-top:var(--wp--preset--spacing--60)">
				<a class="hor-link" href="/contact">Start a conversation <span class="hor-arrow" aria-hidden="true">→</span></a>
			</div>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 03 - PHILOSOPHY (large quote) === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|120","bottom":"var:preset|spacing|120","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--120);padding-bottom:var(--wp--preset--spacing--120);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"className":"is-style-hor-label","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}},"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="is-style-hor-label has-text-color" style="color:var(--wp--preset--color--muted);margin-bottom:var(--wp--preset--spacing--40);font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500">- Philosophy</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"hor-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.25rem, 6vw, 5rem)","lineHeight":"1.05","letterSpacing":"-0.035em","fontWeight":"600"}}} -->
			<p class="hor-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.25rem, 6vw, 5rem);line-height:1.05;letter-spacing:-0.035em;font-weight:600;max-width:24ch">Travel changes how we see <span class="hor-accent-text">familiar things.</span></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"is-style-hor-label","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}},"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="is-style-hor-label has-text-color" style="color:var(--wp--preset--color--muted);margin-top:var(--wp--preset--spacing--50);font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500">- Alex Morgan, on the work</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 04 - ASSIGNMENTS / AVAILABLE FOR === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Section header (30/70) -->
			<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
			<div class="wp-block-columns">
				<!-- wp:column {"width":"30%"} -->
				<div class="wp-block-column" style="flex-basis:30%">
					<!-- wp:paragraph {"className":"is-style-hor-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="is-style-hor-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500">- Available For</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":"70%"} -->
				<div class="wp-block-column" style="flex-basis:70%">
					<!-- wp:heading {"level":2,"className":"hor-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 5vw, 4rem)","lineHeight":"1.0","letterSpacing":"-0.03em","fontWeight":"600","textTransform":"uppercase"}}} -->
					<h2 class="wp-block-heading hor-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 5vw, 4rem);line-height:1.0;letter-spacing:-0.03em;font-weight:600;text-transform:uppercase">Assignments.</h2>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- Assignments list -->
			<!-- wp:html -->
			<div class="hor-assignments" aria-label="Assignment types" style="display:grid;grid-template-columns:1fr;gap:0;border-top:1px solid var(--wp--preset--color--line);margin-top:2rem">
				<a class="hor-assignment-row" href="/contact" style="display:grid;grid-template-columns:3rem 1fr auto;gap:1.5rem;align-items:center;padding:1.5rem 0;border-bottom:1px solid var(--wp--preset--color--line);text-decoration:none;color:var(--wp--preset--color--foreground);transition:padding 0.4s cubic-bezier(0.2,0.8,0.2,1)">
					<span style="font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;color:var(--wp--preset--color--muted)">01</span>
					<span style="font-family:var(--wp--preset--font-family--display);font-weight:600;font-size:clamp(1.25rem,2.5vw,1.75rem);letter-spacing:-0.02em;line-height:1.1">Editorial</span>
					<span aria-hidden="true" style="font-size:1.25rem;color:var(--wp--preset--color--muted)">→</span>
				</a>
				<a class="hor-assignment-row" href="/contact" style="display:grid;grid-template-columns:3rem 1fr auto;gap:1.5rem;align-items:center;padding:1.5rem 0;border-bottom:1px solid var(--wp--preset--color--line);text-decoration:none;color:var(--wp--preset--color--foreground);transition:padding 0.4s cubic-bezier(0.2,0.8,0.2,1)">
					<span style="font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;color:var(--wp--preset--color--muted)">02</span>
					<span style="font-family:var(--wp--preset--font-family--display);font-weight:600;font-size:clamp(1.25rem,2.5vw,1.75rem);letter-spacing:-0.02em;line-height:1.1">Travel Campaigns</span>
					<span aria-hidden="true" style="font-size:1.25rem;color:var(--wp--preset--color--muted)">→</span>
				</a>
				<a class="hor-assignment-row" href="/contact" style="display:grid;grid-template-columns:3rem 1fr auto;gap:1.5rem;align-items:center;padding:1.5rem 0;border-bottom:1px solid var(--wp--preset--color--line);text-decoration:none;color:var(--wp--preset--color--foreground);transition:padding 0.4s cubic-bezier(0.2,0.8,0.2,1)">
					<span style="font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;color:var(--wp--preset--color--muted)">03</span>
					<span style="font-family:var(--wp--preset--font-family--display);font-weight:600;font-size:clamp(1.25rem,2.5vw,1.75rem);letter-spacing:-0.02em;line-height:1.1">Destination Stories</span>
					<span aria-hidden="true" style="font-size:1.25rem;color:var(--wp--preset--color--muted)">→</span>
				</a>
				<a class="hor-assignment-row" href="/contact" style="display:grid;grid-template-columns:3rem 1fr auto;gap:1.5rem;align-items:center;padding:1.5rem 0;border-bottom:1px solid var(--wp--preset--color--line);text-decoration:none;color:var(--wp--preset--color--foreground);transition:padding 0.4s cubic-bezier(0.2,0.8,0.2,1)">
					<span style="font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;color:var(--wp--preset--color--muted)">04</span>
					<span style="font-family:var(--wp--preset--font-family--display);font-weight:600;font-size:clamp(1.25rem,2.5vw,1.75rem);letter-spacing:-0.02em;line-height:1.1">Hospitality</span>
					<span aria-hidden="true" style="font-size:1.25rem;color:var(--wp--preset--color--muted)">→</span>
				</a>
				<a class="hor-assignment-row" href="/contact" style="display:grid;grid-template-columns:3rem 1fr auto;gap:1.5rem;align-items:center;padding:1.5rem 0;border-bottom:1px solid var(--wp--preset--color--line);text-decoration:none;color:var(--wp--preset--color--foreground);transition:padding 0.4s cubic-bezier(0.2,0.8,0.2,1)">
					<span style="font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;color:var(--wp--preset--color--muted)">05</span>
					<span style="font-family:var(--wp--preset--font-family--display);font-weight:600;font-size:clamp(1.25rem,2.5vw,1.75rem);letter-spacing:-0.02em;line-height:1.1">Tourism</span>
					<span aria-hidden="true" style="font-size:1.25rem;color:var(--wp--preset--color--muted)">→</span>
				</a>
				<a class="hor-assignment-row" href="/contact" style="display:grid;grid-template-columns:3rem 1fr auto;gap:1.5rem;align-items:center;padding:1.5rem 0;border-bottom:1px solid var(--wp--preset--color--line);text-decoration:none;color:var(--wp--preset--color--foreground);transition:padding 0.4s cubic-bezier(0.2,0.8,0.2,1)">
					<span style="font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;color:var(--wp--preset--color--muted)">06</span>
					<span style="font-family:var(--wp--preset--font-family--display);font-weight:600;font-size:clamp(1.25rem,2.5vw,1.75rem);letter-spacing:-0.02em;line-height:1.1">Brand Photography</span>
					<span aria-hidden="true" style="font-size:1.25rem;color:var(--wp--preset--color--muted)">→</span>
				</a>
				<a class="hor-assignment-row" href="/contact" style="display:grid;grid-template-columns:3rem 1fr auto;gap:1.5rem;align-items:center;padding:1.5rem 0;border-bottom:1px solid var(--wp--preset--color--line);text-decoration:none;color:var(--wp--preset--color--foreground);transition:padding 0.4s cubic-bezier(0.2,0.8,0.2,1)">
					<span style="font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;color:var(--wp--preset--color--muted)">07</span>
					<span style="font-family:var(--wp--preset--font-family--display);font-weight:600;font-size:clamp(1.25rem,2.5vw,1.75rem);letter-spacing:-0.02em;line-height:1.1">Documentary</span>
					<span aria-hidden="true" style="font-size:1.25rem;color:var(--wp--preset--color--muted)">→</span>
				</a>
				<a class="hor-assignment-row" href="/contact" style="display:grid;grid-template-columns:3rem 1fr auto;gap:1.5rem;align-items:center;padding:1.5rem 0;border-bottom:1px solid var(--wp--preset--color--line);text-decoration:none;color:var(--wp--preset--color--foreground);transition:padding 0.4s cubic-bezier(0.2,0.8,0.2,1)">
					<span style="font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;color:var(--wp--preset--color--muted)">08</span>
					<span style="font-family:var(--wp--preset--font-family--display);font-weight:600;font-size:clamp(1.25rem,2.5vw,1.75rem);letter-spacing:-0.02em;line-height:1.1">Creative Direction</span>
					<span aria-hidden="true" style="font-size:1.25rem;color:var(--wp--preset--color--muted)">→</span>
				</a>
			</div>
			<style>
				.wp-block-godevs-demo-horizon .hor-assignment-row:hover{padding-left:1rem}
				.wp-block-godevs-demo-horizon .hor-assignment-row:hover span[aria-hidden="true"]{color:var(--wp--preset--color--accent)}
			</style>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 05 - SELECTED CLIENTS & PUBLICATIONS === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
			<div class="wp-block-columns">
				<!-- wp:column {"width":"30%"} -->
				<div class="wp-block-column" style="flex-basis:30%">
					<!-- wp:paragraph {"className":"is-style-hor-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="is-style-hor-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500">- Selected Clients &amp; Publications (demo)</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":"70%"} -->
				<div class="wp-block-column" style="flex-basis:70%">
					<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.5rem, 3vw, 2rem)","lineHeight":"1.8","fontWeight":"500","letterSpacing":"-0.015em"}}} -->
					<p style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.5rem, 3vw, 2rem);line-height:1.8;font-weight:500;letter-spacing:-0.015em"><a href="#" style="text-decoration:none;color:var(--wp--preset--color--foreground)">Northline</a> · <a href="#" style="text-decoration:none;color:var(--wp--preset--color--foreground)">Field Journal</a> · <a href="#" style="text-decoration:none;color:var(--wp--preset--color--foreground)">Atlas House</a> · <a href="#" style="text-decoration:none;color:var(--wp--preset--color--foreground)">Wander</a> · <a href="#" style="text-decoration:none;color:var(--wp--preset--color--foreground)">Terrain</a> · <a href="#" style="text-decoration:none;color:var(--wp--preset--color--foreground)">Monument</a> · <a href="#" style="text-decoration:none;color:var(--wp--preset--color--foreground)">Outside North</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 06 - CTA === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|120","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--120);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"className":"hor-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 7vw, 6rem)","lineHeight":"0.98","letterSpacing":"-0.04em","fontWeight":"600","textTransform":"uppercase"}}} -->
			<p class="hor-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 7vw, 6rem);line-height:0.98;letter-spacing:-0.04em;font-weight:600;text-transform:uppercase;max-width:14ch"><a href="/contact" style="text-decoration:none;color:var(--wp--preset--color--foreground)">Let's go somewhere <span class="hor-accent-text" aria-hidden="true">→</span></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- Footer -->
	<!-- wp:template-part {"slug":"footer-horizon","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
