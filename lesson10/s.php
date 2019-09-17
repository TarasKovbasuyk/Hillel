<?php
require_once ('UsersT.php');
error_reporting(E_ALL);
$user1 = new UsersT("Admin", '1995-01-30', 'Php-Developer', 1000);
print_r($user1);
echo '<br>';
$objSerial = serialize($user1);
print_r($objSerial);
echo '<br>';
$objUnSerial = unserialize($objSerial, ['allowed_classes' => ['Users']]);
print_r($objUnSerial);


