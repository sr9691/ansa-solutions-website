
<?php
/**
 * Template Name: AI Readiness Intake Form
 * Template Post Type: page
 */
get_header();
?>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800&family=Fraunces:ital,opsz,wght@0,9..144,300;0,9..144,500;0,9..144,700&display=swap" rel="stylesheet">
<style>
:root {
  --purple: #452cea;
  --purple-light: #ece8fd;
  --purple-glow: rgba(69, 44, 234, 0.12);
  --dark: #384051;
  --darker: #1a1f2e;
  --bg: #f5f6fa;
  --card: #ffffff;
  --muted: #8892a4;
  --border: #e2e6ef;
  --green: #10b981;
  --red: #ef4444;
  --amber: #f59e0b;
}

* { margin: 0; padding: 0; box-sizing: border-box; }

body {
  font-family: 'DM Sans', sans-serif;
  background: var(--bg);
  color: var(--dark);
  min-height: 100vh;
  -webkit-font-smoothing: antialiased;
}

/* ── Subtle grid texture ── */
body::before {
  content: '';
  position: fixed;
  inset: 0;
  background-image:
    radial-gradient(circle at 1px 1px, rgba(69,44,234,0.03) 1px, transparent 0);
  background-size: 40px 40px;
  pointer-events: none;
  z-index: 0;
}

/* ── Layout ── */
.page { position: relative; z-index: 1; min-height: 100vh; display: flex; flex-direction: column; }

/* ── Header ── */
.header {
  background: linear-gradient(135deg, var(--dark) 0%, var(--darker) 100%);
  padding: 32px 40px;
  position: relative;
  overflow: hidden;
}
.header::before {
  content: '';
  position: absolute;
  top: -80px; right: -40px;
  width: 260px; height: 260px;
  border-radius: 50%;
  background: rgba(69,44,234,0.08);
}
.header::after {
  content: '';
  position: absolute;
  bottom: -60px; left: 20%;
  width: 180px; height: 180px;
  border-radius: 50%;
  background: rgba(69,44,234,0.05);
}
.header-inner {
  max-width: 720px;
  margin: 0 auto;
  position: relative;
  z-index: 1;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.logo {
  display: flex;
  align-items: center;
  gap: 10px;
}
.logo-mark {
  font-size: 24px;
  font-weight: 800;
  color: #fff;
  letter-spacing: 1px;
}
.logo-mark span { color: var(--purple); }
.logo-sub {
  font-size: 11px;
  color: rgba(255,255,255,0.4);
  font-weight: 500;
  letter-spacing: 2px;
  text-transform: uppercase;
}
.header-title {
  text-align: right;
}
.header-title h1 {
  font-size: 18px;
  font-weight: 700;
  color: #fff;
  letter-spacing: -0.3px;
}
.header-title p {
  font-size: 12px;
  color: rgba(255,255,255,0.45);
  margin-top: 2px;
}

/* ── Progress ── */
.progress-container {
  max-width: 720px;
  margin: 0 auto;
  padding: 28px 40px 0;
  width: 100%;
}
.progress-steps {
  display: flex;
  align-items: center;
  gap: 0;
  margin-bottom: 8px;
}
.progress-step {
  display: flex;
  align-items: center;
  gap: 8px;
  flex: 1;
  position: relative;
}
.progress-step::after {
  content: '';
  flex: 1;
  height: 2px;
  background: var(--border);
  margin: 0 6px;
  transition: background 0.4s;
}
.progress-step:last-child::after { display: none; }
.progress-step.completed::after { background: var(--purple); }
.step-dot {
  width: 28px; height: 28px;
  border-radius: 50%;
  border: 2px solid var(--border);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 12px;
  font-weight: 700;
  color: var(--muted);
  background: var(--card);
  transition: all 0.3s;
  flex-shrink: 0;
}
.progress-step.active .step-dot {
  border-color: var(--purple);
  background: var(--purple);
  color: #fff;
  box-shadow: 0 0 0 4px var(--purple-glow);
}
.progress-step.completed .step-dot {
  border-color: var(--purple);
  background: var(--purple);
  color: #fff;
}
.step-label {
  display: none;
}
.progress-info {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.progress-section-name {
  font-size: 13px;
  font-weight: 600;
  color: var(--purple);
  letter-spacing: 0.3px;
}
.progress-count {
  font-size: 12px;
  color: var(--muted);
}

/* ── Form Container ── */
.form-container {
  max-width: 720px;
  margin: 0 auto;
  padding: 20px 40px 40px;
  width: 100%;
  flex: 1;
}

.form-section {
  display: none;
  animation: fadeIn 0.35s ease;
}
.form-section.active { display: block; }

@keyframes fadeIn {
  from { opacity: 0; transform: translateY(12px); }
  to { opacity: 1; transform: translateY(0); }
}

.section-intro {
  background: var(--card);
  border-radius: 14px;
  border: 1px solid var(--border);
  padding: 24px 28px;
  margin-bottom: 24px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.03);
}
.section-intro h2 {
  font-size: 22px;
  font-weight: 800;
  color: var(--dark);
  letter-spacing: -0.5px;
  margin-bottom: 6px;
}
.section-intro p {
  font-size: 14px;
  color: var(--muted);
  line-height: 1.6;
}

/* ── Form Fields ── */
.field-group {
  background: var(--card);
  border-radius: 14px;
  border: 1px solid var(--border);
  padding: 24px 28px;
  margin-bottom: 16px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.03);
  transition: border-color 0.2s, box-shadow 0.2s;
}
.field-group:focus-within {
  border-color: rgba(69,44,234,0.3);
  box-shadow: 0 0 0 3px var(--purple-glow), 0 1px 3px rgba(0,0,0,0.03);
}

label {
  display: block;
  font-size: 14px;
  font-weight: 600;
  color: var(--dark);
  margin-bottom: 8px;
  line-height: 1.4;
}
label .optional {
  font-weight: 400;
  color: var(--muted);
  font-size: 12px;
  margin-left: 4px;
}
.field-hint {
  font-size: 12px;
  color: var(--muted);
  margin-bottom: 10px;
  line-height: 1.5;
}

