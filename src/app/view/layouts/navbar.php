<nav class="navbar">
    <label class="navbar-toggle" id="js-navbar-toggle" for="chkToggle">
    <i class="fa fa-bars"></i>
    </label>
    <a href="#" class="logo">PHP MVC</a>
    <input type="checkbox" id="chkToggle"></input>
    <ul class="main-nav" id="js-menu">
        <li>
            <a class="nav-links" href=<?= APP_URL ?>>Accueil</a>
        </li>
        <li>
            <a class="nav-links" href=<?= APP_URL . 'post' ?>>Articles</a>
        </li>
        <?php if (isset($_SESSION["role"]) && $_SESSION["role"] == 1) : ?>
        <li>
            <a class="nav-links" href=<?= APP_URL . 'users' ?>>Utilisateurs</a>
        </li>
        <?php endif ?>
        <?php if (!isset($_SESSION["role"])) : ?>
        <li>
            <a class="nav-links" href=<?= APP_URL . 'users/create' ?>>Inscription</a>
        </li>
        <li>
            <a class="nav-links" href=<?= APP_URL . 'users/login' ?>>Connexion</a>
        </li>
        <?php else: ?>
        <li>
            <?php if (isset($_SESSION["name"])) : ?>
            Bienvenu <?= $_SESSION["name"]?> !
            <?php endif ?>
            <a class="nav-link" href=<?= APP_URL . 'users/logout' ?>>Deconnexion</a>
        </li>
        <?php endif ?>
    </ul>
</nav>