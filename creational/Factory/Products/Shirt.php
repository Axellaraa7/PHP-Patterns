<?php
namespace Creational\Factory\Products;

use Creational\Factory\Models as Md;

class Shirt extends Md\Product implements \Creational\Factory\InterfaceClasses{
  public function __construct($price){
    parent::__construct($price);
  }
  public function message(){
    return "I'm a shirt and my price is: {$this->price}\n";
  }
  public static function search(){
    return "Searching shirts\n";
  }
}