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

    function recursiya ($counter){
        if ($counter >0){
            echo ($counter --) . "<br>";
            recursiya($counter);
        }else  return;

    }
    recursiya(8);

    echo "<br><hr>";

    function outter(){
        function inner(){
            return "Hello world";
        }
    }
    outter();
    echo inner();

    echo "<br><hr>";

    #Динамическое название функции

    function first(){
        return "First function";
    }
    function second(){
        return "Second function";
    }

    $newFunction = rand(0,1) ? 'first' : 'second';

    echo $newFunction();

    echo "<br><hr>";

    #Анонимная функция

    $arr = ['php','c++','python','ruby','js','go'];
    sort($arr);
    echo '<pre>';
    print_r($arr);
    echo '<pre>';

    echo "<br><hr>";

    #Сортировка обьекта

    class Point{
        public $x;
        public $y;
    }

    $fst =new Point();
    $fst ->x = 12;
    $fst ->y = 5;

    $snd =new Point();
    $snd ->x = 1;
    $snd ->y = 1;

    $thd =new Point();
    $thd ->x = 4;
    $thd ->y = 10;

    $arr3 = [$fst,$snd,$thd];

    usort($arr3,function ($a,$b){
        $dist_a = sqrt($a -> x ** 2 +$a ->y **2);
        $dist_b = sqrt($b -> x ** 2 +$b ->y **2);
        return $dist_a <=> $dist_b;
    });

    echo '<pre>';
    print_r($arr3);
    echo '<pre>';


?>

</body>
</html>