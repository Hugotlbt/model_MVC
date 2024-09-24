<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste Livres</title>
</head>
<body>
    <h1>Liste des livres</h1>
    <ul>
    <?php  foreach ($livres as $livre):?>
        <li><?= $livre->getTitre() ?> <a href="/index.php?route=detail&id_livre=<?= $livre->getId() ?>"<a>details</a></li>
    <?php endforeach; ?>

        <a href="/index.php?route=accueil">Retourner a l'accueil</a>
        <a href="/index.php?route=ajouterLivre">Ajouter un livre</a>
    </ul>
</body>
</html>