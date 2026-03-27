<?php 
$array1 = array(100,1100,200,400,900); 
$x1 = 0; 
$sum = 0; 
while($x1<=4) { 
  if($sum>1500) { 
  break;
  }
  $sum += $array1[$x1];
  $x1++;
}
echo "$sum";
?>