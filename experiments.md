# Experimente & Entscheidungen

Architekturentscheidungen und getestete Ansätze mit Ergebnis.

Neueste Beiträge stehen oben.

---

## 14.06.2026 – Instagram-Hypothesen für datengetriebene Optimierung

**Frage:** Welche Annahmen sollen die ersten Instagram-Posts prüfen?

**Hypothesen:**

1. Regionale Hooks wie „Rhein-Lahn-Kreis" erhöhen die Relevanz und Profilbesuche bei lokalen KMU-Inhabern.
2. Carousel-Posts mit konkretem Website-Problem erzeugen mehr Saves und Shares als reine Vorstellungsposts.
3. Ruhige, reduzierte Corporate-Design-Slides stärken Wiedererkennung besser als generische Stockfoto-Optik.
4. Weiche CTAs wie „Schick mir den Link zu deiner Website" senken die Hemmschwelle für DMs.

**Messgrößen:**

- Reichweite
- Profilbesuche
- Website-Klicks
- Saves
- Shares
- Kommentare
- DMs

**Auswertung:** Sobald Daten vorliegen, in `02_data/` ablegen und bei mehreren Posts ein Instagram-Audit in `02_data/01_audits/` erstellen.

---

## 14.06.2026 – Marketing-Masterplan als strategischer Kompass

**Frage:** Welche Rolle soll `04_marketing/masterplan.md` im Akquise-System haben?

**Optionen:**
1. Masterplan als gemischte Datei für Strategie, To-dos, konkrete Posts und KPIs
2. Masterplan nur als strategische Kanal-Landkarte
3. Masterplan entfernen und alles in `backlog.md` verteilen

**Entscheidung:** Masterplan als strategische Kanal-Landkarte

**Begründung:**
- `masterplan.md` soll Orientierung geben, nicht tägliche Aufgaben verwalten
- konkrete Maßnahmen gehören in `backlog.md`
- testbare Annahmen gehören in `experiments.md`
- kanalbezogene Arbeitsdateien gehören in die jeweiligen Kanalordner, z. B. `04_marketing/instagram/`
- Auswertungen und datenbasierte Erkenntnisse gehören in `02_data/01_audits/`

**Ergebnis:** ✅ Struktur umgesetzt. `04_marketing/masterplan.md` wurde verdichtet, operative Marketing-Aufgaben wurden in `backlog.md` ergänzt.

---

## 13.06.2026 – Lokale Landingpages: Shared Template vs. Duplicate Content

**Frage:** Wie lassen sich mehrere standortspezifische Landingpages mit minimalem Aufwand pflegen, ohne zu viel identischen Content auszuspielen?

**Entscheidung:** Ein gemeinsames Template (`page-lokal-webdesign.php`) mit `$standorte`-Datenarray; standortspezifische Texte ausschließlich im Datenarray, kein HTML-Duplikat.

**Begründung:**
- Struktur und Design bleiben konsistent ohne Code-Duplikation
- Standortspezifische Differenzierung (Headline, Intro, FAQ, CTA) liegt vollständig im Datenarray – kein Template-Umbau nötig
- Geteilte Sektionen (Pain Points, Leistungskarten, Jona-Section, Referenzen) sind legitim: universell gültig, keine Keyword-Füllung

**Duplicate-Content-Einschätzung:**
- ~35–40 % des Fließtexts ist nach Optimierung standortspezifisch (vorher ca. 15–20 %)
- FAQ-Section ist vollständig einzigartig pro Seite (größtes Differenzierungspotenzial)
- Geteilter Content in Jona-Section und Referenzen ist inhaltlich gerechtfertigt

**Ergebnis:** ✅ Texte überarbeitet und live. Siteliner-/Copyscape-Kontrolle empfohlen nach Indexierung.

---

## 13.06.2026 – Tracking-Architektur: PHP-seitiger dataLayer-Push für Seitenkontext

**Frage:** Wie sollen GA4-Events mit Seitenkontextdaten (Seitentyp, Leistung, Region) angereichert werden, damit Conversions und Klicks den Ursprungsseiten zugeordnet werden können?

**Optionen:**
1. GTM-seitig: URL-basierte Lookup-Tabelle (reguläre Ausdrücke je Slug)
2. PHP-seitig: `dataLayer.push()` im `<head>` mit semantischen Werten aus einem PHP-`$page_map`-Array
3. Nur `{{Page Path}}` als Parameter direkt in GTM-Tags nutzen (URL statt Semantik)

**Entscheidung:** PHP-seitiger `dataLayer.push()` in `functions.php → agentur_jg_google_consent_mode()` mit `$page_map`-Array

**Begründung:**
- PHP kennt den Seitentyp zuverlässig über `get_post_field('post_name', get_queried_object_id())` und `is_front_page()`
- Semantische Werte (`"service"`, `"local"`, `"contact"`) sind in GA4-Berichten direkt lesbar – keine URL-Parsing nötig
- GTM-Lookup-Tabellen sind fehleranfällig bei URL-Strukturänderungen; PHP-Map wird mit dem Theme versioniert
- DLV-Variablen (`DLV - page_type`, `DLV - service_name`, `DLV - region_name`) lesen die Werte in GTM – saubere Trennung zwischen Datenlieferung (PHP) und Datenverwendung (GTM-Tags)
- Push läuft auf `wp_head` Priority 1, also vor GTM-Load → Werte sind bei Tag-Ausführung immer verfügbar

