<?php
    echo '<p> Voiture d\'immatriculation ' . htmlentities($v->getImmatriculation()) . '.</p>';
    echo '<a href="index.php?action=delete&immatriculation=' . rawurlencode($v->getImmatriculation()) . '">Supprimer la voiture</a><br/>';
    echo '<a href="index.php?action=update&immatriculation=' . rawurlencode($v->getImmatriculation()) . '">Modifier la voiture</a>';
?>

