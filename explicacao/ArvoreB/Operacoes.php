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
    <?php require '../../componentes/sidebar.php'; ?>

    <main class="has-background-white-bis has-text-black-bis">
        <section id="content" class="content">
            <h1 class="title has-text-info">Árvore B Exemplo</h1>
            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"></h2>

        <!-- Busca -->
        <section class="content p-0" style="max-width: 100vw;">
            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5">Busca</h2>
            <p class="has-text-justified">
                <li>Procura por um elemento na árvore</li>
                <section class="mt-2 is-flex is-justify-content-center">
                    <pre style="min-width: 50vw; height: 30vh;">
                    <span>class BTreeNode</span>
                    <span>{</span>
                    <span>    public int[] keys;</span>
                    <span>    public BTreeNode[] children;</span>
                    <span>    public int numKeys;</span>
                    <span>    public bool leaf;</span>
                    <span>    public BTreeNode(int t, bool leaf)</span>
                    <span>    {</span>
                    <span>        this.leaf = leaf;</span>
                    <span>        this.keys = new int[2 * t - 1];</span>
                    <span>        this.children = new BTreeNode[2 * t];</span>
                    <span>        this.numKeys = 0;</span>
                    <span>    }</span>

                    <span>class BTree</span>
                    <span>{</span>
                    <span>    private BTreeNode root;</span>
                    <span>    private int t;</span>

                    <span>    public BTree(int t)</span>
                    <span>    {</span>
                    <span>        this.t = t;</span>
                    <span>        this.root = new BTreeNode(t, true);</span>
                    <span>    }</span>

                    <span>    public BTreeNode Search(BTreeNode node, int key)</span>
                    <span>    {</span>
                    <span>        int i = 0;</span>
                    <span>        while (i &lt; node.numKeys &amp;&amp; key &gt; node.keys[i]) i++;</span>
                    <span>        if (i &lt; node.numKeys &amp;&amp; node.keys[i] == key) return node;</span>
                    <span>        if (node.leaf) return null;</span>
                    <span>        return Search(node.children[i], key);</span>
                    <span>    }</span>
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
                    <span>class BTree</span>
                    <span>{</span>
                    <span>    public void Insert(int key)</span>
                    <span>    {</span>
                    <span>        BTreeNode root = this.root;</span>
                    <span>        if (root.numKeys == 2 * t - 1)</span>
                    <span>        {</span>
                    <span>            BTreeNode newNode = new BTreeNode(t, false);</span>
                    <span>            newNode.children[0] = root;</span>
                    <span>            Split(newNode, 0, root);</span>
                    <span>            root = newNode;</span>
                    <span>        }</span>
                    <span>        InsertNonFull(root, key);</span>
                    <span>    }</span>

                    <span>    private void Split(BTreeNode parent, int i, BTreeNode fullNode)</span>
                    <span>    {</span>
                    <span>        BTreeNode newNode = new BTreeNode(t, fullNode.leaf);</span>
                    <span>        parent.children[i + 1] = newNode;</span>
                    <span>        parent.keys[i] = fullNode.keys[t - 1];</span>
                    <span>        newNode.numKeys = t - 1;</span>
                    <span>        fullNode.numKeys = t - 1;</span>
                    <span>        for (int j = 0; j &lt; t - 1; j++)</span>
                    <span>            newNode.keys[j] = fullNode.keys[j + t];</span>
                    <span>        if (!fullNode.leaf)</span>
                    <span>        {</span>
                    <span>            for (int j = 0; j &lt; t; j++)</span>
                    <span>                newNode.children[j] = fullNode.children[j + t];</span>
                    <span>        }</span>
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
                    <span>class BTree</span>
                    <span>{</span>
                    <span>    public void Remove(int key)</span>
                    <span>    {</span>
                    <span>        Remove(root, key);</span>
                    <span>    }</span>

                    <span>    private void Remove(BTreeNode node, int key)</span>
                    <span>    {</span>
                    <span>        int i = 0;</span>
                    <span>        while (i &lt; node.numKeys &amp;&amp; key &gt; node.keys[i]) i++;</span>
                    <span>        if (i &lt; node.numKeys &amp;&amp; node.keys[i] == key)</span>
                    <span>        {</span>
                    <span>            if (node.leaf)</span>
                    <span>                RemoveFromLeaf(node, i);</span>
                    <span>            else</span>
                    <span>                RemoveFromNonLeaf(node, i);</span>
                    <span>        }</span>
                    <span>        else if (!node.leaf)</span>
                    <span>            Remove(node.children[i], key);</span>
                    </pre>
                </section>
            </p>
        </section>

        <!-- Divisão de Nó -->
        <section class="content p-0" style="max-width: 100vw;">
            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5">Divisão de Nó</h2>
            <p class="has-text-justified">
                <li>Divide um nó quando ele está cheio</li>
                <section class="mt-2 is-flex is-justify-content-center">
                    <pre style="min-width: 50vw; height: 30vh;">
                    <span>class BTree</span>
                    <span>{</span>
                    <span>    private void Split(BTreeNode parent, int i, BTreeNode fullNode)</span>
                    <span>    {</span>
                    <span>        BTreeNode newNode = new BTreeNode(t, fullNode.leaf);</span>
                    <span>        parent.children[i + 1] = newNode;</span>
                    <span>        parent.keys[i] = fullNode.keys[t - 1];</span>
                    <span>        newNode.numKeys = t - 1;</span>
                    <span>        fullNode.numKeys = t - 1;</span>
                    <span>        for (int j = 0; j &lt; t - 1; j++)</span>
                    <span>            newNode.keys[j] = fullNode.keys[j + t];</span>
                    <span>        if (!fullNode.leaf)</span>
                    <span>        {</span>
                    <span>            for (int j = 0; j &lt; t; j++)</span>
                    <span>                newNode.children[j] = fullNode.children[j + t];</span>
                    <span>        }</span>
                    </pre>
                </section>
            </p>
        </section>

        <!-- Fusão de Nó -->
        <section class="content p-0" style="max-width: 100vw;">
            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5">Fusão de Nó</h2>
            <p class="has-text-justified">
                <li>Funde dois nós quando um nó fica com o número de elementos menor que o mínimo</li>
                <section class="mt-2 is-flex is-justify-content-center">
                    <pre style="min-width: 50vw; height: 30vh;">
                    <span>class BTree</span>
                    <span>{</span>
                    <span>    private void Merge(BTreeNode parent, int i)</span>
                    <span>    {</span>
                    <span>        BTreeNode left = parent.children[i];</span>
                    <span>        BTreeNode right = parent.children[i + 1];</span>
                    <span>        left.keys[t - 1] = parent.keys[i];</span>
                    <span>        for (int j = 0; j &lt; right.numKeys; j++)</span>
                    <span>            left.keys[j + t] = right.keys[j];</span>
                    <span>        if (!left.leaf)</span>
                    <span>        {</span>
                    <span>            for (int j = 0; j &lt;= right.numKeys; j++)</span>
                    <span>                left.children[j + t] = right.children[j];</span>
                    <span>        }</span>
                    <span>        parent.children[i] = left;</span>
                    <span>        for (int j = i; j &lt; parent.numKeys - 1; j++)</span>
                    <span>            parent.children[j] = parent.children[j + 1];</span>
                    <span>        parent.numKeys--;</span>
                    </pre>
                </section>
            </p>
        </section>

        <!-- Atualização -->
        <section class="content p-0" style="max-width: 100vw;">
            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5">Atualização</h2>
            <p class="has-text-justified">
                <li>Atualiza um elemento na árvore</li>
                <section class="mt-2 is-flex is-justify-content-center">
                    <pre style="min-width: 50vw; height: 30vh;">
                    <span>class BTree</span>
                    <span>{</span>
                    <span>    public void Update(int oldKey, int newKey)</span>
                    <span>    {</span>
                    <span>        Remove(oldKey);</span>
                    <span>        Insert(newKey);</span>
                    <span>    }</span>
                    </pre>
                </section>
            </p>
        </section>

        <!-- Percorrendo a Árvore -->
        <section class="content p-0" style="max-width: 100vw;">
            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5">Percorrendo a Árvore</h2>
            <p class="has-text-justified">
                <li>Percorre a árvore e imprime os elementos</li>
                <section class="mt-2 is-flex is-justify-content-center">
                    <pre style="min-width: 50vw; height: 30vh;">
                    <span>class BTree</span>
                    <span>{</span>
                    <span>    public void Traverse(BTreeNode node)</span>
                    <span>    {</span>
                    <span>        int i = 0;</span>
                    <span>        while (i &lt; node.numKeys)</span>
                    <span>        {</span>
                    <span>            if (!node.leaf)</span>
                    <span>                Traverse(node.children[i]);</span>
                    <span>            Console.WriteLine(node.keys[i]);</span>
                    <span>            i++;</span>
                    <span>        }</span>
                    <span>    }</span>
                    </pre>
                </section>
            </p>
        </section>

        <!-- Impressão -->
        <section class="content p-0" style="max-width: 100vw;">
            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5">Impressão</h2>
            <p class="has-text-justified">
                <li>Imprime a árvore em formato legível</li>
                <section class="mt-2 is-flex is-justify-content-center">
                    <pre style="min-width: 50vw; height: 30vh;">
                    <span>class BTree</span>
                    <span>{</span>
                    <span>    public void Print()</span>
                    <span>    {</span>
                    <span>        Print(root, 0);</span>
                    <span>    }</span>

                    <span>    private void Print(BTreeNode node, int level)</span>
                    <span>    {</span>
                    <span>        if (node != null)</span>
                    <span>        {</span>
                    <span>            for (int i = 0; i &lt; node.numKeys; i++)</span>
                    <span>                Console.WriteLine("Nivel " + level + ": " + node.keys[i]);</span>
                    <span>            for (int i = 0; i &lt;= node.numKeys; i++)</span>
                    <span>                Print(node.children[i], level + 1);</span>
                    <span>        }</span>
                    </pre>
                </section>
            </p>

            <section class="section is-flex is-justify-content-space-between">
                <a class="is-size-5 has-text-link anterior" href="B.php">Anterior</a>
                <a class="is-size-5 has-text-link" href="Exemplo.php">Próximo</a>
            </section>
        </section>
    </main>
</body>

</html>
