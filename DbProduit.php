<?php
require_once "MysqlDb.php";

class DbProduit{

	public static function getAllProduit(){
		$sql = "select * from produit";
		$connect = MysqlDb::getPdoDb();//objet classe PDO
		$objResult = $connect->query($sql); //objet classe PDOStatement
		$tabResult = $objResult->fetchAll(); // tableau
		return $tabResult;
	}
	
	public static function getUnProduit($x){
		$sql = "select * from produit where Produit_ID = $x";
		$connect = MysqlDb::getPdoDb();//objet classe PDO
		$objResult = $connect->query($sql); //objet classe PDOStatement
		$tabResult = $objResult->fetch(); // tableau
		return $tabResult;
		
		
	}
	
	public static function addEmploye(){
		
	}
	public static function updateProduit($produit,$code,$nom,$tarif,$quantite){
		$sql = "UPDATE produit SET Tarif = '$tarif',Quantite = $quantite WHERE produit.Produit_ID = $produit; ";
		//echo $sql;
		$connect = MysqlDb::getPdoDb();//objet classe PDO
		$objResult = $connect->exec($sql); //objet classe PDOStatement
	}
	public static function deleteEmploye($id){
		$sql = "delete from employe where id = $id";
		$connect = MysqlDb::getPdoDb();//objet classe PDO
		$objResult = $connect->exec($sql); //objet classe PDOStatement

	}

	public static function misejourquantite($idp,$quantite,$qtbase){
		$sql = "UPDATE produit SET Quantite = $qtbase-$quantite WHERE produit.Produit_ID = $idp; ";
		echo $sql;
		$connect = MysqlDb::getPdoDb();//objet classe PDO
		$objResult = $connect->exec($sql); //objet classe PDOStatement

	}
		
}

?>