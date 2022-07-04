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
  <body class="bg-light" class="body">
    <?php include('menuabonne.php');?>
    <br>
  <div class="container">
       <form class="" id="" name="" method="post" action="modifierinfoabonne.php">
     	<div class="row d-flex justify-content-center" style="margin-top:-40px">
            <div class="col-md-12 mt-8 pt-5">
             	<div class="row z-depth-3" >
                 	<div class="col-sm-4 bg-dark rounded-left" style="color:green">
        		        <div class="card-block text-center text-white">
                            <img style="width:110px;height:110px;border-radius:500px;margin-top:5px;" src="../images/<?php echo $_SESSION['user']['photo'];?>"/>
                    		<h2 class="font-weight-bold mt-4"><?php echo $_SESSION['user']['nom'];?></h2>
                    		<p><?php echo $_SESSION['user']['abonnement'];?></p><i class="far fa-edit fa-2x mb-4"></i>
                		</div>
            		</div>
            		<div class="col-sm-8  rounded-right">
                    	<h3 class="mt-3 text-center text-danger">Information</h3>
                    	<hr class="bg-dark mt-0 w-25">
                   		<div class="row">
                        	<div class="col-sm-6">
                            	<p class="font-weight-bold">Email:</p>
                           		<h6 class=" text-muted"><?php echo $_SESSION['user']['email'];?></h6>
                        	</div>
                        	<div class="col-sm-6">
                            	<p class="font-weight-bold">Téléphone:</p>
                           		<h6 class="text-muted"><?php echo $_SESSION['user']['telephone'];?></h6>
                        	</div>
                    	</div>
                    		
                    		<hr class="bg-dark">
                   		<div class="row">
                        	<div class="col-sm-6">
                           		<p class="font-weight-bold">salle</p>
                          	  	<h6 class="text-muted"><?php echo $_SESSION['user']['salle'];?></h6>
                        	</div>
                        	<div class="col-sm-6">
                            	<p class="font-weight-bold">abonnement</p>
                            	<h6 class="text-muted"><?php echo $_SESSION['user']['abonnement'];?></h6>
                        	</div>
                    	</div>
                      <!-- <div class="row">
                        	<div class="col-sm-6">
                          <p class="font-weight-bold">adresse</p>
                            	<h6 class="text-muted"><?php echo $_SESSION['user']['adresse'];?></h6>
                        	</div>
                        	<div class="col-sm-6">
                          <p class="font-weight-bold">code postal</p>
                            	<h6 class="text-muted"><?php echo $_SESSION['user']['zip'];?></h6>
                        	</div>
                    	</div>
                      <div class="row">
                        	<div class="col-sm-6">
                          <p class="font-weight-bold">ville</p>
                            	<h6 class="text-muted"><?php echo $_SESSION['user']['ville'];?></h6>
                        	</div>
                        	<div class="col-sm-6">
                          <p class="font-weight-bold">Mot de passe</p>
                            	<h6 class="text-muted"><?php echo $_SESSION['user']['motdepasse'];?></h6>
                        	</div>
                    	</div> -->
                     
                      <!-- <div class="col-sm-6">
                            
                        	</div>
                    	</div> -->
                 
                	   	<hr class="bg-dark">
                	    <ul class="list-unstyled d-flex justify-content-center mt-4">
                            <input type="submit" style="background-color:#A9A9A9;color:white;border-radius: 10px;" value="modifier mes informations">
	               		</ul>  
              		</div>
             	</div>
            </div>
        </div>
      </form>
  </div>
  <br><br><br>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>



  </body>
</html>
