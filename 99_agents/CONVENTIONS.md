# Agenten-Konventionen

Diese Datei enthält verbindliche Arbeitsregeln für KI-Agenten im Projekt `02_Akquise`.

## Revisionierbare Erkenntnisse

Neue oder geänderte Aussagen in Brand-, Marketing- oder Sales-Dateien müssen nachvollziehbar bleiben. Das gilt besonders, wenn Daten aus `02_data/` strategische Aussagen in `01_brand/`, `04_marketing/` oder `05_sales/` verändern.

Ergänzungen sollen nach diesem Muster dokumentiert werden:

```md
### Erkenntnis vom YYYY-MM-DD

Quelle: `02_data/.../datei.csv`
Anlass: Kurzer Kontext, z. B. GA4-Report, GSC-Auswertung, Kundenfeedback, Sales-Gespräch
Erkenntnis: Was wurde beobachtet?
Auswirkung: Welche bestehende Annahme, Persona, Botschaft oder Priorität wird dadurch angepasst?
```

Wenn eine bestehende Aussage ersetzt wird, nicht nur den neuen Stand eintragen. Kurz festhalten, was sich geändert hat und warum.

## Umgang mit Daten

- Rohdaten und Tool-Exporte in `02_data/` nicht inhaltlich verändern.
- Auswertungen, Zusammenfassungen und Ableitungen dürfen als neue Markdown-Dateien in passenden Analyse- oder Audit-Ordnern entstehen.
- Bei jeder Ableitung die Quelle nennen.
- Zwischen Fakt, Interpretation und Empfehlung unterscheiden.
- Keine Zielgruppen-, Kanal- oder Conversion-These ohne Beleg als dauerhaft gültig darstellen.

## Neue WordPress-Seiten

Bei jeder neuen WordPress-Seite auch eine SEO-JSON-Datei anlegen:

```text
03_theme/seo/[wordpress-slug].json
```

Format:

```json
{
  "title": "Seiten-Title | Agentur JG",
  "description": "Meta Description mit ca. 120 bis 155 Zeichen."
}
```

Der PHP-Loader in `03_theme/functions.php` liest die Datei automatisch anhand des WordPress-Slugs.

## SEO-Schema

Strukturierte Daten leben im Theme, nicht in Rank Math.

- Startseite: `agentur_jg_front_page_schema()` in `03_theme/functions.php`
- Neue Seiten: eigene Funktion mit passendem `is_page('slug')`-Guard anlegen
- Schema-Änderungen immer gegen bestehende Funktionen in `functions.php` prüfen

## Weiterleitungen

Weiterleitungen werden nicht über Rank Math gepflegt, sondern in der `.htaccess` im Webroot.

## Rank Math

Rank Math soll nur diese Module aktiv nutzen:

- Sitemap
- Sofortige Indexierung

Alle anderen Module verwalten keine Projektdaten.

## Theme-Arbeit

- `03_theme/` ist das Live-Theme. Änderungen können produktive Auswirkungen haben.
- Bestehende PHP-, CSS- und JS-Muster verwenden, bevor neue Abstraktionen eingeführt werden.
- SEO-Daten gehören in `03_theme/seo/*.json`, nicht hart in Templates.
- Bei visuellen Änderungen auch mobile Ansichten und lange deutsche Texte mitdenken.

## Dokumentationsstil

- Markdown-Dateien knapp, konkret und quellenbezogen schreiben.
- Datumsformat: `YYYY-MM-DD`.
- Dateipfade in Backticks setzen.
- Entscheidungen als Entscheidung dokumentieren, Hypothesen als Hypothese.
- Keine alten Aussagen löschen, wenn dadurch die Entwicklung einer Annahme unsichtbar wird.
- In `backlog.md`, `changelog.md` und `experiments.md` stehen neue Beiträge immer oben.
