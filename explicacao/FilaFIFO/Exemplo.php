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
                    Aqui está um exemplo de como usar a Fila FIFO em um programa:
                    <section class="mt-2 is-flex is-justify-content-center">
                <pre style="min-width: 50vw; height: 30vw;">
                    <span>                 using System;</span>
                    <span>                 using System.Collections.Generic;</span>
                    <span>                 </span>
                    <span>                 class Programa</span>
                    <span>                 {</span>
                    <span>                     static void Main(string[] args)</span>
                    <span>                     {</span>
                    <span>                         Queue<int> fila = new Queue<int>();</span>
                    <span>                 </span>
                    <span>                         // Inserir elementos na fila</span>
                    <span>                         fila.Enqueue(10);</span>
                    <span>                         fila.Enqueue(20);</span>
                    <span>                         fila.Enqueue(30);</span>
                    <span>                 </span>
                    <span>                         Console.WriteLine("Fila após inserções:");</span>
                    <span>                         foreach (var item in fila)</span>
                    <span>                         {</span>
                    <span>                             Console.WriteLine(item);</span>
                    <span>                         }</span>
                    <span>                 </span>
                    <span>                         // Remover elemento da fila</span>
                    <span>                         fila.Dequeue();</span>
                    <span>                         Console.WriteLine("Fila após remoção:");</span>
                    <span>                         foreach (var item in fila)</span>
                    <span>                         {</span>
                    <span>                             Console.WriteLine(item);</span>
                    <span>                         }</span>
                    <span>                 </span>
                    <span>                         // Ver o elemento da frente (sem remover)</span>
                    <span>                         Console.WriteLine("Elemento da frente: " + fila.Peek());</span>
                    <span>                     }</span>
                    <span>                 }</span>
                    </pre>
                    </section>
            </section>
        </section>
        <section class="section is-flex is-justify-content-space-between">

            <a class="is-size-5 has-text-link anterior" href="Operacoes.php"> Anterior </a>
            <a class="is-size-5 has-text-link proximo" href="../FilaPrioridade/Fila.php"> Proximo </a>

        </section>
    </main>

    <?php require '../../componentes/footer.php'; ?>
    <script src="../../scripts.js"></script>
</body>

</html>
