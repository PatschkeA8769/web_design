<?php  
function add($n) { 
  $i = 0; 
  $sum = 0;
  while($i<=$n) {
    $sum = $sum + $i;
    $i++;
  }
  echo $sum;
}
echo add(10);
?>