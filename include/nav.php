<!--TOGGLE MOBILE-->

<div class="nav-didi">
    <div class="logo-dada">
        <h1><a class="lien-home" href="index.php">ALLO SIMPLON</a> </h1>
    </div>
    <div class="menu-nav">
        <form class="search-bar" action="">
            <input type="text" placeholder="" name="search">
            <button class="search-button" type="submit"><i class="fa fa-search"></i></button>
        </form>
        <div class="menu-dada">
            <ul>
                <li><a href="catalogue.php">Films</a></li>
                <?php if (!(isset($_SESSION['user']))) : ?>
                    <li><a href="connexion.php">Connexion / Inscription </a></li>
                <?php else : ?>
                    <li><a href="deco.php">Deconexion</a>
                        <a href="include/formADMIN.php">
                            <h4> Bonjour <?php echo $_SESSION['user'] ?></h4>
                        </a>
                    </li>
                <?php endif; ?>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
</div>