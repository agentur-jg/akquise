# Backlog – Kanal SEO
**Ziel:** 1 qualifizierter SEO-Lead pro Monat → langfristig 1 Neukunde/Monat über organische Suche  
**Stand:** 13. Juni 2026 | Stufe 1 + Stufe 3 + Stufe 4 + Stufe 5 abgeschlossen | Basis: SEO Audit `02_data/processed/seo-audit-20260610.md` | Keyword-Recherche: `02_data/processed/keyword-recherche-20260612.md`

---

## Priorisierung nach Wirkung

Die Maßnahmen sind nach ihrer Hebelwirkung sortiert: zuerst das, was den größten Effekt mit dem geringsten Aufwand bringt.

---

### Stufe 1 – Technische Basis (sofort, 1–2 Tage)
> Ohne diese Schritte kann kein weiterer SEO-Aufwand Wirkung entfalten.

- [x] **HTTP→HTTPS-Redirect prüfen und sicherstellen**  
  301-Redirect via KAS All-Inkl aktiviert. Verifiziert 11.06.2026.

- [x] **SEO-Plugin installieren (Rank Math empfohlen)**  
  Rank Math installiert. Datenverwaltung vollständig ins Theme verlagert (JSON-Architektur). Nur Sitemap + Sofortige Indexierung aktiv.

- [x] **XML-Sitemap generieren und in GSC einreichen**  
  Sitemap eingereicht, erfolgreich gecrawlt am 08.06.2026.

- [x] **Title Tag & Meta Description Startseite optimieren**  
  Title: *„Webdesign & Online-Marketing für KMU | Agentur JG – Katzenelnbogen"*  
  Meta: *„Agentur JG hilft kleinen Unternehmen, online sichtbar zu werden und mehr Anfragen zu gewinnen. Aus Katzenelnbogen, für den Mittelstand."*  
  Verwaltet in `03_theme/seo/home.json`, geladen via `agentur_jg_seo_config()` in functions.php.
  
= Umgesetzt am 11.06.2026
---

### Stufe 2 – Google Business Profile (1 Woche, höchste lokale Wirkung)
> Das GBP ist das wirksamste kostenlose SEO-Tool für lokale Dienstleister.

- [x] **Google Business Profile anlegen und verifizieren** – abgeschlossen (negativ)  
  Profil erstellt. Einspruch 11.06.2026 → abgelehnt 13.06.2026.  
  Ablehnungsgrund: kein verifizierbarer Standort mit physischem Kundenkontakt.  
  **Entscheidung: GBP nicht weiter verfolgen.** Kompensation über LocalBusiness-Schema (Stufe 5), lokale Landingpages (Stufe 4) und Verzeichnis-Einträge (Stufe 7).

- [x] **GBP-Beschreibung mit Keywords befüllen** – entfällt (GBP nicht weiter verfolgt)

- [ ] **Erste 3–5 Kundenbewertungen einholen**  
  Bestehende Referenzkunden (KOPP Umwelt, Max KFZ) aktiv um Google-Bewertungen bitten. Bewertungsanzahl ist direkter Rankingfaktor im Local Pack.

---

### Stufe 3 – Keyword-Recherche (1–2 Tage, Voraussetzung für alles weitere)
> Ohne Keyword-Basis ist On-Page-Optimierung Raten.

- [x] **Keyword-Recherche durchführen**  
  Abgeschlossen 12.06.2026. 12 Batches im Google Keyword Planner, Tätigkeitsgebiet vollständig vermessen.  
  Ergebnisse: `02_data/processed/keyword-recherche-20260612.md`

- [x] **1 primäres Keyword pro geplanter Seite festlegen**  
  Validiertes Set (je 50 Suchanfragen/Monat, stabil):  
  – `webdesign limburg` → `/webdesign-limburg/`  
  – `webdesign lahnstein` → `/webdesign-lahnstein/`  
  – `webdesign rheingau` + `webdesign taunus` → `/webdesign-rheingau-taunus/` (kombiniert)  
  National (500/Monat): `webdesign handwerker` → `/webdesign-handwerker/` (mittelfristig)  
  National (500/Monat): `seo für handwerker` → `/seo-handwerker/` (mittelfristig)

