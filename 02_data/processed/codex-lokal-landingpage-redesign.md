# Codex-Plan: Regionale Landingpage – Redesign mit Persönlichkeit

**Datei:** `03_theme/page-lokal-webdesign.php`  
**Ziel:** Komplette Überarbeitung der Sektionsstruktur, mehr Persönlichkeit, bessere Conversion-Logik.

---

## Sektionsreihenfolge (neu)

| # | Sektion | Ersetzt |
|---|---|---|
| 1 | Hero | Hero (überarbeitet) |
| 2 | Pain Points (GSAP scroll-reveal) | Regionale Nähe (entfernt) |
| 3 | Für wen | Für wen (überarbeitet) |
| 4 | Meine Lösung | Leistungen (erweitert) |
| 5 | Wer bin ich | Vorgehen (ersetzt) |
| 6 | Referenzen | Referenzen (mit Bildern) |
| 7 | FAQ | FAQ (unverändert) |
| 8 | CTA | CTA (minimal angepasst) |

---

## Technische Ausgangslage – wichtig vorab lesen

- **Template-Mechanismus:** Das PHP-Template mappt URL-Slugs auf `$standorte`-Array-Einträge. Standort-spezifische Daten bleiben darin. Sektionen-übergreifende Daten (Pain Points, Referenzen, Wer-bin-ich) kommen als separate PHP-Variablen außerhalb des Arrays.
- **`data-reveal`-Animation:** Elemente mit `data-reveal` werden via `checkReveal()` in `leistung-page.js` mit der Klasse `.is-in` versehen. CSS: `.anim [data-reveal]` startet bei `translateY(24px)`, `.is-in` bringt auf `none`. Einfach `data-reveal` auf Elemente setzen.
- **`scroll-reveal`-Animation:** Elemente mit Klasse `scroll-reveal` und Attribut `data-scroll-reveal` werden in `main.js` per GSAP wortweise animiert. Markup: `<h2 class="scroll-reveal ..." data-scroll-reveal>Text hier</h2>`. Dieser Mechanismus ist in `main.js` eingebaut – kein zusätzliches JS nötig.
- **Bild-Schutz Portrait:** URL `home_url('/agentur-jg-private/jona-portrait/')` + Attribut `data-private-image` + Klasse `select-none`. Exakt wie in `page-ueber-mich.php` Zeile 103–109 umsetzen.
- **Referenz-Bilder:** `get_template_directory_uri() . '/assets/images/KOPP-Umwelt_Website_Referenz_AgenturJG.webp'` und `MAX-KFZ_Website_Referenz_AgenturJG.webp` – beide Bilder existieren bereits.
- **`$mono`-Variable:** `"[font-family:'IBM_Plex_Mono',ui-monospace,monospace]"` – bereits im Template definiert, weiterverwenden.
- **`$kicker()`-Funktion:** Bereits definiert, weiterverwenden.
- **`$grid_overlay()`-Funktion:** Bereits definiert, weiterverwenden.
- **Kein CSS editieren.** Nur Tailwind-Klassen als arbitrary values in PHP/HTML.

---

## PHP-Datenvariablen: was bleibt, was fällt weg, was kommt neu

### Entfernen
- `$hero_bars` – kompletter Array (Balken-Widget im Hero fällt weg)
- `$method_steps` – kompletter Array (Vorgehen-Sektion wird durch Wer-bin-ich ersetzt)
- `$leistung_cards` – kompletter Array (wird neu definiert, siehe unten)

### Behalten (unverändert)
- `$standorte` – Array mit Standort-Daten. Darin bleiben: `kicker`, `ort`, `headline`, `intro`, `lokal_heading`, `lokal_text`, `advantages`, `for_whom_heading`, `for_whom`, `faq_heading`, `faq`, `cta_headline`
- `$icon_*`-Variablen – alle behalten
- `$mono`, `$kicker()`, `$grid_overlay()` – alle behalten

### Entfernen aus `$standorte`
- `advantages` – wurde in Regionale-Nähe-Sektion verwendet, die entfällt. Aus dem Array entfernen **oder** stehen lassen (wird einfach nicht mehr ausgegeben).

### Neu hinzufügen (außerhalb `$standorte`, vor `get_header()`)

