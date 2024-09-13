<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>W4Schools - Cadastrar</title>
    <link rel="stylesheet" href="./css/index.css">

</head>

<body class="corpo">
    <background img src="img/fundo.gif" class="imgfundo">

        <section class="login">
            <form class="form" action="./funcoes/Process/cadastrarCliente.php" method="POST">
                <h1 class="nome">Estrutura De Dados</h1>

                <div>
                    <?php
                    if (isset($_SESSION['res'])) {
                        echo $_SESSION['res'];
                        unset($_SESSION['res']);
                    }
                    ?>
                </div>

                <input type="text" name="nome" id="nome" placeholder="Nome">

                <input type="text" name="email" id="email" placeholder="E-mail">

                <input type="password" name="senha" id="senha" placeholder="Senha">

                <input type="submit" value="Criar" class="botao">

                <a href="index.php" class="link">Voltar</a>

            </form>

        </section>

</body>

</html>