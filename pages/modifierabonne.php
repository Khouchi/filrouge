<?php
  require_once("identifier.php");
  require_once("connexiondb.php");
      
 $idEmp=isset($_GET['idemp'])?$_GET['idemp']:0;
 $requete="select *from abonnes where idemp=$idEmp";
 $resultat=$pdo->query($requete);
 $abonnes=$resultat->fetch();

 $emailU=$abonnes['email'];
 $dateN=$abonnes['dateNaissance'];
 $nomU=$abonnes['nom'];
 $telU=$abonnes['telephone'];
 $salleU=$abonnes['salle'];
 $abonnementU=$abonnes['abonnement'];  
?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.84.0">
    <title>modifier employés par RH</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-static/">
  
    

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .inscform{
            background: white;
            width: 55%;
            height: 100%;
            padding: 25px 25px 25px 25px;
            border-radius: 20px;
            margin-left: 300px;
          }
      .container img{
              width: 120px;
              height: 120px;
              margin-top: -30px;
              margin-bottom: 30px;
              margin-right: 100px;
              margin-left: 550px;
          }
          h1{
              text-align: center;
              margin-left: 100px;
          }
          .insc{
           text-align: right;
           margin-top: -30px;
          }
    </style>
 <link href="navbar-top.css" rel="stylesheet">
    
    <!-- Favicons -->


  </head>
  <body>
    <?php include('menuRH.php');?>
    
    <div class="container">
    
  <div class="inscform">
      
     <form class="" id="" name="" method="post" action="modificationabonne.php">
         
      <div class="row">
      <div class="form-group col-12"> 
            <label>Email</label>
            <input type="hidden" name="id" class="form-control" placeholder="id" value="<?php echo $idEmp?>">
            <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $emailU?>">     
         </div>
         <div class="form-group col-12"> 
             <label>Date de naissance</label>
            <input type="date" name="date" class="form-control" placeholder="Date de naissance" value="<?php echo $dateN?>">      
         </div>
      </div>
    <div class="row">
      <div class="form-group col-12">
              <label>Nom d'utilisateur</label>
            <input type="text" name="nom" class="form-control" placeholder="Nom d'utilisateur" value="<?php echo $nomU?>">   
         </div>
     <div class="form-group col-12">
             <label>Téléphone</label>
            <input type="number" name="telephone" class="form-control" placeholder="Téléphone" value="<?php echo $telU?>">   
         </div>
         </div>
     <div class="row">
      <div class="form-group col-12">
              <label>Salle</label>
            <input type="text" name="salle" class="form-control" placeholder="Salle" value="<?php echo $salleU?>">   
         </div>
     <div class="form-group col-12">
             <label>abonnement</label>
            <input type="text" name="abonnement" class="form-control" placeholder="abonnement" value="<?php echo $abonnementU?>">   
         </div>
         </div>
     
    <br>     
    <div class="row">
    <div class="form-group col-6">
    <input type="submit" class="btn btn-success" value="modifier">
    </div>    
    </div>    
     </form> 
  </div>      
  
  </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>



  </body>
</html>
