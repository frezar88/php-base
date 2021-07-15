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

class Animal
{
    public $legs = '4';

    public function info()
    {
        echo "У меня {$this->legs} лапы <br>";
    }
}

class Dog extends Animal
{
    public $name = 'Собака';

    public function info()
    {
        echo "Я {$this->name}, и меня {$this->legs} лапы <br>";

    }

    public function voice()
    {
        echo "{$this->name} издаёт звук гав-гав <br>";
    }
    public function parentInfo(){
        parent::info();
    }

}

class Cat extends Animal
{
    public $name = 'Кошка';

    public function voice()
    {
        echo "{$this->name} издаёт звук мяу. <br>";
    }
}

$dog = new Dog();
$dog->info();
$dog->voice();
$dog->parentInfo();
?>


</body>
</html>