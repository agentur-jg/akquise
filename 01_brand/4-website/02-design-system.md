# Design System der Agentur-JG-Website

Das Design System übersetzt die Markenwerte der Agentur JG in konkrete visuelle Entscheidungen. Es dient als Referenz für alle gestalterischen Umsetzungen.

Leitprinzip: Das Design soll nicht auffallen, sondern Vertrauen schaffen. Souveränität durch Klarheit.

---

## Farbpalette

### Primärfarben

| Farbe | Hex | Verwendung |
|-------|-----|-----------|
| Deep Navy | `#1A2238` | Primärfarbe — Headlines, primäre Buttons, Hintergrund dunkler Sektionen |
| Navy Hover | `#232D49` | Hover-Zustand von Buttons und interaktiven Elementen |
| Accent Blue | `#3D5A80` | Links, Unterstreichungen, Fokus-Outlines, Formularakzente |

**Markenbezug:** Das Navy steht für Verlässlichkeit und Klarheit. Kein Schwarz (zu hart), kein helles Blau (zu beliebig). Die Farbe wirkt ruhig und professionell — genau wie die Marke.

### Sekundärfarben

| Farbe | Hex | Verwendung |
|-------|-----|-----------|
| Slate Blue | `#4E6E97` | Dekorative Elemente, Icons |
| Medium Gray-Blue | `#51607C` | Sekundärtexte, Beschriftungen |
| Light Gray-Blue | `#98A8BE` | Borders, gedämpfte Texte, Placeholder |
| Pale Blue-Gray | `#AEBAD2` | Footer-Texte, Nebenbeschriftungen |

### Hintergrundfarben

| Farbe | Hex | Verwendung |
|-------|-----|-----------|
| Weiß | `#FFFFFF` | Haupthintergrund |
| Off-White | `#F6F8FA` | Abwechselnde Sektionen, Scroll-Reveal-Bereich |
| Soft Gray | `#EDEFF3` | Subtile Hintergründe, Kartenflächen |

**Markenbezug:** Die hellen Hintergründe erzeugen den Weißraum, der Klarheit kommuniziert. Viel Luft, klare Trennung, keine visuelle Überforderung.

### Dunkel-Modus (Dark Section)

| Farbe | Hex | Verwendung |
|-------|-----|-----------|
| Dark Navy | `#1A2238` | Hintergrund dunkler Sektionen |
| Light Text | `#D7DEEA` / `#D8DEE9` | Headlines auf dunkel |
| Secondary Text Dark | `#AEBAD2` | Fließtext auf dunkel |

Dunkle Sektionen werden sparsam eingesetzt — für Abschnitte, die besonders hervorgehoben werden sollen (z.B. Kernaussage, CTA-Bereich).

---

## Typografie

### Schriftarten

**Primär: Hanken Grotesk**
Sachlich, lesbar, modern ohne modisch zu wirken. Kommt ohne Schnörkel aus. Passt zur Tonalität: klar und direkt.

**Sekundär: IBM Plex Mono**
Monospace-Schrift für Labels, Tags und Kategoriebezeichnungen. Schafft Struktur und visuellen Rhythmus — ohne den Lesefluss zu stören.

### Schriftgrößen

| Verwendung | Größe | Gewicht |
|-----------|-------|---------|
| Hero-Headline | `clamp(2.55rem, 5.2vw, 4.35rem)` | 800 (extrabold) |
| Große Headline | `clamp(2.25rem, 4.8vw, 3.85rem)` | 800 |
| Section-Headline | `clamp(2rem, 3.8vw, 3.1rem)` | 700 |
| Subheadline | `clamp(1.4rem, 2vw, 1.8rem)` | 600 |
| Fließtext groß | `clamp(1.06rem, 1.5vw, 1.24rem)` | 400–500 |
| Fließtext | `1rem` | 400 |
| Label (Mono) | `0.68rem`, `0.64rem` | 700 |

Fluid Typography mit `clamp()` sorgt dafür, dass Headlines auf allen Bildschirmgrößen proportional wirken — ohne abrupte Sprünge.

### Zeilenabstand und Letter-Spacing

**Headlines:** Engere Zeilenabstände (1.02–1.08), negatives Letter-Spacing (−0.02 bis −0.035em) — wirkt kompakt und selbstsicher.

**Fließtext:** Normaler Zeilenabstand (1.5–1.625) — gut lesbar, kein Gedränge.

**Labels (Mono):** Positives Letter-Spacing (+0.12 bis +0.18em), Großbuchstaben — klare Orientierungselemente.

---

## Layout und Abstände

### Container

