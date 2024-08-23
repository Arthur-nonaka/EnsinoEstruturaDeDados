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
    <title>W4Schools - Estrutura</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css"> -->
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<?php require '../../componentes/header.php'; ?>


    <div id="sidebar" class="sidebar has-background-black-bis">
        <div class="sidebar-menu">
            <a href="home.php" class="sidebar-item">Página Principal</a>
            <a href="TAD.php" class="sidebar-item">TAD</a>
            <a href="interface.php" class="sidebar-subitem">Interface</a>
            <a href="struct.php" class="sidebar-subitem">Struct</a>
            <a href="exemploTAD.php" class="sidebar-subitem">Exemplo</a>
            <a href="listaEncadeada.php" class="sidebar-item">Lista</a>
            <a href="operacoesEncadeadas.php" class="sidebar-subitem">Operações</a>
            <a href="exemploListaEncadeada.php" class="sidebar-subitem">Exemplo</a>
            <a href="listaDuplamenteEncadeada.php" class="sidebar-item">Lista Duplamente Encadeada</a>
            <a href="exemploListaDuplamenteEncadeada.php" class="sidebar-subitem">Exemplo</a>
        </div>
    </div>

    <main class="has-background-white-bis has-text-black-bis">
        <section id="content" class="content">
            <h1 class="title has-text-info"> Struct </h1>
            <!-- <h2 class="subtitle has-text-black-bis"> Tipo Abstrato de Dado </h2> -->
            <section class="content p-0 has-text-justified " style="max-width: 100vw;">
                <p>
                    Uma struct é um tipo de dado composto em muitas linguagens de programação,
                    incluindo C, C++, C# e outras. Ela permite agrupar variáveis de tipos diferentes sob um mesmo nome,
                    o que pode ser útil para organizar dados relacionados.
                </p>
                <p>
                    Muito útil para aquelas situações nas quais precisamos de poucas variáveis, pois os
                    objetos criados com base em structs são mais leves e por ser do tipo de valor não trabalham com
                    referências.
                </p>
                <p>
                    Por exemplo, você pode usar uma struct para representar um ponto em um espaço tridimensional, que
                    tem coordenadas x, y e z. Em vez de ter três variáveis separadas para cada coordenada, você pode
                    agrupá-las em uma struct.
                </p>


                Por exemplo, uma struct pode ser definida assim:

            </section>
            <section class="mt-2 is-flex is-justify-content-center">
                <pre style="min-width: 50vw; height: 40vh;">
        <?php
        $codigo = <<<EOD
public struct Ponto
{
    public int X { get; set; }
    public int Y { get; set; }

    public Ponto(int x, int y)
    {
        X = x;
        Y = y;
    }

    public void Imprimir()
    {
        Console.WriteLine($"Ponto: ({X}, {Y})");
    }
}

class Program
{
    static void Main(string[] args)
    {
        Ponto p = new Ponto(10, 20);
        p.Imprimir();  // Saída: Ponto: (10, 20)
    }
}
EOD;

        $linhas = explode("\n", $codigo);
        foreach ($linhas as $linha) {
            echo "<span>$linha</span>\n";
        }
        ?>
    </pre>
            </section>
        </section>
        <section class="section is-flex is-justify-content-space-between">

            <a class="is-size-5 has-text-link anterior" href="Interface.php"> Anterior </a>
            <a class="is-size-5 has-text-link proximo" href="Exemplo.php"> Proximo </a>

        </section>
    </main>

    <?php require '../../componentes/footer.php'; ?>
    <script src="scripts.js"></script>
</body>

</html>