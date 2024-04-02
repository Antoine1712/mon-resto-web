<?php
include './model/DbProduit.php';

$action =$_GET['action'];

switch($action){
		
		
			case 'fiche':
			
			//récuperation de l'id de l'url
				$id = $_GET['id'];
				
			 //appel à la base de donnée le modele
				$data = DbProduit::getUnProduit($id);
			 
			 //appel à la vue
			 include 'vue/vueProduit/v_ficheProduit.php';
			 
			 break;

			 case 'ficheReserv':
			
				//récuperation de l'id de l'url
					$id = $_GET['id'];
					
				 //appel à la base de donnée le modele
					$data = DbProduit::getUnProduit($id);
				 
				 //appel à la vue
				 include 'vue/vueProduit/v_ficheReserv.php';
				 
				 break;
			 
			case 'lister':
			 //appel à la base de donnée le modele
				$data = DbProduit::getAllProduit();
			 
			 //appel à la vue
			 include 'vue/vueProduit/v_listeProduit.php';
			 
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

			case 'majProduit':
				
				$produit = $_POST['produit_id'];
				$code = $_POST['code_produit'];
				$nom = $_POST['nom_produit'];
				$tarif = $_POST['tarif'];
				$quantite = $_POST['quantite'];
				//appel à la base de donnée le modele pour suppression 
				
				DbProduit::updateProduit($produit,$code,$nom,$tarif,$quantite);
				
				//appel à la base de donnée le modele pour listage
				$data = DbProduit::getAllProduit();
			 
			 //appel à la vue
			 include 'vue/vueProduit/v_listeProduit.php';
			
			break;
				
		}

?>