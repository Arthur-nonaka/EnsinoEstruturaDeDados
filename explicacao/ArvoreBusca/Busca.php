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
            <p class="has-text-justified">
                Árvore Binária de Busca (ABB) é uma estrutura de dados amplamente utilizada na ciência da computação para armazenar e organizar informações de forma hierárquica.
                Cada nó em uma árvore binária de busca contém três componentes principais: um valor, uma referência para o nó filho à esquerda e uma referência para o nó filho à direita.
            </p>
            <p class="has-text-justified">
                O diferencial de uma Árvore Binária de Busca está em sua organização: para cada nó, todos os valores menores ficam no subárvore à esquerda,
                enquanto todos os valores maiores ficam no subárvore à direita. Essa propriedade facilita operações como busca, inserção e remoção de elementos,
                que podem ser realizadas de maneira eficiente.
            </p>
            <ul class="has-text-justified">
                <li>
                    <strong>Propriedade de ordenação:</strong> Para cada nó na árvore, todos os elementos na subárvore esquerda possuem valores menores
                    que o valor do nó, e todos os elementos na subárvore direita possuem valores maiores.
                </li>
            </ul>
            <p class="has-text-justified">
                Essa propriedade permite que as operações sejam realizadas de forma eficiente, com complexidade média de O(log n), desde que a árvore esteja balanceada.
            </p>
        <section class="section is-flex is-justify-content-space-between">

            <a class="is-size-5 has-text-link anterior" href="../PilhaLIFO/Operacoes.php"> Anterior </a>
            <a class="is-size-5 has-text-link proximo" href="Operacoes.php"> Proximo </a>

        </section>
    </main>

    <?php require '../../componentes/footer.php'; ?>
    <script src="../../scripts.js"></script>
</body>

</html>
