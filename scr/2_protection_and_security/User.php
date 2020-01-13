<?php

class User
{
    public $name;
    private $email;
    private $public = false;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function makeProfilePublic()
    {
        $this->public = true;
    }

    public function getEmail()
    {
        if ($this->public)
        {
            return $this->email;
        }
        throw new Exception('Profile is not public');
    }
}

$user = new User('Jan', 'info@example.org');
$user->makeProfilePublic();
var_dump($user->name); //Jan
//var_dump($user->email); Fatal error: Uncaught Error: Cannot access private property User::$email
var_dump($user->getEmail);