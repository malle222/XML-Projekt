<?php
require_once "world_data_parser.php";

$parser = new WorldDataParser();
$filePath = "../data/world_data_v3.csv";
$data = $parser->parseCSV($filePath);

echo "<pre>";
print_r($data);
echo "</pre>";
?>
