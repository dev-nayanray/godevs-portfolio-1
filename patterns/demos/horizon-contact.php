<?php
/**
 * Title: Demo — Horizon (Photography) — Contact
 * Slug: godevs-portfolio/demo-horizon-contact
 * Description: HORIZON contact — inquiry form, availability. Recommended style variation: Horizon.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, horizon, contact, inquiry
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-horizon","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-horizon alignfull">

	<!-- Header -->
	<!-- wp:template-part {"slug":"header-horizon","theme":"godevs-portfolio","tagName":"header"} /-->

	<!-- ═══ 01 — HERO ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Eyebrow + meta row -->
			<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40)">
				<!-- wp:paragraph {"className":"is-style-hor-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-hor-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500">— Contact</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"is-style-hor-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.6875rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
				<p class="is-style-hor-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.14em;text-transform:uppercase;font-weight:500">Available for assignments · 2026</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- H1 -->
			<!-- wp:heading {"level":1,"className":"hor-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2.75rem, 9vw, 9rem)","lineHeight":"0.96","letterSpacing":"-0.04em","fontWeight":"600","textTransform":"uppercase"}}} -->
			<h1 class="wp-block-heading hor-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2.75rem, 9vw, 9rem);line-height:0.96;letter-spacing:-0.04em;font-weight:600;text-transform:uppercase">Let's go <span class="hor-accent-text">somewhere.</span></h1>
			<!-- /wp:heading -->

			<!-- Supporting copy -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|serif","fontStyle":"italic","fontSize":"clamp(1.25rem, 2.5vw, 1.75rem)","lineHeight":"1.4","fontWeight":"400"}}} -->
			<p style="font-family:var(--wp--preset--font-family--serif);font-style:italic;font-size:clamp(1.25rem, 2.5vw, 1.75rem);line-height:1.4;font-weight:400;max-width:52ch">Available for selected editorial, campaign, destination and brand assignments. Based in Lisbon, working worldwide. Tell me what you're working on.</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 02 — CONTACT INFO + INQUIRY FORM ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- wp:html -->
			<div class="hor-contact-split">

				<!-- LEFT: contact info -->
				<div class="hor-contact-info">
					<section>
						<p class="is-style-hor-label" style="font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500;color:var(--wp--preset--color--muted);margin-bottom:0.75rem">Email</p>
						<p style="font-family:var(--wp--preset--font-family--display);font-size:clamp(1.25rem,2vw,1.5rem);font-weight:600;letter-spacing:-0.02em;margin:0"><a href="mailto:alex@horizon.photo" style="text-decoration:none;color:var(--wp--preset--color--foreground)">alex@horizon.photo</a></p>
					</section>
					<section>
						<p class="is-style-hor-label" style="font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500;color:var(--wp--preset--color--muted);margin-bottom:0.75rem">Location</p>
						<p style="font-family:var(--wp--preset--font-family--display);font-size:1.0625rem;font-weight:500;margin:0;line-height:1.6">Lisbon, Portugal<br><span style="font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.08em;color:var(--wp--preset--color--muted)">38°43′N 9°08′W · Working worldwide</span></p>
					</section>
					<section>
						<p class="is-style-hor-label" style="font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500;color:var(--wp--preset--color--muted);margin-bottom:0.75rem">Elsewhere</p>
						<nav aria-label="Social links" style="display:flex;flex-wrap:wrap;gap:1.25rem 1.5rem">
							<a href="#" style="font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500;color:var(--wp--preset--color--foreground);text-decoration:none;border-bottom:1px solid var(--wp--preset--color--foreground);padding-bottom:2px">Instagram</a>
							<a href="#" style="font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500;color:var(--wp--preset--color--foreground);text-decoration:none;border-bottom:1px solid var(--wp--preset--color--foreground);padding-bottom:2px">Vimeo</a>
							<a href="#" style="font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500;color:var(--wp--preset--color--foreground);text-decoration:none;border-bottom:1px solid var(--wp--preset--color--foreground);padding-bottom:2px">Behance</a>
							<a href="mailto:alex@horizon.photo" style="font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500;color:var(--wp--preset--color--foreground);text-decoration:none;border-bottom:1px solid var(--wp--preset--color--foreground);padding-bottom:2px">Email</a>
						</nav>
					</section>
					<section>
						<p class="is-style-hor-label" style="font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500;color:var(--wp--preset--color--muted);margin-bottom:1rem">— What Happens Next</p>
						<ol style="list-style:none;padding:0;margin:0;display:grid;gap:1.25rem;counter-reset:hor-step">
							<li style="counter-increment:hor-step;display:grid;grid-template-columns:2.5rem 1fr;gap:0.75rem;align-items:start">
								<span style="font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;color:var(--wp--preset--color--accent);font-weight:500">01</span>
								<span style="font-size:0.9375rem;line-height:1.65;color:var(--wp--preset--color--foreground)">I read your message within three working days and reply personally.</span>
							</li>
							<li style="counter-increment:hor-step;display:grid;grid-template-columns:2.5rem 1fr;gap:0.75rem;align-items:start">
								<span style="font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;color:var(--wp--preset--color--accent);font-weight:500">02</span>
								<span style="font-size:0.9375rem;line-height:1.65;color:var(--wp--preset--color--foreground)">A brief conversation — by email or, if it helps, a 20-minute call.</span>
							</li>
							<li style="counter-increment:hor-step;display:grid;grid-template-columns:2.5rem 1fr;gap:0.75rem;align-items:start">
								<span style="font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;color:var(--wp--preset--color--accent);font-weight:500">03</span>
								<span style="font-size:0.9375rem;line-height:1.65;color:var(--wp--preset--color--foreground)">A considered response — scope, timeline, and whether the project fits the calendar.</span>
							</li>
						</ol>
					</section>
				</div>

				<!-- RIGHT: inquiry form -->
				<div class="hor-form-wrap">
					<p class="is-style-hor-label" style="font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500;color:var(--wp--preset--color--accent);margin-bottom:0.75rem">— Send a message</p>
					<p style="font-family:var(--wp--preset--font-family--serif);font-style:italic;font-size:clamp(1.25rem,2vw,1.5rem);line-height:1.4;margin:0 0 2rem">Tell me what you're working on, and what you need.</p>

					<form action="#" method="post" aria-label="Inquiry form" style="display:grid;gap:1.5rem">
						<div style="display:grid;gap:0.4rem">
							<label for="hor-name" style="font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500;color:var(--wp--preset--color--muted)">Name</label>
							<input id="hor-name" name="hor-name" type="text" required autocomplete="name" placeholder="Your full name" style="border:1px solid var(--wp--preset--color--line);border-radius:0;padding:0.85rem 1rem;background:transparent;font-family:var(--wp--preset--font-family--body);font-size:0.9375rem;color:var(--wp--preset--color--foreground);outline:none;transition:border-color 0.3s ease,box-shadow 0.3s ease">
						</div>
						<div style="display:grid;gap:0.4rem">
							<label for="hor-email" style="font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500;color:var(--wp--preset--color--muted)">Email</label>
							<input id="hor-email" name="hor-email" type="email" required autocomplete="email" placeholder="you@studio.com" style="border:1px solid var(--wp--preset--color--line);border-radius:0;padding:0.85rem 1rem;background:transparent;font-family:var(--wp--preset--font-family--body);font-size:0.9375rem;color:var(--wp--preset--color--foreground);outline:none;transition:border-color 0.3s ease,box-shadow 0.3s ease">
						</div>
						<div style="display:grid;gap:0.4rem">
							<label for="hor-project-type" style="font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500;color:var(--wp--preset--color--muted)">Project type</label>
							<select id="hor-project-type" name="hor-project-type" required style="border:1px solid var(--wp--preset--color--line);border-radius:0;padding:0.85rem 1rem;background:transparent;font-family:var(--wp--preset--font-family--body);font-size:0.9375rem;color:var(--wp--preset--color--foreground);outline:none;transition:border-color 0.3s ease,box-shadow 0.3s ease;appearance:none;-webkit-appearance:none;-moz-appearance:none;background-image:url('data:image/svg+xml;utf8,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%2212%22 height=%2212%22 viewBox=%220 0 12 12%22><path d=%22M2 4l4 4 4-4%22 stroke=%22%23161310%22 stroke-width=%221.5%22 fill=%22none%22 stroke-linecap=%22round%22 stroke-linejoin=%22round%22/></svg>');background-repeat:no-repeat;background-position:right 1rem center;padding-right:2.5rem">
								<option value="" disabled selected>Select a project type</option>
								<option value="editorial">Editorial</option>
								<option value="travel-campaign">Travel Campaign</option>
								<option value="destination-story">Destination Story</option>
								<option value="hospitality">Hospitality</option>
								<option value="brand-photography">Brand Photography</option>
								<option value="documentary">Documentary</option>
								<option value="other">Other</option>
							</select>
						</div>
						<div style="display:grid;gap:0.4rem">
							<label for="hor-message" style="font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500;color:var(--wp--preset--color--muted)">Message</label>
							<textarea id="hor-message" name="hor-message" rows="6" required placeholder="A short note on the project, dates, location, and what you'd like the work to do." style="border:1px solid var(--wp--preset--color--line);border-radius:0;padding:0.85rem 1rem;background:transparent;font-family:var(--wp--preset--font-family--body);font-size:0.9375rem;color:var(--wp--preset--color--foreground);outline:none;resize:vertical;transition:border-color 0.3s ease,box-shadow 0.3s ease"></textarea>
						</div>
						<div>
							<button type="submit" style="display:inline-flex;align-items:center;gap:0.5rem;border:1px solid var(--wp--preset--color--foreground);border-radius:0;background:var(--wp--preset--color--primary);color:var(--wp--preset--color--base);padding:0.95rem 1.6rem;font-family:var(--wp--preset--font-family--body);font-weight:500;font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;cursor:pointer;transition:background 0.3s ease,border-color 0.3s ease,color 0.3s ease">Start a conversation <span aria-hidden="true">→</span></button>
							<p style="font-family:var(--wp--preset--font-family--mono);font-size:0.625rem;letter-spacing:0.08em;color:var(--wp--preset--color--muted);margin-top:1rem">Demo form — connect a form plugin or the theme's front-forms feature.</p>
						</div>
					</form>
				</div>

			</div>

			<style>
				.wp-block-godevs-demo-horizon .hor-contact-split{display:grid;grid-template-columns:1fr;gap:3rem}
				.wp-block-godevs-demo-horizon .hor-contact-info{display:grid;gap:2.25rem;align-content:start}
				.wp-block-godevs-demo-horizon .hor-form-wrap input:focus,
				.wp-block-godevs-demo-horizon .hor-form-wrap select:focus,
				.wp-block-godevs-demo-horizon .hor-form-wrap textarea:focus{border-color:var(--wp--preset--color--accent);box-shadow:0 0 0 1px var(--wp--preset--color--accent)}
				.wp-block-godevs-demo-horizon .hor-form-wrap input::placeholder,
				.wp-block-godevs-demo-horizon .hor-form-wrap textarea::placeholder{color:var(--wp--preset--color--muted);font-style:italic}
				.wp-block-godevs-demo-horizon .hor-form-wrap button[type="submit"]:hover,
				.wp-block-godevs-demo-horizon .hor-form-wrap button[type="submit"]:focus-visible{background:var(--wp--preset--color--accent);border-color:var(--wp--preset--color--accent);color:var(--wp--preset--color--base);outline:none}
				@media (min-width:900px){
					.wp-block-godevs-demo-horizon .hor-contact-split{grid-template-columns:40fr 60fr;gap:4rem}
				}
			</style>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- ═══ 03 — FAQ ═══ -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Section header (30/70) -->
			<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
			<div class="wp-block-columns">
				<!-- wp:column {"width":"30%"} -->
				<div class="wp-block-column" style="flex-basis:30%">
					<!-- wp:paragraph {"className":"is-style-hor-label","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"0.6875rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="is-style-hor-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--mono);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;font-weight:500">— FAQ</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":"70%"} -->
				<div class="wp-block-column" style="flex-basis:70%">
					<!-- wp:heading {"level":2,"className":"hor-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 5vw, 4rem)","lineHeight":"0.98","letterSpacing":"-0.03em","fontWeight":"600","textTransform":"uppercase"}}} -->
					<h2 class="wp-block-heading hor-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 5vw, 4rem);line-height:0.98;letter-spacing:-0.03em;font-weight:600;text-transform:uppercase">Before you write.</h2>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- FAQ items -->
			<!-- wp:html -->
			<div class="hor-faq" style="margin-top:2.5rem;max-width:60ch">
				<details style="border-top:1px solid var(--wp--preset--color--line);padding:1.5rem 0">
					<summary style="cursor:pointer;list-style:none;display:flex;justify-content:space-between;align-items:center;gap:1.5rem;font-family:var(--wp--preset--font-family--display);font-weight:600;font-size:clamp(1.125rem,2vw,1.375rem);letter-spacing:-0.02em;line-height:1.2;color:var(--wp--preset--color--foreground)">
						<span>How quickly do you respond?</span>
						<span class="hor-faq-marker" aria-hidden="true" style="font-family:var(--wp--preset--font-family--mono);font-size:0.875rem;color:var(--wp--preset--color--muted);transition:transform 0.3s ease">+</span>
					</summary>
					<p style="margin:1rem 0 0;font-size:0.9375rem;line-height:1.7;color:var(--wp--preset--color--muted);max-width:50ch">Within three working days, almost always sooner. If your inquiry is time-sensitive — a campaign shoot in the next two weeks, for example — mark it as such in the subject line and I'll prioritize it.</p>
				</details>
				<details style="border-top:1px solid var(--wp--preset--color--line);padding:1.5rem 0">
					<summary style="cursor:pointer;list-style:none;display:flex;justify-content:space-between;align-items:center;gap:1.5rem;font-family:var(--wp--preset--font-family--display);font-weight:600;font-size:clamp(1.125rem,2vw,1.375rem);letter-spacing:-0.02em;line-height:1.2;color:var(--wp--preset--color--foreground)">
						<span>What should I include?</span>
						<span class="hor-faq-marker" aria-hidden="true" style="font-family:var(--wp--preset--font-family--mono);font-size:0.875rem;color:var(--wp--preset--color--muted);transition:transform 0.3s ease">+</span>
					</summary>
					<p style="margin:1rem 0 0;font-size:0.9375rem;line-height:1.7;color:var(--wp--preset--color--muted);max-width:50ch">A short paragraph on the project, the dates you have in mind, the location, and what you'd like the work to do. Reference images, mood links or prior campaigns help — but aren't required at first contact.</p>
				</details>
				<details style="border-top:1px solid var(--wp--preset--color--line);padding:1.5rem 0">
					<summary style="cursor:pointer;list-style:none;display:flex;justify-content:space-between;align-items:center;gap:1.5rem;font-family:var(--wp--preset--font-family--display);font-weight:600;font-size:clamp(1.125rem,2vw,1.375rem);letter-spacing:-0.02em;line-height:1.2;color:var(--wp--preset--color--foreground)">
						<span>Do you travel internationally?</span>
						<span class="hor-faq-marker" aria-hidden="true" style="font-family:var(--wp--preset--font-family--mono);font-size:0.875rem;color:var(--wp--preset--color--muted);transition:transform 0.3s ease">+</span>
					</summary>
					<p style="margin:1rem 0 0;font-size:0.9375rem;line-height:1.7;color:var(--wp--preset--color--muted);max-width:50ch">Yes — roughly two-thirds of the work is outside Portugal. Travel and production days are factored into the project estimate. I hold a passport valid for visa-free entry to most assignment destinations.</p>
				</details>
				<details style="border-top:1px solid var(--wp--preset--color--line);border-bottom:1px solid var(--wp--preset--color--line);padding:1.5rem 0">
					<summary style="cursor:pointer;list-style:none;display:flex;justify-content:space-between;align-items:center;gap:1.5rem;font-family:var(--wp--preset--font-family--display);font-weight:600;font-size:clamp(1.125rem,2vw,1.375rem);letter-spacing:-0.02em;line-height:1.2;color:var(--wp--preset--color--foreground)">
						<span>Do you provide full production?</span>
						<span class="hor-faq-marker" aria-hidden="true" style="font-family:var(--wp--preset--font-family--mono);font-size:0.875rem;color:var(--wp--preset--color--muted);transition:transform 0.3s ease">+</span>
					</summary>
					<p style="margin:1rem 0 0;font-size:0.9375rem;line-height:1.7;color:var(--wp--preset--color--muted);max-width:50ch">For larger assignments I work with a small network of producers, fixers and assistants across Europe, Asia and South America. I'm happy to manage local production or collaborate with your team — both work well.</p>
				</details>
			</div>
			<style>
				.wp-block-godevs-demo-horizon .hor-faq summary::-webkit-details-marker{display:none}
				.wp-block-godevs-demo-horizon .hor-faq summary:hover{color:var(--wp--preset--color--accent)}
				.wp-block-godevs-demo-horizon .hor-faq details[open] .hor-faq-marker{transform:rotate(45deg);color:var(--wp--preset--color--accent)}
			</style>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->


	<!-- Project proposal form -->
	<!-- wp:group {"tagName":"section","className":"godevs-proposal-section","layout":{"type":"constrained","contentSize":"760px"}} -->
	<section class="wp-block-group godevs-proposal-section" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
		<!-- wp:heading {"level":2} -->
		<h2 class="wp-block-heading">Plan an Assignment</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|muted"}},"className":"godevs-section-intro"} -->
		<p class="godevs-section-intro has-text-color" style="color:var(--wp--preset--color--muted);max-width:60ch">Where do you need images from? Tell me the story, the place and the deadline — I'll chart the journey.</p>
		<!-- /wp:paragraph -->

		<!-- wp:shortcode -->
		[godevs_proposal_form]
		<!-- /wp:shortcode -->
	</section>
	<!-- /wp:group -->

	<!-- Footer -->
	<!-- wp:template-part {"slug":"footer-horizon","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
