<?php
require_once('Read.php');

class CsvRead implements Read
{
    public function read($file)
    {
        echo '<html> <head><meta charset="utf-8"></head> <body> <table border="1"> <caption>Список сотрудников</caption>';
        if (($handle = fopen($file, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000)) !== FALSE) {
                foreach ($data as $key => $value) {
                    $pieces = explode(";", $value);
                    echo '<tr> <td>' . $pieces[0] . '</td>';
                    echo '<td> ' . $pieces[1] . '</td> </tr>';
                }
            }
            echo '</table> </body> </html>';
            fclose($handle);
        }

    }

}