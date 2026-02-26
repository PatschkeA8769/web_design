<?php
echo "<p>Order processed at ".date('H:i, jS F Y')."</p>";
// create short variable names
$tireqty = $_POST['tireqty'];
$oilqty = $_POST['oilqty'];
$sparkqty = $_POST['sparkqty'];
echo '<p>Your order is as follows: </p>';
echo $tireqty. ' Tires<br />';
echo $oilqty. ' bottles of oil<br />';
echo $sparkqty. ' spark plugs<br />';
$totalqty = 0;
$totalqty = $tireqty + $oilqty + $sparkqty;
echo "<p>Items ordered: ".$totalqty."<br />";
$totalamount = 0.00;
define('TIREPRICE', 100);
define('OILPRICE', 10);
define('SPARKPRICE', 4);
$totalamount = $tireqty * TIREPRICE
+ $oilqty * OILPRICE
+ $sparkqty * SPARKPRICE;
echo "Subtotal: $".number_format($totalamount,2)."<br />";
$taxrate = 0.10; // local sales tax is 10%
$totalamount = $totalamount * (1 + $taxrate);
echo "Total including tax: $".number_format($totalamount,2)."</p>";
?>