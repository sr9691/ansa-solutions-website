<?php
/**
 * Template Name: Contact
 * Description: Contact page — ds "Get Started" split layout wrapping the
 * GoHighLevel inquiry form embed (Hayes Group).
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

    <?php // ── Split layout: intro + GoHighLevel form ───────────────── ?>
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

            <div class="ds-formcard ds-formcard--bare" id="ds-contact-form">
                <?php // GoHighLevel embed (Hayes Group). form_embed.js auto-resizes the
                      // iframe to data-height; data-cfasync="false" keeps Cloudflare
                      // Rocket Loader from deferring it and leaving the form blank. ?>
                <iframe
                    class="ds-embed"
                    src="https://api.hayesgroupmarketing.com/widget/form/oyWFnpyIxeU3JacEMI5R"
                    style="width:100%;height:100%;border:none;border-radius:0px"
                    id="inline-oyWFnpyIxeU3JacEMI5R"
                    data-layout="{'id':'INLINE'}"
                    data-trigger-type="alwaysShow"
                    data-trigger-value=""
                    data-activation-type="alwaysActivated"
                    data-activation-value=""
                    data-deactivation-type="neverDeactivate"
                    data-deactivation-value=""
                    data-form-name="Inquiry Form"
                    data-height="1010"
                    data-layout-iframe-id="inline-oyWFnpyIxeU3JacEMI5R"
                    data-form-id="oyWFnpyIxeU3JacEMI5R"
                    data-cookie-consent="true"
                    data-cookie-consent-provider="auto"
                    title="Inquiry Form"></iframe>
                <script src="https://api.hayesgroupmarketing.com/js/form_embed.js" data-cfasync="false"></script>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
