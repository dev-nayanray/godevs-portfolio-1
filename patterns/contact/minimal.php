<?php
/**
 * Title: Contact - Minimal
 * Slug: godevs-portfolio/contact-minimal
 * Description: An ultra-restrained contact section - a centered display mailto with one serif-italic accent word, a mono micro-caption, and hairline rules. Distinct in its single-action, gallery-like composition.
 * Categories: godevs-portfolio-contact
 * Keywords: contact, minimal, email, restrained, centered
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"godevs-contact-minimal","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"}}},"layout":{"type":"constrained","contentSize":"var(--wp--style--global--content-size)"}} -->
<section class="wp-block-group godevs-contact-minimal" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)"><!-- wp:group {"className":"godevs-reveal","style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"},"bottom":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
<div class="wp-block-group godevs-reveal" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;border-bottom-color:var(--wp--preset--color--line);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|x-small","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-align-center has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--x-small);letter-spacing:0.14em;text-transform:uppercase;font-weight:500">Say hello</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 5vw, 4rem)","lineHeight":"1.1","letterSpacing":"-0.03em","fontWeight":"700"},"color":{"text":"var:preset|color|primary"}}} -->
<p class="has-text-align-center has-text-color" style="color:var(--wp--preset--color--primary);font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 5vw, 4rem);line-height:1.1;letter-spacing:-0.03em;font-weight:700"><a href="mailto:hello@godevs.example" style="text-decoration:underline;text-decoration-thickness:1px;text-underline-offset:0.15em">hello@godevs<em style="font-family:var(--wp--preset--font-family--serif);font-style:italic;font-weight:500">.example</em></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.65"},"color":{"text":"var:preset|color|secondary"}}} -->
<p class="has-text-align-center has-text-color" style="color:var(--wp--preset--color--secondary);font-size:var(--wp--preset--font-size--small);line-height:1.65">One inbox, one person - reply within two working days.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
