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

        $arr = ['one'=>'1','two'=>'2'];
        echo $arr['one'];
?>

<?php
        # другой способ создания ассоциативного массива
        $arr1['one'] = 1;
        $arr1['two'] = 2;
        echo '<pre>';
        print_r($arr);
        echo '<pre>';
?>
<br>



</body>
</html>