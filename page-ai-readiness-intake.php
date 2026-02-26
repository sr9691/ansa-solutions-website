<?php
/**
 * Template Name: AI Readiness Intake Form
 * Template Post Type: page
 */
// Standalone template - questionnaire has its own styling
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AI Readiness Assessment | ANSA Solutions</title>
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
  display: none;
  align-items: center;
  gap: 8px;
  z-index: 1000;
  box-shadow: 0 4px 16px rgba(0,0,0,0.1);
}
.save-indicator.show { display: flex; }
.save-indicator::before {
  content: '';
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: var(--green);
  animation: pulse 2s infinite;
}
@keyframes pulse {
  0%, 100% { opacity: 1; }
  50% { opacity: 0.5; }
}

/* ── Footer ── */
footer {
  background: var(--darker);
  color: rgba(255,255,255,0.6);
  padding: 20px 40px;
  text-align: center;
  font-size: 12px;
}

/* ── Responsive ── */
@media (max-width: 768px) {
  .header-inner { flex-direction: column; text-align: center; gap: 16px; }
  .header-title { text-align: center; }
  .progress-container { padding: 20px 20px 0; }
  .form-container { padding: 16px 20px 40px; }
  .section-intro { padding: 16px 20px; }
  .field-group { padding: 16px 20px; }
  .two-col { grid-template-columns: 1fr; }
  .save-indicator { bottom: 16px; right: 16px; }
}