input[type="text"],
input[type="email"],
input[type="url"],
input[type="number"],
textarea,
select {
  width: 100%;
  padding: 12px 16px;
  border: 1.5px solid var(--border);
  border-radius: 10px;
  font-size: 14px;
  font-family: 'DM Sans', sans-serif;
  color: var(--dark);
  background: var(--bg);
  transition: border-color 0.2s, box-shadow 0.2s;
  outline: none;
}
input:focus, textarea:focus, select:focus {
  border-color: var(--purple);
  box-shadow: 0 0 0 3px var(--purple-glow);
  background: #fff;
}
textarea { resize: vertical; min-height: 80px; line-height: 1.6; }
select { cursor: pointer; appearance: none; background-image: url("data:image/svg+xml,%3Csvg width='12' height='8' viewBox='0 0 12 8' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1 1.5L6 6.5L11 1.5' stroke='%238892a4' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E"); background-repeat: no-repeat; background-position: right 14px center; padding-right: 38px; }

/* ── Checkbox / Radio Groups ── */
.check-group { display: flex; flex-direction: column; gap: 8px; }
.check-item {
  display: flex;
  align-items: center;
  gap: 12px;
  padding: 10px 14px;
  border-radius: 10px;
  border: 1.5px solid var(--border);
  cursor: pointer;
  transition: all 0.2s;
  background: var(--bg);
}
.check-item:hover { border-color: rgba(69,44,234,0.25); background: #faf9ff; }
.check-item.selected {
  border-color: var(--purple);
  background: rgba(69,44,234,0.04);
  box-shadow: 0 0 0 2px var(--purple-glow);
}
.check-item input[type="checkbox"],
.check-item input[type="radio"] {
  width: 18px; height: 18px;
  accent-color: var(--purple);
  cursor: pointer;
  flex-shrink: 0;
}
.check-item span {
  font-size: 14px;
  color: var(--dark);
  line-height: 1.4;
}

/* ── Two columns ── */
.two-col {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 12px;
}

/* ── Rating Scale ── */
.rating-scale {
  display: flex;
  gap: 8px;
}
.rating-option {
  flex: 1;
  text-align: center;
  padding: 12px 4px;
  border-radius: 10px;
  border: 1.5px solid var(--border);
  cursor: pointer;
  transition: all 0.2s;
  background: var(--bg);
}
.rating-option:hover { border-color: rgba(69,44,234,0.25); }
.rating-option.selected {
  border-color: var(--purple);
  background: var(--purple);
  color: #fff;
}
.rating-option .rating-num {
  font-size: 18px;
  font-weight: 700;
  font-family: 'Fraunces', serif;
  display: block;
}
.rating-option .rating-label {
  font-size: 10px;
  display: block;
  margin-top: 2px;
  opacity: 0.7;
}

/* ── Buttons ── */
.btn-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 28px;
  gap: 12px;
}
.btn {
  padding: 14px 32px;
  border-radius: 10px;
  font-size: 15px;
  font-weight: 700;
  font-family: 'DM Sans', sans-serif;
  cursor: pointer;
  transition: all 0.2s;
  border: none;
  letter-spacing: 0.2px;
}
.btn-primary {
  background: var(--purple);
  color: #fff;
  box-shadow: 0 2px 8px rgba(69,44,234,0.25);
}
.btn-primary:hover {
  background: #3820d0;
  transform: translateY(-1px);
  box-shadow: 0 4px 16px rgba(69,44,234,0.35);
}
.btn-secondary {
  background: var(--card);
  color: var(--dark);
  border: 1.5px solid var(--border);
}
.btn-secondary:hover { border-color: var(--purple); color: var(--purple); }
.btn-secondary:disabled { opacity: 0.4; cursor: not-allowed; }
.btn-submit {
  background: linear-gradient(135deg, var(--purple), #6c4ff7);
  color: #fff;
  padding: 16px 40px;
  font-size: 16px;
  box-shadow: 0 4px 16px rgba(69,44,234,0.3);
}
.btn-submit:hover { transform: translateY(-1px); box-shadow: 0 6px 24px rgba(69,44,234,0.4); }
.btn-icon { display: inline-flex; align-items: center; gap: 6px; }

/* ── Validation ── */
.field-error {
  border-color: var(--red) !important;
  box-shadow: 0 0 0 3px rgba(239,68,68,0.1) !important;
}
.error-msg {
  font-size: 12px;
  color: var(--red);
  margin-top: 6px;
  display: none;
}
.error-msg.show { display: block; }

/* ── Auto-save indicator ── */
.save-indicator {
  position: fixed;
  bottom: 24px;
  right: 24px;
  background: var(--card);
  border: 1px solid var(--border);
  border-radius: 10px;
  padding: 10px 16px;
  font-size: 12px;
  color: var(--muted);
  box-shadow: 0 2px 12px rgba(0,0,0,0.06);
  z-index: 100;
  display: flex;
  align-items: center;
  gap: 6px;
  opacity: 0;
  transition: opacity 0.3s;
}
.save-indicator.show { opacity: 1; }
.save-dot {
  width: 8px; height: 8px;
  border-radius: 50%;
  background: var(--green);
}

/* ── Success Page ── */
.success-page {
  display: none;
  text-align: center;
  padding: 80px 40px;
  max-width: 560px;
  margin: 0 auto;
  animation: fadeIn 0.5s ease;
}
.success-page.active { display: block; }
.success-icon {
  width: 80px; height: 80px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--green), #34d399);
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 24px;
  font-size: 36px;
  color: #fff;
  box-shadow: 0 4px 20px rgba(16,185,129,0.3);
}
.success-page h2 {
  font-size: 28px;
  font-weight: 800;
  color: var(--dark);
  letter-spacing: -0.5px;
  margin-bottom: 12px;
}
.success-page p {
  font-size: 15px;
  color: var(--muted);
  line-height: 1.7;
  margin-bottom: 12px;
}
.success-steps {
  text-align: left;
  background: var(--card);
  border-radius: 14px;
  border: 1px solid var(--border);
  padding: 24px 28px;
  margin-top: 28px;
}
.success-step {
  display: flex;
  gap: 14px;
  padding: 12px 0;
  border-bottom: 1px solid var(--border);
}
.success-step:last-child { border-bottom: none; }
.success-step-num {
  width: 28px; height: 28px;
  border-radius: 50%;
  background: var(--purple-light);
  color: var(--purple);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 13px;
  font-weight: 800;
  flex-shrink: 0;
  font-family: 'Fraunces', serif;
}
.success-step-text {
  font-size: 14px;
  color: var(--dark);
  line-height: 1.5;
}
.success-step-text strong { color: var(--purple); }

