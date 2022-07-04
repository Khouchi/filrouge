<?php
  require_once("identifier.php");
  require_once("connexiondb.php");
      
 $idEmp=isset($_GET['idemp'])?$_GET['idemp']:0; //cest id ext ok sinojn on met 0 a la pLace 
 $requete="select *from abonnes where idemp=$idEmp";
 $resultat=$pdo->query($requete);
 $abonnes=$resultat->fetch();

 $emailU=$abonnes['email'];
 $dateN=$abonnes['dateNaissance'];
 $nomU=$abonnes['nom'];
 $telU=$abonnes['telephone'];
 $salleU=$abonnes['salle'];
 $prenomU=$abonnes['prenom']; 
 $villeU=$abonnes['ville'];
 $adresseU=$abonnes['adresse'];
 $zipU=$abonnes['zip'];  
?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.84.0">
    <title>modifier abonnes par RH</title>

  <!--CSS Bootstap -->
  <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../assets/image/m34crossfit.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    
  </head>
  <body>
    <?php include('menuRH.php');?>
    
  <br><br><br><br>
  <div class="container">
    <div class="inscform">
       
    <form class="" id="" name="" method="post" action="modificationabonne.php">

        <div class="row">
        <div class="form-group col-5"> 
                <label>Email</label>
              <input type="hidden" name="id" class="form-control" placeholder="id" value="<?php echo $idEmp?>">
              <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $emailU?>">       
           </div>
           <div class="form-group col-5"> 
               <label>Date de naissance</label>
              <input type="date" name="date" class="form-control" placeholder="Date de naissance" value="<?php echo $dateN?>">          
           </div>
        </div>
      <div class="row">
        <div class="form-group col-5">
        <label>Nom </label>
              <input type="text" name="nom" class="form-control" placeholder="Nom " value="<?php echo $nomU?>">     
           </div>
       <div class="form-group col-5">
       <label>Téléphone</label>
              <input type="number" name="telephone" class="form-control" placeholder="Téléphone" value="<?php echo $telU?>">   
           </div>
           </div>
           <div class="row">
        <div class="form-group col-5">
        <label>prenom</label>
              <input type="text" name="prenom" class="form-control" placeholder="prenom" value="<?php echo $prenomU?>">      
           </div>
       <div class="form-group col-5">
               <label>code postal</label>

              <input type="number" name="zip" class="form-control" placeholder="code postal" value="<?php echo $zipU?>">    
           </div>
           </div>
           <div class="row">
        <div class="form-group col-5">
                <label>ville </label>
              <input type="text" name="ville" class="form-control" placeholder="ville" value="<?php echo $villeU?>">   
           </div>
           <div class="form-group col-5">
                <label>adresse </label>
              <input type="text" name="adresse" class="form-control" placeholder="adresse" value="<?php echo $adresseU?>">     
           </div>
      
           </div>
       <div class="row">
        <div class="form-group col-5">
                <label>abonnement</label>
             
              <select type="text" name="abonnement" class="form-control" placeholder="abonnement" value="<?php echo $abonnementU?>">
              <option>Carnet 10 seances</option>
             <option >1 séance par semaine</option>
              <option >1 à 2 séances par semaine</option> 
              <option>1 à 4 séances par semaine</option> 
              <option>Crossfit 5</option> </select>
              
           </div>
       <div class="form-group col-5">
   
               <label>salle</label>
             
              <select type="text" name="salle" class="form-control" placeholder="salle" value="<?php echo $salleU?>">
             <option >Initial</option>
              <option >East</option>
              <option>South</option>           
             </select>   
           </div>
           </div>
  
       
      <br>     
      <div class="row">
      <div class="form-group col-5">
      <input type="submit" class="btn btn-success" value="modifier">
      </div>    
      </div>    
       </form> 
    </div>      
    
    </div>
 



  <!--JS Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  

  </body>
</html>
