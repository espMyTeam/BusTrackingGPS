


	<body bgcolor="black" >
	<center><font size="12" color="blue">liste des arrets de bus de ligne 10 </font></center>
	<?php
	include("connexion.php");
	?>
	 <center>
	<table border = "1">
		<tr bgcolor = "blue" height="50">
			<th>nomArret</th>
			<th>latitudeArret</th>
			<th>longituteArret</th>
			<th>vitesse</th>
			<th>date</th>
			<th>modification</th>
			<th>suppression</th>
		</tr>

		<?php
		$var=0;

		 $res=$bdd->query( 'SELECT * from arretBus' );
	while($row=$res->fetch()){
	if($var==0) {?>
	
		<tr bgcolor="#EEEEEE">
			<td><?php echo $row['nomArret']; ?></td>
			<td><?php echo $row['latitudeArret']; ?></td>
			<td><?php echo $row['longitudeArret']; ?></td>
			<td><?php echo $row['vitesse']; ?></td>
			<td><?php echo $row['date']; ?></td>
			<td><?php echo'<a href="modification1.php?idArret='.$row['idArret'].'">modification</a>'; ?></td>
			<td><?php echo'<a href="suppression.php?idArret='.$row['idArret'].'">suppression</a>'; ?></td>
		</tr>
		<?php
		$var=1;
			}else{ ?>
			<tr bgcolor="#FFCCCC">
			<td><?php echo $row['nomArret']; ?></td>
			<td><?php echo $row['latitudeArret']; ?></td>
			<td><?php echo $row['longitudeArret']; ?></td>
			<td><?php echo $row['vitesse']; ?></td>
			<td><?php echo $row['date']; ?></td>
			<td><?php echo'<a href="modification1.php?idArret='.$row['idArret'].'">modification</a>'; ?></td>
			<td><?php echo'<a href="suppression.php?idArret='.$row['idArret'].'">suppression</a>'; ?></td>
		</tr>



		<?php
		$var=0; 
		}
		}
		?>

		<tr bgcolor="blue">
		 <td> </td>
		 <td> </td>
		 <td> </td>
		 <td> </td>
		 <td> </td>
		</tr>
	
	
	</table>

	<p>
	<p>
		<form  method="POST"  action="rechercheArretBus.php">
	<table cellspacing="5" cellpadding="5">
		<tr> 
			<td bgcolor="blue"> <label>recherche un arret de ligne</label></td> <td><input type="text" name="nomArret" value="arret ligne"></td>
		</tr>
		<tr>
			<td> <input type="submit" value="rechercher"/></td>
			<td> <input type="reset" value="annuler"/></td>
		</tr>
   </table>
</form>


</center>

	</body> 