<?php
/**
 * Template Name: Contact
 * Description: Contact page with form and company information
 */

get_header();
?>

<style>
	.contact-layout {
		display: grid !important;
		grid-template-columns: 1fr 380px !important;
		gap: 3rem !important;
		align-items: start !important;
		max-width: 1200px;
		margin: 0 auto;
	}
	@media (max-width: 768px) {
		.contact-layout {
			grid-template-columns: 1fr !important;
		}
	}
</style>

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
			<div class="contact-layout">

				<!-- Contact Form Column -->
				<div class="contact-form-column">
					<h2>Send Us a Message</h2>

					<!-- HubSpot Embedded Contact Form -->
					<div class="hubspot-form-container" style="min-height: 400px;">
						<script src="https://js.hsforms.net/forms/embed/50725925.js" defer></script>
						<div class="hs-form-frame" data-region="na1" data-form-id="1a8a8d6f-d8cb-4876-bf15-5df9da9d85ec" data-portal-id="50725925"></div>
						<noscript>
							<p>Please enable JavaScript to use this form, or <a href="mailto:info@ansa.solutions">email us directly</a>.</p>
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
								<a href="mailto:info@ansa.solutions">info@ansa.solutions</a>
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
