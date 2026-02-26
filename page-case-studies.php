<?php
/**
 * Template Name: Case Studies
 * Template Post Type: page
 */

get_header();
?>

<style>
	:root {
		--accent: #462CED;
		--primary: #374151;
		--background: #FFFFFF;
		--text-light: #6B7280;
		--border-light: #F3F4F6;
	}

	.case-study-card {
		background: var(--border-light);
		border-left: 4px solid var(--accent);
		border-radius: 12px;
		padding: 2.5rem;
		margin-bottom: 3rem;
	}

	.case-study-card h3 {
		color: var(--accent);
		margin: 0 0 0.5rem 0;
		font-size: 1.5rem;
		font-weight: 700;
	}

	.case-study-card .tagline {
		color: var(--primary);
		font-weight: 600;
		font-size: 1.1rem;
		margin-bottom: 1.25rem;
	}

	.case-study-card .description {
		color: var(--primary);
		font-size: 0.95rem;
		line-height: 1.6;
		margin-bottom: 2rem;
	}

	.case-study-grid {
		display: grid;
		grid-template-columns: 1fr 1fr 1fr;
		gap: 2rem;
		margin-top: 1.5rem;
	}

	.case-study-column {
		display: flex;
		flex-direction: column;
	}

	.case-study-column h4 {
		color: var(--primary);
		font-size: 0.9rem;
		font-weight: 700;
		text-transform: uppercase;
		letter-spacing: 0.05em;
		margin: 0 0 1rem 0;
		display: flex;
		align-items: center;
		gap: 0.5rem;
	}

	.case-study-column ul {
		list-style: none;
		padding: 0;
		margin: 0;
	}

	.case-study-column li {
		color: var(--primary);
		font-size: 0.9rem;
		line-height: 1.5;
		margin-bottom: 0.75rem;
		display: flex;
		align-items: flex-start;
		gap: 0.5rem;
	}

	.case-study-column .outcome-check {
		color: var(--accent);
		font-weight: 700;
		flex-shrink: 0;
		margin-top: 0.15rem;
	}

	.common-themes {
		display: grid;
		grid-template-columns: 1fr 1fr;
		gap: 2rem;
		margin-top: 2rem;
	}

	.theme-card {
		display: flex;
		align-items: flex-start;
		gap: 1.25rem;
		padding: 1.5rem;
		background: var(--border-light);
		border-radius: 8px;
	}

	.theme-icon {
		flex-shrink: 0;
		width: 2.5rem;
		height: 2.5rem;
		display: flex;
		align-items: center;
		justify-content: center;
	}

	.theme-icon svg {
		width: 100%;
		height: 100%;
		color: var(--accent);
	}

	.theme-text h4 {
		color: var(--primary);
		font-size: 1rem;
		font-weight: 700;
		margin: 0 0 0.5rem 0;
	}

	.theme-text p {
		color: var(--text-light);
		font-size: 0.9rem;
		margin: 0;
		line-height: 1.5;
	}

	.how-we-operate {
		display: grid;
		grid-template-columns: repeat(4, 1fr);
		gap: 2rem;
		margin-top: 2rem;
	}

	.operate-step {
		text-align: center;
	}

	.operate-step-number {
		display: inline-flex;
		align-items: center;
		justify-content: center;
		width: 3rem;
		height: 3rem;
		background: var(--accent);
		color: white;
		border-radius: 50%;
		font-size: 1.25rem;
		font-weight: 700;
		margin-bottom: 1rem;
	}

	.operate-step p {
		color: var(--primary);
		font-size: 0.95rem;
		line-height: 1.5;
		margin: 0;
	}

	@media (max-width: 768px) {
		.case-study-grid {
			grid-template-columns: 1fr;
			gap: 1.5rem;
		}

		.common-themes {
			grid-template-columns: 1fr;
			gap: 1.5rem;
		}

		.how-we-operate {
			grid-template-columns: 1fr;
			gap: 1.5rem;
		}

		.case-study-card {
			padding: 1.5rem;
		}
	}
</style>

<section class="hero hero--dark-gradient">
	<div class="hero__content">
		<span class="badge badge--primary">Case Studies</span>
		<h1 class="hero__title">Proven Automation <span class="text-accent">Outcomes</span></h1>
		<p class="hero__subtitle">ANSA Solutions partners with operations-driven organizations to eliminate friction across systems, teams, and processes. We don't count scripts or steps — we count outcomes.</p>
	</div>
