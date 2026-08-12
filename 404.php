<?php
/**
 * 404 Not Found template
 *
 * @package ANSA_Solutions
 */

get_header(); ?>

<main id="ds-main" class="site-main">
    <section class="ds-band ds-band--ink">
        <div class="ds-band__inner ds-band__inner--narrow">
            <span class="ds-eyebrow">Error 404</span>
            <h1>Page not found.</h1>
            <p class="ds-lede">Sorry, the page you're looking for doesn't exist. It might have been moved or deleted.</p>

            <div class="ds-cta-row">
                <a class="ds-btn ds-btn--primary" href="<?php echo esc_url( home_url('/') ); ?>">Back to home</a>
                <a class="ds-btn ds-btn--ghost" href="<?php echo esc_url( home_url('/contact/') ); ?>">Contact us</a>
            </div>

            <div class="ds-callout">
                <span class="ds-callout__label">Find what you're looking for</span>
                <?php get_search_form(); ?>
            </div>

            <div class="ds-deflist">
                <div class="ds-deflist__row">
                    <span class="ds-deflist__term">Approach</span>
                    <p class="ds-deflist__desc"><a href="<?php echo esc_url( home_url('/approach/') ); ?>">Orchestrate, automate, accelerate</a></p>
                </div>
                <div class="ds-deflist__row">
                    <span class="ds-deflist__term">Case Studies</span>
                    <p class="ds-deflist__desc"><a href="<?php echo esc_url( home_url('/case-studies/') ); ?>">See our work</a></p>
                </div>
                <div class="ds-deflist__row">
                    <span class="ds-deflist__term">About</span>
                    <p class="ds-deflist__desc"><a href="<?php echo esc_url( home_url('/about/') ); ?>">Who we are</a></p>
                </div>
                <div class="ds-deflist__row">
                    <span class="ds-deflist__term">Contact</span>
                    <p class="ds-deflist__desc"><a href="<?php echo esc_url( home_url('/contact/') ); ?>">Start a conversation</a></p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer();
