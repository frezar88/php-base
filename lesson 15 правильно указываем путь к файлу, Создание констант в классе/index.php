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

    //echo 'Путь к файлу ' . __DIR__ . '<br>';//костанта где лежит файл
   // require_once '../lesson 13 клонирование обьектов/point.php';//стандартный способ

    require_once  __DIR__ . '/../lesson 13 клонирование обьектов/point.php' ;// Правильный способ через константу дир!



?>

<?php

    class ConstCLass{
        const Name = 'str';
    }
    if (defined('ConstCLass::Name')){//обращение такое же как к статическим переменным, но только в классах
        echo 'константа поределена';
    }else{
        echo 'константа не определена';
    }

?>
</body>
</html>