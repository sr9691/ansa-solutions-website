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

					<form id="contact-form" class="contact-form" method="POST" action="">
						<div class="form-group">
							<label for="contact-name">Name</label>
							<input type="text" id="contact-name" name="name" class="form-control" required>
						</div>

						<div class="form-group">
							<label for="contact-email">Email</label>
							<input type="email" id="contact-email" name="email" class="form-control" required>
						</div>

						<div class="form-group">
							<label for="contact-company">Company</label>
							<input type="text" id="contact-company" name="company" class="form-control">
						</div>

						<div class="form-group">
							<label for="contact-subject">Subject</label>
							<select id="contact-subject" name="subject" class="form-control" required>
								<option value="">Select a subject</option>
								<option value="general-inquiry">General Inquiry</option>
								<option value="ai-readiness">AI Readiness Assessment</option>
								<option value="process-automation">Process Automation</option>
								<option value="accelerators">Automation Accelerators</option>
							</select>
						</div>

						<div class="form-group">
							<label for="contact-message">Message</label>
							<textarea id="contact-message" name="message" class="form-control" rows="6" required></textarea>
						</div>

						<button type="submit" class="btn btn-primary">Send Message</button>

						<p class="form-note">We typically respond within 1 business day.</p>
					</form>
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
