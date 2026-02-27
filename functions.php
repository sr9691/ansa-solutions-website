<?php
/**
 * ANSA Solutions Theme Functions
 *
 * @package ANSA_Solutions
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

define('ANSA_VERSION', '1.0.0');
define('ANSA_THEME_DIR', get_template_directory());
define('ANSA_THEME_URI', get_template_directory_uri());

/**
 * Setup theme features
 */
function ansa_theme_setup() {
    load_theme_textdomain('ansa-solutions', ANSA_THEME_DIR . '/languages');

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    add_theme_support('automatic-feed-links');
    add_theme_support('customize-selective-refresh-widgets');

    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'ansa-solutions'),
        'footer'  => esc_html__('Footer Menu', 'ansa-solutions'),
    ));
}
add_action('after_setup_theme', 'ansa_theme_setup');

/**
 * Fallback primary menu (used when no menu is assigned)
 */
function ansa_primary_menu_fallback() {
    echo '<ul class="primary-nav">';
    echo '<li><a href="' . esc_url(home_url('/')) . '">Home</a></li>';
    echo '<li class="menu-item-has-children">
        <a href="#">Services <span class="dropdown-arrow">▾</span></a>
        <ul class="sub-menu">
            <li><a href="' . esc_url(home_url('/process-automation/')) . '">Process Automation</a></li>
            <li><a href="' . esc_url(home_url('/ai-readiness-assessment/')) . '">AI Readiness Assessment</a></li>
            <li><a href="' . esc_url(home_url('/automation-accelerators/')) . '">Automation Accelerators</a></li>
        </ul>
    </li>';
    echo '<li><a href="' . esc_url(home_url('/case-studies/')) . '">Case Studies</a></li>';
    echo '<li><a href="' . esc_url(home_url('/about/')) . '">About</a></li>';
    echo '<li class="menu-item-contact"><a href="' . esc_url(home_url('/contact/')) . '">Contact</a></li>';
    echo '</ul>';
}

/**
 * Register widget areas
 */
