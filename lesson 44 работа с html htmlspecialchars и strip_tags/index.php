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

    $str = "text\nhello\nphp";
    echo $str;
    echo '<br><br>';

    echo '<hr>';

    #nl2br перенос строки черех символы \n
    echo nl2br($str);

    echo '<hr>';

?>

    <form action="handler.php" method="post">
        Сообщение :<br>
        <textarea name="msg"  cols="50" rows="5"></textarea><br>
        <input type="submit" value="Добавить">
    </form>

<hr>

<?php
    #strip_tags - удаляеть все хтмл теги
    $str = '<p>Обычный текст </p><br>
            <br>Жирный текст</br>';
    echo htmlspecialchars(strip_tags($str,'<p>'));


?>

</body>
</html>