<?php

namespace Vehicle;

use Vehicle\Engine;

interface Engine {
    public function switch($on);
    public function getSwitch();
    public function increase();
    public function decrease();
    public function getSpeed();
}