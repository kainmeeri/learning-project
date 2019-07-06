<?php


// On oublie pas de placer la classe dans le namespace
namespace Learning\Utils;


// J'importe la classe AltoRouter qui se situe dans un autre namespace
use AltoRouter;

use Dispatcher;


class Application {
    /**
     * Propriété contenant l'objet AltoRouter
     * qui est nécessaire dans plusieurs méthodes de la classe
     * @var AltoRouter
     */
    protected $altoRouter;

    /**
     * Constructeur
     * => on prépare (exécution similaire quelque soit la page)
     * Analogie : on allume son téléphone (qui se connecte au réseau)
     */
    public function __construct() {

        // => PHP comprend new \AltoRouter()
        $this->altoRouter = new AltoRouter();
        
        // 2- on définit le basePath car on est dans un sous-dossier du DocumentRoot
        // Attention, "espace" interdit dans les dossiers amenant à notre projet !!!!!
        if (!empty($_SERVER['BASE_URI'])) {
            $this->altoRouter->setBasePath($_SERVER['BASE_URI']);
        }

        // On appelle la méthode qui mappe les routes
        $this->mapRoutes();
    }

    /**
     * Méthode permettant de mapper toutes les routes
     * On aurait pu le faire dans le constructeur, mais c'est + propre de décomposer
     */
    public function mapRoutes() {
        
        // avec le PSR-4, on doit spécifier le FQCN de la classe
        $this->altoRouter->map('GET', '/', [
            'controller' => '\Learning\Controllers\MainController',
            'method' => 'home'
        ], 'main_home'); // list_lists = Nom du controller + "_" + Nom de la méthode

         // avec le PSR-4, on doit spécifier le FQCN de la classe
         $this->altoRouter->map('GET', '/register', [
            'controller' => '\Learning\Controllers\MainController',
            'method' => 'register'
        ], 'main_register');

          // avec le PSR-4, on doit spécifier le FQCN de la classe
          $this->altoRouter->map('GET', '/login', [
            'controller' => '\Learning\Controllers\MainController',
            'method' => 'login'
        ], 'login');

    }

    /**
     * Méthode lançant notre application
     * => exécution spécifique pour chaque page
     * Analogie : pour ensuite pouvoir passer un appel spécifique à une personne
     */
    public function run() {
        
        // 4- On demande à AltoRouter de cherche si une route correspond à l'URL actuelle
        $match = $this->altoRouter->match();
        // dump($match);exit;

        // You can optionnally add a try/catch here to handle Exceptions
        // Instanciate the dispatcher, give it the $match variable and a fallback action
        $dispatcher = new Dispatcher($match, '\Learning\Controllers\ErrorController::error404');
        // then run the dispatch method which will call the mapped method
        $dispatcher->dispatch();
    }


    /**
     * Get Propriété contenant l'objet AltoRouter
     *
     * @return  AltoRouter
     */ 
    public function getAltoRouter() : AltoRouter // ": AltoRouter" = typehint = typage du retour de la méthode
    {
        return $this->altoRouter;
    }
}
