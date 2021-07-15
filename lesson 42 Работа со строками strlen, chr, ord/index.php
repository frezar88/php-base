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

    $str = 'Hello world';
    $str2 = 'Привет, мир!';
    echo $str[0]."<br>";
    echo "\u{0410}"."<br>";
    echo $str2[0]."<br>";


    echo '<br><hr>';

    #strlen, mb_strlen
    echo mb_strlen($str2);

    echo '<br><hr>';

    for ($i=0; $i<strlen($str);$i++){
        echo $str[$i].'<br>';
    }

    echo '<br><hr>';
    #chr код символа и возвращает символ, #ord возвращает из символа код
    echo chr(36).'<br>';
    echo ord('$');

?>

</body>
</html>