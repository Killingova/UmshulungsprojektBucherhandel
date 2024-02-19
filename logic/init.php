<?php

// Definiert den Pfad zum Verzeichnis, in dem die Klassen gespeichert sind
const CLASS_DIR = 'classes/';

// Fügt das Klassenverzeichnis zum Include-Pfad hinzu.
// get_include_path() holt den aktuellen Include-Pfad.
// PATH_SEPARATOR ist das systemabhängige Trennzeichen für Pfade.
// CLASS_DIR ist der Pfad zum Verzeichnis, das die Klassen enthält.
set_include_path(get_include_path() . PATH_SEPARATOR . CLASS_DIR);

// Legt die Dateiendungen fest, die vom Autoloader berücksichtigt werden sollen.
// In diesem Fall werden Dateien mit der Endung '.class.php' automatisch geladen.
spl_autoload_extensions('.class.php');

// Registriert die Standard-Autoload-Funktion von PHP.
// Dadurch wird PHP angewiesen, bei Bedarf nach Klassendefinitionen in den
// entsprechenden Dateien innerhalb des Include-Pfads zu suchen.
spl_autoload_register();
