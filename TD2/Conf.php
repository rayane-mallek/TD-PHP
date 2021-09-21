<?php
class Conf {
   
  static private $databases = array(
    'hostname' => 'webinfo',
    'database' => 'mallekr',
    'login' => 'mallekr',
    'password' => 'mallekr'
  );
   
  static public function getLogin() {
    return self::$databases['login'];
  }
   
}
?>

