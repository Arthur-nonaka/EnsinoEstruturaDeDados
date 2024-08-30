<?php

class User {
    private $name;
    private $password;
    private $email;
    private $viewed;

    public function __construct($name, $password, $email) {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->viewed = [];
    }

    public function getName() {
        return $name;
    }
    public function setName($name) {
        $this->name = $name;
    }
    
    public function getPassword() {
        return $password;
    }
    public function setPassword($password) {
        $this->password = $password;
    }

    public function getEmail() {
        return $email;
    }
    public function setEmail($email) {
        $this->email = $email;
    }

    public function getViewed() {
        return $viewed;
    }
    public function setViewed($pageId) {
        if(!in_array($pageId, $viewed)) {
            $this->viewed[] = $pageId;
        }
    }

}