
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
  width: 32px;
  height: 32px;
  background: var(--purple);
  border-radius: 6px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 700;
  color: white;
  font-size: 16px;
}
.logo-text {
  font-size: 18px;
  font-weight: 700;
  color: white;
}
.header-btns {
  display: flex;
  gap: 12px;
}
.header-btns button {
  padding: 8px 16px;
  border: 1px solid rgba(255,255,255,0.3);
  background: transparent;
  color: white;
  border-radius: 6px;
  font-size: 13px;
  font-weight: 500;
  cursor: pointer;
  transition: all 0.3s ease;
}
.header-btns button:hover {
  border-color: rgba(255,255,255,0.6);
  background: rgba(255,255,255,0.05);
}
.header-btns .primary {
  background: var(--purple);
  border-color: var(--purple);
}
.header-btns .primary:hover {
  background: rgba(69,44,234,0.8);
}

/* ── Main content ── */
.container {
  max-width: 720px;
  margin: 40px auto;
  padding: 0 20px;
  flex: 1;
}

.section {
  margin-bottom: 40px;
}
.section:last-child {
  margin-bottom: 0;
}

.section-title {
  font-size: 20px;
  font-weight: 600;
  color: var(--dark);
  margin-bottom: 16px;
  border-bottom: 2px solid var(--border);
  padding-bottom: 10px;
}

.section-description {
  color: var(--muted);
  font-size: 14px;
  margin-bottom: 16px;
}

.field-group {
  margin-bottom: 16px;
}

label {
  display: block;
  font-weight: 500;
  color: var(--dark);
  margin-bottom: 6px;
  font-size: 13px;
}

input[type="text"],
input[type="email"],
input[type="number"],
input[type="tel"],
textarea,
select {
  width: 100%;
  padding: 10px;
  border: 1px solid var(--border);
  border-radius: 6px;
  font-family: 'DM Sans', sans-serif;
  font-size: 13px;
  color: var(--dark);
  transition: all 0.3s ease;
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="number"]:focus,
input[type="tel"]:focus,
textarea:focus,
select:focus {
  outline: none;
  border-color: var(--purple);
  box-shadow: 0 0 0 3px var(--purple-glow);
}

input::placeholder {
  color: var(--muted);
}

textarea {
  resize: vertical;
  min-height: 100px;
}

