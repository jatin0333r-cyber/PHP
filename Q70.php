<?php
$cities = array("Delhi", "Mumbai", "Kolkata", "Dubai", "Chennai");

sort($cities);

echo "Sorted Cities:<br>";
foreach($cities as $city) {
    echo $city . "<br>";
}

echo "<br>Cities starting with D:<br>";
foreach($cities as $city) {
    if($city[0] == 'D') {
        echo $city . "<br>";
    }
}
?>