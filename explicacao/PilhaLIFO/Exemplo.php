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
    <title>W4Schools - Exemplo de Pilha</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<?php require '../../componentes/header.php'; ?>

<?php require '../../componentes/sidebar.php';?>

<main class="has-background-white-bis has-text-black-bis">
    <section id="content" class="content">
        <h1 class="title has-text-info"> Exemplo de Pilha </h1>
        <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"> </h2>
        <section class="content p-0" style="max-width: 100vw;">

            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"> Exemplo Completo</h2>
            <p class="has-text-justified">
                <li>Exemplo completo de uso de uma pilha:</li>
                <section class="mt-2 is-flex is-justify-content-center">
            <pre style="min-width: 50vw; height: 80vh;">
            <span>static void Main()</span>
            <span>{</span>
            <span>    Stack<int> pilha = new Stack<int>();</span>
            <span>    pilha.Push(10);  // Push</span>
            <span>    pilha.Push(20);  // Push</span>
            <span>    Console.WriteLine(string.Join(", ", pilha));  // Saída: 20, 10</span>
            <span>    int item = pilha.Pop();  // Pop</span>
            <span>    Console.WriteLine(item);  // Saída: 20</span>
            <span>    item = pilha.Peek();  // Peek</span>
            <span>    Console.WriteLine(item);  // Saída: 10</span>
            <span>    Console.WriteLine(pilha.Count);  // Saída: 1</span>
            <span>    Console.WriteLine(pilha.Contains(10));  // Saída: True</span>
            <span>    pilha.Clear();  // Clear</span>
            <span>    Console.WriteLine(pilha.Count);  // Saída: 0</span>
            <span>}</span>
            </pre>
            </section>
            <img class="image" src="../../img/exemplo_pilha.png">

    <section class="section is-flex is-justify-content-space-between">
        <a class="is-size-5 has-text-link anterior" href="operacoes.php"> Anterior </a>
        <a class="is-size-5 has-text-link proximo" href="../../home.php"> Próximo </a>
    </section>
</main>

<?php require '../../componentes/footer.php'; ?>
<script src="../../scripts.js"></script>
</body>

</html>