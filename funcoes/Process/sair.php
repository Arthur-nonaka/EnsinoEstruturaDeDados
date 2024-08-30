<?php
session_start();
if (isset($_POST['sair'])) {
    if (isset($_SESSION['user'])) {
        session_destroy();
        header("Location: ../");
        die();
    }
}