<?php


namespace Csv;


class CsvWrite implements \WriteFIleInterface
{
private $csvFile;

    /**
     * CsvWrite constructor.
     * @param $csvFile
     */
    public function __construct($csvFile)
    {
        $this->csvFile = $csvFile;
    }

    public function write(array $data)
    {
        $handle = fopen($this->csvFile, "a");
        foreach ($data as $value) {
            fputcsv($handle, explode(";", $value), ";");
        }
        fclose($handle);
    }
}