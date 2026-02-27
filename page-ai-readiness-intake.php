
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
  z-index: -1;
}

.page-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 40px 20px;
}

/* ────────────────────────────────────────────── */
/* HEADER                                        */
/* ────────────────────────────────────────────── */

.header-section {
  text-align: center;
  margin-bottom: 60px;
  animation: fadeInDown 0.6s ease-out;
}

.header-section h1 {
  font-family: 'Fraunces', serif;
  font-size: 48px;
  font-weight: 700;
  color: var(--darker);
  line-height: 1.2;
  margin-bottom: 16px;
  letter-spacing: -0.5px;
}

.header-section p {
  font-size: 18px;
  color: var(--muted);
  max-width: 600px;
  margin: 0 auto;
  line-height: 1.6;
}

/* ────────────────────────────────────────────── */
/* FORM LAYOUT                                   */
/* ────────────────────────────────────────────── */

.form-wrapper {
  background: var(--card);
  border-radius: 16px;
  padding: 40px;
  box-shadow: 0 4px 24px rgba(69, 44, 234, 0.08);
  max-width: 600px;
  margin: 0 auto;
  animation: fadeInUp 0.6s ease-out;
}

.form-section {
  margin-bottom: 32px;
}

.form-section:last-child {
  margin-bottom: 0;
}

.form-section h3 {
  font-family: 'Fraunces', serif;
  font-size: 20px;
  font-weight: 600;
  color: var(--darker);
  margin-bottom: 20px;
  display: flex;
  align-items: center;
  gap: 8px;
}

.section-number {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 28px;
  height: 28px;
  background: var(--purple-glow);
  color: var(--purple);
  border-radius: 50%;
  font-weight: 700;
  font-size: 14px;
}

.form-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 16px;
  margin-bottom: 16px;
}

.form-row.full {
  grid-template-columns: 1fr;
}

.form-group {
  display: flex;
  flex-direction: column;
}

.form-group label {
  font-size: 14px;
  font-weight: 600;
  color: var(--dark);
  margin-bottom: 8px;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

.form-group label .required {
  color: var(--red);
}

.form-group input,
.form-group select,
.form-group textarea {
  padding: 12px 14px;
  border: 1px solid var(--border);
  border-radius: 8px;
  font-size: 14px;
  font-family: 'DM Sans', sans-serif;
  transition: all 0.2s ease;
  color: var(--dark);
  background: #fff;
}

.form-group input:hover,
.form-group select:hover,
.form-group textarea:hover {
  border-color: var(--purple);
  box-shadow: 0 2px 8px var(--purple-glow);
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
  outline: none;
  border-color: var(--purple);
  box-shadow: 0 0 0 3px var(--purple-glow);
}

.form-group textarea {
  resize: vertical;
  min-height: 100px;
}

/* Checkbox & Radio Styles */
.checkbox-group,
.radio-group {
  display: flex;
  flex-direction: column;
  gap: 12px;
}

.checkbox-item,
.radio-item {
  display: flex;
  align-items: center;
  gap: 10px;
  cursor: pointer;
}

.checkbox-item input[type="checkbox"],
.radio-item input[type="radio"] {
  width: 18px;
  height: 18px;
  cursor: pointer;
  accent-color: var(--purple);
}

.checkbox-item label,
.radio-item label {
  cursor: pointer;
  font-size: 14px;
  color: var(--dark);
  margin: 0;
  text-transform: none;
  letter-spacing: normal;
  font-weight: 400;
}

/* Scale / Range Inputs */
.scale-labels {
  display: flex;
  justify-content: space-between;
  font-size: 12px;
  color: var(--muted);
  margin-bottom: 8px;
  text-transform: uppercase;
  letter-spacing: 0.3px;
}

.scale-input {
  width: 100%;
  height: 6px;
  border-radius: 3px;
  background: var(--border);
  outline: none;
  -webkit-appearance: none;
  appearance: none;
}

.scale-input::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 18px;
  height: 18px;
  border-radius: 50%;
  background: var(--purple);
  cursor: pointer;
  box-shadow: 0 2px 6px rgba(69, 44, 234, 0.3);
  transition: box-shadow 0.2s ease;
}

.scale-input::-moz-range-thumb {
  width: 18px;
  height: 18px;
  border-radius: 50%;
  background: var(--purple);
  cursor: pointer;
  border: none;
  box-shadow: 0 2px 6px rgba(69, 44, 234, 0.3);
  transition: box-shadow 0.2s ease;
}

