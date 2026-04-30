<?php
$file = fopen("test.txt", "r");

if($file) {
    echo "File opened successfully";
    fclose($file);
}
?>