<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <link rel="stylesheet" href="<?=$absoluteUrl?>/assets/css/reset.css">
    <link rel="stylesheet" href="<?=$absoluteUrl?>/assets/css/style.css">
    <title>LearningProject</title>
</head>
<body>
    <header>
        <div>
            <nav class="navbar has-background-grey" role="navigation" aria-label="main navigation">
                <div class="navbar-brand">
                    <a class="navbar-item"  href="<?= $router->generate('main_home') ?>">
                    <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
                    </a>

                    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    </a>
                </div>

                <div id="navbarBasicExample" class="navbar-menu ">
                    <div class="navbar-start ">
                        <a  href="<?= $router->generate('main_home') ?>" class="navbar-item has-background-grey">
                            Acceuil
                        </a>

                        <a class="navbar-item has-background-grey">
                            Qui somme nous
                        </a>
                    </div>
                </div>

                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            <a href="<?= $router->generate('main_register') ?>" class="button is-primary">
                                <strong>Inscription</strong>
                            </a>
                            <a href="<?= $router->generate('login') ?>" class="button is-light">
                                Connexion
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

    </header>
    <main>

    

