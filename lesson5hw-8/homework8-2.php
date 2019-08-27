<html>
<head>
</head>
<body>
<form method="POST">
    <input type="text" name="number">
    <input type="submit">
</form>
</body>
</html>
<?php
$number = $_POST['number'];
$arr_numbers =[];
if ($number > 0){
for ($i = 1; $i<=$number;$i++) {
    $result = $number % $i;
    if ($result == 0){
    array_push($arr_numbers, $i);
    }
}
foreach ($arr_numbers as $item){
    echo $item.'<br>';
}
}else {
    echo "Введите любое число больше 0";
}