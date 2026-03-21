<?php
/**
 * Front Page Template
 *
 * @package ANSA Solutions
 * @version 1.0.0
 */

get_header(); ?>

<!-- Hero Section -->
<section class="section-hero" style="background: linear-gradient(135deg, var(--primary) 0%, #1f2937 100%); padding: 6rem 1.5rem; color: #FFFFFF; text-align: center;">
	<div class="hero-content" style="max-width: 900px; margin: 0 auto;">
		<div class="hero-badge" style="display: inline-block; padding: 0.5rem 1rem; background-color: rgba(255, 255, 255, 0.15); border-radius: 999px; margin-bottom: 1.5rem; font-size: 0.9rem; font-weight: 600; letter-spacing: 0.5px;">
			AI Strategy & Implementation
		</div>
		<h1 style="margin-bottom: 1.5rem; font-size: 3.5rem; color: #FFFFFF;">
			Empowering Businesses with <br><span style="color: var(--accent);">AI-driven Automation</span>
		</h1>
		<p class="subtitle" style="font-size: 1.25rem; color: rgba(255, 255, 255, 0.9); margin-bottom: 2.5rem; max-width: 700px; margin-left: auto; margin-right: auto;">
			We help mid-market organizations streamline operations, enhance efficiency, and drive growth through intelligent automation and AI strategy.
		</p>
		<div class="hero-buttons" style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
			<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary" style="padding: 0.75rem 1.5rem; font-weight: 600;">
				Get Started
			</a>
			<a href="<?php echo esc_url( home_url( '/ai-readiness' ) ); ?>" class="btn btn-outline" style="background-color: transparent; color: #FFFFFF; border: 2px solid #FFFFFF; padding: 0.75rem 1.5rem; font-weight: 600;">
				Take AI Readiness Assessment
			</a>
		</div>
	</div>
</section>

<!-- Stats Bar -->
<section class="stats-bar" style="background-color: var(--primary); color: #FFFFFF; padding: 3rem 1.5rem;">
	<div class="stats-wrapper" style="max-width: 1400px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; text-align: center;">
		<div class="stat">
			<h3 class="stat-number" style="color: #FFFFFF; margin-bottom: 0.5rem; font-size: 2.5rem;">30%</h3>
			<p class="stat-label" style="color: rgba(255, 255, 255, 0.8); margin: 0;">Reduction in operational costs</p>
		</div>
		<div class="stat">
			<h3 class="stat-number" style="color: #FFFFFF; margin-bottom: 0.5rem; font-size: 2.5rem;">40%</h3>
			<p class="stat-label" style="color: rgba(255, 255, 255, 0.8); margin: 0;">Increase in productivity</p>
		</div>
		<div class="stat">
			<h3 class="stat-number" style="color: #FFFFFF; margin-bottom: 0.5rem; font-size: 2.5rem;">6–8 weeks</h3>
			<p class="stat-label" style="color: rgba(255, 255, 255, 0.8); margin: 0;">To measurable value</p>
		</div>
		<div class="stat">
			<h3 class="stat-number" style="color: #FFFFFF; margin-bottom: 0.5rem; font-size: 2.5rem;">1 week</h3>
			<p class="stat-label" style="color: rgba(255, 255, 255, 0.8); margin: 0;">To AI Readiness Report</p>
		</div>
	</div>
</section>

