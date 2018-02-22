<?php

interface IEngine {
    public function letSwitch($on);
    public function getSwitch();
    public function increase();
    public function decrease();
    public function getSpeed();
}