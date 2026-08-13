<?php
/**
 * Template Name: Case Studies
 * Template Post Type: page
 *
 * Six case studies in the .ds-case format: four new (Marian, Pinnacle,
 * Summers, RIA platform) plus two existing (water management, engineering)
 * reframed. Stats appear only where real numbers exist.
 *
 * @package ANSA_Solutions
 */

get_header(); ?>

<main id="ds-main" class="site-main">

    <?php // ── Hero ────────────────────────────────────────────────── ?>
    <section class="ds-hero">
        <div class="ds-hero__inner">
            <span class="ds-eyebrow">Case Studies</span>
            <h1>Proven automation outcomes.</h1>
            <p class="ds-hero__lede">ANSA partners with operations-driven organizations to eliminate friction across systems, teams, and processes. We don't count scripts or steps — we count outcomes.</p>
        </div>
    </section>

    <?php // ── Six cases ───────────────────────────────────────────── ?>
    <section class="ds-band ds-band--proof">
        <div class="ds-band__inner">
            <div class="ds-cases">

                <article class="ds-case">
                    <div class="ds-case__logo">Marian University</div>
                    <div class="ds-case__content">
                        <span class="ds-case__index">Case 01</span>
                        <h2 class="ds-case__client">Marian University</h2>
                        <span class="ds-case__sector">Higher Education</span>
                        <p class="ds-case__headline">Two production integrations live, and a team that can build the next ones.</p>
                        <p class="ds-case__body">Marian licensed Workato but needed a partner to stand the platform up and prove it with real workflows. ANSA configured the tenant, governance, and connections across Populi, Great Plains, ADP, and Microsoft 365, then delivered two production integrations. Donation data now flows from Populi into Great Plains with a daily audit report, and student and employee onboarding runs with duplicate detection across all three systems. ANSA also mentored Marian's internal integration lead on recipe design and Workato's GEARS framework, so the university can extend the platform without us.</p>
                        <blockquote class="ds-quote">
                            <span class="ds-quote__label">In their words</span>
                            <p class="ds-quote__text">We had the license and a plan. ANSA got it running, then made sure my own team could build the next one without them.</p>
                            <p class="ds-quote__attr">Integration Lead, Marian University</p>
                        </blockquote>
                        <div class="ds-stats">
                            <div class="ds-stat"><span class="ds-stat__value">2</span><span class="ds-stat__label">Integrations live</span></div>
                            <div class="ds-stat"><span class="ds-stat__value">4</span><span class="ds-stat__label">Systems connected</span></div>
                        </div>
                    </div>
                </article>

                <article class="ds-case">
                    <div class="ds-case__logo">Pinnacle Engineering</div>
                    <div class="ds-case__content">
                        <span class="ds-case__index">Case 02</span>
                        <h2 class="ds-case__client">Pinnacle Engineering</h2>
                        <span class="ds-case__sector">AEC</span>
                        <p class="ds-case__headline">Payment files that move from Ajera to Corpay untouched.</p>
                        <p class="ds-case__body">Pinnacle needed payment files moving from Ajera to Corpay without anyone touching them. ANSA configured the production Workato workspace and built the recipe that generates the payment file on an Ajera trigger, then delivers it to Corpay's sFTP server automatically, with monitoring and alerting around the handoff. Pinnacle had already invested in Workato licensing, and the engagement expanded into broader automation support including Ajera to Mosaic project data sync.</p>
                        <blockquote class="ds-quote">
                            <span class="ds-quote__label">In their words</span>
                            <p class="ds-quote__text">Payment files used to wait on somebody remembering. Now they move on their own and we only hear about it if something breaks.</p>
                            <p class="ds-quote__attr">Operations Lead, Pinnacle Engineering</p>
                        </blockquote>
                        <div class="ds-stats">
                            <div class="ds-stat"><span class="ds-stat__value">1</span><span class="ds-stat__label">Manual touch</span></div>
                            <div class="ds-stat"><span class="ds-stat__value">Live</span><span class="ds-stat__label">Monitoring and alerts</span></div>
                        </div>
                    </div>
                </article>

                <article class="ds-case">
                    <div class="ds-case__logo">Summers Plumbing, Heating &amp; Cooling</div>
                    <div class="ds-case__content">
                        <span class="ds-case__index">Case 03</span>
                        <h2 class="ds-case__client">Summers Plumbing, Heating &amp; Cooling</h2>
                        <span class="ds-case__sector">Residential Services</span>
                        <p class="ds-case__headline">Close to 11,000 minutes of AP effort a month, now handled by exception.</p>
                        <p class="ds-case__body">Summers processes roughly 50 invoices a day across 14 locations, and manual matching ran about 10 minutes each, close to 11,000 minutes of AP effort every month. ANSA deployed an AI Accelerator against their existing email, ServiceTitan, and Sage Intacct stack. Invoices arrive in the inbox, get extracted and auto matched, and only genuine exceptions route to central accounting. A company mapping layer reads the location signal off the invoice itself and posts each bill to the correct ServiceTitan tenant and Sage entity.</p>
                        <div class="ds-stats">
                            <div class="ds-stat"><span class="ds-stat__value">~11,000</span><span class="ds-stat__label">AP minutes a month</span></div>
                            <div class="ds-stat"><span class="ds-stat__value">14</span><span class="ds-stat__label">Locations mapped</span></div>
                        </div>
                    </div>
                </article>

                <article class="ds-case">
                    <div class="ds-case__logo">National Wealth Management Firm</div>
                    <div class="ds-case__content">
                        <span class="ds-case__index">Case 04</span>
                        <h2 class="ds-case__client">National Wealth Management Firm</h2>
                        <span class="ds-case__sector">RIA Platform</span>
                        <p class="ds-case__headline">130 Microsoft 365 tenants orchestrated without centralizing any of it.</p>
                        <p class="ds-case__body">A national wealth management platform with a 15 person technology team supports 130 Microsoft 365 tenants across affiliated advisor firms. ANSA delivered a federated integration architecture. Rather than centralizing advisor data, the design keeps that data in place and orchestrates access across custodians and platforms with a minimal compliance log store.</p>
                        <div class="ds-stats">
                            <div class="ds-stat"><span class="ds-stat__value">130</span><span class="ds-stat__label">M365 tenants</span></div>
                            <div class="ds-stat"><span class="ds-stat__value">15</span><span class="ds-stat__label">Person tech team</span></div>
                        </div>
                    </div>
                </article>

                <article class="ds-case">
                    <div class="ds-case__logo">Smart Water Management</div>
                    <div class="ds-case__content">
                        <span class="ds-case__index">Case 05</span>
                        <h2 class="ds-case__client">Smart Water Management</h2>
                        <span class="ds-case__sector">Water Management &amp; Infrastructure</span>
                        <p class="ds-case__headline">Automating field, finance, and customer operations.</p>
                        <p class="ds-case__body">This smart water management company provides intelligent solutions that operate at the intersection of physical infrastructure, software, and customer-facing services. Their environment required highly reliable data movement between field operations, billing systems, and customer platforms. ANSA delivered event-driven orchestration that reduced manual reconciliation, improved data accuracy, and ensured operational data flowed predictably across systems — with exception handling designed for operational teams, not IT tickets.</p>
                    </div>
                </article>

                <article class="ds-case">
                    <div class="ds-case__logo">Multi-Discipline Engineering</div>
                    <div class="ds-case__content">
                        <span class="ds-case__index">Case 06</span>
                        <h2 class="ds-case__client">Multi-Discipline Engineering</h2>
                        <span class="ds-case__sector">Engineering</span>
                        <p class="ds-case__headline">Engineering, finance, and project workflow orchestration.</p>
                        <p class="ds-case__body">This multi-discipline engineering firm executes projects where project execution, financial accuracy, and compliance are tightly coupled. As the firm grew, disconnected systems across CRM, project accounting, expense management, and finance created delays and reporting challenges. ANSA designed and implemented clean, auditable workflows that orchestrated project setup, cost tracking, and billing processes — giving the firm clear audit trails across engineering and finance.</p>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <?php // ── Common threads ──────────────────────────────────────── ?>
    <section class="ds-band ds-band--paper-2">
        <div class="ds-rail">
            <div class="ds-rail__aside">
                <span class="ds-eyebrow">Common Threads</span>
                <p class="ds-kicker">What every one of these engagements had in common.</p>
            </div>
            <div class="ds-rail__body">
                <p class="ds-lede">Each organization had invested in the right tools, but the connections between those tools were manual, fragile, and hard to audit. The result was operational friction — slowdowns, errors, and risk that no individual system could address alone.</p>
                <div class="ds-deflist">
                    <div class="ds-deflist__row">
                        <span class="ds-deflist__term">Mission-critical</span>
                        <p class="ds-deflist__desc">Operations with no tolerance for fragile automation.</p>
                    </div>
                    <div class="ds-deflist__row">
                        <span class="ds-deflist__term">Multiple systems</span>
                        <p class="ds-deflist__desc">ERP, CRM, operational platforms, and finance tools that never spoke to each other.</p>
                    </div>
                    <div class="ds-deflist__row">
                        <span class="ds-deflist__term">Real risk</span>
                        <p class="ds-deflist__desc">Regulatory, safety, or financial stakes where accuracy and compliance are non-negotiable.</p>
                    </div>
                    <div class="ds-deflist__row">
                        <span class="ds-deflist__term">Durability</span>
                        <p class="ds-deflist__desc">A need for clean, auditable, durable workflows — governance you can trust at scale.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php // ── How we operate ──────────────────────────────────────── ?>
    <section class="ds-band ds-band--paper">
        <div class="ds-rail">
            <div class="ds-rail__aside">
                <span class="ds-eyebrow">How We Operate</span>
                <p class="ds-kicker">A pattern that respects how operations actually run.</p>
            </div>
            <div class="ds-rail__body">
                <div class="ds-steps">
                    <div class="ds-step">
                        <span class="ds-step__num">01</span>
                        <h3 class="ds-step__title">Find the friction</h3>
                        <p class="ds-step__body">Identify one or two workflows creating friction today.</p>
                    </div>
                    <div class="ds-step">
                        <span class="ds-step__num">02</span>
                        <h3 class="ds-step__title">Design around outcomes</h3>
                        <p class="ds-step__body">Design automation around outcomes, not tools.</p>
                    </div>
                    <div class="ds-step">
                        <span class="ds-step__num">03</span>
                        <h3 class="ds-step__title">Deliver value fast</h3>
                        <p class="ds-step__body">Deliver measurable value in six to eight weeks.</p>
                    </div>
                    <div class="ds-step">
                        <span class="ds-step__num">04</span>
                        <h3 class="ds-step__title">Scale what works</h3>
                        <p class="ds-step__body">Scale proven patterns across the organization.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php // ── Final CTA ───────────────────────────────────────────── ?>
    <section class="ds-band ds-band--ink">
        <div class="ds-band__inner">
            <span class="ds-eyebrow">Get Started</span>
            <h2>Ready to see what this looks like for you?</h2>
            <p class="ds-lede">Let's identify the workflows that are costing you time, accuracy, and scale.</p>
            <div class="ds-cta-row">
                <a class="ds-btn ds-btn--primary" data-cta-location="case-studies" href="<?php echo esc_url( home_url('/contact/') ); ?>">See What's Possible</a>
                <a class="ds-btn ds-btn--ghost" href="<?php echo esc_url( home_url('/ai-readiness-assessment/') ); ?>">Start with an assessment</a>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
