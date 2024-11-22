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
    <title>W4Schools - Árvore B Exemplo</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<?php require '../../componentes/header.php'; ?>

    <?php require '../../componentes/sidebar.php';?>

    <main class="has-background-white-bis has-text-black-bis">
        <section id="content" class="content">
            <h1 class="title has-text-info"> Árvore B</h1>
            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"></h2>
            <p class="has-text-justified">
                A Árvore B é uma estrutura de dados balanceada amplamente utilizada para armazenar grandes volumes de dados, como índices de banco de dados. Ela é uma árvore de busca balanceada em que os nós internos podem ter múltiplos filhos e múltiplos valores.
            </p>
            <p class="has-text-justified">
                A principal característica da Árvore B é que ela permite que a árvore se mantenha balanceada mesmo após inserções e exclusões de elementos, garantindo que todas as operações de busca, inserção e remoção possam ser realizadas em tempo logarítmico, ou seja, O(log n).
            </p>
            <ul class="has-text-justified">
                <li>
                    <strong>Estrutura de Nós:</strong> Cada nó na Árvore B pode conter mais de um valor e ter múltiplos filhos. Isso a torna diferente de outras árvores de busca binária, como a Árvore Binária de Busca (ABB).
                </li>
                <li>
                    <strong>Balanceamento:</strong> A Árvore B é balanceada automaticamente, o que significa que todos os caminhos da raiz até as folhas têm o mesmo comprimento, garantindo um desempenho consistente.
                </li>
                <li>
                    <strong>Operações Eficientes:</strong> A inserção e a remoção de elementos na Árvore B são realizadas de maneira eficiente, com complexidade O(log n), mantendo a árvore balanceada.
                </li>
            </ul>
            <p class="has-text-justified">
                A Árvore B é especialmente eficiente em sistemas de gerenciamento de bancos de dados e sistemas de arquivos, onde a leitura e escrita de grandes volumes de dados em disco devem ser feitas de forma rápida e eficiente.
            </p>
        <section class="section is-flex is-justify-content-space-between">

            <a class="is-size-5 has-text-link anterior" href="../ArvoreBusca/Exemplo.php"> Anterior </a>
            <a class="is-size-5 has-text-link proximo" href="Operacoes.php"> Proximo </a>

        </section>
    </main>

    <?php require '../../componentes/footer.php'; ?>
    <script src="../../scripts.js"></script>
</body>

</html>
