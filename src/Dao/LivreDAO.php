<?php

namespace App\Dao;

use App\Entity\Livre;

class LivreDAO
{
// Envoyer la requette "SELECT" * FROM Livre"
// Retourner les enregistrements sous la forme d'un tableau
// d'objet de la classe Livre
private \PDO $db;

    /**
     * @param \PDO $db
     */
    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }


    public function selectAll() :array {
    $requete=$this->db->query("SELECT * FROM Livre");
    $livresBD=$requete->fetchALL(\PDO::FETCH_ASSOC);
    // Mapping relationnel vers objet
        $livres =[];

        foreach ($livresBD as $livreBD){
            $livre = new Livre();
            $livre->setId($livreBD['id_livre']);
            $livre->setTitre($livreBD['titre_livre']);
            $livre->setAuteur($livreBD['auteur_livre']);
            $livre->setNbPages($livreBD['nombrepage_livre']);
            $livres[]=$livre;

        }
     return $livres;
    }
    public function getDetailIdLivre($id_livre):?Livre{
        $requete = $this->db->query("SELECT * FROM livre WHERE id_livre = $id_livre");
        $livreBD=$requete->fetchAll(\PDO::FETCH_ASSOC);
        $livre=new Livre();
        $livre->setTitre($livreBD[0]['titre_livre']);
        $livre->setAuteur($livreBD[0]['auteur_livre']);
        $livre->setNbPages($livreBD[0]['nombrepage_livre']);
        return $livre;
    }
    public function GetLivre($titre_livre, $nombrepage_livre, $auteur_livre)
    {
        try {
            // Préparation de la requête
            $requete = $this->db->query("INSERT INTO livre (titre_livre, nombrepage_livre, auteur_livre) VALUES (?, ?, ?)");

            // Exécution de la requête avec les valeurs des paramètres
            $requete->execute([$titre_livre, $nombrepage_livre, $auteur_livre]);

            // Renvoie true si l'ajout a réussi
            return true;
        } catch (PDOException $e) {
            // En cas d'erreur, affiche un message d'erreur
            echo "Erreur lors de l'ajout du livre : " . $e->getMessage();
            // Renvoie false en cas d'erreur
            return false;
        }
    }
}