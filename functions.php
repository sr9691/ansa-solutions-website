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
    echo '<li class="menu-item-has-children">';
    echo '<a href="#">Services <span class="dropdown-arrow">▾</span></a>';
    echo '<ul class="sub-menu">';
    echo '<li><a href="' . esc_url(home_url('/process-automation/')) . '">Process Automation</a></li>';
    echo '<li><a href="' . esc_url(home_url('/ai-readiness-assessment/')) . '">AI Readiness Assessment</a></li>';
    echo '<li><a href="' . esc_url(home_url('/automation-accelerators/')) . '">Automation Accelerators</a></li>';
    echo '</ul>';
    echo '</li>';
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
    $secret_key     = defined( 'STRIPE_SECRET_KEY' ) ? STRIPE_SECRET_KEY : '';
    $webhook_secret = defined( 'STRIPE_WEBHOOK_SECRET' ) ? STRIPE_WEBHOOK_SECRET : '';

    if ( empty( $secret_key ) || empty( $webhook_secret ) ) {
        return new WP_REST_Response( array( 'error' => 'Stripe not configured' ), 500 );
    }

    $payload    = $request->get_body();
    $sig_header = $request->get_header( 'stripe-signature' );

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

    $signed_payload = $timestamp . '.' . $payload;
    $expected_sig   = hash_hmac( 'sha256', $signed_payload, $webhook_secret );

    if ( ! hash_equals( $expected_sig, $signature ) ) {
        return new WP_REST_Response( array( 'error' => 'Invalid signature' ), 400 );
    }

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

/**
 * ──────────────────────────────────────────────
 * Claude AI Search Proxy (for Automation Accelerators page)
 * Requires ANTHROPIC_API_KEY defined in wp-config.php
 * ──────────────────────────────────────────────
 */
