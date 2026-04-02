<?php
class A {
  public $attribute = 'default value';
  function operation() {
    echo 'Calling class A<br>';
    echo 'The value of $attribute is ' . $this->attribute . '<br>';
  }
}
class B extends A {
  public $attribute = 'different value';
  function operation() {
    echo 'Calling class B<br>';
    echo 'The value of $attribute is ' . $this->attribute . '<br>';
  }
}
$a = new A();
$a->operation();
$b = new B();
$b->operation();
?>