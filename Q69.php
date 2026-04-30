<?php
$name = "Navya";
$basic = 50000;

$hra = $basic * 0.20;
$da = $basic * 0.10;
$gross = $basic + $hra + $da;
$tax = $gross * 0.10;
$net = $gross - $tax;

$salary = array(
    "Name"=>$name,
    "Basic"=>$basic,
    "HRA"=>$hra,
    "DA"=>$da,
    "Gross"=>$gross,
    "Tax"=>$tax,
    "Net"=>$net
);

echo "<table border='1'>";
foreach($salary as $key => $value) {
    echo "<tr><td>$key</td><td>$value</td></tr>";
}
echo "</table>";
?>