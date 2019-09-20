<?php
require_once('Transport.php');

$passengerPlane = new PassengersFlyTransport(121);
$passengerPlane->load(90);
$passengerPlane->fly();
var_export($passengerPlane);
$passengerPlane->load(30);
$passengerPlane->fly();
$passengerPlane->unload(120);
var_export($passengerPlane);

$cargoShip = new CargoSeaTransport(380);
$cargoShip->stop();
$cargoShip->load(300);
var_export($cargoShip);
$cargoShip->unload(20);
$cargoShip->load(100);
var_export($cargoShip);
$cargoShip->unload(380);
var_export($cargoShip);


$truck = new CargoGroundTransport(20);
$truck->stop();
$truck->load(12);
var_export($truck);
$truck->load(8);
$truck->unload(20);
var_export($truck);