function ansa_claude_search_system_prompt() {
    return <<<'SYSTEM'
You are a search assistant for ANSA Solutions' AI automation accelerator catalog. Your job is to match a user's plain-English query to the most relevant accelerators.

Matching philosophy:
- Match on the PROBLEM being solved, not just keywords
- Understand intent: "my invoices take forever" → Invoice Automation Engine; "reps walk in blind" → Pre-Call Intelligence Brief; "we keep losing deals and don't know why" → Pipeline Health Sentinel
- Match synonyms and related concepts: "chasing" = follow-up, "drowning in" = volume problem, "falling through cracks" = tracking/alerts, "take too long" = automation opportunity
- Be inclusive: if in doubt, include it — a false positive is better than a miss
- Rank by relevance, closest match first
- Target: 90%+ of real user queries should return at least one match

Output rules:
- Return ONLY a raw JSON array of matching accelerator IDs
- Example: ["ac-finance-1","ac-revops-3","ac-ops-2"]
- No explanation, no markdown, no code fences, no commentary
- Empty array [] only if the query is completely unrelated to business automation

---

ACCELERATOR CATALOG:

## DEPARTMENT ACCELERATORS

### Meeting Intelligence Engine (For All Teams)

ID: ac-meeting-1 | Meeting Capture Hub
Solves: "our meeting notes are scattered everywhere", "I can't find what was discussed last month", "recordings just sit in Zoom and nobody uses them", "we lose context between meetings"
What it does: Automatically pulls transcripts from Zoom, Teams, Fireflies, Otter, Fathom, and tl;dv into a single searchable repository the moment a meeting ends.
Tools: Zoom, MS Teams, Fireflies.ai, Otter.ai, Fathom, tl;dv

ID: ac-meeting-2 | Attendee Intelligence Sync
Solves: "meeting attendees never get logged in our CRM", "reps forget to add contacts after calls", "we don't know who we've met from each account", "our CRM contact data is always out of date"
What it does: Parses meeting participants and maps them to existing CRM contacts, creating new records when no match is found.
Tools: HubSpot, Salesforce, Pipedrive, Zoho CRM

ID: ac-meeting-3 | Smart Meeting Digest
Solves: "nobody reads the full transcript", "action items get lost after meetings", "we need a summary but don't have time to write one", "I need to know the sentiment from customer calls"
What it does: Generates structured summaries with key topics, sentiment signals, and action items automatically tagged for downstream use.
Tools: Fireflies.ai, Otter.ai, Fathom, Notion, Google Drive

ID: ac-meeting-4 | Conversation Context Linker
Solves: "I need the full picture before a call but have to dig through emails and notes separately", "can't connect what was said in meetings to what was promised over email", "too much context switching before customer interactions"
What it does: Links meeting transcripts to related email threads, giving teams full context without manual research.
Tools: Gmail, Outlook, HubSpot, Salesforce

ID: ac-meeting-5 | Institutional Memory Builder
Solves: "institutional knowledge walks out the door when someone leaves", "we keep having the same conversations because nobody can find past decisions", "new hires take months to get up to speed", "I can't find that conversation we had three months ago"
What it does: Builds a persistent, queryable index of all conversation history so any team member can surface relevant past discussions in seconds.
Tools: Notion, Confluence, Google Drive, SharePoint, Slack

---

### Revenue Operations (For Sales & Revenue Leaders)

ID: ac-revops-1 | Pre-Call Intelligence Brief
Solves: "reps walk into calls unprepared", "we don't know what's changed at an account before a meeting", "sales team wastes 30 min researching before every call", "missed context costs us deals"
What it does: Assembles a pre-meeting briefing from CRM history, recent news, and open opportunities so reps walk in fully informed.
Tools: HubSpot, Salesforce, LinkedIn Sales Nav, Apollo.io, Gmail

ID: ac-revops-2 | Commitment Capture Engine
Solves: "action items from sales calls never get logged", "reps forget to update the CRM after meetings", "we lose track of what we promised prospects", "follow-through is inconsistent across the team"
What it does: Captures action items, next steps, and commitments from meeting transcripts and logs them directly into the CRM.
Tools: HubSpot, Salesforce, Fireflies.ai, Asana, Notion

ID: ac-revops-3 | Pipeline Health Sentinel
Solves: "deals go quiet and we don't catch it until it's too late", "pipeline looks healthy but deals are actually stalling", "we don't have visibility into which deals are at risk", "reps are too optimistic about their forecast"
What it does: Continuously evaluates open deals against engagement signals and pipeline velocity, alerting reps when a deal shows signs of stalling.
Tools: HubSpot, Salesforce, Pipedrive, Slack

ID: ac-revops-4 | Prospect Data Enricher
Solves: "new leads come in with almost no information", "reps waste time researching every new lead manually", "we don't know if a lead is worth pursuing until we've already spent time on them", "our CRM data is always incomplete"
What it does: Automatically enriches new leads with firmographic, technographic, and intent data the moment they enter the CRM.
Tools: HubSpot, Salesforce, Apollo.io, Clearbit, ZoomInfo

ID: ac-revops-5 | Revenue Signal Scorer
Solves: "reps treat all leads the same and waste time on bad ones", "we don't know which inbound leads to call first", "marketing sends leads but sales doesn't know who's hot", "conversion rate is low because we're not prioritizing right"
What it does: Scores inbound leads in real time based on fit and behavior signals, surfacing the highest-priority prospects for immediate follow-up.
Tools: HubSpot, Salesforce, Marketo, ActiveCampaign

ID: ac-revops-6 | Battlecard Intelligence Engine
Solves: "reps don't know how to handle competitor objections", "our battlecards are always out of date", "we keep losing to the same competitors for the same reasons", "sales team is caught off guard when competitors come up on calls"
What it does: Monitors competitor activity and automatically updates sales battlecards with fresh positioning and objection-handling guidance.
Tools: Notion, Confluence, Crayon, Klue, G2

---

### Customer Success (For Customer Success Leaders)

ID: ac-cs-1 | Account Health Radar
Solves: "we find out a customer is unhappy only when they cancel", "no visibility into which accounts are at risk", "CSMs are managing too many accounts to watch all of them", "product usage is dropping and nobody noticed"
What it does: Aggregates product usage, support history, and engagement data into a real-time health score with automated alerts when a customer's trajectory turns negative.
Tools: HubSpot, Gainsight, ChurnZero, Zendesk, Mixpanel

ID: ac-cs-2 | Renewal Risk Sentinel
Solves: "we've missed renewals because nobody was tracking the dates", "renewals sneak up on us and we don't have time to prepare", "customers let contracts lapse because outreach was too late", "our renewal process is reactive not proactive"
What it does: Tracks contract renewal dates and triggers timely, personalized outreach sequences so no renewal falls through the cracks.
Tools: HubSpot, Salesforce, Gainsight, Gmail, Outlook

ID: ac-cs-3 | Account Context Digest
Solves: "CSMs spend an hour getting up to speed before every customer call", "new CSM taking over an account has no idea what's happened", "too much history to read through before a QBR", "we lose context on accounts all the time"
What it does: Distills weeks of emails, calls, and tickets into a concise account summary, giving CSMs instant context before any customer interaction.
Tools: HubSpot, Gmail, Zendesk, Fireflies.ai

ID: ac-cs-4 | Quarterly Review Builder
Solves: "QBR decks take hours to build manually", "we pull data from 5 different tools every quarter", "our QBRs don't feel personalized", "we're always scrambling the day before a quarterly review"
What it does: Automatically compiles usage stats, milestone progress, support trends, and ROI metrics into a ready-to-present QBR deck.
Tools: Gainsight, Salesforce, Google Slides, Mixpanel, Zendesk

ID: ac-cs-5 | Churn Early Warning System
Solves: "customers churn and we're always surprised", "we only find out there's a problem after they've already decided to leave", "support escalations aren't getting flagged to the right people fast enough", "usage drops aren't being caught in time"
What it does: Detects early churn signals from usage drop-offs, sentiment shifts, and support escalations, triggering proactive save workflows before it's too late.
Tools: Gainsight, ChurnZero, Zendesk, Slack

---

### Finance & Procurement (For Finance Leaders)

ID: ac-finance-1 | Invoice Automation Engine
Solves: "invoices take forever to get approved", "AP team is drowning in manual data entry", "we're paying late fees because the approval process is too slow", "invoices get lost in email threads", "our payment cycle is weeks longer than it should be"
What it does: Extracts, validates, and routes incoming invoices for approval automatically, reducing manual data entry and accelerating payment cycles.
Tools: QuickBooks, Xero, NetSuite, Sage, Bill.com, SAP

ID: ac-finance-2 | Expense Policy Enforcer
Solves: "employees are submitting out-of-policy expenses and nobody catches them", "expense reports take too long to review manually", "we find policy violations weeks after the fact", "finance spends days reviewing expense reports"
What it does: Scans submitted expenses against policy rules and flags anomalies for review, reducing errors and out-of-policy spend.
Tools: Expensify, Concur, Ramp, Brex, QuickBooks

ID: ac-finance-3 | Vendor Contract Sentinel
Solves: "we got hit with an auto-renewal we didn't want", "vendor contracts expire without anyone noticing", "we're paying for software nobody uses because the renewal slipped through", "no central view of what contracts are coming up"
What it does: Tracks vendor contracts for upcoming renewals, auto-renewal clauses, and spend thresholds, alerting stakeholders in time to act.
Tools: DocuSign, PandaDoc, Ironclad, Google Drive, SharePoint

ID: ac-finance-4 | Cash Flow Early Warning
Solves: "we've been caught off guard by cash shortfalls", "no early warning when cash flow is going to be tight", "leadership doesn't know the cash position until it's a problem", "receivables are slow and it's affecting operations"
What it does: Monitors receivables and payables in real time, sending proactive alerts when cash flow is projected to fall below defined thresholds.
Tools: QuickBooks, Xero, NetSuite, Stripe, Slack

ID: ac-finance-5 | Close Orchestration Engine
Solves: "month-end close is chaotic and always runs late", "tasks fall through the cracks and delay the close", "we don't know what's blocking the close until it's urgent", "the same people have to be chased every single month"
What it does: Automates orchestration of month-end close tasks, notifying owners, tracking completion, and escalating blockers to keep the close on schedule.
Tools: QuickBooks, Xero, NetSuite, Asana, Notion, Slack

---

### Marketing (For Marketing Leaders)

ID: ac-mktg-1 | Content Multiplier Engine
Solves: "we write one blog post and it just sits there", "our social channels are starved for content", "repurposing content takes as long as creating it", "we have a content library nobody is using across channels"
What it does: Transforms a single long-form asset into social posts, email snippets, and ad copy, automatically formatted per channel.
Tools: WordPress, HubSpot CMS, Buffer, Hootsuite, Mailchimp

ID: ac-mktg-2 | Campaign Intelligence Digest
Solves: "pulling a campaign report takes half a day", "leadership wants a weekly update but the data is in five tools", "we can't see the full picture of campaign performance in one place", "too much time spent on reporting, not enough on strategy"
What it does: Aggregates cross-channel campaign metrics and delivers a plain-language executive summary with highlights and recommended actions.
Tools: Google Analytics, HubSpot, Meta Ads, Google Ads, Databox

ID: ac-mktg-3 | SEO Content Brief Builder
Solves: "writers don't know what to include to rank for a keyword", "our content isn't competitive because briefs are weak", "SEO research takes too long before we even start writing", "we're publishing content that doesn't rank"
What it does: Analyzes target keywords and competitor content to produce a structured SEO brief, ready for a writer or AI content tool to execute.
Tools: Ahrefs, SEMrush, Moz, Google Search Console, Notion

ID: ac-mktg-4 | Competitive Intelligence Feed
Solves: "we find out about competitor moves too late", "no systematic way to track what competitors are doing", "our positioning feels stale because we're not watching the market", "sales team gets caught off guard by competitor announcements"
What it does: Monitors competitor websites, press releases, and review sites, delivering a weekly digest of positioning changes and sentiment shifts.
Tools: Google Alerts, Crayon, Klue, G2, Slack

ID: ac-mktg-5 | Persona Message Engine
Solves: "our messaging feels generic and doesn't convert", "we know we have different buyer types but send everyone the same thing", "writing persona-specific copy takes too long to scale", "email campaigns underperform because the message isn't tailored"
What it does: Generates tailored messaging variations for each buyer persona using CRM segmentation data and approved brand voice guidelines.
Tools: HubSpot, Salesforce, Marketo, ActiveCampaign, Notion

---

### HR & People Ops (For HR Leaders)

ID: ac-hr-1 | Job Description Builder
Solves: "writing JDs takes forever and they end up inconsistent", "hiring managers submit intake forms and nothing happens fast", "our job postings have bias we haven't caught", "we rewrite the same roles from scratch every time"
What it does: Produces structured, bias-reviewed job descriptions from a hiring manager intake form — consistent, on-brand, and ready to post in minutes.
Tools: Greenhouse, Lever, Workday, BambooHR, LinkedIn Jobs

ID: ac-hr-2 | Candidate Shortlist Engine
Solves: "we're drowning in applications and can't screen them fast enough", "it takes days to get a shortlist to a hiring manager", "screening is inconsistent across different recruiters", "good candidates slip through because volume is too high"
What it does: Evaluates inbound applications against role criteria and delivers a ranked shortlist with a concise rationale for each candidate.
Tools: Greenhouse, Lever, Workday, BambooHR, Rippling

ID: ac-hr-3 | New Hire Orchestrator
Solves: "new hires show up and their laptop isn't ready", "onboarding tasks fall through the cracks across IT, HR, and the manager", "every new hire has a different onboarding experience", "we have a checklist but nobody follows it"
What it does: Automatically triggers and tracks all onboarding tasks across IT, HR, and the hiring team the moment an offer is accepted.
Tools: BambooHR, Rippling, Workday, Asana, Slack

ID: ac-hr-4 | Workforce Sentiment Radar
Solves: "we do pulse surveys but nobody has time to read the open-text responses", "leadership wants to know how people are feeling but the data is raw", "we're missing themes in employee feedback", "engagement issues surface too late"
What it does: Processes pulse survey responses and open-text feedback into structured theme reports for leadership.
Tools: Lattice, Culture Amp, Leapsome, SurveyMonkey, Typeform

ID: ac-hr-5 | HR Policy Assistant
Solves: "HR gets the same questions about PTO and benefits every week", "employees don't know where to find policy docs", "HR spends too much time answering routine questions", "new hires are constantly asking about the same policies"
What it does: Answers employee questions about PTO, benefits, and compliance policies instantly using existing HR documentation as the knowledge source.
Tools: Slack, MS Teams, Notion, Confluence, BambooHR

---

### Operations (For Operations Leaders)

ID: ac-ops-1 | Supplier Intelligence Scorecard
Solves: "we have no objective way to evaluate vendors", "supplier reviews are based on gut feel, not data", "we don't know which vendors are consistently underperforming", "procurement decisions are made without a performance baseline"
What it does: Aggregates delivery, quality, and SLA data across vendors into a regularly updated scorecard, making supplier reviews faster and more objective.
Tools: QuickBooks, NetSuite, SAP, Google Sheets, Notion

ID: ac-ops-2 | Process Documentation Engine
Solves: "our processes only exist in people's heads", "we can't scale because nothing is documented", "every time someone leaves we lose their process knowledge", "our SOPs are outdated and nobody updates them"
What it does: Converts process recordings, meeting transcripts, or written notes into structured, version-controlled SOPs ready for team distribution.
Tools: Notion, Confluence, Google Docs, Loom, Fireflies.ai

ID: ac-ops-3 | Decision-to-Action Converter
Solves: "we leave meetings with decisions made but no one tracks who does what", "action items from standups never make it into the project tool", "things fall through the cracks between meetings", "we have great meetings but poor follow-through"
What it does: Extracts decisions and action items from meeting transcripts and pushes them into your project management tool with owners and due dates.
Tools: Asana, Monday.com, Jira, ClickUp, Fireflies.ai

ID: ac-ops-4 | Project Pulse Digest
Solves: "leadership asks for a status update and it takes 2 hours to compile", "project managers spend more time reporting than managing", "no one knows the current state of all active projects without a meeting", "weekly status emails are always incomplete"
What it does: Pulls task completion data from project tools and generates a concise weekly status report formatted for leadership.
Tools: Asana, Monday.com, Jira, ClickUp, Notion, Slack

ID: ac-ops-5 | Inventory Threshold Sentinel
Solves: "we run out of stock before anyone notices", "purchase requests are always reactive not proactive", "stockouts are hurting operations or sales", "reordering is manual and dependent on someone remembering to check"
What it does: Monitors inventory levels against reorder thresholds and triggers purchase requests automatically when stock falls below target levels.
Tools: QuickBooks, NetSuite, Shopify, Square, Cin7, Fishbowl

---

### Legal & Compliance (For Legal & Compliance Leaders)

ID: ac-legalcomp-1 | Redline Intelligence Digest
Solves: "legal spends hours reading through redlined contracts before they can respond", "we can't triage which redlines need attention first", "counterparty changes are buried in long documents", "response times on contract reviews are too slow"
What it does: Reads incoming redlined contracts and produces a structured summary of changes by clause category so legal can triage and respond faster.
Tools: DocuSign, PandaDoc, Ironclad, MS Word, Google Docs

ID: ac-legalcomp-2 | Contract Clause Extractor
Solves: "we can't quickly find what's in a specific contract", "we've been surprised by clauses we forgot were in old agreements", "building a contract summary takes hours of manual review", "no searchable record of what's been agreed to across vendors and partners"
What it does: Extracts key clauses from agreements and stores them in a structured, searchable format for easy reference.
Tools: DocuSign, PandaDoc, Ironclad, Notion, Airtable

ID: ac-legalcomp-3 | Regulatory Change Sentinel
Solves: "we find out about regulatory changes too late", "no systematic way to track rule changes in our industry", "compliance team is always playing catch-up", "we rely on consultants to tell us about regulatory updates"
What it does: Tracks regulatory feeds and industry publications for relevant rule changes, delivering a prioritized alert with an impact summary.
Tools: Google Alerts, RSS Feeds, LexisNexis, Thomson Reuters, Slack

ID: ac-legalcomp-4 | Compliance Policy Assistant
Solves: "employees ask the same compliance questions repeatedly", "teams don't know where to find the right policy docs", "compliance team spends too much time answering routine questions", "policy knowledge is locked in PDFs nobody reads"
What it does: Answers internal questions about compliance policies and regulatory requirements by querying approved policy documentation.
Tools: Slack, MS Teams, Notion, Confluence, Google Drive

ID: ac-legalcomp-5 | Audit Trail Compiler
Solves: "preparing for an audit takes weeks of manual log pulling", "we can't quickly prove who approved what and when", "audit requests are always stressful because the data is scattered", "we don't have a clean record of access and approval history"
What it does: Compiles activity logs, approval records, and access histories into a formatted audit trail report ready for internal review or external examination.
Tools: Google Workspace, Microsoft 365, Okta, DocuSign, NetSuite

---

## INDUSTRY ACCELERATORS

### Professional Services (Consulting, Accounting & Advisory)

ID: ac-ps-1 | Engagement Launch Engine
Solves: "new client onboarding is chaotic after a contract is signed", "kickoff prep takes days of manual assembly", "team members don't know their roles on new engagements", "clients get a poor first impression because onboarding is disorganized"
What it does: Automatically assembles a new client onboarding package the moment a contract is signed, covering scope summary, team assignments, milestones, and document checklist.
Tools: HubSpot, Salesforce, DocuSign, Asana, Monday.com, Notion

ID: ac-ps-2 | Utilization Health Monitor
Solves: "we only find out utilization is low at the end of the month", "consultants forget to log hours and it throws off billing", "we don't know which projects are over- or under-resourced until it's too late", "billing cycle surprises because timesheets weren't tracked"
What it does: Tracks billable hours logged per project and per consultant, alerting managers when utilization rates drift outside target thresholds before the billing cycle closes.
Tools: Harvest, Toggl Track, BQE Core, QuickBooks Time, Deltek

ID: ac-ps-3 | Proposal Intelligence Engine
Solves: "proposals take too long to write and feel repetitive", "we're recreating the wheel on every RFP response", "discovery call notes don't make it into the proposal", "proposal quality varies too much across the team"
What it does: Drafts a customized client proposal from a discovery call transcript and CRM data, pulling in relevant case studies, service descriptions, and pricing templates automatically.
Tools: HubSpot, Salesforce, Fireflies.ai, PandaDoc, Google Docs

ID: ac-ps-4 | Deliverable Risk Tracker
Solves: "deliverables slip and we don't catch it until the client notices", "engagement leads don't have a clear view of what's overdue", "project management is inconsistent across engagements", "we miss deadlines because there's no central tracking"
What it does: Monitors open deliverables across active engagements and surfaces overdue items to engagement leads before they become client issues.
Tools: Asana, Monday.com, ClickUp, Notion, Jira, Slack

ID: ac-ps-5 | Engagement Knowledge Vault
Solves: "every engagement starts from zero because we don't capture what we learn", "junior staff reinvent solutions senior staff already figured out", "institutional knowledge is siloed in individual consultants", "we can't reuse work across similar engagements"
What it does: Captures methodologies, frameworks, and lessons learned from completed engagements and indexes them into a searchable internal knowledge base.
Tools: Notion, Confluence, Google Drive, SharePoint, Fireflies.ai, Guru

---

### Retail

ID: ac-retail-1 | Stock Replenishment Engine
Solves: "we run out of our best-selling products before anyone catches it", "purchase orders are always reactive", "stockouts are costing us sales", "inventory management is completely manual"
What it does: Monitors stock levels in real time and automatically generates purchase orders when products fall below reorder thresholds.
Tools: Shopify, Square, Lightspeed, QuickBooks, Cin7, Fishbowl

ID: ac-retail-2 | Lapsed Customer Re-Engagement
Solves: "we have thousands of customers who haven't bought in months", "no systematic outreach to lapsed buyers", "we're only marketing to active customers and ignoring the rest of our list", "customer LTV is suffering because we don't re-engage"
What it does: Identifies lapsed customers based on purchase recency and automatically triggers personalized re-engagement sequences across email and SMS.
Tools: Shopify, Klaviyo, Mailchimp, ActiveCampaign, HubSpot, Attentive

ID: ac-retail-3 | Reputation Intelligence Monitor
Solves: "negative reviews are sitting there unanswered", "we don't know what customers are saying about us online", "one bad review can hurt us and we find out too late", "we have no process for monitoring or responding to reviews"
What it does: Aggregates customer reviews across Google, Yelp, and social channels, flags negative sentiment, and drafts response recommendations.
Tools: Google Business Profile, Yelp, Podium, Birdeye, Yotpo

ID: ac-retail-4 | Daily Revenue Digest
Solves: "we don't know how the day went until we pull a report manually", "leadership wants a daily number but it takes too long to compile", "no visibility into which products are performing or underperforming day-to-day", "store managers are flying blind"
What it does: Pulls POS and e-commerce data each day and delivers a plain-language performance summary covering revenue, top SKUs, returns, and variance from target.
Tools: Shopify, Square, Lightspeed, Clover, QuickBooks, Slack

ID: ac-retail-5 | Purchase Order Tracker
Solves: "we don't know if a shipment is late until it doesn't show up", "vendor follow-up is completely manual", "PO discrepancies are caught too late and cost us", "we have no visibility into open orders"
What it does: Tracks open purchase orders against expected delivery dates, sends automated follow-ups to vendors when shipments are delayed, and flags quantity discrepancies.
Tools: QuickBooks, NetSuite, Cin7, Lightspeed, Shopify, Gmail

---

### Trades / Field Service (HVAC, Plumbing, Electrical)

ID: ac-trades-1 | Estimate Conversion Engine
Solves: "we send estimates and never hear back", "techs give quotes but nobody follows up", "estimates go cold because follow-up is inconsistent", "we're leaving money on the table because we don't chase estimates"
What it does: Automatically sends timed follow-up messages to customers who received an estimate but haven't responded, including reminders, availability windows, and expiration notices.
Tools: ServiceTitan, Jobber, Housecall Pro, FieldEdge, Twilio SMS

ID: ac-trades-2 | Job Completion Automator
Solves: "invoices go out late because someone forgets to send them after a job", "we're not collecting reviews at the right moment", "the gap between job completion and invoice is costing us cash flow", "customer satisfaction surveys never get sent"
What it does: Detects when a job is marked complete and immediately triggers invoice generation, customer satisfaction survey delivery, and review request messaging.
Tools: ServiceTitan, Jobber, Housecall Pro, QuickBooks, Stripe, Twilio SMS

ID: ac-trades-3 | Recurring Revenue Engine
Solves: "one-time jobs never turn into repeat business", "customers forget to schedule their annual service", "we have no systematic way to generate recurring revenue from past customers", "our book of business is always starting from zero"
What it does: Tracks equipment service history and automatically sends seasonal or interval-based maintenance reminders, converting one-time jobs into recurring revenue.
Tools: ServiceTitan, Jobber, Housecall Pro, Mailchimp, Twilio SMS

ID: ac-trades-4 | Schedule Gap Optimizer
Solves: "techs have gaps in their day that we don't catch in time to fill", "cancellations leave holes in the schedule that cost us", "routes are inefficient and waste drive time", "dispatchers are overwhelmed trying to rebalance the schedule"
What it does: Monitors daily job schedules for gaps, cancellations, or travel inefficiencies and surfaces rebalancing recommendations to keep technicians productive.
Tools: ServiceTitan, Jobber, Housecall Pro, Google Maps API, Slack

ID: ac-trades-5 | Review Generation Engine
Solves: "we do great work but don't have many Google reviews", "asking for reviews feels awkward so techs don't do it", "our competitors have more reviews even though our service is better", "we're not capitalizing on happy customers to build our reputation"
What it does: Sends a personalized Google or Facebook review request to every customer within hours of a completed job, automatically pausing if a low satisfaction score is detected first.
Tools: ServiceTitan, Jobber, Google Business Profile, Podium, Twilio SMS

---

### Marketing Agencies

ID: ac-agency-1 | Agency Onboarding Engine
Solves: "new client kickoffs are always chaotic", "assets and access credentials trickle in over weeks", "the first impression after signing is disorganized", "team members don't know what to do when a new client is signed"
What it does: Triggers a structured onboarding workflow the moment a new client contract is signed, covering intake form delivery, kickoff scheduling, asset collection, and team briefing.
Tools: HubSpot, Salesforce, DocuSign, Asana, Monday.com, Slack

ID: ac-agency-2 | Client Report Packager
Solves: "building client reports takes half a day every month", "we pull data from six platforms manually every reporting cycle", "clients want a clean summary and we send them a data dump", "reporting is eating into time we should spend on strategy"
What it does: Pulls cross-channel performance data and assembles it into a client-ready, branded, narrative-annotated report delivered automatically without manual exports.
Tools: Google Analytics, Google Ads, Meta Ads, HubSpot, AgencyAnalytics, Google Slides

ID: ac-agency-3 | Scope & Budget Sentinel
Solves: "we keep doing work outside of scope and not charging for it", "account managers don't know they're over budget until it's too late", "clients keep adding requests and we say yes without tracking", "profitability is suffering because scope isn't being enforced"
What it does: Tracks hours and deliverables logged against contracted scope, alerting account managers when an engagement is approaching budget overrun.
Tools: Harvest, Toggl Track, Asana, Monday.com, HubSpot, Slack

ID: ac-agency-4 | Content Calendar Builder
Solves: "building a content calendar from scratch every month is time-consuming", "clients want to see a plan but putting it together takes too long", "content planning is inconsistent across account teams", "we're reactive on content instead of planned"
What it does: Generates a draft content calendar from a client's campaign brief, pre-populates it with post concepts by channel, and routes it for internal review before client presentation.
Tools: Notion, Airtable, Asana, Buffer, Hootsuite, Slack

ID: ac-agency-5 | Account Retention Radar
Solves: "clients churn and we didn't see it coming", "we don't have a systematic way to know which accounts are at risk", "account teams are too close to their clients to be objective about health", "we lose clients at renewal because warning signs weren't caught earlier"
What it does: Scores each client account by engagement responsiveness, NPS trends, budget utilization, and contract proximity, alerting account leads when a relationship shows early warning signs.
Tools: HubSpot, Salesforce, Typeform, SurveyMonkey, Harvest, Slack

---

### RIA / Wealth Management

ID: ac-ria-1 | Advisor Meeting Intelligence
Solves: "advisors spend hours preparing for each client review meeting", "we pull portfolio data, life events, and action items from different places", "client meetings feel generic because prep is rushed", "advisors aren't walking in with the full picture"
What it does: Automatically compiles a personalized pre-meeting briefing pulling portfolio performance, recent life events, open action items, and market context relevant to their holdings.
Tools: Salesforce FSC, Redtail CRM, Wealthbox, Orion, Black Diamond, Fathom

ID: ac-ria-2 | Regulatory Deadline Sentinel
Solves: "ADV filings and client agreement renewals catch us off guard", "we've missed disclosure deadlines because nobody was tracking them", "compliance calendar is managed in a spreadsheet that doesn't alert anyone", "regulatory filing deadlines are a constant source of stress"
What it does: Tracks expiration dates and filing deadlines for ADV forms, client agreements, and regulatory disclosures, sending automated alerts with sufficient lead time to act.
Tools: Salesforce FSC, Redtail CRM, Wealthbox, DocuSign, SharePoint

ID: ac-ria-3 | Prospect Nurture Engine
Solves: "referrals come in but don't hear from us consistently", "warm leads go cold because follow-up is manual and inconsistent", "prospects fall through the cracks between initial conversation and becoming a client", "we're leaving AUM on the table because nurture is weak"
What it does: Enrolls qualified prospects into personalized multi-touch nurture sequences based on wealth segment, stated goals, and referral source.
Tools: Salesforce FSC, Redtail CRM, Wealthbox, Mailchimp, HubSpot

ID: ac-ria-4 | Life Event Intelligence Monitor
Solves: "we miss opportunities to reach out when clients have major life changes", "clients feel like we don't know what's going on in their lives", "advisors are reactive instead of proactively connecting life events to financial needs", "we find out about job changes or inheritances by accident"
What it does: Monitors CRM notes, email threads, and public signals for life events and alerts advisors to proactively reach out with relevant guidance.
Tools: Salesforce FSC, Redtail CRM, Wealthbox, Gmail, Google Alerts

ID: ac-ria-5 | Advisor Notes Automator
Solves: "advisors spend 30 minutes after every meeting updating the CRM", "meeting notes are inconsistent and incomplete", "action items from client meetings don't get logged properly", "compliance requires documentation but it's always a burden"
What it does: Captures action items, client disclosures, and follow-up commitments from advisor meeting transcripts and automatically logs structured notes into the CRM.
Tools: Salesforce FSC, Redtail CRM, Wealthbox, Fathom, Fireflies.ai, Zoom

---

### Engineering & Contractors

ID: ac-const-1 | Bid Response Engine
Solves: "responding to RFPs takes days and we're doing it from scratch every time", "bid quality varies depending on who's assembling it", "we miss RFP deadlines because the process is too slow", "pulling together past project profiles and team bios is always a scramble"
What it does: Assembles a structured bid response from a project brief, pulling in relevant past project profiles, team bios, compliance certifications, and boilerplate scope language.
Tools: Procore, Buildertrend, Autodesk ACC, Google Drive, DocuSign

ID: ac-const-2 | Sub Compliance Sentinel
Solves: "we've had subs on site with expired insurance", "license and certification tracking is done in a spreadsheet", "we find out a sub isn't compliant after work has already started", "compliance documentation is scattered and never up to date"
What it does: Monitors insurance certificates, license expiration dates, and lien waiver submissions across the subcontractor roster, flagging non-compliant subs before work begins.
Tools: Procore, Buildertrend, Autodesk ACC, DocuSign, Gmail

ID: ac-const-3 | Field Intelligence Digest
Solves: "PMs don't have time to read every field log", "field data is captured but never synthesized for stakeholders", "leadership has no visibility into daily site status without a call", "daily reports are inconsistent depending on who writes them"
What it does: Aggregates daily field logs, weather notes, crew counts, and issue flags and delivers a consolidated project status summary to PMs and stakeholders.
Tools: Procore, Buildertrend, PlanGrid, Fieldwire, Slack

ID: ac-const-4 | RFI & Submittal Tracker
Solves: "open RFIs are sitting unanswered and slowing the job down", "we don't know which submittals are overdue until the PM asks", "response deadlines are missed because nobody is tracking them", "schedule slippage is caused by slow RFI responses"
What it does: Tracks open RFIs and submittals against response deadlines, sends automated reminders to responsible parties, and escalates overdue items to prevent schedule slippage.
Tools: Procore, Autodesk ACC, Buildertrend, Bluebeam, Slack

ID: ac-const-5 | Budget Variance Sentinel
Solves: "we find out a project is over budget too late to course-correct", "PMs don't have real-time visibility into cost vs. budget", "budget overruns are a surprise at month-end", "we're not catching cost creep early enough"
What it does: Compares actual costs against budget baselines in real time and sends proactive alerts when line items approach or breach threshold.
Tools: Procore, Buildertrend, Sage 300, QuickBooks, Slack

---

### Legal (Law Firms & In-House Teams)

ID: ac-legal-1 | Matter Intake Automator
Solves: "new matter intake is slow and inconsistent", "conflict checks are done manually and take too long", "new matters don't get routed to the right attorney quickly enough", "intake process varies depending on who handles it"
What it does: Automates the new matter intake process, collecting client information, triggering a conflict check, and routing the matter to the right attorney based on practice area.
Tools: Clio, MyCase, PracticePanther, Filevine, Salesforce

ID: ac-legal-2 | Docket & Deadline Sentinel
Solves: "we've almost missed court deadlines because tracking is manual", "statute of limitations dates are managed in spreadsheets", "deadline management is a constant source of anxiety", "we don't have tiered alerts to remind us at the right intervals"
What it does: Tracks court deadlines, statute of limitations dates, and filing windows across all active matters, sending tiered alerts at defined intervals before each deadline.
Tools: Clio, MyCase, Filevine, CourtAlert, Google Calendar, Slack

ID: ac-legal-3 | Client Status Briefer
Solves: "clients constantly ask for updates and it takes time to compile them", "status updates are inconsistent depending on the attorney", "we're not being proactive enough with client communication", "billing entries and docket activity aren't being turned into client-facing summaries"
What it does: Drafts a plain-language matter status update for each active client based on recent docket activity, billing entries, and CRM notes.
Tools: Clio, MyCase, Filevine, Gmail, Fathom, Fireflies.ai

ID: ac-legal-4 | Contract Risk Digest
Solves: "reviewing incoming contracts takes too long before we can respond", "attorneys spend hours on initial contract review that could be triaged faster", "we can't quickly see where the risk areas are in a new contract", "non-standard clauses are buried and take too long to find"
What it does: Reads incoming contracts and produces a structured issue summary organized by clause category, flagging non-standard terms, missing provisions, and key risk areas.
Tools: NetDocuments, iManage, Clio, Google Drive, DocuSign

ID: ac-legal-5 | WIP Revenue Digest
Solves: "unbilled time slips through and we lose revenue", "attorneys don't know their realization rate until month-end", "billing leakage is a consistent problem we can't get ahead of", "WIP reports are manual and nobody looks at them until it's too late"
What it does: Generates a weekly work-in-progress report for each attorney showing unbilled time, billing realization rates, and outstanding AR by client.
Tools: Clio, MyCase, TimeSolv, Bill4Time, QuickBooks, Slack
SYSTEM;
}

