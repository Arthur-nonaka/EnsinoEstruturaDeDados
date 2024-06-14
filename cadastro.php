<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>W4School - Cadastrar</title>
    <link rel="stylesheet" href="index.css">
    
</head>
<body class="corpo">
    <background img src="img/fundo.gif" class="imgfundo">

    <section class="login">
        <form class="form" action="./funcoes/cadastrarCliente.php" method="POST">
            <h1 class="nome">Estrutura De Dados</h1>

                <input type="text" name="nome" id="nome" placeholder="Nome">

                <!-- <input type="varchar" name="cpf" id="cpf" placeholder="Cpf"> -->

                <input type="text" name="email" id="email" placeholder="E-mail">
           
                <input type="password" name="senha" id="senha" placeholder="Senha">
           
                <input type="submit" value="Criar" class="botao">

                <a href="index.php" class="link">Voltar</a>
        
        </form>

    </section>
    
</body>
</html>
