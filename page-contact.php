<?php
/**
 * Template Name: Contact
 * Description: Contact page with form and company information
 */

get_header();
?>

<main id="primary" class="site-main">

	<!-- Page Hero Section -->
	<section class="page-hero hero-gradient">
		<div class="container">
			<div class="hero-content">
				<h1 class="hero-title">Let's Talk</h1>
				<p class="hero-subtitle">Whether you're exploring AI readiness, need process automation, or want to learn about our accelerators — we'd love to hear from you.</p>
			</div>
		</div>
	</section>

	<!-- Contact Section -->
	<section class="contact-section">
		<div class="container">
			<div class="contact-wrapper">

				<!-- Contact Form Column -->
				<div class="contact-form-column">
					<h2>Send Us a Message</h2>

					<!-- HubSpot Embedded Form — Replace formId with your new Contact Us form -->
					<div class="hubspot-form-container" style="min-height: 400px;">
						<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
						<script>
							hbspt.forms.create({
								region: "na1",
								portalId: "242976044",
								formId: "REPLACE_WITH_YOUR_CONTACT_FORM_ID"
							});
						</script>
						<noscript>
							<p>Please enable JavaScript to use this form, or <a href="mailto:sr@ansa.solutions">email us directly</a>.</p>
						</noscript>
					</div>
				</div>

				<!-- Contact Info Column -->
				<div class="contact-info-column">
					<div class="contact-info-card">
						<h3>Get in Touch</h3>

						<div class="contact-info-block">
							<h4>Location</h4>
							<p>Carmel, Indiana</p>
						</div>

						<div class="contact-info-block">
							<h4>Email</h4>
							<p>
								<a href="mailto:sr@ansa.solutions">sr@ansa.solutions</a>
							</p>
						</div>

						<div class="contact-info-block">
							<h4>Connect</h4>
							<p>
								<a href="https://www.linkedin.com/company/ansa-solutions/" target="_blank" rel="noopener noreferrer" class="link-primary">LinkedIn</a>
							</p>
						</div>

						<div class="contact-info-block contact-expectations">
							<h4>What to Expect</h4>
							<p>We typically respond within 1 business day. We're committed to understanding your challenges and exploring how we can help.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

</main>

<?php
get_footer();
?>
