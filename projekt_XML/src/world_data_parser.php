<?php
class WorldDataParser {
    public function parseCSV($filePath) {
        // Überprüfen, ob die Datei existiert
        if (!file_exists($filePath)) {
            die("Die Datei $filePath wurde nicht gefunden.");
        }

        $data = [];
        // Datei öffnen
        if (($handle = fopen($filePath, "r")) !== false) {
            // Erste Zeile: Header
            $header = fgetcsv($handle, 1000, ",");
            // Weitere Zeilen: Daten
            while (($row = fgetcsv($handle, 1000, ",")) !== false) {
                $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }
        return $data;
    }
}
?>
