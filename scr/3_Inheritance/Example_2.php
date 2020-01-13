<?php

class Shape
{
    // common attribute
    protected $color;
    protected $marterial = 'iron';

    public function __construct($color = 'red')
    {
        $this->color = $color;
    }
    
    // common behavier or method 
    protected function getColor()
    {
        return $this->color;
    }

    protected function getArea()
    {

    }
}

class Square extends Shape
{
    private $length = 5;

    // overide behavier or method
    public function getArea()
    {
        return pow($this->length, 2);
    }
}

class Triangle extends Shape
{
    private $base = 7;
    private $height = 4;
    // overide attribute
    // private $marterial
    // will throw Fatal error: Access level to triangle::$marterial must be protected (as in class Shape) or weakn
    protected $marterial = 'plastic';   

    //overide behavier or method 
    public function __construct($color = 'green')
    {
        $this->color = $color;
    }
}

$shape = new Shape();
$square = new Square();
$triangle = new Triangle();
var_dump($shape);
var_dump($square);
var_dump($square->getArea());
var_dump($triangle);
var_dump($triangle->getArea());