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

    echo '<pre>';
    print_r($_GET);
    echo '<pre>';

echo '<hr>';

    echo "<a href='test.php?phrase=" . urlencode("Привет, Мир!") . "'>Ссылка</a>";

echo '<hr>';

    $url = 'http://user:pass@www.site.ru/path/index.php?par=value#anch';
    echo '<pre>';
    print_r(parse_url($url));
    echo '<pre>';

?>


</body>
</html>