<html>
<body>
<form method="POST">
    <p> Введите число </p>
    <input type="text" name="num">
    <input type="submit">
</form>
</body>
</html>
<?php
$num = $_POST['num'];
function reverse(int $num)
{
    static $reverseNumI = 0;
    $i = 0;
    $reverseNumI++;
    if ($num > 0) {
        while ($i < $reverseNumI) {
            if ($num - 1 > 0) {
                echo $reverseNumI . ", ";
            } elseif ($num - 1 == 0) {
                echo $reverseNumI;
            }
            $i++;
            $num--;
        };
        reverse($num);
    }
}

reverse($num);
