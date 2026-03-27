<?php
// $document_root = $_SERVER['DOCUMENT_ROOT'];
echo "<b>Bob's Auto Parts</b><br><br>";
echo '<b>Customer Orders</b> <br><hr>';
@$fp = fopen('orders_details.txt','rb') or die("Unable to open file!");
flock($fp,LOCK_SH); // lock file for reading
if (!$fp) {
  echo '<p><strong>No orders pending.<br> Please try again later.</strong></p>';
  exit;
}
while(!feof($fp)) {
  $order = fgets($fp);
  echo htmlspecialchars($order) . '<br>';
}
flock($fp,LOCK_UN); // release read lock
fclose($fp);
?>