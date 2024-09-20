<?php
session_start();

try {
    // Configurações de conexão
    $dsn = 'mysql:host=localhost;dbname=estruturadados;charset=utf8mb4';
    $username = 'usuario'; // Substitua pelo seu usuário do MySQL
    $password = '0000'; // Substitua pela sua senha do MySQL

    // Cria uma nova conexão PDO
    $conn = new PDO("mysql:host=localhost;dbname=estruturadados", "usuario", "senha");

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Obtém o ID do usuário da sessão
    $userId = $_SESSION['user_id'] ?? 1; // Ajuste conforme necessário

    // Busca informações do usuário
    $stmt = $conn->prepare("SELECT * FROM users WHERE id = :id");
    $stmt->bindParam(':id', $userId, PDO::PARAM_INT);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Se o formulário for enviado, atualiza as informações do usuário
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];

        // Atualiza as informações no banco de dados
        $updateStmt = $conn->prepare("UPDATE users SET name = :name, email = :email WHERE id = :id");
        $updateStmt->bindParam(':name', $name);
        $updateStmt->bindParam(':email', $email);
        $updateStmt->bindParam(':id', $userId, PDO::PARAM_INT);
        $updateStmt->execute();

        // Redireciona para evitar reenvio de formulário
        header("Location: perfil.php");
        exit();
    }
} catch (PDOException $e) {
    die("Erro ao conectar: " . $e->getMessage());
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
                    <div class="control">
                        <button type="submit" class="button is-primary">Salvar Alterações</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
