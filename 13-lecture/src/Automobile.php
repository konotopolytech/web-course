<?php

require_once "FamilyAutoEngine.php";


class Automobile {
    private $engine;
    
    public function setEngine(Engine $engine) {
        $this->engine = $engine;
    }

    public function move($on = false) {
        $this->engine->switch($on);
        $this->run();
    }

    private function run() {        
        echo "I am runing with the " . $this->getSpeed() . " m/h";
    }

    public function increaseSpeed() {
        $this->engine->increase();
    }

    public function decreaseSpeed() {
        $this->engine->decrease();
    }

    public function getSpeed() {
        echo $this->engine->getSpeed();
    }
}
