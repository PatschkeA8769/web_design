<?php 
function replace_string($str1) {
  $str2 = str_replace('is', 'was', $str1);
  echo $str2;
}
replace_string('It is a very hot and sunny day.');
?>