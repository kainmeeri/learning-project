<?php

namespace Learning\Controllers;


class MainController extends CoreController
{
    /**
     * Méthode pour la page d'accueil
     * URL : /
     */
    public function home() {
        
        $this->show('home');
    }

     /**
     * Méthode pour la page d'inscription
     * URL : /
     */
    public function register() {
        
        $this->show('register');
    }

      /**
     * Méthode pour la page de connexion
     * URL : /
     */
    public function login() {
        
        $this->show('login');
    }


}