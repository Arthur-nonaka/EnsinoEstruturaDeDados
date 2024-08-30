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
                    Aqui está um exemplo de como usar a lista Duplamente encadeada em um programa:
                    <section class="mt-2 is-flex is-justify-content-center">
                <pre style="min-width: 50vw; height: 30vw;">
                    <span>                 using System;</span>
                    <span>                 </span>
                    <span>                 class Programa</span>
                    <span>                 {</span>
                    <span>                     static void Main(string[] args)</span>
                    <span>                     {</span>
                    <span>                         ListaDuplamenteEncadeada lista = new ListaDuplamenteEncadeada();</span>
                    <span>                 </span>
                    <span>                         // Inserir elementos no início</span>
                    <span>                         lista.InserirNoInicio(10);</span>
                    <span>                         lista.InserirNoInicio(20);</span>
                    <span>                         lista.InserirNoInicio(30);</span>
                    <span>                 </span>
                    <span>                         Console.WriteLine("Lista após inserções no início:");</span>
                    <span>                         lista.ImprimirFrente();</span>
                    <span>                 </span>
                    <span>                         // Inserir elementos no final</span>
                    <span>                         lista.InserirNoFinal(40);</span>
                    <span>                         lista.InserirNoFinal(50);</span>
                    <span>                 </span>
                    <span>                         Console.WriteLine("Lista após inserções no final:");</span>
                    <span>                         lista.ImprimirFrente();</span>
                    <span>                 </span>
                    <span>                         // Remover elemento do início</span>
                    <span>                         lista.RemoverDoInicio();</span>
                    <span>                         Console.WriteLine("Lista após remoção do início:");</span>
                    <span>                         lista.ImprimirFrente();</span>
                    <span>                 </span>
                    <span>                         // Remover elemento do final</span>
                    <span>                         lista.RemoverDoFinal();</span>
                    <span>                         Console.WriteLine("Lista após remoção do final:");</span>
                    <span>                         lista.ImprimirFrente();</span>
                    <span>                 </span>
                    <span>                         // Imprimir a lista do início ao fim</span>
                    <span>                         Console.WriteLine("Lista do início ao fim:");</span>
                    <span>                         lista.ImprimirFrente();</span>
                    <span>                 </span>
                    <span>                         // Imprimir a lista do fim ao início</span>
                    <span>                         Console.WriteLine("Lista do fim ao início:");</span>
                    <span>                         lista.ImprimirReverso();</span>
                    <span>                     }</span>
                    <span>                 }</span>


                    </pre>
                    </section>
            </section>
        </section>
        <section class="section is-flex is-justify-content-space-between">

            <a class="is-size-5 has-text-link anterior" href="Operacoes.php"> Anterior </a>
            <a class="is-size-5 has-text-link proximo" href="../../home.php"> Proximo </a>

        </section>
    </main>

    <?php require '../../componentes/footer.php'; ?>
    <script src="../../scripts.js"></script>
</body>

</html>