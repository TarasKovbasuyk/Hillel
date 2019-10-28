<?php

namespace Xml;


class XmlRead implements \ReadFileInterface
{
    private $pathFile;
    private $dataArray;

    /**
     * XmlRead constructor.
     * @param $pathFile
     */
    public function __construct($pathFile)
    {
        $this->pathFile = $pathFile;
    }


    /**
     * @return array
     */
    public function read(): array
    {
        $xml = simplexml_load_file($this->pathFile);
        $result = json_decode(json_encode($xml), true);
        return $this->dataArray = $result;
    }
}