@media (max-width: 480px) {
  .header { padding: 20px 16px; }
  main { padding: 20px 0; }
  .header-inner { gap: 12px; }
  .header-title h1 { font-size: 16px; }
  .section-intro h2 { font-size: 18px; }
  .rating-scale { gap: 4px; }
  .rating-option { padding: 10px 2px; }
  .btn { padding: 12px 20px; font-size: 14px; }
  .progress-steps { gap: 0; }
  .progress-step::after { margin: 0 4px; }
}
</style>
</head>
<body>
<div class="page">
  <header class="header">
    <div class="header-inner">
      <div class="logo">
        <div class="logo-mark">A<span>SA</span></div>
        <div class="logo-sub">Solutions</div>
      </div>
      <div class="header-title">
        <h1>AI Readiness</h1>
        <p>Assessment Questionnaire</p>
      </div>
    </div>
  </header>

  <div class="progress-container">
    <div class="progress-steps">
      <div class="progress-step active" data-step="1">
        <div class="step-dot">1</div>
        <div class="step-label">Company Info</div>
      </div>
      <div class="progress-step" data-step="2">
        <div class="step-dot">2</div>
        <div class="step-label">Current Usage</div>
      </div>
      <div class="progress-step" data-step="3">
        <div class="step-dot">3</div>
        <div class="step-label">Infrastructure</div>
      </div>
      <div class="progress-step" data-step="4">
        <div class="step-dot">4</div>
        <div class="step-label">Readiness</div>
      </div>
      <div class="progress-step" data-step="5">
        <div class="step-dot">5</div>
        <div class="step-label">Goals</div>
      </div>
      <div class="progress-step" data-step="6">
        <div class="step-dot">6</div>
        <div class="step-label">Additional</div>
      </div>
    </div>
    <div class="progress-info">
      <div class="progress-section-name">Step 1 of 6: Company Information</div>
      <div class="progress-count">0% Complete</div>
    </div>
  </div>

  <main>
    <div class="form-container">
      <form id="assessmentForm">
        <!-- SECTION 1: COMPANY INFO -->
        <div class="form-section active" data-section="1">
          <div class="section-intro">
            <h2>Tell us about your organization</h2>
            <p>We'll use this information to better understand your business and tailor our assessment.</p>
          </div>

          <div class="field-group">
            <label for="companyName">Company Name *</label>
            <input type="text" id="companyName" name="companyName" placeholder="Acme Corp" required />
            <div class="error-msg">Company name is required</div>
          </div>

          <div class="field-group">
            <label for="industry">Industry *</label>
            <select id="industry" name="industry" required>
              <option value="">Select your industry...</option>
              <option value="healthcare">Healthcare</option>
              <option value="finance">Financial Services</option>
              <option value="manufacturing">Manufacturing</option>
              <option value="retail">Retail & E-commerce</option>
              <option value="technology">Technology/Software</option>
              <option value="professional">Professional Services</option>
              <option value="education">Education</option>
              <option value="government">Government</option>
              <option value="nonprofit">Nonprofit</option>
              <option value="other">Other</option>
            </select>
            <div class="error-msg">Please select an industry</div>
          </div>

          <div class="field-group">
            <label for="employees">Number of Employees *</label>
            <select id="employees" name="employees" required>
              <option value="">Select a range...</option>
              <option value="1-50">1-50</option>
              <option value="51-200">51-200</option>
              <option value="201-500">201-500</option>
              <option value="501-1000">501-1,000</option>
              <option value="1000-5000">1,000-5,000</option>
              <option value="5000+">5,000+</option>
            </select>
            <div class="error-msg">Please select a range</div>
          </div>

          <div class="field-group">
            <label for="email">Contact Email *</label>
            <input type="email" id="email" name="email" placeholder="your@company.com" required />
            <div class="error-msg">Valid email is required</div>
          </div>

          <div class="field-group">
            <label for="phone">Phone Number <span class="optional">(optional)</span></label>
            <input type="text" id="phone" name="phone" placeholder="+1 (555) 000-0000" />
          </div>

          <div class="btn-row">
            <button type="button" class="btn btn-secondary" onclick="previousStep()">← Back</button>
            <button type="button" class="btn btn-primary" onclick="nextStep()">Next Step →</button>
          </div>
        </div>

        <!-- SECTION 2: CURRENT AI USAGE -->
        <div class="form-section" data-section="2">
          <div class="section-intro">
            <h2>Your AI Journey</h2>
            <p>Let's understand where you are in your AI adoption process.</p>
          </div>

          <div class="field-group">
            <label>Are you currently using AI in your operations? *</label>
            <div class="check-group" id="aiUsageGroup">
              <div class="check-item" onclick="selectCheckItem(this)">
                <input type="radio" id="aiUsageYes" name="aiUsage" value="yes" required />
                <span>Yes, we actively use AI tools and systems</span>
              </div>
              <div class="check-item" onclick="selectCheckItem(this)">
                <input type="radio" id="aiUsageExploratory" name="aiUsage" value="exploratory" />
                <span>Exploratory - testing and piloting AI solutions</span>
              </div>
              <div class="check-item" onclick="selectCheckItem(this)">
                <input type="radio" id="aiUsageNo" name="aiUsage" value="no" />
                <span>No, but we're considering it</span>
              </div>
              <div class="check-item" onclick="selectCheckItem(this)">
                <input type="radio" id="aiUsageUnsure" name="aiUsage" value="unsure" />
                <span>Not sure / Still researching</span>
              </div>
            </div>
            <div class="error-msg">Please select an option</div>
          </div>

          <div class="field-group">
            <label>Which business areas could benefit most from AI? * (select all that apply)</label>
            <div class="check-group" id="areasGroup">
              <div class="check-item" onclick="selectCheckItem(this)">
                <input type="checkbox" id="area1" name="areas" value="operations" />
                <span>Operations & Process Automation</span>
              </div>
              <div class="check-item" onclick="selectCheckItem(this)">
                <input type="checkbox" id="area2" name="areas" value="customer" />
                <span>Customer Service & Support</span>
              </div>
              <div class="check-item" onclick="selectCheckItem(this)">
                <input type="checkbox" id="area3" name="areas" value="analytics" />
                <span>Data Analysis & Business Intelligence</span>
              </div>
              <div class="check-item" onclick="selectCheckItem(this)">
                <input type="checkbox" id="area4" name="areas" value="sales" />
                <span>Sales & Lead Generation</span>
              </div>
              <div class="check-item" onclick="selectCheckItem(this)">
                <input type="checkbox" id="area5" name="areas" value="marketing" />
                <span>Marketing & Content Creation</span>
              </div>
              <div class="check-item" onclick="selectCheckItem(this)">
                <input type="checkbox" id="area6" name="areas" value="hr" />
                <span>Human Resources & Talent</span>
              </div>
              <div class="check-item" onclick="selectCheckItem(this)">
                <input type="checkbox" id="area7" name="areas" value="product" />
                <span>Product Development</span>
              </div>
              <div class="check-item" onclick="selectCheckItem(this)">
                <input type="checkbox" id="area8" name="areas" value="other" />
                <span>Other</span>
              </div>
            </div>
            <div class="error-msg">Please select at least one area</div>
          </div>

          <div class="btn-row">
            <button type="button" class="btn btn-secondary" onclick="previousStep()">← Back</button>
            <button type="button" class="btn btn-primary" onclick="nextStep()">Next Step →</button>
          </div>
        </div>

        <!-- SECTION 3: TECHNICAL INFRASTRUCTURE -->
        <div class="form-section" data-section="3">
          <div class="section-intro">
            <h2>Technical Infrastructure</h2>
            <p>Understanding your current technology landscape helps us assess readiness.</p>
          </div>

          <div class="field-group">
            <label>Cloud Infrastructure Status *</label>
            <div class="check-group">
              <div class="check-item" onclick="selectCheckItem(this)">
                <input type="radio" id="cloudFull" name="cloudStatus" value="full" required />
                <span>Fully cloud-based (AWS, Azure, GCP, etc.)</span>
              </div>
              <div class="check-item" onclick="selectCheckItem(this)">
                <input type="radio" id="cloudHybrid" name="cloudStatus" value="hybrid" />
                <span>Hybrid (combination of cloud & on-premise)</span>
              </div>
              <div class="check-item" onclick="selectCheckItem(this)">
                <input type="radio" id="cloudOnprem" name="cloudStatus" value="onprem" />
                <span>Primarily on-premise</span>
              </div>
              <div class="check-item" onclick="selectCheckItem(this)">
                <input type="radio" id="cloudLegacy" name="cloudStatus" value="legacy" />
                <span>Legacy systems / Not modernized</span>
              </div>
            </div>
            <div class="error-msg">Please select an option</div>
          </div>

          <div class="field-group">
            <label>Data Governance & Quality *</label>
            <p class="field-hint">How well organized and clean is your data?</p>
            <div class="rating-scale">
              <button type="button" class="rating-option" onclick="setRating(this, 'dataQuality', 1)">
                <span class="rating-num">1</span>
                <span class="rating-label">Poor</span>
              </button>
              <button type="button" class="rating-option" onclick="setRating(this, 'dataQuality', 2)">
                <span class="rating-num">2</span>
                <span class="rating-label">Fair</span>
              </button>
              <button type="button" class="rating-option" onclick="setRating(this, 'dataQuality', 3)">
                <span class="rating-num">3</span>
                <span class="rating-label">Good</span>
              </button>
              <button type="button" class="rating-option" onclick="setRating(this, 'dataQuality', 4)">
                <span class="rating-num">4</span>
                <span class="rating-label">Very Good</span>
              </button>
              <button type="button" class="rating-option" onclick="setRating(this, 'dataQuality', 5)">
                <span class="rating-num">5</span>
                <span class="rating-label">Excellent</span>
              </button>
            </div>
            <input type="hidden" name="dataQuality" />
            <div class="error-msg">Please select a rating</div>
          </div>

          <div class="field-group">
            <label>Security & Compliance Infrastructure *</label>
            <p class="field-hint">Current security and compliance readiness</p>
            <div class="rating-scale">
              <button type="button" class="rating-option" onclick="setRating(this, 'securityLevel', 1)">
                <span class="rating-num">1</span>
                <span class="rating-label">Needs Work</span>
              </button>
              <button type="button" class="rating-option" onclick="setRating(this, 'securityLevel', 2)">
                <span class="rating-num">2</span>
                <span class="rating-label">Basic</span>
              </button>
              <button type="button" class="rating-option" onclick="setRating(this, 'securityLevel', 3)">
                <span class="rating-num">3</span>
                <span class="rating-label">Solid</span>
              </button>
              <button type="button" class="rating-option" onclick="setRating(this, 'securityLevel', 4)">
                <span class="rating-num">4</span>
                <span class="rating-label">Strong</span>
              </button>
              <button type="button" class="rating-option" onclick="setRating(this, 'securityLevel', 5)">
                <span class="rating-num">5</span>
                <span class="rating-label">Enterprise-Grade</span>
              </button>
            </div>
            <input type="hidden" name="securityLevel" />
            <div class="error-msg">Please select a rating</div>
          </div>

          <div class="btn-row">
            <button type="button" class="btn btn-secondary" onclick="previousStep()">← Back</button>
            <button type="button" class="btn btn-primary" onclick="nextStep()">Next Step →</button>
          </div>
        </div>

        <!-- SECTION 4: ORGANIZATIONAL READINESS -->
        <div class="form-section" data-section="4">
          <div class="section-intro">
            <h2>Organizational Readiness</h2>
            <p>Understanding your team's capabilities and organizational culture.</p>
          </div>

          <div class="field-group">
            <label>Internal AI & Technical Skills *</label>
            <div class="check-group">
              <div class="check-item" onclick="selectCheckItem(this)">
                <input type="radio" id="skillsNone" name="internalSkills" value="none" required />
                <span>Limited - Need external expertise and training</span>
              </div>
              <div class="check-item" onclick="selectCheckItem(this)">
                <input type="radio" id="skillsSome" name="internalSkills" value="some" />
                <span>Some - Have a few knowledgeable team members</span>
              </div>
              <div class="check-item" onclick="selectCheckItem(this)">
                <input type="radio" id="skillsGood" name="internalSkills" value="good" />
                <span>Good - Have experienced team and internal expertise</span>
              </div>
              <div class="check-item" onclick="selectCheckItem(this)">
                <input type="radio" id="skillsAdvanced" name="internalSkills" value="advanced" />
                <span>Advanced - Strong AI/ML team in place</span>
              </div>
            </div>
            <div class="error-msg">Please select an option</div>
          </div>

          <div class="field-group">
            <label>Organizational Change Management Readiness *</label>
            <p class="field-hint">How well does your organization adapt to significant changes?</p>
            <div class="rating-scale">
              <button type="button" class="rating-option" onclick="setRating(this, 'changeManagement', 1)">
                <span class="rating-num">1</span>
                <span class="rating-label">Resistant</span>
              </button>
              <button type="button" class="rating-option" onclick="setRating(this, 'changeManagement', 2)">
                <span class="rating-num">2</span>
                <span class="rating-label">Hesitant</span>
              </button>
              <button type="button" class="rating-option" onclick="setRating(this, 'changeManagement', 3)">
                <span class="rating-num">3</span>
                <span class="rating-label">Neutral</span>
              </button>
              <button type="button" class="rating-option" onclick="setRating(this, 'changeManagement', 4)">
                <span class="rating-num">4</span>
                <span class="rating-label">Adaptive</span>
              </button>
              <button type="button" class="rating-option" onclick="setRating(this, 'changeManagement', 5)">
                <span class="rating-num">5</span>
                <span class="rating-label">Innovation-Focused</span>
              </button>
            </div>
            <input type="hidden" name="changeManagement" />
            <div class="error-msg">Please select a rating</div>
          </div>

          <div class="field-group">
            <label>Industry Regulations & Compliance Constraints * (select all that apply)</label>
            <div class="check-group" id="regulationsGroup">
              <div class="check-item" onclick="selectCheckItem(this)">
                <input type="checkbox" id="reg1" name="regulations" value="none" />
                <span>No major constraints</span>
              </div>
              <div class="check-item" onclick="selectCheckItem(this)">
                <input type="checkbox" id="reg2" name="regulations" value="hipaa" />
                <span>HIPAA (Healthcare)</span>
              </div>
              <div class="check-item" onclick="selectCheckItem(this)">
                <input type="checkbox" id="reg3" name="regulations" value="gdpr" />
                <span>GDPR (Data Privacy - EU)</span>
              </div>
              <div class="check-item" onclick="selectCheckItem(this)">
                <input type="checkbox" id="reg4" name="regulations" value="ccpa" />
                <span>CCPA (Data Privacy - CA)</span>
              </div>
              <div class="check-item" onclick="selectCheckItem(this)">
                <input type="checkbox" id="reg5" name="regulations" value="sox" />
                <span>SOX (Financial Reporting)</span>
              </div>
              <div class="check-item" onclick="selectCheckItem(this)">
                <input type="checkbox" id="reg6" name="regulations" value="pci" />
                <span>PCI-DSS (Payment Card)</span>
              </div>
              <div class="check-item" onclick="selectCheckItem(this)">
                <input type="checkbox" id="reg7" name="regulations" value="other" />
                <span>Other / Multiple regulations</span>
              </div>
            </div>
            <input type="text" id="regulationsOther" name="regulationsOther" placeholder="Please describe..." style="display: none; margin-top: 12px;" />
            <div class="error-msg">Please select at least one option</div>
          </div>

          <div class="btn-row">
            <button type="button" class="btn btn-secondary" onclick="previousStep()">← Back</button>
            <button type="button" class="btn btn-primary" onclick="nextStep()">Next Step →</button>
          </div>
        </div>

        <!-- SECTION 5: GOALS & TIMELINE -->
        <div class="form-section" data-section="5">
          <div class="section-intro">
            <h2>Goals & Timeline</h2>
            <p>What are your objectives and when do you want to achieve them?</p>
          </div>

          <div class="field-group">
            <label for="goals">What is your primary goal for AI implementation? *</label>
            <textarea id="goals" name="goals" placeholder="E.g., Improve customer service efficiency, automate routine tasks, gain competitive advantage, etc." required></textarea>
            <div class="error-msg">Please describe your primary goal</div>
          </div>

          <div class="field-group">
            <label for="timeline">Implementation Timeline *</label>
            <select id="timeline" name="timeline" required>
              <option value="">Select your timeline...</option>
              <option value="immediate">Immediate (0-3 months)</option>
              <option value="short">Short-term (3-6 months)</option>
              <option value="medium">Medium-term (6-12 months)</option>
              <option value="long">Long-term (12+ months)</option>
              <option value="exploring">Still exploring / No timeline yet</option>
            </select>
            <div class="error-msg">Please select a timeline</div>
          </div>

          <div class="field-group">
            <label for="budget">Estimated Budget for AI Initiatives *</label>
            <select id="budget" name="budget" required>
              <option value="">Select a budget range...</option>
              <option value="under25k">Under $25,000</option>
              <option value="25k-50k">$25,000 - $50,000</option>
              <option value="50k-100k">$50,000 - $100,000</option>
              <option value="100k-250k">$100,000 - $250,000</option>
              <option value="250k-500k">$250,000 - $500,000</option>
              <option value="500k+">$500,000+</option>
              <option value="undecided">Budget to be determined</option>
            </select>
            <div class="error-msg">Please select a budget range</div>
          </div>

          <div class="btn-row">
            <button type="button" class="btn btn-secondary" onclick="previousStep()">← Back</button>
            <button type="button" class="btn btn-primary" onclick="nextStep()">Next Step →</button>
          </div>
        </div>

        <!-- SECTION 6: ADDITIONAL INFO -->
        <div class="form-section" data-section="6">
          <div class="section-intro">
            <h2>Final Thoughts</h2>
            <p>Help us understand any additional context or concerns about AI adoption.</p>
          </div>

          <div class="field-group">
            <label for="challenges">What are your main challenges with AI adoption? <span class="optional">(optional)</span></label>
            <textarea id="challenges" name="challenges" placeholder="E.g., Lack of expertise, data quality, budget constraints, change management, security concerns, etc."></textarea>
          </div>

          <div class="field-group">
            <label for="additionalInfo">Additional Comments <span class="optional">(optional)</span></label>
            <textarea id="additionalInfo" name="additionalInfo" placeholder="Anything else you'd like us to know..."></textarea>
          </div>

          <div class="field-group">
            <label>
              <input type="checkbox" id="followUp" name="followUp" value="yes" />
              <span>Yes, I'd like ANSA Solutions to follow up with assessment results and recommendations</span>
            </label>
          </div>

          <div class="btn-row">
            <button type="button" class="btn btn-secondary" onclick="previousStep()">← Back</button>
            <button type="submit" class="btn btn-submit">Submit Assessment</button>
          </div>
        </div>
      </form>
    </div>
  </main>

  <footer>
    <p>&copy; 2025 ANSA Solutions. All rights reserved. | <a href="#" style="color: inherit; text-decoration: none;">Privacy Policy</a></p>
  </footer>
