<?php
require ComputerFacade.php;

$computer = new ComputerFacade(new Computer());

$computer->turnOn();

$computer->turnOff();