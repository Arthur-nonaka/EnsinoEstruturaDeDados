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
        return mysqli_connect($this->host, $this->user, $this->password, $this->database);
    }

    public function insertUser(User $user) {
        $conn = $this->connect();
        $sql = "INSERT INTO users (name, password, email, coins) VALUES ('" . $user->getName() . "', '" . $user->getPassword() . "', '" . $user->getEmail() . "', " . $user->getCoins() . ")";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }

    public function getUsers($id) {
        $conn = $this->connect();
        $sql = "SELECT id, name, password, email, coins FROM users WHERE id = " . $id;
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }
    public function getUserById($id) {
        $conn = $this->connect();
        $sql = "SELECT id, name, password, email, coins FROM users WHERE id = " . $id;
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $user = new User($row['name'], $row['password'], $row['email'], $row['coins']);
        } else {
            $user = null;
        }
        $conn->close();
        return $user;
    }

    public function getUserByEmail($email) {
        $conn = $this->connect();
        $sql = "SELECT id, name, password, email, coins FROM users WHERE email = '" . $email . "'";
        echo $sql;
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $user = new User($row['name'], $row['password'], $row['email'], $row['coins']);
        } else {
            $user = null;
        }
        $conn->close();
        return $user;
    }

    public function updateUser(User $user, $id) {
        $conn = $this->connect();
        $sql = "UPDATE users SET name = '" . $user->getName() . "', password = '" . $user->getPassword() . "', email = '" . $user->getEmail() . "', coins = " . $user->getCoins() . " WHERE id = " . $id;
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }

    public function deleteUser($id) {
        $conn = $this->connect();
        $sql = "DELETE FROM users WHERE id = " . $id;
        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
}