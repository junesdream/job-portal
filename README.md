# Jobportal

Dies ist ein Jobportal-Projekt, das mit Laravel im Backend und HTML/CSS sowie UI mit Bootstrap im Frontend entwickelt. Das Projekt bietet Funktionen für Benutzer zum Anzeigen, Erstellen und Verwalten sowie Löschen von Jobs sowie zum Verwalten von Unternehmen und Jobkategorien.

## Funktionen

- Anzeigen von Jobalist und Erstellen, Bearbeiten inkl. Löschen von Stellenanzeigen.
- Zuweisen von Stellenanzeigen zu bestimmten Unternehmen und Kategorien.
- Benutzerrollenverwaltung: Admin, Arbeitgeber, Benutzer.
- Authentifizierungssystem für eingeschränkte Aktionen.
- RESTful-Resource-Controller zur Verwaltung von Jobs, Unternehmen und Kategorien.

## Voraussetzungen

- PHP >= 8.2
- Composer
- Node.js & npm
- Laravel 11.9
- SQLite/MySQL (oder eine andere unterstützte Datenbank)

## Installation

1. Klone das Repository:
   ```bash
   git clone https://github.com/junesdream/job-portal.git
   cd job-portal
   ```

2. Installiere die Abhängigkeiten:
   ```bash
   composer install
   npm install
   ```

3. Erstelle die `.env`-Konfigurationsdatei:
   ```bash
   cp .env.example .env
   ```

4. Generiere den Anwendungsschlüssel:
   ```bash
   php artisan key:generate
   ```

5. Richte die Datenbank ein:
   - Aktualisiere die `.env`-Datei mit deiner Datenbankkonfiguration.
   - Führe die Migrationen aus und fülle die Datenbank mit Seed-Daten:
     ```bash
     php artisan migrate --seed
     ```

6. Starte den lokalen Entwicklungsserver:
   ```bash
   php artisan serve
   ```

## Verwendung

- Besuche `http://127.0.0.1:8000` in deinem Browser.
- Du kannst dich mit den Standard-Admin-Anmeldedaten einloggen, die vom Seeder erstellt wurden, oder einen neuen Benutzer registrieren.
- Admin- und Arbeitgeberrollen können Stellenanzeigen erstellen und verwalten.
- Benutzer können Stellenanzeigen anzeigen.

## Tests ausführen

Um die Tests für diese Anwendung auszuführen:
```bash
php artisan test
```

## Entwicklungstools

Das Projekt verwendet zusätzliche Tools zur Unterstützung der Entwicklung:

- **Laravel Pint** für Code-Styling und Linting:
  ```bash
  vendor/bin/pint
  ```
- **Laravel Sail** für das Ausführen der Anwendung in einer Docker-Umgebung:
  ```bash
  ./vendor/bin/sail up
  ```
- **Laravel Pail** für die Echtzeit-Protokollanzeige während der Entwicklung.

Um die lokale Entwicklungsumgebung mit mehreren Diensten zu starten:
```bash
composer run dev
```

## Fehlerbehebung

- **403 Unauthorized**: Stelle sicher, dass der Benutzer die richtige Rolle hat, um die Aktion auszuführen.
- **Datenbankprobleme**: Stelle sicher, dass die Migrationen ausgeführt wurden und die Tabellen in deiner Datenbank vorhanden sind.
- **Anmeldeprobleme**: Überprüfe die Benutzerrollen und Berechtigungen.

## Lizenz

Dieses Projekt ist unter der MIT-Lizenz lizenziert. Siehe die [LICENSE](LICENSE)-Datei für Details.
