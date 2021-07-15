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

//class Hello
//{
//    public function printText(): string
//    {
//        return "Привет, мир!";
//    }
//}
//
//$obj = new Hello;
//echo $obj->printText();

#Стандартное создание методов. Методы нельзя вызвать до того как создали оъект

//class Point
//{
//    private $x;
//    private $y;
//
//    public function setX($x)
//    {
//        $this->x = $x;
//    }
//
//    public function setY($y)
//    {
//        $this->y = $y;
//    }
//
//    public function getX()
//    {
//        return $this->x;
//    }
//
//    public function getY()
//    {
//        return $this->y;
//    }
//
//    public function distance(){
//        return sqrt($this->getX()**2 + $this->getY()**2);
//    }
//
//}
//
//$p1 = new Point;
//$p1->setX(2);
//$p1->setY(7);
//echo $p1->distance();
//

#Статические методы. Можно использовать без создания оъекта


//class Hello
//{
//    public static function printText(): string
//    {
//        return "Привет, мир!";
//    }
//}
//
//
//echo Hello::printText();
//

#Клучевое слово SELF
class Page
{
    static $content = 'Тело сайта <br>';

    public static function footer()
    {
        return 'Это подвал сайта <br>';

    }

    public static function header()
    {
        return 'Это шапка сайта <br>';
    }

    public static function site()
    {
        echo self::header() .
            self::$content .
            self:: footer() ;

    }
}

Page::site();

?>


</body>
</html>