<?php
/**
 * Template Name: Process Automation
 * Description: Process Automation service page
 */

get_header();
?>

<main id="main-content" class="site-main">

	<!-- Page Hero Section -->
	<section class="hero hero--dark-gradient">
		<div class="hero__content">
			<span class="badge badge--primary">Enterprise Automation</span>
			<h1 class="hero__title">
				Process Automation That Delivers <span class="text-accent">Results</span>
			</h1>
			<p class="hero__subtitle">
				We partner with platforms like Workato to design, build, and operate intelligent automation that connects your systems and eliminates manual work.
			</p>
		</div>
	</section>

	<!-- What We Do Section -->
	<section class="section section--what-we-do">
		<div class="container">
			<div class="section__header">
				<h2>What We Do</h2>
			</div>
			<p class="section__intro">
				ANSA Solutions specializes in enterprise process automation for operations-driven organizations. We don't count scripts or steps — we count outcomes. Our approach works because it respects how operations actually run.
			</p>
			<div class="cards-grid cards-grid--2x2">
				<div class="card card--capability">
					<h3 class="card__title">Workflow Orchestration</h3>
					<p class="card__description">
						Event-driven automation across ERP, CRM, operational platforms, and finance tools
					</p>
				</div>
				<div class="card card--capability">
					<h3 class="card__title">System Integration</h3>
					<p class="card__description">
						Connect disconnected systems with clean, auditable data flows that scale
					</p>
				</div>
				<div class="card card--capability">
					<h3 class="card__title">Document Intelligence</h3>
					<p class="card__description">
						AI-powered document processing, extraction, and routing
					</p>
				</div>
				<div class="card card--capability">
					<h3 class="card__title">Compliance & Governance</h3>
					<p class="card__description">
						Automation designed for regulated environments with full audit trails
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- How We Work Section -->
	<section class="section section--how-we-work">
		<div class="container">
			<div class="section__header">
				<h2>How We Work</h2>
			</div>
			<div class="timeline">
				<div class="timeline__item">
					<div class="timeline__step">1</div>
					<div class="timeline__content">
						<h3 class="timeline__title">Identify</h3>
						<p class="timeline__description">Identify 1-2 workflows creating friction today</p>
					</div>
				</div>
				<div class="timeline__item">
					<div class="timeline__step">2</div>
					<div class="timeline__content">
						<h3 class="timeline__title">Design</h3>
						<p class="timeline__description">Design automation around outcomes, not tools</p>
					</div>
				</div>
				<div class="timeline__item">
					<div class="timeline__step">3</div>
					<div class="timeline__content">
						<h3 class="timeline__title">Deliver</h3>
						<p class="timeline__description">Deliver measurable value in 6-8 weeks</p>
					</div>
				</div>
				<div class="timeline__item">
					<div class="timeline__step">4</div>
					<div class="timeline__content">
						<h3 class="timeline__title">Scale</h3>
						<p class="timeline__description">Scale proven patterns across the organization</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Partnership Section -->
	<section class="section section--partnership">
		<div class="container">
			<div class="section__header">
				<h2>Our Partnership Approach</h2>
			</div>
			<div class="partnership__content">
				<p>
					We're platform-aware but outcome-focused. The right tool depends on your environment — we help you choose and implement it.
				</p>
				<p>
					Our experience with industry-leading platforms like Workato ensures your automation is built on a foundation that scales with your business.
				</p>
			</div>
		</div>
	</section>

	<!-- CTA Section -->
	<section class="section section--cta section--cta-dark">
		<div class="container">
			<h2>Ready to Transform Your Operations?</h2>
			<p>Let's start with a conversation about your biggest automation challenges.</p>
			<div class="cta-buttons">
				<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="button button--primary button--large">
					Contact Our Team
				</a>
				<a href="<?php echo esc_url( home_url( '/ai-readiness-assessment' ) ); ?>" class="button button--secondary button--large">
					Take AI Readiness Assessment
				</a>
			</div>
		</div>
	</section>

</main>

<?php
get_footer();
?>
