<?php
/**
 * Template Name: Payment Confirmation
 * Description: Thank-you page after payment, with tier-aware content.
 * The tier/session_id sanitization and questionnaire URL build are unchanged.
 *
 * @package ANSA_Solutions
 */

get_header();

// Sanitize and validate tier parameter
$tier = isset( $_GET['tier'] ) ? sanitize_text_field( wp_unslash( $_GET['tier'] ) ) : '';

// Capture Stripe checkout session ID
$session_id = isset( $_GET['session_id'] ) ? sanitize_text_field( wp_unslash( $_GET['session_id'] ) ) : '';

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

// Build questionnaire URL with session_id and tier for bookmarking
$questionnaire_args = array();
if ( $session_id ) {
	$questionnaire_args['session_id'] = $session_id;
}
if ( $valid_tier ) {
	$questionnaire_args['tier'] = $valid_tier;
}
$questionnaire_url = add_query_arg( $questionnaire_args, home_url( '/ai-readiness-intake' ) );
?>

<main id="ds-main" class="site-main">

	<section class="ds-hero">
		<div class="ds-hero__inner">
			<span class="ds-eyebrow">Payment Received</span>
			<h1>Thank you for your investment in AI readiness.</h1>
		</div>
	</section>

	<section class="ds-band ds-band--paper-2">
		<div class="ds-band__inner ds-band__inner--narrow">
			<div class="ds-formcard">
				<div class="ds-check" aria-hidden="true">
					<svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
				</div>

				<?php if ( $tier_data ) : ?>
					<h2>Thank you!</h2>
					<p class="ds-lede">Your payment has been successfully received. We're excited to work with you to unlock your organization's AI potential.</p>

					<div class="ds-callout">
						<span class="ds-callout__label"><?php echo esc_html( $tier_data['name'] ); ?> Package — <?php echo esc_html( $tier_data['price'] ); ?></span>
						<ul class="ds-ticklist">
							<?php foreach ( $tier_data['includes'] as $item ) : ?>
								<li><?php echo esc_html( $item ); ?></li>
							<?php endforeach; ?>
						</ul>
					</div>

					<div class="ds-cta-row">
						<a class="ds-btn ds-btn--primary" href="<?php echo esc_url( $questionnaire_url ); ?>">Start your questionnaire</a>
					</div>

					<p class="ds-formnote"><strong>Bookmark this link:</strong> you can save the questionnaire link above and return to it anytime to complete or continue your assessment.</p>

					<h3>What happens next</h3>
					<ol class="ds-checklist">
						<li><strong>Complete questionnaire</strong> — tell us about your organization and AI goals.</li>
						<li><strong>Discovery call</strong> — we'll discuss your situation and tailor our approach.</li>
						<li><strong>Receive your report</strong> — get your personalized assessment within about one week.</li>
					</ol>

				<?php else : ?>
					<h2>Thank you!</h2>
					<p class="ds-lede">Your payment has been successfully received. We appreciate your trust and look forward to working with you.</p>

					<div class="ds-cta-row">
						<a class="ds-btn ds-btn--primary" href="<?php echo esc_url( $questionnaire_url ); ?>">Continue to questionnaire</a>
					</div>

					<p class="ds-formnote">If you have any questions, please <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">contact us</a>.</p>
				<?php endif; ?>

			</div>
		</div>
	</section>

</main>

<?php
get_footer();
