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
            <h1 class="title has-text-info"> Fila Encadeada de Prioridade </h1>
            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"> </h2>
            <section class="content p-0" style="max-width: 100vw;">

                <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"> Inserir com Prioridade:</h2>
                <p class="has-text-justified">
                    <li>Cria um novo nó com a prioridade especificada.</li>
                    <li>Insere o novo nó na posição correta na fila, de acordo com a prioridade.</li><br>
                    <section class="mt-2 is-flex is-justify-content-center">
                <pre style="min-width: 50vw; height: 30vh;">
                {</span>
            <span>        No novoNo = new No(dado, prioridade);</span>
            <span></span>
            <span>        if (inicio == null || inicio.Prioridade > prioridade)</span>
            <span>        {</span>
            <span>            novoNo.Proximo = inicio;</span>
            <span>            inicio = novoNo;</span>
            <span>        }</span>
            <span>        else</span>
            <span>        {</span>
            <span>            No atual = inicio;</span>
            <span>            while (atual.Proximo != null && atual.Proximo.Prioridade <= prioridade)</span>
            <span>            {</span>
            <span>                atual = atual.Proximo;</span>
            <span>            }</span>
            <span>            novoNo.Proximo = atual.Proximo;</span>
            <span>            atual.Proximo = novoNo;</span>
            <span>        }</span>
            <span>    }</span>
        </pre>
            </section>
            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"> Exemplo em Figuras:</h2>
            <img class="incercaoPrioridadeimg" src="../../img/PrioridadeInse.png">
            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"> Parte 2:</h2>
            <img class="incercaoPrioridade" src="../../img/PrioridadeInse2.PNG">
           

            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"> Remover com Prioridade:</h2>
<p class="has-text-justified">
    <li>Remove o nó com a maior prioridade (geralmente o início da fila).</li>
    <li>Caso seja apenas uma remoção simples, você pode liberar a memória e remover o nó da fila.</li>
    <li>Você também pode guardar o nó removido na memória para direcioná-lo para outra fila, se necessário.</li><br>
    <section class="mt-2 is-flex is-justify-content-center">
<pre style="min-width: 50vw; height: 30vh;">
<span>// Remover com Prioridade</span>
<span>    public No Remover()</span>
<span>    {</span>
<span>        if (inicio == null)</span>
<span>        {</span>
<span>            Console.WriteLine("A fila está vazia!");</span>
<span>            return null;</span>
<span>        }</span>
<span></span>
<span>        No noRemovido = inicio;</span>  <!-- Guarda o nó removido -->
<span>        inicio = inicio.Proximo;</span> <!-- O próximo do início se torna o novo início -->
<span>        noRemovido.Proximo = null; // Limpa o ponteiro do nó removido</span>
<span>        return noRemovido; // Retorna o nó removido, pode ser guardado para outra operação</span>
<span>    }</span>
</pre>
</section>

            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"> Exemplo em Figuras:</h2>
            <img class="incercaoPrioridade" src="../../img/PrioridadeRemo.png">
            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"> Parte 2:</h2>
            <img class="incercaoPrioridade" src="../../img/PrioridadeRemo2.png">
            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"> Parte 2:</h2>
            <img class="incercaoPrioridade" src="../../img/PrioridadeRemo3.png">

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
                <span>// Percurso Fila de Prioridade (do início ao fim)</span>
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

            <a class="is-size-5 has-text-link anterior" href="Fila.php"> Anterior </a>
            <a class="is-size-5 has-text-link proximo" href="Exemplo.php"> Proximo </a>

        </section>
    </main>

    <?php require '../../componentes/footer.php'; ?>
    <script src="../../scripts.js"></script>
</body>

</html>
