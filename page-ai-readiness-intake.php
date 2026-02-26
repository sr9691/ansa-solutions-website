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
  width: 40px; height: 40px; border-radius: 8px;
  background: linear-gradient(135deg, var(--purple) 0%, rgba(69,44,234,0.6) 100%);
  display: flex; align-items: center; justify-content: center;
  color: white; font-weight: 700; font-size: 22px;
}
.logo-text {
  color: white;
  font-size: 18px;
  font-weight: 600;
}
.progress-text {
  color: rgba(255, 255, 255, 0.6);
  font-size: 14px;
}

/* ── Container ── */
.container {
  flex: 1;
  max-width: 720px;
  margin: 0 auto;
  padding: 40px 24px;
  width: 100%;
}

/* ── Steps section ── */
.steps {
  display: flex;
  gap: 8px;
  margin-bottom: 40px;
}

.step {
  flex: 1;
  height: 4px;
  background: var(--border);
  border-radius: 2px;
  overflow: hidden;
  cursor: pointer;
  transition: background 0.3s;
}

.step.active {
  background: var(--purple);
}

.step:hover {
  background: var(--purple);
}

/* ── Section styling ── */
.form-section {
  display: none;
  animation: fadeIn 0.3s ease-in;
}

.form-section.active {
  display: block;
}

@keyframes fadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}

.section-title {
  font-size: 28px;
  font-weight: 700;
  color: var(--darker);
  margin-bottom: 12px;
  font-family: 'Fraunces', serif;
}

.section-subtitle {
  color: var(--muted);
  margin-bottom: 32px;
  font-size: 16px;
  line-height: 1.6;
}

/* ── Form group ── */
.form-group {
  margin-bottom: 32px;
}

.form-label {
  display: block;
  font-size: 14px;
  font-weight: 600;
  color: var(--darker);
  margin-bottom: 12px;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

.form-input, .form-textarea, .form-select {
  width: 100%;
  padding: 12px 16px;
  border: 1px solid var(--border);
  border-radius: 8px;
  font-size: 15px;
  font-family: 'DM Sans', sans-serif;
  background: var(--card);
  color: var(--dark);
  transition: border-color 0.3s;
}

.form-input:focus, .form-textarea:focus, .form-select:focus {
  outline: none;
  border-color: var(--purple);
  box-shadow: 0 0 0 3px var(--purple-glow);
}

.form-textarea {
  resize: vertical;
  min-height: 120px;
}

/* ── Radio/Checkbox groups ── */
.radio-group, .checkbox-group {
  display: flex;
  flex-direction: column;
  gap: 12px;
}

.radio-item, .check-item {
  display: flex;
  align-items: center;
  padding: 12px 16px;
  border: 1px solid var(--border);
  border-radius: 8px;
  cursor: pointer;
  transition: all 0.3s;
}

.radio-item:hover, .check-item:hover {
  border-color: var(--purple);
  background: var(--purple-light);
}

.radio-item input, .check-item input {
  margin-right: 12px;
  cursor: pointer;
  accent-color: var(--purple);
}

.radio-item input:disabled, .check-item input:disabled {
  cursor: not-allowed;
}

.radio-item.selected, .check-item.selected {
  border-color: var(--purple);
  background: var(--purple-light);
}

.radio-item label, .check-item label {
  cursor: pointer;
  flex: 1;
  margin: 0;
}

/* ── Rating scale ── */
.rating-group {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 8px;
}

.rating-option {
  padding: 12px 8px;
  border: 1px solid var(--border);
  border-radius: 8px;
  text-align: center;
  cursor: pointer;
  transition: all 0.3s;
  font-weight: 600;
  font-size: 14px;
}

.rating-option:hover {
  border-color: var(--purple);
  background: var(--purple-light);
}

.rating-option.selected {
  border-color: var(--purple);
  background: var(--purple);
  color: white;
}

/* ── Controls ── */
.form-controls {
  display: flex;
  gap: 16px;
  margin-top: 40px;
  justify-content: space-between;
}

.btn {
  padding: 12px 24px;
  border: none;
  border-radius: 8px;
  font-size: 15px;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s;
  font-family: 'DM Sans', sans-serif;
}

.btn-secondary {
  background: transparent;
  border: 1px solid var(--border);
  color: var(--dark);
}

.btn-secondary:hover {
  border-color: var(--purple);
  color: var(--purple);
}

.btn-primary {
  background: var(--purple);
  color: white;
  flex: 1;
}

.btn-primary:hover {
  background: #3a23b8;
}

.btn-primary:disabled {
  background: var(--border);
  cursor: not-allowed;
}

/* ── Success state ── */
.success-state {
  text-align: center;
  padding: 60px 24px;
}

.success-icon {
  width: 80px;
  height: 80px;
  background: var(--purple-light);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 24px;
  font-size: 40px;
}

.success-title {
  font-size: 28px;
  font-weight: 700;
  color: var(--darker);
  margin-bottom: 12px;
  font-family: 'Fraunces', serif;
}

.success-message {
  color: var(--muted);
  font-size: 16px;
  line-height: 1.6;
  margin-bottom: 32px;
}

.btn-home {
  display: inline-block;
  background: var(--purple);
  color: white;
  text-decoration: none;
  padding: 12px 24px;
  border-radius: 8px;
  font-weight: 600;
  transition: all 0.3s;
}

.btn-home:hover {
  background: #3a23b8;
}

/* ── Conditional field ── */
#regulationsOther {
  display: none;
  margin-top: 12px;
}

