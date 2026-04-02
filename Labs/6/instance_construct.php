<?php
class classname {
  function __construct($param) {
    echo 'Constructor called with parameter ' . $param . '<br>';
  }
}
$a = new classname('First');
$b = new classname('Second');
?>