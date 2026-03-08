<?php  
function compare_string($d,$f) { 
  $d = trim($d);
  $f = trim($f);
  $x = strcmp($d, $f);
  if ($x == 0)
  {  
  echo 'Strings are equal';
  } else {
  echo 'Strings are not equal';
  } 
}
$handle = fopen ('string.txt','r'); 
$d = fgets($handle); 
$f = fgets($handle); 
fclose($handle);  
$e = compare_string($d,$f); 
?>