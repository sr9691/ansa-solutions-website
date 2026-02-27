# Stripe Payment Setup Guide

## 1. Install Stripe PHP SDK

SSH into your server and navigate to the theme directory:

```bash
cd /path/to/wp-content/themes/ansa-solutions-website
composer require stripe/stripe-php
```

This creates a `vendor/` directory with the Stripe SDK. If Composer is not installed:

```bash
curl -sS https://getcomposer.org/installer | php
php composer.phar require stripe/stripe-php
```

## 2. Get Your Stripe API Keys

1. Go to [https://dashboard.stripe.com](https://dashboard.stripe.com) and log in
2. Click **Developers** in the left sidebar
3. Click **API keys**
4. You'll see two keys:
   - **Publishable key** — starts with `pk_test_` (test) or `pk_live_` (live)
   - **Secret key** — starts with `sk_test_` (test) or `sk_live_` (live). Click "Reveal" to copy it.

> Use **test keys** first to verify everything works, then switch to **live keys** when ready to accept real payments.

## 3. Add Keys to wp-config.php

Open `wp-config.php` (in your WordPress root, NOT the theme directory) and add these lines **above** the line that says `/* That's all, stop editing! */`:

```php
/* Stripe API Keys */
define( 'STRIPE_PUBLISHABLE_KEY', 'pk_test_XXXXXXXXXXXXXXXX' );
define( 'STRIPE_SECRET_KEY',      'sk_test_XXXXXXXXXXXXXXXX' );
define( 'STRIPE_WEBHOOK_SECRET',  'whsec_XXXXXXXXXXXXXXXX' );
```

Replace with your actual keys.

## 4. Create the Payment Page in WordPress

1. Go to **WordPress Admin > Pages > Add New**
2. Title: `Payment`
3. Slug: `payment`
4. In the **Page Attributes** panel (right sidebar), set **Template** to **Payment**
5. Publish the page

The page will now be accessible at `yoursite.com/payment/?tier=essentials` (or `standard` or `premium`).

## 5. Set Up the Stripe Webhook

1. Go to [https://dashboard.stripe.com/webhooks](https://dashboard.stripe.com/webhooks)
2. Click **Add endpoint**
3. Enter endpoint URL: `https://yourdomain.com/wp-json/ansa/v1/stripe-webhook`
4. Under **Events to send**, select: `payment_intent.succeeded`
5. Click **Add endpoint**
6. After creating, click the endpoint and copy the **Signing secret** (starts with `whsec_`)
7. Paste this as `STRIPE_WEBHOOK_SECRET` in your `wp-config.php`

## 6. Test the Flow

1. Visit `yoursite.com/payment/?tier=standard`
2. Fill in name, email, company
3. Use Stripe test card: `4242 4242 4242 4242`, any future expiry, any CVC
4. Submit — you should see the success message
5. Check your Stripe Dashboard > Payments to confirm

## 7. Go Live

When ready for real payments:

1. Switch to **live keys** in `wp-config.php` (replace `pk_test_` / `sk_test_` with `pk_live_` / `sk_live_`)
2. Create a new webhook endpoint in Stripe using your live mode, and update `STRIPE_WEBHOOK_SECRET`
3. Test with a real card (you can refund immediately from the Stripe Dashboard)

## Endpoints Reference

| Endpoint | Method | Purpose |
|---|---|---|
| `/wp-json/ansa/v1/create-payment-intent` | POST | Creates a Stripe PaymentIntent |
| `/wp-json/ansa/v1/stripe-webhook` | POST | Receives Stripe webhook events |

## Troubleshooting

- **"Stripe is not configured"** — Check that `STRIPE_SECRET_KEY` is defined in `wp-config.php` and that `vendor/autoload.php` exists in the theme directory
- **Card form not showing** — Check that `STRIPE_PUBLISHABLE_KEY` is defined in `wp-config.php`
- **Webhook failures** — Verify the webhook URL is publicly accessible and the signing secret matches
