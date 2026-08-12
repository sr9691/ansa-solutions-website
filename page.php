<?php
/**
 * Page template (generic Pages without a dedicated template)
 *
 * @package ANSA_Solutions
 */

get_header(); ?>

<main id="ds-main" class="site-main">
    <section class="ds-band ds-band--paper">
        <div class="ds-band__inner ds-band__inner--narrow">
            <?php
            while ( have_posts() ) {
                the_post();
                get_template_part( 'template-parts/content', 'page' );
            }
            ?>
        </div>
    </section>
</main>

<?php get_footer();
