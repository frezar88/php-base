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
    $i = 0;
    while ($i <=100){
        echo "$i <br>";
        $i++;
        if ($i == 4) continue;
        if ($i > 5) break;
    }

?>
<br>



</body>
</html>