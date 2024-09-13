<?php
require_once "../Controller/Controller.php";
$controller = new Controller();
session_start();


if (isset($_POST['action'])) {
    $action = $_POST['action'];

    switch ($action) {
        case 'register':
            if (isset($_POST['nome'], $_POST['senha'], $_POST['email'])) {
                $name = $_POST['nome'];
                $password = $_POST['senha'];
                $email = $_POST['email'];
                $coins = 0;
                $controller->createUser($name, $password, $email, $coins);
                header("Location: ../../home.php");
                die();
            }
            break;

        case 'delete':
            if (isset($_POST['id'])) {
                $id = $_POST['id'];
                $controller->deleteUser($id);
                header("Location: success.php");
                die();
            }
            break;

        case 'update':
            if (isset($_POST['id'], $_POST['nome'], $_POST['senha'], $_POST['email'], $_POST['moedas'])) {
                $id = $_POST['id'];
                $name = $_POST['nome'];
                $password = $_POST['senha'];
                $email = $_POST['email'];
                $coins = $_POST['moedas'];
                $controller->updateUser($id, $name, $password, $email, $coins);
                header("Location: success.php");
                die();
            }
            break;

        case 'login':
            if (isset($_POST['email'], $_POST['senha'])) {
                $email = $_POST['email'];
                $password = $_POST['senha'];
                if($controller->loginUser($email, $password)) {
                    header("Location: ../../home.php");
                    die();
                } else {
                    $_SESSION['res'] = "Senha invalida";
                    header("Location: ../../");
                    die();
                }
            } else {
                $_SESSION['res'] = "Insira todos os valores";
                header("Location: ../../");
                die();
            }
            break;

        case 'logout':
            if (isset($_SESSION['user'])) {
                session_destroy();
                header("Location: ../../");
                die();
            }
            break;

        default:
            header("Location: error.php");
            die();
    }
} else {
    header("Location: error.php");
    die();
}

