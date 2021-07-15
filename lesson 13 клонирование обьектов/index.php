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

//    $first = new Pointer1;
//    $first->x = 3;
//    $first->y = 3;
//
//    $second = clone $first;//клон
//    $second->x = 5;
//    $second->y = 5;
//
//    echo "x: $first->x, y: $first->y";
//    echo "<br>";
//    echo "x: $second->x, y: $second->y";
//
//    echo "<br>", sqrt(16)  ;
//    echo "<br>", pow(2, 8)  ;

/*-----------задача----------*/
    $p1 = new PointerTest;
    $p1->x = 3;
    $p1->y = 5;

    $p2 = new PointerTest;
    $p2->x = 7;
    $p2->y = 12;


    $distance = sqrt(pow(($p2->x - $p1->x),2)+pow(($p2->y - $p1->y),2));
    echo (int)$distance;
    
?>
</body>
</html>