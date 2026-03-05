<?php
function checkage($age) {
  $c = $age>=18 ? "Adult" : "Teenager";
  echo $c;
}
echo checkage(23);
?>