<?php
// 1.1 -> Upgrade to 1.7
class Car
{
    public $brand;

    public function __construct($brand)
    {
        $this->brand = $brand;
    }
    public function getBrand()
    {
        return $this->brand;
    }

    public function __destruct()
    {
        echo "The car is destroyed<br>";
    }
}
$car = new Car("Toyota");
echo "The car brand is: " . $car->getBrand() . "<br>";

// 1.2
class Animal
{
    public $name;
    protected $age;
    private $color;

    public function __construct($name, $age, $color)
    {
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getColor()
    {
        return $this->color;
    }
}
class Cat extends Animal
{
    public function meow()
    {
        echo $this->name . " is meowing<br>";
    }
}
class Dog extends Animal
{
    public function bark()
    {
        echo $this->name . " is barking<br>";
    }
}

$animal = new Animal("Dog", 3, "Brown");

echo "Name: " . $animal->getName() . "<br>";
echo "Age: " . $animal->getAge() . "<br>";
echo "Color: " . $animal->getColor() . "<br>";

// 1.3 -> Upgrade to 1.6
interface Shape
{
    public function calculateArea();
}
interface Color
{
    public function getColor();
}

class Circle implements Shape, Color
{
    private $radius, $color;

    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    public function calculateArea()
    {
        return pi() * $this->radius * $this->radius;
    }

    public function getColor()
    {
        return $this->color;
    }
}

// class Rectangle implements Shape, Color
// {
//     private $width;
//     private $height;

//     public function __construct($width, $height)
//     {
//         $this->width = $width;
//         $this->height = $height;
//     }

//     public function calculateArea()
//     {
//         return $this->width * $this->height;
//     }
// }

$circle = new Circle(5, "Blue");

echo "Circle Area: " . $circle->calculateArea() . "<br>";
echo "Circle Color: " . $circle->getColor() . "<br>";
