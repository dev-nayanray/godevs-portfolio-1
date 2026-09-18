<?php
/**
 * Title: Hero - Image Focus
 * Description: A full-bleed cover hero with dimmed image ground, mixed-serif display headline, pill availability chip, outline CTA, and a mono meta row. For photographers and visual creators.
 * Slug: godevs-portfolio/hero-image-focus
 * Categories: godevs-portfolio-hero, godevs-portfolio-pages
 * Keywords: hero, image, cover, full-bleed, photography
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-hero-image-focus godevs-reveal","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-hero-image-focus alignfull">
	<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>","dimRatio":60,"overlayColor":"primary","minHeight":720,"isDark":true,"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"820px","justifyContent":"left"}} -->
	<div class="wp-block-cover alignfull" style="min-height:720px;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-0" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
		<!-- wp:group {"className":"godevs-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group godevs-reveal-stagger">
			<!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"contrast","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
			<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--accent);text-transform:uppercase;letter-spacing:0.12em;font-weight:600">Photographer · Field Series</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"textColor":"contrast","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xxx-large","lineHeight":"1.04","letterSpacing":"-0.03em","fontWeight":"700"}}} -->
			<h1 class="wp-block-heading has-contrast-color has-text-color" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--xxx-large);line-height:1.04;letter-spacing:-0.03em;font-weight:700">Long-form photography, <em style="font-family:var(--wp--preset--font-family--serif);font-style:italic;font-weight:500">slowly</em> made.</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"contrast","style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.65"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<p class="has-contrast-color has-text-color" style="font-size:var(--wp--preset--font-size--medium);line-height:1.65;margin-top:var(--wp--preset--spacing--40)">Editorial photography, series, and field work from the last several years - shot on assignment across four continents, printed where it matters.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
				<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"999px","color":"var:preset|color|contrast","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/work" style="border-radius:999px;border-color:var(--wp--preset--color--contrast);border-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)">View the series</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|contrast","style":"solid","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--contrast);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--40);margin-top:var(--wp--preset--spacing--40)">
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small","letterSpacing":"0.1em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|contrast"}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small);letter-spacing:0.1em;text-transform:uppercase;font-weight:500">Lisbon · Tokyo · Reykjavík</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small","letterSpacing":"0.1em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|contrast"}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small);letter-spacing:0.1em;text-transform:uppercase;font-weight:500">Bookings 2027</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div></div>
	<!-- /wp:cover -->
</section>
<!-- /wp:group -->
