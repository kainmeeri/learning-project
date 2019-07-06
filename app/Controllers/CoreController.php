<?php

namespace Learning\Controllers;


class CoreController 
{
    protected function show($viewName, $viewVars=array()) {
        global $app; // moche, mais propre ce serait trop compliqué
        // var_dump($viewVars);exit;

        // Si on a besoin de la variable $router, permettant de générer des URLs
        $router = $app->getAltoRouter();

        // Je crée une variable contenant l'URL absolue jusqu'au dossier "public"
        // La clé "BASE_URI" est générée par le fichier .htaccess créant l'entonnoir
        if (!empty($_SERVER['BASE_URI'])) {
            $absoluteUrl = $_SERVER['BASE_URI'];
        }
        else {
            $absoluteUrl = '/';
        }
        // Cette variable $absoluteUrl est désormais disponible dans toutes mes templates/views

        // Astuce de méga sioux
        // On transforme les index de $viewVars en variable
        // ON transforme les index=>valeur en variable $index = valeur
        extract($viewVars);
        // Maintenant, on aura une variable dispo par donnée fournie à la méthode show

        // $viewVars est disponible dans chaque fichier de vue
        include(__DIR__.'/../views/header.tpl.php');
        include(__DIR__.'/../views/'.$viewName.'.tpl.php');
        include(__DIR__.'/../views/footer.tpl.php');
    }
}