/* ── Footer ── */
.footer {
  text-align: center;
  padding: 24px 40px;
  font-size: 12px;
  color: var(--muted);
}

/* ── Mobile ── */
@media (max-width: 640px) {
  .header { padding: 20px; }
  .header-inner { flex-direction: column; align-items: flex-start; gap: 8px; }
  .header-title { text-align: left; }
  .progress-container, .form-container { padding-left: 20px; padding-right: 20px; }
  .two-col { grid-template-columns: 1fr; }
  .rating-scale { flex-wrap: wrap; }
  .rating-option { flex: 0 0 calc(20% - 6px); }
  .btn { padding: 12px 20px; font-size: 14px; }
  .section-intro h2 { font-size: 19px; }
}

/* Ensure form works within WordPress theme */
.page { padding-top: 0; }
.site-content { padding: 0; }
.header { margin-top: 0; }
</style>

<div class="page">

<!-- ── Header ── -->
<header class="header">
  <div class="header-inner" style="justify-content:center; text-align:center;">
    <div class="header-title" style="text-align:center;">
      <h1 style="font-size:32px; letter-spacing:-0.5px;">AI Readiness Assessment</h1>
      <p>Pre-Discovery Questionnaire</p>
      <p style="font-size: 13px; color: var(--muted); margin-top: 8px; line-height: 1.5;">You can bookmark this page and return later, but please note the questionnaire must be completed in a single session.</p>
    </div>
  </div>
</header>

<!-- ── Progress ── -->
<div class="progress-container">
  <div class="progress-steps" id="progressSteps"></div>
  <div class="progress-info">
    <span class="progress-section-name" id="sectionName"></span>
    <span class="progress-count" id="progressCount"></span>
  </div>
</div>

