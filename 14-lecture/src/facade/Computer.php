<?php
require IComputer.php;

class Computer implements IComputer {
    public function whoAreYou() {
        echo "Whooo!";
    }

    public function showLoadingScreen() {
        echo "Loading...";
    }

    public function bam() {
        echo "I am ready!";
    }

    public function closeEverything() {
        echo "All applications would be stopped.";
    }

    public function turnOff () {
        echo "I am switching off...";
    }

    public function state () {
        echo "Switched out";
    }
}