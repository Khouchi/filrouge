<?php
  session_start();
  if (isset($_SESSION['user'])){
  require_once("connexiondb.php");

  $id=$_GET['idemp'];
  $requete="insert into abonnesarchiver SELECT '',email,dateNaissance,nom,departement,poste,telephone,motdepasse,'',photo FROM abonnes WHERE idemp=$id";
  $requete2="delete from abonnes where idemp=$id";
  $resultat=$pdo->prepare($requete);
  $resultat2=$pdo->prepare($requete2);
  $resultat->execute();
  $resultat2->execute();
  
  $requete3="update abonnesarchiver set etat=0 where idemp=?";
  $resultat3=$pdo->prepare($requete3);
  $resultat3->execute();

  }
?>

 <html>
     <body>
     
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
          icon: "success",
          title: "Bravo !",
          text: "l'abonné a été archivé avec succès!",
          showConfirmButton: true,
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
         }). then(function(result){
            window.location = "abonne.php";
             })
         </script>     

     </body></html>