**Ergebnis:** ✅ Vollständig verdrahtet in GTM v15. Alle relevanten Events (WhatsApp, E-Mail, CTA, Scroll) erhalten `page_type`, `service_name`, `region_name`.

---

## 12.06.2026 – GSAP nur für Leistungsseiten (Conditional Asset Loading)

**Frage:** GSAP (externe Animationsbibliothek, ~75 KB) global laden oder nur bei Bedarf?

**Entscheidung:** Conditional enqueue via `agentur_jg_leistung_page_assets()` – lädt GSAP und `leistung-page.js` nur wenn Template `page-leistung.php` aktiv ist

**Begründung:**
- GSAP ist ausschließlich für Scroll-Animationen auf Leistungsseiten nötig
- Unnötige Ressourcen auf Startseite, Referenzen, Über-mich vermeiden
- WordPress `wp_enqueue_scripts` mit `is_page_template()`-Check als Standard-Muster

**Ergebnis:** ✅ Umgesetzt. Lighthouse-Wert auf anderen Seiten nicht belastet.

---

## 12.06.2026 – FAQPage-Schema automatisch aus SEO-JSON

**Frage:** Wo und wie werden FAQPage-Schemas verwaltet – pro Seite manuell oder zentral?

**Entscheidung:** Automatisch: `agentur_jg_faq_schema()` liest `faq`-Array aus dem bereits bestehenden SEO-JSON und rendert Schema-Markup ohne weiteren Code pro Seite

**Begründung:**
- SEO-JSON existiert bereits für jede Seite (Title, Description)
- FAQs in der gleichen Datei zu halten vermeidet eine zweite Datenquelle
- `wp_head`-Hook mit Priority 31 fügt das Schema global ein – keine Template-Änderungen nötig
- Neue Seite bekommt FAQPage-Schema automatisch, sobald `faq`-Schlüssel in der JSON-Datei vorhanden ist

**Ergebnis:** ✅ Funktioniert auf allen 9 FAQ-Seiten. Verifizierbar via Seitenquelltext (`<script type="application/ld+json">`).

---

## 12.06.2026 – leistung-app.js als Browser-Prototyp-Tool

**Frage:** Wie das Template-Markup entwickeln und iterieren, ohne jedes Mal WordPress zu benötigen?

**Entscheidung:** Standalone JavaScript-Datei (`leistung-app.js`), die identisches Markup wie `page-leistung.php` rendert

**Begründung:**
- Schnellere Iteration: Änderungen sofort im Browser sichtbar, kein WordPress-Deploy nötig
- `leistung-app.js` + HTML-Prototyp (`Leistungsseiten Redesign.html`) als Designwerkzeug
- Gleiche Tailwind-Klassen → CSS aus dem Build-Prozess direkt nutzbar
- Nach Fertigstellung: Markup 1:1 in PHP-Template übernommen

**Ergebnis:** ✅ Prototyp erfolgreich entwickelt und in `page-leistung.php` überführt. `leistung-app.js` bleibt als Entwicklungswerkzeug erhalten.

---

## 12.06.2026 – Leistungsseiten: ein generisches Template statt 6 separate

**Frage:** Wie werden 6 inhaltlich ähnliche Leistungsseiten (Website-Erstellung, SEO, Google Ads, ...) technisch umgesetzt?

**Optionen:**
1. 6 separate PHP-Templates (page-website-erstellen-lassen.php, page-seo.php, ...)
2. Ein generisches Template (`page-leistung.php`) mit PHP-Array für alle Seitendaten
3. WordPress Custom Post Type „Leistung" mit eigenem Gutenberg-Editor

**Entscheidung:** Ein generisches Template, Daten im PHP-Array direkt im Template

**Begründung:**
- Alle 6 Seiten haben identische Sektionen (Hero, Problem, Outcomes, Prozess, Für wen, FAQ, CTA)
- Ein Template hält HTML-Struktur und Tailwind-Klassen zwingend konsistent
- PHP-Array statt Datenbank: kein WordPress-Admin nötig, direkt versionierbar, AI-Agenten können Daten lesen/schreiben
- Custom Post Type wäre Overengineering für 6 statische Inhalte

**Ergebnis:** ✅ Funktioniert. Alle 6 Seiten laufen über `page-leistung.php`, Markup ist konsistent.

---

## 11.06.2026 – SEO-Datenverwaltung: Theme statt Rank Math UI

**Frage:** Wo sollen Title Tags, Meta Descriptions und strukturierte Daten gepflegt werden?

**Optionen:**
1. Rank Math UI (WordPress-Admin)
2. JSON-Dateien im Theme-Ordner
3. Direkt in PHP (functions.php)

**Entscheidung:** JSON-Dateien im Theme (`03_theme/seo/[slug].json`)

**Begründung:**
- Versionierbar per Git
- AI-Agenten können Dateien direkt lesen und schreiben ohne WordPress-Zugang
- Kein Lock-in in Rank Math-Datenbank
- Einheitliches Muster für alle zukünftigen Seiten (Stufe 4)
- Schema (JSON-LD) bleibt in PHP, weil es dynamische WordPress-Funktionen braucht (`home_url()` etc.)

**Ergebnis:** ✅ Funktioniert. Live verifiziert am 11.06.2026.
