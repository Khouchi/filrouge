<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.84.0">
    <title>inscription</title>
    
    <link rel="icon" type="image/x-icon" href="../assets/image/m34crossfit.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"/>

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
      .inscform{
            background: white;
            width: 55%;
            height: 100%;
            padding: 25px 25px 25px 25px;
            border-radius: 20px;
            margin-left: 300px;
          }
      .container img{
              width: 120px;
              height: 120px;
              margin-top: -30px;
              margin-bottom: 30px;
              margin-right: 100px;
              margin-left: 550px;
          }
          h1{
              text-align: center;
              margin-left: 100px;
          }
          .insc{
           text-align: right;
           margin-top: -30px;
          }
    </style>
 
  </head>
  <body>
    <?php include('menu.php');?>
    <br>
    <h1>Inscrivez-vous</h1>
    <br> 
    
    <div class="container">
    <img src="../images/undraw_profile_pic_ic5t.svg">
    
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
              <label>Nom d'utilisateur</label>
            <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom d'utilisateur">   
         </div>
     <div class="form-group col-6">
             <label>Téléphone</label>
            <input type="number" name="telephone" class="form-control" id="tel" placeholder="Téléphone">   
         </div>
         </div>
         <div class="row">
      <div class="form-group col-6">
              <label>Salle</label>
            <input type="text" name="salle" class="form-control" id="salle" placeholder="INITIAL/SOUTH/EAST">   
     
            </div>
     <div class="form-group col-6">
             <label>Abonnement</label>
            <input type="text" name="abonnement" class="form-control" id="abonnement" placeholder="abonnement">   
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

<script>
      document.querySelector('#inscrire').onclick = function(){
          var password = document.querySelector('#password').value,
          confirmpassword = document.querySelector('#confirmpassword').value,
          photo = document.querySelector('#photo').value,
          email = document.querySelector('#email').value,
          date = document.querySelector('#date').value,
          nom = document.querySelector('#nom').value,
          tel = document.querySelector('#tel').value,
          salle = document.querySelector('#salle').value,
          abonnement = document.querySelector('#abonnement').value;
         if(password=="" || photo=="" || email=="" || date=="" || nom=="" || tel=="" || salle=="" || abonnement==""){
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>
