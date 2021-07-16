<?php
namespace App;
include("helper.php");

use Helper\HelloWorld as HelperHelloWorld;

use Helper\AnotherWorld as AnotherWorldHello;

class HelloWorld {
  
  public static function sayHello() {
    echo "Hello world, from App";
  }
}


HelperHelloWorld::sayHello();

AnotherWorldHello::sayHello();

?>