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
    <title>W4Schools - TAD Exemplo</title>
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
            <h1 class="title has-text-info"> TAD </h1>
            <h2 class="subtitle has-text-black-bis has-text-weight-normal is-size-5"> Exemplo</h2>
            <section class="content p-0" style="max-width: 100vw;">
                <p class="has-text-justified">
                    Vamos fazer uma TAD de um estudante. Primeiro vamos criar uma struct.
                </p>

                <section class="mt-2 is-flex is-justify-content-center">

                    <pre style="min-width: 50vw; height: 40vh;">
<span>public struct Estudante</span>
<span>{</span>
<span>  // Dados do estudante </span>
<span>  public string Nome { get; set; }</span>
<span>  public string Curso { get; set; }</span>
<span>  public int Matricula { get; set; }</span>                  
<span>  // Método construtor</span>
<span>  public Estudante(string nome, int idade, string curso, int matricula)</span>
<span>  {</span>
<span>      this.Nome = nome;</span>
<span>      this.Curso = curso;</span>
<span>      this.Matricula = matricula;</span>
<span>  }</span>
<span>}</span>
                    </pre>
                </section>

                <p class="has-text-justified">
                    Criamos um Estudante com os dados Nome, Curos, Faltas e sua Matricula e seu construct. Vamos crair
                    Operações.
                </p>

                <section class="mt-2 is-flex is-justify-content-center">
                    <pre style="min-width: 50vw; height: 40vh;">
        <?php
        $codigo = <<<EOD
public struct Estudante
{
  // Dados do estudante 
  public string Nome { get; set; }
  public string Curso { get; set; }
  public int Faltas { get; set; }
  public int Matricula { get; set; }                  
  // Método construtor
  public Estudante(string nome, int idade, string curso, int matricula)
  {
      this.Nome = nome;
      this.Curso = curso;
      this.Faltas = 0;
      this.Matricula = matricula;
  }
  // Operações
   public void ExibirInformacoes()
    {
        Console.WriteLine("Nome: {0}", this.Nome);
        Console.WriteLine("Curso: {0}", this.Curso);
        Console.WriteLine("Faltas: {0}", this.Faltas);
        Console.WriteLine("Matrícula: {0}", this.Matricula);
    }

    public bool verificaReprovaPorFalta()
    {
        if(this.Faltas > 30) {
            return true;
        }
        return false;
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
                <section>
                    <p class="has-text-justified">
                        Criamos um método para exibir as informações do estudante e outro para verificar se o estudante
                        reprovou por faltas.
                    </p>


                </section>
                <section class="is-flex is-justify-content-center m-5">

                    <iframe width="560" height="315" src="https://www.youtube.com/embed/akY3Gk86M5w?si=9E7e0e33olffHSyz"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </section>

            </section>
        </section>
        <section class="section is-flex is-justify-content-space-between">

            <a class="is-size-5 has-text-link anterior" href="Struct.php"> Anterior </a>
            <a class="is-size-5 has-text-link proximo" href="../ListaSimples/Lista.php"> Proximo </a>

        </section>
    </main>

    <?php require '../../componentes/footer.php'; ?>
    <script src="scripts.js"></script>
</body>

</html>