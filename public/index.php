<?php

// Controller FRONTAL => Router
// Toutes les requetes des utilisateurs passent par ce ficher

require_once __DIR__ .'/../vendor/autoload.php';

// Chargement des variables d'environnement
$dotEnv=\Dotenv\Dotenv::createImmutable(__DIR__.'/../');
$dotEnv->load(); //charger les variables d'environnement de .env dans un tableau $_ENV

// Configurer la connexion a la BDD

$db = new PDO("mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']}",$_ENV['DB_USER'],$_ENV['DB_PASSWORD']);

$route=$_GET['route'] ?? 'accueil';

// test la valeur de $route
switch ($route){
    case 'accueil':
        $accueilController = new \App\Controllers\AcceuilController();
        $accueilController->accueil();
        break;
    case 'livre-list':
        // LivreDao est un dependance de LivreController
        $livreDao = new \App\Dao\LivreDAO($db);
        // injecter la dependance $livreDao dans l'objet LivreController
        $livreController = new \App\Controllers\LivreController($livreDao);
        $livreController->List();
        break;
    case 'detail':
        $id_livre=null;
        if (isset($_GET['id_livre'])) {
            $id_livre = $_GET['id_livre'];
        }
            $livreDao = new \App\Dao\LivreDAO($db);
            // injecter la dependance $livreDao dans l'objet LivreController
            $livreController = new \App\Controllers\LivreController($livreDao);
            $livreController->Detail($id_livre);
        break;
    case 'ajouter_livre':
        $livreDao = new \App\Dao\LivreDAO($db);
        $livreDetailController = new \App\Controllers\LivreController($livreDao);
        $livreDetailController->ajout();
        break;
    default:
        // erreur 404
        echo "Page non trouvée";
        break;
}

// Mise en place du rooting
//BELEK $route=$_GET['route'] ?? 'accueil';
//if ($route ==="accueil"){
    //Créer un objet AccueilController
  //  $accueilController = new \App\Controllers\AcceuilController();
    // $accueilController->accueil();
// }else{
   // echo "Page non trouvé";
//}





