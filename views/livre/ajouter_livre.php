<?php
use App\Entity\Livre;
$erreurs = [];
$titre_livre = "";
$nombrepage_livre = "";
$auteur_livre = "";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter un livre</title>
</head>
<body>
<h1>Ajouter un livre</h1>
<div>
    <form action="" method="post" novalidate>
        <div>
            <label for="nom_film" class="form-label">Nom du Livre *</label>
            <input type="text"
                   class="form-control : "
                   id="titre_livre"
                   name="titre_livre"
                   value="<?= $titre_livre ?>"
                   placeholder="Saisir le nom du livre"
                   aria-describedby="emailHelp">
        </div>
    </div>
</body>
</html>