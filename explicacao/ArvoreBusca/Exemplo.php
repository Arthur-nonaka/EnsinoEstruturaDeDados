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
    <title>W4Schools - Árvore Binária de Busca Exemplo</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<?php require '../../componentes/header.php'; ?>
<?php require '../../componentes/sidebar.php';?>


<main class="has-background-white-bis has-text-black-bis">
    <section id="content" class="content">
        <h1 class="title has-text-info"> Exemplo de Árvore Binária de Busca </h1>
        <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"> </h2>
        <section class="content p-0" style="max-width: 100vw;">

            <p class="has-text-justified">
                <li>Exemplo completo de uma Árvore Binária de Busca com inserção, busca, remoção e caminhamento:</li>
                <section class="mt-2 is-flex is-justify-content-center">
            <pre style="min-width: 50vw; height: 80vh;">
            <span>class Node</span>
            <span>{</span>
            <span>    public int Value;</span>
            <span>    public Node Left, Right;</span>
            <span>    public Node(int value) { Value = value; }</span>
            <span>}</span>

            <span>class BinarySearchTree</span>
            <span>{</span>
            <span>    public Node Root;</span>

            <span>    // Inserção</span>
            <span>    public Node Insert(Node root, int value)</span>
            <span>    {</span>
            <span>        if (root == null) return new Node(value);</span>
            <span>        if (value < root.Value) root.Left = Insert(root.Left, value);</span>
            <span>        else root.Right = Insert(root.Right, value);</span>
            <span>        return root;</span>
            <span>    }</span>

            <span>    // Busca</span>
            <span>    public Node Search(Node root, int value)</span>
            <span>    {</span>
            <span>        if (root == null || root.Value == value) return root;</span>
            <span>        return value < root.Value ? Search(root.Left, value) : Search(root.Right, value);</span>
            <span>    }</span>

            <span>    // Remoção</span>
            <span>    public Node Remove(Node root, int value)</span>
            <span>    {</span>
            <span>        if (root == null) return root;</span>
            <span>        if (value < root.Value) root.Left = Remove(root.Left, value);</span>
            <span>        else if (value > root.Value) root.Right = Remove(root.Right, value);</span>
            <span>        else {</span>
            <span>            if (root.Left == null) return root.Right;</span>
            <span>            if (root.Right == null) return root.Left;</span>
            <span>            Node minNode = FindMin(root.Right);</span>
            <span>            root.Value = minNode.Value;</span>
            <span>            root.Right = Remove(root.Right, minNode.Value);</span>
            <span>        }</span>
            <span>        return root;</span>
            <span>    }</span>

            <span>    // Encontrar menor valor</span>
            <span>    private Node FindMin(Node root)</span>
            <span>    {</span>
            <span>        while (root.Left != null) root = root.Left;</span>
            <span>        return root;</span>
            <span>    }</span>

            <span>    // Caminhamento em ordem</span>
            <span>    public void InOrderTraversal(Node root)</span>
            <span>    {</span>
            <span>        if (root == null) return;</span>
            <span>        InOrderTraversal(root.Left);</span>
            <span>        Console.Write(root.Value + " ");</span>
            <span>        InOrderTraversal(root.Right);</span>
            <span>    }</span>
            <span>}</span>
            </pre>
            </section>


            <p>Exemplo de como seria uma Árvore:</p>
            <img class="image" src="../../img/exemplo_binaria.png">

        <section class="section is-flex is-justify-content-space-between">
            <a class="is-size-5 has-text-link anterior" href="Operacoes.php"> Anterior </a>
            <a class="is-size-5 has-text-link proximo" href="../ArvoreB/B.php"> Próximo </a>
        </section>
    </section>
</main>


<?php require '../../componentes/footer.php'; ?>
<script src="../../scripts.js"></script>
</body>

</html>