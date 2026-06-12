# Backlog – Kanal SEO
**Ziel:** 1 qualifizierter SEO-Lead pro Monat → langfristig 1 Neukunde/Monat über organische Suche  
**Stand:** 12. Juni 2026 | Stufe 1 + Stufe 4 (Leistungsseiten + Inhaltsseiten) abgeschlossen | Basis: SEO Audit `02_data/processed/seo-audit-20260610.md`

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

- [x] **Google Business Profile anlegen und verifizieren**  
  Profil erstellt. Privatadresse zur Verifikation hinterlegt (nicht öffentlich). Profil als Dienstleister im Einzugsgebiet (Rhein-Lahn-Kreis, Limburg, Rheingau-Taunus-Kreis) eingerichtet – kein öffentlicher Standort.  
  Erstabnahme durch Google abgelehnt (Grund: fehlende Kundenpräsenz vor Ort / Einstufung als Online-Unternehmen).  
  Einspruch eingereicht am 11.06.2026 inkl. Gewerbeanmeldung als Nachweis. Entscheidung per E-Mail ausstehend.  
  Profil-Beschreibung angepasst: Hinweis auf persönliche Beratungstermine beim Kunden ergänzt.

- [x] **GBP-Beschreibung mit Keywords befüllen**  
  Beschreibung befüllt mit Leistungen, Region und Hinweis auf Vor-Ort-Beratung. Umgesetzt am 11.06.2026.

- [ ] **Erste 3–5 Kundenbewertungen einholen**  
  Bestehende Referenzkunden (KOPP Umwelt, Max KFZ) aktiv um Google-Bewertungen bitten. Bewertungsanzahl ist direkter Rankingfaktor im Local Pack.

---

### Stufe 3 – Keyword-Recherche (1–2 Tage, Voraussetzung für alles weitere)
> Ohne Keyword-Basis ist On-Page-Optimierung Raten.

- [ ] **Keyword-Recherche durchführen**  
  Cluster 1 – Lokal: „Webdesign [Katzenelnbogen/Nassau/Rhein-Lahn-Kreis/Westerwald]"  
  Cluster 2 – Service: „SEO Agentur KMU", „Google Ads Agentur Mittelstand"  
  Cluster 3 – Problem: „Website bringt keine Anfragen", „mehr Kunden über Google"  
  Tools: Google Keyword Planner, Ubersuggest, Google Suggest.

- [ ] **1 primäres Keyword pro geplanter Seite festlegen**  
  Startseite: Marken-Keyword + ein lokales Service-Keyword  
  Je neue Landingpage: 1 Haupt-Keyword + 2–3 Neben-Keywords

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

- [ ] **Lokale Landingpage: Region Rhein-Lahn / Westerwald**  
  URL: `/webdesign-rhein-lahn-kreis/`  
  Zielkeyword: „Webdesign Rhein-Lahn-Kreis" / „Online-Marketing Westerwald"  
  Hinweis: Lokale Landingpages mit Ortsangaben ranken schneller als generische Service-Seiten.

---

### Stufe 5 – Strukturierte Daten (2–4 Stunden)
> Erhöht Click-Through-Rate durch Rich Snippets, hilft Google beim Verständnis des Angebots.

- [ ] **LocalBusiness-Schema auf Startseite einfügen**  
  Felder: `name`, `address`, `telephone`, `url`, `serviceArea`, `priceRange`.

- [ ] **ProfessionalService- oder Organization-Schema ergänzen**  
  Für Vertrauenssignale und mögliche Knowledge-Panel-Einträge.

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
| Woche 1–2 | Technische Basis steht, GBP verifiziert, Sitemap eingereicht |
| Monat 1–2 | Erste Impressionen für Ziel-Keywords in GSC sichtbar, GBP erscheint im Local Pack |
| Monat 3–4 | Erste organische Klicks auf Landingpages, 5–10 Nutzer/Monat organisch |
| Monat 6+ | 20–50 organische Nutzer/Monat, erster SEO-Lead realistisch |

> SEO ist ein Aufbaukanal, kein Sofortkanal. Die Wirkung kommt verzögert, aber dauerhaft.
