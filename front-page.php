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
		<h1 style="margin-bottom: 1.5rem; font-size: 3.5rem;">
			Empowering Businesses with <span style="color: var(--accent);">AI-driven Automation</span>
		</h1>
		<p class="subtitle" style="font-size: 1.25rem; color: rgba(255, 255, 255, 0.9); margin-bottom: 2.5rem; max-width: 700px; margin-left: auto; margin-right: auto;">
			We help mid-market organizations streamline operations, enhance efficiency, and drive growth through intelligent automation and AI strategy.
		</p>
		<div class="hero-buttons" style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
			<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary" style="padding: 0.75rem 1.5rem; font-weight: 600;">
				Get Started
			</a>
			<a href="<?php echo esc_url( home_url( '/ai-readiness-assessment' ) ); ?>" class="btn btn-outline" style="background-color: transparent; color: #FFFFFF; border: 2px solid #FFFFFF; padding: 0.75rem 1.5rem; font-weight: 600;">
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
			<h3 class="stat-number" style="color: #FFFFFF; margin-bottom: 0.5rem; font-size: 2.5rem;">2 weeks</h3>
			<p class="stat-label" style="color: rgba(255, 255, 255, 0.8); margin: 0;">To AI Readiness Report</p>
		</div>
		<div class="stat">
			<h3 class="stat-number" style="color: #FFFFFF; margin-bottom: 0.5rem; font-size: 2.5rem;">6-8 weeks</h3>
			<p class="stat-label" style="color: rgba(255, 255, 255, 0.8); margin: 0;">To measurable value</p>
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
				A fixed-fee assessment that tells you exactly where AI can create value, what's blocking you, and what to do first. Results in ~2 weeks.
			</p>
			<a href="<?php echo esc_url( home_url( '/ai-readiness-assessment' ) ); ?>" style="color: var(--accent); font-weight: 600; display: inline-flex; align-items: center; gap: 0.5rem; border-top: 1px solid var(--border); padding-top: 1rem; margin-top: 1rem;">
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

<!-- About/Leadership Section -->
<section class="section" style="padding: 5rem 1.5rem; max-width: 1400px; margin: 0 auto;">
	<div class="about-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 3rem; align-items: center;">
		<!-- Leadership Image Placeholder -->
		<div class="about-image" style="width: 340px; height: 400px; background-color: var(--border-light); border-radius: var(--radius-lg); overflow: hidden; display: flex; align-items: center; justify-content: center; color: var(--text-lighter);">
			<div style="text-align: center;">
				<div style="font-size: 3rem; margin-bottom: 1rem;">📷</div>
				<p>Sundaresh Ramanathan Headshot</p>
			</div>
		</div>

		<!-- Leadership Content -->
		<div class="about-content">
			<div class="section-label" style="color: var(--accent); font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 0.5rem; font-size: 0.9rem;">
				Leadership
			</div>
			<h2 style="margin-bottom: 1.5rem;">Meet Sundaresh Ramanathan</h2>

			<p style="color: var(--text-light); margin-bottom: 1.5rem;">
				Sundaresh brings over a decade of experience in technology leadership, process automation, and data analytics. With a proven track record of helping mid-market organizations transform their operations, he has led successful implementations across industries including financial services, manufacturing, healthcare, and professional services.
			</p>

			<p style="color: var(--text-light); margin-bottom: 0;">
				Based in Carmel, Indiana, Sundaresh is passionate about bridging the gap between business strategy and technical execution. His approach combines deep domain expertise with practical understanding of implementation challenges, ensuring organizations don't just adopt automation tools—they build sustainable, scalable automation practices that drive measurable business value.
			</p>
		</div>
	</div>
</section>

<!-- AI Readiness CTA Section -->
<section class="cta-section" style="background: linear-gradient(135deg, var(--primary) 0%, #1f2937 100%); color: #FFFFFF; padding: 4rem 1.5rem; text-align: center; max-width: 100%; margin: 5rem 0 0 0;">
	<div class="cta-wrapper" style="max-width: 900px; margin: 0 auto;">
		<h2 style="color: #FFFFFF; margin-bottom: 1rem;">
			Is Your Business <span style="color: var(--accent);">AI Ready</span>?
		</h2>
		<p style="color: rgba(255, 255, 255, 0.9); font-size: 1.1rem; margin-bottom: 2rem;">
			Our AI Readiness Assessment reveals exactly where you can win with automation and AI. Get a clear roadmap in just 2 weeks.
		</p>
		<div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
			<a href="<?php echo esc_url( home_url( '/ai-readiness-assessment' ) ); ?>" class="btn btn-white" style="background-color: #FFFFFF; color: var(--accent); border: 2px solid transparent; padding: 0.75rem 1.5rem; font-weight: 600;">
				Take the Assessment
			</a>
			<a href="<?php echo esc_url( home_url( '/ai-readiness-assessment' ) ); ?>" class="btn btn-ghost" style="background-color: transparent; color: #FFFFFF; border: 2px solid transparent; padding: 0.75rem 1.5rem; font-weight: 600;">
				Learn More
			</a>
		</div>
	</div>
</section>

<?php get_footer(); ?>
