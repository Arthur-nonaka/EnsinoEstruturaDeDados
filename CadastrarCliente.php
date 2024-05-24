<?php
require_once "banco.php";
session_start();
    $conexao = Conectar();
    
    if(isset($_POST['nome']) && isset($_POST['senha'])) {
        $name = $_POST['nome'];
        $password = $_POST['senha'];
        $sql = "INSERT INTO users (name, password) VALUES ('$name', '$password')";
        $res = mysqli_query($conexao, $sql);
        if($res) {
            header("Location: ../main.html");
            die();
        }else {
            $_SESSION['res'] = "Erro";
            header("Location: ../index.html");
            die();
        }
    }else {
        $_SESSION['res'] = "Insira todos os valores";
    }

