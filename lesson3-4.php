<html>
<head>
</head>
<body>
<form method="GET" action="<?=$_SERVER['PHP_SELF']?>">
    <input type="text" name="a">
    <input type="submit">
</form>
<?php
$str_name = $_GET ['a'];
echo '<br><hr>';
$fio = explode(' ', $str_name);
echo $fio[0] . ' ' . substr($fio[1],0,2) . '.' . substr($fio[2],0,2) . '.' ;

