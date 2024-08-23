<?php
    $home = $home ?? false;
    if($home == true) {
        $link = "./home.php";
    }
    else {
        $link = "../../home.php";
    }

?>

<link rel="stylesheet" href="sidebar.css">

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