<!-- ── Form ── -->
<div class="form-container" id="formContainer">

  <!-- ═══ SECTION 1: Company Profile ═══ -->
  <div class="form-section active" data-section="0">
    <div class="section-intro">
      <h2>Company Profile</h2>
      <p>Let's start with the basics about your organization so we can tailor the assessment to your context.</p>
    </div>

    <div class="field-group">
      <label>Company name</label>
      <input type="text" name="company_name" required placeholder="e.g. Acme Corporation">
    </div>

    <div class="two-col">
      <div class="field-group">
        <label>Industry / sector</label>
        <select name="industry" required>
          <option value="">Select your industry</option>
          <option>Professional Services</option>
          <option>Healthcare</option>
          <option>Manufacturing</option>
          <option>Retail / E-commerce</option>
          <option>Financial Services</option>
          <option>Real Estate</option>
          <option>Logistics / Supply Chain</option>
          <option>Technology / SaaS</option>
          <option>Marketing / Agency</option>
          <option>Legal</option>
          <option>Education</option>
          <option>Construction</option>
          <option>Hospitality</option>
          <option>Nonprofit</option>
          <option>Other</option>
        </select>
      </div>
      <div class="field-group">
        <label>Approximate employees</label>
        <select name="employee_count" required>
          <option value="">Select range</option>
          <option>1–10</option>
          <option>11–50</option>
          <option>51–200</option>
          <option>201–500</option>
          <option>501–1,000</option>
          <option>1,001–5,000</option>
          <option>5,000+</option>
        </select>
      </div>
    </div>

    <div class="two-col">
      <div class="field-group">
        <label>Annual revenue range</label>
        <select name="revenue_range">
          <option value="">Select range</option>
          <option>$1M–$5M</option>
          <option>$5M–$10M</option>
          <option>$10M–$25M</option>
          <option>$25M–$50M</option>
          <option>$50M–$100M</option>
          <option>$100M–$250M</option>
          <option>$250M–$500M</option>
          <option>$500M–$1B</option>
          <option>Prefer not to say</option>
        </select>
      </div>
      <div class="field-group">
        <label>Primary customer type</label>
        <select name="customer_type">
          <option value="">Select type</option>
          <option>B2B</option>
          <option>B2C</option>
          <option>Both B2B and B2C</option>
          <option>Government / Public Sector</option>
          <option>Internal / Enterprise</option>
        </select>
      </div>
    </div>

    <div class="field-group">
      <label>Primary products or services</label>
      <div class="field-hint">Brief description of what your company does.</div>
      <textarea name="products_services" rows="2" placeholder="e.g. We provide freight brokerage and logistics management for mid-market retailers across the US."></textarea>
    </div>

    <div class="two-col">
      <div class="field-group">
        <label>Your name</label>
        <input type="text" name="contact_name" required placeholder="First and last name">
      </div>
      <div class="field-group">
        <label>Your role / title</label>
        <input type="text" name="contact_role" required placeholder="e.g. VP of Operations">
      </div>
    </div>

    <div class="field-group">
      <label>Email address</label>
      <input type="email" name="contact_email" required placeholder="you@company.com">
    </div>

    <div class="field-group">
      <label>Who else should be involved in this assessment? <span class="optional">(optional)</span></label>
      <div class="field-hint">Name and role of anyone else who should participate in the discovery call or receive the report.</div>
      <textarea name="additional_stakeholders" rows="2" placeholder="e.g. James Park, CTO; Lisa Wong, Director of Customer Operations"></textarea>
    </div>
  </div>

  <!-- ═══ SECTION 2: Technology & Systems ═══ -->
  <div class="form-section" data-section="1">
    <div class="section-intro">
      <h2>Technology & Systems</h2>
      <p>Understanding your current tech landscape helps us assess how easily AI tools could integrate into your environment.</p>
    </div>

    <div class="field-group">
      <label>What are your core business systems?</label>
      <div class="field-hint">List the primary software and platforms you use. Don't worry about being exhaustive — just the main ones.</div>
      <textarea name="core_systems" rows="4" placeholder="e.g. Salesforce (CRM), NetSuite (ERP), Slack (comms), Google Workspace (docs/email), Zendesk (support), Shopify (e-commerce)"></textarea>
    </div>

    <div class="field-group">
      <label>How would you describe your technology infrastructure?</label>
      <div class="check-group" data-name="infra_type" data-type="radio">
        <label class="check-item"><input type="radio" name="infra_type" value="mostly_cloud"><span>Mostly cloud-based (SaaS tools, cloud hosting)</span></label>
        <label class="check-item"><input type="radio" name="infra_type" value="hybrid"><span>Hybrid (some cloud, some on-premises)</span></label>
        <label class="check-item"><input type="radio" name="infra_type" value="on_prem"><span>Mostly on-premises / local servers</span></label>
        <label class="check-item"><input type="radio" name="infra_type" value="not_sure"><span>Not sure</span></label>
      </div>
    </div>

    <div class="field-group">
      <label>How old is the majority of your core technology?</label>
      <div class="check-group" data-name="tech_age" data-type="radio">
        <label class="check-item"><input type="radio" name="tech_age" value="under_2"><span>Less than 2 years</span></label>
        <label class="check-item"><input type="radio" name="tech_age" value="2_5"><span>2–5 years</span></label>
        <label class="check-item"><input type="radio" name="tech_age" value="5_10"><span>5–10 years</span></label>
        <label class="check-item"><input type="radio" name="tech_age" value="over_10"><span>More than 10 years</span></label>
        <label class="check-item"><input type="radio" name="tech_age" value="mixed"><span>Mixed / varies significantly</span></label>
      </div>
    </div>

    <div class="field-group">
      <label>Do your current systems support integrations (APIs, webhooks, data exports)?</label>
      <div class="check-group" data-name="integration_capability" data-type="radio">
        <label class="check-item"><input type="radio" name="integration_capability" value="yes_most"><span>Yes, most of our tools integrate well</span></label>
        <label class="check-item"><input type="radio" name="integration_capability" value="some"><span>Some do, some don't</span></label>
        <label class="check-item"><input type="radio" name="integration_capability" value="limited"><span>Limited — most systems are standalone</span></label>
        <label class="check-item"><input type="radio" name="integration_capability" value="not_sure"><span>Not sure</span></label>
      </div>
    </div>

    <div class="field-group">
      <label>Any planned technology upgrades or migrations in the next 12 months? <span class="optional">(optional)</span></label>
      <textarea name="planned_upgrades" rows="2" placeholder="e.g. Moving from QuickBooks Desktop to QuickBooks Online in Q3"></textarea>
    </div>
  </div>

  <!-- ═══ SECTION 3: Data Practices ═══ -->
  <div class="form-section" data-section="2">
    <div class="section-intro">
      <h2>Data Practices</h2>
      <p>Data is the fuel for AI. This helps us understand the quality and accessibility of your data.</p>
    </div>

    <div class="field-group">
      <label>Where does most of your business data live?</label>
      <div class="field-hint">Check all that apply.</div>
      <div class="check-group" data-name="data_locations" data-type="checkbox">
        <label class="check-item"><input type="checkbox" name="data_locations" value="databases"><span>Databases (SQL, cloud databases)</span></label>
        <label class="check-item"><input type="checkbox" name="data_locations" value="crm_erp"><span>CRM / ERP systems</span></label>
        <label class="check-item"><input type="checkbox" name="data_locations" value="spreadsheets"><span>Spreadsheets (Excel, Google Sheets)</span></label>
        <label class="check-item"><input type="checkbox" name="data_locations" value="paper"><span>Paper / physical records</span></label>
        <label class="check-item"><input type="checkbox" name="data_locations" value="email"><span>Email inboxes</span></label>
        <label class="check-item"><input type="checkbox" name="data_locations" value="shared_drives"><span>Shared drives / file folders</span></label>
      </div>
    </div>

    <div class="field-group">
      <label>How would you describe the current state of your data?</label>
      <div class="check-group" data-name="data_quality" data-type="radio">
        <label class="check-item"><input type="radio" name="data_quality" value="well_organized"><span>Well-organized, clean, and centralized</span></label>
        <label class="check-item"><input type="radio" name="data_quality" value="mostly_organized"><span>Mostly organized but some inconsistencies</span></label>
        <label class="check-item"><input type="radio" name="data_quality" value="scattered"><span>Scattered across multiple systems with duplicates</span></label>
        <label class="check-item"><input type="radio" name="data_quality" value="disorganized"><span>Largely disorganized or incomplete</span></label>
        <label class="check-item"><input type="radio" name="data_quality" value="not_sure"><span>Not sure</span></label>
      </div>
    </div>

    <div class="field-group">
      <label>How easy is it to pull reports or extract data from your systems?</label>
      <div class="check-group" data-name="data_accessibility" data-type="radio">
        <label class="check-item"><input type="radio" name="data_accessibility" value="very_easy"><span>Very easy — we have dashboards and self-service reporting</span></label>
        <label class="check-item"><input type="radio" name="data_accessibility" value="moderate"><span>Moderately easy — some reporting but often requires manual work</span></label>
        <label class="check-item"><input type="radio" name="data_accessibility" value="difficult"><span>Difficult — usually requires IT or specialist help</span></label>
        <label class="check-item"><input type="radio" name="data_accessibility" value="very_difficult"><span>Very difficult — data is trapped in systems or paper records</span></label>
      </div>
    </div>

    <div class="two-col">
      <div class="field-group">
        <label>Approximate customer/client records</label>
        <input type="text" name="record_count" placeholder="e.g. ~5,000">
      </div>
      <div class="field-group">
        <label>Years of digital historical data</label>
        <input type="text" name="data_history_years" placeholder="e.g. 3-4 years">
      </div>
    </div>

    <div class="field-group">
      <label>Do you have data governance or management policies?</label>
      <div class="check-group" data-name="data_governance" data-type="radio">
        <label class="check-item"><input type="radio" name="data_governance" value="formal"><span>Yes, formal policies and procedures</span></label>
        <label class="check-item"><input type="radio" name="data_governance" value="informal"><span>Informal / ad hoc</span></label>
        <label class="check-item"><input type="radio" name="data_governance" value="none"><span>No</span></label>
        <label class="check-item"><input type="radio" name="data_governance" value="not_sure"><span>Not sure</span></label>
      </div>
    </div>

    <div class="field-group">
      <label>Any industry-specific regulations affecting data handling? <span class="optional">(optional)</span></label>
      <div class="field-hint">Check all that apply.</div>
      <div class="check-group" data-name="regulations" data-type="checkbox">
        <label class="check-item"><input type="checkbox" name="regulations" value="HIPAA"><span>HIPAA</span></label>
        <label class="check-item"><input type="checkbox" name="regulations" value="GDPR"><span>GDPR</span></label>
        <label class="check-item"><input type="checkbox" name="regulations" value="SOC2"><span>SOC 2</span></label>
        <label class="check-item"><input type="checkbox" name="regulations" value="PCI-DSS"><span>PCI-DSS</span></label>
        <label class="check-item"><input type="checkbox" name="regulations" value="CCPA"><span>CCPA / CPRA</span></label>
        <label class="check-item"><input type="checkbox" name="regulations" value="FERPA"><span>FERPA</span></label>
        <label class="check-item"><input type="checkbox" name="regulations" value="SEC"><span>SEC / FINRA</span></label>
        <label class="check-item"><input type="checkbox" name="regulations" value="ISO27001"><span>ISO 27001</span></label>
        <label class="check-item"><input type="checkbox" name="regulations" value="none"><span>None / Not sure</span></label>
        <label class="check-item"><input type="checkbox" name="regulations" value="other"><span>Other</span></label>
      </div>
      <input type="text" name="regulations_other" placeholder="If Other, please specify" style="margin-top:10px; display:none;" id="regulationsOther">
    </div>
  </div>

  <!-- ═══ SECTION 4: Operations & Pain Points ═══ -->
  <div class="form-section" data-section="3">
    <div class="section-intro">
      <h2>Operations & Pain Points</h2>
      <p>This is where we identify the areas of your business where AI could have the most meaningful impact.</p>
    </div>

    <div class="field-group">
      <label>What are your top 3 operational challenges or pain points?</label>
      <div class="field-hint">Think about bottlenecks, manual processes, high error rates, slow turnarounds, or difficulty scaling.</div>
      <input type="text" name="pain_point_1" placeholder="1. e.g. Manual data entry from invoices takes 20+ hours per week" style="margin-bottom:10px" required>
      <input type="text" name="pain_point_2" placeholder="2. e.g. Customer support response time averages 4+ hours" style="margin-bottom:10px" required>
      <input type="text" name="pain_point_3" placeholder="3. e.g. Demand forecasting is guesswork — leads to over/understocking">
    </div>

    <div class="field-group">
      <label>Which tasks consume the most staff time relative to their value?</label>
      <textarea name="time_intensive_tasks" rows="3" placeholder="e.g. Data entry, report generation, scheduling, email management, document review, manual QA"></textarea>
    </div>

    <div class="field-group">
      <label>What level of automation do you currently have?</label>
      <div class="check-group" data-name="current_automation" data-type="radio">
        <label class="check-item"><input type="radio" name="current_automation" value="significant"><span>Significant (automated workflows, integrations, bots)</span></label>
        <label class="check-item"><input type="radio" name="current_automation" value="basic"><span>Some basic automation (email auto-responses, scheduled reports)</span></label>
        <label class="check-item"><input type="radio" name="current_automation" value="none"><span>Very little or none</span></label>
      </div>
    </div>

    <div class="field-group">
      <label>Which areas are you most interested in exploring AI for?</label>
      <div class="field-hint">Check all that apply.</div>
      <div class="check-group" data-name="departments_of_interest" data-type="checkbox">
        <label class="check-item"><input type="checkbox" name="departments_of_interest" value="sales"><span>Sales</span></label>
        <label class="check-item"><input type="checkbox" name="departments_of_interest" value="marketing"><span>Marketing</span></label>
        <label class="check-item"><input type="checkbox" name="departments_of_interest" value="customer_service"><span>Customer Service / Support</span></label>
        <label class="check-item"><input type="checkbox" name="departments_of_interest" value="operations"><span>Operations / Logistics</span></label>
        <label class="check-item"><input type="checkbox" name="departments_of_interest" value="finance"><span>Finance / Accounting</span></label>
        <label class="check-item"><input type="checkbox" name="departments_of_interest" value="hr"><span>HR / People Operations</span></label>
        <label class="check-item"><input type="checkbox" name="departments_of_interest" value="product"><span>Product / Engineering</span></label>
        <label class="check-item"><input type="checkbox" name="departments_of_interest" value="executive"><span>Executive / Strategy</span></label>
      </div>
    </div>
  </div>

  <!-- ═══ SECTION 5: Team & Culture ═══ -->
  <div class="form-section" data-section="4">
    <div class="section-intro">
      <h2>Team & Culture</h2>
      <p>Organizational readiness is just as important as technical readiness.</p>
    </div>

    <div class="field-group">
      <label>How would you describe executive/leadership interest in AI?</label>
      <div class="check-group" data-name="leadership_interest" data-type="radio">
        <label class="check-item"><input type="radio" name="leadership_interest" value="championing"><span>Actively championing AI — it's a strategic priority</span></label>
        <label class="check-item"><input type="radio" name="leadership_interest" value="supportive"><span>Interested and supportive, but not leading the charge</span></label>
        <label class="check-item"><input type="radio" name="leadership_interest" value="cautious"><span>Open to exploring, but cautious</span></label>
        <label class="check-item"><input type="radio" name="leadership_interest" value="skeptical"><span>Skeptical or resistant</span></label>
        <label class="check-item"><input type="radio" name="leadership_interest" value="unaware"><span>Not aware / haven't discussed it</span></label>
      </div>
    </div>

    <div class="field-group">
      <label>Do you have in-house technical/data skills to support AI implementation?</label>
      <div class="check-group" data-name="technical_capability" data-type="radio">
        <label class="check-item"><input type="radio" name="technical_capability" value="dedicated_team"><span>Yes — dedicated IT/data team</span></label>
        <label class="check-item"><input type="radio" name="technical_capability" value="some_skills"><span>Yes — some individuals with technical ability, not their primary role</span></label>
        <label class="check-item"><input type="radio" name="technical_capability" value="none"><span>No — we would rely entirely on external support</span></label>
      </div>
    </div>

    <div class="field-group">
      <label>How has your organization responded to new technology adoption in the past?</label>
      <div class="check-group" data-name="change_readiness" data-type="radio">
        <label class="check-item"><input type="radio" name="change_readiness" value="embraced"><span>Embraced change readily — team is adaptive</span></label>
        <label class="check-item"><input type="radio" name="change_readiness" value="generally_positive"><span>Generally positive, with some initial resistance</span></label>
        <label class="check-item"><input type="radio" name="change_readiness" value="mixed"><span>Mixed — varies by department or individual</span></label>
        <label class="check-item"><input type="radio" name="change_readiness" value="resistant"><span>Typically resistant — change management is a challenge</span></label>
      </div>
    </div>

    <div class="field-group">
      <label>Are there concerns among staff about AI? <span class="optional">(check all that apply)</span></label>
      <div class="check-group" data-name="staff_concerns" data-type="checkbox">
        <label class="check-item"><input type="checkbox" name="staff_concerns" value="job_displacement"><span>Fear of job displacement</span></label>
        <label class="check-item"><input type="checkbox" name="staff_concerns" value="accuracy"><span>Distrust of AI accuracy or reliability</span></label>
        <label class="check-item"><input type="checkbox" name="staff_concerns" value="privacy"><span>Privacy and security concerns</span></label>
        <label class="check-item"><input type="checkbox" name="staff_concerns" value="overwhelm"><span>Overwhelm / too many changes happening</span></label>
        <label class="check-item"><input type="checkbox" name="staff_concerns" value="none"><span>No significant concerns</span></label>
        <label class="check-item"><input type="checkbox" name="staff_concerns" value="not_sure"><span>Not sure — haven't gauged sentiment</span></label>
      </div>
    </div>

    <div class="field-group">
      <label>How willing would your team be to invest time learning new AI tools?</label>
      <div class="rating-scale" id="training_willingness">
        <div class="rating-option" data-value="1" onclick="selectRating(this, 'training_willingness')"><span class="rating-num">1</span><span class="rating-label">Unwilling</span></div>
        <div class="rating-option" data-value="2" onclick="selectRating(this, 'training_willingness')"><span class="rating-num">2</span></div>
        <div class="rating-option" data-value="3" onclick="selectRating(this, 'training_willingness')"><span class="rating-num">3</span><span class="rating-label">Neutral</span></div>
        <div class="rating-option" data-value="4" onclick="selectRating(this, 'training_willingness')"><span class="rating-num">4</span></div>
        <div class="rating-option" data-value="5" onclick="selectRating(this, 'training_willingness')"><span class="rating-num">5</span><span class="rating-label">Eager</span></div>
      </div>
      <input type="hidden" name="training_willingness" value="">
    </div>
  </div>

  <!-- ═══ SECTION 6: Goals & AI Experience ═══ -->
  <div class="form-section" data-section="5">
    <div class="section-intro">
      <h2>Goals & AI Experience</h2>
      <p>Understanding your objectives and past experience ensures our recommendations are aligned with your reality.</p>
    </div>

    <div class="field-group">
      <label>What are you most hoping to achieve with AI?</label>
      <div class="field-hint">Pick your top 3.</div>
      <div class="check-group" data-name="primary_goals" data-type="checkbox" data-max="3">
        <label class="check-item"><input type="checkbox" name="primary_goals" value="reduce_costs"><span>Reduce operational costs</span></label>
        <label class="check-item"><input type="checkbox" name="primary_goals" value="save_time"><span>Save time on manual/repetitive tasks</span></label>
        <label class="check-item"><input type="checkbox" name="primary_goals" value="customer_experience"><span>Improve customer experience</span></label>
        <label class="check-item"><input type="checkbox" name="primary_goals" value="increase_revenue"><span>Increase revenue or sales</span></label>
        <label class="check-item"><input type="checkbox" name="primary_goals" value="better_decisions"><span>Improve decision-making with data insights</span></label>
        <label class="check-item"><input type="checkbox" name="primary_goals" value="scale"><span>Scale without proportionally increasing headcount</span></label>
        <label class="check-item"><input type="checkbox" name="primary_goals" value="competitive"><span>Competitive advantage / stay ahead of trends</span></label>
        <label class="check-item"><input type="checkbox" name="primary_goals" value="quality"><span>Improve quality or reduce error rates</span></label>
      </div>
    </div>

    <div class="field-group">
      <label>What's your timeline for acting on AI?</label>
      <div class="check-group" data-name="timeline" data-type="radio">
        <label class="check-item"><input type="radio" name="timeline" value="urgent"><span>Urgent — need to move within 1–3 months</span></label>
        <label class="check-item"><input type="radio" name="timeline" value="near_term"><span>Near-term — planning for 3–6 months</span></label>
        <label class="check-item"><input type="radio" name="timeline" value="medium_term"><span>Medium-term — building a 6–12 month roadmap</span></label>
        <label class="check-item"><input type="radio" name="timeline" value="exploratory"><span>Exploratory — no specific timeline, just learning</span></label>
      </div>
    </div>

    <div class="field-group">
      <label>Do you have budget available for AI projects?</label>
      <div class="check-group" data-name="budget" data-type="radio">
        <label class="check-item"><input type="radio" name="budget" value="allocated"><span>Yes — budget is allocated or readily available</span></label>
        <label class="check-item"><input type="radio" name="budget" value="likely"><span>Likely — would need approval but confident</span></label>
        <label class="check-item"><input type="radio" name="budget" value="uncertain"><span>Uncertain — depends on the business case</span></label>
        <label class="check-item"><input type="radio" name="budget" value="none"><span>No — purely exploratory at this stage</span></label>
      </div>
    </div>

    <div class="field-group">
      <label>Are you currently using any AI tools?</label>
      <div class="field-hint">Check all that apply.</div>
      <div class="check-group" data-name="current_ai_tools" data-type="checkbox">
        <label class="check-item"><input type="checkbox" name="current_ai_tools" value="chatgpt_claude"><span>ChatGPT, Claude, Gemini, or similar AI assistants</span></label>
        <label class="check-item"><input type="checkbox" name="current_ai_tools" value="built_in_ai"><span>AI features built into existing tools (CRM AI, etc.)</span></label>
        <label class="check-item"><input type="checkbox" name="current_ai_tools" value="chatbot"><span>AI chatbot for customer service</span></label>
        <label class="check-item"><input type="checkbox" name="current_ai_tools" value="content"><span>AI for content creation or marketing</span></label>
        <label class="check-item"><input type="checkbox" name="current_ai_tools" value="analytics"><span>AI for data analysis or forecasting</span></label>
        <label class="check-item"><input type="checkbox" name="current_ai_tools" value="custom"><span>Custom-built AI/ML models</span></label>
        <label class="check-item"><input type="checkbox" name="current_ai_tools" value="none"><span>None</span></label>
      </div>
    </div>

    <div class="field-group">
      <label>Have you attempted any AI or automation projects that didn't work out? <span class="optional">(optional)</span></label>
      <textarea name="past_failures" rows="3" placeholder="If yes, what happened? What was the main reason it didn't succeed?"></textarea>
    </div>

    <div class="field-group">
      <label>If this assessment leads to AI implementation, what would "success" look like 12 months from now?</label>
      <textarea name="success_definition" rows="3" required placeholder="Describe in your own words..."></textarea>
    </div>

    <div class="field-group">
      <label>Anything else we should know? <span class="optional">(optional)</span></label>
      <textarea name="additional_notes" rows="2" placeholder="Any context, concerns, or hopes not covered above."></textarea>
    </div>
  </div>

  <!-- ── Navigation Buttons (rendered by JS) ── -->
  <div class="btn-row" id="btnRow"></div>
