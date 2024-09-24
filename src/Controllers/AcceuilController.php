<?php
namespace App\Controllers;
class AcceuilController
{
        // Méthode permettant de gerer la page d'acceuil
    public function accueil(){
        //Fait appelle au modele afin de recuperer les données dans la base

        //Fait appelle a la vu afin de renvoyer la page
        require_once __DIR__ ."/../../views/Acceuil/accueil.php";

    }

}