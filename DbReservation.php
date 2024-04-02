<?php
require_once "MysqlDb.php";

class DbReservation{

	public static function getAllMesReservation($id){
		$sql = "select * from commandes where Utilisateur_ID = $id";
		$connect = MysqlDb::getPdoDb();//objet classe PDO
		$objResult = $connect->query($sql); //objet classe PDOStatement
		$tabResult = $objResult->fetchAll(); // tableau
		return $tabResult;
	}

	public static function getAllReservationduJour($DateJ){
		$sql = "select * from commandes,produit,utilisateur where DateCommande = '$DateJ' 
		AND
		commandes.Id_prod_reserve = produit.Produit_ID
		AND
		commandes.Utilisateur_ID = utilisateur.Utilisateur_id";
		$connect = MysqlDb::getPdoDb();//objet classe PDO
		$objResult = $connect->query($sql); //objet classe PDOStatement
		$tabResult = $objResult->fetchAll(); // tableau
		return $tabResult;
	}
	
	public static function getUnEmploye($x){
		$sql = "select * from employe where id = $x";
		$connect = MysqlDb::getPdoDb();//objet classe PDO
		$objResult = $connect->query($sql); //objet classe PDOStatement
		$tabResult = $objResult->fetch(); // tableau
		return $tabResult;
	}
	
	public static function addEmploye(){
		
	}
	public static function updateEmploye(){
		
	}
	public static function deleteEmploye($id){
		$sql = "delete from employe where id = $id";
		$connect = MysqlDb::getPdoDb();//objet classe PDO
		$objResult = $connect->exec($sql); //objet classe PDOStatement
	}

	public static function ajoutReservation($idp,$iduser,$quantite,$datecommande){
		$sql = "INSERT INTO commandes (Commandes_id, Utilisateur_ID, Id_prod_reserve, StatutCommande, DateCommande, QuantiteCommande) VALUES (NULL, $iduser, $idp, 0, '$datecommande', $quantite);";
		echo $sql;
		$connect = MysqlDb::getPdoDb();//objet classe PDO
		$objResult = $connect->exec($sql); //objet classe PDOStatement
	}
}
?>