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
    <title>W4Schools - Árvore Binária de Busca Exemplo</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css"> -->
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<?php require '../../componentes/header.php'; ?>

    <?php require '../../componentes/sidebar.php';?>

    <main class="has-background-white-bis has-text-black-bis">
        <section id="content" class="content">
            <h1 class="title has-text-info"> Árvore Binária de Busca</h1>
            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"></h2>
            <section class="content p-0" style="max-width: 100vw;">
                <p class="has-text-justified">
                A Árvore Binária de Busca (ABB) é uma estrutura de dados em forma de árvore binária que
                organiza os elementos de maneira que facilite operações de busca,
                inserção e exclusão. Ela possui a seguinte propriedade fundamental:
                <p>
                 <li> Propriedade de ordenação: Para cada nó na árvore, todos os elementos na subárvore esquerda possuem valores menores
                     que o valor do nó, e todos os elementos na subárvore direita possuem valores maiores.
                </li>

                <p>Essa propriedade permite que as operações sejam realizadas de forma eficiente,
                     com complexidade média de 𝑂(log𝑛), desde que a árvore esteja balanceada.<p>

             
            </section>
        <section class="section is-flex is-justify-content-space-between">

            <a class="is-size-5 has-text-link anterior" href="../PilhaLIFO/Operacoes.php"> Anterior </a>
            <a class="is-size-5 has-text-link proximo" href="Operacoes.php"> Proximo </a>

        </section>
    </main>

    <?php require '../../componentes/footer.php'; ?>
    <script src="../../scripts.js"></script>
</body>

</html>