function ansa_claude_search_handler() {
    check_ajax_referer( 'ansa-nonce', 'nonce' );

    $query = sanitize_text_field( $_POST['query'] ?? '' );

    if ( empty( $query ) ) {
        wp_send_json_error( 'Missing query' );
    }

    $api_key = defined( 'ANTHROPIC_API_KEY' ) ? ANTHROPIC_API_KEY : '';
    if ( empty( $api_key ) ) {
        wp_send_json_error( 'API key not configured' );
    }

    $response = wp_remote_post( 'https://api.anthropic.com/v1/messages', array(
        'headers' => array(
            'x-api-key'         => $api_key,
            'anthropic-version' => '2023-06-01',
            'content-type'      => 'application/json',
        ),
        'body'    => wp_json_encode( array(
            'model'      => 'claude-haiku-4-5-20251001',
            'max_tokens' => 400,
            'system'     => ansa_claude_search_system_prompt(),
            'messages'   => array(
                array( 'role' => 'user', 'content' => $query ),
            ),
        ) ),
        'timeout' => 20,
    ) );

    if ( is_wp_error( $response ) ) {
        wp_send_json_error( 'Request failed' );
    }

    $body = json_decode( wp_remote_retrieve_body( $response ), true );
    $text = $body['content'][0]['text'] ?? '';
    $text = trim( preg_replace( '/```json|```/', '', $text ) );

    $ids = json_decode( $text, true );
    if ( ! is_array( $ids ) ) {
        wp_send_json_error( 'Invalid response' );
    }

    wp_send_json_success( $ids );
}
add_action( 'wp_ajax_ansa_claude_search',        'ansa_claude_search_handler' );
add_action( 'wp_ajax_nopriv_ansa_claude_search', 'ansa_claude_search_handler' );

