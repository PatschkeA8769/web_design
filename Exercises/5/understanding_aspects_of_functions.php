<?php  
function check_palindrome($d) { 
  $r="Palindrome";
  $x="Not Palindrome";
  $n = $d;
  $sum = 0;
  while(floor($d>0)) {
    $newnum = $d % 10;
    $sum = $sum * 10 + $newnum;
    $d = (int)($d / 10);
  }
  if($sum==$n) {
    echo $r;
  } else {
    echo $x;
  }
}
check_palindrome(121);
?>