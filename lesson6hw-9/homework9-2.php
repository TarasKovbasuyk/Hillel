<html>
<head>
</head>
<body>
<form method="POST">
    <p> Write number one</p>
    <input type="text" name="numOne">
    <p> Write number two</p>
    <input type="text" name="numTwo">
    <p> Select operator</p>
    <select name="operator">
        <option value="add" >+</option>
        <option value="subtract">-</option>
    </select>
    <input type="submit">
</form>
</body>
</html>
<?php
function operation(int $numOne ,int $numTwo,string $name){
return $name($numOne,$numTwo);
}
function add(int $numOne ,int $numTwo){
return  $numOne + $numTwo;
}
function sub(int $numOne ,int $numTwo){
    return  $numOne - $numTwo;
}
if (!empty($_POST['numOne']) && !empty($_POST['numTwo']) && !empty($_POST['operator'])) {
    if ($_POST['operator'] == 'add') {
        echo operation($_POST['numOne'], $_POST['numTwo'], "add");
    } elseif ($_POST['operator'] == 'subtract') {
        echo operation($_POST['numOne'], $_POST['numTwo'], "sub");
    }
} else {
    echo "Choose all parameters ";
}
