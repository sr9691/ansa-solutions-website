<?php
/**
 * No content found template
 *
 * @package ANSA_Solutions
 */
?>

<section class="no-results not-found" style="padding: 4rem 0; text-align: center;">
    <header class="page-header">
        <h1 class="page-title" style="margin-bottom: 1rem;">
            <?php
            if (is_search()) {
                esc_html_e('Nothing found for your search', 'ansa-solutions');
            } elseif (is_archive()) {
                esc_html_e('No posts found', 'ansa-solutions');
            } else {
                esc_html_e('Nothing here', 'ansa-solutions');
            }
            ?>
        </h1>
    </header>

    <div class="page-content">
        <?php
        if (is_search()) {
            echo '<p style="color: var(--text-light); margin-bottom: 2rem;">' . esc_html__('Sorry, but nothing matched your search terms. Please try again with different keywords.', 'ansa-solutions') . '</p>';
            get_search_form();
        } else {
            echo '<p style="color: var(--text-light); margin-bottom: 2rem;">' . esc_html__('It seems we can\'t find what you\'re looking for. Perhaps searching can help.', 'ansa-solutions') . '</p>';
            get_search_form();
        }
        ?>
    </div>
</section>