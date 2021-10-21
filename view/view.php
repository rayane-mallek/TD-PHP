<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $pagetitle; ?></title>
    </head>
    <body>
    <nav style="text-align: center;">
        <a href="index.php?action=readAll">Accueil des voitures</a>
        <a href="index.php?action=readAll&controller=utilisateur">Accueil des utilisateurs</a>
        <a href="index.php?action=readAll&controller=trajet">Accueil des trajets</a>
    </nav>
    <br />
    <?php
        // Si $controleur='voiture' et $view='list',
        // alors $filepath="/chemin_du_site/view/voiture/list.php"
        $filepath = File::build_path(array("view", $controller, "$view.php"));
        require $filepath;
    ?>
    <br />
    <p style="border: 1px solid black;text-align:center;padding-right:1em;">
        Site de covoiturage de Rayane
    </p>


    </body>
</html>

