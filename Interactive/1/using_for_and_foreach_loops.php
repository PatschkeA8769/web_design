<?php 
function IsPrime($n) {  
  $c= 1; 
  for($x=1; $x<$n; $x++) {
        if($n % $x == '0') {
          $c= $c+ '1';
        }
    }
    if ($c== '2') {
      return true;
      } else {
      return false;
    }
}
echo IsPrime(3);
echo '<br><br>';
$details = array(
    "name" => 'Pete Anderson',
    "email" => 'pete.anderson@ucertify.com',
    'age' => 34
);
foreach($details as $key => $value) {
echo $key . ' : ' . $value . '<br/>';
}
?>