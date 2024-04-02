<?php
include './model/DbReservation.php';
include './model/DbProduit.php';

$action =$_GET['action'];

switch($action){
		
		
			case 'fiche':
			
			//récuperation de l'id de l'url
				$id = $_GET['id'];
				
			 //appel à la base de donnée le modele
				$data = DbEmploye::getUnEmploye($id);
			 
			 //appel à la vue
			 include 'vue/vueEtudiant/v_listeEtudiants.php';
			 
			 break;
			 
			 case 'listerMesReservation':
			 //appel à la base de donnée le modele
                $id = $_SESSION['id'];
				$data = DbReservation::getAllMesReservation($id);
			 
			 //appel à la vue
			 include 'vue/vueReservation/v_listeReservation.php';
			 
			 break;

			 case 'listerReservationJour':
				//appel à la base de donnée le modele
					date_default_timezone_set('Europe/Paris');
					$today = date("Y-m-d");
				    $data = DbReservation::getAllReservationduJour($today);
				//appel à la vue
				include 'vue/vueReservation/v_listeReservationJour.php';
				
				break;
			 
			 case 'supprimer':
				
				$id = $_GET['id'];
				//appel à la base de donnée le modele pour suppression 
				
				DbEmploye::deleteEmploye($id);
				
				//appel à la base de donnée le modele pour listage
				$data = DbEmploye::getAllEmploye();
				
				//appel à la vue
				include 'vue/vueEtudiant/v_listeEtudiants.php';
			
			break;

			case 'ajoutReservation':
			
				//récuperation de l'id de l'url
					$idp = $_POST['produit_id'];
					$iduser = $_SESSION['id'];
					$quantite = $_POST['quantite'];
					date_default_timezone_set('Europe/Paris');
					$datecommande = date("Y-m-d");
					$qtbase = $_POST['qte'];
					echo $qtbase;
					
				 //appel à la base de donnée le modele
					$data = DbReservation::ajoutReservation($idp,$iduser,$quantite,$datecommande);
				    DbProduit::misejourquantite($idp,$quantite,$qtbase);
					$data = DbProduit::getAllProduit();
			 
					//appel à la vue
					//include 'vue/vueProduit/v_listeProduit.php';
				 
				 break;
		}
?>