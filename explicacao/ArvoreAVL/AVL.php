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
    <title>W4Schools - Árvore AVL</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<?php require '../../componentes/header.php'; ?>

    <?php require '../../componentes/sidebar.php';?>

    <main class="has-background-white-bis has-text-black-bis">
        <section id="content" class="content">
            <h1 class="title has-text-info">Árvore AVL</h1>
            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"> Introdução</h2>
            <section class="content p-0" style="max-width: 100vw;">
                <p class="has-text-justified">
                    A árvore AVL é uma árvore binária de busca balanceada onde a diferença de altura entre as subárvores de qualquer nó nunca seja maior que 1.
                    Isso garante que a árvore tenha altura logarítmica, o que garante que as operações de busca, inserção e remoção sejam eficientes.
                </p>
                <p class="has-text-justified">
                    A árvore AVL é auto-balanceada, o que significa que sempre que ela se desbalanceia após uma operação, ela realiza rotações para restabelecer o equilíbrio.
                </p>
            </section>
        </section>

        <section class="section is-flex is-justify-content-space-between">
            <a class="is-size-5 has-text-link anterior" href="../ArvoreTrie/Exemplo.php"> Anterior </a>
            <a class="is-size-5 has-text-link proximo" href="Operacoes.php"> Próximo </a>
        </section>
    </main>

    <?php require '../../componentes/footer.php'; ?>
    <script src="../../scripts.js"></script>
</body>

</html>
