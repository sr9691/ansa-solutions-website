<?php
/**
 * Template Name: Sample Report Preview
 * Description: Gated preview page for the AI Readiness Report sample
 */

get_header();
?>

<main id="primary" class="site-main">

	<!-- Page Hero Section -->
	<section class="page-hero hero-gradient">
		<div class="container">
			<div class="hero-content">
				<span class="badge badge-primary">Sample Deliverable</span>
				<h1 class="hero-title">See What Your AI Readiness Report Looks Like</h1>
				<p class="hero-subtitle">Our interactive report gives you a complete picture of your AI readiness — with scores, opportunities, gap analysis, and a phased action plan.</p>
			</div>
		</div>
	</section>

	<!-- Report Preview Section -->
	<section class="report-preview-section">
		<div class="container">
			<div class="report-preview-wrapper">

				<!-- Teaser Report Card -->
				<div class="report-teaser-card">
					<div class="report-header">
						<h3>Your AI Readiness Score</h3>
						<p class="overall-score">3.1 / 5.0 — Ready for Quick Wins</p>
					</div>

					<div class="report-content">
						<!-- Readiness Scorecard -->
						<div class="scorecard-section">
							<h4>Readiness Scorecard</h4>
							<div class="scorecard-items">
								<div class="scorecard-item">
									<span class="metric-label">Technology Infrastructure</span>
									<span class="metric-score">3.4/5.0</span>
								</div>
								<div class="scorecard-item blur">
									<span class="metric-label">Data & Analytics Maturity</span>
									<span class="metric-score">•••••••••</span>
								</div>
								<div class="scorecard-item blur">
									<span class="metric-label">Process Automation Readiness</span>
									<span class="metric-score">•••••••••</span>
								</div>
								<div class="scorecard-item blur">
									<span class="metric-label">Organizational Change Capacity</span>
									<span class="metric-score">•••••••••</span>
								</div>
								<div class="scorecard-item blur">
									<span class="metric-label">AI Skills & Expertise</span>
									<span class="metric-score">•••••••••</span>
								</div>
							</div>
						</div>

						<!-- Opportunities -->
						<div class="opportunities-section blur">
							<h4>3 AI Opportunities Identified</h4>
							<p class="opportunity-hint">Potential Impact: <strong>$500K - $1.2M</strong> annually</p>
						</div>

						<!-- Gap Analysis -->
						<div class="gap-analysis-section blur">
							<h4>Gap Analysis & Action Plan</h4>
							<p class="gap-hint">5-phase implementation roadmap included</p>
						</div>
					</div>

					<p class="teaser-note">
						<em>This is a sample preview. The full interactive report includes detailed breakdowns, implementation roadmaps, and specific recommendations for your organization.</em>
					</p>
				</div>

			</div>
		</div>
	</section>

	<!-- Gated Access Form Section -->
	<section class="gated-form-section">
		<div class="container">
			<div class="gated-form-wrapper">
				<h2>View the Full Interactive Report</h2>
				<p class="form-intro">Enter your details below to access the complete sample report and unlock the full interactive experience.</p>

				<form id="report-access-form" class="gated-form" method="POST" action="">
					<div class="form-group">
						<label for="report-name">Name</label>
						<input type="text" id="report-name" name="name" class="form-control" required>
					</div>

					<div class="form-group">
						<label for="report-email">Email</label>
						<input type="email" id="report-email" name="email" class="form-control" required>
					</div>

					<div class="form-group">
						<label for="report-company">Company Name</label>
						<input type="text" id="report-company" name="company" class="form-control" required>
					</div>

					<button type="submit" class="btn btn-primary">Unlock Full Report</button>

					<!-- HubSpot form placeholder - replace with HubSpot embed code -->
					<!--
					<div id="hubspot-form-container"></div>
					<script>
						// HubSpot form embed code will go here
					</script>
					-->
				</form>
			</div>
		</div>
	</section>

	<!-- What's Inside Section -->
	<section class="whats-inside-section">
		<div class="container">
			<h2>What's Inside the Full Report</h2>
			<p class="section-intro">Our AI Readiness Report covers everything you need to understand where you stand and where you're headed.</p>

			<div class="report-features-grid">

				<div class="feature-card">
					<div class="feature-icon">
						<svg class="icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
							<path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 8 8.5 8 7 8.67 7 9.5 7.67 11 8.5 11zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z" fill="currentColor"/>
						</svg>
					</div>
					<h4>Overview & Scorecard</h4>
					<p>Comprehensive assessment across technology, data, process automation, organizational readiness, and AI skills.</p>
				</div>

				<div class="feature-card">
					<div class="feature-icon">
						<svg class="icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
							<path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z" fill="currentColor"/>
						</svg>
					</div>
					<h4>AI Opportunities with ROI</h4>
					<p>Specific, prioritized opportunities with estimated impact, implementation effort, and expected timelines.</p>
				</div>

				<div class="feature-card">
					<div class="feature-icon">
						<svg class="icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
							<path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2V17zm4 0h-2V7h2V17zm4 0h-2v-4h2V17z" fill="currentColor"/>
						</svg>
					</div>
					<h4>Gap Analysis</h4>
					<p>Clear identification of gaps between current state and AI-ready organization, with specific recommendations.</p>
				</div>

				<div class="feature-card">
					<div class="feature-icon">
						<svg class="icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
							<path d="M13 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V9l-7-7zM5 20V4h7v5h5v11H5z" fill="currentColor"/>
						</svg>
					</div>
					<h4>Phased Action Plan</h4>
					<p>A realistic, 5-phase implementation roadmap tailored to your organization's maturity and capacity.</p>
				</div>

			</div>
		</div>
	</section>

	<!-- CTA Section -->
	<section class="cta-section cta-gradient">
		<div class="container">
			<div class="cta-content">
				<h2>Ready to Get Your AI Readiness Assessment?</h2>
				<p>Take the first step toward understanding your AI potential and creating a strategic action plan.</p>
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary btn-lg">Schedule a Conversation</a>
			</div>
		</div>
	</section>

</main>

<?php
get_footer();
?>
