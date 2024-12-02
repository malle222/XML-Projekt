<?php
require_once "world_data_parser.php";

// Instanz der Klasse
$parser = new WorldDataParser();

// Datei-Pfad angeben (relativ zu `parse.php`)
$filePath = "../data/world_data_v3.csv";

// CSV-Daten parsen
$data = $parser->parseCSV($filePath);

// Ausgabe im Browser
echo "<pre>";
print_r($data);
echo "</pre>";
?>
