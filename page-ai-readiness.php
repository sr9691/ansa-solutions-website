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
			<div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-top: 1.5rem;">
				<a href="#pricing" class="button button--primary button--large">Start Your Assessment</a>
				<a href="<?php echo esc_url( home_url( '/sample-report-preview' ) ); ?>" class="button button--outline button--large" style="border-color: rgba(255,255,255,0.4); color: #fff;">View Sample Report</a>
			</div>
		</div>
	</section>

	<!-- What You Get Section — 2x3 icon cards -->
	<section class="section" style="padding-bottom: 3rem;">
		<div class="container">
			<div class="section__header" style="text-align: center;">
				<h2>What You Get</h2>
				<p style="max-width: 620px; margin: 0 auto; color: var(--text-light); font-size: 1.05rem;">A fixed-fee, non-intrusive assessment delivered as a branded interactive dashboard you can share with your leadership team.</p>
			</div>
			<div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem; margin-top: 2.5rem;">

				<div style="background: var(--border-light); border-radius: 12px; padding: 1.75rem; text-align: center;">
					<div style="width: 52px; height: 52px; border-radius: 12px; background: linear-gradient(135deg, #462CED 0%, #7c5cf7 100%); display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>
					</div>
					<h4 style="font-size: 1.05rem; margin-bottom: 0.4rem;">4-Dimension Evaluation</h4>
					<p style="font-size: 0.9rem; color: var(--text-light); margin: 0;">Technology, data, operations, and leadership — scored and benchmarked.</p>
				</div>

				<div style="background: var(--border-light); border-radius: 12px; padding: 1.75rem; text-align: center;">
					<div style="width: 52px; height: 52px; border-radius: 12px; background: linear-gradient(135deg, #462CED 0%, #7c5cf7 100%); display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
					</div>
					<h4 style="font-size: 1.05rem; margin-bottom: 0.4rem;">60–90 Min Discovery Call</h4>
					<p style="font-size: 0.9rem; color: var(--text-light); margin: 0;">A guided conversation with our team to understand your goals and context.</p>
				</div>

				<div style="background: var(--border-light); border-radius: 12px; padding: 1.75rem; text-align: center;">
					<div style="width: 52px; height: 52px; border-radius: 12px; background: linear-gradient(135deg, #462CED 0%, #7c5cf7 100%); display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
					</div>
					<h4 style="font-size: 1.05rem; margin-bottom: 0.4rem;">Interactive Report</h4>
					<p style="font-size: 0.9rem; color: var(--text-light); margin: 0;">A branded web dashboard delivered within 5 business days.</p>
				</div>

				<div style="background: var(--border-light); border-radius: 12px; padding: 1.75rem; text-align: center;">
					<div style="width: 52px; height: 52px; border-radius: 12px; background: linear-gradient(135deg, #462CED 0%, #7c5cf7 100%); display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"><path d="M12 20V10"/><path d="M18 20V4"/><path d="M6 20v-4"/></svg>
					</div>
					<h4 style="font-size: 1.05rem; margin-bottom: 0.4rem;">ROI Projections</h4>
					<p style="font-size: 0.9rem; color: var(--text-light); margin: 0;">Quantified impact estimates for each recommended automation opportunity.</p>
				</div>

				<div style="background: var(--border-light); border-radius: 12px; padding: 1.75rem; text-align: center;">
					<div style="width: 52px; height: 52px; border-radius: 12px; background: linear-gradient(135deg, #462CED 0%, #7c5cf7 100%); display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
					</div>
					<h4 style="font-size: 1.05rem; margin-bottom: 0.4rem;">Prioritized Roadmap</h4>
					<p style="font-size: 0.9rem; color: var(--text-light); margin: 0;">Quick wins first, then phased initiatives ranked by effort and value.</p>
				</div>

				<div style="background: var(--border-light); border-radius: 12px; padding: 1.75rem; text-align: center;">
					<div style="width: 52px; height: 52px; border-radius: 12px; background: linear-gradient(135deg, #462CED 0%, #7c5cf7 100%); display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
					</div>
					<h4 style="font-size: 1.05rem; margin-bottom: 0.4rem;">Leadership-Ready</h4>
					<p style="font-size: 0.9rem; color: var(--text-light); margin: 0;">Shareable with your executive team — designed to drive alignment and buy-in.</p>
				</div>

			</div>
		</div>
	</section>

	<!-- How It Works — Compact 3x2 grid -->
	<section class="section" style="background: var(--border-light); padding: 4rem 1.5rem; max-width: 100%; border-radius: 0;">
		<div class="container">
			<div class="section__header" style="text-align: center;">
				<h2>How It Works</h2>
				<p style="color: var(--text-light);">Six simple steps from start to action</p>
			</div>
			<div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem 2.5rem; margin-top: 2.5rem;">

				<div style="display: flex; gap: 1rem; align-items: flex-start;">
					<div style="width: 40px; height: 40px; border-radius: 50%; background: var(--accent); color: #fff; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 1rem; flex-shrink: 0;">1</div>
					<div>
						<h4 style="font-size: 1rem; margin-bottom: 0.25rem;">Complete the Questionnaire</h4>
						<p style="font-size: 0.875rem; color: var(--text-light); margin: 0;">Answer questions about your tech stack, data, operations, and goals (~10 min).</p>
					</div>
				</div>

				<div style="display: flex; gap: 1rem; align-items: flex-start;">
					<div style="width: 40px; height: 40px; border-radius: 50%; background: var(--accent); color: #fff; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 1rem; flex-shrink: 0;">2</div>
					<div>
						<h4 style="font-size: 1rem; margin-bottom: 0.25rem;">We Analyze Responses</h4>
						<p style="font-size: 0.875rem; color: var(--text-light); margin: 0;">Our team reviews your answers and prepares for your discovery session.</p>
					</div>
				</div>

				<div style="display: flex; gap: 1rem; align-items: flex-start;">
					<div style="width: 40px; height: 40px; border-radius: 50%; background: var(--accent); color: #fff; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 1rem; flex-shrink: 0;">3</div>
					<div>
						<h4 style="font-size: 1rem; margin-bottom: 0.25rem;">Discovery Session</h4>
						<p style="font-size: 0.875rem; color: var(--text-light); margin: 0;">60–90 min conversation to understand your context and quantify opportunities.</p>
					</div>
				</div>

				<div style="display: flex; gap: 1rem; align-items: flex-start;">
					<div style="width: 40px; height: 40px; border-radius: 50%; background: var(--accent); color: #fff; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 1rem; flex-shrink: 0;">4</div>
					<div>
						<h4 style="font-size: 1rem; margin-bottom: 0.25rem;">Assessment &amp; Analysis</h4>
						<p style="font-size: 0.875rem; color: var(--text-light); margin: 0;">We evaluate readiness across technology, data, operations, and leadership.</p>
					</div>
				</div>

				<div style="display: flex; gap: 1rem; align-items: flex-start;">
					<div style="width: 40px; height: 40px; border-radius: 50%; background: var(--accent); color: #fff; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 1rem; flex-shrink: 0;">5</div>
					<div>
						<h4 style="font-size: 1rem; margin-bottom: 0.25rem;">Report Delivered</h4>
						<p style="font-size: 0.875rem; color: var(--text-light); margin: 0;">Receive your interactive AI Readiness Report with scores, insights, and roadmap.</p>
					</div>
				</div>

				<div style="display: flex; gap: 1rem; align-items: flex-start;">
					<div style="width: 40px; height: 40px; border-radius: 50%; background: var(--accent); color: #fff; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 1rem; flex-shrink: 0;">6</div>
					<div>
						<h4 style="font-size: 1rem; margin-bottom: 0.25rem;">Take Action</h4>
						<p style="font-size: 0.875rem; color: var(--text-light); margin: 0;">Use your prioritized action plan to start capturing value immediately.</p>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- See What You'll Receive — Side-by-side layout -->
	<section class="section">
		<div class="container">
			<div class="section__header" style="text-align: center;">
				<h2>See What You'll Receive</h2>
				<p style="color: var(--text-light); max-width: 580px; margin: 0 auto;">Your interactive AI Readiness Report is a comprehensive, branded dashboard that showcases your organization's AI potential.</p>
			</div>
			<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center; margin-top: 2.5rem;">

				<!-- Left: Mock dashboard preview -->
				<div style="background: linear-gradient(135deg, #1f2937 0%, #374151 100%); border-radius: 16px; padding: 2rem; color: #fff;">
					<div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1.5rem;">
						<div style="width: 12px; height: 12px; border-radius: 50%; background: #EF4444;"></div>
						<div style="width: 12px; height: 12px; border-radius: 50%; background: #F59E0B;"></div>
						<div style="width: 12px; height: 12px; border-radius: 50%; background: #10B981;"></div>
						<span style="margin-left: auto; font-size: 0.75rem; color: rgba(255,255,255,0.5);">ai-readiness-report.ansa.solutions</span>
					</div>
					<div style="text-align: center; margin-bottom: 1.5rem;">
						<p style="font-size: 0.75rem; color: rgba(255,255,255,0.5); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 0.25rem;">Overall AI Readiness</p>
						<div style="font-size: 3rem; font-weight: 800; color: var(--accent); line-height: 1;">72<span style="font-size: 1.5rem; color: rgba(255,255,255,0.4);">/100</span></div>
					</div>
					<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 0.75rem;">
						<div style="background: rgba(255,255,255,0.08); border-radius: 8px; padding: 0.75rem; text-align: center;">
							<p style="font-size: 0.7rem; color: rgba(255,255,255,0.5); margin: 0 0 0.25rem;">Technology</p>
							<p style="font-size: 1.25rem; font-weight: 700; color: #10B981; margin: 0;">78</p>
						</div>
						<div style="background: rgba(255,255,255,0.08); border-radius: 8px; padding: 0.75rem; text-align: center;">
							<p style="font-size: 0.7rem; color: rgba(255,255,255,0.5); margin: 0 0 0.25rem;">Data</p>
							<p style="font-size: 1.25rem; font-weight: 700; color: #F59E0B; margin: 0;">64</p>
						</div>
						<div style="background: rgba(255,255,255,0.08); border-radius: 8px; padding: 0.75rem; text-align: center;">
							<p style="font-size: 0.7rem; color: rgba(255,255,255,0.5); margin: 0 0 0.25rem;">Operations</p>
							<p style="font-size: 1.25rem; font-weight: 700; color: #10B981; margin: 0;">75</p>
						</div>
						<div style="background: rgba(255,255,255,0.08); border-radius: 8px; padding: 0.75rem; text-align: center;">
							<p style="font-size: 0.7rem; color: rgba(255,255,255,0.5); margin: 0 0 0.25rem;">Leadership</p>
							<p style="font-size: 1.25rem; font-weight: 700; color: #F59E0B; margin: 0;">68</p>
						</div>
					</div>
				</div>

				<!-- Right: Feature list -->
				<div>
					<h3 style="font-size: 1.5rem; margin-bottom: 1.5rem;">Your Report Includes</h3>
					<div style="display: flex; flex-direction: column; gap: 1.25rem;">
						<div style="display: flex; gap: 0.75rem; align-items: flex-start;">
							<div style="width: 28px; height: 28px; border-radius: 50%; background: rgba(70,44,237,0.1); display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 2px;">
								<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
							</div>
							<div>
								<strong style="color: var(--text);">Readiness Scorecard</strong>
								<p style="font-size: 0.9rem; color: var(--text-light); margin: 0.2rem 0 0;">Scores across technology, data, operations, and leadership dimensions.</p>
							</div>
						</div>
						<div style="display: flex; gap: 0.75rem; align-items: flex-start;">
							<div style="width: 28px; height: 28px; border-radius: 50%; background: rgba(70,44,237,0.1); display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 2px;">
								<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
							</div>
							<div>
								<strong style="color: var(--text);">AI Opportunities with ROI</strong>
								<p style="font-size: 0.9rem; color: var(--text-light); margin: 0.2rem 0 0;">Use cases ranked by potential impact and implementation effort.</p>
							</div>
						</div>
						<div style="display: flex; gap: 0.75rem; align-items: flex-start;">
							<div style="width: 28px; height: 28px; border-radius: 50%; background: rgba(70,44,237,0.1); display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 2px;">
								<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
							</div>
							<div>
								<strong style="color: var(--text);">Gap Analysis</strong>
								<p style="font-size: 0.9rem; color: var(--text-light); margin: 0.2rem 0 0;">Clear view of what needs to change to unlock AI value.</p>
							</div>
						</div>
						<div style="display: flex; gap: 0.75rem; align-items: flex-start;">
							<div style="width: 28px; height: 28px; border-radius: 50%; background: rgba(70,44,237,0.1); display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 2px;">
								<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
							</div>
							<div>
								<strong style="color: var(--text);">Phased Action Plan</strong>
								<p style="font-size: 0.9rem; color: var(--text-light); margin: 0.2rem 0 0;">Prioritized roadmap with quick wins and longer-term initiatives.</p>
							</div>
						</div>
					</div>
					<div style="margin-top: 2rem;">
						<a href="<?php echo esc_url( home_url( '/sample-report-preview' ) ); ?>" class="button button--primary">View Full Sample Report</a>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- Why Clients Love It — with icons -->
	<section class="section" style="padding-top: 3rem;">
		<div class="container">
			<div class="section__header" style="text-align: center;">
				<h2>Why Clients Love It</h2>
			</div>
			<div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem; margin-top: 2rem;">

				<div style="background: var(--border-light); border-radius: 12px; padding: 1.5rem;">
					<div style="display: flex; align-items: center; gap: 0.6rem; margin-bottom: 0.5rem;">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
						<h4 style="font-size: 1rem; margin: 0;">Non-Intrusive</h4>
					</div>
					<p style="font-size: 0.9rem; color: var(--text-light); margin: 0;">Just a short questionnaire and a conversation — no lengthy system audits or IT involvement required.</p>
				</div>

				<div style="background: var(--border-light); border-radius: 12px; padding: 1.5rem;">
					<div style="display: flex; align-items: center; gap: 0.6rem; margin-bottom: 0.5rem;">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
						<h4 style="font-size: 1rem; margin: 0;">Fast Turnaround</h4>
					</div>
					<p style="font-size: 0.9rem; color: var(--text-light); margin: 0;">Get your complete interactive report in about 1 week — not months of consulting.</p>
				</div>

				<div style="background: var(--border-light); border-radius: 12px; padding: 1.5rem;">
					<div style="display: flex; align-items: center; gap: 0.6rem; margin-bottom: 0.5rem;">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
						<h4 style="font-size: 1rem; margin: 0;">Actionable, Not Theoretical</h4>
					</div>
					<p style="font-size: 0.9rem; color: var(--text-light); margin: 0;">Concrete recommendations with ROI projections you can implement immediately.</p>
				</div>

				<div style="background: var(--border-light); border-radius: 12px; padding: 1.5rem;">
					<div style="display: flex; align-items: center; gap: 0.6rem; margin-bottom: 0.5rem;">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
						<h4 style="font-size: 1rem; margin: 0;">Interactive Deliverable</h4>
					</div>
					<p style="font-size: 0.9rem; color: var(--text-light); margin: 0;">A shareable web dashboard that makes stakeholder alignment effortless.</p>
				</div>

				<div style="background: var(--border-light); border-radius: 12px; padding: 1.5rem;">
					<div style="display: flex; align-items: center; gap: 0.6rem; margin-bottom: 0.5rem;">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
						<h4 style="font-size: 1rem; margin: 0;">Fixed Fee, No Surprises</h4>
					</div>
					<p style="font-size: 0.9rem; color: var(--text-light); margin: 0;">You know the cost upfront — no scope creep, no hidden fees, no open-ended engagements.</p>
				</div>

				<div style="background: var(--border-light); border-radius: 12px; padding: 1.5rem;">
					<div style="display: flex; align-items: center; gap: 0.6rem; margin-bottom: 0.5rem;">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="2"><polyline points="13 17 18 12 13 7"/><polyline points="6 17 11 12 6 7"/></svg>
						<h4 style="font-size: 1rem; margin: 0;">Natural Next Steps</h4>
					</div>
					<p style="font-size: 0.9rem; color: var(--text-light); margin: 0;">Clear implementation path — whether you work with us or take the plan to your own team.</p>
				</div>

			</div>
		</div>
	</section>

	<!-- Pricing Section -->
	<section id="pricing" class="section section--pricing">
		<div class="container">
			<div class="section__header" style="text-align: center;">
				<h2>Choose Your Assessment Tier</h2>
				<p style="color: var(--text-light);">All tiers include a personalized questionnaire and discovery session</p>
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

	<!-- Final CTA Section -->
	<section class="section section--final-cta section--cta-dark">
		<div class="container">
			<h2>Ready to Discover Your AI Potential?</h2>
			<p>Take the first step — most clients see their report within one week.</p>
			<div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
				<a href="#pricing" class="button button--primary button--large">Start the Assessment</a>
				<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="button button--outline button--large" style="border-color: rgba(255,255,255,0.4); color: #fff;">Have Questions? Let's Talk</a>
			</div>
		</div>
	</section>

</main>

<?php
get_footer();
?>
