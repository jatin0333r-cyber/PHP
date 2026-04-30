<?php
$birthDate = "2005-01-01"; // change as needed

$birth = strtotime($birthDate);
$current = time();

$seconds = $current - $birth;
$minutes = $seconds / 60;
$hours = $minutes / 60;

echo "Hours: " . floor($hours) . "<br>";
echo "Minutes: " . floor($minutes) . "<br>";
echo "Seconds: " . $seconds;
?>