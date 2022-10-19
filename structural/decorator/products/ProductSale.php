<?php
namespace Structural\Decorator\Products;

class ProductSale /* extends \Structural\ProductDecorator */{
  public function __construct(private \Structural\ProductDecorator $pd){
    $this->pd = $pd;
  }
  public function sale($percentage){
    $this->pd->setPrice($this->pd->getPrice()-($this->pd->getPrice()*$percentage/100));
  }
}