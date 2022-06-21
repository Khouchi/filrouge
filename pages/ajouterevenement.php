<?php
   require_once("identifier.php");
  require_once("connexiondb.php");
  $titre=$_POST['titre'];
  $type=$_POST['type'];
  $debutdeevenement=$_POST['debutdeevenement'];
  $heure=$_POST['heure'];
 
  $requete="INSERT INTO evenement (titre, type, dateevenement, heureevenement) VALUES (?,?, ?,?)";
  $params=array($titre,$type,$debutdeevenement,$heure);
  $resultat=$pdo->prepare($requete);
  $resultat->execute($params);
  
  header('location:evenement.php');

?>
