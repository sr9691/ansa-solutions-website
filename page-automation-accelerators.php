<?php
/**
 * Template Name: Automation Accelerators
 * Description: AI Accelerator Catalog — NLP search, tabbed browse by dept/industry
 */
get_header();
?>

<main id="main-content" class="site-main">

<!-- ============================================================
     HERO
============================================================ -->
<section class="hero hero--dark-gradient aia-hero">
	<div class="container">
		<div class="aia-hero__inner">
			<span class="badge badge--primary">AI-Powered Automation</span>
			<h1 class="hero__title">AI Accelerators</h1>
			<p class="hero__subtitle">
				An AI Accelerator is a pre-built automation that connects your existing tools, applies AI where it adds leverage, and delivers a useful output. A briefing, an alert, a draft, a report. No manual work required. Browse 75+ ready-to-deploy accelerators across every department and industry we serve.
			</p>

			<!-- NLP Search -->
			<div class="aia-search-wrap">
				<div class="aia-search" id="aiaSearchEl">
					<svg class="aia-search__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
					<input
						class="aia-search__input"
						id="aiaSearchInput"
						type="text"
						placeholder='Describe a problem or search by tool — try "my invoices take forever to approve"'
						autocomplete="off"
						aria-label="Search accelerators"
					>
					<span class="aia-search__spinner" id="aiaSpinner" aria-hidden="true"></span>
					<button class="aia-search__clear" id="aiaClearBtn" onclick="aiaClear()" aria-label="Clear search">✕</button>
				</div>
				<p class="aia-search__hint" id="aiaSearchHint">AI-powered search — describe your problem in plain English</p>
			</div>

			<!-- Tabs -->
			<div class="aia-tabs" role="tablist" aria-label="Browse accelerators">
				<button class="aia-tab aia-tab--active" data-tab="departments" onclick="aiaTab('departments',this)" role="tab" aria-selected="true">
					By Department <span class="aia-tab__count" id="tc-departments">40</span>
				</button>
				<button class="aia-tab" data-tab="industries" onclick="aiaTab('industries',this)" role="tab" aria-selected="false">
					By Industry <span class="aia-tab__count" id="tc-industries">35</span>
				</button>
				<button class="aia-tab" data-tab="all" onclick="aiaTab('all',this)" role="tab" aria-selected="false">
					All Accelerators <span class="aia-tab__count" id="tc-all">75</span>
				</button>
			</div>
		</div>
	</div>
</section>

<!-- ============================================================
     CATALOG
