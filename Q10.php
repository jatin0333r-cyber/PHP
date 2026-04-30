<?php
$file = fopen("test.txt", "w");

if($file) {
    echo "File opened successfully";
}

fclose($file);
?>