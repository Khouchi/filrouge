<?php 
  require_once("identifier.php");
  require_once("connexiondb.php");
  $id=$_POST['id']; 
  $mt=$_POST['mt']; 
  $email=$_POST['email'];
 
  $poste=$_POST['poste'];
 
  $requete="update rh set email=?,motdepasse=?,poste=?, where idrh=?";
  $params=array($email,$mt,$poste,$id);
  $resultat=$pdo->prepare($requete);
  $resultat->execute($params);
?>
 <html>
     <body>
     
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
          icon: "success",
          title: "bon travail !",
          text: "vos informations seront modifiés après la déconnexion!",
          showConfirmButton: true,
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
         }). then(function(result){
            window.location = "profilRH.php";
             })
         </script>     

     </body></html>
