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

    <?php require '../../componentes/sidebar.php';?>

    <main class="has-background-white-bis has-text-black-bis">
        <section id="content" class="content">
            <h1 class="title has-text-info"> Fila FIFO </h1>
            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"> </h2>
            <section class="content p-0" style="max-width: 100vw;">

                <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"> Enfileirar (Sempre no Final da Fila):</h2>
                <p class="has-text-justified">
                    <li>Cria um novo nó.</li>
                    <li> Fazer o Proximo da NÓ cauda apontar para o novo NÓ, e transformar o Novo NÓ no Fim da fila.</li><br>
                    <section class="mt-2 is-flex is-justify-content-center">
                <pre style="min-width: 50vw; height: 30vh;">
                {</span>
            <span>        No novoNo = new No(dado);</span>
            <span></span>
            <span>        if (fim == null)</span>
            <span>        {</span>
            <span>            inicio = novoNo;</span>
            <span>            fim = novoNo;</span>
            <span>        }</span>
            <span>        else</span>
            <span>        {</span>
            <span>            fim.Proximo = novoNo;</span>
            <span>            fim = novoNo;</span>
            <span>        }</span>
            <span>    }</span>
        </pre>
            </section>
            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"> Exemplo em Figuras:</h2>
            <img class="incercao" src="../../img/FIFO.png">
            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"> Parte 2:</h2>
            <img class="incercao" src="../../img/FIFO2.PNG">
            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"> Parte 3:</h2>
            <img class="incercao" src="../../img/FIFO3.PNG">

            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"> Desenfileirar (Sempre no Início da Fila):</h2>
<p class="has-text-justified">
    <li>Transforma o próximo do início no novo início da fila.</li>
    <li>Caso seja apenas uma remoção simples, você pode liberar a memória e remover o nó da fila.</li>
    <li>Você também pode guardar o nó removido na memória para direcioná-lo para outra fila, se necessário.</li><br>
    <section class="mt-2 is-flex is-justify-content-center">
<pre style="min-width: 50vw; height: 30vh;">
<span>// Desenfileirar (Remoção no Início)</span>
<span>    public No Desenfileirar()</span>
<span>    {</span>
<span>        if (inicio == null)</span>
<span>        {</span>
<span>            Console.WriteLine("A fila está vazia!");</span>
<span>            return null;</span>
<span>        }</span>
<span></span>
<span>        No noRemovido = inicio;</span>  <!-- Guarda o nó removido -->
<span></span>
<span>        if (inicio == fim)</span>
<span>        {</span>
<span>            inicio = null;</span>
<span>            fim = null;</span>
<span>        }</span>
<span>        else</span>
<span>        {</span>
<span>            inicio = inicio.Proximo;</span> <!-- O próximo do início se torna o novo início -->
<span>        }</span>
<span></span>
<span>        noRemovido.Proximo = null; // Limpa o ponteiro do nó removido</span>
<span>        return noRemovido; // Retorna o nó removido, pode ser guardado para outra operação</span>
<span>    }</span>
</pre>
</section>

            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"> Exemplo em Figuras:</h2>
            <img class="incercao" src="../../img/FIFORE.png">
            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"> Parte 2:</h2>
            <img class="incercao" src="../../img/FIFORE2.PNG">

            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5">Busca(Consulta):</h2>
            <p class="has-text-justified">
                <li>Realiza uma busca por um elemento específico dentro da fila.</li>
                <section class="mt-2 is-flex is-justify-content-center">
            <pre style="min-width: 50vw; height: 30vh;">
            <span>// Busca (Consulta)</span>
            <span>    public No BuscarElemento(int dado)</span>
            <span>    {</span>
            <span>        if (inicio == null)</span>
            <span>        {</span>
            <span>            Console.WriteLine("A fila está vazia!");</span>
            <span>            return null;</span>
            <span>        }</span>
            <span></span>
            <span>        No atual = inicio;</span> <!-- Inicia a busca no início da fila -->
            <span>        while (atual != null)</span>
            <span>        {</span>
            <span>            if (atual.Dado == dado)</span> <!-- Verifica se o dado é o procurado -->
            <span>            {</span>
            <span>                Console.WriteLine("Elemento encontrado: " + atual.Dado);</span>
            <span>                return atual;</span> <!-- Retorna o nó encontrado -->
            <span>            }</span>
            <span>            atual = atual.Proximo;</span> <!-- Avança para o próximo nó -->
            <span>        }</span>
            <span></span>
            <span>        Console.WriteLine("Elemento não encontrado na fila!");</span>
            <span>        return null;</span> <!-- Retorna null se o elemento não for encontrado -->
            <span>    }</span>
            </pre>
            </section>

            </section>
           


                

                <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5">Percurso:</h2>
                <p class="has-text-justified">
                    <li>Ele percorre a Fila inteira</li><br>
                <p>Exemplo:</p>
                <section class="mt-2 is-flex is-justify-content-center">
                <pre style="min-width: 50vw; height: 30vh;">
                <span>// Percurso FIFO (do início ao fim)</span>
                <span>    public void ImprimirFila()</span>
                <span>    {</span>
                <span>        if (inicio == null)</span>
                <span>        {</span>
                <span>            Console.WriteLine("A fila está vazia!");</span>
                <span>            return;</span>
                <span>        }</span>
                <span></span>
                <span>        No atual = inicio;</span> <!-- Começa do início da fila -->
                <span>        while (atual != null)</span> <!-- Percorre até o fim da fila -->
                <span>        {</span>
                <span>            Console.Write(atual.Dado + " ");</span> <!-- Imprime o valor atual -->
                <span>            atual = atual.Proximo;</span> <!-- Move para o próximo nó -->
                <span>        }</span>
                <span>        Console.WriteLine();</span> <!-- Imprime uma nova linha no final -->
                <span>    }</span>     

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
    <script src="../../scripts.js"></script>
</body>

</html>