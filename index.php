<?php
$my_money = 1000;
$spent_per_month = 600;
$earned_per_month = 800;
$unknown_per_month = rand(1,200);
$months = 24;
$date = date('Y-m-d', strtotime('+2 year'));
$I_will_have = $my_money + $months * ($earned_per_month - $spent_per_month - $unknown_per_month);

print "<p>Po $months men. $date, tiketina turesiu $I_will_have pinigu.</p>"
?>