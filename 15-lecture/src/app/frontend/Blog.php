<?php

namespace App\Frontend;
use App\Backend\Admin\Gallery;

class Blog {
  private $name;
  private $gallery;
  
  function __construct() {
    $this->name = "I am " . __CLASS__;
    $this->gallery = new Gallery();
  }
  
  public function getName() {
    return $this->name;
  }

  public function showGallery() {
    return "This is gallery at the blog :" . $this->gallery->getName();
  }
}