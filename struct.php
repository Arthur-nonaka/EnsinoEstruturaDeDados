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
    <title>W4School - Estrutura</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css"> -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="navbar">
        <section class="navbar-end">
            <section class="navbar-item">
                <?php
                echo $_SESSION['user'];
                ?>
            </section>
            <section class="navbar-item">
                <form method="POST" action="./funcoes/sair.php">
                    <button type="submit" name="sair" class="button m-2">
                        Sair
                    </button>
                </form>
            </section>
        </section>
    </header>
    <main class="has-background-white-bis has-text-black-bis">
        <section class="section">
            <h1 class="title has-text-info"> Struct </h1>
            <!-- <h2 class="subtitle has-text-black-bis"> Tipo Abstrato de Dado </h2> -->
            <section class="content has-text-justified " style="max-width: 100vw;">
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
    </pre>
            </section>
        </section>
        <section class="section is-flex is-justify-content-space-between">

            <a class="is-size-5 has-text-link anterior" href="TAD.php"> Anterior </a>
            <a class="is-size-5 has-text-link proximo" href="exemploTAD.php"> Proximo </a>

        </section>
    </main>

    <footer>
        <div class="content has-text-centered">
            <p>W4School - 2024</p>
        </div>
</body>

</html>