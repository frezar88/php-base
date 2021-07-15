<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

    require 'point.php';

    $first = 5;
    $second = &$first;// значёк &ссылка на переменную
    $second = 3;
    echo "$first <br> <hr> " ;


    $first = new PointerTest;
    $first->x = 3;
    $first->y = 3;

    $second = $first;
    $second->x = 5;
    $second->y = 5;

    echo "x: $first->x, y: $first->y";
?>
</body>
</html>