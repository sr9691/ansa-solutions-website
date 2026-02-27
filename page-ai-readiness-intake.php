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
  background: linear-gradient(135deg, rgba(255,255,255,0.9) 0%, rgba(255,255,255,0.7) 100%);
  border-radius: 6px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: bold;
  color: var(--purple);
  font-size: 18px;
}
.logo-text {
  color: white;
  font-weight: 600;
  font-size: 14px;
  letter-spacing: 0.5px;
}
.breadcrumb {
  color: rgba(255,255,255,0.6);
  font-size: 12px;
  text-transform: uppercase;
  letter-spacing: 1px;
}

/* ── Container ── */
.container {
  max-width: 720px;
  margin: 0 auto;
  padding: 40px 20px;
  position: relative;
  z-index: 1;
}

.form-section { margin-bottom: 32px; }
.form-section h2 {
  font-family: 'Fraunces', serif;
  font-size: 24px;
  margin-bottom: 16px;
  color: var(--dark);
  font-weight: 600;
}
.form-section p {
  color: var(--muted);
  margin-bottom: 24px;
  line-height: 1.6;
}

.form-group {
  margin-bottom: 20px;
  display: flex;
  flex-direction: column;
}
label {
  display: block;
  font-weight: 500;
  margin-bottom: 8px;
  color: var(--dark);
  font-size: 14px;
}
input[type="text"],
input[type="email"],
input[type="number"],
select,
textarea {
  padding: 12px 14px;
  border: 1px solid var(--border);
  border-radius: 8px;
  font-family: 'DM Sans', sans-serif;
  font-size: 14px;
  background: var(--card);
  color: var(--dark);
  transition: all 0.2s ease;
}
input[type="text"]:focus,
input[type="email"]:focus,
input[type="number"]:focus,
select:focus,
textarea:focus {
  outline: none;
  border-color: var(--purple);
  box-shadow: 0 0 0 3px var(--purple-glow);
  background: rgba(69,44,234,0.02);
}

textarea {
  resize: vertical;
  min-height: 100px;
}

.checkbox-group {
  display: flex;
  flex-direction: column;
  gap: 12px;
}
.checkbox-item {
  display: flex;
  align-items: flex-start;
  gap: 10px;
  cursor: pointer;
}
input[type="checkbox"] {
  width: 20px;
  height: 20px;
  accent-color: var(--purple);
  cursor: pointer;
  margin-top: 2px;
  flex-shrink: 0;
}
.checkbox-label {
  cursor: pointer;
  color: var(--dark);
  font-size: 14px;
  margin: 0;
}

.radio-group {
  display: flex;
  flex-direction: column;
  gap: 12px;
}
.radio-item {
  display: flex;
  align-items: center;
  gap: 10px;
  cursor: pointer;
}
input[type="radio"] {
  accent-color: var(--purple);
  cursor: pointer;
  width: 20px;
  height: 20px;
}

.nested-form {
  margin-left: 30px;
  margin-top: 12px;
  padding: 16px;
  background: var(--purple-light);
  border-left: 3px solid var(--purple);
  border-radius: 6px;
  opacity: 0;
  max-height: 0;
  overflow: hidden;
  transition: all 0.3s ease;
}
.nested-form.show {
  opacity: 1;
  max-height: 1000px;
}

.other-input {
  margin-top: 12px;
  opacity: 0;
  max-height: 0;
  overflow: hidden;
  transition: all 0.3s ease;
}
.other-input.show {
  opacity: 1;
  max-height: 500px;
}

.button-group {
  display: flex;
  gap: 12px;
  margin-top: 32px;
}
button,
input[type="submit"] {
  padding: 12px 28px;
  border: none;
  border-radius: 8px;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.2s ease;
  font-size: 14px;
  font-family: 'DM Sans', sans-serif;
}
button.primary,
input[type="submit"] {
  background: var(--purple);
  color: white;
}
button.primary:hover,
input[type="submit"]:hover {
  background: #3620b0;
  transform: translateY(-2px);
  box-shadow: 0 8px 16px rgba(69,44,234,0.2);
}
button.secondary {
  background: var(--border);
  color: var(--dark);
}
button.secondary:hover {
  background: #d4d8e3;
}