```php
// Bild-URL Jona (geschützte Route)
$jona_private_portrait_url = home_url('/agentur-jg-private/jona-portrait/');

// Pain Points (identisch für alle Standorte)
$pain_points = [
    'Wir haben eine Website. Ob sie irgendjemanden zur Anfrage führt – wissen wir ehrlich gesagt nicht.',
    'Bei Google findet man eher die Konkurrenz. Dabei leisten wir mindestens genauso gute Arbeit.',
    'Ich hatte schon eine Agentur. Das war teuer, und am Ende konnte mir niemand sagen, was es gebracht hat.',
    'Unsere Kunden empfehlen uns weiter. Aber wer uns online sucht, findet ... nicht viel.',
];

// Leistungskarten (neu: 3 Karten)
$leistung_cards = [
    [
        'title'       => 'Website erstellen lassen',
        'description' => 'Eine klare, moderne Website, die Ihr Angebot erklärt, Vertrauen aufbaut und Anfragen ermöglicht.',
        'fit'         => 'Sinnvoll wenn: Ihre Website fehlt oder online keinen professionellen Eindruck macht.',
        'url'         => '/website-erstellen-lassen/',
        'icon'        => $icon_cursor,
    ],
    [
        'title'       => 'Website optimieren',
        'description' => 'Bestehende Website gezielt verbessern – Struktur, Texte, Nutzerführung und Conversion-Wege.',
        'fit'         => 'Sinnvoll wenn: Sie eine Website haben, aber zu wenig Anfragen daraus entstehen.',
        'url'         => '/website-optimierung/',
        'icon'        => $icon_search,
    ],
    [
        'title'       => 'Tracking & Auswertung',
        'description' => 'Verstehen, was auf Ihrer Website passiert: woher Besucher kommen, was sie tun und wo sie abspringen.',
        'fit'         => 'Sinnvoll wenn: Sie nicht wissen, ob Ihre Website überhaupt arbeitet.',
        'url'         => '/website-analyse/',
        'icon'        => $icon_arrow_right,
    ],
];

// Für wen – Situationskarten (identisch für alle Standorte)
$fuer_wen_cards = [
    [
        'situation' => 'Keine Website oder eine veraltete Seite',
        'text'      => 'Ihr Betrieb macht gute Arbeit – aber wer online sucht, findet entweder gar nichts oder eine Seite, die das nicht zeigt. Das kostet Anfragen, bevor ein Gespräch stattfindet.',
    ],
    [
        'situation' => 'Website vorhanden, aber keine Anfragen',
        'text'      => 'Die Seite ist online, aber sie bringt nichts Messbares. Keine klare Nutzerführung, keine überzeugenden Texte, kein Kontaktweg, der wirklich einfach ist.',
    ],
    [
        'situation' => 'Sichtbarkeit vorhanden, aber falscher Kundenmix',
        'text'      => 'Es kommen Besucher, aber entweder aus der falschen Region, mit zu niedrigem Budget oder ohne konkretes Interesse. Die Seite filtert nicht – sie lässt jeden rein.',
    ],
];

// Referenzen-Vorschau (vereinfacht, mit Bild)
$referenzen_preview = [
    [
        'name'      => 'KOPP Umwelt',
        'ort'       => 'Heidenrod-Kemel',
        'branche'   => 'Entsorgung & Containerdienst',
        'text'      => 'Aus einer veralteten Website wurde eine digitale Plattform mit Shop, Buchungsfunktion und Recruiting-Grundlage.',
        'image'     => 'KOPP-Umwelt_Website_Referenz_AgenturJG.webp',
        'image_alt' => 'Screenshot der KOPP Umwelt Website',
        'url'       => 'https://kopp-umwelt.de',
        'domain'    => 'kopp-umwelt.de',
        'tags'      => ['Shop & Buchung', 'SEO & Google Ads', 'Recruiting'],
    ],
    [
        'name'      => 'Max KFZ',
        'ort'       => 'Holzhausen a.d. Haide',
        'branche'   => 'KFZ-Werkstatt',
        'text'      => 'Professionelle digitale Grundlage zur Werkstatt-Gründung: klares Angebot, einfache Kontaktwege, lokale Sichtbarkeit.',
        'image'     => 'MAX-KFZ_Website_Referenz_AgenturJG.webp',
        'image_alt' => 'Screenshot der Max KFZ Website',
        'url'       => 'https://max-kfz.de',
        'domain'    => 'max-kfz.de',
        'tags'      => ['Neue Website', 'WhatsApp eingebunden', 'Lokale SEO'],
    ],
];
```

