<?php
require_once "world_data_parser.php";

$parser = new WorldDataParser();
$xmlFilePath = "../data/world_data.xml";
$xsltFilePath = "../data/transform.xsl";

try {
    $html = $parser->printXML($xmlFilePath, $xsltFilePath);
    header("Content-Type: text/html");
    echo $html;
} catch (Exception $e) {
    echo "Fehler: " . $e->getMessage();
}
?>
