<?php
/**
 * Page template
 *
 * @package ANSA_Solutions
 */

get_header();
?>

    <?php
    while (have_posts()) {
        the_post();
        get_template_part('template-parts/content', 'page');
    }
    ?>

<?php
get_footer();