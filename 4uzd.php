<?php
$kates = rand(1, 3);
$sunys = rand(1, 3);
$success = rand(0, 1);
$katasuniai = 0;

for ($k = 1; $k <= $kates; $k++) {
    for ($s = 0; $s <= $sunys; $s++) {
        $success = rand(0, 1);
        if ($success) {
            $katasuniai += 1;
        }
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
            <?php print "Evente dalyvavo $kates kates ir $sunys sunys." ;?>
        </p>
        <p>
            <?php print "Katasuniu iseiga: $katasuniai ." ;?>
        </p>
</body>
</html>