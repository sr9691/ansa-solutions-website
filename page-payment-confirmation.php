<?php
/**
 * Template Name: Payment Confirmation
 * Description: Thank-you page for payment confirmation with tier-aware content
 */

get_header();

// Sanitize and validate tier parameter
$tier = isset( $_GET['tier'] ) ? sanitize_text_field( wp_unslash( $_GET['tier'] ) ) : '';

// Define tier information
$tiers = array(
	'essentials' => array(
		'name'     => 'Essentials',
		'price'    => '$1,500',
		'includes' => array(
			'Readiness scorecard',
			'Discovery call',
			'Summary report',
		),
	),
	'standard'   => array(
		'name'     => 'Standard',
		'price'    => '$2,500',
		'includes' => array(
			'Full assessment',
			'AI opportunities with ROI',
			'Gap analysis',
			'Phased action plan',
		),
	),
	'premium'    => array(
		'name'     => 'Premium',
		'price'    => '$3,000',
		'includes' => array(
			'Everything in Standard',
			'30-min report walkthrough call',
			'Leadership presentation guidance',
		),
	),
);

// Validate tier
$valid_tier = isset( $tiers[ $tier ] ) ? $tier : null;
$tier_data  = $valid_tier ? $tiers[ $valid_tier ] : null;
?>

<style>
	.hero--dark-gradient {
		background: linear-gradient(135deg, #374151 0%, #1f2937 100%);
		color: white;
		padding: 60px 20px;
		text-align: center;
	}

	.hero--dark-gradient h1 {
		font-size: 2.5rem;
		margin-bottom: 10px;
		font-weight: 700;
	}

	.hero--dark-gradient p {
		font-size: 1.1rem;
		opacity: 0.9;
	}

	.confirmation-container {
		max-width: 700px;
		margin: 40px auto;
		padding: 0 20px;
	}

	.confirmation-card {
		background: white;
		border-radius: 8px;
		box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
		padding: 40px;
		margin-bottom: 40px;
	}

	.checkmark-icon {
		width: 80px;
		height: 80px;
		background: var(--accent, #462CED);
		border-radius: 50%;
		display: flex;
		align-items: center;
		justify-content: center;
		margin: 0 auto 30px;
		font-size: 2.5rem;
		color: white;
	}

	.confirmation-title {
		font-size: 1.8rem;
		color: var(--primary, #374151);
		margin-bottom: 10px;
		font-weight: 700;
	}

	.confirmation-subtitle {
		color: var(--text-light, #6B7280);
		font-size: 1rem;
		margin-bottom: 30px;
		line-height: 1.6;
	}

	.tier-section {
		background: #f9fafb;
		border-left: 4px solid var(--accent, #462CED);
		padding: 20px;
		border-radius: 4px;
		margin-bottom: 30px;
	}

	.tier-name {
		font-size: 1.3rem;
		color: var(--primary, #374151);
		font-weight: 600;
		margin-bottom: 10px;
	}

	.tier-price {
		color: var(--accent, #462CED);
		font-size: 1.1rem;
		font-weight: 600;
		margin-bottom: 15px;
	}

	.tier-includes {
		list-style: none;
		padding: 0;
		margin: 0;
	}

	.tier-includes li {
		color: var(--text-light, #6B7280);
		padding: 8px 0;
		display: flex;
		align-items: flex-start;
	}

	.tier-includes li::before {
		content: '✓';
		color: var(--accent, #462CED);
		font-weight: bold;
		margin-right: 12px;
		flex-shrink: 0;
	}

	.cta-button {
		display: inline-block;
		background: var(--accent, #462CED);
		color: white;
		padding: 14px 32px;
		text-decoration: none;
		border-radius: 6px;
		font-weight: 600;
		font-size: 1rem;
		transition: background-color 0.3s ease;
		margin-bottom: 30px;
		border: none;
		cursor: pointer;
	}

	.cta-button:hover {
		background: #3620b8;
		color: white;
		text-decoration: none;
	}

	.next-steps {
		background: #f3f4f6;
		border-radius: 6px;
		padding: 25px;
		margin-top: 30px;
	}

	.next-steps-title {
		font-size: 1.1rem;
		color: var(--primary, #374151);
		font-weight: 600;
		margin-bottom: 15px;
	}

	.next-steps-list {
		list-style: none;
		padding: 0;
		margin: 0;
		counter-reset: step;
	}

	.next-steps-list li {
		color: var(--text-light, #6B7280);
		padding: 10px 0 10px 35px;
		position: relative;
		counter-increment: step;
	}

	.next-steps-list li::before {
		content: counter(step);
		position: absolute;
		left: 0;
		top: 8px;
		width: 24px;
		height: 24px;
		background: var(--accent, #462CED);
		color: white;
		border-radius: 50%;
		display: flex;
		align-items: center;
		justify-content: center;
		font-weight: 600;
		font-size: 0.85rem;
	}

	.generic-thanks {
		text-align: center;
	}

	.generic-thanks p {
		color: var(--text-light, #6B7280);
		font-size: 1rem;
		line-height: 1.6;
		margin-bottom: 20px;
	}
</style>

<div class="hero hero--dark-gradient">
	<h1>Payment Received</h1>
	<p>Thank you for your investment in AI readiness</p>
</div>

<div class="confirmation-container">
	<div class="confirmation-card">
		<div class="checkmark-icon">✓</div>

		<?php if ( $tier_data ) : ?>
			<!-- Valid Tier Content -->
			<h2 class="confirmation-title">Thank You!</h2>
			<p class="confirmation-subtitle">
				Your payment has been successfully received. We're excited to work with you to unlock your organization's AI potential.
			</p>

			<div class="tier-section">
				<div class="tier-name"><?php echo esc_html( $tier_data['name'] ); ?> Package</div>
				<div class="tier-price"><?php echo esc_html( $tier_data['price'] ); ?></div>
				<ul class="tier-includes">
					<?php foreach ( $tier_data['includes'] as $item ) : ?>
						<li><?php echo esc_html( $item ); ?></li>
					<?php endforeach; ?>
				</ul>
			</div>

			<a href="<?php echo esc_url( home_url( '/ai-readiness-intake' ) ); ?>" class="cta-button">
				Start Your Questionnaire
			</a>

			<div class="next-steps">
				<div class="next-steps-title">What Happens Next</div>
				<ol class="next-steps-list">
					<li><strong>Complete Questionnaire:</strong> Tell us about your organization and AI goals</li>
					<li><strong>Discovery Call:</strong> We'll discuss your situation and tailor our approach</li>
					<li><strong>Receive Your Report:</strong> Get your personalized assessment within ~1 week</li>
				</ol>
			</div>

		<?php else : ?>
			<!-- Generic Thank You (No Valid Tier) -->
			<div class="generic-thanks">
				<h2 class="confirmation-title">Thank You!</h2>
				<p class="confirmation-subtitle">
					Your payment has been successfully received. We appreciate your trust and look forward to working with you.
				</p>

				<a href="<?php echo esc_url( home_url( '/ai-readiness-intake' ) ); ?>" class="cta-button">
					Continue to Questionnaire
				</a>

				<p style="color: var(--text-light, #6B7280); font-size: 0.95rem; margin-top: 20px;">
					If you have any questions, please <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" style="color: var(--accent, #462CED); text-decoration: none;">contact us</a>.
				</p>
			</div>

		<?php endif; ?>

	</div>
</div>

<?php
get_footer();
