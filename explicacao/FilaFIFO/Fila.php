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
    <title>W4Schools - TAD Exemplo</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css"> -->
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<?php require '../../componentes/header.php'; ?>

    <?php require '../../componentes/sidebar.php';?>

    <main class="has-background-white-bis has-text-black-bis">
        <section id="content" class="content">
            <h1 class="title has-text-info"> Fila FIFO (First In, First Out) ou (Primeiro a Entrar, Primeiro a Sair)</h1>
            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"></h2>
            <section class="content p-0" style="max-width: 100vw;">
                <p class="has-text-justified">
                Uma Fila FIFO (First In, First Out) é uma estrutura de dados onde o primeiro elemento inserido é o primeiro a ser removido. Isso significa que os elementos são processados na ordem em que foram adicionados, como em uma fila real onde as pessoas entram em um lado e saem pelo outro.
                <p>

                Características principais:
                <p>
                Inserção: Novos elementos são adicionados ao final da fila.
                <p>
                Remoção: O elemento que está no início da fila é o primeiro a ser removido.
                Esse comportamento é comum em várias situações do cotidiano, como em uma fila de supermercado: a primeira pessoa que chega é a primeira a ser atendida.
                <p>
                Aplicações de uma Fila FIFO:
                <p>
                Processamento de tarefas: Em sistemas operacionais, a fila FIFO pode ser usada para gerenciar processos que precisam ser executados na ordem em que chegam.
                Filas de impressão: As tarefas de impressão são normalmente processadas na ordem em que foram enviadas para a fila de impressora.
                   
            </section>
        <section class="section is-flex is-justify-content-space-between">

            <a class="is-size-5 has-text-link anterior" href="../ListaDupla/Exemplo.php"> Anterior </a>
            <a class="is-size-5 has-text-link proximo" href="Operacoes.php"> Proximo </a>

        </section>
    </main>

    <?php require '../../componentes/footer.php'; ?>
    <script src="../../scripts.js"></script>
</body>

</html>
