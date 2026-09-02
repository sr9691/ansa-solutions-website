# ANSA Solutions — WordPress Theme

Custom WordPress theme for [ansa.solutions](https://ansa.solutions). Built for deployment on Hostinger via WP Pusher.

## Pages

| Page | Template | Nav Location |
|------|----------|-------------|
| Homepage | `front-page.php` | Main nav |
| Process Automation | `page-process-automation.php` | Services ▾ |
| AI Readiness Assessment | `page-ai-readiness.php` | Services ▾ |
| Automation Accelerators | `page-automation-accelerators.php` | Services ▾ |
| AI Readiness Questionnaire | `page-questionnaire.php` | Link from AI Readiness only |
| Sample Report Preview | `page-sample-report-preview.php` | Link from AI Readiness only |
| Sample Report (full) | `standalone/sample-report.html` | Unlocked after gate |
| Case Studies | `page-case-studies.php` | Main nav |
| Blog | `index.php` | Main nav |
| Contact | `page-contact.php` | Main nav |
| About | `page-about.php` | Main nav |

## Integrations

- **Stripe** — Payment checkout for AI Readiness tiers (placeholder URLs in `page-ai-readiness.php`)
- **HubSpot** — Forms for Accelerator demos + gated sample report (placeholder in templates)
- **Workato** — Questionnaire webhook (configured in standalone JS)
- **GA4** — Tracking ID: `G-8M27VDXHXD` (in `functions.php`)

## Brand

- **Primary**: `#374151`
- **Accent**: `#462CED`
- **Fonts**: Lato (400 / 700 / 900 + 400 italic) throughout

## Deployment

1. Install WordPress on Hostinger
2. Install WP Pusher plugin
3. Connect this repo as theme source
4. Create WordPress pages and assign templates
5. Configure Stripe product links
6. Add HubSpot portal ID and form GUIDs
7. Update Workato webhook ID in `standalone/ai-readiness-questionnaire.html` (line with `WEBHOOK_URL`)

## File Structure

```
ansa-theme/
├── style.css                         # Theme styles
├── functions.php                     # Theme setup, CPT, integrations
├── header.php                        # Global header/nav
├── footer.php                        # Global footer
├── front-page.php                    # Homepage
├── page-process-automation.php       # Services landing
├── page-ai-readiness.php             # AI Readiness sales page
├── page-automation-accelerators.php  # Automation Accelerators
├── page-case-studies.php             # Case studies archive
├── page-contact.php                  # Contact form
├── page-about.php                    # About page
├── page-sample-report-preview.php    # Report preview/gate
├── page-questionnaire.php            # Questionnaire wrapper
├── index.php                         # Blog archive
├── single.php                        # Single post template
├── 404.php                           # 404 error page
├── standalone/
│   ├── ai-readiness-questionnaire.html
│   └── sample-report.html
├── email-templates/
│   └── ai-readiness-confirmation.html
├── assets/
│   ├── js/
│   │   └── main.js
│   └── images/
├── template-parts/
│   └── [reusable template components]
└── README.md
```

## Key Features

### AI Readiness Questionnaire (`standalone/ai-readiness-questionnaire.html`)

Complete standalone form with:
- 6-section multi-step wizard
- Progress tracking with visual indicators
- Auto-save to localStorage
- Client-side validation
- Rating scales (5-point Likert)
- Checkbox groups with selection limits
- Responsive design (mobile-friendly)
- Posts to Workato webhook on submission

**To configure:**
1. Replace `YOUR_WEBHOOK_ID` in the HTML file with your actual Workato webhook ID
2. The form will auto-save as users fill it out
3. Validation prevents submission of incomplete sections

### Email Confirmation Template (`email-templates/ai-readiness-confirmation.html`)

Workato-compatible email template with:
- `{{variable}}` placeholders for Workato
- ANSA brand styling
- Professional layout with summary tables
- Mobile-responsive design
- Email-safe HTML (table-based layout)

**To use:**
1. Configure as email template in Workato
2. Map response fields to `{{placeholders}}`
3. Test with sample data before going live

### Page Templates

**`page-questionnaire.php`** — Wrapper for questionnaire
- No WordPress header/footer
- Includes standalone form directly
- Fallback error message if form missing

**`page-ai-readiness.php`** — Sales page for AI Readiness tier
- Product description
- Pricing options
- Stripe checkout links
- CTA to questionnaire

**`page-automation-accelerators.php`** — Product page
- Service overview
- Demo scheduling via HubSpot form
- Pricing/ROI calculator

## Customization

### Colors
Update ANSA brand colors in:
- `style.css` — CSS variables section
- `page-questionnaire.php` — Inline styles
- `email-templates/ai-readiness-confirmation.html` — Inline styles

### Webhook Configuration
Edit `standalone/ai-readiness-questionnaire.html`:
```javascript
const WEBHOOK_URL = 'https://webhook.workato.com/webhooks/rest/YOUR_WEBHOOK_ID';
```

### HubSpot Forms
Add form GUIDs to template files:
```php
<div class="hubspot-form" id="hubspot-form-<?php echo $form_id; ?>"></div>
<script>
    hbspt.forms.create({
        portalId: 'YOUR_PORTAL_ID',
        formId: 'YOUR_FORM_ID',
        target: '#hubspot-form-<?php echo $form_id; ?>'
    });
</script>
```

## Redesign — ANSA Design System (`ansa-ds`)

The site's presentation layer is the `ansa-ds` design system, namespaced `.ds-*`.

- `assets/css/ansa-ds.css` — component system (bands, editorial rail, hero,
  lazy video facade, steps, deflist, checklist, FAQ, cases, quote, stats,
  forms, buttons, ds header/footer). Loaded **after** `style.css`; applies to
  any document whose `<body>` carries the `ds` class.
- `assets/js/ansa-ds.js` — mobile nav toggle, lazy Vimeo facade (poster +
  play; the iframe is injected only on click so the hero LCP is never an
  embed), and the FAQ accordion.
- Palette: accent `#462CED`, ink `#0B0D12`, slate `#374151`, text `#111827`,
  paper `#FFFFFF`. Dark bands (`.ds-band--ink` / `--slate`) auto-adapt their
  children.
- The **Approach** page uses `page-approach.php` (assign it to a Page with
  slug `approach`). It replaces the former `page-process-automation.php`.
- The homepage "Get Started" form and standalone conversion form use the
  GoHighLevel iframe embed; the Contact / AI Readiness / Partner pages keep
  their existing HubSpot embeds (portal `50725925`).

`style.css` is still live (accelerator search UI, form styling, event cards,
blog partials, admin rules) and must not be gutted.

## Tracking & Cloudflare

Conversion tracking is injected by `ansa_conversion_tracking()` in
`functions.php`, **scoped to landing/conversion routes only** (home, contact,
ai-readiness-assessment, become-a-partner, calendar, approach,
workforce-ai-assessment) — not sitewide, because HubSpot tracking already runs
globally and three analytics libraries on every page hurts performance.

- **GoHighLevel** — external tracking, ID `tk_b2548077bc114ccbb22b7504c884abd1`.
  The script host defaults to `link.hayesgroupmarketing.com` and can be
  overridden with the `ansa_ghl_tracking_src` filter.
- **WhatConverts** — emits the inline `$wc_leads` attribution snippet plus the
  profile script, which defaults to the ANSA profile `170528`
  (`//s.ksrndkehqnwntyxlhgto.com/170528.js`). Override the full script URL with
  `ANSA_WHATCONVERTS_SRC` in `wp-config.php` if the profile changes. Both tags
  carry `data-cfasync="false"` so Rocket Loader can't defer them.
- The eight "See What's Possible" CTAs each carry a distinct
  `data-cta-location` (`hero`, `problem`, `how-it-works`, `proof`,
  `conversation`, `faq`, `form`, `nav`) for section-level attribution.

> ⚠️ **Cloudflare Rocket Loader must be disabled for these routes.** Rocket
> Loader defers/rewrites inline and third-party scripts and will likely break
> the WhatConverts (and GHL) tracking. Add a Cloudflare Configuration Rule that
> turns Rocket Loader **off** for the conversion routes above (or sitewide if
> simpler).

## Support

For questions or issues:
- Email: sr@ansa.solutions
- Website: ansa.solutions