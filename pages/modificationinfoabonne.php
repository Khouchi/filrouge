<?php 
  require_once("identifier.php");
  require_once("connexiondb.php");
  $id=$_POST['id']; 
  $email=$_POST['email'];
  $date=$_POST['date'];
  $nom=$_POST['nom'];
  $adresse=$_POST['adresse'];
  $abonnement=$_POST['abonnement'];
  $telephone=$_POST['telephone'];
  $mt=$_POST['mt']; 
  $ville=$_POST['ville'];
  $prenom=$_POST['prenom'];
  $zip=$_POST['zip'];
  $salle=$_POST['salle'];
 
 
  $requete="update abonnes set email=?,dateNaissance=?,nom=?,adresse=?,abonnement=?,telephone=?,motdepasse=?,ville=?,prenom=?,zip=?,salle=? where idemp=?";
  $params=array($id,$email,$date,$nom,$adresse,$abonnement,$telephone,$mt,$ville,$prenom,$zip,$salle);
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