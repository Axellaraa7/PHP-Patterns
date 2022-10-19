<?php
namespace Structural;

class ProductDecorator{
  private $price;
  public function __construct(protected \Creational\Factory\Models\Product $product){
    $this->product = $product;
    $this->setPrice();
  }

  public function setPrice($price = null){
    $this->price = $price ?? $this->product->getPrice();
  }

  public function getPrice(){
    return $this->price;
  }
}