---

## Sektion 1: Hero

**Anforderungen:**
- Kürzere, emotionalere H1 (SEO-Keyword bleibt drin, aber Tonalität ändert sich)
- Kein Browser-Widget mit Balken mehr
- Rechte Seite: kleines Portrait-Element von Jona (vertrauensbildend) + "Neue Anfrage"-Badge wie bisher
- Intro-Text kürzer: max. 2 Sätze
- Zweiter Textblock ("Sie müssen noch nicht wissen...") bleibt als Trust-Signal

**Neue Headline-Logik im `$standorte`-Array:**
Ersetze die aktuelle `headline` in jedem Standort durch eine kürzere Version:
- Limburg: `'Webdesign Limburg – Ihre Kunden suchen online. Finden sie Sie?'`
- Lahnstein: `'Webdesign Lahnstein – Ihre Kunden suchen online. Finden sie Sie?'`
- Rheingau-Taunus: `'Webdesign Rheingau-Taunus – Ihre Kunden suchen online. Finden sie Sie?'`

**Rechte Seite (Hero Visual) – Umsetzung:**

Ersetze das bisherige Browser-Widget (mit `$hero_bars`) durch ein zweiteiliges Element:

```
[Portrait-Bild Jona (klein, abgerundet)]     ← obere Hälfte
[„Neue Anfrage aus der Region"-Badge]         ← bleibt wie bisher unten
```

Portrait-Element: `relative aspect-[3/4] max-w-[220px]` mit `data-private-image`, `select-none`, `bg-cover bg-center`, `style="background-image: url('...')"` – exakt wie in `page-ueber-mich.php` Zeile 103–109, aber kleiner (`max-w-[220px]`).

Darunter (oder daneben) der bestehende grüne Badge mit "Neue Anfrage aus der Region".

Das gesamte rechte Element bekommt eine dezente Card-Wrapper wie bisher (Schatten, abgerundete Ecken).

**Hero-Intro-Text:**
Kürzen auf max. 2 kurze Sätze. Den zweiten Textblock (`p.mt-5`) leicht persönlicher formulieren:
> "Sie müssen noch nicht wissen, welcher Schritt der richtige ist. Ich schaue mir Ihre Ausgangslage an und sage Ihnen ehrlich, was sinnvoll ist."

---

## Sektion 2: Pain Points (GSAP scroll-reveal)

**Ziel:** Der Leser erkennt seine eigene Situation. Kein Vorteilsversprechen, sondern Wiedererkennung.

**Technisches Muster:** Analog zur Scroll-Statement-Sektion auf `front-page.php` (Zeile 199–207):
```html
<section data-scroll-statement-section>
  <div ... min-h-screen items-center>
    <h2 class="scroll-reveal ..." data-scroll-reveal>Statement-Text</h2>
  </div>
</section>
```

**Umsetzung für Pain Points:**

Eine Section mit `data-pain-points-section` und `bg-[#1A2238]` (dunkler Hintergrund für Kontrast).

Innerhalb: 4 Pain Points aus `$pain_points`-Array, jeweils als eigenes großes Statement mit `scroll-reveal` + `data-scroll-reveal`.

Layout: Kein Grid, sondern vertical gestapelt mit großzügigem Padding zwischen den Statements. Jeder Pain Point hat genug Höhe (`min-h-[50vh]` o.ä.), damit der Scroll-Reveal-Effekt merklich greift.

