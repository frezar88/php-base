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

    printf("Первое число - %d",26);

    echo '<hr>';

    $number = 5867;
    printf('Двоичное число :%b <br />',$number);
    printf('Десятичное число :%d <br />',$number);
    printf('Числа с плавоющей точкой :%f <br />',$number);
    printf('Восьмеричное число :%o <br />',$number);
    printf('Строковое представление :%s <br />',$number);
    printf('Шестнадцатеричное число (нижний регистр) :%x <br />',$number);
    printf('Шестнадцатеричное число (верхний регистр) :%X <br />',$number);

echo '<hr>';

    $red = 255;
    $green = 255;
    $blue = 100;
    printf('#%X%X%X',$red,$green,$blue);


    #Обьеденение  строки в массик

echo '<hr>';

    $str =' Имя, Фамилия, e-mail';
    echo '<pre>';
    print_r(explode(', ',$str, 2));
    echo '<pre>';

echo '<hr>';

    #Разбить масив в строку
    $arr = ['Имя','Фамилия','e-mail','Номер'];
    echo implode(', ',$arr) ;

?>


</body>
</html>