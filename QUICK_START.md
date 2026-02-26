# ANSA Solutions Theme - Quick Start Guide

## Installation

1. Copy `ansa-theme` folder to `/wp-content/themes/`
2. Admin > Appearance > Themes > Activate ANSA Solutions
3. Admin > Appearance > Menus > Create Primary Menu
4. Admin > Appearance > Customize > assign the menu to "Primary Menu"

## Essential Setup Steps

### 1. Configure Navigation
```
Menu Items (in order):
- Home (link to homepage)
- Services (link to services page)
  - Process Automation (submenu)
  - AI Readiness Assessment (submenu)
  - Automation Accelerators (submenu)
- Case Studies (link to /case-studies/)
- Blog (link to /blog/)
- About (link to about page)
- Contact (link to contact page)
```

### 2. Create Key Pages
- Home (use homepage template)
- Services (showcase dropdown items)
- Case Studies (archive page created automatically)
- Blog (WordPress automatically creates)
- About
- Contact (add HubSpot form or contact form)

### 3. Add Company Information
- Admin > Settings > General > Site Title: "ANSA Solutions"
- Admin > Settings > General > Tagline: "AI Strategy & Implementation"
- Admin > Appearance > Customize > Site Identity > Logo

### 4. Verify GA4 Tracking
- GA4 ID is set in functions.php: `G-8M27VDXHXD`
- Verify in Google Analytics that tracking is active
- Check Admin > Settings > Privacy

## Common Customizations

### Change Brand Colors

Edit `/style.css` `:root` section:
```css
:root {
  --primary: #374151;      /* Change to new primary */
  --accent: #462CED;       /* Change to new accent */
  /* Other colors follow the same pattern */
}
```

### Add Custom Fonts
In `functions.php`, modify the Google Fonts URL:
```php
wp_enqueue_style('google-fonts-pjs', 'YOUR_GOOGLE_FONTS_URL');
```

### Modify Navigation Structure
Edit `header.php` fallback menu function or use WordPress admin menus.

### Add New Page Template
1. Create `template-[name].php` in theme root
2. Add header comment:
```php
<?php
/**
 * Template Name: My Custom Template
 */
```
3. File will appear in page template selector

### Customize Footer Content
Edit `footer.php` to:
- Add/remove sections
- Modify social links
- Update contact information
- Change footer menu items

## Common Tasks

### Create a Case Study
1. Admin > Case Studies > Add New
2. Add title, content, featured image
3. Assign category (optional)
4. Publish

### Add a Blog Post
1. Admin > Posts > Add New
2. Fill in title, content, featured image
3. Assign category
4. Publish

### Create a Service Page
1. Admin > Pages > Add New
2. Select "Default" or custom template
3. Use cards and sections with HTML/Gutenberg blocks
4. Publish and add to Services menu

### Embed HubSpot Form
In page content, use:
```php
<?php ansa_hubspot_form_embed('12345', '67890'); ?>
```
Replace with actual portal ID and form ID from HubSpot

### Embed Stripe Checkout
In page content or custom area:
```php
<a href="<?php echo ansa_get_stripe_checkout_url('price_xxx'); ?>" class="btn btn-primary">
  Checkout
</a>
```

## Helpful CSS Classes

### Buttons
```html
<a href="#" class="btn btn-primary">Primary</a>
<a href="#" class="btn btn-outline">Outline</a>
<a href="#" class="btn btn-white">White</a>
<a href="#" class="btn btn-sm">Small</a>
<a href="#" class="btn btn-lg">Large</a>
```

### Colors
```html
<div class="bg-primary">Dark background with white text</div>
<div class="bg-accent">Purple background</div>
<div class="text-primary">Dark text</div>
<div class="text-accent">Purple text</div>
<div class="text-light">Lighter gray text</div>
```

### Spacing
```html
<div class="mb-3">Margin bottom 1.5rem</div>
<div class="mt-2">Margin top 1rem</div>
<div class="p-3">Padding 1.5rem</div>
<div class="px-2">Horizontal padding</div>
<div class="py-2">Vertical padding</div>
```

### Layout
```html
<div class="grid">Multiple columns</div>
<div class="grid-2">2+ column grid</div>
<div class="container">Max width container</div>
<div class="flex flex-between">Flex with space-between</div>
<div class="section">Full-width section with padding</div>
```

## File Locations

```
ansa-theme/
├── style.css              ← Main CSS (edit colors here)
├── functions.php          ← Hook functions & theme setup
├── header.php             ← Header & nav (edit menu structure)
├── footer.php             ← Footer (edit company info & links)
├── index.php              ← Blog/archive template
├── single.php             ← Single post template
├── page.php               ← Page template
├── 404.php                ← 404 error page
├── searchform.php         ← Search form
├── template-parts/        ← Content template parts
│   ├── content.php
│   ├── content-excerpt.php
│   ├── content-page.php
│   ├── content-single.php
│   └── content-none.php
├── assets/js/main.js      ← JavaScript (edit interactions)
└── README.md              ← Full documentation
```

## Troubleshooting

### Menu Not Showing
- Admin > Appearance > Menus > Create menu
- Check "Display location" to Primary Menu
- Assign pages to menu items

### Fonts Not Loading
- Check Google Fonts URL in functions.php
- Clear browser cache
- Check console for SSL warnings

### Styles Not Applying
- Clear WordPress cache (if using cache plugin)
- Check CSS file is enqueued in functions.php
- Verify no CSS conflicts with plugins

### Mobile Menu Not Working
- Check JavaScript is enabled
- Verify main.js is loaded (check browser console)
- Check for JavaScript errors in console

## Performance Tips

- Install Astra Speed optimization or similar
- Enable object caching
- Compress images before uploading
- Use lazy loading for images
- Minimize unused plugins
- Use CDN for images

## Backup Best Practices

- Backup before theme updates
- Backup before major changes
- Use WordPress backup plugin
- Store copy of theme files separately

## Security Tips

- Keep WordPress updated
- Update all plugins regularly
- Use strong passwords
- Enable two-factor authentication
- Limit login attempts
- Remove unnecessary plugins
- Disable file editing: `define('DISALLOW_FILE_EDIT', true);`

---

For complete documentation, see `README.md`
For technical details, see `THEME_DELIVERY.md`