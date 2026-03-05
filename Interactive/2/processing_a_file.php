<?php 
$ucfile1 = fopen("new.txt", "w") or die("Unable to open file!");
$text = "The best learning solution.\n";
fwrite($ucfile1, $text);
fclose($ucfile1);
$ucfile2 = fopen("new.txt", "r") or die("Unable to open file!");
echo fread($ucfile2,filesize("new.txt"));
fclose($ucfile2);
?>