.alert {
  padding: 16px;
  border-radius: 8px;
  margin-bottom: 20px;
  display: none;
}
.alert.success {
  background: #d1fae5;
  border: 1px solid var(--green);
  color: #047857;
}
.alert.error {
  background: #fee2e2;
  border: 1px solid var(--red);
  color: #991b1b;
}
.alert.show {
  display: block;
}

@media (max-width: 640px) {
  .header {
    padding: 20px;
  }
  .header-inner {
    flex-direction: column;
    gap: 20px;
  }
  .container {
    padding: 20px;
  }
  .form-section h2 {
    font-size: 20px;
  }
  .button-group {
    flex-direction: column;
  }
  button,
  input[type="submit"] {
    width: 100%;
  }
}
</style>

<div class="page">
  <div class="header">
    <div class="header-inner">
      <div class="logo">
        <div class="logo-mark">A</div>
        <div class="logo-text">ANSA</div>
      </div>
      <div class="breadcrumb">AI Readiness Assessment</div>
    </div>
  </div>

  <div class="container">
    <div class="alert" id="successAlert">Form submitted successfully!</div>
    <div class="alert error" id="errorAlert">Please fill in all required fields</div>

    <div class="form-section">
      <h2>AI Readiness Intake Form</h2>
      <p>Complete this form to assess your organization's readiness for AI implementation. This will help us understand your current state and provide tailored recommendations.</p>
    </div>

    <form id="intakeForm">
      <!-- Company Information -->
      <div class="form-section">
        <h2>Company Information</h2>
        
        <div class="form-group">
          <label for="companyName">Company Name *</label>
          <input type="text" id="companyName" name="companyName" required>
        </div>

        <div class="form-group">
          <label for="industry">Industry *</label>
          <select id="industry" name="industry" required>
            <option value="">Select an industry</option>
            <option value="healthcare">Healthcare</option>
            <option value="finance">Finance</option>
            <option value="manufacturing">Manufacturing</option>
            <option value="retail">Retail</option>
            <option value="technology">Technology</option>
            <option value="education">Education</option>
            <option value="other">Other</option>
          </select>
        </div>

        <div class="form-group">
          <label for="employees">Number of Employees *</label>
          <select id="employees" name="employees" required>
            <option value="">Select a range</option>
            <option value="1-50">1-50</option>
            <option value="51-200">51-200</option>
            <option value="201-500">201-500</option>
            <option value="501-1000">501-1,000</option>
            <option value="1000+">1,000+</option>
          </select>
        </div>
      </div>

      <!-- Contact Information -->
      <div class="form-section">
        <h2>Your Contact Information</h2>
        
        <div class="form-group">
          <label for="contactName">Full Name *</label>
          <input type="text" id="contactName" name="contactName" required>
        </div>

        <div class="form-group">
          <label for="title">Job Title *</label>
          <input type="text" id="title" name="title" required>
        </div>

        <div class="form-group">
          <label for="email">Email Address *</label>
          <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input type="text" id="phone" name="phone">
        </div>
      </div>

      <!-- Current State -->
      <div class="form-section">
        <h2>Current State of Your Organization</h2>

        <div class="form-group">
          <label>How would you rate your organization's current data maturity? *</label>
          <div class="radio-group">
            <div class="radio-item">
              <input type="radio" id="maturity1" name="dataMaturity" value="early" required>
              <label class="checkbox-label" for="maturity1">Early Stage (Just starting with data)</label>
            </div>
            <div class="radio-item">
              <input type="radio" id="maturity2" name="dataMaturity" value="developing">
              <label class="checkbox-label" for="maturity2">Developing (Some data processes in place)</label>
            </div>
            <div class="radio-item">
              <input type="radio" id="maturity3" name="dataMaturity" value="mature">
              <label class="checkbox-label" for="maturity3">Mature (Well-established data practices)</label>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label>What are your main pain points? (Select all that apply) *</label>
          <div class="checkbox-group">
            <div class="checkbox-item">
              <input type="checkbox" id="pain1" name="painPoints" value="manual_processes">
              <label class="checkbox-label" for="pain1">Manual, repetitive processes</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" id="pain2" name="painPoints" value="data_quality">
              <label class="checkbox-label" for="pain2">Poor data quality and consistency</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" id="pain3" name="painPoints" value="scalability">
              <label class="checkbox-label" for="pain3">Difficulty scaling operations</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" id="pain4" name="painPoints" value="decision_making">
              <label class="checkbox-label" for="pain4">Slow decision-making due to data silos</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" id="pain5" name="painPoints" value="talent">
              <label class="checkbox-label" for="pain5">Lack of AI/automation expertise</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" id="pain6" name="painPoints" value="other">
              <label class="checkbox-label" for="pain6">Other</label>
              <div class="other-input" id="painOtherInput">
                <input type="text" id="painOther" name="painOther" placeholder="Please specify...">
              </div>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="primaryGoal">What is your primary goal? *</label>
          <select id="primaryGoal" name="primaryGoal" required>
            <option value="">Select a goal</option>
            <option value="efficiency">Improve operational efficiency</option>
            <option value="cost_reduction">Reduce costs</option>
            <option value="innovation">Drive innovation</option>
            <option value="customer_experience">Enhance customer experience</option>
            <option value="competitive_advantage">Gain competitive advantage</option>
            <option value="multiple">Multiple goals</option>
          </select>
        </div>
      </div>

      <!-- Technology & Infrastructure -->
      <div class="form-section">
        <h2>Technology & Infrastructure</h2>

        <div class="form-group">
          <label>Do you currently use any automation tools? *</label>
          <div class="radio-group">
            <div class="radio-item">
              <input type="radio" id="automation1" name="hasAutomation" value="yes" required>
              <label class="checkbox-label" for="automation1">Yes</label>
              <div class="nested-form" id="automationTools">
                <label for="toolsList">Please list the tools:</label>
                <textarea id="toolsList" name="toolsList" placeholder="e.g., RPA, workflow automation, etc."></textarea>
              </div>
            </div>
            <div class="radio-item">
              <input type="radio" id="automation2" name="hasAutomation" value="no">
              <label class="checkbox-label" for="automation2">No</label>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label>What is your current IT infrastructure like? *</label>
          <div class="checkbox-group">
            <div class="checkbox-item">
              <input type="checkbox" id="infra1" name="infrastructure" value="cloud">
              <label class="checkbox-label" for="infra1">Cloud-based (AWS, Azure, GCP, etc.)</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" id="infra2" name="infrastructure" value="on_premise">
              <label class="checkbox-label" for="infra2">On-premise servers</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" id="infra3" name="infrastructure" value="hybrid">
              <label class="checkbox-label" for="infra3">Hybrid</label>
            </div>
            <div class="checkbox-item">
              <input type="checkbox" id="infra4" name="infrastructure" value="legacy">
              <label class="checkbox-label" for="infra4">Legacy systems</label>
            </div>
          </div>
        </div>
      </div>

      <!-- Budget & Timeline -->
      <div class="form-section">
        <h2>Budget & Timeline</h2>

        <div class="form-group">
          <label for="budget">Estimated Budget for AI Initiative *</label>
          <select id="budget" name="budget" required>
            <option value="">Select a range</option>
            <option value="under_50k">Under $50,000</option>
            <option value="50k_250k">$50,000 - $250,000</option>
            <option value="250k_1m">$250,000 - $1,000,000</option>
            <option value="1m_5m">$1,000,000 - $5,000,000</option>
            <option value="over_5m">Over $5,000,000</option>
            <option value="not_decided">Not yet decided</option>
          </select>
        </div>

        <div class="form-group">
          <label for="timeline">Implementation Timeline *</label>
          <select id="timeline" name="timeline" required>
            <option value="">Select a timeline</option>
            <option value="0_3_months">0-3 months</option>
            <option value="3_6_months">3-6 months</option>
            <option value="6_12_months">6-12 months</option>
            <option value="12_plus_months">12+ months</option>
            <option value="not_decided">Not yet decided</option>
          </select>
        </div>
      </div>

      <!-- Additional Information -->
      <div class="form-section">
        <h2>Additional Information</h2>

        <div class="form-group">
          <label for="comments">Any additional information you'd like to share?</label>
          <textarea id="comments" name="comments" placeholder="Share any relevant details, concerns, or priorities..."></textarea>
        </div>

        <div class="form-group">
          <label>How did you hear about us? *</label>
          <select id="source" name="source" required>
            <option value="">Select an option</option>
            <option value="search_engine">Search Engine</option>
            <option value="social_media">Social Media</option>
            <option value="referral">Referral</option>
            <option value="industry_event">Industry Event</option>
            <option value="advertisement">Advertisement</option>
            <option value="other">Other</option>
          </select>
        </div>
      </div>

      <div class="button-group">
        <button type="submit" class="primary">Submit Assessment</button>
        <button type="reset" class="secondary">Clear Form</button>
      </div>
    </form>
  </div>
