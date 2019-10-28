<?php


namespace Csv;


class CsvShow implements \ShowTableInterface
{
    private $pathFile;

    /**
     * CsvShow constructor.
     * @param $pathFile
     */
    public function __construct($pathFile)
    {
        $this->pathFile = $pathFile;
    }

    /**
     * @param $data
     */
    public function show($data)
    {
        echo '<html> <head><meta charset="utf-8"></head> <body> <table border="1"> <caption>Список сотрудников</caption>';
                foreach ($data as  $value) {
                    echo '<tr> <td>' . $value[0] . '</td>';
                    echo '<td> ' . $value[1] . '</td> </tr>';
                }
        echo '</table> </body> </html>';
    }
}