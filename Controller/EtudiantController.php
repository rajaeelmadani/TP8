<?php
function indexAction(array $t= NULL){
	AfficherReponse("vIndex.php");
}
function listeAction(array $t= NULL){
	$liste=getListeEtudiants();
	AfficherReponse("vListe.php",["liste"=>$liste]);
}
function detailAction(array $t){
    $t["CodeE"]=$_GET['code'];
	$etudiant=getDetailEtudiant($t["CodeE"]);
	if(empty($etudiant)){
		echo "cet étudiant n'existe pas !!!!!!!!";
	}
	else{
		AfficherReponse("vDetail.php",["etudiant"=>$etudiant]);
	 }
} 
function ajouterAction(array $t= NULL){
	 	AfficherReponse("vFormAjouter.php");
		 if ($_SERVER["REQUEST_METHOD"]=="POST"){
	if(ajouterEtudiant($t)){
		echo "etudiant est ajouté !!!!!!!!";
	}
	else {
		echo "etudiant non ajouté !!!!!!!!";
	}
		 }
}
function supprimerAction(array $t){
	$t["CodeE"]=$_GET['code'];
	$etudiant=getDetailEtudiant($t['CodeE']);
	if(empty($etudiant)){
		echo "cet étudiant n'existe pas !!!!!";
	}
	else{
	if(supprimerEtudiant($t['CodeE'])){
	  header('location:index.php?action=liste');
	  }
	else {
		echo "etudiant non supprimé !!!!!!!";
	}
	}
}
 function modifierAction(array $t){
		 $t["CodeE"]=$_GET['code'];
       $etudiant=getDetailEtudiant($t["CodeE"]);
		 AfficherReponse("vFormModifier.php",["etudiant"=>$etudiant]);
		  if ($_SERVER["REQUEST_METHOD"]=="POST") {
	if(modifierEtudiant($_POST)){
	  header("location:index.php?action=detail&&code=".$etudiant["CodeE"]);
	  }
	else {
		echo "etudiant non modifié !!!!!!!";
	} 
 }}
?>