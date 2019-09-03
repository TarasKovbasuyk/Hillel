<html>
<body>
<form method="POST">
    <p> Введите число , число не может начинаться с 0</p>
    <input type="text" name="num">
    <input type="submit">
</form>
</body>
</html>
<?php
$number = $_POST['num'];
function reverse ($number){
    if (!empty($number)) {
        $result = $number % 10;
        echo $result . "<br>";
        $number -= $result;
        $number /= 10;
        reverse($number);
    }
}
reverse ($number);
