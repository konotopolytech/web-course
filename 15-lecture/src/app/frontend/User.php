<?php

namespace App\Frontend;

class User {
  private $name;
  
  function __construct() {
    $this->name = "I am " . __CLASS__;
  }
  
  public function getName() {
    return $this->name;
  }
}