```html
<section class="bg-[#1A2238] text-white" data-pain-points-section>
  <?php echo $grid_overlay(true); ?>
  <div class="absolute inset-x-0 top-0 h-px bg-white/10"></div>
  <div class="absolute inset-x-0 bottom-0 h-px bg-white/10"></div>

  <div class="mx-auto max-w-[1200px] px-5 sm:px-8 lg:px-10">
    <!-- Kicker oben -->
    <?php echo $kicker('Was viele Inhaber kennen', true); ?>

    <!-- 4 Pain Point Statements -->
    <?php foreach ($pain_points as $i => $point) : ?>
      <div class="flex min-h-[52vh] items-center border-b border-white/[0.08] py-16 last:border-0">
        <div class="max-w-5xl">
          <span class="mb-5 block text-sm font-semibold <?php echo esc_attr($mono); ?> text-[#98C1D9]">
            <?php echo esc_html(str_pad((string)($i + 1), 2, '0', STR_PAD_LEFT)); ?>
          </span>
          <h2 class="scroll-reveal text-[clamp(1.8rem,3.8vw,3.1rem)] font-extrabold leading-[1.08] tracking-[-0.03em] text-white" data-scroll-reveal>
            <?php echo esc_html($point); ?>
          </h2>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
```

---

## Sektion 3: Für wen

**Ziel:** Qualifizierung durch Situationsbeschreibung, nicht durch abstrakte Kategorien.

**Layout:** 3 Karten nebeneinander (md:grid-cols-3), helles Hintergrund `bg-[#F6F8FA]`.

```html
<section class="border-y border-[rgba(26,34,56,0.10)] bg-[#F6F8FA]">
  <div class="mx-auto max-w-[1200px] px-5 py-16 sm:px-8 lg:px-10 lg:py-24">
    <!-- Kicker + Heading -->
    <?php echo $kicker('Für wen?'); ?>
    <h2 ...><?php echo esc_html($standort['for_whom_heading']); ?></h2>
    <p class="mt-5 ...">Wenn Sie sich in einer dieser Situationen wiedererkennen, lohnt sich ein kurzes Gespräch.</p>

    <!-- 3 Situations-Karten -->
    <div class="mt-12 grid gap-5 md:grid-cols-3">
      <?php foreach ($fuer_wen_cards as $card) : ?>
        <article data-reveal class="rounded-[18px] border border-[rgba(26,34,56,0.10)] bg-white p-7 shadow-sm">
          <h3 class="text-xl font-extrabold tracking-[-0.02em] text-[#1A2238]">
            <?php echo esc_html($card['situation']); ?>
          </h3>
          <p class="mt-4 text-base leading-7 text-[#51607C]">
            <?php echo esc_html($card['text']); ?>
          </p>
        </article>
      <?php endforeach; ?>
    </div>

    <!-- CTA-Zeile -->
    <div class="mt-10 flex flex-col items-start gap-4 border-t border-[rgba(26,34,56,0.10)] pt-10 sm:flex-row sm:items-center" data-reveal>
      <a class="..." href="#kontakt">Unverbindlich anfragen ...</a>
      <span class="text-sm text-[#636E89]">Wenn Sie sich hier wiedererkennen, lohnt sich eine kurze Einschätzung.</span>
    </div>
  </div>
</section>
```

---

## Sektion 4: Meine Lösung

**Ziel:** 3 Leistungskarten (Website erstellen, Website optimieren, Tracking) + darunter einen Link-Block mit Verweis auf SEO und Google Ads.

**Layout:**
- Oben: Kicker "Meine Lösung", H2 wie bisher, Intro-Text
- Mitte: 3 Leistungskarten aus `$leistung_cards` (exakt wie bisherige Leistungssektion)
- Unten: Zusatz-Block mit Verweis auf SEO & Google Ads:

```html
<div class="mt-10 rounded-[16px] border border-[rgba(26,34,56,0.10)] bg-white p-6" data-reveal>
  <p class="text-sm font-semibold uppercase tracking-[0.12em] text-[#3D5A80] <?php echo esc_attr($mono); ?>">
    Wenn die Basis steht
  </p>
  <p class="mt-3 text-lg font-semibold text-[#1A2238]">
    Der nächste Schritt: Mehr Sichtbarkeit und mehr Reichweite.
  </p>
  <p class="mt-2 text-base leading-7 text-[#51607C]">
    Mit lokaler SEO werden Sie bei Google gefunden, wenn Kunden in <?php echo esc_html($standort['ort']); ?> nach Ihren Leistungen suchen. Google Ads bringt kurzfristig planbare Anfragen.
  </p>
  <div class="mt-5 flex flex-wrap gap-3">
    <a class="inline-flex items-center gap-2 text-sm font-semibold text-[#3D5A80] hover:text-[#1A2238]" href="<?php echo esc_url(home_url('/seo/')); ?>">SEO & Sichtbarkeit <?php echo $icon_arrow_right; ?></a>
    <span class="text-[#98A8BE]" aria-hidden="true">·</span>
    <a class="inline-flex items-center gap-2 text-sm font-semibold text-[#3D5A80] hover:text-[#1A2238]" href="<?php echo esc_url(home_url('/google-ads/')); ?>">Google Ads <?php echo $icon_arrow_right; ?></a>
  </div>
</div>
```

