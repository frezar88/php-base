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
#Конструктор на PHP
//class People
//{
//    private $name;
//
//    public function __construct()
//    {
//        echo 'Вызов конструктора';
//        $this->name = 'Ivan';
//    }
//}
//
//$obj = new People();
//echo '<pre>';
//print_r($obj);
//echo '<pre>';


class Point
{
    private $x;
    private $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    # __toStrong лучше писать, и будет выводить через это то что ты там укажешь!
    public function __toString()
    {
        return "({$this->x},{$this->y})";
    }
}

$obj = new Point(10, 20);
echo '<pre>';
print_r($obj);
echo '<pre>';

echo '<hr>';

echo "{$obj}";


?>


</body>
</html>