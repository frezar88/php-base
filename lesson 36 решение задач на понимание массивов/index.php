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
    #Вывести случайный эелемент массива
    $array = ['red','green','blue','violet','gray'];
    echo $array[rand(0,count($array)-1)];

    echo  '<br><hr>';

    # Создать массив со случайныйм количеством елементов от 5 до 10 и каждый элемент может принимать значение от нуля до 100
    # так же нужно отсортировать елементы массива по возростанию

    $length = rand(5,10);
    $arr = [];
    for ($i=0; $i< $length; $i++){
        $arr[$i]=rand(0,100);
    }
    sort($arr);
    echo '<pre>';
    print_r($arr);
    echo '<pre>';

echo  '<br><hr>';


# У нас есть файл и из всех данных файла создать массив
    $arr1 = file('month.txt');
    echo '<pre>';
    print_r($arr1);
    echo '<pre>';

?>
<hr>
<br>

</body>
</html>