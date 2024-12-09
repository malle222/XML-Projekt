<?php
class WorldDataParser {
    public function parseCSV($csvPath) {
        if (!file_exists($csvPath)) {
            die("Die Datei $csvPath wurde nicht gefunden.");
        }

        $parsedData = [];
        if (($handle = fopen($csvPath, "r")) !== false) {
            $header = fgetcsv($handle, 1000, ",", '"', "\\");
            while (($row = fgetcsv($handle, 1000, ",", '"', "\\")) !== false) {
                $parsedData[] = array_combine($header, $row);
            }
            fclose($handle);
        }

        return $parsedData;
    }

    public function saveXML($parsedData) {
        $xml = new SimpleXMLElement('<root/>');
        foreach ($parsedData as $row) {
            $item = $xml->addChild('item');
            foreach ($row as $key => $value) {
                $item->addChild(str_replace(' ', '_', trim($key)), htmlspecialchars(trim($value)));
            }
        }

        return $xml->asXML("../data/world_data.xml") !== false;
    }

    public function printXML($xmlFilePath, $xsltFilePath) {
        $xml = new DOMDocument();
        if (!$xml->load($xmlFilePath)) {
            throw new Exception("Fehler beim Laden der XML-Datei: $xmlFilePath");
        }

        $xsl = new DOMDocument();
        if (!$xsl->load($xsltFilePath)) {
            throw new Exception("Fehler beim Laden des XSLT-Stylesheets: $xsltFilePath");
        }

        $processor = new XSLTProcessor();
        $processor->importStylesheet($xsl);

        return $processor->transformToXML($xml);
    }
}
?>