<!-- Services Overview Section -->
<section class="section" style="padding: 5rem 1.5rem; max-width: 1400px; margin: 0 auto;">
	<div class="section-title" style="text-align: center; margin-bottom: 3rem;">
		<div class="section-label" style="color: var(--accent); font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 0.5rem; font-size: 0.9rem;">
			Our Services
		</div>
		<h2 style="margin-bottom: 1rem;">What We Do</h2>
		<p style="font-size: 1.1rem; max-width: 600px; margin-left: auto; margin-right: auto; color: var(--text-light);">
			Strategic automation solutions that transform your operations and unlock AI potential.
		</p>
	</div>

	<div class="services-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
		<!-- Service Card 1: Process Automation -->
		<div class="service-card card" style="background-color: var(--background); border: 1px solid var(--border); border-radius: var(--radius-lg); padding: 2rem; transition: var(--transition); display: flex; flex-direction: column; height: 100%;">
			<div class="service-icon" style="width: 60px; height: 60px; background-color: var(--border-light); border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; font-size: 1.75rem;">
				⚙️
			</div>
			<h3 style="margin-bottom: 1rem; color: var(--text);">Process Automation</h3>
			<p style="flex-grow: 1; color: var(--text-light); margin-bottom: 1.5rem;">
				Enterprise workflow orchestration and system integration powered by platforms like Workato. We eliminate manual handoffs and connect your systems.
			</p>
			<a href="<?php echo esc_url( home_url( '/process-automation' ) ); ?>" style="color: var(--accent); font-weight: 600; display: inline-flex; align-items: center; gap: 0.5rem; border-top: 1px solid var(--border); padding-top: 1rem; margin-top: 1rem;">
				Learn more <span style="transition: var(--transition);">→</span>
			</a>
		</div>

		<!-- Service Card 2: AI Readiness Assessment -->
		<div class="service-card card" style="background-color: var(--background); border: 1px solid var(--border); border-radius: var(--radius-lg); padding: 2rem; transition: var(--transition); display: flex; flex-direction: column; height: 100%;">
			<div class="service-icon" style="width: 60px; height: 60px; background-color: var(--border-light); border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; font-size: 1.75rem;">
				📊
			</div>
			<h3 style="margin-bottom: 1rem; color: var(--text);">AI Readiness Assessment</h3>
			<p style="flex-grow: 1; color: var(--text-light); margin-bottom: 1.5rem;">
				A fixed-fee assessment that tells you exactly where AI can create value, what's blocking you, and what to do first. Results in ~1 week.
			</p>
			<a href="<?php echo esc_url( home_url( '/ai-readiness' ) ); ?>" style="color: var(--accent); font-weight: 600; display: inline-flex; align-items: center; gap: 0.5rem; border-top: 1px solid var(--border); padding-top: 1rem; margin-top: 1rem;">
				Learn more <span style="transition: var(--transition);">→</span>
			</a>
		</div>

		<!-- Service Card 3: Automation Accelerators -->
		<div class="service-card card" style="background-color: var(--background); border: 1px solid var(--border); border-radius: var(--radius-lg); padding: 2rem; transition: var(--transition); display: flex; flex-direction: column; height: 100%;">
			<div class="service-icon" style="width: 60px; height: 60px; background-color: var(--border-light); border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; font-size: 1.75rem;">
				🚀
			</div>
			<h3 style="margin-bottom: 1rem; color: var(--text);">Automation Accelerators</h3>
			<p style="flex-grow: 1; color: var(--text-light); margin-bottom: 1.5rem;">
				Pre-built AI-powered automation bundles for Revenue Ops, Customer Success, Finance, and IT. Deploy in days, not months.
			</p>
			<a href="<?php echo esc_url( home_url( '/automation-accelerators' ) ); ?>" style="color: var(--accent); font-weight: 600; display: inline-flex; align-items: center; gap: 0.5rem; border-top: 1px solid var(--border); padding-top: 1rem; margin-top: 1rem;">
				Learn more <span style="transition: var(--transition);">→</span>
			</a>
		</div>
	</div>
</section>

<!-- Case Study Highlights Section -->
<section class="section" style="background-color: var(--primary); color: #FFFFFF; padding: 5rem 1.5rem; max-width: 100%; margin: 0;">
	<div class="section-wrapper" style="max-width: 1400px; margin: 0 auto;">
		<div class="section-title" style="text-align: center; margin-bottom: 3rem; color: #FFFFFF;">
			<div class="section-label" style="color: var(--accent); font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 0.5rem; font-size: 0.9rem;">
				Case Studies
			</div>
			<h2 style="margin-bottom: 1rem; color: #FFFFFF;">Proven Results</h2>
			<p style="font-size: 1.1rem; max-width: 600px; margin-left: auto; margin-right: auto; color: rgba(255, 255, 255, 0.9);">
				Real transformations from organizations that trusted us with their automation journey.
			</p>
		</div>

		<div class="case-studies-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-bottom: 2rem;">
			<!-- Case Study 1: Water Management -->
			<div class="case-study-card" style="background-color: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: var(--radius-lg); padding: 2rem; transition: var(--transition);">
				<h3 style="margin-bottom: 1rem; color: #FFFFFF;">Water Management & Infrastructure</h3>
				<p style="color: rgba(255, 255, 255, 0.9); margin-bottom: 0;">
					Event-driven orchestration across field, finance, and customer operations. Reduced manual reconciliation and improved data accuracy at scale.
				</p>
			</div>

			<!-- Case Study 2: Engineering Firm -->
			<div class="case-study-card" style="background-color: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: var(--radius-lg); padding: 2rem; transition: var(--transition);">
				<h3 style="margin-bottom: 1rem; color: #FFFFFF;">Multi-Discipline Engineering Firm</h3>
				<p style="color: rgba(255, 255, 255, 0.9); margin-bottom: 0;">
					End-to-end orchestration across CRM, project accounting, and finance. Faster project startup, fewer billing delays.
				</p>
			</div>
		</div>

		<div style="text-align: center;">
			<a href="<?php echo esc_url( home_url( '/case-studies' ) ); ?>" style="color: #FFFFFF; font-weight: 600; display: inline-flex; align-items: center; gap: 0.5rem; border-top: 2px solid rgba(255, 255, 255, 0.2); padding-top: 1rem; margin-top: 1rem;">
				View All Case Studies <span style="transition: var(--transition);">→</span>
			</a>
		</div>
	</div>
