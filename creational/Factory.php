<?php
namespace Creational;

class Factory{
  public function getType($type){
    switch($type){
      case "shoe":
        $product = new Factory\Products\Shoe(50.00);
        break;
      case "shirt":
        $product = new Factory\Products\Shirt(35.00);
        break;
      default:
        $product = new Factory\Products\NoProduct();
        break;
      }
    return $product;
  }
}