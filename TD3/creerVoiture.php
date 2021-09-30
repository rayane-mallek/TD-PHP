<?php 
	require_once 'Model.php';
	require_once 'Voiture.php';

	$voiture = new Voiture($_GET['marque'], $_GET['couleur'], $_GET['immatriculation']);
	$voiture->save();
?>