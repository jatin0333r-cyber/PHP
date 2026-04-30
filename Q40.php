<?php
$arr = array(30, 10, 20, 40);

arsort($arr);

foreach($arr as $key => $value) {
    echo "Index: $key Value: $value <br>";
}
?>