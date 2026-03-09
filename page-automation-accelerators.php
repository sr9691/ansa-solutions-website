<?php
/**
 * Template Name: Automation Accelerators
 * Description: AI Accelerator Catalog — data driven from Google Sheets
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
				An AI Accelerator is a pre-built automation that connects your existing tools, applies AI where it adds leverage, and delivers a useful output. A briefing, an alert, a draft, a report. No manual work required. Browse ready-to-deploy accelerators across every department and industry we serve.
			</p>

			<!-- NLP Search -->
			<div class="aia-search-wrap">
				<div class="aia-search" id="aiaSearchEl">
					<svg class="aia-search__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
					<input
						class="aia-search__input"
						id="aiaSearchInput"
						type="text"
						placeholder="What's slowing your team down?"
						autocomplete="off"
						aria-label="Search accelerators"
					>
					<span class="aia-search__spinner" id="aiaSpinner" aria-hidden="true"></span>
					<button class="aia-search__clear" id="aiaClearBtn" onclick="aiaClear()" aria-label="Clear search">✕</button>
					<button class="aia-search__btn" id="aiaSearchBtn" onclick="aiaRunSearch()" aria-label="Search">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
					</button>
				</div>
				<p class="aia-search__hint" id="aiaSearchHint">AI-powered search — describe your problem in plain English</p>
			</div>

			<!-- Tabs -->
			<div class="aia-tabs" role="tablist" aria-label="Browse accelerators">
				<button class="aia-tab aia-tab--active" data-tab="departments" onclick="aiaTab('departments',this)" role="tab" aria-selected="true">
					By Department <span class="aia-tab__count" id="tc-departments">—</span>
				</button>
				<button class="aia-tab" data-tab="industries" onclick="aiaTab('industries',this)" role="tab" aria-selected="false">
					By Industry <span class="aia-tab__count" id="tc-industries">—</span>
				</button>
				<button class="aia-tab" data-tab="all" onclick="aiaTab('all',this)" role="tab" aria-selected="false">
					All Accelerators <span class="aia-tab__count" id="tc-all">—</span>
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
			<span class="aia-result-bar__count badge badge-light" id="aiaCount">Loading…</span>
		</div>

		<!-- Loading state -->
		<div id="aiaLoading" class="aia-loading">
			<div class="aia-loading__spinner"></div>
			<p>Loading accelerators…</p>
		</div>

		<!-- Error state -->
		<div id="aiaError" class="aia-error" style="display:none">
			<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
			<p id="aiaErrorMsg">Failed to load accelerators.</p>
			<button onclick="loadAccelerators()" class="button button--secondary">Try again</button>
		</div>

		<!-- Dynamic catalog — populated by JS -->
		<div id="aiaCatalog" style="display:none">
			<div class="aia-group-wrap" data-tab-group="departments" id="wrap-departments"></div>
			<div class="aia-group-wrap" data-tab-group="industries"  id="wrap-industries"  style="display:none"></div>
		</div>

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
			<h2>Request a Live Demo</h2>
			<p>Tell us a bit about your team and we'll show you an AI Accelerator built for your workflow.</p>
			<script src="https://js.hsforms.net/forms/embed/50725925.js" defer></script>
			<div class="hs-form-frame" data-region="na1" data-form-id="1a8a8d6f-d8cb-4876-bf15-5df9da9d85ec" data-portal-id="50725925"></div>
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
	padding: 5px 5px 5px 16px;
	box-shadow: 0 4px 24px rgba(0,0,0,0.18);
	gap: 4px;
}
.aia-search__icon { width: 16px; height: 16px; stroke: #9ca3af; flex-shrink: 0; margin-right: 4px; }
.aia-search__input {
	flex: 1; background: none; border: none; outline: none;
	color: #111827; font-family: var(--font-body); font-size: 14px;
	padding: 9px 4px; min-width: 0;
}
.aia-search__input::placeholder { color: #9ca3af; }
.aia-search__spinner {
	display: none; width: 16px; height: 16px; border: 2px solid #e5e7eb;
	border-top-color: #462CED; border-radius: 50%; animation: aia-spin 0.7s linear infinite;
	flex-shrink: 0; margin-right: 4px;
}
.aia-search__spinner.active { display: block; }
@keyframes aia-spin { to { transform: rotate(360deg); } }
.aia-search__clear {
	display: none; background: none; border: none; cursor: pointer;
	color: #9ca3af; padding: 4px 6px;
	font-size: 13px; transition: var(--transition); font-family: var(--font-body); flex-shrink: 0;
}
.aia-search__clear:hover { color: #374151; }
.aia-search__clear.visible { display: block; }
.aia-search__btn {
	background: #462CED; border: none; cursor: pointer;
	color: #fff; padding: 8px 14px; border-radius: 10px;
	display: flex; align-items: center; justify-content: center;
	transition: var(--transition); flex-shrink: 0; line-height: 1;
}
.aia-search__btn svg { width: 18px; height: 18px; stroke: #fff; }
.aia-search__btn:hover { background: #3520c7; }
.aia-search__btn:disabled { opacity: 0.6; cursor: not-allowed; }
.aia-search__hint { font-size: 12px; color: rgba(255,255,255,0.45); margin: 10px 0 0; text-align: center; }

/* ---------- Tabs ---------- */
.aia-tabs {
	display: flex; justify-content: center; gap: 8px; margin-top: 32px; padding-bottom: 4px;
	overflow-x: auto; scrollbar-width: none;
}
.aia-tabs::-webkit-scrollbar { display: none; }
.aia-tab {
	background: rgba(255,255,255,0.08);
	border: 1px solid rgba(255,255,255,0.15);
	cursor: pointer; font-family: var(--font-body);
	font-size: 14px; font-weight: 500; color: rgba(255,255,255,0.6);
	padding: 10px 20px; border-radius: 50px;
	white-space: nowrap; transition: var(--transition); display: flex; align-items: center; gap: 8px;
}
.aia-tab:hover { background: rgba(255,255,255,0.14); color: rgba(255,255,255,0.9); border-color: rgba(255,255,255,0.3); }
.aia-tab--active { background: #ffffff; color: #111827; border-color: #ffffff; font-weight: 600; }
.aia-tab__count { background: rgba(0,0,0,0.08); color: inherit; font-size: 11px; padding: 1px 7px; border-radius: 10px; font-weight: 600; }
.aia-tab--active .aia-tab__count { background: rgba(70,44,237,0.1); color: #462CED; }

/* ---------- Catalog section ---------- */
.aia-catalog { padding-top: 2.5rem; }

/* ---------- Loading ---------- */
.aia-loading { text-align: center; padding: 60px 20px; color: var(--text-light); }
.aia-loading__spinner {
	width: 36px; height: 36px; border: 3px solid #e5e7eb;
	border-top-color: #462CED; border-radius: 50%;
	animation: aia-spin 0.8s linear infinite;
	margin: 0 auto 16px;
}

/* ---------- Error ---------- */
.aia-error { text-align: center; padding: 60px 20px; color: var(--text-light); }
.aia-error svg { width: 44px; height: 44px; margin: 0 auto 16px; display: block; stroke: #ef4444; }
.aia-error p { margin-bottom: 1.25rem; }

/* ---------- NLP Banner ---------- */
.aia-nlp-banner {
	display: flex; align-items: center; gap: 10px;
	background: rgba(70,44,237,0.06); border: 1px solid rgba(70,44,237,0.15);
	border-radius: var(--radius-lg); padding: 12px 18px; margin-bottom: 1.5rem;
	font-size: 14px; color: var(--text-light);
}
.aia-nlp-banner svg { width: 16px; height: 16px; stroke: var(--accent); flex-shrink: 0; }
.aia-nlp-banner__clear {
	margin-left: auto; background: none; border: none; cursor: pointer;
	color: var(--accent); font-size: 13px; font-weight: 600; font-family: var(--font-body);
	white-space: nowrap; padding: 0; transition: var(--transition);
}
.aia-nlp-banner__clear:hover { color: #5538f0; }

/* ---------- Result bar ---------- */
.aia-result-bar {
	display: flex; align-items: center; justify-content: space-between;
	margin-bottom: 1.75rem; padding-bottom: 1rem; border-bottom: 1px solid var(--border);
}
.aia-result-bar__heading { font-size: 1.2rem; font-weight: 700; margin: 0; }
.aia-result-bar__count { font-size: 0.8rem; font-weight: 600; }

/* ---------- Group ---------- */
.aia-group { margin-bottom: 2rem; }
.aia-group__header {
	display: flex; align-items: center; gap: 14px;
	padding: 14px 16px; background: var(--border-light);
	border: 1px solid var(--border); border-radius: var(--radius-lg);
	cursor: pointer; user-select: none; transition: var(--transition);
}
.aia-group__header:hover { border-color: var(--accent); background: #f5f4ff; }
.aia-group__icon {
	width: 38px; height: 38px; border-radius: var(--radius-md);
	display: flex; align-items: center; justify-content: center; flex-shrink: 0;
}
.aia-group__icon svg { width: 18px; height: 18px; }
.aia-group__meta { display: flex; flex-direction: column; gap: 2px; flex: 1; min-width: 0; }
.aia-group__title { font-size: 15px; font-weight: 700; color: var(--text); line-height: 1.2; }
.aia-group__subtitle { font-size: 12px; color: var(--text-light); }
.aia-group__badge {
	font-size: 11px; font-weight: 600; color: var(--text-light);
	background: #fff; border: 1px solid var(--border); padding: 2px 10px; border-radius: 10px; flex-shrink: 0;
}
.aia-group__toggle {
	width: 26px; height: 26px; border-radius: var(--radius-sm); background: #fff; border: 1px solid var(--border);
	display: flex; align-items: center; justify-content: center; flex-shrink: 0; transition: var(--transition);
}
.aia-group__toggle svg { width: 12px; height: 12px; transition: transform 0.2s; }
.aia-group.collapsed .aia-group__toggle svg { transform: rotate(-90deg); }

/* ---------- Cards grid ---------- */
.aia-cards {
	display: grid; grid-template-columns: repeat(auto-fill, minmax(290px, 1fr)); gap: 14px;
	padding: 16px 0 0;
}
.aia-group.collapsed .aia-cards { display: none; }

.aia-card {
	background: #fff; border: 1px solid var(--border); border-radius: var(--radius-lg);
	padding: 18px 20px; display: flex; flex-direction: column; gap: 10px;
	transition: var(--transition);
}
.aia-card:hover { border-color: var(--accent); box-shadow: var(--shadow-lg); transform: translateY(-2px); }
.aia-card.aia-hidden { display: none !important; }
.aia-card.aia-highlight { border-color: var(--accent); box-shadow: 0 0 0 2px rgba(70,44,237,0.15); }
.aia-card.aia-dim { opacity: 0.35; }

.aia-card__head { display: flex; align-items: flex-start; justify-content: space-between; gap: 8px; }
.aia-card__name { font-size: 13.5px; font-weight: 700; color: var(--text); line-height: 1.3; }
.aia-card__desc { font-size: 12.5px; color: var(--text-light); line-height: 1.6; margin: 0; flex: 1; }
.aia-card__systems {
	display: flex; flex-wrap: wrap; gap: 5px;
	padding-top: 10px; border-top: 1px solid var(--border-light); margin-top: auto;
}
.aia-chip {
	font-size: 10.5px; background: var(--border-light); border: 1px solid var(--border);
	color: var(--text-light); padding: 2px 8px; border-radius: var(--radius-sm);
	font-family: var(--font-body); white-space: nowrap;
}

/* ---------- No results ---------- */
.aia-no-results { text-align: center; padding: 60px 20px; color: var(--text-light); }
.aia-no-results svg { width: 44px; height: 44px; margin: 0 auto 16px; display: block; stroke: var(--border); }
.aia-no-results p { margin-bottom: 1.25rem; }

/* ---------- HubSpot form in dark CTA ---------- */
.section--final-cta .cta-content { max-width: 680px; margin: 0 auto; text-align: center; }
.section--final-cta .hs-form-frame {
	display: block; margin: 2rem auto 0; max-width: 100%;
	border-radius: 16px; overflow: hidden; background: #ffffff;
	box-shadow: 0 8px 40px rgba(0,0,0,0.25);
}

/* ---------- Responsive ---------- */
@media(max-width:768px){
	.aia-tabs { justify-content: flex-start; }
	.aia-cards { grid-template-columns: 1fr; }
	.aia-result-bar { flex-direction: column; align-items: flex-start; gap: 8px; }
	.aia-search__btn { padding: 8px 12px; }
}
</style>

<!-- ============================================================
     JAVASCRIPT — Sheet loader + render + search
============================================================ -->
<script>
(function(){

/* ── WordPress AJAX config ── */
const AJAX_URL   = <?php echo json_encode( admin_url('admin-ajax.php') ); ?>;
const AJAX_NONCE = <?php echo json_encode( wp_create_nonce('ansa-nonce') ); ?>;

/* ── State ── */
let activeTab = 'departments';
let nlpMode   = false;
let nlpIds    = [];
let allData   = []; // flat array of accelerator records from sheet

/* ────────────────────────────────────────
   STEP 1 — Load data from Google Sheet
──────────────────────────────────────── */
async function loadAccelerators() {
	document.getElementById('aiaLoading').style.display = '';
	document.getElementById('aiaError').style.display   = 'none';
	document.getElementById('aiaCatalog').style.display = 'none';

	try {
		const body = new URLSearchParams({ action: 'ansa_sheet_accelerators', nonce: AJAX_NONCE });
		const res  = await fetch(AJAX_URL, { method: 'POST', body });
		const json = await res.json();

		if (!json.success || !Array.isArray(json.data)) {
			throw new Error(json.data || 'Invalid response from server.');
		}

		allData = json.data;
		renderCatalog(allData);
		document.getElementById('aiaLoading').style.display = 'none';
		document.getElementById('aiaCatalog').style.display = '';
		updateCounts();
		applySearch('');

	} catch(e) {
		document.getElementById('aiaLoading').style.display = 'none';
		document.getElementById('aiaError').style.display   = '';
		document.getElementById('aiaErrorMsg').textContent  = 'Could not load accelerators: ' + e.message;
	}
}

/* ────────────────────────────────────────
   STEP 2 — Render groups + cards from data
──────────────────────────────────────── */
function renderCatalog(data) {
	// Group records: { tab → { group_id → { meta, cards[] } } }
	const tabs = {};
	data.forEach(row => {
		const tab = (row.tab || 'departments').toLowerCase();
		if (!tabs[tab]) tabs[tab] = {};
		const gid = row.group_id;
		if (!tabs[tab][gid]) {
			tabs[tab][gid] = {
				id:       gid,
				title:    row.group_title,
				subtitle: row.group_subtitle,
				iconSvg:  row.group_icon_svg,
				colorBg:  row.group_color_bg || 'rgba(70,44,237,0.08)',
				colorFg:  row.group_color_fg || '#462CED',
				cards:    [],
			};
		}
		tabs[tab][gid].cards.push({
			id:       row.card_id,
			name:     row.card_name,
			desc:     row.card_desc,
			keywords: row.card_keywords,
			systems:  row.card_systems,
		});
	});

	['departments', 'industries'].forEach(tab => {
		const wrap = document.getElementById('wrap-' + tab);
		wrap.innerHTML = '';
		const groups = tabs[tab] || {};
		Object.values(groups).forEach(g => {
			wrap.appendChild(buildGroup(g, tab));
		});
	});
}

function buildGroup(g, tab) {
	const group = document.createElement('div');
	group.className   = 'aia-group';
	group.dataset.group = g.id;

	const iconHtml = g.iconSvg
		? `<div class="aia-group__icon" style="background:${g.colorBg};color:${g.colorFg}">${g.iconSvg}</div>`
		: `<div class="aia-group__icon" style="background:${g.colorBg};color:${g.colorFg}">
			<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/></svg>
		  </div>`;

	const cardsHtml = g.cards.map(c => buildCard(c)).join('');

	group.innerHTML = `
		<div class="aia-group__header" onclick="aiaToggle(this)">
			${iconHtml}
			<div class="aia-group__meta">
				<span class="aia-group__title">${escHtml(g.title)}</span>
				<span class="aia-group__subtitle">${escHtml(g.subtitle)}</span>
			</div>
			<span class="aia-group__badge">${g.cards.length}</span>
			<div class="aia-group__toggle"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2,4 6,8 10,4"/></svg></div>
		</div>
		<div class="aia-cards">${cardsHtml}</div>`;

	return group;
}

function buildCard(c) {
	const systems = (c.systems || '').split(',').map(s => s.trim()).filter(Boolean);
	const chips   = systems.map(s => `<span class="aia-chip">${escHtml(s)}</span>`).join('');
	return `<div class="aia-card" id="${escHtml(c.id)}" data-kw="${escHtml(c.keywords)}">
		<div class="aia-card__head"><span class="aia-card__name">${escHtml(c.name)}</span></div>
		<p class="aia-card__desc">${escHtml(c.desc)}</p>
		<div class="aia-card__systems">${chips}</div>
	</div>`;
}

function escHtml(str) {
	return String(str || '')
		.replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;')
		.replace(/"/g,'&quot;').replace(/'/g,'&#39;');
}

/* ────────────────────────────────────────
   STEP 3 — Tab / toggle / search
──────────────────────────────────────── */
function updateCounts() {
	const dept = document.querySelectorAll('[data-tab-group="departments"] .aia-card').length;
	const ind  = document.querySelectorAll('[data-tab-group="industries"] .aia-card').length;
	document.getElementById('tc-departments').textContent = dept;
	document.getElementById('tc-industries').textContent  = ind;
	document.getElementById('tc-all').textContent         = dept + ind;
}

window.aiaTab = function(tab, btn) {
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

window.aiaToggle = function(header) {
	header.closest('.aia-group').classList.toggle('collapsed');
};

window.aiaClear = function() {
	document.getElementById('aiaSearchInput').value = '';
	document.getElementById('aiaClearBtn').classList.remove('visible');
	document.getElementById('aiaSearchHint').textContent = 'AI-powered search — describe your problem in plain English';
	document.getElementById('aiaNlpBanner').style.display = 'none';
	nlpMode = false; nlpIds = [];
	applySearch('');
};

document.getElementById('aiaSearchInput').addEventListener('input', function() {
	const q = this.value.trim();
	document.getElementById('aiaClearBtn').classList.toggle('visible', q.length > 0);
	if (nlpMode) { nlpMode = false; nlpIds = []; document.getElementById('aiaNlpBanner').style.display = 'none'; }
	applySearch(q);
});

document.getElementById('aiaSearchInput').addEventListener('keydown', function(e) {
	if (e.key === 'Enter') { e.preventDefault(); aiaRunSearch(); }
});

window.aiaRunSearch = function() {
	const q = document.getElementById('aiaSearchInput').value.trim();
	if (!q) return;
	runNLP(q);
};

function applySearch(q) {
	const ql = q.toLowerCase();
	let visible = 0;
	document.querySelectorAll('.aia-group-wrap').forEach(wrap => {
		const inTab = activeTab === 'all' || wrap.dataset.tabGroup === activeTab;
		if (!inTab) return;
		wrap.querySelectorAll('.aia-group').forEach(group => {
			let gv = 0;
			group.querySelectorAll('.aia-card').forEach(card => {
				let show;
				if (nlpMode) {
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
				if (show) gv++;
			});
			group.style.display = (!ql && !nlpMode) || gv > 0 ? '' : 'none';
			if (ql && gv > 0) group.classList.remove('collapsed');
			visible += gv;
		});
	});
	if (!ql && !nlpMode) {
		visible = activeTab === 'all'
			? document.querySelectorAll('.aia-card').length
			: document.querySelectorAll(`.aia-group-wrap[data-tab-group="${activeTab}"] .aia-card`).length;
		document.querySelectorAll('.aia-group').forEach(g => g.style.display = '');
		document.querySelectorAll('.aia-card').forEach(c => { c.classList.remove('aia-hidden','aia-highlight','aia-dim'); });
	}
	document.getElementById('aiaCount').textContent = visible + ' accelerator' + (visible !== 1 ? 's' : '');
	document.getElementById('aiaNoResults').style.display = visible === 0 ? 'block' : 'none';
}

/* ── NLP via WordPress AJAX proxy ── */
async function runNLP(query) {
	const btn     = document.getElementById('aiaSearchBtn');
	const spinner = document.getElementById('aiaSpinner');
	btn.disabled  = true;
	spinner.classList.add('active');
	document.getElementById('aiaSearchHint').textContent = 'Searching with AI…';

	try {
		const body = new URLSearchParams({ action: 'ansa_claude_search', nonce: AJAX_NONCE, query });
		const res  = await fetch(AJAX_URL, { method: 'POST', body });
		const data = await res.json();

		if (data.success && Array.isArray(data.data) && data.data.length > 0) {
			nlpMode = true;
			nlpIds  = data.data;
			document.getElementById('aiaNlpBanner').style.display = 'flex';
			document.getElementById('aiaNlpText').textContent =
				`AI found ${nlpIds.length} accelerator${nlpIds.length!==1?'s':''} matching "${query}"`;
			document.getElementById('aiaSearchHint').textContent = 'Showing AI-matched results';
			applySearch(query);
		} else {
			nlpMode = false; nlpIds = [];
			document.getElementById('aiaNlpBanner').style.display = 'none';
			document.getElementById('aiaSearchHint').textContent = 'No AI matches — showing keyword results';
			applySearch(query);
		}
	} catch(e) {
		nlpMode = false; nlpIds = [];
		document.getElementById('aiaNlpBanner').style.display = 'none';
		document.getElementById('aiaSearchHint').textContent = 'AI-powered search — describe your problem in plain English';
		applySearch(query);
	} finally {
		btn.disabled = false;
		spinner.classList.remove('active');
	}
}

/* ── Boot ── */
window.loadAccelerators = loadAccelerators;
loadAccelerators();

})();
</script>

<?php get_footer(); ?>
