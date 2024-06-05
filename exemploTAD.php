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
    <title>W4School - TAD Exeemplo</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css"> -->
    <link rel="stylesheet" href="style.css">
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
    <main class="has-background-white-bis has-text-black-bis">
        <section class="section">
            <h1 class="title has-text-info"> TAD </h1>
            <h2 class="subtitle has-text-black-bis"> Tipo Abstrato de Dado </h2>
            <section class="content" style="max-width: 60vw;">
                <p class="has-text-justified">
                    É um código que define e implementa um novo tipo de informação ou um novo tipo de objeto utilizado
                    na linguagem de programação orientada a objetos. É importante notar que qualquer processamento
                    realizado só deve atuar sobre os dados encapsulados em um TAD.
                </p>
                <p class="has-text-justified">
                    Um TAD possui duas partes principais:
                <ol>
                    <li>
                        Dados armazenados: Estes podem ser armazenados em variáveis, vetores, ponteiros, etc.
                    </li>
                    <li>
                        Funções que manipulam os dados: Estas implementam procedimentos por meio de subprogramas
                        denominados operações, métodos ou serviços.
                    </li>
                </ol>
                </p>
            </section>
        </section>
        <section class="section is-flex is-justify-content-space-between">

            <a class="is-size-5 has-text-link anterior" href="struct.php"> Anterior </a>
            <a class="is-size-5 has-text-link proximo" href="#"> Proximo </a>

        </section>
    </main>

    <footer>
        <div class="content has-text-centered">
            <p>W4School - 2024</p>
        </div>
</body>

</html>