<?php
function errHandlefunc($errnumber,$strerr) {
  echo "<b>Error :</b> [$errnumber] $strerr<br>";
  echo 'Finishing Script';
  die();
}
set_error_handler('errHandlefunc',E_USER_WARNING);
$var = 6;
if($var>=5) {
  trigger_error('Value should be 5 or below',E_USER_WARNING);
}
?>