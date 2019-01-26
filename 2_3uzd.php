<?php
$po_alaus = rand(1, 5);
$dar_alaus = 0;
$kablys = 1;

for ($i = 0; $i < $po_alaus; $i++) {
    $dar_alaus += floor($po_alaus / 2) + $kablys;
    if ($dar_alaus > 12) {
        $dar_alaus = 0;
    }
}
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
            <?php print "Po $po_alaus alaus, tiketina dar imsiu $dar_alaus alaus."; ?>
        </p>
    </body>
</html>