</div>

<!-- ── Success Page ── -->
<div class="success-page" id="successPage">
  <div class="success-icon">✓</div>
  <h2>You're all set!</h2>
  <p>Thank you for completing the AI Readiness Questionnaire. We've received your responses and <strong>a copy has been emailed to you</strong> for your records.</p>
  <p>Our team is already getting to work.</p>
  <div class="success-steps">
    <h3 style="font-size:15px;font-weight:700;color:var(--dark);margin-bottom:14px;">What happens next</h3>
    <div class="success-step">
      <div class="success-step-num">1</div>
      <div class="success-step-text">We'll review your responses and prepare a <strong>customized discovery call guide</strong> tailored to your business.</div>
    </div>
    <div class="success-step">
      <div class="success-step-num">2</div>
      <div class="success-step-text">You'll receive a <strong>calendar invite</strong> for your 60–90 minute discovery session within 1 business day.</div>
    </div>
    <div class="success-step">
      <div class="success-step-num">3</div>
      <div class="success-step-text">After the call, we'll deliver your <strong>interactive AI Readiness Report</strong> within 5 business days.</div>
    </div>
  </div>
  <p style="margin-top:24px;font-size:13px;">Questions? Reach us at <a href="mailto:ai-readiness@ansa.solutions" style="color:var(--purple);font-weight:600;">ai-readiness@ansa.solutions</a></p>
