<?php
include_once('index.php');
if (!empty($_POST['name']) ) {
    $_SESSION['name'] = $_POST['name'];
}

if (!empty($_POST['nickname']) ) {
    $_SESSION['nickname'] = $_POST['nickname'];
}
if (!empty($_POST['email']) ) {
    $_SESSION['email'] = $_POST['email'];
}
if (!empty($_POST['password']) ) {
    $_SESSION['password'] = $_POST['password'];
}
!empty($_SESSION['active']) ? include_once('profile_HTML.php') : header("Location:login.php");