---

## Sektion 5: Wer bin ich

**Ziel:** Persönlichkeit und Vertrauen. Ersetzt die Vorgehen-Sektion vollständig.

**Layout:** Helles Hintergrund `bg-white`. Zweispaltig auf Desktop: links Portrait, rechts Text + Werte-Liste.

```html
<section class="bg-white">
  <div class="mx-auto grid max-w-[1200px] items-center gap-12 px-5 py-16 sm:px-8 lg:grid-cols-[0.85fr_1.15fr] lg:px-10 lg:py-24">

    <!-- Linke Spalte: Portrait -->
    <div class="mx-auto w-full max-w-[340px] lg:mx-0">
      <div class="relative overflow-hidden rounded-[18px] border border-[rgba(26,34,56,0.10)] bg-[#F6F8FA] shadow-[0_18px_50px_rgba(20,26,43,0.10)]">
        <div
          class="relative aspect-[4/5] select-none bg-cover bg-center"
          style="background-image: url('<?php echo esc_url($jona_private_portrait_url); ?>');"
          role="img"
          aria-label="Jona von Agentur JG"
          data-private-image
        ></div>
      </div>
    </div>

    <!-- Rechte Spalte: Text -->
    <div>
      <?php echo $kicker('Wer bin ich?'); ?>
      <h2 class="text-[clamp(1.9rem,3.6vw,2.85rem)] font-extrabold leading-[1.06] tracking-[-0.035em] text-[#1A2238]" data-reveal>
        Ich bin Jona – kein Agentur-Apparat, sondern ein Ansprechpartner.
      </h2>
      <div class="mt-6 grid gap-4 text-base leading-7 text-[#51607C]" data-reveal>
        <p>Ich helfe inhabergeführten Unternehmen dabei, ihre Website wirtschaftlich zu denken – nicht als Designprojekt, sondern als Werkzeug für Sichtbarkeit, Vertrauen und Anfragen.</p>
        <p>Kein Agentur-Gefüge, kein wechselnder Ansprechpartner, keine Kampagnen auf Verdacht. Ich schaue mir Ihre Ausgangslage an und sage Ihnen ehrlich, welcher Schritt sinnvoll ist – und welcher nicht.</p>
      </div>

      <!-- Werte-Liste -->
      <ul class="mt-8 grid gap-3" data-reveal>
        <?php
        $jona_werte = [
          'Persönlich betreut – Sie sprechen direkt mit mir.',
          'Klar erklärt – keine Buzzwords, keine Halbwahrheiten.',
          'Ehrliche Einschätzung – auch wenn ein kleinerer Schritt sinnvoller ist.',
          'Keine Knebelverträge – Zusammenarbeit auf Augenhöhe.',
        ];
        foreach ($jona_werte as $wert) : ?>
          <li class="flex items-start gap-3 text-sm font-semibold text-[#1A2238]">
            <span class="mt-0.5 flex h-5 w-5 flex-none items-center justify-center rounded-full bg-[#98C1D9]/18 text-[#3D5A80]">
              <?php echo $icon_check_sm; ?>
            </span>
            <?php echo esc_html($wert); ?>
          </li>
        <?php endforeach; ?>
      </ul>

      <div class="mt-8" data-reveal>
        <a class="inline-flex items-center gap-2 text-sm font-semibold text-[#3D5A80] hover:text-[#1A2238]" href="<?php echo esc_url(home_url('/ueber-mich/')); ?>">
          Mehr über mich erfahren <?php echo $icon_arrow_right; ?>
        </a>
      </div>
    </div>

  </div>
</section>
```

---

## Sektion 6: Referenzen

