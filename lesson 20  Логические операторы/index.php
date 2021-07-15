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

    $char = 'c#';
    if ($char == 'php'){
        echo 'Язык php';
    }elseif ($char == 'js' ){
        echo 'Язык js';
    }elseif ($char == 'c#' ){
        echo 'Язык c#';
    }else{
        echo  "Неизвестный язык";
    }
?>

<br>

<?php
    $char = 'c#1';
    if ($char == 'php'){ ?>
        <h1>Язык PHP</h1>
    <?php
    }elseif ($char == 'js'){  ?>
        <h1>Язык js</h1>
    <?php
    }elseif ($char == 'c#'){  ?>
        <h1>Язык c#</h1>
    <?php
    }else{ ?>
        <h1>Хз что за язык</h1>
    <?php
    }
    ?>





</body>
</html>