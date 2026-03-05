<?php
function daycheck ($d) {
  if($d == "sunday"){
    return "Don't wake up. It's the weekend.";
  } else {
    return "Wake up and go back to work.";
  }
}
echo daycheck("Tuesday");
?>