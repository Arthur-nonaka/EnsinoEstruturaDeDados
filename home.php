<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina EB</title>
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>
<body>
    
    <header class="header">
        <div class="header-container">
            <a class="logo" href="#">
                <img src="logo.png" alt="Logo">
            </a>
            <button id="sidebarToggle" class="button is-primary">Menu</button>
        </div>
    </header>

    
    <div id="sidebar" class="sidebar">
        <div class="sidebar-menu">
            <a href="home.php" class="sidebar-item">Página Principal</a>
            <a href="TAD.php" class="sidebar-item">TAD-Tipo Abstrato de Dados</a>
            <a href="#estrutura-de-dados" class="sidebar-item">Listas Simplesmente Encadeadas</a>
            <a href="#estrutura-de-dados" class="sidebar-item">Listas Duplamente Encadeadas</a>
        </div>
    </div>

    
    <div id="content" class="content">
        <section id="bem-vindo" class="section">
            <div class="container">
                <h1 class="title">Bem-vindo ao Meu Site</h1>
                <p>Esta é a seção de boas-vindas do site. Aqui você pode colocar uma introdução ou uma mensagem para os visitantes.</p>
            </div>
        </section>
        <section id="estrutura-de-dados" class="section">
            <div class="container">
                <h1 class="title">Estrutura de Dados</h1>
                <p>Estruturas de dados são formas de organizar e armazenar dados de maneira eficiente. Exemplos comuns incluem arrays, listas ligadas, pilhas, filas, árvores e grafos.</p>
                <p>As estruturas de dados são fundamentais para a criação de algoritmos eficientes e para o bom desempenho dos programas de computador.</p>
            </div>
        </section>
    </div>

    <script src="scripts.js"></script>
</body>
</html>
