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
$sequence = [
    1,
    2,2,
    3,3,3,
    4,4,4,4,
    5,5,5,5,5,
    6,6,6,6,6,6,
    7,7,7,7,7,7,7,
    8,8,8,8,8,8,8,8,
    9,9,9,9,9,9,9,9,9
    ];
function reverse ($sequence,$num){
    $num--;
    if ($num >= 0 && $num < count($sequence)){
    echo $sequence[$num];
    reverse($sequence,$num);
}
}
reverse ($sequence,$num);
