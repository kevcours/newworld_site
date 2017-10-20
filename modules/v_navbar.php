<header class="white-text">
    <nav class="navbar navbar-expand-lg #4caf50 green fixed-top scrolling-navbar">
        <div class="container">
            <a class="navbar-brand white-text" href="modules/c_main.php?page=reset">New World</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link white-text" href="modules/c_main.php?page=pages/acheter.php">Acheter <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link white-text" href="modules/c_main.php?page=pages/produire.php">Produire</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link white-text" href="modules/c_main.php?page=pages/distribuer.php">Distribuer</a>
                    </li>
                    <li class="nav-item btn-group">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown 
                            </a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
                <!-- <a href="modules/c_main.php?page=login.php">Se connecter</a> -->
                <?php if(isset($_SESSION["user"])){
                        var_dump($_SESSION["user"]); ?>
                    <a href="scripts/login.php?out=true">Se déconnecter</a>
                <?php } else { ?>
                <button type="button" class="btn green" data-toggle="modal" data-target="#loginModal">
                    Se connecter
                </button>
                <?php } ?>

            </div>
        </div>
    </nav>
</header>