<?php
namespace Structural\Decorator\Products;

class ProductInflation /* extends \Structural\ProductDecorator */{
  public function __construct(private \Structural\ProductDecorator $pd){
    $this->pd = $pd;
  }
  public function inflation($percentage){
    $this->pd->setPrice($this->pd->getPrice()+($this->pd->getPrice()*$percentage/100));
  }
}