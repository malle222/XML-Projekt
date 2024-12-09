<?php
require_once "data_handler.php";

$handler = new WorldDataParser();
$csvPath = "../data/world_data_v3.csv";
$parsedData = $handler->parseCSV($csvPath);

echo "<pre>";
print_r($parsedData);
echo "</pre>";
?>
