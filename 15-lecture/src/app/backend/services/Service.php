<?php

namespace App\backend\services;

class Service {
  private $name;
  
  function __construct() {
    $this->name = "I am " . __CLASS__;
  }
  
  public function getName() {
    return $this->name;
  }
}