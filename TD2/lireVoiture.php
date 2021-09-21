<?php 
	require_once 'Model.php';

	$rep = Model::getPDO()->query("SELECT * FROM voiture");
	$tab_objet = $rep->fetchAll(PDO::FETCH_OBJ);

	foreach($tab_objet as $clé) {
		echo $clé->immatriculation . " " . $clé->marque . " " . $clé->couleur . "<br />";
	}

?>