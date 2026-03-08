​<?php
$matrix = array(
array('a', 1, 2),
array('b', 3, 4),
array('c', 5, 6),
array('d', 7, 8)
);
// Calling transpose function and printing the transposed matrix
$matrix = transpose($matrix);
foreach ($matrix as $key => $value) {
  foreach ($value as $k => $v) {
    echo $v.' ';
  }
  echo '<br/>';
}
function transpose($array) {
  array_unshift($array, null);
  return call_user_func_array('array_map', $array);
}
?>