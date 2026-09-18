<?php
/**
 * Title: Demo - Horizon (Photography) - Journey
 * Slug: godevs-portfolio/demo-horizon-journey
 * Description: HORIZON single journey - Patagonia, immersive travel story. Recommended style variation: Horizon.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, horizon, journey, patagonia, travel
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

	<!-- === 01 - JOURNEY HERO === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Eyebrow + meta row -->
			<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40)">
				<!-- wp:paragraph {"className":"is-style-hor-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
				<p class="is-style-hor-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500">Journey / 2026</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"is-style-hor-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.6875rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-hor-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">Argentina + Chile · 2026 · Expedition · 18 days</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- H1 -->
			<!-- wp:heading {"level":1,"className":"hor-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.75rem, 10vw, 10rem)","lineHeight":"0.96","letterSpacing":"-0.04em","fontWeight":"600","textTransform":"uppercase"}}} -->
			<h1 class="wp-block-heading hor-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.75rem, 10vw, 10rem);line-height:0.96;letter-spacing:-0.04em;font-weight:600;text-transform:uppercase">Patagonia</h1>
			<!-- /wp:heading -->

			<!-- Supporting line -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|serif","fontStyle":"italic","fontSize":"clamp(1.25rem, 2.5vw, 1.75rem)","lineHeight":"1.4","fontWeight":"400"}}} -->
			<p style="font-family:var(--wp--preset--font-family--serif);font-style:italic;font-size:clamp(1.25rem, 2.5vw, 1.75rem);line-height:1.4;font-weight:400;max-width:36ch">Where the mountains meet the sky.</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 02 - FULL-WIDTH HERO IMAGE === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:image {"align":"wide","aspectRatio":"21/9","scale":"cover"} -->
			<figure class="wp-block-image alignwide"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/horizon/horizon-patagonia.webp' ); ?>" alt="Patagonia - granite spires at dawn over a glacial lake, Fitz Roy range, cinematic wide" style="aspect-ratio:21/9;object-fit:cover" loading="eager"/></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"className":"hor-caption","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.6875rem","letterSpacing":"0.06em"}}} -->
			<p class="hor-caption" style="font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.06em">Fig. 01 - First light on the Fitz Roy range, El Chaltén, Argentina.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 03 - INTRODUCTION (2-col with journey facts) === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- wp:html -->
			<div class="hor-2col">
				<div>
					<p style="font-family:var(--wp--preset--font-family--serif);font-style:italic;font-size:clamp(1.25rem, 2vw, 1.625rem);line-height:1.45;max-width:42ch">Eighteen days along the southern edge of the continent - from the wind-scoured steppe to the granite spires of Fitz Roy and Torres del Paine. This is a journey about scale, weather, and the kind of patience the mountains demand.</p>
				</div>
				<div>
					<p class="is-style-hor-label" style="font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500;color:var(--wp--preset--color--muted);margin-bottom:var(--wp--preset--spacing--30)">- Journey Facts</p>
					<dl style="display:grid;grid-template-columns:auto 1fr;gap:0.85rem 1.5rem;font-family:var(--wp--preset--font-family--mono);font-size:0.8125rem;line-height:1.6">
						<dt style="color:var(--wp--preset--color--muted);letter-spacing:0.06em;text-transform:uppercase;font-size:0.6875rem">Location</dt><dd style="margin:0;color:var(--wp--preset--color--foreground)">Patagonia</dd>
						<dt style="color:var(--wp--preset--color--muted);letter-spacing:0.06em;text-transform:uppercase;font-size:0.6875rem">Country</dt><dd style="margin:0;color:var(--wp--preset--color--foreground)">Argentina + Chile</dd>
						<dt style="color:var(--wp--preset--color--muted);letter-spacing:0.06em;text-transform:uppercase;font-size:0.6875rem">Year</dt><dd style="margin:0;color:var(--wp--preset--color--foreground)">2026</dd>
						<dt style="color:var(--wp--preset--color--muted);letter-spacing:0.06em;text-transform:uppercase;font-size:0.6875rem">Duration</dt><dd style="margin:0;color:var(--wp--preset--color--foreground)">18 days</dd>
						<dt style="color:var(--wp--preset--color--muted);letter-spacing:0.06em;text-transform:uppercase;font-size:0.6875rem">Category</dt><dd style="margin:0;color:var(--wp--preset--color--foreground)">Expedition · Mountains</dd>
						<dt style="color:var(--wp--preset--color--muted);letter-spacing:0.06em;text-transform:uppercase;font-size:0.6875rem">Coordinates</dt><dd style="margin:0;color:var(--wp--preset--color--foreground)">49°20′S 73°02′W</dd>
					</dl>
				</div>
			</div>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 04 - THE JOURNEY (story body) === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"720px"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Section header -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
				<!-- wp:paragraph {"className":"is-style-hor-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-hor-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500">- The Journey</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"className":"hor-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.25rem, 6vw, 5rem)","lineHeight":"0.98","letterSpacing":"-0.04em","fontWeight":"600","textTransform":"uppercase"}}} -->
				<h2 class="wp-block-heading hor-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.25rem, 6vw, 5rem);line-height:0.98;letter-spacing:-0.04em;font-weight:600;text-transform:uppercase">The Journey</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- Body paragraphs -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.75"}}} -->
			<p style="font-size:var(--wp--preset--font-size--medium);line-height:1.75">The flight into El Calafate lands you on the edge of a country that doesn't seem to belong to anyone. The steppe runs flat to the horizon in every direction, bleached yellow by wind and short grass, and the Andes rise from it like a wall someone forgot to finish. From the terminal, you drive west - three hours of gravel and guanaco - until the road bends upward into mountains.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.75"}}} -->
			<p style="font-size:var(--wp--preset--font-size--medium);line-height:1.75">El Chaltén is a town of 2,000 people and one street, built specifically for the eighteen days a year when the weather holds. The other three hundred and forty-seven, you wait. I waited for four of them - reading, walking the river, photographing the cloud that wrapped Fitz Roy like a flag - before the sky finally opened one morning at 5:42 a.m.</p>
			<!-- /wp:paragraph -->

			<!-- Pull quote -->
			<!-- wp:pullquote {"style":{"border":{"width":"0px"},"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.5rem, 3vw, 2.25rem)","lineHeight":"1.2","letterSpacing":"-0.025em","fontWeight":"500"},"color":{"text":"var:preset|color|foreground"}}} -->
			<figure class="wp-block-pullquote has-text-color" style="border-width:0px;color:var(--wp--preset--color--foreground);font-family:var(--wp--preset--font-family--display);font-size:clamp(1.5rem, 3vw, 2.25rem);line-height:1.2;letter-spacing:-0.025em;font-weight:500"><blockquote><p>The mountains don't reward patience. They punish the absence of it.</p></blockquote></figure>
			<!-- /wp:pullquote -->

			<!-- Body paragraphs continued -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.75"}}} -->
			<p style="font-size:var(--wp--preset--font-size--medium);line-height:1.75">Crossing into Chile, the landscape softens. Torres del Paine is younger rock - dark sedimentary spires over pale granite - and the valleys below hold lakes colored by glacial flour in shades of turquoise that don't seem possible at this latitude. I spent a week walking the W circuit, sleeping in refugios, photographing the same three peaks at different hours until the light ran out.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.75"}}} -->
			<p style="font-size:var(--wp--preset--font-size--medium);line-height:1.75">By the eighteenth day I had stopped trying to photograph Patagonia and started trying to be in it. The best frames from the trip are the ones I almost didn't take - mornings when I let the camera stay in the bag and just watched the light arrive.</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 05 - FULL-WIDTH IMAGE WITH CAPTION === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:image {"align":"wide","aspectRatio":"21/9","scale":"cover"} -->
			<figure class="wp-block-image alignwide"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/horizon/horizon-hero.webp' ); ?>" alt="Patagonia - wide vista of granite spires above low cloud, golden alpine light" style="aspect-ratio:21/9;object-fit:cover" loading="lazy"/></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"className":"hor-caption","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.6875rem","letterSpacing":"0.06em"}}} -->
			<p class="hor-caption" style="font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.06em">Fig. 02 - Cloud spilling over the Andes at first light, viewed from the eastern steppe.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 06 - GALLERY === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Section header -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
				<!-- wp:paragraph {"className":"is-style-hor-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-hor-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500">- Gallery · 02 frames</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"className":"hor-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 5vw, 4rem)","lineHeight":"0.98","letterSpacing":"-0.04em","fontWeight":"600","textTransform":"uppercase"}}} -->
				<h2 class="wp-block-heading hor-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 5vw, 4rem);line-height:0.98;letter-spacing:-0.04em;font-weight:600;text-transform:uppercase">Selected Frames</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- Gallery grid -->
			<!-- wp:html -->
			<div class="hor-frames" aria-label="Journey gallery">
				<figure class="hor-frame hf-1">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/horizon/horizon-frame-1.webp' ); ?>" alt="Patagonia - granite spire at dawn above low cloud" loading="lazy">
					<figcaption class="hor-frame-caption">01 - El Chaltén, Argentina</figcaption>
				</figure>
				<figure class="hor-frame hf-4">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/horizon/horizon-frame-3.png' ); ?>" alt="Patagonia - glacial lake reflecting granite peaks at golden hour" loading="lazy">
					<figcaption class="hor-frame-caption">02 - Torres del Paine, Chile</figcaption>
				</figure>
			</div>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 07 - NEXT JOURNEY === -->
	<!-- wp:group {"tagName":"section","className":"hor-dark","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull hor-dark" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"className":"is-style-hor-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
			<p class="is-style-hor-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500">- Next Journey</p>
			<!-- /wp:paragraph -->
			<!-- wp:html -->
			<a class="hor-display" href="/journey-iceland" style="display:block;font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 8vw, 7rem);font-weight:600;letter-spacing:-0.04em;line-height:0.98;text-transform:uppercase;color:var(--wp--preset--color--contrast);text-decoration:none;border-bottom:0;max-width:18ch">Next - Iceland <span class="hor-accent-text" aria-hidden="true">→</span></a>
			<!-- /wp:html -->
			<!-- wp:paragraph {"className":"is-style-hor-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.6875rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|contrast"}}} -->
			<p class="is-style-hor-label has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">Iceland · North Atlantic · 2026 · 21 days</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- Footer -->
	<!-- wp:template-part {"slug":"footer-horizon","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
