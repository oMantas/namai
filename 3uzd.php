<?php
date_default_timezone_get('Europe/Vilnius');
$spalis = 31;
$lapkritis = 30;
$gruodis = 31;
$date = date('d');
$x = $spalis + $lapkritis + $gruodis + $date;

print "Nuo spalio pradzios iki siandien praejo $x dienu.";
?>