<?php
$address = 'username@example.com' ;
$arr = preg_split('/\.|@/', $address) ;
/*while (list($key, $value) = each($arr)) {
  echo '<br>' . $value;
}*/
foreach ($arr as $value) {
  echo '<br>' . $value;
}
?>