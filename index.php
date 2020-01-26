<?php
// West Lafayette, Indiana:
// Latitude: 40.4 North, Longitude: 86.9 West
// Zenith ~= 90, offset: -5 GMT

echo("West Lafayette, Indiana, Date: " . date("D M d, Y, H h M m S s"));
echo("<br>Sunrise time: ");
echo(date_sunrise(time(),SUNFUNCS_RET_STRING,40.4,-86.9,90,-5));

$sunsetTime = date_sunset(time(),SUNFUNCS_RET_STRING,40.4,-86.9,90,-5);
echo("<br>Sunset time: " . $sunsetTime);
$currentTime = time();
echo("<br>");
echo(($sunsetTime - $currentTime));

?>