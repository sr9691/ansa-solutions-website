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
				Process Automation That<br>Delivers <span class="text-accent">Results</span>
			</h1>
			<p class="hero__subtitle">
				We partner with platforms like Workato to design, build, and operate intelligent automation that connects your systems and eliminates manual work.
			</p>
			<div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-top: 2rem;">
				<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="button button--primary button--large">Start a Conversation</a>
				<a href="<?php echo esc_url( home_url( '/case-studies' ) ); ?>" class="button button--outline-white button--large" style="background: transparent; color: #fff; border: 2px solid rgba(255,255,255,0.4); padding: 0.75rem 1.5rem; border-radius: var(--radius-md); font-weight: 600;">See Our Work</a>
			</div>
		</div>
	</section>

	<!-- What We Do Section -->
	<section style="padding: 5rem 1.5rem; max-width: 1200px; margin: 0 auto;">
		<div style="text-align: center; margin-bottom: 3rem;">
			<div style="color: var(--accent); font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 0.5rem; font-size: 0.9rem;">Our Capabilities</div>
			<h2 style="margin-bottom: 1rem;">What We Automate</h2>
			<p style="font-size: 1.1rem; max-width: 650px; margin: 0 auto; color: var(--text-light);">
				We specialize in enterprise process automation for operations-driven organizations. We don't count scripts or steps — we count outcomes.
			</p>
		</div>

		<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 1.5rem;">
			<!-- Card 1 -->
			<div style="background: var(--background); border: 1px solid var(--border); border-radius: var(--radius-lg); padding: 2rem; transition: var(--transition);">
				<div style="width: 48px; height: 48px; background: linear-gradient(135deg, var(--accent), #6d5ce7); border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; margin-bottom: 1.25rem;">
					<svg width="24" height="24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
				</div>
				<h3 style="margin-bottom: 0.5rem; font-size: 1.15rem;">Workflow Orchestration</h3>
				<p style="color: var(--text-light); margin: 0; font-size: 0.95rem;">Event-driven automation across ERP, CRM, operational platforms, and finance tools — coordinated as a single, reliable process.</p>
			</div>
			<!-- Card 2 -->
			<div style="background: var(--background); border: 1px solid var(--border); border-radius: var(--radius-lg); padding: 2rem; transition: var(--transition);">
				<div style="width: 48px; height: 48px; background: linear-gradient(135deg, var(--accent), #6d5ce7); border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; margin-bottom: 1.25rem;">
					<svg width="24" height="24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 6h13"/><path d="M8 12h13"/><path d="M8 18h13"/><path d="M3 6h.01"/><path d="M3 12h.01"/><path d="M3 18h.01"/></svg>
				</div>
				<h3 style="margin-bottom: 0.5rem; font-size: 1.15rem;">System Integration</h3>
				<p style="color: var(--text-light); margin: 0; font-size: 0.95rem;">Connect disconnected systems with clean, auditable data flows that scale — no more CSV exports, manual re-keying, or data silos.</p>
			</div>
			<!-- Card 3 -->
			<div style="background: var(--background); border: 1px solid var(--border); border-radius: var(--radius-lg); padding: 2rem; transition: var(--transition);">
				<div style="width: 48px; height: 48px; background: linear-gradient(135deg, var(--accent), #6d5ce7); border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; margin-bottom: 1.25rem;">
					<svg width="24" height="24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
				</div>
				<h3 style="margin-bottom: 0.5rem; font-size: 1.15rem;">Document Intelligence</h3>
				<p style="color: var(--text-light); margin: 0; font-size: 0.95rem;">AI-powered document processing, extraction, and routing that turns unstructured data into actionable, structured workflows.</p>
			</div>
			<!-- Card 4 -->
			<div style="background: var(--background); border: 1px solid var(--border); border-radius: var(--radius-lg); padding: 2rem; transition: var(--transition);">
				<div style="width: 48px; height: 48px; background: linear-gradient(135deg, var(--accent), #6d5ce7); border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; margin-bottom: 1.25rem;">
					<svg width="24" height="24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
				</div>
				<h3 style="margin-bottom: 0.5rem; font-size: 1.15rem;">Compliance & Governance</h3>
				<p style="color: var(--text-light); margin: 0; font-size: 0.95rem;">Automation designed for regulated environments with full audit trails, role-based access, and built-in error handling.</p>
			</div>
		</div>
	</section>

	<!-- How We Work Section - Horizontal Steps -->
	<section style="background-color: #f8f9fa; padding: 5rem 1.5rem;">
		<div style="max-width: 1200px; margin: 0 auto;">
			<div style="text-align: center; margin-bottom: 3.5rem;">
				<div style="color: var(--accent); font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 0.5rem; font-size: 0.9rem;">Our Process</div>
				<h2 style="margin-bottom: 1rem;">How We Work</h2>
				<p style="font-size: 1.1rem; max-width: 550px; margin: 0 auto; color: var(--text-light);">
					A proven methodology that gets you from friction to flow.
				</p>
			</div>

			<div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 1.5rem; position: relative;">
				<!-- Step 1 -->
				<div style="text-align: center; position: relative; z-index: 1;">
					<div style="width: 64px; height: 64px; background: linear-gradient(135deg, var(--accent), #6d5ce7); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.25rem; color: #fff; font-size: 1.5rem; font-weight: 700;">1</div>
					<h3 style="font-size: 1.1rem; margin-bottom: 0.5rem;">Identify</h3>
					<p style="color: var(--text-light); font-size: 0.9rem; margin: 0; max-width: 220px; margin-left: auto; margin-right: auto;">Pinpoint the 1–2 workflows creating the most friction and wasted effort today.</p>
				</div>
				<!-- Step 2 -->
				<div style="text-align: center; position: relative; z-index: 1;">
					<div style="width: 64px; height: 64px; background: linear-gradient(135deg, var(--accent), #6d5ce7); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.25rem; color: #fff; font-size: 1.5rem; font-weight: 700;">2</div>
					<h3 style="font-size: 1.1rem; margin-bottom: 0.5rem;">Design</h3>
					<p style="color: var(--text-light); font-size: 0.9rem; margin: 0; max-width: 220px; margin-left: auto; margin-right: auto;">Map the automation around business outcomes — not around the tool's defaults.</p>
				</div>
				<!-- Step 3 -->
				<div style="text-align: center; position: relative; z-index: 1;">
					<div style="width: 64px; height: 64px; background: linear-gradient(135deg, var(--accent), #6d5ce7); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.25rem; color: #fff; font-size: 1.5rem; font-weight: 700;">3</div>
					<h3 style="font-size: 1.1rem; margin-bottom: 0.5rem;">Deliver</h3>
					<p style="color: var(--text-light); font-size: 0.9rem; margin: 0; max-width: 220px; margin-left: auto; margin-right: auto;">Build, test, and launch production-ready automation in 6–8 weeks with measurable value.</p>
				</div>
				<!-- Step 4 -->
				<div style="text-align: center; position: relative; z-index: 1;">
					<div style="width: 64px; height: 64px; background: linear-gradient(135deg, var(--accent), #6d5ce7); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.25rem; color: #fff; font-size: 1.5rem; font-weight: 700;">4</div>
					<h3 style="font-size: 1.1rem; margin-bottom: 0.5rem;">Scale</h3>
					<p style="color: var(--text-light); font-size: 0.9rem; margin: 0; max-width: 220px; margin-left: auto; margin-right: auto;">Replicate proven patterns across departments and workflows to compound results.</p>
				</div>
			</div>
		</div>

		<style>
			@media (max-width: 768px) {
				.process-steps-grid { grid-template-columns: 1fr 1fr !important; }
			}
			@media (max-width: 480px) {
				.process-steps-grid { grid-template-columns: 1fr !important; }
			}
		</style>
	</section>

	<!-- Why It Works / Differentiators Section -->
	<section style="padding: 5rem 1.5rem; max-width: 1200px; margin: 0 auto;">
		<div style="text-align: center; margin-bottom: 3rem;">
			<div style="color: var(--accent); font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 0.5rem; font-size: 0.9rem;">Why ANSA</div>
			<h2 style="margin-bottom: 1rem;">What Makes Us Different</h2>
		</div>

		<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2.5rem;">
			<!-- Differentiator 1 -->
			<div style="display: flex; gap: 1rem; align-items: flex-start;">
				<div style="flex-shrink: 0; width: 40px; height: 40px; background: rgba(70, 44, 237, 0.1); border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center;">
					<svg width="20" height="20" fill="none" stroke="var(--accent)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="10" cy="10" r="9"/><polyline points="10 6 10 10 13 13"/></svg>
				</div>
				<div>
					<h3 style="font-size: 1.05rem; margin-bottom: 0.35rem;">Outcome-First Thinking</h3>
					<p style="color: var(--text-light); margin: 0; font-size: 0.95rem;">We start with the business result you need, then work backwards to the technical solution. No shelfware.</p>
				</div>
			</div>
			<!-- Differentiator 2 -->
			<div style="display: flex; gap: 1rem; align-items: flex-start;">
				<div style="flex-shrink: 0; width: 40px; height: 40px; background: rgba(70, 44, 237, 0.1); border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center;">
					<svg width="20" height="20" fill="none" stroke="var(--accent)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H7a4 4 0 00-4 4v2"/><circle cx="10" cy="7" r="4"/><path d="M21 11v-1a3 3 0 00-3-3"/></svg>
				</div>
				<div>
					<h3 style="font-size: 1.05rem; margin-bottom: 0.35rem;">Operations Expertise</h3>
					<p style="color: var(--text-light); margin: 0; font-size: 0.95rem;">We understand how real operations run — finance closes, field operations, compliance cycles — not just how APIs work.</p>
				</div>
			</div>
			<!-- Differentiator 3 -->
			<div style="display: flex; gap: 1rem; align-items: flex-start;">
				<div style="flex-shrink: 0; width: 40px; height: 40px; background: rgba(70, 44, 237, 0.1); border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center;">
					<svg width="20" height="20" fill="none" stroke="var(--accent)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
				</div>
				<div>
					<h3 style="font-size: 1.05rem; margin-bottom: 0.35rem;">Platform-Aware, Not Locked In</h3>
					<p style="color: var(--text-light); margin: 0; font-size: 0.95rem;">We recommend the right tool for your environment. Workato is our go-to, but we'll tell you if something else fits better.</p>
				</div>
			</div>
			<!-- Differentiator 4 -->
			<div style="display: flex; gap: 1rem; align-items: flex-start;">
				<div style="flex-shrink: 0; width: 40px; height: 40px; background: rgba(70, 44, 237, 0.1); border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center;">
					<svg width="20" height="20" fill="none" stroke="var(--accent)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
				</div>
				<div>
					<h3 style="font-size: 1.05rem; margin-bottom: 0.35rem;">Production-Grade From Day One</h3>
					<p style="color: var(--text-light); margin: 0; font-size: 0.95rem;">Error handling, logging, alerting, and rollback built in from the start — not bolted on after things break.</p>
				</div>
			</div>
			<!-- Differentiator 5 -->
			<div style="display: flex; gap: 1rem; align-items: flex-start;">
				<div style="flex-shrink: 0; width: 40px; height: 40px; background: rgba(70, 44, 237, 0.1); border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center;">
					<svg width="20" height="20" fill="none" stroke="var(--accent)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>
				</div>
				<div>
					<h3 style="font-size: 1.05rem; margin-bottom: 0.35rem;">Mid-Market Focus</h3>
					<p style="color: var(--text-light); margin: 0; font-size: 0.95rem;">Right-sized solutions for organizations that need enterprise capability without enterprise overhead or 12-month timelines.</p>
				</div>
			</div>
			<!-- Differentiator 6 -->
			<div style="display: flex; gap: 1rem; align-items: flex-start;">
				<div style="flex-shrink: 0; width: 40px; height: 40px; background: rgba(70, 44, 237, 0.1); border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center;">
					<svg width="20" height="20" fill="none" stroke="var(--accent)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 20V10"/><path d="M12 20V4"/><path d="M6 20v-6"/></svg>
				</div>
				<div>
					<h3 style="font-size: 1.05rem; margin-bottom: 0.35rem;">Measurable ROI</h3>
					<p style="color: var(--text-light); margin: 0; font-size: 0.95rem;">Every engagement starts with defined success metrics so you can see the impact — not just take our word for it.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Industries / Use Cases Section -->
	<section style="background-color: var(--primary); color: #FFFFFF; padding: 5rem 1.5rem;">
		<div style="max-width: 1200px; margin: 0 auto;">
			<div style="text-align: center; margin-bottom: 3rem;">
				<div style="color: var(--accent); font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 0.5rem; font-size: 0.9rem;">Where We Help</div>
				<h2 style="color: #FFFFFF; margin-bottom: 1rem;">Common Automation Use Cases</h2>
				<p style="font-size: 1.1rem; max-width: 600px; margin: 0 auto; color: rgba(255,255,255,0.85);">
					We've delivered automation across a range of industries and back-office functions.
				</p>
			</div>

			<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem;">
				<div style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.12); border-radius: var(--radius-lg); padding: 1.5rem;">
					<h3 style="color: #FFFFFF; font-size: 1.05rem; margin-bottom: 0.5rem;">Finance & Accounting</h3>
					<p style="color: rgba(255,255,255,0.8); margin: 0; font-size: 0.9rem;">Invoice processing, reconciliation, AP/AR automation, and month-end close acceleration.</p>
				</div>
				<div style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.12); border-radius: var(--radius-lg); padding: 1.5rem;">
					<h3 style="color: #FFFFFF; font-size: 1.05rem; margin-bottom: 0.5rem;">Field Operations</h3>
					<p style="color: rgba(255,255,255,0.8); margin: 0; font-size: 0.9rem;">Work order routing, service dispatch, field-to-office data sync, and compliance tracking.</p>
				</div>
				<div style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.12); border-radius: var(--radius-lg); padding: 1.5rem;">
					<h3 style="color: #FFFFFF; font-size: 1.05rem; margin-bottom: 0.5rem;">Revenue Operations</h3>
					<p style="color: rgba(255,255,255,0.8); margin: 0; font-size: 0.9rem;">Lead-to-cash orchestration, CRM enrichment, quoting automation, and pipeline analytics.</p>
				</div>
				<div style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.12); border-radius: var(--radius-lg); padding: 1.5rem;">
					<h3 style="color: #FFFFFF; font-size: 1.05rem; margin-bottom: 0.5rem;">HR & Onboarding</h3>
					<p style="color: rgba(255,255,255,0.8); margin: 0; font-size: 0.9rem;">Employee onboarding workflows, benefits enrollment, access provisioning, and offboarding.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- CTA Section -->
	<section style="background: linear-gradient(135deg, var(--primary) 0%, #1f2937 100%); color: #FFFFFF; padding: 4rem 1.5rem; text-align: center;">
		<div style="max-width: 900px; margin: 0 auto;">
			<h2 style="color: #FFFFFF; margin-bottom: 1rem;">Ready to Transform Your Operations?</h2>
			<p style="color: rgba(255,255,255,0.9); font-size: 1.1rem; margin-bottom: 2rem;">
				Let's start with a conversation about your biggest automation challenges.
			</p>
			<div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
				<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-white" style="background-color: #FFFFFF; color: var(--accent); border: 2px solid transparent; padding: 0.75rem 1.5rem; font-weight: 600; border-radius: var(--radius-md);">
					Contact Our Team
				</a>
				<a href="<?php echo esc_url( home_url( '/ai-readiness' ) ); ?>" class="btn btn-ghost" style="background: transparent; color: #FFFFFF; border: 2px solid rgba(255,255,255,0.4); padding: 0.75rem 1.5rem; font-weight: 600; border-radius: var(--radius-md);">
					Take AI Readiness Assessment
				</a>
			</div>
		</div>
	</section>

</main>

<?php
get_footer();
?>
