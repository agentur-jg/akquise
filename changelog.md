# Changelog

## 11.06.2026 – Stufe 1 abgeschlossen

### HTTP→HTTPS-Redirect
- 301-Redirect via KAS All-Inkl aktiviert („HTTPS erzwingen")
- Verifiziert mit `curl -I http://agentur-jg.de` → `301 Moved Permanently`

### Rank Math installiert & konfiguriert
- Plugin installiert
- Datenverwaltung vollständig ins Theme verlagert
- Aktive Module: Sitemap, Sofortige Indexierung
- Deaktiviert: Lokales SEO, Analysen, 404 Monitor, Schema, Weiterleitungen, Rollenverwaltung, SEO Analysator

### SEO-JSON-Architektur eingeführt
- Neuer Ordner `03_theme/seo/` für SEO-Daten pro Seite
- Generischer Loader `agentur_jg_seo_config()` in `functions.php` liest JSON anhand WordPress-Slug
- `static $cache`-Variable verhindert doppeltes Lesen pro Request
- Rank Math Title/Description-Filter greifen auf JSON zurück, fallen auf Rank Math-Default zurück wenn keine Datei existiert

### Title Tag & Meta Description Startseite
- `03_theme/seo/home.json` angelegt
- Title: „Webdesign & Online-Marketing für KMU | Agentur JG – Katzenelnbogen"
- Meta: „Agentur JG hilft kleinen Unternehmen, online sichtbar zu werden und mehr Anfragen zu gewinnen. Aus Katzenelnbogen, für den Mittelstand."
- Live verifiziert via `curl`

### XML-Sitemap
- Von Rank Math generiert und in GSC eingereicht
- Erfolgreich gecrawlt am 08.06.2026

### Agent-Infrastruktur
- `99_agents/README.md` angelegt mit Projektstruktur, Dateireferenzen und Konventionen für KI-Agenten
