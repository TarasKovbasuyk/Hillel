<?php


namespace Json;


class JsonShow implements \ShowTableInterface
{
    private $pathFile;

    /**
     * JsonShow constructor.
     * @param $pathFile
     */
    public function __construct($pathFile)
    {
        $this->pathFile = $pathFile;
    }

    public function show($data)
    {
            echo '<html> <head><meta charset="utf-8"></head> <body> <table border="1"> <caption>Список сотрудников</caption>';
                foreach ($data as $key => $value) {
                    echo '<tr> <td>' . $key . '</td>';
                    echo '<td> ' . $value . '</td> </tr>';

        }
        echo '</table> </body> </html>';
    }
}