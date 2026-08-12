<?php
/**
 * Template Name: Become a Partner
 * Description: Partner program page. Preserves the HubSpot application form
 * (portal 50725925) and the HubSpot Meetings embed unchanged.
 *
 * @package ANSA_Solutions
 */

get_header(); ?>

<main id="ds-main" class="site-main">

    <?php // ── Hero ────────────────────────────────────────────────── ?>
    <section class="ds-hero">
        <div class="ds-hero__inner">
            <div class="ds-hero__split">
                <div>
                    <span class="ds-eyebrow">Partner Program</span>
                    <h1>Partnerships that multiply automation impact.</h1>
                    <p class="ds-hero__lede">Join an ecosystem of consultants, integrators, and technology providers transforming how businesses work with AI-powered automation.</p>
                    <p>At ANSA, we collaborate with select partners to help organizations modernize operations with AI, orchestration platforms, and intelligent document processing. Together, we design and deliver automation programs that unlock new revenue, reduce operational friction, and create measurable business outcomes in weeks, not years.</p>
                    <div class="ds-cta-row">
                        <a class="ds-btn ds-btn--primary" data-cta-location="partner-hero" href="#apply">Become a partner</a>
                        <a class="ds-btn ds-btn--ghost" href="#lets-talk">Let's talk</a>
                    </div>
                </div>
                <div class="ds-hero__media">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/partnership-hero.svg' ); ?>" alt="Two professionals shaking hands representing an ANSA Solutions partnership">
                </div>
            </div>
        </div>
    </section>

    <?php // ── Why partner ─────────────────────────────────────────── ?>
    <section class="ds-band ds-band--paper">
        <div class="ds-rail">
            <div class="ds-rail__aside">
                <span class="ds-eyebrow">Empower Synergy</span>
                <p class="ds-kicker">Why partner with ANSA.</p>
            </div>
            <div class="ds-rail__body">
                <div class="ds-deflist">
                    <div class="ds-deflist__row"><span class="ds-deflist__term">Revenue growth</span><p class="ds-deflist__desc">Win more deals and expand existing accounts with AI-powered automation offerings your clients are already asking for.</p></div>
                    <div class="ds-deflist__row"><span class="ds-deflist__term">Faster time-to-value</span><p class="ds-deflist__desc">Leverage our reusable blueprints, reference architectures, and delivery playbooks to move from idea to production quickly.</p></div>
                    <div class="ds-deflist__row"><span class="ds-deflist__term">Deep expertise</span><p class="ds-deflist__desc">Tap into our experience with generative AI, machine learning, and orchestration platforms such as Workato to expand your solution portfolio without hiring a large in-house team.</p></div>
                    <div class="ds-deflist__row"><span class="ds-deflist__term">Better outcomes</span><p class="ds-deflist__desc">Deliver automation that actually sticks — designed around people, processes, and data, not just technology.</p></div>
                </div>
            </div>
        </div>
    </section>

    <?php // ── Who we partner with ─────────────────────────────────── ?>
    <section class="ds-band ds-band--slate">
        <div class="ds-rail">
            <div class="ds-rail__aside">
                <span class="ds-eyebrow">Who We Partner With</span>
                <p class="ds-kicker">Where a partnership fits.</p>
            </div>
            <div class="ds-rail__body">
                <div class="ds-deflist">
                    <div class="ds-deflist__row"><span class="ds-deflist__term">Consulting &amp; advisory</span><p class="ds-deflist__desc">Strategy, digital transformation, and process improvement teams who want an execution partner for AI-powered automation and intelligent document processing.</p></div>
                    <div class="ds-deflist__row"><span class="ds-deflist__term">System integrators</span><p class="ds-deflist__desc">Integration, data, and software engineering teams looking to add orchestration and AI automation capabilities without reinventing the wheel.</p></div>
                    <div class="ds-deflist__row"><span class="ds-deflist__term">BPOs &amp; MSPs</span><p class="ds-deflist__desc">Outsourcing and operations partners seeking to increase margins and service quality with automation-first delivery models.</p></div>
                    <div class="ds-deflist__row"><span class="ds-deflist__term">SaaS &amp; technology</span><p class="ds-deflist__desc">Software companies looking for implementation and integration partners to help customers unlock the full value of their platforms.</p></div>
                </div>
            </div>
        </div>
    </section>

    <?php // ── Program benefits ────────────────────────────────────── ?>
    <section class="ds-band ds-band--paper-2">
        <div class="ds-rail">
            <div class="ds-rail__aside">
                <span class="ds-eyebrow">Exclusive Advantages</span>
                <p class="ds-kicker">Partner program benefits.</p>
            </div>
            <div class="ds-rail__body">
                <div class="ds-deflist">
                    <div class="ds-deflist__row"><span class="ds-deflist__term">Enablement</span><p class="ds-deflist__desc">Training and certification to build your team's AI and orchestration delivery capability.</p></div>
                    <div class="ds-deflist__row"><span class="ds-deflist__term">Co-marketing</span><p class="ds-deflist__desc">Joint go-to-market campaigns, case studies, and sales support to accelerate pipeline and increase win rates.</p></div>
                    <div class="ds-deflist__row"><span class="ds-deflist__term">Accelerators</span><p class="ds-deflist__desc">Pre-built use cases for finance, HR, operations, and customer experience, plus intelligent document processing patterns that shorten project timelines.</p></div>
                    <div class="ds-deflist__row"><span class="ds-deflist__term">Delivery models</span><p class="ds-deflist__desc">Flexible models — white-label delivery, joint delivery with your team, or referral-based engagements so you can meet clients where they are.</p></div>
                </div>
            </div>
        </div>
    </section>

    <?php // ── Apply (HubSpot form, unchanged) ─────────────────────── ?>
    <section class="ds-band ds-band--ink" id="apply">
        <div class="ds-band__inner ds-band__inner--narrow">
            <span class="ds-eyebrow">Apply</span>
            <h2>Apply to become an ANSA partner.</h2>
            <p class="ds-lede">Fill out the form below and we'll be in touch to discuss how we can work together.</p>
            <div class="ds-formcard">
                <script src="https://js.hsforms.net/forms/embed/50725925.js" defer></script>
                <div class="hs-form-frame" data-region="na1" data-form-id="c708ed0a-f810-4e38-9d52-50ad350f75e3" data-portal-id="50725925"></div>
                <noscript>
                    <p>Please enable JavaScript to use this form, or <a href="mailto:sr@ansa.solutions">email us directly</a>.</p>
                </noscript>
            </div>
        </div>
    </section>

    <?php // ── Let's talk (HubSpot Meetings, unchanged) ────────────── ?>
    <section class="ds-band ds-band--paper" id="lets-talk">
        <div class="ds-band__inner ds-band__inner--narrow">
            <span class="ds-eyebrow">Prefer a Conversation?</span>
            <h2>Let's talk.</h2>
            <p class="ds-lede">Not ready to apply? Pick a time and let's explore what a partnership could look like.</p>
            <div class="meetings-iframe-container" data-src="https://meetings.hubspot.com/sundaresh?embed=true"></div>
            <script type="text/javascript" src="https://static.hsappstatic.net/MeetingsEmbed/ex/MeetingsEmbedCode.js"></script>
        </div>
    </section>

</main>

<?php get_footer(); ?>
