<?php
date_default_timezone_get('Europe/Vilnius');
$days = 365;
$cig_kaina = 3.50 / 20;
$viso_vnt = 0;
$mon_thu_kaina = 0;
$rukymo_laikas = 5 / 60; //min

for ($i = 0; $i < $days; $i++) {
    $week_day = date('N', strtotime("+$i day"));
    if ($week_day < 5) {
        $cizos_mon_thu = rand(3, 4);
        $viso_vnt += $cizos_mon_thu;
        $mon_thu_kaina += round($cizos_mon_thu * $cig_kaina, 2);
    } elseif ($week_day == 5) {
        $cizos_fri = rand(10, 20);
        $viso_vnt += $cizos_fri;
    } else {
        $cizos_sat_sun = rand(1, 3);
        $viso_vnt += $cizos_sat_sun;
    }
}

$viso_kaina = round($viso_vnt * $cig_kaina, 2);
$viso_hours = round($viso_vnt * $rukymo_laikas);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>
        <?php print "Per metus surukysiu $viso_vnt cigareciu uz $viso_kaina eur.";?>
    </p>
    <p>
        <?php print "Nerukydamas pirmadieni-ketvirtadieni sutaupyciau $mon_thu_kaina eur";?>
    </p>
    <p>
        <?php print "Per metus prastovesiu traukdamas $viso_hours valandu.";?>
    </p>
</body>
</html>