<?php
namespace Creational\Factory\Products;

class Shirt implements InterfaceProduct{
  public function __construct(public $price){
    $this->price = $price;
  }
  public function message(){
    return "I'm a shirt and my price is: {$this->price}\n";
  }
}