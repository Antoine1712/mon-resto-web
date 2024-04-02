<?php
session_start();
include 'vue/entete.php';

if(isset($_SESSION['connect'])){
	echo $_SESSION['statut'];
	if ($_SESSION['statut']=="admin"){
		include 'vue/menuadmin.php';
	}else{
		include 'vue/menuetudiant.php';
	}
}
		if(isset($_GET['ctl']))
		{
			switch($_GET['ctl']){

					case 'Eleve':
					 include 'controleur/ctlReserEleve.php';
					 break;

					case 'produit':
					 include 'controleur/ctlProduit.php';
					 break;

					case 'reservation':
					 include 'controleur/ctlReservation.php';
					 break;


					case 'etudiant':
						include 'controleur/ctlEtudiant.php';
						break;
					 
					case 'connexion':
					 include 'controleur/ctlConnexion.php';
					 break;					 
				}	
		}		
if(!isset($_SESSION['connect'])){
	include 'vue/vueConnexion/v_form_connexion.php';
}
include 'vue/pied.php';
?>        				 
         
