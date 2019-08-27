<html>
<head>
</head>
<body>
<form method="POST">
    <input type="text" name="size">
    <input type="submit">
</form>
</body>
</html>
<?php
$number = $_POST['size'];
if ($number > 0 ){
for ($j=$number;$j>=0;$j--){
for ($i=$j;$i >= 1;$i--){
    echo "x";
}
    echo "<br>";
}
} else {
    echo "Введите любое число больше 0";
}
