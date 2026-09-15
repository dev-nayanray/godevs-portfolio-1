<?php
/**
 * Title: Demo — Architect (Architecture) — Contact
 * Slug: godevs-portfolio/demo-architect-contact
 * Description: ARCHITECT contact — inquiry form, studio info, FAQ. Recommended style variation: Architect.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, architect, contact, inquiry
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-architect","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-architect alignfull">

	<!-- Header -->
	<!-- wp:template-part {"slug":"header-architect","theme":"godevs-portfolio","tagName":"header"} /-->

	<!-- ═══ 01 — CONTACT HERO (typography) ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"className":"is-style-arch-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.2em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
			<p class="is-style-arch-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.2em;text-transform:uppercase;font-weight:500">— Contact</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":1,"className":"arch-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"500","letterSpacing":"-0.03em","lineHeight":"0.98","fontSize":"clamp(3rem, 9vw, 8rem)"}},"layout":{"selfStretch":"fit","flexSize":"14ch"}} -->
			<h1 class="wp-block-heading arch-display" style="font-family:var(--wp--preset--font-family--display);font-weight:500;letter-spacing:-0.03em;line-height:0.98;font-size:clamp(3rem, 9vw, 8rem);max-width:14ch">Have a place in <span class="arch-italic">mind?</span></h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"layout":{"selfStretch":"fit","flexSize":"56ch"}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.7;margin-top:var(--wp--preset--spacing--40);max-width:56ch">We collaborate with clients, developers and cultural organizations on residential, commercial and civic work. Tell us about your site, your program and your timeline.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500;margin-top:var(--wp--preset--spacing--50)">Dhaka · Lisbon · Worldwide</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 02 — CONTACT INFO + INQUIRY FORM (arch-2col, 40/60) ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:html -->
			<div class="arch-2col" style="grid-template-columns: 2fr 3fr; gap: 4rem; align-items: start;">

				<!-- LEFT: Contact info -->
				<div style="display: flex; flex-direction: column; gap: 2.25rem;">
					<div>
						<p class="is-style-arch-label" style="color: var(--wp--preset--color--muted); font-family: var(--wp--preset--font-family--body); font-size: 0.6875rem; letter-spacing: 0.2em; text-transform: uppercase; font-weight: 500; margin: 0 0 0.85rem;">Studio</p>
						<p style="font-family: var(--wp--preset--font-family--body); font-size: 0.9375rem; line-height: 1.65; color: var(--arch-ink, #1C1A17); margin: 0;">House 14, Road 7<br>Dhanmondi, Dhaka 1213<br>Bangladesh</p>
					</div>
					<div>
						<p class="is-style-arch-label" style="color: var(--wp--preset--color--muted); font-family: var(--wp--preset--font-family--body); font-size: 0.6875rem; letter-spacing: 0.2em; text-transform: uppercase; font-weight: 500; margin: 0 0 0.85rem;">Email</p>
						<p style="font-family: var(--wp--preset--font-family--body); font-size: 0.9375rem; line-height: 1.65; color: var(--arch-ink, #1C1A17); margin: 0;"><a href="mailto:studio@architect.co" style="color: inherit; text-decoration: none;">studio@architect.co</a></p>
					</div>
					<div>
						<p class="is-style-arch-label" style="color: var(--wp--preset--color--muted); font-family: var(--wp--preset--font-family--body); font-size: 0.6875rem; letter-spacing: 0.2em; text-transform: uppercase; font-weight: 500; margin: 0 0 0.85rem;">Phone</p>
						<p style="font-family: var(--wp--preset--font-family--body); font-size: 0.9375rem; line-height: 1.65; color: var(--arch-ink, #1C1A17); margin: 0;">+880 1700 000 000</p>
					</div>
					<div>
						<p class="is-style-arch-label" style="color: var(--wp--preset--color--muted); font-family: var(--wp--preset--font-family--body); font-size: 0.6875rem; letter-spacing: 0.2em; text-transform: uppercase; font-weight: 500; margin: 0 0 0.85rem;">Location</p>
						<p style="font-family: var(--wp--preset--font-family--body); font-size: 0.9375rem; line-height: 1.65; color: var(--arch-ink, #1C1A17); margin: 0;">Dhaka · Lisbon</p>
					</div>
					<div>
						<p class="is-style-arch-label" style="color: var(--wp--preset--color--muted); font-family: var(--wp--preset--font-family--body); font-size: 0.6875rem; letter-spacing: 0.2em; text-transform: uppercase; font-weight: 500; margin: 0 0 0.85rem;">Social</p>
						<p style="font-family: var(--wp--preset--font-family--body); font-size: 0.6875rem; letter-spacing: 0.18em; text-transform: uppercase; font-weight: 500; margin: 0;"><a href="#" style="color: var(--arch-ink, #1C1A17); text-decoration: none; margin-right: 1.25rem;">Instagram</a><a href="#" style="color: var(--arch-ink, #1C1A17); text-decoration: none; margin-right: 1.25rem;">Behance</a><a href="#" style="color: var(--arch-ink, #1C1A17); text-decoration: none;">LinkedIn</a></p>
					</div>

					<!-- What happens next -->
					<div style="margin-top: 1.5rem; border-top: 1px solid var(--arch-line, #D9D4C8); padding-top: 2rem;">
						<p class="is-style-arch-label" style="color: var(--wp--preset--color--accent); font-family: var(--wp--preset--font-family--body); font-size: 0.6875rem; letter-spacing: 0.2em; text-transform: uppercase; font-weight: 500; margin: 0 0 1.5rem;">— What happens next</p>
						<div style="display: grid; grid-template-columns: 2.5rem 1fr; gap: 1rem; align-items: baseline; padding: 0.85rem 0; border-bottom: 1px solid var(--arch-line, #D9D4C8);">
							<span class="arch-service-num">01</span>
							<span style="font-family: var(--wp--preset--font-family--body); font-size: 0.875rem; line-height: 1.6; color: var(--arch-muted, #6E6A62);">We review your brief within 3 working days.</span>
						</div>
						<div style="display: grid; grid-template-columns: 2.5rem 1fr; gap: 1rem; align-items: baseline; padding: 0.85rem 0; border-bottom: 1px solid var(--arch-line, #D9D4C8);">
							<span class="arch-service-num">02</span>
							<span style="font-family: var(--wp--preset--font-family--body); font-size: 0.875rem; line-height: 1.6; color: var(--arch-muted, #6E6A62);">A 30-minute introductory call to align on scope.</span>
						</div>
						<div style="display: grid; grid-template-columns: 2.5rem 1fr; gap: 1rem; align-items: baseline; padding: 0.85rem 0; border-bottom: 1px solid var(--arch-line, #D9D4C8);">
							<span class="arch-service-num">03</span>
							<span style="font-family: var(--wp--preset--font-family--body); font-size: 0.875rem; line-height: 1.6; color: var(--arch-muted, #6E6A62);">A written proposal with scope, fee and timeline.</span>
						</div>
					</div>
				</div>

				<!-- RIGHT: Inquiry form (scoped styles + form) -->
				<div style="background: var(--wp--preset--color--surface-muted, #E8E3D7); padding: clamp(1.75rem, 4vw, 3.25rem);">
					<style>
						.wp-block-godevs-demo-architect .arch-form { display: grid; gap: 1.5rem; }
						.wp-block-godevs-demo-architect .arch-form-row { display: grid; gap: 0.55rem; }
						.wp-block-godevs-demo-architect .arch-form-row label {
							font-family: var(--wp--preset--font-family--body, "Inter", sans-serif);
							font-size: 0.6875rem;
							font-weight: 500;
							letter-spacing: 0.16em;
							text-transform: uppercase;
							color: var(--arch-muted, #6E6A62);
						}
						.wp-block-godevs-demo-architect .arch-form-row input,
						.wp-block-godevs-demo-architect .arch-form-row select,
						.wp-block-godevs-demo-architect .arch-form-row textarea {
							font-family: var(--wp--preset--font-family--body, "Inter", sans-serif);
							font-size: 0.9375rem;
							line-height: 1.5;
							color: var(--arch-ink, #1C1A17);
							background: transparent;
							border: 1px solid var(--arch-line, #C9C2B2);
							border-radius: 0;
							padding: 0.85rem 1rem;
							width: 100%;
							box-sizing: border-box;
							outline: none;
							transition: border-color 0.3s ease, background 0.3s ease;
							-webkit-appearance: none;
							-moz-appearance: none;
							appearance: none;
						}
						.wp-block-godevs-demo-architect .arch-form-row textarea {
							min-height: 7.5rem;
							resize: vertical;
							line-height: 1.6;
						}
						.wp-block-godevs-demo-architect .arch-form-row input:focus,
						.wp-block-godevs-demo-architect .arch-form-row select:focus,
						.wp-block-godevs-demo-architect .arch-form-row textarea:focus {
							border-color: var(--arch-accent, #8A6B3F);
							background: rgba(138, 107, 63, 0.04);
						}
						.wp-block-godevs-demo-architect .arch-form-row input::placeholder,
						.wp-block-godevs-demo-architect .arch-form-row textarea::placeholder {
							color: var(--arch-muted, #6E6A62);
							opacity: 0.55;
						}
						.wp-block-godevs-demo-architect .arch-form-row select {
							background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8'><path d='M1 1l5 5 5-5' fill='none' stroke='%236E6A62' stroke-width='1.4'/></svg>");
							background-repeat: no-repeat;
							background-position: right 1rem center;
							padding-right: 2.5rem;
							cursor: pointer;
						}
						.wp-block-godevs-demo-architect .arch-form-grid {
							display: grid;
							grid-template-columns: 1fr;
							gap: 1.5rem;
						}
						@media (min-width: 720px) {
							.wp-block-godevs-demo-architect .arch-form-grid {
								grid-template-columns: 1fr 1fr;
							}
							.wp-block-godevs-demo-architect .arch-form-grid .arch-form-row--full {
								grid-column: 1 / -1;
							}
						}
						.wp-block-godevs-demo-architect .arch-form-submit {
							font-family: var(--wp--preset--font-family--body, "Inter", sans-serif);
							font-size: 0.6875rem;
							font-weight: 500;
							letter-spacing: 0.18em;
							text-transform: uppercase;
							background: var(--arch-ink, #1C1A17);
							color: var(--arch-base, #F2EFE8);
							border: 1px solid var(--arch-ink, #1C1A17);
							border-radius: 0;
							padding: 1.1rem 1.75rem;
							cursor: pointer;
							transition: background 0.3s ease, color 0.3s ease, border-color 0.3s ease;
							display: inline-flex;
							align-items: center;
							gap: 0.85rem;
							justify-self: start;
							margin-top: 0.5rem;
						}
						.wp-block-godevs-demo-architect .arch-form-submit:hover,
						.wp-block-godevs-demo-architect .arch-form-submit:focus-visible {
							background: var(--arch-accent, #8A6B3F);
							border-color: var(--arch-accent, #8A6B3F);
							color: var(--arch-base, #F2EFE8);
							outline: none;
						}
						.wp-block-godevs-demo-architect .arch-form-note {
							font-family: var(--wp--preset--font-family--body, "Inter", sans-serif);
							font-size: 0.6875rem;
							letter-spacing: 0.14em;
							text-transform: uppercase;
							color: var(--arch-muted, #6E6A62);
							margin: 1rem 0 0;
						}
					</style>
					<form class="arch-form" action="#" method="post" aria-label="Project inquiry form">
						<div class="arch-form-grid">
							<div class="arch-form-row">
								<label for="arch-name">Name</label>
								<input id="arch-name" name="name" type="text" required placeholder="Your name">
							</div>
							<div class="arch-form-row">
								<label for="arch-email">Email</label>
								<input id="arch-email" name="email" type="email" required placeholder="you@studio.com">
							</div>
							<div class="arch-form-row arch-form-row--full">
								<label for="arch-org">Organization</label>
								<input id="arch-org" name="organization" type="text" placeholder="Company, client, or private">
							</div>
							<div class="arch-form-row">
								<label for="arch-type">Project type</label>
								<select id="arch-type" name="project_type" required>
									<option value="" disabled selected>Select</option>
									<option value="architecture">Architecture</option>
									<option value="interior">Interior</option>
									<option value="masterplanning">Masterplanning</option>
									<option value="renovation">Renovation</option>
									<option value="consultation">Consultation</option>
									<option value="other">Other</option>
								</select>
							</div>
							<div class="arch-form-row">
								<label for="arch-budget">Budget</label>
								<select id="arch-budget" name="budget">
									<option value="" disabled selected>Select</option>
									<option value="50-150k">$50 – 150k</option>
									<option value="150-500k">$150 – 500k</option>
									<option value="500k-2m">$500k – 2M</option>
									<option value="2m+">$2M+</option>
									<option value="not-sure">Not sure</option>
								</select>
							</div>
							<div class="arch-form-row arch-form-row--full">
								<label for="arch-timeline">Timeline</label>
								<select id="arch-timeline" name="timeline">
									<option value="" disabled selected>Select</option>
									<option value="6-12m">6 – 12 months</option>
									<option value="1-2y">1 – 2 years</option>
									<option value="2y+">2+ years</option>
									<option value="flexible">Flexible</option>
								</select>
							</div>
							<div class="arch-form-row arch-form-row--full">
								<label for="arch-message">Message</label>
								<textarea id="arch-message" name="message" rows="5" placeholder="Tell us about the site, the program, and the conditions you have in mind."></textarea>
							</div>
						</div>
						<button type="submit" class="arch-form-submit">Start a project <span aria-hidden="true">→</span></button>
						<p class="arch-form-note">Demo form — connect a form plugin or the theme's front-forms feature.</p>
					</form>
				</div>
			</div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 03 — FAQ (bordered list, 4 questions) ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
				<!-- wp:paragraph {"className":"is-style-arch-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.2em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-arch-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.2em;text-transform:uppercase;font-weight:500">— FAQ</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"className":"arch-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 4.5vw, 3.5rem)","lineHeight":"1.04","letterSpacing":"-0.025em","fontWeight":"500"}}} -->
				<h2 class="wp-block-heading arch-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 4.5vw, 3.5rem);line-height:1.04;letter-spacing:-0.025em;font-weight:500">Common questions, briefly answered.</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- FAQ list (bordered, question + answer rows) -->
			<!-- wp:html -->
			<div style="border-top: 1px solid var(--arch-line);">
				<div style="display: grid; grid-template-columns: 3rem 1fr 2fr; gap: 1.5rem; align-items: baseline; padding: 1.5rem 0; border-bottom: 1px solid var(--arch-line);">
					<span class="arch-service-num">01</span>
					<span class="arch-service-title">How quickly do you respond?</span>
					<span class="arch-service-desc">We review every inquiry within 3 working days. Most projects begin with a 30-minute call to align on scope.</span>
				</div>
				<div style="display: grid; grid-template-columns: 3rem 1fr 2fr; gap: 1.5rem; align-items: baseline; padding: 1.5rem 0; border-bottom: 1px solid var(--arch-line);">
					<span class="arch-service-num">02</span>
					<span class="arch-service-title">What should I include in my brief?</span>
					<span class="arch-service-desc">Site location, intended program, approximate budget, timeline, and any constraints — planning, climate, or heritage.</span>
				</div>
				<div style="display: grid; grid-template-columns: 3rem 1fr 2fr; gap: 1.5rem; align-items: baseline; padding: 1.5rem 0; border-bottom: 1px solid var(--arch-line);">
					<span class="arch-service-num">03</span>
					<span class="arch-service-title">Do you work internationally?</span>
					<span class="arch-service-desc">Yes. We are based in Dhaka and Lisbon and have delivered projects across seven countries, with local partners where required.</span>
				</div>
				<div style="display: grid; grid-template-columns: 3rem 1fr 2fr; gap: 1.5rem; align-items: baseline; padding: 1.5rem 0; border-bottom: 1px solid var(--arch-line);">
					<span class="arch-service-num">04</span>
					<span class="arch-service-title">Can you work with existing structures?</span>
					<span class="arch-service-desc">Yes — renovation, adaptive reuse and sensitive transformation of existing buildings is a core part of our practice.</span>
				</div>
			</div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- Footer -->
	<!-- wp:template-part {"slug":"footer-architect","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
