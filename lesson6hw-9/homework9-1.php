<html>
<head>
</head>
<body>
<form method="POST">
    <p> Write number one</p>
    <input type="int" name="numOne">
    <p> Write number two</p>
    <input type="int" name="numTwo">
    <p> Select operator</p>
    <select name="operator">
        <option value="add" >+</option>
        <option value="subtract">-</option>
        <option value="multiply">*</option>
        <option value="divide">/</option>
    </select>
    <input type="submit">
</form>
</body>
</html>
<?php
function operation(int $numOne, int $numTwo, string $operator){
    if ($operator =='add'){
    return $numOne + $numTwo;
    } elseif ($operator == 'subtract'){
        return $numOne - $numTwo;
    }elseif ($operator == 'multiply'){
        return $numOne * $numTwo;
    }elseif ($operator == 'divide'){
        return $numOne / $numTwo;
    }
    }
if (!empty($_POST['numOne']) && !empty($_POST['numTwo']) && !empty($_POST['operator'])){
echo operation($_POST['numOne'],$_POST['numTwo'],$_POST['operator']);
    } else {
    echo "Choose all parameters";
}