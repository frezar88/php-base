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

    for ($i = 5, $j = 0; $i >= 0, $j < 5; $i--, $j++) {
        echo "$i    ", "$j<br>";
    }

?>

<?php
  #Проверка на простые числа
    for ($i = 2; $i < 100; $i++) {
        for ($j = 2; $j< $i; $j++){
            if (($i % $j) != 0){
                continue;
            }else{
                $flag = true;
                break;
            }
        }
        if (!$flag) echo "$i ";
        $flag = false;
    }

?>
<br>


</body>
</html>