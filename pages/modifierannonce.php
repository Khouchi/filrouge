<?php
 require_once("identifier.php");
 require_once("connexiondb.php");
 $idannonce=isset($_GET['idannonce'])?$_GET['idannonce']:0;
 $requete="select *from annoncement where idannonce=$idannonce";
 $resultat=$pdo->query($requete);
 $annoncement=$resultat->fetch();

 $titreA=$annoncement['titre'];
 $descriptionA=$annoncement['description'];

?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Aymen Khouchi">
    <meta name="generator" content="Hugo 0.84.0">
    <title>modifier annonce</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-static/">

      <!--CSS Bootstap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
     

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


 <link href="navbar-top.css" rel="stylesheet">
 <link rel="stylesheet" href="fichier.css">
    
    <!-- Favicons -->


  </head>
  <body>
    <?php include('menuRH.php');?>
    
    <div class="container">
    
  <div class="inscform">
      
     <form class="" id="" name="" method="post" action="modificationannonce.php">
         
      <div class="row">
         
         <div class="form-group col-12"> 
            <label>Titre</label>
            <input type="hidden" name="id" class="form-control" placeholder="id" value="<?php echo $idannonce?>">
            <input type="text" name="titre" class="form-control" placeholder="Titre" id="titre" value="<?php echo $titreA?>">     
         </div>
     </div>
    <div class="row">
         <div class="form-group col-12">
         <label>description</label>
         <textarea id="mytextarea" name="t1" rows="6" cols="35" id="t1" ><?php echo $descriptionA?></textarea>
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
<!--JS Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
