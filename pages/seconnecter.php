<?php
  session_start();
  require_once("connexiondb.php");
  $login=$_POST['email']; 
  $mt=$_POST['motdepasse']; 


//  requete abonnes
  $requete="select *from abonnes where email='$login'";
  $resultat=$pdo->query($requete);
//   requete rh

  $requete2="select *from rh where email='$login'";
  $resultat2=$pdo->query($requete2);
//   $user=$resultat2->fetch(PDO::FETCH_ASSOC);
//   var_dump($user);
//   for abonne
if ($user=$resultat->fetch()){
    if(password_verify($mt,$user['motdepasse'])){
      if ($user['etat']==1){
          $_SESSION['user']=$user;
          // Fonctionne si le cookie a été accepté
          header('location:profilabonne.php');
      }
    //   message d Erreur
      else{ 
          $_SESSION['erreurLogin']="<strong>Erreur!! </strong>votre compte est désactivé.<br> Veuillez contacter l'administrateur.";
          header('location:connexion.php');
      }}



      
    //   for rh
  }
if ($user=$resultat2->fetch(PDO::FETCH_ASSOC)){
    if(password_verify($mt,$user['motdepasse'])){
          $_SESSION['user']=$user;
          header('location:profilRH.php');
      }
    //   message d Erreur
  else {
      $_SESSION['erreurLogin']="<strong>Erreur!! </strong> Login ou mot de passe incorrecte ! ";
          header('location:connexion.php');
}}
//   echo "hello";

?>