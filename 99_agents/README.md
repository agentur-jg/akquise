# Agent-Kontext: Agentur JG – Akquise-Projekt

## Projekt auf einen Blick

**Ziel:** 1 qualifizierter SEO-Lead pro Monat über organische Suche  
**Website:** https://agentur-jg.de  
**Tech-Stack:** WordPress + Custom Theme (`agentur-jg-theme`) + Rank Math (nur Sitemap + Sofortige Indexierung aktiv)  
**Hosting:** All-Inkl (kasserver.com)

---

## Verzeichnisstruktur

```
02_Akquise/
│
├── 01_brand/                        Markenidentität (stabile Grundlagen)
│   ├── 00_unternehmensziele.md      Geschäftsziele
│   ├── 1-identity/                  Markenkern, Positionierung, Tonalität, Werte
│   ├── 2-audience/                  Zielgruppendefinition
│   ├── 3-strategy/                  Strategie
│   ├── 4-website/                   Website-Konzept
│   └── 5-messaging/                 Botschaften & Copy
│
├── 02_data/                         Daten & Analysen
│   ├── raw/                         Rohdaten (nicht bearbeiten)
│   │   ├── email/
│   │   ├── google-analytics/
│   │   ├── google-search-console/
│   │   └── instagram/
│   ├── processed/                   Aufbereitete Dokumente & Codex-Pläne
│   │   ├── seo-audit-20260610.md    SEO-Audit (Basis für Backlog)
│   │   └── codex-stufe1-title-meta.md
│   └── sitemap/
│
├── 03_theme/                        WordPress-Theme (live auf dem Server)
│   ├── seo/                         ← SEO-Daten pro Seite (title + description)
│   │   └── home.json                Startseite
│   ├── assets/                      CSS, JS, Images
│   ├── functions.php                Theme-Logik, SEO-Loader, JSON-LD-Schema
│   ├── front-page.php               Startseiten-Template
│   └── ...
│
├── 04_marketing/                    Marketingkanäle
│   ├── e-mail/
│   ├── google-ads/
│   ├── instagram/
│   └── seo/                         SEO-Materialien (Keyword-Listen etc.)
│
├── 05_sales/                        Vertriebsprozess
│   ├── 01-fragen/                   Qualifikationsfragen
│   └── 02-angebot/                  Angebotsvorlagen
│
├── 99_agents/                       Dieser Ordner – Kontext für KI-Agenten
│
├── backlog.md                       ← Aktuelle Aufgaben (SEO-Stufen 1–8)
├── changelog.md
└── experiments.md
```

---

## Wichtigste Dateien für die meisten Tasks

| Datei | Wofür |
|---|---|
| `backlog.md` | Was als nächstes zu tun ist |
| `03_theme/functions.php` | Theme-Code, SEO-Loader, Schema |
| `03_theme/seo/*.json` | SEO-Daten pro Seite |
| `02_data/processed/seo-audit-20260610.md` | Ausgangslage & Begründung der Maßnahmen |
| `01_brand/1-identity/` | Tonalität, Positionierung – bei Copy-Aufgaben lesen |

---

## Konventionen

### Neue WordPress-Seite anlegen
Bei jeder neuen Seite immer auch eine SEO-JSON-Datei anlegen:

```
03_theme/seo/[wordpress-slug].json
```

Format:
```json
{
  "title": "Seiten-Title | Agentur JG",
  "description": "Meta Description (120–155 Zeichen)."
}
```

Der PHP-Loader in `functions.php` (`agentur_jg_seo_config()`) liest diese Datei
automatisch anhand des WordPress-Slugs. Keine weiteren Schritte nötig.

Geplante Seiten (Stufe 4):
```
03_theme/seo/webdesign-fuer-kmu.json
03_theme/seo/seo-fuer-kleine-unternehmen.json
03_theme/seo/webdesign-rhein-lahn-kreis.json
03_theme/seo/google-ads-betreuung.json
```

### SEO-Schema (JSON-LD)
Strukturierte Daten leben in `functions.php`, nicht in Rank Math.  
Startseite: `agentur_jg_front_page_schema()` (Zeile ~281)  
Neue Seiten: analog als eigene Funktion mit `is_page('slug')`-Guard einfügen.

### Weiterleitungen
Nicht über Rank Math, sondern in `.htaccess` im Webroot.

### Rank Math
Nur zwei Module aktiv: **Sitemap** und **Sofortige Indexierung**.  
Alle anderen Module deaktiviert. Rank Math verwaltet keine Daten mehr.
