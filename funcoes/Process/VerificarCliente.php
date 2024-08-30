<?php
require_once "banco.php";
session_start();
$conexao = Conectar();
if ($_POST['email'] != "" && $_POST['senha'] != "") {
    $email = $_POST['email'];
    $password = $_POST['senha'];
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $res = mysqli_query($conexao, $sql);
    if ($res->num_rows > 0) {
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $res = mysqli_query($conexao, $sql);
        if ($res->num_rows > 0) {
            $row = mysqli_fetch_assoc($res);
            $_SESSION['user'] = $row['name'];
            header("Location: ../home.php");
            die();
        } else {
            $_SESSION['res'] = "Senha invalida";
            header("Location: ../");
            die();
        }
    } else {
        $_SESSION['res'] = "Conta não encontrada";
        header("Location: ../");
        die();
    }
} else {
    $_SESSION['res'] = "Insira todos os valores";
    header("Location: ../");
    die();
}

