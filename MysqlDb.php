<?php

class MySqlDb{
	private static $dsn = 'mysql:dbname=projetrestau_db;host=mysql-projetrestau.alwaysdata.net';
	private static $user = '336222';
	private static $pwd = 'User12345!';
	
	private static $objPdoDb;
	
	//constructeur
	private function __construct(){}
	
	//méthode d'accès
	public static function getPdoDb(){
		if(!self::$objPdoDb){
			self::$objPdoDb = new PDO(self::$dsn,self::$user,self::$pwd);
		}
		return self::$objPdoDb;		
	}
}
?>