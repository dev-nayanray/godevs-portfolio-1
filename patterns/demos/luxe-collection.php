<?php
/**
 * Title: Demo — Luxe (Fashion) — Collection
 * Slug: godevs-portfolio/demo-luxe-collection
 * Description: LUXE single collection — Form, immersive editorial showcase. Recommended style variation: Luxe.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, luxe, collection, lookbook, fashion
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-luxe","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-luxe alignfull">

	<!-- Header -->
	<!-- wp:template-part {"slug":"header-luxe","theme":"godevs-portfolio","tagName":"header"} /-->

	<!-- ═══ 01 — COLLECTION HERO (typography only, no image) ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Top metadata row -->
			<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40)">
				<!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
				<p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">Collection 01 — Form · Spring / Summer 2026</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">Released · March 2026</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- H1 — typography hero -->
			<!-- wp:heading {"level":1,"className":"luxe-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"400","letterSpacing":"-0.03em","lineHeight":"0.92","fontSize":"clamp(3rem, 11vw, 9rem)"}}} -->
			<h1 class="wp-block-heading luxe-display" style="font-family:var(--wp--preset--font-family--display);font-weight:400;letter-spacing:-0.03em;line-height:0.92;font-size:clamp(3rem, 11vw, 9rem)">Form.</h1>
			<!-- /wp:heading -->

			<!-- Mono meta row -->
			<!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.75rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.75rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500;margin-top:var(--wp--preset--spacing--40)">Spring / Summer 2026 · 12 Looks · Ivory &amp; Charcoal · Studio Lumen</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 02 — FULL-BLEED HERO VISUAL ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Large 21/9 image -->
			<!-- wp:image {"align":"wide","aspectRatio":"21/9","scale":"cover"} -->
			<figure class="wp-block-image alignwide"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/luxe/luxe-collection-form.png' ); ?>" alt="FORM collection — campaign image, draped fabric and silhouette study in ivory and charcoal tones, dramatic soft light" style="aspect-ratio:21/9;object-fit:cover" loading="eager"/></figure>
			<!-- /wp:image -->

			<!-- Caption -->
			<!-- wp:paragraph {"className":"luxe-caption","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"0.8125rem"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="luxe-caption has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:0.8125rem">Fig. 01 — Campaign image. Photography by Studio Lumen.</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 03 — STATEMENT + FACTS ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Two-column: wide statement / narrow facts -->
			<!-- wp:html -->
			<div class="luxe-2col is-wide-narrow">
				<div>
					<p class="is-style-luxe-label" style="font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500;color:var(--luxe-muted);margin-bottom:1.5rem;">— Collection Statement</p>
					<p class="luxe-statement" style="font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:clamp(1.5rem, 3.2vw, 2.5rem);line-height:1.25;letter-spacing:-0.01em;font-weight:400;max-width:30ch;margin:0 0 2rem;">A study in proportion, texture and movement — built around the relationship between body, fabric and light.</p>
					<p style="font-size:var(--wp--preset--font-size--medium);line-height:1.75;color:var(--luxe-muted);max-width:48ch;">The opening collection of the practice. Twelve looks, restrained in palette — ivory, charcoal and a single accent of warm gold — generous in form. Each garment considers how fabric falls, how light defines a silhouette, and how restraint creates presence.</p>
				</div>
				<div>
					<p class="is-style-luxe-label" style="font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500;color:var(--luxe-muted);margin-bottom:1.5rem;">— Collection Facts</p>
					<dl class="luxe-credits">
						<div class="luxe-credit-row">
							<dt class="luxe-credit-key">Designer</dt>
							<dd class="luxe-credit-val">Luxe Studio</dd>
						</div>
						<div class="luxe-credit-row">
							<dt class="luxe-credit-key">Season</dt>
							<dd class="luxe-credit-val">Spring / Summer 2026</dd>
						</div>
						<div class="luxe-credit-row">
							<dt class="luxe-credit-key">Year</dt>
							<dd class="luxe-credit-val">2026</dd>
						</div>
						<div class="luxe-credit-row">
							<dt class="luxe-credit-key">Status</dt>
							<dd class="luxe-credit-val">Released · March 2026</dd>
						</div>
						<div class="luxe-credit-row">
							<dt class="luxe-credit-key">Looks</dt>
							<dd class="luxe-credit-val">12</dd>
						</div>
						<div class="luxe-credit-row">
							<dt class="luxe-credit-key">Photographer</dt>
							<dd class="luxe-credit-val">Studio Lumen</dd>
						</div>
						<div class="luxe-credit-row">
							<dt class="luxe-credit-key">Styling</dt>
							<dd class="luxe-credit-val">Maya Rahman</dd>
						</div>
						<div class="luxe-credit-row">
							<dt class="luxe-credit-key">Production</dt>
							<dd class="luxe-credit-val">Atelier 24</dd>
						</div>
					</dl>
				</div>
			</div>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 04 — CONCEPT ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Section header -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
				<!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">— Concept</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"className":"luxe-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.25rem, 5vw, 4rem)","lineHeight":"1.05","letterSpacing":"-0.025em","fontWeight":"400"}}} -->
				<h2 class="wp-block-heading luxe-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.25rem, 5vw, 4rem);line-height:1.05;letter-spacing:-0.025em;font-weight:400">Concept.</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- Concept body — 2 columns -->
			<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
			<div class="wp-block-columns">
				<!-- wp:column {"width":"55%"} -->
				<div class="wp-block-column" style="flex-basis:55%">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.75"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.75">Form began with a single question — what remains when ornament is removed? The collection answers with proportion: the curve of a shoulder, the fall of a sleeve, the line where fabric meets skin.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.75"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.75;margin-top:var(--wp--preset--spacing--30)">Each piece is drawn flat, then resolved on the body. Fabric is sourced from a single mill in Como — a heavyweight wool-silk that holds its shape and softens with wear.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":"45%"} -->
				<div class="wp-block-column" style="flex-basis:45%">
					<!-- wp:html -->
					<blockquote class="luxe-pullquote" style="margin:0;">Restraint is not the absence of decoration — it is the presence of intention.</blockquote>
					<!-- /wp:html -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 05 — LOOKBOOK ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Section header -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|30"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--30)">
				<!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
				<p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">— Lookbook · 6 Looks · Form SS26</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"className":"luxe-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.25rem, 5vw, 4rem)","lineHeight":"1.05","letterSpacing":"-0.025em","fontWeight":"400"}}} -->
				<h2 class="wp-block-heading luxe-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.25rem, 5vw, 4rem);line-height:1.05;letter-spacing:-0.025em;font-weight:400">The looks.</h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.7;margin-top:var(--wp--preset--spacing--20)">Six selected looks from the twelve-piece collection.</p>
					<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Lookbook grid -->
			<!-- wp:html -->
			<div class="luxe-lookbook">
				<figure class="luxe-look luxe-card">
					<div class="luxe-card-media" style="aspect-ratio: 3/4;">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/luxe/luxe-look-1.png' ); ?>" alt="Look 01 — full-length minimal ivory garment, soft studio light" loading="lazy">
					</div>
					<span class="luxe-look-label">Look 01</span>
				</figure>
				<figure class="luxe-look luxe-card">
					<div class="luxe-card-media" style="aspect-ratio: 3/4;">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/luxe/luxe-look-2.png' ); ?>" alt="Look 02 — fabric and material close-up, ivory textile texture" loading="lazy">
					</div>
					<span class="luxe-look-label">Look 02</span>
				</figure>
				<figure class="luxe-look luxe-card">
					<div class="luxe-card-media" style="aspect-ratio: 3/4;">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/luxe/luxe-look-3.png' ); ?>" alt="Look 03 — accessory detail, elegant minimal jewelry on fabric" loading="lazy">
					</div>
					<span class="luxe-look-label">Look 03</span>
				</figure>
				<figure class="luxe-look luxe-card">
					<div class="luxe-card-media" style="aspect-ratio: 3/4;">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/luxe/luxe-look-4.png' ); ?>" alt="Look 04 — movement shot, garment in motion, soft light" loading="lazy">
					</div>
					<span class="luxe-look-label">Look 04</span>
				</figure>
				<figure class="luxe-look luxe-card">
					<div class="luxe-card-media" style="aspect-ratio: 3/4;">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/luxe/luxe-look-5.png' ); ?>" alt="Look 05 — portrait with garment detail, ivory tones" loading="lazy">
					</div>
					<span class="luxe-look-label">Look 05</span>
				</figure>
				<figure class="luxe-look luxe-card">
					<div class="luxe-card-media" style="aspect-ratio: 3/4;">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/luxe/luxe-look-6.png' ); ?>" alt="Look 06 — full-length evening look, charcoal tone, dramatic light" loading="lazy">
					</div>
					<span class="luxe-look-label">Look 06</span>
				</figure>
			</div>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 06 — DETAILS ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Section header -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
				<!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">— Details · Form SS26</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"className":"luxe-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.25rem, 5vw, 4rem)","lineHeight":"1.05","letterSpacing":"-0.025em","fontWeight":"400"}}} -->
				<h2 class="wp-block-heading luxe-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.25rem, 5vw, 4rem);line-height:1.05;letter-spacing:-0.025em;font-weight:400">Details.</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- Asymmetric detail images: large landscape + smaller portrait -->
			<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60","margin":{"top":"var:preset|spacing|20"}}}} -->
			<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--20)">
				<!-- wp:column {"width":"66%"} -->
				<div class="wp-block-column" style="flex-basis:66%">
					<!-- wp:image {"aspectRatio":"4/3","scale":"cover"} -->
					<figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/luxe/luxe-collection-1.png' ); ?>" alt="FORM collection — full-length model in structured minimal garment, ivory backdrop, soft daylight" style="aspect-ratio:4/3;object-fit:cover" loading="lazy"/></figure>
					<!-- /wp:image -->
					<!-- wp:paragraph {"className":"luxe-caption","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"0.8125rem"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="luxe-caption has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:0.8125rem">Fig. 02 — Look 03, on figure. Draped wool-silk, ivory.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":"34%"} -->
				<div class="wp-block-column" style="flex-basis:34%">
					<!-- wp:image {"aspectRatio":"3/4","scale":"cover"} -->
					<figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/luxe/luxe-collection-3.png' ); ?>" alt="AFTER DARK editorial — intimate portrait with fabric detail, ivory and beige tones, fabric study" style="aspect-ratio:3/4;object-fit:cover" loading="lazy"/></figure>
					<!-- /wp:image -->
					<!-- wp:paragraph {"className":"luxe-caption","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"0.8125rem"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="luxe-caption has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:0.8125rem">Fig. 03 — Detail study, fabric fall.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 07 — NEXT COLLECTION ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|120","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--120);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">— Next Collection · 02</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"className":"luxe-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"clamp(2.5rem, 8vw, 6.5rem)","lineHeight":"1.0","letterSpacing":"-0.025em","fontWeight":"400"}}} -->
			<h2 class="wp-block-heading luxe-display" style="font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:clamp(2.5rem, 8vw, 6.5rem);line-height:1.0;letter-spacing:-0.025em;font-weight:400"><a href="#" style="color:inherit;text-decoration:none;">Next — Silhouette →</a></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"luxe-caption","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"0.875rem"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="luxe-caption has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:0.875rem">Autumn / Winter 2025 · 9 Looks</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- Footer -->
	<!-- wp:template-part {"slug":"footer-luxe","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
