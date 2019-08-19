<html>
<head>
</head>
<body>
<form method="GET" action="<?=$_SERVER['PHP_SELF']?>">
    <p>Введите ru/eng</p>
    <input type="text" name="a">
    <input type="submit">
    <p>Введите день недели (1-7)</p>
    <input type="text" name="b">
    <input type="submit">
</form>
<?php
$lang = $_GET["a"];
$day =  $_GET["b"];
$mas["ru"] =array("1"=>"Понедельник","2"=>"Вторник","3"=>"Среда","4"=>"Четверг",
    "5"=>"Пятница","6"=>"Суббота","7"=>"Воскресенье");
$mas["eng"]= array("1"=>"Monday","2"=>"Tuesday","3"=>"Wednesday","4"=>"Thursday",
    "5"=>"Friday","6"=>"Saturday","7"=>"Sunday");
echo $mas[$lang]["$day"];


