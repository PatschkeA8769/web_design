<?php
$products = array(
  array(
    'TIR',
    'Tires',
    100
  ),
  array(
    'OIL',
    'Oil',
    10
  ),
  array(
    'SPK',
    'Spark Plugs',
    4
  )
);

echo '|' . $products[0][0] . '|' . $products[0][1] . '|' . $products[0][2] . '|<br>';
echo '|' . $products[1][0] . '|' . $products[1][1] . '|' . $products[1][2] . '|<br>';
echo '|' . $products[2][0] . '|' . $products[2][1] . '|' . $products[2][2] . '|<br>';
?>