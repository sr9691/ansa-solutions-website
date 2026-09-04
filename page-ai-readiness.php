<?php
/**
 * Template Name: AI Readiness Assessment
 * Description: AI Readiness Assessment service page. The lead form is the
 * GoHighLevel inquiry form embed (Hayes Group).
 *
 * @package ANSA_Solutions
 */

get_header(); ?>

<main id="ds-main" class="site-main">

    <?php // ── Hero ────────────────────────────────────────────────── ?>
    <section class="ds-hero">
        <div class="ds-hero__inner">
            <span class="ds-eyebrow">AI Readiness Assessment</span>
            <h1>Is your business ready for AI?</h1>
            <p class="ds-hero__lede">A comprehensive assessment that tells you exactly where AI can create value in your business, what's blocking you, and what to do first.</p>
            <div class="ds-cta-row">
                <a class="ds-btn ds-btn--primary" data-cta-location="ai-readiness-hero" href="#get-started">Start your assessment</a>
                <a class="ds-btn ds-btn--ghost" href="<?php echo esc_url( home_url('/sample-report-preview/') ); ?>">View sample report</a>
            </div>
        </div>
    </section>

    <?php // ── What you get ────────────────────────────────────────── ?>
    <section class="ds-band ds-band--paper">
        <div class="ds-rail">
            <div class="ds-rail__aside">
                <span class="ds-eyebrow">What You Get</span>
                <p class="ds-kicker">A fixed-fee, non-intrusive assessment.</p>
            </div>
            <div class="ds-rail__body">
                <p class="ds-lede">Delivered as a branded interactive dashboard you can share with your leadership team.</p>
                <div class="ds-deflist">
                    <div class="ds-deflist__row">
                        <span class="ds-deflist__term">4-dimension eval</span>
                        <p class="ds-deflist__desc">Technology, data, operations, and leadership — scored and benchmarked.</p>
                    </div>
                    <div class="ds-deflist__row">
                        <span class="ds-deflist__term">Discovery call</span>
                        <p class="ds-deflist__desc">A guided 60–90 minute conversation with our team to understand your goals and context.</p>
                    </div>
                    <div class="ds-deflist__row">
                        <span class="ds-deflist__term">Interactive report</span>
                        <p class="ds-deflist__desc">A branded web dashboard delivered within five business days.</p>
                    </div>
                    <div class="ds-deflist__row">
                        <span class="ds-deflist__term">ROI projections</span>
                        <p class="ds-deflist__desc">Quantified impact estimates for each recommended automation opportunity.</p>
                    </div>
                    <div class="ds-deflist__row">
                        <span class="ds-deflist__term">Prioritized roadmap</span>
                        <p class="ds-deflist__desc">Quick wins first, then phased initiatives ranked by effort and value.</p>
                    </div>
                    <div class="ds-deflist__row">
                        <span class="ds-deflist__term">Leadership-ready</span>
                        <p class="ds-deflist__desc">Shareable with your executive team — designed to drive alignment and buy-in.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php // ── How it works ────────────────────────────────────────── ?>
    <section class="ds-band ds-band--paper-2">
        <div class="ds-rail">
            <div class="ds-rail__aside">
                <span class="ds-eyebrow">How It Works</span>
                <p class="ds-kicker">Six simple steps from start to action.</p>
            </div>
            <div class="ds-rail__body">
                <div class="ds-steps">
                    <div class="ds-step"><span class="ds-step__num">01</span><h3 class="ds-step__title">Complete the questionnaire</h3><p class="ds-step__body">Answer questions about your tech stack, data, operations, and goals (~10 min).</p></div>
                    <div class="ds-step"><span class="ds-step__num">02</span><h3 class="ds-step__title">We analyze responses</h3><p class="ds-step__body">Our team reviews your answers and prepares for your discovery session.</p></div>
                    <div class="ds-step"><span class="ds-step__num">03</span><h3 class="ds-step__title">Discovery session</h3><p class="ds-step__body">60–90 minute conversation to understand your context and quantify opportunities.</p></div>
                    <div class="ds-step"><span class="ds-step__num">04</span><h3 class="ds-step__title">Assessment &amp; analysis</h3><p class="ds-step__body">We evaluate readiness across technology, data, operations, and leadership.</p></div>
                    <div class="ds-step"><span class="ds-step__num">05</span><h3 class="ds-step__title">Report delivered</h3><p class="ds-step__body">Receive your interactive AI Readiness Report with scores, insights, and roadmap.</p></div>
                    <div class="ds-step"><span class="ds-step__num">06</span><h3 class="ds-step__title">Take action</h3><p class="ds-step__body">Use your prioritized action plan to start capturing value immediately.</p></div>
                </div>
            </div>
        </div>
    </section>

    <?php // ── What you'll receive ─────────────────────────────────── ?>
    <section class="ds-band ds-band--ink">
        <div class="ds-rail">
            <div class="ds-rail__aside">
                <span class="ds-eyebrow">The Deliverable</span>
                <p class="ds-kicker">A comprehensive, branded readiness dashboard.</p>
            </div>
            <div class="ds-rail__body">
                <h2>See what you'll receive.</h2>
                <div class="ds-stats">
                    <div class="ds-stat"><span class="ds-stat__value">72</span><span class="ds-stat__label">Overall readiness / 100</span></div>
                    <div class="ds-stat"><span class="ds-stat__value">78</span><span class="ds-stat__label">Technology</span></div>
                    <div class="ds-stat"><span class="ds-stat__value">64</span><span class="ds-stat__label">Data</span></div>
                    <div class="ds-stat"><span class="ds-stat__value">75</span><span class="ds-stat__label">Operations</span></div>
                    <div class="ds-stat"><span class="ds-stat__value">68</span><span class="ds-stat__label">Leadership</span></div>
                </div>
                <ol class="ds-checklist">
                    <li><strong>Readiness scorecard</strong> — scores across technology, data, operations, and leadership dimensions.</li>
                    <li><strong>AI opportunities with ROI</strong> — use cases ranked by potential impact and implementation effort.</li>
                    <li><strong>Gap analysis</strong> — a clear view of what needs to change to unlock AI value.</li>
                    <li><strong>Phased action plan</strong> — a prioritized roadmap with quick wins and longer-term initiatives.</li>
                </ol>
                <div class="ds-cta-row">
                    <a class="ds-btn ds-btn--primary" data-cta-location="ai-readiness-sample" href="<?php echo esc_url( home_url('/sample-report-preview/') ); ?>">View full sample report</a>
                </div>
            </div>
        </div>
    </section>

    <?php // ── Why clients love it ─────────────────────────────────── ?>
    <section class="ds-band ds-band--paper">
        <div class="ds-rail">
            <div class="ds-rail__aside">
                <span class="ds-eyebrow">Why Clients Love It</span>
                <p class="ds-kicker">Actionable, not theoretical.</p>
            </div>
            <div class="ds-rail__body">
                <div class="ds-deflist">
                    <div class="ds-deflist__row"><span class="ds-deflist__term">Non-intrusive</span><p class="ds-deflist__desc">Just a short questionnaire and a conversation — no lengthy system audits or IT involvement required.</p></div>
                    <div class="ds-deflist__row"><span class="ds-deflist__term">Fast turnaround</span><p class="ds-deflist__desc">Get your complete interactive report in about one week — not months of consulting.</p></div>
                    <div class="ds-deflist__row"><span class="ds-deflist__term">Actionable</span><p class="ds-deflist__desc">Concrete recommendations with ROI projections you can implement immediately.</p></div>
                    <div class="ds-deflist__row"><span class="ds-deflist__term">Interactive</span><p class="ds-deflist__desc">A shareable web dashboard that makes stakeholder alignment effortless.</p></div>
                    <div class="ds-deflist__row"><span class="ds-deflist__term">Fixed fee</span><p class="ds-deflist__desc">You know the cost upfront — no scope creep, no hidden fees, no open-ended engagements.</p></div>
                    <div class="ds-deflist__row"><span class="ds-deflist__term">Natural next steps</span><p class="ds-deflist__desc">A clear implementation path — whether you work with us or take the plan to your own team.</p></div>
                </div>
            </div>
        </div>
    </section>

    <?php // ── Get started (GoHighLevel form) ───────────────────────── ?>
    <section class="ds-band ds-band--paper-2" id="get-started">
        <div class="ds-band__inner ds-band__inner--narrow">
            <span class="ds-eyebrow">Get Started</span>
            <h2>Get your AI Readiness Assessment.</h2>
            <p class="ds-lede">Tell us a bit about your business and we'll reach out to schedule your discovery session.</p>
            <div class="ds-formcard ds-formcard--bare" id="ds-ai-readiness-form">
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

    <?php // ── Final CTA ───────────────────────────────────────────── ?>
    <section class="ds-band ds-band--ink">
        <div class="ds-band__inner">
            <span class="ds-eyebrow">Get Started</span>
            <h2>Ready to discover your AI potential?</h2>
            <p class="ds-lede">Take the first step — most clients see their report within one week.</p>
            <div class="ds-cta-row">
                <a class="ds-btn ds-btn--primary" data-cta-location="ai-readiness-footer" href="#get-started">Start the assessment</a>
                <a class="ds-btn ds-btn--ghost" href="<?php echo esc_url( home_url('/contact/') ); ?>">Have questions? Let's talk</a>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
