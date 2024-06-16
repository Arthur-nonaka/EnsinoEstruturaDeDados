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
            <h1 class="title has-text-info"> Operações: </h1>
            <h2 class="subtitle has-text-black-bis">     </h2>
            <section class="content" style="max-width: 100vw;">
            <h2 class="subtitle has-text-black-bis">Inserção no início:</h2>
            <p class="has-text-justified">
            <li>Criamos um novo nó com o valor dado.</li>
            <li>Apontamos o 'Next' do novo nó para o nó atualmente na cabeça.</li>
            <li>Atualizamos a cabeça para o novo nó.</li>
            <pre style="min-width: 30vw; height: 30vh;">
            <span>// Inserção no início</span>
        <span>public void InseirInicio(int data)</span>
        <span>{</span>
        <span>No novoNo = new No(data);</span>
        <span>novoNo.Next = inicio;</span>
        <span>inicio = novoNo;</span>
        <span>}</span>
        </pre>

        <h2 class="subtitle has-text-black-bis">     </h2>
            <section class="content" style="max-width: 100vw;">
            <h2 class="subtitle has-text-black-bis">Inserção no Final:</h2>
            <p class="has-text-justified">
            <li>Criamos um novo nó com o valor dado.</li>
            <li>Se a lista estiver vazia, atualizamos a cabeça para o novo nó.</li>
            <li>Caso contrário, percorremos a lista até o último nó e ajustamos seu ponteiro 'Next' para o novo nó.</li>
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

        <h2 class="subtitle has-text-black-bis">     </h2>
            <section class="content" style="max-width: 100vw;">
            <h2 class="subtitle has-text-black-bis">Remoção do Início:</h2>
            <p class="has-text-justified">
            <li>Se a lista não estiver vazia, atualizamos a cabeça para o segundo 
            nó, efetivamente removendo o primeiro nó.</li>
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

        <h2 class="subtitle has-text-black-bis">     </h2>
            <section class="content" style="max-width: 100vw;">
            <h2 class="subtitle has-text-black-bis">Remoção por Valor:</h2>
            <p class="has-text-justified">
            <li>Percorremos a lista até encontrar o nó com o valor especificado.</li>
            <li>Ajustamos o ponteiro 'Next' do nó anterior para pular o nó a ser removido.</li>
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
        
        <h2 class="subtitle has-text-black-bis">     </h2>
            <section class="content" style="max-width: 100vw;">
            <h2 class="subtitle has-text-black-bis">Percorrer e Imprimir a Lista:</h2>
            <p class="has-text-justified">
            <li>Começamos na cabeça da lista e percorremos cada nó, imprimindo 
            seu valor até chegar ao final da lista (null).</li>
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




<section class="section is-flex is-justify-content-space-between">

            <a class="is-size-5 has-text-link anterior" href="listaEncadeada.php"> Anterior </a>
            <a class="is-size-5 has-text-link proximo" href="exemploListaEncadeada.php"> Proximo </a>

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