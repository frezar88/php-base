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

$number = ['1', '2', '3', '4', 'hello', true, 54];
for ($i = 0; $i < count($number); $i++) {
    echo "$number[$i] <br>";
}

?>
<hr>
<br>
<?php

$arr = [
    'auto' => 'dodge',
    'plane' => 'il-2',
    'ship' => 'black pearl'
];
foreach ($arr as $key => $value) {
    echo "$key : $value <br>";
}
echo '<br>';
foreach ($arr as $value) {
    echo " : $value <br>";
}

?>
<hr>
<br>

<?php
    //Перебор многомерного массива
    $transport = [
        'Авто' => ['Лада', 'Шевроле', 'Додж' ,'Есминец'],
        'Самолёты' => ['Ил-2', 'И-16', 'Мессер'],
        'Корабли' => ['Авианосец', 'Фрегат' ]
    ];

    foreach ($transport as $key => $array) {
        echo "<b>$key</b><br>";
        foreach ($array as $value) {
            echo "<li>$value</li>";
        }
        for ($i = 0, $i < count($array); $i++;) {
            echo "<li>$array[$i]</li>";
        }
    }

?>
<br>


</body>
</html>