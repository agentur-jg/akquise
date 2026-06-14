# Agenten-Kontext: Agentur JG Akquise-System

Diese Datei ist die Orientierung für KI-Agenten im Projekt `02_Akquise`. Sie erklärt, welche Informationen wo liegen, welche Rolle die Ordner spielen und welche Dateien vor typischen Aufgaben gelesen werden sollten.

Operative Regeln stehen in [CONVENTIONS.md](CONVENTIONS.md). Spezialisierte Workflows liegen ebenfalls hier, z. B. [AUDIT_AGENT.md](AUDIT_AGENT.md), [SITEMAP_AGENT.md](SITEMAP_AGENT.md) und [INSTAGRAM_AGENT.md](INSTAGRAM_AGENT.md).

## Ziel des Systems

Das Projekt soll langfristig die Kundenakquise der Agentur JG absichern. Dafür werden Brand-Wissen, Zielgruppen-Erkenntnisse, Website-Code, Marketingdaten und Sales-Material so abgelegt, dass KI-Agenten daraus verlässliche Analysen, Inhalte, Experimente und konkrete Umsetzungsschritte ableiten können.

Aktuelles Wachstumsziel:

- 1 qualifizierter SEO-Lead pro Monat über organische Suche
- Website: https://agentur-jg.de
- Tech-Stack: WordPress, Custom Theme `agentur-jg-theme`, Rank Math nur für Sitemap und Sofortige Indexierung
- Hosting: All-Inkl / kasserver.com

## Grundprinzip

Dieses Repository ist kein statisches Markenhandbuch. Neue Daten aus Analytics, Search Console, Keyword-Recherche, Kundenfeedback, Sales-Gesprächen oder Kampagnen können bestehende Annahmen verbessern.

Wichtig: Rohdaten bleiben als Quelle erhalten. Verdichtete Erkenntnisse dürfen in Brand-, Marketing- oder Sales-Dateien überführt werden, müssen dort aber mit Datum, Quelle und kurzer Begründung nachvollziehbar bleiben.

## Verzeichnisstruktur

```text
02_Akquise/
|
+-- 01_brand/          Markenwissen, Zielgruppe, Strategie, Website-Konzept, Messaging
+-- 02_data/           Importierte Daten, Audits, Reports, Exporte und Analysen aus Quellen
+-- 03_theme/          Live genutztes WordPress-Theme der Website
+-- 04_marketing/      Kanalstrategie und Materialien für SEO, Instagram, E-Mail, Google Ads
+-- 05_sales/          Prozess nach Anfrage bis Angebotsunterzeichnung
+-- 99_agents/         Agenten-Kontext, Arbeitsregeln und Agenten-Briefings
+-- backlog.md         Priorisierte Aufgaben und nächste Umsetzungsschritte
+-- changelog.md       Dokumentierte Änderungen
+-- experiments.md     Tests, Hypothesen und Experimente
```

## Ordnerrollen

### `01_brand/`

Enthält die relevanten Informationen zur Brand Agentur JG. Dieser Ordner beschreibt nicht nur, wie die Marke heute verstanden wird, sondern auch, wie sie auf Basis neuer Zielgruppen- und Marktdaten präziser werden kann.

Wichtige Bereiche:

- `1-identity/`: Markenkern, Positionierung, Tonalität, Werte
- `2-audience/`: Zielgruppe, Pain Points, Personas, Customer Journey
- `3-strategy/`: Methode, Reifegradmodell, Website als Mittelpunkt
- `4-website/`: Seitenarchitektur, Design-System, Seitenkonzepte, Conversion-Architektur
- `5-messaging/`: Claims, Kurztexte, Über-Jona-Texte, Value Propositions

Bei Copy-, Positionierungs-, Zielgruppen- und Website-Konzeptaufgaben zuerst diesen Ordner lesen.

### `02_data/`

Enthält von Menschen eingefügte oder aus Tools exportierte Daten. Dazu gehören unter anderem Google Analytics, Google Search Console, Google Tag Manager, Keyword Planner, Sitemaps und Audits.

