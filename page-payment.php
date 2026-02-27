<?php
/**
 * Template Name: Payment
 * Description: Embedded Stripe payment page for AI Readiness Assessment
 */

// Tier definitions (server-side validation)
$tiers = array(
    'essentials' => array(
        'name'     => 'Essentials Package',
        'label'    => 'Essentials',
        'price'    => 1500,
        'features' => array( 'Readiness Scorecard', 'Discovery Call', 'Summary Report' ),
    ),
    'standard'   => array(
        'name'     => 'Standard Package',
        'label'    => 'Standard',
        'price'    => 2500,
        'features' => array( 'Full Assessment', 'AI Opportunities with ROI', 'Gap Analysis', 'Phased Action Plan' ),
    ),
    'premium'    => array(
        'name'     => 'Premium Package',
        'label'    => 'Premium',
        'price'    => 3000,
        'features' => array( 'Everything in Standard', 'Report Walkthrough Call', 'Leadership Presentation Guidance' ),
    ),
);

$tier_key = isset( $_GET['tier'] ) ? sanitize_text_field( strtolower( trim( $_GET['tier'] ) ) ) : '';
$tier     = isset( $tiers[ $tier_key ] ) ? $tiers[ $tier_key ] : null;

get_header();
?>

<style>
    /* ── Payment Page Styles ── */
    .payment-page { display: flex; align-items: center; justify-content: center; min-height: 70vh; padding: 3rem 1.5rem; }
    .payment-container { width: 100%; max-width: 580px; }

    /* Order Summary Banner */
    .order-summary { background: linear-gradient(135deg, var(--primary, #374151) 0%, #1f2937 100%); border-radius: 12px 12px 0 0; padding: 2rem 2.5rem; color: #fff; }
    .order-label { font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px; color: rgba(255,255,255,0.6); margin-bottom: 0.75rem; font-weight: 600; }
    .order-tier { font-size: 1.4rem; font-weight: 700; margin-bottom: 0.35rem; }
    .order-product { font-size: 0.9rem; color: rgba(255,255,255,0.75); margin-bottom: 1.25rem; }
    .order-divider { border: none; border-top: 1px solid rgba(255,255,255,0.15); margin-bottom: 1.25rem; }
    .order-row { display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.5rem; font-size: 0.9rem; }
    .order-row .label { color: rgba(255,255,255,0.7); }
    .order-row .value { font-weight: 600; }
    .order-total { display: flex; justify-content: space-between; align-items: center; margin-top: 0.75rem; padding-top: 0.75rem; border-top: 1px solid rgba(255,255,255,0.15); }
    .order-total .label { font-size: 1rem; font-weight: 600; }
    .order-total .value { font-size: 1.5rem; font-weight: 700; color: #fff; }
    .order-features { display: flex; flex-wrap: wrap; gap: 0.5rem; margin-top: 1rem; }
    .order-features .tag { font-size: 0.75rem; padding: 0.3rem 0.65rem; background: rgba(255,255,255,0.1); border-radius: 999px; color: rgba(255,255,255,0.8); }

    /* Payment Form */
    .payment-form-card { background: #fff; border-radius: 0 0 12px 12px; padding: 2rem 2.5rem 2.5rem; box-shadow: 0 1px 3px rgba(0,0,0,0.08), 0 4px 12px rgba(0,0,0,0.04); }
    .form-title { font-size: 1.05rem; font-weight: 700; margin-bottom: 1.5rem; }
    .form-row { margin-bottom: 1.15rem; }
    .form-row label { display: block; font-size: 0.82rem; font-weight: 600; margin-bottom: 0.4rem; color: var(--text, #1f2937); }
    .form-row input { width: 100%; padding: 0.7rem 0.9rem; border: 1.5px solid #e5e7eb; border-radius: 8px; font-family: inherit; font-size: 0.92rem; transition: border-color 0.2s; outline: none; background: #fff; }
    .form-row input:focus { border-color: var(--accent, #462CED); box-shadow: 0 0 0 3px rgba(70,44,237,0.1); }
    .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }

    /* Stripe Element */
    #card-element { padding: 0.7rem 0.9rem; border: 1.5px solid #e5e7eb; border-radius: 8px; background: #fff; transition: border-color 0.2s; }
    #card-element.StripeElement--focus { border-color: var(--accent, #462CED); box-shadow: 0 0 0 3px rgba(70,44,237,0.1); }
    #card-element.StripeElement--invalid { border-color: #ef4444; }
    #card-errors { color: #ef4444; font-size: 0.82rem; margin-top: 0.4rem; min-height: 1.1em; }

    .pay-button { width: 100%; padding: 0.85rem; background: var(--accent, #462CED); color: #fff; font-family: inherit; font-size: 0.95rem; font-weight: 600; border: none; border-radius: 8px; cursor: pointer; margin-top: 1.25rem; transition: background 0.2s, transform 0.15s; display: flex; align-items: center; justify-content: center; gap: 0.5rem; }
    .pay-button:hover:not(:disabled) { background: #3520c7; transform: translateY(-1px); }
    .pay-button:disabled { opacity: 0.6; cursor: not-allowed; }
    .pay-button .spinner { display: none; width: 18px; height: 18px; border: 2.5px solid rgba(255,255,255,0.3); border-top-color: #fff; border-radius: 50%; animation: spin 0.6s linear infinite; }
    .pay-button.loading .btn-text, .pay-button.loading .lock-icon { display: none; }
    .pay-button.loading .spinner { display: inline-block; }
    @keyframes spin { to { transform: rotate(360deg); } }

    .secure-footer { display: flex; align-items: center; justify-content: center; gap: 0.75rem; margin-top: 1.25rem; padding-top: 1.25rem; border-top: 1px solid #e5e7eb; }
    .secure-footer span { font-size: 0.78rem; color: #6b7280; }
    .secure-footer .stripe-badge { font-weight: 700; color: #635bff; font-size: 0.82rem; }

    /* Success State */
    .payment-success { display: none; text-align: center; background: #fff; border-radius: 12px; padding: 3rem 2.5rem; box-shadow: 0 1px 3px rgba(0,0,0,0.08), 0 4px 12px rgba(0,0,0,0.04); }
    .success-icon { width: 64px; height: 64px; background: rgba(34,197,94,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; }
    .success-icon svg { width: 32px; height: 32px; color: #22c55e; }
    .payment-success h2 { font-size: 1.4rem; margin-bottom: 0.75rem; }
    .payment-success p { color: #6b7280; font-size: 0.95rem; line-height: 1.7; }

    /* Error page */
    .error-page { display: none; text-align: center; background: #fff; border-radius: 12px; padding: 3rem 2.5rem; box-shadow: 0 1px 3px rgba(0,0,0,0.08), 0 4px 12px rgba(0,0,0,0.04); }
    .error-page h2 { font-size: 1.4rem; margin-bottom: 0.5rem; }
    .error-page p { color: #6b7280; font-size: 0.95rem; line-height: 1.7; margin-bottom: 1.5rem; }

    @media (max-width: 620px) {
        .order-summary, .payment-form-card { padding: 1.5rem; }
        .form-grid { grid-template-columns: 1fr; }
    }
</style>

<main id="main-content" class="site-main">
    <section class="payment-page">
        <div class="payment-container">

            <?php if ( ! $tier ) : ?>
                <!-- Invalid / missing tier -->
                <div class="error-page" style="display: block;">
                    <h2>Invalid Link</h2>
                    <p>This payment link is missing a valid assessment package. Please go back and select a package to continue.</p>
                    <a href="<?php echo esc_url( home_url( '/ai-readiness-assessment/#pricing' ) ); ?>" class="button button--primary">View Packages</a>
                </div>
            <?php else : ?>

                <!-- Active Payment Flow -->
                <div id="payment-flow">
                    <div class="order-summary">
                        <div class="order-label">Your Selection</div>
                        <div class="order-tier"><?php echo esc_html( $tier['name'] ); ?></div>
                        <div class="order-product">AI Readiness Assessment</div>
                        <hr class="order-divider" />
                        <div class="order-row">
                            <span class="label">Package</span>
                            <span class="value"><?php echo esc_html( $tier['label'] ); ?></span>
                        </div>
                        <div class="order-row">
                            <span class="label">Type</span>
                            <span class="value">One-time payment</span>
                        </div>
                        <div class="order-total">
                            <span class="label">Total</span>
                            <span class="value">$<?php echo number_format( $tier['price'] ); ?></span>
                        </div>
                        <div class="order-features">
                            <?php foreach ( $tier['features'] as $feature ) : ?>
                                <span class="tag"><?php echo esc_html( $feature ); ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="payment-form-card">
                        <div class="form-title">Payment Details</div>
                        <form id="payment-form">
                            <div class="form-row">
                                <label for="customer-name">Full Name</label>
                                <input type="text" id="customer-name" placeholder="Jane Smith" required />
                            </div>
                            <div class="form-grid">
                                <div class="form-row">
                                    <label for="customer-email">Email</label>
                                    <input type="email" id="customer-email" placeholder="jane@company.com" required />
                                </div>
                                <div class="form-row">
                                    <label for="customer-company">Company</label>
                                    <input type="text" id="customer-company" placeholder="Acme Corp" />
                                </div>
                            </div>
                            <div class="form-row">
                                <label>Card</label>
                                <div id="card-element"></div>
                                <div id="card-errors" role="alert"></div>
                            </div>
                            <button type="submit" class="pay-button" id="pay-button">
                                <svg class="lock-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                                <span class="btn-text">Pay $<?php echo number_format( $tier['price'] ); ?></span>
                                <span class="spinner"></span>
                            </button>
                        </form>
                        <div class="secure-footer">
                            <span>Secured by</span>
                            <span class="stripe-badge">stripe</span>
                        </div>
                    </div>
                </div>

                <!-- Success State -->
                <div class="payment-success" id="payment-success">
                    <div class="success-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                    </div>
                    <h2>Payment Successful!</h2>
                    <p>Thank you for your purchase. A confirmation has been sent to your email. Our team will reach out within 1 business day to schedule your assessment.</p>
                </div>

                <script src="https://js.stripe.com/v3/"></script>
                <script>
                (function() {
                    var STRIPE_PK = '<?php echo esc_js( defined("STRIPE_PUBLISHABLE_KEY") ? STRIPE_PUBLISHABLE_KEY : "" ); ?>';
                    if (!STRIPE_PK) { console.error('Stripe publishable key not configured.'); return; }

                    var tierKey   = '<?php echo esc_js( $tier_key ); ?>';
                    var tierPrice = <?php echo intval( $tier['price'] ); ?>;

                    var stripe = Stripe(STRIPE_PK);
                    var elements = stripe.elements({
                        fonts: [{ cssSrc: 'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600&display=swap' }]
                    });

                    var cardElement = elements.create('card', {
                        style: {
                            base: { fontFamily: "'Plus Jakarta Sans', sans-serif", fontSize: '15px', color: '#1f2937', '::placeholder': { color: '#9ca3af' } },
                            invalid: { color: '#ef4444' }
                        }
                    });
                    cardElement.mount('#card-element');

                    cardElement.on('change', function(event) {
                        document.getElementById('card-errors').textContent = event.error ? event.error.message : '';
                    });

                    document.getElementById('payment-form').addEventListener('submit', async function(e) {
                        e.preventDefault();
                        var payButton = document.getElementById('pay-button');
                        payButton.classList.add('loading');
                        payButton.disabled = true;

                        try {
                            var customerName    = document.getElementById('customer-name').value;
                            var customerEmail   = document.getElementById('customer-email').value;
                            var customerCompany = document.getElementById('customer-company').value;

                            var response = await fetch('/wp-json/ansa/v1/create-payment-intent', {
                                method: 'POST',
                                headers: { 'Content-Type': 'application/json' },
                                body: JSON.stringify({
                                    tier: tierKey,
                                    email: customerEmail,
                                    name: customerName,
                                    company: customerCompany
                                })
                            });

                            var data = await response.json();
                            if (!response.ok) throw new Error(data.message || 'Server error');

                            var result = await stripe.confirmCardPayment(data.clientSecret, {
                                payment_method: {
                                    card: cardElement,
                                    billing_details: { name: customerName, email: customerEmail }
                                }
                            });

                            if (result.error) {
                                document.getElementById('card-errors').textContent = result.error.message;
                                payButton.classList.remove('loading');
                                payButton.disabled = false;
                            } else if (result.paymentIntent.status === 'succeeded') {
                                document.getElementById('payment-flow').style.display = 'none';
                                document.getElementById('payment-success').style.display = 'block';
                            }
                        } catch (err) {
                            document.getElementById('card-errors').textContent = err.message || 'Something went wrong. Please try again.';
                            payButton.classList.remove('loading');
                            payButton.disabled = false;
                        }
                    });
                })();
                </script>

            <?php endif; ?>

        </div>
    </section>
</main>

<?php get_footer(); ?>
