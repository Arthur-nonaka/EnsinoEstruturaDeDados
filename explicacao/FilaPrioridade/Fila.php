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
            <h1 class="title has-text-info"> Fila Encadeada de Prioridade</h1>
            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"></h2>
            <section class="content p-0" style="max-width: 100vw;">
                <p class="has-text-justified">
                Uma Fila Encadeada de Prioridade é uma estrutura de dados onde cada elemento tem uma prioridade associada. Os elementos são removidos da fila com base em sua prioridade, não na ordem em que foram adicionados.
                <p>

                Características principais:
                <p>
                Inserção: Novos elementos são adicionados à fila com base em sua prioridade.
                <p>
                Remoção: O elemento com a maior prioridade é o primeiro a ser removido.
                Esse comportamento é comum em várias situações onde a ordem de processamento é determinada pela importância ou urgência das tarefas.
                <p>
                Aplicações de uma Fila Encadeada de Prioridade:
                <p>
                Gerenciamento de processos: Em sistemas operacionais, filas de prioridade podem ser usadas para gerenciar processos que precisam ser executados com base em sua prioridade.
                Sistemas de emergência: Chamadas de emergência podem ser processadas com base na gravidade da situação.
                   
            </section>
        <section class="section is-flex is-justify-content-space-between">

            <a class="is-size-5 has-text-link anterior" href="../../home.php"> Anterior </a>
            <a class="is-size-5 has-text-link proximo" href="Exemplo.php"> Proximo </a>

        </section>
    </main>

    <?php require '../../componentes/footer.php'; ?>
    <script src="../../scripts.js"></script>
</body>

</html>
