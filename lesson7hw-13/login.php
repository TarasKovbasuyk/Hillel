<?php
error_reporting(E_ALL);
session_start();
if (!empty($_POST['login']) && !empty($_POST['password'])) {
    if ($_POST['login'] == $_SESSION['name'] || $_POST['login'] == $_SESSION['email'] && $_POST['password'] == $_SESSION['password']) {
        header("Location:profile.php");
        exit();
    }
}
?>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<form method="POST">
    <p>Login</p>
    <input type="text" name="login" maxlength="50" autocomplete="on"">
    <p>Password</p>
    <input type="text" name="password" minlength="10" maxlength="50" autocomplete="on"">
    <input type="submit">
</form>
</body>
</html>
