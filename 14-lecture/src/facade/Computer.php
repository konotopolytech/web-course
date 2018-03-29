<?php
require_once("IComputer.php");

class Computer implements IComputer {
    public function whoAreYou() {
        echo "I am PC!\n";
    }

    public function showLoadingScreen() {
        echo "Loading...\n";
    }

    public function bam() {
        echo "I am ready!\n";
    }

    public function closeEverything() {
        echo "All applications would be stopped.\n";
    }

    public function turnOff () {
        echo "I am switching off...\n";
    }

    public function state () {
        echo "Switched out\n";
    }
}