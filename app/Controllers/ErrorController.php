<?php

// On déclare le namespace (dossier virtuel) de la classe
// Avec la norme PSR-4, le dossier virtuel correspondant au dossier physique
namespace Learning\Controllers;

class ErrorController extends CoreController
 {

        public function error404() {
            // On indique au navigateur que la page n'est pas trouvée
            // Ce n'est pas une redirection
            header("HTTP/1.0 404 Not Found");

            // Puis on affiche du code HTML
            $this->show('404');
        }
}
