<?php
date_default_timezone_set("Asia/Kolkata");
$india = date("Y-m-d H:i:s");

date_default_timezone_set("Europe/Berlin");
$berlin = date("Y-m-d H:i:s");

echo "India Time: $india <br>";
echo "Berlin Time: $berlin <br>";

$diff = strtotime($india) - strtotime($berlin);

echo "Difference in seconds: " . abs($diff);
?>