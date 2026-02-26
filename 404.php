<?php
/**
 * 404 Not Found template
 *
 * @package ANSA_Solutions
 */

get_header();
?>

<main class="site-content">
    <div class="container" style="padding: 6rem 1.5rem; text-align: center;">
        <div style="max-width: 600px; margin: 0 auto;">
            <h1 style="font-size: 4rem; color: var(--accent); margin-bottom: 1rem;">404</h1>
            <h2 style="margin-bottom: 1rem;">Page Not Found</h2>
            <p style="font-size: 1.1rem; color: var(--text-light); margin-bottom: 2rem;">
                Sorry, the page you're looking for doesn't exist. It might have been moved or deleted.
            </p>

            <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-bottom: 3rem;">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">
                    Back to Home
                </a>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-outline">
                    Contact Us
                </a>
            </div>

            <div style="background-color: var(--border-light); padding: 2rem; border-radius: var(--radius-lg);">
                <h3 style="margin-bottom: 1.5rem;">Find What You're Looking For</h3>
                <?php get_search_form(); ?>
            </div>

            <div style="margin-top: 3rem;">
                <h3 style="margin-bottom: 1.5rem;">Popular Pages</h3>
                <ul style="list-style: none; text-align: left; display: inline-block;">
                    <li><a href="<?php echo esc_url(home_url('/services/')); ?>" style="display: block; padding: 0.5rem 0;">Services</a></li>
                    <li><a href="<?php echo esc_url(home_url('/case-studies/')); ?>" style="display: block; padding: 0.5rem 0;">Case Studies</a></li>
                    <li><a href="<?php echo esc_url(home_url('/blog/')); ?>" style="display: block; padding: 0.5rem 0;">Blog</a></li>
                    <li><a href="<?php echo esc_url(home_url('/about/')); ?>" style="display: block; padding: 0.5rem 0;">About Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();