function ansa_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Primary Sidebar', 'ansa-solutions'),
        'id'            => 'primary-sidebar',
        'description'   => esc_html__('Main sidebar for pages and posts', 'ansa-solutions'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer Widget Area 1', 'ansa-solutions'),
        'id'            => 'footer-1',
        'description'   => esc_html__('First footer widget area', 'ansa-solutions'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer Widget Area 2', 'ansa-solutions'),
        'id'            => 'footer-2',
        'description'   => esc_html__('Second footer widget area', 'ansa-solutions'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer Widget Area 3', 'ansa-solutions'),
        'id'            => 'footer-3',
        'description'   => esc_html__('Third footer widget area', 'ansa-solutions'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'ansa_widgets_init');

/**
 * Enqueue styles and scripts
 */
function ansa_enqueue_scripts() {
    wp_enqueue_style('google-fonts-pjs', 'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap', array(), null);
    wp_enqueue_style('google-fonts-inter', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap', array(), null);

    $css_ver = file_exists(ANSA_THEME_DIR . '/style.css') ? filemtime(ANSA_THEME_DIR . '/style.css') : ANSA_VERSION;
    wp_enqueue_style('ansa-theme-style', ANSA_THEME_URI . '/style.css', array('google-fonts-pjs', 'google-fonts-inter'), $css_ver);

    /* Style the last primary nav item (Contact) as a button */
    $nav_btn_css = '
        .primary-nav > li:last-child > a {
            background: var(--accent, #462CED);
            color: #fff !important;
            padding: 10px 28px !important;
            border-radius: 8px;
            font-weight: 600;
            transition: background 0.2s ease, transform 0.2s ease;
        }
        .primary-nav > li:last-child > a:hover {
            background: #3520c7;
            transform: translateY(-1px);
            color: #fff !important;
        }
    ';
    wp_add_inline_style('ansa-theme-style', $nav_btn_css);

    if (file_exists(ANSA_THEME_DIR . '/assets/js/main.js')) {
        wp_enqueue_script('ansa-theme-script', ANSA_THEME_URI . '/assets/js/main.js', array('jquery'), ANSA_VERSION, true);
    }

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    wp_localize_script('ansa-theme-script', 'ansaTheme', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce'   => wp_create_nonce('ansa-nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'ansa_enqueue_scripts');

/**
 * Add GA4 tracking code to head
 */
function ansa_add_google_analytics() {
    $ga_id = 'G-8M27VDXHXD';
    if (empty($ga_id)) {
        return;
    }
    ?>
    <!-- Google Analytics 4 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo esc_attr($ga_id); ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '<?php echo esc_js($ga_id); ?>', {
            'anonymize_ip': true,
            'allow_google_signals': false,
        });
    </script>
    <?php
}
add_action('wp_head', 'ansa_add_google_analytics', 10);

/**
 * Helper function to get Stripe checkout URL placeholder
 */
function ansa_get_stripe_checkout_url($product_id = '') {
    $base_url = 'https://checkout.stripe.com/pay/';

    if (empty($product_id)) {
        return $base_url;
    }

    return $base_url . sanitize_text_field($product_id);
}

/**
 * Helper function to output HubSpot form embed placeholder
 */
function ansa_hubspot_form_embed($portal_id = '', $form_id = '') {
    if (empty($portal_id) || empty($form_id)) {
        return;
    }

    $portal_id = sanitize_text_field($portal_id);
    $form_id = sanitize_text_field($form_id);
    ?>
    <div class="hubspot-form-wrapper">
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
        <script>
            hbspt.forms.create({
                region: "na1",
                portalId: "<?php echo esc_js($portal_id); ?>",
                formId: "<?php echo esc_js($form_id); ?>"
            });
        </script>
    </div>
    <?php
}

/**
 * Custom admin styles
 */
function ansa_admin_styles() {
    echo '<style>
        :root {
            --primary: #374151;
            --accent: #462CED;
        }
        .wp-admin .wp-menu-image {
            filter: brightness(1.2);
        }
    </style>';
}
add_action('admin_head', 'ansa_admin_styles');

/**
 * Custom excerpt length
 */
function ansa_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'ansa_excerpt_length');

/**
 * Custom excerpt more
 */
function ansa_excerpt_more($more) {
    return ' ...';
}
add_filter('excerpt_more', 'ansa_excerpt_more');

/**
 * Add body classes
 */
function ansa_body_classes($classes) {
    if (is_front_page()) {
        $classes[] = 'home-page';
    }

    if (is_page_template('template-services.php')) {
        $classes[] = 'services-page';
    }

    return $classes;
}
add_filter('body_class', 'ansa_body_classes');

/**
 * Disable XML-RPC if not needed
 */
add_filter('xmlrpc_enabled', '__return_false');

/**
 * Remove unnecessary header elements
 */
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rest_output_link_wp_head');

/**
 * Add custom image sizes
 */
add_image_size('ansa-hero', 1400, 600, true);
add_image_size('ansa-card', 400, 300, true);
add_image_size('ansa-thumbnail', 300, 200, true);
add_image_size('ansa-featured', 800, 450, true);

/**
 * Disable comments if not needed
 */
function ansa_disable_comments() {
    return false;
}

/**
 * Sanitize user input
 */
function ansa_sanitize_text_input($input) {
    return sanitize_text_field($input);
}

/**
 * Clean HTML output
 */
function ansa_kses_allowed_html() {
    return array(
        'p'      => array('class' => array()),
        'span'   => array('class' => array()),
        'div'    => array('class' => array()),
        'strong' => array(),
        'em'     => array(),
        'a'      => array('href' => array(), 'title' => array(), 'target' => array(), 'rel' => array()),
        'img'    => array('src' => array(), 'alt' => array(), 'class' => array()),
        'br'     => array(),
    );
}

/**
 * Get template part with context
 */
function ansa_get_template_part($slug, $name = null, $args = array()) {
    if (!empty($args)) {
        extract($args);
    }

    $templates = array();

    if (isset($name)) {
        $templates[] = "{$slug}-{$name}.php";
    }

    $templates[] = "{$slug}.php";

    $template = locate_template($templates);

    if (!$template) {
        return;
    }

    include $template;
}

/**
 * Enqueue admin scripts and styles
 */
function ansa_admin_enqueue_scripts() {
    wp_enqueue_style('google-fonts-pjs', 'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap');
}
add_action('admin_enqueue_scripts', 'ansa_admin_enqueue_scripts');

/**
 * Register REST API routes if needed
 */
function ansa_register_rest_routes() {
    register_rest_route('ansa/v1', '/contact', array(
        'methods'             => 'POST',
        'callback'            => 'ansa_contact_form_handler',
        'permission_callback' => '__return_true',
        'args'                => array(
            'name'    => array(
                'required'          => true,
                'sanitize_callback' => 'sanitize_text_field',
            ),
            'email'   => array(
                'required'          => true,
                'sanitize_callback' => 'sanitize_email',
            ),
            'message' => array(
                'required'          => true,
                'sanitize_callback' => 'sanitize_textarea_field',
            ),
        ),
    ));
}
add_action('rest_api_init', 'ansa_register_rest_routes');

/**
 * Handle contact form submission
 */
function ansa_contact_form_handler($request) {
    $params = $request->get_json_params();

    $name    = isset($params['name']) ? sanitize_text_field($params['name']) : '';
    $email   = isset($params['email']) ? sanitize_email($params['email']) : '';
    $message = isset($params['message']) ? sanitize_textarea_field($params['message']) : '';

    if (empty($name) || empty($email) || empty($message)) {
        return new WP_REST_Response(array(
            'success' => false,
            'message' => 'Missing required fields.',
        ), 400);
    }

    $to      = get_option('admin_email');
    $subject = 'New Contact Form Submission from ' . $name;
    $body    = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = array('Content-Type: text/plain; charset=UTF-8', "From: $email");

    $mail_sent = wp_mail($to, $subject, $body, $headers);

    if ($mail_sent) {
        return new WP_REST_Response(array(
            'success' => true,
            'message' => 'Your message has been sent successfully.',
        ), 200);
    } else {
        return new WP_REST_Response(array(
            'success' => false,
            'message' => 'Failed to send message. Please try again.',
        ), 500);
    }
}

/**
 * Disable auto-updates for development
 */
if (defined('WP_ENVIRONMENT_TYPE') && WP_ENVIRONMENT_TYPE === 'development') {
    define('AUTOMATIC_UPDATER_DISABLED', true);
}

/**
 * Get social links
 */
function ansa_get_social_links() {
    return array(
        'linkedin' => 'https://www.linkedin.com/company/ansa-solutions/?viewAsMember=true',
    );
}

/**
 * Logged in user check
 */
function ansa_is_user_logged_in() {
    return is_user_logged_in();
}

/**
 * Get primary color
 */
function ansa_primary_color() {
    return '#374151';
}

/**
 * Get accent color
 */
function ansa_accent_color() {
    return '#462CED';
}

/**
 * Theme updater would go here if needed
 */

/**
 * Cleanup and performance optimizations
 */
add_filter('use_default_gallery_style', '__return_false');
add_filter('auto_plugin_update_send_email', '__return_false');
add_filter('auto_theme_update_send_email', '__return_false');
add_filter('auto_core_update_send_email', '__return_false');

/**
 * ──────────────────────────────────────────────
 * Stripe Payment Integration (SDK-free)
 * Uses WordPress wp_remote_post() — no Composer needed
 * ──────────────────────────────────────────────
 */

/**
 * Valid assessment tiers (single source of truth)
 */
function ansa_get_assessment_tiers() {
    return array(
        'essentials' => array( 'label' => 'Essentials', 'price' => 1500 ),
        'standard'   => array( 'label' => 'Standard',   'price' => 2500 ),
        'premium'    => array( 'label' => 'Premium',    'price' => 3000 ),
    );
}

/**
 * Register Stripe REST routes
 */
function ansa_register_stripe_routes() {
    register_rest_route( 'ansa/v1', '/create-payment-intent', array(
        'methods'             => 'POST',
        'callback'            => 'ansa_create_payment_intent',
        'permission_callback' => '__return_true',
    ));

    register_rest_route( 'ansa/v1', '/stripe-webhook', array(
        'methods'             => 'POST',
        'callback'            => 'ansa_stripe_webhook_handler',
        'permission_callback' => '__return_true',
    ));
}
add_action( 'rest_api_init', 'ansa_register_stripe_routes' );

/**
 * Create a Stripe PaymentIntent via the REST API (no SDK)
 */
function ansa_create_payment_intent( $request ) {
    $secret_key = defined( 'STRIPE_SECRET_KEY' ) ? STRIPE_SECRET_KEY : '';
    if ( empty( $secret_key ) ) {
        return new WP_REST_Response( array(
            'success' => false,
            'message' => 'Stripe is not configured. Please contact support.',
        ), 500 );
    }

    $params   = $request->get_json_params();
    $tier_key = strtolower( trim( $params['tier'] ?? '' ) );
    $email    = sanitize_email( $params['email'] ?? '' );
    $name     = sanitize_text_field( $params['name'] ?? '' );
    $company  = sanitize_text_field( $params['company'] ?? '' );

    $tiers = ansa_get_assessment_tiers();
    if ( ! isset( $tiers[ $tier_key ] ) ) {
        return new WP_REST_Response( array(
            'success' => false,
            'message' => 'Invalid assessment tier.',
        ), 400 );
    }

    $tier   = $tiers[ $tier_key ];
    $amount = $tier['price'] * 100; // cents

    $response = wp_remote_post( 'https://api.stripe.com/v1/payment_intents', array(
        'headers' => array(
            'Authorization' => 'Bearer ' . $secret_key,
            'Content-Type'  => 'application/x-www-form-urlencoded',
        ),
        'body' => array(
            'amount'               => $amount,
            'currency'             => 'usd',
            'description'          => 'AI Readiness Assessment — ' . $tier['label'],
            'receipt_email'        => $email,
            'metadata[tier]'       => $tier_key,
            'metadata[name]'       => $name,
            'metadata[email]'      => $email,
            'metadata[company]'    => $company,
        ),
        'timeout' => 30,
    ));

    if ( is_wp_error( $response ) ) {
        return new WP_REST_Response( array(
            'success' => false,
            'message' => 'Payment service unavailable. Please try again.',
        ), 500 );
    }

    $body = json_decode( wp_remote_retrieve_body( $response ), true );
    $code = wp_remote_retrieve_response_code( $response );

    if ( $code !== 200 || empty( $body['client_secret'] ) ) {
        $err_msg = isset( $body['error']['message'] ) ? $body['error']['message'] : 'Payment failed.';
        return new WP_REST_Response( array(
            'success' => false,
            'message' => $err_msg,
        ), $code >= 400 ? $code : 500 );
    }

    return new WP_REST_Response( array(
        'success'      => true,
        'clientSecret' => $body['client_secret'],
    ), 200 );
}

/**
 * Handle Stripe webhook events (SDK-free signature verification)
 */
function ansa_stripe_webhook_handler( $request ) {
    $secret_key = defined( 'STRIPE_SECRET_KEY' ) ? STRIPE_SECRET_KEY : '';
    $webhook_secret = defined( 'STRIPE_WEBHOOK_SECRET' ) ? STRIPE_WEBHOOK_SECRET : '';

    if ( empty( $secret_key ) || empty( $webhook_secret ) ) {
        return new WP_REST_Response( array( 'error' => 'Stripe not configured' ), 500 );
    }

    $payload = $request->get_body();
    $sig_header = $request->get_header( 'stripe-signature' );

    // Parse signature header
    $sig_parts = array();
    foreach ( explode( ',', $sig_header ) as $part ) {
        $kv = explode( '=', trim( $part ), 2 );
        if ( count( $kv ) === 2 ) {
            $sig_parts[ $kv[0] ] = $kv[1];
        }
    }

    $timestamp = isset( $sig_parts['t'] ) ? $sig_parts['t'] : '';
    $signature = isset( $sig_parts['v1'] ) ? $sig_parts['v1'] : '';

    if ( empty( $timestamp ) || empty( $signature ) ) {
        return new WP_REST_Response( array( 'error' => 'Invalid signature' ), 400 );
    }

    // Verify signature
    $signed_payload  = $timestamp . '.' . $payload;
    $expected_sig    = hash_hmac( 'sha256', $signed_payload, $webhook_secret );

    if ( ! hash_equals( $expected_sig, $signature ) ) {
        return new WP_REST_Response( array( 'error' => 'Invalid signature' ), 400 );
    }

    // Reject old events (5 min tolerance)
    if ( abs( time() - intval( $timestamp ) ) > 300 ) {
        return new WP_REST_Response( array( 'error' => 'Timestamp too old' ), 400 );
    }

    $event = json_decode( $payload, true );

    if ( isset( $event['type'] ) && $event['type'] === 'payment_intent.succeeded' ) {
        $intent   = $event['data']['object'];
        $metadata = isset( $intent['metadata'] ) ? $intent['metadata'] : array();

        error_log( sprintf(
            '[ANSA Stripe] Payment succeeded: %s | Tier: %s | Email: %s | Company: %s | Amount: $%s',
            $intent['id'],
            $metadata['tier'] ?? 'unknown',
            $metadata['email'] ?? 'unknown',
            $metadata['company'] ?? 'n/a',
            number_format( $intent['amount'] / 100, 2 )
        ));

        $admin_email = get_option( 'admin_email' );
        $subject     = 'New AI Readiness Payment — ' . ucfirst( $metadata['tier'] ?? 'Unknown' );
        $body        = sprintf(
            "New payment received!\n\nTier: %s\nAmount: $%s\nName: %s\nEmail: %s\nCompany: %s\nStripe ID: %s",
            ucfirst( $metadata['tier'] ?? 'Unknown' ),
            number_format( $intent['amount'] / 100, 2 ),
            $metadata['name'] ?? 'N/A',
            $metadata['email'] ?? 'N/A',
            $metadata['company'] ?? 'N/A',
            $intent['id']
        );
        wp_mail( $admin_email, $subject, $body );
    }

    return new WP_REST_Response( array( 'received' => true ), 200 );
}