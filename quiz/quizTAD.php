<?php
    session_start();
    require_once "../funcoes/Controller/Controller.php";
    $controller = new Controller();

    $userItems = $controller->getUserItems($_SESSION['id'])->fetch_all();


    foreach($userItems as $item) {
        if ($item[3]) {
            if($item[5] === 'money') {
                $money = $item[6];
            }else if($item[5] === 'tip') {
                $tip = $item[6];
            }else if($item[5] === 'change') {
                $change = $item[6];
            }
        }
    }

    $questions = $controller->getQuestions(1);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <title>Quiz sobre TADs</title>
</head>
<body>

<section class="section">
    <div class="container">
        <h1 class="title has-text-centered">Quiz TAD</h1>
        <div>
            Dicas: <span id="tip"><?php echo $tip; ?></span>
            Resposta Correta: <span id="change"><?php echo $change; ?></span>
        </div>
        <form method="POST" action="resultado.php">
            <?php
            echo "<input type='hidden' name='money' value='$money'>";
                
                foreach($questions as $index => $question) {
                    echo "<input type='hidden' name='correct_q$index' value='". $question->getCorrectAnswer(). "'>";        
                    echo "<input type='hidden' name='aula' value='1'>";        
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
                    echo "<button type='button' class='button is-info show-answer-button' onclick='showCorrectAnswer(`".$question->getCorrectAnswer(). "`)'>Mostrar Resposta Correta</button>";
                    echo "<button type='button' class='button is-info show-tip-button ml-2' onclick='showTip(`".$question->getTip(). "`)'>Dica</button>";
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

<script defer>
        const changeElement = document.getElementById('change');
        changeValue = parseInt(changeElement.innerText);
        function showCorrectAnswer(correctAnswer) {
            alert('A resposta correta é: ' + correctAnswer);
            updateChange();
        }

        function updateChange() {
            if (changeValue > 0) {
                changeValue -= 1;
                changeElement.innerText = changeValue;
                disableButtonsIfNoChange();
            }
        }
        
        function disableButtonsIfNoChange() {
            const changeValue = parseInt(document.getElementById('change').innerText);
            if (changeValue === 0) {
                const buttons = document.querySelectorAll('.show-answer-button');
                buttons.forEach(button => {
                    button.disabled = true;
                });
            }
        }

        disableButtonsIfNoChange();

        const tipElement = document.getElementById('tip');
        tipValue = parseInt(tipElement.innerText);
        function showTip(tip) {
            alert('A dica é: ' + tip);
            updateTip();
        }

        function updateTip() {
            if (tipalue > 0) {
                tipValue -= 1;
                tipElement.innerText = tipValue;
                disableButtonsIfNoTip();
            }
        }
        
        function disableButtonsIfNoTip() {
            const tipValue = parseInt(document.getElementById('tip').innerText);
            if (tipValue === 0) {
                const buttons = document.querySelectorAll('.show-tip-button');
                buttons.forEach(button => {
                    button.disabled = true;
                });
            }
        }

        disableButtonsIfNoTip();
    </script>

</body>
</html>