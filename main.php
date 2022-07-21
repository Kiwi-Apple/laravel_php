<?php
function is_num($S) {

if (preg_match('/^[a-z]+([0-9]{3})$/', $S)) {
    echo ($S*2);
} else {
   echo "error";
 }
}
 ?>