/**
 * ──────────────────────────────────────────────
 * AI Readiness Questionnaire — Server-side submission handler
 *
 * Flow:
 * 1. Validate nonce
 * 2. Decode and sanitize payload
 * 3. Log to WordPress (wp_options — lightweight, no custom table needed)
 * 4. Forward to Workato webhook
 * 5. Return success/error to browser
 *
 * View submissions: wp-admin → Tools → Questionnaire Submissions
 * Or query directly: get_option('ansa_questionnaire_log') returns array of submissions
 * ──────────────────────────────────────────────
 */
function ansa_questionnaire_submit_handler() {
    // 1. Nonce check
    if ( ! check_ajax_referer( 'ansa-nonce', 'nonce', false ) ) {
        wp_send_json_error( 'Security check failed. Please refresh the page and try again.' );
    }

    // 2. Decode payload
    $raw = isset( $_POST['payload'] ) ? wp_unslash( $_POST['payload'] ) : '';
    if ( empty( $raw ) ) {
        wp_send_json_error( 'No submission data received.' );
    }

    $data = json_decode( $raw, true );
    if ( ! is_array( $data ) ) {
        wp_send_json_error( 'Malformed submission data.' );
    }

    // Basic sanitization of top-level string values
    $clean = array();
    foreach ( $data as $key => $value ) {
        $key = sanitize_key( $key );
        if ( is_array( $value ) ) {
            $clean[ $key ] = array_map( 'sanitize_text_field', $value );
        } else {
            $clean[ $key ] = sanitize_textarea_field( $value );
        }
    }

    // Ensure submission timestamp
    $clean['submitted_at']    = $clean['submitted_at'] ?? current_time( 'c' );
    $clean['submission_ip']   = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
    $clean['submission_ua']   = substr( $_SERVER['HTTP_USER_AGENT'] ?? '', 0, 200 );
    $clean['submission_id']   = uniqid( 'aqr_', true );

    // 3. Log to WordPress options (append to rolling log, keep last 200)
    $log = get_option( 'ansa_questionnaire_log', array() );
    if ( ! is_array( $log ) ) {
        $log = array();
    }
    array_unshift( $log, $clean ); // newest first
    $log = array_slice( $log, 0, 200 );
    update_option( 'ansa_questionnaire_log', $log, false ); // autoload=false

    error_log( sprintf(
        '[ANSA Questionnaire] Submission logged | ID: %s | Company: %s | Email: %s | IP: %s',
        $clean['submission_id'],
        $clean['company_name'] ?? 'unknown',
        $clean['contact_email'] ?? 'unknown',
        $clean['submission_ip']
    ) );

    // 4. Forward to Workato (best-effort, non-blocking for user)
    $webhook_url = 'https://webhooks.workato.com/webhooks/rest/7b185dd3-a851-4892-80ef-cbe90de5aae6/new_questionaire';
    $workato_response = wp_remote_post( $webhook_url, array(
        'headers' => array( 'Content-Type' => 'application/json' ),
        'body'    => wp_json_encode( $clean ),
        'timeout' => 15,
    ) );

    if ( is_wp_error( $workato_response ) ) {
        error_log( '[ANSA Questionnaire] Workato forward FAILED | ID: ' . $clean['submission_id'] . ' | Error: ' . $workato_response->get_error_message() );
        // Still return success — data is safely logged in WP
    } else {
        $workato_code = wp_remote_retrieve_response_code( $workato_response );
        error_log( '[ANSA Questionnaire] Workato forward | ID: ' . $clean['submission_id'] . ' | HTTP: ' . $workato_code );
    }

    // 5. Notify admin by email (optional — comment out if noisy)
    $admin_email = get_option( 'admin_email' );
    $company     = $clean['company_name'] ?? 'Unknown';
    $contact     = $clean['contact_name'] ?? 'Unknown';
    $email       = $clean['contact_email'] ?? 'Unknown';
    wp_mail(
        $admin_email,
        'New AI Readiness Questionnaire — ' . $company,
        "New questionnaire submission received.\n\nCompany: $company\nContact: $contact\nEmail: $email\nSubmission ID: {$clean['submission_id']}\n\nView all submissions in WP Admin → Tools → Questionnaire Submissions."
    );

    wp_send_json_success( array( 'submission_id' => $clean['submission_id'] ) );
}
add_action( 'wp_ajax_ansa_questionnaire_submit',        'ansa_questionnaire_submit_handler' );
add_action( 'wp_ajax_nopriv_ansa_questionnaire_submit', 'ansa_questionnaire_submit_handler' );

