<header class="navbar">
    <section class="navbar-start">
        <button id="sidebarToggle" class="button is-info m-3">
            <i class="fa fa-bars"></i> 
        </button>
        <a class="logo" href="/ensinoestruturadedados/home.php">
            <figure class="image is-64x64">
                <img src="/ensinoestruturadedados/img/logo.png" />
            </figure>
        </a>
    </section>
    <section class="navbar-end">
        <section class="navbar-item">
            <?php if (isset($_SESSION['user'])): ?>
                <a class="button is-info" href="/EnsinoEstruturaDeDados/usuario/perfil.php">
                     <?php echo htmlspecialchars($_SESSION['user']); ?>
                </a>
            <?php endif; ?>
        </section>
        <section class="navbar-item">
                <a class="button is-info" href="/EnsinoEstruturaDeDados/usuario/char.php">
                     Character
                </a>
        </section>
        <section class="navbar-item">
            <form method="POST" action="/ensinoEstruturaDeDados/funcoes/Process/Process.php">
                <input type="hidden" name="action" value="logout">
                <button type="submit" name="sair" class="button m-2">
                    Sair
                </button>
            </form>
        </section>
    </section>
</header>
