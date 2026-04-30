<?php
$name = "Ankit";
$birthDate = "2005-01-01";

$birth = new DateTime($birthDate);
$today = new DateTime();

$diff = $today->diff($birth);

echo "Hey $name, you are " . $diff->y . " years " . 
     $diff->m . " months and " . $diff->d . " days old.<br>";

echo "Happy Birthday!";
?>