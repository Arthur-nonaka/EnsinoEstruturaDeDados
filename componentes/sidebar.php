
<link rel="stylesheet" href="sidebar.css">

<div id="sidebar" class="sidebar">
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
        <a href="/ensinoestruturadedados/explicacao/Pilha/Pilha.php" class="sidebar-item">Pilha</a>
        <a href="/ensinoestruturadedados/explicacao/Pilha/Operacoes.php" class="sidebar-subitem">Operações</a>
        <a href="/ensinoestruturadedados/explicacao/Pilha/Exemplo.php" class="sidebar-subitem">Exemplo</a>
    </div>
</div>

<style>

.sidebar {
  width: 250px;
  background-color: #4a4a4a;
  color: rgb(26, 16, 16);
  position: fixed;
  top: 0;
  left: -250px;
  height: 100%;
  transition: left 0.3s ease;
  padding-top: 6rem;
  z-index: 1;
}

.sidebar-menu {
  display: flex;
  flex-direction: column;
  padding-top: 1rem;
}

.sidebar-item {
  padding: 1rem;
  padding-bottom: 0.5rem;

  text-decoration: none;
  color: white;
  display: block;
}

.sidebar-subitem {
  padding-top: 0.2rem;
  padding-bottom: 0.2rem;
  padding-left: 2.5rem;
  color: rgb(255, 255, 255);
  display: block;
  text-decoration: none;
}

.sidebar-item:hover {
  background-color: #363636;
}

.sidebar-subitem:hover {
  background-color: #363636;
}
</style>