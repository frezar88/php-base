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
// оператор ++ увеличить значение переменной на 1
// оператор -- уменьшить значение переменной на 1

    echo 4 ** 2; //вовзедение в степень
    echo '<br>';
    echo 8 % 3; // найти остаток от деления
    echo '<br>';


?>

<br>
<?php

    if (9 % 2) echo 'число не четное';
    else echo 'число чётное';

?>
<?php
//сокращённая запись операторов
    $num = 1;
    $var = 1;

    $num .= $var; //  $num = $num . $var;
    $num += $var; //  $num = $num + $var;
    $num -= $var; //  $num = $num _ $var;
    $num *= $var; //  $num = $num * $var;
    $num /= $var; //  $num = $num / $var;
    $num %= $var; //  $num = $num % $var;
    $num **= $var; //  $num = $num ** $var;

?>

<br>

<?php

    $var = 3;
    echo $var++;
    echo '<br>';
    echo $var;
    echo '<br>';
    echo ++$var;

?>

</body>
</html>