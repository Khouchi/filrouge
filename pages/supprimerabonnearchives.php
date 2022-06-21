<?php
  session_start();
  if (isset($_SESSION['user'])){
  require_once("connexiondb.php");

  $id=$_GET['idemp'];
  $requete="delete from abonnesarchiver where idemp=$id";
  $resultat=$pdo->prepare($requete);
  $resultat->execute();
  }

?>

 <html>
     <body>
     
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
          icon: "success",
          title: "Bravo !",
          text: "l'abonné a été supprimé avec succès!",
          showConfirmButton: true,
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
         }). then(function(result){
            window.location = "archives.php";
             })
         </script>     

     </body></html>