/* ── Responsive ── */
@media (max-width: 640px) {
  .header {
    padding: 24px 16px;
  }
  .container {
    padding: 24px 16px;
  }
  .section-title {
    font-size: 22px;
  }
  .rating-group {
    grid-template-columns: repeat(auto-fit, minmax(60px, 1fr));
  }
  .form-controls {
    flex-direction: column;
  }
  .btn {
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
      <div class="progress-text">AI Readiness Assessment</div>
    </div>
  </div>

  <div class="container">
    <div class="steps" id="steps"></div>

    <!-- Step 1: Basic Information -->
    <div class="form-section active" id="section-0">
      <h2 class="section-title">Let's Start with Your Basics</h2>
      <p class="section-subtitle">Tell us about your organization so we can tailor our assessment.</p>
      
      <form id="form">
        <div class="form-group">
          <label class="form-label">Organization Name</label>
          <input type="text" name="orgName" class="form-input" placeholder="Enter your organization name" required>
        </div>

        <div class="form-group">
          <label class="form-label">Industry</label>
          <select name="industry" class="form-select" required>
            <option value="">Select your industry</option>
            <option value="tech">Technology</option>
            <option value="healthcare">Healthcare</option>
            <option value="finance">Finance</option>
            <option value="retail">Retail & E-Commerce</option>
            <option value="manufacturing">Manufacturing</option>
            <option value="education">Education</option>
            <option value="government">Government</option>
            <option value="other">Other</option>
          </select>
        </div>

        <div class="form-group">
          <label class="form-label">Number of Employees</label>
          <select name="employees" class="form-select" required>
            <option value="">Select range</option>
            <option value="1-50">1-50</option>
            <option value="51-200">51-200</option>
            <option value="201-500">201-500</option>
            <option value="501-1000">501-1,000</option>
            <option value="1000+">1,000+</option>
          </select>
        </div>

        <div class="form-group">
          <label class="form-label">Contact Email</label>
          <input type="email" name="contactEmail" class="form-input" placeholder="your@email.com" required>
        </div>

        <div class="form-controls">
          <button type="button" class="btn btn-primary" onclick="nextStep()">Continue</button>
        </div>
      </form>
    </div>

    <!-- Step 2: Current State -->
    <div class="form-section" id="section-1">
      <h2 class="section-title">Your Current AI Maturity</h2>
      <p class="section-subtitle">Help us understand where you are today in your AI journey.</p>

      <div class="form-group">
        <label class="form-label">How would you rate your organization's current AI maturity?</label>
        <div class="rating-group" id="maturityRating">
          <button type="button" class="rating-option" data-value="1" onclick="selectRating(this, 'maturity')">No experience</button>
          <button type="button" class="rating-option" data-value="2" onclick="selectRating(this, 'maturity')">Exploring</button>
          <button type="button" class="rating-option" data-value="3" onclick="selectRating(this, 'maturity')">Experimenting</button>
          <button type="button" class="rating-option" data-value="4" onclick="selectRating(this, 'maturity')">Deploying</button>
          <button type="button" class="rating-option" data-value="5" onclick="selectRating(this, 'maturity')">Advanced</button>
        </div>
        <input type="hidden" name="maturity">
      </div>

      <div class="form-group">
        <label class="form-label">What's your primary interest in AI?</label>
        <div class="radio-group">
          <label class="radio-item">
            <input type="radio" name="interest" value="efficiency" required>
            <label>Improve operational efficiency</label>
          </label>
          <label class="radio-item">
            <input type="radio" name="interest" value="innovation" required>
            <label>Enable new business models</label>
          </label>
          <label class="radio-item">
            <input type="radio" name="interest" value="competitive" required>
            <label>Stay competitive</label>
          </label>
          <label class="radio-item">
            <input type="radio" name="interest" value="customer" required>
            <label>Enhance customer experience</label>
          </label>
        </div>
      </div>

      <div class="form-controls">
        <button type="button" class="btn btn-secondary" onclick="prevStep()">Back</button>
        <button type="button" class="btn btn-primary" onclick="nextStep()">Continue</button>
      </div>
    </div>

    <!-- Step 3: Technical Assessment -->
    <div class="form-section" id="section-2">
      <h2 class="section-title">Technical Readiness</h2>
      <p class="section-subtitle">Let's assess your technical capabilities.</p>

      <div class="form-group">
        <label class="form-label">What's your data infrastructure maturity?</label>
        <div class="radio-group">
          <label class="radio-item">
            <input type="radio" name="dataInfra" value="fragmented" required>
            <label>Fragmented (multiple disconnected systems)</label>
          </label>
          <label class="radio-item">
            <input type="radio" name="dataInfra" value="integrated" required>
            <label>Partially integrated</label>
          </label>
          <label class="radio-item">
            <input type="radio" name="dataInfra" value="unified" required>
            <label>Unified data platform</label>
          </label>
          <label class="radio-item">
            <input type="radio" name="dataInfra" value="modern" required>
            <label>Modern cloud-based architecture</label>
          </label>
        </div>
      </div>

      <div class="form-group">
        <label class="form-label">Which of these technical areas do you have in place?</label>
        <div class="checkbox-group">
          <label class="check-item">
            <input type="checkbox" name="techAreas" value="cloud">
            <label>Cloud infrastructure</label>
          </label>
          <label class="check-item">
            <input type="checkbox" name="techAreas" value="analytics">
            <label>Data analytics capabilities</label>
          </label>
          <label class="check-item">
            <input type="checkbox" name="techAreas" value="mlops">
            <label>ML/MLOps infrastructure</label>
          </label>
          <label class="check-item">
            <input type="checkbox" name="techAreas" value="api">
            <label>API management</label>
          </label>
          <label class="check-item">
            <input type="checkbox" name="techAreas" value="monitoring">
            <label>Monitoring & observability</label>
          </label>
        </div>
      </div>

      <div class="form-controls">
        <button type="button" class="btn btn-secondary" onclick="prevStep()">Back</button>
        <button type="button" class="btn btn-primary" onclick="nextStep()">Continue</button>
      </div>
    </div>

    <!-- Step 4: Organizational Readiness -->
    <div class="form-section" id="section-3">
      <h2 class="section-title">Organizational Readiness</h2>
      <p class="section-subtitle">Understanding your people and processes.</p>

      <div class="form-group">
        <label class="form-label">What's your organization's data culture?</label>
        <div class="radio-group">
          <label class="radio-item">
            <input type="radio" name="culture" value="limited" required>
            <label>Limited data awareness</label>
          </label>
          <label class="radio-item">
            <input type="radio" name="culture" value="developing" required>
            <label>Developing data consciousness</label>
          </label>
          <label class="radio-item">
            <input type="radio" name="culture" value="strong" required>
            <label>Strong data-driven culture</label>
          </label>
          <label class="radio-item">
            <input type="radio" name="culture" value="advanced" required>
            <label>Advanced AI-focused culture</label>
          </label>
        </div>
      </div>

      <div class="form-group">
        <label class="form-label">Do you have relevant skills in-house?</label>
        <div class="radio-group">
          <label class="radio-item">
            <input type="radio" name="skills" value="none" required>
            <label>No data science or ML expertise</label>
          </label>
          <label class="radio-item">
            <input type="radio" name="skills" value="limited" required>
            <label>Limited expertise (1-2 people)</label>
          </label>
          <label class="radio-item">
            <input type="radio" name="skills" value="moderate" required>
            <label>Moderate team (3-5 people)</label>
          </label>
          <label class="radio-item">
            <input type="radio" name="skills" value="strong" required>
            <label>Strong team (5+ people)</label>
          </label>
        </div>
      </div>

      <div class="form-controls">
        <button type="button" class="btn btn-secondary" onclick="prevStep()">Back</button>
        <button type="button" class="btn btn-primary" onclick="nextStep()">Continue</button>
      </div>
    </div>

    <!-- Step 5: Governance & Compliance -->
    <div class="form-section" id="section-4">
      <h2 class="section-title">Governance & Compliance</h2>
      <p class="section-subtitle">Understanding your risk and compliance landscape.</p>

      <div class="form-group">
        <label class="form-label">Which regulations apply to your organization?</label>
        <div class="checkbox-group">
          <label class="check-item">
            <input type="checkbox" name="regulations" value="gdpr">
            <label>GDPR</label>
          </label>
          <label class="check-item">
            <input type="checkbox" name="regulations" value="ccpa">
            <label>CCPA</label>
          </label>
          <label class="check-item">
            <input type="checkbox" name="regulations" value="hipaa">
            <label>HIPAA</label>
          </label>
          <label class="check-item">
            <input type="checkbox" name="regulations" value="sox">
            <label>SOX</label>
          </label>
          <label class="check-item">
            <input type="checkbox" name="regulations" value="other">
            <label>Other</label>
          </label>
        </div>
        <input type="text" id="regulationsOther" name="regulationsOther" class="form-input" placeholder="Specify other regulations...">
      </div>

      <div class="form-group">
        <label class="form-label">Data privacy concerns for AI implementation?</label>
        <div class="radio-group">
          <label class="radio-item">
            <input type="radio" name="privacy" value="minimal" required>
            <label>Minimal concerns</label>
          </label>
          <label class="radio-item">
            <input type="radio" name="privacy" value="moderate" required>
            <label>Moderate concerns</label>
          </label>
          <label class="radio-item">
            <input type="radio" name="privacy" value="significant" required>
            <label>Significant concerns</label>
          </label>
          <label class="radio-item">
            <input type="radio" name="privacy" value="critical" required>
            <label>Critical - must solve before proceeding</label>
          </label>
        </div>
      </div>

      <div class="form-group">
        <label class="form-label">Do you have an AI governance framework?</label>
        <div class="radio-group">
          <label class="radio-item">
            <input type="radio" name="governance" value="none" required>
            <label>None yet</label>
          </label>
          <label class="radio-item">
            <input type="radio" name="governance" value="developing" required>
            <label>In development</label>
          </label>
          <label class="radio-item">
            <input type="radio" name="governance" value="implemented" required>
            <label>Implemented</label>
          </label>
          <label class="radio-item">
            <input type="radio" name="governance" value="mature" required>
            <label>Mature and established</label>
          </label>
        </div>
      </div>

      <div class="form-controls">
        <button type="button" class="btn btn-secondary" onclick="prevStep()">Back</button>
        <button type="button" class="btn btn-primary" onclick="nextStep()">Continue</button>
      </div>
    </div>

    <!-- Step 6: Additional Information -->
    <div class="form-section" id="section-5">
      <h2 class="section-title">Additional Context</h2>
      <p class="section-subtitle">Help us provide more targeted recommendations.</p>

      <div class="form-group">
        <label class="form-label">What specific business challenges do you want to solve with AI?</label>
        <textarea name="challenges" class="form-textarea" placeholder="Describe your key business challenges..."></textarea>
      </div>

      <div class="form-group">
        <label class="form-label">What's your timeline for AI implementation?</label>
        <div class="radio-group">
          <label class="radio-item">
            <input type="radio" name="timeline" value="3months" required>
            <label>Within 3 months</label>
          </label>
          <label class="radio-item">
            <input type="radio" name="timeline" value="6months" required>
            <label>3-6 months</label>
          </label>
          <label class="radio-item">
            <input type="radio" name="timeline" value="12months" required>
            <label>6-12 months</label>
          </label>
          <label class="radio-item">
            <input type="radio" name="timeline" value="exploring" required>
            <label>Just exploring at this stage</label>
          </label>
        </div>
      </div>

      <div class="form-group">
        <label class="form-label">Budget allocated for AI initiatives?</label>
        <select name="budget" class="form-select" required>
          <option value="">Select budget range</option>
          <option value="0-50k">$0-50K</option>
          <option value="50-100k">$50K-100K</option>
          <option value="100-250k">$100K-250K</option>
          <option value="250-500k">$250K-500K</option>
          <option value="500k+">$500K+</option>
        </select>
      </div>

      <div class="form-controls">
        <button type="button" class="btn btn-secondary" onclick="prevStep()">Back</button>
        <button type="button" class="btn btn-primary" onclick="submitForm()">Submit Assessment</button>
      </div>
    </div>

    <!-- Success State -->
    <div class="form-section" id="section-success">
      <div class="success-state">
        <div class="success-icon">✓</div>
        <h2 class="success-title">Assessment Complete!</h2>
        <p class="success-message">Thank you for completing the AI Readiness Assessment. Our team will review your responses and reach out within 24-48 hours with personalized recommendations.</p>
        <a href="/" class="btn-home">Return to Home</a>
      </div>
    </div>
  </div>
</div>

<script>
// ── Bookmark restoration ──
const STORAGE_KEY = 'aiReadinessForm';

function saveProgress() {
  const formData = new FormData(document.getElementById('form'));
  const currentStep = Array.from(document.querySelectorAll('.form-section')).findIndex(s => s.classList.contains('active'));
  
  const data = {
    step: currentStep,
    fields: Object.fromEntries(formData),
  };
  
  sessionStorage.setItem(STORAGE_KEY, JSON.stringify(data));
}

function restoreProgress() {
  const saved = sessionStorage.getItem(STORAGE_KEY);
  if (!saved) return;
  
  const data = JSON.parse(saved);
  
  // Restore fields
  Object.entries(data.fields).forEach(([name, value]) => {
    const field = document.querySelector(`[name="${name}"]`);
    if (!field) return;
    
    if (field.type === 'checkbox') {
      field.checked = value === 'true' || value === 'on';
    } else if (field.type === 'radio') {
      document.querySelector(`[name="${name}"][value="${value}"]`).checked = true;
    } else {
      field.value = value;
    }
  });
  
  // Restore step
  goToStep(data.step);
}

// ── Form navigation ──
const sections = document.querySelectorAll('.form-section');
const steps = document.getElementById('steps');

function init() {
  // Create step indicators
  for (let i = 0; i < sections.length - 1; i++) {
    const step = document.createElement('div');
    step.className = i === 0 ? 'step active' : 'step';
    step.onclick = () => goToStep(i);
    steps.appendChild(step);
  }
  
  // Restore saved progress
  restoreProgress();
  
  // Save progress on input changes
  document.getElementById('form').addEventListener('change', saveProgress);
  document.getElementById('form').addEventListener('input', saveProgress);
}

function goToStep(n) {
  sections.forEach((s, i) => {
    s.classList.toggle('active', i === n);
  });
  
  document.querySelectorAll('.step').forEach((s, i) => {
    s.classList.toggle('active', i === n);
  });
}

function nextStep() {
  const current = Array.from(sections).findIndex(s => s.classList.contains('active'));
  if (current < sections.length - 2) {
    saveProgress();
    goToStep(current + 1);
    window.scrollTo(0, 0);
  }
}

function prevStep() {
  const current = Array.from(sections).findIndex(s => s.classList.contains('active'));
  if (current > 0) {
    goToStep(current - 1);
    window.scrollTo(0, 0);
  }
}

function submitForm() {
  const form = document.getElementById('form');
  if (!form.checkValidity()) {
    alert('Please fill in all required fields');
    return;
  }
  
  const formData = new FormData(form);
  const data = Object.fromEntries(formData);
  
  // Log form data (replace with actual submission)
  console.log('Form submitted:', data);
  
  // Clear saved progress
  sessionStorage.removeItem(STORAGE_KEY);
  
  // Show success state
  const current = Array.from(sections).findIndex(s => s.classList.contains('active'));
  goToStep(sections.length - 1);
  window.scrollTo(0, 0);
}

// ── Conditional checkbox field ──
document.querySelectorAll('input[name="techAreas"]').forEach(checkbox => {
  checkbox.addEventListener('change', function() {
    const checkboxes = document.querySelectorAll('input[name="techAreas"]');
    if (checkboxes.some(c => c.checked)) {
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