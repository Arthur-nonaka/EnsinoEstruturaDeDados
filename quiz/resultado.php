<?php
    session_start();
    require_once "../funcoes/Controller/Controller.php";
    $controller = new Controller();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <title>Resultado do Quiz</title>
</head>
<body>

<section class="section">
    <div class="container">
        <h1 class="title has-text-centered">Resultado do Quiz</h1>

        <?php
        $money = 0;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $correctAnswers = 0;
            $totalQuestions = 0;

            // Loop through POST data to check answers
            foreach ($_POST as $key => $value) {
                if (strpos($key, 'q') === 0 && isset($_POST["correct_$key"])) {
                    $totalQuestions++;
                    if ($value === $_POST["correct_$key"]) {
                        $correctAnswers++;
                    }
                }
            }

            $money = ($correctAnswers * 10) * (($_POST['money']/100) + 1);

            echo "<div class='notification is-primary has-text-centered' style='background-color: #66D1FF'>Você acertou $correctAnswers de $totalQuestions perguntas, ganhou " . $money . " moedas!</div>";
            echo "<div class='notification is-primary has-text-centered' style='background-color: #66D1FF'>";
            if ($correctAnswers === $totalQuestions) {
                echo "Parabéns! Você é um expert! Liberou a próxima aula.";
            } elseif ($correctAnswers >= $totalQuestions * 0.67) {
                echo "Bom trabalho! Você tem um bom conhecimento.";
            } else {
                echo "Continue estudando! Você pode melhorar.";
            }
            echo "</div>";
        } else {
            echo "<div class='notification is-danger has-text-centered' style='background-color: #66D1FF'>Nenhuma resposta foi enviada.</div>";
        }
        ?>
        <div class="has-text-centered">
            <a href="./index.php" class="button is-link" style="background-color: #58bbe6">Voltar para a Página Principal</a>
        </div>
    </div>
</section>

</body>
</html>

<?php
    $controller->gainMoney($money, $_SESSION['id']);
    if($correctAnswers === $totalQuestions) {
        $controller->completeClass($_SESSION['id'], $_POST['aula']);
    }
?>