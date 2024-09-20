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
    .buttonpath {
        position: absolute;
        transform: translate(-50%, -50%); 
        width: 120px;
        height: 120px;
        border-radius: 60px; /* Makes the button rounded */
        transition: background-color 0.3s ease; /* Smooth background transition */
        background-color: #66D1FF;
        color: white;
    }
    .buttonpath:hover {
        background-color: #58bbe6;
    }
    .blocked {
        background-color: #9fa0a0; 
    }
    .blocked:hover {
        background-color: #9fa0a0; 

    }
        .button-container {
            position: relative;
            margin-top:8vh;
        }
        /* Position buttons at specific points */
        .button1 { left: 50%; top: 10%; }
        .button2 { left: 30%; top: 40%; }
        .button3 { left: 70%; top: 95%; }
        
        svg {
            width: 100%;
            height: 50%;
        }

        .polyline {
        fill: none;
        stroke: black;
        stroke-width: 0.4;
        stroke-dasharray: 2, 2;
    }

</style>

<body>

<?php require '../componentes/header.php'; ?>

    <?php require '../componentes/sidebar.php'; ?>

    
    <main id="content" class="has-background-white-bis is-flex is-justify-content-center is-align-items-center is-flex-direction-column">
        <div class="content has-text-black-bis" style="min-height: 100vh">
            <section id="bem-vindo" class="section mt-2 pb-2">
                <div class="container">
                    <h1 class="title has-text-info">Bem-vindo ao Quiz</h1>
                    <h3> Aqui você irá testar seus conhecimentos em diferentes <span class="has-text-info">matérias</span>. Responda corretamente e ganhará <span style="color: gold">moedas</span>, podendo comprar roupinhas para seu personagem!</h3>
                </div>
                <div class="button-container">
                    
                    <a href="path1.html" class="button buttonpath button1">TAD</a>
                    <a href="path2.html" class="button buttonpath button2 blocked">Lista Simples</a>
                    <a href="path3.html" class="button buttonpath button3">Lista Dupla</a>
                    <svg viewBox="0 0 300 120" preserveAspectRatio="xMaxyMin">
                        <polyline points="150,15 110,25 85,45 110,90 150,107 200,115" class="polyline" />
                    </svg>
                </div>
                </section>
        </div>
    </main>

    <script src="../scripts.js"></script>

    <?php require '../componentes/footer.php'; ?>
</body>

</html>
