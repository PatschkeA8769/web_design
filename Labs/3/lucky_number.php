<?php
$luckynmbr = array(
  '101',
  '245',
  '425',
  '235',
  '007',
  '356',
  '777',
  '105'
);
shuffle($luckynmbr) ;
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Lucky Draw result</title>
  </head>
  <body>
    <h1>Here's the Lucky Draw result</h1>
    <div align="center">
    <?php
    for ($i=0; $i<1; $i++) {
      echo '<h2>' . $luckynmbr[$i] . '</h2>';
    }
    ?>
    </div>
  </body>
</html>