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
    <title>modifier mes informations</title>

    

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../assets/image/m34crossfit.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


  </head>
  <body>
    <?php include('menuRH.php');?>
    <br><br>
    <div class="container">
    
  <div class="inscform">
      
     <form class="" id="" name="" method="post" action="modificationinforh.php">
      <div class="row">
      <div class="form-group col-12">
            <label>Email</label>
            <input type="hidden" name="id" class="form-control" placeholder="id" value="<?php echo $_SESSION['user']['idrh'];?>">
            <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $_SESSION['user']['email'];?>">     
         </div>
      </div>
      <div class="row">
              <div class="col-md-6 mb-3">
                <label for="salle">Salle</label>
                <select  type="text" name="salle" class="form-control" placeholder="salle" value="<?php echo $_SESSION['user']['salle'];?>"> 
              <option>INITIAL</option>
            <option >SOUTH</option>
             <option >EAST</option>           
            </select> 
                <div class="invalid-feedback">
                  Valid first telephone is required.
                </div>
  
         </div>
         <div class="row">
         
            <div class="form-group col-12">
             <label>Poste</label>
            <input type="text" name="poste" class="form-control" placeholder="Poste" value="<?php echo $_SESSION['user']['poste'];?>">   
         </div>
         </div>
         <div class="row">
      <div class="form-group col-12">
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


  <script src="https://kit.fontawesome.com/cb35c347cc.js" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
