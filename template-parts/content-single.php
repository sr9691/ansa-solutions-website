<?php
/**
 * Single post/CPT template
 *
 * @package ANSA_Solutions
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
    <header class="entry-header" style="margin-bottom: 2rem;">
        <?php
        if (has_post_thumbnail()) {
            echo '<div class="featured-image" style="margin-bottom: 2rem; border-radius: var(--radius-lg); overflow: hidden;">';
            the_post_thumbnail('ansa-featured', array('class' => 'img-fluid'));
            echo '</div>';
        }

        the_title('<h1 class="entry-title">', '</h1>');

        if (!is_singular('case_study')) {
            echo '<div class="entry-meta" style="color: var(--text-light); font-size: 0.95rem; margin-top: 1.5rem;">';
            echo '<span class="posted-on">';
            echo esc_html_x('Posted on ', 'post date', 'ansa-solutions');
            echo '<time class="entry-date published updated" datetime="' . esc_attr(get_the_date('c')) . '">';
            echo esc_html(get_the_date());
            echo '</time>';
            echo '</span>';

            echo ' <span class="byline">';
            echo esc_html_x('by ', 'post author', 'ansa-solutions');
            echo '<span class="author vcard"><a class="url fn n" href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">';
            echo esc_html(get_the_author());
            echo '</a></span>';
            echo '</span>';

            if (has_category()) {
                echo '<span class="category-list"> ' . esc_html__('in ', 'ansa-solutions');
                the_category(', ');
                echo '</span>';
            }

            echo '</div>';
        }
        ?>
    </header>

    <div class="entry-content" style="font-size: 1.05rem; line-height: 1.8;">
        <?php
        the_content();

        wp_link_pages(array(
            'before'      => '<div class="page-links">' . esc_html__('Pages:', 'ansa-solutions'),
            'after'       => '</div>',
            'link_before' => '<span class="page-link">',
            'link_after'  => '</span>',
        ));
        ?>
    </div>

    <footer class="entry-footer" style="margin-top: 3rem; padding-top: 2rem; border-top: 1px solid var(--border);">
        <?php
        if (has_tag()) {
            echo '<div class="tag-list" style="margin-bottom: 1.5rem;">';
            echo '<strong>' . esc_html__('Tags:', 'ansa-solutions') . '</strong> ';
            the_tags('', ', ', '');
            echo '</div>';
        }

        if (is_singular('post') && get_the_author_meta('description')) {
            echo '<div class="author-bio" style="background-color: var(--border-light); padding: 2rem; border-radius: var(--radius-lg); margin-top: 2rem;">';
            echo '<div style="display: flex; align-items: center; gap: 1.5rem; margin-bottom: 1rem;">';
            echo '<div>';
            echo get_avatar(get_the_author_meta('ID'), 64, '', get_the_author());
            echo '</div>';
            echo '<div>';
            echo '<h4 style="margin-bottom: 0.25rem;">' . esc_html(get_the_author()) . '</h4>';
            echo '<p style="margin: 0; font-size: 0.9rem; color: var(--text-light);">' . esc_html__('Author', 'ansa-solutions') . '</p>';
            echo '</div>';
            echo '</div>';
            echo wp_kses_post(wpautop(get_the_author_meta('description')));
            echo '</div>';
        }

        echo '<div class="post-navigation" style="margin-top: 2rem;">';
        the_post_navigation(array(
            'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous Post:', 'ansa-solutions') . '</span> <span class="nav-title">%title</span>',
            'next_text' => '<span class="nav-subtitle">' . esc_html__('Next Post:', 'ansa-solutions') . '</span> <span class="nav-title">%title</span>',
        ));
        echo '</div>';

        if (get_edit_post_link()) {
            echo '<div style="margin-top: 2rem;">';
            edit_post_link(esc_html__('Edit this post', 'ansa-solutions'), '<span class="edit-link">', '</span>');
            echo '</div>';
        }
        ?>
    </footer>
</article>
