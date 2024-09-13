<?php

class User {
    public $name;
    private $password;
    private $email;
    private $coins;
    
    public function __construct($name, $password, $email, $coins) {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->coins = $coins;
    }

    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    }
    
    public function getPassword() {
        return $this->password;
    }
    public function setPassword($password) {
        $this->password = $password;
    }

    public function getEmail() {
        return $this->email;
    }
    public function setEmail($email) {
        $this->email = $email;
    }

    public function getCoins() {
        return $this->coins;
    }
    public function setCoins($coins) {
        $this->coins = $coins;
    }

}