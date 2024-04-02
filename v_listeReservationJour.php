<div class ="row">
	<div class="col">
 		<table class="table table-striped">
				<thead class="thead-dark">
					<tr>
						<th>Commandes_id</th>
						<th>Nom</th>
						<th>Prenom</th>
						<th>NomProduit</th>
                        <th>Tarif</th>
                        <th>QuantiteCommande</th>
                        <th>DateCommande</th>
						<th>Modif</th>
						</tr>
				</thead>
			<?php foreach($data as $ligne){ ?>
					
				<tr>
						<td><?php echo $ligne['Commandes_id']; ?></td>
						<td><?php echo $ligne['Nom'];?></td>
						<td><?php echo $ligne['Prenom'];?></td>
                        <td><?php echo $ligne['NomProduit'];?></td>
                        <td><?php echo $ligne['Tarif'];?></td>
                        <td><?php echo $ligne['QuantiteCommande'];?></td>
                        <td><?php echo $ligne['DateCommande'];?></td>
						<td>
						<a href="index.php?ctl=commandes&action=supprimer&id=<?php echo $ligne['Commandes_id'];?>">
							<img src=".\vue\images\remove.png"width=20px height=20px>
						</a>
						<a href="index.php?ctl=commandes&action=fiche&id=<?php echo $ligne['Commandes_id'];?>">
							<img src=".\vue\images\editer.png"width=20px height=20px>
						</a>
						
						</td>
					</tr>
				<?php	
				}
				echo "</table>";
			?>

 
</div>