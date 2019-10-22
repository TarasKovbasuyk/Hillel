<html>
<body>
<form method="POST">
    <p>Для сохранения информации введите данные и нажмите отправить Имя ";" 0000-00-00</p>
    <input type="text" name="data">
    <input type="submit">
</form>
</body>
</html>
<?php
require_once('CsvRead.php');
require_once('CsvWrite.php');
$file = "data.csv";
$csvRead = new CsvRead();
$csvRead->read($file);
$csvWrite = new Csv\CsvWrite();
if (!empty($_POST['data'])) {
    $data[] = $_POST['data'];
    try {
        $csvWrite->checkFileAndWrite($file, $data);
    } catch (Exception $e) {
    }
}
