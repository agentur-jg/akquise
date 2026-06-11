# Codex Task – Stufe 1: SEO-Loader + JSON-Architektur

## Ziel
Alle SEO-Daten (Title, Meta Description) leben als JSON-Dateien im Theme.
Kein WordPress-Admin, kein Rank Math UI nötig — AI kann die Dateien direkt schreiben.

## Kontext
- Theme-Verzeichnis lokal: `03_theme/`
- Auf dem Server: `wp-content/themes/agentur-jg-theme/`
- Rank Math ist installiert (wird als Infrastruktur-Hook behalten, verwaltet aber keine Daten mehr)
- `functions.php` hat bereits einen vereinfachten Vorgänger dieser Lösung (Zeile 600–614)
  → dieser wird durch die generische Lösung ersetzt

---

## Aufgabe 1 – functions.php: Alte Filter ersetzen

**Entferne** die beiden bestehenden `add_filter`-Blöcke am Ende der Datei (Zeile 600–614):

```php
add_filter('rank_math/frontend/title', function (string $title): string {
    if (is_front_page()) {
        return 'Webdesign &amp; Online-Marketing für KMU | Agentur JG – Katzenelnbogen';
    }

    return $title;
});

add_filter('rank_math/frontend/description', function (string $description): string {
    if (is_front_page()) {
        return 'Agentur JG hilft kleinen Unternehmen, online sichtbar zu werden und mehr Anfragen zu gewinnen. Aus Katzenelnbogen, für den Mittelstand.';
    }

    return $description;
});
```

**Ersetze** sie durch folgenden Code:

```php
function agentur_jg_seo_config(): array
{
    if (is_front_page()) {
        $slug = 'home';
    } else {
        $slug = get_post_field('post_name', get_queried_object_id());
    }

    if (empty($slug)) {
        return [];
    }

    $file = get_template_directory() . '/seo/' . $slug . '.json';

    if (! file_exists($file)) {
        return [];
    }

    return json_decode(file_get_contents($file), true) ?? [];
}

add_filter('rank_math/frontend/title', function (string $title): string {
    $config = agentur_jg_seo_config();
    return $config['title'] ?? $title;
});

add_filter('rank_math/frontend/description', function (string $description): string {
    $config = agentur_jg_seo_config();
    return $config['description'] ?? $description;
});
```

---

## Aufgabe 2 – Ordner und JSON-Datei anlegen

Erstelle den Ordner `03_theme/seo/` und darin die Datei `03_theme/seo/home.json`:

```json
{
  "title": "Webdesign & Online-Marketing für KMU | Agentur JG – Katzenelnbogen",
  "description": "Agentur JG hilft kleinen Unternehmen, online sichtbar zu werden und mehr Anfragen zu gewinnen. Aus Katzenelnbogen, für den Mittelstand."
}
```

---

## Aufgabe 3 – Rank Math Module (manuell im WP-Admin)

Diese Module in `Rank Math → Dashboard → Module` deaktivieren:

| Modul | Aktion |
|---|---|
| Lokales SEO | ❌ deaktivieren |
| Analysen | ❌ deaktivieren |
| 404 Monitor | ❌ deaktivieren |
| Rollenverwaltung | ❌ deaktivieren |
| SEO Analysator | ❌ deaktivieren |
| Weiterleitungen | ❌ deaktivieren |
| Schema | ❌ deaktivieren |

Diese Module aktiv lassen:

| Modul | Aktion |
|---|---|
| Sitemap | ✅ aktiv lassen |
| Sofortige Indexierung | ✅ aktiv lassen |

---

## Verifikation

Nach dem Deploy:

1. Startseite im Browser öffnen → Browser-Tab zeigt:
   `Webdesign & Online-Marketing für KMU | Agentur JG – Katzenelnbogen`

2. Quelltext prüfen (`Ctrl+U`) → `<meta name="description"` enthält:
   `Agentur JG hilft kleinen Unternehmen...`

3. Für jede neue Seite in Stufe 4 reicht es, eine neue Datei anzulegen:
   `03_theme/seo/webdesign-fuer-kmu.json`

---

## Konvention für neue Seiten (Stufe 4+)

Dateiname = WordPress-Slug der Seite.

Beispiele:
```
03_theme/seo/home.json                         → Startseite
03_theme/seo/webdesign-fuer-kmu.json           → /webdesign-fuer-kmu/
03_theme/seo/seo-fuer-kleine-unternehmen.json  → /seo-fuer-kleine-unternehmen/
03_theme/seo/webdesign-rhein-lahn-kreis.json   → /webdesign-rhein-lahn-kreis/
```

---

## Status Stufe 1 nach diesem Task

| Aufgabe | Status |
|---|---|
| HTTP→HTTPS 301-Redirect | ✅ erledigt (KAS All-Inkl, 11.06.2026) |
| Rank Math installieren | ✅ erledigt |
| XML-Sitemap + GSC | ✅ erledigt (gecrawlt 08.06.2026) |
| Strukturierte Daten Startseite | ✅ bereits in functions.php (Zeile 281–423) |
| Title Tag & Meta Description | ✅ nach diesem Task erledigt |