============================================================ -->
<section class="section aia-catalog">
	<div class="container">

		<!-- NLP result banner -->
		<div class="aia-nlp-banner" id="aiaNlpBanner" style="display:none">
			<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg>
			<span id="aiaNlpText"></span>
			<button onclick="aiaClear()" class="aia-nlp-banner__clear">Clear &amp; browse all</button>
		</div>

		<!-- Result bar -->
		<div class="aia-result-bar">
			<h2 class="aia-result-bar__heading" id="aiaHeading">Department Accelerators</h2>
			<span class="aia-result-bar__count badge badge-light" id="aiaCount">40 accelerators</span>
		</div>

		<!-- ===================== DEPARTMENTS ===================== -->
		<div class="aia-group-wrap" data-tab-group="departments">

			<!-- Meeting Transcript Aggregator -->
			<div class="aia-group" data-group="dept-meeting">
				<div class="aia-group__header" onclick="aiaToggle(this)">
					<div class="aia-group__icon" style="background:rgba(245,158,11,0.12);color:#d97706">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"/><path d="M19 10v2a7 7 0 0 1-14 0v-2"/><line x1="12" y1="19" x2="12" y2="23"/><line x1="8" y1="23" x2="16" y2="23"/></svg>
					</div>
					<div class="aia-group__meta">
						<span class="aia-group__title">Meeting Transcript Aggregator</span>
						<span class="aia-group__subtitle">For All Teams &amp; Leaders</span>
					</div>
					<span class="aia-group__badge">5</span>
					<div class="aia-group__toggle"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2,4 6,8 10,4"/></svg></div>
				</div>
				<div class="aia-cards">
					<div class="aia-card" id="ac-meeting-1" data-kw="auto-ingest transcripts zoom teams fireflies otter fathom tldv recording meeting notes">
						<div class="aia-card__head"><span class="aia-card__name">Auto-Ingest Transcripts</span></div>
						<p class="aia-card__desc">Automatically pulls transcripts into a centralized, searchable repository the moment a meeting ends.</p>
						<div class="aia-card__systems"><span class="aia-chip">Zoom</span><span class="aia-chip">MS Teams</span><span class="aia-chip">Fireflies.ai</span><span class="aia-chip">Otter.ai</span><span class="aia-chip">Fathom</span><span class="aia-chip">tl;dv</span></div>
					</div>
					<div class="aia-card" id="ac-meeting-2" data-kw="crm contact matching hubspot salesforce pipedrive zoho participants attendees">
						<div class="aia-card__head"><span class="aia-card__name">CRM Contact Matching</span></div>
						<p class="aia-card__desc">Parses meeting participants and maps them to existing CRM contacts, creating new records when no match is found.</p>
						<div class="aia-card__systems"><span class="aia-chip">HubSpot</span><span class="aia-chip">Salesforce</span><span class="aia-chip">Pipedrive</span><span class="aia-chip">Zoho CRM</span></div>
					</div>
					<div class="aia-card" id="ac-meeting-3" data-kw="ai summarization tagging fireflies otter fathom notion drive action items summary sentiment">
						<div class="aia-card__head"><span class="aia-card__name">AI Summarization &amp; Tagging</span></div>
						<p class="aia-card__desc">Generates structured summaries with key topics, sentiment signals, and action items automatically tagged for downstream use.</p>
						<div class="aia-card__systems"><span class="aia-chip">Fireflies.ai</span><span class="aia-chip">Otter.ai</span><span class="aia-chip">Fathom</span><span class="aia-chip">Notion</span><span class="aia-chip">Google Drive</span></div>
					</div>
					<div class="aia-card" id="ac-meeting-4" data-kw="email cross-referencing gmail outlook hubspot salesforce email threads context">
						<div class="aia-card__head"><span class="aia-card__name">Email Cross-referencing</span></div>
						<p class="aia-card__desc">Links meeting transcripts to related email threads, giving teams full context without manual research.</p>
						<div class="aia-card__systems"><span class="aia-chip">Gmail</span><span class="aia-chip">Outlook</span><span class="aia-chip">HubSpot</span><span class="aia-chip">Salesforce</span></div>
					</div>
					<div class="aia-card" id="ac-meeting-5" data-kw="searchable knowledge index notion confluence google drive sharepoint slack history past conversations">
						<div class="aia-card__head"><span class="aia-card__name">Searchable Knowledge Index</span></div>
						<p class="aia-card__desc">Builds a persistent, queryable index of all conversation history so any team member can surface relevant past discussions in seconds.</p>
						<div class="aia-card__systems"><span class="aia-chip">Notion</span><span class="aia-chip">Confluence</span><span class="aia-chip">Google Drive</span><span class="aia-chip">SharePoint</span><span class="aia-chip">Slack</span></div>
					</div>
				</div>
			</div>

			<!-- Revenue Operations -->
			<div class="aia-group" data-group="dept-revops">
				<div class="aia-group__header" onclick="aiaToggle(this)">
					<div class="aia-group__icon" style="background:rgba(16,185,129,0.1);color:#059669">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
					</div>
					<div class="aia-group__meta">
						<span class="aia-group__title">Revenue Operations</span>
						<span class="aia-group__subtitle">For Sales &amp; Revenue Leaders</span>
					</div>
					<span class="aia-group__badge">6</span>
					<div class="aia-group__toggle"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2,4 6,8 10,4"/></svg></div>
				</div>
				<div class="aia-cards">
					<div class="aia-card" id="ac-revops-1" data-kw="meeting prep hubspot salesforce linkedin apollo gmail calendar briefing research prospects">
						<div class="aia-card__head"><span class="aia-card__name">Meeting Prep</span></div>
						<p class="aia-card__desc">Assembles a pre-meeting briefing from CRM history, recent news, and open opportunities so reps walk in fully informed.</p>
						<div class="aia-card__systems"><span class="aia-chip">HubSpot</span><span class="aia-chip">Salesforce</span><span class="aia-chip">LinkedIn Sales Nav</span><span class="aia-chip">Apollo.io</span><span class="aia-chip">Gmail</span></div>
					</div>
					<div class="aia-card" id="ac-revops-2" data-kw="post-meeting tracker action items next steps crm logging hubspot salesforce fireflies asana notion">
						<div class="aia-card__head"><span class="aia-card__name">Post-Meeting Tracker</span></div>
						<p class="aia-card__desc">Captures action items, next steps, and commitments from meeting transcripts and logs them directly into your CRM.</p>
						<div class="aia-card__systems"><span class="aia-chip">HubSpot</span><span class="aia-chip">Salesforce</span><span class="aia-chip">Fireflies.ai</span><span class="aia-chip">Asana</span><span class="aia-chip">Notion</span></div>
					</div>
					<div class="aia-card" id="ac-revops-3" data-kw="deal risk monitor stalling pipeline velocity hubspot salesforce pipedrive slack at-risk deals">
						<div class="aia-card__head"><span class="aia-card__name">Deal Risk Monitor</span></div>
						<p class="aia-card__desc">Continuously evaluates open deals against engagement signals and pipeline velocity, alerting reps when a deal shows signs of stalling.</p>
						<div class="aia-card__systems"><span class="aia-chip">HubSpot</span><span class="aia-chip">Salesforce</span><span class="aia-chip">Pipedrive</span><span class="aia-chip">Slack</span></div>
					</div>
					<div class="aia-card" id="ac-revops-4" data-kw="lead enrichment firmographic technographic intent data hubspot salesforce apollo clearbit zoominfo">
						<div class="aia-card__head"><span class="aia-card__name">Lead Enrichment</span></div>
						<p class="aia-card__desc">Automatically enriches new leads with firmographic, technographic, and intent data the moment they enter your CRM.</p>
						<div class="aia-card__systems"><span class="aia-chip">HubSpot</span><span class="aia-chip">Salesforce</span><span class="aia-chip">Apollo.io</span><span class="aia-chip">Clearbit</span><span class="aia-chip">ZoomInfo</span></div>
					</div>
					<div class="aia-card" id="ac-revops-5" data-kw="lead scoring prioritization inbound fit behavior signals hubspot salesforce marketo activecampaign">
						<div class="aia-card__head"><span class="aia-card__name">Lead Scoring &amp; Prioritization</span></div>
						<p class="aia-card__desc">Scores inbound leads in real time based on fit and behavior signals, surfacing the highest-priority prospects for immediate follow-up.</p>
						<div class="aia-card__systems"><span class="aia-chip">HubSpot</span><span class="aia-chip">Salesforce</span><span class="aia-chip">Marketo</span><span class="aia-chip">ActiveCampaign</span></div>
					</div>
					<div class="aia-card" id="ac-revops-6" data-kw="competitive battlecard generator competitor positioning objection handling notion crayon klue g2">
						<div class="aia-card__head"><span class="aia-card__name">Competitive Battlecard Generator</span></div>
						<p class="aia-card__desc">Monitors competitor activity and automatically updates your sales battlecards with fresh positioning and objection-handling guidance.</p>
						<div class="aia-card__systems"><span class="aia-chip">Notion</span><span class="aia-chip">Confluence</span><span class="aia-chip">Crayon</span><span class="aia-chip">Klue</span><span class="aia-chip">G2</span></div>
					</div>
				</div>
			</div>

			<!-- Customer Success -->
			<div class="aia-group" data-group="dept-cs">
				<div class="aia-group__header" onclick="aiaToggle(this)">
					<div class="aia-group__icon" style="background:rgba(59,130,246,0.1);color:#2563eb">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
					</div>
					<div class="aia-group__meta">
						<span class="aia-group__title">Customer Success</span>
						<span class="aia-group__subtitle">For Customer Success Leaders</span>
					</div>
					<span class="aia-group__badge">5</span>
					<div class="aia-group__toggle"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2,4 6,8 10,4"/></svg></div>
				</div>
				<div class="aia-cards">
					<div class="aia-card" id="ac-cs-1" data-kw="client health monitor product usage support history health score churn gainsight churnzero zendesk mixpanel">
						<div class="aia-card__head"><span class="aia-card__name">Client Health Monitor</span></div>
						<p class="aia-card__desc">Aggregates product usage, support history, and engagement data into a real-time health score with automated alerts when a customer's trajectory turns negative.</p>
						<div class="aia-card__systems"><span class="aia-chip">HubSpot</span><span class="aia-chip">Gainsight</span><span class="aia-chip">ChurnZero</span><span class="aia-chip">Zendesk</span><span class="aia-chip">Mixpanel</span></div>
					</div>
					<div class="aia-card" id="ac-cs-2" data-kw="renewal alerts contract renewal dates outreach sequences gainsight gmail outlook calendar">
						<div class="aia-card__head"><span class="aia-card__name">Renewal Alerts</span></div>
						<p class="aia-card__desc">Tracks contract renewal dates and triggers timely, personalized outreach sequences so no renewal falls through the cracks.</p>
						<div class="aia-card__systems"><span class="aia-chip">HubSpot</span><span class="aia-chip">Salesforce</span><span class="aia-chip">Gainsight</span><span class="aia-chip">Gmail</span><span class="aia-chip">Outlook</span></div>
					</div>
					<div class="aia-card" id="ac-cs-3" data-kw="comms summarizer emails calls tickets account summary csm context hubspot gmail zendesk fireflies">
						<div class="aia-card__head"><span class="aia-card__name">Comms Summarizer</span></div>
						<p class="aia-card__desc">Distills weeks of emails, calls, and tickets into a concise account summary, giving CSMs instant context before any customer interaction.</p>
						<div class="aia-card__systems"><span class="aia-chip">HubSpot</span><span class="aia-chip">Gmail</span><span class="aia-chip">Zendesk</span><span class="aia-chip">Fireflies.ai</span></div>
					</div>
					<div class="aia-card" id="ac-cs-4" data-kw="qbr prep quarterly business review usage stats roi metrics deck gainsight google slides powerpoint">
						<div class="aia-card__head"><span class="aia-card__name">QBR Prep</span></div>
						<p class="aia-card__desc">Automatically compiles usage stats, milestone progress, support trends, and ROI metrics into a ready-to-present QBR deck.</p>
						<div class="aia-card__systems"><span class="aia-chip">Gainsight</span><span class="aia-chip">Salesforce</span><span class="aia-chip">Google Slides</span><span class="aia-chip">Mixpanel</span><span class="aia-chip">Zendesk</span></div>
					</div>
					<div class="aia-card" id="ac-cs-5" data-kw="churn risk alerts usage drop sentiment escalation save workflow gainsight churnzero zendesk slack">
						<div class="aia-card__head"><span class="aia-card__name">Churn Risk Alerts</span></div>
						<p class="aia-card__desc">Detects early churn signals from usage drop-offs, sentiment shifts, and support escalations, triggering proactive save workflows before it's too late.</p>
						<div class="aia-card__systems"><span class="aia-chip">Gainsight</span><span class="aia-chip">ChurnZero</span><span class="aia-chip">Zendesk</span><span class="aia-chip">Slack</span></div>
					</div>
				</div>
			</div>

			<!-- Finance & Procurement -->
			<div class="aia-group" data-group="dept-finance">
				<div class="aia-group__header" onclick="aiaToggle(this)">
					<div class="aia-group__icon" style="background:rgba(139,92,246,0.1);color:#7c3aed">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><line x1="3" y1="9" x2="21" y2="9"/><line x1="9" y1="3" x2="9" y2="21"/></svg>
					</div>
					<div class="aia-group__meta">
						<span class="aia-group__title">Finance &amp; Procurement</span>
						<span class="aia-group__subtitle">For Finance Leaders</span>
					</div>
					<span class="aia-group__badge">5</span>
					<div class="aia-group__toggle"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2,4 6,8 10,4"/></svg></div>
				</div>
				<div class="aia-cards">
					<div class="aia-card" id="ac-finance-1" data-kw="invoice processing slow approval manual data entry payment cycle accounts payable quickbooks xero netsuite bill.com sap">
						<div class="aia-card__head"><span class="aia-card__name">Invoice Processing</span></div>
						<p class="aia-card__desc">Extracts, validates, and routes incoming invoices for approval automatically, reducing manual data entry and accelerating payment cycles.</p>
						<div class="aia-card__systems"><span class="aia-chip">QuickBooks</span><span class="aia-chip">Xero</span><span class="aia-chip">NetSuite</span><span class="aia-chip">Sage</span><span class="aia-chip">Bill.com</span><span class="aia-chip">SAP</span></div>
					</div>
					<div class="aia-card" id="ac-finance-2" data-kw="expense audit policy compliance out-of-policy spend anomalies expensify concur ramp brex quickbooks">
						<div class="aia-card__head"><span class="aia-card__name">Expense Audit</span></div>
						<p class="aia-card__desc">Scans submitted expenses against policy rules and flags anomalies for review, reducing errors and out-of-policy spend.</p>
						<div class="aia-card__systems"><span class="aia-chip">Expensify</span><span class="aia-chip">Concur</span><span class="aia-chip">Ramp</span><span class="aia-chip">Brex</span><span class="aia-chip">QuickBooks</span></div>
					</div>
					<div class="aia-card" id="ac-finance-3" data-kw="contract monitor vendor renewal auto-renewal spend threshold docusign pandadoc ironclad hubspot">
						<div class="aia-card__head"><span class="aia-card__name">Contract Monitor</span></div>
						<p class="aia-card__desc">Tracks vendor contracts for upcoming renewals, auto-renewal clauses, and spend thresholds, alerting stakeholders in time to act.</p>
						<div class="aia-card__systems"><span class="aia-chip">DocuSign</span><span class="aia-chip">PandaDoc</span><span class="aia-chip">Ironclad</span><span class="aia-chip">Google Drive</span><span class="aia-chip">SharePoint</span></div>
					</div>
					<div class="aia-card" id="ac-finance-4" data-kw="cash flow alerts receivables payables low balance forecast quickbooks xero netsuite stripe slack">
						<div class="aia-card__head"><span class="aia-card__name">Cash Flow Alerts</span></div>
						<p class="aia-card__desc">Monitors receivables and payables in real time, sending proactive alerts when cash flow is projected to fall below defined thresholds.</p>
						<div class="aia-card__systems"><span class="aia-chip">QuickBooks</span><span class="aia-chip">Xero</span><span class="aia-chip">NetSuite</span><span class="aia-chip">Stripe</span><span class="aia-chip">Slack</span></div>
					</div>
					<div class="aia-card" id="ac-finance-5" data-kw="month-end close checklist close tasks owners completion blockers quickbooks netsuite asana notion slack">
						<div class="aia-card__head"><span class="aia-card__name">Month-End Close Checklist</span></div>
						<p class="aia-card__desc">Automates the orchestration of month-end close tasks, notifying owners, tracking completion, and escalating blockers to keep the close on schedule.</p>
						<div class="aia-card__systems"><span class="aia-chip">QuickBooks</span><span class="aia-chip">Xero</span><span class="aia-chip">NetSuite</span><span class="aia-chip">Asana</span><span class="aia-chip">Notion</span><span class="aia-chip">Slack</span></div>
					</div>
				</div>
			</div>

			<!-- Marketing -->
			<div class="aia-group" data-group="dept-marketing">
				<div class="aia-group__header" onclick="aiaToggle(this)">
					<div class="aia-group__icon" style="background:rgba(236,72,153,0.1);color:#db2777">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"/><path d="M15.54 8.46a5 5 0 0 1 0 7.07"/></svg>
					</div>
					<div class="aia-group__meta">
						<span class="aia-group__title">Marketing</span>
						<span class="aia-group__subtitle">For Marketing Leaders</span>
					</div>
					<span class="aia-group__badge">5</span>
					<div class="aia-group__toggle"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2,4 6,8 10,4"/></svg></div>
				</div>
				<div class="aia-cards">
					<div class="aia-card" id="ac-mktg-1" data-kw="content repurposing pipeline blog post social media email ad copy channel wordpress hubspot buffer hootsuite mailchimp">
						<div class="aia-card__head"><span class="aia-card__name">Content Repurposing Pipeline</span></div>
						<p class="aia-card__desc">Transforms a single long-form asset into social posts, email snippets, and ad copy, automatically formatted per channel.</p>
						<div class="aia-card__systems"><span class="aia-chip">WordPress</span><span class="aia-chip">HubSpot CMS</span><span class="aia-chip">Buffer</span><span class="aia-chip">Hootsuite</span><span class="aia-chip">Mailchimp</span></div>
					</div>
					<div class="aia-card" id="ac-mktg-2" data-kw="campaign performance summarizer analytics metrics executive summary google analytics hubspot meta ads google ads databox">
						<div class="aia-card__head"><span class="aia-card__name">Campaign Performance Summarizer</span></div>
						<p class="aia-card__desc">Aggregates cross-channel campaign metrics and delivers a plain-language executive summary with highlights and recommended actions.</p>
						<div class="aia-card__systems"><span class="aia-chip">Google Analytics</span><span class="aia-chip">HubSpot</span><span class="aia-chip">Meta Ads</span><span class="aia-chip">Google Ads</span><span class="aia-chip">Databox</span></div>
					</div>
					<div class="aia-card" id="ac-mktg-3" data-kw="seo brief generator keywords competitor content brief ahrefs semrush moz google search console notion">
						<div class="aia-card__head"><span class="aia-card__name">SEO Brief Generator</span></div>
						<p class="aia-card__desc">Analyzes target keywords and competitor content to produce a structured SEO brief, ready for a writer or AI content tool to execute.</p>
						<div class="aia-card__systems"><span class="aia-chip">Ahrefs</span><span class="aia-chip">SEMrush</span><span class="aia-chip">Moz</span><span class="aia-chip">Google Search Console</span><span class="aia-chip">Notion</span></div>
					</div>
					<div class="aia-card" id="ac-mktg-4" data-kw="competitor monitoring digest competitor website press release review weekly positioning sentiment google alerts crayon klue g2">
						<div class="aia-card__head"><span class="aia-card__name">Competitor Monitoring Digest</span></div>
						<p class="aia-card__desc">Monitors competitor websites, press releases, and review sites, delivering a weekly digest of positioning changes and sentiment shifts.</p>
						<div class="aia-card__systems"><span class="aia-chip">Google Alerts</span><span class="aia-chip">Crayon</span><span class="aia-chip">Klue</span><span class="aia-chip">G2</span><span class="aia-chip">Slack</span></div>
					</div>
					<div class="aia-card" id="ac-mktg-5" data-kw="persona-based copy generator buyer persona messaging variations crm segmentation brand voice hubspot marketo activecampaign">
						<div class="aia-card__head"><span class="aia-card__name">Persona-Based Copy Generator</span></div>
						<p class="aia-card__desc">Generates tailored messaging variations for each buyer persona using CRM segmentation data and approved brand voice guidelines.</p>
						<div class="aia-card__systems"><span class="aia-chip">HubSpot</span><span class="aia-chip">Salesforce</span><span class="aia-chip">Marketo</span><span class="aia-chip">ActiveCampaign</span><span class="aia-chip">Notion</span></div>
					</div>
				</div>
			</div>

			<!-- HR & People Ops -->
			<div class="aia-group" data-group="dept-hr">
				<div class="aia-group__header" onclick="aiaToggle(this)">
					<div class="aia-group__icon" style="background:rgba(6,182,212,0.1);color:#0891b2">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
					</div>
					<div class="aia-group__meta">
						<span class="aia-group__title">HR &amp; People Ops</span>
						<span class="aia-group__subtitle">For HR Leaders</span>
					</div>
					<span class="aia-group__badge">5</span>
					<div class="aia-group__toggle"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2,4 6,8 10,4"/></svg></div>
				</div>
				<div class="aia-cards">
					<div class="aia-card" id="ac-hr-1" data-kw="job description generator hiring bias-reviewed intake form greenhouse lever workday bamboohr linkedin indeed">
						<div class="aia-card__head"><span class="aia-card__name">Job Description Generator</span></div>
						<p class="aia-card__desc">Produces structured, bias-reviewed job descriptions from a hiring manager intake form. Consistent, on-brand, and ready to post in minutes.</p>
						<div class="aia-card__systems"><span class="aia-chip">Greenhouse</span><span class="aia-chip">Lever</span><span class="aia-chip">Workday</span><span class="aia-chip">BambooHR</span><span class="aia-chip">LinkedIn Jobs</span></div>
					</div>
					<div class="aia-card" id="ac-hr-2" data-kw="resume screening shortlist ranked applications role criteria candidate greenhouse lever bamboohr rippling">
						<div class="aia-card__head"><span class="aia-card__name">Resume Screening &amp; Shortlist</span></div>
						<p class="aia-card__desc">Evaluates inbound applications against role criteria and delivers a ranked shortlist with a concise rationale for each candidate.</p>
						<div class="aia-card__systems"><span class="aia-chip">Greenhouse</span><span class="aia-chip">Lever</span><span class="aia-chip">Workday</span><span class="aia-chip">BambooHR</span><span class="aia-chip">Rippling</span></div>
					</div>
					<div class="aia-card" id="ac-hr-3" data-kw="onboarding task orchestration offer accepted IT HR hiring tasks bamboohr rippling asana notion slack gmail">
						<div class="aia-card__head"><span class="aia-card__name">Onboarding Task Orchestration</span></div>
						<p class="aia-card__desc">Automatically triggers and tracks all onboarding tasks across IT, HR, and the hiring team the moment an offer is accepted.</p>
						<div class="aia-card__systems"><span class="aia-chip">BambooHR</span><span class="aia-chip">Rippling</span><span class="aia-chip">Workday</span><span class="aia-chip">Asana</span><span class="aia-chip">Slack</span></div>
					</div>
					<div class="aia-card" id="ac-hr-4" data-kw="employee sentiment analysis pulse survey feedback theme report lattice culture amp leapsome typeform">
						<div class="aia-card__head"><span class="aia-card__name">Employee Sentiment Analysis</span></div>
						<p class="aia-card__desc">Processes pulse survey responses and open-text feedback into structured theme reports for leadership.</p>
						<div class="aia-card__systems"><span class="aia-chip">Lattice</span><span class="aia-chip">Culture Amp</span><span class="aia-chip">Leapsome</span><span class="aia-chip">SurveyMonkey</span><span class="aia-chip">Typeform</span></div>
					</div>
					<div class="aia-card" id="ac-hr-5" data-kw="policy qa bot pto benefits compliance questions hr documentation slack teams notion confluence bamboohr">
						<div class="aia-card__head"><span class="aia-card__name">Policy Q&amp;A Bot</span></div>
						<p class="aia-card__desc">Answers employee questions about PTO, benefits, and compliance policies instantly using your existing HR documentation as the knowledge source.</p>
						<div class="aia-card__systems"><span class="aia-chip">Slack</span><span class="aia-chip">MS Teams</span><span class="aia-chip">Notion</span><span class="aia-chip">Confluence</span><span class="aia-chip">BambooHR</span></div>
					</div>
				</div>
			</div>

			<!-- Operations -->
			<div class="aia-group" data-group="dept-ops">
				<div class="aia-group__header" onclick="aiaToggle(this)">
					<div class="aia-group__icon" style="background:rgba(249,115,22,0.1);color:#ea580c">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M19.07 4.93a10 10 0 0 1 0 14.14M4.93 4.93a10 10 0 0 0 0 14.14"/></svg>
					</div>
					<div class="aia-group__meta">
						<span class="aia-group__title">Operations</span>
						<span class="aia-group__subtitle">For Operations Leaders</span>
					</div>
					<span class="aia-group__badge">5</span>
					<div class="aia-group__toggle"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2,4 6,8 10,4"/></svg></div>
				</div>
				<div class="aia-cards">
					<div class="aia-card" id="ac-ops-1" data-kw="vendor performance scorecard delivery quality sla supplier review quickbooks netsuite google sheets notion">
						<div class="aia-card__head"><span class="aia-card__name">Vendor Performance Scorecard</span></div>
						<p class="aia-card__desc">Aggregates delivery, quality, and SLA data across vendors into a regularly updated scorecard, making supplier reviews faster and more objective.</p>
						<div class="aia-card__systems"><span class="aia-chip">QuickBooks</span><span class="aia-chip">NetSuite</span><span class="aia-chip">SAP</span><span class="aia-chip">Google Sheets</span><span class="aia-chip">Notion</span></div>
					</div>
					<div class="aia-card" id="ac-ops-2" data-kw="sop documentation generator process recording transcript structured sop notion confluence loom fireflies">
						<div class="aia-card__head"><span class="aia-card__name">SOP Documentation Generator</span></div>
						<p class="aia-card__desc">Converts process recordings, meeting transcripts, or written notes into structured, version-controlled SOPs ready for team distribution.</p>
						<div class="aia-card__systems"><span class="aia-chip">Notion</span><span class="aia-chip">Confluence</span><span class="aia-chip">Google Docs</span><span class="aia-chip">Loom</span><span class="aia-chip">Fireflies.ai</span></div>
					</div>
					<div class="aia-card" id="ac-ops-3" data-kw="meeting notes action tracker decisions owners due dates project management asana monday jira clickup notion fireflies">
						<div class="aia-card__head"><span class="aia-card__name">Meeting Notes to Action Tracker</span></div>
						<p class="aia-card__desc">Extracts decisions and action items from meeting transcripts and pushes them into your project management tool with owners and due dates.</p>
						<div class="aia-card__systems"><span class="aia-chip">Asana</span><span class="aia-chip">Monday.com</span><span class="aia-chip">Jira</span><span class="aia-chip">ClickUp</span><span class="aia-chip">Fireflies.ai</span></div>
					</div>
					<div class="aia-card" id="ac-ops-4" data-kw="project status digest weekly report task completion leadership asana monday jira notion slack gmail">
						<div class="aia-card__head"><span class="aia-card__name">Project Status Digest</span></div>
						<p class="aia-card__desc">Pulls task completion data from your project tools and generates a concise weekly status report formatted for leadership.</p>
						<div class="aia-card__systems"><span class="aia-chip">Asana</span><span class="aia-chip">Monday.com</span><span class="aia-chip">Jira</span><span class="aia-chip">ClickUp</span><span class="aia-chip">Notion</span><span class="aia-chip">Slack</span></div>
					</div>
					<div class="aia-card" id="ac-ops-5" data-kw="inventory reorder alerts stock levels purchase requests low inventory quickbooks netsuite shopify square cin7 fishbowl">
						<div class="aia-card__head"><span class="aia-card__name">Inventory Reorder Alerts</span></div>
						<p class="aia-card__desc">Monitors inventory levels against reorder thresholds and triggers purchase requests automatically when stock falls below target levels.</p>
						<div class="aia-card__systems"><span class="aia-chip">QuickBooks</span><span class="aia-chip">NetSuite</span><span class="aia-chip">Shopify</span><span class="aia-chip">Square</span><span class="aia-chip">Cin7</span><span class="aia-chip">Fishbowl</span></div>
					</div>
				</div>
			</div>

			<!-- Legal & Compliance -->
			<div class="aia-group" data-group="dept-legal">
				<div class="aia-group__header" onclick="aiaToggle(this)">
					<div class="aia-group__icon" style="background:rgba(167,139,250,0.12);color:#7c3aed">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
					</div>
					<div class="aia-group__meta">
						<span class="aia-group__title">Legal &amp; Compliance</span>
						<span class="aia-group__subtitle">For Legal &amp; Compliance Leaders</span>
					</div>
					<span class="aia-group__badge">5</span>
					<div class="aia-group__toggle"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2,4 6,8 10,4"/></svg></div>
				</div>
				<div class="aia-cards">
					<div class="aia-card" id="ac-legalcomp-1" data-kw="contract redline summarizer changes clause category triage legal docusign pandadoc ironclad word google docs">
						<div class="aia-card__head"><span class="aia-card__name">Contract Redline Summarizer</span></div>
						<p class="aia-card__desc">Reads incoming redlined contracts and produces a structured summary of changes by clause category so legal can triage and respond faster.</p>
						<div class="aia-card__systems"><span class="aia-chip">DocuSign</span><span class="aia-chip">PandaDoc</span><span class="aia-chip">Ironclad</span><span class="aia-chip">MS Word</span><span class="aia-chip">Google Docs</span></div>
					</div>
					<div class="aia-card" id="ac-legalcomp-2" data-kw="nda msa clause extractor key clauses agreements structured searchable docusign ironclad notion airtable">
						<div class="aia-card__head"><span class="aia-card__name">NDA / MSA Clause Extractor</span></div>
						<p class="aia-card__desc">Extracts key clauses from agreements and stores them in a structured, searchable format for easy reference.</p>
						<div class="aia-card__systems"><span class="aia-chip">DocuSign</span><span class="aia-chip">PandaDoc</span><span class="aia-chip">Ironclad</span><span class="aia-chip">Notion</span><span class="aia-chip">Airtable</span></div>
					</div>
					<div class="aia-card" id="ac-legalcomp-3" data-kw="regulatory change monitor rule changes industry publications alert impact summary google alerts lexisnexis thomson reuters slack">
						<div class="aia-card__head"><span class="aia-card__name">Regulatory Change Monitor</span></div>
						<p class="aia-card__desc">Tracks regulatory feeds and industry publications for relevant rule changes, delivering a prioritized alert with an impact summary.</p>
						<div class="aia-card__systems"><span class="aia-chip">Google Alerts</span><span class="aia-chip">RSS Feeds</span><span class="aia-chip">LexisNexis</span><span class="aia-chip">Thomson Reuters</span><span class="aia-chip">Slack</span></div>
					</div>
					<div class="aia-card" id="ac-legalcomp-4" data-kw="policy qa chatbot compliance internal questions documentation slack teams notion confluence google drive sharepoint">
						<div class="aia-card__head"><span class="aia-card__name">Policy Q&amp;A Chatbot</span></div>
						<p class="aia-card__desc">Answers internal questions about compliance policies and regulatory requirements by querying your approved policy documentation.</p>
						<div class="aia-card__systems"><span class="aia-chip">Slack</span><span class="aia-chip">MS Teams</span><span class="aia-chip">Notion</span><span class="aia-chip">Confluence</span><span class="aia-chip">Google Drive</span></div>
					</div>
					<div class="aia-card" id="ac-legalcomp-5" data-kw="audit trail report generator activity logs approval records access history formatted report okta rippling docusign netsuite">
						<div class="aia-card__head"><span class="aia-card__name">Audit Trail Report Generator</span></div>
						<p class="aia-card__desc">Compiles activity logs, approval records, and access histories into a formatted audit trail report ready for internal review or external examination.</p>
						<div class="aia-card__systems"><span class="aia-chip">Google Workspace</span><span class="aia-chip">Microsoft 365</span><span class="aia-chip">Okta</span><span class="aia-chip">DocuSign</span><span class="aia-chip">NetSuite</span></div>
					</div>
				</div>
			</div>

		</div><!-- /departments -->

		<!-- ===================== INDUSTRIES ===================== -->
		<div class="aia-group-wrap" data-tab-group="industries" style="display:none">

			<!-- Professional Services -->
			<div class="aia-group" data-group="ind-proserv">
				<div class="aia-group__header" onclick="aiaToggle(this)">
					<div class="aia-group__icon" style="background:rgba(70,44,237,0.08);color:#462CED">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 7H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
					</div>
					<div class="aia-group__meta">
						<span class="aia-group__title">Professional Services</span>
						<span class="aia-group__subtitle">Consulting, Accounting &amp; Advisory Firms</span>
					</div>
					<span class="aia-group__badge">5</span>
					<div class="aia-group__toggle"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2,4 6,8 10,4"/></svg></div>
				</div>
				<div class="aia-cards">
					<div class="aia-card" id="ac-ps-1" data-kw="engagement kickoff packager client onboarding scope team milestones checklist hubspot docusign asana notion">
						<div class="aia-card__head"><span class="aia-card__name">Engagement Kickoff Packager</span></div>
						<p class="aia-card__desc">Automatically assembles a new client onboarding package the moment a contract is signed, covering scope summary, team assignments, milestones, and document checklist.</p>
						<div class="aia-card__systems"><span class="aia-chip">HubSpot</span><span class="aia-chip">Salesforce</span><span class="aia-chip">DocuSign</span><span class="aia-chip">Asana</span><span class="aia-chip">Monday.com</span><span class="aia-chip">Notion</span></div>
					</div>
					<div class="aia-card" id="ac-ps-2" data-kw="timesheet utilization monitor billable hours consultant utilization rate harvest toggl bqe quickbooks mavenlink deltek">
						<div class="aia-card__head"><span class="aia-card__name">Timesheet &amp; Utilization Monitor</span></div>
						<p class="aia-card__desc">Tracks billable hours logged per project and per consultant, alerting managers when utilization rates drift outside target thresholds before the billing cycle closes.</p>
						<div class="aia-card__systems"><span class="aia-chip">Harvest</span><span class="aia-chip">Toggl Track</span><span class="aia-chip">BQE Core</span><span class="aia-chip">QuickBooks Time</span><span class="aia-chip">Deltek</span></div>
					</div>
					<div class="aia-card" id="ac-ps-3" data-kw="proposal generator discovery call crm case studies pricing template pandadoc google docs word hubspot salesforce fireflies">
						<div class="aia-card__head"><span class="aia-card__name">Proposal Generator</span></div>
						<p class="aia-card__desc">Drafts a customized client proposal from a discovery call transcript and CRM data, pulling in relevant case studies, service descriptions, and pricing templates automatically.</p>
						<div class="aia-card__systems"><span class="aia-chip">HubSpot</span><span class="aia-chip">Salesforce</span><span class="aia-chip">Fireflies.ai</span><span class="aia-chip">PandaDoc</span><span class="aia-chip">Google Docs</span></div>
					</div>
					<div class="aia-card" id="ac-ps-4" data-kw="client deliverable tracker overdue engagement leads deliverables asana monday clickup notion jira slack gmail">
						<div class="aia-card__head"><span class="aia-card__name">Client Deliverable Tracker</span></div>
						<p class="aia-card__desc">Monitors open deliverables across active engagements and surfaces overdue items to engagement leads before they become client issues.</p>
						<div class="aia-card__systems"><span class="aia-chip">Asana</span><span class="aia-chip">Monday.com</span><span class="aia-chip">ClickUp</span><span class="aia-chip">Notion</span><span class="aia-chip">Jira</span><span class="aia-chip">Slack</span></div>
					</div>
					<div class="aia-card" id="ac-ps-5" data-kw="knowledge base builder methodologies frameworks lessons learned institutional knowledge notion confluence google drive guru fireflies">
						<div class="aia-card__head"><span class="aia-card__name">Knowledge Base Builder</span></div>
						<p class="aia-card__desc">Captures methodologies, frameworks, and lessons learned from completed engagements and indexes them into a searchable internal knowledge base.</p>
						<div class="aia-card__systems"><span class="aia-chip">Notion</span><span class="aia-chip">Confluence</span><span class="aia-chip">Google Drive</span><span class="aia-chip">SharePoint</span><span class="aia-chip">Fireflies.ai</span><span class="aia-chip">Guru</span></div>
					</div>
				</div>
			</div>

			<!-- Retail -->
			<div class="aia-group" data-group="ind-retail">
				<div class="aia-group__header" onclick="aiaToggle(this)">
					<div class="aia-group__icon" style="background:rgba(70,44,237,0.08);color:#462CED">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
					</div>
					<div class="aia-group__meta">
						<span class="aia-group__title">Retail</span>
						<span class="aia-group__subtitle">Retail Owners &amp; Operations Leaders</span>
					</div>
					<span class="aia-group__badge">5</span>
					<div class="aia-group__toggle"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2,4 6,8 10,4"/></svg></div>
				</div>
				<div class="aia-cards">
					<div class="aia-card" id="ac-retail-1" data-kw="inventory reorder automation stockout purchase orders stock levels shopify square lightspeed cin7 fishbowl">
						<div class="aia-card__head"><span class="aia-card__name">Inventory Reorder Automation</span></div>
						<p class="aia-card__desc">Monitors stock levels in real time and automatically generates purchase orders when products fall below reorder thresholds.</p>
						<div class="aia-card__systems"><span class="aia-chip">Shopify</span><span class="aia-chip">Square</span><span class="aia-chip">Lightspeed</span><span class="aia-chip">QuickBooks</span><span class="aia-chip">Cin7</span><span class="aia-chip">Fishbowl</span></div>
					</div>
					<div class="aia-card" id="ac-retail-2" data-kw="customer win-back campaigns lapsed customers re-engagement email sms shopify klaviyo mailchimp attentive postscript">
						<div class="aia-card__head"><span class="aia-card__name">Customer Win-Back Campaigns</span></div>
						<p class="aia-card__desc">Identifies lapsed customers based on purchase recency and automatically triggers personalized re-engagement sequences across email and SMS.</p>
						<div class="aia-card__systems"><span class="aia-chip">Shopify</span><span class="aia-chip">Klaviyo</span><span class="aia-chip">Mailchimp</span><span class="aia-chip">ActiveCampaign</span><span class="aia-chip">HubSpot</span><span class="aia-chip">Attentive</span></div>
					</div>
					<div class="aia-card" id="ac-retail-3" data-kw="review reputation monitor google yelp social negative sentiment response podium birdeye yotpo slack">
						<div class="aia-card__head"><span class="aia-card__name">Review &amp; Reputation Monitor</span></div>
						<p class="aia-card__desc">Aggregates customer reviews across Google, Yelp, and social channels, flags negative sentiment, and drafts response recommendations.</p>
						<div class="aia-card__systems"><span class="aia-chip">Google Business Profile</span><span class="aia-chip">Yelp</span><span class="aia-chip">Podium</span><span class="aia-chip">Birdeye</span><span class="aia-chip">Yotpo</span></div>
					</div>
					<div class="aia-card" id="ac-retail-4" data-kw="daily sales digest pos ecommerce revenue sku returns variance shopify square lightspeed clover google sheets slack">
						<div class="aia-card__head"><span class="aia-card__name">Daily Sales Digest</span></div>
						<p class="aia-card__desc">Pulls POS and e-commerce data each day and delivers a plain-language performance summary covering revenue, top SKUs, returns, and variance from target.</p>
						<div class="aia-card__systems"><span class="aia-chip">Shopify</span><span class="aia-chip">Square</span><span class="aia-chip">Lightspeed</span><span class="aia-chip">Clover</span><span class="aia-chip">QuickBooks</span><span class="aia-chip">Slack</span></div>
					</div>
					<div class="aia-card" id="ac-retail-5" data-kw="vendor po tracker purchase orders delivery delayed discrepancies quickbooks netsuite cin7 lightspeed shopify gmail">
						<div class="aia-card__head"><span class="aia-card__name">Vendor &amp; PO Tracker</span></div>
						<p class="aia-card__desc">Tracks open purchase orders against expected delivery dates, sends automated follow-ups to vendors when shipments are delayed, and flags quantity discrepancies.</p>
						<div class="aia-card__systems"><span class="aia-chip">QuickBooks</span><span class="aia-chip">NetSuite</span><span class="aia-chip">Cin7</span><span class="aia-chip">Lightspeed</span><span class="aia-chip">Shopify</span><span class="aia-chip">Gmail</span></div>
					</div>
				</div>
			</div>

			<!-- Trades / Field Service -->
			<div class="aia-group" data-group="ind-trades">
				<div class="aia-group__header" onclick="aiaToggle(this)">
					<div class="aia-group__icon" style="background:rgba(70,44,237,0.08);color:#462CED">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
					</div>
					<div class="aia-group__meta">
						<span class="aia-group__title">Trades / Field Service</span>
						<span class="aia-group__subtitle">HVAC, Plumbing, Electrical &amp; Field Service</span>
					</div>
					<span class="aia-group__badge">5</span>
					<div class="aia-group__toggle"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2,4 6,8 10,4"/></svg></div>
				</div>
				<div class="aia-cards">
					<div class="aia-card" id="ac-trades-1" data-kw="estimate follow-up sequencer customers estimate no response reminders availability expiration servicetitan jobber housecall fieldedge twilio sms">
						<div class="aia-card__head"><span class="aia-card__name">Estimate Follow-Up Sequencer</span></div>
						<p class="aia-card__desc">Automatically sends timed follow-up messages to customers who received an estimate but haven't responded, including reminders, availability windows, and expiration notices.</p>
						<div class="aia-card__systems"><span class="aia-chip">ServiceTitan</span><span class="aia-chip">Jobber</span><span class="aia-chip">Housecall Pro</span><span class="aia-chip">FieldEdge</span><span class="aia-chip">Twilio SMS</span></div>
					</div>
					<div class="aia-card" id="ac-trades-2" data-kw="job completion invoice trigger complete invoice customer satisfaction survey review request servicetitan jobber quickbooks stripe">
						<div class="aia-card__head"><span class="aia-card__name">Job Completion &amp; Invoice Trigger</span></div>
						<p class="aia-card__desc">Detects when a job is marked complete and immediately triggers invoice generation, customer satisfaction survey delivery, and review request messaging.</p>
						<div class="aia-card__systems"><span class="aia-chip">ServiceTitan</span><span class="aia-chip">Jobber</span><span class="aia-chip">Housecall Pro</span><span class="aia-chip">QuickBooks</span><span class="aia-chip">Stripe</span><span class="aia-chip">Twilio SMS</span></div>
					</div>
					<div class="aia-card" id="ac-trades-3" data-kw="maintenance reminder engine service history seasonal interval recurring revenue servicetitan jobber housecall mailchimp twilio">
						<div class="aia-card__head"><span class="aia-card__name">Maintenance Reminder Engine</span></div>
						<p class="aia-card__desc">Tracks equipment service history and automatically sends seasonal or interval-based maintenance reminders, converting one-time jobs into recurring revenue.</p>
						<div class="aia-card__systems"><span class="aia-chip">ServiceTitan</span><span class="aia-chip">Jobber</span><span class="aia-chip">Housecall Pro</span><span class="aia-chip">Mailchimp</span><span class="aia-chip">Twilio SMS</span></div>
					</div>
					<div class="aia-card" id="ac-trades-4" data-kw="technician schedule optimizer gaps cancellations travel inefficiencies rebalancing servicetitan jobber google maps slack">
						<div class="aia-card__head"><span class="aia-card__name">Technician Schedule Optimizer</span></div>
						<p class="aia-card__desc">Monitors daily job schedules for gaps, cancellations, or travel inefficiencies and surfaces rebalancing recommendations to keep technicians productive.</p>
						<div class="aia-card__systems"><span class="aia-chip">ServiceTitan</span><span class="aia-chip">Jobber</span><span class="aia-chip">Housecall Pro</span><span class="aia-chip">Google Maps API</span><span class="aia-chip">Slack</span></div>
					</div>
					<div class="aia-card" id="ac-trades-5" data-kw="review request automation google facebook review completed job low satisfaction servicetitan jobber podium birdeye twilio">
						<div class="aia-card__head"><span class="aia-card__name">Review Request Automation</span></div>
						<p class="aia-card__desc">Sends a personalized Google or Facebook review request to every customer within hours of a completed job, automatically pausing if a low satisfaction score is detected first.</p>
						<div class="aia-card__systems"><span class="aia-chip">ServiceTitan</span><span class="aia-chip">Jobber</span><span class="aia-chip">Google Business Profile</span><span class="aia-chip">Podium</span><span class="aia-chip">Twilio SMS</span></div>
					</div>
				</div>
			</div>

			<!-- Marketing Agencies -->
			<div class="aia-group" data-group="ind-agency">
				<div class="aia-group__header" onclick="aiaToggle(this)">
					<div class="aia-group__icon" style="background:rgba(70,44,237,0.08);color:#462CED">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
					</div>
					<div class="aia-group__meta">
						<span class="aia-group__title">Marketing Agencies</span>
						<span class="aia-group__subtitle">Agency Owners &amp; Client Services Leaders</span>
					</div>
					<span class="aia-group__badge">5</span>
					<div class="aia-group__toggle"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2,4 6,8 10,4"/></svg></div>
				</div>
				<div class="aia-cards">
					<div class="aia-card" id="ac-agency-1" data-kw="client onboarding orchestrator contract signed intake kickoff asset collection team briefing hubspot docusign asana slack">
						<div class="aia-card__head"><span class="aia-card__name">Client Onboarding Orchestrator</span></div>
						<p class="aia-card__desc">Triggers a structured onboarding workflow the moment a new client contract is signed, covering intake form delivery, kickoff scheduling, asset collection, and team briefing.</p>
						<div class="aia-card__systems"><span class="aia-chip">HubSpot</span><span class="aia-chip">Salesforce</span><span class="aia-chip">DocuSign</span><span class="aia-chip">Asana</span><span class="aia-chip">Monday.com</span><span class="aia-chip">Slack</span></div>
					</div>
					<div class="aia-card" id="ac-agency-2" data-kw="campaign reporting packager cross-channel branded report narrative annotated google analytics google ads meta hubspot agencyanalytics">
						<div class="aia-card__head"><span class="aia-card__name">Campaign Reporting Packager</span></div>
						<p class="aia-card__desc">Pulls cross-channel performance data and assembles it into a client-ready, branded, narrative-annotated report delivered automatically without manual exports.</p>
						<div class="aia-card__systems"><span class="aia-chip">Google Analytics</span><span class="aia-chip">Google Ads</span><span class="aia-chip">Meta Ads</span><span class="aia-chip">HubSpot</span><span class="aia-chip">AgencyAnalytics</span><span class="aia-chip">Google Slides</span></div>
					</div>
					<div class="aia-card" id="ac-agency-3" data-kw="scope creep monitor hours deliverables budget overrun account managers harvest toggl asana monday clickup hubspot slack">
						<div class="aia-card__head"><span class="aia-card__name">Scope Creep Monitor</span></div>
						<p class="aia-card__desc">Tracks hours and deliverables logged against contracted scope, alerting account managers when an engagement is approaching budget overrun.</p>
						<div class="aia-card__systems"><span class="aia-chip">Harvest</span><span class="aia-chip">Toggl Track</span><span class="aia-chip">Asana</span><span class="aia-chip">Monday.com</span><span class="aia-chip">HubSpot</span><span class="aia-chip">Slack</span></div>
					</div>
					<div class="aia-card" id="ac-agency-4" data-kw="content calendar automation draft calendar campaign brief post concepts channel review notion airtable asana buffer hootsuite">
						<div class="aia-card__head"><span class="aia-card__name">Content Calendar Automation</span></div>
						<p class="aia-card__desc">Generates a draft content calendar from a client's campaign brief, pre-populates it with post concepts by channel, and routes it for internal review before client presentation.</p>
						<div class="aia-card__systems"><span class="aia-chip">Notion</span><span class="aia-chip">Airtable</span><span class="aia-chip">Asana</span><span class="aia-chip">Buffer</span><span class="aia-chip">Hootsuite</span><span class="aia-chip">Slack</span></div>
					</div>
					<div class="aia-card" id="ac-agency-5" data-kw="client health churn monitor engagement nps budget utilization contract proximity warning hubspot typeform harvest slack">
						<div class="aia-card__head"><span class="aia-card__name">Client Health &amp; Churn Monitor</span></div>
						<p class="aia-card__desc">Scores each client account by engagement responsiveness, NPS trends, budget utilization, and contract proximity, alerting account leads when a relationship shows early warning signs.</p>
						<div class="aia-card__systems"><span class="aia-chip">HubSpot</span><span class="aia-chip">Salesforce</span><span class="aia-chip">Typeform</span><span class="aia-chip">SurveyMonkey</span><span class="aia-chip">Harvest</span><span class="aia-chip">Slack</span></div>
					</div>
				</div>
			</div>

			<!-- RIA / Wealth Management -->
			<div class="aia-group" data-group="ind-ria">
				<div class="aia-group__header" onclick="aiaToggle(this)">
					<div class="aia-group__icon" style="background:rgba(70,44,237,0.08);color:#462CED">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
					</div>
					<div class="aia-group__meta">
						<span class="aia-group__title">RIA / Wealth Management</span>
						<span class="aia-group__subtitle">Registered Investment Advisors &amp; Wealth Managers</span>
					</div>
					<span class="aia-group__badge">5</span>
					<div class="aia-group__toggle"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2,4 6,8 10,4"/></svg></div>
				</div>
				<div class="aia-cards">
					<div class="aia-card" id="ac-ria-1" data-kw="client review meeting prep portfolio performance life events action items market context salesforce redtail wealthbox orion black diamond fathom">
						<div class="aia-card__head"><span class="aia-card__name">Client Review Meeting Prep</span></div>
						<p class="aia-card__desc">Automatically compiles a personalized pre-meeting briefing pulling portfolio performance, recent life events, open action items, and market context relevant to their holdings.</p>
						<div class="aia-card__systems"><span class="aia-chip">Salesforce FSC</span><span class="aia-chip">Redtail CRM</span><span class="aia-chip">Wealthbox</span><span class="aia-chip">Orion</span><span class="aia-chip">Black Diamond</span><span class="aia-chip">Fathom</span></div>
					</div>
					<div class="aia-card" id="ac-ria-2" data-kw="compliance document monitor adv forms client agreements regulatory disclosures deadlines expiration salesforce redtail docusign sharepoint">
						<div class="aia-card__head"><span class="aia-card__name">Compliance Document Monitor</span></div>
						<p class="aia-card__desc">Tracks expiration dates and filing deadlines for ADV forms, client agreements, and regulatory disclosures, sending automated alerts with sufficient lead time to act.</p>
						<div class="aia-card__systems"><span class="aia-chip">Salesforce FSC</span><span class="aia-chip">Redtail CRM</span><span class="aia-chip">Wealthbox</span><span class="aia-chip">DocuSign</span><span class="aia-chip">SharePoint</span></div>
					</div>
					<div class="aia-card" id="ac-ria-3" data-kw="prospect nurture sequencer wealth segment goals referral source warm leads salesforce redtail mailchimp activecampaign hubspot">
						<div class="aia-card__head"><span class="aia-card__name">Prospect Nurture Sequencer</span></div>
						<p class="aia-card__desc">Enrolls qualified prospects into personalized multi-touch nurture sequences based on wealth segment, stated goals, and referral source, ensuring no warm lead goes cold.</p>
						<div class="aia-card__systems"><span class="aia-chip">Salesforce FSC</span><span class="aia-chip">Redtail CRM</span><span class="aia-chip">Wealthbox</span><span class="aia-chip">Mailchimp</span><span class="aia-chip">HubSpot</span></div>
					</div>
					<div class="aia-card" id="ac-ria-4" data-kw="client life event monitor job change marriage inheritance retirement crm email google alerts salesforce redtail wealthbox">
						<div class="aia-card__head"><span class="aia-card__name">Client Life Event Monitor</span></div>
						<p class="aia-card__desc">Monitors CRM notes, email threads, and public signals for life events and alerts advisors to proactively reach out with relevant guidance.</p>
						<div class="aia-card__systems"><span class="aia-chip">Salesforce FSC</span><span class="aia-chip">Redtail CRM</span><span class="aia-chip">Wealthbox</span><span class="aia-chip">Gmail</span><span class="aia-chip">Google Alerts</span></div>
					</div>
					<div class="aia-card" id="ac-ria-5" data-kw="meeting notes crm logger action items disclosures follow-up commitments transcripts salesforce redtail fathom fireflies zoom teams">
						<div class="aia-card__head"><span class="aia-card__name">Meeting Notes to CRM Logger</span></div>
						<p class="aia-card__desc">Captures action items, client disclosures, and follow-up commitments from advisor meeting transcripts and automatically logs structured notes into the CRM.</p>
						<div class="aia-card__systems"><span class="aia-chip">Salesforce FSC</span><span class="aia-chip">Redtail CRM</span><span class="aia-chip">Wealthbox</span><span class="aia-chip">Fathom</span><span class="aia-chip">Fireflies.ai</span><span class="aia-chip">Zoom</span></div>
					</div>
				</div>
			</div>

			<!-- Engineering & Contractors -->
			<div class="aia-group" data-group="ind-construction">
				<div class="aia-group__header" onclick="aiaToggle(this)">
					<div class="aia-group__icon" style="background:rgba(70,44,237,0.08);color:#462CED">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="3 11 22 2 13 21 11 13 3 11"/></svg>
					</div>
					<div class="aia-group__meta">
						<span class="aia-group__title">Engineering &amp; Contractors</span>
						<span class="aia-group__subtitle">Engineering Firms &amp; General Contractors</span>
					</div>
					<span class="aia-group__badge">5</span>
					<div class="aia-group__toggle"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2,4 6,8 10,4"/></svg></div>
				</div>
				<div class="aia-cards">
					<div class="aia-card" id="ac-const-1" data-kw="bid rfp response packager project brief past projects team bios certifications scope procore buildertrend autodesk docusign">
						<div class="aia-card__head"><span class="aia-card__name">Bid &amp; RFP Response Packager</span></div>
						<p class="aia-card__desc">Assembles a structured bid response from a project brief, pulling in relevant past project profiles, team bios, compliance certifications, and boilerplate scope language.</p>
						<div class="aia-card__systems"><span class="aia-chip">Procore</span><span class="aia-chip">Buildertrend</span><span class="aia-chip">Autodesk ACC</span><span class="aia-chip">Google Drive</span><span class="aia-chip">DocuSign</span></div>
					</div>
					<div class="aia-card" id="ac-const-2" data-kw="subcontractor compliance tracker insurance certificates license expiration lien waivers non-compliant procore buildertrend docusign">
						<div class="aia-card__head"><span class="aia-card__name">Subcontractor Compliance Tracker</span></div>
						<p class="aia-card__desc">Monitors insurance certificates, license expiration dates, and lien waiver submissions across your subcontractor roster, flagging non-compliant subs before work begins.</p>
						<div class="aia-card__systems"><span class="aia-chip">Procore</span><span class="aia-chip">Buildertrend</span><span class="aia-chip">Autodesk ACC</span><span class="aia-chip">DocuSign</span><span class="aia-chip">Gmail</span></div>
					</div>
					<div class="aia-card" id="ac-const-3" data-kw="daily field report summarizer field logs weather crew counts issue flags project status procore buildertrend plangrid fieldwire slack">
						<div class="aia-card__head"><span class="aia-card__name">Daily Field Report Summarizer</span></div>
						<p class="aia-card__desc">Aggregates daily field logs, weather notes, crew counts, and issue flags and delivers a consolidated project status summary to PMs and stakeholders.</p>
						<div class="aia-card__systems"><span class="aia-chip">Procore</span><span class="aia-chip">Buildertrend</span><span class="aia-chip">PlanGrid</span><span class="aia-chip">Fieldwire</span><span class="aia-chip">Slack</span></div>
					</div>
					<div class="aia-card" id="ac-const-4" data-kw="rfi submittal status monitor response deadlines overdue project managers schedule slippage procore autodesk bluebeam slack">
						<div class="aia-card__head"><span class="aia-card__name">RFI &amp; Submittal Status Monitor</span></div>
						<p class="aia-card__desc">Tracks open RFIs and submittals against response deadlines, sends automated reminders to responsible parties, and escalates overdue items to prevent schedule slippage.</p>
						<div class="aia-card__systems"><span class="aia-chip">Procore</span><span class="aia-chip">Autodesk ACC</span><span class="aia-chip">Buildertrend</span><span class="aia-chip">Bluebeam</span><span class="aia-chip">Slack</span></div>
					</div>
					<div class="aia-card" id="ac-const-5" data-kw="project budget variance alerter actual costs budget baseline overrun line items procore buildertrend sage quickbooks viewpoint slack">
						<div class="aia-card__head"><span class="aia-card__name">Project Budget Variance Alerter</span></div>
						<p class="aia-card__desc">Compares actual costs against budget baselines in real time and sends proactive alerts when line items approach or breach threshold, giving PMs time to course-correct.</p>
						<div class="aia-card__systems"><span class="aia-chip">Procore</span><span class="aia-chip">Buildertrend</span><span class="aia-chip">Sage 300</span><span class="aia-chip">QuickBooks</span><span class="aia-chip">Slack</span></div>
					</div>
				</div>
			</div>

			<!-- Legal (Industry) -->
			<div class="aia-group" data-group="ind-legal">
				<div class="aia-group__header" onclick="aiaToggle(this)">
					<div class="aia-group__icon" style="background:rgba(70,44,237,0.08);color:#462CED">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
					</div>
					<div class="aia-group__meta">
						<span class="aia-group__title">Legal</span>
						<span class="aia-group__subtitle">Law Firms &amp; In-House Legal Teams</span>
					</div>
					<span class="aia-group__badge">5</span>
					<div class="aia-group__toggle"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2,4 6,8 10,4"/></svg></div>
				</div>
				<div class="aia-cards">
					<div class="aia-card" id="ac-legal-1" data-kw="matter intake conflict check client information practice area clio mycase practicepanther filevine netdocuments salesforce gmail">
						<div class="aia-card__head"><span class="aia-card__name">Matter Intake &amp; Conflict Check</span></div>
						<p class="aia-card__desc">Automates the new matter intake process, collecting client information, triggering a conflict check, and routing the matter to the right attorney based on practice area.</p>
						<div class="aia-card__systems"><span class="aia-chip">Clio</span><span class="aia-chip">MyCase</span><span class="aia-chip">PracticePanther</span><span class="aia-chip">Filevine</span><span class="aia-chip">Salesforce</span></div>
					</div>
					<div class="aia-card" id="ac-legal-2" data-kw="deadline docket monitor court deadlines statute of limitations filing windows tiered alerts clio mycase filevine courtalert google calendar slack">
						<div class="aia-card__head"><span class="aia-card__name">Deadline &amp; Docket Monitor</span></div>
						<p class="aia-card__desc">Tracks court deadlines, statute of limitations dates, and filing windows across all active matters, sending tiered alerts at defined intervals before each deadline.</p>
						<div class="aia-card__systems"><span class="aia-chip">Clio</span><span class="aia-chip">MyCase</span><span class="aia-chip">Filevine</span><span class="aia-chip">CourtAlert</span><span class="aia-chip">Google Calendar</span><span class="aia-chip">Slack</span></div>
					</div>
					<div class="aia-card" id="ac-legal-3" data-kw="client status update generator matter status docket billing entries crm notes clio mycase filevine gmail fathom fireflies">
						<div class="aia-card__head"><span class="aia-card__name">Client Status Update Generator</span></div>
						<p class="aia-card__desc">Drafts a plain-language matter status update for each active client based on recent docket activity, billing entries, and CRM notes.</p>
						<div class="aia-card__systems"><span class="aia-chip">Clio</span><span class="aia-chip">MyCase</span><span class="aia-chip">Filevine</span><span class="aia-chip">Gmail</span><span class="aia-chip">Fathom</span><span class="aia-chip">Fireflies.ai</span></div>
					</div>
					<div class="aia-card" id="ac-legal-4" data-kw="contract review summarizer issue summary clause category non-standard terms risk areas netdocuments imanage clio google drive docusign">
						<div class="aia-card__head"><span class="aia-card__name">Contract Review Summarizer</span></div>
						<p class="aia-card__desc">Reads incoming contracts and produces a structured issue summary organized by clause category, flagging non-standard terms, missing provisions, and key risk areas.</p>
						<div class="aia-card__systems"><span class="aia-chip">NetDocuments</span><span class="aia-chip">iManage</span><span class="aia-chip">Clio</span><span class="aia-chip">Google Drive</span><span class="aia-chip">DocuSign</span></div>
					</div>
					<div class="aia-card" id="ac-legal-5" data-kw="billing wip digest unbilled time billing realization outstanding ar revenue leakage clio mycase timesolv bill4time quickbooks slack">
						<div class="aia-card__head"><span class="aia-card__name">Billing &amp; WIP Digest</span></div>
						<p class="aia-card__desc">Generates a weekly work-in-progress report for each attorney showing unbilled time, billing realization rates, and outstanding AR by client, so revenue leakage gets caught before month end.</p>
						<div class="aia-card__systems"><span class="aia-chip">Clio</span><span class="aia-chip">MyCase</span><span class="aia-chip">TimeSolv</span><span class="aia-chip">Bill4Time</span><span class="aia-chip">QuickBooks</span><span class="aia-chip">Slack</span></div>
					</div>
				</div>
			</div>

		</div><!-- /industries -->

		<!-- No results -->
		<div class="aia-no-results" id="aiaNoResults" style="display:none">
			<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
			<p>No accelerators matched your search.</p>
			<button onclick="aiaClear()" class="button button--secondary">Clear search</button>
		</div>

	</div>
