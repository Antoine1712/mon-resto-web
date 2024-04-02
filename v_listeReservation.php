<div class ="row">
 	<table class="table table-striped">
				<thead>
					<tr>
						<th>Produit_ID</th>
						<th>CodeProduit</th>
						<th>NomProduit</th>
						<th>Tarif</th>
                        <th>Quantite</th>
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
						<a href="index.php?ctl=etudiant&action=supprimer&id=<?php echo $ligne['id'];?>">
							<img src=".\vue\images\remove.png"width=20px height=20px>
						</a>
						<a href="index.php?ctl=etudiant&action=fiche&id=<?php echo $ligne['id'];?>">
							<img src=".\vue\images\editer.png"width=20px height=20px>
						</a>
						
						</td>
					</tr>
				<?php	
				}
				echo "</table>";
			?>

 
</div>