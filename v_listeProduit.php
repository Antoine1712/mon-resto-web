<div class ="row">
	<div class="col">
 		<table class="table table-striped">
				<thead class="thead-dark">
					<tr>
						<th>Produit_ID</th>
						<th>CodeProduit</th>
						<th>NomProduit</th>
						<th>Tarif</th>
                        <th>Quantite</th>
						<th>Reservation</th>
						</tr>
				</thead>
			<?php foreach($data as $ligne){ ?>
					
				<tr>
						<td><?php echo $ligne['Produit_ID']; ?></td>
						<td><?php echo $ligne['CodeProduit'];?></td>
						<td><?php echo $ligne['NomProduit'];?></td>
                        <td><?php echo $ligne['Tarif'];?></td>
                        <td><?php echo $ligne['Quantite'];?></td>
						<td>
							<?php 	
							if ($_SESSION['statut']=="admin"){ ?>
								<a href="index.php?ctl=produit&action=supprimer&id=<?php echo $ligne['Produit_ID'];?>">
                     <img src=".\vue\images\remove.png" width="20px" height="20px">

                  </a> 
				  <a href="index.php?ctl=produit&action=fiche&id=<?php echo $ligne['Produit_ID'];?>">
                     <img src=".\vue\images\editer.png" width="20px" height="20px">
                  </a>
				  <?php }else{
					
				  ?>	
                  <a href="index.php?ctl=produit&action=ficheReserv&id=<?php echo $ligne['Produit_ID'];?>">
                     <img src=".\vue\images\editer.png" width="20px" height="20px">
                  </a><?php }?>
						
						</td>
					</tr>
				<?php	
				}
			
				echo "</table>";
			?>

 
</div>