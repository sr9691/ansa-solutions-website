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
- **Fonts**: Plus Jakarta Sans (headings), Inter (body)

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

## Support

For questions or issues:
- Email: sr@ansa.solutions
- Website: ansa.solutions