# Agentenanweisung: Sitemap abrufen und strukturieren

Diese Anweisung gilt für KI-Agenten, die den aktuellen Seitenbestand von `agentur-jg.de` prüfen oder `02_data/sitemap/sitemap-struktur.md` aktualisieren.

## Aufgabe

Rufe die folgende Sitemap ab und strukturiere alle enthaltenen Seiten in:

```text
02_data/sitemap/sitemap-struktur.md
```

Sitemap-URL:

```text
https://agentur-jg.de/page-sitemap.xml
```

WebFetch-Anweisung:

```text
URL: https://agentur-jg.de/page-sitemap.xml
Prompt: Liste alle URLs vollständig auf, inklusive lastmod-Datum falls vorhanden.
```

## Ausgabeformat

Strukturiere die URLs nach diesen Kategorien:

1. Startseite: `/`
2. Leistungen: alle URLs unter `/leistungen/*`
3. Lokale Landingpages: alle stadtspezifischen URLs, z. B. `/webdesign-*`
4. Info-Seiten: z. B. `/ueber-mich/`, `/referenzen/`, `/ablauf/`, `/kontakt/`
5. Rechtliches: `/impressum/`, `/datenschutzerklaerung/`

Für jede URL dokumentieren:

- vollständige URL
- Seitentitel, falls erkennbar
- letztes Änderungsdatum (`lastmod`), falls vorhanden

## Verwendung

Die strukturierte Sitemap dient als Datenreferenz für Agenten, die:

- den aktuellen Seitenbestand von `agentur-jg.de` kennen müssen
- neue Inhalte mit bestehenden Seiten abgleichen sollen
- interne Verlinkungen prüfen oder vorschlagen sollen
- SEO-Audits oder Content-Gap-Analysen durchführen sollen

Nach jeder Aktualisierung in `02_data/sitemap/sitemap-struktur.md` das Aktualisierungsdatum dokumentieren.
