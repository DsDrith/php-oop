<?php

abstract class Shape
{
    protected $color;
    protected $marterial = 'iron';

    public function __construct ($color = 'red')
    {
        $this->$color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }
    abstract protected function getArea();

}

class Square extends Shape
{
    protected $length = 5;

    public function getArea()
    {
        return pow($this->length, 2);
    }
}

class Triangle extends Shape
{
    protected $base = 7;
    protected $height = 4;
    protected $marterial = 'plastic';

    public function getArea()
    {
        return 0.5 * $this->base * $this->height;
    }

}

$square = new Square();
$triangle = new Triangle();
var_dump($square);
var_dump($square->getArea());
var_dump($triangle);
var_dump($triangle->getArea());