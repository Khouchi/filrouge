<?php
session_start();
if(isset($_SESSION['erreurLogin']))
    $erreurLogin=$_SESSION['erreurLogin'];
else{
    $erreurLogin="";
}
session_destroy();
?>


</body>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.84.0">
    <title>connexion</title>

 

    

   
  <!--CSS Bootstap -->
  <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../assets/image/m34crossfit.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    
    <!-- Favicons -->


  </head>
  <body class="body">
    <?php include('menu.php');?>
    <br><br>
    <h1>Se connecter</h1>
 
      
    <div class="container">
  
    
  <div class="loginform">
      
     <form class="" id="" name="" method="post" action="seconnecter.php">
      <?php if(!empty($erreurLogin)) {?>     
      <div class="alert alert-danger">
         <?php echo $erreurLogin; ?>
         </div> 
        <?php } ?> 
      <div class="row">
      <div class="form-group col-12">
             <label>Login</label>
            <input type="email" name="email" class="form-control" placeholder="Email">   
         </div>
      </div>
    <div class="row">
      <div class="form-group col-12">
             <label>Mot de passe</label>
            <input type="password" name="motdepasse" class="form-control" placeholder="mot de passe">   
         </div>
      </div>
    <br>     
    <div class="row">
    <div class="form-group col-6">
    <input type="submit" class="btn btn-success" value="Se connecter">
    </div>    
    </div>    
    <a href="motDepasseoublie.php">Mot de passe oublié?</a>
    <div class="insc">
    <a href="inscription.php">s'inscrire</a> 
    </div>
     </form> 
  </div>      
  
  </div>



  <!--JS Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
