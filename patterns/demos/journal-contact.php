<?php
/**
 * Title: Demo - Journal (Writing) - Contact
 * Slug: godevs-portfolio/demo-journal-contact
 * Description: JOURNAL contact - inquiry form, availability. Recommended style variation: Journal.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, journal, contact, inquiry
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-journal","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-journal alignfull">

	<!-- Header -->
	<!-- wp:template-part {"slug":"header-journal","theme":"godevs-portfolio","tagName":"header"} /-->

	<!-- === 01 - HERO === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|70","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Eyebrow -->
			<!-- wp:paragraph {"className":"is-style-jour-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|accent"}}} -->
			<p class="is-style-jour-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:600">- Contact</p>
			<!-- /wp:paragraph -->

			<!-- Display heading -->
			<!-- wp:heading {"level":1,"className":"jour-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"400","letterSpacing":"-0.025em","lineHeight":"1.0","fontSize":"clamp(2.5rem, 8vw, 7rem)"}}} -->
			<h1 class="wp-block-heading jour-display" style="font-family:var(--wp--preset--font-family--display);font-weight:400;letter-spacing:-0.025em;line-height:1.0;font-size:clamp(2.5rem, 8vw, 7rem)">Let's start a <span class="jour-italic">conversation.</span></h1>
			<!-- /wp:heading -->

			<!-- Supporting copy -->
			<!-- wp:paragraph {"className":"jour-lead","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}},"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(1.375rem, 2.5vw, 1.75rem)","lineHeight":"1.4","letterSpacing":"-0.005em","fontWeight":"400"}}} -->
			<p class="jour-lead" style="margin-top:var(--wp--preset--spacing--40);font-family:var(--wp--preset--font-family--display);font-size:clamp(1.375rem, 2.5vw, 1.75rem);line-height:1.4;letter-spacing:-0.005em;font-weight:400;max-width:48ch">Available for selected writing, editorial and speaking engagements.</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 02 - CONTACT INFO + INQUIRY FORM === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- 40/60 split: contact info + form -->
			<!-- wp:html -->
			<div class="jour-contact-split" style="display:grid;grid-template-columns:1fr;gap:3rem;">
				<!-- LEFT - contact info -->
				<div class="jour-contact-info" style="display:flex;flex-direction:column;gap:2.5rem;">

					<!-- Email -->
					<div>
						<p class="is-style-jour-label" style="font-family:var(--wp--preset--font-family--body,'Inter',sans-serif);font-size:0.6875rem;font-weight:600;letter-spacing:0.18em;text-transform:uppercase;color:var(--jour-muted);margin:0 0 0.6rem;">- Email</p>
						<p style="font-family:var(--wp--preset--font-family--display,'Newsreader',serif);font-style:italic;font-size:1.25rem;letter-spacing:-0.01em;margin:0;"><a href="mailto:editor@journal.co" style="color:var(--jour-ink);text-decoration:none;border-bottom:1px solid var(--jour-line);padding-bottom:2px;">editor@journal.co</a></p>
					</div>

					<!-- Location -->
					<div>
						<p class="is-style-jour-label" style="font-family:var(--wp--preset--font-family--body,'Inter',sans-serif);font-size:0.6875rem;font-weight:600;letter-spacing:0.18em;text-transform:uppercase;color:var(--jour-muted);margin:0 0 0.6rem;">- Location</p>
						<p style="font-family:var(--wp--preset--font-family--display,'Newsreader',serif);font-size:1.25rem;letter-spacing:-0.01em;margin:0;line-height:1.4;">London / Dhaka<br><span style="font-style:italic;color:var(--jour-muted);font-size:1.0625rem;">GMT +6 · usually online</span></p>
					</div>

					<!-- Social -->
					<div>
						<p class="is-style-jour-label" style="font-family:var(--wp--preset--font-family--body,'Inter',sans-serif);font-size:0.6875rem;font-weight:600;letter-spacing:0.18em;text-transform:uppercase;color:var(--jour-muted);margin:0 0 0.6rem;">- Elsewhere</p>
						<nav aria-label="Social profiles" style="display:flex;flex-wrap:wrap;gap:0.4rem 1.5rem;font-family:var(--wp--preset--font-family--body,'Inter',sans-serif);font-size:0.6875rem;font-weight:600;letter-spacing:0.18em;text-transform:uppercase;">
							<a href="#" style="color:var(--jour-ink);border-bottom:1px solid var(--jour-line);padding-bottom:0.35rem;text-decoration:none;transition:color 0.3s ease,border-color 0.3s ease;">Twitter</a>
							<a href="#" style="color:var(--jour-ink);border-bottom:1px solid var(--jour-line);padding-bottom:0.35rem;text-decoration:none;transition:color 0.3s ease,border-color 0.3s ease;">Instagram</a>
							<a href="#" style="color:var(--jour-ink);border-bottom:1px solid var(--jour-line);padding-bottom:0.35rem;text-decoration:none;transition:color 0.3s ease,border-color 0.3s ease;">RSS</a>
							<a href="mailto:editor@journal.co" style="color:var(--jour-ink);border-bottom:1px solid var(--jour-line);padding-bottom:0.35rem;text-decoration:none;transition:color 0.3s ease,border-color 0.3s ease;">Email</a>
						</nav>
					</div>

					<!-- What happens next -->
					<div style="border-top:1px solid var(--jour-line);padding-top:2rem;margin-top:0.5rem;">
						<p class="is-style-jour-label" style="font-family:var(--wp--preset--font-family--body,'Inter',sans-serif);font-size:0.6875rem;font-weight:600;letter-spacing:0.18em;text-transform:uppercase;color:var(--jour-muted);margin:0 0 1.25rem;">- What happens next</p>
						<ol style="list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:1rem;">
							<li style="display:grid;grid-template-columns:2rem 1fr;gap:1rem;align-items:baseline;">
								<span style="font-family:var(--wp--preset--font-family--body,'Inter',sans-serif);font-size:0.6875rem;font-weight:600;letter-spacing:0.14em;color:var(--jour-accent);">01</span>
								<span style="font-family:var(--wp--preset--font-family--display,'Newsreader',serif);font-size:1.0625rem;line-height:1.5;letter-spacing:-0.01em;">I read your message within three days.</span>
							</li>
							<li style="display:grid;grid-template-columns:2rem 1fr;gap:1rem;align-items:baseline;">
								<span style="font-family:var(--wp--preset--font-family--body,'Inter',sans-serif);font-size:0.6875rem;font-weight:600;letter-spacing:0.14em;color:var(--jour-accent);">02</span>
								<span style="font-family:var(--wp--preset--font-family--display,'Newsreader',serif);font-size:1.0625rem;line-height:1.5;letter-spacing:-0.01em;">A brief conversation - by email or, if it helps, a call.</span>
							</li>
							<li style="display:grid;grid-template-columns:2rem 1fr;gap:1rem;align-items:baseline;">
								<span style="font-family:var(--wp--preset--font-family--body,'Inter',sans-serif);font-size:0.6875rem;font-weight:600;letter-spacing:0.14em;color:var(--jour-accent);">03</span>
								<span style="font-family:var(--wp--preset--font-family--display,'Newsreader',serif);font-size:1.0625rem;line-height:1.5;letter-spacing:-0.01em;">A considered response - scope, timeline, whether it fits.</span>
							</li>
						</ol>
					</div>
				</div>

				<!-- RIGHT - inquiry form -->
				<div class="jour-form-wrap" style="background:var(--jour-surface);border:1px solid var(--jour-line);padding:clamp(1.75rem, 4vw, 3rem);">
					<p class="is-style-jour-label" style="font-family:var(--wp--preset--font-family--body,'Inter',sans-serif);font-size:0.6875rem;font-weight:600;letter-spacing:0.18em;text-transform:uppercase;color:var(--jour-accent);margin:0 0 0.5rem;">- Send a message</p>
					<p style="font-family:var(--wp--preset--font-family--display,'Newsreader',serif);font-style:italic;font-size:1.25rem;line-height:1.35;letter-spacing:-0.01em;margin:0 0 2rem;max-width:32ch;">Tell me what you're working on, and what you need.</p>

					<form class="jour-form" action="#" method="post" style="display:flex;flex-direction:column;gap:1.5rem;">

						<!-- Name -->
						<div style="display:flex;flex-direction:column;gap:0.5rem;">
							<label for="jour-name" style="font-family:var(--wp--preset--font-family--body,'Inter',sans-serif);font-size:0.6875rem;font-weight:600;letter-spacing:0.18em;text-transform:uppercase;color:var(--jour-muted);">Name</label>
							<input type="text" id="jour-name" name="jour-name" placeholder="Your name" required style="border:1px solid var(--jour-line);border-radius:0;padding:0.85rem 1rem;background:transparent;font-family:var(--wp--preset--font-family--body,'Inter',sans-serif);font-size:0.9375rem;color:var(--jour-ink);transition:border-color 0.25s ease,box-shadow 0.25s ease;">
						</div>

						<!-- Email -->
						<div style="display:flex;flex-direction:column;gap:0.5rem;">
							<label for="jour-email" style="font-family:var(--wp--preset--font-family--body,'Inter',sans-serif);font-size:0.6875rem;font-weight:600;letter-spacing:0.18em;text-transform:uppercase;color:var(--jour-muted);">Email</label>
							<input type="email" id="jour-email" name="jour-email" placeholder="you@somewhere.com" required style="border:1px solid var(--jour-line);border-radius:0;padding:0.85rem 1rem;background:transparent;font-family:var(--wp--preset--font-family--body,'Inter',sans-serif);font-size:0.9375rem;color:var(--jour-ink);transition:border-color 0.25s ease,box-shadow 0.25s ease;">
						</div>

						<!-- Subject -->
						<div style="display:flex;flex-direction:column;gap:0.5rem;">
							<label for="jour-subject" style="font-family:var(--wp--preset--font-family--body,'Inter',sans-serif);font-size:0.6875rem;font-weight:600;letter-spacing:0.18em;text-transform:uppercase;color:var(--jour-muted);">Subject</label>
							<select id="jour-subject" name="jour-subject" required style="border:1px solid var(--jour-line);border-radius:0;padding:0.85rem 1rem;background:transparent;font-family:var(--wp--preset--font-family--body,'Inter',sans-serif);font-size:0.9375rem;color:var(--jour-ink);appearance:none;-webkit-appearance:none;-moz-appearance:none;background-image:url('data:image/svg+xml;charset=UTF-8,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%2210%22 height=%226%22 viewBox=%220 0 10 6%22><path d=%22M0 0l5 6 5-6z%22 fill=%22%231A1714%22/></svg>');background-repeat:no-repeat;background-position:right 1rem center;background-size:10px 6px;padding-right:2.25rem;transition:border-color 0.25s ease,box-shadow 0.25s ease;">
								<option value="" disabled selected style="color:var(--jour-muted);">Select a subject</option>
								<option value="essay-commission">Essay Commission</option>
								<option value="editorial">Editorial</option>
								<option value="speaking">Speaking</option>
								<option value="interview">Interview</option>
								<option value="other">Other</option>
							</select>
						</div>

						<!-- Message -->
						<div style="display:flex;flex-direction:column;gap:0.5rem;">
							<label for="jour-message" style="font-family:var(--wp--preset--font-family--body,'Inter',sans-serif);font-size:0.6875rem;font-weight:600;letter-spacing:0.18em;text-transform:uppercase;color:var(--jour-muted);">Message</label>
							<textarea id="jour-message" name="jour-message" rows="6" placeholder="A few sentences - what you're working on, what you need, when." required style="border:1px solid var(--jour-line);border-radius:0;padding:0.85rem 1rem;background:transparent;font-family:var(--wp--preset--font-family--body,'Inter',sans-serif);font-size:0.9375rem;color:var(--jour-ink);line-height:1.6;resize:vertical;transition:border-color 0.25s ease,box-shadow 0.25s ease;"></textarea>
						</div>

						<!-- Submit -->
						<div style="margin-top:0.5rem;">
							<button type="submit" class="jour-form-submit" style="display:inline-flex;align-items:center;gap:0.6rem;border:1px solid var(--jour-ink);border-radius:0;background:var(--jour-ink);color:var(--jour-base);font-family:var(--wp--preset--font-family--body,'Inter',sans-serif);font-size:0.6875rem;font-weight:600;letter-spacing:0.18em;text-transform:uppercase;padding:0.95rem 1.75rem;cursor:pointer;transition:background 0.3s ease,color 0.3s ease,border-color 0.3s ease,gap 0.3s cubic-bezier(0.2,0.8,0.2,1);">
								Send message
								<span aria-hidden="true" style="font-family:var(--wp--preset--font-family--display,'Newsreader',serif);font-style:italic;letter-spacing:0;font-size:1rem;">→</span>
							</button>
						</div>

						<!-- Demo note -->
						<p style="font-family:var(--wp--preset--font-family--body,'Inter',sans-serif);font-size:0.6875rem;font-weight:500;letter-spacing:0.14em;text-transform:uppercase;color:var(--jour-muted);margin:0.5rem 0 0;line-height:1.6;">Demo form - connect a form plugin or the theme's front-forms feature.</p>
					</form>
				</div>
			</div>

			<style scoped>
				@media (min-width: 900px) {
					.wp-block-godevs-demo-journal .jour-contact-split { grid-template-columns: 40fr 60fr; gap: 4rem; align-items: start; }
				}
				.wp-block-godevs-demo-journal .jour-form input:focus,
				.wp-block-godevs-demo-journal .jour-form select:focus,
				.wp-block-godevs-demo-journal .jour-form textarea:focus {
					border-color: var(--jour-accent);
					outline: none;
					box-shadow: 0 0 0 1px var(--jour-accent);
				}
				.wp-block-godevs-demo-journal .jour-form input::placeholder,
				.wp-block-godevs-demo-journal .jour-form textarea::placeholder {
					color: var(--jour-muted);
					font-style: italic;
				}
				.wp-block-godevs-demo-journal .jour-form-submit:hover {
					background: var(--jour-accent);
					border-color: var(--jour-accent);
					color: var(--jour-base);
					gap: 0.85rem;
				}
				.wp-block-godevs-demo-journal .jour-form-submit:focus-visible {
					outline: 2px solid var(--jour-accent);
					outline-offset: 2px;
				}
				.wp-block-godevs-demo-journal .jour-contact-info a:hover,
				.wp-block-godevs-demo-journal .jour-contact-info a:focus-visible {
					color: var(--jour-accent);
					border-bottom-color: var(--jour-accent);
					outline: none;
				}
			</style>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 03 - FAQ === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- FAQ header - 30/70 -->
			<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|60","margin":{"bottom":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--50)">
				<!-- wp:column {"width":"30%"} -->
				<div class="wp-block-column" style="flex-basis:30%">
					<!-- wp:paragraph {"className":"is-style-jour-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="is-style-jour-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:600">- FAQ</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":"70%"} -->
				<div class="wp-block-column" style="flex-basis:70%">
					<!-- wp:heading {"level":2,"className":"jour-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 5vw, 3.5rem)","lineHeight":"1.05","letterSpacing":"-0.025em","fontWeight":"400"}}} -->
					<h2 class="wp-block-heading jour-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 5vw, 3.5rem);line-height:1.05;letter-spacing:-0.025em;font-weight:400">Before you <span class="jour-italic">write.</span></h2>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- FAQ list -->
			<!-- wp:html -->
			<div class="jour-faq" style="max-width:60ch;">
				<details class="jour-faq-item" style="border-top:1px solid var(--jour-line);padding:1.5rem 0;cursor:pointer;list-style:none;">
					<summary style="display:flex;justify-content:space-between;align-items:baseline;gap:1.5rem;list-style:none;font-family:var(--wp--preset--font-family--display,'Newsreader',serif);font-size:clamp(1.125rem, 1.8vw, 1.375rem);font-weight:400;letter-spacing:-0.01em;color:var(--jour-ink);line-height:1.3;">
						<span>How quickly do you respond?</span>
						<span aria-hidden="true" style="font-family:var(--wp--preset--font-family--body,'Inter',sans-serif);font-size:0.6875rem;font-weight:600;letter-spacing:0.14em;color:var(--jour-muted);">+</span>
					</summary>
					<p style="margin:0.85rem 0 0;font-family:var(--wp--preset--font-family--body,'Inter',sans-serif);font-size:0.9375rem;line-height:1.7;color:var(--jour-muted);max-width:50ch;">Usually within three working days. If the project is time-sensitive - a deadline within two weeks - say so in the subject line, and I'll reply sooner.</p>
				</details>
				<details class="jour-faq-item" style="border-top:1px solid var(--jour-line);padding:1.5rem 0;cursor:pointer;list-style:none;">
					<summary style="display:flex;justify-content:space-between;align-items:baseline;gap:1.5rem;list-style:none;font-family:var(--wp--preset--font-family--display,'Newsreader',serif);font-size:clamp(1.125rem, 1.8vw, 1.375rem);font-weight:400;letter-spacing:-0.01em;color:var(--jour-ink);line-height:1.3;">
						<span>Do you accept commissions?</span>
						<span aria-hidden="true" style="font-family:var(--wp--preset--font-family--body,'Inter',sans-serif);font-size:0.6875rem;font-weight:600;letter-spacing:0.14em;color:var(--jour-muted);">+</span>
					</summary>
					<p style="margin:0.85rem 0 0;font-family:var(--wp--preset--font-family--body,'Inter',sans-serif);font-size:0.9375rem;line-height:1.7;color:var(--jour-muted);max-width:50ch;">Yes - selectively. I take on roughly one commission a month, usually essays, editorial work, or longer-form pieces that need time to breathe. Tell me the scope and I'll be honest about whether it's a fit.</p>
				</details>
				<details class="jour-faq-item" style="border-top:1px solid var(--jour-line);padding:1.5rem 0;cursor:pointer;list-style:none;">
					<summary style="display:flex;justify-content:space-between;align-items:baseline;gap:1.5rem;list-style:none;font-family:var(--wp--preset--font-family--display,'Newsreader',serif);font-size:clamp(1.125rem, 1.8vw, 1.375rem);font-weight:400;letter-spacing:-0.01em;color:var(--jour-ink);line-height:1.3;">
						<span>Do you write for publications?</span>
						<span aria-hidden="true" style="font-family:var(--wp--preset--font-family--body,'Inter',sans-serif);font-size:0.6875rem;font-weight:600;letter-spacing:0.14em;color:var(--jour-muted);">+</span>
					</summary>
					<p style="margin:0.85rem 0 0;font-family:var(--wp--preset--font-family--body,'Inter',sans-serif);font-size:0.9375rem;line-height:1.7;color:var(--jour-muted);max-width:50ch;">Yes. I contribute to a small number of publications I respect - The Atlantic, Kinfolk, Aeon, Longreads, 3:AM Magazine - and I'm open to new ones, particularly those with patient editors and a long view.</p>
				</details>
				<details class="jour-faq-item" style="border-top:1px solid var(--jour-line);border-bottom:1px solid var(--jour-line);padding:1.5rem 0;cursor:pointer;list-style:none;">
					<summary style="display:flex;justify-content:space-between;align-items:baseline;gap:1.5rem;list-style:none;font-family:var(--wp--preset--font-family--display,'Newsreader',serif);font-size:clamp(1.125rem, 1.8vw, 1.375rem);font-weight:400;letter-spacing:-0.01em;color:var(--jour-ink);line-height:1.3;">
						<span>Can I republish your work?</span>
						<span aria-hidden="true" style="font-family:var(--wp--preset--font-family--body,'Inter',sans-serif);font-size:0.6875rem;font-weight:600;letter-spacing:0.14em;color:var(--jour-muted);">+</span>
					</summary>
					<p style="margin:0.85rem 0 0;font-family:var(--wp--preset--font-family--body,'Inter',sans-serif);font-size:0.9375rem;line-height:1.7;color:var(--jour-muted);max-width:50ch;">Often yes, with attribution and a link back. Send the piece you'd like to republish and where it will appear, and I'll usually grant permission within a few days. Translations are welcome on the same terms.</p>
				</details>
			</div>
			<style scoped>
				.wp-block-godevs-demo-journal .jour-faq summary::-webkit-details-marker { display: none; }
				.wp-block-godevs-demo-journal .jour-faq-item[open] > summary > span:last-child { transform: rotate(45deg); display: inline-block; }
				.wp-block-godevs-demo-journal .jour-faq-item summary:hover { color: var(--jour-accent); }
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
		<h2 class="wp-block-heading">Pitch a Story</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|muted"}},"className":"godevs-section-intro"} -->
		<p class="godevs-section-intro has-text-color" style="color:var(--wp--preset--color--muted);max-width:60ch">Commissions, speaking, editing or collaboration - tell me what you have in mind. Good ideas get a reply.</p>
		<!-- /wp:paragraph -->

		<!-- wp:shortcode -->
		[godevs_proposal_form]
		<!-- /wp:shortcode -->
	</section>
	<!-- /wp:group -->

	<!-- Footer -->
	<!-- wp:template-part {"slug":"footer-journal","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