---

### Stufe 4 – Dedizierte Landingpages (2–4 Wochen, größter langfristiger Hebel)
> Die Startseite kann nicht für alle Keywords ranken. Jede Leistung braucht eine eigene URL.

- [x] **Service-Seite: Webdesign / Website-Erstellung**  
  URL: `/website-erstellen-lassen/` – Umgesetzt 12.06.2026. Generisches Template `page-leistung.php`, SEO-JSON mit FAQPage-Schema.

- [x] **Service-Seite: SEO & lokale Sichtbarkeit**  
  URL: `/seo/` – Umgesetzt 12.06.2026.

- [x] **Service-Seite: Website-Optimierung**  
  URL: `/website-optimierung/` – Umgesetzt 12.06.2026.

- [x] **Service-Seite: Google Ads**  
  URL: `/google-ads/` – Umgesetzt 12.06.2026.

- [x] **Service-Seite: Mehr Anfragen / Conversion-Optimierung**  
  URL: `/mehr-anfragen/` – Umgesetzt 12.06.2026.

- [x] **Service-Seite: Tracking & Auswertung**  
  URL: `/website-analyse/` – Umgesetzt 12.06.2026.

- [x] **Leistungsübersicht (Hub)**  
  URL: `/leistungen/` – Umgesetzt 12.06.2026. Verlinkung zu allen 6 Einzelseiten.

- [x] **Inhaltsseiten: Ablauf, Referenzen, Über mich**  
  URLs: `/ablauf/`, `/referenzen/`, `/ueber-mich/` – Alle mit SEO-JSON + FAQPage-Schema. Umgesetzt 12.06.2026.

- [x] **Lokale Landingpages: Limburg, Lahnstein, Rheingau-Taunus**
  URLs: `/webdesign-limburg/`, `/webdesign-lahnstein/`, `/webdesign-rheingau-taunus/` – Umgesetzt 13.06.2026. Generisches Template `page-lokal-webdesign.php`, SEO-JSON mit FAQPage-Schema.
  Texte überarbeitet 13.06.2026: Headline, Intro, FAQ-Antworten und CTA standortspezifisch differenziert (Duplicate-Content-Reduktion).

- [ ] **Lokale Landingpage: Region Rhein-Lahn / Westerwald**  
  URL: `/webdesign-rhein-lahn-kreis/`  
  Zielkeyword: „Webdesign Rhein-Lahn-Kreis" / „Online-Marketing Westerwald"  
  Hinweis: Lokale Landingpages mit Ortsangaben ranken schneller als generische Service-Seiten.

---

### Stufe 5 – Strukturierte Daten (2–4 Stunden)
> Erhöht Click-Through-Rate durch Rich Snippets, hilft Google beim Verständnis des Angebots. Kompensiert teilweise den fehlenden GBP-Eintrag für lokale Sichtbarkeit.

- [x] **LocalBusiness-Schema auf Startseite einfügen**  
  Felder: `name`, `address` (PLZ + Ort), `telephone`, `email`, `url`, `areaServed`, `priceRange`, `sameAs`, `makesOffer`.  
  Umgesetzt 13.06.2026 in `functions.php → agentur_jg_local_business_schema()`.

- [x] **ProfessionalService- oder Organization-Schema ergänzen**  
  Kombiniert als `@type: ['LocalBusiness', 'ProfessionalService']`. Umgesetzt 13.06.2026.  
  Zusätzlich: ortsspezifisches Schema auf lokalen Landingpages (`agentur_jg_lokal_page_schema()`).

---

