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

$tests = array(
    '42',
    1337,
    0x539,
    02471,
    0b10100111001,
    1337e0,
    '0x539',
    '02471',
    '0b10100111001',
    '1337e0',
    'not numeric',
    array(),
    9.1,
    null
);

foreach ($tests as $element) {
    if (is_numeric($element)) {
        echo var_export($element, true) . " - число ", "<br>";
    } else {
        echo var_export($element, true) . " - Не число", "<br>";
    }
}
?>

<?php

echo "<br><hr>";
echo round(21.387,1),"<br>";
echo ceil(21.00000001);//в большую степерь округление
echo "<br>", floor(21.00000001);//в меньшую степень округление

?>
</body>
</html>