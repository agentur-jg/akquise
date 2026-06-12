# Experimente & Entscheidungen

Architekturentscheidungen und getestete Ansätze mit Ergebnis.

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

## 12.06.2026 – GSAP nur für Leistungsseiten (Conditional Asset Loading)

**Frage:** GSAP (externe Animationsbibliothek, ~75 KB) global laden oder nur bei Bedarf?

**Entscheidung:** Conditional enqueue via `agentur_jg_leistung_page_assets()` – lädt GSAP und `leistung-page.js` nur wenn Template `page-leistung.php` aktiv ist

**Begründung:**
- GSAP ist ausschließlich für Scroll-Animationen auf Leistungsseiten nötig
- Unnötige Ressourcen auf Startseite, Referenzen, Über-mich vermeiden
- WordPress `wp_enqueue_scripts` mit `is_page_template()`-Check als Standard-Muster

**Ergebnis:** ✅ Umgesetzt. Lighthouse-Wert auf anderen Seiten nicht belastet.
