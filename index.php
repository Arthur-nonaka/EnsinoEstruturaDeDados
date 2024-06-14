<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>W4School - Login</title>
    <link rel="stylesheet" href="index.css">
</head>
<body class="corpo">
    <section class="login">
        <form class="form" action="./funcoes/verificarCliente.php" method="POST">
            <h1 class="nome">Estrutura De Dados</h1>
            <input type="text" name="email" id="email" placeholder="E-mail">
            <input type="password" name="senha" id="senha" placeholder="Senha">
            <input type="submit" value="Entrar" class="botao">
            <a href="cadastro.php" class="link">Criar Conta</a>
        </form>
    </section>
</body>
</html>
