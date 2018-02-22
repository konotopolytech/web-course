<?php

require_once "Automobile.php";
require_once "FamilyAutoEngine.php";


$auto = new Automobile();
$engine = new FamilyAutoEngine();

$auto->setEngine($engine);

echo "Let's move! ";
$auto->move(true);
echo "\n";
echo "Current speed is " . $auto->getSpeed() . "\n";

echo "Let's get speed\n";

for ($i = 0; $i < 5; $i++) {
	$auto->increaseSpeed();
}

echo "Current speed is " . $auto->getSpeed() . "\n";

echo "Let's stop! ";
$auto->move();
echo "\n";

echo "Current speed is " . $auto->getSpeed() . "\n";
