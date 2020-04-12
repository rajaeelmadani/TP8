<center><h1>Detail d'un étudiant </h1></center></br></br>
 
<h2>
Code : <?=$etudiant['CodeE']?></br> 
Prenom:<?=$etudiant['Prenom']?></br>
 Nom :<?=$etudiant['Nom']?></br>
Filiere: <?=$etudiant['Filiere']?></br>
 Note :<?=$etudiant['Note']?></h2></br>
 <a href="index.php?action=modifier&&code=<?=$etudiant['CodeE']?>">Modifier un étudiant</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="index.php?action=supprimer&&code=<?=$etudiant['CodeE']?>">supprimer un étudiant</a> 

  