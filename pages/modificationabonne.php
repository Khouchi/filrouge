<?php 
  require_once("identifier.php");
  require_once("connexiondb.php");
  $id=$_POST['id']; 
  $email=$_POST['email'];
  $date=$_POST['date'];
  $nom=$_POST['nom'];
  $telephone=$_POST['telephone'];
  $salle=$_POST['salle'];
  $abonnement=$_POST['abonnement'];
 
  $requete="update abonnes set email=?,dateNaissance=?,nom=?,salle=?,abonnement=?,telephone=? where idemp=?";
  $params=array($email,$date,$nom,$salle,$abonnement,$telephone,$id);
  $resultat=$pdo->prepare($requete);
  $resultat->execute($params);

?>
 <html>
     <body>
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
    <script>
        swal({
          icon: "success",
          title: "Bravo !",
          text: "l'abonné modifié avec succès!",
          showConfirmButton: true,
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
         }). then(function(result){
            window.location = "abonne.php";
             })
         </script>     

     </body></html>

