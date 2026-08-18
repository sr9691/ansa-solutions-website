<?php
/**
 * Front page — ANSA Solutions
 *
 * The core narrative, in order: 01 Orchestrate your systems ->
 * 02 Automate your operations -> 03 Accelerate with AI. Built entirely on the
 * ansa-ds design system (.ds-*). No inline styles.
 *
 * @package ANSA_Solutions
 */

get_header(); ?>

<main id="ds-main" class="site-main">

    <?php // ── 1. Hero (two-column: copy left, video + triad right) ── ?>
    <section class="ds-hero">
        <div class="ds-hero__inner">
            <div class="ds-hero__grid">
                <div class="ds-hero__col">
                    <span class="ds-eyebrow">AI Strategy and Orchestration</span>
                    <h1>Your teams all have AI. Your systems <span class="ds-hl">still do not talk to each other.</span></h1>
                    <p class="ds-hero__lede">That gap is where the work stalls. Approvals wait, handoffs break, and the same data gets entered in three places. ANSA orchestrates your systems, automates your operations, and lets AI accelerate the whole business, so it finally runs as one.</p>
                    <div class="ds-cta-row">
                        <a class="ds-btn ds-btn--primary" data-cta-location="hero" href="#ds-getstarted">See What's Possible</a>
                    </div>
                </div>

                <div class="ds-hero__col">
                    <div class="ds-video ds-video--hero">
                        <button type="button" class="ds-video__facade" data-vimeo="1216529017" data-title="ANSA hero film" aria-label="Play hero film (55 seconds)">
                            <span class="ds-video__play" aria-hidden="true">
                                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>
                            </span>
                        </button>
                    </div>
                    <div class="ds-hero__triad">
                        <div class="ds-step"><span class="ds-step__num">01</span><h3 class="ds-step__title">Orchestrate your systems</h3></div>
                        <div class="ds-step"><span class="ds-step__num">02</span><h3 class="ds-step__title">Automate your operations</h3></div>
                        <div class="ds-step"><span class="ds-step__num">03</span><h3 class="ds-step__title">Accelerate with AI</h3></div>
                    </div>
                </div>
            </div>

            <div class="ds-trustbar">
                <span>Workato MSP Partner</span>
                <span>Mid-market operators</span>
                <span>Nationwide</span>
            </div>
        </div>
    </section>

    <?php // ── 2. Credential strip (3 rows) ────────────────────────── ?>
    <section class="ds-band ds-band--paper-2 ds-band--tight">
        <div class="ds-band__inner">
            <div class="ds-cred">
                <div class="ds-cred__row1">
                    <div class="ds-cred__logo">
                        <?php
                        // Drops in automatically once assets/images/workato-silver-partner.(svg|png) is committed.
                        echo ansa_theme_logo_img(
                            array( 'workato-silver-partner.svg', 'workato-silver-partner.png' ),
                            'Workato Automation League — Silver Partner',
                            '<span class="ds-cred__logo--ph">Workato<br>Silver Partner</span>'
                        ); // phpcs:ignore -- built with esc_url/esc_attr
                        ?>
                    </div>
                    <div>
                        <p class="ds-cred__title">Workato MSP Partner</p>
                        <p class="ds-cred__sub">Automation League, Silver</p>
                    </div>
                    <div>
                        <p>ANSA builds on a real control plane, the layer that coordinates systems, operations, and AI across the business. Not another tool sitting beside the ones you already run.</p>
                    </div>
                </div>

                <div class="ds-cred__row2">
                    <div class="ds-cred__logo"><?php echo ansa_theme_logo_img( 'client-pinnacle.png', 'Pinnacle Engineering', '<span class="ds-cred__logo--ph">Pinnacle Engineering</span>' ); ?></div>
                    <div class="ds-cred__logo"><?php echo ansa_theme_logo_img( 'client-marian.png', 'Marian University', '<span class="ds-cred__logo--ph">Marian University</span>' ); ?></div>
                    <div class="ds-cred__logo"><?php echo ansa_theme_logo_img( 'client-summers.png', 'Summers Plumbing, Heating &amp; Cooling', '<span class="ds-cred__logo--ph">Summers Plumbing,<br>Heating &amp; Cooling</span>' ); ?></div>
                </div>

                <div class="ds-cred__row3">
                    <p>Live in production across higher education, engineering, field services, wealth management, and more.</p>
                </div>
            </div>
        </div>
    </section>

    <?php // ── 3. The Story ────────────────────────────────────────── ?>
    <section class="ds-band ds-band--paper">
        <div class="ds-rail">
            <div class="ds-rail__aside">
                <span class="ds-eyebrow">The Story</span>
                <p class="ds-kicker">Why more AI has not moved the numbers you answer for.</p>
            </div>
            <div class="ds-rail__body">
                <h2>Every team has AI. Nothing underneath it connects.</h2>
                <p>Marketing, finance, sales, operations, HR, IT. Each one bought its own AI and got faster on its own. But the systems underneath do not talk, the operations are still manual, and the work stalls in the gaps between them.</p>
                <p>Approvals wait. Handoffs break. Data lives in ten places. Adding more AI to that just makes a faster mess. That is not transformation. That is fragmentation.</p>
                <div class="ds-cta-row">
                    <a class="ds-btn ds-btn--primary" data-cta-location="story" href="#ds-getstarted">See What's Possible</a>
                </div>
            </div>
        </div>
    </section>

    <?php // ── 4. The Problem ──────────────────────────────────────── ?>
    <section class="ds-band ds-band--warm">
        <div class="ds-rail">
            <div class="ds-rail__aside">
                <span class="ds-eyebrow">The Problem</span>
                <p class="ds-kicker">The intelligence is there. The foundation is not.</p>
            </div>
            <div class="ds-rail__body">
                <h2>You cannot accelerate what is not connected.</h2>
                <p class="ds-lede ds-lede--500">AI is an accelerant. It only pays off on top of a business that is already coordinated underneath.</p>
                <p>That is why more AI has not made your business faster. Every pilot ran. Every team got quicker on its own. And none of it reached the outcome, because the work still stops the moment it crosses between them.</p>

                <div class="ds-deflist ds-deflist--tight">
                    <div class="ds-deflist__row">
                        <span class="ds-deflist__term">Approvals</span>
                        <p class="ds-deflist__desc">Sit in somebody's inbox until a person remembers to chase them.</p>
                    </div>
                    <div class="ds-deflist__row">
                        <span class="ds-deflist__term">Handoffs</span>
                        <p class="ds-deflist__desc">Work crosses from sales to finance to operations and stops at every border.</p>
                    </div>
                    <div class="ds-deflist__row">
                        <span class="ds-deflist__term">Data entry</span>
                        <p class="ds-deflist__desc">The same record gets typed into three systems, and none of the three agree.</p>
                    </div>
                    <div class="ds-deflist__row">
                        <span class="ds-deflist__term">Reporting</span>
                        <p class="ds-deflist__desc">The numbers you answer for get rebuilt by hand, from exports, every month.</p>
                    </div>
                </div>

                <div class="ds-point">
                    <span class="ds-point__label">The Point</span>
                    <p class="ds-point__headline">Get the foundation right and <span class="ds-hl-accent">AI finally has something to accelerate.</span></p>
                </div>

                <div class="ds-cta-row">
                    <a class="ds-btn ds-btn--primary" data-cta-location="problem" href="#ds-getstarted">See What's Possible</a>
                </div>
            </div>
        </div>
    </section>

    <?php // ── 5. How It Works (divided rows, no boxes) ────────────── ?>
    <section class="ds-band ds-band--ink">
        <div class="ds-rail">
            <div class="ds-rail__aside">
                <span class="ds-eyebrow">How It Works</span>
                <p class="ds-kicker">Three moves, in order. The order is the whole point.</p>
            </div>
            <div class="ds-rail__body">
                <h2>How ANSA does it.</h2>

                <div class="ds-steps ds-steps--rows">
                    <div class="ds-step">
                        <span class="ds-step__num">01</span>
                        <h3 class="ds-step__title">Orchestrate your systems</h3>
                        <p class="ds-step__body">We connect the tools, data, and platforms you already run so they finally work as one.</p>
                    </div>
                    <div class="ds-step">
                        <span class="ds-step__num">02</span>
                        <h3 class="ds-step__title">Automate your operations</h3>
                        <p class="ds-step__body">We turn manual, stop and start processes and approvals into work that flows end to end.</p>
                    </div>
                    <div class="ds-step">
                        <span class="ds-step__num">03</span>
                        <h3 class="ds-step__title">Accelerate with AI</h3>
                        <p class="ds-step__body">With the foundation coordinated, AI speeds up the whole business instead of adding one more silo.</p>
                    </div>
                </div>

                <p class="ds-note-spaced">As a Workato MSP partner, ANSA builds this on a real control plane, the layer that coordinates systems, operations, and AI across the business. That is how the promise of AI becomes the reality.</p>

                <div class="ds-cta-row">
                    <a class="ds-btn ds-btn--primary" data-cta-location="how-it-works" href="#ds-getstarted">See What's Possible</a>
                </div>
            </div>
        </div>
    </section>

    <?php // ── 6. Proof ────────────────────────────────────────────── ?>
    <section class="ds-band ds-band--proof">
        <div class="ds-rail">
            <div class="ds-rail__aside">
                <span class="ds-eyebrow">Proof</span>
                <p class="ds-kicker">Four clients, four different operating problems, one connected foundation.</p>
            </div>
            <div class="ds-rail__body">
                <h2>Four businesses that made it run as one.</h2>

                <div class="ds-cases ds-cases--swipe">

                    <article class="ds-case">
                        <div class="ds-case__logo"><?php echo ansa_theme_logo_img( 'client-marian.png', 'Marian University', 'Marian University' ); ?></div>
                        <div class="ds-case__content">
                            <span class="ds-case__index">Case 01</span>
                            <p class="ds-case__client">Marian University</p>
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
                        <div class="ds-case__logo"><?php echo ansa_theme_logo_img( 'client-pinnacle.png', 'Pinnacle Engineering', 'Pinnacle Engineering' ); ?></div>
                        <div class="ds-case__content">
                            <span class="ds-case__index">Case 02</span>
                            <p class="ds-case__client">Pinnacle Engineering</p>
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
                        <div class="ds-case__logo"><?php echo ansa_theme_logo_img( 'client-summers.png', 'Summers Plumbing, Heating &amp; Cooling', 'Summers Plumbing, Heating &amp; Cooling' ); ?></div>
                        <div class="ds-case__content">
                            <span class="ds-case__index">Case 03</span>
                            <p class="ds-case__client">Summers Plumbing, Heating &amp; Cooling</p>
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
                            <p class="ds-case__client">National Wealth Management Firm</p>
                            <span class="ds-case__sector">RIA Platform</span>
                            <p class="ds-case__headline">130 Microsoft 365 tenants orchestrated without centralizing any of it.</p>
                            <p class="ds-case__body">A national wealth management platform with a 15 person technology team supports 130 Microsoft 365 tenants across affiliated advisor firms. ANSA delivered a federated integration architecture. Rather than centralizing advisor data, the design keeps that data in place and orchestrates access across custodians and platforms with a minimal compliance log store.</p>
                            <div class="ds-stats">
                                <div class="ds-stat"><span class="ds-stat__value">130</span><span class="ds-stat__label">M365 tenants</span></div>
                                <div class="ds-stat"><span class="ds-stat__value">15</span><span class="ds-stat__label">Person tech team</span></div>
                            </div>
                        </div>
                    </article>

                </div>

                <div class="ds-cta-row">
                    <a class="ds-btn ds-btn--primary" data-cta-location="proof" href="#ds-getstarted">See What's Possible</a>
                    <a class="ds-btn ds-btn--ghost" href="<?php echo esc_url( home_url('/case-studies/') ); ?>">See all six case studies</a>
                </div>
            </div>
        </div>
    </section>

    <?php // ── 7. The Conversation ─────────────────────────────────── ?>
    <section class="ds-band ds-band--warm">
        <div class="ds-rail">
            <div class="ds-rail__aside">
                <span class="ds-eyebrow">The Conversation</span>
                <p class="ds-kicker">No demo. No access. One real conversation.</p>
            </div>
            <div class="ds-rail__body">
                <h2>What actually happens when we talk.</h2>
                <p>You do not need to hand over access or sit through a demo. This is a short strategy conversation with the people who do this every day. We walk through what orchestration looks like for a company in your position, where the gaps usually hide, and where to start. You bring your reality, we bring the orchestration and control plane point of view, and what is possible for you comes out of the conversation.</p>

                <ol class="ds-checklist ds-checklist--divided">
                    <li>A clear picture of what running as one could look like for your business.</li>
                    <li>Where coordination usually breaks down for companies like yours.</li>
                    <li>A practical first step you can act on.</li>
                    <li>No access required, no obligation, just a real conversation.</li>
                </ol>

                <div class="ds-cta-row">
                    <a class="ds-btn ds-btn--primary" data-cta-location="conversation" href="#ds-getstarted">See What's Possible</a>
                </div>
            </div>
        </div>
    </section>

    <?php // ── 8. Who We Serve ─────────────────────────────────────── ?>
    <section class="ds-band ds-band--paper">
        <div class="ds-rail">
            <div class="ds-rail__aside">
                <span class="ds-eyebrow">Who We Serve</span>
                <p class="ds-kicker">Coordination first. Technology second.</p>
            </div>
            <div class="ds-rail__body">
                <h2>Built for mid-market operators.</h2>
                <p class="ds-lede ds-lede--700">ANSA is an AI strategy and orchestration firm and a Workato MSP partner, working with mid-market companies nationwide.</p>
                <p>We help those companies coordinate the tools and teams they already have into measurable outcomes by fixing coordination first and adding technology second.</p>

                <div class="ds-faq" id="ds-faq-home">
                    <div class="ds-faq__item">
                        <button type="button" class="ds-faq__q">Do you need access to our systems?</button>
                        <div class="ds-faq__a"><p>Not for the first conversation. Nothing is connected and nothing is installed. If we go further, access is scoped and agreed before anyone touches anything.</p></div>
                    </div>
                    <div class="ds-faq__item">
                        <button type="button" class="ds-faq__q">Do we have to replace the tools we already run?</button>
                        <div class="ds-faq__a"><p>No. Orchestration connects what you already own. At Marian, Populi, Great Plains, ADP and Microsoft 365 all stayed exactly where they were.</p></div>
                    </div>
                    <div class="ds-faq__item">
                        <button type="button" class="ds-faq__q">Who does the actual build?</button>
                        <div class="ds-faq__a"><p>ANSA's team builds it, and we teach yours while we do. Marian's internal integration lead now extends the platform without us, which is the point.</p></div>
                    </div>
                    <div class="ds-faq__item">
                        <button type="button" class="ds-faq__q">Does this only work if we are already on Workato?</button>
                        <div class="ds-faq__a"><p>No. ANSA is a Workato MSP partner and builds on that control plane, but the first conversation is about where coordination breaks in your business, not about licensing.</p></div>
                    </div>
                </div>

                <div class="ds-cta-row">
                    <a class="ds-btn ds-btn--primary" data-cta-location="faq" href="#ds-getstarted">See What's Possible</a>
                </div>
            </div>
        </div>
    </section>

    <?php // ── 9. Get Started (light; GHL embed only) ──────────────── ?>
    <section class="ds-band ds-band--warm" id="ds-getstarted">
        <div class="ds-formwrap">
            <div class="ds-formwrap__intro">
                <span class="ds-eyebrow">Get Started</span>
                <h2>Start with one conversation.</h2>
                <p class="ds-lede ds-lede--muted">It takes a few minutes to book and gives you a clear first step. See what is possible when your business runs as one.</p>

                <div class="ds-pullquote">
                    <span class="ds-pullquote__label">What this looks like</span>
                    <p class="ds-pullquote__text"><span>Marian licensed a platform and had nothing running on it.</span> <span class="ds-hl-accent">Two integrations later, their own team builds the next ones.</span></p>
                </div>
            </div>

            <div class="ds-formcard ds-formcard--bare" id="ds-getstarted-form">
                <iframe
                    class="ds-embed"
                    src="https://api.hayesgroupmarketing.com/widget/form/oyWFnpyIxeU3JacEMI5R"
                    id="inline-oyWFnpyIxeU3JacEMI5R"
                    data-layout="{'id':'INLINE'}"
                    data-trigger-type="alwaysShow"
                    data-form-id="oyWFnpyIxeU3JacEMI5R"
                    data-layout-iframe-id="inline-oyWFnpyIxeU3JacEMI5R"
                    data-form-name="ANSA Conversation Form"
                    title="Start a conversation with ANSA Solutions"
                    loading="lazy"
                    scrolling="no"></iframe>
                <script src="https://api.hayesgroupmarketing.com/js/form_embed.js"></script>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
