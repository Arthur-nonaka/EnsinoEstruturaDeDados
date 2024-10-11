
<link rel="stylesheet" href="sidebar.css">

<div id="sidebar" class="sidebar">
    <div class="sidebar-menu">
        <a href="/ensinoestruturadedados/home.php"  class="sidebar-item">Página Principal</a>
        <a href="/ensinoestruturadedados/explicacao/TAD/TAD.php" class="sidebar-item sidebar-link" data-page="TAD">TAD</a>
        <a href="/ensinoestruturadedados/explicacao/TAD/interface.php" class="sidebar-subitem sidebar-link" data-page="Interface">Interface</a>
        <a href="/ensinoestruturadedados/explicacao/TAD/struct.php" class="sidebar-subitem sidebar-link"data-page="Struct">Struct</a>
        <a href="/ensinoestruturadedados/explicacao/TAD/exemplo.php" class="sidebar-subitem sidebar-link" data-page="TAD-Exemplo">Exemplo</a>
        <a href="/ensinoestruturadedados/explicacao/ListaSimples/Lista.php" class="sidebar-item sidebar-link">Lista</a>
        <a href="/ensinoestruturadedados/explicacao/ListaSimples/Operacoes.php" class="sidebar-subitem sidebar-link">Operações</a>
        <a href="/ensinoestruturadedados/explicacao/ListaSimples/Exemplo.php" class="sidebar-subitem sidebar-link">Exemplo</a>
        <a href="/ensinoestruturadedados/explicacao/ListaDupla/Lista.php" class="sidebar-item sidebar-link" >Lista Duplamente Encadeada</a>
        <a href="/ensinoestruturadedados/explicacao/ListaDupla/Operacoes.php" class="sidebar-subitem sidebar-link">Operações</a>
        <a href="/ensinoestruturadedados/explicacao/ListaDupla/Exemplo.php" class="sidebar-subitem sidebar-link">Exemplo</a>
        <a href="/ensinoestruturadedados/explicacao/FilaFIFO/Fila.php" class="sidebar-item sidebar-link">Fila FIFO</a>
        <a href="/ensinoestruturadedados/explicacao/FilaFIFO/Operacoes.php" class="sidebar-subitem sidebar-link">Operações</a>
        <a href="/ensinoestruturadedados/explicacao/FilaFIFO/Exemplo.php" class="sidebar-subitem sidebar-link">Exemplos</a>
        <a href="/ensinoestruturadedados/explicacao/FilaPrioridade/Fila.php" class="sidebar-item sidebar-link">Fila De Prioridade</a>
        <a href="/ensinoestruturadedados/explicacao/FilaPrioridade/Operacoes.php" class="sidebar-subitem sidebar-link">Operações</a>
        <a href="/ensinoestruturadedados/explicacao/FilaPrioridade/Exemplo.php" class="sidebar-subitem sidebar-link">Exemplos</a>
        <a href="/ensinoestruturadedados/explicacao/PilhaLIFO/Pilha.php" class="sidebar-item sidebar-link">Pilha LIFO</a>
        <a href="/ensinoestruturadedados/explicacao/PilhaLIFO/Operacoes.php" class="sidebar-subitem sidebar-link">Operações</a>
        <a href="/ensinoestruturadedados/explicacao/PilhaLIFO/Exemplo.php" class="sidebar-subitem sidebar-link">Exemplos</a>
        
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

/* .sidebar::-webkit-scrollbar {
  width: 8px;
} */
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

.sidebar-item:hover {
  background-color: #363636;
}

.sidebar-subitem:hover {
  background-color: #363636;
}

/* Add shadow to the last item in the sidebar */
.sidebar-menu a:last-child {
  box-shadow: 0 4px 2px -2px gray;
}

.visited {
            color: gray;
            text-decoration: line-through;
        }
</style>

<script>
    // Passar a variável PHP para JavaScript
    var seenPages = <?php echo json_encode($seenPages); ?>;

    // Adicionar a classe 'visited' aos links que o usuário já visitou
    document.querySelectorAll('.sidebar-link').forEach(function(link) {
        var page = link.getAttribute('data-page');
        if (seenPages.includes(page)) {
            link.classList.add('visited');
        }
    });
</script>