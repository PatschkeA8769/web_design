<?php
$ucfile = fopen("example.txt", "r") or die("Unable to open file!");
echo fgets($ucfile);
fclose($ucfile);
?>