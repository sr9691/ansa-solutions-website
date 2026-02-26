    </main>

    <footer class="site-footer">
        <div class="footer-wrapper">
            <!-- Logo & Tagline -->
            <div class="footer-section">
                <div class="footer-logo">
                    <?php if (has_custom_logo()) : ?>
                        <?php
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo_url = wp_get_attachment_image_url($custom_logo_id, 'medium');
                        ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <img src="<?php echo esc_url($logo_url); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" style="max-height: 40px; width: auto; filter: brightness(0) invert(1);">
                        </a>
                    <?php else : ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>" style="color: #fff; font-size: 24px; font-weight: 800; text-decoration: none; letter-spacing: 1px;">
                            <?php echo esc_html(get_bloginfo('name')); ?>
                        </a>
                    <?php endif; ?>
                </div>
                <p class="footer-tagline">AI Strategy & Implementation</p>
                <p style="color: rgba(255, 255, 255, 0.8); font-size: 0.95rem; margin-bottom: 1rem;">
                    Transform your business with intelligent automation and AI-powered solutions.
                </p>
                <div class="footer-social">
                    <?php
                    $social_links = ansa_get_social_links();
                    if (!empty($social_links['linkedin'])) {
                        echo '<a href="' . esc_url($social_links['linkedin']) . '" target="_blank" rel="noopener noreferrer" title="LinkedIn" aria-label="LinkedIn">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.225 0z"/>
                            </svg>
                        </a>';
                    }
                    ?>
                </div>
            </div>

            <!-- Services -->
            <div class="footer-section">
                <h4><?php esc_html_e('Services', 'ansa-solutions'); ?></h4>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/process-automation/')); ?>">Process Automation</a></li>
                    <li><a href="<?php echo esc_url(home_url('/ai-readiness-assessment/')); ?>">AI Readiness</a></li>
                    <li><a href="<?php echo esc_url(home_url('/automation-accelerators/')); ?>">Accelerators</a></li>
                </ul>
            </div>

            <!-- Resources -->
            <div class="footer-section">
                <h4><?php esc_html_e('Resources', 'ansa-solutions'); ?></h4>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/case-studies/')); ?>">Case Studies</a></li>
                    <li><a href="<?php echo esc_url(home_url('/blog/')); ?>">Blog</a></li>
                    <li><a href="<?php echo esc_url(home_url('/about/')); ?>">About Us</a></li>
                    <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a></li>
                </ul>
            </div>

            <!-- Company -->
            <div class="footer-section">
                <h4><?php esc_html_e('Company', 'ansa-solutions'); ?></h4>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>">Privacy Policy</a></li>
                    <li><a href="<?php echo esc_url(home_url('/terms/')); ?>">Terms of Service</a></li>
                    <li>
                        <span style="color: rgba(255, 255, 255, 0.8);">
                            📍 Carmel, IN
                        </span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?php echo esc_html(date('Y')); ?> ANSA Solutions. All rights reserved.</p>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
