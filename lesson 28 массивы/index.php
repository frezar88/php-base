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
    # => это задать номер индекса в массиве
    $arr = [15 => 'Hello', 5 => 'world', '!'];
    echo '<pre>';
    print_r($arr);
    echo '<pre>';
?>
<br>
<?php
    # Другой способ создания массива
    $arr1[] = 'Hello';
    $arr1[2] = 'Hello';
    $arr1[6] = 'Hello';
    echo '<pre>';
    print_r($arr1);
    echo '<pre>';
?>
<br>



</body>
</html>