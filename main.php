<?php
use \Creational as Cr;
require_once "./autoloader.php";
echo "-----------------Singleton-----------------------\n";
$singleton = Cr\Singleton::getInstance();
echo $singleton->message();
try{ $singletonClone = clone($singleton); }
catch(Exception $e){ echo $e->getMessage(); }
echo "------------------Factory-----------------------\n";
$factory = new Cr\Factory();
$type = $factory->getType("shirt");
echo $type->message();
echo "------------------Abstract Factory-----------------------\n";
$abstractFactory = new Cr\AbstractFactory();
$factoryType = $abstractFactory->getFactory("product");
$type = $factoryType->getType("shoe");
echo $type->message();
$factoryType = $abstractFactory->getFactory("post");
$type = $factoryType->getType("video");
echo $type->message();
echo "------------------Prototype-----------------------\n";