</section>

<!-- ============================================================
     CTA
============================================================ -->
<section class="section--cta-dark section--final-cta" id="get-started">
	<div class="container">
		<div class="cta-content">
			<h2>See an AI Accelerator in Action</h2>
			<p>Pick a time and we'll walk you through a live demo tailored to your team and industry.</p>
			<div class="meetings-iframe-container" data-src="https://meetings.hubspot.com/sundaresh?embed=true"></div>
			<script type="text/javascript" src="https://static.hsappstatic.net/MeetingsEmbed/ex/MeetingsEmbedCode.js"></script>
		</div>
	</div>
</section>

</main>

<!-- ============================================================
     STYLES
============================================================ -->
<style>
/* ---------- Hero ---------- */
.aia-hero { padding-bottom: 0; }
.aia-hero__inner { max-width: 780px; margin: 0 auto; text-align: center; }

/* ---------- Search ---------- */
.aia-search-wrap { max-width: 620px; margin: 2rem auto 0; }
.aia-search {
	display: flex; align-items: center;
	background: #ffffff;
	border: none;
	border-radius: 14px;
	padding: 6px 6px 6px 18px;
	box-shadow: 0 4px 24px rgba(0,0,0,0.18);
}
.aia-search__icon { width:17px; height:17px; stroke:#9ca3af; flex-shrink:0; }
.aia-search__input {
	flex:1; background:none; border:none; outline:none;
	color:#111827; font-family:var(--font-body); font-size:15px; padding:10px 12px;
}
.aia-search__input::placeholder { color:#9ca3af; }
.aia-search__spinner {
	display:none; width:18px; height:18px; border:2px solid #e5e7eb;
	border-top-color:#462CED; border-radius:50%; animation:aia-spin 0.7s linear infinite; flex-shrink:0; margin-right:8px;
}
.aia-search__spinner.active { display:block; }
@keyframes aia-spin { to { transform:rotate(360deg); } }
.aia-search__clear {
	display:none; background:#f3f4f6; border:none; cursor:pointer;
	color:#6b7280; padding:8px 14px; border-radius:10px;
	font-size:13px; font-weight:500; transition:var(--transition); font-family:var(--font-body);
}
.aia-search__clear:hover { background:#e5e7eb; color:#374151; }
.aia-search__clear.visible { display:block; }
.aia-search__hint {
	font-size:12px; color:rgba(255,255,255,0.45); margin:10px 0 0; text-align:center;
}

/* ---------- Tabs ---------- */
.aia-tabs {
	display:flex; justify-content:center; gap:8px; margin-top:32px; padding-bottom:4px;
	overflow-x:auto; scrollbar-width:none;
}
.aia-tabs::-webkit-scrollbar { display:none; }
.aia-tab {
	background: rgba(255,255,255,0.08);
	border: 1px solid rgba(255,255,255,0.15);
	cursor:pointer; font-family:var(--font-body);
	font-size:14px; font-weight:500; color:rgba(255,255,255,0.6);
	padding:10px 20px; border-radius:50px;
	white-space:nowrap; transition:var(--transition); display:flex; align-items:center; gap:8px;
}
.aia-tab:hover {
	background: rgba(255,255,255,0.14);
	color: rgba(255,255,255,0.9);
	border-color: rgba(255,255,255,0.3);
}
.aia-tab--active {
	background: #ffffff;
	color: #111827;
	border-color: #ffffff;
	font-weight: 600;
}
.aia-tab__count {
	background:rgba(0,0,0,0.08); color:inherit;
	font-size:11px; padding:1px 7px; border-radius:10px; font-weight:600;
}
.aia-tab--active .aia-tab__count { background:rgba(70,44,237,0.1); color:#462CED; }

/* ---------- Catalog section ---------- */
.aia-catalog { padding-top:2.5rem; }

/* ---------- NLP Banner ---------- */
.aia-nlp-banner {
	display:flex; align-items:center; gap:10px;
	background:rgba(70,44,237,0.06); border:1px solid rgba(70,44,237,0.15);
	border-radius:var(--radius-lg); padding:12px 18px; margin-bottom:1.5rem;
	font-size:14px; color:var(--text-light);
}
.aia-nlp-banner svg { width:16px; height:16px; stroke:var(--accent); flex-shrink:0; }
.aia-nlp-banner__clear {
	margin-left:auto; background:none; border:none; cursor:pointer;
	color:var(--accent); font-size:13px; font-weight:600; font-family:var(--font-body);
	white-space:nowrap; padding:0; transition:var(--transition);
}
.aia-nlp-banner__clear:hover { color:#5538f0; }

/* ---------- Result bar ---------- */
.aia-result-bar {
	display:flex; align-items:center; justify-content:space-between;
	margin-bottom:1.75rem; padding-bottom:1rem; border-bottom:1px solid var(--border);
}
.aia-result-bar__heading { font-size:1.2rem; font-weight:700; margin:0; }
.aia-result-bar__count { font-size:0.8rem; font-weight:600; }

/* ---------- Group ---------- */
.aia-group { margin-bottom:2rem; }
.aia-group__header {
	display:flex; align-items:center; gap:14px;
	padding:14px 16px; background:var(--border-light);
	border:1px solid var(--border); border-radius:var(--radius-lg);
	cursor:pointer; user-select:none; transition:var(--transition);
}
.aia-group__header:hover { border-color:var(--accent); background:#f5f4ff; }
.aia-group__icon {
	width:38px; height:38px; border-radius:var(--radius-md);
	display:flex; align-items:center; justify-content:center; flex-shrink:0;
}
.aia-group__icon svg { width:18px; height:18px; }
.aia-group__meta { display:flex; flex-direction:column; gap:2px; flex:1; min-width:0; }
.aia-group__title { font-size:15px; font-weight:700; color:var(--text); line-height:1.2; }
.aia-group__subtitle { font-size:12px; color:var(--text-light); }
.aia-group__badge {
	font-size:11px; font-weight:600; color:var(--text-light);
	background:#fff; border:1px solid var(--border); padding:2px 10px; border-radius:10px; flex-shrink:0;
}
.aia-group__toggle {
	width:26px; height:26px; border-radius:var(--radius-sm); background:#fff; border:1px solid var(--border);
	display:flex; align-items:center; justify-content:center; flex-shrink:0; transition:var(--transition);
}
.aia-group__toggle svg { width:12px; height:12px; transition:transform 0.2s; }
.aia-group.collapsed .aia-group__toggle svg { transform:rotate(-90deg); }

/* ---------- Cards grid ---------- */
.aia-cards {
	display:grid; grid-template-columns:repeat(auto-fill, minmax(290px, 1fr)); gap:14px;
	padding:16px 0 0;
}
.aia-group.collapsed .aia-cards { display:none; }

.aia-card {
	background:#fff; border:1px solid var(--border); border-radius:var(--radius-lg);
	padding:18px 20px; display:flex; flex-direction:column; gap:10px;
	transition:var(--transition);
}
.aia-card:hover { border-color:var(--accent); box-shadow:var(--shadow-lg); transform:translateY(-2px); }
.aia-card.aia-hidden { display:none !important; }
.aia-card.aia-highlight { border-color:var(--accent); box-shadow:0 0 0 2px rgba(70,44,237,0.15); }
.aia-card.aia-dim { opacity:0.35; }

.aia-card__head { display:flex; align-items:flex-start; justify-content:space-between; gap:8px; }
.aia-card__name { font-size:13.5px; font-weight:700; color:var(--text); line-height:1.3; }
.aia-card__desc { font-size:12.5px; color:var(--text-light); line-height:1.6; margin:0; flex:1; }
.aia-card__systems {
	display:flex; flex-wrap:wrap; gap:5px;
	padding-top:10px; border-top:1px solid var(--border-light); margin-top:auto;
}
.aia-chip {
	font-size:10.5px; background:var(--border-light); border:1px solid var(--border);
	color:var(--text-light); padding:2px 8px; border-radius:var(--radius-sm);
	font-family:var(--font-body); white-space:nowrap;
}

/* ---------- No results ---------- */
.aia-no-results {
	text-align:center; padding:60px 20px; color:var(--text-light);
}
.aia-no-results svg { width:44px; height:44px; margin:0 auto 16px; display:block; stroke:var(--border); }
.aia-no-results p { margin-bottom:1.25rem; }

/* ---------- Responsive ---------- */
@media(max-width:768px){
	.aia-tabs { justify-content:flex-start; }
	.aia-cards { grid-template-columns:1fr; }
	.aia-result-bar { flex-direction:column; align-items:flex-start; gap:8px; }
}
</style>

<!-- ============================================================
     SEARCH LOGIC (NLP via Claude API + keyword fallback)
============================================================ -->
<script>
(function(){

/* ── catalog data ── */
const CARDS = Array.from(document.querySelectorAll('.aia-card'));
const CATALOG_SUMMARY = CARDS.map(c => ({
	id: c.id,
	name: c.querySelector('.aia-card__name').textContent.trim(),
	desc: c.querySelector('.aia-card__desc').textContent.trim(),
	kw:  c.dataset.kw || ''
}));

/* ── state ── */
let activeTab = 'departments';
let nlpMode   = false;
let nlpIds    = [];
let debounceT = null;

/* ── tab switch ── */
window.aiaTab = function(tab, btn){
	activeTab = tab;
	document.querySelectorAll('.aia-tab').forEach(b => {
		b.classList.remove('aia-tab--active');
		b.setAttribute('aria-selected','false');
	});
	btn.classList.add('aia-tab--active');
	btn.setAttribute('aria-selected','true');
	document.querySelectorAll('.aia-group-wrap').forEach(w => {
		w.style.display = (tab === 'all' || w.dataset.tabGroup === tab) ? '' : 'none';
	});
	const labels = { departments:'Department Accelerators', industries:'Industry Accelerators', all:'All Accelerators' };
	document.getElementById('aiaHeading').textContent = labels[tab];
	applySearch(document.getElementById('aiaSearchInput').value.trim());
};

/* ── collapse/expand ── */
window.aiaToggle = function(header){
	header.closest('.aia-group').classList.toggle('collapsed');
};

/* ── clear ── */
window.aiaClear = function(){
	document.getElementById('aiaSearchInput').value = '';
	document.getElementById('aiaClearBtn').classList.remove('visible');
	document.getElementById('aiaSearchHint').textContent = 'AI-powered search — describe your problem in plain English';
	document.getElementById('aiaNlpBanner').style.display = 'none';
	nlpMode = false; nlpIds = [];
	applySearch('');
};

/* ── input handler ── */
document.getElementById('aiaSearchInput').addEventListener('input', function(){
	const q = this.value.trim();
	document.getElementById('aiaClearBtn').classList.toggle('visible', q.length > 0);
	clearTimeout(debounceT);
	if(!q){ aiaClear(); return; }
	if(q.length < 5 || q.split(' ').length <= 2){
		nlpMode = false; nlpIds = [];
		document.getElementById('aiaNlpBanner').style.display = 'none';
		applySearch(q);
	} else {
		debounceT = setTimeout(() => runNLP(q), 600);
		applySearch(q);
	}
});

/* ── keyword search ── */
function applySearch(q){
	const ql = q.toLowerCase();
	let visible = 0;
	document.querySelectorAll('.aia-group-wrap').forEach(wrap => {
		const inTab = activeTab === 'all' || wrap.dataset.tabGroup === activeTab;
		if(!inTab) return;
		wrap.querySelectorAll('.aia-group').forEach(group => {
			let gv = 0;
			group.querySelectorAll('.aia-card').forEach(card => {
				let show;
				if(nlpMode){
					show = nlpIds.includes(card.id);
					card.classList.toggle('aia-highlight', show);
					card.classList.toggle('aia-dim', !show);
					card.classList.remove('aia-hidden');
				} else {
					const txt = ((card.dataset.kw||'') + ' ' + card.textContent).toLowerCase();
					show = !ql || txt.includes(ql);
					card.classList.toggle('aia-hidden', !show);
					card.classList.remove('aia-highlight','aia-dim');
				}
				if(show) gv++;
			});
			group.style.display = (!ql && !nlpMode) || gv > 0 ? '' : 'none';
			if(ql && gv > 0) group.classList.remove('collapsed');
			visible += gv;
		});
	});
	if(!ql && !nlpMode){
		visible = activeTab === 'all'
			? CARDS.length
			: document.querySelectorAll(`.aia-group-wrap[data-tab-group="${activeTab}"] .aia-card`).length;
		document.querySelectorAll('.aia-group').forEach(g => g.style.display = '');
		CARDS.forEach(c => { c.classList.remove('aia-hidden','aia-highlight','aia-dim'); });
	}
	document.getElementById('aiaCount').textContent = visible + ' accelerator' + (visible !== 1 ? 's' : '');
	document.getElementById('aiaNoResults').style.display = visible === 0 ? 'block' : 'none';
}

/* ── NLP via Claude API ── */
async function runNLP(query){
	const spinner = document.getElementById('aiaSpinner');
	spinner.classList.add('active');
	document.getElementById('aiaSearchHint').textContent = 'Searching with AI...';

	const catalogJson = JSON.stringify(CATALOG_SUMMARY.map(c => ({
		id: c.id, name: c.name, desc: c.desc.slice(0,120)
	})));

	const prompt = `You are a search assistant for a catalog of AI automation accelerators.\n\nA user typed this query: "${query}"\n\nHere is the full catalog as JSON:\n${catalogJson}\n\nReturn ONLY a JSON array of matching accelerator IDs (the "id" field), ranked best-match first. Include all accelerators that would genuinely help with the user's problem. Return an empty array if nothing matches. No explanation, no markdown, only the raw JSON array.`;

	try {
		const res = await fetch('https://api.anthropic.com/v1/messages', {
			method:'POST',
			headers:{ 'Content-Type':'application/json' },
			body: JSON.stringify({
				model:'claude-sonnet-4-20250514',
				max_tokens:400,
				messages:[{ role:'user', content:prompt }]
			})
		});
		const data = await res.json();
		const raw = (data.content||[]).filter(b=>b.type==='text').map(b=>b.text).join('');
		const ids = JSON.parse(raw.replace(/```json|```/g,'').trim());
		if(Array.isArray(ids) && ids.length > 0){
			nlpMode = true;
			nlpIds  = ids;
			document.getElementById('aiaNlpBanner').style.display = 'flex';
			document.getElementById('aiaNlpText').textContent =
				`AI found ${ids.length} accelerator${ids.length!==1?'s':''} matching "${query}"`;
			document.getElementById('aiaSearchHint').textContent = 'Showing AI-matched results';
			applySearch(query);
		} else {
			nlpMode = false; nlpIds = [];
			document.getElementById('aiaNlpBanner').style.display = 'none';
			document.getElementById('aiaSearchHint').textContent = 'No AI matches found — showing keyword results';
			applySearch(query);
		}
	} catch(e){
		nlpMode = false; nlpIds = [];
		document.getElementById('aiaNlpBanner').style.display = 'none';
		document.getElementById('aiaSearchHint').textContent = 'AI-powered search — describe your problem in plain English';
		applySearch(query);
	} finally {
		spinner.classList.remove('active');
	}
}

/* ── init counts ── */
(function initCounts(){
	const deptCount = document.querySelectorAll('[data-tab-group="departments"] .aia-card').length;
	const indCount  = document.querySelectorAll('[data-tab-group="industries"] .aia-card').length;
	document.getElementById('tc-departments').textContent = deptCount;
	document.getElementById('tc-industries').textContent  = indCount;
	document.getElementById('tc-all').textContent         = deptCount + indCount;
	document.getElementById('aiaCount').textContent       = deptCount + ' accelerators';
})();

})();
</script>

<?php get_footer(); ?>
