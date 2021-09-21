<?php
require_once 'Conf.php';

class Model {

	private static $pdo = NULL;

	public static function init() {
		$hostname = Conf::getHostname();
		$database_name = Conf::getDatabase();
		$login = Conf::getLogin();
		$password = Conf::getPassword();
		self::$pdo = new PDO("mysql:host=$hostname; dbname=$database_name", $login, $password);
	}

	public static function getPDO() {
		if (is_null(self::$pdo)) {
			self::init();
		}

		return self::$pdo;
	}
}
?>