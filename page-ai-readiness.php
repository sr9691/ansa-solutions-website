<?php
/**
 * Template Name: AI Readiness Assessment
 * Description: AI Readiness Assessment service page
 */

get_header();
?>

<main id="main-content" class="site-main">

	<!-- Page Hero Section -->
	<section class="hero hero--dark-gradient">
		<div class="hero__content">
			<span class="badge badge--primary">AI Readiness Assessment</span>
			<h1 class="hero__title">
				Is Your Business Ready for <span class="text-accent">AI?</span>
			</h1>
			<p class="hero__subtitle">
				A comprehensive assessment that tells you exactly where AI can create value in your business, what's blocking you, and what to do first.
			</p>
			<a href="#questionnaire" class="button button--primary button--large">Start Your Assessment</a>
		</div>
	</section>

	<!-- What You Get Section -->
	<section class="section section--what-you-get">
		<div class="container">
			<div class="section__header">
				<h2>What You Get</h2>
			</div>
			<p class="section__intro">
				A fixed-fee, non-intrusive assessment that tells you exactly where AI can create value in your business, what's blocking you, and what to do first. Delivered as a branded interactive web dashboard you can share with your leadership team.
			</p>
			<div class="highlights-list">
				<div class="highlight-item">
					<svg class="highlight-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
						<polyline points="20 6 9 17 4 12"></polyline>
					</svg>
					<span>Comprehensive evaluation across 4 key dimensions</span>
				</div>
				<div class="highlight-item">
					<svg class="highlight-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
						<polyline points="20 6 9 17 4 12"></polyline>
					</svg>
					<span>60-90 minute discovery session with our team</span>
				</div>
				<div class="highlight-item">
					<svg class="highlight-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
						<polyline points="20 6 9 17 4 12"></polyline>
					</svg>
					<span>Interactive AI Readiness Report within 5 business days</span>
				</div>
				<div class="highlight-item">
					<svg class="highlight-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
						<polyline points="20 6 9 17 4 12"></polyline>
					</svg>
					<span>Prioritized implementation roadmap with quick wins</span>
				</div>
				<div class="highlight-item">
					<svg class="highlight-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
						<polyline points="20 6 9 17 4 12"></polyline>
					</svg>
					<span>ROI projections for recommended automation opportunities</span>
				</div>
			</div>
		</div>
	</section>

	<!-- Pricing Section -->
	<section class="section section--pricing">
		<div class="container">
			<div class="section__header">
				<h2>Choose Your Assessment Tier</h2>
				<p>All assessments include a personalized questionnaire and discovery session</p>
			</div>
			<div class="pricing-grid">
				<div class="pricing-card">
					<h3 class="pricing-card__title">Essentials</h3>
					<div class="pricing-card__price">
						<span class="price-amount">$1,500</span>
						<span class="price-period">one-time</span>
					</div>
					<ul class="pricing-card__features">
						<li>Readiness scorecard</li>
						<li>Discovery call</li>
						<li>Summary report</li>
					</ul>
					<!-- Stripe: Replace YOUR_STRIPE_ESSENTIALS_LINK -->
					<a href="https://buy.stripe.com/YOUR_STRIPE_ESSENTIALS_LINK" target="_blank" rel="noopener" class="button button--secondary button--full-width">Get Started</a>
				</div>

				<div class="pricing-card pricing-card--featured">
					<span class="pricing-badge">Recommended</span>
					<h3 class="pricing-card__title">Standard</h3>
					<div class="pricing-card__price">
						<span class="price-amount">$2,500</span>
						<span class="price-period">one-time</span>
					</div>
					<ul class="pricing-card__features">
						<li>Full assessment</li>
						<li>AI opportunities with ROI</li>
						<li>Gap analysis</li>
						<li>Phased action plan</li>
					</ul>
					<!-- Stripe: Replace YOUR_STRIPE_STANDARD_LINK -->
					<a href="https://buy.stripe.com/YOUR_STRIPE_STANDARD_LINK" target="_blank" rel="noopener" class="button button--primary button--full-width">Get Started</a>
				</div>

				<div class="pricing-card">
					<h3 class="pricing-card__title">Premium</h3>
					<div class="pricing-card__price">
						<span class="price-amount">$3,000</span>
						<span class="price-period">one-time</span>
					</div>
					<ul class="pricing-card__features">
						<li>Everything in Standard</li>
						<li>30-minute report walkthrough call</li>
						<li>Leadership presentation guidance</li>
					</ul>
					<!-- Stripe: Replace YOUR_STRIPE_PREMIUM_LINK -->
					<a href="https://buy.stripe.com/YOUR_STRIPE_PREMIUM_LINK" target="_blank" rel="noopener" class="button button--secondary button--full-width">Get Started</a>
				</div>
			</div>
		</div>
	</section>

	<!-- How It Works Section -->
	<section class="section section--how-it-works">
		<div class="container">
			<div class="section__header">
				<h2>How It Works</h2>
				<p>Six simple steps from start to action</p>
			</div>
			<div class="process-steps">
				<div class="process-step">
					<div class="process-step__number">1</div>
					<h3 class="process-step__title">Complete the Questionnaire</h3>
					<p class="process-step__description">Answer questions about your tech stack, data, operations, and goals (~10 minutes)</p>
				</div>
				<div class="process-step">
					<div class="process-step__number">2</div>
					<h3 class="process-step__title">We Analyze Your Responses</h3>
					<p class="process-step__description">Our team reviews your answers and prepares for your discovery session</p>
				</div>
				<div class="process-step">
					<div class="process-step__number">3</div>
					<h3 class="process-step__title">Discovery Session</h3>
					<p class="process-step__description">60-90 minute conversation to understand your business context and quantify opportunities</p>
				</div>
				<div class="process-step">
					<div class="process-step__number">4</div>
					<h3 class="process-step__title">Assessment & Analysis</h3>
					<p class="process-step__description">We evaluate your readiness across technology, data, operations, and leadership</p>
				</div>
				<div class="process-step">
					<div class="process-step__number">5</div>
					<h3 class="process-step__title">Your Report is Delivered</h3>
					<p class="process-step__description">Receive your interactive AI Readiness Report with scores, insights, and roadmap</p>
				</div>
				<div class="process-step">
					<div class="process-step__number">6</div>
					<h3 class="process-step__title">Take Action</h3>
					<p class="process-step__description">Use your prioritized action plan to start capturing value immediately</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Why Clients Love It Section -->
	<section class="section section--why-clients-love">
		<div class="container">
			<div class="section__header">
				<h2>Why Clients Love It</h2>
			</div>
			<div class="benefits-grid">
				<div class="benefit-item">
					<h3>Non-Intrusive</h3>
					<p>Just a form and a conversation — no lengthy system audits</p>
				</div>
				<div class="benefit-item">
					<h3>Fast Turnaround</h3>
					<p>Get your complete report in about 2 weeks</p>
				</div>
				<div class="benefit-item">
					<h3>Actionable, Not Theoretical</h3>
					<p>Concrete recommendations you can implement immediately</p>
				</div>
				<div class="benefit-item">
					<h3>Interactive Deliverable</h3>
					<p>Shareable dashboard that makes alignment with leadership easy</p>
				</div>
				<div class="benefit-item">
					<h3>Fixed Fee, No Surprises</h3>
					<p>You know the cost upfront with no hidden fees</p>
				</div>
				<div class="benefit-item">
					<h3>Natural Next Steps</h3>
					<p>Clear implementation path with phased approach</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Sample Report Preview Section -->
	<section class="section section--sample-report">
		<div class="container">
			<h2>See What You'll Receive</h2>
			<p class="section__intro">
				Your interactive AI Readiness Report is a comprehensive, branded dashboard that showcases your organization's AI potential.
			</p>
			<div class="report-preview-container">
				<div class="report-preview-card">
					<div class="report-preview-header">
						<h3>Your AI Readiness Report Includes:</h3>
					</div>
					<ul class="report-preview-list">
						<li>
							<strong>Readiness Scorecard</strong> — Your scores across technology, data, operations, and leadership dimensions
						</li>
						<li>
							<strong>AI Opportunities with ROI</strong> — Specific use cases ranked by potential impact and implementation effort
						</li>
						<li>
							<strong>Gap Analysis</strong> — Clear view of what needs to change to unlock AI value
						</li>
						<li>
							<strong>Phased Action Plan</strong> — Prioritized roadmap with quick wins and longer-term initiatives
						</li>
					</ul>
					<p class="report-preview-note">
						Plus: Executive summary, detailed findings, and guidance on next steps
					</p>
				</div>
			</div>
			<div class="section__cta" style="text-align: center; margin-top: 3rem;">
				<button class="button button--primary" data-toggle="modal" data-target="#sample-report-modal">
					View Full Sample Report
				</button>
				<p style="font-size: 0.875rem; color: var(--text); margin-top: 1rem;">
					We'll send you a preview — just provide your name and email
				</p>
			</div>
		</div>
	</section>

	<!-- Final CTA Section -->
	<section class="section section--final-cta section--cta-dark">
		<div class="container">
			<h2>Ready to Get Started?</h2>
			<p>Take the first step toward understanding your AI potential</p>
			<a href="#questionnaire" class="button button--primary button--large">Start the Assessment</a>
		</div>
	</section>

</main>

<?php
get_footer();
?>