</div>

<div class="save-indicator" id="saveIndicator">Auto-saving...</div>

<script>
let currentSection = 1;
const totalSections = 6;
const formData = {};

function nextStep() {
  if (validateSection(currentSection)) {
    if (currentSection < totalSections) {
      currentSection++;
      showSection(currentSection);
      updateProgress();
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }
  }
}

function previousStep() {
  if (currentSection > 1) {
    currentSection--;
    showSection(currentSection);
    updateProgress();
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }
}

function showSection(sectionNum) {
  document.querySelectorAll('.form-section').forEach(s => s.classList.remove('active'));
  document.querySelector(`[data-section="${sectionNum}"]`).classList.add('active');
}

function updateProgress() {
  document.querySelectorAll('.progress-step').forEach(step => {
    step.classList.remove('active', 'completed');
  });
  for (let i = 1; i < currentSection; i++) {
    document.querySelector(`[data-step="${i}"]`).classList.add('completed');
  }
  document.querySelector(`[data-step="${currentSection}"]`).classList.add('active');
  
  const sectionNames = ['Company Information', 'Current AI Usage', 'Technical Infrastructure', 'Organizational Readiness', 'Goals & Timeline', 'Additional Information'];
  document.querySelector('.progress-section-name').textContent = `Step ${currentSection} of ${totalSections}: ${sectionNames[currentSection - 1]}`;
  document.querySelector('.progress-count').textContent = `${Math.round(currentSection / totalSections * 100)}% Complete`;
}

