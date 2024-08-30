
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
                <?php echo $_SESSION['user']; ?>
            </section>
            <section class="navbar-item">
                <form method="POST" action="../funcoes/sair.php">
                    <button type="submit" name="sair" class="button m-2">
                        Sair
                    </button>
                </form>
            </section>
        </section>
    </header>