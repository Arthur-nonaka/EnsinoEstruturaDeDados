<?php
    $home = $home ?? false;
    if($home == true) {
        $link = "./home.php";
        $src = "./img/logo.png";
    }
    else {
        $link = "../../home.php";
        $src = "../../img/logo.png";
    }

?>

<header class="navbar">
        <section class="navbar-start">
            <button id="sidebarToggle" class="button is-info m-3">
                <i class="fa fa-bars"></i> 
            </button>
            <a class="logo" href=<?php echo $link;?>>
                <figure class="image is-64x64">
                    <img src=<?php echo $src;?> />
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