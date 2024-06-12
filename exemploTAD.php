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
    <title>W4School - TAD Exemplo</title>
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
            <h1 class="title has-text-info"> TAD </h1>
            <h2 class="subtitle has-text-black-bis"> Exemplo</h2>
            <section class="content"style="max-width: 100vw;">
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
                Criamos um Estudante com os dados Nome, Curos, Faltas e sua Matricula e seu construct. Vamos crair Operações.
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
                
            </section>
        </section>
        <section class="section is-flex is-justify-content-space-between">

            <a class="is-size-5 has-text-link anterior" href="struct.php"> Anterior </a>
            <a class="is-size-5 has-text-link proximo" href="#"> Proximo </a>

        </section>
    </main>

    <footer class="p-2 has-background-link-light">
        <section class="m-2 p-2">
            <section>
                <h3 class="subtitle is-size-5">
                    Desenvolvdores:
                </h3>
                <section class="is-flex is-flex-direction-column">
                    <p>Arthur Nonaka Oda</p>
                    <p>Joao Luiz Souza Pereira</p>
                    <p>Gustavo Henrique Bispo Costa</p>
                    <p>Joao Pedro de Souza Cisilo </p>
                </section>
            </section>
        </section>
        <div class="content has-text-centered">
            <p>W4School - 2024</p>
    </div>
    </footer>
</body>

</html>