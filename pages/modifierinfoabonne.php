<?php
 require_once("identifier.php");
 require_once("connexiondb.php");
?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.84.0">
    <title>modifier mes informations par abonné</title>

    <!--CSS Bootstap -->
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../assets/image/m34crossfit.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



  </head>
  <body>
    <?php include('menuabonne.php');?>
    
    <div class="container">
    
  <!--  -->
             
  <div class="container">
   
    
   <div class="inscform">
       
      <form class="" id="" name="" enctype="multipart/form-data" method="post" action="modificationinfoabonne.php">
       <div class="row">
       <div class="form-group col-12"> 
             <label >Photo</label>
             <input type="file" name="photo" class="form-control" id="photo" placeholder="photo" value="<?php echo $_SESSION['user']['photo'];?>">     
          </div>
       </div>  
       <div class="row">
       <div class="form-group col-6"> 
            
             <label>Email</label>
            <input type="hidden" name="id" class="form-control" placeholder="id" value="<?php echo $_SESSION['user']['idemp'];?>">
            <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $_SESSION['user']['email'];?>">      
          </div>
          <div class="form-group col-6"> 
          <label>Date de naissance</label>
            <input type="date" name="date" class="form-control" placeholder="Date de naissance" value="<?php echo $_SESSION['user']['dateNaissance'];?>">   
          </div>
       </div>
     <div class="row">
       <div class="form-group col-6">
             <label>Nom </label>
            <input type="text" name="nom" class="form-control" placeholder="Nom " value="<?php echo $_SESSION['user']['nom'];?>">  
          </div>
      <div class="form-group col-6">
      <label>Téléphone</label>
            <input type="number" name="telephone" class="form-control" placeholder="Téléphone" value="<?php echo $_SESSION['user']['telephone'];?>">    
          </div>
          </div>
          <div class="row">
       <div class="form-group col-6">
       <label>prenom </label>
            <input type="text" name="prenom" class="form-control" placeholder="prenom" value="<?php echo $_SESSION['user']['prenom'];?>">  
          </div>
      <div class="form-group col-6">
              <label>code postal</label>
             <input type="number" name="zip" class="form-control" id="zip" placeholder="code postal"value="<?php echo $_SESSION['user']['zip'];?>">   
          </div>
          </div>
          <div class="row">
       <div class="form-group col-6">
               <label>ville </label>
             <input type="text" name="ville" class="form-control" id="ville" placeholder="ville"value="<?php echo $_SESSION['user']['ville'];?>">   
          </div>
          <div class="form-group col-6">
               <label>adresse </label>
             <input type="text" name="adresse" class="form-control" id="adresse" placeholder="adresse" value="<?php echo $_SESSION['user']['adresse'];?>">   
          </div>
     
          </div>
      <!-- <div class="row">
       <div class="form-group col-6">
               <label>Abonnement</label>
         
             <select type="text" name="abonnement" class="form-control" placeholder="abonnement" value="<?php echo $_SESSION['user']['abonnement'];?>">
             <option>Carnet 10 seances</option>
            <option >1 séance par semaine</option>
             <option >1 à 2 séances par semaine</option> 
             <option>1 à 4 séances par semaine</option> 
             <option>Crossfit 5</option> </select>
             
          </div>
      <div class="form-group col-6">
              <label>Salle</label>
             <select type="text" name="salle" class="form-control" placeholder="Salle" value="<?php echo $_SESSION['user']['salle'];?>">
            <option >Initial</option>
             <option >East</option>
             <option>South</option>           
            </select>   
          </div>
          </div> -->
      <div class="row">
       <div class="form-group col-6">
       <label>Mot de passe</label>
            <input type="password" name="mt" class="form-control" placeholder="mot de passe" value="<?php echo $_SESSION['user']['motdepasse'];?>">   
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

 
        </div>
      </div>

  </div>

            </div>


            <br><br>

    



  <!--JS Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
