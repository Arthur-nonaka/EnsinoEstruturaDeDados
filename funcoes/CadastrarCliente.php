<?php
require_once "banco.php";
session_start();
$conexao = Conectar();

if (isset($_POST['nome']) && isset($_POST['senha']) && isset($_POST['email'])) {
    $name = $_POST['nome'];
    $password = $_POST['senha'];
    $email = $_POST['email'];
    $sql = "INSERT INTO users (name, password, email) VALUES ('$name', '$password', '$email')";
    $res = mysqli_query($conexao, $sql);
    if ($res) {
        $_SESSION['user'] = $name;
        header("Location: ../TAD.php");
        die();
    } else {
        $_SESSION['res'] = "Erro";
        header("Location: ../index.php");
        die();
    }
} else {
    $_SESSION['res'] = "Insira todos os valores";
}

