<?php foreach ($tab_v as $v): ?>
    <a href="./index.php?action=read&immatriculation=<?= rawurlencode($v->getImmatriculation()) ?>">Voiture d'immatriculation <?= htmlentities($v->getImmatriculation()) ?></a>
    <br />
<?php endforeach; ?>
