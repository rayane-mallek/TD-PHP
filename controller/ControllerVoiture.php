<?php

$ROOT_FOLDER = __DIR__;
$DS = DIRECTORY_SEPARATOR;
require_once $ROOT_FOLDER . $DS . '..' . $DS . 'lib' . $DS . 'File.php';

require_once File::build_path(array("model","ModelVoiture.php"));


class ControllerVoiture {
    public static function readAll() {
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD

        $controller = 'voiture';
        $view = 'list';
        $pagetitle = 'Liste des voitures';
        require File::build_path(array("view", "view.php"));  //"redirige" vers la vue
    }

    public static function read() {
    	$v = ModelVoiture::getVoitureByImmat($_GET['immatriculation']);

    	if (empty($v)) {
            $controller = 'voiture';
            $view = 'error';
            $pagetitle = 'Erreur';
    		require File::build_path(array("view", "view.php"));

    	} else {
            $controller = 'voiture';
            $view = 'detail';
            $pagetitle = 'Détail de la voiture';
    		require File::build_path(array("view", "view.php"));
    	}
    }

    public static function create() {
        $controller = 'voiture';
        $view = 'create';
        $pagetitle = 'Formulaire';
    	require File::build_path(array("view", "view.php"));
    }

    public static function created() {
    	$voiture = new ModelVoiture($_POST['immatriculation'], $_POST['marque'], $_POST['couleur']);
    	$voiture->save();
    	//self::readAll();
        $tab_v = ModelVoiture::getAllVoitures();
        require File::build_path(array("view", "created.php"));
    }
}
?>
