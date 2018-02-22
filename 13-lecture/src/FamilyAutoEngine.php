<?php

require_once "IEngine.php";

class FamilyAutoEngine implements IEngine {
    private $switch_state;
    private $speed;

    const MAX_SPEED = 120;

    function __construct() {        
        $this->speedDown();
    }

    private function speedDown() {
        $this->speed = 0;
    }

    public function letSwitch($on) {
        $this->switch_state = $on;        
        $this->checkSpeed();
    }

    private function checkSpeed() {
        if(!$this->switch_state ) {
            $this->speedDown();
        }
    }

    public function getSwitch() {
        echo "Engine is " . ($this->switch_state) ? "started" : "stopped";
    }

    public function increase() {
        if($this->speed < self::MAX_SPEED) {
            $this->speed = $this->speed + 10;
        }
    }

    public function decrease() {
        if($this->speed > 0) {
            $this->speed = $this->speed - 10;
        }
    }

    public function getSpeed() {
        return $this->speed;
    }
}