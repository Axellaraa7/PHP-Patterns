<?php
namespace Creational\Factory\Models;

class Product{
  public function __construct(protected $price){
    $this->price = $price;
  }

  public function setPrice($setter){ $this->price = $setter; }
  public function getPrice(){ return $this->price; }

}