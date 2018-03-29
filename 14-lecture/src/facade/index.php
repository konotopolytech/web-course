<?php
require_once("ComputerFacade.php");

$computer = new ComputerFacade(new Computer());

$computer->turnOn();

$computer->turnOff();