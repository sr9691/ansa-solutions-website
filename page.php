<?php
/**
 * Page template
 *
 * @package ANSA_Solutions
 */

get_header();
?>

<main class="site-content">
    <?php
    while (have_posts()) {
        the_post();
        get_template_part('template-parts/content', 'page');
    }
    ?>
</main>

<?php
get_footer();
