<?php
require_once('Write.php');

class CsvWrite implements Write
{
    public function write($csvFile, $data)
    {
        if (file_exists($csvFile) && !empty($data)) {
            $fp = fopen($csvFile, 'a');
            foreach ($data as $fields) {
                fputcsv($fp, explode(";", $fields), ";");
            }
            fclose($fp);
            return $fp;
        } else {
            throw new \Exception("File not found");
        }
    }
}