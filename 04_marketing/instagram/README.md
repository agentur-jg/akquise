# Instagram-Arbeitsbereich

Dieser Ordner enthält Strategie, Inhalte, Bildprompts, Assets und spätere Auswertungen für den Instagram-Kanal der Agentur JG.

## Ziel des Kanals

Instagram soll langfristig Vertrauen, Wiedererkennung und Nähe zur Zielgruppe aufbauen. Der Kanal ist kein reiner Reichweitenkanal, sondern unterstützt die Akquise, indem er Jona als persönliche Marke sichtbar macht und wiederkehrend auf die Website als messbaren Vertriebskanal einzahlt.

## Grundausrichtung

- Account-Fokus: persönliche Marke Jona, nicht anonymer Unternehmens-Account
- Zielgruppe: inhabergeführte KMU, Handwerker, Dienstleister und lokale Anbieter
- Region: Rhein-Lahn-Kreis, Katzenelnbogen, Lahnstein, Limburg und umliegende relevante Märkte
- Ton: klar, ehrlich, ruhig, fachlich, bodenständig
- Zielhandlung: Profilbesuch, Website-Klick, DM oder Anfrage

## Content-Säulen

| Säule | Ziel | Typische Formate |
|---|---|---|
| Mehrwert | Zielgruppe erkennt Problem und Lösungsweg | Carousel, Checkliste, Mini-Audit |
| Einblick | Arbeitsweise und Kompetenz sichtbar machen | Projektpost, Prozesspost, Vorher/Nachher |
| Persönlichkeit | Vertrauen und Wiedererkennung | Standpunkt, lokale Nähe, Lernmomente |

## Post-Struktur

Jeder größere Post oder jedes Carousel erhält einen eigenen Ordner:

```text
04_marketing/instagram/YYYYMMDD_post_XX/
|
+-- carousel.md      Inhalt, Slides, Caption, Hashtags, Posting-Checkliste
+-- bildprompts.md   ChatGPT-Bildprompts für alle benötigten Slides oder Motive
+-- 1.png            finales Bild oder Slide 1
+-- 2.png            finales Bild oder Slide 2
```

Bei Single-Image-Posts kann statt `carousel.md` auch `post.md` verwendet werden.

## Datengetriebene Optimierung

Nach Veröffentlichungen sollen Leistungsdaten gesammelt und ausgewertet werden. Relevante Daten gehören zuerst in `02_data/`, z. B. spätere Instagram-Exports oder manuelle Auswertungen.

Wichtige Kennzahlen:

- Reichweite
- Impressionen
- Profilbesuche
- Website-Klicks
- Follows
- Saves
- Shares
- Kommentare
- DMs
- Themenbezug und Format

Neue Erkenntnisse fließen in Audits unter `02_data/01_audits/` und können anschließend die Instagram-Strategie, Content-Säulen oder zukünftige Prompts verbessern.

## Agenten-Workflow

Für neue Instagram-Inhalte immer [INSTAGRAM_AGENT.md](../../99_agents/INSTAGRAM_AGENT.md) lesen.
