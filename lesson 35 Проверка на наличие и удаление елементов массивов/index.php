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

    $arr = [5=>1,2,3];
    for ($i=0; $i<10;$i++){
        if (isset($arr[$i])){
            echo "Элемент \$arr[$i] существует <br>";
        }else{
            echo "Элемент \$arr[$i] не существует <br>";
        }
    }
    echo '<hr><br>';

    # Приверка на массив!!!
    if (is_array($arr)){
        echo 'Это массив';
    }else{
        echo 'Это не массив';
    }

    echo '<hr><br>';

    #Поиск значени в массиве
    if (in_array(2,$arr)){
        echo 'Значение найдено';
    }else{
        echo 'Значение не найдено';
    }
    echo '<hr><br>';

    #Поиск ключа значения в массиве
    if (array_key_exists(5,$arr)){
        echo 'Ключ найден в массиве';
    }else{
        echo 'Ключ не найден в массиве';
    }

    echo '<hr><br>';

    #Поиск ключа значения по значению

    echo array_search(2,$arr);

    echo '<hr><br>';

    #Удаление елементов из массива
    unset($arr[6]);
    echo '<pre>';
    print_r($arr);
    echo '<pre>';

?>
<hr>
<br>

</body>
</html>