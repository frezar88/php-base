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
    $char = 'php';
    switch ($char){
        case 'php':
            ?>
            <h1>Язык php</h1>
            <?php
            break;
        case 'js':
            ?>
            <h1>Язык js</h1>
            <?php
           break;
        case 'c#':
            ?>
            <h1>Язык c#</h1>
            <?php
            break;
        default:
            ?>
            <h1>Неизвестный язык</h1>
            <?php
            break;
    }
    ?>

<br>

<?php
    $number = 1200;
    switch ($number){
        case $number > 0 && $number <= 10:
            echo "$number меньше 10 и больше 0";
            break;
        case $number > 10 && $number <= 100:
            echo "$number меньше 100 и больше 10";
            break;
        case $number > 100 && $number <= 1000:
            echo "$number меньше 1000 и больше 100";
            break;
        default:
            echo "$number больше 1000 и меньше 0";
    }

?>

</body>
</html>