.scale-input::-webkit-slider-thumb:hover {
  box-shadow: 0 4px 12px rgba(69, 44, 234, 0.5);
}

.scale-input::-moz-range-thumb:hover {
  box-shadow: 0 4px 12px rgba(69, 44, 234, 0.5);
}

/* ────────────────────────────────────────────── */
/* BUTTONS                                       */
/* ────────────────────────────────────────────── */

.form-actions {
  display: flex;
  gap: 12px;
  margin-top: 32px;
}

.btn {
  flex: 1;
  padding: 14px 24px;
  border: none;
  border-radius: 8px;
  font-size: 14px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  cursor: pointer;
  transition: all 0.2s ease;
  font-family: 'DM Sans', sans-serif;
}

.btn-primary {
  background: var(--purple);
  color: white;
}

.btn-primary:hover {
  background: #3520c7;
  transform: translateY(-2px);
  box-shadow: 0 8px 16px rgba(69, 44, 234, 0.3);
}

.btn-primary:active {
  transform: translateY(0);
}

.btn-primary:disabled {
  background: var(--muted);
  cursor: not-allowed;
  transform: none;
}

.btn-secondary {
  background: transparent;
  color: var(--purple);
  border: 2px solid var(--purple);
}

.btn-secondary:hover {
  background: var(--purple-light);
}

/* ────────────────────────────────────────────── */
/* HELPER TEXT & VALIDATION                      */
/* ────────────────────────────────────────────── */

.helper-text {
  font-size: 12px;
  color: var(--muted);
  margin-top: 6px;
}

.error-message {
  font-size: 12px;
  color: var(--red);
  margin-top: 6px;
}

.form-group.has-error input,
.form-group.has-error select,
.form-group.has-error textarea {
  border-color: var(--red);
  background: rgba(239, 68, 68, 0.02);
}

.form-group.has-error input:focus,
.form-group.has-error select:focus,
.form-group.has-error textarea:focus {
  box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.1);
}

/* ────────────────────────────────────────────── */
/* SUCCESS STATE                                 */
/* ────────────────────────────────────────────── */

.success-message {
  background: rgba(16, 185, 129, 0.1);
  border: 1px solid var(--green);
  border-radius: 8px;
  padding: 16px;
  margin-bottom: 24px;
  color: var(--green);
  font-size: 14px;
  display: none;
}

.success-message.show {
  display: block;
  animation: slideDown 0.3s ease-out;
}

/* ────────────────────────────────────────────── */
/* LOADING STATE                                 */
/* ────────────────────────────────────────────── */

.loading-spinner {
  display: none;
  width: 18px;
  height: 18px;
  border: 2px solid rgba(255, 255, 255, 0.3);
  border-top: 2px solid white;
  border-radius: 50%;
  animation: spin 0.8s linear infinite;
}

.btn-primary.loading {
  opacity: 0.8;
  pointer-events: none;
}

.btn-primary.loading .loading-spinner {
  display: inline-block;
  margin-right: 8px;
}

/* ────────────────────────────────────────────── */
/* ANIMATIONS                                    */
/* ────────────────────────────────────────────── */