</section>

<section class="section">
	<div class="container">
		<!-- Smart Water Management Case Study -->
		<div class="case-study-card">
			<h3>Smart Water Management</h3>
			<p class="tagline">Automating Field, Finance, and Customer Operations</p>
			<p class="description">This smart water management company provides intelligent solutions that operate at the intersection of physical infrastructure, software, and customer-facing services. Their environment required highly reliable data movement between field operations, billing systems, and customer platforms. ANSA delivered event-driven orchestration that reduced manual reconciliation, improved data accuracy, and ensured operational data flowed predictably across systems.</p>
			<div class="case-study-grid">
				<div class="case-study-column">
					<h4>
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8 1C4.13 1 1 4.13 1 8s3.13 7 7 7 7-3.13 7-7-3.13-7-7-7zm0 12c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5z" fill="currentColor"/>
							<path d="M7 4h2v5H7z" fill="currentColor"/>
						</svg>
						Challenge
					</h4>
					<ul>
						<li>High-volume operational data flowing across field systems, ERP, CRM, and customer platforms</li>
						<li>Manual reconciliation slowing billing, service resolution, and reporting</li>
					</ul>
				</div>
				<div class="case-study-column">
					<h4>
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M11 2H5c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h6c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 12H5V4h6v10z" fill="currentColor"/>
							<path d="M6.5 9.5h3v1h-3z" fill="currentColor"/>
						</svg>
						What We Delivered
					</h4>
					<ul>
						<li>Event-driven orchestration between operational systems and back-office platforms</li>
						<li>Automated data validation, enrichment, and routing</li>
						<li>Exception handling designed for operational teams — not IT tickets</li>
					</ul>
				</div>
				<div class="case-study-column">
					<h4>
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M13.78 4.22c.3-.3.3-.78 0-1.06l-2-2c-.3-.3-.78-.3-1.06 0l-8 8V13h4.78l8-8zm-7-4l2 2" fill="currentColor" opacity="0.3"/>
							<path d="M13.78 4.22L8 10.78V13h2.22l5.78-5.78" fill="currentColor"/>
						</svg>
						Outcome
					</h4>
					<ul>
						<li><span class="outcome-check">✓</span> Faster operational response times</li>
						<li><span class="outcome-check">✓</span> Reduced manual intervention</li>
						<li><span class="outcome-check">✓</span> Improved data accuracy across systems customers rely on</li>
					</ul>
				</div>
			</div>
		</div>

		<!-- Multi-Discipline Engineering Case Study -->
		<div class="case-study-card">
			<h3>Multi-Discipline Engineering</h3>
			<p class="tagline">Engineering, Finance, and Project Workflow Orchestration</p>
			<p class="description">This multi-discipline engineering firm executes projects where project execution, financial accuracy, and compliance are tightly coupled. As the firm grew, disconnected systems across CRM, project accounting, expense management, and finance created delays and reporting challenges. ANSA designed and implemented clean, auditable workflows that orchestrated project setup, cost tracking, and billing processes.</p>
			<div class="case-study-grid">
				<div class="case-study-column">
					<h4>
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8 1C4.13 1 1 4.13 1 8s3.13 7 7 7 7-3.13 7-7-3.13-7-7-7zm0 12c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5z" fill="currentColor"/>
							<path d="M7 4h2v5H7z" fill="currentColor"/>
						</svg>
						Challenge
					</h4>
					<ul>
						<li>Disconnected systems across CRM, ERP, project accounting, and expense platforms</li>
						<li>Manual handoffs causing delays, rework, and reporting gaps</li>
					</ul>
				</div>
				<div class="case-study-column">
					<h4>
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M11 2H5c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h6c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 12H5V4h6v10z" fill="currentColor"/>
							<path d="M6.5 9.5h3v1h-3z" fill="currentColor"/>
						</svg>
						What We Delivered
					</h4>
					<ul>
						<li>End-to-end orchestration across CRM, project accounting, expense management, and operational systems</li>
						<li>Automated project setup, cost tracking, and financial workflows</li>
						<li>Clear audit trails across engineering and finance processes</li>
					</ul>
				</div>
				<div class="case-study-column">
					<h4>
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M13.78 4.22c.3-.3.3-.78 0-1.06l-2-2c-.3-.3-.78-.3-1.06 0l-8 8V13h4.78l8-8zm-7-4l2 2" fill="currentColor" opacity="0.3"/>
							<path d="M13.78 4.22L8 10.78V13h2.22l5.78-5.78" fill="currentColor"/>
						</svg>
						Outcome
					</h4>
					<ul>
						<li><span class="outcome-check">✓</span> Faster project startup and closeout</li>
						<li><span class="outcome-check">✓</span> Fewer billing delays</li>
						<li><span class="outcome-check">✓</span> Increased confidence in project financials</li>
					</ul>
				</div>
			</div>
		</div>

		<!-- Industrial Safety & Compliance Case Study -->
		<div class="case-study-card">
			<h3>Industrial Safety & Compliance</h3>
			<p class="tagline">Operational Safety Data at Scale</p>
			<p class="description">This industrial safety company supports organizations operating in high-risk environments where safety data must be timely, accurate, and audit-ready. Their challenge was not lack of data, but friction in how incidents, follow-ups, and compliance documentation moved across teams and systems. ANSA automated the ingestion, routing, and lifecycle management of safety events.</p>
			<div class="case-study-grid">
				<div class="case-study-column">
					<h4>
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8 1C4.13 1 1 4.13 1 8s3.13 7 7 7 7-3.13 7-7-3.13-7-7-7zm0 12c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5z" fill="currentColor"/>
							<path d="M7 4h2v5H7z" fill="currentColor"/>
						</svg>
						Challenge
					</h4>
					<ul>
						<li>Safety data distributed across systems and teams</li>
						<li>Manual processes slowing incident tracking, reporting, and compliance readiness</li>
					</ul>
				</div>
				<div class="case-study-column">
					<h4>
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M11 2H5c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h6c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 12H5V4h6v10z" fill="currentColor"/>
							<path d="M6.5 9.5h3v1h-3z" fill="currentColor"/>
						</svg>
						What We Delivered
					</h4>
					<ul>
						<li>Automated ingestion and routing of safety events</li>
						<li>Structured workflows for follow-ups, approvals, and documentation</li>
						<li>Centralized, audit-ready data flows</li>
					</ul>
				</div>
				<div class="case-study-column">
					<h4>
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M13.78 4.22c.3-.3.3-.78 0-1.06l-2-2c-.3-.3-.78-.3-1.06 0l-8 8V13h4.78l8-8zm-7-4l2 2" fill="currentColor" opacity="0.3"/>
							<path d="M13.78 4.22L8 10.78V13h2.22l5.78-5.78" fill="currentColor"/>
						</svg>
						Outcome
					</h4>
					<ul>
						<li><span class="outcome-check">✓</span> Faster incident response</li>
						<li><span class="outcome-check">✓</span> Improved compliance readiness</li>
						<li><span class="outcome-check">✓</span> Reduced operational risk without adding process overhead</li>
					</ul>
				</div>
			</div>
		</div>

		<!-- Financial Services Case Study -->
		<div class="case-study-card">
			<h3>Financial Services</h3>
			<p class="tagline">Operational Automation for Financial Services</p>
			<p class="description">This financial services firm operates in a fast-moving environment where consistency, traceability, and speed are critical. Manual deal intake, document handling, and approval processes introduced variability and risk. ANSA implemented a state-machine–driven automation model that standardized workflows, enforced governance, and improved visibility across deal lifecycles.</p>
			<div class="case-study-grid">
				<div class="case-study-column">
					<h4>
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8 1C4.13 1 1 4.13 1 8s3.13 7 7 7 7-3.13 7-7-3.13-7-7-7zm0 12c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5z" fill="currentColor"/>
							<path d="M7 4h2v5H7z" fill="currentColor"/>
						</svg>
						Challenge
					</h4>
					<ul>
						<li>Manual, error-prone workflows across deal intake, document handling, and internal approvals</li>
						<li>High operational load on lean teams</li>
					</ul>
				</div>
				<div class="case-study-column">
					<h4>
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M11 2H5c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h6c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 12H5V4h6v10z" fill="currentColor"/>
							<path d="M6.5 9.5h3v1h-3z" fill="currentColor"/>
						</svg>
						What We Delivered
					</h4>
					<ul>
						<li>State-machine–driven workflow automation</li>
						<li>Automated document generation, review, and escalation paths</li>
						<li>Clear visibility into deal status and bottlenecks</li>
					</ul>
				</div>
				<div class="case-study-column">
					<h4>
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M13.78 4.22c.3-.3.3-.78 0-1.06l-2-2c-.3-.3-.78-.3-1.06 0l-8 8V13h4.78l8-8zm-7-4l2 2" fill="currentColor" opacity="0.3"/>
							<path d="M13.78 4.22L8 10.78V13h2.22l5.78-5.78" fill="currentColor"/>
						</svg>
						Outcome
					</h4>
					<ul>
						<li><span class="outcome-check">✓</span> Shorter deal cycles</li>
						<li><span class="outcome-check">✓</span> Fewer manual touchpoints</li>
						<li><span class="outcome-check">✓</span> Higher confidence and consistency in execution</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="section__header">
			<h2>What These Projects Have in Common</h2>
		</div>
		<p style="color: var(--primary); margin-bottom: 2rem; line-height: 1.6;">Each of these organizations faced a similar fundamental challenge: they had invested in the right tools, but the connections between those tools were manual, fragile, and hard to audit. The result was operational friction — slowdowns, errors, and risk that no individual system could address alone.</p>
		<div class="common-themes">
			<div class="theme-card">
				<div class="theme-icon">
					<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 8 8.5 8 7 8.67 7 9.5 7.67 11 8.5 11zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z" fill="currentColor"/>
					</svg>
				</div>
				<div class="theme-text">
					<h4>Mission-critical operations</h4>
					<p>No tolerance for fragile automation</p>
				</div>
			</div>
			<div class="theme-card">
				<div class="theme-icon">
					<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-2 12H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z" fill="currentColor"/>
					</svg>
				</div>
				<div class="theme-text">
					<h4>Multiple systems</h4>
					<p>ERP, CRM, operational platforms, finance tools</p>
				</div>
			</div>
			<div class="theme-card">
				<div class="theme-icon">
					<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.72-7 8.77V12H5V6.3l7-3.11v8.8z" fill="currentColor"/>
					</svg>
				</div>
				<div class="theme-text">
					<h4>Regulatory, safety, or financial risk</h4>
					<p>Accuracy and compliance are non-negotiable</p>
				</div>
			</div>
			<div class="theme-card">
				<div class="theme-icon">
					<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M9 11H7v2h2v-2zm14-7h-6V2h-2v2H9V2H7v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z" fill="currentColor"/>
					</svg>
				</div>
				<div class="theme-text">
					<h4>Need for clean, auditable, durable workflows</h4>
					<p>Governance you can trust at scale</p>
				</div>
			</div>
		</div>
		<p style="color: var(--text-light); font-style: italic; margin-top: 2rem; text-align: center;">Our approach works because it respects how operations actually run.</p>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="section__header">
			<h2>How We Typically Operate</h2>
		</div>
		<div class="how-we-operate">
			<div class="operate-step">
				<div class="operate-step-number">1</div>
				<p>Identify 1–2 workflows creating friction today</p>
			</div>
			<div class="operate-step">
				<div class="operate-step-number">2</div>
				<p>Design automation around outcomes, not tools</p>
			</div>
			<div class="operate-step">
				<div class="operate-step-number">3</div>
				<p>Deliver measurable value in 6–8 weeks</p>
			</div>
			<div class="operate-step">
				<div class="operate-step-number">4</div>
				<p>Scale proven patterns across the organization</p>
			</div>
		</div>
	</div>
</section>

<section class="section section--cta-dark section--final-cta">
	<div class="container">
		<h2>Ready to See What Automation Can Do for You?</h2>
		<p>Let's identify the workflows that are costing you time, accuracy, and scale.</p>
		<div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-top: 2rem;">
			<a href="<?php echo esc_url( home_url( '/ai-readiness' ) ); ?>" class="button button--primary button--large">Start with an Assessment</a>
			<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="button button--outline button--large">Let's Talk</a>
		</div>
	</div>
</section>

<?php get_footer(); ?>
