<?php

namespace Json;

use Exception;

class JsonRead implements \ReadFileInterface
{
    private $pathFile;
    private $data;

    /**
     * JsonRead constructor.
     * @param $pathFile
     */
    public function __construct($pathFile)
    {
        $this->pathFile = $pathFile;
    }

    public function read(): array
    {
        $file = file_get_contents($this->pathFile);
        return $this->data = json_decode($file, true);
    }
}