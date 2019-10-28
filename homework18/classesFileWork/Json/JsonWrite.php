<?php


namespace Json;


class JsonWrite implements \WriteFIleInterface
{
private $pathFile;

    /**
     * JsonWrite constructor.
     * @param $pathFile
     */
    public function __construct($pathFile)
    {
        $this->pathFile = $pathFile;
    }

    public function write(array $data)
    {
        $file = file_get_contents($this->pathFile);
         $content = json_decode($file, true);
         $content[$data[0]] =$data[1];
         return file_put_contents($this->pathFile,json_encode($content));
    }
}