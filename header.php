<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="site-header">
        <div class="header-wrapper">
            <div class="site-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <span class="logo-an">AN</span><span class="logo-sa">SA</span>
                </a>
            </div>

            <nav class="nav-wrapper">
                <button class="mobile-menu-toggle" id="mobile-menu-toggle" aria-label="Toggle menu">
                    <span class="menu-icon">☰</span>
                </button>

                <?php
                wp_nav_menu(array(
                    'theme_location'  => 'primary',
                    'container'       => false,
                    'menu_class'      => 'primary-nav',
                    'fallback_cb'     => 'ansa_primary_menu_fallback',
                    'depth'           => 2,
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                ));
                ?>

                <a href="#contact" class="btn btn-primary">Contact Us</a>
            </nav>
        </div>
    </header>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggle = document.getElementById('mobile-menu-toggle');
            const menu = document.querySelector('.primary-nav');

            if (toggle) {
                toggle.addEventListener('click', function() {
                    menu.classList.toggle('active');
                    toggle.setAttribute('aria-expanded', menu.classList.contains('active'));
                });
            }

            const menuItems = document.querySelectorAll('.primary-nav li');
            menuItems.forEach(function(item) {
                const link = item.querySelector('a');
                if (item.classList.contains('menu-item-has-children')) {
                    const submenu = item.querySelector('.sub-menu');
                    if (submenu) {
                        link.addEventListener('click', function(e) {
                            if (window.innerWidth <= 768) {
                                e.preventDefault();
                                item.classList.toggle('active');
                            }
                        });
                    }
                }
            });

            window.addEventListener('resize', function() {
                if (window.innerWidth > 768) {
                    menu.classList.remove('active');
                    document.querySelectorAll('.primary-nav li').forEach(function(item) {
                        item.classList.remove('active');
                    });
                }
            });

            const menuLinks = document.querySelectorAll('.primary-nav a');
            menuLinks.forEach(function(link) {
                link.addEventListener('click', function(e) {
                    if (window.innerWidth <= 768 && !link.parentElement.classList.contains('menu-item-has-children')) {
                        menu.classList.remove('active');
                    }
                });
            });
        });
    </script>

    <?php
    function ansa_primary_menu_fallback() {
        echo '<ul class="primary-nav">';
        echo '<li><a href="' . esc_url(home_url('/')) . '">Home</a></li>';
        echo '<li class="menu-item-has-children">
            <a href="#">Services <span class="dropdown-arrow">▾</span></a>
            <ul class="sub-menu">
                <li><a href="' . esc_url(home_url('/services/process-automation/')) . '">Process Automation</a></li>
                <li><a href="' . esc_url(home_url('/services/ai-readiness-assessment/')) . '">AI Readiness Assessment</a></li>
                <li><a href="' . esc_url(home_url('/services/automation-accelerators/')) . '">Automation Accelerators</a></li>
            </ul>
        </li>';
        echo '<li><a href="' . esc_url(home_url('/case-studies/')) . '">Case Studies</a></li>';
        echo '<li><a href="' . esc_url(home_url('/blog/')) . '">Blog</a></li>';
        echo '<li><a href="' . esc_url(home_url('/about/')) . '">About</a></li>';
        echo '<li><a href="' . esc_url(home_url('/contact/')) . '">Contact</a></li>';
        echo '</ul>';
    }
    ?>

    <main class="site-content">