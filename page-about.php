<?php
/**
 * Template Name: About
 * Description: About page showcasing ANSA Solutions mission, vision, and approach
 */

get_header();
?>

<main id="primary" class="site-main">

	<!-- Page Hero Section -->
	<section class="page-hero hero-gradient">
		<div class="container">
			<div class="hero-content">
				<span class="badge badge-primary">About ANSA Solutions</span>
				<h1 class="hero-title">AI Strategy Meets Operational Excellence</h1>
				<p class="hero-subtitle">We help mid-market organizations harness AI and automation strategically to drive measurable business outcomes.</p>
			</div>
		</div>
	</section>

	<!-- Mission/Vision Section -->
	<section class="mission-section">
		<div class="container">
			<div class="mission-content">
				<h2>Our Mission</h2>
				<p class="mission-statement">ANSA Solutions exists to help mid-market businesses harness AI and automation strategically — not randomly. We believe technology should serve operations, not the other way around.</p>
			</div>
		</div>
	</section>

	<!-- Leadership Section -->
	<section class="leadership-section">
		<div class="container">
			<div class="leadership-wrapper">

				<!-- Leadership Image -->
				<div class="leadership-image">
					<div class="image-placeholder">
						<svg class="placeholder-icon" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
							<circle cx="100" cy="60" r="35" fill="currentColor" opacity="0.3"/>
							<path d="M40 200 Q40 140 100 140 Q160 140 160 200" fill="currentColor" opacity="0.3"/>
						</svg>
						<p class="placeholder-text">Leadership Photo</p>
					</div>
				</div>

				<!-- Leadership Info -->
				<div class="leadership-content">
					<h2>Sundaresh Ramanathan</h2>
					<p class="leadership-title">Founder & Principal</p>

					<p class="leadership-bio">
						Sundaresh brings decades of experience in technology leadership focusing on process automation, analytics, and AI. He has successfully assisted organizations in driving digital transformation and enhancing operational efficiency. His expertise encompasses enterprise architecture, IT strategy, and AI-driven automation.
					</p>

					<p class="leadership-location">Based in Carmel, Indiana</p>
				</div>

			</div>
		</div>
	</section>

	<!-- Our Approach Section -->
	<section class="approach-section">
		<div class="container">
			<h2>Our Approach</h2>
			<p class="approach-intro">We're platform-aware but outcome-focused</p>

			<div class="approach-content">
				<p>
					We don't believe in technology for technology's sake. Instead, we start by understanding your operational friction — where manual processes slow you down, where systems don't talk to each other, where teams are making duplicate work.
				</p>

				<p>
					From there, we design automation and AI solutions around your outcomes, not the platform. We work with platforms like Workato, Zapier, and others — choosing the right tool for the job. Most importantly, we deliver measurable value in 6-8 weeks and build patterns that scale across your organization.
				</p>

				<p>
					<strong>Our partnership approach means you're not buying a consulting engagement — you're building an extension of your operational excellence team.</strong>
				</p>
			</div>
		</div>
	</section>

	<!-- CTA Section -->
	<section class="cta-section cta-gradient">
		<div class="container">
			<div class="cta-content">
				<h2>Ready to Explore What's Possible?</h2>
				<p>Let's start a conversation about how ANSA Solutions can help you unlock operational excellence.</p>
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary btn-lg">Start a Conversation</a>
			</div>
		</div>
	</section>

</main>

<?php
get_footer();
?>