</section>

<!-- Upcoming Events Section -->
<section style="padding: 5rem 1.5rem; background-color: var(--background);">
	<div style="max-width: 1400px; margin: 0 auto;">
		<div style="text-align: center; margin-bottom: 2.5rem;">
			<div style="color: var(--accent); font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 0.5rem; font-size: 0.9rem;">
				Events
			</div>
			<h2 style="margin-bottom: 0.75rem;">Join Us In Person</h2>
			<p style="font-size: 1.05rem; color: var(--text-light); max-width: 560px; margin: 0 auto;">
				We host executive events where AI and automation leaders share what's working. Seats are limited and approval-based.
			</p>
		</div>

		<!-- Upcoming event card -->
		<div style="max-width: 720px; margin: 0 auto; background: #fff; border: 2px solid var(--accent); border-radius: var(--radius-lg); overflow: hidden; box-shadow: 0 4px 24px rgba(70,44,237,0.1);">
			<div style="background: var(--accent); color: #fff; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; padding: 6px 18px;">
				Upcoming — April 22, 2025
			</div>
			<div style="padding: 1.75rem 2rem;">
				<div style="font-size: 13px; color: var(--accent); font-weight: 600; margin-bottom: 0.5rem;">Hosted by ANSA Solutions + Workato</div>
				<h3 style="margin: 0 0 0.75rem; font-size: 1.15rem; line-height: 1.4; color: var(--text);">
					From Fragmented Systems to Agentic Enterprise: How Engineering &amp; Construction Leaders Are Using Workato + AI To Redesign Project Delivery
				</h3>
				<div style="display: flex; align-items: center; gap: 1.5rem; flex-wrap: wrap; font-size: 13px; color: var(--text-light); margin-bottom: 1.5rem;">
					<span style="display: flex; align-items: center; gap: 5px;">
						<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
						Wednesday, April 22 &nbsp;·&nbsp; 5:30 – 7:30 PM EDT
					</span>
					<span style="display: flex; align-items: center; gap: 5px;">
						<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
						Anthony's Chophouse &nbsp;·&nbsp; Carmel, IN
					</span>
				</div>
				<div style="display: flex; align-items: center; gap: 1rem; flex-wrap: wrap;">
					<a href="https://luma.com/rlqz48f9" target="_blank" rel="noopener noreferrer" class="btn btn-primary" style="padding: 0.65rem 1.25rem; font-size: 14px; font-weight: 600; display: inline-flex; align-items: center; gap: 6px;">
						Request to Join
						<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><line x1="7" y1="17" x2="17" y2="7"/><polyline points="7 7 17 7 17 17"/></svg>
					</a>
					<a href="<?php echo esc_url( home_url( '/events' ) ); ?>" style="font-size: 14px; font-weight: 600; color: var(--accent);">
						View all events →
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- AI Readiness CTA Section -->
<section class="cta-section" style="background: linear-gradient(135deg, var(--primary) 0%, #1f2937 100%); color: #FFFFFF; padding: 4rem 1.5rem; text-align: center; max-width: 100%; margin: 0;">
	<div class="cta-wrapper" style="max-width: 900px; margin: 0 auto;">
		<h2 style="color: #FFFFFF; margin-bottom: 1rem;">
			Is Your Business <span style="color: var(--accent);">AI Ready</span>?
		</h2>
		<p style="color: rgba(255, 255, 255, 0.9); font-size: 1.1rem; margin-bottom: 2rem;">
			Our AI Readiness Assessment reveals exactly where you can win with automation and AI. Get a clear roadmap in just 1 week.
		</p>
		<div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
			<a href="<?php echo esc_url( home_url( '/ai-readiness' ) ); ?>" class="btn btn-white" style="background-color: #FFFFFF; color: var(--accent); border: 2px solid transparent; padding: 0.75rem 1.5rem; font-weight: 600;">
				Take the Assessment
			</a>
			<a href="<?php echo esc_url( home_url( '/ai-readiness' ) ); ?>" class="btn btn-ghost" style="background-color: transparent; color: #FFFFFF; border: 2px solid transparent; padding: 0.75rem 1.5rem; font-weight: 600;">
				Learn More
			</a>
		</div>
	</div>
</section>

<?php get_footer(); ?>
