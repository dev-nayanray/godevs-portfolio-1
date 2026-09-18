<?php
/**
 * Title: Minimal Footer
 * Slug: godevs-portfolio/footer
 * Categories: footer, godevs-portfolio-footer
 * Description: A full-bleed editorial footer on dark primary - oversized display wordmark with serif tagline, micro-label link columns, and a mono copyright hairline row.
 * Keywords: footer, minimal, copyright, navigation
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"tagName":"footer","className":"godevs-footer-minimal","backgroundColor":"primary","textColor":"contrast","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"var(--wp--style--global--wide-size)"}} -->
<footer class="wp-block-group godevs-footer-minimal has-contrast-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
	<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--70)">
		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large","lineHeight":"1","letterSpacing":"-0.03em","fontWeight":"700"}}} -->
		<p style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--xx-large);line-height:1;letter-spacing:-0.03em;font-weight:700">GoDevs®</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|serif","fontStyle":"italic","fontWeight":"500","fontSize":"var:preset|font-size|medium","lineHeight":"1.5"}}} -->
		<p style="font-family:var(--wp--preset--font-family--serif);font-style:italic;font-weight:500;font-size:var(--wp--preset--font-size--medium);line-height:1.5">Websites with a spine.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80","top":"var:preset|spacing|50"},"padding":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide" style="padding-bottom:var(--wp--preset--spacing--70)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"fontSize":"x-small","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"}}} -->
			<p class="has-x-small-font-size" style="text-transform:uppercase;letter-spacing:0.12em;font-weight:600">Studio</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"lineHeight":"1.8"}}} -->
			<p class="has-small-font-size" style="line-height:1.8"><a href="/about">About</a><br><a href="/team">People</a><br><a href="/journal">Journal</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"fontSize":"x-small","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"}}} -->
			<p class="has-x-small-font-size" style="text-transform:uppercase;letter-spacing:0.12em;font-weight:600">Work</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"lineHeight":"1.8"}}} -->
			<p class="has-small-font-size" style="line-height:1.8"><a href="/work">Projects</a><br><a href="/services">Services</a><br><a href="/work">Case studies</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"fontSize":"x-small","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"}}} -->
			<p class="has-x-small-font-size" style="text-transform:uppercase;letter-spacing:0.12em;font-weight:600">Connect</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"lineHeight":"1.8"}}} -->
			<p class="has-small-font-size" style="line-height:1.8"><a href="mailto:hello@godevs.example">Email</a><br><a href="#">LinkedIn</a><br><a href="#">Instagram</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|secondary","style":"solid","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group alignwide" style="border-top:1px solid var(--wp--preset--color--secondary);padding-top:var(--wp--preset--spacing--40)">
		<!-- wp:paragraph {"className":"godevs-footer-copyright","fontSize":"x-small","style":{"typography":{"letterSpacing":"0.08em"}}} -->
		<p class="godevs-footer-copyright has-x-small-font-size" style="letter-spacing:0.08em">© 2026 GoDevs - All rights reserved.</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"fontSize":"x-small","style":{"typography":{"letterSpacing":"0.08em"}}} -->
		<p class="has-x-small-font-size" style="letter-spacing:0.08em"><a href="#">X</a> · <a href="#">Dribbble</a> · <a href="#">GitHub</a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</footer>
<!-- /wp:group -->
