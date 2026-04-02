<?php
class Animal {
  public $name = 'No-name animal';
  public function __construct($name) {
    $this->name = $name;
  }
}
$animal = new Animal('Bob the dog');
echo $animal->name;
?>