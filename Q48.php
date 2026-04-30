<?php
$num = 4200;
$factors = array();
$count = 0;

for($i = 1; $i <= $num; $i++) {
    if($num % $i == 0) {
        $factors[] = $i;
        $count++;
    }
    if($count == 10) break;
}

print_r($factors);
?>