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
    <title>W4Schools - Árvore AVL - Exemplo</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<?php require '../../componentes/header.php'; ?>

    <?php require '../../componentes/sidebar.php';?>

    <main class="has-background-white-bis has-text-black-bis">
        <section id="content" class="content">
            <h1 class="title has-text-info">Árvore AVL - Exemplo</h1>
            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"> Exemplo de implementação em C#</h2>
            <section class="content p-0" style="max-width: 100vw;">
                <p class="has-text-justified">
                    Aqui está um exemplo básico de como usar a Árvore AVL em um programa C#.
                </p>

                <section class="mt-2 is-flex is-justify-content-center">
                <pre style="min-width: 50vw; height: 30vw;">
                    <span>using System;</span>
                    <span>using System.Collections.Generic;</span>
                    <span> </span>
                    <span>class AVLTree</span>
                    <span>{</span>
                    <span>    class Node</span>
                    <span>    {</span>
                    <span>        public int Key;</span>
                    <span>        public Node Left, Right;</span>
                    <span>        public Node(int item) { Key = item; }</span>
                    <span>    }</span>

                    <span>    Node root;</span>

                    <span>    // Função de rotação e balanceamento será implementada aqui...</span>

                    <span>    public void Inserir(int key)</span>
                    <span>    {</span>
                    <span>        root = InserirRec(root, key);</span>
                    <span>    }</span>

                    <span>    public Node InserirRec(Node node, int key)</span>
                    <span>    {</span>
                    <span>        if (node == null) return new Node(key);</span>
                    <span>        if (key < node.Key)</span>
                    <span>            node.Left = InserirRec(node.Left, key);</span>
                    <span>        else if (key > node.Key)</span>
                    <span>            node.Right = InserirRec(node.Right, key);</span>
                    <span>        return node;</span>
                    <span>    }</span>
                    <span> </span>
                    <span>    static void Main(string[] args)</span>
                    <span>    {</span>
                    <span>        AVLTree tree = new AVLTree();</span>
                    <span>        tree.Inserir(10);</span>
                    <span>        tree.Inserir(20);</span>
                    <span>        tree.Inserir(5);</span>
                    <span>        // Imprimir a árvore ou realizar outras operações...</span>
                    <span>    }</span>
                </pre>
                </section>
            </section>
        </section>

        <section class="section is-flex is-justify-content-space-between">
            <a class="is-size-5 has-text-link anterior" href="Operacoes.php"> Anterior </a>
            <a class="is-size-5 has-text-link proximo" href="index.php"> Voltar à Introdução </a>
        </section>
    </main>

    <?php require '../../componentes/footer.php'; ?>
    <script src="../../scripts.js"></script>
</body>

</html>