function validateSection(sectionNum) {
  const section = document.querySelector(`[data-section="${sectionNum}"]`);
  let isValid = true;
  
  section.querySelectorAll('[required]').forEach(field => {
    if (!field.value || (field.type === 'checkbox' && !document.querySelector(`[name="${field.name}"]:checked`))) {
      field.classList.add('field-error');
      field.closest('.field-group').querySelector('.error-msg').classList.add('show');
      isValid = false;
    } else {
      field.classList.remove('field-error');
      field.closest('.field-group').querySelector('.error-msg').classList.remove('show');
    }
  });
  
  return isValid;
}

function selectCheckItem(el) {
  const input = el.querySelector('input');
  if (input.type === 'radio') {
    el.parentElement.querySelectorAll('.check-item').forEach(item => item.classList.remove('selected'));
  }
  el.classList.toggle('selected');
  input.checked = !input.checked;
  autoSave();
}

function setRating(btn, name, value) {
  btn.parentElement.querySelectorAll('.rating-option').forEach(b => b.classList.remove('selected'));
  btn.classList.add('selected');
  document.querySelector(`input[name="${name}"]`).value = value;
  autoSave();
}

function autoSave() {
  const formEl = document.getElementById('assessmentForm');
  const formDataObj = new FormData(formEl);
  
  console.log('Form data auto-saved');
  showAutoSaveIndicator();
}