/**
 * Admin page to view questionnaire submissions
 * Access: WP Admin → Tools → Questionnaire Submissions
 */
function ansa_questionnaire_submissions_menu() {
    add_management_page(
        'Questionnaire Submissions',
        'Questionnaire Submissions',
        'manage_options',
        'ansa-questionnaire-submissions',
        'ansa_questionnaire_submissions_page'
    );
}
add_action( 'admin_menu', 'ansa_questionnaire_submissions_menu' );

function ansa_questionnaire_submissions_page() {
    if ( ! current_user_can( 'manage_options' ) ) {
        wp_die( 'Unauthorized' );
    }

    $log = get_option( 'ansa_questionnaire_log', array() );

    echo '<div class="wrap">';
    echo '<h1>AI Readiness Questionnaire Submissions</h1>';
    echo '<p>Showing ' . count( $log ) . ' submission(s). Newest first. Maximum 200 stored.</p>';

    if ( empty( $log ) ) {
        echo '<p>No submissions yet.</p>';
        echo '</div>';
        return;
    }

    foreach ( $log as $sub ) {
        echo '<div style="background:#fff;border:1px solid #ddd;border-radius:6px;padding:16px;margin-bottom:16px;">';
        echo '<strong>' . esc_html( $sub['company_name'] ?? 'Unknown Company' ) . '</strong>';
        echo ' — ' . esc_html( $sub['contact_name'] ?? '' );
        echo ' (' . esc_html( $sub['contact_email'] ?? '' ) . ')';
        echo ' <span style="color:#999;font-size:12px;">' . esc_html( $sub['submitted_at'] ?? '' ) . '</span>';
        echo '<br><span style="color:#999;font-size:11px;">ID: ' . esc_html( $sub['submission_id'] ?? '' ) . ' | IP: ' . esc_html( $sub['submission_ip'] ?? '' ) . '</span>';
        echo '<details style="margin-top:8px;"><summary style="cursor:pointer;color:#462CED;">View full response</summary>';
        echo '<pre style="background:#f5f5f5;padding:12px;border-radius:4px;overflow:auto;font-size:12px;margin-top:8px;">';
        echo esc_html( json_encode( $sub, JSON_PRETTY_PRINT ) );
        echo '</pre></details>';
        echo '</div>';
    }

    echo '</div>';
}

