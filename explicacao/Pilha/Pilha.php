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
    <title>W4Schools - Pilha</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css"> -->
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<?php require '../../componentes/header.php'; ?>

    <?php require '../../componentes/sidebar.php';?>

    <main class="has-background-white-bis has-text-black-bis">
        <section id="content" class="content">
            <h1 class="title has-text-info"> Pilha Encadeada </h1>
            <section class="content p-0" style="max-width: 100vw;">
                <p class="has-text-justified">
                Uma pilha é uma estrutura de dados linear onde as operações de inserção (push) e remoção 
                (pop) são realizadas apenas no topo da pilha. Imagine uma pilha de pratos: você coloca um 
                prato por cima e, ao retirar, sempre pega o prato que está no topo.
                </p>
                <p class="subtitle has-text-black-bis has-text-weight-normal is-size-5">
                    Por que usar uma Pilha Encadeada?
                
                    <li>
                    Alocação Dinâmica de Memória: Não é necessário definir um tamanho fixo para a pilha, 
                    como acontece com a implementação baseada em arrays.
                    </li>
                    <li>
                    Eficiência nas Operações: As operações de inserção e remoção têm complexidade constante O(1).
                    </li>
                    <li>
                    Flexibilidade: Facilita a implementação de estruturas de dados mais complexas, como árvores e grafos.
                    </li>
                </p>
                <p class="has-text-black-bis has-text-weight-normal is-size-5ied">
                    implementação em C#
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
    <script src="scripts.js"></script>
</body>

</html>