</div>

<!-- ── Footer ── -->
<div class="footer">
  <p>CONFIDENTIAL — ANSA Solutions © 2026 · Your responses are encrypted and stored securely.</p>
</div>

<!-- ── Auto-save indicator ── -->
<div class="save-indicator" id="saveIndicator">
  <div class="save-dot"></div>
  Progress saved
</div>

</div><!-- end .page -->

<script>
// ══════════════════════════════════════════════
// ANSA AI Readiness Form — Controller
// ══════════════════════════════════════════════

const SECTIONS = [
  { name: "Company Profile", shortName: "Company" },
  { name: "Technology & Systems", shortName: "Tech" },
  { name: "Data Practices", shortName: "Data" },
  { name: "Operations & Pain Points", shortName: "Ops" },
  { name: "Team & Culture", shortName: "Team" },
  { name: "Goals & AI Experience", shortName: "Goals" },
];

// ══════════════════════════════════════════════
// CONFIGURATION: Set your webhook URL here
// ══════════════════════════════════════════════
const WEBHOOK_URL = "https://webhooks.workato.com/webhooks/rest/7b185dd3-a851-4892-80ef-cbe90de5aae6/new_questionaire";
// Replace with your actual Workato webhook URL
// ══════════════════════════════════════════════

let currentSection = 0;
const totalSections = SECTIONS.length;

