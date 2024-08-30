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
            <h1 class="title has-text-info"> Listas Duplamente Encadeada </h1>
            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"> </h2>
            <section class="content p-0" style="max-width: 100vw;">

                <p class="has-text-justified"> Estrutura de uma lista Duplamente encadeada
                    <li>Cada nó em uma lista duplamente encadeada possui três componentes:</li>
                <ol>
                    <li> Ponteiro para o Próximo Nó (Next): Aponta para o próximo nó na lista. </li>
                    <li> Ponteiro para o Nó Anterior (Previous): Aponta para o nó anterior na lista. </li>
                </ol>
                <section class="mt-2 is-flex is-justify-content-center">
                <pre style="min-width: 50vw; height: 35vh;">
    <span>public class No</span>
<span>{</span>
<span>    public int Dado { get; set; }</span>
<span>    public No Anterior { get; set; }</span>
<span>    public No Proximo { get; set; }</span>
<span></span>
<span>    public No(int dado)</span>
<span>    {</span>
<span>        Dado = dado;</span>
<span>        Anterior = null;</span>
<span>        Proximo = null;</span>
<span>    }</span>
<span>}</span>
</pre>
</section>

    </section> 
    <h2 class="subtitle has-text-black-bis"> Vamos as operações: </h2> 
    <section class="section is-flex is-justify-content-space-between"> 
    <a class="is-size-5 has-text-link anterior" href="../ListaSimples/Exemplo.php"> Anterior </a> 
    <a class="is-size-5 has-text-link proximo" href="Operacoes.php"> Proximo </a> 
</section>
 </main>

 <?php require '../../componentes/footer.php'; ?>
    <script src="scripts.js"></script>
</body>

</html>