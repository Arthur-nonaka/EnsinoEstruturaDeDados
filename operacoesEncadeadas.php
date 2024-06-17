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
            <h1 class="title has-text-info"> Listas Encadeada </h1>
            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"> </h2>
            <section class="content p-0" style="max-width: 100vw;">

            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"> Inserção no início:</h2>
            <p class="has-text-justified">
            <li>Criamos um novo nó com o valor dado.</li>
            <li>Apontamos o 'Next' do novo nó para o nó atualmente na cabeça.</li>
            <li>Atualizamos a cabeça para o novo nó.</li><br>
            <pre style="min-width: 30vw; height: 30vh;">
            <span>// Inserção no início</span>
        <span>public void InseirInicio(int data)</span>
        <span>{</span>
        <span>No novoNo = new No(data);</span>
        <span>novoNo.Next = inicio;</span>
        <span>inicio = novoNo;</span>
        <span>}</span>
        </pre>

            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"> Inserção no Final:</h2>
            <p class="has-text-justified">
            <li>Criamos um novo nó com o valor dado.</li>
            <li>Se a lista estiver vazia, atualizamos a cabeça para o novo nó.</li>
            <li>Caso contrário, percorremos a lista até o último nó e ajustamos seu ponteiro 'Next' para o novo nó.</li><br>
            <pre style="min-width: 30vw; height: 30vh;">
            <span>// Inserção no final</span>
        <span>public void InserirFinal(int data)</span>
        <span>    No novoNo = new No(data);</span>
                    <span>{</span>
        <span>    if (inicio == null)</span>
        <span>    {</span>
        <span>        inicio = novoNo;</span>
        <span>        return;</span>
        <span>    }</span>
        <span>    noAtual = inicio;</span>
        <span>    while (N.Next != null)</span>
        <span>    {</span>
        <span>        noAtual = noAtual.Next;</span>
        <span>    }</span>
        <span>    noAtual.Next = novoNo;</span>
        <span>}</span>
        </pre>


            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5">Remoção do Início:</h2>
            <p class="has-text-justified">
            <li>Se a lista não estiver vazia, atualizamos a cabeça para o segundo 
            nó, efetivamente removendo o primeiro nó.</li><br>
            <pre style="min-width: 30vw; height: 30vh;">
            <span> // Remoção do início</span>
        <span>public void DeletarInicio()</span>
        <span>{</span>
        <span>    if (inicio == null)</span>
        <span>    {</span>
        <span>        return;</span>
        <span>    }</span>
        <span>    inicio = inicio.Next;</span>
        <span>}</span>
        </pre>

        
            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5">Remoção por Valor:</h2>
            <p class="has-text-justified">
            <li>Percorremos a lista até encontrar o nó com o valor especificado.</li>
            <li>Ajustamos o ponteiro 'Next' do nó anterior para pular o nó a ser removido.</li><br>
            <pre style="min-width: 30vw; height: 30vh;">
            <span>// Remoção por valor</span>
        <span>public void DeletarValor(int key)</span>
        <span>{</span>
        <span>    if (inicio == null)</span>
        <span>    {</span>
        <span>        return;</span>
        <span>    }</span>
        <span>    if (inicio.Data == key)</span>
        <span>    {</span>
        <span>        inicio = inicio.Next;</span>
        <span>        return;</span>
        <span>    }</span>
        <span>    No noAtual = inicio;</span>
        <span>    No noAnterior = null;</span>
        <span>    while (noAtual != null && noAtual.Data != key)</span>
        <span>    {</span>
        <span>        noAnterior = noAtual;</span>
        <span>        noAtual = noAtual.Next;</span>
        <span>    }</span>
        <span>    if (noAtual == null)</span>
        <span>    {</span>
        <span>        return;</span>
        <span>    }</span>
        <span>    noAnterior.Next = noAtual.Next;</span>
        <span>}</span>
        </pre>
        
        
            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5">Percorrer e Imprimir a Lista:</h2>
            <p class="has-text-justified">
            <li>Começamos na cabeça da lista e percorremos cada nó, imprimindo 
            seu valor até chegar ao final da lista (null).</li><br>
            <pre style="min-width: 30vw; height: 30vh;">
            <span>// Percorrer e imprimir a lista</span>
        <span>public void Imprimir()</span>
        <span>{</span>
        <span>    No noAtual = inicio;</span>
        <span>    while (noAtual != null)</span>
        <span>    {</span>
        <span>        Console.Write(noAtual.Data + " ");</span>
        <span>        noAtual = noAtual.Next;</span>
        <span>    }</span>
        <span>    Console.WriteLine();</span>
        <span>}</span>

        </pre>

            </section>
        </section>

        <section class="section is-flex is-justify-content-space-between">

            <a class="is-size-5 has-text-link anterior" href="listaEncadeada.php"> Anterior </a>
            <a class="is-size-5 has-text-link proximo" href="exemploListaEncadeada.php"> Proximo </a>

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