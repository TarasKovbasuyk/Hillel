<html>
<head>
</head>
<body>
<form method="GET" action="<?=$_SERVER['PHP_SELF']?>">
    <input type="text" name="a">
    <input type="submit">
</form>
<?php
$name = $_GET['a'];
$mass_name = explode(" ",$name);
foreach ($mass_name as $n) {
    $countMassive = count($mass_name);
    if ($countMassive > 1) {
        for ($i = 1; $i < $countMassive; $i++) {
            $mass_name[$i] = mb_substr($mass_name[$i], 0, 1) . '.';
        }
        $fio = implode(' ', $mass_name);
    }
}
echo ($fio);



