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
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css"> -->
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
        <?php require '../../componentes/header.php'; ?>

            <?php require '../../componentes/sidebar.php';?>

            <main class="has-background-white-bis has-text-black-bis">
    <section id="content" class="content">
        <h1 class="title has-text-info">Árvore Binária de Busca Exemplo</h1>
        <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"></h2>

        <!-- Busca -->
        <section class="content p-0" style="max-width: 100vw;">
            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5">Busca</h2>
            <p class="has-text-justified">
                <li>Procura por um elemento na árvore</li>
                <section class="mt-2 is-flex is-justify-content-center">
                    <pre style="min-width: 50vw; height: 30vh;">
                    <span>class Node</span>
                    <span>{</span>
                    <span>    public int Value;</span>
                    <span>    public Node Left, Right;</span>
                    <span>    public Node(int value) { Value = value; }</span>
                    <span>}</span>

                    <span>class BinarySearchTree</span>
                    <span>{</span>
                    <span>    public Node Root;</span>

                    <span>    public Node Search(Node root, int key)</span>
                    <span>    {</span>
                    <span>        if (root == null || root.Value == key) return root;</span>
                    <span>        if (key < root.Value) return Search(root.Left, key);</span>
                    <span>        return Search(root.Right, key);</span>
                    <span>    }</span>
                    <span>}</span>
                                        </pre>
                                    </section>
                                </p>
                            </section>

                            <!-- Inserção -->
                            <section class="content p-0" style="max-width: 100vw;">
                                <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5">Inserção</h2>
                                <p class="has-text-justified">
                                    <li>Adiciona um elemento à árvore</li>
                                    <section class="mt-2 is-flex is-justify-content-center">
                                        <pre style="min-width: 50vw; height: 30vh;">
                    <span>class BinarySearchTree</span>
                    <span>{</span>
                    <span>    public Node Insert(Node root, int key)</span>
                    <span>    {</span>
                    <span>        if (root == null) return new Node(key);</span>
                    <span>        if (key < root.Value) root.Left = Insert(root.Left, key);</span>
                    <span>        else root.Right = Insert(root.Right, key);</span>
                    <span>        return root;</span>
                    <span>    }</span>
                    <span>}</span>
                                        </pre>
                                    </section>
                                </p>
                            </section>

                            <!-- Remoção -->
                            <section class="content p-0" style="max-width: 100vw;">
                                <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5">Remoção</h2>
                                <p class="has-text-justified">
                                    <li>Remove um elemento da árvore</li>
                                    <section class="mt-2 is-flex is-justify-content-center">
                                        <pre style="min-width: 50vw; height: 30vh;">
                    <span>class BinarySearchTree</span>
                    <span>{</span>
                    <span>    public Node Remove(Node root, int key)</span>
                    <span>    {</span>
                    <span>        if (root == null) return null;</span>
                    <span>        if (key < root.Value) root.Left = Remove(root.Left, key);</span>
                    <span>        else if (key > root.Value) root.Right = Remove(root.Right, key);</span>
                    <span>        else</span>
                    <span>        {</span>
                    <span>            if (root.Left == null) return root.Right;</span>
                    <span>            if (root.Right == null) return root.Left;</span>
                    <span>            Node successor = FindMin(root.Right);</span>
                    <span>            root.Value = successor.Value;</span>
                    <span>            root.Right = Remove(root.Right, successor.Value);</span>
                    <span>        }</span>
                    <span>        return root;</span>
                    <span>    }</span>

                    <span>    private Node FindMin(Node root)</span>
                    <span>    {</span>
                    <span>        while (root.Left != null) root = root.Left;</span>
                    <span>        return root;</span>
                    <span>    }</span>
                    <span>}</span>
                                        </pre>
                                    </section>
                                </p>
                            </section>

                            <!-- Caminhamento -->
                            <section class="content p-0" style="max-width: 100vw;">
                                <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5">Caminhamento</h2>
                                <p class="has-text-justified">
                                    <li>Exibe os elementos em ordem crescente</li>
                                    <section class="mt-2 is-flex is-justify-content-center">
                                        <pre style="min-width: 50vw; height: 30vh;">
                    <span>class BinarySearchTree</span>
                    <span>{</span>
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
                                </p>
                <section class="section is-flex is-justify-content-space-between">

                <a class="is-size-5 has-text-link anterior" href="Busca.php"> Anterior </a>
                <a class="is-size-5 has-text-link proximo" href="Exemplo.php"> Proximo </a>

                </section>
                        </section>
                    </main>


    <?php require '../../componentes/footer.php'; ?>
    <script src="../../scripts.js"></script>
</body>

</html>