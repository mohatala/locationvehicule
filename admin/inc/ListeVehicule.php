	<?php
	include("model/Config.cls.php");
	include("model/Vehicule.cls.php");
	$base=new Connection();
	$connect=$base->connect();
	$vehicule=new Vehicule();
	?>
	<table class="table table-hover" >
		<thead>
		  <tr>
			<th>ID</th>
			  <th>Type</th>
			<th>MARQUE</th>
			<th>Prix</th>
			 <th>Nbr Personne</th>
			  <th>Bagage</th>
			  <th>Nbr Portes</th>
			   <th>BOITE DE VITESSES</th>
			  <th>Disponibilite</th>
			   <th>Modifier</th>
               <th>Supprimer</th>
		  </tr>
		</thead>
		<tbody>
		<?php
		$res=$connect->query("select * from voiture");
		while($ligne=$res->fetch()){
		?>
		  <tr>
			<td><?php echo $ligne["id"];?></td>
			  <td><?php echo $ligne["types"];?></td>
			<td><?php echo $ligne["marque"];?></td>
			<td><?php echo $ligne["prix"];?></td>
				<td><?php echo $ligne["nbpersonne"];?></td>
			<td><?php echo $ligne["bagage"];?></td>
			<td><?php echo $ligne["portes"];?></td>
			<td><?php echo $ligne["boite"];?></td>
			  <td><?php echo $ligne["reservation"];?></td>
			<td><a href="index.php?page=AffichevehiculeInfo&id=<?php echo $ligne["id"];?>&mod" class="btn btn-info btn-md" onclick="affiche_more();"  role="button" id="affichebtn">
				 Modifier</a></td>
                 <td><a href="javascript:delete_id(<?php echo $ligne["id"]; ?>)" class="btn btn-danger btn-md"   role="button" id="affichebtn">
				 Supprimer</a></td>
	
		  </tr>
		<?php } ?>
		</tbody>
	  </table>
	<script type="text/javascript">
			function delete_id(id)
			{
				var rep =confirm('Voulez-Vous  supprimer cette voiture ?');
				if(rep==true)
				{
					window.location.href='controls/control.php?delete_id='+id;
				}
			}</script>