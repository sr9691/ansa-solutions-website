<?php
/**
 * Template Name: Case Studies
 * Description: Showcase of case studies demonstrating ANSA Solutions' operational impact
 */

get_header();
?>

<main id="primary" class="site-main">

	<!-- Page Hero Section -->
	<section class="page-hero hero-gradient">
		<div class="container">
			<div class="hero-content">
				<span class="badge badge-primary">Proven Results</span>
				<h1 class="hero-title">How We Deliver Measurable Impact</h1>
				<p class="hero-subtitle">We partner with operations-driven organizations to eliminate friction across systems, teams, and processes. We don't count scripts or steps — we count outcomes.</p>
			</div>
		</div>
	</section>

	<!-- Case Studies Grid -->
	<section class="case-studies-section">
		<div class="container">
			<div class="case-studies-grid">

				<!-- Case Study 1: Water Management & Infrastructure -->
				<article class="case-study-card">
					<div class="case-study-header">
						<span class="industry-tag">Water Management & Infrastructure</span>
						<h3 class="case-study-title">Automating Field, Finance, and Customer Operations</h3>
					</div>

					<div class="case-study-content">
						<div class="case-study-section">
							<h4 class="section-title">Challenge</h4>
							<p>High-volume operational data flowing across field systems, ERP, CRM, and customer platforms. Manual reconciliation slowing billing, service resolution, and reporting.</p>
						</div>

						<div class="case-study-section">
							<h4 class="section-title">What We Delivered</h4>
							<p>Event-driven orchestration between operational systems and back-office platforms. Automated data validation, enrichment, and routing. Exception handling designed for operational teams.</p>
						</div>

						<div class="case-study-section">
							<h4 class="section-title">Outcome</h4>
							<p>Faster operational response times, reduced manual intervention, improved data accuracy across systems.</p>
						</div>
					</div>
				</article>

				<!-- Case Study 2: Multi-Discipline Engineering Firm -->
				<article class="case-study-card">
					<div class="case-study-header">
						<span class="industry-tag">Multi-Discipline Engineering</span>
						<h3 class="case-study-title">Engineering, Finance, and Project Workflow Orchestration</h3>
					</div>

					<div class="case-study-content">
						<div class="case-study-section">
							<h4 class="section-title">Challenge</h4>
							<p>Disconnected systems across CRM, ERP, project accounting, and expense platforms. Manual handoffs causing delays, rework, and reporting gaps.</p>
						</div>

						<div class="case-study-section">
							<h4 class="section-title">What We Delivered</h4>
							<p>End-to-end orchestration across CRM, project accounting, expense management, and operational systems. Automated project setup, cost tracking, and financial workflows. Clear audit trails.</p>
						</div>

						<div class="case-study-section">
							<h4 class="section-title">Outcome</h4>
							<p>Faster project startup and closeout, fewer billing delays, increased confidence in project financials.</p>
						</div>
					</div>
				</article>

				<!-- Case Study 3: Industrial Safety Operations -->
				<article class="case-study-card">
					<div class="case-study-header">
						<span class="industry-tag">Industrial Safety Operations</span>
						<h3 class="case-study-title">Operational Safety Data at Scale</h3>
					</div>

					<div class="case-study-content">
						<div class="case-study-section">
							<h4 class="section-title">Challenge</h4>
							<p>Safety data distributed across systems and teams. Manual processes slowing incident tracking, reporting, and compliance readiness.</p>
						</div>

						<div class="case-study-section">
							<h4 class="section-title">What We Delivered</h4>
							<p>Automated ingestion and routing of safety events. Structured workflows for follow-ups, approvals, and documentation. Centralized, audit-ready data flows.</p>
						</div>

						<div class="case-study-section">
							<h4 class="section-title">Outcome</h4>
							<p>Faster incident response, improved compliance readiness, reduced operational risk.</p>
						</div>
					</div>
				</article>

				<!-- Case Study 4: Financial Services Firm -->
				<article class="case-study-card">
					<div class="case-study-header">
						<span class="industry-tag">Financial Services</span>
						<h3 class="case-study-title">Operational Automation for Financial Services</h3>
					</div>

					<div class="case-study-content">
						<div class="case-study-section">
							<h4 class="section-title">Challenge</h4>
							<p>Manual, error-prone workflows across deal intake, document handling, and internal approvals. High operational load on lean teams.</p>
						</div>

						<div class="case-study-section">
							<h4 class="section-title">What We Delivered</h4>
							<p>State-machine-driven workflow automation. Automated document generation, review, and escalation paths. Clear visibility into deal status and bottlenecks.</p>
						</div>

						<div class="case-study-section">
							<h4 class="section-title">Outcome</h4>
							<p>Shorter deal cycles, fewer manual touchpoints, higher confidence and consistency in execution.</p>
						</div>
					</div>
				</article>

			</div>
		</div>
	</section>

	<!-- Common Thread Section -->
	<section class="common-thread-section">
		<div class="container">
			<div class="common-thread-content">
				<h2>What These Projects Have in Common</h2>
				<p class="section-intro">Our approach works because it respects how operations actually run.</p>

				<div class="common-threads-grid">
					<div class="thread-item">
						<h4>Mission-Critical Operations</h4>
						<p>Projects that directly impact revenue, safety, or regulatory compliance.</p>
					</div>
					<div class="thread-item">
						<h4>Multiple Systems</h4>
						<p>Complex integrations across CRM, ERP, field systems, and specialized platforms.</p>
					</div>
					<div class="thread-item">
						<h4>Regulatory & Risk</h4>
						<p>Audit trails, compliance readiness, and financial accuracy matter.</p>
					</div>
					<div class="thread-item">
						<h4>Durable Workflows</h4>
						<p>Clean, auditable processes that scale and adapt with the business.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- CTA Section -->
	<section class="cta-section cta-gradient">
		<div class="container">
			<div class="cta-content">
				<h2>Ready to Transform Your Operations?</h2>
				<p>Let's explore how ANSA Solutions can help you eliminate friction and drive measurable impact.</p>
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary btn-lg">Get in Touch</a>
			</div>
		</div>
	</section>

</main>

<?php
get_footer();
?>