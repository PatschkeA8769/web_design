<?php
function getyear($date) {
  $year = date("Y",strtotime($date));
  return $year;
}
echo getyear("2/2/2016");
?>