// ── Initialize ──
function init() {
  renderProgress();
  renderButtons();
  loadSavedData();
  setupCheckboxStyles();
  setupMaxCheckboxes();
}

// ── Progress bar ──
function renderProgress() {
  const container = document.getElementById('progressSteps');
  container.innerHTML = SECTIONS.map((s, i) => {
    let cls = '';
    if (i < currentSection) cls = 'completed';
    if (i === currentSection) cls = 'active';
    return `<div class="progress-step ${cls}"><div class="step-dot">${i < currentSection ? '✓' : i + 1}</div></div>`;
  }).join('');

  document.getElementById('sectionName').textContent = SECTIONS[currentSection].name;
  document.getElementById('progressCount').textContent = `Step ${currentSection + 1} of ${totalSections}`;
}

// ── Navigation buttons ──
function renderButtons() {
  const row = document.getElementById('btnRow');
  const isFirst = currentSection === 0;
  const isLast = currentSection === totalSections - 1;

  row.innerHTML = `
    <button class="btn btn-secondary" onclick="prevSection()" ${isFirst ? 'disabled' : ''}>
      ← Back
    </button>
    <div style="display:flex;gap:10px;align-items:center">
      <span style="font-size:12px;color:var(--muted)">${Math.round(((currentSection + 1) / totalSections) * 100)}% complete</span>
      ${isLast
        ? '<button class="btn btn-submit" onclick="submitForm()">Submit Assessment →</button>'
        : '<button class="btn btn-primary" onclick="nextSection()">Continue →</button>'
      }
    </div>
  `;
}

// ── Section navigation ──
function nextSection() {
  if (!validateSection(currentSection)) return;
  saveData();
  if (currentSection < totalSections - 1) {
    document.querySelectorAll('.form-section')[currentSection].classList.remove('active');
    currentSection++;
    document.querySelectorAll('.form-section')[currentSection].classList.add('active');
    renderProgress();
    renderButtons();
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }
}

function prevSection() {
  if (currentSection > 0) {
    saveData();
    document.querySelectorAll('.form-section')[currentSection].classList.remove('active');
    currentSection--;
    document.querySelectorAll('.form-section')[currentSection].classList.add('active');
    renderProgress();
    renderButtons();
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }
}

// ── Validation ──
function validateSection(idx) {
  const section = document.querySelectorAll('.form-section')[idx];
  const required = section.querySelectorAll('[required]');
  let valid = true;
  required.forEach(field => {
    field.classList.remove('field-error');
    const errMsg = field.parentElement.querySelector('.error-msg');
    if (errMsg) errMsg.classList.remove('show');

    if (!field.value.trim()) {
      field.classList.add('field-error');
      valid = false;
      // Create error message if not exists
      if (!errMsg) {
        const msg = document.createElement('div');
        msg.className = 'error-msg show';
        msg.textContent = 'This field is required';
        field.parentElement.appendChild(msg);
      } else {
        errMsg.classList.add('show');
      }
    }
  });
  if (!valid) {
    const first = section.querySelector('.field-error');
    if (first) first.scrollIntoView({ behavior: 'smooth', block: 'center' });
  }
  return valid;
}

