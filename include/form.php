<?php
	
	$email = $_POST['Email'];
	$nom = $_POST['Nom'];
	$prenom = $_POST['Prenom'];
	$texte = $_POST['Texte'];

	$message = "$nom.$prenom.$texte";
	

  mail("lingat@simplon-charleville.fr",$email,$message);
  header("Location: ../index.php");
?>