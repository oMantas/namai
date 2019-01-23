<?php
date_default_timezone_get('Europe/Vilnius');
$time = date('s');
$id = '';

if($time % 2 == 0) {
    $id = 'kvadratas';
}else {
    $id = 'apskritimas';
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <style>
            p {
                color: white;
                font-family: fantasy;
                font-size: 40px;
                text-align: center;
                padding-top: 165px;
            }
            div {
                width: 400px;
                height: 400px;
                margin: 150px auto;
            }
            #kvadratas {
                background-color: black;
            }
            #apskritimas {
                border-radius: 50%;
                background-color: grey;
            }
        </style>
    </head>
    <body>
        <div id='<?php print "$id"; ?>'>
            <p><?php print date('H:i:s'); ?></p>
        </div>
    </body>
</html>