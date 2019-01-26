<?php
$t = rand(1, 4);
$text = 'N';

for ($i = 0; $i < $t; $i++) {
    $text .= 'x';
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
        <h1>
            <?php print "As pot $t valandu praktikos..."; ?>
        </h1>
        <h2>
            <?php print "$text koks pavarges..."; ?>
        </h2>
    </body>
</html>
