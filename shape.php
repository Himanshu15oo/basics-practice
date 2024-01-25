<?php

abstract class Shape
{

    public $color;

    public function __construct($color = 'red')
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    abstract public function getArea();
}

class Circle extends Shape
{

    public $radius = 16;

    public function getArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle extends Shape
{

    public $length = 10;
    public $breadth = 5;

    public function getArea()
    {
        return $this->length * $this->breadth;
    }
}

class Square extends Shape
{

    public $side = 16;

    public function getArea()
    {
        return pow($this->side, 2);
    }
}

$circle = new Circle('green');
$rectangle = new Rectangle();
$square = new Square();
var_dump($circle->getColor());
var_dump($rectangle->getColor());
var_dump($square->getColor());

var_dump($circle->getArea());
var_dump($rectangle->getArea());
var_dump($square->getArea());
