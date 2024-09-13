<?php
require_once "../Model/Database.php";
require_once "../Model/User.php";

class Controller {
    private $database;

    public function __construct() {
        $this->database = new Database("127.0.0.1", "root", "", "estruturadados");
    }   

    public function createUser($name, $password, $email, $coins) {
        $user = new User($name, $password, $email, $coins);
        $this->database->insertUser($user);
    }

    public function readUser($id) {
        return $this->database->getUserById($id);
    }

    public function updateUser($id, $name, $password, $email, $coins) {
        $user = new User($name, $password, $email, $coins);
        $this->database->updateUser($user, $id);
    }

    public function deleteUser($id) {
        $this->database->deleteUser($id);
    }

    public function loginUser($email, $password) {
        $user = $this->database->getUserByEmail($email);
        if($user && $user->getPassword() == $password) {
            session_start();
            $_SESSION['user'] = $user->getName();
            return true;
        }
        return false;
    }
}