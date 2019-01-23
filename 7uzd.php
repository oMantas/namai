<?php
$days = 365;
$cig_cost = 3.60 / 20;
$cig_per_year = 0;
$dontSmoke_monThu = 0;

for($i = 0; $i < $days; $i++) {
    $week_day = date('N', strtotime("+$i day"));
    if($week_day < 5) {
        $cig_per_monThu = rand(1,5);
        $cig_per_year += $cig_per_monThu;
        $dontSmoke_monThu += $cig_per_monThu;
    }elseif($week_day == 5) {
        $cig_per_fri = rand(15,25);
        $cig_per_year += $cig_per_fri;
    }else {
        $cig_per_satSun = rand(8,12);
        $cig_per_year += $cig_per_satSun;
    }
};

$isleisti_eur = $cig_per_year * $cig_cost;
$save_from_dontSmoke = $dontSmoke_monThu * $cig_cost;

print "Per metus surukysiu $cig_per_year cigareciu, uz $isleisti_eur eur. <br>";
print "Nerukydamas nuo pirmadienio iki ketvirtadienio sutaupyciau $save_from_dontSmoke eur."

?>
