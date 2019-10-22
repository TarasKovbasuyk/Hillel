<?php
require_once('Read.php');

class CsvRead implements \Read
{
    
    public function read(string $file)
    {
        if (($handle = fopen($file, "r")) !== FALSE) {
            return $this->showTable($handle);
            fclose($handle);
        } else {
            throw new Exception('File not found');
        }
    }
    public function showTable($handle):void
    {
        echo '<html> <head><meta charset="utf-8"></head> <body> <table border="1"> <caption>Список сотрудников</caption>';
        while (($data = fgetcsv($handle, 1000)) !== FALSE) {
            foreach ($data as $key => $value) {
                $pieces = explode(";", $value);
                echo '<tr> <td>' . $pieces[0] . '</td>';
                echo '<td> ' . $pieces[1] . '</td> </tr>';
            }
        }
        echo '</table> </body> </html>';
    }
}
