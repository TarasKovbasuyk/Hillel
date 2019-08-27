<html>
<head>
</head>
<body>
<form method="POST">
    <input type="text" name="month">
    <input type="submit">
</form>
</body>
</html>
<?php
$month = $_POST['month'];
if (!empty($month)){
    if ($month>=1 && $month<=12){
        echo '<br>'. "Метод if:".'<br>';
if ( $month >= 1 && $month <=2 ){
    echo "зима";
}elseif ($month >= 3 && $month <=5){
    echo "весна";
}elseif ($month >= 6 && $month <=8){
    echo "лето";
}elseif ($month >= 9 && $month <=11){
    echo "осень";
}elseif ($month == 12) {
    echo "зима";
}
    echo '<br>'. "Метод switch:".'<br>';
switch ($month){
    case $month >= 1 && $month <=2:
        echo "зима";
        break;
    case $month >= 3 && $month <=5:
        echo "весна";
        break;
    case $month >= 6 && $month <=8:
        echo "лето";
        break;
    case $month >= 9 && $month <=11:
        echo "осень";
        break;
    case $month == 12:
        echo "зима";
        break;
}
    echo '<br>'. "Попробуем Масивом:".'<br>';

$array = [
    "12" => "зима", "3"=>"весна",  "6"=>"лето",  "9"=>"осень",
    "1" =>"зима",   "4"=>"весна",  "7"=>"лето",  "10"=>"осень",
    "2" =>"зима",   "5"=>"весна",  "8"=>"лето",  "11"=>"осень",
];
echo $array [$month];
    }else {
        echo "Такого месяца нет";
    }
} else {
    echo "Принимаем значения от 1 до 12";
}