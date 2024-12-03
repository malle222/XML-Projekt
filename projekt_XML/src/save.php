<?php
require_once "world_data_parser.php";

$parser = new WorldDataParser();
$filePath = "../data/world_data_v3.csv";
$data = $parser->parseCSV($filePath);

if ($parser->saveXML($data)) {
    echo "Die Datei world_data.xml wurde erfolgreich gespeichert.";
} else {
    echo "Fehler beim Speichern der Datei.";
}
?>
