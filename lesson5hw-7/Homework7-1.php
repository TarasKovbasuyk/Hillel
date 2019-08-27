<html>
<head>
</head>
<body>
<form method="POST">
    <input type="text" name="yearPart">
    <input type="submit">
</form>
</body>
</html>
<?php
$yearPart = $_POST['yearPart'];
if (empty($yearPart)) {
    echo "Введите число от 1 до 4";
}
        if(!empty($yearPart)){
 if ($yearPart > 0 && $yearPart <=4 ) {
        echo '<br>'. "Метод if:".'<br>';
        if ($yearPart == 1) {
            $result = "зима";
        } elseif ($yearPart == 2) {
            $result = "лето";
        } elseif ($yearPart == 3) {
            $result = "осень";
        } elseif ($yearPart == 4) {
            $result = "весна";
        }
echo $result;
echo '<br>'. "Метод switch:".'<br>';
switch ($yearPart){
    case 1 :
        $resultTwo = "зима";
        break;
    case 2 :
        $resultTwo = "лето";
        break;
    case 3 :
        $resultTwo = "осень";
        break;
    case 4 :
        $resultTwo = "весна";
        break;
}
echo $resultTwo;
echo '<br>'. "Попробуем Масивом:".'<br>';
$array = [
        '1' => "зима",
        '2' => "лето",
        '3' => "осень",
        '4' => "весна"
];
$resultThree = $array[$yearPart];
echo $resultThree;
}else {
     echo "Вам же уже говорили=) Введите число от 1 до 4";
 }
}