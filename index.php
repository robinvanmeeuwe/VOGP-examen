<?php
include_once("./administatie.php");

$admin = new Administratie();

// objects
$ferrari = new Truck("fff",12,fff,fff);

// functies
echo $admin->RentVehicle($ferrari);