function showAutoSaveIndicator() {
  const indicator = document.getElementById('saveIndicator');
  indicator.classList.add('show');
  setTimeout(() => indicator.classList.remove('show'), 3000);
}

document.getElementById('assessmentForm').addEventListener('submit', async (e) => {
  e.preventDefault();
  
  const formEl = document.getElementById('assessmentForm');
  const formDataObj = new FormData(formEl);
  const data = Object.fromEntries(formDataObj);
  
  console.log('Form submitted:', data);
  
  // Submit to backend
  const submitBtn = formEl.querySelector('.btn-submit');
  submitBtn.disabled = true;
  submitBtn.textContent = 'Submitting...';
  
  try {
    // Simulate API call
    await new Promise(resolve => setTimeout(resolve, 2000));
    
    alert('Assessment submitted successfully!\n\nThank you for completing the AI Readiness Assessment. Our team will review your responses and contact you within 2-3 business days with personalized recommendations.');
    
    submitBtn.textContent = 'Submit Assessment';
    submitBtn.disabled = false;
  } catch (error) {
    console.error('Error:', error);
    alert('Error submitting form. Please try again.');
    submitBtn.textContent = 'Submit Assessment';
    submitBtn.disabled = false;
  }
});

// Toggle "Other" regulations field
document.querySelectorAll('input[name="regulations"]').forEach(cb => {
  cb.addEventListener('change', () => {
    const otherField = document.getElementById('regulationsOther');
    const otherChecked = document.querySelector('input[name="regulations"][value="other"]').checked;
    otherField.style.display = otherChecked ? 'block' : 'none';
    if (!otherChecked) otherField.value = '';
  });
});

// Initialize
updateProgress();
</script>
</body>
</html>