**Ziel:** Zwei Referenz-Karten mit echten Website-Screenshots, Kundenname, Branche, kurze Beschreibung, Tags.

**Layout:** `bg-[#F6F8FA]`, 2 Karten im Grid (`md:grid-cols-2`). Karten wie auf `page-referenzen.php`, aber kompakter (ohne Ausgangslage/Umsetzung/Wirkung-Breakdown).

```html
<section class="border-y border-[rgba(26,34,56,0.10)] bg-[#F6F8FA]">
  <div class="mx-auto max-w-[1200px] px-5 py-16 sm:px-8 lg:px-10 lg:py-24">
    <div class="max-w-3xl">
      <?php echo $kicker('Regionale Referenzen'); ?>
      <h2 class="text-[clamp(1.9rem,3.6vw,2.85rem)] font-extrabold leading-[1.06] tracking-[-0.035em] text-[#1A2238]" data-reveal>
        Erfahrung mit Betrieben aus der Region.
      </h2>
      <p class="mt-5 max-w-2xl text-lg leading-8 text-[#51607C]" data-reveal>
        Regionale Unternehmen brauchen keine Hochglanz-Lösung von der Stange. Sie brauchen jemanden, der die Ausgangslage versteht.
      </p>
    </div>

    <div class="mt-12 grid gap-6 md:grid-cols-2">
      <?php foreach ($referenzen_preview as $ref) : ?>
        <article data-reveal class="overflow-hidden rounded-[22px] border border-[rgba(26,34,56,0.10)] bg-white shadow-[0_18px_50px_rgba(20,26,43,0.08)]">

          <!-- Browser-Mockup mit Bild -->
          <div class="border-b border-[rgba(26,34,56,0.10)] bg-[#EDEFF3] p-4">
            <div class="overflow-hidden rounded-[12px] border border-[rgba(26,34,56,0.10)] bg-white shadow-sm">
              <div class="flex h-9 items-center gap-2 border-b border-[rgba(26,34,56,0.10)] bg-[#F6F8FA] px-3">
                <span class="h-2 w-2 rounded-full bg-[#98A8BE]/60"></span>
                <span class="h-2 w-2 rounded-full bg-[#98A8BE]/60"></span>
                <span class="h-2 w-2 rounded-full bg-[#98A8BE]/60"></span>
                <span class="ml-auto rounded border border-[rgba(26,34,56,0.10)] bg-white px-2 py-0.5 text-[0.62rem] text-[#51607C] <?php echo esc_attr($mono); ?>">
                  <?php echo esc_html($ref['domain']); ?>
                </span>
              </div>
              <img
                class="aspect-[16/9] w-full object-cover object-top"
                src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/' . $ref['image']); ?>"
                alt="<?php echo esc_attr($ref['image_alt']); ?>"
                loading="lazy"
              >
            </div>
          </div>

          <!-- Inhalt -->
          <div class="p-6">
            <div class="flex flex-wrap gap-2">
              <span class="rounded-full border border-[rgba(26,34,56,0.10)] bg-[#F6F8FA] px-2.5 py-1 text-[0.68rem] font-medium uppercase tracking-[0.12em] text-[#636E89] <?php echo esc_attr($mono); ?>">
                <?php echo esc_html($ref['branche']); ?>
              </span>
              <span class="rounded-full border border-[rgba(26,34,56,0.10)] bg-[#F6F8FA] px-2.5 py-1 text-[0.68rem] font-medium uppercase tracking-[0.12em] text-[#636E89] <?php echo esc_attr($mono); ?>">
                <?php echo esc_html($ref['ort']); ?>
              </span>
            </div>
            <h3 class="mt-4 text-xl font-extrabold tracking-[-0.02em] text-[#1A2238]">
              <?php echo esc_html($ref['name']); ?>
            </h3>
            <p class="mt-3 text-base leading-7 text-[#51607C]">
              <?php echo esc_html($ref['text']); ?>
            </p>
            <div class="mt-4 flex flex-wrap gap-2">
              <?php foreach ($ref['tags'] as $tag) : ?>
                <span class="rounded-full bg-[#EDEFF3] px-3 py-1 text-sm font-medium text-[#34507A]">
                  <?php echo esc_html($tag); ?>
                </span>
              <?php endforeach; ?>
            </div>
            <a class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-[#3D5A80] hover:text-[#1A2238]" href="<?php echo esc_url($ref['url']); ?>" target="_blank" rel="nofollow noopener noreferrer">
              Website ansehen <?php echo $icon_arrow_right; ?>
            </a>
          </div>

        </article>
      <?php endforeach; ?>
    </div>

    <div class="mt-8" data-reveal>
      <a class="inline-flex items-center justify-center gap-2 rounded-[10px] border border-[rgba(26,34,56,0.22)] bg-white px-6 py-3.5 text-base font-semibold text-[#1A2238] shadow-sm transition hover:-translate-y-px hover:border-[rgba(26,34,56,0.40)] hover:shadow-md" href="<?php echo esc_url(home_url('/referenzen/')); ?>">
        Alle Referenzen ansehen <?php echo $icon_arrow_right; ?>
      </a>
    </div>
  </div>
</section>
```

