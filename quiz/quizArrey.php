<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../EnsinoEstruturaDeDados/css/styleArrey.css">
    <title>Quiz sobre Arrays</title>
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
        .question {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<h1>Quiz sobre Arrays</h1>
<form method="POST" action="resultadoArrey.php">
    <div class="question">
        <p>1. O que é um array?</p>
        <label><input type="radio" name="q1" value="A"> A) Uma coleção desordenada de elementos</label><br>
        <label><input type="radio" name="q1" value="B"> B) Uma coleção ordenada de elementos do mesmo tipo</label><br>
        <label><input type="radio" name="q1" value="C"> C) Um tipo de variável única</label><br>
        <label><input type="radio" name="q1" value="D"> D) Um método de ordenação de dados</label>
    </div>

    <div class="question">
        <p>2. Qual dos seguintes elementos pode ser armazenado em um array?</p>
        <label><input type="radio" name="q2" value="A"> A) Apenas números</label><br>
        <label><input type="radio" name="q2" value="B"> B) Elementos do mesmo tipo</label><br>
        <label><input type="radio" name="q2" value="C"> C) Elementos de tipos diferentes</label><br>
        <label><input type="radio" name="q2" value="D"> D) Nenhuma das alternativas acima</label>
    </div>

    <div class="question">
        <p>3. Qual é a principal característica de um array?</p>
        <label><input type="radio" name="q3" value="A"> A) Os elementos são sempre do tipo string</label><br>
        <label><input type="radio" name="q3" value="B"> B) Os elementos são ordenados</label><br>
        <label><input type="radio" name="q3" value="C"> C) Os arrays não podem ser modificados</label><br>
        <label><input type="radio" name="q3" value="D"> D) Os elementos podem ser de qualquer tamanho</label>
    </div>

    <div class="question">
        <p>4. Como você acessa o primeiro elemento de um array em muitas linguagens de programação?</p>
        <label><input type="radio" name="q4" value="A"> A) array[0]</label><br>
        <label><input type="radio" name="q4" value="B"> B) array[1]</label><br>
        <label><input type="radio" name="q4" value="C"> C) first(array)</label><br>
        <label><input type="radio" name="q4" value="D"> D) array.first()</label>
    </div>

    <div class="question">
        <p>5. Qual é um exemplo de um array que armazena números?</p>
        <label><input type="radio" name="q5" value="A"> A) ["maçã", "banana", "laranja"]</label><br>
        <label><input type="radio" name="q5" value="B"> B) [1, 2, 3, 4, 5]</label><br>
        <label><input type="radio" name="q5" value="C"> C) [1.5, "dois", 3.0]</label><br>
        <label><input type="radio" name="q5" value="D"> D) [null, 0, undefined]</label>
    </div>

    <div class="question">
        <p>6. Qual é um uso comum de arrays na programação?</p>
        <label><input type="radio" name="q6" value="A"> A) Armazenar arquivos em disco</label><br>
        <label><input type="radio" name="q6" value="B"> B) Criar gráficos</label><br>
        <label><input type="radio" name="q6" value="C"> C) Manter uma coleção de dados relacionados</label><br>
        <label><input type="radio" name="q6" value="D"> D) Construir interfaces gráficas</label>
    </div>

    <input type="submit" value="Enviar Respostas">
</form>

</body>
</html>