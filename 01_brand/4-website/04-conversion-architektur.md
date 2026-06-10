# Conversion-Architektur der Agentur-JG-Website

Dieses Dokument beschreibt die tatsächlich implementierte Conversion-Logik der Website: Wo CTAs platziert sind, welche Texte verwendet werden, wie Vertrauen aufgebaut wird und wie die drei Personas den Weg zur Kontaktaufnahme gehen.

Leitprinzip: Conversion ohne Manipulation. Kein künstlicher Druck, keine Countdown-Timer, keine übertriebenen Versprechen. Stattdessen: klare Führung, Hürden abbauen, Vertrauen aufbauen.

---

## Conversion-Ziel

Das primäre Conversion-Ziel der gesamten Website ist die Kontaktaufnahme über `/kontakt/`.

Es gibt kein Kaufziel. Die Website soll Bereitschaft erzeugen, nicht Dringlichkeit.

---

## CTA-Hierarchie

### Primärer CTA: „Unverbindlich anfragen"

Ziel: `/kontakt/`
Verwendet in: Hero, Warum-JG-Sektion, Kontakt-CTA-Sektion

Das Wort „Unverbindlich" ist zentral — es senkt die Hemmschwelle für skeptische KMU-Inhaber. Es signalisiert: Noch keine Entscheidung nötig.

### Situative CTAs (kontextuell formuliert)

| Sektion | CTA-Text | Ziel |
|---------|---------|------|
| Hero (sekundär) | Referenzen ansehen | `#referenzen` |
| Problem-Sektion | Mein Anliegen schildern | `/kontakt/` |
| Leistungen | Nächsten Schritt besprechen | `/kontakt/` |
| Methode | Eigene Ausgangslage besprechen | `/kontakt/` |
| Referenzen | Eigenes Projekt besprechen | `/kontakt/` |
| Über Jona | Gespräch mit Jona anfragen | `/kontakt/` |
| Kontakt-CTA-Sektion (primär) | Unverbindlich anfragen | `/kontakt/` |
| Kontakt-CTA-Sektion (sekundär) | E-Mail schreiben | `mailto:kontakt@agentur-jg.de` |

**Beobachtung:** Alle primären CTAs auf der Startseite verweisen auf `/kontakt/`. Kein CTA verzweigt in einen anderen Bereich der Website. Das macht die Conversion-Strecke eindeutig.

---

## Vertrauensanker

Vertrauensanker sind Inhalte, die Hemmschwellen vor der Kontaktaufnahme gezielt abbauen.

### Auf der Startseite

**Hero-Trust-Zeile:**
„Persönlich betreut von Jona / Verständlich erklärt / Messbar verbessert"

Drei Einwände werden hier ohne explizite Nennung entkräftet: anonyme Agentur, Marketing-Blabla, fehlende Messbarkeit.

**Kontakt-CTA-Sektion — Trust-Box:**
- Keine Verpflichtung — Sie müssen noch nicht genau wissen, welche Maßnahme Sie brauchen.
- Keine Verkaufsshow auf Druck — Wir schauen zuerst auf Ziel, Ausgangslage und sinnvolle nächste Schritte.
- Persönliche Rückmeldung von Jona — ehrliche Einschätzung, was realistisch ist und was keinen Sinn ergibt.

**Referenzen-Sektion:**
Reale Projekte mit Ausgangslage, Umsetzung und Wirkung. Kein Versprechen, nur Dokumentation.

**Accordion „Warum Agentur JG":**
Sechs Punkte, die direkt auf typische Agentururteile eingehen. Jedes Item öffnet mit einem Problem und schließt mit einer konkreten Aussage.

### Auf der Kontaktseite

**Hinweis-Box:**
Ehrlicher Hinweis auf nebenberufliche Führung der Agentur und realistische Antwortzeit (1–2 Werktage). Diese Offenheit stärkt das Vertrauen — wer die Einschränkungen nennt, hat nichts zu verbergen.

**Trust-Liste:**
- Keine Verpflichtung — Sie müssen noch nichts entschieden haben.
- Persönliche Antwort — Direkt von Jona, nicht von einem Team.
- Kein Verkaufsgespräch — Wir klären zuerst, ob und wie ich helfen kann.

