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
    # Разбивает массив по переменным
    $arr = [1, 2, 3];
    list($one, $two, $three) = $arr;
    echo $one,'<br>';
    echo $two,'<br>';
    echo $three,'<br>';

?>
<br>
<?php
    #Обмен значениями между перемнными без создания новой
    $x = 6;
    $y = 3;

    echo 'До: <br>';
    echo " x: $x <br>";
    echo " y: $y <br>";

    list($y,$x) = [$x, $y];

    echo 'после: <br>';
    echo " x: $x <br>";
    echo " y: $y <br>";


?>
<br>


</body>
</html>