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
    $transport = [
            'Авто'=>['Лада','Шевроле','Додж'],
            'Самолёты'=>['Ил-2','И-16','Мессер'],
            'Корабли'=>['Авианосец','Фрегат','Есминец']

    ];
    echo $transport['Самолёты'][1] ;
    echo '<pre>';
    print_r($transport['Авто']);
    echo '<pre>';
?>
<br>



</body>
</html>