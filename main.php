
<?php
$S = '123';
if (preg_match('/^([0-9]{3})$/', $S)) {
    echo ($S*2);
  } else {
   echo "error";
  }
?>