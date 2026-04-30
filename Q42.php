<?php
$arr = array("c"=>30, "a"=>10, "b"=>20);

krsort($arr);

foreach($arr as $key => $value) {
    echo "$key => $value <br>";
}
?>