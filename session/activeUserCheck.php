<?php
include_once ('index.php');
function activeUserCheck($login,$password) {
    if ($password== $_SESSION['password'] &&  ($login == $_SESSION['name'] || $login== $_SESSION['email'])){
        return $_SESSION ['active'] = "active";
    }
}