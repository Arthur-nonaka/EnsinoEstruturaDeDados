<?php

class User
{
    public $name;
    private $password;
    private $email;
    private $coins;
    private $classes = [];

    private $items = [];

    public function __construct($name, $password, $email, $coins, $classes = [], $items = [])
    {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->coins = $coins;
        $this->classes = $classes;
        $this->items = $items;
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

    public function getItems()
    {
        return $this->items;
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

    public function addItem($item)
    {
        if (!in_array($item, $this->items)) {
            $this->items[] = $item;
        }
    }

}