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
    <title>W4Schools - Árvore AVL - Operações</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<?php require '../../componentes/header.php'; ?>

    <?php require '../../componentes/sidebar.php';?>

    <main class="has-background-white-bis has-text-black-bis">
        <section id="content" class="content">
            <h1 class="title has-text-info">Operações na Árvore AVL</h1>
            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"></h2>
            <section class="content p-0" style="max-width: 100vw;">
                <p class="has-text-justified">
                    As operações principais em uma Árvore AVL incluem inserção, remoção e balanceamento. Vamos demonstrar como funciona a inserção de números e como as rotações são realizadas para balancear a árvore.
                </p>

                <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5">Inserção de Números</h2>
                <p class="has-text-justified">
                    Vamos inserir os seguintes números na Árvore AVL: <strong>10, 20, 5, 15, 30, 25</strong>. A cada inserção, verificamos o balanceamento da árvore e, se necessário, realizamos rotações para manter a árvore balanceada.
                </p>

                <h3 class="subtitle has-text-black-bis has-text-weight-normal is-size-5">Passo 1: Inserir 10</h3>
                <p class="has-text-justified">
                    O primeiro número a ser inserido é o <strong>10</strong>. Como a árvore está vazia, 10 se torna a raiz da árvore.
                </p>
                <img hrf="../img/avl.png" class="image is-3by2">
                <p class="has-text-centered">Árvore AVL após inserção de 10</p>

                <h3 class="subtitle has-text-black-bis has-text-weight-normal is-size-5">Passo 2: Inserir 20</h3>
                <p class="has-text-justified">
                    O próximo número a ser inserido é o <strong>20</strong>. Ele é inserido à direita de 10, pois 20 é maior que 10. A árvore permanece balanceada após esta inserção.
                </p>
                <img src="https://example.com/imagem-insercao-20.jpg" alt="Árvore AVL após inserção do 20" class="image is-3by2">
                <p class="has-text-centered">Árvore AVL após inserção de 20</p>

                <h3 class="subtitle has-text-black-bis has-text-weight-normal is-size-5">Passo 3: Inserir 5</h3>
                <p class="has-text-justified">
                    O próximo número é o <strong>5</strong>. Ele é inserido à esquerda de 10, pois 5 é menor que 10. A árvore ainda está balanceada, pois a diferença de altura entre as subárvores de 10 não ultrapassa 1.
                </p>
                <img src="https://example.com/imagem-insercao-5.jpg" alt="Árvore AVL após inserção do 5" class="image is-3by2">
                <p class="has-text-centered">Árvore AVL após inserção de 5</p>

                <h3 class="subtitle has-text-black-bis has-text-weight-normal is-size-5">Passo 4: Inserir 15</h3>
                <p class="has-text-justified">
                    O próximo número a ser inserido é o <strong>15</strong>. Ele é inserido à direita de 10 e à esquerda de 20. No entanto, a árvore agora precisa ser balanceada, pois a diferença de altura entre as subárvores de 10 é 2.
                </p>
                <p class="has-text-justified">
                    Para balancear, uma rotação à esquerda será realizada em 10, fazendo 15 se tornar a nova raiz.
                </p>
                <img src="https://example.com/rotacao-esquerda-10.jpg" alt="Rotação à esquerda em 10" class="image is-3by2">
                <p class="has-text-centered">Rotação à esquerda em 10</p>

                <h3 class="subtitle has-text-black-bis has-text-weight-normal is-size-5">Passo 5: Inserir 30</h3>
                <p class="has-text-justified">
                    O próximo número é o <strong>30</strong>. Ele é inserido à direita de 20, mas a árvore permanece balanceada, pois a diferença de altura entre as subárvores de 15 e 20 é aceitável.
                </p>
                <img src="https://example.com/imagem-insercao-30.jpg" alt="Árvore AVL após inserção do 30" class="image is-3by2">
                <p class="has-text-centered">Árvore AVL após inserção de 30</p>

                <h3 class="subtitle has-text-black-bis has-text-weight-normal is-size-5">Passo 6: Inserir 25</h3>
                <p class="has-text-justified">
                    O próximo número é o <strong>25</strong>. Ele é inserido à esquerda de 30, o que causa um desbalanceamento na árvore. Para corrigir isso, realizamos uma rotação dupla: uma rotação à direita em 30 e depois uma rotação à esquerda em 20.
                </p>
                <img src="https://example.com/rotacao-dupla.jpg" alt="Rotação dupla: à direita em 30 e à esquerda em 20" class="image is-3by2">
                <p class="has-text-centered">Rotação dupla para balanceamento</p>

                <h3 class="subtitle has-text-black-bis has-text-weight-normal is-size-5">Resultado Final</h3>
                <p class="has-text-justified">
                    Após todas as inserções e balanceamentos, a árvore AVL final será a seguinte:
                </p>
                <img src="https://example.com/resultado-final.jpg" alt="Árvore AVL final" class="image is-3by2">
                <p class="has-text-centered">Árvore AVL após todas as inserções e rotações</p>
            </section>
        </section>

        <section class="section is-flex is-justify-content-space-between">
            <a class="is-size-5 has-text-link anterior" href="index.php"> Introdução </a>
            <a class="is-size-5 has-text-link proximo" href="exemplo.php"> Exemplo </a>
        </section>
    </main>

    <?php require '../../componentes/footer.php'; ?>
    <script src="../../scripts.js"></script>
</body>

</html>
