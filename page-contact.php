<?php
/**
 * Template Name: Contact
 * Description: Contact page — ds "Get Started" split layout wrapping the
 * existing HubSpot embedded form (portal 50725925). Submission handling
 * is unchanged.
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

    <?php // ── Split layout: intro + HubSpot form ──────────────────── ?>
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

            <div class="ds-formcard">
                <p class="ds-formmeta">Send us a message</p>
                <!-- HubSpot Embedded Contact Form (portal 50725925) — unchanged -->
                <div class="hubspot-form-container">
                    <script src="https://js.hsforms.net/forms/embed/50725925.js" defer></script>
                    <div class="hs-form-frame" data-region="na1" data-form-id="1a8a8d6f-d8cb-4876-bf15-5df9da9d85ec" data-portal-id="50725925"></div>
                    <noscript>
                        <p>Please enable JavaScript to use this form, or <a href="mailto:info@ansa.solutions">email us directly</a>.</p>
                    </noscript>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
