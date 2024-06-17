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
<header class="navbar">
        <section class="navbar-start">
            <button id="sidebarToggle" class="button is-info m-3">
                <i class="fa fa-bars"></i> 
            </button>
            <a class="logo" href="home.php">
                <figure class="image is-64x64">
                    <img src="./img/logo.png" />
                </figure>
            </a>
        </section>
        <section class="navbar-end">
            <section class="navbar-item">
                <?php echo $_SESSION['user']; ?>
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
            <h1 class="title has-text-info"> Listas Duplamente Encadeada </h1>
            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"> </h2>
            <section class="content p-0" style="max-width: 100vw;">

            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"> Inserção no início:</h2>
            <p class="has-text-justified">
            <li>Cria um novo nó.</li>
             <li> Ajusta os ponteiros para inserir o nó no início da lista.</li><br>
            <pre style="min-width: 30vw; height: 30vh;">
            <span>// Inserção no Início</span>
            <span>    public void InserirNoInicio(int dado)</span>
            <span>    {</span>
            <span>        No novoNo = new No(dado);</span>
            <span></span>
            <span>        if (inicio == null)</span>
            <span>        {</span>
            <span>            inicio = novoNo;</span>
            <span>            fim = novoNo;</span>
            <span>        }</span>
            <span>        else</span>
            <           span>        {</span>
            <span>            novoNo.Proximo = inicio;</span>
            <span>            inicio.Anterior = novoNo;</span>
            <span>            inicio = novoNo;</span>
            <span>        }</span>
            <span>    }</span>
        </pre>

            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"> Inserção no Final:</h2>
            <p class="has-text-justified">
            <li>Cria um novo nó.</li>
            <li>Ajusta os ponteiros para inserir o nó no final da lista.</li><br>
            <pre style="min-width: 30vw; height: 30vh;">
            <span>// Inserção no Final</span>
            <span>    public void InserirNoFinal(int dado)</span>
            <span>    {</span>
            <span>        No novoNo = new No(dado);</span>
            <span></span>
            <span>        if (fim == null)</span>
            <span>        {</span>          <span>            inicio = novoNo;</span>
            <span>            fim = novoNo;</span>
            <span>        }</span>
            <span>        else</span>
            <span>        {</span>
            <span>            novoNo.Anterior = fim;</span>
            <span>            fim.Proximo = novoNo;</span>
            <span>            fim = novoNo;</span>
            <span>        }</span>
            <           span>    }</span>
        </pre>


            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5">Remoção do Início:</h2>
            <p class="has-text-justified">
            <li>Ajusta os ponteiros para remover o nó do início da lista.</li>
            <li>Atualiza a início da lista.</li><br>
            <pre style="min-width: 30vw; height: 30vh;">
            <span>// Remoção no Início</span>
            <span>    public void RemoverDoInicio()</span>
            <span>    {</span>
            <span>        if (inicio == null)</span>
            <span>        {</span>
            <span>            return;</span>
            <span>        }</span>
            <span></span>
            <span>        if (inicio == fim)</span>
            <span>        {</span>
            <span>            inicio = null;</span>
                        <span>            fim = null;</span>
            <span>        }</span>
            <span>        else</span>
            <span>        {</span>
            <span>            inicio = inicio.Proximo;</span>
            <span>            inicio.Anterior = null;</span>
            <span>        }</span>
            <span>    }</span>

        </pre>

        
            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5">Remoção no Final:</h2>
            <p class="has-text-justified">
            <li>Ajusta os ponteiros para remover o nó do final da lista.</li>
            <li>Atualiza a fim da lista.</li><br>
            <pre style="min-width: 30vw; height: 30vh;">
            <span>// Remoção no Final</span>
            <span>    public void RemoverDoFinal()</span>
            <span>        if (fim == null)</span>
            <span>        {</span>
            <span>            return;</span>
            <span>        }</span>
            <span></span>
            <span>        if (inicio == fim)</span>
            <span>        {</span>
            <span>            inicio = null;</span>
            <span>            fim = null;</span>
            <span>        }</span>
            <span>        else</span>
            <span>        {</span>
            <span>            fim = fim.Anterior;</span>
            <span>            fim.Proximo = null;</span>
            <span>        }</span>
            <span>    } </span>
            <span>   { </span>
        </pre>
        
        
            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5">Impressão de elementos:</h2>
            <p class="has-text-justified">
            <li>Pode ser feita de duas maneiras: do início até o fim (impressão direta) ou do fim até o início (impressão reversa).</li><br>
            <p>Impressão Direta:</p>
            <pre style="min-width: 30vw; height: 30vh;">
            <span>    public void ImprimirFrente()</span>
            <span>    {</span>
            <span>        No atual = inicio;</span>
            <span>        while (atual != null)</span>
            <span>        {</span>
            <span>            Console.Write(atual.Dado + " ");</span>
            <span>            atual = atual.Proximo;</span>
            <span>        }</span>
            <span>        Console.WriteLine();</span>
            <span>    }</span>     

        </pre>

        <p>Impressão Reversa:</p>
            <pre style="min-width: 30vw; height: 30vh;">
            <span>    public void ImprimirReverso()</span>
            <span>    {</span>
            <span>        No atual = fim;</span>
            <span>        while (atual != null)</span>
            <span>        {</span>
            <span>            Console.Write(atual.Dado + " ");</span>
            <span>            atual = atual.Anterior;</span>
            <span>        }</span>
            <span>        Console.WriteLine();</span>
            <span>    }</span>
            <span>}</span>         

        </pre>
        

            </section>
        </section>

        <section class="section is-flex is-justify-content-space-between">

            <a class="is-size-5 has-text-link anterior" href="listaDuplamenteEncadeada.php"> Anterior </a>
            <a class="is-size-5 has-text-link proximo" href="exemploListaDuplamenteEncadeada.php"> Proximo </a>

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