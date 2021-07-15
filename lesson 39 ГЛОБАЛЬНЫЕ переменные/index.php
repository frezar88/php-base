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

    function sum(){
       global $var;
       $var = 2;
        return $var;
    }
    $var = 6;
    echo "<br> $var <br>";
    echo sum();
    echo "<br> $var";

    echo "<br><hr>";

    function sum1(){
       static $count = 0;

        return ++$count;
    }

    echo "<br><hr>";


    #Вывод массива с функции
    function formatSize($bytes){
        $kBytes = $bytes / 1024;
        $mBytes = $kBytes / 1024;
        $gBytes = $mBytes / 1024;
        return [$bytes,$kBytes,$mBytes,$gBytes];
    }

    echo '<pre>';
    list($bytes,$kBytes,$mBytes,$gBytes) = formatSize(54989777);
    print_r(formatSize(54989777));
    echo '<pre>';
    echo  "<br>$bytes<br>$kBytes<br>$mBytes<br$gBytes>"
?>

</body>
</html>