**Sektion „So läuft es ab":**
Erklärt nach dem Formular, was als nächstes passiert. Nimmt die Unsicherheit nach dem Absenden.

---

## Conversion-Pfade nach Persona

### Bernd Müller (Handwerksmeister, 54)

**Typischer Einstieg:** Empfehlung oder Google-Suche nach Website-Agentur regional

**Pfad auf der Startseite:**
Hero (Headline trifft ihn: zu wenig aus Website) → Problem-Sektion (erkennt sich in Kachel 1 oder 3) → Referenz KOPP Umwelt (ähnliche Branche, ähnliche Ausgangslage) → Über Jona (persönliche Sprache gibt Vertrauen) → Kontakt

**Entscheidungshindernis:** Skepsis durch schlechte Erfahrungen, Angst vor unnötigen Ausgaben

**Abbau:** KOPP-Umwelt-Referenz als konkretes Handwerksbeispiel, Jonas ehrlicher Text im „Über mich"-Abschnitt

**Wahrscheinliche CTA-Nutzung:** „Gespräch mit Jona anfragen" oder „Unverbindlich anfragen"

---

### Stefanie Klein (Dienstleisterin, 43)

**Typischer Einstieg:** Empfehlung oder gezielter Anbieter-Vergleich

**Pfad auf der Startseite:**
Hero → Scroll-Reveal Statement (trifft ihre analytische Denkweise) → Problem-Sektion (Kachel 2 oder 4) → Methode (sie liest den 5-Schritte-Prozess komplett) → Accordion „Warum JG" (prüft jeden Punkt) → Kontakt

**Entscheidungshindernis:** Skepsis gegenüber lauter Werbung, Bedarf nach nachvollziehbarer Strategie

**Abbau:** Methode-Sektion zeigt strukturiertes Denken, Accordion-Punkte 1 und 2 sprechen direkt ihre Einwände an

**Wahrscheinliche CTA-Nutzung:** „Eigene Ausgangslage besprechen" (nach Methode-Sektion)

---

### Murat Demir (Händler/lokaler Anbieter, 38)

**Typischer Einstieg:** Direkte Suche nach SEO oder Google Ads Agentur regional

**Pfad auf der Startseite:**
Hero → Leistungen-Sektion (sucht SEO & lokale Sichtbarkeit oder Google Ads) → Referenzen (prüft ob Ergebnisse vorliegen) → Kontakt-CTA

**Entscheidungshindernis:** Will schnelle Wirkung, erwartet messbare Ergebnisse

**Abbau:** Leistungskarten haben „Sinnvoll, wenn:"-Hinweise, die wirtschaftlich argumentieren; Tracking & Auswertung als Leistungspunkt zeigt Messorientierung

**Wahrscheinliche CTA-Nutzung:** „Nächsten Schritt besprechen" (nach Leistungen-Sektion)

---

## Conversion-Sprache

Die Sprache in und um CTAs folgt konsequent der Markentonal: klar, ruhig, direkt.

**Eingesetzte CTA-Formulierungen (aus dem Code):**
- Unverbindlich anfragen
- Mein Anliegen schildern
- Nächsten Schritt besprechen
- Eigene Ausgangslage besprechen
- Eigenes Projekt besprechen
- Gespräch mit Jona anfragen
- Anfrage absenden

**Gemeinsames Muster:** Keine Imperativrufe, kein Ausrufezeichen, keine Zahlenversprechen. Jede Formulierung lädt ein, ohne zu drängen.

---

## Messbare Conversion-Ereignisse

Diese Ereignisse sollten durch Tracking erfasst werden, um die Wirkung der Conversion-Architektur zu beurteilen:

- Formularabsendung auf `/kontakt/` (primäres Conversion-Ereignis)
- Klick auf primären CTA-Button je Sektion der Startseite
- Klick auf WhatsApp-Link auf der Kontaktseite
- Klick auf E-Mail-Link
- Scroll-Tiefe auf der Startseite (wer erreicht welche Sektion)
- Seitenfolge: wie viele Nutzer wechseln von Startseite direkt zu `/kontakt/`
