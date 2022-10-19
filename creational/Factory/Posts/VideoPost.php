<?php
namespace Creational\Factory\Posts;

class VideoPost implements \Creational\Factory\InterfaceClasses{
  public function __construct(public $author){
    $this->author = $author;
  }
  public function message(){
    return "I'm a video post and my author is: {$this->author}\n";
  }
  public static function search(){

  }
}