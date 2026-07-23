<?php
/**
 * Template Name: Workforce AI Assessment
 * Description: Full-screen Workforce AI-Readiness assessment — no WordPress header/footer.
 *
 * Standalone, self-contained interactive assessment built for the TechPoint
 * Community Connect event ("Building the Workforce AI Can't Replace").
 *
 * 12 questions, 4 scored dimensions, a maturity result, and an OPTIONAL
 * "let's talk about your results" contact capture that emails the lead
 * (with their score) to the site admin and logs it in WP Admin → Tools →
 * Workforce Assessment Leads. Answers stay in the browser unless the visitor
 * chooses to send them.
 *
 * A page with the slug "workforce-ai-assessment" will use this template
 * automatically; it can also be selected as a page template by name.
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

define( 'ANSA_NO_HEADER_FOOTER', true );

// Server-injected config (WP is fully loaded here even though we skip the theme header).
$ansa_ajax_url = esc_url( admin_url( 'admin-ajax.php' ) );
$ansa_nonce    = wp_create_nonce( 'ansa-nonce' );
$ansa_booking  = esc_url( home_url( '/calendar/' ) );
$ansa_home     = esc_url( home_url( '/' ) );
$ansa_ga_id    = 'G-8M27VDXHXD';
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ANSA Solutions — Workforce AI-Readiness Score</title>
<meta name="description" content="12 questions. 3 minutes. Find out if you're building a workforce AI can't replace — or one that's waiting to be disrupted.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<?php if ( $ansa_ga_id ) : ?>
<!-- Google Analytics 4 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo esc_attr( $ansa_ga_id ); ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', '<?php echo esc_js( $ansa_ga_id ); ?>', { 'anonymize_ip': true, 'allow_google_signals': false });
</script>
<?php endif; ?>
<style>
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  :root {
    --ansa-dark: #141b2d;
    --ansa-navy: #0b2545;
    --ansa-blue: #13497b;
    --ansa-teal: #3ecdc6;
    --ansa-purple: #462CED;
    --white: #ffffff;
    --ink: #eef2f7;
    --ink-secondary: #9aa7ba;
    --ink-muted: #6b7a91;
    --surface: #141b2d;
    --card: rgba(255,255,255,0.04);
    --card-border: rgba(255,255,255,0.09);
    --track: rgba(255,255,255,0.10);
  }

  html { scroll-behavior: smooth; }

  body {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    background: var(--ansa-dark) linear-gradient(160deg, var(--ansa-dark) 0%, var(--ansa-navy) 55%, #0e3055 100%) no-repeat;
    background-size: 100% 100%;
    color: var(--ink);
    min-height: 100vh;
    -webkit-font-smoothing: antialiased;
  }

  .wrap {
    max-width: 720px;
    margin: 0 auto;
    padding: 32px 20px 48px;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
  }

  /* ── TOP BAR ── */
  .topbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 28px;
  }
  .logo-box {
    background: rgba(255,255,255,0.08);
    border: 1px solid rgba(255,255,255,0.16);
    border-radius: 8px;
    padding: 7px 16px;
    font-weight: 700;
    font-size: 16px;
    letter-spacing: 1.5px;
    color: var(--white);
    text-decoration: none;
  }
  .logo-box .teal { color: var(--ansa-teal); }
  .logo-box .purple { color: #8b74ff; }
  .topbar .tagline {
    font-size: 12px;
    color: var(--ink-secondary);
    font-weight: 500;
    text-align: right;
  }

  .screen { display: none; animation: fadeIn .35s ease; }
  .screen.active { display: block; }
  @keyframes fadeIn { from { opacity: 0; transform: translateY(8px); } to { opacity: 1; transform: none; } }
  @media (prefers-reduced-motion: reduce) {
    .screen, .opt, .bar-fill, .donut-arc { animation: none !important; transition: none !important; }
  }

  /* ── INTRO ── */
  .event-badge {
    display: inline-block;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: #b3a8f5;
    background: rgba(70,44,237,0.16);
    border: 1px solid rgba(70,44,237,0.45);
    border-radius: 999px;
    padding: 6px 14px;
    margin-bottom: 16px;
  }
  .kicker {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    color: var(--ansa-teal);
    margin-bottom: 12px;
  }
  .intro h1 {
    font-size: clamp(28px, 5vw, 40px);
    font-weight: 800;
    letter-spacing: -0.8px;
    line-height: 1.15;
    margin-bottom: 14px;
  }
  .intro h1 span { color: var(--ansa-teal); }
  .intro .sub {
    font-size: 16px;
    line-height: 1.6;
    color: var(--ink-secondary);
    max-width: 560px;
    margin-bottom: 10px;
  }
  .intro .audience-note {
    font-size: 13px;
    line-height: 1.55;
    color: var(--ink-muted);
    max-width: 560px;
    margin-bottom: 24px;
  }
  .stat-strip {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
    margin-bottom: 28px;
  }
  .stat-chip {
    background: var(--card);
    border: 1px solid var(--card-border);
    border-radius: 10px;
    padding: 10px 16px;
    font-size: 12.5px;
    font-weight: 500;
    color: var(--ink-secondary);
  }
  .stat-chip b { color: var(--white); font-weight: 800; font-size: 14px; margin-right: 5px; }
  .dims {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-bottom: 30px;
  }
  .dim-pill {
    font-size: 11.5px;
    font-weight: 600;
    padding: 6px 12px;
    border-radius: 999px;
    border: 1px solid rgba(62,205,198,0.35);
    color: var(--ansa-teal);
    background: rgba(62,205,198,0.07);
  }
  .btn {
    display: inline-block;
    border: none;
    cursor: pointer;
    font-family: inherit;
    font-size: 15px;
    font-weight: 700;
    padding: 14px 28px;
    border-radius: 10px;
    background: var(--ansa-teal);
    color: var(--ansa-dark);
    transition: transform .12s ease, box-shadow .12s ease;
    text-decoration: none;
  }
  .btn:hover { transform: translateY(-1px); box-shadow: 0 6px 20px rgba(62,205,198,0.3); }
  .btn:focus-visible { outline: 3px solid var(--white); outline-offset: 2px; }
  .btn[disabled] { opacity: .55; cursor: default; transform: none; box-shadow: none; }
  .btn.secondary {
    background: transparent;
    color: var(--ink);
    border: 1px solid var(--card-border);
  }
  .btn.secondary:hover { box-shadow: none; border-color: rgba(255,255,255,0.3); }
  .fine-print {
    margin-top: 16px;
    font-size: 12px;
    color: var(--ink-secondary);
  }

  /* ── QUIZ ── */
  .quiz-head { margin-bottom: 22px; }
  .quiz-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
  }
  .cat-chip {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: var(--ansa-teal);
  }
  .q-count { font-size: 12.5px; color: var(--ink-secondary); font-weight: 500; }
  .progress {
    height: 6px;
    background: var(--track);
    border-radius: 999px;
    overflow: hidden;
  }
  .progress-fill {
    height: 100%;
    width: 0%;
    background: linear-gradient(90deg, var(--ansa-teal), var(--ansa-purple));
    border-radius: 999px;
    transition: width .3s ease;
  }
  .q-text {
    font-size: clamp(19px, 3.4vw, 24px);
    font-weight: 700;
    line-height: 1.35;
    letter-spacing: -0.3px;
    margin-bottom: 22px;
    min-height: 66px;
  }
  .opts { display: flex; flex-direction: column; gap: 10px; }
  .opt {
    text-align: left;
    font-family: inherit;
    font-size: 14.5px;
    line-height: 1.45;
    font-weight: 500;
    color: var(--ink);
    background: var(--card);
    border: 1px solid var(--card-border);
    border-radius: 12px;
    padding: 15px 18px 15px 46px;
    cursor: pointer;
    position: relative;
    transition: border-color .15s ease, background .15s ease, transform .12s ease;
  }
  .opt::before {
    content: '';
    position: absolute;
    left: 16px;
    top: 50%;
    transform: translateY(-50%);
    width: 18px;
    height: 18px;
    border-radius: 50%;
    border: 2px solid rgba(255,255,255,0.35);
    transition: border-color .15s ease, background .15s ease;
  }
  .opt:hover {
    border-color: rgba(62,205,198,0.55);
    background: rgba(62,205,198,0.06);
    transform: translateX(2px);
  }
  .opt:focus-visible { outline: 2px solid var(--ansa-teal); outline-offset: 2px; }
  .opt.selected {
    border-color: var(--ansa-teal);
    background: rgba(62,205,198,0.10);
  }
  .opt.selected::before {
    border-color: var(--ansa-teal);
    background: var(--ansa-teal);
    box-shadow: inset 0 0 0 3.5px var(--ansa-navy);
  }
  .quiz-nav {
    display: flex;
    justify-content: space-between;
    margin-top: 24px;
  }
  .nav-link {
    background: none;
    border: none;
    font-family: inherit;
    font-size: 13.5px;
    font-weight: 600;
    color: var(--ink-secondary);
    cursor: pointer;
    padding: 8px 4px;
  }
  .nav-link:hover { color: var(--ink); }
  .nav-link:disabled { opacity: 0; pointer-events: none; }
  .nav-link:focus-visible { outline: 2px solid var(--ansa-teal); outline-offset: 2px; border-radius: 4px; }

  /* ── RESULTS ── */
  .results-kicker { text-align: center; margin-bottom: 6px; }
  .score-hero {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 10px;
  }
  .donut-wrap { position: relative; width: 190px; height: 190px; margin-bottom: 14px; }
  .donut-wrap svg { transform: rotate(-90deg); }
  .donut-track { fill: none; stroke: var(--track); stroke-width: 12; }
  .donut-arc {
    fill: none;
    stroke: var(--ansa-teal);
    stroke-width: 12;
    stroke-linecap: round;
    transition: stroke-dashoffset 1.1s cubic-bezier(.25,.7,.3,1);
  }
  .donut-center {
    position: absolute;
    inset: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }
  .donut-center .num {
    font-size: 44px;
    font-weight: 800;
    letter-spacing: -1.5px;
    line-height: 1;
    color: var(--white);
  }
  .donut-center .den { font-size: 12.5px; color: var(--ink-secondary); font-weight: 500; margin-top: 4px; }
  .level-name {
    font-size: clamp(24px, 4.5vw, 32px);
    font-weight: 800;
    letter-spacing: -0.5px;
    text-align: center;
    color: var(--ansa-teal);
    margin-bottom: 8px;
  }
  .level-desc {
    font-size: 15px;
    line-height: 1.6;
    color: var(--ink-secondary);
    text-align: center;
    max-width: 560px;
    margin: 0 auto 26px;
  }

  .ladder {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 6px;
    margin-bottom: 34px;
  }
  .rung {
    text-align: center;
    padding-top: 10px;
    border-top: 3px solid var(--track);
    font-size: 11px;
    font-weight: 600;
    color: var(--ink-secondary);
  }
  .rung.reached { border-top-color: var(--ansa-teal); color: var(--ink); }
  .rung.current { color: var(--ansa-teal); font-weight: 800; }

  .panel {
    background: var(--card);
    border: 1px solid var(--card-border);
    border-radius: 14px;
    padding: 22px 22px 20px;
    margin-bottom: 18px;
  }
  .panel-label {
    font-size: 10.5px;
    font-weight: 700;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    color: var(--ansa-teal);
    margin-bottom: 16px;
  }
  .bar-row { margin-bottom: 16px; }
  .bar-row:last-child { margin-bottom: 2px; }
  .bar-head {
    display: flex;
    justify-content: space-between;
    align-items: baseline;
    margin-bottom: 6px;
  }
  .bar-name { font-size: 13.5px; font-weight: 600; color: var(--ink); display: flex; align-items: center; gap: 8px; }
  .bar-tag {
    font-size: 9.5px;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    padding: 2.5px 8px;
    border-radius: 999px;
  }
  .bar-tag.strong { background: rgba(62,205,198,0.14); color: var(--ansa-teal); }
  .bar-tag.focus { background: rgba(70,44,237,0.22); color: #b3a8f5; }
  .bar-val { font-size: 12.5px; font-weight: 700; color: var(--ink); font-variant-numeric: tabular-nums; }
  .bar-val span { color: var(--ink-secondary); font-weight: 500; }
  .bar-track {
    height: 10px;
    background: var(--track);
    border-radius: 4px;
    overflow: hidden;
  }
  .bar-fill {
    height: 100%;
    width: 0%;
    background: var(--ansa-teal);
    border-radius: 0 4px 4px 0;
    transition: width .9s cubic-bezier(.25,.7,.3,1);
  }

  .math-panel {
    border-left: 3px solid var(--ansa-purple);
  }
  .math-panel .zinger {
    font-size: 15.5px;
    font-weight: 700;
    color: var(--white);
    margin-bottom: 8px;
  }
  .math-panel p { font-size: 13.5px; line-height: 1.6; color: var(--ink-secondary); }
  .math-panel .formula {
    display: inline-block;
    margin-top: 10px;
    font-size: 13px;
    font-weight: 600;
    color: var(--ink);
    background: rgba(70,44,237,0.14);
    border: 1px solid rgba(70,44,237,0.35);
    border-radius: 8px;
    padding: 8px 14px;
  }

  .rec { margin-bottom: 18px; }
  .rec:last-child { margin-bottom: 0; }
  .rec h4 {
    font-size: 14.5px;
    font-weight: 700;
    color: var(--white);
    margin-bottom: 5px;
    display: flex;
    align-items: center;
    gap: 8px;
  }
  .rec h4 .dot {
    width: 8px; height: 8px;
    border-radius: 50%;
    background: var(--ansa-teal);
    flex-shrink: 0;
  }
  .rec p { font-size: 13.5px; line-height: 1.6; color: var(--ink-secondary); }
  .rec p b { color: var(--ink); font-weight: 600; }

  /* ── LEAD CAPTURE ── */
  .lead-panel {
    background: linear-gradient(135deg, rgba(62,205,198,0.10), rgba(70,44,237,0.12));
    border: 1px solid rgba(62,205,198,0.32);
    border-radius: 14px;
    padding: 24px 22px;
    margin-top: 26px;
  }
  .lead-panel h3 {
    font-size: clamp(18px, 3.3vw, 22px);
    font-weight: 800;
    letter-spacing: -0.4px;
    margin-bottom: 6px;
  }
  .lead-panel h3 span { color: var(--ansa-teal); }
  .lead-panel .lead-sub {
    font-size: 13.5px;
    line-height: 1.6;
    color: var(--ink-secondary);
    margin-bottom: 18px;
  }
  .lead-form { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
  .field { display: flex; flex-direction: column; gap: 5px; }
  .field.full { grid-column: 1 / -1; }
  .field label {
    font-size: 11.5px;
    font-weight: 600;
    letter-spacing: .3px;
    color: var(--ink-secondary);
  }
  .field label .req { color: var(--ansa-teal); }
  .field input, .field textarea {
    font-family: inherit;
    font-size: 14.5px;
    color: var(--ink);
    background: rgba(255,255,255,0.05);
    border: 1px solid var(--card-border);
    border-radius: 9px;
    padding: 11px 13px;
    transition: border-color .15s ease, background .15s ease;
  }
  .field textarea { resize: vertical; min-height: 70px; }
  .field input::placeholder, .field textarea::placeholder { color: var(--ink-muted); }
  .field input:focus, .field textarea:focus {
    outline: none;
    border-color: var(--ansa-teal);
    background: rgba(62,205,198,0.06);
  }
  .field input.invalid, .field textarea.invalid { border-color: #ff7a7a; }
  .lead-hp { position: absolute; left: -9999px; width: 1px; height: 1px; overflow: hidden; }
  .lead-actions {
    grid-column: 1 / -1;
    display: flex;
    align-items: center;
    gap: 14px;
    flex-wrap: wrap;
    margin-top: 4px;
  }
  .lead-consent { font-size: 11.5px; color: var(--ink-muted); max-width: 340px; line-height: 1.5; }
  .lead-msg { grid-column: 1 / -1; font-size: 13px; font-weight: 600; min-height: 18px; }
  .lead-msg.err { color: #ff9a9a; }
  .lead-success {
    text-align: center;
    padding: 8px 0 2px;
  }
  .lead-success .check {
    width: 46px; height: 46px; border-radius: 50%;
    background: rgba(62,205,198,0.16);
    border: 1px solid rgba(62,205,198,0.4);
    color: var(--ansa-teal);
    display: flex; align-items: center; justify-content: center;
    font-size: 24px; font-weight: 800;
    margin: 0 auto 12px;
  }
  .lead-success h3 { font-size: 20px; font-weight: 800; margin-bottom: 6px; }
  .lead-success p { font-size: 13.5px; color: var(--ink-secondary); line-height: 1.6; max-width: 420px; margin: 0 auto 16px; }

  /* ── CTA ── */
  .cta-panel {
    background: linear-gradient(135deg, rgba(62,205,198,0.12), rgba(70,44,237,0.14));
    border: 1px solid rgba(62,205,198,0.3);
    border-radius: 14px;
    padding: 28px 24px;
    text-align: center;
    margin-top: 18px;
  }
  .cta-panel .event-line {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: #b3a8f5;
    margin-bottom: 10px;
  }
  .cta-panel h3 {
    font-size: clamp(19px, 3.5vw, 23px);
    font-weight: 800;
    letter-spacing: -0.4px;
    margin-bottom: 8px;
  }
  .cta-panel h3 span { color: var(--ansa-teal); }
  .cta-panel p {
    font-size: 14px;
    line-height: 1.6;
    color: var(--ink-secondary);
    max-width: 480px;
    margin: 0 auto 18px;
  }
  .cta-btns { display: flex; gap: 12px; justify-content: center; flex-wrap: wrap; }

  .retake {
    text-align: center;
    margin-top: 22px;
  }

  .footer {
    margin-top: auto;
    padding-top: 40px;
    text-align: center;
    font-size: 12px;
    color: var(--ink-secondary);
  }
  .footer b { color: var(--ink); font-weight: 700; }
  .footer a { color: var(--ansa-teal); text-decoration: none; }

  /* screen-reader only */
  .sr-only {
    position: absolute;
    width: 1px; height: 1px;
    padding: 0; margin: -1px;
    overflow: hidden;
    clip: rect(0,0,0,0);
    white-space: nowrap;
    border: 0;
  }

  @media (max-width: 480px) {
    .topbar .tagline { display: none; }
    .ladder { grid-template-columns: repeat(2, 1fr); gap: 12px 6px; }
    .cta-btns .btn { width: 100%; }
    .lead-form { grid-template-columns: 1fr; }
    .lead-actions .btn { width: 100%; }
    .lead-consent { max-width: none; }
  }
</style>
</head>
<body>
<div class="wrap">

  <!-- TOP BAR -->
  <div class="topbar">
    <a class="logo-box" href="<?php echo $ansa_home; ?>">AN<span class="teal">S</span><span class="purple">A</span></a>
    <div class="tagline">Decouple Overhead from Growth.</div>
  </div>

  <!-- ═══ INTRO SCREEN ═══ -->
  <section class="screen active intro" id="screen-intro" aria-label="Assessment introduction">
    <div class="event-badge">TechPoint Community Connect · Fri, July 24, 2026 · Indianapolis</div>
    <div class="kicker">Workforce AI-Readiness Score</div>
    <h1>Are you building a workforce <span>AI can't replace?</span></h1>
    <p class="sub">Twelve questions about your team — how they use AI, where their time actually goes, and whether your organization is turning people into its edge or leaving them exposed. Three minutes to a scored answer.</p>
    <p class="audience-note">Built for anyone who leads or shapes a team. Not a manager yet? Answer for the organization you know best — or the one you want to work for.</p>
    <div class="stat-strip">
      <div class="stat-chip"><b>12</b> Questions</div>
      <div class="stat-chip"><b>3</b> Minutes</div>
      <div class="stat-chip"><b>4</b> Dimensions Scored</div>
    </div>
    <div class="dims" aria-label="The four dimensions">
      <span class="dim-pill">AI Fluency</span>
      <span class="dim-pill">Human Edge</span>
      <span class="dim-pill">Learning Culture</span>
      <span class="dim-pill">Leadership &amp; Direction</span>
    </div>
    <button class="btn" id="start-btn">Start the Assessment →</button>
    <p class="fine-print">No email required to see your score. Your answers stay in your browser unless you choose to share them.</p>
  </section>

  <!-- ═══ QUIZ SCREEN ═══ -->
  <section class="screen" id="screen-quiz" aria-label="Assessment questions">
    <div class="quiz-head">
      <div class="quiz-meta">
        <span class="cat-chip" id="cat-chip">AI Fluency</span>
        <span class="q-count" id="q-count">Question 1 of 12</span>
      </div>
      <div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="12" aria-valuenow="0" id="progressbar">
        <div class="progress-fill" id="progress-fill"></div>
      </div>
    </div>
    <h2 class="q-text" id="q-text"></h2>
    <div class="opts" id="opts"></div>
    <div class="quiz-nav">
      <button class="nav-link" id="back-btn">← Back</button>
      <span></span>
    </div>
  </section>

  <!-- ═══ RESULTS SCREEN ═══ -->
  <section class="screen" id="screen-results" aria-label="Your results">
    <div class="kicker results-kicker">Your Workforce AI-Readiness Score</div>
    <div class="score-hero">
      <div class="donut-wrap">
        <svg width="190" height="190" viewBox="0 0 190 190" aria-hidden="true">
          <circle class="donut-track" cx="95" cy="95" r="84"></circle>
          <circle class="donut-arc" id="donut-arc" cx="95" cy="95" r="84"></circle>
        </svg>
        <div class="donut-center">
          <div class="num" id="score-num">0</div>
          <div class="den">out of 100</div>
        </div>
      </div>
      <div class="level-name" id="level-name"></div>
      <p class="level-desc" id="level-desc"></p>
    </div>

    <div class="ladder" id="ladder" aria-label="Maturity levels">
      <div class="rung" data-level="0">Exposed</div>
      <div class="rung" data-level="1">AI-Aware</div>
      <div class="rung" data-level="2">AI-Augmented</div>
      <div class="rung" data-level="3">Irreplaceable</div>
    </div>

    <div class="panel">
      <div class="panel-label">Score by Dimension</div>
      <div id="bars"></div>
    </div>

    <div class="panel math-panel" id="math-panel">
      <div class="zinger" id="math-zinger"></div>
      <p id="math-body"></p>
      <span class="formula">5 hrs/week × $40/hr × 52 weeks = <b>$10,400 per process, per year</b></span>
    </div>

    <div class="panel">
      <div class="panel-label">Where to Focus First</div>
      <div id="recs"></div>
    </div>

    <!-- ── LEAD CAPTURE (opt-in) ── -->
    <div class="lead-panel" id="lead-panel">
      <h3>Want to talk through <span>your results?</span></h3>
      <p class="lead-sub">Leave your details and we'll follow up with a short, no-pressure conversation about what your score means for your team — and the one or two processes worth automating first. We'll send this result along so we start with context.</p>
      <form class="lead-form" id="lead-form" novalidate>
        <div class="field">
          <label for="lead-name">Name <span class="req">*</span></label>
          <input type="text" id="lead-name" name="name" autocomplete="name" placeholder="Your name" required>
        </div>
        <div class="field">
          <label for="lead-email">Work email <span class="req">*</span></label>
          <input type="email" id="lead-email" name="email" autocomplete="email" placeholder="you@company.com" required>
        </div>
        <div class="field">
          <label for="lead-company">Company</label>
          <input type="text" id="lead-company" name="company" autocomplete="organization" placeholder="Company name">
        </div>
        <div class="field">
          <label for="lead-role">Role</label>
          <input type="text" id="lead-role" name="role" autocomplete="organization-title" placeholder="e.g. Ops Director">
        </div>
        <div class="field full">
          <label for="lead-note">Anything you'd like us to know? (optional)</label>
          <textarea id="lead-note" name="note" placeholder="A process that's eating your team's week, a question, or just 'we met at the event.'"></textarea>
        </div>
        <!-- honeypot: real people leave this empty -->
        <div class="lead-hp" aria-hidden="true">
          <label>Website<input type="text" name="website" tabindex="-1" autocomplete="off"></label>
        </div>
        <div class="lead-msg" id="lead-msg" role="alert"></div>
        <div class="lead-actions">
          <button type="submit" class="btn" id="lead-submit">Send &amp; let's talk →</button>
          <span class="lead-consent">By sending, you agree we can email you about your results. No spam, no list — just a real reply.</span>
        </div>
      </form>
    </div>

    <div class="cta-panel">
      <div class="event-line">Community Connect · Building the Workforce AI Can't Replace</div>
      <h3>Your people aren't the problem. <span>The busywork is.</span></h3>
      <p>Automation replaces the worst parts of a job — not the job. If you'd rather just grab time on the calendar, book a 30-minute discovery call. If we met at the event, mention it — let's compare notes while it's fresh.</p>
      <div class="cta-btns">
        <a class="btn" id="cta-book" href="#">Book a Discovery Call</a>
        <a class="btn secondary" id="cta-learn" href="#" rel="noopener">Learn About ANSA</a>
      </div>
    </div>

    <div class="retake">
      <button class="nav-link" id="retake-btn">↺ Retake the assessment</button>
    </div>
  </section>

  <div class="footer">
    <b>ANSA Solutions</b> · Carmel, IN · <a href="mailto:info@ansa.solutions">info@ansa.solutions</a> · Let's talk automation.
  </div>
</div>

<script>
/* ══════════════════════════════════════════════════════════════════
   Server-injected config (WordPress)
   ══════════════════════════════════════════════════════════════════ */
const ANSA = {
  ajaxUrl: "<?php echo $ansa_ajax_url; ?>",
  nonce:   "<?php echo esc_js( $ansa_nonce ); ?>",
  booking: "<?php echo esc_js( $ansa_booking ); ?>",
  home:    "<?php echo esc_js( $ansa_home ); ?>"
};
const BOOKING_URL = ANSA.booking;

const CATEGORIES = [
  { id: "fluency",    name: "AI Fluency" },
  { id: "humanedge",  name: "Human Edge" },
  { id: "learning",   name: "Learning Culture" },
  { id: "leadership", name: "Leadership & Direction" }
];

const QUESTIONS = [
  /* ── AI Fluency ── */
  {
    cat: 0,
    text: "In a typical week, how is your team actually using AI tools — ChatGPT, Claude, Copilot?",
    opts: [
      "They're not. Or not that we know of",
      "A few individuals experiment on their own",
      "Several people use them regularly, but there's no shared playbook",
      "It's woven into daily work, with shared practices for what works"
    ]
  },
  {
    cat: 0,
    text: "Could most of your team tell you where AI helps their role — and where their own judgment matters more?",
    opts: [
      "No — it's not a conversation we've had",
      "A few people could",
      "Most have a rough sense of it",
      "Yes — they can draw that line clearly"
    ]
  },
  {
    cat: 0,
    text: "When a new AI capability ships, how long before your organization knows what it means for how you work?",
    opts: [
      "We don't really track what's coming out",
      "We read the headlines and move on",
      "Someone usually evaluates it, eventually",
      "We test it against real workflows within weeks"
    ]
  },
  /* ── Human Edge ── */
  {
    cat: 1,
    text: "How much of your team's week goes to repetitive work a machine could do — re-keying data, formatting reports, chasing status updates?",
    opts: [
      "Most of it — that's just how things get done here",
      "A lot. Probably 10+ hours per person",
      "Some, concentrated in a few specific processes",
      "Very little — we've automated most of it away"
    ]
  },
  {
    cat: 1,
    text: "How much time does your team get for the work AI can't do — judgment calls, relationships, creative problem-solving?",
    opts: [
      "Almost none. They're buried in busywork",
      "Less than we'd like — it happens around the edges",
      "A fair amount, for some roles more than others",
      "It's the core of their day. The busywork is the exception"
    ]
  },
  {
    cat: 1,
    text: "When you bring new people onto your team, what are you really screening for?",
    opts: [
      "Whether they can do the tasks in the job description",
      "Task skills first, potential second",
      "A mix — skills matter, but so does adaptability",
      "Judgment, communication, and learning speed — we can teach the tools"
    ]
  },
  /* ── Learning Culture ── */
  {
    cat: 2,
    text: "What kind of AI training or upskilling does your team get?",
    opts: [
      "None",
      "They're left to figure it out themselves",
      "Occasional lunch-and-learns or shared tips",
      "Structured training, plus real time set aside to learn"
    ]
  },
  {
    cat: 2,
    text: "When someone on your team finds an AI trick that saves them hours, what happens next?",
    opts: [
      "Nothing — it stays their personal secret",
      "They might mention it to a teammate",
      "It spreads informally, if you're lucky",
      "It gets captured and rolled out as shared practice"
    ]
  },
  {
    cat: 2,
    text: "For roles AI is clearly changing, how is your organization responding?",
    opts: [
      "We haven't talked about it",
      "There's quiet anxiety, but no plan",
      "We've started rethinking a few roles",
      "We actively redesign roles so people move up, not out"
    ]
  },
  /* ── Leadership & Direction ── */
  {
    cat: 3,
    text: "Who owns the question \"how does AI change our workforce\"?",
    opts: [
      "Nobody, yet",
      "HR or IT touches it informally",
      "A named owner, with rough priorities",
      "A named owner, a plan, and a budget"
    ]
  },
  {
    cat: 3,
    text: "If part of a role can be automated, what's the plan for the person in it?",
    opts: [
      "There isn't one",
      "We'd figure it out when it happens",
      "General intent to redeploy people to better work",
      "A clear path: automate the tasks, elevate the person"
    ]
  },
  {
    cat: 3,
    text: "If you rolled out a tool tomorrow that eliminated a chunk of manual work, how would your team react?",
    opts: [
      "Resistance — \"we've always done it this way\"",
      "Skepticism — some would worry about their jobs",
      "Openness — if leadership clearly backs it",
      "They'd cheer. They're already asking for it"
    ]
  }
];

const LEVELS = [
  {
    name: "Exposed",
    min: 0,
    desc: "Right now, your team's time — and value — is tied up in work machines are getting good at. That's not a verdict on your people; it's a picture of where their week goes. It also means you have the most to gain: teams that start here typically find 20–30 hours a week of recoverable time hiding in a handful of processes."
  },
  {
    name: "AI-Aware",
    min: 40,
    desc: "Your team sees what's coming, and pockets of the business are experimenting. What's missing is a system — shared practice, real training time, and a clear owner for the workforce question. Organizations at this stage are usually one focused project away from proving that AI elevates their people instead of threatening them."
  },
  {
    name: "AI-Augmented",
    min: 60,
    desc: "The foundations are in place: your people use AI with intent, busywork is shrinking, and leadership is steering instead of watching. The opportunity now is to compound it — redesign roles around judgment and relationships, and let automation absorb the work that was never anyone's best use of a day."
  },
  {
    name: "Irreplaceable",
    min: 80,
    desc: "You're building the thing this event is named for: a workforce AI strengthens instead of threatens. Your people spend their time on judgment, relationships, and problems worth solving — and the machines handle the rest. The edge now is depth: keep pushing automation into the corners that still run on effort."
  }
];

const RECS = {
  fluency: {
    title: "Make AI use visible — and shared",
    body: "Someone on your team is already saving hours with AI. The gap isn't talent, it's visibility — nobody's sharing what works. <b>First step:</b> a monthly 30-minute session where the team demos what's saving them time. Shared practice beats quiet experiments every time."
  },
  humanedge: {
    title: "Buy back your team's week",
    body: "The fastest way to build a workforce AI can't replace is to stop spending it on work AI already can. Automation replaces the worst parts of a job, not the job — it gives people their jobs back. <b>First step:</b> list the three most repetitive processes on your team and estimate hours per week on each. That's the time you're reclaiming for judgment and relationships."
  },
  learning: {
    title: "Turn learning into a system, not a favor",
    body: "Teams don't become AI-fluent through goodwill — they get there because leadership sets aside real time and makes what works repeatable. <b>First step:</b> pick one role AI is clearly changing, and redesign it out loud. When people see the plan is \"move up,\" not \"move out,\" the anxiety turns into adoption."
  },
  leadership: {
    title: "Give the workforce question an owner",
    body: "Momentum doesn't come from enthusiasm — it comes from ownership. If nobody owns how AI changes your workforce, the answer gets decided by default. <b>First step:</b> name one person accountable, and put a number on one manual process (hours per week × loaded cost). Budget follows clarity."
  }
};

/* ── State ── */
let answers = new Array(QUESTIONS.length).fill(null);
let current = 0;
let lastResult = null;

const $ = id => document.getElementById(id);
const screens = { intro: $("screen-intro"), quiz: $("screen-quiz"), results: $("screen-results") };
const track = (name, params) => { try { if (typeof gtag === "function") gtag("event", name, params || {}); } catch (e) {} };

function show(name) {
  Object.values(screens).forEach(s => s.classList.remove("active"));
  screens[name].classList.add("active");
  window.scrollTo({ top: 0 });
}

/* ── Quiz rendering ── */
function renderQuestion() {
  const q = QUESTIONS[current];
  $("cat-chip").textContent = CATEGORIES[q.cat].name;
  $("q-count").textContent = "Question " + (current + 1) + " of " + QUESTIONS.length;
  $("q-text").textContent = q.text;
  $("progress-fill").style.width = (current / QUESTIONS.length * 100) + "%";
  $("progressbar").setAttribute("aria-valuenow", current);

  const opts = $("opts");
  opts.innerHTML = "";
  q.opts.forEach((label, i) => {
    const b = document.createElement("button");
    b.className = "opt" + (answers[current] === i ? " selected" : "");
    b.type = "button";
    b.textContent = label;
    b.addEventListener("click", () => selectOption(i));
    opts.appendChild(b);
  });

  $("back-btn").disabled = current === 0;
}

let advancing = false;
function selectOption(i) {
  if (advancing) return;
  advancing = true;
  answers[current] = i;
  [...$("opts").children].forEach((el, j) => el.classList.toggle("selected", j === i));
  setTimeout(() => {
    advancing = false;
    if (current < QUESTIONS.length - 1) {
      current++;
      renderQuestion();
    } else {
      showResults();
    }
  }, 280);
}

$("start-btn").addEventListener("click", () => { track("assessment_start"); show("quiz"); renderQuestion(); });
$("back-btn").addEventListener("click", () => {
  if (current > 0) { current--; renderQuestion(); }
});
$("retake-btn").addEventListener("click", () => {
  answers = new Array(QUESTIONS.length).fill(null);
  current = 0;
  lastResult = null;
  resetLeadForm();
  show("quiz");
  renderQuestion();
});
$("cta-book").href = BOOKING_URL;
$("cta-book").addEventListener("click", () => track("assessment_book_click"));
$("cta-learn").href = ANSA.home;

/* ── Results ── */
function showResults() {
  const catScores = CATEGORIES.map(() => 0);
  QUESTIONS.forEach((q, i) => { catScores[q.cat] += (answers[i] ?? 0); });
  const maxPerCat = 9; // 3 questions × 3 points
  const total = catScores.reduce((a, b) => a + b, 0);
  const pct = Math.round(total / (maxPerCat * CATEGORIES.length) * 100);

  let levelIdx = 0;
  LEVELS.forEach((l, i) => { if (pct >= l.min) levelIdx = i; });
  const level = LEVELS[levelIdx];

  lastResult = {
    score: pct,
    level: level.name,
    dimensions: CATEGORIES.map((c, i) => ({
      name: c.name,
      score_pct: Math.round(catScores[i] / maxPerCat * 100)
    })),
    answers: QUESTIONS.map((q, i) => ({
      q: q.text,
      answer: answers[i] != null ? q.opts[answers[i]] : null
    }))
  };
  track("assessment_complete", { score: pct, level: level.name });

  show("results");

  /* Donut */
  const r = 84, circ = 2 * Math.PI * r;
  const arc = $("donut-arc");
  arc.style.strokeDasharray = circ;
  arc.style.strokeDashoffset = circ;
  requestAnimationFrame(() => requestAnimationFrame(() => {
    arc.style.strokeDashoffset = circ * (1 - pct / 100);
  }));

  /* Count-up */
  const numEl = $("score-num");
  const dur = 1000, t0 = performance.now();
  (function tick(t) {
    const p = Math.min(1, (t - t0) / dur);
    numEl.textContent = Math.round(pct * (1 - Math.pow(1 - p, 3)));
    if (p < 1) requestAnimationFrame(tick);
  })(t0);

  $("level-name").textContent = level.name;
  $("level-desc").textContent = level.desc;

  /* Ladder */
  document.querySelectorAll(".rung").forEach(rung => {
    const idx = +rung.dataset.level;
    rung.classList.toggle("reached", idx <= levelIdx);
    rung.classList.toggle("current", idx === levelIdx);
  });

  /* Bars */
  const sorted = catScores.map((s, i) => ({ s, i })).sort((a, b) => b.s - a.s);
  const strongest = sorted[0].i, weakest = [sorted[sorted.length - 1].i, sorted[sorted.length - 2].i];
  const bars = $("bars");
  bars.innerHTML = "";
  CATEGORIES.forEach((c, i) => {
    const p = Math.round(catScores[i] / maxPerCat * 100);
    const row = document.createElement("div");
    row.className = "bar-row";
    let tag = "";
    if (i === strongest && catScores[i] > 0) tag = '<span class="bar-tag strong">Strongest</span>';
    else if (weakest.includes(i)) tag = '<span class="bar-tag focus">Focus Area</span>';
    row.innerHTML =
      '<div class="bar-head"><span class="bar-name">' + c.name + tag + '</span>' +
      '<span class="bar-val">' + p + '<span>/100</span></span></div>' +
      '<div class="bar-track"><div class="bar-fill"></div></div>';
    bars.appendChild(row);
    requestAnimationFrame(() => requestAnimationFrame(() => {
      row.querySelector(".bar-fill").style.width = p + "%";
    }));
  });

  /* Cost-of-busywork panel — keyed to the repetitive-work answer (Q4) */
  const manualScore = answers[3] ?? 0;
  if (manualScore <= 1) {
    $("math-zinger").textContent = "That busywork isn't just costing money. It's costing you your best people's best hours.";
    $("math-body").innerHTML = "Every hour your team spends re-keying data is an hour they're not spending on the work AI can't do — judgment, relationships, problem-solving. And it prices out like this, per process:";
  } else if (manualScore === 2) {
    $("math-zinger").textContent = "A few manual processes left? Here's what each one costs.";
    $("math-body").innerHTML = "You've already bought back a lot of your team's time — which makes the remaining busywork easier to see and easier to price. For each process still done by hand:";
  } else {
    $("math-zinger").textContent = "You already know this math. Most companies don't.";
    $("math-body").innerHTML = "For every process still running on manual effort — yours or a competitor's — the cost of doing nothing looks like this:";
  }

  /* Recommendations — the two lowest-scoring dimensions, in score order */
  const recEl = $("recs");
  recEl.innerHTML = "";
  const focusOrder = catScores.map((s, i) => ({ s, i })).sort((a, b) => a.s - b.s).slice(0, 2);
  focusOrder.forEach(({ i }) => {
    const rec = RECS[CATEGORIES[i].id];
    const d = document.createElement("div");
    d.className = "rec";
    d.innerHTML = '<h4><span class="dot"></span>' + rec.title + '</h4><p>' + rec.body + '</p>';
    recEl.appendChild(d);
  });
}

/* ── Lead capture (opt-in) ── */
const leadForm = $("lead-form");
const leadPanel = $("lead-panel");

function resetLeadForm() {
  if (!leadForm) return;
  leadForm.reset();
  $("lead-msg").textContent = "";
  $("lead-msg").classList.remove("err");
  [...leadForm.querySelectorAll(".invalid")].forEach(el => el.classList.remove("invalid"));
}

function validEmail(v) { return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v); }

leadForm.addEventListener("submit", async (e) => {
  e.preventDefault();
  const msg = $("lead-msg");
  msg.classList.remove("err");
  msg.textContent = "";

  const name = $("lead-name");
  const email = $("lead-email");
  [name, email].forEach(el => el.classList.remove("invalid"));

  let bad = null;
  if (!name.value.trim()) { name.classList.add("invalid"); bad = bad || name; }
  if (!validEmail(email.value.trim())) { email.classList.add("invalid"); bad = bad || email; }
  if (bad) {
    msg.classList.add("err");
    msg.textContent = "Please add your name and a valid email so we can reach you.";
    bad.focus();
    return;
  }

  const btn = $("lead-submit");
  btn.disabled = true;
  const originalLabel = btn.textContent;
  btn.textContent = "Sending…";

  const payload = {
    name: name.value.trim(),
    email: email.value.trim(),
    company: $("lead-company").value.trim(),
    role: $("lead-role").value.trim(),
    note: $("lead-note").value.trim(),
    website: leadForm.querySelector('[name="website"]').value, // honeypot
    result: lastResult,
    source: "TechPoint Community Connect — Workforce AI Assessment"
  };

  try {
    const body = new URLSearchParams();
    body.set("action", "ansa_workforce_lead");
    body.set("nonce", ANSA.nonce);
    body.set("payload", JSON.stringify(payload));

    const res = await fetch(ANSA.ajaxUrl, {
      method: "POST",
      headers: { "Content-Type": "application/x-www-form-urlencoded" },
      body: body.toString()
    });
    const data = await res.json().catch(() => ({}));

    if (res.ok && data && data.success) {
      track("assessment_lead_submit", { score: lastResult ? lastResult.score : null });
      leadPanel.innerHTML =
        '<div class="lead-success">' +
        '<div class="check">✓</div>' +
        '<h3>Thanks — we\'ll be in touch.</h3>' +
        '<p>Your results are on their way to us. Expect a short, friendly note from the ANSA team. Prefer to grab time now? Book a call below.</p>' +
        '<a class="btn" href="' + BOOKING_URL + '" target="_blank" rel="noopener">Book a Discovery Call →</a>' +
        '</div>';
      leadPanel.scrollIntoView({ behavior: "smooth", block: "center" });
    } else {
      throw new Error((data && data.data) ? data.data : "Something went wrong.");
    }
  } catch (err) {
    msg.classList.add("err");
    msg.textContent = "We couldn't send that just now. Email us at info@ansa.solutions or grab time on the calendar below.";
    btn.disabled = false;
    btn.textContent = originalLabel;
  }
});
</script>
</body>
</html>
<?php
// Self-contained page — do not let WordPress append the theme footer.
exit;
