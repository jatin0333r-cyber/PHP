<?php
$delhi_long = 77.1025;
$kolkata_long = 88.3639;

// 1 degree = 4 minutes
$diff = abs($kolkata_long - $delhi_long) * 4;

echo "Solar Time Difference (in minutes): " . $diff;
?>