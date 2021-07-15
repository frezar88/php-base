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

    $arr['one'] = 14;
    echo "$arr[one] и ещё текст";

?>
<br>
<?php

    $arr1[0][0] = 16;
    echo "Текст {$arr1[0][0]} и ещё текст <br>";
    echo "Текст ".$arr1[0][0]." и ещё текст";

?>
<br>


</body>
</html>