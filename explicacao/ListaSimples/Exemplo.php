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
            <h1 class="title has-text-info"> Exemplo de Uso </h1>
            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"></h2>
            <section class="content p-0" style="max-width: 100vw;">
                <p class="has-text-justified">
                    Aqui está um exemplo de como usar a lista simplesmente encadeada em um programa:
                    <section class="mt-2 is-flex is-justify-content-center">
                <pre style="min-width: 50vw; height: 30vw;">
                    <span>using System;</span>
            <span></span>
            <span>class Program</span>
            <span>{</span>
            <span>    static void Main(string[] args)</span>
            <span>    {</span>
            <span>        listaEncadeada lista = new listaEncadeada();</span>
            <span></span>
            <span>        // Inserir no início</span>
            <span>        list.InserirInicio(1);</span>
            <span>        lista.InserirInicio(2);</span>
            <span>        lista.InserirInicio(3);</span>
            <span></span>
            <span>        Console.WriteLine("Lista após inserções no início:");</span>
            <span>        lista.PrintList();</span>
            <span></span>
            <span>        // Inserir no final</span>
            <span>        lista.InserirFinal(4);</span>
            <span>         lista.InserirFinal(5);</span>
            <span></span>
            <span>        Console.WriteLine("Lista após inserções no final:");</span>
            <span>        lista.PrintList();</span>
            <span></span>
            <span>        // Remover do início</span>
            <span>        lista.DeletarInicio();</span>
            <span>        Console.WriteLine("Lista após remoção do início:");</span>
            <span>        lista.PrintList();</span>
            <span></span>
            <span>        // Remover um nó específico</span>
            <span>        lista.DeletarValor(4);</span>
            <span>        Console.WriteLine("Lista após remoção do nó com valor 4:");</span>
            <span>        lista.PrintList();</span>
            <span>    }</span>
        <span>}</span>



                    </pre>
            </section>
            </section>
        </section>
        <section class="section is-flex is-justify-content-space-between">

            <a class="is-size-5 has-text-link anterior" href="operacoes.php"> Anterior </a>
            <a class="is-size-5 has-text-link proximo" href="../ListaDupla/Lista.php"> Proximo </a>

        </section>
    </main>

    <?php require '../../componentes/footer.php'; ?>
    <script src="../../scripts.js"></script>
</body>

</html>