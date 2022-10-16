<?php
namespace Creational\Factory;

class ProductFactory extends Factory{
  public function getType($type){
    switch($type){
      case "shoe":
        $product = new Products\Shoe(50.00);
        break;
      case "shirt":
        $product = new Products\Shirt(35.00);
        break;
      default:
        $product = new Products\NoProduct();
        break;
      }
    return $product;
  }
}