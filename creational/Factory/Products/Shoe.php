<?php
namespace Creational\Factory\Products;
use \Creational\Factory as Fr;
use \Creational\Factory\Models as Md;

class Shoe extends Md\Product implements Fr\InterfaceClasses{
  public function __construct($price){
    parent::__construct($price);
  }
  public function message(){
    return "I'm a Shoe and my price is: {$this->price}\n";
  }
  public static function search(){
    return "Searching shoes\n";
  }
}