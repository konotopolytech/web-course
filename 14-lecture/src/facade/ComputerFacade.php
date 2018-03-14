<?php
require IComputer.php;
require Computer.php;

class ComputerFacade implements IComputer {
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
        $this->computer->closeEverything();
        $this->computer->turnOff();
        $this->computer->state();
    }
}