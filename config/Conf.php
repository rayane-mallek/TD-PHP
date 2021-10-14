<?php

$ROOT_FOLDER = "/home/ann2/mallekr/public_html/PHP";
require_once "{$ROOT_FOLDER}/lib/File.php";


class Conf {
   
  static private $databases = array(
    'hostname' => 'webinfo',
    'database' => 'mallekr',
    'login' => 'mallekr',
    'password' => 'mallekr'
  );

  private static $debug = True;
   
  static public function getHostname() {
    return self::$databases['hostname'];
  }

  static public function getDatabase() {
    return self::$databases['database'];
  }

  static public function getLogin() {
    return self::$databases['login'];
  }

  static public function getPassword() {
    return self::$databases['password'];
  }

  public static function getDebug() {
    return self::$debug;
  }
   
}
?>

