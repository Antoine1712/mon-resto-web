<?php
include './model/DbReservEleve.php';

$action =$_GET['action'];

switch($action){
		
		
			case 'fiche':
			
			//récuperation de l'id de l'url
				$id = $_GET['id'];
				
			 //appel à la base de donnée le modele
				$data = DbReservEleve::getUnReservEleve($id);
			 
			 //appel à la vue
			 include 'vue/vueReservation/v_ficheReservEleve.php';
			 
			 break;
			 
			 case 'listerReservationEleve':
			 //appel à la base de donnée le modele
			 $id = $_SESSION['Utilisateur_id'];
				$data = DbReservEleve::getAllReservEleve($id);
			 
			 //appel à la vue
			 include 'vue/vueReservation/v_listeReservEleve.php';
			 
			 break;

			 case 'listerReservEleve':
				//appel à la base de donnée le modele
					$today = date("Y-m-d"); 
					$data = DbReservEleve::getAllReservationduJour($today);
				//appel à la vue
				include 'vue/vueReservation/v_listeReservEleve.php';
				
				break;
			 
			 case 'supprimer':
				
				$id = $_GET['id'];
				//appel à la base de donnée le modele pour suppression 
				
				DbReservEleve::deleteReservEleve($id);
				
				//appel à la base de donnée le modele pour listage
				$data = DbReservEleve::getAllReservEleve($_SESSION['Utilisateur_id']);
				
				//appel à la vue
				include 'vue/vueReservation/v_listeReservEleve.php';
			
			break;
		}
?>