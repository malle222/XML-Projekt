<?php
require_once "data_handler.php";

$handler = new WorldDataParser();
$csvPath = "../data/world_data_v3.csv";
$parsedData = $handler->parseCSV($csvPath);

if ($handler->saveXML($parsedData)) {
    echo "XML Savestatus: erfolgreich";
} else {
    echo "Fehler beim Speichern";
}
?>
