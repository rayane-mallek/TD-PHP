<?php
    echo '<p> Voiture d\'immatriculation ' . htmlentities($v->getImmatriculation()) . '.</p>';
    echo '<a href="index.php?action=delete&immatriculation=' . htmlentities($v->getImmatriculation()) . '">Supprimer la voiture</a>';
?>

