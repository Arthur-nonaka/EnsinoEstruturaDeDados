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
            <h1 class="title has-text-info"> Listas encadeadas </h1>
            <h2 class="subtitle has-text-black-bis">     </h2>
            <section class="content" style="max-width: 100vw;">
            <p class="has-text-justified">
            Uma lista encadeada é uma representação de uma sequência de objetos, todos do mesmo tipo, na memória RAM 
            (= random access memory) do computador. Cada elemento da sequência é armazenado em uma célula da lista: o 
            primeiro elemento na primeira célula, o segundo na segunda, e assim por diante.

                </p>
                <p class="has-text-justified">
                Estrutura de uma lista Simplesmente encadeada
                <li>Definição de Nó</li>
                <ol>
                    <li>
                    Dado: O valor armazenado no nó.
                    </li>
                    <li>
                    Ponteiro: Um ponteiro para o próximo nó na lista.
                    </li>
                    </ol>
                    <pre style="min-width: 30vw; height: 35vh;">
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
<h2 class="subtitle has-text-black-bis"> Vamos as operações: </h2>
<section class="section is-flex is-justify-content-space-between">

            <a class="is-size-5 has-text-link anterior" href="exemploTAD.php"> Anterior </a>
            <a class="is-size-5 has-text-link proximo" href="operacoes.php"> Proximo </a>

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