<?php
require_once "MysqlDb.php";

class DbReservationEleve{

	public static function getAllReservEleve($id){
		$sql = "select * from commandes where Utilisateur_ID = $id";
		$connect = MysqlDb::getPdoDb();//objet classe PDO
		$objResult = $connect->query($sql); //objet classe PDOStatement
		$tabResult = $objResult->fetchAll(); // tableau
		return $tabResult;
	}

	public static function getAllReservationduJour($DateJ){
		$sql = "select * from commandes 
                JOIN produit ON commandes.Id_prov_reserve = produit.Produit_ID
                WHERE DateCommande = :dateJ";
		$connect = MysqlDb::getPdoDb();//objet classe PDO
		$objResult = $connect->query($sql); //objet classe PDOStatement
		$tabResult = $objResult->fetchAll(); // tableau
		return $tabResult;
	}
	
	public static function getUnReservEleve($id){
		$sql = "select * from commandes where Commandes_id = $id";
		$connect = MysqlDb::getPdoDb();//objet classe PDO
		$objResult = $connect->query($sql); //objet classe PDOStatement
		$tabResult = $objResult->fetch(); // tableau
		return $tabResult;
	}
	
	public static function addEmploye(){
		
	}
	public static function updateEmploye(){
		
	}
	public static function deleteReservEleve($id){
		$sql = "delete from commandes where Commandes_id = $id";
		$connect = MysqlDb::getPdoDb();//objet classe PDO
		$objResult = $connect->exec($sql); //objet classe PDOStatement
	}
}
?>