<?php
require_once(__DIR__ . "/../Model/Database.php");
require_once(__DIR__ . "/../Model/User.php");
require_once(__DIR__ . "/../Model/Question.php");

class Controller
{
    private $database;

    public function __construct()
    {
        $this->database = new Database("127.0.0.1", "root", "", "estruturadados");
    }

    public function createUser($name, $password, $email, $coins)
    {
        $user = new User($name, $password, $email, $coins, []);
        $this->database->insertUser($user);
    }

    public function readUser($id)
    {
        $row = $this->database->getUserById($id);
        $classes = $this->database->getClassesByUserId($id);
        $user = new User($row['name'], $row['password'], $row['email'], $row['coins'], $classes);
        return $user;
    }

    public function updateUser($id, $name, $password, $email, $coins, $classes = null)
    {
        $user = new User($name, $password, $email, $coins, $classes);
        $this->database->updateUser($user, $id);
    }

    public function deleteUser($id)
    {
        $this->database->deleteUser($id);
    }

    public function loginUser($email, $password)
    {
        $user = $this->database->getUserByEmail($email);
        if ($user && $user['password'] == $password) {
            session_start();
            $_SESSION['id'] = $user['id'];
            $_SESSION['user'] = $user['name'];
            return true;
        }
        return false;
    }

    public function completeClass($id, $class)
    {
        $result = $this->database->getUserById($id);
        $classes = $this->database->getClassesByUserId($id);
        $user = new User($result['name'], $result['password'], $result['email'], $result['coins'], $classes);
        $user->addClass($class);
        $this->database->updateUser($user, $id);
    }

    public function hasPassedClass($id, $class)
    {
        $result = $this->database->getUserById($id);
        $classes = $this->database->getClassesByUserId($id);
        $user = new User($result['name'], $result['password'], $result['email'], $result['coins'], $classes);
        return in_array($class, $user->getClasses());
    }

    public function gainMoney($amount, $id)
    {
        $result = $this->database->getUserById($id);
        $user = new User($result['name'], $result['password'], $result['email'], $result['coins'], null);
        $user->setCoins($user->getCoins() + $amount);
        $this->database->updateUser($user, $id);
    }

    public function buyCosmetic($price, $cosmeticId, $id)
    {

    }

    public function getQuestions($classId)
    {
        $result = $this->database->getQuestions($classId);
        $questions = [];
        while ($row = $result->fetch_assoc()) {
            $questions[] = new Question($row['question'], $row['a'], $row['b'], $row['c'], $row['d'], $row['correct']);
        }

        if (count($questions) > 3) {
            $randomKeys = array_rand($questions, 3);
            $randomQuestions = [];
            foreach ($randomKeys as $key) {
                $randomQuestions[] = $questions[$key];
            }
            return $randomQuestions;
        }

        return $questions;
    }
}