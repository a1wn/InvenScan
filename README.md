# InvenScan
Projektname: ScanStore
Projektbeschreibung:

Das Projekt ScanStore ist ein intelligentes Lagerbestandsverwaltungssystem, das mithilfe eines ESP32-Mikrocontrollers, eines Barcode-Scanners und einer Datenbank die Lagerbestände eines Unternehmens oder Lagers effizient überwacht und verwaltet. Durch das Scannen von Barcodes wird der aktuelle Lagerbestand in Echtzeit aktualisiert, wodurch man stets einen Überblick über die Verfügbarkeit von Artikeln hat.

Hauptfunktionen:

Barcode-Scannen: Mit einem seriellen Barcode-Scanner können Artikel erfasst und ihre Barcodes ausgelesen werden.
WLAN-Verbindung: Der ESP32 stellt eine Verbindung zu einem zentralen Server her, um die gescannten Barcodes direkt an eine SQL-Datenbank zu senden.
Datenbank-Integration: Die Barcodes und zugehörigen Lagerdaten werden in einer MySQL-Datenbank gespeichert, die es ermöglicht, den Lagerbestand zu verfolgen, neue Artikel hinzuzufügen oder bestehende Bestände zu aktualisieren.
Bestandsüberwachung: Über eine Weboberfläche kann der Benutzer den aktuellen Lagerbestand einsehen und Berichte über Lagerbewegungen abrufen.
Benutzerfreundliche Rückmeldung: Ein LCD-Display zeigt nach dem Scannen den gescannten Barcode sowie Bestätigungen oder Warnungen an, wenn ein Artikel gescannt wurde oder ein Fehler aufgetreten ist.
Ziel des Projekts: ScanStore zielt darauf ab, den Lagerbestand effizient und automatisch zu verwalten, indem Barcodes von Artikeln schnell und einfach erfasst werden. Das System minimiert manuelle Fehler und verbessert die Nachverfolgbarkeit von Beständen. Es ist besonders nützlich für kleine und mittelgroße Unternehmen, die ihre Lagerprozesse digitalisieren und optimieren möchten.

