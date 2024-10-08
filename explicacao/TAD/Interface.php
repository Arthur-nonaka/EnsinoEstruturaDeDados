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
    <title>W4Schools - Interface</title>
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
            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"> Interface </h2>
            <section class="content p-0" style="max-width: 100vw;">
                <p class="has-text-justified">
                    A interface de um TAD define um conjunto de operações que podem ser realizadas sobre os dados. Essas
                    operações são as únicas maneiras pelas quais os usuários do TAD podem interagir com os dados
                    encapsulados. A interface abstrai a complexidade da implementação, permitindo que o TAD seja usado
                    de maneira simples e intuitiva.

                </p>
                <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5">
                    Interações Cliente/Interface
                </h2>
                <p class="has-text-justified">
                    As interações entre o cliente e a interface do TAD ocorrem quando o cliente (um programa ou parte de
                    um programa) chama as operações definidas na interface do TAD. Essas operações podem incluir a
                    criação de uma nova instância do TAD, a modificação dos dados encapsulados, a consulta de
                    informações sobre os dados, entre outras.
                </p>
                <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5">
                    Vantagens
                </h2>
                <p class="has-text-justified">
                    A interface de um TAD oferece várias vantagens, incluindo:
                <ul>
                    <li>Abstração: A interface abstrai os detalhes da implementação do TAD, permitindo que os usuários
                        interajam com os dados de forma simples e intuitiva.</li>
                    <li>Encapsulamento: A interface define um limite claro entre os dados e as operações que podem ser
                        realizadas sobre eles, protegendo os dados de modificações não autorizadas.</li>
                    <li>Reusabilidade: A interface permite que o TAD seja reutilizado em diferentes contextos, sem a
                        necessidade de modificar a implementação subjacente.</li>
                </ul>
            </section>
        </section>
        <section class="section is-flex is-justify-content-space-between">
            <a class="is-size-5 has-text-link anterior" href="TAD.php"> Anterior </a>
            <a class="is-size-5 has-text-link proximo" href="struct.php"> Proximo </a>

        </section>
    </main>

    <?php require '../../componentes/footer.php'; ?>
    <script src="../../scripts.js"></script>
</body>

</html>