/* ============================================================================
   ANSA Design System — behaviour
   - Sticky mobile nav toggle
   - Lazy Vimeo facade (poster + play button; iframe injected on click only,
     so the hero LCP is never an embed)
   - FAQ accordion (accessible, progressive-enhancement friendly)
   ==========================================================================*/
(function () {
    'use strict';

    document.addEventListener('DOMContentLoaded', function () {
        initNav();
        initVideoFacades();
        initFaq();
    });

    /* ---- Mobile navigation ------------------------------------------- */
    function initNav() {
        var toggle = document.querySelector('.ds-navtoggle');
        var nav = document.getElementById('ds-primary-nav');
        if (!toggle || !nav) { return; }

        toggle.addEventListener('click', function () {
            var open = nav.classList.toggle('is-open');
            toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
        });

        // Close the menu after following an in-page link on mobile
        nav.addEventListener('click', function (e) {
            if (e.target.closest('a') && window.innerWidth <= 900) {
                nav.classList.remove('is-open');
                toggle.setAttribute('aria-expanded', 'false');
            }
        });

        // Reset when returning to desktop width
        var mq = window.matchMedia('(min-width: 901px)');
        (mq.addEventListener ? mq.addEventListener.bind(mq, 'change') : mq.addListener.bind(mq))(function () {
            if (mq.matches) {
                nav.classList.remove('is-open');
                toggle.setAttribute('aria-expanded', 'false');
            }
        });
    }

    /* ---- Lazy Vimeo facade ------------------------------------------- */
    function initVideoFacades() {
        var facades = document.querySelectorAll('.ds-video__facade[data-vimeo]');
        Array.prototype.forEach.call(facades, function (facade) {
            facade.addEventListener('click', function () {
                var id = facade.getAttribute('data-vimeo');
                if (!id || !/^\d+$/.test(id)) { return; }

                var iframe = document.createElement('iframe');
                iframe.setAttribute('src',
                    'https://player.vimeo.com/video/' + id +
                    '?autoplay=1&title=0&byline=0&portrait=0&dnt=1');
                iframe.setAttribute('title', facade.getAttribute('data-title') || 'Video');
                iframe.setAttribute('allow', 'autoplay; fullscreen; picture-in-picture');
                iframe.setAttribute('allowfullscreen', '');
                iframe.setAttribute('loading', 'lazy');

                var wrap = facade.closest('.ds-video') || facade.parentNode;
                facade.replaceWith(iframe);
                wrap.classList.add('is-playing');
            });
        });
    }

    /* ---- FAQ accordion ----------------------------------------------- */
    function initFaq() {
        var groups = document.querySelectorAll('.ds-faq');
        Array.prototype.forEach.call(groups, function (group) {
            group.setAttribute('data-ready', '');
            var items = group.querySelectorAll('.ds-faq__item');

            Array.prototype.forEach.call(items, function (item, i) {
                var q = item.querySelector('.ds-faq__q');
                var a = item.querySelector('.ds-faq__a');
                if (!q || !a) { return; }

                var id = 'ds-faq-' + (group.id || 'g') + '-' + i;
                a.id = id;
                q.setAttribute('aria-controls', id);
                q.setAttribute('aria-expanded', 'false');

                q.addEventListener('click', function () {
                    var open = item.classList.toggle('is-open');
                    q.setAttribute('aria-expanded', open ? 'true' : 'false');
                });
            });
        });
    }
})();
