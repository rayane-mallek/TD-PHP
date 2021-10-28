<?php
    echo '<p1>La voiture' . htmlentities($_POST['immatriculation']) . ' a bien été mise à jour.</p>';
    require File::build_path(array("view", "voiture", "list.php"));
?>