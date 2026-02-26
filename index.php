<?php
/**
 * Main template file
 *
 * @package ANSA_Solutions
 */

get_header();
?>

    <div class="container" style="padding-top: 2rem; padding-bottom: 2rem;">
        <?php
        if (have_posts()) {
            if (is_home() || is_archive()) {
                echo '<div class="section-title"><h1>' . esc_html(get_the_archive_title()) . '</h1>';
                echo '<p>' . esc_html(get_the_archive_description()) . '</p></div>';
            }

            echo '<div class="grid">';

            while (have_posts()) {
                the_post();

                if (is_search()) {
                    get_template_part('template-parts/content', 'search');
                } elseif (is_home() || is_archive()) {
                    get_template_part('template-parts/content', 'excerpt');
                } else {
                    get_template_part('template-parts/content');
                }
            }

            echo '</div>';

            the_posts_pagination(array(
                'mid_size'           => 2,
                'prev_text'          => esc_html__('Previous', 'ansa-solutions'),
                'next_text'          => esc_html__('Next', 'ansa-solutions'),
                'screen_reader_text' => esc_html__('Posts navigation', 'ansa-solutions'),
            ));
        } else {
            get_template_part('template-parts/content', 'none');
        }
        ?>
    </div>

<?php
get_footer();