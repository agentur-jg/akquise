# Agentenanweisung: Instagram-Kanal

Diese Anweisung gilt für KI-Agenten, die Instagram-Inhalte, Kampagnen, Captions, Carousels oder ChatGPT-Bildprompts für die Agentur JG erstellen.

## Ziel

Der Instagram-Agent wahrt die Corporate Identity der Agentur JG und optimiert den Kanal langfristig datengetrieben. Er verbindet Brand-Kontext, Zielgruppenwissen, vorhandene Audits und Instagram-Leistungsdaten zu besseren Posts, klareren Prompts und konsistenterem Markenauftritt.

## Vor jeder Instagram-Aufgabe lesen

Immer zuerst:

- `99_agents/README.md`
- `99_agents/CONVENTIONS.md`
- `04_marketing/README.md`
- `04_marketing/masterplan.md`
- `04_marketing/instagram/README.md`
- `01_brand/1-identity/`
- `01_brand/2-audience/`
- `01_brand/5-messaging/`

Zusätzlich prüfen:

- relevante Audits in `02_data/01_audits/`
- vorhandene Instagram-Daten in `02_data/`, sobald Exporte oder manuelle Auswertungen existieren
- bisherige Posts in `04_marketing/instagram/`
- `backlog.md`, `changelog.md`, `experiments.md`, wenn der Post Teil einer größeren Kampagne oder eines Tests ist

## Markenleitplanken

Instagram soll wie Agentur JG klingen:

- klar statt laut
- ehrlich statt übertrieben
- strategisch statt oberflächlich
- regional nah statt beliebig
- hilfreich statt belehrend
- messbar statt vage

Keine unrealistischen Versprechen, kein Marketing-Hype, keine künstliche Dringlichkeit. Die Zielgruppe soll das Gefühl haben: Hier versteht jemand mein Unternehmen und erklärt Online-Marketing ohne Theater.

## Content-Logik

Jeder Post muss mindestens eine klare Aufgabe erfüllen:

- Problem bewusst machen
- Vertrauen in Jona aufbauen
- Website als Vertriebskanal erklären
- konkrete Verbesserung zeigen
- lokales Vertrauen stärken
- zu Website-Klick, DM oder Anfrage führen

Content-Säulen:

| Säule | Aufgabe | Beispiel |
|---|---|---|
| Mehrwert | konkrete Hilfe für KMU-Inhaber | Website-Check, SEO-Tipp, Conversion-Fehler |
| Einblick | Arbeitsweise sichtbar machen | Projektprozess, Analyse, Vorher/Nachher |
| Persönlichkeit | Vertrauen und Wiedererkennung | Haltung, lokale Nähe, ehrliche Learnings |

## Datengetriebene Verbesserung

Bei jedem neuen Post prüfen, was aus vorhandenen Daten gelernt werden kann:

- Welche Themen oder Hooks hatten Reichweite, Saves, Shares oder Profilbesuche?
- Welche Formate wurden angesehen, gespeichert oder weitergeleitet?
- Welche Posts führten zu Website-Klicks, DMs oder Anfragen?
- Welche Zielgruppenannahmen wurden bestätigt oder widerlegt?
- Welche visuellen Muster passen zur Corporate Identity und funktionieren trotzdem im Feed?

Wenn keine Instagram-Daten vorliegen, Annahmen klar als Hypothese markieren und den Post so formulieren, dass er später auswertbar ist.

## Ausgabe für neue Posts

Für jeden neuen größeren Instagram-Post einen Ordner anlegen:

```text
04_marketing/instagram/YYYYMMDD_post_XX/
```

Pflichtdateien:

- `carousel.md` oder `post.md`: Inhalt, Ziel, Zielgruppe, Slides oder Motiv, Caption, Hashtags, Posting-Checkliste
- `bildprompts.md`: Prompts für ChatGPT-Bilder oder Slides

Bei Carousels sollen in `carousel.md` stehen:

- Format und Slide-Anzahl
- Ziel des Posts
- Zielgruppe
- Customer-Journey-Phase
- Konzept
- Slide-Texte
- Visual-Hinweise
- Caption
- Hashtags
- Posting-Checkliste
- Messhypothese: Woran wird erkannt, ob der Post funktioniert?

## Prompt-Regeln für ChatGPT-Bilder

Jeder Bildprompt muss so geschrieben sein, dass er einzeln in ChatGPT genutzt werden kann.

Ein guter Prompt enthält:

- Format, z. B. `Instagram portrait 4:5, 1080x1350`
- Ziel des Bildes oder Slides
- Hintergrund, Farben und Stil
- genaue Textplatzierung
- exakte Texte, falls Text im Bild erscheinen soll
- Logo- oder Asset-Hinweise, falls benötigt
- Ausschlüsse, z. B. keine Mockups, keine Geräteframes, keine überladenen Illustrationen

Wichtig: Bei generierten Bildern mit Text besteht Fehlerrisiko. Wenn typografische Genauigkeit entscheidend ist, den Prompt so formulieren, dass ChatGPT ein textarmes Motiv liefert und Text später manuell gesetzt werden kann.

## Visuelle Leitplanken

- ruhig, hochwertig, reduziert
- keine grellen Farben
- keine generischen Stockfoto-Vibes
- keine überladenen Dashboards
- keine lauten Erfolgsversprechen
- regionale Nähe gerne subtil zeigen
- Logo dezent, nicht als Hauptmotiv erzwingen
- Lesbarkeit auf Mobile priorisieren

## Caption-Leitplanken

- Einstieg mit konkretem Problem oder Beobachtung
- kurze Absätze
- klare Sprache ohne Fachchinesisch
- Jona als persönlicher Absender
- CTA weich, aber eindeutig
- keine Hashtag-Wand ohne Relevanz

## Auswertung nach Veröffentlichung

Sobald Leistungsdaten vorliegen, eine kurze Auswertung ergänzen oder einen Audit anstoßen:

```md
## Auswertung vom YYYY-MM-DD

Quelle: `02_data/...`
Post: `04_marketing/instagram/YYYYMMDD_post_XX/`
Ergebnis: Reichweite, Saves, Shares, Profilbesuche, Website-Klicks, DMs
Erkenntnis: Was hat funktioniert oder nicht?
Folge: Was wird beim nächsten Post angepasst?
```

Bei mehreren Posts oder klaren Mustern soll daraus ein Instagram-Audit in `02_data/01_audits/` entstehen.
