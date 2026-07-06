/**
 * ANSA Solutions Theme JavaScript
 * Main functionality and interactions
 */

(function() {
    'use strict';

    const app = {
        /**
         * Initialize the application
         */
        init: function() {
            this.setupEventListeners();
            this.initSmoothScroll();
        },

        /**
         * Setup general event listeners
         */
        setupEventListeners: function() {
            const contactLink = document.querySelector('a[href="#contact"]');
            if (contactLink) {
                contactLink.addEventListener('click', this.handleContactClick.bind(this));
            }

            const buttons = document.querySelectorAll('.btn');
            buttons.forEach((btn) => {
                btn.addEventListener('mouseenter', this.addButtonHover);
                btn.addEventListener('mouseleave', this.removeButtonHover);
            });
        },

        /**
         * Handle contact button click
         */
        handleContactClick: function(e) {
            e.preventDefault();
            const contactSection = document.getElementById('contact');
            if (contactSection) {
                contactSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        },

        /**
         * Initialize smooth scrolling
         */
        initSmoothScroll: function() {
            const links = document.querySelectorAll('a[href^="#"]');
            links.forEach((link) => {
                link.addEventListener('click', function(e) {
                    const href = this.getAttribute('href');
                    if (href === '#') {
                        return;
                    }

                    const target = document.querySelector(href);
                    if (target) {
                        e.preventDefault();
                        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }
                });
            });
        },

        /**
         * Add button hover effect
         */
        addButtonHover: function() {
            this.style.transform = 'translateY(-2px)';
        },

        /**
         * Remove button hover effect
         */
        removeButtonHover: function() {
            this.style.transform = 'translateY(0)';
        },
    };

    /**
     * Initialize on document ready
     */
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', () => {
            app.init();
        });
    } else {
        app.init();
    }

    /**
     * Expose app to global scope for custom scripts
     */
    window.ansaApp = app;
})();

/**
 * Intersection Observer for fade-in animations
 */
if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        },
        {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px',
        }
    );

    document.addEventListener('DOMContentLoaded', () => {
        const elements = document.querySelectorAll('.card, .section, .fade-in');
        elements.forEach((el) => {
            observer.observe(el);
        });
    });
}