### Stufe 6 – Content / Blog (laufend, ab Monat 2–3)
> Organische Reichweite entsteht durch Content, der echte Fragen der Zielgruppe beantwortet.

- [ ] **Blog starten: 1 Artikel pro Monat (Minimum)**  
  Themen-Ideen nach Zielgruppe (inhabergeführte KMU):
  - „Warum bringt meine Website keine Anfragen?" (Problem-Keyword)
  - „Was kostet eine professionelle Website für ein kleines Unternehmen?" (Kaufintent)
  - „Lokale SEO für Handwerksbetriebe: Was wirklich funktioniert" (Nischen-Keyword)
  - „Google Business Profile einrichten: Schritt für Schritt" (informationell)

- [ ] **FAQ-Sektion auf Startseite ergänzen**  
  5–7 häufige Kundenfragen mit kurzen Antworten. Doppelte Wirkung: Conversion + Featured Snippets.

- [ ] **Referenz-Seiten ausbauen (KOPP Umwelt, Max KFZ)**  
  Aus den bestehenden Referenz-Kacheln eigene Case-Study-Seiten machen. Keyword-Potenzial: „Webdesign Referenz [Branche]", interne Verlinkung stärken.

---

### Stufe 7 – Linkbuilding / Off-Page (laufend, ab Monat 2)
> Links von anderen Websites sind Vertrauenssignale für Google.

- [ ] **Branchen-/Regionsverzeichnisse eintragen**  
  Priorität: Google Maps (via GBP), IHK Koblenz Mitgliederverzeichnis, Branchenbuch.de, Yelp, Cylex.

- [ ] **Partner-/Kundenseiten um Verlinkung bitten**  
  KOPP Umwelt und Max KFZ bitten, einen Link zu agentur-jg.de auf ihrer Website zu setzen (z.B. „Website erstellt von Agentur JG").

- [ ] **Gastbeiträge in lokalen/regionalen Medien (mittelfristig)**  
  Lokale Wirtschaftsmagazine, IHK-Publikationen oder regionale Blogs als Gastautorin/Gastautor.

---

### Stufe 8 – Monitoring & Iteration (laufend)

- [x] **GA4-Tracking vollständig einrichten**
  GTM v13–v15: Conversion-Tracking (generate_lead), Formular-Start/-Fehler, WhatsApp- und E-Mail-Klicks, CTA-Klicks, Scroll Depth (50 %/90 %). PHP-seitiger dataLayer-Push liefert Seitenkontext (page_type, service_name, region_name) für alle Events. GA4 Custom Dimensions angelegt (Seitentyp, Leistung, Region). generate_lead als Conversion markiert. Abgeschlossen 13.06.2026.

- [ ] **Monatliches SEO-Review einrichten**  
  GSC und GA einmal pro Monat auswerten: Welche Keywords bringen Impressionen? Welche Seiten performen? Was hat sich verändert?

- [ ] **Keyword-Ranking-Tracking einrichten**  
  Kostenloses Tool: Google Search Console selbst. Optional: Sistrix Starter oder Mangools.

- [ ] **Core Web Vitals prüfen (sobald ausreichend Traffic)**  
  Lighthouse-Report lokal durchführen. LCP, CLS, FID analysieren.

---

## Zeithorizont & Erwartungen

| Zeitraum | Erwartetes Ergebnis |
|----------|---------------------|
| Woche 1–2 | Technische Basis steht, Sitemap eingereicht, LocalBusiness-Schema live |
| Monat 1–2 | Erste Impressionen für Ziel-Keywords in GSC sichtbar, Verzeichnis-Einträge gesetzt |
| Monat 3–4 | Erste organische Klicks auf Landingpages, 5–10 Nutzer/Monat organisch |
| Monat 6+ | 20–50 organische Nutzer/Monat, erster SEO-Lead realistisch |

> SEO ist ein Aufbaukanal, kein Sofortkanal. Die Wirkung kommt verzögert, aber dauerhaft.
