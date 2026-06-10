# Seitenarchitektur der Agentur-JG-Website

## Aktueller Umsetzungsstand

Das Theme besteht derzeit aus zwei implementierten Templates:

| Template | URL | Beschreibung |
|----------|-----|-------------|
| `front-page.php` | `/` | Startseite — eine lange Scroll-Seite mit allen Kern-Inhalten |
| `page-termin-buchen.php` | `/kontakt/` | Anfrage-/Kontaktseite |

Weitere Templates im Theme: `page.php` (generisches Template), `index.php` (Blog-Archiv) — noch nicht als eigenständige Seiten ausgebaut.

---

## Startseite (`front-page.php`)

Die Startseite ist als One-Page-Struktur aufgebaut. Sie enthält alle wesentlichen Inhaltsbereiche in einer einzigen langen Seite, die von oben nach unten durchgescrollt wird.

### Sektionen in Reihenfolge

**1. Hero** (`id` — kein Anchor, Seitenanfang)
- Label: „Websites & Online-Marketing aus Katzenelnbogen"
- Headline: „Ihre Website sollte mehr leisten als nur online zu sein."
- Subtext: Kurzpositionierung von Agentur JG für KMU
- CTA primär: „Unverbindlich anfragen" → `/kontakt/`
- CTA sekundär: „Referenzen ansehen" → `#referenzen`
- Trust-Zeile: „Persönlich betreut von Jona / Verständlich erklärt / Messbar verbessert"
- Rechts (Desktop): Mockup-Illustration (Aufmerksamkeitsquellen → Website → Anfrage/Bewerbung/Umsatz)

**2. Scroll-Reveal Statement** (Grauer Hintergrund, Fullscreen)
- Animierter Kernsatz: „Sie würden keinen Vertriebsmitarbeiter ohne Ziel, keine Stellenanzeige ohne Rückmeldung und kein Angebot ohne Nachfrage laufen lassen. Warum sollte Ihre Website anders funktionieren?"

**3. Problem-Sektion** (`#problem`)
- Label: „Typische Ausgangslagen"
- Headline: „Gute Arbeit allein reicht online nicht aus."
- 6 Problem-Kacheln im Grid:
  1. Keine professionelle Website
  2. Keine Anfragen
  3. Keine Google-Sichtbarkeit
  4. Falsche Anfragen
  5. Zu wenige Bewerbungen
  6. Keine klaren Zahlen
- Abschließender Blockzitat-Absatz mit CTA: „Mein Anliegen schildern" → `/kontakt/`

**4. Perspektive-Sektion** (`#perspektive`, Dark Navy)
- Label: „Website als Mittelpunkt"
- Headline: „Alle Wege führen zur Website, aber nur eine gute Website führt zur Anfrage."
- Rechts: Visualisierung des Weges (Quellen → Website: Verstehen/Vertrauen/Handeln → Anfrage/Bewerbung/Umsatz)
- Drei Kontrast-Aussagen: „Nicht nur online sein — gefunden werden", „Nicht nur gut aussehen — Vertrauen aufbauen", „Nicht nur Besucher sammeln — Handlungen auslösen"

