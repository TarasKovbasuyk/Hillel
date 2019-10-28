<?php
require_once 'autoload.php';

class SelectFileType
{
    private $type, $pathFile ;

    /**
     * SelectFileType constructor.
     * @param string $type
     * @param string $pathFile
     */
    public function __construct(string $type, string $pathFile)
    {
        $this->type = $type;
        $this->pathFile = $pathFile;
    }

    public function getWrite(): WriteFIleInterface
    {
            switch ($this->type) {
                case 'xml' :
                    return new \Xml\XmlWrite($this->pathFile);
                case 'csv' :
                    return new \Csv\CsvWrite($this->pathFile);
                case 'json':
                    return new \Json\JsonWrite($this->pathFile);
                default:
                    throw new \Exception('Unexpected value');

            }

    }

    public function getRead(): ReadFileInterface
    {
            switch ($this->type) {
                case 'xml' :
                    return new \Xml\XmlRead($this->pathFile);
                case 'csv' :
                    return new \Csv\CsvRead($this->pathFile);
                case 'json':
                    return new \Json\JsonRead($this->pathFile);
                default:
                    throw new \Exception('Unexpected value');
            }
        }
        public function getShow():ShowTableInterface
        {
            switch ($this->type) {
                case 'xml' :
                    return new \Xml\XmlShow($this->pathFile);
                case 'csv' :
                    return new \Csv\CsvShow($this->pathFile);
                case 'json':
                    return new \Json\JsonShow($this->pathFile);
                default:
                    throw new \Exception('Unexpected value');
            }
        }
}
