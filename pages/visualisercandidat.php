<?php
  require_once("identifier.php");
  require_once("connexiondb.php");

  $id=$_GET['idcand'];
  $requete="select *from candidats where idcand=$id ";
  $resultatR=$pdo->query($requete);
?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Profil candidat</title>

	<link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../assets/image/m34crossfit.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    

  </head>
  <body class="bg-light">
    <?php include('menuRH.php');?>
    <br>
  <div class="container">
       <form class="" id="" name="" method="post" action="envoyeremail.php">
        <?php while($candidats=$resultatR->fetch()){ ?>
     	<div class="row d-flex justify-content-center" style="margin-top:-30px">
            <div class="col-md-10 mt-5 pt-5">
             	<div class="row z-depth-3" >
                 	<div class="col-sm-4 bg-dark rounded-left" style="color:green">
        		        <div class="card-block text-center text-white">
                            <i class="fas fa-user-tie fa-7x mt-5"></i>
                    		<h2 class="font-weight-bold mt-4"><?php echo $candidats['prenom'];?>&nbsp;<?php echo $candidats['nom'];?></h2>
                		</div>
            		</div>
            		<div class="col-sm-8 bg-white rounded-right">
                    	<h4 class="mt-3 text-center text-dark">Information</h4>
                    	<hr class="bg-primary mt-0 w-25">
                   		<div class="row">
                        	<div class="col-sm-6">
                            	<p class="font-weight-bold">Email:</p>
                           		<h6 class=" text-muted"><?php echo $candidats['email'];?></h6>
                        	</div>
                        	<div class="col-sm-6">
                            	<p class="font-weight-bold">Téléphone:</p>
                           		<h6 class="text-muted"><?php echo $candidats['telephone'];?></h6>
                        	</div>
                    	</div>
                        <div class="row">
                        	<div class="col-sm-6">
                            	<p class="font-weight-bold">Date de naissance:</p>
                           		<h6 class=" text-muted"><?php echo $candidats['dateNaissance'];?></h6>
                        	</div>
                        	<div class="col-sm-6">
                            	<p class="font-weight-bold">Genre:</p>
                           		<h6 class="text-muted"><?php echo $candidats['genre'];?></h6>
                        	</div>
                    	</div>
                    		<h4 class="mt-3">poste et niveau</h4>
                    		<hr class="bg-primary">
                   		<div class="row">
                        	<div class="col-sm-6">
                           		<p class="font-weight-bold">Niveau d'étude</p>
                          	  	<h6 class="text-muted"><?php echo $candidats['niveau'];?></h6>
                        	</div>
                        	<div class="col-sm-6">
                            	<p class="font-weight-bold">Poste</p>
                            	<h6 class="text-muted"><?php echo $candidats['poste'];?></h6>
                        	</div>
                    	</div>
                        <h4 class="mt-3">DOCUMENT ATTACHÉ</h4>
                    		<hr class="bg-primary">
                   		<div class="row">
                        	<div class="col-sm-6">
                           		<p class="font-weight-bold">CV</p>
                          	  <h6 class="text-muted"><?php echo $candidats['cv'];?></h6><a href="telechargementcv.php?id=<?php  echo $candidats['idcand'];?>" ><img src="../assets/image/arrow-down-circle.svg" alt="arrow"><i class="bi bi-arrow-down-circle"></i></a>
                        	</div>
                        	<div class="col-sm-6">
                            	<p class="font-weight-bold">Lettre de Motivation</p>
                                <h6 class="text-muted"><?php echo $candidats['lettre'];?></h6><a href="telechargementlettre.php?id=<?php  echo $candidats['idcand'];?>" ><img src="../assets/image/arrow-down-circle.svg" alt="arrow"><i class="bi bi-arrow-down-circle"></i></a>
                        	</div>
                    	</div>
                	   	<hr class="bg-primary">
                	    <ul class="list-unstyled d-flex justify-content-center mt-4">
                            <a style="background: #212121;padding: 10px 18px;text-decoration: none;color: #fff;display: inline-block;margin: 30px 0;border-radius: 5px;" href="emailconfirmation.php?id=<?php  echo $candidats['idcand'];?>">Envoyer un email de confirmation</a>
	               		</ul>  
              		</div>
             	</div>
            </div>
        </div>
        <?php }?>
      </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/cb35c347cc.js" crossorigin="anonymous"></script>




  </body>
</html>
