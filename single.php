<?php
/**
 * Single post template
 *
 * @package ANSA_Solutions
 */

get_header();
?>

    <div class="container" style="padding-top: 3rem; padding-bottom: 3rem;">
        <?php
        while (have_posts()) {
            the_post();
            get_template_part('template-parts/content', 'single');
        }
        ?>
    </div>

<?php
get_footer();