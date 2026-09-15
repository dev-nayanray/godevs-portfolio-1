<?php
/**
 * Title: Demo — Pulse (Designer) — Contact
 * Slug: godevs-portfolio/demo-pulse-contact
 * Description: PULSE contact — inquiry form, availability, FAQ. Recommended style variation: Pulse.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, pulse, contact, inquiry, ux
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-pulse","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-pulse alignfull">

	<!-- Header -->
	<!-- wp:template-part {"slug":"header-pulse","theme":"godevs-portfolio","tagName":"header"} /-->

	<!-- ═══ 01 — HERO ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Eyebrow + meta row -->
			<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"is-style-pulse-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-pulse-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;font-weight:500">— Contact</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"is-style-pulse-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-pulse-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;font-weight:500">Berlin · Remote · UTC+1</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Display H1 -->
			<!-- wp:heading {"level":1,"className":"pulse-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600","letterSpacing":"-0.04em","lineHeight":"0.98","fontSize":"clamp(2.5rem, 7vw, 6.5rem)"}}} -->
			<h1 class="wp-block-heading pulse-display" style="font-family:var(--wp--preset--font-family--display);font-weight:600;letter-spacing:-0.04em;line-height:0.98;font-size:clamp(2.5rem, 7vw, 6.5rem)">Let's build something <span class="pulse-accent-text">measurable.</span></h1>
			<!-- /wp:heading -->

			<!-- Supporting copy -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.6"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.6;margin-top:var(--wp--preset--spacing--40);max-width:60ch">Send a brief — I take two engagements a quarter and prefer projects where the outcome can be measured. Use the form, or write directly to the address on the left.</p>
			<!-- /wp:paragraph -->

			<!-- Availability row -->
			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}},"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);margin-top:var(--wp--preset--spacing--50);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase"><span class="pulse-dot" aria-hidden="true"></span>Available for Q3 2026 · 2 engagements per quarter</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 02 — CONTACT INFO + INQUIRY FORM ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Two-column split: contact info (40%) + form (60%) -->
			<!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":"var:preset|spacing|70"}}} -->
			<div class="wp-block-columns are-vertically-aligned-top">

				<!-- LEFT — Contact info -->
				<!-- wp:column {"verticalAlignment":"top","width":"40%"} -->
				<div class="wp-block-column" style="flex-basis:40%">
					<!-- wp:paragraph {"className":"is-style-pulse-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="is-style-pulse-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;font-weight:500">— Direct</p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.75rem, 3.5vw, 2.75rem)","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
					<h2 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--40);font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 3.5vw, 2.75rem);line-height:1.1;letter-spacing:-0.02em;font-weight:600">Reach me directly.</h2>
					<!-- /wp:heading -->

					<!-- Contact details (spec sheet) -->
					<!-- wp:html -->
					<div class="pulse-spec" style="border-left:1px solid var(--pulse-line);padding-left:1.5rem;">
						<p><strong>Email</strong> — <a href="mailto:hello@pulse.design" style="color:var(--pulse-ink);">hello@pulse.design</a></p>
						<p><strong>Location</strong> — Berlin · Remote · UTC+1</p>
						<p><strong>LinkedIn</strong> — <a href="#" style="color:var(--pulse-ink);">in/pulse-design</a></p>
						<p><strong>Dribbble</strong> — <a href="#" style="color:var(--pulse-ink);">pulse</a></p>
						<p><strong>Read.cv</strong> — <a href="#" style="color:var(--pulse-ink);">/pulse</a></p>
					</div>
					<!-- /wp:html -->

					<!-- What happens next -->
					<!-- wp:paragraph {"className":"is-style-pulse-label","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|30"}},"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="is-style-pulse-label has-text-color" style="color:var(--wp--preset--color--muted);margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--30);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;font-weight:500">— What happens next</p>
					<!-- /wp:paragraph -->
					<!-- wp:html -->
					<ol style="list-style:none;margin:0;padding:0;display:grid;gap:1rem;">
						<li style="display:grid;grid-template-columns:2rem 1fr;gap:0.75rem;align-items:baseline;">
							<span style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;color:var(--pulse-accent);">01</span>
							<span style="font-family:var(--wp--preset--font-family--body);font-size:0.9375rem;line-height:1.6;color:var(--pulse-ink);">I review your brief within 2 days.</span>
						</li>
						<li style="display:grid;grid-template-columns:2rem 1fr;gap:0.75rem;align-items:baseline;">
							<span style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;color:var(--pulse-accent);">02</span>
							<span style="font-family:var(--wp--preset--font-family--body);font-size:0.9375rem;line-height:1.6;color:var(--pulse-ink);">A 30-minute intro call — to align on the problem and the outcome.</span>
						</li>
						<li style="display:grid;grid-template-columns:2rem 1fr;gap:0.75rem;align-items:baseline;">
							<span style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;color:var(--pulse-accent);">03</span>
							<span style="font-family:var(--wp--preset--font-family--body);font-size:0.9375rem;line-height:1.6;color:var(--pulse-ink);">A scoped proposal — with the metric we're optimising for and a fixed fee.</span>
						</li>
					</ol>
					<!-- /wp:html -->
				</div>
				<!-- /wp:column -->

				<!-- RIGHT — Visual inquiry form (wrapped in surface-muted group) -->
				<!-- wp:column {"verticalAlignment":"top","width":"60%"} -->
				<div class="wp-block-column" style="flex-basis:60%">
					<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"color":{"background":"var:preset|color|surface-muted"},"border":{"radius":"8px"}},"layout":{"type":"default"}} -->
					<div class="wp-block-group has-surface-muted-background-color has-background" style="background-color:var(--wp--preset--color--surface-muted);border-radius:8px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50)">

						<!-- Compound block: scoped style + heading + form + demo note (kept together) -->
						<!-- wp:html -->
						<style>
							/* Scoped form styles — namespaced under .wp-block-godevs-demo-pulse so they don't leak. */
							.wp-block-godevs-demo-pulse .pulse-form {
								display: grid;
								grid-template-columns: 1fr 1fr;
								gap: 1.25rem;
								margin: 0;
							}
							.wp-block-godevs-demo-pulse .pulse-form .pulse-field { display: flex; flex-direction: column; gap: 0.5rem; }
							.wp-block-godevs-demo-pulse .pulse-form .pulse-field--full { grid-column: 1 / -1; }
							.wp-block-godevs-demo-pulse .pulse-form label {
								font-family: var(--wp--preset--font-family--mono, monospace);
								font-size: 0.75rem;
								letter-spacing: 0.06em;
								text-transform: uppercase;
								color: var(--pulse-muted, #6B7280);
								font-weight: 500;
							}
							.wp-block-godevs-demo-pulse .pulse-form input[type="text"],
							.wp-block-godevs-demo-pulse .pulse-form input[type="email"],
							.wp-block-godevs-demo-pulse .pulse-form select,
							.wp-block-godevs-demo-pulse .pulse-form textarea {
								font-family: var(--wp--preset--font-family--body, "Inter", sans-serif);
								font-size: 0.9375rem;
								line-height: 1.5;
								color: var(--pulse-ink, #0F1115);
								background: var(--pulse-base, #FAFAF8);
								border: 1px solid var(--pulse-line, #E5E7EB);
								border-radius: 6px;
								padding: 0.75rem 0.875rem;
								width: 100%;
								box-sizing: border-box;
								transition: border-color 0.2s ease, box-shadow 0.2s ease;
								-webkit-appearance: none;
								appearance: none;
							}
							.wp-block-godevs-demo-pulse .pulse-form textarea { min-height: 8rem; resize: vertical; }
							.wp-block-godevs-demo-pulse .pulse-form select {
								background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8' fill='none'><path d='M1 1L6 6L11 1' stroke='%236B7280' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/></svg>");
								background-repeat: no-repeat;
								background-position: right 0.875rem center;
								padding-right: 2.25rem;
							}
							.wp-block-godevs-demo-pulse .pulse-form input[type="text"]:focus,
							.wp-block-godevs-demo-pulse .pulse-form input[type="email"]:focus,
							.wp-block-godevs-demo-pulse .pulse-form select:focus,
							.wp-block-godevs-demo-pulse .pulse-form textarea:focus {
								border-color: var(--pulse-accent, #0D9488);
								box-shadow: 0 0 0 3px var(--pulse-accent-soft, rgba(13, 148, 136, 0.12));
								outline: none;
							}
							.wp-block-godevs-demo-pulse .pulse-form .pulse-form-actions { grid-column: 1 / -1; display: flex; justify-content: space-between; align-items: center; gap: 1rem; flex-wrap: wrap; margin-top: 0.5rem; }
							.wp-block-godevs-demo-pulse .pulse-form .pulse-submit {
								font-family: var(--wp--preset--font-family--body, "Inter", sans-serif);
								font-size: 0.875rem;
								font-weight: 500;
								color: var(--pulse-base, #FAFAF8);
								background: var(--pulse-accent, #0D9488);
								border: 1px solid var(--pulse-accent, #0D9488);
								border-radius: 6px;
								padding: 0.75rem 1.25rem;
								cursor: pointer;
								transition: background-color 0.2s ease, border-color 0.2s ease, transform 0.2s ease;
								display: inline-flex;
								align-items: center;
								gap: 0.5rem;
							}
							.wp-block-godevs-demo-pulse .pulse-form .pulse-submit:hover,
							.wp-block-godevs-demo-pulse .pulse-form .pulse-submit:focus {
								background: var(--pulse-accent-hover, #0B7C72);
								border-color: var(--pulse-accent-hover, #0B7C72);
								outline: none;
							}
							.wp-block-godevs-demo-pulse .pulse-form .pulse-submit:focus-visible {
								box-shadow: 0 0 0 3px var(--pulse-accent-soft, rgba(13, 148, 136, 0.12));
							}
							.wp-block-godevs-demo-pulse .pulse-form-note {
								font-family: var(--wp--preset--font-family--mono, monospace);
								font-size: 0.6875rem;
								letter-spacing: 0.04em;
								color: var(--pulse-muted, #6B7280);
								margin: 0;
							}
							@media (max-width: 640px) {
								.wp-block-godevs-demo-pulse .pulse-form { grid-template-columns: 1fr; }
							}
							@media (prefers-reduced-motion: reduce) {
								.wp-block-godevs-demo-pulse .pulse-form input,
								.wp-block-godevs-demo-pulse .pulse-form select,
								.wp-block-godevs-demo-pulse .pulse-form textarea,
								.wp-block-godevs-demo-pulse .pulse-form .pulse-submit { transition: none !important; }
							}
						</style>

						<p class="is-style-pulse-label" style="color:var(--pulse-accent);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;font-weight:500;margin:0 0 0.75rem;">— Inquiry form</p>
						<h3 style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.5rem, 3vw, 2.25rem);line-height:1.1;letter-spacing:-0.02em;font-weight:600;margin:0 0 1.75rem;color:var(--pulse-ink);">Send a brief.</h3>

						<form class="pulse-form" action="#" method="post" aria-label="Project inquiry form">
							<div class="pulse-field">
								<label for="pulse-name">Name</label>
								<input type="text" id="pulse-name" name="pulse_name" autocomplete="name" placeholder="Your name" required>
							</div>
							<div class="pulse-field">
								<label for="pulse-email">Email</label>
								<input type="email" id="pulse-email" name="pulse_email" autocomplete="email" placeholder="you@company.com" required>
							</div>
							<div class="pulse-field">
								<label for="pulse-company">Company</label>
								<input type="text" id="pulse-company" name="pulse_company" autocomplete="organization" placeholder="Company or product">
							</div>
							<div class="pulse-field">
								<label for="pulse-type">Project type</label>
								<select id="pulse-type" name="pulse_type">
									<option value="">Select…</option>
									<option value="product-design">Product Design</option>
									<option value="ux-research">UX Research</option>
									<option value="design-system">Design System</option>
									<option value="audit">Design Audit</option>
									<option value="workshop">Workshop</option>
									<option value="other">Other</option>
								</select>
							</div>
							<div class="pulse-field">
								<label for="pulse-budget">Budget</label>
								<select id="pulse-budget" name="pulse_budget">
									<option value="">Select…</option>
									<option value="10-25">€10 — 25k</option>
									<option value="25-50">€25 — 50k</option>
									<option value="50-100">€50 — 100k</option>
									<option value="100+">€100k+</option>
									<option value="not-sure">Not sure</option>
								</select>
							</div>
							<div class="pulse-field">
								<label for="pulse-timeline">Timeline</label>
								<select id="pulse-timeline" name="pulse_timeline">
									<option value="">Select…</option>
									<option value="asap">ASAP</option>
									<option value="1-3m">1 — 3 months</option>
									<option value="3-6m">3 — 6 months</option>
									<option value="flexible">Flexible</option>
								</select>
							</div>
							<div class="pulse-field pulse-field--full">
								<label for="pulse-message">Message</label>
								<textarea id="pulse-message" name="pulse_message" placeholder="What are you building, and what outcome are you optimising for?"></textarea>
							</div>
							<div class="pulse-form-actions">
								<p class="pulse-form-note">Demo form — connect a form plugin or the theme's front-forms feature.</p>
								<button type="submit" class="pulse-submit">Send inquiry <span aria-hidden="true">→</span></button>
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

	<!-- ═══ 03 — FAQ ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
			<div class="wp-block-columns">
				<!-- wp:column {"width":"30%"} -->
				<div class="wp-block-column" style="flex-basis:30%">
					<!-- wp:paragraph {"className":"is-style-pulse-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="is-style-pulse-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase;font-weight:500">— FAQ</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":"70%"} -->
				<div class="wp-block-column" style="flex-basis:70%">
					<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.75rem, 3.5vw, 2.75rem)","lineHeight":"1.1","letterSpacing":"-0.02em","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
					<h2 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--50);font-family:var(--wp--preset--font-family--display);font-size:clamp(1.75rem, 3.5vw, 2.75rem);line-height:1.1;letter-spacing:-0.02em;font-weight:600">Before you write.</h2>
					<!-- /wp:heading -->
					<!-- wp:html -->
					<div>
						<div class="pulse-exp-row">
							<span class="pulse-exp-year">01</span>
							<span class="pulse-exp-role">How quickly do you respond?</span>
							<span class="pulse-exp-org">Most briefs get a reply within two business days. If we're already working together, you'll hear back the same day.</span>
						</div>
						<div class="pulse-exp-row">
							<span class="pulse-exp-year">02</span>
							<span class="pulse-exp-role">What should I include in my brief?</span>
							<span class="pulse-exp-org">The product in one sentence, the audience, the problem, the metric you care about, and a rough timeline. A link to the current product helps.</span>
						</div>
						<div class="pulse-exp-row">
							<span class="pulse-exp-year">03</span>
							<span class="pulse-exp-role">Do you work with early-stage teams?</span>
							<span class="pulse-exp-org">Yes — about a third of my engagements are pre-Series A. The brief matters more than the stage; I'll say so if the timing isn't right.</span>
						</div>
						<div class="pulse-exp-row">
							<span class="pulse-exp-year">04</span>
							<span class="pulse-exp-role">Can you work with my in-house team?</span>
							<span class="pulse-exp-org">Often the best setup. I work embedded with your designers and engineers, hand off a system, and stay available for review.</span>
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

	<!-- ═══ 04 — CLOSING NOTE ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase"},"color":{"text":"var:preset|color|muted"}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase"><span class="pulse-dot" aria-hidden="true"></span>Prefer to write first? hello@pulse.design</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.75rem","letterSpacing":"0.06em","textTransform":"uppercase"}}} -->
			<p style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;letter-spacing:0.06em;text-transform:uppercase"><a href="/work">View case studies →</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->


	<!-- Project proposal form -->
	<!-- wp:group {"tagName":"section","className":"godevs-proposal-section","layout":{"type":"constrained","contentSize":"760px"}} -->
	<section class="wp-block-group godevs-proposal-section" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
		<!-- wp:heading {"level":2} -->
		<h2 class="wp-block-heading">Let's Build a Better Product</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|muted"}},"className":"godevs-section-intro"} -->
		<p class="godevs-section-intro has-text-color" style="color:var(--wp--preset--color--muted);max-width:60ch">Tell us about your users, your goals and what's not working yet. We'll help you fix it.</p>
		<!-- /wp:paragraph -->

		<!-- wp:shortcode -->
		[godevs_proposal_form]
		<!-- /wp:shortcode -->
	</section>
	<!-- /wp:group -->

	<!-- Footer -->
	<!-- wp:template-part {"slug":"footer-pulse","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
