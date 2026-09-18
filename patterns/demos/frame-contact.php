<?php
/**
 * Title: Demo - Frame (Photography) - Contact
 * Slug: godevs-portfolio/demo-frame-contact
 * Description: FRAME contact - inquiry form, availability, FAQ. Recommended style variation: Frame.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, frame, contact, inquiry, photography
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-frame","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-frame alignfull">

        <!-- Header (minimal - floats over hero) -->
        <!-- wp:template-part {"slug":"header-frame","theme":"godevs-portfolio","tagName":"header"} /-->

        <!-- === HERO - typography, supporting copy, availability === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|70","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:paragraph {"className":"is-style-frame-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"}}} -->
                        <p class="is-style-frame-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:400">- Contact</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:heading {"level":1,"className":"frame-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"300","letterSpacing":"-0.03em","lineHeight":"0.98","fontSize":"clamp(2.75rem, 9vw, 8.5rem)"}}} -->
                        <h1 class="wp-block-heading frame-display" style="font-family:var(--wp--preset--font-family--display);font-weight:300;letter-spacing:-0.03em;line-height:0.98;font-size:clamp(2.75rem, 9vw, 8.5rem)">Let's make <span class="frame-italic">pictures.</span></h1>
                        <!-- /wp:heading -->
                        <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"var:preset|font-size|medium","lineHeight":"1.7","fontWeight":"300"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|40"}},"layout":{"selfStretch":"fit","flexSize":"52ch"}}} -->
                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:var(--wp--preset--font-size--medium);line-height:1.7;font-weight:300;margin-top:var(--wp--preset--spacing--40);max-width:52ch">Editorial, brand and fine-art commissions. Based in Lisbon, working worldwide. Tell me about the project - I read every brief myself.</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:400;margin-top:var(--wp--preset--spacing--40)"><span class="frame-dot" aria-hidden="true"></span>Available for commissions · Q3 2026</p>
                        <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === CONTACT INFO + INQUIRY FORM - frame-2col 40/60 === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:columns {"align":"wide","className":"frame-2col","style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
                <div class="wp-block-columns alignwide frame-2col">
                        <!-- wp:column {"width":"40%"} -->
                        <div class="wp-block-column" style="flex-basis:40%">
                                <!-- wp:paragraph {"className":"is-style-frame-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
                                <p class="is-style-frame-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:400;margin-bottom:var(--wp--preset--spacing--30)">- Direct</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.5rem, 2.8vw, 2.25rem)","fontWeight":"300","letterSpacing":"-0.015em","lineHeight":"1.1"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
                                <p style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.5rem, 2.8vw, 2.25rem);font-weight:300;letter-spacing:-0.015em;line-height:1.1;margin-bottom:var(--wp--preset--spacing--40)"><a href="mailto:studio@frame.photo" style="text-decoration:none;color:var(--wp--preset--color--foreground);border-bottom:1px solid var(--frame-line);transition:color 0.4s ease, border-color 0.4s ease;">studio@frame.photo</a></p>
                                <!-- /wp:paragraph -->
                                <!-- wp:paragraph {"className":"is-style-frame-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.625rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-frame-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.625rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:400">Location</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"var:preset|font-size|normal","lineHeight":"1.7","fontWeight":"300"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
                                <p style="font-family:var(--wp--preset--font-family--body);font-size:var(--wp--preset--font-size--normal);line-height:1.7;font-weight:300;margin-bottom:var(--wp--preset--spacing--40)">Lisbon · Worldwide</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:paragraph {"className":"is-style-frame-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.625rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-frame-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.625rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:400">Elsewhere</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"var:preset|font-size|normal","lineHeight":"1.7","fontWeight":"300"},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
                                <p style="font-family:var(--wp--preset--font-family--body);font-size:var(--wp--preset--font-size--normal);line-height:1.7;font-weight:300;margin-bottom:var(--wp--preset--spacing--50)"><a href="#" style="text-decoration:none;color:var(--wp--preset--color--foreground);border-bottom:1px solid var(--frame-line);transition:color 0.4s ease, border-color 0.4s ease;">Instagram</a> &nbsp;·&nbsp; <a href="#" style="text-decoration:none;color:var(--wp--preset--color--foreground);border-bottom:1px solid var(--frame-line);transition:color 0.4s ease, border-color 0.4s ease;">Are.na</a> &nbsp;·&nbsp; <a href="#" style="text-decoration:none;color:var(--wp--preset--color--foreground);border-bottom:1px solid var(--frame-line);transition:color 0.4s ease, border-color 0.4s ease;">Print Store</a> &nbsp;·&nbsp; <a href="#" style="text-decoration:none;color:var(--wp--preset--color--foreground);border-bottom:1px solid var(--frame-line);transition:color 0.4s ease, border-color 0.4s ease;">Agent</a></p>
                                <!-- /wp:paragraph -->
                                <!-- wp:paragraph {"className":"is-style-frame-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.625rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
                                <p class="is-style-frame-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.625rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:400;margin-bottom:var(--wp--preset--spacing--30)">What happens next</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:html -->
                                <ol style="list-style:none;margin:0;padding:0;font-family:var(--wp--preset--font-family--body);font-size:var(--wp--preset--font-size--normal);line-height:1.7;font-weight:300;color:var(--wp--preset--color--foreground);">
                                        <li style="display:grid;grid-template-columns:2.5rem 1fr;gap:0 1rem;padding:0.85rem 0;border-top:1px solid var(--frame-line);">
                                                <span style="font-size:0.625rem;letter-spacing:0.14em;text-transform:uppercase;color:var(--wp--preset--color--muted);">01</span>
                                                <span>I review your brief within three days - usually the same week.</span>
                                        </li>
                                        <li style="display:grid;grid-template-columns:2.5rem 1fr;gap:0 1rem;padding:0.85rem 0;border-top:1px solid var(--frame-line);">
                                                <span style="font-size:0.625rem;letter-spacing:0.14em;text-transform:uppercase;color:var(--wp--preset--color--muted);">02</span>
                                                <span>A thirty-minute conversation - by call or in the studio - to feel the fit.</span>
                                        </li>
                                        <li style="display:grid;grid-template-columns:2.5rem 1fr;gap:0 1rem;padding:0.85rem 0;border-top:1px solid var(--frame-line);border-bottom:1px solid var(--frame-line);">
                                                <span style="font-size:0.625rem;letter-spacing:0.14em;text-transform:uppercase;color:var(--wp--preset--color--muted);">03</span>
                                                <span>A scoped proposal - dates, deliverables, fee - within the week.</span>
                                        </li>
                                </ol>
                                <!-- /wp:html -->
                        </div>
                        <!-- /wp:column -->
                        <!-- wp:column {"width":"60%"} -->
                        <div class="wp-block-column" style="flex-basis:60%">
                                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"color":{"background":"var:preset|color|surface-muted"},"border":{"color":"var:preset|color|line","radius":"0","style":"solid","width":"1px"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group has-background-color has-border-color" style="background-color:var(--wp--preset--color--surface-muted);border-color:var(--wp--preset--color--line);border-radius:0;border-style:solid;border-width:1px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50)">
                                        <!-- wp:paragraph {"className":"is-style-frame-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
                                        <p class="is-style-frame-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:400;margin-bottom:var(--wp--preset--spacing--40)">- Inquiry</p>
                                        <!-- /wp:paragraph -->
                                        <!-- wp:html -->
                                        <style>
                                        .wp-block-godevs-demo-frame .frame-form {
                                                display: grid;
                                                gap: 1.5rem;
                                                font-family: var(--wp--preset--font-family--body, "Inter", sans-serif);
                                        }
                                        .wp-block-godevs-demo-frame .frame-form-field { display: flex; flex-direction: column; gap: 0.5rem; }
                                        .wp-block-godevs-demo-frame .frame-form-label {
                                                font-family: var(--wp--preset--font-family--body, "Inter", sans-serif);
                                                font-size: 0.625rem;
                                                letter-spacing: 0.16em;
                                                text-transform: uppercase;
                                                color: var(--frame-muted);
                                                font-weight: 400;
                                                line-height: 1.4;
                                        }
                                        .wp-block-godevs-demo-frame .frame-form-field input[type="text"],
                                        .wp-block-godevs-demo-frame .frame-form-field input[type="email"],
                                        .wp-block-godevs-demo-frame .frame-form-field select,
                                        .wp-block-godevs-demo-frame .frame-form-field textarea {
                                                font-family: var(--wp--preset--font-family--body, "Inter", sans-serif);
                                                font-weight: 300;
                                                font-size: 0.9375rem;
                                                line-height: 1.5;
                                                color: var(--frame-soft);
                                                background: transparent;
                                                border: 1px solid var(--frame-line);
                                                border-radius: 0;
                                                padding: 0.85rem 0.95rem;
                                                width: 100%;
                                                box-sizing: border-box;
                                                transition: border-color 0.3s ease, box-shadow 0.3s ease;
                                                -webkit-appearance: none;
                                                appearance: none;
                                        }
                                        .wp-block-godevs-demo-frame .frame-form-field textarea {
                                                resize: vertical;
                                                min-height: 7rem;
                                        }
                                        .wp-block-godevs-demo-frame .frame-form-field select {
                                                background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'><path d='M1 4l5 5 5-5' fill='none' stroke='%238A8A8A' stroke-width='1.4' stroke-linecap='round' stroke-linejoin='round'/></svg>");
                                                background-repeat: no-repeat;
                                                background-position: right 0.95rem center;
                                                padding-right: 2.25rem;
                                                cursor: pointer;
                                        }
                                        .wp-block-godevs-demo-frame .frame-form-field select option {
                                                background: #0B0B0B;
                                                color: var(--frame-soft);
                                        }
                                        .wp-block-godevs-demo-frame .frame-form-field input::placeholder,
                                        .wp-block-godevs-demo-frame .frame-form-field textarea::placeholder {
                                                color: var(--frame-muted);
                                                font-weight: 300;
                                                opacity: 0.8;
                                        }
                                        .wp-block-godevs-demo-frame .frame-form-field input:focus,
                                        .wp-block-godevs-demo-frame .frame-form-field select:focus,
                                        .wp-block-godevs-demo-frame .frame-form-field textarea:focus {
                                                outline: none;
                                                border-color: var(--frame-accent);
                                                box-shadow: 0 0 0 1px var(--frame-accent);
                                        }
                                        .wp-block-godevs-demo-frame .frame-form-submit {
                                                align-self: start;
                                                display: inline-flex;
                                                align-items: center;
                                                gap: 0.5rem;
                                                font-family: var(--wp--preset--font-family--body, "Inter", sans-serif);
                                                font-size: 0.75rem;
                                                font-weight: 500;
                                                letter-spacing: 0.16em;
                                                text-transform: uppercase;
                                                color: var(--frame-ink);
                                                background: var(--frame-soft);
                                                border: 1px solid var(--frame-soft);
                                                border-radius: 0;
                                                padding: 0.95rem 1.5rem;
                                                cursor: pointer;
                                                transition: background 0.4s ease, color 0.4s ease, border-color 0.4s ease;
                                        }
                                        .wp-block-godevs-demo-frame .frame-form-submit:hover,
                                        .wp-block-godevs-demo-frame .frame-form-submit:focus-visible {
                                                background: var(--frame-accent);
                                                border-color: var(--frame-accent);
                                                color: var(--frame-ink);
                                                outline: none;
                                        }
                                        .wp-block-godevs-demo-frame .frame-form-submit .frame-arrow {
                                                font-family: var(--wp--preset--font-family--serif, "Newsreader", serif);
                                                font-style: italic;
                                                font-size: 1rem;
                                                display: inline-block;
                                                transition: transform 0.4s cubic-bezier(0.2, 0.8, 0.2, 1);
                                        }
                                        .wp-block-godevs-demo-frame .frame-form-submit:hover .frame-arrow,
                                        .wp-block-godevs-demo-frame .frame-form-submit:focus-visible .frame-arrow {
                                                transform: translateX(3px);
                                        }
                                        .wp-block-godevs-demo-frame .frame-form-note {
                                                font-family: var(--wp--preset--font-family--body, "Inter", sans-serif);
                                                font-size: 0.625rem;
                                                letter-spacing: 0.14em;
                                                text-transform: uppercase;
                                                color: var(--frame-muted);
                                                line-height: 1.6;
                                                margin: 0;
                                        }
                                        @media (max-width: 600px) {
                                                .wp-block-godevs-demo-frame .frame-form { gap: 1.25rem; }
                                        }
                                        @media (prefers-reduced-motion: reduce) {
                                                .wp-block-godevs-demo-frame .frame-form-submit,
                                                .wp-block-godevs-demo-frame .frame-form-submit .frame-arrow,
                                                .wp-block-godevs-demo-frame .frame-form-field input,
                                                .wp-block-godevs-demo-frame .frame-form-field select,
                                                .wp-block-godevs-demo-frame .frame-form-field textarea {
                                                        transition: none !important;
                                                }
                                        }
                                        </style>
                                        <form class="frame-form" action="#" method="post" aria-label="Project inquiry form">
                                                <div class="frame-form-field">
                                                        <label class="frame-form-label" for="frame-name">Name</label>
                                                        <input type="text" id="frame-name" name="frame-name" autocomplete="name" required>
                                                </div>
                                                <div class="frame-form-field">
                                                        <label class="frame-form-label" for="frame-email">Email</label>
                                                        <input type="email" id="frame-email" name="frame-email" autocomplete="email" required>
                                                </div>
                                                <div class="frame-form-field">
                                                        <label class="frame-form-label" for="frame-type">Project type</label>
                                                        <select id="frame-type" name="frame-type">
                                                                <option value="">Select…</option>
                                                                <option value="editorial">Editorial</option>
                                                                <option value="brand">Brand</option>
                                                                <option value="fine-art-print">Fine-art Print</option>
                                                                <option value="portrait">Portrait</option>
                                                                <option value="architecture">Architecture</option>
                                                                <option value="commissioned-series">Commissioned Series</option>
                                                                <option value="other">Other</option>
                                                        </select>
                                                </div>
                                                <div class="frame-form-field">
                                                        <label class="frame-form-label" for="frame-budget">Budget</label>
                                                        <select id="frame-budget" name="frame-budget">
                                                                <option value="">Select…</option>
                                                                <option value="2-5k">€2 - 5k</option>
                                                                <option value="5-15k">€5 - 15k</option>
                                                                <option value="15-40k">€15 - 40k</option>
                                                                <option value="40k+">€40k+</option>
                                                                <option value="not-sure">Not sure</option>
                                                        </select>
                                                </div>
                                                <div class="frame-form-field">
                                                        <label class="frame-form-label" for="frame-message">Message</label>
                                                        <textarea id="frame-message" name="frame-message" rows="5" placeholder="Tell me about the project - what, where, when, and the feeling you are after."></textarea>
                                                </div>
                                                <button type="submit" class="frame-form-submit">Send inquiry <span class="frame-arrow" aria-hidden="true">→</span></button>
                                                <p class="frame-form-note">Demo form - connect a form plugin or the theme's front-forms feature.</p>
                                        </form>
                                        <!-- /wp:html -->
                                </div>
                                <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
        </section>
        <!-- /wp:group -->

        <!-- === FAQ - bordered list === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
                        <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
                                <!-- wp:paragraph {"className":"is-style-frame-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-frame-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:400">- Frequently asked</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:heading {"level":2,"className":"frame-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.5rem, 6vw, 5.5rem)","lineHeight":"0.98","letterSpacing":"-0.03em","fontWeight":"300"}}} -->
                                <h2 class="wp-block-heading frame-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.5rem, 6vw, 5.5rem);line-height:0.98;letter-spacing:-0.03em;font-weight:300">Before you write</h2>
                                <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:html -->
                        <div style="border-top:1px solid var(--frame-line);">
                                <div style="display:grid;grid-template-columns:3rem 1fr;gap:0 2rem;padding:1.5rem 0;border-bottom:1px solid var(--frame-line);">
                                        <span style="font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.14em;color:var(--frame-muted);padding-top:0.5rem;">01</span>
                                        <div>
                                                <p style="margin:0 0 0.6rem 0;font-family:var(--wp--preset--font-family--display);font-weight:300;font-size:clamp(1.25rem, 2vw, 1.625rem);letter-spacing:-0.015em;line-height:1.15;color:var(--wp--preset--color--foreground);">How quickly do you respond?</p>
                                                <p style="margin:0;font-family:var(--wp--preset--font-family--body);font-weight:300;font-size:0.9375rem;line-height:1.7;color:var(--wp--preset--color--muted);max-width:60ch;">Every brief is read by me, usually within three days. If your timeline is tighter than that, mention it in the subject line and I'll reply sooner.</p>
                                        </div>
                                </div>
                                <div style="display:grid;grid-template-columns:3rem 1fr;gap:0 2rem;padding:1.5rem 0;border-bottom:1px solid var(--frame-line);">
                                        <span style="font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.14em;color:var(--frame-muted);padding-top:0.5rem;">02</span>
                                        <div>
                                                <p style="margin:0 0 0.6rem 0;font-family:var(--wp--preset--font-family--display);font-weight:300;font-size:clamp(1.25rem, 2vw, 1.625rem);letter-spacing:-0.015em;line-height:1.15;color:var(--wp--preset--color--foreground);">What should I include in my brief?</p>
                                                <p style="margin:0;font-family:var(--wp--preset--font-family--body);font-weight:300;font-size:0.9375rem;line-height:1.7;color:var(--wp--preset--color--muted);max-width:60ch;">A short paragraph on the project, the dates you are working towards, where the photograph will live, and a sense of the feeling you are after - references are welcome but not required.</p>
                                        </div>
                                </div>
                                <div style="display:grid;grid-template-columns:3rem 1fr;gap:0 2rem;padding:1.5rem 0;border-bottom:1px solid var(--frame-line);">
                                        <span style="font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.14em;color:var(--frame-muted);padding-top:0.5rem;">03</span>
                                        <div>
                                                <p style="margin:0 0 0.6rem 0;font-family:var(--wp--preset--font-family--display);font-weight:300;font-size:clamp(1.25rem, 2vw, 1.625rem);letter-spacing:-0.015em;line-height:1.15;color:var(--wp--preset--color--foreground);">Do you travel for commissions?</p>
                                                <p style="margin:0;font-family:var(--wp--preset--font-family--body);font-weight:300;font-size:0.9375rem;line-height:1.7;color:var(--wp--preset--color--muted);max-width:60ch;">Yes - roughly a third of the work is made outside Portugal. Travel and production are scoped into the proposal, with a preference for slower trips that let the place arrive before the camera does.</p>
                                        </div>
                                </div>
                                <div style="display:grid;grid-template-columns:3rem 1fr;gap:0 2rem;padding:1.5rem 0;border-bottom:1px solid var(--frame-line);">
                                        <span style="font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.14em;color:var(--frame-muted);padding-top:0.5rem;">04</span>
                                        <div>
                                                <p style="margin:0 0 0.6rem 0;font-family:var(--wp--preset--font-family--display);font-weight:300;font-size:clamp(1.25rem, 2vw, 1.625rem);letter-spacing:-0.015em;line-height:1.15;color:var(--wp--preset--color--foreground);">Do you sell prints?</p>
                                                <p style="margin:0;font-family:var(--wp--preset--font-family--body);font-weight:300;font-size:0.9375rem;line-height:1.7;color:var(--wp--preset--color--muted);max-width:60ch;">Selected series are released as signed, numbered editions on Hahnemühle Photo Rag - usually twice a year. Enquiries go to studio@frame.photo or through the Print Store link above.</p>
                                        </div>
                                </div>
                        </div>
                        <!-- /wp:html -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- === CTA - brief closing line === -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:paragraph {"className":"is-style-frame-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"400"},"color":{"text":"var:preset|color|muted"}}} -->
                        <p class="is-style-frame-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:400">- Or simply</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.5rem, 3vw, 2.25rem)","fontWeight":"300","letterSpacing":"-0.015em","lineHeight":"1.2"},"color":{"text":"var:preset|color|muted"},"layout":{"selfStretch":"fit","flexSize":"48ch"}}} -->
                        <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--display);font-size:clamp(1.5rem, 3vw, 2.25rem);font-weight:300;letter-spacing:-0.015em;line-height:1.2;max-width:48ch">Prefer email? Write directly to <a href="mailto:studio@frame.photo" style="text-decoration:none;color:var(--wp--preset--color--foreground);border-bottom:1px solid var(--frame-line);transition:color 0.4s ease, border-color 0.4s ease;">studio@frame.photo</a> - I read every one myself.</p>
                        <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->


        <!-- Project proposal form -->
        <!-- wp:group {"tagName":"section","className":"godevs-proposal-section","layout":{"type":"constrained","contentSize":"760px"}} -->
        <section class="wp-block-group godevs-proposal-section" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
                <!-- wp:heading {"level":2} -->
                <h2 class="wp-block-heading">Book a Shoot</h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|muted"}},"className":"godevs-section-intro"} -->
                <p class="godevs-section-intro has-text-color" style="color:var(--wp--preset--color--muted);max-width:60ch">Tell me about the light you're chasing - location, mood, timeline. Let's make pictures that hold still.</p>
                <!-- /wp:paragraph -->

                <!-- wp:shortcode -->
                [godevs_proposal_form]
                <!-- /wp:shortcode -->
        </section>
        <!-- /wp:group -->

        <!-- Footer -->
        <!-- wp:template-part {"slug":"footer-frame","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
