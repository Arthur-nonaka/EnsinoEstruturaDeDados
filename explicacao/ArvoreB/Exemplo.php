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
    <title>W4Schools - Árvore B Exemplo</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<?php require '../../componentes/header.php'; ?>

    <?php require '../../componentes/sidebar.php';?>

    <main class="has-background-white-bis has-text-black-bis">
        <section id="content" class="content">
            <h1 class="title has-text-info"> Árvore B</h1>
            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"></h2>
            <main class="container is-fluid">
    <section class="content p-0">
        <h1 class="title has-text-black-bis has-text-weight-normal is-size-4">Árvore B - Exemplo de Implementação</h1>

        <!-- Classe BTree -->
        <section class="content p-0" style="max-width: 100vw;">
            <section class="mt-2 is-flex is-justify-content-center">
                <pre style="min-width: 50vw; height: 30vh;">
                    <span>class BTree</span>
                    <span>{</span>
                    <span>    private BTreeNode root;</span>
                    <span>    private int t;</span>
                    <span>    public BTree(int t)</span>
                    <span>    {</span>
                    <span>        this.t = t;</span>
                    <span>        this.root = new BTreeNode(true);</span>
                    <span>    }</span>

                    <span>    // Inserção</span>
                    <span>    public void Insert(int key)</span>
                    <span>    {</span>
                    <span>        if (root.numKeys == 2 * t - 1)</span>
                    <span>        {</span>
                    <span>            BTreeNode s = new BTreeNode(false);</span>
                    <span>            s.children[0] = root;</span>
                    <span>            root = s;</span>
                    <span>            SplitChild(root, 0);</span>
                    <span>        }</span>
                    <span>        InsertNonFull(root, key);</span>
                    <span>    }</span>

                    <span>    private void InsertNonFull(BTreeNode node, int key)</span>
                    <span>    {</span>
                    <span>        int i = node.numKeys - 1;</span>
                    <span>        if (node.leaf)</span>
                    <span>        {</span>
                    <span>            while (i >= 0 &amp;&amp; key &lt; node.keys[i])</span>
                    <span>            {</span>
                    <span>                node.keys[i + 1] = node.keys[i];</span>
                    <span>                i--;</span>
                    <span>            }</span>
                    <span>            node.keys[i + 1] = key;</span>
                    <span>            node.numKeys++;</span>
                    <span>        }</span>
                    <span>        else</span>
                    <span>        {</span>
                    <span>            while (i >= 0 &amp;&amp; key &lt; node.keys[i]) i--;</span>
                    <span>            i++;</span>
                    <span>            if (node.children[i].numKeys == 2 * t - 1)</span>
                    <span>            {</span>
                    <span>                SplitChild(node, i);</span>
                    <span>                if (key &gt; node.keys[i]) i++;</span>
                    <span>            }</span>
                    <span>            InsertNonFull(node.children[i], key);</span>
                    <span>        }</span>
                    <span>    }</span>

                    <span>    private void SplitChild(BTreeNode parent, int i)</span>
                    <span>    {</span>
                    <span>        BTreeNode fullChild = parent.children[i];</span>
                    <span>        BTreeNode newChild = new BTreeNode(fullChild.leaf);</span>
                    <span>        parent.children[i + 1] = newChild;</span>
                    <span>        parent.keys[i] = fullChild.keys[t - 1];</span>
                    <span>        parent.numKeys++;</span>

                    <span>        for (int j = 0; j &lt; t - 1; j++)</span>
                    <span>        {</span>
                    <span>            newChild.keys[j] = fullChild.keys[j + t];</span>
                    <span>        }</span>

                    <span>        if (!fullChild.leaf)</span>
                    <span>        {</span>
                    <span>            for (int j = 0; j &lt; t; j++)</span>
                    <span>            {</span>
                    <span>                newChild.children[j] = fullChild.children[j + t];</span>
                    <span>            }</span>
                    <span>        }</span>

                    <span>        fullChild.numKeys = t - 1;</span>
                    <span>    }</span>

                    <span>    // Impressão da Árvore B</span>
                    <span>    public void PrintTree()</span>
                    <span>    {</span>
                    <span>        PrintTree(root, 0);</span>
                    <span>    }</span>

                    <span>    private void PrintTree(BTreeNode node, int level)</span>
                    <span>    {</span>
                    <span>        Console.WriteLine("Nivel " + level + ": " + string.Join(", ", node.keys.Take(node.numKeys)) );</span>
                    <span>        if (!node.leaf)</span>
                    <span>        {</span>
                    <span>            for (int i = 0; i &lt;= node.numKeys; i++)</span>
                    <span>            {</span>
                    <span>                PrintTree(node.children[i], level + 1);</span>
                    <span>            }</span>
                    <span>        }</span>
                    <span>    }</span>

                    <span>    // Busca</span>
                    <span>    public bool Search(int key)</span>
                    <span>    {</span>
                    <span>        return Search(root, key) != null;</span>
                    <span>    }</span>

                    <span>    private BTreeNode Search(BTreeNode node, int key)</span>
                    <span>    {</span>
                    <span>        int i = 0;</span>
                    <span>        while (i &lt; node.numKeys &amp;&amp; key &gt; node.keys[i]) i++;</span>
                    <span>        if (i &lt; node.numKeys &amp;&amp; node.keys[i] == key)</span>
                    <span>            return node;</span>
                    <span>        if (node.leaf)</span>
                    <span>            return null;</span>
                    <span>        else</span>
                    <span>            return Search(node.children[i], key);</span>
                    <span>    }</span>
                    <span>}</span>
                </pre>
            </section>
            
            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5">Imagem:</h2>
            <img class="image" src="../../img/exemplo_b.png">
        </section>

        <!-- Fim do Código -->
        <section class="section is-flex is-justify-content-space-between">
            <a class="is-size-5 has-text-link anterior" href="Opereacoes.php"> Anterior </a>
            <a class="is-size-5 has-text-link proximo" href="../ArvoreTrie/Trie.php"> Proximo </a>

        </section>
    </main>

    <?php require '../../componentes/footer.php'; ?>
    <script src="../../scripts.js"></script>
</body>

</html>
