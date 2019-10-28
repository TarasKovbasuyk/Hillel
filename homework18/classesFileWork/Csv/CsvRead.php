<?php

namespace Csv;


class CsvRead implements \ReadFileInterface
{
    private $pathFile;
    private $dataArray;

    /**
     * CsvRead constructor.
     * @param $pathFile
     */
    public function __construct($pathFile)
    {
        $this->pathFile = $pathFile;
    }

    public function read(): array
    {
        $handle = fopen($this->pathFile, "r");
        $array_line_full = array();
        while (($line = fgetcsv($handle, 0, ";")) !== FALSE) {
            $array_line_full[] = $line;
        }
        fclose($handle);
        return $this->dataArray=$array_line_full;
    }
}