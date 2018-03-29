<?php

namespace App\backend\admin;

class Gallery {
  private $name;
  
  function __construct() {
    $this->name = "I am " . __CLASS__;
  }
  
  public function getName() {
    return $this->name;
  }
}