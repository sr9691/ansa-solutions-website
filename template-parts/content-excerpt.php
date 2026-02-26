<?php
/**
 * Archive excerpt template
 *
 * @package ANSA_Solutions
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('card'); ?>>
    <?php
    if (has_post_thumbnail()) {
        echo '<div class="card-image">';
        the_post_thumbnail('ansa-card');
        echo '</div>';
    }
    ?>

    <div class="card-content">
        <div class="card-meta" style="color: var(--text-light); font-size: 0.8rem; margin-bottom: 0.75rem;">
            <time class="entry-date" datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                <?php echo esc_html(get_the_date()); ?>
            </time>
        </div>

        <h3 class="card-title">
            <a href="<?php the_permalink(); ?>" rel="bookmark">
                <?php the_title(); ?>
            </a>
        </h3>

        <div class="card-description">
            <?php the_excerpt(); ?>
        </div>

        <div class="card-footer">
            <a href="<?php the_permalink(); ?>" class="read-more">
                <?php esc_html_e('Read More', 'ansa-solutions'); ?>
            </a>
            <?php
            if (has_category()) {
                echo '<div class="post-categories">';
                the_category(', ');
                echo '</div>';
            }
            ?>
        </div>
    </div>
</article>