@keyframes fadeInDown {
  from {
    opacity: 0;
    transform: translateY(-20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes slideDown {
  from {
    opacity: 0;
    transform: translateY(-10px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes spin {
  to {
    transform: rotate(360deg);
  }
}

/* ────────────────────────────────────────────── */
/* RESPONSIVE DESIGN                             */
/* ────────────────────────────────────────────── */

@media (max-width: 768px) {
  .header-section h1 {
    font-size: 36px;
  }

  .form-wrapper {
    padding: 24px;
  }

  .form-row {
    grid-template-columns: 1fr;
  }

  .form-actions {
    flex-direction: column;
  }

  .btn {
    width: 100%;
  }
}

@media (max-width: 480px) {
  .page-container {
    padding: 20px 16px;
  }

  .header-section h1 {
    font-size: 28px;
  }

  .header-section p {
    font-size: 16px;
  }

  .form-wrapper {
    padding: 20px;
  }

  .form-section h3 {
    font-size: 18px;
  }
}
</style>

<div class="page-container">
  <div class="header-section">
    <h1>AI Readiness Assessment</h1>
    <p>Let's evaluate your organization's AI maturity and identify key opportunities for automation and growth.</p>
  </div>

  <div class="form-wrapper">
    <div class="success-message" id="successMessage">
      Your assessment has been submitted successfully! We'll review it and reach out shortly.
    </div>

    <form id="assessmentForm" method="POST">
      <!-- SECTION 1: COMPANY INFO -->
      <div class="form-section">
        <h3><span class="section-number">1</span>Company Information</h3>
        
        <div class="form-row">
          <div class="form-group">
            <label for="companyName">Company Name <span class="required">*</span></label>
            <input type="text" id="companyName" name="company_name" required>
          </div>
          <div class="form-group">
            <label for="contactName">Your Name <span class="required">*</span></label>
            <input type="text" id="contactName" name="contact_name" required>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group">
            <label for="email">Email <span class="required">*</span></label>
            <input type="email" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone">
          </div>
        </div>

        <div class="form-row full">
          <div class="form-group">
            <label for="industry">Industry <span class="required">*</span></label>
            <select id="industry" name="industry" required>
              <option value="">Select an industry</option>
              <option value="technology">Technology</option>
              <option value="healthcare">Healthcare</option>
              <option value="finance">Finance & Banking</option>
              <option value="manufacturing">Manufacturing</option>
              <option value="retail">Retail & E-Commerce</option>
              <option value="logistics">Logistics & Supply Chain</option>
              <option value="energy">Energy & Utilities</option>
              <option value="education">Education</option>
              <option value="government">Government</option>
              <option value="other">Other</option>
            </select>
          </div>
        </div>

        <div class="form-row full">
          <div class="form-group">
            <label for="employees">Number of Employees <span class="required">*</span></label>
            <select id="employees" name="employees" required>
              <option value="">Select range</option>
              <option value="1-50">1-50</option>
              <option value="51-200">51-200</option>
              <option value="201-500">201-500</option>
              <option value="501-1000">501-1,000</option>
              <option value="1000+">1,000+</option>
            </select>
          </div>
        </div>
      </div>

      <!-- SECTION 2: CURRENT STATE -->
      <div class="form-section">
        <h3><span class="section-number">2</span>Current Operations</h3>

        <div class="form-row full">
          <div class="form-group">
            <label>What % of your business processes are currently automated? <span class="required">*</span></label>
            <div class="scale-labels">
              <span>0% (Manual)</span>
              <span>50%</span>
              <span>100% (Fully Automated)</span>
            </div>
            <input type="range" id="automation" name="automation_percentage" min="0" max="100" step="5" class="scale-input" required>
            <div class="helper-text">Drag to indicate current level</div>
          </div>
        </div>

        <div class="form-row full">
          <div class="form-group">
            <label>How many full-time employees are dedicated to manual data entry or routine tasks? <span class="required">*</span></label>
            <input type="number" id="manualStaff" name="manual_staff_count" min="0" required>
          </div>
        </div>

        <div class="form-row full">
          <div class="form-group">
            <label>What are your biggest operational pain points? (Select all that apply)</label>
            <div class="checkbox-group">
              <div class="checkbox-item">
                <input type="checkbox" id="pain1" name="pain_points" value="manual_data_entry">
                <label for="pain1">Manual data entry & spreadsheet management</label>
              </div>
              <div class="checkbox-item">
                <input type="checkbox" id="pain2" name="pain_points" value="duplicate_systems">
                <label for="pain2">Duplicate/disconnected systems</label>
              </div>
              <div class="checkbox-item">
                <input type="checkbox" id="pain3" name="pain_points" value="error_prone">
                <label for="pain3">Error-prone processes</label>
              </div>
              <div class="checkbox-item">
                <input type="checkbox" id="pain4" name="pain_points" value="slow_cycles">
                <label for="pain4">Slow decision cycles</label>
              </div>
              <div class="checkbox-item">
                <input type="checkbox" id="pain5" name="pain_points" value="scaling_costs">
                <label for="pain5">Rising costs to scale</label>
              </div>
              <div class="checkbox-item">
                <input type="checkbox" id="pain6" name="pain_points" value="staff_retention">
                <label for="pain6">Staff retention issues</label>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- SECTION 3: TECHNOLOGY FOUNDATION -->
      <div class="form-section">
        <h3><span class="section-number">3</span>Technology Foundation</h3>

        <div class="form-row full">
          <div class="form-group">
            <label>What's your organization's current tech maturity? <span class="required">*</span></label>
            <div class="radio-group">
              <div class="radio-item">
                <input type="radio" id="maturity1" name="tech_maturity" value="legacy" required>
                <label for="maturity1">Mostly legacy systems & manual processes</label>
              </div>
              <div class="radio-item">
                <input type="radio" id="maturity2" name="tech_maturity" value="mixed" required>
                <label for="maturity2">Mix of legacy and modern systems</label>
              </div>
              <div class="radio-item">
                <input type="radio" id="maturity3" name="tech_maturity" value="cloud_native" required>
                <label for="maturity3">Mostly cloud-native & integrated</label>
              </div>
            </div>
          </div>
        </div>

        <div class="form-row full">
          <div class="form-group">
            <label>Do you have an enterprise system (ERP, CRM, etc.)? <span class="required">*</span></label>
            <div class="radio-group">
              <div class="radio-item">
                <input type="radio" id="erp1" name="has_erp" value="yes" required>
                <label for="erp1">Yes</label>
              </div>
              <div class="radio-item">
                <input type="radio" id="erp2" name="has_erp" value="partial" required>
                <label for="erp2">Partial/Multiple systems</label>
              </div>
              <div class="radio-item">
                <input type="radio" id="erp3" name="has_erp" value="no" required>
                <label for="erp3">No</label>
              </div>
            </div>
          </div>
        </div>

        <div class="form-row full">
          <div class="form-group">
            <label for="integrations">Which platforms do you currently use? (Select all that apply)</label>
            <div class="checkbox-group">
              <div class="checkbox-item">
                <input type="checkbox" id="int1" name="platforms" value="salesforce">
                <label for="int1">Salesforce</label>
              </div>
              <div class="checkbox-item">
                <input type="checkbox" id="int2" name="platforms" value="sap">
                <label for="int2">SAP</label>
              </div>
              <div class="checkbox-item">
                <input type="checkbox" id="int3" name="platforms" value="oracle">
                <label for="int3">Oracle</label>
              </div>
              <div class="checkbox-item">
                <input type="checkbox" id="int4" name="platforms" value="dynamics">
                <label for="int4">Microsoft Dynamics</label>
              </div>
              <div class="checkbox-item">
                <input type="checkbox" id="int5" name="platforms" value="quickbooks">
                <label for="int5">QuickBooks</label>
              </div>
              <div class="checkbox-item">
                <input type="checkbox" id="int6" name="platforms" value="hubspot">
                <label for="int6">HubSpot</label>
              </div>
              <div class="checkbox-item">
                <input type="checkbox" id="int7" name="platforms" value="other_platforms">
                <label for="int7">Other</label>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- SECTION 4: AI & AUTOMATION GOALS -->
      <div class="form-section">
        <h3><span class="section-number">4</span>AI & Automation Goals</h3>

        <div class="form-row full">
          <div class="form-group">
            <label>What's your primary goal for automation? <span class="required">*</span></label>
            <div class="radio-group">
              <div class="radio-item">
                <input type="radio" id="goal1" name="automation_goal" value="cost_reduction" required>
                <label for="goal1">Reduce operational costs</label>
              </div>
              <div class="radio-item">
                <input type="radio" id="goal2" name="automation_goal" value="speed" required>
                <label for="goal2">Speed up processes</label>
              </div>
              <div class="radio-item">
                <input type="radio" id="goal3" name="automation_goal" value="accuracy" required>
                <label for="goal3">Improve accuracy & consistency</label>
              </div>
              <div class="radio-item">
                <input type="radio" id="goal4" name="automation_goal" value="scale" required>
                <label for="goal4">Scale without adding headcount</label>
              </div>
              <div class="radio-item">
                <input type="radio" id="goal5" name="automation_goal" value="compliance" required>
                <label for="goal5">Improve compliance & visibility</label>
              </div>
            </div>
          </div>
        </div>

        <div class="form-row full">
          <div class="form-group">
            <label>Which of these areas interest you most? (Select up to 3)</label>
            <div class="checkbox-group">
              <div class="checkbox-item">
                <input type="checkbox" id="int_area1" name="interest_areas" value="finance_accounting">
                <label for="int_area1">Finance & Accounting</label>
              </div>
              <div class="checkbox-item">
                <input type="checkbox" id="int_area2" name="interest_areas" value="procurement">
                <label for="int_area2">Procurement & Vendor Management</label>
              </div>
              <div class="checkbox-item">
                <input type="checkbox" id="int_area3" name="interest_areas" value="hr_payroll">
                <label for="int_area3">HR & Payroll</label>
              </div>
              <div class="checkbox-item">
                <input type="checkbox" id="int_area4" name="interest_areas" value="sales_ops">
                <label for="int_area4">Sales & Sales Ops</label>
              </div>
              <div class="checkbox-item">
                <input type="checkbox" id="int_area5" name="interest_areas" value="customer_service">
                <label for="int_area5">Customer Service & Support</label>
              </div>
              <div class="checkbox-item">
                <input type="checkbox" id="int_area6" name="interest_areas" value="supply_chain">
                <label for="int_area6">Supply Chain & Logistics</label>
              </div>
            </div>
          </div>
        </div>

        <div class="form-row full">
          <div class="form-group">
            <label for="timeline">What's your timeline for implementation? <span class="required">*</span></label>
            <select id="timeline" name="timeline" required>
              <option value="">Select timeline</option>
              <option value="0-3_months">0-3 months</option>
              <option value="3-6_months">3-6 months</option>
              <option value="6-12_months">6-12 months</option>
              <option value="12_months_plus">12+ months</option>
              <option value="exploratory">Just exploring options</option>
            </select>
          </div>
        </div>

        <div class="form-row full">
          <div class="form-group">
            <label for="budget">What's your estimated budget? <span class="required">*</span></label>
            <select id="budget" name="budget" required>
              <option value="">Select budget range</option>
              <option value="25k_50k">$25K-$50K</option>
              <option value="50k_100k">$50K-$100K</option>
              <option value="100k_250k">$100K-$250K</option>
              <option value="250k_500k">$250K-$500K</option>
              <option value="500k_plus">$500K+</option>
              <option value="undecided">Undecided</option>
            </select>
          </div>
        </div>
      </div>

      <!-- SECTION 5: TEAM & ORGANIZATION -->
      <div class="form-section">
        <h3><span class="section-number">5</span>Team & Organization</h3>

        <div class="form-row full">
          <div class="form-group">
            <label>Who are the key decision makers we should involve? (optional)</label>
            <textarea id="decisionMakers" name="decision_makers" placeholder="e.g., CFO, VP of Operations, IT Director"></textarea>
          </div>
        </div>

        <div class="form-row full">
          <div class="form-group">
            <label>How would you rate your organization's appetite for change? <span class="required">*</span></label>
            <div class="scale-labels">
              <span>Risk Averse</span>
              <span>Moderate</span>
              <span>Very Innovative</span>
            </div>
            <input type="range" id="changeAppetite" name="change_appetite" min="1" max="5" step="1" class="scale-input" required>
          </div>
        </div>
      </div>

      <!-- SECTION 6: ADDITIONAL INFO -->
      <div class="form-section">
        <h3><span class="section-number">6</span>Final Questions</h3>

        <div class="form-row full">
          <div class="form-group">
            <label for="additionalInfo">Anything else you'd like us to know? (optional)</label>
            <textarea id="additionalInfo" name="additional_info" placeholder="Tell us about any specific challenges or initiatives..."></textarea>
          </div>
        </div>

        <div class="form-row full">
          <div class="form-group">
            <label for="referral">How did you hear about us? (optional)</label>
            <select id="referral" name="referral">
              <option value="">Select option</option>
              <option value="google_search">Google Search</option>
              <option value="linkedin">LinkedIn</option>
              <option value="referral">Referral from colleague</option>
              <option value="conference">Conference/Event</option>
              <option value="article">Blog/Article</option>
              <option value="other">Other</option>
            </select>
          </div>
        </div>
      </div>

      <!-- FORM ACTIONS -->
      <div class="form-actions">
        <button type="reset" class="btn btn-secondary">Clear Form</button>
        <button type="submit" class="btn btn-primary">
          <span class="loading-spinner"></span>
          Submit Assessment
        </button>
      </div>
    </form>
  </div>
</div>

<script>
document.getElementById('assessmentForm').addEventListener('submit', async function(e) {
  e.preventDefault();

  const formData = new FormData(this);
  const submitBtn = this.querySelector('button[type="submit"]');
  const successMsg = document.getElementById('successMessage');

  submitBtn.classList.add('loading');
  submitBtn.disabled = true;

  try {
    const response = await fetch('/wp-admin/admin-ajax.php', {
      method: 'POST',
      body: formData
    });

    if (response.ok) {
      successMsg.classList.add('show');
      this.reset();
      setTimeout(() => {
        successMsg.classList.remove('show');
      }, 5000);
    } else {
      alert('An error occurred. Please try again.');
    }
  } catch (error) {
    console.error('Error:', error);
    alert('Failed to submit. Please check your connection and try again.');
  } finally {
    submitBtn.classList.remove('loading');
    submitBtn.disabled = false;
  }
});
</script>

<?php get_footer(); ?>