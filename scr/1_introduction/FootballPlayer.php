<?php

class FootballPlayer
{
    public $name;
    public $position;

    public function __construct($name, $position)
    {
        $this->name = $name;
        $this->position = $position;
    }

}

$playerA = new FootballPlayer('Marco Reus', 'Striker');
$playerB = new FootballPlayer('Axel Witsel', 'Midfield');

var_dump($playerA->name); //M
var_dump($playerB); //A