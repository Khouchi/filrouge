<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Inscrption</title>
   
  <!--CSS Bootstap -->
  <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../assets/image/m34crossfit.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    
    <!-- Favicons -->



        

 
  </head>
  <body class="body">
    <?php include('menu.php');?>
    <br>
     <!-- Custom styles for this template -->
     <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="body">
  <html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>Inscrivez-vous</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">

    

  
 

    <div class="container">
      <div class="py-5 text-center">
       
        <h2 class="text-danger">Inscrivez-vous</h2>
      
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <br>
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Tarif</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Formule unique</h6>
                <small class="text-muted">10 SEANCES</small>
              </div>
              <span class="text-muted">12€</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Formule unique</h6>
                <small class="text-muted">1 Séance</small>
              </div>
              <span class="text-muted">49€</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Formule unique</h6>
                <small class="text-muted">1 à 2 séances</small>
              </div>
              <span class="text-muted">65€</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Formule unique</h6>
                <small>1 à 4 séances</small>
              </div>
              <span class="text-success">65€</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
            <div class="text-success">
                <h6 class="my-0">Formule unique</h6>
                <small>Crossfit 5</small>
              </div>
              <span class="text-success">85€</span>
            </li>
          </ul>

        </div>
        <div class="col-md-8 order-md-1">
             
        <div class="container">
   
    
   <div class="inscform">
       
      <form class="" id="" name="" enctype="multipart/form-data" method="post" action="ajouterabonne.php">
       <div class="row">
       <div class="form-group col-12"> 
             <label >Photo</label>
             <input type="file" name="photo" class="form-control" id="photo" placeholder="photo">     
          </div>
       </div>  
       <div class="row">
       <div class="form-group col-6"> 
             <label>Email</label>
             <input type="email" name="email" class="form-control" id="email" placeholder="Email">     
          </div>
          <div class="form-group col-6"> 
              <label>Date de naissance</label>
             <input type="date" name="date" class="form-control" id="date" placeholder="Date de naissance">      
          </div>
       </div>
     <div class="row">
       <div class="form-group col-6">
               <label>Nom </label>
             <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom">   
          </div>
      <div class="form-group col-6">
              <label>Téléphone</label>
             <input type="number" name="telephone" class="form-control" id="tel" placeholder="Téléphone">   
          </div>
          </div>
          <div class="row">
       <div class="form-group col-6">
               <label>prenom </label>
             <input type="text" name="prenom" class="form-control" id="prenom" placeholder="prenom">   
          </div>
      <div class="form-group col-6">
              <label>code postal</label>
             <input type="number" name="zip" class="form-control" id="zip" placeholder="code postal">   
          </div>
          </div>
          <div class="row">
       <div class="form-group col-6">
               <label>ville </label>
             <input type="text" name="ville" class="form-control" id="ville" placeholder="ville">   
          </div>
          <div class="form-group col-6">
               <label>adresse </label>
             <input type="text" name="adresse" class="form-control" id="adresse" placeholder="adresse">   
          </div>
     
          </div>
      <div class="row">
       <div class="form-group col-6">
               <label>abonnement</label>
            
             <select type="text" name="abonnement" class="form-control" id="abonnement" placeholder="abonnement">
             <option>Carnet 10 seances</option>
            <option >1 séance par semaine</option>
             <option >1 à 2 séances par semaine</option> 
             <option>1 à 4 séances par semaine</option> 
             <option>Crossfit 5</option> </select>
             
          </div>
      <div class="form-group col-6">
  
              <label>salle</label>
            
             <select type="text" name="salle" class="form-control" id="salle" placeholder="salle">
            <option >Initial</option>
             <option >East</option>
             <option>South</option>           
            </select>   
          </div>
          </div>
      <div class="row">
       <div class="form-group col-6">
               <label>Mot de passe</label>
             <input type="password" name="mt" class="form-control" id="password" placeholder="Mot de passe">   
          </div>
      <div class="form-group col-6">
              <label>Confirmer le mot de passe</label>
             <input type="password" name="confirmer le mot de passe" class="form-control" id="confirmpassword" placeholder="Confirmer le mot de passe">   
          </div>
          </div>
      
     <br>     
     <div class="row">
     <div class="form-group col-6">
     <input type="submit" class="btn btn-success" id="inscrire" name="submit" value="S'inscrire">
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
            <!-- footer -->
              
            <footer id="footer" class="text-center text-white" style="background-color: black;">
    <a href="#">Votre Candidature</a>
      <!-- Grid container -->
      <div class="container p-4">
        <!-- Section: Images -->
        <section class="">
          <div class="row">
            <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
              <div
                class="bg-image hover-overlay ripple shadow-1-strong rounded"
                data-ripple-color="light"
              >
                <img
                  src="../assets/image/footer01.png"
                  class="w-100"
                />
                <a href="#!">
                  <div
                    class="mask"
                  
                  ></div>
                </a>
              </div>
            </div>
            <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
              <div
                class="bg-image hover-overlay ripple shadow-1-strong rounded"
                data-ripple-color="light"
              >
                <img
                  src="../assets/image/footer02.png"
                  class="w-100"
                />
                <a href="#!">
                  <div
                    class="mask"
                   
                  ></div>
                </a>
              </div>
            </div>
            <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
              <div
                class="bg-image hover-overlay ripple shadow-1-strong rounded"
                data-ripple-color="light"
              >
                <img
                  src="../assets/image/footer03.png"
                  class="w-100"
                />
                <a href="#!">
                  <div
                    class="mask"
                  
                  ></div>
                </a>
              </div>
            </div>
            <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
              <div
                class="bg-image hover-overlay ripple shadow-1-strong rounded"
                data-ripple-color="light"
              >
                <img
                  src="../assets/image/footer04.png"
                  class="w-100"
                />
                <a href="#!">
                  <div
                    class="mask"
                  
                  ></div>
                </a>
              </div>
            </div>
            <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
              <div
                class="bg-image hover-overlay ripple shadow-1-strong rounded"
                data-ripple-color="light"
              >
                <img
                  src="../assets/image/footer5.png"
                  class="w-100"
                />
                <a href="#!">
                  <div
                    class="mask"
                   
                  ></div>
                </a>
              </div>
            </div>
            <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
              <div
                class="bg-image hover-overlay ripple shadow-1-strong rounded"
                data-ripple-color="light"
              >
                <img
                  src="../assets/image/footer06.png"
                  class="w-100"
                />
                <a href="#!">
                  <div
                    class="mask"
              
                  ></div>
                </a>
              </div>
            </div>
          </div>
        </div>
        </section>
        
      
        <!-- Section: Images -->
      </div>
     
        
        
      <!-- Grid container -->
    
  
      <!-- Copyright -->
      <div class="text-end  p-3" style="background-color: rgba(6, 0, 0, 0.2);">
       
        <div class="container">
          <div class="row ">
              <div class="col-12">
                 
                  <div class="second2 ">
                      <a href="#" target="_blank"> <i class="fab fa-facebook fa-2x margin "></i></a>
                      <a href="#"><i targer="_blank" class="fab fa-instagram fa-2x margin " aria-hidden="true"></i></a>
                      <a href="#" target="_blank"><i class="fab fa-youtube fa-2x margin " ></i></a>

                  </div>

              </div>
          </div>
          </div>
  </div>
 

  
    
    

         
         









  

