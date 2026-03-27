<?php 
function string_length($str) {
  echo strlen($str);
}
$handle = fopen('string.txt','r');
$str = fgets($handle);
fclose($handle); 
$e = string_length($str);
?>