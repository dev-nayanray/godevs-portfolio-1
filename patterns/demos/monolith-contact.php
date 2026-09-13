<?php
/**
 * Title: Demo — Monolith (Contact)
 * Slug: godevs-portfolio/demo-monolith-contact
 * Description: Contact page for the Monolith demo. Mail-command themed contact form with mono-font labels, response-time meta rows, and an availability band. Uses the Dark style variation.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, monolith, contact, form, terminal, dark
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:template-part {"slug":"header-dark","theme":"godevs-portfolio","tagName":"header"} /-->

<!-- ═══ HERO — Terminal session framing ═══ -->
<!-- wp:group {"tagName":"section","className":"godevs-reveal","style":{"color":{"background":"var:preset|color|primary","text":"var:preset|color|contrast"}},"layout":{"type":"default"}} -->
<section class="wp-block-group alignfull has-contrast-color has-primary-background-color has-text-color has-background">
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|contrast"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small)"><code>$ mail -s "new project"</code> &nbsp;→&nbsp; hello@monolith.studio</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"color":{"text":"var:preset|color|contrast"},"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|huge","lineHeight":"1.1","letterSpacing":"-0.025em","fontWeight":"600"}}} -->
<h1 class="wp-block-heading has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 5vw, 3.5rem);line-height:1.1;letter-spacing:-0.025em;font-weight:600">Open an issue.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.6"},"color":{"text":"var:preset|color|contrast"},"layout":{"selfStretch":"fit","flexSize":"560px"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--contrast);font-size:var(--wp--preset--font-size--large);line-height:1.6;max-width:560px">For new projects, architecture reviews, or a quick question. I read every message personally and reply within two business days.</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- ═══ FORM — Commit-message framed inputs on default surface ═══ -->
<!-- wp:group {"tagName":"section","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull">
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

<!-- wp:group {"className":"is-style-card-bordered","style":{"spacing":{"padding":"var:preset|spacing|50","blockGap":"var:preset|spacing|30"},"border":{"color":"var:preset|color|secondary","radius":"var(--wp--custom--radius--md, 8px)"}}} -->
<div class="wp-block-group is-style-card-bordered" style="border-color:var(--wp--preset--color--secondary);border-radius:var(--wp--custom--radius--md, 8px);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|accent"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small)"><code>$ git commit -m "your message"</code></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small);margin-bottom:var(--wp--preset--spacing--10)">// name</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"border":{"color":"var:preset|color|secondary","width":"1px","radius":"var(--wp--custom--radius--sm, 6px)"},"spacing":{"padding":"var:preset|spacing|20"},"color":{"text":"var:preset|color|foreground"},"typography":{"fontFamily":"var:preset|font-family|mono"}}} -->
<p class="has-text-color has-border-color" style="border-color:var(--wp--preset--color--secondary);border-width:1px;border-radius:var(--wp--custom--radius--sm, 6px);color:var(--wp--preset--color--foreground);font-family:var(--wp--preset--font-family--mono);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">Your name</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|10"}}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small);margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--10)">// email</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"border":{"color":"var:preset|color|secondary","width":"1px","radius":"var(--wp--custom--radius--sm, 6px)"},"spacing":{"padding":"var:preset|spacing|20"},"color":{"text":"var:preset|color|foreground"},"typography":{"fontFamily":"var:preset|font-family|mono"}}} -->
<p class="has-text-color has-border-color" style="border-color:var(--wp--preset--color--secondary);border-width:1px;border-radius:var(--wp--custom--radius--sm, 6px);color:var(--wp--preset--color--foreground);font-family:var(--wp--preset--font-family--mono);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">you@studio.com</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|10"}}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small);margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--10)">// message</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"border":{"color":"var:preset|color|secondary","width":"1px","radius":"var(--wp--custom--radius--sm, 6px)"},"spacing":{"padding":"var:preset|spacing|40"},"color":{"text":"var:preset|color|foreground"},"typography":{"fontFamily":"var:preset|font-family|mono"}}} -->
<p class="has-text-color has-border-color" style="border-color:var(--wp--preset--color--secondary);border-width:1px;border-radius:var(--wp--custom--radius--sm, 6px);color:var(--wp--preset--color--foreground);font-family:var(--wp--preset--font-family--mono);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">Tell me about your system, timeline, and what you're trying to achieve.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
<!-- wp:button {"width":{"type":"full","size":100}} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a href="#send" class="wp-block-button__link wp-element-button">→ git push origin message</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"spacing":{"margin":{"top":"var:preset|spacing|20"}},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small);margin-top:var(--wp--preset--spacing--20)">// Visual placeholder. Edit this page to add your contact details.</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- ═══ META ROWS — Response time / availability / routing ═══ -->
<!-- wp:group {"tagName":"section","style":{"color":{"background":"var:preset|color|surface-muted"}},"layout":{"type":"default"}} -->
<section class="wp-block-group alignfull has-surface-muted-background-color has-background">
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|accent"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small)"><code>$ cat response-policy.md</code></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large","letterSpacing":"-0.02em","fontWeight":"600"}}} -->
<h2 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size|xx-large);letter-spacing:-0.02em;font-weight:600">How I respond.</h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
<div class="wp-block-columns">

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|xx-large","lineHeight":"1","letterSpacing":"-0.02em","fontWeight":"600"},"color":{"text":"var:preset|color|foreground"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--foreground);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--xx-large);line-height:1;letter-spacing:-0.02em;font-weight:600">&lt; 2 days</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small)">response time, business days</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|xx-large","lineHeight":"1","letterSpacing":"-0.02em","fontWeight":"600"},"color":{"text":"var:preset|color|foreground"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--foreground);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--xx-large);line-height:1;letter-spacing:-0.02em;font-weight:600">2 slots</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small)">open for Q3 engagements</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|xx-large","lineHeight":"1","letterSpacing":"-0.02em","fontWeight":"600"},"color":{"text":"var:preset|color|foreground"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--foreground);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--xx-large);line-height:1;letter-spacing:-0.02em;font-weight:600">UTC+1</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small)">Berlin · async-friendly</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

<!-- Meta rows (directory listing style) -->
<!-- wp:group {"className":"godevs-reveal-stagger","style":{"spacing":{"blockGap":"0","margin":{"top":"var:preset|spacing|60"}}}} -->
<div class="wp-block-group godevs-reveal-stagger" style="margin-top:var(--wp--preset--spacing--60)">

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|20"},"border":{"bottom":{"color":"var:preset|color|line","width":"1px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--line);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|accent"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small)">// email</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"}}} -->
<p style="font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small)"><a href="mailto:hello@monolith.studio">hello@monolith.studio</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|20"},"border":{"bottom":{"color":"var:preset|color|line","width":"1px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--line);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|accent"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small)">// engagement types</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small)">architecture review · system design · fractional backend lead</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|20"},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|accent"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small)">// elsewhere</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"}}} -->
<p style="font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small)"><a href="#">GitHub</a> · <a href="#">LinkedIn</a> · <a href="#">RSS</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- ═══ CTA — Availability band ═══ -->
<!-- wp:group {"tagName":"section","style":{"color":{"background":"var:preset|color|primary","text":"var:preset|color|contrast"}},"layout":{"type":"default"}} -->
<section class="wp-block-group alignfull has-contrast-color has-primary-background-color has-text-color has-background">
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"var(--wp--style--root--content-size)"}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|contrast"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small)"><code>$ status --availability</code> &nbsp;→&nbsp; 2 slots open for Q3</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"style":{"color":{"text":"var:preset|color|contrast"},"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 5vw, 3.5rem)","lineHeight":"1.05","letterSpacing":"-0.025em","fontWeight":"600"}}} -->
<h2 class="wp-block-heading has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 5vw, 3.5rem);line-height:1.05;letter-spacing:-0.025em;font-weight:600">Prefer to read first?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"},"color":{"text":"var:preset|color|contrast"},"layout":{"selfStretch":"fit","flexSize":"520px"}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--contrast);font-size:var(--wp--preset--font-size--medium);max-width:520px">The work page shows the systems in production and the about page covers how I operate. When you're ready, the form above is the fastest route — or email directly.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
<!-- wp:button -->
<div class="wp-block-button"><a href="#work" class="wp-block-button__link wp-element-button">View selected work</a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a href="#about" class="wp-block-button__link wp-element-button">Read the about page →</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|contrast"},"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<p class="has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--mono);font-size:var(--wp--preset--font-size--small);margin-top:var(--wp--preset--spacing--50)"><code>$ exit 0</code> &nbsp;·&nbsp; connection closed</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-dark","theme":"godevs-portfolio","tagName":"footer"} /-->
