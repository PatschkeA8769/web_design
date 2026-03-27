<?php  
function password_check($password) { 
  $c = 'Your password is strong';
  $d = 'Your password is weak';
  if(preg_match('/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/', $password)) {
    echo $c;
  } else {
    echo $d;
  }
}
password_check('uC@1234567');
echo '<br><br>';
function find_string($str1) { 
  $c = 'abcdefghijlkmnopqrstuvwzxy';
  $pattern = '/ca[$c]e/';
  $x = 'found'; 
  $d = 'not found';  
  $matches = preg_match_all($pattern, $str1, $array);
  if($matches != '0') {
    echo $x;
  } else {
    echo $d;
  }
}
find_string('It was a very delicious cake');
?>