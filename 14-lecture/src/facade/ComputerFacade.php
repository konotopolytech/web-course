<?php
require_once("IComputer.php");
require_once("Computer.php");

class ComputerFacade {
    protected $computer;

    
    public function __construct(IComputer $computer) {
        $this->computer = $computer;
    }

    public function turnOn() {
        $this->computer->showLoadingScreen();
        $this->computer->whoAreYou();
        $this->computer->bam();
    }

    public function turnOff() {
        echo "\n\nLet's stop:\n\n";
        $this->computer->closeEverything();
        $this->computer->turnOff();
        $this->computer->state();
    }
}