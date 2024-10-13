<?php
session_start();

try {
    // Configurações de conexão
    $dsn = 'mysql:host=localhost;dbname=estruturadados;charset=utf8mb4';
    $username = 'root'; // Substitua pelo seu usuário do MySQL
    $password = ''; // Substitua pela sua senha do MySQL

    // Cria uma nova conexão PDO
    try {
        $conn = new PDO("mysql:host=localhost;dbname=estruturadados", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Erro ao conectar: " . $e->getMessage();
    }

    // Obtém o ID do usuário da sessão
    $userId = $_SESSION['id'] ?? 1;

    // Busca informações do usuário
    $stmt = $conn->prepare("SELECT * FROM users WHERE id = :id");
    $stmt->bindParam(':id', $userId, PDO::PARAM_INT);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Se o formulário for enviado, atualiza as informações do usuário
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $newPassword = $_POST['password'];

        // Verifica se a senha foi fornecida e a atualiza
        if (!empty($newPassword)) {
            $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
            
            // Atualiza o nome e a senha no banco de dados
            $updateStmt = $conn->prepare("UPDATE users SET name = :name, password = :password WHERE id = :id");
            $updateStmt->bindParam(':name', $name);
            $updateStmt->bindParam(':password', $hashedPassword);
            $updateStmt->bindParam(':id', $userId, PDO::PARAM_INT);
            $updateStmt->execute();
            
            // Redireciona para evitar reenvio de formulário
            header("Location: perfil.php");
            exit();
        }
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
                <div class="field">
                    <label class="label" for="password">Nova Senha</label>
                    <div class="control">
                        <input class="input" type="password" id="password" name="password" placeholder="Deixe em branco para manter a senha atual">
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <button type="submit" class="button is-info">Salvar Alterações</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
