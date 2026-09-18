<?php
/**
 * Title: Demo - Luxe (Fashion) - Contact
 * Slug: godevs-portfolio/demo-luxe-contact
 * Description: LUXE contact - inquiry form, availability. Recommended style variation: Luxe.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, luxe, contact, inquiry
 * Viewport Width: 1440
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-demo-luxe","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-demo-luxe alignfull">

	<!-- Header -->
	<!-- wp:template-part {"slug":"header-luxe","theme":"godevs-portfolio","tagName":"header"} /-->

	<!-- === 01 - HERO === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Top metadata row -->
			<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
				<!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|accent"}}} -->
				<p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--accent);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">- Contact</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">Available · Q2 / Q3 2026 · Selected Projects Only</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- H1 + supporting copy split -->
			<!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"blockGap":"var:preset|spacing|80"}}} -->
			<div class="wp-block-columns are-vertically-aligned-bottom">
				<!-- wp:column {"verticalAlignment":"bottom","width":"65%"} -->
				<div class="wp-block-column" style="flex-basis:65%">
					<!-- wp:heading {"level":1,"className":"luxe-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"400","letterSpacing":"-0.025em","lineHeight":"1.0","fontSize":"clamp(2.5rem, 6vw, 6rem)"}}} -->
					<h1 class="wp-block-heading luxe-display" style="font-family:var(--wp--preset--font-family--display);font-weight:400;letter-spacing:-0.025em;line-height:1.0;font-size:clamp(2.5rem, 6vw, 6rem)">Let's create something <span class="luxe-italic">distinctive.</span></h1>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"verticalAlignment":"bottom","width":"35%"} -->
				<div class="wp-block-column" style="flex-basis:35%">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium","lineHeight":"1.7"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--medium);line-height:1.7">Available for selected fashion, editorial, styling and creative direction projects. The studio takes on a small number of engagements each season.</p>
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
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- 2-col split: 40% info / 60% form -->
			<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|80"}}} -->
			<div class="wp-block-columns">

				<!-- LEFT - Contact info (40%) -->
				<!-- wp:column {"width":"40%"} -->
				<div class="wp-block-column" style="flex-basis:40%">

					<!-- Eyebrow -->
					<!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
					<p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">- Studio</p>
					<!-- /wp:paragraph -->

					<!-- Contact details (luxe-credits) -->
					<!-- wp:html -->
					<dl class="luxe-credits" style="margin-top:1.5rem;">
						<div class="luxe-credit-row">
							<dt class="luxe-credit-key">Email</dt>
							<dd class="luxe-credit-val"><a href="mailto:studio@luxe.fashion" style="color:inherit;text-decoration:none;">studio@luxe.fashion</a></dd>
						</div>
						<div class="luxe-credit-row">
							<dt class="luxe-credit-key">Studio</dt>
							<dd class="luxe-credit-val">14 Rue de la Mode, 75003 Paris</dd>
						</div>
						<div class="luxe-credit-row">
							<dt class="luxe-credit-key">Location</dt>
							<dd class="luxe-credit-val">Paris / Dhaka · Worldwide</dd>
						</div>
						<div class="luxe-credit-row">
							<dt class="luxe-credit-key">Hours</dt>
							<dd class="luxe-credit-val">By appointment · Tue – Fri</dd>
						</div>
					</dl>
					<!-- /wp:html -->

					<!-- Social links -->
					<!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
					<p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500;margin-top:var(--wp--preset--spacing--50)">- Elsewhere</p>
					<!-- /wp:paragraph -->
					<!-- wp:html -->
					<nav class="luxe-clients" aria-label="Social links" style="margin-top:1rem;gap:1.5rem 1.75rem;">
						<a href="#" style="color:inherit;text-decoration:none;">Instagram</a><a href="#" style="color:inherit;text-decoration:none;">Behance</a><a href="#" style="color:inherit;text-decoration:none;">Pinterest</a><a href="#" style="color:inherit;text-decoration:none;">LinkedIn</a>
					</nav>
					<!-- /wp:html -->

					<!-- What happens next -->
					<!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"},"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
					<p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500;margin-top:var(--wp--preset--spacing--60)">- What happens next</p>
					<!-- /wp:paragraph -->
					<!-- wp:html -->
					<ol style="list-style:none;padding:0;margin:1.25rem 0 0;counter-reset:nextstep;">
						<li style="counter-increment:nextstep;display:grid;grid-template-columns:2rem 1fr;gap:0.75rem;padding:0.75rem 0;border-top:1px solid var(--luxe-line);">
							<span style="font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;color:var(--luxe-accent);font-weight:500;" aria-hidden="true">01</span>
							<span style="font-size:var(--wp--preset--font-size--medium);line-height:1.7;color:var(--luxe-muted);">I review your inquiry within three working days.</span>
						</li>
						<li style="counter-increment:nextstep;display:grid;grid-template-columns:2rem 1fr;gap:0.75rem;padding:0.75rem 0;border-top:1px solid var(--luxe-line);">
							<span style="font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;color:var(--luxe-accent);font-weight:500;" aria-hidden="true">02</span>
							<span style="font-size:var(--wp--preset--font-size--medium);line-height:1.7;color:var(--luxe-muted);">A short conversation - by message or call - to understand the work.</span>
						</li>
						<li style="counter-increment:nextstep;display:grid;grid-template-columns:2rem 1fr;gap:0.75rem;padding:0.75rem 0;border-top:1px solid var(--luxe-line);border-bottom:1px solid var(--luxe-line);">
							<span style="font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;color:var(--luxe-accent);font-weight:500;" aria-hidden="true">03</span>
							<span style="font-size:var(--wp--preset--font-size--medium);line-height:1.7;color:var(--luxe-muted);">A scoped proposal - timeline, scope and fee - within a week.</span>
						</li>
					</ol>
					<!-- /wp:html -->

				</div>
				<!-- /wp:column -->

				<!-- RIGHT - Inquiry form (60%) -->
				<!-- wp:column {"width":"60%"} -->
				<div class="wp-block-column" style="flex-basis:60%">

					<!-- Form -->
					<!-- wp:html -->
					<style>
						.wp-block-godevs-demo-luxe .luxe-form{background:var(--luxe-surface-muted,#EFEAE0);padding:clamp(2rem,4vw,3.5rem);border:1px solid var(--luxe-line,#D9D2C2);}
						.wp-block-godevs-demo-luxe .luxe-form-eyebrow{font-family:var(--wp--preset--font-family--body,"Inter",sans-serif);font-size:0.6875rem;font-weight:500;letter-spacing:0.22em;text-transform:uppercase;color:var(--luxe-muted,#8A8275);margin:0 0 0.25rem;}
						.wp-block-godevs-demo-luxe .luxe-form-title{font-family:var(--wp--preset--font-family--display,"Newsreader",serif);font-size:clamp(1.625rem,3vw,2.25rem);font-weight:400;line-height:1.15;letter-spacing:-0.015em;margin:0 0 2rem;max-width:24ch;}
						.wp-block-godevs-demo-luxe .luxe-form-row{margin-bottom:1.5rem;}
						.wp-block-godevs-demo-luxe .luxe-form-row--double{display:grid;grid-template-columns:1fr 1fr;gap:1.5rem;}
						@media (max-width: 600px){.wp-block-godevs-demo-luxe .luxe-form-row--double{grid-template-columns:1fr;}}
						.wp-block-godevs-demo-luxe .luxe-form-label{display:block;font-family:var(--wp--preset--font-family--body,"Inter",sans-serif);font-size:0.6875rem;font-weight:500;letter-spacing:0.22em;text-transform:uppercase;color:var(--luxe-muted,#8A8275);margin-bottom:0.625rem;}
						.wp-block-godevs-demo-luxe .luxe-form-input,
						.wp-block-godevs-demo-luxe .luxe-form-select,
						.wp-block-godevs-demo-luxe .luxe-form-textarea{display:block;width:100%;font-family:var(--wp--preset--font-family--body,"Inter",sans-serif);font-size:1rem;color:var(--luxe-ink,#1A1814);background:transparent;border:1px solid var(--luxe-line,#D9D2C2);border-radius:0;padding:0.75rem 1rem;transition:border-color .25s ease,box-shadow .25s ease;-webkit-appearance:none;appearance:none;}
						.wp-block-godevs-demo-luxe .luxe-form-select{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8'%3E%3Cpath d='M1 1l5 5 5-5' stroke='%238A8275' stroke-width='1.2' fill='none'/%3E%3C/svg%3E");background-repeat:no-repeat;background-position:right 1rem center;padding-right:2.5rem;}
						.wp-block-godevs-demo-luxe .luxe-form-textarea{min-height:8rem;resize:vertical;line-height:1.5;}
						.wp-block-godevs-demo-luxe .luxe-form-input::placeholder,
						.wp-block-godevs-demo-luxe .luxe-form-textarea::placeholder{color:var(--luxe-muted,#8A8275);opacity:1;}
						.wp-block-godevs-demo-luxe .luxe-form-input:focus,
						.wp-block-godevs-demo-luxe .luxe-form-select:focus,
						.wp-block-godevs-demo-luxe .luxe-form-textarea:focus{outline:none;border-color:var(--luxe-accent,#9A7B3F);box-shadow:0 0 0 1px var(--luxe-accent,#9A7B3F);}
						.wp-block-godevs-demo-luxe .luxe-form-actions{display:flex;flex-wrap:wrap;align-items:center;gap:1.25rem;margin-top:2rem;}
						.wp-block-godevs-demo-luxe .luxe-form-submit{display:inline-flex;align-items:center;gap:0.625rem;font-family:var(--wp--preset--font-family--body,"Inter",sans-serif);font-size:0.6875rem;font-weight:500;letter-spacing:0.2em;text-transform:uppercase;color:var(--luxe-ink,#1A1814);background:transparent;border:1px solid var(--luxe-ink,#1A1814);border-radius:0;padding:0.9rem 1.75rem;cursor:pointer;transition:background .3s ease,color .3s ease,border-color .3s ease;}
						.wp-block-godevs-demo-luxe .luxe-form-submit:hover,
						.wp-block-godevs-demo-luxe .luxe-form-submit:focus-visible{background:var(--luxe-accent,#9A7B3F);border-color:var(--luxe-accent,#9A7B3F);color:var(--luxe-base,#F4F1EA);outline:none;}
						.wp-block-godevs-demo-luxe .luxe-form-note{font-family:var(--wp--preset--font-family--body,"Inter",sans-serif);font-size:0.6875rem;letter-spacing:0.16em;text-transform:uppercase;color:var(--luxe-muted,#8A8275);margin:0;}
					</style>
					<div class="luxe-form">
						<p class="luxe-form-eyebrow">- Inquiry</p>
						<p class="luxe-form-title">Begin a conversation.</p>
						<form action="#" method="post" novalidate>
							<div class="luxe-form-row">
								<label class="luxe-form-label" for="luxe-name">Name</label>
								<input class="luxe-form-input" type="text" id="luxe-name" name="luxe_name" autocomplete="name" placeholder="Your full name" required>
							</div>
							<div class="luxe-form-row">
								<label class="luxe-form-label" for="luxe-email">Email</label>
								<input class="luxe-form-input" type="email" id="luxe-email" name="luxe_email" autocomplete="email" placeholder="you@studio.com" required>
							</div>
							<div class="luxe-form-row luxe-form-row--double">
								<div>
									<label class="luxe-form-label" for="luxe-project-type">Project type</label>
									<select class="luxe-form-select" id="luxe-project-type" name="luxe_project_type">
										<option value="">Select…</option>
										<option value="collection-design">Collection Design</option>
										<option value="creative-direction">Creative Direction</option>
										<option value="styling">Styling</option>
										<option value="campaign">Campaign</option>
										<option value="editorial">Editorial</option>
										<option value="other">Other</option>
									</select>
								</div>
								<div>
									<label class="luxe-form-label" for="luxe-budget">Budget</label>
									<select class="luxe-form-select" id="luxe-budget" name="luxe_budget">
										<option value="">Select…</option>
										<option value="5-20k">€5 – 20k</option>
										<option value="20-60k">€20 – 60k</option>
										<option value="60-150k">€60 – 150k</option>
										<option value="150k+">€150k +</option>
										<option value="not-sure">Not sure</option>
									</select>
								</div>
							</div>
							<div class="luxe-form-row">
								<label class="luxe-form-label" for="luxe-timeline">Timeline</label>
								<select class="luxe-form-select" id="luxe-timeline" name="luxe_timeline">
									<option value="">Select…</option>
									<option value="1-3-months">1 – 3 months</option>
									<option value="3-6-months">3 – 6 months</option>
									<option value="6-plus-months">6 + months</option>
									<option value="flexible">Flexible</option>
								</select>
							</div>
							<div class="luxe-form-row">
								<label class="luxe-form-label" for="luxe-message">Message</label>
								<textarea class="luxe-form-textarea" id="luxe-message" name="luxe_message" rows="5" placeholder="Briefly describe the project, the timeline you have in mind, and any references that feel relevant."></textarea>
							</div>
							<div class="luxe-form-actions">
								<button class="luxe-form-submit" type="submit">Make an inquiry <span aria-hidden="true">→</span></button>
								<p class="luxe-form-note">Demo form - connect a form plugin or the theme's front-forms feature.</p>
							</div>
						</form>
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

	<!-- === 03 - FAQ === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- Section header -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
				<!-- wp:paragraph {"className":"is-style-luxe-label","style":{"typography":{"fontFamily":"var:preset|font-family|body","fontSize":"0.6875rem","letterSpacing":"0.22em","textTransform":"uppercase","fontWeight":"500"},"color":{"text":"var:preset|color|muted"}}} -->
				<p class="is-style-luxe-label has-text-color" style="color:var(--wp--preset--color--muted);font-family:var(--wp--preset--font-family--body);font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase;font-weight:500">- Frequently Asked · 04</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"className":"luxe-display","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"clamp(2rem, 5vw, 3.75rem)","lineHeight":"1.05","letterSpacing":"-0.02em","fontWeight":"400"}}} -->
				<h2 class="wp-block-heading luxe-display" style="font-family:var(--wp--preset--font-family--display);font-size:clamp(2rem, 5vw, 3.75rem);line-height:1.05;letter-spacing:-0.02em;font-weight:400">Before you write.</h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- FAQ rows -->
			<!-- wp:html -->
			<div>
				<a class="luxe-service-row" href="/contact" style="grid-template-columns: 3rem 1fr 24rem 2rem;">
					<span class="luxe-service-num">01</span>
					<span class="luxe-service-title">How quickly do you respond?</span>
					<span class="luxe-service-desc" style="font-family: var(--wp--preset--font-family--body); font-size: 0.875rem; letter-spacing: 0; text-transform: none; line-height: 1.6;">Most inquiries receive a personal reply within three working days - sooner for time-sensitive projects.</span>
					<span class="luxe-service-arrow" aria-hidden="true">→</span>
				</a>
				<a class="luxe-service-row" href="/contact" style="grid-template-columns: 3rem 1fr 24rem 2rem;">
					<span class="luxe-service-num">02</span>
					<span class="luxe-service-title">What should I include in my inquiry?</span>
					<span class="luxe-service-desc" style="font-family: var(--wp--preset--font-family--body); font-size: 0.875rem; letter-spacing: 0; text-transform: none; line-height: 1.6;">A short brief - the project, the timeline, the budget range and any references that feel relevant to the work.</span>
					<span class="luxe-service-arrow" aria-hidden="true">→</span>
				</a>
				<a class="luxe-service-row" href="/contact" style="grid-template-columns: 3rem 1fr 24rem 2rem;">
					<span class="luxe-service-num">03</span>
					<span class="luxe-service-title">Do you travel for shoots?</span>
					<span class="luxe-service-desc" style="font-family: var(--wp--preset--font-family--body); font-size: 0.875rem; letter-spacing: 0; text-transform: none; line-height: 1.6;">Yes. The studio travels worldwide for campaigns and editorial productions, with advance scheduling.</span>
					<span class="luxe-service-arrow" aria-hidden="true">→</span>
				</a>
				<a class="luxe-service-row" href="/contact" style="grid-template-columns: 3rem 1fr 24rem 2rem;">
					<span class="luxe-service-num">04</span>
					<span class="luxe-service-title">Do you work with emerging brands?</span>
					<span class="luxe-service-desc" style="font-family: var(--wp--preset--font-family--body); font-size: 0.875rem; letter-spacing: 0; text-transform: none; line-height: 1.6;">Often - when the work is considered and the vision is clear. Scope and fee adapt to the stage of the practice.</span>
					<span class="luxe-service-arrow" aria-hidden="true">→</span>
				</a>
			</div>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- === 04 - CLOSING LINE === -->
	<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|100","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"className":"luxe-statement","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"clamp(1.75rem, 3.5vw, 2.75rem)","lineHeight":"1.2","letterSpacing":"-0.01em","fontWeight":"400"}}} -->
			<p class="luxe-statement" style="font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:clamp(1.75rem, 3.5vw, 2.75rem);line-height:1.2;letter-spacing:-0.01em;font-weight:400;max-width:30ch">If the timing is right, the work begins with a single message.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}},"typography":{"fontFamily":"var:preset|font-family|display","fontStyle":"italic","fontSize":"1.0625rem"}}} -->
			<p style="margin-top:var(--wp--preset--spacing--50);font-family:var(--wp--preset--font-family--display);font-style:italic;font-size:1.0625rem"><a href="mailto:studio@luxe.fashion">Write to the studio →</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->


	<!-- Project proposal form -->
	<!-- wp:group {"tagName":"section","className":"godevs-proposal-section","layout":{"type":"constrained","contentSize":"760px"}} -->
	<section class="wp-block-group godevs-proposal-section" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
		<!-- wp:heading {"level":2} -->
		<h2 class="wp-block-heading">Enquiries</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|muted"}},"className":"godevs-section-intro"} -->
		<p class="godevs-section-intro has-text-color" style="color:var(--wp--preset--color--muted);max-width:60ch">For commissions, collaborations and press - share the details and we will respond personally within two working days.</p>
		<!-- /wp:paragraph -->

		<!-- wp:shortcode -->
		[godevs_proposal_form]
		<!-- /wp:shortcode -->
	</section>
	<!-- /wp:group -->

	<!-- Footer -->
	<!-- wp:template-part {"slug":"footer-luxe","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
