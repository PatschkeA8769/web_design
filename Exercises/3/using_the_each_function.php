<?php
$foo = array("Mark", "Pete", "Jessi", "jouni", "egon", "marliese");
//$bar = each($foo);
//print_r($bar);
echo "[".key($foo)."]" . " => " . current($foo);
?>