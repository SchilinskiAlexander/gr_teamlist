# Änderungen

## v2.3

Erste Version des Forks, basiert auf Gr_Teamlist v2.2 von Ralf Thieme.

- Läuft unter PHP 8.4 und weiterhin unter PHP 5
- Behoben: Teamliste brach ab, wenn ein Mitglied kein Profil hat oder der Benutzer gelöscht wurde
- Behoben: Warnungen im Admin-Bereich bei fehlenden Formularwerten oder Parametern
- Behoben: Nicht vorhandene Gruppen oder Mitglieder führen nicht mehr zu Fehlern
- Behoben: Beim Löschen eines Mitglieds wurden die Positionen in allen Gruppen verschoben statt nur in der eigenen
- Behoben: E-Mail-Link wurde zufällig als Text angezeigt, wenn die Adresse ein „x“ enthält
- Installation funktioniert auf aktuellem MySQL und MariaDB
- Footer auf der Teamliste und im Admin-Bereich zeigt die Version und verlinkt auf die Downloads
