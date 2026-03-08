<?php 
function chop_string($d) {
  echo chop($d, 'world');
}
chop_string('Hello world');
echo '<br><br>';
function trim_string($d) {
  echo trim($d, 'Hed');
}
trim_string('Hello world');
?>
