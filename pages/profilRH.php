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
    <title>Profil</title>
   
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../assets/image/m34crossfit.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">




    
 

  </head>
  <body>
    <?php include('menuRH.php');?>
    <br>
  <div class="container">
        <form class="" id="" name="" method="post" action="modifierinforh.php">
     	<div class="row d-flex justify-content-center" style="margin-top:-30px">
            <div class="col-md-10 mt-5 pt-5">
             	<div class="row z-depth-3" >
                 	<div class="col-sm-4 bg-dark rounded-left" style="color:green">
        		        <div class="card-block text-center text-white">
                		    <!--<i class="fas fa-user-tie fa-7x mt-5"></i>-->
                            <img style="width:110px;height:110px;border-radius:500px;margin-top:5px;" src="../images/<?php echo $_SESSION['user']['photo'];?>"/>
                    		<h2 class="font-weight-bold mt-4"><?php echo $_SESSION['user']['prenom'];?>&nbsp;<?php echo $_SESSION['user']['nom'];?></h2>
                    		<p><?php echo $_SESSION['user']['poste'];?></p><i class="far fa-edit fa-2x mb-4"></i>
                		</div>
            		</div>
            		<div class="col-sm-8 bg-white rounded-right">
                    	<h3 class="mt-3 text-center">Information</h3>
                    	<hr class="bg-primary mt-0 w-25">
                   		<div class="row">
                        	<div class="col-sm-6">
                            	<p class="font-weight-bold">Email:</p>
                           		<h6 class=" text-muted"><?php echo $_SESSION['user']['email'];?></h6>
                        	</div>
                    	</div>
                    		<h4 class="mt-3">POSTE</h4>
                    		<hr class="bg-primary">
                   		<div class="row">
                        	<div class="col-sm-6">
                           		<p class="font-weight-bold">Salle</p>
                          	  	<h6 class="text-muted"><?php echo $_SESSION['user']['salle'];?></h6>
                        	</div>
                        	<div class="col-sm-6">
                            	<p class="font-weight-bold">Fonction</p>
                            	<h6 class="text-muted"><?php echo $_SESSION['user']['poste'];?></h6>
                        	</div>
                    	</div>
                	   	<hr class="bg-primary">
                	    <ul class="list-unstyled d-flex justify-content-center mt-4">
                            <input type="submit" style="background-color:#A9A9A9;color:white;border-radius: 10px;" value="modifier mes informations">
	               		</ul>  
              		</div>
             	</div>
            </div>
        </div>
      </form>
  
  </div>

  <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly"
      defer
    ></script>

<script src="https://kit.fontawesome.com/cb35c347cc.js" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script> 

  </body>
</html>
