<?php
    $user = $_SESSION['user'] ?? null;
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/inscription">Inscription</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/connexion">Connexion</a>
                </li>
            </ul>
        </div>
        <?php if($user){ ?>
        <ul class="navbar-nav">
            <li class="nav-item dropstart dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><?= $user[0]['email'] ?></a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/deconnexion">Déconnexion</a></li>
                </ul>
            </li>
        </ul>
        <?php } ?>
    </div>
</nav>