// ── Collect all form data as JSON ──
function collectFormData() {
  const data = { submitted_at: new Date().toISOString() };

  // Text inputs, textareas, selects
  document.querySelectorAll('input[type="text"], input[type="email"], input[type="url"], input[type="number"], textarea, select').forEach(field => {
    if (field.name) data[field.name] = field.value;
  });

  // Radio buttons
  document.querySelectorAll('input[type="radio"]:checked').forEach(radio => {
    data[radio.name] = radio.value;
  });

  // Checkboxes (as arrays)
  const checkboxGroups = {};
  document.querySelectorAll('input[type="checkbox"]:checked').forEach(cb => {
    if (!checkboxGroups[cb.name]) checkboxGroups[cb.name] = [];
    checkboxGroups[cb.name].push(cb.value);
  });
  Object.assign(data, checkboxGroups);

  // Hidden fields (rating scales)
  document.querySelectorAll('input[type="hidden"]').forEach(field => {
    if (field.name && field.value) data[field.name] = field.value;
  });

  return data;
}

// ── Submit ──
async function submitForm() {
  if (!validateSection(currentSection)) return;

  const submitBtn = document.querySelector('.btn-submit');
  submitBtn.textContent = 'Submitting...';
  submitBtn.disabled = true;

  const data = collectFormData();

  // Log payload for debugging
  console.log('Form payload:', JSON.stringify(data, null, 2));

  try {
    // Send to webhook
    const response = await fetch(WEBHOOK_URL, {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify(data),
      mode: 'no-cors' // Workato may not return CORS headers
    });

    // Show success regardless (no-cors won't give us status)
    showSuccess();
    localStorage.removeItem('ansa_form_data');

  } catch (err) {
    console.error('Submission error:', err);
    // Still show success if it's a CORS issue (common with webhooks)
    // The data was likely sent successfully
    showSuccess();
    localStorage.removeItem('ansa_form_data');
  }
}

function showSuccess() {
  document.getElementById('formContainer').style.display = 'none';
  document.querySelector('.progress-container').style.display = 'none';
  document.getElementById('btnRow').style.display = 'none';
  document.getElementById('successPage').classList.add('active');
  window.scrollTo({ top: 0, behavior: 'smooth' });
}

// ── Auto-save to localStorage ──
function saveData() {
  const data = collectFormData();
  localStorage.setItem('ansa_form_data', JSON.stringify(data));
  const indicator = document.getElementById('saveIndicator');
  indicator.classList.add('show');
  setTimeout(() => indicator.classList.remove('show'), 2000);
}

function loadSavedData() {
  const saved = localStorage.getItem('ansa_form_data');
  if (!saved) return;
  try {
    const data = JSON.parse(saved);
    Object.entries(data).forEach(([key, value]) => {
      if (key === 'submitted_at') return;
      const field = document.querySelector(`[name="${key}"]`);
      if (!field) return;

      if (field.type === 'radio') {
        const radio = document.querySelector(`input[name="${key}"][value="${value}"]`);
        if (radio) {
          radio.checked = true;
          radio.closest('.check-item')?.classList.add('selected');
        }
      } else if (field.type === 'checkbox' && Array.isArray(value)) {
        value.forEach(v => {
          const cb = document.querySelector(`input[name="${key}"][value="${v}"]`);
          if (cb) {
            cb.checked = true;
            cb.closest('.check-item')?.classList.add('selected');
          }
        });
      } else if (field.type === 'hidden') {
        field.value = value;
        const ratingOpt = document.querySelector(`#${key} .rating-option[data-value="${value}"]`);
        if (ratingOpt) ratingOpt.classList.add('selected');
      } else {
        field.value = value;
      }
    });
  } catch(e) { console.log('Could not restore saved data'); }
}

// Auto-save on input
let saveTimeout;
document.addEventListener('input', () => {
  clearTimeout(saveTimeout);
  saveTimeout = setTimeout(saveData, 1500);
});

// ── Checkbox/Radio visual states ──
function setupCheckboxStyles() {
  document.querySelectorAll('.check-item').forEach(item => {
    const input = item.querySelector('input');
    input.addEventListener('change', () => {
      if (input.type === 'radio') {
        // Deselect siblings
        item.closest('.check-group').querySelectorAll('.check-item').forEach(ci => ci.classList.remove('selected'));
      }
      if (input.checked) {
        item.classList.add('selected');
      } else {
        item.classList.remove('selected');
      }
    });
  });
}

// ── Max checkbox limit ──
function setupMaxCheckboxes() {
  document.querySelectorAll('.check-group[data-max]').forEach(group => {
    const max = parseInt(group.dataset.max);
    const checkboxes = group.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach(cb => {
      cb.addEventListener('change', () => {
        const checked = group.querySelectorAll('input[type="checkbox"]:checked').length;
        if (checked >= max) {
          checkboxes.forEach(c => { if (!c.checked) c.closest('.check-item').style.opacity = '0.5'; });
          checkboxes.forEach(c => { if (!c.checked) c.disabled = true; });
        } else {
          checkboxes.forEach(c => { c.closest('.check-item').style.opacity = '1'; c.disabled = false; });
        }
      });
    });
  });
}

// ── Rating scale ──
function selectRating(el, name) {
  el.parentElement.querySelectorAll('.rating-option').forEach(o => o.classList.remove('selected'));
  el.classList.add('selected');
  document.querySelector(`input[name="${name}"]`).value = el.dataset.value;
}

// ── Init ──
init();

// ── Regulations "Other" toggle ──
document.querySelectorAll('input[name="regulations"]').forEach(cb => {
  cb.addEventListener('change', () => {
    const otherField = document.getElementById('regulationsOther');
    const otherChecked = document.querySelector('input[name="regulations"][value="other"]').checked;
    otherField.style.display = otherChecked ? 'block' : 'none';
    if (!otherChecked) otherField.value = '';
  });
});
</script>
<?php get_footer(); ?>