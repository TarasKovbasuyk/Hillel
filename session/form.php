<?php
include_once ('index.php');
if (!empty($_POST['name']) && !empty($_POST['nickname']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['nickname'] = $_POST['nickname'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
    header("Location:login.php");
} else {
    echo "Enter all params";
}
include_once ('form.html');
