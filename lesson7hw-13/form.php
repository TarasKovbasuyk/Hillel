<?php
error_reporting(E_ALL);
if (!empty($_POST['name']) && !empty($_POST['nickname']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    session_start();
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['nickname'] = $_POST['nickname'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
    header("Location:login.php");
    exit();
} else {
    echo "Enter all params";
}
?>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<form method="POST">
    <p>Name</p>
    <input type="text" name="name" maxlength="50" autocomplete="on"">
    <p>Nickname</p>
    <input type="text" name="nickname" minlength="5" maxlength="50" autocomplete="on"">
    <p>E-Mail</p>
    <input type="text" name="email" maxlength="50" autocomplete="on"">
    <p>Password</p>
    <input type="text" name="password" minlength="8" maxlength="50" autocomplete="on"">
    <input type="submit">
</form>
</body>
</html>