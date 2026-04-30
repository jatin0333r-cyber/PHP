<?php
$income = 1200000;
$tax = 0;

if($income < 500000) {
    $tax = 0;
} elseif($income < 1000000) {
    $tax = $income * 0.10;
} elseif($income < 1500000) {
    $tax = $income * 0.15;
} elseif($income < 2000000) {
    $tax = $income * 0.20;
} else {
    $tax = $income * 0.25;
}

echo "Income: $income <br>";
echo "Tax: $tax";
?>