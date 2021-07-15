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

    define('NUMBER',1,true);//создать консту
    if (defined('NUMBER')){// проверка создана ли константа
        echo 'костанта уже создана <br><hr>';
    }
    define('TEST',23,true);
    echo constant('TEST'),'<br><hr>';//посмотреть значение константы

?>

<?php
/* пример создание Константы с динамическим названием*/
$num = mt_rand(1, 10);
$name = "VALUE($num)";
define($name, $name,true);
echo constant($name)

?>

<?php
//стандартые константы
    echo '<br><hr>';
    echo 'Имя файла ' . __FILE__ . '<br>';
    echo 'строка в файле ' . __LINE__ . '<br>';
    echo '<br><hr>';


?>
</body>
</html>