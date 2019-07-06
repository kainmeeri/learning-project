<?php

// On veut charger toutes les dépendances fournies par Composer
// Pour cela, 1 seul et unique fichier à inclure
require __DIR__.'/../vendor/autoload.php';



// Instanciation de la classe Application

$app = new \Learning\Utils\Application();

$app->run();
