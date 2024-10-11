<?php

class User
{
    public $name;
    private $password;
    private $email;
    private $coins;
    private $classes = [];

    public function __construct($name, $password, $email, $coins, $classes = [])
    {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->coins = $coins;
        $this->classes = $classes;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getClasses()
    {
        return $this->classes;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getCoins()
    {
        return $this->coins;
    }
    public function setCoins($coins)
    {
        $this->coins = $coins;
    }

    public function addClass($class)
    {
        if (!in_array($class, $this->classes)) {
            $this->classes[] = $class;
        }
    }

}