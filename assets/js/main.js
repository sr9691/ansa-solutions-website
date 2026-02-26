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
            this.initFormHandling();
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
         * Initialize form handling
         */
        initFormHandling: function() {
            const forms = document.querySelectorAll('form');
            forms.forEach((form) => {
                form.addEventListener('submit', this.handleFormSubmit.bind(this));
            });
        },

        /**
         * Handle form submission
         */
        handleFormSubmit: async function(e) {
            const form = e.target;

            if (form.getAttribute('data-no-ajax')) {
                return true;
            }

            e.preventDefault();

            const formData = new FormData(form);
            const data = {
                name: formData.get('name') || formData.get('full_name') || '',
                email: formData.get('email'),
                message: formData.get('message') || formData.get('comment') || '',
            };

            if (!data.name || !data.email) {
                this.showFormError(form, 'Please fill in all required fields.');
                return;
            }

            const submitBtn = form.querySelector('button[type="submit"]');
            const originalText = submitBtn ? submitBtn.textContent : '';

            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.textContent = 'Sending...';
            }

            try {
                const response = await fetch(`${ansaTheme.ajaxUrl}?action=ansa_contact_form`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-WP-Nonce': ansaTheme.nonce,
                    },
                    body: JSON.stringify(data),
                });

                const result = await response.json();

                if (result.success) {
                    this.showFormSuccess(form, 'Thank you! Your message has been sent successfully.');
                    form.reset();
                } else {
                    this.showFormError(form, result.message || 'Failed to send message. Please try again.');
                }
            } catch (error) {
                console.error('Form submission error:', error);
                this.showFormError(form, 'An error occurred. Please try again later.');
            } finally {
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.textContent = originalText;
                }
            }
        },

        /**
         * Show form error message
         */
        showFormError: function(form, message) {
            this.removeFormMessages(form);
            const errorDiv = document.createElement('div');
            errorDiv.className = 'form-message form-error';
            errorDiv.setAttribute('role', 'alert');
            errorDiv.textContent = message;
            form.insertBefore(errorDiv, form.firstChild);
            setTimeout(() => {
                errorDiv.remove();
            }, 5000);
        },

        /**
         * Show form success message
         */
        showFormSuccess: function(form, message) {
            this.removeFormMessages(form);
            const successDiv = document.createElement('div');
            successDiv.className = 'form-message form-success';
            successDiv.setAttribute('role', 'status');
            successDiv.textContent = message;
            form.insertBefore(successDiv, form.firstChild);
            setTimeout(() => {
                successDiv.remove();
            }, 5000);
        },

        /**
         * Remove form messages
         */
        removeFormMessages: function(form) {
            const messages = form.querySelectorAll('.form-message');
            messages.forEach((msg) => {
                msg.remove();
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