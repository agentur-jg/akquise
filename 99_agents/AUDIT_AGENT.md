# Agentenanweisung: Audits erstellen

Diese Anweisung gilt für KI-Agenten, die neue Auditberichte in `02_data/01_audits/` erstellen.

## Ziel

Ein Audit verdichtet vorhandene Daten, bestehende Projektplanung und erkennbare Lücken zu einem nachvollziehbaren Bericht. Der Bericht soll nicht nur Daten zusammenfassen, sondern konkrete Erkenntnisse, Risiken, Chancen und nächste Schritte für die Akquise der Agentur JG ableiten.

Audits werden in `02_data/01_audits/` abgelegt, weil sie aus Rohdaten und Projektkontext abgeleitete Analyse-Dokumente sind.

## Vor jedem Audit lesen

Immer zuerst die Projektsteuerung prüfen:

- `backlog.md`: Was ist bereits geplant oder priorisiert?
- `changelog.md`: Was wurde bereits umgesetzt?
- `experiments.md`: Welche Hypothesen, Tests oder offenen Experimente existieren?
- `99_agents/README.md`: Projektstruktur und Kontext
- `99_agents/CONVENTIONS.md`: Regeln für Daten, Quellen und revisionierbare Erkenntnisse

Danach die fachlich relevanten Quellen in `02_data/` prüfen. Typische Quellordner:

- `02_data/google-analytics/`: Nutzerverhalten, Akquise, Engagement, Landingpages, Geräte, Demografie
- `02_data/google-search-console/`: Suchanfragen, Seiten, Länder, Geräte, Darstellung in der Suche
- `02_data/keyword-planner/`: Suchvolumen, Wettbewerb, Keyword-Chancen
- `02_data/google-tag-manager/`: Tracking-Setup und Tag-Konfigurationen
- `02_data/sitemap/`: aktueller Seitenbestand und Sitemap-Struktur
- weitere kanalbezogene Datenordner, sobald sie ergänzt werden, z. B. E-Mail, Instagram oder Ads

Wenn das Audit Brand-, Zielgruppen-, Marketing- oder Sales-Aussagen berührt, zusätzlich die passenden Dateien lesen:

- `01_brand/`: Positionierung, Zielgruppe, Website-Konzept, Messaging
- `04_marketing/`: Kanalstrategie und Kampagnenmaterial
- `05_sales/`: Sales-Prozess, Qualifikation, Angebot

## Arbeitsablauf

1. Audit-Ziel klären: Welcher Bereich wird geprüft? Beispiel: SEO, Website-Conversion, Zielgruppe, Instagram, E-Mail, Tracking, Sales.
2. Quelleninventar erstellen: Welche Dateien wurden gelesen und welche Datenzeiträume decken sie ab?
3. Projektabgleich machen: Erkenntnisse mit `backlog.md`, `changelog.md` und `experiments.md` abgleichen.
4. Bestehendes nicht doppelt empfehlen: Wenn eine Maßnahme bereits im Backlog steht, als bestätigt, priorisiert oder zu präzisieren markieren.
5. Neue Erkenntnisse sauber trennen: Fakt, Interpretation, Hypothese und Empfehlung getrennt formulieren.
6. Auditbericht in `02_data/01_audits/` erstellen.
7. Falls sich daraus Brand-, Marketing- oder Sales-Annahmen ändern, die betroffenen Dateien nicht still überschreiben. Nach `99_agents/CONVENTIONS.md` als datierte Erkenntnis ergänzen.

## Dateinamen

Auditberichte erhalten sprechende Dateinamen mit Datum:

```text
02_data/01_audits/[thema]-audit-YYYYMMDD.md
```

Beispiele:

```text
02_data/01_audits/seo-audit-20260614.md
02_data/01_audits/ga4-audit-20260614.md
02_data/01_audits/conversion-audit-20260614.md
02_data/01_audits/tracking-audit-20260614.md
```

## Aufbau eines Auditberichts

```md
# [Thema]-Audit Agentur JG

**Datum:** YYYY-MM-DD
**Audit-Ziel:** Was wurde geprüft?
**Datenbasis:** Welche Dateien, Tools und Zeiträume wurden verwendet?

## Kurzfazit

Die wichtigsten 3 bis 5 Erkenntnisse.

## Quellenlage

Welche Daten wurden geprüft? Welche Daten fehlen oder sind unsicher?

## Abgleich mit Projektsteuerung

### Bereits im Backlog
- Maßnahme oder Thema aus `backlog.md`
- Audit-Einschätzung: bestätigt, präzisiert, niedriger priorisiert, höher priorisiert

### Bereits umgesetzt
- Relevante Punkte aus `changelog.md`

### Laufende oder passende Experimente
- Relevante Punkte aus `experiments.md`

## Erkenntnisse

### 1. [Erkenntnis]

Fakt: Was zeigen die Daten?
Interpretation: Was bedeutet das wahrscheinlich?
Beleg: Quelle mit Dateipfad.
Auswirkung: Was ändert sich dadurch für Akquise, Website, Marketing oder Sales?

## Chancen

Konkrete Potenziale, die aus den Daten entstehen.

## Risiken und Lücken

Unklare Daten, Tracking-Probleme, fehlende Inhalte, Widersprüche oder operative Risiken.

## Empfehlungen

Priorisierte Empfehlungen mit kurzer Begründung.

| Priorität | Empfehlung | Begründung | Zielbereich |
|---|---|---|---|
| Hoch | ... | ... | SEO / Website / Marketing / Sales |

## Nächste Schritte

- Was sollte in den Backlog?
- Was sollte als Experiment angelegt werden?
- Welche Datei in `01_brand`, `04_marketing` oder `05_sales` sollte aktualisiert werden?
```

## Qualitätsregeln

- Jede zentrale Aussage braucht eine Quelle oder muss klar als Hypothese markiert sein.
- Keine Rohdaten in `02_data/` verändern.
- Keine Empfehlungen geben, ohne vorher `backlog.md`, `changelog.md` und `experiments.md` geprüft zu haben.
- Keine bestehenden Maßnahmen doppelt erfinden. Besser den Status schärfen.
- Widersprüche offen benennen.
- Fehlende Daten als Datenlücke dokumentieren, nicht durch Vermutungen ersetzen.
- Auditberichte sollen entscheidungsfähig sein: kurz genug zum Lesen, konkret genug zum Handeln.
