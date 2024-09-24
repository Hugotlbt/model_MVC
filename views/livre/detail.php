<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details Livres</title>
</head>
<body>
    <h1>detail du livre</h1>
    <ul>

        <?= $livre->getTitre() ?>
        <?= $livre->getAuteur() ?>
        <?= $livre->getNbPages() ?>

        <a href="/index.php?route=accueil">Retourner a l'accueil</a>


    </ul>
</body>
</html>