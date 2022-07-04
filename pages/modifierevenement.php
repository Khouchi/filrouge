<?php
  require_once("identifier.php");
 require_once("connexiondb.php");
 $idevenement=isset($_GET['idevenement'])?$_GET['idevenement']:0;
 $requete="select *from evenement where idevenement=$idevenement";
 $resultat=$pdo->query($requete);
 $evenement=$resultat->fetch();

 $titre=$evenement['titre'];
 $type=$evenement['type'];
 $date=$evenement['dateevenement'];
 $heure=$evenement['heureevenement'];

?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
   
    <meta name="generator" content="Hugo 0.84.0">
    <title>modifier evenement</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste abonnes</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../assets/image/m34crossfit.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    

  </head>
  <body class="body">
    <?php include('menuRH.php');?>
    
    <div class="container">
    
  <div class="inscform">
      
     <form class="" id="" name="" method="post" action="modificationevenement.php">
         
      <div class="row">
      <div class="form-group col-12"> 
            <label>Titre</label>
             <input type="hidden" name="id" class="form-control" placeholder="id" value="<?php echo $idevenement?>">
            <input type="text" name="titre" class="form-control" placeholder="titre" value="<?php echo $titre?>">     
         </div>
          <div class="form-group col-12">
             <label>Type</label>
            <select name="type" class="form-control">
            <option <?php if ($type=="evenement interne") echo "selected"?>>evenement interne</option>         
            <option <?php if ($type=="evenement externe") echo "selected"?>>evenement externe</option>         
            </select>  
         </div>
      </div>
    <div class="row">
      <div class="form-group col-12">
              <label>Date</label>
            <input type="date" name="date" class="form-control" placeholder="date" value="<?php echo $date?>">   
         </div>
     <div class="form-group col-12">
             <label>Heure</label>
            <input type="time" name="heure" class="form-control" placeholder="heure" value="<?php echo $heure?>">   
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


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/cb35c347cc.js" crossorigin="anonymous"></script>

  </body>
</html>
