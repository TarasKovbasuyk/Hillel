<?php

namespace Xml;

class XmlWrite implements \WriteFIleInterface
{
    private $pathFile;

    /**
     * XmlWrite constructor.
     * @param $pathFile
     */
    public function __construct($pathFile)
    {
        $this->pathFile = $pathFile;
    }

    public function write(array $data)
    {
        $xml = simplexml_load_file($this->pathFile);
        $worker = $xml->addChild('worker');
        $worker->addChild('name', $data[0]);
        $worker->addChild('date', $data[1]);
        return $xml->saveXML($this->pathFile);
    }
}