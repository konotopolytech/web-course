<?php

require_once "Automobile.php";
require_once "FamilyAutoEngine.php";


$auto = new Automobile();
$engine = new FamilyAutoEngine();

$auto.setEngine($engine);

$auto.move(true);
echo "\n";
$auto.getSpeed();
echo "\n";
$auto.increaseSpeed();
$auto.getSpeed();
echo "\n";

for ($i = 0; $i < 5; $i++) {
	$auto.increaseSpeed();
}

$auto.getSpeed();
echo "\n";

$auto.move();
echo "\n";
$auto.getSpeed();
echo "\n";