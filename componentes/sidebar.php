<link rel="stylesheet" href="sidebar.css">

<div id="sidebar" class="sidebar">
  <div class="sidebar-menu">
    <a href="/ensinoestruturadedados/home.php" class="sidebar-item sidebar-link" data-page="home">Página Principal</a>
    <a href="/ensinoestruturadedados/explicacao/TAD/TAD.php" class="sidebar-item sidebar-link" data-page="TAD">TAD</a>
    <a href="/ensinoestruturadedados/explicacao/TAD/interface.php" class="sidebar-subitem sidebar-link" data-page="Interface">Interface</a>
    <a href="/ensinoestruturadedados/explicacao/TAD/struct.php" class="sidebar-subitem sidebar-link" data-page="Struct">Struct</a>
    <a href="/ensinoestruturadedados/explicacao/TAD/exemplo.php" class="sidebar-subitem sidebar-link" data-page="TAD-Exemplo">Exemplo</a>
    <a href="/ensinoestruturadedados/explicacao/ListaSimples/Lista.php" class="sidebar-item sidebar-link" data-page="Lista">Lista</a>
    <a href="/ensinoestruturadedados/explicacao/ListaSimples/Operacoes.php" class="sidebar-subitem sidebar-link" data-page="Operacoes">Operações</a>
    <a href="/ensinoestruturadedados/explicacao/ListaSimples/Exemplo.php" class="sidebar-subitem sidebar-link" data-page="Lista-Exemplo">Exemplo</a>
    <a href="/ensinoestruturadedados/explicacao/ListaDupla/Lista.php" class="sidebar-item sidebar-link" data-page="Lista-Dupla">Lista Duplamente Encadeada</a>
    <a href="/ensinoestruturadedados/explicacao/ListaDupla/Operacoes.php" class="sidebar-subitem sidebar-link" data-page="Lista-Dupla-Operacoes">Operações</a>
    <a href="/ensinoestruturadedados/explicacao/ListaDupla/Exemplo.php" class="sidebar-subitem sidebar-link" data-page="Lista-Dupla-Exemplo">Exemplo</a>
    <a href="/ensinoestruturadedados/explicacao/FilaFIFO/Fila.php" class="sidebar-item sidebar-link" data-page="Fila-FIFO">Fila FIFO</a>
    <a href="/ensinoestruturadedados/explicacao/FilaFIFO/Operacoes.php" class="sidebar-subitem sidebar-link" data-page="Fila-FIFO-Operacoes">Operações</a>
    <a href="/ensinoestruturadedados/explicacao/FilaFIFO/Exemplo.php" class="sidebar-subitem sidebar-link" data-page="Fila-FIFO-Exemplo">Exemplos</a>
    <a href="/ensinoestruturadedados/explicacao/FilaPrioridade/Fila.php" class="sidebar-item sidebar-link" data-page="Fila-Prioridade">Fila De Prioridade</a>
    <a href="/ensinoestruturadedados/explicacao/FilaPrioridade/Operacoes.php" class="sidebar-subitem sidebar-link" data-page="Fila-Prioridade-Operacoes">Operações</a>
    <a href="/ensinoestruturadedados/explicacao/FilaPrioridade/Exemplo.php" class="sidebar-subitem sidebar-link" data-page="Fila-Prioridade-Exemplo">Exemplos</a>
    <a href="/ensinoestruturadedados/explicacao/PilhaLIFO/Pilha.php" class="sidebar-item sidebar-link" data-page="Pilha-LIFO">Pilha LIFO</a>
    <a href="/ensinoestruturadedados/explicacao/PilhaLIFO/Operacoes.php" class="sidebar-subitem sidebar-link" data-page="Pilha-LIFO-Operacoes">Operações</a>
    <a href="/ensinoestruturadedados/explicacao/PilhaLIFO/Exemplo.php" class="sidebar-subitem sidebar-link" data-page="Pilha-LIFO-Exemplo">Exemplos</a>
  </div>
</div>

<style>
.sidebar {
  width: 250px;
  background-color: #66D1FF;
  color: rgb(20, 22, 26);
  position: fixed;
  top: 0;
  left: -250px;
  height: 100%;
  overflow-y: auto; /* Remove a barra de rolagem */
  transition: left 0.3s ease;
  padding-top: 6rem;
  z-index: 1;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  scrollbar-color: #363636 #66D1FF; /* Cor da barra de rolagem */
  scrollbar-width: thin; /* Largura da barra de rolagem */
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
  color: rgb(255, 255, 255);
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

.sidebar-item:hover, .sidebar-subitem:hover {
  background-color: #363636;
}

.sidebar-item.active, .sidebar-subitem.active {
  background-color: #363636;
  font-weight: bold;
}

.sidebar-menu a:last-child {
  box-shadow: 0 4px 2px -2px gray;
}

.active {
  color: #66D1FF;
  background-color: #fff !important;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var currentPath = window.location.pathname;

    document.querySelectorAll('.sidebar-link').forEach(function(link) {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('active');
        }
    });
});
</script>