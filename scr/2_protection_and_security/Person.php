<?php

class Person
{
    public $name;
    public $age;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age = $age;
    }

    public function setAge()
    {
        if ($age < 18)
        {
            throw new Exception('Profile is not old enough');
        }

        $this->age = $age;
        return $this;
    }
}

$sok = new Person('Sok');
var_dump($sok);

$sok->setAge(18);
var_dump($sok);

$sok->age = 10;
var_dump($sok);

$sok->setAge(10);