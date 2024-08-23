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
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<?php require '../../componentes/header.php'; ?>


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
        <section id="content" class="content">
            <h1 class="title has-text-info"> Listas Encadeada </h1>
            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"> </h2>
            <section class="content p-0" style="max-width: 100vw;">

                <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"> Inserção no início:</h2>
                <p class="has-text-justified">
                    <li>Criamos um novo nó com o valor dado.</li>
                    <li>Apontamos o 'Next' do novo nó para o nó atualmente na cabeça.</li>
                    <li>Atualizamos a cabeça para o novo nó.</li><br>
                    <section class="mt-2 is-flex is-justify-content-center">
                <pre style="min-width: 50vw; height: 30vh;">
            <span>// Inserção no início</span>
        <span>public void InseirInicio(int data)</span>
        <span>{</span>
        <span>No novoNo = new No(data);</span>
        <span>novoNo.Next = inicio;</span>
        <span>inicio = novoNo;</span>
        <span>}</span>
        </pre>
        </section>

                <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"> Inserção no Final:</h2>
                <p class="has-text-justified">
                    <li>Criamos um novo nó com o valor dado.</li>
                    <li>Se a lista estiver vazia, atualizamos a cabeça para o novo nó.</li>
                    <li>Caso contrário, percorremos a lista até o último nó e ajustamos seu ponteiro 'Next' para o novo
                        nó.</li><br>
                        <section class="mt-2 is-flex is-justify-content-center">
                <pre style="min-width: 50vw; height: 30vh;">
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
        </section>

                <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5">Remoção do Início:</h2>
                <p class="has-text-justified">
                    <li>Se a lista não estiver vazia, atualizamos a cabeça para o segundo
                        nó, efetivamente removendo o primeiro nó.</li><br>
                        <section class="mt-2 is-flex is-justify-content-center">
                <pre style="min-width: 50vw; height: 30vh;">
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
        </section>


                <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5">Remoção por Valor:</h2>
                <p class="has-text-justified">
                    <li>Percorremos a lista até encontrar o nó com o valor especificado.</li>
                    <li>Ajustamos o ponteiro 'Next' do nó anterior para pular o nó a ser removido.</li><br>
                    <section class="mt-2 is-flex is-justify-content-center">
                <pre style="min-width: 50vw; height: 30vh;">
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
        </section>


                <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5">Percorrer e Imprimir a Lista:
                </h2>
                <p class="has-text-justified">
                    <li>Começamos na cabeça da lista e percorremos cada nó, imprimindo
                        seu valor até chegar ao final da lista (null).</li><br>
                        <section class="mt-2 is-flex is-justify-content-center">
                <pre style="min-width: 50vw; height: 30vh;">
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
        </section>

        <section class="section is-flex is-justify-content-space-between">

            <a class="is-size-5 has-text-link anterior" href="Lista.php"> Anterior </a>
            <a class="is-size-5 has-text-link proximo" href="Exemplo.php"> Proximo </a>

        </section>
    </main>

    <?php require '../../componentes/footer.php'; ?>
    <script src="scripts.js"></script>
</body>

</html>