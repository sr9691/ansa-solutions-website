    <footer class="ds-footer">
        <div class="ds-footer__inner">

            <div class="ds-footer__brand">
                <?php
                $footer_logo = '';
                if ( has_custom_logo() ) {
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');
                    if ( $logo_url ) {
                        $footer_logo = '<img src="' . esc_url($logo_url) . '" alt="' . esc_attr( get_bloginfo('name') ) . '">';
                    }
                }
                if ( ! $footer_logo ) {
                    $footer_logo = ansa_theme_logo_img( array( 'ansa-logo.png', 'ansa-logo.svg' ), get_bloginfo('name') );
                }
                ?>
                <a class="ds-logo" href="<?php echo esc_url( home_url('/') ); ?>">
                    <?php if ( $footer_logo ) {
                        echo $footer_logo; // phpcs:ignore -- built with esc_url/esc_attr
                    } else { ?>
                        <span class="logo-an">AN</span><span class="logo-sa">SA</span>
                    <?php } ?>
                </a>

                <p class="ds-footer__tagline">
                    AI strategy and orchestration for mid-market companies. Orchestrate your systems, automate your operations, accelerate with AI.
                </p>

                <?php
                $social_links = ansa_get_social_links();
                if ( ! empty( $social_links['linkedin'] ) ) : ?>
                    <div class="ds-footer__social">
                        <a href="<?php echo esc_url( $social_links['linkedin'] ); ?>" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.225 0z"/>
                            </svg>
                        </a>
                    </div>
                <?php endif; ?>
            </div>

            <div class="ds-footer__col">
                <h4><?php esc_html_e('Explore', 'ansa-solutions'); ?></h4>
                <ul>
                    <li><a href="<?php echo esc_url( home_url('/approach/') ); ?>">Approach</a></li>
                    <li><a href="<?php echo esc_url( home_url('/automation-accelerators/') ); ?>">Accelerators</a></li>
                    <li><a href="<?php echo esc_url( home_url('/ai-readiness/') ); ?>">AI Readiness</a></li>
                    <li><a href="<?php echo esc_url( home_url('/case-studies/') ); ?>">Case Studies</a></li>
                    <li><a href="<?php echo esc_url( home_url('/events/') ); ?>">Events</a></li>
                </ul>
            </div>

            <div class="ds-footer__col">
                <h4><?php esc_html_e('Company', 'ansa-solutions'); ?></h4>
                <ul>
                    <li><a href="<?php echo esc_url( home_url('/about/') ); ?>">About</a></li>
                    <li><a href="<?php echo esc_url( home_url('/contact/') ); ?>">Contact</a></li>
                    <li><a href="<?php echo esc_url( home_url('/become-a-partner/') ); ?>">Become a Partner</a></li>
                </ul>
            </div>

            <div class="ds-footer__col">
                <h4><?php esc_html_e('Legal', 'ansa-solutions'); ?></h4>
                <ul>
                    <li><a href="<?php echo esc_url( home_url('/privacy-policy/') ); ?>">Privacy Policy</a></li>
                    <li><a href="<?php echo esc_url( home_url('/terms/') ); ?>">Terms &amp; Conditions</a></li>
                </ul>
            </div>

        </div>

        <div class="ds-footer__bottom">
            Copyright <?php echo esc_html( date('Y') ); ?> ANSA Solutions &middot; Serving mid-market companies nationwide
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
