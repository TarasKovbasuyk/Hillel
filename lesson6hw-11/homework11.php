<html>
<head>
</head>
<body>
<form method="POST">
    <p> Select Sort</p>
    <select name="sort">
        <option value="upMoney">Всем сотрудникам у кого ЗП меньше 1600 добавить 10</option>
        <option value="upMoneyWorkHours">Всем сотрудникам кто работал больше 180 часов, добавить премию 20%.</option>
        <option value="hoursMin">Вывести всех сотрудников которые отработали меньше 160 часов.</option>
        <option value="moneyMin">Вывести всех сотрудников у которых ЗП меньше 2000.</option>
    </select>
    <input type="submit">
</form>
</body>
</html>
<?php
$sort = $_POST['sort'];
$array = [
    ['name' => 'Yan', 'salery' => '1200', 'work_hours' => 180],
    ['name' => 'Barda', 'salery' => '2150', 'work_hours' => 160],
    ['name' => 'Piter', 'salery' => '1500', 'work_hours' => 160],
    ['name' => 'Alex', 'salery' => '3340', 'work_hours' => 167],
    ['name' => 'Deiv', 'salery' => '1700', 'work_hours' => 176],
    ['name' => 'Bob', 'salery' => '1150', 'work_hours' => 182],
    ['name' => 'Claus', 'salery' => '2810', 'work_hours' => 155],
    ['name' => 'Lina', 'salery' => '1600', 'work_hours' => 169],
    ['name' => 'Rod', 'salery' => '2780', 'work_hours' => 191],
    ['name' => 'Kristy', 'salery' => '2180', 'work_hours' => 144],
    ['name' => 'Ron', 'salery' => '1670', 'work_hours' => 157],
];


function callFuncMap($closure, array $array)
{
    $sortMap = array_map($closure, $array);
    echo '<table cellpadding="5" cellspacing="0" border="1">';
    foreach ($sortMap as $key => $value) {
        echo "<tr>";
        foreach ($value as $data)
            echo "<td>" . $data . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

function callFuncFilter(array $array, $closure)
{
    $sortFilter = array_filter($array, $closure);
    echo '<table cellpadding="5" cellspacing="0" border="1">';
    foreach ($sortFilter as $key => $value) {
        echo "<tr>";
        foreach ($value as $data)
            echo "<td>" . $data . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

function upMoney(array $array)
{
    if ($array['salery'] < 1600) {
        $array['salery'] += 100;
    } else {
        $array['salery'];
    }
    return $array;
}

function upMoneyWorkHours(array $array)
{
    if ($array['work_hours'] > 180) {
        $array['salery'] *= 1.2;
    } else {
        $array['salery'];
    }
    return $array;
}

function hoursMin(array $array)
{
    return $array['work_hours'] < 160;
}

function moneyMin(array $array)
{
    return $array['salery'] < 2000;
}

if (!empty($sort)) {
    if ($sort == "upMoney" || $sort == "upMoneyWorkHours") {
        callFuncMap($sort, $array);
    } else {
        callFuncFilter($array, $sort);
    }
}