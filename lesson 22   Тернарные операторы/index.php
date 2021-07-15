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
   // выражение ? выражение 2 : выражение 3
    //$x = -450;
    //$x = $x < 0 ? -$x : $x;
    //echo $x;

    $y = null;
    $y = $y ?? 1; // если переменная пустая, назначить значение переменной
    echo $y;


?>

<br>

</body>
</html>