<?php
$gold = array(5000, 5100, 4950, 5050, 5200);
$silver = array(60, 62, 59, 61, 63);

echo "Gold Rates:<br>";
foreach($gold as $rate) {
    echo $rate . "<br>";
}

echo "Max Gold: " . max($gold) . "<br>";
echo "Min Gold: " . min($gold) . "<br>";
echo "Avg Gold: " . array_sum($gold)/count($gold) . "<br>";
?>