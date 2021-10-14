<?php

class File {

	public static function build_path($path_array) {
    	// $ROOT_FOLDER (sans slash à la fin) vaut
    	// "/home/ann2/mallekr/public_html/PHP" à l'IUT 
    	$ROOT_FOLDER = "/home/ann2/mallekr/public_html/PHP";
    	return $ROOT_FOLDER. '/' . join('/', $path_array);
	}
}

?>