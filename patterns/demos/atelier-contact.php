<?php
/**
 * Title: Demo - Atelier (Designer) - Contact
 * Slug: godevs-portfolio/demo-atelier-contact
 * Description: ATELIER contact - inquiry form, availability, FAQ. Recommended style variation: Atelier.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, atelier, contact, inquiry, designer
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-atelier","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-atelier alignfull">

	<!-- Header -->
	<!-- wp:template-part {"slug":"header-atelier","theme":"godevs-portfolio","tagName":"header"} /-->

	<!-- === 01 - HERO: editorial asymmetric === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Top metadata row -->
			<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
				<!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">- Contact</p>
				<!-- /wp:paragraph -->
				<!-- wp:html -->
				<span class="atelier-status"><span class="atelier-dot" aria-hidden="true"></span>Available for selected projects · Q3 2026</span>
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->

			<!-- Asymmetric H1 row -->
			<!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"blockGap":"var:preset|spacing|60","margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-columns are-vertically-aligned-bottom" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:column {"verticalAlignment":"bottom","width":"74%"} -->
				<div class="wp-block-column" style="flex-basis:74%">
					<!-- wp:heading {"level":1,"className":"atelier-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"400","letterSpacing":"-0.02em","lineHeight":"1.0","fontSize":"clamp(2.5rem, 7.5vw, 7rem)"}}} -->
					<h1 class="wp-block-heading atelier-display" style="font-family:var(--wp--preset--font-family--display);font-weight:400;letter-spacing:-0.02em;line-height:1.0;font-size:clamp(2.5rem, 7.5vw, 7rem)">Let's make something <span class="atelier-italic">considered.</span></h1>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"verticalAlignment":"bottom","width":"26%"} -->
				<div class="wp-block-column" style="flex-basis:26%">
					<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"1.0625rem","lineHeight":"1.55"},"color":{"text":"var:preset|color|muted"},"layout":{"selfStretch":"fit","flexSize":"30ch"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:1.0625rem;line-height:1.55;max-width:30ch">A few thoughtful details is all it takes to begin. Every inquiry is read by the studio directly.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 02 - CONTACT INFO + INQUIRY FORM === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- wp:html -->
			<div class="atelier-2col atelier-contact-split">

				<!-- LEFT: contact information -->
				<div class="atelier-contact-info">
					<p class="is-style-atelier-label" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500;margin:0 0 var(--wp--preset--spacing--40);">- Direct</p>

					<dl style="margin:0 0 var(--wp--preset--spacing--50);display:grid;grid-template-columns:1fr;gap:0;font-family:var(--wp--preset--font-family--body);font-size:0.9375rem;color:var(--atelier-ink);">
						<div style="display:grid;grid-template-columns:5.5rem 1fr;gap:1.25rem;padding:1rem 0;border-top:1px solid var(--atelier-line);align-items:baseline;">
							<dt style="color:var(--atelier-muted);text-transform:uppercase;letter-spacing:0.14em;font-size:0.6875rem;">Email</dt>
							<dd style="margin:0;font-family:var(--wp--preset--font-family--display);font-size:1.0625rem;"><a href="mailto:studio@atelier.co" style="color:var(--atelier-ink);text-decoration:none;border-bottom:1px solid var(--atelier-line);padding-bottom:1px;transition:color 0.3s ease, border-color 0.3s ease;">studio@atelier.co</a></dd>
						</div>
						<div style="display:grid;grid-template-columns:5.5rem 1fr;gap:1.25rem;padding:1rem 0;border-top:1px solid var(--atelier-line);align-items:baseline;">
							<dt style="color:var(--atelier-muted);text-transform:uppercase;letter-spacing:0.14em;font-size:0.6875rem;">Studio</dt>
							<dd style="margin:0;font-family:var(--wp--preset--font-family--display);font-size:1.0625rem;">London / Copenhagen / Dhaka</dd>
						</div>
						<div style="display:grid;grid-template-columns:5.5rem 1fr;gap:1.25rem;padding:1rem 0;border-top:1px solid var(--atelier-line);border-bottom:1px solid var(--atelier-line);align-items:baseline;">
							<dt style="color:var(--atelier-muted);text-transform:uppercase;letter-spacing:0.14em;font-size:0.6875rem;">Hours</dt>
							<dd style="margin:0;font-family:var(--wp--preset--font-family--display);font-size:1.0625rem;">Mon - Thu · 09 - 18 CET</dd>
						</div>
					</dl>

					<p class="is-style-atelier-label" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500;margin:0 0 var(--wp--preset--spacing--30);">- Elsewhere</p>
					<nav style="display:flex;flex-wrap:wrap;gap:0.5rem 1.5rem;font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:1rem;margin:0 0 var(--wp--preset--spacing--50);" aria-label="Social channels">
						<a href="#" style="color:var(--atelier-muted);text-decoration:none;border-bottom:1px solid transparent;padding:0.25rem 0;transition:color 0.3s ease, border-color 0.3s ease;">Instagram</a>
						<a href="#" style="color:var(--atelier-muted);text-decoration:none;border-bottom:1px solid transparent;padding:0.25rem 0;transition:color 0.3s ease, border-color 0.3s ease;">Behance</a>
						<a href="#" style="color:var(--atelier-muted);text-decoration:none;border-bottom:1px solid transparent;padding:0.25rem 0;transition:color 0.3s ease, border-color 0.3s ease;">LinkedIn</a>
						<a href="#" style="color:var(--atelier-muted);text-decoration:none;border-bottom:1px solid transparent;padding:0.25rem 0;transition:color 0.3s ease, border-color 0.3s ease;">Are.na</a>
					</nav>

					<p class="is-style-atelier-label" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500;margin:0 0 var(--wp--preset--spacing--30);">- What happens next</p>
					<ol style="list-style:none;margin:0;padding:0;display:grid;gap:1rem;font-family:var(--wp--preset--font-family--body);font-size:0.9375rem;color:var(--atelier-ink);">
						<li style="display:grid;grid-template-columns:1.75rem 1fr;gap:0.85rem;align-items:baseline;">
							<span style="color:var(--atelier-accent);font-style:italic;font-family:var(--wp--preset--font-family--display);font-size:1rem;">01</span>
							<span style="line-height:1.55;">I review your brief personally within three days.</span>
						</li>
						<li style="display:grid;grid-template-columns:1.75rem 1fr;gap:0.85rem;align-items:baseline;">
							<span style="color:var(--atelier-accent);font-style:italic;font-family:var(--wp--preset--font-family--display);font-size:1rem;">02</span>
							<span style="line-height:1.55;">A 30-minute conversation to align on scope and ambition.</span>
						</li>
						<li style="display:grid;grid-template-columns:1.75rem 1fr;gap:0.85rem;align-items:baseline;">
							<span style="color:var(--atelier-accent);font-style:italic;font-family:var(--wp--preset--font-family--display);font-size:1rem;">03</span>
							<span style="line-height:1.55;">A tailored proposal - scope, timeline, fee - within a week.</span>
						</li>
					</ol>
				</div>

				<!-- RIGHT: inquiry form -->
				<div class="atelier-contact-form">
					<form class="atelier-form" action="#" method="post" novalidate>
						<p class="is-style-atelier-label" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500;margin:0 0 var(--wp--preset--spacing--40);">- Inquiry</p>

						<div class="atelier-form-row" style="display:grid;grid-template-columns:1fr;gap:0.4rem;margin-bottom:1.5rem;">
							<label for="atelier-name" style="font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.14em;text-transform:uppercase;color:var(--atelier-muted);font-weight:500;">Name</label>
							<input type="text" id="atelier-name" name="atelier-name" placeholder="Your name" autocomplete="name" required style="width:100%;font-family:var(--wp--preset--font-family--body);font-size:0.9375rem;color:var(--atelier-ink);background:transparent;border:0;border-bottom:1px solid var(--atelier-line);border-radius:0;padding:0.6rem 0;outline:none;transition:border-color 0.3s ease, box-shadow 0.3s ease;">
						</div>

						<div class="atelier-form-row" style="display:grid;grid-template-columns:1fr;gap:0.4rem;margin-bottom:1.5rem;">
							<label for="atelier-email" style="font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.14em;text-transform:uppercase;color:var(--atelier-muted);font-weight:500;">Email</label>
							<input type="email" id="atelier-email" name="atelier-email" placeholder="you@studio.com" autocomplete="email" required style="width:100%;font-family:var(--wp--preset--font-family--body);font-size:0.9375rem;color:var(--atelier-ink);background:transparent;border:0;border-bottom:1px solid var(--atelier-line);border-radius:0;padding:0.6rem 0;outline:none;transition:border-color 0.3s ease, box-shadow 0.3s ease;">
						</div>

						<div class="atelier-form-row atelier-form-row-2" style="display:grid;grid-template-columns:1fr;gap:1.5rem;margin-bottom:1.5rem;">
							<div style="display:grid;grid-template-columns:1fr;gap:0.4rem;">
								<label for="atelier-project-type" style="font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.14em;text-transform:uppercase;color:var(--atelier-muted);font-weight:500;">Project type</label>
								<div class="atelier-select" style="position:relative;border-bottom:1px solid var(--atelier-line);transition:border-color 0.3s ease;">
									<select id="atelier-project-type" name="atelier-project-type" required style="width:100%;font-family:var(--wp--preset--font-family--body);font-size:0.9375rem;color:var(--atelier-ink);background:transparent;border:0;border-radius:0;padding:0.6rem 1.5rem 0.6rem 0;outline:none;appearance:none;-webkit-appearance:none;-moz-appearance:none;cursor:pointer;">
										<option value="" disabled selected>Select a discipline</option>
										<option value="identity">Identity</option>
										<option value="art-direction">Art Direction</option>
										<option value="digital">Digital</option>
										<option value="editorial">Editorial</option>
										<option value="campaign">Campaign</option>
										<option value="other">Other</option>
									</select>
									<span aria-hidden="true" style="position:absolute;right:0;top:50%;transform:translateY(-50%);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:1rem;color:var(--atelier-muted);pointer-events:none;">↓</span>
								</div>
							</div>
							<div style="display:grid;grid-template-columns:1fr;gap:0.4rem;">
								<label for="atelier-budget" style="font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.14em;text-transform:uppercase;color:var(--atelier-muted);font-weight:500;">Budget</label>
								<div class="atelier-select" style="position:relative;border-bottom:1px solid var(--atelier-line);transition:border-color 0.3s ease;">
									<select id="atelier-budget" name="atelier-budget" required style="width:100%;font-family:var(--wp--preset--font-family--body);font-size:0.9375rem;color:var(--atelier-ink);background:transparent;border:0;border-radius:0;padding:0.6rem 1.5rem 0.6rem 0;outline:none;appearance:none;-webkit-appearance:none;-moz-appearance:none;cursor:pointer;">
										<option value="" disabled selected>Select a range</option>
										<option value="10-25">£10 - 25k</option>
										<option value="25-50">£25 - 50k</option>
										<option value="50-100">£50 - 100k</option>
										<option value="100+">£100k +</option>
										<option value="not-sure">Not sure yet</option>
									</select>
									<span aria-hidden="true" style="position:absolute;right:0;top:50%;transform:translateY(-50%);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:1rem;color:var(--atelier-muted);pointer-events:none;">↓</span>
								</div>
							</div>
						</div>

						<div class="atelier-form-row" style="display:grid;grid-template-columns:1fr;gap:0.4rem;margin-bottom:2rem;">
							<label for="atelier-message" style="font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.14em;text-transform:uppercase;color:var(--atelier-muted);font-weight:500;">Message</label>
							<textarea id="atelier-message" name="atelier-message" rows="5" placeholder="A short note on the project, the audience, and what success looks like." required style="width:100%;font-family:var(--wp--preset--font-family--body);font-size:0.9375rem;color:var(--atelier-ink);background:transparent;border:0;border-bottom:1px solid var(--atelier-line);border-radius:0;padding:0.6rem 0;outline:none;resize:vertical;transition:border-color 0.3s ease, box-shadow 0.3s ease;line-height:1.55;"></textarea>
						</div>

						<div style="display:flex;justify-content:space-between;align-items:center;gap:1.5rem;flex-wrap:wrap;">
							<button type="submit" class="atelier-form-submit" style="display:inline-flex;align-items:baseline;gap:0.6rem;font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:1.0625rem;color:var(--wp--preset--color--base);background:var(--atelier-accent);border:0;border-radius:0;padding:0.85rem 1.5rem;cursor:pointer;letter-spacing:-0.005em;transition:background 0.3s ease, transform 0.3s cubic-bezier(0.2, 0.8, 0.2, 1);">
								Send inquiry
								<span aria-hidden="true" style="display:inline-block;transition:transform 0.4s cubic-bezier(0.2, 0.8, 0.2, 1);">→</span>
							</button>
							<p style="margin:0;font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.14em;text-transform:uppercase;color:var(--atelier-muted);">Response within 3 days</p>
						</div>

						<p style="margin:1.5rem 0 0;font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:0.8125rem;color:var(--atelier-muted);line-height:1.55;">Demo form - connect a form plugin or the theme's front-forms feature.</p>
					</form>
				</div>

			</div>

			<style>
				@media (min-width: 900px) {
					.wp-block-godevs-demo-atelier .atelier-contact-split { grid-template-columns: 1fr 1.4fr !important; gap: 5rem !important; align-items: start; }
					.wp-block-godevs-demo-atelier .atelier-contact-split .atelier-form-row-2 { grid-template-columns: 1fr 1fr !important; gap: 2rem !important; }
				}
				.wp-block-godevs-demo-atelier .atelier-contact-info a:hover,
				.wp-block-godevs-demo-atelier .atelier-contact-info a:focus-visible {
					color: var(--atelier-accent) !important;
					border-bottom-color: var(--atelier-accent) !important;
					outline: none;
				}
				.wp-block-godevs-demo-atelier .atelier-form input:focus,
				.wp-block-godevs-demo-atelier .atelier-form textarea:focus,
				.wp-block-godevs-demo-atelier .atelier-form select:focus {
					border-color: var(--atelier-accent);
					box-shadow: 0 1px 0 0 var(--atelier-accent);
				}
				.wp-block-godevs-demo-atelier .atelier-form .atelier-select:focus-within {
					border-color: var(--atelier-accent);
				}
				.wp-block-godevs-demo-atelier .atelier-form select:focus option {
					color: var(--atelier-ink);
					background: var(--atelier-surface);
				}
				.wp-block-godevs-demo-atelier .atelier-form-submit:hover {
					background: var(--atelier-ink);
					color: var(--wp--preset--color--base);
				}
				.wp-block-godevs-demo-atelier .atelier-form-submit:hover span {
					transform: translateX(4px);
				}
				.wp-block-godevs-demo-atelier .atelier-form-submit:focus-visible {
					outline: 2px solid var(--atelier-accent);
					outline-offset: 3px;
				}
				@media (prefers-reduced-motion: reduce) {
					.wp-block-godevs-demo-atelier .atelier-form input,
					.wp-block-godevs-demo-atelier .atelier-form textarea,
					.wp-block-godevs-demo-atelier .atelier-form select,
					.wp-block-godevs-demo-atelier .atelier-form-submit,
					.wp-block-godevs-demo-atelier .atelier-form-submit span {
						transition: none !important;
					}
				}
			</style>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 03 - FAQ: bordered editorial list === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
			<div class="wp-block-columns">
				<!-- wp:column {"width":"30%"} -->
				<div class="wp-block-column" style="flex-basis:30%">
					<!-- wp:paragraph {"className":"is-style-atelier-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="is-style-atelier-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500">- FAQ</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":"70%"} -->
				<div class="wp-block-column" style="flex-basis:70%">
					<!-- wp:heading {"level":2,"className":"atelier-statement","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 4.5vw, 3.25rem)","lineHeight":"1.05","letterSpacing":"-0.015em","fontWeight":"400"}}} -->
					<h2 class="wp-block-heading atelier-statement" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 4.5vw, 3.25rem);line-height:1.05;letter-spacing:-0.015em;font-weight:400">Before you write.</h2>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- FAQ list -->
			<!-- wp:html -->
			<dl class="atelier-faq" style="margin:4rem 0 0;display:grid;grid-template-columns:1fr;gap:0;font-family:var(--wp--preset--font-family--body);color:var(--atelier-ink);">
				<div style="display:grid;grid-template-columns:1fr;gap:0.5rem;padding:1.75rem 0;border-top:1px solid var(--atelier-line);">
					<dt style="display:flex;justify-content:space-between;align-items:baseline;gap:1.5rem;">
						<span style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.125rem, 2vw, 1.5rem);line-height:1.3;letter-spacing:-0.01em;font-weight:400;">How quickly do you respond?</span>
						<span style="color:var(--atelier-muted);font-style:italic;font-family:var(--wp--preset--font-family--display);font-size:1rem;" aria-hidden="true">01</span>
					</dt>
					<dd style="margin:0;font-size:0.9375rem;line-height:1.7;color:var(--atelier-muted);max-width:60ch;">Every inquiry is read by the studio directly - usually within one working day, always within three. If the project is a fit, the next step is a short conversation to align on scope and timing.</dd>
				</div>
				<div style="display:grid;grid-template-columns:1fr;gap:0.5rem;padding:1.75rem 0;border-top:1px solid var(--atelier-line);">
					<dt style="display:flex;justify-content:space-between;align-items:baseline;gap:1.5rem;">
						<span style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.125rem, 2vw, 1.5rem);line-height:1.3;letter-spacing:-0.01em;font-weight:400;">What should I include in my brief?</span>
						<span style="color:var(--atelier-muted);font-style:italic;font-family:var(--wp--preset--font-family--display);font-size:1rem;" aria-hidden="true">02</span>
					</dt>
					<dd style="margin:0;font-size:0.9375rem;line-height:1.7;color:var(--atelier-muted);max-width:60ch;">A short note is enough - who you are, what you're making, the audience, the timing, and a rough sense of budget. References help, but aren't required. The conversation will fill in the rest.</dd>
				</div>
				<div style="display:grid;grid-template-columns:1fr;gap:0.5rem;padding:1.75rem 0;border-top:1px solid var(--atelier-line);">
					<dt style="display:flex;justify-content:space-between;align-items:baseline;gap:1.5rem;">
						<span style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.125rem, 2vw, 1.5rem);line-height:1.3;letter-spacing:-0.01em;font-weight:400;">Do you work remotely?</span>
						<span style="color:var(--atelier-muted);font-style:italic;font-family:var(--wp--preset--font-family--display);font-size:1rem;" aria-hidden="true">03</span>
					</dt>
					<dd style="margin:0;font-size:0.9375rem;line-height:1.7;color:var(--atelier-muted);max-width:60ch;">Most engagements run remotely, with a workshop or in-person review at key moments. The studio is set up between London, Copenhagen and Dhaka - time zones are usually workable for clients across Europe, the Americas and Asia.</dd>
				</div>
				<div style="display:grid;grid-template-columns:1fr;gap:0.5rem;padding:1.75rem 0;border-top:1px solid var(--atelier-line);border-bottom:1px solid var(--atelier-line);">
					<dt style="display:flex;justify-content:space-between;align-items:baseline;gap:1.5rem;">
						<span style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.125rem, 2vw, 1.5rem);line-height:1.3;letter-spacing:-0.01em;font-weight:400;">What's your availability?</span>
						<span style="color:var(--atelier-muted);font-style:italic;font-family:var(--wp--preset--font-family--display);font-size:1rem;" aria-hidden="true">04</span>
					</dt>
					<dd style="margin:0;font-size:0.9375rem;line-height:1.7;color:var(--atelier-muted);max-width:60ch;">Two engagements per quarter, intentionally. The studio is currently taking on selected projects for Q3 2026 onwards - earlier starts are sometimes possible for the right fit.</dd>
				</div>
			</dl>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->


	<!-- Project proposal form -->
	<!-- wp:group {"tagName":"section","className":"godevs-proposal-section","layout":{"type":"constrained","contentSize":"760px"}} -->
	<section class="wp-block-group godevs-proposal-section" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
		<!-- wp:heading {"level":2} -->
		<h2 class="wp-block-heading">Commission a Project</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|muted"}},"className":"godevs-section-intro"} -->
		<p class="godevs-section-intro has-text-color" style="color:var(--wp--preset--color--muted);max-width:60ch">Share the brief - the messier the better. Every good collaboration starts with a conversation.</p>
		<!-- /wp:paragraph -->

		<!-- wp:shortcode -->
		[godevs_proposal_form]
		<!-- /wp:shortcode -->
	</section>
	<!-- /wp:group -->

	<!-- Footer -->
	<!-- wp:template-part {"slug":"footer-atelier","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
