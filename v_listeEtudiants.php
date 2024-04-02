<div class ="row">
 	<table class="table table-striped">
				<thead>
					<tr>
						<th>Commande_id</th>
						<th>StatutCommande</th>
						<th>DateCommande</th>
						<th>QuantiteCommande</th>
						</tr>
				</thead>
			<?php foreach($data as $ligne){ ?>
					
				<tr>
						<td><?php echo $ligne['Commande_id']; ?></td>
						<td><?php echo $ligne['StatutCommande'];?></td>
						<td><?php echo $ligne['DateCommande'];?></td>
						<td><?php echo $ligne['QuantiteCommande'];?></td>
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

