<?php

class Database {
    private $host;
    private $user;
    private $password;
    private $database;

    public function __construct($host,$user,$password,$database) {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;
    }

    public function connect() {
        return new mysql($this->host, $this->user, $this->password, $this->database);
    }

    public function insertUser(User $user) {
        
    }
}