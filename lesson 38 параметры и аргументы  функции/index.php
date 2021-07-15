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

    function sum(int $a, int $b): int
    {

        return $a + $b;
    }

    echo sum(2.3, 3);

    echo '<br><hr>';


    # Знак амперсант & делает ссылку на переменную( если нужно изменить переменную, нужно его ставить)
    function sum2(&$a){
        $a = $a +10;
        return $a ;
    }
    $b = 10;
    echo sum2($b);

    echo '<br>';
    echo  $b;

    echo '<br><hr>';

    #Параметры по умолчанию

    function sum3($b,$a=10){
        return $a + $b;
    }

    echo sum3(10,1);


    echo '<br><hr>';


    # Что бы передать неизвестное количество параметров нужно использовать ...

    function outArguments(...$items){
        foreach ($items as $arg){
            echo "$arg <br>";
        }
    }


    outArguments('php','js','c++','python','go');

    echo '<br><hr>';

    #Передаём массив аргументов в функцию
    function outArguments1($a,$b,$c,$d){
        echo "$a <br>";
        echo "$b <br>";
        echo "$c <br>";
        echo "$d <br>";
    }
    $items1 = ['php','js','c++','c'];
    outArguments1(...$items1);
?>

</body>
</html>