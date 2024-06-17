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
            <a href="listaEncadeada.php" class="sidebar-item">Lista</a>
            <a href="operacoesEncadeadas.php" class="sidebar-subitem">Operações</a>
            <a href="exemploListaEncadeada.php" class="sidebar-subitem">Exemplo</a>
            <a href="listaDuplamenteEncadeada.php" class="sidebar-item">Lista Duplamente Encadeada</a>
            <a href="exemploListaDuplamenteEncadeada.php" class="sidebar-subitem">Exemplo</a>
        </div>
    </div>
    <main class="has-background-white-bis has-text-black-bis">
        <section class="section">
            <h1 class="title has-text-info"> Listas encadeadas </h1>
            <h2 class="subtitle has-text-black-bis"> </h2>
            <section class="content" style="max-width: 100vw;">
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
    </section>
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