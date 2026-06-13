# Changelog

## 13.06.2026 – Lokale Landingpages: Textoptimierung

### Duplicate-Content-Reduktion
- Headline, Intro, FAQ-Antworten und CTA-Headline für alle drei Standorte standortspezifisch überarbeitet
- Limburg: lokaler Rhein-Lahn-Fokus, ehrliche Einschätzung als CTA
- Lahnstein: Übergangslage Koblenz/Rhein-Lahn, spezifische FAQ-Antworten je Einzugsgebiet
- Rheingau-Taunus: Heterogenität des Kreises (Rüdesheim bis Taunusstein) als Alleinstellungsmerkmal
- Struktur des Templates (`page-lokal-webdesign.php`) bleibt unverändert
- Analyse durch Claude, Umsetzung durch Codex, Review durch Claude

---

## 13.06.2026 – Lokale Landingpages Stufe 4

### Neues lokales Page-Template
- `page-lokal-webdesign.php` angelegt für `/webdesign-limburg/`, `/webdesign-lahnstein/` und `/webdesign-rheingau-taunus/`
- Ein gemeinsames Standort-Datenarray steuert Hero, lokale Verankerung, Leistungsübersicht, Zielgruppen, FAQ und CTA
- Slug-Templates `page-webdesign-limburg.php`, `page-webdesign-lahnstein.php` und `page-webdesign-rheingau-taunus.php` laden das gemeinsame Template automatisch über die WordPress Template-Hierarchy
- Browser-Hero-Widget und FAQ-Markup orientieren sich an `page-leistung.php`; `leistung-page.js` wird wiederverwendet
- Lokale Seiten nach Brand-System geschärft: Website als Werkzeug, kompakte Agentur-JG-Methode, regionale Referenzen, ruhige Trust-Box und CTA-Sprache ohne Verkaufsdruck

### SEO-JSON
- `seo/webdesign-limburg.json`
- `seo/webdesign-lahnstein.json`
- `seo/webdesign-rheingau-taunus.json`
- Alle drei Dateien enthalten Title, Description und FAQ-Array für automatisches FAQPage JSON-LD

### functions.php
- `agentur_jg_lokal_page_assets()` lädt GSAP und `assets/js/leistung-page.js` nur für `page-lokal-webdesign.php` oder die drei lokalen Slugs

---

## 12.06.2026 – Onepager → Multi-Page-Website + Stufe 4 abgeschlossen

### Website-Architektur: Onepager aufgelöst
- Startseite ist weiterhin Einstiegspunkt, aber alle Hauptbereiche sind jetzt eigenständige Unterseiten
- Header (`header.php`) mit echter Navigation zu `/leistungen/`, `/ablauf/`, `/referenzen/`, `/ueber-mich/`
- `front-page.php` überarbeitet: Leistungsübersicht verlinkt zu Einzelseiten statt Onepager-Ankern

### 5 neue Page-Templates
- `page-leistungen.php` – Leistungsübersicht (Hub mit Link zu allen 6 Einzelseiten)
- `page-leistung.php` – Generisches Template für alle 6 Leistungseinzelseiten (ein Template, alle Daten im PHP-Array)
- `page-referenzen.php` – Referenzprojekte mit Fallstudien (KOPP Umwelt, Max KFZ)
- `page-ueber-mich.php` – Über Mich
- `page-ablauf.php` – Ablauf der Zusammenarbeit (4 Schritte)

### 6 Leistungseinzelseiten (alle via page-leistung.php)
- `/website-erstellen-lassen/` – Website-Erstellung für KMU
- `/website-optimierung/` – Optimierung bestehender Websites
- `/seo/` – SEO & lokale Sichtbarkeit
- `/google-ads/` – Google Ads Betreuung
- `/mehr-anfragen/` – Conversion-Optimierung
- `/website-analyse/` – Tracking & Auswertung

### SEO-JSON für alle neuen Seiten (10 neue Dateien)
- Alle 6 Leistungsseiten + `/ablauf/` + `/referenzen/` + `/ueber-mich/` + `/leistungen/` mit eigenen JSON-Dateien
- 9 von 10 Dateien enthalten `faq`-Array → automatisch als FAQPage JSON-LD gerendert
- `seo/leistungen.json` ohne FAQ (Hub-Seite, keine Kaufentscheidungs-FAQs)

### Neue functions.php Features
- `agentur_jg_faq_schema()` – Liest `faq`-Array aus SEO-JSON, rendert FAQPage JSON-LD in `<head>` (Hook: `wp_head` Priority 31). Kein pro-Seiten-Code nötig.
- `agentur_jg_leistung_page_assets()` – Lädt GSAP 3.12.5 + `leistung-page.js` nur auf `page-leistung.php`-Templates (conditional enqueue)

### JavaScript
- `assets/js/leistung-page.js` – FAQ-Accordion (Einzelöffnung, aria-expanded) + GSAP-Scroll-Animationen für Leistungsseiten
- `leistung-app.js` – Standalone Prototyping-Tool: rendert alle 6 Leistungsseiten im Browser (ohne WordPress) aus `window.LEISTUNGEN`; wurde genutzt, um Template-Markup zu entwickeln

### Design-Artefakt
- `Leistungsseiten Redesign.html` – HTML-Prototyp der Leistungsseiten (Ausgangspunkt für `page-leistung.php`)

### Tailwind
- `tailwind.config.js` – Content-Pfad um `./assets/js/**/*.js` erweitert (Klassen in `leistung-page.js` werden nun beim Build erfasst)

---

## 11.06.2026 – Stufe 1 abgeschlossen

### HTTP→HTTPS-Redirect
- 301-Redirect via KAS All-Inkl aktiviert („HTTPS erzwingen")
- Verifiziert mit `curl -I http://agentur-jg.de` → `301 Moved Permanently`

### Rank Math installiert & konfiguriert
- Plugin installiert
- Datenverwaltung vollständig ins Theme verlagert
- Aktive Module: Sitemap, Sofortige Indexierung
- Deaktiviert: Lokales SEO, Analysen, 404 Monitor, Schema, Weiterleitungen, Rollenverwaltung, SEO Analysator

### SEO-JSON-Architektur eingeführt
- Neuer Ordner `03_theme/seo/` für SEO-Daten pro Seite
- Generischer Loader `agentur_jg_seo_config()` in `functions.php` liest JSON anhand WordPress-Slug
- `static $cache`-Variable verhindert doppeltes Lesen pro Request
- Rank Math Title/Description-Filter greifen auf JSON zurück, fallen auf Rank Math-Default zurück wenn keine Datei existiert

### Title Tag & Meta Description Startseite
- `03_theme/seo/home.json` angelegt
- Title: „Webdesign & Online-Marketing für KMU | Agentur JG – Katzenelnbogen"
- Meta: „Agentur JG hilft kleinen Unternehmen, online sichtbar zu werden und mehr Anfragen zu gewinnen. Aus Katzenelnbogen, für den Mittelstand."
- Live verifiziert via `curl`

### XML-Sitemap
- Von Rank Math generiert und in GSC eingereicht
- Erfolgreich gecrawlt am 08.06.2026

### Agent-Infrastruktur
- `99_agents/README.md` angelegt mit Projektstruktur, Dateireferenzen und Konventionen für KI-Agenten
