<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Liste des voitures</title>
    </head>
    <body>
        <?php foreach ($tab_v as $v): ?>
        <a href="./routeur.php?action=read&immatriculation=<?= $v->getImmatriculation() ?>">Voiture d'immatriculation <?= $v->getImmatriculation() ?></a>
        <br />
    <?php endforeach; ?>
    </body>
</html>
