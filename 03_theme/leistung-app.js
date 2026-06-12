/* ==================================================================
   Agentur JG — Leistungsseiten Redesign
   Renders one service page from window.LEISTUNGEN into #page.
   Section markup mirrors the WordPress template so it can be pasted
   back into page-leistung.php (same Tailwind utility classes).
   ================================================================== */
(function () {
  'use strict';

  var prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var STORE_KEY = 'jg-preview-slug';

  /* ---------- tiny SVG icon set (stroke = currentColor) ---------- */
  var ICON = {
    arrowLeft: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>',
    arrowRight: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>',
    arrowDown: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 5v14"/><path d="m19 12-7 7-7-7"/></svg>',
    check: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>',
    trend: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 17 9 11l4 4 8-8"/><path d="M16 4h5v5"/></svg>',
    target: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1.4"/></svg>',
    alert: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 9v4"/><path d="M12 17h.01"/><path d="M10.3 4.3 2.6 18a2 2 0 0 0 1.7 3h15.4a2 2 0 0 0 1.7-3L13.7 4.3a2 2 0 0 0-3.4 0Z"/></svg>',
  };
  var OUTCOME_ICONS = [ICON.check, ICON.trend, ICON.target];

  var MONO = "[font-family:'IBM_Plex_Mono',ui-monospace,monospace]";

  function esc(s) {
    return String(s).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
  }
  function pad(n) { return n < 10 ? '0' + n : '' + n; }

  /* reusable bits ------------------------------------------------- */
  function kicker(text, light) {
    var color = light ? 'text-[#98C1D9]' : 'text-[#3D5A80]';
    var line = light ? 'before:bg-[#98C1D9]' : 'before:bg-[#4E6E97]';
    return '<p class="mb-6 inline-flex items-center gap-3 text-xs font-medium uppercase ' + color + ' ' + MONO +
      ' tracking-[0.16em] before:h-px before:w-6 ' + line + '">' + esc(text) + '</p>';
  }
  function gridOverlay(light) {
    var c = light ? 'rgba(255,255,255,0.055)' : 'rgba(26,34,56,0.055)';
    return '<div class="absolute inset-0 -z-10 bg-[linear-gradient(' + c + '_1px,transparent_1px),linear-gradient(90deg,' + c +
      '_1px,transparent_1px)] bg-[size:34px_34px] [mask-image:radial-gradient(circle_at_72%_28%,#000,transparent_72%)]"></div>';
  }

  /* ---------------- HERO ---------------- */
  function renderHeroWidget(widget) {
    widget = widget || 'browser';

    var bars = [
      { label: 'Angebot klar erklärt', target: 84, color: '#3D5A80' },
      { label: 'Vertrauen aufgebaut', target: 72, color: '#4E6E97' },
      { label: 'Nächster Schritt sichtbar', target: 91, color: '#98C1D9' },
    ].map(function (b) {
      return '' +
        '<div data-metric class="rounded-[10px] border border-[rgba(26,34,56,0.10)] bg-white px-4 py-3">' +
          '<div class="flex items-center justify-between">' +
            '<span class="text-sm font-semibold text-[#1A2238]">' + b.label + '</span>' +
            '<span class="hero-pct text-xs font-semibold text-[#3D5A80] ' + MONO + '">' + b.target + '%</span>' +
          '</div>' +
          '<div class="mt-2 h-1.5 overflow-hidden rounded-full bg-[#EDEFF3]">' +
            '<span class="hero-bar block h-full rounded-full" data-target="' + b.target + '" style="width:' + b.target + '%;background:' + b.color + '"></span>' +
          '</div>' +
        '</div>';
    }).join('');

    function shell(inner) {
      return '<div class="relative" data-reveal data-hero-widget="' + esc(widget) + '">' +
        '<div class="absolute -inset-5 -z-10 rounded-[26px] bg-[#3D5A80]/12 blur-2xl"></div>' +
        inner +
      '</div>';
    }

    if (widget === 'seo') {
      var rankings = [
        ['Webdesign Stadt', 12, 3, 84],
        ['Homepage erstellen', 18, 7, 72],
        ['Website Agentur', 25, 11, 58],
        ['Webseite Kosten', 16, 14, 38],
      ].map(function (r) {
        return '<div data-metric class="rounded-[10px] border border-[rgba(26,34,56,0.10)] bg-white px-4 py-3">' +
          '<div class="grid grid-cols-[24px_1fr_42px] items-center gap-3">' +
            '<span class="flex h-6 w-6 items-center justify-center rounded-full bg-[#1A8A5B]/12 text-[#1F8A5B]"><svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 19V5"/><path d="m5 12 7-7 7 7"/></svg></span>' +
            '<span class="truncate text-sm font-semibold text-[#1A2238]">' + esc(r[0]) + '</span>' +
            '<span class="hero-rank text-right text-sm font-extrabold text-[#3D5A80] ' + MONO + '" data-from="' + r[1] + '" data-target="' + r[2] + '">#' + r[2] + '</span>' +
          '</div>' +
          '<div class="mt-2 h-1.5 overflow-hidden rounded-full bg-[#EDEFF3]"><span class="hero-bar block h-full rounded-full bg-[#3D5A80]" data-target="' + r[3] + '" style="width:' + r[3] + '%"></span></div>' +
        '</div>';
      }).join('');

      return shell(
        '<div class="overflow-hidden rounded-[16px] border border-[rgba(26,34,56,0.10)] bg-white shadow-[0_22px_60px_rgba(20,26,43,0.16)]">' +
          '<div class="flex h-11 items-center gap-2 border-b border-[rgba(26,34,56,0.10)] bg-[#F6F8FA] px-4">' +
            '<span class="flex h-7 w-7 items-center justify-center rounded-full bg-[#98C1D9]/20 text-[#3D5A80]"><svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.1" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="m20 20-3.5-3.5"/></svg></span>' +
            '<span class="text-xs font-medium uppercase tracking-[0.16em] text-[#3D5A80] ' + MONO + '">Keyword-Rankings</span>' +
          '</div>' +
          '<div class="bg-[linear-gradient(135deg,#F6F8FA,#EDEFF3)] p-6">' +
            '<p class="text-2xl font-extrabold tracking-[-0.03em] text-[#1A2238]">Lokale Sichtbarkeit steigt.</p>' +
            '<div class="mt-5 grid gap-2.5">' + rankings + '</div>' +
          '</div>' +
        '</div>'
      );
    }

    if (widget === 'website-analyse') {
      return shell(
        '<div class="overflow-hidden rounded-[16px] border border-[rgba(26,34,56,0.10)] bg-white shadow-[0_22px_60px_rgba(20,26,43,0.16)]">' +
          '<div class="border-b border-[rgba(26,34,56,0.10)] bg-[#F6F8FA] px-5 py-4"><p class="text-xs font-medium uppercase tracking-[0.16em] text-[#3D5A80] ' + MONO + '">Performance-Score</p></div>' +
          '<div class="bg-[linear-gradient(135deg,#F6F8FA,#EDEFF3)] p-6">' +
            '<div class="relative mx-auto h-52 w-52">' +
              '<svg class="h-full w-full -rotate-90" viewBox="0 0 120 120" aria-hidden="true"><circle cx="60" cy="60" r="48" fill="none" stroke="#E1E7EF" stroke-width="10"/><circle class="hero-gauge" cx="60" cy="60" r="48" fill="none" stroke="#3D5A80" stroke-width="10" stroke-linecap="round" data-target="87" stroke-dasharray="301.6" stroke-dashoffset="39.2"/></svg>' +
              '<div class="absolute inset-0 flex flex-col items-center justify-center text-center"><span class="hero-pct text-[clamp(2.35rem,4vw,3.2rem)] font-extrabold leading-none tracking-[-0.03em] text-[#1A2238]" data-target="87">87</span><span class="mt-1 text-sm font-semibold text-[#51607C]">von 100</span><span class="mt-3 rounded-full bg-[#1A8A5B]/12 px-3 py-1 text-xs font-semibold text-[#1F8A5B]">saubere Basis</span></div>' +
            '</div>' +
            '<div class="mt-5 grid grid-cols-3 gap-3">' +
              [['Tracking', 92], ['Tempo', 87], ['SEO', 81]].map(function (m) {
                return '<div data-metric class="rounded-[10px] border border-[rgba(26,34,56,0.10)] bg-white px-3 py-3"><span class="block text-xs font-semibold text-[#51607C]">' + m[0] + '</span><span class="hero-pct mt-1 block text-lg font-extrabold text-[#1A2238]" data-target="' + m[1] + '">' + m[1] + '%</span><span class="hero-bar mt-2 block h-1.5 rounded-full bg-[#98C1D9]" data-target="' + m[1] + '" style="width:' + m[1] + '%"></span></div>';
              }).join('') +
            '</div>' +
          '</div>' +
        '</div>'
      );
    }

    if (widget === 'website-optimierung') {
      var columns = [
        ['Vorher', '3.8s', '68/100', 86, 54, '#E0A04D'],
        ['Nachher', '0.9s', '94/100', 26, 94, '#1F8A5B'],
      ].map(function (c) {
        return '<div class="rounded-[14px] border border-[rgba(26,34,56,0.10)] bg-white p-5">' +
          '<div class="flex items-center justify-between"><span class="text-xs font-medium uppercase tracking-[0.16em] text-[#3D5A80] ' + MONO + '">' + c[0] + '</span><span class="text-sm font-extrabold text-[#1A2238] ' + MONO + '">' + c[1] + '</span></div>' +
          '<div data-metric class="mt-4"><div class="flex items-center justify-between text-xs font-semibold text-[#51607C]"><span>Ladezeit</span><span>' + c[1] + '</span></div><div class="mt-2 h-2 overflow-hidden rounded-full bg-[#EDEFF3]"><span class="hero-bar block h-full rounded-full" data-target="' + c[3] + '" style="width:' + c[3] + '%;background:' + c[5] + '"></span></div></div>' +
          '<div data-metric class="mt-4"><div class="flex items-center justify-between text-xs font-semibold text-[#51607C]"><span>Score</span><span>' + c[2] + '</span></div><div class="mt-2 h-2 overflow-hidden rounded-full bg-[#EDEFF3]"><span class="hero-bar block h-full rounded-full" data-target="' + c[4] + '" style="width:' + c[4] + '%;background:#3D5A80"></span></div></div>' +
        '</div>';
      }).join('');

      return shell('<div class="overflow-hidden rounded-[16px] border border-[rgba(26,34,56,0.10)] bg-white shadow-[0_22px_60px_rgba(20,26,43,0.16)]"><div class="border-b border-[rgba(26,34,56,0.10)] bg-[#F6F8FA] px-5 py-4"><p class="text-xs font-medium uppercase tracking-[0.16em] text-[#3D5A80] ' + MONO + '">Vorher / Nachher</p></div><div class="grid gap-4 bg-[linear-gradient(135deg,#F6F8FA,#EDEFF3)] p-6">' + columns + '</div></div>');
    }

    if (widget === 'google-ads') {
      return shell(
        '<div class="overflow-hidden rounded-[16px] border border-[rgba(26,34,56,0.10)] bg-white shadow-[0_22px_60px_rgba(20,26,43,0.16)]"><div class="bg-[linear-gradient(135deg,#F6F8FA,#EDEFF3)] p-6">' +
          '<div class="rounded-[14px] border border-[rgba(26,34,56,0.10)] bg-white p-5"><p class="text-xs font-semibold text-[#1F8A5B]">Anzeige · deine-domain.de</p><p class="mt-3 text-xl font-extrabold tracking-[-0.02em] text-[#1A2238]">Sofort sichtbar für passende Suchanfragen</p><p class="mt-2 text-sm leading-6 text-[#51607C]">Kampagne, Landingpage und Tracking greifen zusammen.</p><div class="mt-4 flex justify-end text-[#3D5A80]"><span class="h-4 w-4">' + ICON.arrowRight + '</span></div></div>' +
          '<div class="mt-4 grid gap-3"><div data-metric class="rounded-[12px] border border-[rgba(26,34,56,0.10)] bg-white px-5 py-4"><div class="flex items-center justify-between"><span class="text-sm font-semibold text-[#51607C]">Klicks heute</span><span class="hero-pct text-2xl font-extrabold text-[#1A2238] ' + MONO + '" data-target="47">47</span></div><div class="mt-3 h-2 overflow-hidden rounded-full bg-[#EDEFF3]"><span class="hero-bar block h-full rounded-full bg-[#3D5A80]" data-target="78" style="width:78%"></span></div></div><div class="flex items-center justify-between rounded-[12px] border border-[rgba(26,34,56,0.10)] bg-white px-5 py-4"><span class="text-sm font-semibold text-[#51607C]">Kosten/Lead</span><span class="text-lg font-extrabold text-[#1A2238] ' + MONO + '">8,20 €</span></div></div>' +
        '</div></div>'
      );
    }

    if (widget === 'mehr-anfragen') {
      var messages = [
        ['Stefan M.', 'Jetzt', 'Ich hätte Interesse an einem Angebot.'],
        ['Claudia R.', '2 Min', 'Könnten Sie mir eine Einschätzung schicken?'],
        ['Malte K.', '8 Min', 'Wir suchen Hilfe für unsere Website.'],
      ].map(function (m, i) {
        return '<div class="hero-inbox-card grid grid-cols-[42px_1fr] gap-3 rounded-[12px] border border-[rgba(26,34,56,0.10)] bg-white p-4" style="--delay:' + (i * 0.12) + 's"><span class="flex h-10 w-10 items-center justify-center rounded-full bg-[#98C1D9]/24 text-sm font-extrabold text-[#3D5A80]">' + esc(m[0].charAt(0)) + '</span><span><span class="flex items-center justify-between gap-3"><strong class="text-sm text-[#1A2238]">' + esc(m[0]) + '</strong><span class="text-xs text-[#636E89] ' + MONO + '">' + esc(m[1]) + '</span></span><span class="mt-1 block text-sm leading-6 text-[#51607C]">' + esc(m[2]) + '</span></span></div>';
      }).join('');

      return shell('<div class="overflow-hidden rounded-[16px] border border-[rgba(26,34,56,0.10)] bg-white shadow-[0_22px_60px_rgba(20,26,43,0.16)]"><div class="flex h-11 items-center justify-between border-b border-[rgba(26,34,56,0.10)] bg-[#F6F8FA] px-5"><span class="text-xs font-medium uppercase tracking-[0.16em] text-[#3D5A80] ' + MONO + '">Neue Nachrichten</span><span class="rounded-full bg-[#1A8A5B]/12 px-2.5 py-1 text-xs font-semibold text-[#1F8A5B]">3 neu</span></div><div class="grid gap-3 bg-[linear-gradient(135deg,#F6F8FA,#EDEFF3)] p-6">' + messages + '</div></div>');
    }

    return '' +
      '<div class="relative" data-reveal>' +
        '<div class="absolute -inset-5 -z-10 rounded-[26px] bg-[#3D5A80]/12 blur-2xl"></div>' +
        '<div class="overflow-hidden rounded-[16px] border border-[rgba(26,34,56,0.10)] bg-white shadow-[0_22px_60px_rgba(20,26,43,0.16)]">' +
          '<div class="flex h-11 items-center gap-2 border-b border-[rgba(26,34,56,0.10)] bg-[#F6F8FA] px-4">' +
            '<span class="h-2.5 w-2.5 rounded-full bg-[#98A8BE]/60"></span>' +
            '<span class="h-2.5 w-2.5 rounded-full bg-[#98A8BE]/60"></span>' +
            '<span class="h-2.5 w-2.5 rounded-full bg-[#98A8BE]/60"></span>' +
            '<span class="ml-auto rounded-md border border-[rgba(26,34,56,0.10)] bg-white px-3 py-1 text-[0.68rem] text-[#51607C] ' + MONO + '">agentur-jg.de</span>' +
          '</div>' +
          '<div class="bg-[linear-gradient(135deg,#F6F8FA,#EDEFF3)] p-6">' +
            '<p class="text-xs font-medium uppercase tracking-[0.16em] text-[#3D5A80] ' + MONO + '">Ihre Website</p>' +
            '<p class="mt-3 text-2xl font-extrabold tracking-[-0.03em] text-[#1A2238]">Verstehen. Vertrauen. Handeln.</p>' +
            '<div class="mt-5 grid gap-2.5">' + bars + '</div>' +
            '<div class="mt-5 flex items-center justify-center gap-2 rounded-[10px] bg-[#1A2238] px-4 py-3 text-sm font-semibold text-white">' +
              'Anfrage senden <span class="h-4 w-4">' + ICON.arrowRight + '</span>' +
            '</div>' +
          '</div>' +
        '</div>' +
        '<div class="absolute -bottom-4 -left-4 flex items-center gap-2.5 rounded-[12px] border border-[rgba(26,34,56,0.10)] bg-white px-4 py-3 shadow-[0_14px_36px_rgba(20,26,43,0.16)]">' +
          '<span class="flex h-8 w-8 items-center justify-center rounded-full bg-[#1A8A5B]/12 text-[#1F8A5B]"><span class="h-4 w-4">' + ICON.check + '</span></span>' +
          '<span><span class="block text-sm font-semibold leading-tight text-[#1A2238]">Neue Anfrage</span>' +
          '<span class="block text-[0.7rem] leading-tight text-[#636E89] ' + MONO + '">gerade eben</span></span>' +
        '</div>' +
      '</div>';
  }

  function sectionHero(d, S, slug) {
    var mockup = renderHeroWidget(d.hero_widget || slug || 'browser');

    return '' +
    '<section class="relative isolate overflow-hidden border-b border-[rgba(26,34,56,0.10)] bg-[#F6F8FA]" data-screen-label="Hero">' +
      gridOverlay(false) +
      '<div class="mx-auto grid max-w-[1200px] items-center gap-12 px-5 py-16 sm:px-8 lg:grid-cols-[1.05fr_0.95fr] lg:px-10 lg:py-24">' +
        '<div class="max-w-2xl">' +
          '<a class="mb-8 flex items-center gap-2 text-sm font-semibold text-[#3D5A80] transition hover:text-[#1A2238]" href="#">' +
            '<span class="h-4 w-4">' + ICON.arrowLeft + '</span> Alle Leistungen' +
          '</a>' +
          kicker(S.hero_kicker, false) +
          '<h1 class="text-[clamp(2.4rem,5vw,4rem)] font-extrabold leading-[1.03] tracking-[-0.035em] text-[#1A2238]" data-reveal>' + esc(d.label) + '</h1>' +
          '<p class="mt-7 max-w-xl text-[clamp(1.15rem,1.6vw,1.4rem)] font-semibold leading-[1.45] text-[#1A2238]" data-reveal>' + esc(d.headline) + '</p>' +
          '<p class="mt-5 max-w-xl text-lg leading-8 text-[#51607C]" data-reveal>' + esc(d.intro) + '</p>' +
          '<div class="mt-9 flex flex-wrap items-center gap-4" data-reveal>' +
            '<a class="inline-flex items-center justify-center gap-2 rounded-[10px] bg-[#1A2238] px-6 py-4 text-base font-semibold text-white shadow-sm transition hover:-translate-y-px hover:bg-[#232D49] hover:shadow-md" href="#kontakt">Unverbindlich anfragen <span class="h-4 w-4">' + ICON.arrowRight + '</span></a>' +
            '<span class="text-sm leading-6 text-[#636E89]">Antwort persönlich von Jona,<br class="hidden sm:block">meist innerhalb von 24 Stunden.</span>' +
          '</div>' +
        '</div>' +
        '<div class="hidden lg:block lg:justify-self-end lg:pl-6">' + mockup + '</div>' +
      '</div>' +
    '</section>';
  }

  /* ---------------- AUSGANGSLAGE (dark) ---------------- */
  function sectionProblem(d, S) {
    var chips = ['Google', 'Empfehlung', 'Ads'].map(function (c) {
      return '<div class="rounded-[10px] border border-white/10 bg-white/[0.07] px-3 py-3 text-center text-xs font-semibold uppercase tracking-[0.08em] text-[#D7DEEA] ' + MONO + '">' + c + '</div>';
    }).join('');

    var diagram = '' +
      '<div class="relative" data-reveal>' +
        '<div class="absolute -inset-5 -z-10 rounded-[28px] bg-[#3D5A80]/20 blur-2xl"></div>' +
        '<div class="overflow-hidden rounded-[18px] border border-white/12 bg-white/[0.06] shadow-[0_24px_70px_rgba(0,0,0,0.28)] backdrop-blur">' +
          '<div class="border-b border-white/10 bg-white/[0.05] px-5 py-4">' +
            '<p class="text-xs font-medium uppercase tracking-[0.16em] text-[#98C1D9] ' + MONO + '">Heute: der Weg bricht ab</p>' +
          '</div>' +
          '<div class="p-5 sm:p-7">' +
            '<div class="grid grid-cols-3 gap-3">' + chips + '</div>' +
            '<div class="my-4 flex justify-center text-[#98C1D9]/70"><span class="h-6 w-6">' + ICON.arrowDown + '</span></div>' +
            '<div class="rounded-[12px] border border-white/14 bg-white/[0.05] px-5 py-4">' +
              '<p class="text-sm font-semibold text-white">Ihre Website</p>' +
              '<p class="mt-1 text-sm leading-6 text-[#AEBAD2]">Angebot bleibt allgemein · Vertrauen unklar · nächster Schritt versteckt</p>' +
            '</div>' +
            '<div class="my-3 ml-5 flex items-center gap-3 border-l border-dashed border-[#E0A04D]/60 pl-5 py-1">' +
              '<span class="flex h-7 w-7 flex-none items-center justify-center rounded-full bg-[#E0A04D]/15 text-[#E7B264]"><span class="h-4 w-4">' + ICON.alert + '</span></span>' +
              '<p class="text-sm font-medium leading-6 text-[#E7B264]">Besucher springen ab, bevor sie anfragen.</p>' +
            '</div>' +
            '<div class="rounded-[12px] border border-white/10 bg-white/[0.03] px-5 py-4 opacity-55">' +
              '<p class="text-xs font-medium uppercase tracking-[0.14em] text-[#AEBAD2] ' + MONO + '">Ergebnis</p>' +
              '<p class="mt-1 text-lg font-bold text-white line-through decoration-[#E0A04D]/70 decoration-2">Anfrage</p>' +
            '</div>' +
          '</div>' +
        '</div>' +
      '</div>';

    return '' +
    '<section class="relative isolate overflow-hidden bg-[#1A2238] text-white" data-screen-label="Ausgangslage">' +
      gridOverlay(true) +
      '<div class="absolute inset-x-0 top-0 h-px bg-white/10"></div>' +
      '<div class="absolute inset-x-0 bottom-0 h-px bg-white/10"></div>' +
      '<div class="mx-auto grid max-w-[1200px] items-center gap-12 px-5 py-16 sm:px-8 lg:grid-cols-[0.92fr_1.08fr] lg:px-10 lg:py-24">' +
        '<div class="max-w-2xl">' +
          kicker(S.problem_kicker, true) +
          '<h2 class="text-[clamp(2rem,4vw,3.1rem)] font-extrabold leading-[1.05] tracking-[-0.035em] text-white" data-reveal>' + esc(S.problem_heading) + '</h2>' +
          '<p class="mt-6 max-w-xl text-lg leading-8 text-[#D7DEEA]" data-reveal>' + esc(d.problem) + '</p>' +
        '</div>' +
        '<div class="lg:justify-self-end lg:pl-6">' + diagram + '</div>' +
      '</div>' +
    '</section>';
  }

  /* ---------------- ERGEBNISSE ---------------- */
  function sectionOutcomes(d, S) {
    var cards = d.outcomes.map(function (o, i) {
      return '' +
        '<article data-reveal class="group relative overflow-hidden rounded-[18px] border border-[rgba(26,34,56,0.10)] bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[rgba(61,90,128,0.28)] hover:shadow-[0_18px_45px_rgba(20,26,43,0.10)]">' +
          '<div class="flex items-center justify-between">' +
            '<span class="text-3xl font-extrabold tracking-[-0.03em] text-[#1A2238]/15 ' + MONO + '">' + pad(i + 1) + '</span>' +
            '<span class="flex h-11 w-11 items-center justify-center rounded-[12px] bg-[#F6F8FA] text-[#3D5A80] ring-1 ring-[rgba(26,34,56,0.08)] transition group-hover:bg-[#1A2238] group-hover:text-white"><span class="h-5 w-5">' + OUTCOME_ICONS[i % 3] + '</span></span>' +
          '</div>' +
          '<p class="mt-6 text-lg font-semibold leading-7 text-[#1A2238]">' + esc(o) + '</p>' +
          '<span class="mt-6 block h-1 w-10 rounded-full bg-[#3D5A80]/30 transition-all duration-300 group-hover:w-20 group-hover:bg-[#3D5A80]"></span>' +
        '</article>';
    }).join('');

    return '' +
    '<section class="border-y border-[rgba(26,34,56,0.10)] bg-[#F6F8FA]" data-screen-label="Ergebnisse">' +
      '<div class="mx-auto max-w-[1200px] px-5 py-16 sm:px-8 lg:px-10 lg:py-24">' +
        '<div class="max-w-3xl">' +
          kicker(S.outcomes_kicker, false) +
          '<h2 class="text-[clamp(1.9rem,3.6vw,2.85rem)] font-extrabold leading-[1.06] tracking-[-0.035em] text-[#1A2238]" data-reveal>' + esc(S.outcomes_heading) + '</h2>' +
        '</div>' +
        '<div class="mt-12 grid gap-5 md:grid-cols-3">' + cards + '</div>' +
      '</div>' +
    '</section>';
  }

  /* ---------------- ABLAUF ---------------- */
  function sectionProcess(d, S) {
    var steps = d.process.map(function (p, i) {
      return '' +
        '<li data-reveal class="relative">' +
          '<span class="relative z-10 inline-flex h-14 w-14 items-center justify-center rounded-full bg-[#1A2238] text-base font-semibold text-white ' + MONO + ' shadow-[0_8px_24px_rgba(20,26,43,0.18)] ring-4 ring-white">' + pad(i + 1) + '</span>' +
          '<p class="mt-5 text-lg font-semibold leading-7 text-[#1A2238]">' + esc(p) + '</p>' +
        '</li>';
    }).join('');

    return '' +
    '<section class="bg-white" data-screen-label="Ablauf">' +
      '<div class="mx-auto max-w-[1200px] px-5 py-16 sm:px-8 lg:px-10 lg:py-24">' +
        '<div class="max-w-3xl">' +
          kicker(S.process_kicker, false) +
          '<h2 class="text-[clamp(1.9rem,3.6vw,2.85rem)] font-extrabold leading-[1.06] tracking-[-0.035em] text-[#1A2238]" data-reveal>' + esc(S.process_heading) + '</h2>' +
        '</div>' +
        '<div class="relative mt-14">' +
          '<div class="absolute left-7 right-7 top-7 hidden h-px bg-[rgba(26,34,56,0.14)] lg:block" aria-hidden="true"></div>' +
          '<ol class="grid gap-10 lg:grid-cols-3 lg:gap-8">' + steps + '</ol>' +
        '</div>' +
      '</div>' +
    '</section>';
  }

  /* ---------------- FÜR WEN ---------------- */
  function sectionForWhom(d, S) {
    var items = d.for_whom.map(function (it, i) {
      var border = i < d.for_whom.length - 1 ? ' border-b border-[rgba(26,34,56,0.12)] pb-7' : '';
      return '' +
        '<li data-reveal class="flex items-start gap-5' + border + '">' +
          '<span class="flex h-11 w-11 flex-none items-center justify-center rounded-[12px] bg-[#98C1D9]/18 text-[#3D5A80]"><span class="h-5 w-5">' + ICON.check + '</span></span>' +
          '<p class="text-lg font-semibold leading-7 text-[#1A2238]">' + esc(it) + '</p>' +
        '</li>';
    }).join('');

    return '' +
    '<section class="border-y border-[rgba(26,34,56,0.10)] bg-[#F6F8FA]" data-screen-label="Für wen">' +
      '<div class="mx-auto grid max-w-[1200px] gap-12 px-5 py-16 sm:px-8 lg:grid-cols-[0.82fr_1.18fr] lg:px-10 lg:py-24">' +
        '<div>' +
          kicker(S.for_whom_kicker, false) +
          '<h2 class="text-[clamp(1.9rem,3.6vw,2.85rem)] font-extrabold leading-[1.06] tracking-[-0.035em] text-[#1A2238]" data-reveal>' + esc(S.for_whom_heading) + '</h2>' +
          '<p class="mt-6 max-w-md text-lg leading-8 text-[#51607C]" data-reveal>Wenn mehrere Punkte zutreffen, lohnt sich ein kurzes Gespräch über den sinnvollsten nächsten Schritt.</p>' +
        '</div>' +
        '<ul class="grid gap-7">' + items + '</ul>' +
      '</div>' +
    '</section>';
  }

  /* ---------------- FAQ ---------------- */
  function sectionFaq(d, S) {
    var rows = d.faq.map(function (f, i) {
      return '' +
        '<div class="faq-item rounded-[14px] border border-[rgba(26,34,56,0.12)] bg-white px-6 transition hover:border-[rgba(61,90,128,0.30)]">' +
          '<button type="button" class="faq-trigger flex w-full cursor-pointer items-center justify-between gap-6 py-5 text-left" aria-expanded="false" aria-controls="faq-panel-' + i + '">' +
            '<span class="text-lg font-semibold leading-7 text-[#1A2238]">' + esc(f.q) + '</span>' +
            '<span class="faq-icon text-2xl font-light leading-none text-[#3D5A80]" aria-hidden="true">+</span>' +
          '</button>' +
          '<div class="faq-body" id="faq-panel-' + i + '" role="region"><div><p class="-mt-1 pb-6 max-w-3xl text-base leading-7 text-[#51607C]">' + esc(f.a) + '</p></div></div>' +
        '</div>';
    }).join('');

    return '' +
    '<section class="bg-white" data-screen-label="FAQ">' +
      '<div class="mx-auto max-w-[1200px] px-5 py-16 sm:px-8 lg:px-10 lg:py-24">' +
        '<div class="max-w-3xl">' +
          kicker(S.faq_kicker, false) +
          '<h2 class="text-[clamp(1.9rem,3.6vw,2.85rem)] font-extrabold leading-[1.06] tracking-[-0.035em] text-[#1A2238]" data-reveal>' + esc(S.faq_heading) + '</h2>' +
        '</div>' +
        '<div class="mt-10 grid max-w-3xl gap-3.5">' + rows + '</div>' +
      '</div>' +
    '</section>';
  }

  /* ---------------- CTA (dark) ---------------- */
  function sectionCta(d, S) {
    return '' +
    '<section id="kontakt" class="relative isolate overflow-hidden bg-[#1A2238] text-white" data-screen-label="CTA">' +
      gridOverlay(true) +
      '<div class="absolute inset-x-0 top-0 h-px bg-white/10"></div>' +
      '<div class="mx-auto flex max-w-[1200px] flex-col gap-10 px-5 py-16 sm:px-8 lg:flex-row lg:items-center lg:justify-between lg:px-10 lg:py-20">' +
        '<div class="max-w-2xl">' +
          kicker(S.cta_kicker, true) +
          '<h2 class="text-[clamp(2rem,4vw,3.2rem)] font-extrabold leading-[1.04] tracking-[-0.035em] text-white" data-reveal>' + esc(d.cta_headline) + '</h2>' +
          '<p class="mt-5 max-w-xl text-lg leading-8 text-[#D7DEEA]" data-reveal>' + esc(S.cta_text) + '</p>' +
        '</div>' +
        '<div class="flex flex-col items-start gap-4 lg:items-end" data-reveal>' +
          '<a class="inline-flex items-center justify-center gap-2 rounded-[10px] bg-white px-7 py-4 text-base font-semibold text-[#1A2238] shadow-sm transition hover:-translate-y-px hover:bg-[#F6F8FA] hover:shadow-md" href="#">Termin buchen <span class="h-4 w-4">' + ICON.arrowRight + '</span></a>' +
          '<p class="flex items-center gap-2 text-sm text-[#AEBAD2]"><span class="h-1.5 w-1.5 rounded-full bg-[#98C1D9]"></span> Persönlich beantwortet · unverbindlich · meist &lt; 24 Std.</p>' +
        '</div>' +
      '</div>' +
    '</section>';
  }

  /* ---------------- render ---------------- */
  function render(slug) {
    var d = window.LEISTUNGEN[slug];
    var S = window.LEISTUNG_SECTIONS;
    if (!d) return;
    var root = document.getElementById('page');
    root.innerHTML =
      sectionHero(d, S, slug) +
      sectionProblem(d, S) +
      sectionOutcomes(d, S) +
      sectionProcess(d, S) +
      sectionForWhom(d, S) +
      sectionFaq(d, S) +
      sectionCta(d, S);

    initAccordion(root);
    initAnimations();
  }

  /* ---------------- accordion ---------------- */
  function initAccordion(root) {
    root.querySelectorAll('.faq-trigger').forEach(function (btn) {
      btn.addEventListener('click', function () {
        var item = btn.closest('.faq-item');
        var isOpen = item.classList.contains('open');
        // close siblings within the same FAQ group
        item.parentElement.querySelectorAll('.faq-item.open').forEach(function (o) {
          if (o !== item) {
            o.classList.remove('open');
            o.querySelector('.faq-trigger').setAttribute('aria-expanded', 'false');
          }
        });
        item.classList.toggle('open', !isOpen);
        btn.setAttribute('aria-expanded', String(!isOpen));
      });
    });
  }

  /* ---------------- animations ---------------- */
  var revealBound = false;

  function setHeroFinal() {
    document.querySelectorAll('[data-metric]').forEach(function (metric) {
      var bar = metric.querySelector('.hero-bar');
      var pct = metric.querySelector('.hero-pct');
      if (bar) bar.style.width = bar.dataset.target + '%';
      if (pct && bar) {
        var finalValue = pct.dataset.target || bar.dataset.target;
        var suffix = pct.textContent.indexOf('%') !== -1 ? '%' : '';
        pct.textContent = finalValue + suffix;
      }
    });

    document.querySelectorAll('.hero-rank').forEach(function (rank) {
      rank.textContent = '#' + rank.dataset.target;
    });

    document.querySelectorAll('.hero-gauge').forEach(function (gauge) {
      var target = parseInt(gauge.dataset.target, 10);
      var length = parseFloat(gauge.getAttribute('stroke-dasharray')) || 301.6;
      gauge.style.strokeDashoffset = length * (1 - target / 100);
    });

    document.querySelectorAll('.hero-pct[data-target]').forEach(function (pct) {
      if (!pct.closest('[data-metric]')) pct.textContent = pct.dataset.target;
    });
  }

  function animateHeroMetrics() {
    if (prefersReduced || !window.gsap) { setHeroFinal(); return; }
    var gsap = window.gsap;
    document.querySelectorAll('[data-metric]').forEach(function (metric, i) {
      var bar = metric.querySelector('.hero-bar');
      var pct = metric.querySelector('.hero-pct');
      if (!bar) return;
      var target = parseInt(bar.dataset.target, 10);
      var delay = 0.3 + i * 0.14;
      gsap.fromTo(bar, { width: '0%' }, { width: target + '%', duration: 1.1, ease: 'power2.out', delay: delay });
      if (!pct) return;
      var pctTarget = pct.dataset.target ? parseInt(pct.dataset.target, 10) : target;
      var pctSuffix = pct.textContent.indexOf('%') !== -1 ? '%' : '';
      var obj = { v: 0 };
      gsap.to(obj, { v: pctTarget, duration: 1.1, ease: 'power2.out', delay: delay, onUpdate: function () { pct.textContent = Math.round(obj.v) + pctSuffix; } });
    });
  }

  function animateHeroWidgets() {
    if (prefersReduced || !window.gsap) { setHeroFinal(); return; }
    var gsap = window.gsap;

    document.querySelectorAll('.hero-rank').forEach(function (rank, i) {
      var from = parseInt(rank.dataset.from, 10);
      var target = parseInt(rank.dataset.target, 10);
      var obj = { v: isNaN(from) ? target : from };
      gsap.to(obj, { v: target, duration: 1.1, ease: 'power2.out', delay: 0.35 + i * 0.12, onUpdate: function () { rank.textContent = '#' + Math.round(obj.v); } });
    });

    document.querySelectorAll('.hero-gauge').forEach(function (gauge) {
      var target = parseInt(gauge.dataset.target, 10);
      var length = parseFloat(gauge.getAttribute('stroke-dasharray')) || 301.6;
      gsap.fromTo(gauge, { strokeDashoffset: length }, { strokeDashoffset: length * (1 - target / 100), duration: 1.25, ease: 'power2.out', delay: 0.28 });
    });

    document.querySelectorAll('.hero-pct[data-target]').forEach(function (pct) {
      if (pct.closest('[data-metric]')) return;
      var target = parseInt(pct.dataset.target, 10);
      var obj = { v: 0 };
      gsap.to(obj, { v: target, duration: 1.1, ease: 'power2.out', delay: 0.35, onUpdate: function () { pct.textContent = Math.round(obj.v); } });
    });
  }

  function checkReveal() {
    var vh = window.innerHeight || document.documentElement.clientHeight;
    document.querySelectorAll('[data-reveal]:not(.is-in)').forEach(function (el) {
      var r = el.getBoundingClientRect();
      if (r.top < vh * 0.9 && r.bottom > 0) el.classList.add('is-in');
    });
  }

  function setStagger() {
    document.querySelectorAll('[data-reveal]').forEach(function (el) {
      var sibs = el.parentElement ? el.parentElement.querySelectorAll(':scope > [data-reveal]') : [el];
      var idx = Array.prototype.indexOf.call(sibs, el);
      el.style.transitionDelay = idx > 0 ? Math.min(idx * 0.08, 0.4) + 's' : '0s';
    });
  }

  function initAnimations() {
    // Content is fully visible by default (base CSS, opacity:1, no transform).
    // We only arm the slide-in (.anim) after confirming the animation clock is
    // genuinely advancing across two consecutive frames. If it isn't (frozen /
    // headless / background frame), .anim is never added and content stays at
    // its final, fully-visible position. Even when armed, only transform moves —
    // opacity is always 1 — so a mid-flight freeze can never hide content.
    if (!revealBound) {
      window.addEventListener('scroll', checkReveal, { passive: true });
      window.addEventListener('resize', checkReveal);
      revealBound = true;
    }

    if (prefersReduced) { setHeroFinal(); return; }

    requestAnimationFrame(function (t1) {
      requestAnimationFrame(function (t2) {
        if ((t2 - t1) > 0.4) {
          document.documentElement.classList.add('anim');
          setStagger();
          checkReveal();                       // above-the-fold -> final immediately
          requestAnimationFrame(checkReveal);
          animateHeroMetrics();
          animateHeroWidgets();
        }
      });
    });
  }

  /* ---------------- boot ---------------- */
  function boot() {
    document.documentElement.classList.add('js');
    var select = document.getElementById('service-select');
    var start = (window.localStorage && localStorage.getItem(STORE_KEY)) || 'website-erstellen-lassen';
    if (!window.LEISTUNGEN[start]) start = 'website-erstellen-lassen';
    select.value = start;
    render(start);

    select.addEventListener('change', function () {
      var slug = select.value;
      try { localStorage.setItem(STORE_KEY, slug); } catch (e) {}
      render(slug);
      window.scrollTo({ top: 0, behavior: prefersReduced ? 'auto' : 'smooth' });
    });
  }

  if (document.readyState !== 'loading') boot();
  else document.addEventListener('DOMContentLoaded', boot);
})();