</body></html>


  <!-- EN JS JENVOI LA DEMA?DE VERS LA PAGE AJOUTERABONNE  -->
<script> 
      document.querySelector('#inscrire').onclick = function(){
          var password = document.querySelector('#password').value,
          confirmpassword = document.querySelector('#confirmpassword').value,
          photo = document.querySelector('#photo').value,
          email = document.querySelector('#email').value,
          date = document.querySelector('#date').value,
          nom = document.querySelector('#nom').value,
          tel = document.querySelector('#tel').value,
          prenom = document.querySelector('#prenom').value,
          adresse = document.querySelector('#adresse').value,
          ville = document.querySelector('#ville').value,
          zip = document.querySelector('#zip').value,
          salle = document.querySelector('#salle').value,
          prenom = document.querySelector('#prenom').value,
          abonnement = document.querySelector('#abonnement').value;
         if(password=="" || photo=="" || email=="" || date=="" || nom=="" || tel=="" || salle=="" || prenom==""|| abonnement==""){
             alert("vérifier que vous avez bien remplis tous les champs svp !");
             return false;
         }
         else if(password !=confirmpassword ){
             alert("le mot de passe ne correspond pas réessayez ! ");
             return false;
         }
         else return true;
      }
</script>




<script src="https://kit.fontawesome.com/cb35c347cc.js" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
