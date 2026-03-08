<?php 
function myfunction($value,$key,$p)
{ 
echo "$key $p $value <br/>"; 
} 
$v = 'has the value';
$a=array('a'=>'gmail.com','b'=>'outlook.com','c'=>'ucertify.com'); 
array_walk($a, 'myfunction', $v);
?>