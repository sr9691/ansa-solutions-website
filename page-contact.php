<?php
/**
 * Template Name: Contact
 * Description: Contact page — ds "Get Started" split layout wrapping the
 * HubSpot embedded form (portal 50725925).
 *
 * @package ANSA_Solutions
 */

get_header(); ?>

<main id="ds-main" class="site-main">

    <?php // ── Hero ────────────────────────────────────────────────── ?>
    <section class="ds-hero">
        <div class="ds-hero__inner">
            <span class="ds-eyebrow">Contact</span>
            <h1>Let's talk.</h1>
            <p class="ds-hero__lede">Whether you're exploring AI readiness, need process automation, or want to learn about our accelerators — we'd love to hear from you.</p>
        </div>
    </section>

    <?php // ── Split layout: intro + HubSpot form ────────────────────── ?>
    <section class="ds-band ds-band--ink">
        <div class="ds-formwrap">
            <div class="ds-formwrap__intro">
                <span class="ds-eyebrow">Get in Touch</span>
                <h2>Start one conversation.</h2>
                <p class="ds-lede">Serving mid-market companies nationwide. We typically respond within one business day.</p>

                <div class="ds-deflist">
                    <div class="ds-deflist__row">
                        <span class="ds-deflist__term">Email</span>
                        <p class="ds-deflist__desc"><a href="mailto:info@ansa.solutions">info@ansa.solutions</a></p>
                    </div>
                    <div class="ds-deflist__row">
                        <span class="ds-deflist__term">Connect</span>
                        <p class="ds-deflist__desc"><a href="https://www.linkedin.com/company/ansa-solutions/" target="_blank" rel="noopener noreferrer">LinkedIn</a></p>
                    </div>
                    <div class="ds-deflist__row">
                        <span class="ds-deflist__term">What to expect</span>
                        <p class="ds-deflist__desc">We're committed to understanding your challenges and exploring how we can help. No access to your systems is required for the first conversation.</p>
                    </div>
                </div>
            </div>

            <div class="ds-formcard" id="ds-contact-form">
                <p class="ds-formmeta">Send us a message</p>
                <?php // HubSpot embedded form (portal 50725925). data-cfasync="false"
                      // keeps Cloudflare Rocket Loader from deferring the embed script. ?>
                <script src="https://js.hsforms.net/forms/embed/50725925.js" data-cfasync="false" defer></script>
                <div class="hs-form-frame" data-region="na1" data-form-id="2ad37969-d33f-4834-8a5c-5795811c8109" data-portal-id="50725925"></div>
                <noscript><p>Please enable JavaScript to use this form, or <a href="mailto:info@ansa.solutions">email us directly</a>.</p></noscript>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
