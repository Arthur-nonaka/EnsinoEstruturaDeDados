<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>W4Schools - Login</title>
    <link rel="stylesheet" href="./css/index.css">
</head>

<body class="corpo">
    <section class="login">
        <form class="form" action="./funcoes/verificarCliente.php" method="POST">
            <h1 class="nome">Estrutura De Dados</h1>
            <div>
                <?php
                if (isset($_SESSION['res'])) {
                    echo $_SESSION['res'];
                    unset($_SESSION['res']);
                }
                ?>
            </div>
            <input type="text" name="email" id="email" placeholder="E-mail">
            <input type="password" name="senha" id="senha" placeholder="Senha">
            <input type="submit" value="Entrar" class="botao">
            <a href="cadastro.php" class="link">Criar Conta</a>
        </form>
    </section>

</body>

</html>