</div>

<script>
  const form = document.getElementById('intakeForm');
  const successAlert = document.getElementById('successAlert');
  const errorAlert = document.getElementById('errorAlert');
  const automationYes = document.getElementById('automation1');
  const automationNo = document.getElementById('automation2');
  const automationTools = document.getElementById('automationTools');
  const painOtherCheckbox = document.getElementById('pain6');
  const painOtherInput = document.getElementById('painOtherInput');

  // Toggle nested form for automation tools
  automationYes.addEventListener('change', () => {
    automationTools.classList.toggle('show', automationYes.checked);
  });

  automationNo.addEventListener('change', () => {
    if (automationNo.checked) {
      automationTools.classList.remove('show');
      document.getElementById('toolsList').value = '';
    }
  });

  // Toggle other pain point input
  painOtherCheckbox.addEventListener('change', () => {
    painOtherInput.classList.toggle('show', painOtherCheckbox.checked);
    if (!painOtherCheckbox.checked) {
      document.getElementById('painOther').value = '';
    }
  });

  // Form submission
  form.addEventListener('submit', async (e) => {
    e.preventDefault();

    // Validate required fields
    const requiredFields = form.querySelectorAll('[required]');
    let isValid = true;

    requiredFields.forEach(field => {
      if (!field.value) {
        isValid = false;
      }
    });

    if (!isValid) {
      errorAlert.classList.add('show');
      successAlert.classList.remove('show');
      return;
    }

    // Collect form data
    const formData = new FormData(form);
    const data = {
      companyName: formData.get('companyName'),
      industry: formData.get('industry'),
      employees: formData.get('employees'),
      contactName: formData.get('contactName'),
      title: formData.get('title'),
      email: formData.get('email'),
      phone: formData.get('phone'),
      dataMaturity: formData.get('dataMaturity'),
      painPoints: formData.getAll('painPoints'),
      painOther: formData.get('painOther'),
      primaryGoal: formData.get('primaryGoal'),
      hasAutomation: formData.get('hasAutomation'),
      toolsList: formData.get('toolsList'),
      infrastructure: formData.getAll('infrastructure'),
      budget: formData.get('budget'),
      timeline: formData.get('timeline'),
      comments: formData.get('comments'),
      source: formData.get('source'),
    };

    try {
      const response = await fetch('/wp-json/ansa/v1/contact', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify(data),
      });

      if (response.ok) {
        successAlert.classList.add('show');
        errorAlert.classList.remove('show');
        form.reset();
        automationTools.classList.remove('show');
        painOtherInput.classList.remove('show');
        setTimeout(() => successAlert.classList.remove('show'), 5000);
      } else {
        errorAlert.classList.add('show');
        successAlert.classList.remove('show');
      }
    } catch (error) {
      console.error('Error:', error);
      errorAlert.classList.add('show');
      successAlert.classList.remove('show');
    }
  });

  // Initialize conditional displays
  const updateConditionalFields = () => {
    const otherChecked = painOtherCheckbox.checked;
    painOtherInput.classList.toggle('show', otherChecked);
    if (!otherChecked) painOtherInput.value = '';
  };

  updateConditionalFields();
</script>
<?php get_footer(); ?>