Maximale Breite: `1200px`, horizontale Zentrierung (`mx-auto`).

Horizontale Innenabstände:
- Mobile: `1.25rem` (20px)
- Tablet: `2rem` (32px)
- Desktop: `2.5rem` (40px)

### Sektionsabstände

| Kontext | Padding |
|---------|---------|
| Standardsektion | `py-16` (64px) |
| Große Sektion | `py-20` (80px) |
| Hero-Sektion | `py-24` (96px) |

### Grid

Zweispaltige Layouts nutzen bewusst leicht asymmetrische Verhältnisse (`1.05fr / 0.95fr`), um Hauptinhalt und Nebeninhalt visuell zu gewichten.

### Rasterstruktur

Im Hintergrund mancher Sektionen: subtiles Punktraster (34×34px) mit radialem Ausblenden. Wirkt wie strukturiertes Papier — ordentlich, ohne künstlich zu wirken.

---

## Komponenten

### Buttons

**Primärer Button**
- Hintergrund: `#1A2238`
- Radius: `10px`
- Padding: `12px 20px` (sm) / `16px 24px` (md)
- Schrift: 0.95–1rem, semibold, weiß
- Hover: leichte Aufwärtsbewegung (1px), dunklerer Hintergrund `#232D49`, stärkerer Schatten

**Sekundärer Button**
- Hintergrund: weiß/70% mit Border
- Border: `1px rgba(26,34,56,0.16)`
- Hover: weißer Hintergrund, dunklere Border

Beide Buttons wirken ruhig — kein aggressives Design. Der Fokus-Zustand (2px solid `#3D5A80`) ist explizit und barrierefrei.

### Cards und Boxen

- Border Radius: zwischen `10px` und `28px` (je nach Hierarchie)
- Border: `1px rgba(26,34,56,0.10–0.24)`
- Hintergrund: weiß, weiß/40–70% oder helle Grautöne
- Schatten: subtile Elevation-Schatten, keine harten Drop-Shadows

**Markenbezug:** Weiche Ränder, zurückhaltende Schatten — das wirkt vertrauenswürdig, nicht klinisch.

### Labels und Tags

- Schrift: IBM Plex Mono, uppercase, `0.68rem`, positives Tracking
- Background: weiß oder leichte Farbvariante
- Border-Radius: `rounded-full`
- Padding: `px-3 py-1`

Labels werden für Kategorisierungen, Leistungsbezeichnungen und strukturierende Hinweise verwendet.

### Header

- Höhe: 88px, fixed
- Scrolled State: leichter Weißschleier (84% Opazität), Blur-Effekt, dezente Border
- Versteckt sich beim Scrollen nach unten, erscheint wieder beim Scrollen nach oben
- Responsives Logo: Wortmarke + Initialien

### Footer

- Hintergrund: `#1A2238` (Dark Navy)
- 3-spaltiges Grid (Desktop), responsive gestapelt
- Enthält: Logo, Navigation, Kontaktdaten, rechtliche Links

---

## Animationen und Interaktion

**Scroll-Reveal (Kernaussagen)**
Wörter einer Headline werden beim Scrollen wortweise eingeblendet: Opazität 0.16 → 1, leichtes Hochgleiten (18px), Unschärfe-Auflösung (blur 6px → 0). Gesteuert mit GSAP und ScrollTrigger.

Diese Animation wird sparsam eingesetzt — für eine Kernaussage pro Seite, nicht flächendeckend.

**Link-Hover**
Navigationslinks erhalten eine animierte Unterstreichung (scaleX 0 → 1, 200ms). Kein Farbsprung, kein abrupter Wechsel.

**Reduces Motion**
Alle Animationen respektieren `prefers-reduced-motion`. Wer diese Einstellung aktiviert hat, sieht statische Darstellungen.

---

## Markenwert-Mapping

| Markenwert | Design-Entscheidung |
|-----------|---------------------|
| Klarheit | Viel Weißraum, klare Typografie-Hierarchie, keine visuellen Ablenkungen |
| Ehrlichkeit | Kein übertriebenes Design, keine grellen Farben, keine aufdringlichen Animationen |
| Wirtschaftlichkeit | Klare Struktur, schnelle Orientierung — der Besucher versteht schnell, was ihn erwartet |
| Nachhaltigkeit | Konsistentes System ohne Modeerscheinungen |
| Vertrauen | Ruhige Farbpalette (Navy statt Knallblau), weiche Ränder, ruhige Hover-Effekte |
| Persönlichkeit | Echte Bilder, kein Stock-Foto-Charakter, persönlicher Ton auch im Design |
