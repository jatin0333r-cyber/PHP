<?php
$x = 10; // global

function test() {
    global $x;
    echo $x;
}

test();
?>