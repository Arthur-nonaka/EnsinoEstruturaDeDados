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
    <title>W4Schools - TAD</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css"> -->
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<?php require '../../componentes/header.php'; ?>

    <?php require '../../componentes/sidebar.php';?>

    <main class="has-background-white-bis has-text-black-bis">
        <section id="content" class="content">
            <h1 class="title has-text-info"> TAD </h1>
            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"> Tipo Abstrato de Dado </h2>
            <section class="content p-0" style="max-width: 100vw;">
                <p class="has-text-justified">
                    Um Tipo Abstrato de Dados (TAD) é um conceito na programação que permite definir e implementar novos
                    tipos de dados, bem como as operações que podem ser realizadas nesses dados. Ele é uma abstração que
                    encapsula os dados e as operações em uma única unidade.

                </p>
                <p class="has-text-justified">
                    Vamos entender cada parte de um TAD:

                <ol>
                    <li>
                        Dados Armazenados: Esta parte define os tipos de dados que serão armazenados e manipulados pelo
                        TAD. Isso pode incluir variáveis, vetores, estruturas, ou qualquer outra forma de armazenamento
                        de dados. Por exemplo, em um TAD para representar uma lista encadeada, os dados armazenados
                        podem ser os nós da lista.
                    </li>
                    <li>
                        Funções que Manipulam os Dados: Esta parte consiste nas operações que podem ser realizadas nos
                        dados armazenados. Essas operações são implementadas como funções, métodos ou procedimentos que
                        atuam nos dados do TAD. Por exemplo, para uma lista encadeada, as operações podem incluir
                        inserção de um novo elemento, remoção de um elemento existente, e assim por diante.
                    </li>
                </ol>
                </p>
                <p class="has-text-justified">
                    A ideia fundamental por trás de um TAD é a encapsulação. Isso significa que os detalhes internos de
                    como os dados são armazenados e manipulados são ocultos do usuário do TAD. O usuário só pode
                    interagir com os dados por meio das operações definidas no TAD.

                </p>
                <p class="has-text-justified">
                    Por exemplo, considere um TAD para uma pilha. O usuário pode empilhar um novo elemento, desempilhar
                    um elemento existente ou verificar se a pilha está vazia. No entanto, o usuário não precisa saber
                    como os elementos são armazenados na pilha ou como as operações são implementadas internamente.
                    Esses detalhes são encapsulados dentro do TAD.
                </p>
            </section>
        </section>
        <section class="section is-flex is-justify-content-end">

            <a class="is-size-5 has-text-link proximo" href="interface.php"> Proximo </a>

        </section>
    </main>

    <?php require '../../componentes/footer.php'; ?>
    <script src="../../scripts.js"></script>
</body>

</html>