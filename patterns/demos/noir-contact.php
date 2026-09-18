<?php
/**
 * Title: Demo - Noir (Film) - Contact
 * Slug: godevs-portfolio/demo-noir-contact
 * Description: NOIR contact - inquiry form, availability, FAQ. Recommended style variation: Noir.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, noir, contact, inquiry
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-noir","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-noir alignfull">

        <!-- Header (transparent over hero) -->
        <!-- wp:template-part {"slug":"header-noir","theme":"godevs-portfolio","tagName":"header"} /-->

        <!-- === 01 - CONTACT HERO === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|120","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--120);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40","maxWidth":"88ch"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide" style="max-width:88ch">

                        <!-- Eyebrow -->
                        <!-- wp:paragraph {"className":"is-style-noir-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                        <p class="is-style-noir-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">- Contact</p>
                        <!-- /wp:paragraph -->

                        <!-- H1 -->
                        <!-- wp:heading {"level":1,"className":"noir-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"700","letterSpacing":"-0.035em","lineHeight":"0.98","fontSize":"clamp(3rem, 8vw, 8rem)"}},"color":{"text":"var:preset|color|contrast"}} -->
                        <h1 class="wp-block-heading noir-display has-text-color" style="color:var(--wp--preset--color--contrast);font-family:var(--wp--preset--font-family--display);font-weight:700;letter-spacing:-0.035em;line-height:0.98;font-size:clamp(3rem, 8vw, 8rem)">Have a <span class="noir-italic">story</span> to tell?</h1>
                        <!-- /wp:heading -->

                        <!-- Supporting copy -->
                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.65"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.65;margin-top:var(--wp--preset--spacing--30)">Available for selected commercial, narrative and visual storytelling projects. Based between Europe and Asia. I read every brief personally - usually within three days.</p>
                        <!-- /wp:paragraph -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 02 - CONTACT INFO + INQUIRY FORM === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- 2-col: 40% info / 60% form -->
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|70"}}} -->
                        <div class="wp-block-columns">

                                <!-- LEFT - Contact info -->
                                <!-- wp:column {"width":"40%"} -->
                                <div class="wp-block-column" style="flex-basis:40%">
                                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                                        <div class="wp-block-group">

                                                <!-- Email -->
                                                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}}} -->
                                                <div class="wp-block-group">
                                                        <!-- wp:paragraph {"className":"is-style-noir-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.625rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                                        <p class="is-style-noir-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.625rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">- Email</p>
                                                        <!-- /wp:paragraph -->
                                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem","lineHeight":"1.4"},"color":{"text":"var:preset|color|contrast"}}} -->
                                                        <p class="has-text-color" style="color:var(--wp--preset--color--contrast);font-size:1.125rem;line-height:1.4"><a href="mailto:studio@noir.film">studio@noir.film</a></p>
                                                        <!-- /wp:paragraph -->
                                                </div>
                                                <!-- /wp:group -->

                                                <!-- Studio -->
                                                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}}} -->
                                                <div class="wp-block-group">
                                                        <!-- wp:paragraph {"className":"is-style-noir-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.625rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                                        <p class="is-style-noir-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.625rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">- Studio</p>
                                                        <!-- /wp:paragraph -->
                                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem","lineHeight":"1.5"},"color":{"text":"var:preset|color|contrast"}}} -->
                                                        <p class="has-text-color" style="color:var(--wp--preset--color--contrast);font-size:1.125rem;line-height:1.5">Atelier 4F<br>14 Rue des Lumières<br>75011 Paris</p>
                                                        <!-- /wp:paragraph -->
                                                </div>
                                                <!-- /wp:group -->

                                                <!-- Location -->
                                                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}}} -->
                                                <div class="wp-block-group">
                                                        <!-- wp:paragraph {"className":"is-style-noir-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.625rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                                        <p class="is-style-noir-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.625rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">- Location</p>
                                                        <!-- /wp:paragraph -->
                                                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem","lineHeight":"1.5"},"color":{"text":"var:preset|color|contrast"}}} -->
                                                        <p class="has-text-color" style="color:var(--wp--preset--color--contrast);font-size:1.125rem;line-height:1.5">Europe / Asia</p>
                                                        <!-- /wp:paragraph -->
                                                </div>
                                                <!-- /wp:group -->

                                                <!-- Social -->
                                                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}}} -->
                                                <div class="wp-block-group">
                                                        <!-- wp:paragraph {"className":"is-style-noir-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.625rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                                        <p class="is-style-noir-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.625rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">- Elsewhere</p>
                                                        <!-- /wp:paragraph -->
                                                        <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.75rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500","lineHeight":"2.0"}}} -->
                                                        <p style="font-family:var(--wp--preset--font-family--body);font-size:0.75rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500;line-height:2.0"><a href="#">Instagram</a> · <a href="#">Vimeo</a> · <a href="#">Behance</a> · <a href="#">LinkedIn</a></p>
                                                        <!-- /wp:paragraph -->
                                                </div>
                                                <!-- /wp:group -->

                                                <!-- What happens next -->
                                                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|30"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}},"layout":{"type":"default"}}} -->
                                                <div class="wp-block-group" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;margin-top:var(--wp--preset--spacing--30);padding-top:var(--wp--preset--spacing--40)">
                                                        <!-- wp:paragraph {"className":"is-style-noir-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.625rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                                        <p class="is-style-noir-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.625rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">- What happens next</p>
                                                        <!-- /wp:paragraph -->
                                                        <!-- wp:html -->
                                                        <ol class="noir-faq-steps" style="margin:0;padding:0;list-style:none;">
                                                                <li style="display:grid;grid-template-columns:2rem 1fr;gap:0.5rem;padding:0.75rem 0;border-bottom:1px solid var(--noir-line);"><span aria-hidden="true" style="font-family:var(--wp--preset--font-family--body);font-size:0.625rem;letter-spacing:0.22em;text-transform:uppercase;color:var(--noir-muted);">01</span><span style="color:var(--noir-soft);font-size:0.9375rem;line-height:1.5;">I review your brief within three days.</span></li>
                                                                <li style="display:grid;grid-template-columns:2rem 1fr;gap:0.5rem;padding:0.75rem 0;border-bottom:1px solid var(--noir-line);"><span aria-hidden="true" style="font-family:var(--wp--preset--font-family--body);font-size:0.625rem;letter-spacing:0.22em;text-transform:uppercase;color:var(--noir-muted);">02</span><span style="color:var(--noir-soft);font-size:0.9375rem;line-height:1.5;">A short 30-minute call to read the room.</span></li>
                                                                <li style="display:grid;grid-template-columns:2rem 1fr;gap:0.5rem;padding:0.75rem 0;"><span aria-hidden="true" style="font-family:var(--wp--preset--font-family--body);font-size:0.625rem;letter-spacing:0.22em;text-transform:uppercase;color:var(--noir-muted);">03</span><span style="color:var(--noir-soft);font-size:0.9375rem;line-height:1.5;">A scoped proposal - direction, timeline, fee.</span></li>
                                                        </ol>
                                                        <!-- /wp:html -->
                                                </div>
                                                <!-- /wp:group -->

                                        </div>
                                        <!-- /wp:group -->
                                </div>
                                <!-- /wp:column -->

                                <!-- RIGHT - Inquiry form -->
                                <!-- wp:column {"width":"60%"} -->
                                <div class="wp-block-column" style="flex-basis:60%">
                                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"color":{"background":"var:preset|color|surface-muted"}}} -->
                                        <div class="wp-block-group has-background" style="background-color:var(--wp--preset--color--surface-muted);padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50)">

                                                <!-- Form header -->
                                                <!-- wp:paragraph {"className":"is-style-noir-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.625rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                                <p class="is-style-noir-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.625rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">- Inquiry Form</p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:heading {"level":2,"className":"noir-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.75rem, 3vw, 2.5rem)","lineHeight":"1.05","letterSpacing":"-0.02em","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
                                                <h2 class="wp-block-heading noir-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 3vw, 2.5rem);line-height:1.05;letter-spacing:-0.02em;font-weight:700;margin-bottom:var(--wp--preset--spacing--40)">Start a conversation.</h2>
                                                <!-- /wp:heading -->

                                                <!-- Visual inquiry form -->
                                                <!-- wp:html -->
                                                <style>
                                                .wp-block-godevs-demo-noir .noir-form { display: flex; flex-direction: column; gap: 1.5rem; margin: 0; }
                                                .wp-block-godevs-demo-noir .noir-form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 1.25rem; }
                                                .wp-block-godevs-demo-noir .noir-field { display: flex; flex-direction: column; gap: 0.5rem; margin: 0; }
                                                .wp-block-godevs-demo-noir .noir-field-label { font-family: var(--wp--preset--font-family--body); font-size: 0.625rem; letter-spacing: 0.22em; text-transform: uppercase; font-weight: 500; color: var(--noir-muted); margin: 0; }
                                                .wp-block-godevs-demo-noir .noir-field-input,
                                                .wp-block-godevs-demo-noir .noir-field-select,
                                                .wp-block-godevs-demo-noir .noir-field-textarea {
                                                        font-family: var(--wp--preset--font-family--body);
                                                        font-size: 0.9375rem;
                                                        line-height: 1.5;
                                                        color: var(--noir-soft);
                                                        background: transparent;
                                                        border: 1px solid var(--noir-line);
                                                        border-radius: 0;
                                                        padding: 0.75rem 0.875rem;
                                                        -webkit-appearance: none;
                                                        -moz-appearance: none;
                                                        appearance: none;
                                                        margin: 0;
                                                        width: 100%;
                                                        box-sizing: border-box;
                                                        transition: border-color 200ms ease, background 200ms ease;
                                                }
                                                .wp-block-godevs-demo-noir .noir-field-textarea { min-height: 7.5rem; resize: vertical; }
                                                .wp-block-godevs-demo-noir .noir-field-select {
                                                        background-image: linear-gradient(45deg, transparent 50%, var(--noir-muted) 50%), linear-gradient(135deg, var(--noir-muted) 50%, transparent 50%);
                                                        background-position: calc(100% - 1rem) center, calc(100% - 0.85rem) center;
                                                        background-size: 6px 6px, 6px 6px;
                                                        background-repeat: no-repeat;
                                                        padding-right: 2.25rem;
                                                }
                                                .wp-block-godevs-demo-noir .noir-field-input::placeholder,
                                                .wp-block-godevs-demo-noir .noir-field-textarea::placeholder { color: var(--noir-muted); opacity: 1; }
                                                .wp-block-godevs-demo-noir .noir-field-input:focus,
                                                .wp-block-godevs-demo-noir .noir-field-select:focus,
                                                .wp-block-godevs-demo-noir .noir-field-textarea:focus {
                                                        outline: none;
                                                        border-color: var(--noir-accent);
                                                        background: rgba(194, 66, 43, 0.04);
                                                        box-shadow: 0 0 0 1px var(--noir-accent);
                                                }
                                                .wp-block-godevs-demo-noir .noir-form-actions { display: flex; flex-direction: row; justify-content: space-between; align-items: center; gap: 1rem; flex-wrap: wrap; margin-top: 0.5rem; }
                                                .wp-block-godevs-demo-noir .noir-submit {
                                                        font-family: var(--wp--preset--font-family--body);
                                                        font-size: 0.6875rem;
                                                        font-weight: 600;
                                                        letter-spacing: 0.2em;
                                                        text-transform: uppercase;
                                                        color: var(--noir-soft);
                                                        background: transparent;
                                                        border: 1px solid var(--noir-soft);
                                                        border-radius: 0;
                                                        padding: 0.875rem 1.5rem;
                                                        cursor: pointer;
                                                        transition: background 200ms ease, color 200ms ease, border-color 200ms ease;
                                                }
                                                .wp-block-godevs-demo-noir .noir-submit:hover,
                                                .wp-block-godevs-demo-noir .noir-submit:focus-visible {
                                                        background: var(--noir-accent);
                                                        border-color: var(--noir-accent);
                                                        color: #FFFFFF;
                                                        outline: none;
                                                }
                                                .wp-block-godevs-demo-noir .noir-form-note { font-family: var(--wp--preset--font-family--body); font-size: 0.625rem; letter-spacing: 0.18em; text-transform: uppercase; color: var(--noir-muted); margin: 0; max-width: 28ch; line-height: 1.5; }
                                                @media (max-width: 700px) {
                                                        .wp-block-godevs-demo-noir .noir-form-row { grid-template-columns: 1fr; }
                                                }
                                                </style>

                                                <form class="noir-form" action="#" method="post" aria-label="Inquiry form">

                                                        <div class="noir-form-row">
                                                                <div class="noir-field">
                                                                        <label class="noir-field-label" for="noir-name">Name</label>
                                                                        <input class="noir-field-input" type="text" id="noir-name" name="noir-name" placeholder="Your name" autocomplete="name" required>
                                                                </div>
                                                                <div class="noir-field">
                                                                        <label class="noir-field-label" for="noir-email">Email</label>
                                                                        <input class="noir-field-input" type="email" id="noir-email" name="noir-email" placeholder="you@studio.com" autocomplete="email" required>
                                                                </div>
                                                        </div>

                                                        <div class="noir-form-row">
                                                                <div class="noir-field">
                                                                        <label class="noir-field-label" for="noir-type">Project type</label>
                                                                        <select class="noir-field-select" id="noir-type" name="noir-type">
                                                                                <option value="">Select…</option>
                                                                                <option value="commercial">Commercial Direction</option>
                                                                                <option value="narrative">Narrative Film</option>
                                                                                <option value="music">Music Video</option>
                                                                                <option value="documentary">Documentary</option>
                                                                                <option value="cinematography">Cinematography</option>
                                                                                <option value="creative">Creative Direction</option>
                                                                                <option value="other">Other</option>
                                                                        </select>
                                                                </div>
                                                                <div class="noir-field">
                                                                        <label class="noir-field-label" for="noir-budget">Budget</label>
                                                                        <select class="noir-field-select" id="noir-budget" name="noir-budget">
                                                                                <option value="">Select…</option>
                                                                                <option value="10-30">$10 - 30k</option>
                                                                                <option value="30-80">$30 - 80k</option>
                                                                                <option value="80-200">$80 - 200k</option>
                                                                                <option value="200+">$200k+</option>
                                                                                <option value="unsure">Not sure</option>
                                                                        </select>
                                                                </div>
                                                        </div>

                                                        <div class="noir-field">
                                                                <label class="noir-field-label" for="noir-timeline">Timeline</label>
                                                                <select class="noir-field-select" id="noir-timeline" name="noir-timeline">
                                                                        <option value="">Select…</option>
                                                                        <option value="1-3">1 - 3 months</option>
                                                                        <option value="3-6">3 - 6 months</option>
                                                                        <option value="6+">6+ months</option>
                                                                        <option value="flexible">Flexible</option>
                                                                </select>
                                                        </div>

                                                        <div class="noir-field">
                                                                <label class="noir-field-label" for="noir-message">Message</label>
                                                                <textarea class="noir-field-textarea" id="noir-message" name="noir-message" placeholder="Tell me about the project - what are you making, who is it for, when does it need to land?"></textarea>
                                                        </div>

                                                        <div class="noir-form-actions">
                                                                <p class="noir-form-note">Demo form - connect a form plugin or the theme's front-forms feature.</p>
                                                                <button class="noir-submit" type="submit">Start a conversation →</button>
                                                        </div>

                                                </form>
                                                <!-- /wp:html -->

                                        </div>
                                        <!-- /wp:group -->
                                </div>
                                <!-- /wp:column -->

                        </div>
                        <!-- /wp:columns -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === 03 - FAQ === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Section header -->
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns">
                                <!-- wp:column {"width":"30%"} -->
                                <div class="wp-block-column" style="flex-basis:30%">
                                        <!-- wp:paragraph {"className":"is-style-noir-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-noir-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">- FAQ · 04</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"width":"70%"} -->
                                <div class="wp-block-column" style="flex-basis:70%">
                                        <!-- wp:heading {"level":2,"className":"noir-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.25rem, 5vw, 4rem)","lineHeight":"1.0","letterSpacing":"-0.03em","fontWeight":"700"}}} -->
                                        <h2 class="wp-block-heading noir-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.25rem, 5vw, 4rem);line-height:1.0;letter-spacing:-0.03em;font-weight:700">Before you write.</h2>
                                        <!-- /wp:heading -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                        <!-- FAQ rows -->
                        <!-- wp:html -->
                        <div style="border-top: 1px solid var(--noir-line);">
                                <div class="noir-service-row" style="border-bottom: 1px solid var(--noir-line);">
                                        <span class="noir-service-num">01</span>
                                        <span class="noir-service-title">How quickly do you respond?</span>
                                        <span class="noir-service-desc">Personally, within three working days.</span>
                                        <span class="noir-service-arrow" aria-hidden="true">-</span>
                                </div>
                                <div class="noir-service-row" style="border-bottom: 1px solid var(--noir-line);">
                                        <span class="noir-service-num">02</span>
                                        <span class="noir-service-title">What should I include in my brief?</span>
                                        <span class="noir-service-desc">The story, the audience, the budget, the deadline.</span>
                                        <span class="noir-service-arrow" aria-hidden="true">-</span>
                                </div>
                                <div class="noir-service-row" style="border-bottom: 1px solid var(--noir-line);">
                                        <span class="noir-service-num">03</span>
                                        <span class="noir-service-title">Do you travel for shoots?</span>
                                        <span class="noir-service-desc">Yes - worldwide, with a small trusted crew.</span>
                                        <span class="noir-service-arrow" aria-hidden="true">-</span>
                                </div>
                                <div class="noir-service-row" style="border-bottom: 1px solid var(--noir-line);">
                                        <span class="noir-service-num">04</span>
                                        <span class="noir-service-title">Do you provide the full crew?</span>
                                        <span class="noir-service-desc">Crew, camera, lighting, sound - scaled to scope.</span>
                                        <span class="noir-service-arrow" aria-hidden="true">-</span>
                                </div>
                        </div>
                        <!-- /wp:html -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->


        <!-- Project proposal form -->
        <!-- wp:group {"tagName":"section","className":"godevs-proposal-section","layout":{"type":"constrained","contentSize":"760px"}} -->
        <section class="wp-block-group godevs-proposal-section" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
                <!-- wp:heading {"level":2} -->
                <h2 class="wp-block-heading">Pitch a Film</h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|muted"}},"className":"godevs-section-intro"} -->
                <p class="godevs-section-intro has-text-color" style="color:var(--wp--preset--color--muted);max-width:60ch">Every film starts with a logline. Send yours - plus the timeline and the dream - and we'll take it from there.</p>
                <!-- /wp:paragraph -->

                <!-- wp:shortcode -->
                [godevs_proposal_form]
                <!-- /wp:shortcode -->
        </section>
        <!-- /wp:group -->

        <!-- Footer -->
        <!-- wp:template-part {"slug":"footer-noir","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
