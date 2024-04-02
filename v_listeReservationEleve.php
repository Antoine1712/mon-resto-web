<div class ="row">
<div class="col">
 		<table class="table table-striped">
				<thead class="thead-dark">
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
						<a href="index.php?ctl=reservation&action=supprimer&id=<?= $ligne['Commandes_id']; ?>">
                            Supprimer
                        </a>

						<a href="index.php?ctl=reservation&action=fiche&id=<?= $ligne['Produit_ID']; ?>">
   							Modifier la quantité
						</a>

						</td>
					</tr>
				<?php	
				}
				echo "</table>";
			?>