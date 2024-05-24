<?php
require_once "banco.php";
session_start();
    $conexao = Conectar();
    if($_POST['nome'] != "" && $_POST['senha'] != "") {
        $name = $_POST['nome'];
        $password = $_POST['senha'];
        $sql = "SELECT * FROM users WHERE name = '$name'";
        $res = mysqli_query($conexao, $sql);
        if($res->num_rows > 0) {
            $sql = "SELECT * FROM users WHERE name = '$name' AND password = '$password'";
            $res = mysqli_query($conexao, $sql);
            if($res->num_rows > 0){
                header("Location: ../main.html");
                die();
            }else {
                $_SESSION['res'] = "Senha invalida";
                header("Location: ../");
                die();
            }
        }else {
            $_SESSION['res'] = "Valores invalidos";
            header("Location: ../");
            die();
        }
    }else {
        $_SESSION['res'] = "Insira todos os valores";
        header("Location: ../");
            die();
    }