Dieser Ordner ist die Belegschicht des Systems. Agenten sollen Daten hier auswerten, aber nicht ungekennzeichnet in strategische Aussagen verwandeln. Wenn aus Daten eine neue Annahme entsteht, wird sie in der passenden Datei in `01_brand`, `04_marketing` oder `05_sales` mit Quelle und Datum ergänzt.

### `03_theme/`

Enthält das live genutzte WordPress-Theme. Änderungen hier können direkte Auswirkungen auf die Website haben.

Wichtige Bereiche:

- `functions.php`: Theme-Logik, SEO-Loader, strukturierte Daten
- `front-page.php`, `page-*.php`: Templates
- `assets/`: gebaute CSS-, JS- und Bilddateien
- `src/`: Quell-CSS und Quell-JS
- `seo/*.json`: SEO-Daten pro WordPress-Seite

Bei technischen Website-Aufgaben immer die bestehenden Theme-Konventionen prüfen, bevor neue Muster eingeführt werden.

### `04_marketing/`

Bündelt kanalbezogene Strategie, Inhalte und Arbeitsmaterialien. Dieser Ordner ist für Akquise-Aktivitäten vor und neben der Website gedacht.

Typische Inhalte:

- SEO-Planung und Keyword-Material
- Instagram-Posts, Carousels und Bildprompts
- E-Mail- und Google-Ads-Material
- kanalübergreifender `masterplan.md`

### `05_sales/`

Soll langfristig den Prozess von der Kundenanfrage bis zur Angebotsunterzeichnung abdecken. Aktuell liegen hier vor allem Qualifikationsfragen und Angebotsmaterial.

Agenten sollen diesen Ordner nutzen, wenn es um Lead-Qualifizierung, Erstgespräche, Angebotslogik, Einwandbehandlung oder Prozessstandardisierung geht.

### `99_agents/`

Enthält Kontext für KI-Agenten. Diese README ist die Projektkarte. `CONVENTIONS.md` enthält verbindliche Arbeitsregeln. Spezialisierte Agenten-Briefings wie `AUDIT_AGENT.md`, `SITEMAP_AGENT.md` und `INSTAGRAM_AGENT.md` beschreiben wiederkehrende Workflows.

## Wichtigste Dateien nach Tasktyp

| Tasktyp | Vorher lesen |
|---|---|
| Nächste Aufgaben planen | `backlog.md`, `experiments.md`, `changelog.md` |
| Brand, Positionierung, Tonalität | `01_brand/1-identity/`, `01_brand/5-messaging/` |
| Zielgruppe, Pain Points, Customer Journey | `01_brand/2-audience/`, relevante Reports in `02_data/` |
| Website-Strategie und Conversion | `01_brand/4-website/`, `03_theme/page-*.php`, `03_theme/front-page.php` |
| Audit erstellen | `99_agents/AUDIT_AGENT.md`, `backlog.md`, `changelog.md`, `experiments.md`, relevante Quellen in `02_data/` |
| SEO-Auswertung | `99_agents/AUDIT_AGENT.md`, `02_data/01_audits/`, `02_data/google-search-console/`, `02_data/keyword-planner/`, `03_theme/seo/` |
| WordPress-Umsetzung | `03_theme/functions.php`, betroffene Templates, `03_theme/seo/` |
| Marketingkampagnen | `04_marketing/README.md`, `04_marketing/masterplan.md`, passender Kanalordner |
| Instagram-Content | `99_agents/INSTAGRAM_AGENT.md`, `04_marketing/instagram/README.md`, bisherige Posts, relevante Audits |
| Sales-Prozess | `05_sales/` |

## Arbeitsweise für Agenten

1. Erst die passende Kontextschicht lesen: Brand, Daten, Theme, Marketing oder Sales.
2. Bestehende Aussagen nicht stillschweigend überschreiben. Neue Erkenntnisse als revisionierbare Ergänzung dokumentieren.
3. Zwischen Rohdaten, Analyse, Hypothese und beschlossener Strategie unterscheiden.
4. Bei Website-Code besonders vorsichtig arbeiten, weil `03_theme` das Live-Theme abbildet.
5. Bei wiederkehrenden Regeln die [CONVENTIONS.md](CONVENTIONS.md) beachten.
