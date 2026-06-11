# Experimente & Entscheidungen

Architekturentscheidungen und getestete Ansätze mit Ergebnis.

---

## 11.06.2026 – SEO-Datenverwaltung: Theme statt Rank Math UI

**Frage:** Wo sollen Title Tags, Meta Descriptions und strukturierte Daten gepflegt werden?

**Optionen:**
1. Rank Math UI (WordPress-Admin)
2. JSON-Dateien im Theme-Ordner
3. Direkt in PHP (functions.php)

**Entscheidung:** JSON-Dateien im Theme (`03_theme/seo/[slug].json`)

**Begründung:**
- Versionierbar per Git
- AI-Agenten können Dateien direkt lesen und schreiben ohne WordPress-Zugang
- Kein Lock-in in Rank Math-Datenbank
- Einheitliches Muster für alle zukünftigen Seiten (Stufe 4)
- Schema (JSON-LD) bleibt in PHP, weil es dynamische WordPress-Funktionen braucht (`home_url()` etc.)

**Ergebnis:** ✅ Funktioniert. Live verifiziert am 11.06.2026.
