<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.84.0">
    <title>récupération de mot de passe</title>

  
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../assets/image/m34crossfit.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">




 
    
    <!-- Favicons -->


  </head>
  <body class="body">
    <?php include('menu.php');?>
<br><br>
    
    <div class="container" style="text-align:center ;">
    
  <div class="inscform" >
      
     <form class="form-group col-8 " id="" name="" enctype="multipart/form-data" method="post" action="inisialisationmotdepasse.php">
       <div class="row">
      <div  class="btn btn-success"  style="text-align:center;"> 
            <label>Inisialiser le mot de passe</label> 
           <br>
         </div>
        <br>
      </div>
        <br>
      <div class="row">
      <div class="form-group col-12" style="text-align:center ;"> 
            <label>Veuillez saisir votre Email de récupération</label>
           <br>
            <input type="email" name="email" class="form-control" id="email" placeholder="Email">     
         </div>
      </div>
        
     
    <br>     
    <div class="row">
    <div class="form-group col-6">
    <input type="submit" class="btn btn-success" id="envoyer" name="submit" value="Inisialiser le mot de passe">
    </div>    
    </div>
     </form> 
  </div>      
  
  </div>

<!--JS Bootstrap -->
  <script src="https://kit.fontawesome.com/cb35c347cc.js" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
