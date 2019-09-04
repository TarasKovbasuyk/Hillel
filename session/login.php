<?php
include_once ('index.php');
include_once('activeUserCheck.php');

if (!empty($_POST['login']) && !empty($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
activeUserCheck($login,$password);
}
!empty($_SESSION['active']) ? header("Location:profile.php") : print_r("Enter your information") ;
include_once ('login.html');