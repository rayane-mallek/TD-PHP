<?php

require_once File::build_path(array("controller", "ControllerVoiture.php"));

// On recupère l'action passée dans l'URL
if (!isset($_GET['action'])) {
    $action = "readAll";
} else {
    $action = $_GET['action'];
}
// Appel de la méthode statique $action de ControllerVoiture
$allMethodsControllerVoiture = get_class_methods("ControllerVoiture");

if (in_array($action, $allMethodsControllerVoiture)) {
    ControllerVoiture::$action(); 
} else {
    ControllerVoiture::error();
}

?>
