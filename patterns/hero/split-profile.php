<?php
/**
 * Title: Hero - Split Profile
 * Description: A 55/45 split hero - mixed-serif display headline, pill meta chips, and dual CTAs beside a 3:4 portrait with an overlapping accent status card. For personal portfolio introductions.
 * Slug: godevs-portfolio/hero-split-profile
 * Categories: godevs-portfolio-hero, godevs-portfolio-pages
 * Keywords: hero, split, profile, intro, about
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-hero-split-profile godevs-reveal","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"}}},"layout":{"type":"constrained","contentSize":"var(--wp--style--global--wide-size)"}} -->
<section class="wp-block-group wp-block-godevs-hero-split-profile alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
	<!-- wp:columns {"align":"wide","verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70","top":"var:preset|spacing|70"}}},"className":"godevs-reveal-stagger"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center godevs-reveal-stagger">
		<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
			<!-- wp:paragraph {"className":"is-style-eyebrow","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
			<p class="is-style-eyebrow has-text-color" style="color:var(--wp--preset--color--accent);text-transform:uppercase;letter-spacing:0.12em;font-weight:600">Designer · Developer</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xxx-large","lineHeight":"1.04","letterSpacing":"-0.03em","fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<h1 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--xxx-large);line-height:1.04;letter-spacing:-0.03em;font-weight:700;margin-top:var(--wp--preset--spacing--40)">Thoughtful digital products, built at the <em style="font-family:var(--wp--preset--font-family--serif);font-style:italic;font-weight:500">intersections</em>.</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.65"},"color":{"text":"var:preset|color|secondary"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--secondary);font-size:var(--wp--preset--font-size--medium);line-height:1.65;margin-top:var(--wp--preset--spacing--40)">I'm a designer-developer working where editorial design, accessibility, and modern WordPress engineering meet. This is a selection of recent work - six engagements a year, each one built to be handed over.</p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50)">
				<!-- wp:paragraph {"style":{"border":{"radius":"var(--wp--custom--radius--pill, 9999px)","width":"1px","color":"var:preset|color|line","style":"solid"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"typography":{"fontSize":"var:preset|font-size|small","letterSpacing":"0.04em","fontWeight":"500","textTransform":"uppercase"},"color":{"text":"var:preset|color|secondary"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--secondary);border-radius:var(--wp--custom--radius--pill, 9999px);border-color:var(--wp--preset--color--line);border-style:solid;border-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40);font-size:var(--wp--preset--font-size--small);letter-spacing:0.04em;font-weight:500;text-transform:uppercase">Est. 2014</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"border":{"radius":"var(--wp--custom--radius--pill, 9999px)","width":"1px","color":"var:preset|color|line","style":"solid"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"typography":{"fontSize":"var:preset|font-size|small","letterSpacing":"0.04em","fontWeight":"500","textTransform":"uppercase"},"color":{"text":"var:preset|color|secondary"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--secondary);border-radius:var(--wp--custom--radius--pill, 9999px);border-color:var(--wp--preset--color--line);border-style:solid;border-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40);font-size:var(--wp--preset--font-size--small);letter-spacing:0.04em;font-weight:500;text-transform:uppercase">Remote-first</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--60)">
				<!-- wp:button {"backgroundColor":"accent","textColor":"contrast","style":{"border":{"radius":"999px"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-accent-background-color has-background has-contrast-color has-text-color wp-element-button" href="/work" style="border-radius:999px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)">View selected work</a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"999px"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/about" style="border-radius:999px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)">About me</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:image {"aspectRatio":"3/4","scale":"cover","style":{"border":{"radius":"var(--wp--custom--radius--lg, 12px)"}},"className":"size-full"} -->
				<figure class="wp-block-image size-full has-custom-border">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder-portrait.jpg' ); ?>" alt="Editorial portrait of the site author" style="border-radius:var(--wp--custom--radius--lg, 12px);aspect-ratio:3/4;object-fit:cover"/>
				</figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"border":{"radius":"var(--wp--custom--radius--lg, 12px)","width":"1px","color":"var:preset|color|accent","style":"solid"},"spacing":{"margin":{"top":"calc(-1 * var(--wp--preset--spacing--60))","left":"var:preset|spacing|50"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"color":{"background":"var:preset|color|surface"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-background" style="background-color:var(--wp--preset--color--surface);border-color:var(--wp--preset--color--accent);border-style:solid;border-width:1px;border-radius:var(--wp--custom--radius--lg, 12px);margin-top:calc(-1 * var(--wp--preset--spacing--60));margin-left:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:paragraph {"fontSize":"x-small","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.14em","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
					<p class="has-x-small-font-size has-text-color" style="color:var(--wp--preset--color--accent);text-transform:uppercase;letter-spacing:0.14em;font-weight:600">Currently</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|normal","lineHeight":"1.5","fontWeight":"500"},"color":{"text":"var:preset|color|primary"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--primary);font-size:var(--wp--preset--font-size--normal);line-height:1.5;font-weight:500;margin-top:var(--wp--preset--spacing--20)">Designing a publication system for a Lisbon research studio.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</section>
<!-- /wp:group -->
