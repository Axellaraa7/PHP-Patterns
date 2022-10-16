<?php
namespace Creational\Factory\Products;

class Shoe implements InterfaceProduct{
  public function __construct(public $price){
    $this->price = $price;
  }
  public function message(){
    return "I'm a Shoe and my price is: {$this->price}\n";
  }
}