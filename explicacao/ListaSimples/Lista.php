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
    <title>W4Schools - Estrutura</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css"> -->
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<?php require '../../componentes/header.php'; ?>


    <?php require '../../componentes/sidebar.php';?>

    <main class="has-background-white-bis has-text-black-bis">
        <section id="content" class="content">
            <h1 class="title has-text-info"> Listas Encadeada </h1>
            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"> </h2>
            <section class="content p-0" style="max-width: 100vw;">

                <p class="has-text-justified"> Uma lista encadeada é uma representação de uma sequência de objetos,
                    todos do mesmo tipo, na memória RAM (= random access memory) do computador. Cada elemento da
                    sequência é armazenado em uma célula da lista: o primeiro elemento na primeira célula, o segundo na
                    segunda, e assim por diante. </p>
                <p class="has-text-justified"> Estrutura de uma lista Simplesmente encadeada
                    <li>Definição de Nó</li>
                <ol>
                    <li> Dado: O valor armazenado no nó. </li>
                    <li> Ponteiro: Um ponteiro para o próximo nó na lista. </li>
                </ol>
                <section class="mt-2 is-flex is-justify-content-center">
                <pre style="min-width: 50vw; height: 35vh;">
        <span>public class No</span> 
        <span>{</span> 
        <span>    public int Data { get; set; }</span> 
        <span>    public No Next { get; set; }</span> 
        <span></span> 
        <span>    public No(int data)</span> 
        <span>    {</span> 
        <span>        Data = data;</span> 
        <span>        Next = null;</span> 
        <span>    }</span> 
        <span>}</span> 
    </pre>
        </section>
            </section>
            <h2 class="subtitle has-text-black-bis"> Vamos as operações: </h2>
            <section class="section is-flex is-justify-content-space-between">
                <a class="is-size-5 has-text-link anterior" href="../TAD/Exemplo.php"> Anterior </a>
                <a class="is-size-5 has-text-link proximo" href="Operacoes.php"> Proximo </a>
            </section>
    </main>

    <?php require '../../componentes/footer.php'; ?>
    <script src="../../scripts.js"></script>
</body>

</html>