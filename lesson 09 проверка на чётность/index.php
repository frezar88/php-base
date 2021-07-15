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

        $num = 24;
        $f = (float)($num/2) - (int)($num/2);

        if ($f){
            echo 'Не четное число';
        }else{
            echo 'Четное число';
        }

?>

</body>
</html>