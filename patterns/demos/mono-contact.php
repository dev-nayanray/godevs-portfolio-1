<?php
/**
 * Title: Demo — Mono (Developer) — Contact
 * Slug: godevs-portfolio/demo-mono-contact
 * Description: MONO contact — inquiry form, availability, FAQ. Recommended style variation: Mono.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, mono, contact, inquiry
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-mono","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-mono alignfull">

        <!-- Header -->
        <!-- wp:template-part {"slug":"header-mono","theme":"godevs-portfolio","tagName":"header"} /-->

        <!-- ═══ 01 — HERO ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- Eyebrow + meta row -->
                        <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                        <div class="wp-block-group">
                                <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
                                <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">— Contact</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">Replies within 2 business days</p>
                                <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- Display H1 -->
                        <!-- wp:heading {"level":1,"className":"mono-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600","letterSpacing":"-0.03em","lineHeight":"1.0","fontSize":"clamp(2.5rem, 8vw, 7.5rem)"}}} -->
                        <h1 class="wp-block-heading mono-display" style="font-family:var(--wp--preset--font-family--display);font-weight:600;letter-spacing:-0.03em;line-height:1.0;font-size:clamp(2.5rem, 8vw, 7.5rem)">Have a product <span class="mono-accent-text">worth building?</span></h1>
                        <!-- /wp:heading -->

                        <!-- Supporting copy + status -->
                        <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50)">
                                <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.6"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"0","maxWidth":"60ch"}}}} -->
                                <p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.6;margin-top:0;max-width:60ch">Tell me about the product, the team, the timeline. I'll review your brief, get back to you within two business days, and if we're a fit, we'll set up a 30-minute call.</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|foreground"}}} -->
                                <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--foreground);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500"><span class="mono-dot" aria-hidden="true"></span>Available for selected projects</p>
                                <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ 02 — CONTACT INFO + INQUIRY FORM ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">

                        <!-- 40/60 split: info left, form right -->
                        <!-- wp:html -->
                        <div class="mono-2col mono-contact-split" style="--mono-split: 1fr 1.5fr;">
                                <!-- LEFT: contact info -->
                                <div class="mono-contact-info">
                                        <p class="is-style-mono-label" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500;margin:0 0 1.5rem 0;">— Direct</p>

                                        <div class="mono-facts">
                                                <div class="mono-fact-row">
                                                        <span class="mono-fact-key">Email</span>
                                                        <span class="mono-fact-val"><a href="mailto:hello@mono.dev">hello@mono.dev</a></span>
                                                </div>
                                                <div class="mono-fact-row">
                                                        <span class="mono-fact-key">Location</span>
                                                        <span class="mono-fact-val">Europe / Asia · Working globally</span>
                                                </div>
                                                <div class="mono-fact-row">
                                                        <span class="mono-fact-key">Hours</span>
                                                        <span class="mono-fact-val">09:00 — 18:00 CET, Mon — Fri</span>
                                                </div>
                                                <div class="mono-fact-row">
                                                        <span class="mono-fact-key">Social</span>
                                                        <span class="mono-fact-val">
                                                                <a href="#" style="margin-right:1rem;">GitHub</a>
                                                                <a href="#" style="margin-right:1rem;">LinkedIn</a>
                                                                <a href="#" style="margin-right:1rem;">Email</a>
                                                                <a href="#">RSS</a>
                                                        </span>
                                                </div>
                                        </div>

                                        <p class="is-style-mono-label" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500;margin:2.5rem 0 1rem 0;">— What happens next</p>
                                        <ol class="mono-next-list" style="list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:1rem;">
                                                <li style="display:grid;grid-template-columns:2rem 1fr;gap:0.75rem;align-items:baseline;">
                                                        <span aria-hidden="true" style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;font-weight:600;color:var(--wp--preset--color--accent);">01</span>
                                                        <span style="font-family:var(--wp--preset--font-family--body);font-size:0.9375rem;line-height:1.55;color:var(--wp--preset--color--muted);">I review your brief within 2 business days.</span>
                                                </li>
                                                <li style="display:grid;grid-template-columns:2rem 1fr;gap:0.75rem;align-items:baseline;">
                                                        <span aria-hidden="true" style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;font-weight:600;color:var(--wp--preset--color--accent);">02</span>
                                                        <span style="font-family:var(--wp--preset--font-family--body);font-size:0.9375rem;line-height:1.55;color:var(--wp--preset--color--muted);">A 30-minute call to scope the problem together.</span>
                                                </li>
                                                <li style="display:grid;grid-template-columns:2rem 1fr;gap:0.75rem;align-items:baseline;">
                                                        <span aria-hidden="true" style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;font-weight:600;color:var(--wp--preset--color--accent);">03</span>
                                                        <span style="font-family:var(--wp--preset--font-family--body);font-size:0.9375rem;line-height:1.55;color:var(--wp--preset--color--muted);">A scoped proposal — timeline, deliverables, fixed fee.</span>
                                                </li>
                                        </ol>
                                </div>

                                <!-- RIGHT: inquiry form -->
                                <style>
                                .wp-block-godevs-demo-mono .mono-form { display: flex; flex-direction: column; gap: 1.5rem; margin: 0; }
                                .wp-block-godevs-demo-mono .mono-form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 1.25rem; }
                                .wp-block-godevs-demo-mono .mono-field { display: flex; flex-direction: column; gap: 0.5rem; margin: 0; }
                                .wp-block-godevs-demo-mono .mono-field-label { font-family: var(--wp--preset--font-family--mono, monospace); font-size: 0.6875rem; letter-spacing: 0.04em; text-transform: uppercase; font-weight: 600; color: var(--wp--preset--color--muted); margin: 0; }
                                .wp-block-godevs-demo-mono .mono-field-input,
                                .wp-block-godevs-demo-mono .mono-field-select,
                                .wp-block-godevs-demo-mono .mono-field-textarea {
                                        font-family: var(--wp--preset--font-family--body, "Inter", sans-serif);
                                        font-size: 0.9375rem;
                                        line-height: 1.5;
                                        color: var(--wp--preset--color--foreground);
                                        background: var(--wp--preset--color--surface-muted, transparent);
                                        border: 1px solid var(--wp--preset--color--line);
                                        border-radius: 4px;
                                        padding: 0.75rem 0.875rem;
                                        -webkit-appearance: none;
                                        -moz-appearance: none;
                                        appearance: none;
                                        margin: 0;
                                        width: 100%;
                                        box-sizing: border-box;
                                        transition: border-color 200ms ease, background 200ms ease, box-shadow 200ms ease;
                                }
                                .wp-block-godevs-demo-mono .mono-field-textarea { min-height: 8rem; resize: vertical; }
                                .wp-block-godevs-demo-mono .mono-field-select {
                                        background-image: linear-gradient(45deg, transparent 50%, var(--wp--preset--color--muted) 50%), linear-gradient(135deg, var(--wp--preset--color--muted) 50%, transparent 50%);
                                        background-position: calc(100% - 1rem) center, calc(100% - 0.85rem) center;
                                        background-size: 6px 6px, 6px 6px;
                                        background-repeat: no-repeat;
                                        padding-right: 2.25rem;
                                }
                                .wp-block-godevs-demo-mono .mono-field-input::placeholder,
                                .wp-block-godevs-demo-mono .mono-field-textarea::placeholder { color: var(--wp--preset--color--muted); opacity: 1; }
                                .wp-block-godevs-demo-mono .mono-field-input:focus,
                                .wp-block-godevs-demo-mono .mono-field-select:focus,
                                .wp-block-godevs-demo-mono .mono-field-textarea:focus {
                                        outline: none;
                                        border-color: var(--wp--preset--color--accent);
                                        background: rgba(37, 99, 235, 0.04);
                                        box-shadow: 0 0 0 1px var(--wp--preset--color--accent);
                                }
                                .wp-block-godevs-demo-mono .mono-form-actions { display: flex; flex-direction: row; justify-content: space-between; align-items: center; gap: 1rem; flex-wrap: wrap; margin-top: 0.5rem; }
                                .wp-block-godevs-demo-mono .mono-submit {
                                        font-family: var(--wp--preset--font-family--mono, monospace);
                                        font-size: 0.875rem;
                                        font-weight: 500;
                                        letter-spacing: 0.01em;
                                        color: var(--wp--preset--color--base);
                                        background: var(--wp--preset--color--foreground);
                                        border: 1px solid var(--wp--preset--color--foreground);
                                        border-radius: 4px;
                                        padding: 0.875rem 1.5rem;
                                        cursor: pointer;
                                        transition: background 200ms ease, color 200ms ease, border-color 200ms ease;
                                }
                                .wp-block-godevs-demo-mono .mono-submit:hover,
                                .wp-block-godevs-demo-mono .mono-submit:focus-visible {
                                        background: var(--wp--preset--color--accent);
                                        border-color: var(--wp--preset--color--accent);
                                        color: #FFFFFF;
                                        outline: none;
                                }
                                .wp-block-godevs-demo-mono .mono-form-note { font-family: var(--wp--preset--font-family--mono, monospace); font-size: 0.6875rem; letter-spacing: 0.04em; text-transform: uppercase; color: var(--wp--preset--color--muted); margin: 0; max-width: 32ch; line-height: 1.5; }
                                @media (max-width: 700px) {
                                        .wp-block-godevs-demo-mono .mono-form-row { grid-template-columns: 1fr; }
                                        .wp-block-godevs-demo-mono .mono-2col.mono-contact-split { grid-template-columns: 1fr; }
                                }
                                </style>

                                <form class="mono-form" action="#" method="post" aria-label="Inquiry form">

                                        <div class="mono-form-row">
                                                <div class="mono-field">
                                                        <label class="mono-field-label" for="mono-name">Name</label>
                                                        <input class="mono-field-input" type="text" id="mono-name" name="mono-name" placeholder="Your name" autocomplete="name" required>
                                                </div>
                                                <div class="mono-field">
                                                        <label class="mono-field-label" for="mono-email">Email</label>
                                                        <input class="mono-field-input" type="email" id="mono-email" name="mono-email" placeholder="you@studio.com" autocomplete="email" required>
                                                </div>
                                        </div>

                                        <div class="mono-field">
                                                <label class="mono-field-label" for="mono-company">Company</label>
                                                <input class="mono-field-input" type="text" id="mono-company" name="mono-company" placeholder="Company or project name" autocomplete="organization">
                                        </div>

                                        <div class="mono-form-row">
                                                <div class="mono-field">
                                                        <label class="mono-field-label" for="mono-type">Project type</label>
                                                        <select class="mono-field-select" id="mono-type" name="mono-type">
                                                                <option value="">Select…</option>
                                                                <option value="product">Product Development</option>
                                                                <option value="frontend">Frontend Engineering</option>
                                                                <option value="fullstack">Full-Stack Development</option>
                                                                <option value="wordpress">WordPress Development</option>
                                                                <option value="consulting">Technical Consulting</option>
                                                                <option value="other">Other</option>
                                                        </select>
                                                </div>
                                                <div class="mono-field">
                                                        <label class="mono-field-label" for="mono-budget">Budget</label>
                                                        <select class="mono-field-select" id="mono-budget" name="mono-budget">
                                                                <option value="">Select…</option>
                                                                <option value="5-15">$5 — 15k</option>
                                                                <option value="15-40">$15 — 40k</option>
                                                                <option value="40-100">$40 — 100k</option>
                                                                <option value="100+">$100k+</option>
                                                                <option value="unsure">Not sure</option>
                                                        </select>
                                                </div>
                                        </div>

                                        <div class="mono-field">
                                                <label class="mono-field-label" for="mono-timeline">Timeline</label>
                                                <select class="mono-field-select" id="mono-timeline" name="mono-timeline">
                                                        <option value="">Select…</option>
                                                        <option value="1-3">1 — 3 months</option>
                                                        <option value="3-6">3 — 6 months</option>
                                                        <option value="6+">6+ months</option>
                                                        <option value="flexible">Flexible</option>
                                                </select>
                                        </div>

                                        <div class="mono-field">
                                                <label class="mono-field-label" for="mono-message">Message</label>
                                                <textarea class="mono-field-textarea" id="mono-message" name="mono-message" placeholder="Tell me about the project — what are you making, who is it for, when does it need to land?"></textarea>
                                        </div>

                                        <div class="mono-form-actions">
                                                <p class="mono-form-note">Demo form — connect a form plugin or the theme's front-forms feature.</p>
                                                <button class="mono-submit" type="submit">Start a project →</button>
                                        </div>

                                </form>
                        </div>
                        <!-- /wp:html -->

                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- ═══ 03 — FAQ ═══ -->
        <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
        <section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
                <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group alignwide">
                        <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
                        <div class="wp-block-columns">
                                <!-- wp:column {"width":"30%"} -->
                                <div class="wp-block-column" style="flex-basis:30%">
                                        <!-- wp:paragraph {"className":"is-style-mono-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.01em","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
                                        <p class="is-style-mono-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.01em;font-weight:500">— FAQ</p>
                                        <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column {"width":"70%"} -->
                                <div class="wp-block-column" style="flex-basis:70%">
                                        <!-- wp:heading {"level":2,"className":"mono-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 4.5vw, 3.5rem)","lineHeight":"1.05","letterSpacing":"-0.025em","fontWeight":"600"}}} -->
                                        <h2 class="wp-block-heading mono-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 4.5vw, 3.5rem);line-height:1.05;letter-spacing:-0.025em;font-weight:600">Common questions.</h2>
                                        <!-- /wp:heading -->

                                        <!-- FAQ list -->
                                        <!-- wp:html -->
                                        <div style="margin-top: 2rem;">
                                                <div class="mono-row" style="text-decoration: none;">
                                                        <span class="mono-row-num">Q1</span>
                                                        <span class="mono-row-title">How quickly do you respond?</span>
                                                        <span class="mono-row-desc">Within two business days, usually faster. A 30-minute call follows if the brief looks like a fit.</span>
                                                        <span class="mono-row-arrow" aria-hidden="true">—</span>
                                                </div>
                                                <div class="mono-row" style="text-decoration: none;">
                                                        <span class="mono-row-num">Q2</span>
                                                        <span class="mono-row-title">What should I include in my brief?</span>
                                                        <span class="mono-row-desc">The product, the team, the timeline, the budget range, and what success looks like. A paragraph each is plenty.</span>
                                                        <span class="mono-row-arrow" aria-hidden="true">—</span>
                                                </div>
                                                <div class="mono-row" style="text-decoration: none;">
                                                        <span class="mono-row-num">Q3</span>
                                                        <span class="mono-row-title">Do you work with in-house teams?</span>
                                                        <span class="mono-row-desc">Yes — embedded alongside your engineers and designers, with clear ownership of the parts I build.</span>
                                                        <span class="mono-row-arrow" aria-hidden="true">—</span>
                                                </div>
                                                <div class="mono-row" style="text-decoration: none;">
                                                        <span class="mono-row-num">Q4</span>
                                                        <span class="mono-row-title">What's your availability?</span>
                                                        <span class="mono-row-desc">Currently booking 6 — 8 weeks ahead. Engagements from 2 weeks to 6 months, depending on scope.</span>
                                                        <span class="mono-row-arrow" aria-hidden="true">—</span>
                                                </div>
                                        </div>
                                        <!-- /wp:html -->
                                </div>
                                <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
        </section>
        <!-- /wp:group -->

        <!-- Footer -->
        <!-- wp:template-part {"slug":"footer-mono","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
