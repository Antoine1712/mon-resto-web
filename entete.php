<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	  <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa; /* Couleur de fond */
            padding: 20px;
        }

        h2 {
            color: #dc3545; /* Couleur du titre */
        }

        .table {
            margin-top: 20px;
        }

        th, td {
            text-align: center;
        }

        .btn {
            background-color: #28a745; /* Couleur du bouton */
            color: #fff;
        }
		
    </style>
	  <title>Mon Restaurant</title>
   </head>
  <body>
  <div class="container">
        <div class="row">
            <div class="col-10 mx-auto">
                <h4 class="text-center">Mon Restaurant</h4>
				
            </div>
        </div>

  <div class="row">
            <table class="table table-striped">
                <thead class="thead-dark">
						
			</div>
			<?php if(!isset($_SESSION['connect'])){  ?>
			<div class ="col-2 ml-auto mt-2"><a href="index.php?ctl=connexion&action=connecter"></a></div>
			<?php }else { ?>
			<div class ="col-2 ml-auto mt-2"><a href="index.php?ctl=connexion&action=deconnecter">Déconnexion</a></div>	
			<?php } ?>
		</div>
		
		
		