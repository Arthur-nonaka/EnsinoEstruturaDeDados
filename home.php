<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: ./");
    die();
}

$home = true;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4Schools</title>
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<?php require './componentes/header.php'; ?>
   
    <div id="sidebar" class="sidebar has-background-black-bis">
        <div class="sidebar-menu">
            <a href="home.php" class="sidebar-item">Página Principal</a>
            <a href="TAD.php" class="sidebar-item">TAD-Tipo Abstrato de Dados</a>
            <a href="listaEncadeada.php" class="sidebar-item">Listas Simplesmente Encadeadas</a>
            <a href="listaDuplamenteEncadeada.php" class="sidebar-item">Listas Duplamente Encadeadas</a>
        </div>
    </div>
    
    
    <main id="content" class="has-background-white-bis is-flex is-justify-content-center is-align-items-center is-flex-direction-column">
        <div class="content has-text-black-bis">
            <section id="bem-vindo" class="section mt-2 pb-2">
                <div class="container">
                    <h1 class="title has-text-info">Bem-vindo ao W4Schools</h1>
                    <p>O W4Schools é um sítio Web educativo para aprender programação em linha. Lançado inicialmente em
                        2024, o seu nome deriva da World Wide Web, mas não está associado ao W3.
                        O W4Schools busca ensinar muito sobre os aspectos de Estrutura de dados. É gerido pelos alunos:
                        Arthur, Gustavo, João Luiz e João Pedro Cisilo.</p>
                </div>
            </section>
            <section id="textos" class="section m-0 pt-3 pb-2">
                <div class="container">
                    <h1 class="title has-text-info">Estrutura de Dados</h1>
                    <p>
                        Em resumo, uma estrutura de dados é como um organizador de informações para computadores.
                        Imagine uma gaveta com diferentes compartimentos para guardar diversos itens.
                        As estruturas de dados funcionam de maneira similar,
                        armazenando e organizando dados de forma eficiente para serem acessados e manipulados por
                        programas.
                    </p>
                    <p>Existem diversos tipos de estruturas de dados,
                        cada uma com suas características e usos específicos. Algumas das mais comuns incluem:</p>
                    <ul>
                        <li>Arrays: coleções ordenadas de elementos do mesmo tipo, como números ou nomes.</li>
                        <li>Listas ligadas: conjuntos de elementos interligados, onde cada elemento possui um ponteiro
                            para o próximo.</li>
                        <li>Pilhas: estruturas onde o último elemento inserido é o primeiro a ser removido, seguindo a
                            regra "LIFO" (Last In, First Out).</li>
                        <li>Filas: estruturas onde o primeiro elemento inserido é o primeiro a ser removido, seguindo a
                            regra "FIFO" (First In, First Out).</li>
                        <li>Árvores: estruturas hierárquicas com um elemento raiz e diversos elementos filhos.</li>
                        <li>Grafos: estruturas compostas por nós interligados por arestas, representando relações entre
                            elementos.</li>
                    </ul>

                    <p>A escolha da estrutura de dados ideal depende das necessidades do programa e dos dados que serão
                        armazenados.
                        Fatores como eficiência de acesso, armazenamento e manipulação de dados influenciam na decisão.
                    </p>

                    <p>Dominar as estruturas de dados é fundamental para programar de forma eficiente e desenvolver
                        softwares otimizados.
                        Elas permitem aos programadores organizar e gerenciar grandes volumes de informações de maneira
                        eficaz,
                        otimizando o desempenho dos programas e facilitando sua manutenção.</p>

                </div>
            </section>
        </div>

        <div class="buttons are-large p-2 mb-5">
            <a href="./explicacao/TAD/TAD.php">
                <button class="button is-info is-dark">RECEBA CONHECIMENTO</button>
            </a>
        </div>
    </main>

    <script src="scripts.js"></script>

    <?php require './componentes/footer.php'; ?>
</body>

</html>
