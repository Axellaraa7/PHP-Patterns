<?php
require_once "./autoloader.php";
use \Creational as Cr;
use \Structural as St;
echo "------------------Singleton--------------------\n";
$singleton = Cr\Singleton::getInstance();
echo $singleton->message();
try{ $singletonClone = clone($singleton); }
catch(Exception $e){ echo $e->getMessage(); }
echo "------------------Factory----------------------\n";
$factory = new Cr\Factory();
$type = $factory->getType("shirt");
echo $type->message();
echo "------------------Abstract Factory-------------\n";
$abstractFactory = new Cr\AbstractFactory();
$factoryType = $abstractFactory->getFactory("product");
$type = $factoryType->getType("shoe");
echo $type->message();
$factoryType = $abstractFactory->getFactory("post");
$type = $factoryType->getType("video");
echo $type->message();
echo "------------------Facade-----------------------\n";
$facade = new St\FacadeProducts();
echo $facade->search();
echo "------------------Decorator--------------------\n";
$decorator = new St\ProductDecorator(new Cr\Factory\Models\Product(1000));
$inflation = new St\Decorator\Products\ProductInflation($decorator);
$inflation->inflation(10);
echo "price with inflation : ".$decorator->getPrice()."\n";
$sale = new St\Decorator\Products\ProductSale($decorator);
$sale->sale(10);
echo "price in sale : ".$decorator->getPrice()."\n";