<?php
$sunny = rand(0,1);
$rain = rand(0,1);
$id = '';
$text = '';

if($sunny == 1 && $rain == 0) {
    $text = 'It\'s a sunny day.';
    $id = 'sunny_pic'; 
}elseif($sunny == 1 && $rain == 1) {
    $text = 'It\'s a sunny with rain.';
    $id = 'sunny_rain';
}elseif($rain == 1 && $sunny == 0) {
    $text = 'It\'s a rainy day with clouds.';
    $id = 'rainCloud';
}else{
    $text = 'It\'s a rainy day.';
    $id = 'rain_pic';
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
                font-size: 30px;
            }
            div {
                width: 350px;
                height: 300px;
                background-size: contain;
                background-repeat: no-repeat;
            }
            #sunny_pic {
                background-image: url(../img/sunny.jpg);
            }
            #rain_pic {
                background-image: url(../img/rain.jpg);
            }
            #sunny_rain {
                background-image: url(../img/rainySunshine.jpg);
            }
            #rainCloud {
                background-image: url(../img/rainCloud.jpg);
            }

        </style>
    </head>
    <body>
        <p><?php print "$text"; ?></p>
        <div id='<?php print "$id"; ?>'></div>
    </body>
</html>