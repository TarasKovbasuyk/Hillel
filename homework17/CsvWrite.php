<?php
require_once('Write.php');

class CsvWrite implements \Write
{
    public function checkFileAndWrite($csvFile, array $data)
    {
        if (file_exists($csvFile)) {
            return $this->write($csvFile, $data);
        } else {
            throw new \Exception("File not found");
        }
    }

    public function write($csvFile, array $data):string
    {
        $fp = fopen($csvFile, 'a');
        foreach ($data as $fields) {
            fputcsv($fp, explode(";", $fields), ";");
        }
        fclose($fp);
        return $fp;
    }
}