/**
 * ──────────────────────────────────────────────
 * Google Sheets Accelerator Loader
 * Fetches the public accelerator sheet as CSV and returns parsed JSON.
 * The Sheet ID is stored in wp-config.php as ANSA_ACCELERATORS_SHEET_ID.
 * Sheet must be published to web: File → Share → Publish to web → CSV format
 * Cache is cleared by visiting: /wp-admin/?ansa_clear_acc_cache=1
 * ──────────────────────────────────────────────
 */
function ansa_sheet_accelerators_handler() {
    check_ajax_referer( 'ansa-nonce', 'nonce' );

    $sheet_id = defined( 'ANSA_ACCELERATORS_SHEET_ID' ) ? ANSA_ACCELERATORS_SHEET_ID : '';
    if ( empty( $sheet_id ) ) {
        wp_send_json_error( 'Sheet ID not configured. Add ANSA_ACCELERATORS_SHEET_ID to wp-config.php.' );
    }

    $cache_key = 'ansa_accelerators_v1';
    $cached    = get_transient( $cache_key );
    if ( $cached !== false ) {
        wp_send_json_success( $cached );
    }

    $url      = 'https://docs.google.com/spreadsheets/d/' . rawurlencode( $sheet_id ) . '/export?format=csv&gid=0';
    $response = wp_remote_get( $url, array( 'timeout' => 15 ) );

    if ( is_wp_error( $response ) ) {
        wp_send_json_error( 'Could not fetch sheet: ' . $response->get_error_message() );
    }

    $code = wp_remote_retrieve_response_code( $response );
    if ( $code !== 200 ) {
        wp_send_json_error( 'Sheet returned HTTP ' . $code . '. Ensure the sheet is published publicly.' );
    }

    $csv  = wp_remote_retrieve_body( $response );
    $rows = array_map( 'str_getcsv', explode( "\n", trim( $csv ) ) );

    if ( empty( $rows ) || count( $rows ) < 2 ) {
        wp_send_json_error( 'Sheet appears empty.' );
    }

    $headers = array_map( function( $h ) {
        return strtolower( trim( preg_replace( '/\s+/', '_', $h ) ) );
    }, $rows[0] );

    $accelerators = array();
    for ( $i = 1; $i < count( $rows ); $i++ ) {
        $row = $rows[ $i ];
        if ( count( array_filter( $row ) ) === 0 ) continue;
        while ( count( $row ) < count( $headers ) ) { $row[] = ''; }
        $record = array_combine( $headers, array_slice( $row, 0, count( $headers ) ) );
        if ( empty( $record['card_id'] ) || empty( $record['card_name'] ) ) continue;
        $accelerators[] = array(
            'tab'            => trim( $record['tab']            ?? '' ),
            'group_id'       => trim( $record['group_id']       ?? '' ),
            'group_title'    => trim( $record['group_title']    ?? '' ),
            'group_subtitle' => trim( $record['group_subtitle'] ?? '' ),
            'group_icon_svg' => trim( $record['group_icon_svg'] ?? '' ),
            'group_color_bg' => trim( $record['group_color_bg'] ?? 'rgba(70,44,237,0.08)' ),
            'group_color_fg' => trim( $record['group_color_fg'] ?? '#462CED' ),
            'card_id'        => trim( $record['card_id']        ?? '' ),
            'card_name'      => trim( $record['card_name']      ?? '' ),
            'card_desc'      => trim( $record['card_desc']      ?? '' ),
            'card_keywords'  => trim( $record['card_keywords']  ?? '' ),
            'card_systems'   => trim( $record['card_systems']   ?? '' ),
        );
    }

    set_transient( $cache_key, $accelerators, 5 * MINUTE_IN_SECONDS );
    wp_send_json_success( $accelerators );
}
add_action( 'wp_ajax_ansa_sheet_accelerators',        'ansa_sheet_accelerators_handler' );
add_action( 'wp_ajax_nopriv_ansa_sheet_accelerators', 'ansa_sheet_accelerators_handler' );

/**
 * Admin shortcut to manually bust the accelerator cache.
 * Visit: /wp-admin/?ansa_clear_acc_cache=1 while logged in as admin.
 */
function ansa_maybe_clear_acc_cache() {
    if ( isset( $_GET['ansa_clear_acc_cache'] ) && current_user_can( 'manage_options' ) ) {
        delete_transient( 'ansa_accelerators_v1' );
        wp_die( '&#x2705; Accelerator cache cleared. <a href="javascript:history.back()">Go back</a>' );
    }
}
add_action( 'admin_init', 'ansa_maybe_clear_acc_cache' );
