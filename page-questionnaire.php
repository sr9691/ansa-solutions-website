<?php
/**
 * Template Name: AI Readiness Questionnaire
 * Description: Full-screen questionnaire form - no WordPress header/footer
 *
 * This template serves the standalone AI Readiness Questionnaire as a complete,
 * full-width experience without WordPress chrome. The form is self-contained with
 * all styling, validation, and submission handling built-in.
 *
 * Requires a valid session_id query parameter to display the questionnaire.
 */

// Prevent WordPress from rendering header/footer
define('ANSA_NO_HEADER_FOOTER', true);

// Validate session_id is present and non-empty
$session_id = isset($_GET['session_id']) ? sanitize_text_field(trim($_GET['session_id'])) : '';

if (empty($session_id)) {
    // No valid session_id — show access denied page
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Access Denied - ANSA Solutions</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
        <style>
            * { margin: 0; padding: 0; box-sizing: border-box; }
            body {
                font-family: 'Plus Jakarta Sans', sans-serif;
                background: #f9fafb;
                display: flex;
                align-items: center;
                justify-content: center;
                min-height: 100vh;
                padding: 40px 20px;
            }
            .access-denied {
                text-align: center;
                max-width: 520px;
            }
            .access-denied h1 {
                font-size: 32px;
                color: #1f2937;
                margin-bottom: 12px;
                font-weight: 700;
            }
            .access-denied p {
                font-size: 16px;
                color: #6b7280;
                margin-bottom: 24px;
                line-height: 1.6;
            }
            .access-denied a {
                display: inline-block;
                padding: 12px 28px;
                background: #462cED;
                color: #fff;
                text-decoration: none;
                border-radius: 8px;
                font-weight: 600;
                transition: background 0.2s ease;
            }
            .access-denied a:hover {
                background: #3520c7;
            }
        </style>
    </head>
    <body>
        <div class="access-denied">
            <h1>Access Denied</h1>
            <p>This questionnaire requires a valid session link. If you believe you should have access, please contact us and we'll send you the correct link.</p>
            <a href="mailto:sr@ansa.solutions">Contact Support</a>
        </div>
    </body>
    </html>
    <?php
    exit;
}

$questionnaire_path = get_template_directory() . '/standalone/ai-readiness-questionnaire.html';

if (file_exists($questionnaire_path)) {
    // Output the standalone questionnaire HTML
    include $questionnaire_path;
} else {
    // Fallback if questionnaire file is missing
    get_header();
    ?>
    <div style="padding: 80px 40px; text-align: center; max-width: 800px; margin: 0 auto;">
        <h1 style="font-size: 32px; margin-bottom: 16px; color: #1f2937;">Questionnaire Not Found</h1>
        <p style="font-size: 16px; color: #6b7280; margin-bottom: 24px;">We're sorry, but the AI Readiness Questionnaire couldn't be loaded. Please try again later or contact us for assistance.</p>
        <a href="mailto:sr@ansa.solutions" style="display: inline-block; padding: 12px 24px; background: #462cED; color: white; text-decoration: none; border-radius: 8px; font-weight: 600;">Contact Support</a>
    </div>
    <?php
    get_footer();
}

// Prevent WordPress from adding anything else after the form
exit;
?>
