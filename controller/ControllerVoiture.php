<?php

$ROOT_FOLDER = "/home/ann2/mallekr/public_html/PHP";
require_once "{$ROOT_FOLDER}/lib/File.php";

require_once File::build_path(array("model","ModelVoiture.php"));


class ControllerVoiture {
    public static function readAll() {
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
        require File::build_path(array("view", "voiture", "list.php"));  //"redirige" vers la vue
    }

    public static function read() {
    	$tab_v = ModelVoiture::getAllVoitures();

    	foreach ($tab_v as $voiture) {
            if ($voiture == $_GET['immatriculation']) {
            	$v = $voiture;
            }
    	}

    	if (empty($tab_v)) {
    		require File::build_path(array("view", "voiture","error.php"));
    	} else {
    		require File::build_path(array("view", "voiture","detail.php"));
    	}
    }

    public static function create() {
    	require File::build_path(array("view", "voiture","create.php"));
    }

    public static function created() {
    	$voiture = new ModelVoiture($_POST['immatriculation'], $_POST['marque'], $_POST['couleur']);
    	$voiture->save();
    	self::readAll();
    }
}
?>
