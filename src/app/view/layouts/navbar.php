<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/StoryCMS/src/public/">PHP MVC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href=<?= APP_URL ?>>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=<?= APP_URL . 'post' ?>>Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=<?= APP_URL . 'about' ?>>About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=<?= APP_URL . 'contact' ?>>Contact</a>
                </li>

                <?php if (isset($_SESSION["role"]) && $_SESSION["role"] == 1) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href=<?= APP_URL . 'users' ?>>users</a>
                    </li>
                <?php endif ?>
                <?php if (!isset($_SESSION["role"])) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href=<?= APP_URL . 'users/create' ?>>inscription</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=<?= APP_URL . 'users/login' ?>>connexion</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href=<?= APP_URL . 'users/logout' ?>>deconexion</a>
                    </li>
                <?php endif ?>
            </ul>
        </div>
    </div>
</nav>