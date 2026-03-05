<?php
/**
 * Template Name: Calendar
 *
 * @package ANSA
 */

get_header(); ?>

<main id="main" class="site-main">

    <!-- Hero Section -->
    <section class="page-hero">
        <div class="container">
            <div class="page-hero__content">
                <h1 class="page-hero__title">Book a Meeting</h1>
                <p class="page-hero__description">Schedule time with Sundaresh to explore how AI can transform your business. Choose a time that works for you.</p>
            </div>
        </div>
    </section>

    <!-- Calendar Embed Section -->
    <section class="section calendar-section" id="book">
        <div class="container">
            <div class="calendar-embed-wrapper">
                <!-- HubSpot Meetings Embed -->
                <div class="meetings-iframe-container" data-src="https://meetings.hubspot.com/sundaresh?embed=true"></div>
                <script type="text/javascript" src="https://static.hsappstatic.net/MeetingsEmbed/ex/MeetingsEmbedCode.js"></script>
            </div>
        </div>
    </section>

</main>

<style>
.page-hero {
    background: var(--bg-dark, #0a0a0a);
    padding: 80px 0 60px;
    text-align: center;
}

.page-hero__title {
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 700;
    color: var(--text-light, #ffffff);
    margin-bottom: 1rem;
}

.page-hero__description {
    font-size: 1.125rem;
    color: var(--text-muted, #a0a0a0);
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.7;
}

.calendar-section {
    padding: 60px 0 80px;
    background: var(--bg-light, #f9f9f9);
}

.calendar-embed-wrapper {
    max-width: 900px;
    margin: 0 auto;
    background: #ffffff;
    border-radius: var(--radius-lg, 12px);
    border: 1px solid var(--border, #e5e5e5);
    overflow: hidden;
    box-shadow: 0 4px 24px rgba(0, 0, 0, 0.06);
}

.meetings-iframe-container {
    min-height: 700px;
}

.meetings-iframe-container iframe {
    width: 100% !important;
    border: none !important;
}

@media (max-width: 768px) {
    .page-hero {
        padding: 60px 0 40px;
    }

    .calendar-section {
        padding: 40px 0 60px;
    }

    .calendar-embed-wrapper {
        border-radius: 0;
        border-left: none;
        border-right: none;
    }

    .meetings-iframe-container {
        min-height: 600px;
    }
}
</style>

<?php get_footer(); ?>
