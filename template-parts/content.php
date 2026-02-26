<?php
/**
 * Default content template
 *
 * @package ANSA_Solutions
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('entry'); ?>>
    <div class="entry-header">
        <?php
        if (has_post_thumbnail()) {
            echo '<div class="entry-image">';
            the_post_thumbnail('ansa-featured', array('class' => 'img-fluid'));
            echo '</div>';
        }
        ?>

        <?php
        if (is_singular()) {
            the_title('<h1 class="entry-title">', '</h1>');
        } else {
            the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
        }
        ?>

        <div class="entry-meta" style="color: var(--text-light); font-size: 0.9rem; margin-bottom: 1.5rem;">
            <span class="posted-on">
                <?php
                echo esc_html_x('Posted on ', 'post date', 'ansa-solutions');
                echo '<time class="entry-date published updated" datetime="' . esc_attr(get_the_date('c')) . '">';
                echo esc_html(get_the_date());
                echo '</time>';
                ?>
            </span>
            <span class="byline">
                <?php
                echo esc_html_x('by ', 'post author', 'ansa-solutions');
                echo '<span class="author vcard"><a class="url fn n" href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">';
                echo esc_html(get_the_author());
                echo '</a></span>';
                ?>
            </span>
            <?php
            if (has_category()) {
                echo '<span class="category-list">';
                echo esc_html__(' in ', 'ansa-solutions');
                the_category(', ');
                echo '</span>';
            }
            ?>
        </div>
    </div>

    <div class="entry-content">
        <?php
        if (is_singular()) {
            the_content(
                sprintf(
                    wp_kses('Continue reading<span class="screen-reader-text"> "%s"</span>', array('span' => array('class' => array()))),
                    esc_html(get_the_title())
                )
            );

            wp_link_pages(array(
                'before' => '<div class="page-links">' . esc_html__('Pages:', 'ansa-solutions'),
                'after'  => '</div>',
            ));
        } else {
            the_excerpt();
        }
        ?>
    </div>

    <?php
    if (is_singular()) {
        echo '<footer class="entry-footer" style="border-top: 1px solid var(--border); padding-top: 1.5rem; margin-top: 2rem;">';

        if (has_tag()) {
            echo '<div class="tag-list" style="margin-bottom: 1rem;">';
            echo '<strong>' . esc_html__('Tags:', 'ansa-solutions') . '</strong> ';
            the_tags('', ', ', '');
            echo '</div>';
        }

        if (is_singular('post') && get_the_author_meta('description')) {
            echo '<div class="author-bio" style="background-color: var(--border-light); padding: 1.5rem; border-radius: var(--radius-lg); margin-top: 2rem;">';
            echo '<h4>' . esc_html__('About the Author', 'ansa-solutions') . '</h4>';
            echo wp_kses_post(wpautop(get_the_author_meta('description')));
            echo '</div>';
        }

        echo '</footer>';
    }
    ?>
</article>
