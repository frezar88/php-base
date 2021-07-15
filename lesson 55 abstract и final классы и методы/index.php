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

#protected - идификатор метода, который не доступен из вне, но доступен для наследуюмых классов
# parent:: Вернёт изначальный метод класса( от которого наследуемся)

#ABSTRACT - асбтрактный класс, его нельзя вызвать, Но от его можно наследоваться( для наследования и создаётся )
# abstract метод - Нужен что бы создать обязательный метод в наследуюмых классах, (если его не заполнить будет ошибка), Нужен что бы не забыть о нём.

# final для методов - запрещает переопределять метод у которого он написан!
# final для классов - запрещает наследоваться от класса!

abstract class Animal
{
    public $legs = '4';

    public function info()
    {
        echo "У меня {$this->legs} лапы <br>";
    }

    abstract public function color();
}

final class Dog extends Animal
{
    public $name = 'Собака';

    public function color()
    {
        // TODO: Implement color() method.
    }

    public function info()
    {
        echo "Я {$this->name}, и меня {$this->legs} лапы <br>";

    }

    public function voice()
    {
        echo "{$this->name} издаёт звук гав-гав <br>";
    }

    public function parentInfo()
    {
        parent::info();
    }

}

class Cat extends Animal
{
    public $name = 'Кошка';

    public function color()
    {
        // TODO: Implement color() method.
    }

    public function voice()
    {
        echo "{$this->name} издаёт звук мяу. <br>";
    }
}


$dog = new Dog();
$cat = new Cat();

# Определяет относится ли объект к классу

if ($cat instanceof Animal) {
    echo "Dog является экземпляром класса Animal";
}
if ($cat instanceof Dog){
    echo "Dog является экземпляром класса Dog";
}
if ($cat instanceof Cat){
    echo "Dog является экземпляром класса Cat";
}
?>


</body>
</html>