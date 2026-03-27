<?php
function create_table($data,$header=NULL,$caption=NULL) {
  echo '<table border="collapse">';
  if($caption) {
    echo "<caption>$caption</caption>";
  }
  if($header) {
    echo "<tr><th>$header</th></tr>";
  }
  reset($data) ;
  $value = current($data);
  while($value) {
    echo "<tr><td>$value</td></tr>\n";
    $value = next($data);
  }
  echo '</table>' ;
}
$my_data = ['Volkswagon','Mercedes','BMW' ];
$my_header = 'Cars';
$my_caption = 'Sample Data';
create_table($my_data,$my_header,$my_caption) ;
?>