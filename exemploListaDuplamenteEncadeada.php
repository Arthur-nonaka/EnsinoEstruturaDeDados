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
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header class="navbar" style="position: fixed; width: 100vw;">
        <section class="navbar-start ">
            <button id="sidebarToggle" class="button is-info m-3">Menu</button>
            <a class="logo" href="home.php">
                <figure class="image is-64x64">
                    <img src="./img/logo.png" />
                </figure>
            </a>
        </section>
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

    <div id="sidebar" class="sidebar has-background-black-bis">
    <div class="sidebar-menu">
            <a href="home.php" class="sidebar-item">Página Principal</a>
            <a href="TAD.php" class="sidebar-item">TAD</a>
            <a href="interface.php" class="sidebar-subitem">Interface</a>
            <a href="struct.php" class="sidebar-subitem">Struct</a>
            <a href="exemploTAD.php" class="sidebar-subitem">Exemplo</a>
            <a href="lista.php" class="sidebar-item">Lista</a>
        </div>
    </div>

    <main class="has-background-white-bis has-text-black-bis">
        <section  id="content" class="content">
            <h1 class="title has-text-info"> Exemplo de Uso </h1>
            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"></h2>
            <section class="content p-0" style="max-width: 100vw;">
            <p class="has-text-justified">
            Aqui está um exemplo de como usar a lista Duplamente encadeada em um programa:
                    <pre style="min-width: 25vw; height: 30vw;">
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
        <section class="section is-flex is-justify-content-space-between">

            <a class="is-size-5 has-text-link anterior" href="operacoesDuplamenteEncadeadas.php"> Anterior </a>
            <a class="is-size-5 has-text-link proximo" href="index.php"> Proximo </a>

        </section>
    </main>

    <footer
        class="p-2 has-background-link-light has-text-black is-flex is-flex-direction-column is-justify-content-space-between">
        <section class="m-2 p-2">
            <section>
                <h3 class="subtitle is-size-5 has-text-black">
                    Desenvolvdores:
                </h3>
                <section class="is-flex is-flex-direction-column">
                    <p>Arthur Nonaka Oda <a href="https://github.com/Arthur-nonaka" target="_blank"><i
                                class="fa fa-github"></i></a> </p>
                    <p>Joao Luiz Souza Pereira <a href="https://github.com/joaoluiz00" target="_blank"><i
                                class="fa fa-github"></i></a></p>
                    <p>Gustavo Henrique Bispo Costa <a href="https://github.com/GuGuzin14" target="_blank"><i
                                class="fa fa-github"></i></a></p>
                    <p>Joao Pedro de Souza Cisilo <a href="https://github.com/JoaoPCisilo" target="_blank"><i
                                class="fa fa-github"></i></a> </p>
                </section>
            </section>
        </section>
        <div class="content p-0 has-text-centered">
            <p>W4Schools - 2024</p>
        </div>
    </footer>
    <script src="scripts.js"></script>
</body>

</html>