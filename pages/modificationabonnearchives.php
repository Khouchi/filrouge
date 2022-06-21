<?php
   require_once("identifier.php");
  require_once("connexiondb.php");
  $id=$_POST['id'];
  $email=$_POST['email'];
  $date=$_POST['date'];
  $nom=$_POST['nom'];

  $abonnement=$_POST['abonnement'];
  $telephone=$_POST['telephone'];
  
 
 
  $requete="update abonnesarchiver set email=?,dateNaissance=?,nom=?,abonnement=?,telephone=? where idemp=?";
  $params=array($email,$date,$nom,$abonnement,$telephone,$id);
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
          text: "l'employé modifié avec succès!",
          showConfirmButton: true,
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
         }). then(function(result){
            window.location = "archives.php";
             })
         </script>     

     </body></html>