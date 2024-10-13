<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: ./");
    die();
}
require_once "../funcoes/Controller/Controller.php";

$controller = new Controller();
$user = $controller->readUser($_SESSION['id']);
$items = $controller->getItems();
$userItems = $controller->getUserItems($_SESSION['id'])->fetch_all();

$equippedItems = [
    'head' => null,
    'torso' => null,
    'legs' => null
];

foreach($userItems as $item) {
    if ($item[3]) {
        $equippedItems[$item[4]] = $item;
    }
}

$userItemIds = [];
foreach($userItems as $item) {
    $userItemIds[] = $item[0];
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <style>
        .card-image img {
            width: 128px;
            height: 128px;
            object-fit: cover;
        }
        .card-content {
            padding: 0.5rem;
        }
        .card {
            width: 150px;
            margin: 0.5rem;
        }
        .character {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .character img {
            width: 254px;
            height: 254px;
        }
        .character .head {
            margin-bottom: -260px;
            z-index: 1; /* Adjust this value to bring the head closer to the torso */
        }
        .character .torso {
            margin-bottom: -260px; /* Adjust this value to bring the torso closer to the legs */
        }
        .modal {
            display: none;
        }
        .modal.is-active {
            display: block;
        }
    </style>
    <title>Comprar Roupas</title>
</head>
<body>
    <div class="container">
        <h1 class="title"> <a href="../home.php"> Voltar</a> Comprar Roupas - <?php Echo $user->getCoins()?> 🪙</h1>
        
        <div class="box">
            <h2 class="subtitle">Seu Personagem</h2>
            <div class="character">
                <div class="head">
                    <img src="<?php echo $equippedItems['head'][2] ?>" alt="Cabeça">
                    <button class="button is-info is-small" style="margin-top: 50px" onclick="openModal('head')">Cabeça</button>
                </div>
                <div class="torso">
                    <img src="<?php echo $equippedItems['torso'][2] ?>" alt="Tronco">
                    <button class="button is-info is-small" style="margin-top: 125px; z-index:1;" onclick="openModal('torso')">Tronco</button>
                </div>
                <div class="legs">
                    <img src="<?php echo $equippedItems['legs'][2] ?>" alt="Pernas">
                    <button class="button is-info is-small" style="margin-top: 200px; z-index:1;" onclick="openModal('legs')">Pernas</button>
                </div>
            </div>
        </div>

        <div class="box">
            <h2 class="subtitle">Suas Roupas</h2>
            <div class="columns is-multiline">
                <?php foreach ($userItems as $item): ?>
                    <div class="column is-narrow">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image">
                                    <img src="<?php echo $item['2']; ?>" alt="<?php echo $item['1']; ?>">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <p class="title is-6"><?php echo $item['1']; ?></p>
                                        <p class="subtitle is-7"><?php echo $item['3'] ? 'Equipado' : '<form method="POST" action="../funcoes/Process/Process.php">
                                        <input type="hidden" name="action" value="equipItem">
                                        <input type="hidden" name="userId" value="'.$_SESSION['id'].'">
                                        <input type="hidden" name="itemId" value="'.$item['0'].'">
                                        <button type="submit" class="button is-success is-small">Equipar</button>
                                    </form>'; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div id="modal-head" class="modal">
        <div class="modal-background"></div>
        <div class="modal-content">
            <div class="box">
                <h2 class="subtitle">Comprar Cabeças</h2>
                <div class="columns is-multiline">
                    <?php foreach ($items as $item): ?>
                        <?php if ($item['type'] === 'head' && !in_array($item['id'], $userItemIds)): ?>
                        <div class="column is-narrow">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image is-128x128">
                                        <img src="<?php echo $item['path']; ?>" alt="<?php echo $item['name']; ?>">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-content">
                                            <p class="title is-6"><?php echo $item['name']; ?></p>
                                            <p class="subtitle is-7"><?php echo $item['price']; ?> 🪙</p>
                                        </div>
                                    </div>
                                    <form method="POST" action="../funcoes/Process/Process.php">
                                        <input type="hidden" name="action" value="buyItem">
                                        <input type="hidden" name="userId" value="<?php echo $_SESSION['id']; ?>">
                                        <input type="hidden" name="itemId" value="<?php echo $item['id']; ?>">
                                        <input type="hidden" name="itemPrice" value="<?php echo $item['price']; ?>">
                                        <button type="submit" class="button is-info is-small">Comprar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <button class="modal-close is-large" aria-label="close" onclick="closeModal('head')"></button>
    </div>

    <div id="modal-torso" class="modal">
        <div class="modal-background"></div>
        <div class="modal-content">
            <div class="box">
                <h2 class="subtitle">Comprar Troncos</h2>
                <div class="columns is-multiline">
                    <?php foreach ($items as $item): ?>
                        <?php if ($item['type'] === 'torso' && !in_array($item['id'], $userItemIds)): ?>
                        <div class="column is-narrow">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image is-128x128">
                                        <img src="<?php echo $item['path']; ?>" alt="<?php echo htmlspecialchars($item['name']); ?>">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-content">
                                            <p class="title is-6"><?php echo $item['name']; ?></p>
                                            <p class="subtitle is-7"><?php echo $item['price']; ?> 🪙</p>
                                        </div>
                                    </div>
                                    <form method="POST" action="../funcoes/Process/Process.php">
                                        <input type="hidden" name="action" value="buyItem">
                                        <input type="hidden" name="userId" value="<?php echo $_SESSION['id']; ?>">
                                        <input type="hidden" name="itemId" value="<?php echo $item['id']; ?>">
                                        <input type="hidden" name="itemPrice" value="<?php echo $item['price']; ?>">
                                        <button type="submit" class="button is-info is-small">Comprar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <button class="modal-close is-large" aria-label="close" onclick="closeModal('torso')"></button>
    </div>

    <div id="modal-legs" class="modal">
        <div class="modal-background"></div>
        <div class="modal-content">
            <div class="box">
                <h2 class="subtitle">Comprar Pernas</h2>
                <div class="columns is-multiline">
                    <?php foreach ($items as $item): ?>
                        <?php if ($item['type'] === 'legs' && !in_array($item['id'], $userItemIds)): ?>
                        <div class="column is-narrow">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image is-128x128">
                                        <img src="<?php echo $item['path']; ?>" alt="<?php echo $item['name']; ?>">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-content">
                                            <p class="title is-6"><?php echo $item['name']; ?></p>
                                            <p class="subtitle is-7"><?php echo $item['price']; ?> 🪙</p>
                                        </div>
                                    </div>
                                    <form method="POST" action="../funcoes/Process/Process.php">
                                        <input type="hidden" name="action" value="buyItem">
                                        <input type="hidden" name="userId" value="<?php echo $_SESSION['id']; ?>">
                                        <input type="hidden" name="itemId" value="<?php echo $item['id']; ?>">
                                        <input type="hidden" name="itemPrice" value="<?php echo $item['price']; ?>">
                                        <button type="submit" class="button is-info is-small">Comprar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <button class="modal-close is-large" aria-label="close" onclick="closeModal('legs')"></button>
    </div>

    <script>
        function openModal(part) {
            document.getElementById('modal-' + part).classList.add('is-active');
        }

        function closeModal(part) {
            document.getElementById('modal-' + part).classList.remove('is-active');
        }
    </script>
</body>
</html>