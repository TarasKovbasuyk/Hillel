<?php


namespace Xml;


class XmlShow implements \ShowTableInterface
{
    private $pathFile;

    /**
     * XmlShow constructor.
     * @param $pathFile
     */
    public function __construct($pathFile)
    {
        $this->pathFile = $pathFile;
    }

    public function show($data)
    {

        echo '<html> <head><meta charset="utf-8"></head> <body> <table border="1"> <caption>Список сотрудников</caption>';
        foreach ($data as $value) {
            foreach ($value as $item) {
                echo '<tr> <td>' . $item['name'] . '</td>';
                echo '<td> ' . $item['date'] . '</td> </tr>';
            }
        }
        echo '</table> </body> </html>';
    }
}