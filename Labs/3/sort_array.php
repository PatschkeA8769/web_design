<?php
$cars = array(
  'BMW',
  'Mercedes',
  'Volkswagon',
  'Ferrari',
  'Ford'
);
sort($cars) ;
echo 'The sorted list of cars are following: <br>';
$clength = count($cars) ;
for ($x = 0;$x < $clength; $x++) {
  echo $cars[$x] ;
  echo '<br>';
}
echo '<br>';
rsort($cars) ;
echo 'The reverse sorted list of cars are following: <br>';
$rlength = count($cars) ;
for ($x = 0; $x < $rlength; $x++) {
  echo $cars[$x] ;
  echo '<br>';
}
?>