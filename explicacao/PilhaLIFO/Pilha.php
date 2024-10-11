<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: ./");
    die();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4Schools - Pilha</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css"> -->
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<?php require '../../componentes/header.php'; ?>

    <?php require '../../componentes/sidebar.php';?>

    <main class="has-background-white-bis has-text-black-bis">
        <section id="content" class="content">
            <h1 class="title has-text-info"> Pilha(Stack)</h1>
            <section class="content p-0" style="max-width: 100vw;">
                <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"> Definição:</h2>
                <p class="has-text-justified">
                    Uma pilha é uma estrutura de dados que armazena elementos de acordo com o princípio LIFO 
                    (Last In, First Out), ou seja, o último item adicionado é o primeiro a ser removido, semelhante a 
                    uma pilha de pratos onde você só pode adicionar ou remover itens do topo da pilha. 
                </p><br>
            <img class="incercao"src="../../img/pilha.jpg">
        
        <h2 class="subtitle has-text-black-bis"> Vamos as operações: </h2>
            </section>
        </section>
        <section class="section is-flex is-justify-content-end">

            <a class="is-size-5 has-text-link proximo" href="Operacoes.php"> Proximo </a>

        </section>
    </main>

    <?php require '../../componentes/footer.php'; ?>
    <script src="../../scripts.js"></script>
</body>

</html>