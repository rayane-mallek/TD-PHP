<?php
    echo '<p1>La voiture' . htmlentities($_GET['immatriculation']) . ' a bien été supprimée.</p>';
    require File::build_path(array("view", "voiture", "list.php"));
?>