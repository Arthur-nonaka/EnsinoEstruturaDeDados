<?php
    require_once "../funcoes/Controller/Controller.php";
    $controller = new Controller();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <title>Quiz sobre Fila Prioridade</title>
</head>
<body>

<section class="section">
    <div class="container">
        <h1 class="title has-text-centered">Quiz Fila Prioridade</h1>
        <form method="POST" action="resultado.php">
            <?php
                $questions = $controller->getQuestions(5);
                
                foreach($questions as $index => $question) {
                    echo "<input type='hidden' name='correct_q$index' value='". $question->getCorrectAnswer(). "'>";        
                    echo "<input type='hidden' name='aula' value='5'>";        
                    echo "<div class='box'>";
                    echo "<p class='subtitle'>".$question->getQuestion()."</p>";
                    echo "<div class='field'>";
                    echo "<label class='radio'><input type='radio' name='q$index' value='A'> A) ".$question->getOptionA()."</label>";
                    echo "</div>";
                    echo "<div class='field'>";
                    echo "<label class='radio'><input type='radio' name='q$index' value='B'> B) ".$question->getOptionB()."</label>";
                    echo "</div>";
                    echo "<div class='field'>";
                    echo "<label class='radio'><input type='radio' name='q$index' value='C'> C) ".$question->getOptionC()."</label>";
                    echo "</div>";
                    echo "<div class='field'>";
                    echo "<label class='radio'><input type='radio' name='q$index' value='D'> D) ".$question->getOptionD()."</label>";
                    echo "</div>";
                    echo "</div>";
                }
            ?>
            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-primary is-fullwidth" style="background-color: #58bbe6">Enviar Respostas</button>
                </div>
            </div>
        </form>
    </div>
</section>

</body>
</html>