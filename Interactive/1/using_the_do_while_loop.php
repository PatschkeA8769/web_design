<?php
function factorial($number) {
  $fact = 1;
  do {
    $fact *= $number;
    $number = $number - 1;
  }
  while ($number > 1);
  echo $fact;
}
echo factorial(4);
?>