<?php
$months = 12;
$kisene = 1000;
$alga = 700;
$islaidos = rand(400, 1700);
$text = '';

for ($i = 1; $i <= 12; $i++) {
    $kisene += $alga - $islaidos;
    if ($kisene > 0) {
        $text .= "$i men pas tave: $kisene eur. <br>";
    } else {
        $text = "$i menesi pas tave baigsis pinigai";
        break;
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
        <?php print "$text"; ?>
    </p>
</body>
</html>