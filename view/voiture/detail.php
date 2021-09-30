<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Liste des voitures</title>
    </head>
    <body>
        <?php
            foreach ($tab_v as $v) {
                if ($v->getImmatriculation() == $_GET['immatriculation'])
                    echo '<p> Voiture d\'immatriculation ' . $v->getImmatriculation() . '.</p>';
            }
        ?>
    </body>
</html>
