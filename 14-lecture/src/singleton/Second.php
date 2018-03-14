<?php
require Session.php;

class Second {
    private $session;

    function __construct(){
        $this->session = Session::getInstance();
    }

    public function getMessage() {
        if ($this->session != 0) {
            echo "Counter started out of the" . get_class($this);
            echo "The value of Counter is " . $this->session->getCount();
        } else {
            $this->session->add();
            echo "Counter started at the" . get_class($this);
            echo "The value of Counter is " . $this->session->getCount();
        }
    }
}