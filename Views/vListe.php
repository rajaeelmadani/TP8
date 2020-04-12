<center><h1>Liste des étudiants</h1></center>
<table border="1">
	<tr>
	<th>CodeE</th>
	<th>NomE</th>
	<th>PrenomE</th>
	<th>Filiere</th>
	<th>Note</th>
	</tr>
<?php 
foreach($liste as $li){
	?>
 
	<tr> 
<td><a href="index.php?action=detail&&code=<?=$li['CodeE']?>"><?=$li['CodeE']?>  </a></td> 
 <td><a href="index.php?action=detail&&code=<?=$li['CodeE']?>"><?=$li['Nom']?>  </a> </td> 
 <td><a href="index.php?action=detail&&code=<?=$li['CodeE']?>"><?=$li['Prenom']?>  </a></td> 
  <td><a href="index.php?action=detail&&code=<?=$li['CodeE']?>"><?=$li['Filiere']?>  </a></td>   
  <td><a href="index.php?action=detail&&code=<?=$li['CodeE']?>"><?=$li['Note']?>  </a> </td> </tr>

  
 <?php
}
 ?>
</table> 