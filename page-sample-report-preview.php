<?php
/**
 * Template Name: Sample Report Preview
 * Description: Sample AI Readiness Report Preview page
 */

get_header(); ?>

<style>
	:root {
		--accent: #462CED;
		--primary: #374151;
		--background: #FFFFFF;
		--text-light: #6B7280;
		--border-light: #F3F4F6;
		--success: #10B981;
		--warning: #F59E0B;
	}

	.sample-report-container {
		width: 100%;
	}

	/* Hero Section */
	.hero--dark-gradient {
		background: linear-gradient(135deg, #1F2937 0%, #111827 100%);
		color: white;
		padding: 80px 20px;
		text-align: center;
	}

	.hero__content {
		max-width: 900px;
		margin: 0 auto;
	}

	.badge {
		display: inline-block;
		padding: 8px 16px;
		border-radius: 20px;
		font-size: 12px;
		font-weight: 600;
		text-transform: uppercase;
		letter-spacing: 0.5px;
		margin-bottom: 20px;
	}

	.badge--primary {
		background-color: var(--accent);
		color: white;
	}

	.hero__title {
		font-size: 48px;
		font-weight: 700;
		line-height: 1.2;
		margin-bottom: 20px;
		letter-spacing: -0.5px;
	}

	.text-accent {
		color: var(--accent);
	}

	.hero__subtitle {
		font-size: 18px;
		color: #D1D5DB;
		margin-bottom: 40px;
		line-height: 1.6;
		max-width: 700px;
		margin-left: auto;
		margin-right: auto;
	}

	.button {
		display: inline-block;
		padding: 12px 32px;
		border-radius: 6px;
		font-weight: 600;
		text-decoration: none;
		cursor: pointer;
		border: none;
		transition: all 0.3s ease;
		font-size: 16px;
	}

	.button--primary {
		background-color: var(--accent);
		color: white;
	}

	.button--primary:hover {
		background-color: #3C23BC;
		transform: translateY(-2px);
		box-shadow: 0 10px 30px rgba(70, 44, 237, 0.3);
	}

	.button--large {
		padding: 16px 40px;
		font-size: 18px;
	}

	.button--outline {
		background-color: transparent;
		color: white;
		border: 2px solid white;
	}

	.button--outline:hover {
		background-color: white;
		color: var(--primary);
	}

	/* Section Styles */
	.section {
		padding: 80px 20px;
	}

	.section.section--light {
		background-color: var(--border-light);
	}

	.container {
		max-width: 1200px;
		margin: 0 auto;
	}

	.section__header {
		text-align: center;
		margin-bottom: 60px;
	}

	.section__header h2 {
		font-size: 36px;
		font-weight: 700;
		color: var(--primary);
		margin-bottom: 16px;
	}

	.section__header p {
		font-size: 18px;
		color: var(--text-light);
		max-width: 600px;
		margin: 0 auto;
	}

	/* Executive Summary */
	.executive-summary {
		background-color: var(--background);
		border: 2px solid var(--border-light);
		border-radius: 12px;
		padding: 40px;
		margin-bottom: 40px;
	}

	.summary-score-container {
		display: flex;
		align-items: center;
		margin-bottom: 30px;
		gap: 30px;
	}

	.summary-score-circle {
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		width: 120px;
		height: 120px;
		border-radius: 50%;
		background: linear-gradient(135deg, var(--accent), #5A3BF5);
		color: white;
		flex-shrink: 0;
	}

	.summary-score-circle .score-number {
		font-size: 40px;
		font-weight: 700;
		line-height: 1;
	}

	.summary-score-circle .score-label {
		font-size: 12px;
		margin-top: 6px;
		text-transform: uppercase;
		letter-spacing: 0.5px;
	}

	.summary-text h3 {
		font-size: 22px;
		font-weight: 700;
		color: var(--primary);
		margin-bottom: 12px;
	}

	.summary-text p {
		font-size: 16px;
		color: var(--text-light);
		line-height: 1.6;
		margin: 0;
	}

	/* Dimension Scores */
	.dimension-scores {
		display: grid;
		grid-template-columns: repeat(4, 1fr);
		gap: 20px;
	}

	.dimension-score-card {
		background-color: var(--border-light);
		border-radius: 8px;
		padding: 20px;
		text-align: center;
	}

	.dimension-score-badge {
		display: inline-flex;
		align-items: center;
		justify-content: center;
		width: 80px;
		height: 80px;
		border-radius: 50%;
		font-size: 24px;
		font-weight: 700;
		color: white;
		margin: 0 auto 15px;
	}

	.dimension-score-badge.score-green {
		background-color: var(--success);
	}

	.dimension-score-badge.score-amber {
		background-color: var(--warning);
	}

	.dimension-score-card h4 {
		font-size: 14px;
		font-weight: 600;
		color: var(--primary);
		margin-bottom: 8px;
		text-transform: uppercase;
		letter-spacing: 0.5px;
	}

	.dimension-score-card .score-value {
		font-size: 20px;
		font-weight: 700;
		color: var(--primary);
	}

	/* Deep Dive Cards */
	.dimension-cards {
		display: grid;
		grid-template-columns: repeat(2, 1fr);
		gap: 30px;
		margin-bottom: 40px;
	}

	.dimension-card {
		background-color: var(--background);
		border: 1px solid var(--border-light);
		border-radius: 12px;
		padding: 40px;
		transition: all 0.3s ease;
	}

	.dimension-card:hover {
		box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
		border-color: var(--accent);
	}

	.dimension-card-header {
		display: flex;
		align-items: center;
		margin-bottom: 20px;
		gap: 20px;
	}

	.dimension-card-score {
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		width: 100px;
		height: 100px;
		border-radius: 50%;
		font-size: 32px;
		font-weight: 700;
		color: white;
		flex-shrink: 0;
	}

	.dimension-card-score.score-green {
		background: linear-gradient(135deg, var(--success), #059669);
	}

	.dimension-card-score.score-amber {
		background: linear-gradient(135deg, var(--warning), #D97706);
	}

	.dimension-card-score .score-label {
		font-size: 11px;
		margin-top: 4px;
		text-transform: uppercase;
		letter-spacing: 0.5px;
	}

	.dimension-card-info h3 {
		font-size: 20px;
		font-weight: 700;
		color: var(--primary);
		margin-bottom: 4px;
	}

	.dimension-card-info p {
		color: var(--text-light);
		margin: 0;
		font-size: 14px;
	}

	.dimension-card-description {
		color: var(--text-light);
		line-height: 1.6;
		font-size: 15px;
		margin: 0;
	}

	/* Opportunities Table */
	.opportunities-table {
		width: 100%;
		border-collapse: collapse;
		background-color: var(--background);
		border-radius: 12px;
		overflow: hidden;
		box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
	}

	.opportunities-table thead {
		background-color: var(--border-light);
	}

	.opportunities-table th {
		padding: 16px;
		text-align: left;
		font-weight: 700;
		color: var(--primary);
		font-size: 13px;
		text-transform: uppercase;
		letter-spacing: 0.5px;
		border-bottom: 2px solid #E5E7EB;
	}

	.opportunities-table td {
		padding: 18px 16px;
		border-bottom: 1px solid var(--border-light);
		color: var(--primary);
	}

	.opportunities-table tbody tr:nth-child(even) {
		background-color: var(--border-light);
	}

	.opportunities-table tbody tr:last-child td {
		border-bottom: none;
	}

	.impact-badge, .effort-badge {
		display: inline-block;
		padding: 6px 12px;
		border-radius: 6px;
		font-size: 12px;
		font-weight: 600;
		text-align: center;
		width: 100px;
	}

	.impact-high, .effort-low {
		background-color: rgba(16, 185, 129, 0.1);
		color: #059669;
	}

	.impact-medium, .effort-medium {
		background-color: rgba(245, 158, 11, 0.1);
		color: #D97706;
	}

	.effort-high {
		background-color: rgba(239, 68, 68, 0.1);
		color: #DC2626;
	}

	.roi-value {
		color: var(--accent);
		font-weight: 700;
	}

	/* Roadmap */
	.roadmap-container {
		position: relative;
		padding: 40px 20px;
	}

	.roadmap-timeline {
		display: grid;
		grid-template-columns: repeat(3, 1fr);
		gap: 40px;
		position: relative;
	}

	.roadmap-timeline::before {
		content: '';
		position: absolute;
		top: 50px;
		left: 50px;
		right: 50px;
		height: 2px;
		background: linear-gradient(90deg, var(--accent) 0%, var(--accent) 50%, var(--border-light) 50%, var(--border-light) 100%);
		z-index: 0;
	}

	.roadmap-phase {
		position: relative;
		z-index: 1;
		background-color: var(--background);
		border: 2px solid var(--border-light);
		border-radius: 12px;
		padding: 30px;
		text-align: center;
	}

	.roadmap-phase::before {
		content: '';
		position: absolute;
		width: 24px;
		height: 24px;
		background-color: var(--accent);
		border: 4px solid white;
		border-radius: 50%;
		top: -37px;
		left: 50%;
		transform: translateX(-50%);
		box-shadow: 0 0 0 2px var(--accent);
	}

	.roadmap-phase h3 {
		font-size: 18px;
		font-weight: 700;
		color: var(--primary);
		margin-bottom: 8px;
	}

	.roadmap-phase .phase-timeframe {
		font-size: 13px;
		color: var(--text-light);
		margin-bottom: 20px;
		text-transform: uppercase;
		letter-spacing: 0.5px;
	}

	.roadmap-phase ul {
		list-style: none;
		padding: 0;
		margin: 0;
		text-align: left;
	}

	.roadmap-phase li {
		padding: 8px 0;
		font-size: 14px;
		color: var(--text-light);
		position: relative;
		padding-left: 20px;
	}

	.roadmap-phase li::before {
		content: '▸';
		position: absolute;
		left: 0;
		color: var(--accent);
		font-weight: 700;
	}

	/* CTA Section */
	.cta-section {
		background: linear-gradient(135deg, #1F2937 0%, #111827 100%);
		color: white;
		padding: 80px 20px;
		text-align: center;
	}

	.cta-content {
		max-width: 800px;
		margin: 0 auto;
	}

	.cta-section h2 {
		font-size: 42px;
		font-weight: 700;
		margin-bottom: 16px;
		letter-spacing: -0.5px;
	}

	.cta-section p {
		font-size: 18px;
		color: #D1D5DB;
		margin-bottom: 40px;
		line-height: 1.6;
	}

	.cta-buttons {
		display: flex;
		gap: 20px;
		justify-content: center;
		flex-wrap: wrap;
	}

	/* Responsive Design */
	@media (max-width: 768px) {
		.hero__title {
			font-size: 32px;
		}

		.hero__subtitle {
			font-size: 16px;
		}

		.summary-score-container {
			flex-direction: column;
			text-align: center;
		}

		.dimension-scores {
			grid-template-columns: repeat(2, 1fr);
		}

		.dimension-cards {
			grid-template-columns: 1fr;
		}

		.dimension-card-header {
			flex-direction: column;
			text-align: center;
		}

		.roadmap-timeline {
			grid-template-columns: 1fr;
			gap: 20px;
		}

		.roadmap-timeline::before {
			display: none;
		}

		.roadmap-phase::before {
			top: -40px;
		}

		.opportunities-table {
			font-size: 14px;
		}

		.opportunities-table th, .opportunities-table td {
			padding: 12px 8px;
		}

		.cta-section h2 {
			font-size: 28px;
		}

		.cta-section p {
			font-size: 16px;
		}

		.cta-buttons {
			flex-direction: column;
		}

		.button {
			width: 100%;
		}

		.section {
			padding: 50px 20px;
		}

		.section__header h2 {
			font-size: 24px;
		}
	}

	@media (max-width: 480px) {
		.dimension-scores {
			grid-template-columns: 1fr;
		}

		.hero__title {
			font-size: 24px;
		}

		.cta-section h2 {
			font-size: 22px;
		}

		.opportunities-table th, .opportunities-table td {
			font-size: 12px;
			padding: 10px 6px;
		}
	}
</style>

<div class="sample-report-container">
	<!-- Hero Section -->
	<section class="hero hero--dark-gradient">
		<div class="hero__content">
			<span class="badge badge--primary">Sample Report</span>
			<h1 class="hero__title">
				AI Readiness Report <span class="text-accent">Preview</span>
			</h1>
			<p class="hero__subtitle">
				This is a sample report for a fictional mid-market manufacturing company. Your report will be customized to your business.
			</p>
			<a href="<?php echo esc_url( home_url( '/ai-readiness#pricing' ) ); ?>" class="button button--primary button--large">
				Start Your Assessment
			</a>
		</div>
	</section>

	<!-- Executive Summary -->
	<section class="section">
		<div class="container">
			<div class="section__header">
				<h2>Executive Summary</h2>
			</div>

			<div class="executive-summary">
				<div class="summary-score-container">
					<div class="summary-score-circle">
						<span class="score-number">72</span>
						<span class="score-label">/ 100</span>
					</div>
					<div class="summary-text">
						<h3>Overall AI Readiness Score</h3>
						<p>Acme Manufacturing shows strong operational foundations but significant gaps in data infrastructure and leadership alignment that must be addressed before AI initiatives can succeed.</p>
					</div>
				</div>

				<div class="dimension-scores">
					<div class="dimension-score-card">
						<div class="dimension-score-badge score-green">78</div>
						<h4>Technology</h4>
						<div class="score-value">78/100</div>
					</div>
					<div class="dimension-score-card">
						<div class="dimension-score-badge score-amber">64</div>
						<h4>Data</h4>
						<div class="score-value">64/100</div>
					</div>
					<div class="dimension-score-card">
						<div class="dimension-score-badge score-green">75</div>
						<h4>Operations</h4>
						<div class="score-value">75/100</div>
					</div>
					<div class="dimension-score-card">
						<div class="dimension-score-badge score-amber">68</div>
						<h4>Leadership</h4>
						<div class="score-value">68/100</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Dimension Deep Dive -->
	<section class="section section--light">
		<div class="container">
			<div class="section__header">
				<h2>Dimension Deep Dive</h2>
				<p>Detailed analysis of your AI readiness across four critical dimensions</p>
			</div>

			<div class="dimension-cards">
				<div class="dimension-card">
					<div class="dimension-card-header">
						<div class="dimension-card-score score-green">
							<span>78</span>
							<span class="score-label">/ 100</span>
						</div>
						<div class="dimension-card-info">
							<h3>Technology</h3>
							<p>Foundation Ready</p>
						</div>
					</div>
					<p class="dimension-card-description">Modern ERP system with API capabilities. Cloud infrastructure partially adopted. Key gap: No centralized data lake or ML pipeline.</p>
				</div>

				<div class="dimension-card">
					<div class="dimension-card-header">
						<div class="dimension-card-score score-amber">
							<span>64</span>
							<span class="score-label">/ 100</span>
						</div>
						<div class="dimension-card-info">
							<h3>Data</h3>
							<p>Needs Development</p>
						</div>
					</div>
					<p class="dimension-card-description">Structured data in ERP is solid, but siloed across 4 departments. No data governance framework. Customer data is fragmented across 3 systems.</p>
				</div>

				<div class="dimension-card">
					<div class="dimension-card-header">
						<div class="dimension-card-score score-green">
							<span>75</span>
							<span class="score-label">/ 100</span>
						</div>
						<div class="dimension-card-info">
							<h3>Operations</h3>
							<p>Well Structured</p>
						</div>
					</div>
					<p class="dimension-card-description">Well-documented core processes. Strong KPI tracking. Gap: Manual handoffs between departments create bottlenecks ideal for automation.</p>
				</div>

				<div class="dimension-card">
					<div class="dimension-card-header">
						<div class="dimension-card-score score-amber">
							<span>68</span>
							<span class="score-label">/ 100</span>
						</div>
						<div class="dimension-card-info">
							<h3>Leadership</h3>
							<p>Emerging Support</p>
						</div>
					</div>
					<p class="dimension-card-description">Executive sponsor identified. Budget allocated for pilot. Gap: No AI literacy program and middle management buy-in is limited.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Top AI Opportunities -->
	<section class="section">
		<div class="container">
			<div class="section__header">
				<h2>Top AI Opportunities</h2>
				<p>High-impact initiatives ranked by effort and potential ROI</p>
			</div>

			<table class="opportunities-table">
				<thead>
					<tr>
						<th>Opportunity</th>
						<th>Impact</th>
						<th>Effort</th>
						<th>Estimated Annual ROI</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><strong>Invoice Processing Automation</strong></td>
						<td><span class="impact-badge impact-high">High</span></td>
						<td><span class="effort-badge effort-low">Low</span></td>
						<td><span class="roi-value">$180K/yr</span></td>
					</tr>
					<tr>
						<td><strong>Predictive Maintenance</strong></td>
						<td><span class="impact-badge impact-high">High</span></td>
						<td><span class="effort-badge effort-medium">Medium</span></td>
						<td><span class="roi-value">$320K/yr</span></td>
					</tr>
					<tr>
						<td><strong>Customer Demand Forecasting</strong></td>
						<td><span class="impact-badge impact-medium">Medium</span></td>
						<td><span class="effort-badge effort-medium">Medium</span></td>
						<td><span class="roi-value">$95K/yr</span></td>
					</tr>
					<tr>
						<td><strong>Quality Inspection AI</strong></td>
						<td><span class="impact-badge impact-high">High</span></td>
						<td><span class="effort-badge effort-high">High</span></td>
						<td><span class="roi-value">$250K/yr</span></td>
					</tr>
					<tr>
						<td><strong>Supplier Risk Monitoring</strong></td>
						<td><span class="impact-badge impact-medium">Medium</span></td>
						<td><span class="effort-badge effort-low">Low</span></td>
						<td><span class="roi-value">$60K/yr</span></td>
					</tr>
				</tbody>
			</table>
		</div>
	</section>

	<!-- Prioritized Roadmap -->
	<section class="section section--light">
		<div class="container">
			<div class="section__header">
				<h2>Prioritized Implementation Roadmap</h2>
				<p>A phased approach designed to build momentum and deliver quick wins</p>
			</div>

			<div class="roadmap-container">
				<div class="roadmap-timeline">
					<div class="roadmap-phase">
						<h3>Phase 1</h3>
						<div class="phase-timeframe">Months 1–3</div>
						<div style="background-color: var(--border-light); padding: 15px; border-radius: 8px; margin-bottom: 15px;">
							<strong style="color: var(--accent);">Quick Wins</strong>
						</div>
						<ul>
							<li>Invoice Processing Automation</li>
							<li>Supplier Risk Monitoring</li>
						</ul>
					</div>

					<div class="roadmap-phase">
						<h3>Phase 2</h3>
						<div class="phase-timeframe">Months 4–8</div>
						<div style="background-color: var(--border-light); padding: 15px; border-radius: 8px; margin-bottom: 15px;">
							<strong style="color: var(--accent);">Core Initiatives</strong>
						</div>
						<ul>
							<li>Customer Demand Forecasting</li>
							<li>Predictive Maintenance</li>
						</ul>
					</div>

					<div class="roadmap-phase">
						<h3>Phase 3</h3>
						<div class="phase-timeframe">Months 9–12</div>
						<div style="background-color: var(--border-light); padding: 15px; border-radius: 8px; margin-bottom: 15px;">
							<strong style="color: var(--accent);">Strategic Bets</strong>
						</div>
						<ul>
							<li>Quality Inspection AI</li>
							<li>Data Lake Build</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Call to Action -->
	<section class="cta-section">
		<div class="container">
			<div class="cta-content">
				<h2>Ready to See Your Own Report?</h2>
				<p>Get your personalized AI Readiness Assessment — most clients receive their report within one week.</p>
				<div class="cta-buttons">
					<a href="<?php echo esc_url( home_url( '/ai-readiness#pricing' ) ); ?>" class="button button--primary button--large">
						Start Your Assessment
					</a>
					<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="button button--outline button--large">
						Have Questions?
					</a>
				</div>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>
