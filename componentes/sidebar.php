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
        <a href="/ensinoestruturadedados/home.php" class="sidebar-item">Página Principal</a>
        <a href="/ensinoestruturadedados/explicacao/TAD/TAD.php" class="sidebar-item">TAD</a>
        <a href="/ensinoestruturadedados/explicacao/TAD/interface.php" class="sidebar-subitem">Interface</a>
        <a href="/ensinoestruturadedados/explicacao/TAD/struct.php" class="sidebar-subitem">Struct</a>
        <a href="/ensinoestruturadedados/explicacao/TAD/exemplo.php" class="sidebar-subitem">Exemplo</a>
        <a href="/ensinoestruturadedados/explicacao/ListaSimples/Lista.php" class="sidebar-item">Lista</a>
        <a href="/ensinoestruturadedados/explicacao/ListaSimples/Operacoes.php" class="sidebar-subitem">Operações</a>
        <a href="/ensinoestruturadedados/explicacao/ListaSimples/Exemplo.php" class="sidebar-subitem">Exemplo</a>
        <a href="/ensinoestruturadedados/explicacao/ListaDupla/Lista.php" class="sidebar-item">Lista Duplamente Encadeada</a>
        <a href="/ensinoestruturadedados/explicacao/ListaDupla/Operacoes.php" class="sidebar-subitem">Operações</a>
        <a href="/ensinoestruturadedados/explicacao/ListaDupla/Exemplo.php" class="sidebar-subitem">Exemplo</a>
        <a href="/ensinoestruturadedados/explicacao/Pilha/Pilha.php" class="sidebar-item">Pilhas</a>
    </div>
</div>