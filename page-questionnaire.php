<?php
/**
 * Template Name: AI Readiness Questionnaire
 * Description: Full-screen questionnaire form - no WordPress header/footer
 *
 * This template serves the standalone AI Readiness Questionnaire as a complete,
 * full-width experience without WordPress chrome. The form is self-contained with
 * all styling, validation, and submission handling built-in.
 */

// Prevent WordPress from rendering header/footer
define('ANSA_NO_HEADER_FOOTER', true);

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
