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
                <p class="page-hero__description" id="hero-description">Schedule time with our team to explore how AI can transform your business.</p>
            </div>
        </div>
    </section>

    <!-- Team Selector (hidden when URL param bypasses it) -->
    <section class="team-selector-section" id="team-selector-section">
        <div class="container">
            <p class="selector-label">Who would you like to meet with?</p>
            <div class="team-card-row">

                <button class="team-card active" data-member="sundaresh" data-url="https://meetings.hubspot.com/sundaresh?embed=true" data-name="Sundaresh Ramanathan" data-title="Founder &amp; CEO">
                    <div class="team-card__check">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.5 7L5.5 10L11.5 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="team-card__avatar">SR</div>
                    <div class="team-card__name">Sundaresh Ramanathan</div>
                    <div class="team-card__role">Founder &amp; CEO</div>
                </button>

                <button class="team-card" data-member="ken" data-url="https://meetings.hubspot.com/kturro/30-minute-virtual-coffee?embed=true" data-name="Ken Turro" data-title="COO">
                    <div class="team-card__check">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.5 7L5.5 10L11.5 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="team-card__avatar">KT</div>
                    <div class="team-card__name">Ken Turro</div>
                    <div class="team-card__role">COO</div>
                </button>

            </div>
        </div>
    </section>

    <!-- Calendar Embed Section -->
    <section class="section calendar-section" id="book">
        <div class="container">
            <div class="calendar-embed-wrapper">
                <div class="meetings-iframe-container" id="calendar-embed" data-src="https://meetings.hubspot.com/sundaresh?embed=true"></div>
                <script type="text/javascript" src="https://static.hsappstatic.net/MeetingsEmbed/ex/MeetingsEmbedCode.js"></script>
            </div>
        </div>
    </section>

</main>

<style>
.page-hero {
    background: linear-gradient(135deg, var(--primary) 0%, #1f2937 100%);
    padding: 80px 0 50px;
    text-align: center;
}

.page-hero__title {
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 700;
    color: #ffffff;
    margin-bottom: 1rem;
}

.page-hero__description {
    font-size: 1.125rem;
    color: rgba(255, 255, 255, 0.85);
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.7;
}

/* Team Selector */
.team-selector-section {
    background: linear-gradient(135deg, var(--primary) 0%, #1f2937 100%);
    padding: 0 0 50px;
}

.selector-label {
    text-align: center;
    font-size: 0.875rem;
    color: rgba(255, 255, 255, 0.6);
    margin-bottom: 1.25rem;
}

.team-card-row {
    display: flex;
    gap: 16px;
    justify-content: center;
    flex-wrap: wrap;
}

.team-card {
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 8px;
    padding: 24px 32px;
    border: 1.5px solid rgba(255, 255, 255, 0.12);
    border-radius: 12px;
    background: rgba(255, 255, 255, 0.04);
    cursor: pointer;
    transition: border-color 0.2s, background 0.2s;
    min-width: 200px;
    text-align: center;
}

.team-card:hover:not(.active) {
    border-color: rgba(255, 255, 255, 0.25);
    background: rgba(255, 255, 255, 0.07);
}

.team-card.active {
    border-color: #a78bfa;
    background: rgba(167, 139, 250, 0.1);
}

.team-card__check {
    position: absolute;
    top: 10px;
    right: 10px;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background: #a78bfa;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffffff;
    opacity: 0;
    transition: opacity 0.2s;
}

.team-card.active .team-card__check {
    opacity: 1;
}

.team-card__avatar {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.1);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
    font-weight: 600;
    color: #ffffff;
    letter-spacing: 0.05em;
}

.team-card.active .team-card__avatar {
    background: rgba(167, 139, 250, 0.25);
    color: #c4b5fd;
}

.team-card__name {
    font-size: 0.9375rem;
    font-weight: 600;
    color: #ffffff;
}

.team-card__role {
    font-size: 0.8125rem;
    color: rgba(255, 255, 255, 0.6);
}

/* Calendar Section */
.calendar-section {
    padding: 60px 0 80px;
    background: var(--bg-light, #f9f9f9);
}

.calendar-embed-wrapper {
    max-width: 900px;
    margin: 0 auto;
    background: #ffffff;
    border-radius: 12px;
    border: 1px solid #e5e5e5;
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

    .team-selector-section {
        padding: 0 0 40px;
    }

    .team-card-row {
        flex-direction: column;
        align-items: center;
    }

    .team-card {
        width: 100%;
        max-width: 320px;
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

<script>
(function () {
    var members = {
        sundaresh: {
            url: 'https://meetings.hubspot.com/sundaresh?embed=true',
            name: 'Sundaresh Ramanathan',
            title: 'Founder & CEO'
        },
        ken: {
            url: 'https://meetings.hubspot.com/kturro/30-minute-virtual-coffee?embed=true',
            name: 'Ken Turro',
            title: 'COO'
        }
    };

    function loadCalendar(url) {
        var embed = document.getElementById('calendar-embed');
        if (!embed) return;
        embed.innerHTML = '';
        embed.setAttribute('data-src', url);
        if (window.HubSpotMeetings && window.HubSpotMeetings.load) {
            window.HubSpotMeetings.load();
        } else {
            var iframe = document.createElement('iframe');
            iframe.src = url.replace('?embed=true', '');
            iframe.style.width = '100%';
            iframe.style.minHeight = '700px';
            iframe.style.border = 'none';
            iframe.allow = 'camera; microphone; fullscreen; payment';
            embed.appendChild(iframe);
        }
    }

    function selectMember(key) {
        var member = members[key];
        if (!member) return;

        document.querySelectorAll('.team-card').forEach(function (card) {
            card.classList.toggle('active', card.dataset.member === key);
        });

        var desc = document.getElementById('hero-description');
        if (desc) {
            desc.textContent = 'Schedule time with ' + member.name + ' to explore how AI can transform your business.';
        }

        loadCalendar(member.url);
    }

    document.querySelectorAll('.team-card').forEach(function (card) {
        card.addEventListener('click', function () {
            selectMember(this.dataset.member);
        });
    });

    // URL param bypass: ?ken or ?sundaresh
    var params = new URLSearchParams(window.location.search);
    var memberParam = null;
    if (params.has('ken')) memberParam = 'ken';
    else if (params.has('sundaresh')) memberParam = 'sundaresh';

    if (memberParam) {
        var selectorSection = document.getElementById('team-selector-section');
        if (selectorSection) selectorSection.style.display = 'none';

        var member = members[memberParam];
        var desc = document.getElementById('hero-description');
        if (desc) {
            desc.textContent = 'Schedule time with ' + member.name + ' to explore how AI can transform your business.';
        }

        loadCalendar(member.url);
    }
})();
</script>

<?php get_footer(); ?>