**5. Leistungen-Sektion** (`#leistungen`)
- Label: „Leistungen"
- Headline: „Die passenden Bausteine für Ihren nächsten Schritt."
- 6 Leistungskarten (je mit Titel, Beschreibung, „Sinnvoll, wenn:"-Hinweis):
  1. Website-Erstellung
  2. Website-Optimierung
  3. SEO & lokale Sichtbarkeit
  4. Google Ads
  5. Mehr Anfragen aus vorhandenen Besuchern
  6. Tracking & Auswertung
- CTA: „Nächsten Schritt besprechen" → `/kontakt/`

**6. Methode-Sektion** (`#methode`, Grauer Hintergrund)
- Label: „Der Weg zur wirksamen Website"
- Headline: „Aus einer Website wird erst dann ein Werkzeug, wenn sie ein klares Ziel verfolgt."
- 5-Schritte-Prozess im Grid:
  1. Ziel klären
  2. Ist-Zustand prüfen
  3. Zielgruppe und Angebot verstehen
  4. Website aufbauen oder verbessern
  5. Besucher gewinnen und messen
- CTA: „Eigene Ausgangslage besprechen" → `/kontakt/`

**7. Referenzen-Sektion** (`#referenzen`, Grauer Hintergrund)
- Label: „Referenzen"
- Headline: „Zwei Projekte. Zwei Ausgangslagen. Ein Ziel: digitale Auftritte, die wirklich arbeiten."
- Zwei Referenz-Cards (je mit Screenshot, Ausgangslage, Umsetzung, Wirkung):
  - KOPP Umwelt (kopp-umwelt.de) — Entsorgung & Containerdienst, Heidenrod-Kemel
  - Max KFZ (max-kfz.de) — KFZ-Werkstatt, Holzhausen a.d. Haide
- CTA: „Eigenes Projekt besprechen" → `/kontakt/`

**8. Warum Agentur JG** (`#warum-agentur-jg`, Dark Navy)
- Label: „Warum Agentur JG"
- Headline: „Klarer planen. Verständlicher umsetzen. Besser entscheiden."
- Rechts: Accordion mit 6 Punkten:
  1. Verständlich statt kompliziert
  2. Strategie vor Umsetzung
  3. Website als Werkzeug statt Designprojekt
  4. Messbarkeit statt Bauchgefühl
  5. Persönlicher Ansprechpartner
  6. Keine leeren Versprechen
- CTA: „Unverbindlich anfragen" → `/kontakt/`

**9. Über Jona** (`#ueber-jona`)
- Label: „Über mich"
- Headline: „Hi, mein Name ist Jona und ich helfe Unternehmen, ihre Website wirtschaftlich zu denken."
- Drei Absätze Text (persönlich, ehrlich)
- Drei Stärken-Punkte: Klar erklärt / Persönlich betreut / Wirtschaftlich gedacht
- CTA: „Gespräch mit Jona anfragen" → `/kontakt/`
- Links: Portrait-Foto (geschützt, nur intern)

**10. Kontakt-CTA-Sektion** (`#kontakt`, Dark Navy)
- Label: „Nächster Schritt"
- Headline: „Schildern Sie kurz Ihr Anliegen. Ich melde mich persönlich."
- CTA primär: „Unverbindlich anfragen" → `/kontakt/`
- CTA sekundär: „E-Mail schreiben" → `mailto:kontakt@agentur-jg.de`
- Trust-Box mit 3 Punkten: Keine Verpflichtung / Keine Verkaufsshow auf Druck / Persönliche Rückmeldung von Jona

---

## Kontaktseite (`page-termin-buchen.php`)

**URL:** `/kontakt/`
**Template Name:** Termin buchen

Zweispaltige Seite: Links Einleitungstext + Trust-Signale, rechts Formular.

### Linke Spalte

- Label: „Unverbindlich anfragen"
- Headline: „Schildern Sie kurz, was Sie beschäftigt."
- Subtext: Einladender Beschreibungstext (kein Anruf nötig)
- Hinweis-Box: Agentur JG wird nebenberuflich geführt — Antwort in 1–2 Werktagen
- Alternativer Kontakt: WhatsApp-Button + E-Mail-Button
- Trust-Liste (3 Punkte):
  - Keine Verpflichtung — Sie müssen noch nichts entschieden haben.
  - Persönliche Antwort — Direkt von Jona, nicht von einem Team.
  - Kein Verkaufsgespräch — Wir klären zuerst, ob und wie ich helfen kann.

### Rechte Spalte — Formular

Felder:
- Ihr Name (Pflicht)
- Unternehmen (optional)
- Telefon oder E-Mail (Pflicht)
- Was beschäftigt Sie? (Freitext, 5 Zeilen, Pflicht)
- Datenschutz-Checkbox (Pflicht)

Submit: „Anfrage absenden"
Hinweis: „Antwort in der Regel innerhalb von 24 Stunden."

Erfolgsanzeige (nach Absendung): Bestätigungsbox mit Link zurück zur Startseite.

### Sektion „So läuft es ab"

3 Karten:
1. Kurz schreiben — Formular, E-Mail oder WhatsApp
2. Persönliche Rückmeldung — innerhalb von 24 Stunden
3. Persönliches Gespräch — ohne Druck, ohne Standardpaket

---

## Navigation

Die Navigation (header.php) verlinkt auf:
- Startseite (Logo)
- Abschnitte der Startseite: `#leistungen`, `#methode`, `#referenzen`, `#ueber-jona`
- Kontakt: `/kontakt/`
