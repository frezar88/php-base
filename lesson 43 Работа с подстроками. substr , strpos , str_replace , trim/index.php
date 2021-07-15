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

    $date = '01.01.2021';
    echo 'день ' . substr($date,0,2). '<br>';
    echo 'месяц ' . substr($date,3,2). '<br>';
    echo 'год ' . substr($date,6). '<br>';

    echo '<br><hr>';

    #strpos возвращает индекс первому вхождению в строке
    $message = 'Hello world';
    echo  strpos($message,'world');

    echo '<br>';

    $str = 'PHP - интерпретируемый язык';
    echo substr($str,strpos($str,'интер'));

    echo '<br><hr>';
    #str_replace Замена в тексте

    $str2 = 'PHP - [b]интерпретируемый[/b] язык, а это [b] жирный текст [/b]';
    echo $str2. '<br>';
    $str2 = str_replace('[b]','<b>',$str2);
    $str2 = str_replace('[/b]','</b>',$str2);
    echo $str2;

    echo '<br><br>';

    #str_replace В массиве 4 параметр в реплейсе  показывает сколько произошло замен

    $str3 = 'PHP - [b]интерпретируемый[/b] язык, а это [b] жирный текст [/b]';
    echo $str3. '<br>';
    $str3 = str_replace(['[b]','[/b]'],['',''],$str3,$countReplace);

    echo $countReplace. '<br>';

    echo $str3;


    $str4 = ' document '

?>

</body>
</html>