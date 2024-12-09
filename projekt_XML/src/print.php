<?php
require_once "data_handler.php";

$handler = new WorldDataParser();
$xmlFilePath = "../data/world_data.xml";
$xsltFilePath = "../data/transform.xsl";

try {
    $html = $handler->printXML($xmlFilePath, $xsltFilePath);
    header("Content-Type: text/html");
    echo $html;
} catch (Exception $e) {
    echo "Fehler: " . $e->getMessage();
}
?>
