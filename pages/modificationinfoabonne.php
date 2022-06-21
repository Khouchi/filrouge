<?php 
  require_once("identifier.php");
  require_once("connexiondb.php");
  $id=$_POST['id']; 
  $mt=$_POST['mt']; 
  $email=$_POST['email'];
  $date=$_POST['date'];
  $nom=$_POST['nom'];
  $telephone=$_POST['telephone'];
  $salle=$_POST['salle'];
  $abonnement=$_POST['abonnement'];
 
  $requete="update abonnes set email=?,dateNaissance=?,nom=?,salle=?,abonnement=?,telephone=?,motdepasse=? where idemp=?";
  $params=array($email,$date,$nom,$salle,$abonnement,$telephone,$mt,$id);
  $resultat=$pdo->prepare($requete);
  $resultat->execute($params);

?>

 <html>
     <body>
     
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
          icon: "success",
          title: "bon travail  !",
          text: "vos informations seront modifiés après la déconnexion!",
          showConfirmButton: true,
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
         }). then(function(result){
            window.location = "profilabonne.php";
             })
         </script>     

     </body></html>