---

## Sektion 7: FAQ

**Keine Änderungen.** Bestehende FAQ-Sektion 1:1 übernehmen. Die Daten bleiben im `$standorte`-Array (`faq_heading`, `faq`).

---

## Sektion 8: CTA

**Minimale Änderung:** Den langen CTA-Headline-Text in `$standorte` leicht persönlicher formulieren:
- Limburg: `'Ich schaue mir Ihre Website-Ausgangslage in Limburg an – unverbindlich und ehrlich.'`
- Lahnstein: `'Ich schaue mir Ihre Website-Ausgangslage in Lahnstein an – unverbindlich und ehrlich.'`
- Rheingau-Taunus: `'Ich schaue mir Ihre Website-Ausgangslage im Rheingau-Taunus an – unverbindlich und ehrlich.'`

Der Rest der CTA-Sektion (Subtext, Bullet-Liste, Button) bleibt strukturell unverändert. Subtext leicht anpassen:
> "Eine kurze Nachricht reicht. Ich antworte persönlich mit einer ehrlichen Einschätzung, welcher Schritt für Sie sinnvoll ist."

---

## JS-Änderungen

**`leistung-page.js` – keine strukturellen Änderungen nötig.**

Der bestehende `checkReveal()`-Mechanismus für `data-reveal` funktioniert weiterhin.

Der `scroll-reveal` + `data-scroll-reveal`-Mechanismus läuft in `main.js` und wird automatisch auf die neuen Pain-Point-Elemente angewendet – kein zusätzliches JS.

**Optional, wenn die Pain-Point-Sektion visuell zu wenig Spannung hat:** In `leistung-page.js` eine Funktion `initPainPoints()` ergänzen, die jede Pain-Point-Row via GSAP beim Einscroll von `opacity: 0, y: 20` auf `opacity: 1, y: 0` animiert (mit ScrollTrigger falls geladen, fallback über `checkReveal`-Muster). Nur dann implementieren, wenn der `data-scroll-reveal`-Effekt allein zu statisch wirkt.

---

## CSS-Änderungen

**Keine.** Alle benötigten Utility-Klassen sind entweder bereits in `main.css` vorhanden oder werden als Tailwind arbitrary values inline geschrieben. Die Tailwind-CSS-Datei wird nicht neu gebaut.

---

## Qualitätsprüfung nach Umsetzung

1. Alle `data-reveal`-Animationen greifen beim Scrollen
2. `data-scroll-reveal` + `scroll-reveal`-Klasse auf Pain-Point-Headlines: Wörter animieren wortweise ein
3. Portrait-Bild wird nicht per Rechtsklick/Inspect abrufbar (kein `<img>` mit src, sondern CSS `background-image` auf geschützter Route)
4. Referenz-Bilder laden korrekt (Pfad zu `assets/images/`)
5. Alle Links und URLs korrekt: `/website-optimierung/`, `/website-analyse/`, `/seo/`, `/google-ads/`, `/referenzen/`, `/ueber-mich/`, `/kontakt/`
6. Keine PHP-Warnings: alle Variablen korrekt referenziert
7. Mobile-Ansicht: Hero-Portrait-Element sinnvoll auf kleinen Screens (eventuell `hidden lg:block` oder kompakt)
8. FAQ-Accordion funktioniert weiterhin (JavaScript-Hooks intakt)
