<?php
 require_once("identifier.php");
?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Espace RH</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-static/">
    <link rel="stylesheet" href="fichier.css">
    

    <!-- Bootstrap core CSS --> <link rel="icon" type="image/x-icon" href="../assets/image/m34crossfit.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"/>

    
    <!-- Favicons -->



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
     nav div ul li ul li{
        display: none;
        
    }
    nav div ul li:hover ul li{
        display: block;
    }
    </style>

    
  </head>
  <body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
   <div class="container-fluid">
   <!--fluid c-a-d s'adapte à la taille d'écran-->
   <a href="#"><img src="../assets/image/m34crossfit.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link" href="profilRH.php">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link">Abonnes</a>
             <ul>
              <li class="nav-item">
                  <a class="nav-link" href="abonne.php" >Liste Des Abonnés</a> 
              </li> 
              <li class="nav-item">
                  <a class="nav-link" href="archives.php" >Abonnés Archivés</a> 
              </li>
              </ul>
        </li>
        
        <li>
          <li class="nav-item">
          <a class="nav-link" href="evenement.php">Evenement</a>
        </li>
        <li>
         <li class="nav-item">
          <a class="nav-link" href="annoncements.php">Annoncements</a>
        </li> 
        
        <form class="d-flex">
        <a class="btn btn-outline-success" style="border-radius: 25px;" href="deconnecter.php">Se déconnecter</a>
      </form>
    </div>
 </div>
</nav>



    
    





    
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly"
      defer
    ></script>

<script src="https://kit.fontawesome.com/cb35c347cc.js" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>  
</body>
</html>

