<?php
require_once ('../model/ModelVoiture.php'); // chargement du modèle

class ControllerVoiture {
    public static function readAll() {
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
        require ('../view/voiture/list.php');  //"redirige" vers la vue
    }

    public static function read() {
    	$tab_v = ModelVoiture::getAllVoitures();

    	foreach ($tab_v as $voiture) {
            if ($voiture == $_GET['immatriculation']) {
            	$v = $voiture;
            }
    	}

    	if (empty($tab_voit)) {
    		require ('../view/voiture/error.php');
    	} else {
    		require ('../view/voiture/detail.php');
    	}
    }

    public static function create() {
    	require ('../view/voiture/create.php');
    }

    public static function created() {
    	$voiture = new ModelVoiture($_POST['immatriculation'], $_POST['marque'], $_POST['couleur']);
    	$voiture->save();
    	self::readAll();
    }
}
?>
