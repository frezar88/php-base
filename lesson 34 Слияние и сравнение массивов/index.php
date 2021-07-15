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
    // При слиянии индексы проставить вручную обязательно
    $first = [1=>'red',2=>'blue'];
    $second = [3=>'brown',4=>'green'];
    $con = $first + $second;
    echo '<pre>';
    print_r($con);
    echo '<pre <hr>';

    //Но лучже юзать array_merge
    $first1 = ['red','blue'];
    $second1 = ['brown','green'];
    $con1 = array_merge($first1,$second1);
    echo '<pre>';
    print_r($con1);
    echo '<pre <hr>';

    if ($first1 == $second1){
        echo 'Maccивы равны';
    }else{
        echo 'Массивы не равны';
    }

?>
<hr>
<br>

</body>
</html>