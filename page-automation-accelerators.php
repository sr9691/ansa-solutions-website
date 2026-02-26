<?php
/**
 * Template Name: Automation Accelerators
 * Description: AI-Powered Automation Accelerators page
 */

get_header();
?>

<main id="main-content" class="site-main">

	<!-- Page Hero Section -->
	<section class="hero hero--dark-gradient">
		<div class="hero__content">
			<span class="badge badge--primary">AI-Powered Automation</span>
			<h1 class="hero__title">Automation Accelerators</h1>
			<p class="hero__subtitle">
				Pre-built, AI-powered automation bundles that solve common business pain points. Deploy in days, not months.
			</p>
		</div>
	</section>

	<!-- How It Works Visual Section -->
	<section class="section section--how-accelerators-work">
		<div class="container">
			<div class="section__header">
				<h2>How Automation Accelerators Work</h2>
				<p>A consistent pattern that drives results</p>
			</div>
			<div class="accelerator-flow">
				<div class="flow-step">
					<div class="flow-step__icon">
						<span class="flow-icon trigger-icon">1</span>
					</div>
					<h3 class="flow-step__title">Trigger</h3>
					<p class="flow-step__description">
						A calendar event, scheduled time, or system event kicks off the automation
					</p>
				</div>
				<div class="flow-connector">→</div>
				<div class="flow-step">
					<div class="flow-step__icon">
						<span class="flow-icon gather-icon">2</span>
					</div>
					<h3 class="flow-step__title">Gather</h3>
					<p class="flow-step__description">
						Connectors pull data from multiple systems in parallel
					</p>
				</div>
				<div class="flow-connector">→</div>
				<div class="flow-step">
					<div class="flow-step__icon">
						<span class="flow-icon process-icon">3</span>
					</div>
					<h3 class="flow-step__title">Process</h3>
					<p class="flow-step__description">
						AI analyzes, summarizes, scores, and generates insights
					</p>
				</div>
				<div class="flow-connector">→</div>
				<div class="flow-step">
					<div class="flow-step__icon">
						<span class="flow-icon deliver-icon">4</span>
					</div>
					<h3 class="flow-step__title">Deliver</h3>
					<p class="flow-step__description">
						Output delivered via your preferred channel (email, Slack, calendar, document)
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Bundles Section -->
	<section class="section section--bundles">
		<div class="container">
			<div class="section__header">
				<h2>Choose Your Bundle</h2>
				<p>Pre-configured automation for your team's biggest challenges</p>
			</div>
			<div class="bundles-grid">

				<!-- Revenue Operations Bundle -->
				<div class="bundle-card">
					<div class="bundle-card__header">
						<div class="bundle-icon revenue-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
								<path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
							</svg>
						</div>
						<h3 class="bundle-card__title">Revenue Operations</h3>
					</div>
					<p class="bundle-card__target">For Sales & Revenue Leaders</p>
					<p class="bundle-card__description">
						Drive predictable revenue by automating the workflows that impact your pipeline, won deals, and customer relationships.
					</p>
					<div class="bundle-card__accelerators">
						<h4>Key Accelerators:</h4>
						<ul>
							<li>Meeting Prep</li>
							<li>Post-Meeting Tracker</li>
							<li>Deal Risk Monitor</li>
							<li>Lead Enrichment</li>
						</ul>
					</div>
					<a href="#book-demo" class="button button--secondary button--full-width book-demo-btn" data-bundle="Revenue Operations">
						Book a Demo
					</a>
				</div>

				<!-- Customer Success Bundle -->
				<div class="bundle-card">
					<div class="bundle-card__header">
						<div class="bundle-icon success-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
								<path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"></path>
							</svg>
						</div>
						<h3 class="bundle-card__title">Customer Success</h3>
					</div>
					<p class="bundle-card__target">For Customer Success Leaders</p>
					<p class="bundle-card__description">
						Keep customers healthy and engaged with automated monitoring, alerts, and communication workflows that save time and improve retention.
					</p>
					<div class="bundle-card__accelerators">
						<h4>Key Accelerators:</h4>
						<ul>
							<li>Client Health Monitor</li>
							<li>Renewal Alerts</li>
							<li>Comms Summarizer</li>
							<li>QBR Prep</li>
						</ul>
					</div>
					<a href="#book-demo" class="button button--secondary button--full-width book-demo-btn" data-bundle="Customer Success">
						Book a Demo
					</a>
				</div>

				<!-- Finance & Procurement Bundle -->
				<div class="bundle-card">
					<div class="bundle-card__header">
						<div class="bundle-icon finance-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
								<rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
								<line x1="3" y1="9" x2="21" y2="9"></line>
								<line x1="3" y1="15" x2="21" y2="15"></line>
								<line x1="9" y1="3" x2="9" y2="21"></line>
								<line x1="15" y1="3" x2="15" y2="21"></line>
							</svg>
						</div>
						<h3 class="bundle-card__title">Finance & Procurement</h3>
					</div>
					<p class="bundle-card__target">For Finance Leaders</p>
					<p class="bundle-card__description">
						Streamline financial workflows with intelligent processing, compliance monitoring, and real-time visibility into cash flow and expenses.
					</p>
					<div class="bundle-card__accelerators">
						<h4>Key Accelerators:</h4>
						<ul>
							<li>Invoice Processing</li>
							<li>Expense Audit</li>
							<li>Contract Monitor</li>
							<li>Cash Flow Alerts</li>
						</ul>
					</div>
					<a href="#book-demo" class="button button--secondary button--full-width book-demo-btn" data-bundle="Finance & Procurement">
						Book a Demo
					</a>
				</div>

				<!-- IT & Security Operations Bundle -->
				<div class="bundle-card">
					<div class="bundle-card__header">
						<div class="bundle-icon security-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
								<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
							</svg>
						</div>
						<h3 class="bundle-card__title">IT & Security Operations</h3>
					</div>
					<p class="bundle-card__target">For IT Directors & MSP Ops</p>
					<p class="bundle-card__description">
						Automate routine IT operations and security workflows to reduce incident response time, improve compliance, and free your team for strategic work.
					</p>
					<div class="bundle-card__accelerators">
						<h4>Key Accelerators:</h4>
						<ul>
							<li>Incident Triage</li>
							<li>Onboarding/Offboarding</li>
							<li>License Management</li>
							<li>Security Digest</li>
						</ul>
					</div>
					<a href="#book-demo" class="button button--secondary button--full-width book-demo-btn" data-bundle="IT & Security Operations">
						Book a Demo
					</a>
				</div>

			</div>
		</div>
	</section>

	<!-- Why This Works Section -->
	<section class="section section--why-this-works">
		<div class="container">
			<div class="section__header">
				<h2>Why Automation Accelerators Work</h2>
			</div>
			<div class="reasons-grid">
				<div class="reason-item">
					<h3>Build Once, Deploy Everywhere</h3>
					<p>
						Our accelerators are designed with flexibility in mind. Customize once, deploy across your organization as you scale.
					</p>
				</div>
				<div class="reason-item">
					<h3>Low Friction Setup</h3>
					<p>
						1-3 hour configuration means you're up and running fast. No lengthy implementations or months of waiting.
					</p>
				</div>
				<div class="reason-item">
					<h3>Embedded in Your Workflow</h3>
					<p>
						Automation that fits where your team already works leads to higher adoption and better results.
					</p>
				</div>
				<div class="reason-item">
					<h3>AI-Powered Intelligence</h3>
					<p>
						Not just another integration. Our accelerators include AI for smarter decisions, better summaries, and actionable insights.
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Final CTA / Demo Request Section -->
	<section class="section section--final-cta section--cta-dark" id="book-demo">
		<div class="container">
			<div style="max-width: 640px; margin: 0 auto;">
				<h2 style="color: #FFFFFF; margin-bottom: 0.5rem;">Ready to See Accelerators in Action?</h2>
				<p style="color: rgba(255,255,255,0.8); font-size: 1.05rem; margin-bottom: 2rem;">Book a 30-minute demo and we'll show you exactly how these automations work for your team.</p>
				<!--
					HubSpot Embedded Form Placeholder
					Replace with your HubSpot form embed code:
					<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
					<script>
						hbspt.forms.create({
							region: "na1",
							portalId: "YOUR_HUBSPOT_PORTAL_ID",
							formId: "YOUR_HUBSPOT_DEMO_FORM_ID"
						});
					</script>
				-->
				<form class="demo-request-form" method="post" action="#" style="background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.15); border-radius: 16px; padding: 2rem;">
					<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
						<div>
							<label style="display: block; color: rgba(255,255,255,0.7); font-size: 0.8rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 0.4rem;">Full Name *</label>
							<input type="text" name="name" placeholder="Jane Smith" required style="width: 100%; padding: 0.75rem 1rem; border: 1px solid rgba(255,255,255,0.2); border-radius: 8px; background: rgba(255,255,255,0.06); color: #fff; font-size: 0.95rem; font-family: var(--font-body); transition: border-color 0.2s;">
						</div>
						<div>
							<label style="display: block; color: rgba(255,255,255,0.7); font-size: 0.8rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 0.4rem;">Work Email *</label>
							<input type="email" name="email" placeholder="jane@company.com" required style="width: 100%; padding: 0.75rem 1rem; border: 1px solid rgba(255,255,255,0.2); border-radius: 8px; background: rgba(255,255,255,0.06); color: #fff; font-size: 0.95rem; font-family: var(--font-body); transition: border-color 0.2s;">
						</div>
						<div>
							<label style="display: block; color: rgba(255,255,255,0.7); font-size: 0.8rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 0.4rem;">Company</label>
							<input type="text" name="company" placeholder="Acme Inc." style="width: 100%; padding: 0.75rem 1rem; border: 1px solid rgba(255,255,255,0.2); border-radius: 8px; background: rgba(255,255,255,0.06); color: #fff; font-size: 0.95rem; font-family: var(--font-body); transition: border-color 0.2s;">
						</div>
						<div>
							<label style="display: block; color: rgba(255,255,255,0.7); font-size: 0.8rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 0.4rem;">Accelerator Bundle</label>
							<select name="bundle" style="width: 100%; padding: 0.75rem 1rem; border: 1px solid rgba(255,255,255,0.2); border-radius: 8px; background: rgba(255,255,255,0.06); color: #fff; font-size: 0.95rem; font-family: var(--font-body); transition: border-color 0.2s;">
								<option value="">Select a bundle</option>
								<option value="revenue-ops">Revenue Operations</option>
								<option value="customer-success">Customer Success</option>
								<option value="finance-procurement">Finance & Procurement</option>
								<option value="it-security">IT & Security Operations</option>
							</select>
						</div>
					</div>
					<div style="margin-top: 1.25rem;">
						<button type="submit" class="button button--primary button--large" style="width: 100%; padding: 0.9rem; font-size: 1rem;">Request a Demo</button>
					</div>
				</form>
				<p style="color: rgba(255,255,255,0.5); font-size: 0.8rem; margin-top: 1rem;">We'll reach out within 1 business day. No spam, ever.</p>
			</div>
		</div>
	</section>

</main>

<?php
get_footer();
?>
