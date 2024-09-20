<?php
session_start();

// Conexão com o banco de dados
$servername = "localhost";
$username = "host"; // Coloque seu usuário
$password = ""; // Coloque sua senha
$dbname = "estruturadados";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

echo "Conexão bem-sucedida!";
$conn->close();

// Obtém o ID do usuário da sessão (ou ajuste conforme sua lógica)
$userId = $_SESSION['user_id'] ?? 1; // Exemplo: ID do usuário logado

// Busca informações do usuário
$sql = "SELECT * FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

// Se o formulário for enviado, atualiza as informações do usuário
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $bio = $_POST['bio']; // Se você quiser adicionar um campo bio

    // Atualiza as informações no banco de dados
    $updateSql = "UPDATE users SET name = ?, email = ? WHERE id = ?";
    $updateStmt = $conn->prepare($updateSql);
    $updateStmt->bind_param("ssi", $name, $email, $userId);
    $updateStmt->execute();

    // Redireciona para evitar reenvio de formulário
    header("Location: perfil.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <title>Perfil de <?php echo htmlspecialchars($user['name']); ?></title>
</head>
<body>
    <div class="container">
        <h1 class="title">Perfil de <?php echo htmlspecialchars($user['name']); ?></h1>
        
        <div class="box">
            <h2 class="subtitle">Informações do Usuário</h2>
            <p><strong>Nome:</strong> <?php echo htmlspecialchars($user['name']); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
            <p><strong>Coins:</strong> <?php echo htmlspecialchars($user['coins']); ?></p>
        </div>

        <div class="box">
            <h2 class="subtitle">Editar Informações</h2>
            <form method="POST" action="">
                <div class="field">
                    <label class="label" for="name">Nome</label>
                    <div class="control">
                        <input class="input" type="text" id="name" name="name" value="<?php echo htmlspecialchars($user['name']); ?>" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="email">Email</label>
                    <div class="control">
                        <input class="input" type="email" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="bio">Biografia</label>
                    <div class="control">
                        <textarea class="textarea" id="bio" name="bio" rows="5"><?php // Adicione o campo bio se necessário ?></textarea>
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <button type="submit" class="button is-primary">Salvar Alterações</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

<?php
$conn->close();
?>
