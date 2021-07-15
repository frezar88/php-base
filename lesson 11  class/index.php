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
    $point1 = new Point;
    $point1->x = 13;
    $point1->y = 2;
    echo $point1->x;

    $point2 = new Point;
    $point2->x = 1;
    $point2->y = 2;
    echo $point2->x;

    unset($point2);//удалить класс из переменной
    echo $point2->x;
?>
</body>
</html>