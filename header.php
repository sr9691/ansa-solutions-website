<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class('ds'); ?>>
    <?php wp_body_open(); ?>

    <a class="ds-skip-link screen-reader-text" href="#ds-main">Skip to content</a>

    <header class="ds-header">
        <div class="ds-header__inner">
            <div class="ds-header__brand">
                <?php if ( has_custom_logo() ) :
                    the_custom_logo();
                else :
                    $ansa_logo = ansa_theme_logo_img( array( 'ansa-logo.png', 'ansa-logo.svg' ), get_bloginfo('name') );
                    ?>
                    <a class="ds-logo" href="<?php echo esc_url( home_url('/') ); ?>" rel="home">
                        <?php if ( $ansa_logo ) {
                            echo $ansa_logo; // phpcs:ignore -- built with esc_url/esc_attr
                        } else { ?>
                            <span class="logo-an">AN</span><span class="logo-sa">SA</span>
                        <?php } ?>
                    </a>
                <?php endif; ?>
            </div>

            <button class="ds-navtoggle" id="ds-navtoggle" aria-controls="ds-primary-nav" aria-expanded="false" aria-label="Toggle navigation">&#9776;</button>

            <nav class="ds-nav" id="ds-primary-nav" aria-label="Primary">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_id'        => 'menu-primary',
                    'menu_class'     => 'ds-nav__list',
                    'fallback_cb'    => 'ansa_primary_menu_fallback',
                    'depth'          => 1,
                    'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                ));
                ?>
                <a class="ds-btn ds-btn--primary ds-nav__cta" data-cta-location="nav" href="<?php echo esc_url( home_url('/#ds-getstarted') ); ?>">See What&rsquo;s Possible</a>
            </nav>
        </div>
    </header>
