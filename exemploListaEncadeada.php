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
    <title>W4School - TAD</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css"> -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="navbar">
        <section class="navbar-end">
            <section class="navbar-item">
                <?php
                echo $_SESSION['user'];
                ?>
            </section>
            <section class="navbar-item">
                <form method="POST" action="./funcoes/sair.php">
                    <button type="submit" name="sair" class="button m-2">
                        Sair
                    </button>
                </form>
            </section>
        </section>
    </header>
    <main class="has-background-white-bis has-text-black-bis">
        <section class="section">
            <h1 class="title has-text-info"> Exemplo de Uso </h1>
            <h2 class="subtitle has-text-black-bis">     </h2>
            <section class="content" style="max-width: 100vw;">
            <p class="has-text-justified">
            Aqui está um exemplo de como usar a lista simplesmente encadeada em um programa:
                    <pre style="min-width: 30vw; height: 40vw;">
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
<section class="section is-flex is-justify-content-space-between">

            <a class="is-size-5 has-text-link anterior" href="operacoes.php"> Anterior </a>
            <a class="is-size-5 has-text-link proximo" href="listaDuplamenteEncadeada.php"> Proximo </a>

        </section>
</main>

    <footer class="p-2 has-background-link-light">
        <section class="m-2 p-2">
            <section>
                <h3 class="subtitle is-size-5">
                    Desenvolvdores:
                </h3>
                <section class="is-flex is-flex-direction-column">
                    <p>Arthur Nonaka Oda</p>
                    <p>Joao Luiz Souza Pereira</p>
                    <p>Gustavo Henrique Bispo Costa</p>
                    <p>Joao Pedro de Souza Cisilo </p>
                </section>
            </section>
        </section>
        <div class="content has-text-centered">
            <p>W4School - 2024</p>
    </div>
    </footer>
</body>

</html>