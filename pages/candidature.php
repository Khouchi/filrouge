<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
  
    <meta name="generator" content="Hugo 0.84.0">
    <title>La page de candidature</title>
 <!--CSS Bootstap -->
 <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../assets/image/m34crossfit.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    

  </head>
  <body class="body">
    <?php include('menu.php');?>
    <br>
    <h1 >Formulaire de candidature</h1>
    <br> 
  <div class="container">
    
  <div class="myform">
      
     <form class="" id="" name="" method="post"  enctype="multipart/form-data" action="ajoutercandidature.php">
         
     <div class="row">
         
         <div class="form-group col-6"> 
            <label>Prénom</label>
            <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Prénom">     
         </div>
         <div class="form-group col-6"> 
           <label>Nom</label>
            <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom">     
         </div>
     </div>
     <div class="row">
         <div class="form-group col-6">
             <label>Date de naissance</label>
            <input type="date" name="date" id="date" class="form-control" placeholder="Date de naissance">   
         </div>
         <div class="form-group col-6">
             <label>Genre</label>
            <select name="genre" class="form-control">
            <option>Femme</option>
             <option>Homme</option> 
            </select>   
         </div>
     </div>
         
      <div class="row">
      <div class="form-group col-6">
             <label>Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Email">   
         </div>
     <div class="form-group col-6">
             <label>Téléphone</label>
            <input type="number" name="telephone" id="tel" class="form-control" placeholder="Téléphone">   
         </div>
      </div>
    <div class="row">
      <div class="form-group col-6">
             <label>Poste</label>
            <input type="text" name="poste" id="poste" class="form-control" placeholder="Poste">   
         </div>
     <div class="form-group col-6">
             <label>Niveau</label>
            <input type="text" name="niveau" id="niveau" class="form-control" placeholder="Niveau d'étude">   
         </div>
      </div>
     <div class="row">
      <div class="form-group col-6">
            <label for="file">CV</label>
            <input type="file" name="cv" id="cv" class="form-control" placeholder="CV">   
         </div>
     <div class="form-group col-6">
             <label for="file">Lettre De Motivation</label>
            <input type="file" name="lettre" id="lettre" class="form-control" placeholder="Lettre De Motivation">   
         </div>
      </div>
    <br>     
    <div class="row">
    <div class="form-group col-6">
    <input type="submit" id="soumettre" class="btn btn-success" value="soumettre">
    </div>    
    </div>    
         
     </form> 
  </div>      
  
  </div>

      
<script>
      document.querySelector('#soumettre').onclick = function(){
          var prenom = document.querySelector('#prenom').value,
          nom = document.querySelector('#nom').value,
          date = document.querySelector('#date').value,
          email = document.querySelector('#email').value,
          tel = document.querySelector('#tel').value,
          niveau = document.querySelector('#niveau').value,
          cv = document.querySelector('#cv').value,
          lettre = document.querySelector('#lettre').value,
          poste = document.querySelector('#poste').value;
         if(prenom=="" || nom=="" || date=="" || email=="" || tel=="" || niveau=="" || cv=="" || poste=="" || lettre==""){
             alert("vérifier que vous avez bien remplis tous les champs !");
             return false;
         }
         else return true;
      }
</script>



<script src="https://kit.fontawesome.com/cb35c347cc.js" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
