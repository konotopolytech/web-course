<?php
require_once("SessionRegister.php");

class First {
    private $session;

    function __construct(){
        $this->session = SessionRegister::getInstance();
    }

    public function getMessage() {
        if ($this->session->getCount() != 0) {
            echo "Counter started out of the" . get_class($this) . "\n";
            echo "The value of Counter is " . $this->session->getCount() . "\n";            
        } else {
            $this->session->add();
            echo "Counter started at the" . get_class($this) . "\n";
            echo "The value of Counter is " . $this->session->getCount() . "\n";
        }
    }
}