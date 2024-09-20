<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Quiz</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f9f9f9;
        }
        h1 {
            color: #333;
        }
        .result {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h1>Resultado do Quiz</h1>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correctAnswers = 0;

    // Verificação das respostas
    if (isset($_POST['q1']) && $_POST['q1'] === 'B') $correctAnswers++;
    if (isset($_POST['q2']) && $_POST['q2'] === 'B') $correctAnswers++;
    if (isset($_POST['q3']) && $_POST['q3'] === 'B') $correctAnswers++;
    if (isset($_POST['q4']) && $_POST['q4'] === 'A') $correctAnswers++;
    if (isset($_POST['q5']) && $_POST['q5'] === 'B') $correctAnswers++;
    if (isset($_POST['q6']) && $_POST['q6'] === 'C') $correctAnswers++;

    echo "<div class='result'>Você acertou $correctAnswers de 6 perguntas.</div>";
    echo "<div class='result'>";
    if ($correctAnswers === 6) {
        echo "Parabéns! Você é um expert em arrays!";
    } elseif ($correctAnswers >= 4) {
        echo "Bom trabalho! Você tem um bom conhecimento sobre arrays.";
    } else {
        echo "Continue estudando! Você pode melhorar.";
    }
    echo "</div>";
} else {
    echo "<div class='result'>Nenhuma resposta foi enviada.</div>";
}
?>

</body>
</html>