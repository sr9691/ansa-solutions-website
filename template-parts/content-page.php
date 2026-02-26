<?php
/**
 * Page content template
 *
 * @package ANSA_Solutions
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('page-content'); ?>>
    <header class="entry-header" style="margin-bottom: 2rem;">
        <?php
        if (has_post_thumbnail()) {
            echo '<div class="page-thumbnail" style="margin-bottom: 2rem; border-radius: var(--radius-lg); overflow: hidden;">';
            the_post_thumbnail('ansa-featured', array('class' => 'img-fluid'));
            echo '</div>';
        }

        the_title('<h1 class="page-title">', '</h1>');
        ?>
    </header>

    <div class="entry-content">
        <?php
        the_content();

        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'ansa-solutions'),
            'after'  => '</div>',
        ));
        ?>
    </div>

    <?php
    if (get_edit_post_link()) {
        echo '<footer class="entry-footer" style="margin-top: 2rem; padding-top: 1.5rem; border-top: 1px solid var(--border);">';
        edit_post_link(esc_html__('Edit this page', 'ansa-solutions'), '<span class="edit-link">', '</span>');
        echo '</footer>';
    }
    ?>
</article>