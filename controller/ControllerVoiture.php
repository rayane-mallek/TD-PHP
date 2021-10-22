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
        $tab_v = ModelVoiture::getAllVoitures();
        require File::build_path(array("view", "created.php"));
    }

    public static function error() {
        echo "<p>Pas d'actions à ce nom</p>";
    }

    public static function delete() {
        ModelVoiture::deleteByImmat($_GET['immatriculation']);
        $tab_v = ModelVoiture::getAllVoitures();
        $immat = $_GET['immatriculation'];


        $controller = 'voiture';
        $view = 'deleted';
        $pagetitle = 'Suppression de voiture';
        require File::build_path(array("view", "view.php"));

    }
}
?>
