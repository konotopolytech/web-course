<?php

class Session
{
    private static $instance;
    private $counter = 0;

    public static function getInstance()
    {
        if( is_null(self::$instance) ) {
                self::$instance = new self();
        }

        return self::$instance;
    }

    private function __construct() {}

    private function __clone() {}

    public function add() {
        $this->counter++;
    }

    public function getCount() {
        return $this->counter;
    }
}

// get a session instance