/* ── Checkbox group ── */
.checkbox-group {
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.checkbox-item {
  display: flex;
  align-items: center;
  gap: 10px;
}

input[type="checkbox"],
input[type="radio"] {
  width: 18px;
  height: 18px;
  cursor: pointer;
  accent-color: var(--purple);
}

.checkbox-item label {
  margin: 0;
  cursor: pointer;
  font-weight: 400;
}

/* ── Conditional fields ── */
.conditional-field {
  display: none;
  margin-top: 12px;
  padding: 12px;
  background: var(--purple-light);
  border-left: 4px solid var(--purple);
  border-radius: 4px;
}

.conditional-field.active {
  display: block;
}

.conditional-field label {
  color: var(--dark);
}

/* ── Buttons ── */
.button-group {
  display: flex;
  gap: 12px;
  margin-top: 32px;
  justify-content: center;
}

button[type="submit"],
button[type="button"] {
  padding: 12px 32px;
  border: none;
  border-radius: 6px;
  font-size: 14px;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s ease;
}

button[type="submit"] {
  background: var(--purple);
  color: white;
}

button[type="submit"]:hover {
  background: rgba(69,44,234,0.8);
  transform: translateY(-2px);
  box-shadow: 0 4px 12px var(--purple-glow);
}

button[type="button"] {
  background: var(--border);
  color: var(--dark);
}

button[type="button"]:hover {
  background: #d4dae0;
}

/* ── Success message ── */
.success-message {
  display: none;
  padding: 16px;
  background: #d1fae5;
  border: 1px solid var(--green);
  border-radius: 6px;
  color: var(--green);
  margin-bottom: 16px;
  text-align: center;
  font-weight: 500;
}

.success-message.active {
  display: block;
}

/* ── Footer ── */
.footer {
  background: var(--dark);
  color: white;
  text-align: center;
  padding: 20px;
  margin-top: 40px;
  font-size: 12px;
  color: rgba(255,255,255,0.6);
}

/* ── Responsive ── */
@media (max-width: 768px) {
  .header-inner {
    flex-direction: column;
    gap: 16px;
  }
  .button-group {
    flex-direction: column;
  }
  button[type="submit"],
  button[type="button"] {
    width: 100%;
  }
}
</style>

<div class="page">
  <div class="header">
    <div class="header-inner">
      <div class="logo">
        <div class="logo-mark">A</div>
        <div class="logo-text">ANSA Solutions</div>
      </div>
      <div class="header-btns">
        <button type="button" class="secondary" onclick="window.history.back();">← Back</button>
        <button type="button" class="primary" onclick="window.location.href='/';">Home</button>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="success-message" id="successMessage">
      Thank you! Your AI Readiness assessment has been submitted successfully.
    </div>

    <form id="aiReadinessForm">
      <!-- Section 1: Company Information -->
      <div class="section">
        <h2 class="section-title">1. Company Information</h2>
        <p class="section-description">Tell us about your organization</p>

        <div class="field-group">
          <label for="companyName">Company Name *</label>
          <input type="text" id="companyName" name="companyName" placeholder="Enter company name" required>
        </div>

        <div class="field-group">
          <label for="companySize">Company Size *</label>
          <select id="companySize" name="companySize" required>
            <option value="">-- Select company size --</option>
            <option value="1-50">1-50 employees</option>
            <option value="51-200">51-200 employees</option>
            <option value="201-500">201-500 employees</option>
            <option value="501-1000">501-1000 employees</option>
            <option value="1000+">1000+ employees</option>
          </select>
        </div>

        <div class="field-group">
          <label for="industry">Industry *</label>
          <input type="text" id="industry" name="industry" placeholder="e.g., Healthcare, Finance, Manufacturing" required>
        </div>

        <div class="field-group">
          <label for="contactName">Contact Name *</label>
          <input type="text" id="contactName" name="contactName" placeholder="Your full name" required>
        </div>

        <div class="field-group">
          <label for="contactEmail">Contact Email *</label>
          <input type="email" id="contactEmail" name="contactEmail" placeholder="your@email.com" required>
        </div>

        <div class="field-group">
          <label for="contactPhone">Contact Phone *</label>
          <input type="tel" id="contactPhone" name="contactPhone" placeholder="+1 (555) 123-4567" required>
        </div>
      </div>

      <!-- Section 2: Current AI Usage -->
      <div class="section">
        <h2 class="section-title">2. Current AI Usage</h2>
        <p class="section-description">Tell us about your current use of AI</p>

        <div class="field-group">
          <label>Is your company currently using AI in any form? *</label>
          <div class="checkbox-group">
            <div class="checkbox-item">
              <input type="radio" id="aiUsageYes" name="aiUsage" value="yes" required>
              <label for="aiUsageYes">Yes</label>
            </div>
            <div class="checkbox-item">
              <input type="radio" id="aiUsageNo" name="aiUsage" value="no">
              <label for="aiUsageNo">No</label>
            </div>
            <div class="checkbox-item">
              <input type="radio" id="aiUsagePlanning" name="aiUsage" value="planning">
              <label for="aiUsagePlanning">Currently planning to</label>
            </div>
          </div>
        </div>

        <div id="currentAiAppsField" class="conditional-field">
          <label for="currentAiApps">What AI applications are you currently using?</label>
          <textarea id="currentAiApps" name="currentAiApps" placeholder="Describe your current AI implementations..."></textarea>
        </div>

        <div class="field-group">
          <label>What are your primary business pain points? *</label>
          <div class="checkbox-group">
            <div class="checkbox-item">
              <input type="checkbox" name="painPoints" value="efficiency">
              <label for="painPointsEfficiency">Operational Efficiency</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" name="painPoints" value="cost">
              <label for="painPointsCost">Cost Reduction</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" name="painPoints" value="quality">
              <label for="painPointsQuality">Quality Improvement</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" name="painPoints" value="dataInsights">
              <label for="painPointsDataInsights">Data & Insights</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" name="painPoints" value="customerExperience">
              <label for="painPointsCustomerExperience">Customer Experience</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" name="painPoints" value="other">
              <label for="painPointsOther">Other</label>
            </div>
          </div>
        </div>

        <div id="painPointsOtherField" class="conditional-field">
          <input type="text" id="painPointsOther" name="painPointsOther" placeholder="Please specify other pain points...">
        </div>
      </div>

      <!-- Section 3: Data & Infrastructure -->
      <div class="section">
        <h2 class="section-title">3. Data & Infrastructure</h2>
        <p class="section-description">Assess your data readiness</p>

        <div class="field-group">
          <label>How would you rate your data quality? *</label>
          <div class="checkbox-group">
            <div class="checkbox-item">
              <input type="radio" name="dataQuality" value="poor" required>
              <label>Poor - Inconsistent and unreliable</label>
            </div>
            <div class="checkbox-item">
              <input type="radio" name="dataQuality" value="fair">
              <label>Fair - Some inconsistencies</label>
            </div>
            <div class="checkbox-item">
              <input type="radio" name="dataQuality" value="good">
              <label>Good - Mostly consistent and reliable</label>
            </div>
            <div class="checkbox-item">
              <input type="radio" name="dataQuality" value="excellent">
              <label>Excellent - Highly consistent and reliable</label>
            </div>
          </div>
        </div>

        <div class="field-group">
          <label>Data storage and management *</label>
          <div class="checkbox-group">
            <div class="checkbox-item">
              <input type="checkbox" name="dataStorage" value="onPremise">
              <label>On-premise servers</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" name="dataStorage" value="cloud">
              <label>Cloud infrastructure (AWS, Azure, GCP)</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" name="dataStorage" value="hybrid">
              <label>Hybrid (both on-premise and cloud)</label>
            </div>
          </div>
        </div>

        <div class="field-group">
          <label for="technicalExpertise">Do you have technical expertise in-house? *</label>
          <div class="checkbox-group">
            <div class="checkbox-item">
              <input type="radio" id="techExpertiseYes" name="technicalExpertise" value="yes" required>
              <label for="techExpertiseYes">Yes</label>
            </div>
            <div class="checkbox-item">
              <input type="radio" id="techExpertiseNo" name="technicalExpertise" value="no">
              <label for="techExpertiseNo">No</label>
            </div>
          </div>
        </div>

        <div id="technicalExpertiseField" class="conditional-field">
          <label for="technicalExpertiseDesc">What is your technical expertise?</label>
          <textarea id="technicalExpertiseDesc" name="technicalExpertiseDesc" placeholder="Describe your team's technical capabilities..."></textarea>
        </div>
      </div>

      <!-- Section 4: Organizational Readiness -->
      <div class="section">
        <h2 class="section-title">4. Organizational Readiness</h2>
        <p class="section-description">Assess organizational preparedness</p>

        <div class="field-group">
          <label>How would you rate your organization's AI awareness? *</label>
          <div class="checkbox-group">
            <div class="checkbox-item">
              <input type="radio" name="aiAwareness" value="low" required>
              <label>Low - Limited understanding of AI</label>
            </div>
            <div class="checkbox-item">
              <input type="radio" name="aiAwareness" value="moderate">
              <label>Moderate - Some awareness and discussion</label>
            </div>
            <div class="checkbox-item">
              <input type="radio" name="aiAwareness" value="high">
              <label>High - Active interest and exploration</label>
            </div>
            <div class="checkbox-item">
              <input type="radio" name="aiAwareness" value="very-high">
              <label>Very High - Strategic AI initiatives underway</label>
            </div>
          </div>
        </div>

        <div class="field-group">
          <label>Budget allocated for AI initiatives? *</label>
          <div class="checkbox-group">
            <div class="checkbox-item">
              <input type="radio" name="budget" value="none" required>
              <label>None allocated yet</label>
            </div>
            <div class="checkbox-item">
              <input type="radio" name="budget" value="minimal">
              <label>Minimal (&lt; $50K)</label>
            </div>
            <div class="checkbox-item">
              <input type="radio" name="budget" value="moderate">
              <label>Moderate ($50K - $250K)</label>
            </div>
            <div class="checkbox-item">
              <input type="radio" name="budget" value="substantial">
              <label>Substantial (&gt; $250K)</label>
            </div>
          </div>
        </div>

        <div class="field-group">
          <label>Do you have executive sponsorship for AI initiatives? *</label>
          <div class="checkbox-group">
            <div class="checkbox-item">
              <input type="radio" id="executiveYes" name="executive" value="yes" required>
              <label for="executiveYes">Yes</label>
            </div>
            <div class="checkbox-item">
              <input type="radio" id="executiveNo" name="executive" value="no">
              <label for="executiveNo">No</label>
            </div>
          </div>
        </div>

        <div id="executiveField" class="conditional-field">
          <label for="executiveDesc">Who is the sponsor and what is their focus?</label>
          <textarea id="executiveDesc" name="executiveDesc" placeholder="Describe the executive sponsorship..."></textarea>
        </div>
      </div>

      <!-- Section 5: Regulations & Compliance -->
      <div class="section">
        <h2 class="section-title">5. Regulations & Compliance</h2>
        <p class="section-description">Understand your compliance requirements</p>

        <div class="field-group">
          <label>Which regulations apply to your organization? *</label>
          <div class="checkbox-group">
            <div class="checkbox-item">
              <input type="checkbox" name="regulations" value="gdpr">
              <label>GDPR (General Data Protection Regulation)</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" name="regulations" value="hipaa">
              <label>HIPAA (Healthcare)</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" name="regulations" value="pci">
              <label>PCI-DSS (Payment Card Industry)</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" name="regulations" value="soc2">
              <label>SOC 2 (Security & Compliance)</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" name="regulations" value="ccpa">
              <label>CCPA (California Consumer Privacy)</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" name="regulations" value="other">
              <label>Other</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" name="regulations" value="none">
              <label>None - No specific regulatory requirements</label>
            </div>
          </div>
        </div>

        <div id="regulationsOther" class="conditional-field">
          <label for="regulationsOtherText">Please specify other regulations:</label>
          <input type="text" id="regulationsOtherText" name="regulationsOtherText" placeholder="Other regulations...">
        </div>
      </div>

      <!-- Section 6: Goals & Priorities -->
      <div class="section">
        <h2 class="section-title">6. Goals & Priorities</h2>
        <p class="section-description">Define your AI goals</p>

        <div class="field-group">
          <label for="aiGoals">What are your primary goals for AI adoption? *</label>
          <textarea id="aiGoals" name="aiGoals" placeholder="Describe your main objectives for implementing AI..." required></textarea>
        </div>

        <div class="field-group">
          <label for="aiTimeline">What is your expected timeline for AI implementation? *</label>
          <select id="aiTimeline" name="aiTimeline" required>
            <option value="">-- Select timeline --</option>
            <option value="immediate">Immediate (0-3 months)</option>
            <option value="shortTerm">Short term (3-6 months)</option>
            <option value="mediumTerm">Medium term (6-12 months)</option>
            <option value="longTerm">Long term (12+ months)</option>
            <option value="undecided">Undecided</option>
          </select>
        </div>

        <div class="field-group">
          <label>What is your biggest concern about AI adoption? *</label>
          <div class="checkbox-group">
            <div class="checkbox-item">
              <input type="checkbox" name="concerns" value="security">
              <label>Security & Privacy</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" name="concerns" value="cost">
              <label>Cost</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" name="concerns" value="integration">
              <label>Integration with existing systems</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" name="concerns" value="talent">
              <label>Lack of AI talent/expertise</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" name="concerns" value="change">
              <label>Organizational change resistance</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" name="concerns" value="ethical">
              <label>Ethical & regulatory concerns</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" name="concerns" value="roi">
              <label>Unclear ROI</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" name="concerns" value="other">
              <label>Other</label>
            </div>
          </div>
        </div>

        <div id="concernsOtherField" class="conditional-field">
          <input type="text" id="concernsOther" name="concernsOther" placeholder="Please specify other concerns...">
        </div>
      </div>

      <!-- Section 7: Additional Information -->
      <div class="section">
        <h2 class="section-title">7. Additional Information</h2>
        <p class="section-description">Any additional details we should know</p>

        <div class="field-group">
          <label for="additionalInfo">Any additional information you'd like to share? (Optional)</label>
          <textarea id="additionalInfo" name="additionalInfo" placeholder="Share any additional context..."></textarea>
        </div>

        <div class="field-group">
          <label for="preferredContact">Preferred contact method *</label>
          <select id="preferredContact" name="preferredContact" required>
            <option value="">-- Select preferred contact method --</option>
            <option value="email">Email</option>
            <option value="phone">Phone</option>
            <option value="meeting">Schedule a meeting</option>
          </select>
        </div>

        <div class="field-group">
          <div class="checkbox-item">
            <input type="checkbox" id="agreeTerms" name="agreeTerms" required>
            <label for="agreeTerms">I agree to be contacted about my AI readiness assessment *</label>
          </div>
        </div>
      </div>

      <!-- Buttons -->
      <div class="button-group">
        <button type="button" onclick="resetForm()">Clear Form</button>
        <button type="submit">Submit Assessment</button>
      </div>
    </form>
  </div>

  <div class="footer">
    <p>&copy; 2024 ANSA Solutions. All rights reserved.</p>
  </div>
</div>

<script>
// ── Form handling ──
const form = document.getElementById('aiReadinessForm');

// ── Data validation ──
function validateForm() {
  const requiredFields = form.querySelectorAll('[required]');
  let isValid = true;

  requiredFields.forEach(field => {
    if (!field.value || (field.type === 'radio' && !form.querySelector(`input[name="${field.name}"]:checked`))) {
      isValid = false;
      field.classList.add('error');
    } else {
      field.classList.remove('error');
    }
  });

  return isValid;
}

// ── Form submission ──
form.addEventListener('submit', function(event) {
  event.preventDefault();

  if (!validateForm()) {
    alert('Please fill in all required fields');
    return;
  }

  // Collect form data
  const formData = new FormData(form);
  const data = {
    timestamp: new Date().toISOString(),
    submissions: {}
  };

  for (let [key, value] of formData.entries()) {
    if (!data.submissions[key]) {
      data.submissions[key] = [];
    }
    data.submissions[key].push(value);
  }

  // Log the data
  console.log('Form submitted:', data);

  // Show success message
  document.getElementById('successMessage').classList.add('active');
  form.reset();

  // Optionally send to server
  // You would replace this with your actual API endpoint
  // fetch('/api/submissions', {
  //   method: 'POST',
  //   headers: {
  //     'Content-Type': 'application/json',
  //   },
  //   body: JSON.stringify(data)
  // })
  // .then(response => response.json())
  // .then(result => console.log('Success:', result))
  // .catch((error) => console.error('Error:', error));

  setTimeout(() => {
    document.getElementById('successMessage').classList.remove('active');
  }, 5000);
});

// ── Reset form ──
function resetForm() {
  form.reset();
  document.getElementById('successMessage').classList.remove('active');
  document.querySelectorAll('.conditional-field').forEach(field => {
    field.classList.remove('active');
  });
}

// ── Conditional field toggling ──
function init() {
  // AI Usage conditional field
  document.querySelectorAll('input[name="aiUsage"]').forEach(radio => {
    radio.addEventListener('change', () => {
      const field = document.getElementById('currentAiAppsField');
      field.classList.toggle('active', document.getElementById('aiUsageYes').checked);
    });
  });

  // Pain points conditional field
  document.querySelectorAll('input[name="painPoints"]').forEach(cb => {
    cb.addEventListener('change', () => {
      const otherField = document.getElementById('painPointsOtherField');
      const otherChecked = document.querySelector('input[name="painPoints"][value="other"]').checked;
      otherField.classList.toggle('active', otherChecked);
    });
  });

  // Technical expertise conditional field
  document.querySelectorAll('input[name="technicalExpertise"]').forEach(radio => {
    radio.addEventListener('change', () => {
      const field = document.getElementById('technicalExpertiseField');
      field.classList.toggle('active', document.getElementById('techExpertiseYes').checked);
    });
  });

  // Executive sponsorship conditional field
  document.querySelectorAll('input[name="executive"]').forEach(radio => {
    radio.addEventListener('change', () => {
      const field = document.getElementById('executiveField');
      field.classList.toggle('active', document.getElementById('executiveYes').checked);
    });
  });

  // Concerns conditional field
  document.querySelectorAll('input[name="concerns"]').forEach(cb => {
    cb.addEventListener('change', () => {
      const otherField = document.getElementById('concernsOtherField');
      const otherChecked = document.querySelector('input[name="concerns"][value="other"]').checked;
      otherField.classList.toggle('active', otherChecked);
    });
  });
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
