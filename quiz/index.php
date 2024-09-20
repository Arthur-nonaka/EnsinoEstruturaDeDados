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
    <title>W4Schools - Quiz</title>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
    .button {
        position: absolute;
    }
        .button-container {
            position: relative;
        }
        /* Position buttons at specific points */
        .button1 { left: 10%; top: 90%; }
        .button2 { left: 40%; top: 60%; }
        .button3 { left: 70%; top: 30%; }
        svg {
            width: 100%;
            height: 200px;
            margin-top: 20px;
        }

</style>

<body>

<?php require '../componentes/header.php'; ?>

    <?php require '../componentes/sidebar.php'; ?>

    
    <main id="content" class="has-background-white-bis is-flex is-justify-content-center is-align-items-center is-flex-direction-column">
        <div class="content has-text-black-bis" style="height: 100vh">
            <section id="bem-vindo" class="section mt-2 pb-2">
                <div class="container">
                    <h1 class="title has-text-info">Bem-vindo ao Quiz</h1>
                    <h3> Aqui você irá testar seus conhecimentos em diferentes <span class="has-text-info">matérias</span>. Responda corretamente e ganhará <span style="color: gold">moedas</span>, podendo comprar roupinhas para seu personagem!</h3>
                </div>
                    <div class="button-container">
                        <a href="path1.html" class="button button1">Button 1</a>
                        <a href="path2.html" class="button button2">Button 2</a>
                        <a href="path3.html" class="button button3">Button 3</a>
                        
                        <svg>
                            <polyline points="0,100 50,60 100,80 150,30 200,70 250,20 300,90 350,50 400,100"
                            style="fill:none;stroke:black;stroke-width:2;stroke-dasharray:5,5" />
                        </svg>
                    </div>
                </section>
        </div>
    </main>

    <script src="../scripts.js"></script>

    <?php require '../componentes/footer.php'; ?>
</body>

</html>
