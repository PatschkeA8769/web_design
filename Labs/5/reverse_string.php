<?php
function reverse_recur($str) {
  if(strlen($str)>0) {
    reverse_recur(substr($str, 1));
  }
  echo substr($str,0,1);
  return;
}
function reverse_iterat($str) {
  for($i=1;$i<=strlen($str);$i++)
  {
    echo substr($str,-$i,1);
  }
  return;
}
echo 'The reverse of Hello using recursion: ';
reverse_recur('Hello');
echo '<br> The reverse of Hello using iteration: ';
reverse_iterat('Hello');
?>