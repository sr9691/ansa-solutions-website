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
  width: 40px;
  height: 40px;
  background: linear-gradient(135deg, var(--purple) 0%, #8b5cf6 100%);
  border-radius: 8px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-weight: 700;
  font-size: 20px;
}
.logo-text {
  font-family: 'Fraunces', serif;
  font-size: 18px;
  font-weight: 700;
  color: white;
}
.header-nav {
  display: flex;
  gap: 30px;
}
.header-nav a {
  color: rgba(255,255,255,0.7);
  text-decoration: none;
  font-size: 14px;
  transition: color 0.3s;
}
.header-nav a:hover {
  color: white;
}

/* ── Main Container ── */
.container {
  max-width: 720px;
  margin: 0 auto;
  padding: 40px 20px;
  flex-grow: 1;
}

.form-header {
  text-align: center;
  margin-bottom: 40px;
}
.form-header h1 {
  font-family: 'Fraunces', serif;
  font-size: 42px;
  font-weight: 700;
  color: var(--darker);
  margin-bottom: 12px;
  line-height: 1.2;
}
.form-header p {
  color: var(--muted);
  font-size: 16px;
  line-height: 1.5;
}

/* ── Form Styles ── */
.form-group {
  margin-bottom: 32px;
  animation: slideIn 0.5s ease-out forwards;
  opacity: 0;
}

