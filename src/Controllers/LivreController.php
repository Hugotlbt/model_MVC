<?php

namespace App\Controllers;

use App\Dao\LivreDAO;

class LivreController
{

    private LivreDAO $livreDao;
    // Lister l'ensemble des livres


 public function __construct(LivreDAO $dao)


{
    $this->livreDao = $dao;
}
    public function List()
    {
        //Fait appelle au modele afin de recuperer les données dans la base

        $livres =$this->livreDao->selectAll();

        //$livreDao=new LivreDAO();

        //Fait appelle a la vu afin de renvoyer la page
        require __DIR__.'/../../views/livre/liste.php';

    }

    public function Detail($id_livre){
        $livre =$this->livreDao->getDetailIdLivre($id_livre);
        require __DIR__.'/../../views/livre/detail.php';
    }
    public function Ajout($titre_livre, $nombrepage_livre, $auteur_livre)
    {
        $livre =$this->livreDao->GetLivre($titre_livre, $nombrepage_livre, $auteur_livre);
        require __DIR__.'/../../views/livre/ajouter_livre.php';
    }
}