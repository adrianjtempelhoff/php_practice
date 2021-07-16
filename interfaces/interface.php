<?php

interface HelloWorldInterface {

  public function display(array $data);
  
}

class Greeting implements HelloWorldInterface {
  public function display(array $data) {
    echo "I say hi here";
  }
}

$greets = new Greeting();
$greets->display([]);


?>