@keyframes slideIn {
  from {
    opacity: 0;
    transform: translateY(10px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.form-group:nth-child(1) { animation-delay: 0.05s; }
.form-group:nth-child(2) { animation-delay: 0.1s; }
.form-group:nth-child(3) { animation-delay: 0.15s; }
.form-group:nth-child(4) { animation-delay: 0.2s; }
.form-group:nth-child(5) { animation-delay: 0.25s; }
.form-group:nth-child(6) { animation-delay: 0.3s; }
.form-group:nth-child(7) { animation-delay: 0.35s; }
.form-group:nth-child(8) { animation-delay: 0.4s; }

label {
  display: block;
  margin-bottom: 10px;
  color: var(--dark);
  font-weight: 500;
  font-size: 16px;
}

label .required {
  color: var(--red);
}

input[type="text"],
input[type="email"],
input[type="number"],
select,
textarea {
  width: 100%;
  padding: 12px 16px;
  border: 1px solid var(--border);
  border-radius: 8px;
  font-family: 'DM Sans', sans-serif;
  font-size: 14px;
  color: var(--dark);
  background: var(--card);
  transition: all 0.3s;
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="number"]:focus,
select:focus,
textarea:focus {
  outline: none;
  border-color: var(--purple);
  background: linear-gradient(135deg, rgba(69,44,234,0.03) 0%, rgba(139,92,246,0.03) 100%);
  box-shadow: 0 0 0 3px var(--purple-glow);
}

textarea {
  resize: vertical;
  min-height: 100px;
}

/* ── Checkbox & Radio Styles ── */
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
  padding: 10px;
  border-radius: 6px;
  transition: background 0.2s;
}

.checkbox-item:hover,
.radio-item:hover {
  background: var(--purple-light);
}

input[type="checkbox"],
input[type="radio"] {
  width: 18px;
  height: 18px;
  cursor: pointer;
  accent-color: var(--purple);
}

/* ── Helper Text ── */
.help-text {
  font-size: 13px;
  color: var(--muted);
  margin-top: 6px;
}

/* ── Section Title ── */
.section-title {
  font-family: 'Fraunces', serif;
  font-size: 24px;
  font-weight: 700;
  color: var(--darker);
  margin-top: 48px;
  margin-bottom: 24px;
  padding-bottom: 12px;
  border-bottom: 2px solid var(--purple-light);
}

/* ── Button Styles ── */
.button-group {
  display: flex;
  gap: 12px;
  margin-top: 40px;
  justify-content: center;
}

button {
  padding: 12px 32px;
  border: none;
  border-radius: 8px;
  font-family: 'DM Sans', sans-serif;
  font-size: 15px;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

.btn-submit {
  background: linear-gradient(135deg, var(--purple) 0%, #8b5cf6 100%);
  color: white;
  min-width: 140px;
}

.btn-submit:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 20px rgba(69,44,234,0.3);
}

.btn-submit:active {
  transform: translateY(0);
}

.btn-clear {
  background: var(--border);
  color: var(--dark);
  min-width: 140px;
}

.btn-clear:hover {
  background: var(--muted);
  color: white;
}

/* ── Status Messages ── */
.message {
  padding: 16px;
  border-radius: 8px;
  margin-bottom: 20px;
  animation: slideIn 0.3s ease-out;
  display: none;
}

.message.show {
  display: block;
}

.message.success {
  background: rgba(16,185,129,0.1);
  color: #047857;
  border-left: 4px solid var(--green);
}

.message.error {
  background: rgba(239,68,68,0.1);
  color: #991b1b;
  border-left: 4px solid var(--red);
}

/* ── Footer ── */
footer {
  background: var(--darker);
  color: rgba(255,255,255,0.7);
  text-align: center;
  padding: 24px 20px;
  font-size: 13px;
}

/* ── Responsive ── */
@media (max-width: 768px) {
  .container {
    padding: 24px 16px;
  }
  
  .form-header h1 {
    font-size: 32px;
  }
  
  .header-nav {
    gap: 15px;
  }
  
  .button-group {
    flex-direction: column;
  }
  
  button {
    width: 100%;
  }
}

.bookmark-note {
  background: #fffbeb;
  border-left: 4px solid var(--amber);
  padding: 16px;
  margin-bottom: 24px;
  border-radius: 6px;
  color: #92400e;
  font-size: 14px;
  line-height: 1.5;
}
</style>

<div class="page">
  <header class="header">
    <div class="header-inner">
      <div class="logo">
        <div class="logo-mark">A</div>
        <div class="logo-text">ANSA</div>
      </div>
      <nav class="header-nav">
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/services">Services</a>
        <a href="/contact">Contact</a>
      </nav>
    </div>
  </header>

  <div class="container">
    <div class="form-header">
      <h1>AI Readiness Assessment</h1>
      <p>Take this questionnaire to identify your organization's AI readiness and receive personalized insights.</p>
    </div>

    <div id="message" class="message"></div>

    <div class="bookmark-note">
      <strong>Bookmark this page:</strong> You can save your progress and return later. Your answers are saved to this browser session.
    </div>

    <form id="intakeForm">
      <!-- Organization Information -->
      <div class="section-title">Organization Information</div>

      <div class="form-group">
        <label for="organization">Organization Name <span class="required">*</span></label>
        <input type="text" id="organization" name="organization" required>
        <div class="help-text">Enter the official name of your organization</div>
      </div>

      <div class="form-group">
        <label for="industry">Industry <span class="required">*</span></label>
        <select id="industry" name="industry" required>
          <option value="">Select your industry...</option>
          <option value="technology">Technology</option>
          <option value="healthcare">Healthcare</option>
          <option value="finance">Finance</option>
          <option value="retail">Retail</option>
          <option value="manufacturing">Manufacturing</option>
          <option value="education">Education</option>
          <option value="energy">Energy</option>
          <option value="telecommunications">Telecommunications</option>
          <option value="transportation">Transportation</option>
          <option value="other">Other</option>
        </select>
        <div class="help-text">Select the primary industry your organization operates in</div>
      </div>

      <div class="form-group">
        <label for="employees">Number of Employees <span class="required">*</span></label>
        <select id="employees" name="employees" required>
          <option value="">Select employee range...</option>
          <option value="1-50">1-50</option>
          <option value="51-200">51-200</option>
          <option value="201-500">201-500</option>
          <option value="501-1000">501-1000</option>
          <option value="1000+">1000+</option>
        </select>
        <div class="help-text">Choose the range that matches your organization size</div>
      </div>

      <!-- Current AI/ML Usage -->
      <div class="section-title">Current AI/ML Usage</div>

      <div class="form-group">
        <label>Are you currently using any AI or ML technologies? <span class="required">*</span></label>
        <div class="radio-group">
          <label class="radio-item">
            <input type="radio" name="currentAI" value="yes" required>
            <span>Yes, we have AI/ML implementations</span>
          </label>
          <label class="radio-item">
            <input type="radio" name="currentAI" value="exploring" required>
            <span>We're exploring and piloting AI/ML</span>
          </label>
          <label class="radio-item">
            <input type="radio" name="currentAI" value="planning" required>
            <span>We're planning to implement AI/ML</span>
          </label>
          <label class="radio-item">
            <input type="radio" name="currentAI" value="no" required>
            <span>No, this is new to us</span>
          </label>
        </div>
        <div class="help-text">Select the option that best describes your current AI/ML adoption stage</div>
      </div>

      <div class="form-group">
        <label for="aiAreas">If using AI/ML, in which areas? (Select all that apply)</label>
        <div class="checkbox-group">
          <label class="checkbox-item">
            <input type="checkbox" name="aiAreas" value="predictive_analytics">
            <span>Predictive Analytics</span>
          </label>
          <label class="checkbox-item">
            <input type="checkbox" name="aiAreas" value="process_automation">
            <span>Process Automation / RPA</span>
          </label>
          <label class="checkbox-item">
            <input type="checkbox" name="aiAreas" value="nlp">
            <span>Natural Language Processing (NLP)</span>
          </label>
          <label class="checkbox-item">
            <input type="checkbox" name="aiAreas" value="computer_vision">
            <span>Computer Vision</span>
          </label>
          <label class="checkbox-item">
            <input type="checkbox" name="aiAreas" value="recommendation_systems">
            <span>Recommendation Systems</span>
          </label>
          <label class="checkbox-item">
            <input type="checkbox" name="aiAreas" value="customer_analytics">
            <span>Customer Analytics</span>
          </label>
          <label class="checkbox-item">
            <input type="checkbox" name="aiAreas" value="other">
            <span>Other</span>
          </label>
        </div>
        <div class="help-text">Leave blank if not currently using AI/ML</div>
      </div>

      <!-- Data & Infrastructure -->
      <div class="section-title">Data & Infrastructure</div>

      <div class="form-group">
        <label>How mature is your data infrastructure? <span class="required">*</span></label>
        <div class="radio-group">
          <label class="radio-item">
            <input type="radio" name="dataMaturity" value="emerging" required>
            <span>Emerging - scattered data, limited integration</span>
          </label>
          <label class="radio-item">
            <input type="radio" name="dataMaturity" value="developing" required>
            <span>Developing - some centralization, partial integration</span>
          </label>
          <label class="radio-item">
            <input type="radio" name="dataMaturity" value="advanced" required>
            <span>Advanced - centralized data warehouse/lake</span>
          </label>
          <label class="radio-item">
            <input type="radio" name="dataMaturity" value="mature" required>
            <span>Mature - advanced analytics platform with real-time processing</span>
          </label>
        </div>
        <div class="help-text">Select the stage that best describes your current data infrastructure</div>
      </div>

      <div class="form-group">
        <label for="dataQuality">Data Quality & Governance <span class="required">*</span></label>
        <div class="radio-group">
          <label class="radio-item">
            <input type="radio" name="dataQuality" value="poor" required>
            <span>Poor - data quality issues are common, limited governance</span>
          </label>
          <label class="radio-item">
            <input type="radio" name="dataQuality" value="fair" required>
            <span>Fair - some data governance, moderate quality issues</span>
          </label>
          <label class="radio-item">
            <input type="radio" name="dataQuality" value="good" required>
            <span>Good - solid governance, data quality is generally reliable</span>
          </label>
          <label class="radio-item">
            <input type="radio" name="dataQuality" value="excellent" required>
            <span>Excellent - robust governance, high data quality standards</span>
          </label>
        </div>
        <div class="help-text">Assess your organization's data quality and governance practices</div>
      </div>

      <div class="form-group">
        <label>What cloud platforms does your organization use? (Select all that apply)</label>
        <div class="checkbox-group">
          <label class="checkbox-item">
            <input type="checkbox" name="cloudPlatforms" value="aws">
            <span>Amazon Web Services (AWS)</span>
          </label>
          <label class="checkbox-item">
            <input type="checkbox" name="cloudPlatforms" value="azure">
            <span>Microsoft Azure</span>
          </label>
          <label class="checkbox-item">
            <input type="checkbox" name="cloudPlatforms" value="gcp">
            <span>Google Cloud Platform (GCP)</span>
          </label>
          <label class="checkbox-item">
            <input type="checkbox" name="cloudPlatforms" value="on_premise">
            <span>On-Premise / Private Infrastructure</span>
          </label>
          <label class="checkbox-item">
            <input type="checkbox" name="cloudPlatforms" value="multi_cloud">
            <span>Multiple clouds (multi-cloud setup)</span>
          </label>
          <label class="checkbox-item">
            <input type="checkbox" name="cloudPlatforms" value="none">
            <span>None yet</span>
          </label>
        </div>
      </div>

      <!-- Skills & Talent -->
      <div class="section-title">Skills & Talent</div>

      <div class="form-group">
        <label>Does your organization have in-house AI/ML expertise? <span class="required">*</span></label>
        <div class="radio-group">
          <label class="radio-item">
            <input type="radio" name="aiExpertise" value="none" required>
            <span>None - we need external support</span>
          </label>
          <label class="radio-item">
            <input type="radio" name="aiExpertise" value="limited" required>
            <span>Limited - we have a small team or individuals</span>
          </label>
          <label class="radio-item">
            <input type="radio" name="aiExpertise" value="moderate" required>
            <span>Moderate - we have a dedicated AI/ML team</span>
          </label>
          <label class="radio-item">
            <input type="radio" name="aiExpertise" value="strong" required>
            <span>Strong - we have advanced expertise and a mature team</span>
          </label>
        </div>
        <div class="help-text">Assess your current AI/ML skill level and team structure</div>
      </div>

      <div class="form-group">
        <label>What skills gaps exist in your organization? (Select all that apply)</label>
        <div class="checkbox-group">
          <label class="checkbox-item">
            <input type="checkbox" name="skillGaps" value="data_science">
            <span>Data Science / ML Engineering</span>
          </label>
          <label class="checkbox-item">
            <input type="checkbox" name="skillGaps" value="data_engineering">
            <span>Data Engineering / ETL</span>
          </label>
          <label class="checkbox-item">
            <input type="checkbox" name="skillGaps" value="data_analytics">
            <span>Data Analytics / BI</span>
          </label>
          <label class="checkbox-item">
            <input type="checkbox" name="skillGaps" value="ai_leadership">
            <span>AI Strategy / Leadership</span>
          </label>
          <label class="checkbox-item">
            <input type="checkbox" name="skillGaps" value="change_management">
            <span>Change Management / Organizational Skills</span>
          </label>
          <label class="checkbox-item">
            <input type="checkbox" name="skillGaps" value="no_gaps">
            <span>No significant gaps</span>
          </label>
        </div>
        <div class="help-text">Identify areas where you need to build or acquire talent</div>
      </div>

      <!-- Budget & Resources -->
      <div class="section-title">Budget & Resources</div>

      <div class="form-group">
        <label>What is your annual AI/ML budget? <span class="required">*</span></label>
        <select id="budget" name="budget" required>
          <option value="">Select budget range...</option>
          <option value="no_budget">We don't have a dedicated AI/ML budget yet</option>
          <option value="under_100k">Under $100K</option>
          <option value="100k_500k">$100K - $500K</option>
          <option value="500k_1m">$500K - $1M</option>
          <option value="1m_5m">$1M - $5M</option>
          <option value="5m_plus">$5M+</option>
        </select>
        <div class="help-text">Provide your organization's annual budget allocation for AI/ML initiatives</div>
      </div>

      <div class="form-group">
        <label>What are your top business priorities for AI? (Select top 3)</label>
        <div class="checkbox-group">
          <label class="checkbox-item">
            <input type="checkbox" name="aiPriorities" value="cost_reduction">
            <span>Cost Reduction / Efficiency</span>
          </label>
          <label class="checkbox-item">
            <input type="checkbox" name="aiPriorities" value="revenue_growth">
            <span>Revenue Growth / New Revenue Streams</span>
          </label>
          <label class="checkbox-item">
            <input type="checkbox" name="aiPriorities" value="customer_experience">
            <span>Customer Experience Improvement</span>
          </label>
          <label class="checkbox-item">
            <input type="checkbox" name="aiPriorities" value="innovation">
            <span>Product / Service Innovation</span>
          </label>
          <label class="checkbox-item">
            <input type="checkbox" name="aiPriorities" value="risk_management">
            <span>Risk Management / Compliance</span>
          </label>
          <label class="checkbox-item">
            <input type="checkbox" name="aiPriorities" value="competitive_advantage">
            <span>Competitive Advantage</span>
          </label>
        </div>
        <div class="help-text">Select up to three priorities that matter most to your organization</div>
      </div>

      <!-- Challenges & Concerns -->
      <div class="section-title">Challenges & Concerns</div>

      <div class="form-group">
        <label>What are your main concerns about AI implementation? (Select all that apply)</label>
        <div class="checkbox-group">
          <label class="checkbox-item">
            <input type="checkbox" name="concerns" value="data_privacy">
            <span>Data Privacy & Security</span>
          </label>
          <label class="checkbox-item">
            <input type="checkbox" name="concerns" value="regulatory_compliance">
            <span>Regulatory Compliance</span>
          </label>
          <label class="checkbox-item">
            <input type="checkbox" name="concerns" value="talent_shortage">
            <span>Talent Shortage / Skills Gap</span>
          </label>
          <label class="checkbox-item">
            <input type="checkbox" name="concerns" value="integration_complexity">
            <span>Integration with Existing Systems</span>
          </label>
          <label class="checkbox-item">
            <input type="checkbox" name="concerns" value="roi_uncertainty">
            <span>ROI Uncertainty</span>
          </label>
          <label class="checkbox-item">
            <input type="checkbox" name="concerns" value="change_resistance">
            <span>Organizational Change Resistance</span>
          </label>
          <label class="checkbox-item">
            <input type="checkbox" name="concerns" value="model_bias">
            <span>Model Bias / Fairness</span>
          </label>
          <label class="checkbox-item">
            <input type="checkbox" name="concerns" value="no_concerns">
            <span>No major concerns</span>
          </label>
        </div>
      </div>

      <div class="form-group">
        <label for="otherChallenges">Other challenges or concerns (optional)</label>
        <textarea id="otherChallenges" name="otherChallenges" placeholder="Please describe any other challenges..."></textarea>
      </div>

      <!-- Regulatory & Compliance -->
      <div class="section-title">Regulatory & Compliance</div>

      <div class="form-group">
        <label>Which regulations apply to your organization? (Select all that apply)</label>
        <div class="checkbox-group">
          <label class="checkbox-item">
            <input type="checkbox" name="regulations" value="gdpr">
            <span>GDPR (General Data Protection Regulation)</span>
          </label>
          <label class="checkbox-item">
            <input type="checkbox" name="regulations" value="hipaa">
            <span>HIPAA (Healthcare)</span>
          </label>
          <label class="checkbox-item">
            <input type="checkbox" name="regulations" value="pci_dss">
            <span>PCI-DSS (Payment Card Industry)</span>
          </label>
          <label class="checkbox-item">
            <input type="checkbox" name="regulations" value="sox">
            <span>SOX (Sarbanes-Oxley)</span>
          </label>
          <label class="checkbox-item">
            <input type="checkbox" name="regulations" value="ccpa">
            <span>CCPA (California Consumer Privacy Act)</span>
          </label>
          <label class="checkbox-item">
            <input type="checkbox" name="regulations" value="none">
            <span>None of the above</span>
          </label>
          <label class="checkbox-item">
            <input type="checkbox" name="regulations" value="other">
            <span>Other</span>
          </label>
        </div>
      </div>

      <div class="form-group" id="otherRegulationsGroup" style="display: none;">
        <label for="otherRegulations">Please specify other regulations:</label>
        <input type="text" id="otherRegulations" name="otherRegulations" placeholder="Enter other applicable regulations...">
      </div>

      <!-- Contact Information -->
      <div class="section-title">Contact Information</div>

      <div class="form-group">
        <label for="contactName">Your Name <span class="required">*</span></label>
        <input type="text" id="contactName" name="contactName" required>
      </div>

      <div class="form-group">
        <label for="contactEmail">Your Email <span class="required">*</span></label>
        <input type="email" id="contactEmail" name="contactEmail" required>
      </div>

      <div class="form-group">
        <label for="contactPhone">Your Phone (optional)</label>
        <input type="text" id="contactPhone" name="contactPhone" placeholder="+1 (555) 000-0000">
      </div>

      <div class="form-group">
        <label for="comments">Additional Comments (optional)</label>
        <textarea id="comments" name="comments" placeholder="Share any additional information..."></textarea>
      </div>

      <!-- Form Actions -->
      <div class="button-group">
        <button type="submit" class="btn-submit">Submit Assessment</button>
        <button type="reset" class="btn-clear">Clear Form</button>
      </div>
    </form>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const form = document.getElementById('intakeForm');
  const messageDiv = document.getElementById('message');

  // Load saved form data from localStorage
  loadFormData();

  // Auto-save form data on input change
  form.addEventListener('change', function() {
    saveFormData();
  });

  form.addEventListener('input', function() {
    saveFormData();
  });

  // Handle form submission
  form.addEventListener('submit', function(e) {
    e.preventDefault();

    // Get form data
    const formData = new FormData(form);
    const data = Object.fromEntries(formData);

    // Get all checkbox values for fields with multiple selections
    const checkboxGroups = {
      aiAreas: [],
      cloudPlatforms: [],
      skillGaps: [],
      aiPriorities: [],
      concerns: [],
      regulations: []
    };

    for (let [key, value] of formData) {
      if (key in checkboxGroups) {
        if (!checkboxGroups[key].includes(value)) {
          checkboxGroups[key].push(value);
        }
      }
    }

    // Merge checkbox data into main data object
    Object.assign(data, checkboxGroups);

    // Here you would typically send the data to a server
    console.log('Form Data:', data);

    // Show success message
    showMessage('Thank you! Your assessment has been submitted. We will review your responses and contact you soon.', 'success');

    // Optionally clear the form after submission
    // form.reset();
    // localStorage.removeItem('intakeFormData');
  });

  function saveFormData() {
    const formData = new FormData(form);
    const data = {};

    for (let [key, value] of formData) {
      if (data[key]) {
        if (Array.isArray(data[key])) {
          data[key].push(value);
        } else {
          data[key] = [data[key], value];
        }
      } else {
        data[key] = value;
      }
    }

    localStorage.setItem('intakeFormData', JSON.stringify(data));
  }

  function loadFormData() {
    const savedData = localStorage.getItem('intakeFormData');
    if (!savedData) return;

    try {
      const data = JSON.parse(savedData);

      for (let [key, value] of Object.entries(data)) {
        const elements = form.querySelectorAll(`[name="${key}"]`);

        elements.forEach(element => {
          if (element.type === 'checkbox' || element.type === 'radio') {
            if (Array.isArray(value)) {
              element.checked = value.includes(element.value);
            } else {
              element.checked = element.value === value;
            }
          } else {
            element.value = value;
          }
        });
      }

      // Update the visibility of the "other regulations" field
      updateOtherRegulationsVisibility();
    } catch (e) {
      console.error('Error loading form data:', e);
    }
  }

  function showMessage(text, type) {
    messageDiv.textContent = text;
    messageDiv.className = `message ${type} show`;
    setTimeout(() => {
      messageDiv.classList.remove('show');
    }, 6000);
  }

  // Handle "other" regulations checkbox
  function updateOtherRegulationsVisibility() {
    const otherRegField = document.getElementById('otherRegulationsGroup');
    const otherChecked = document.querySelector('input[name="regulations"][value="other"]').checked;
    otherField.style.display = otherChecked ? 'block' : 'none';
    if (!otherChecked) otherField.value = '';
  }

  document.querySelector('input[name="regulations"][value="other"]').addEventListener('change', function() {
    updateOtherRegulationsVisibility();
  });
});
</script>
<?php get_footer(); ?>