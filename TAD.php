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
    <title>W4School - TAD</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css">
</head>

<body>
    <header class="navbar">
        <section class="navbar-end">
            <section class="navbar-item">
                <?php
                echo $_SESSION['user'];
                ?>
            </section>
            <section class="navbar-item">
                <form method="POST" action="./funcoes/sair.php">
                    <button type="submit" name="sair" class="button m-2">
                        Sair
                    </button>
                </form>
            </section>
        </section>
    </header>
    <main class="section">
        <section class="section">
            <h1 class="title has-text-info"> TAD </h1>
            <h2 class="subtitle"> Tipo Abstrato de Dado </h2>
        </section>
        <section class="section">
            <!-- <p class="has-text-justified is-size-3">
            é uma
            especificação de um conjunto de dados e operações
            que podem ser executadas sobre esses dados.
            </p> -->
        </section>
    </main>

    <footer>
        <div class="content has-text-centered">
            <p>W4School - 2024</p>
        </div>
</body>

</html>