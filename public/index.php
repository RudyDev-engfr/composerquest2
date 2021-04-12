<?php
require __DIR__ . "/../vendor/autoload.php";
// require __DIR__ . "/../src/Wcs/Hello.php";
$sayhello = new App\Wcs\Hello();
echo $sayhello->talk();