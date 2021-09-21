<?php 
	require_once 'Model.php';
	require_once '/home/ann2/mallekr/public_html/PHP/TD1/Voiture.php';

	
	//$tab_objet = $rep->fetchAll(PDO::FETCH_OBJ);

	/*$rep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
	$tab_voit = $rep->fetchAll();


	/*foreach($tab_objet as $clé) {
		echo $clé->immatriculation . " " . $clé->marque . " " . $clé->couleur . "<br />";
	}

	foreach($tab_voit as $voiture) {
		echo $voiture->afficher() . "<br />";
	}*/

	$tab_voit = Voiture::getAllVoitures();
	foreach($tab_voit as $voiture) {
		echo $voiture->afficher() . "<br />";
	}
?>