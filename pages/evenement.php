<?php
   require_once("identifier.php");
  require_once("connexiondb.php");
  $requete="select *from evenement";
  $resultatR=$pdo->query($requete);
?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.84.0">
    <title>evenement</title>


    <!-- CSS Bootstap  -->
  <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../assets/image/m34crossfit.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    
   

    
  </head>
  <body class="body">
    <?php include('menuRH.php');?>
    <br>


<!-- Modal -->
<form method="post" action="ajouterevenement.php" class="form" >
<div class="modal fade" id="ajoutevenement" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div  class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter une evenement</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <div class="row">
         
         <div class="form-group col-12"> 
            <label>Titre</label>
            <input type="text" name="titre" class="form-control" placeholder="Titre" id="titre">     
         </div>
     </div>
          <div class="row">
      <div class="form-group col-12">
             <label>Type</label>
            <select name="type" class="form-control">
            <option >evenement a la salle</option>
             <option >evenement externe</option>           
            </select>  
         </div>
      </div>
    <div class="row">
      <div class="form-group col-6">
             <label>date de evenement</label>
            <input type="date" name="debutdeevenement" class="form-control" placeholder="date de evenement" id="debut">   
         </div>
        <div class="form-group col-6">
            <label for="time">heure de evenement</label>
            <input type="time" name="heure" class="form-control" placeholder="heure de evenement" id="heure" >   
         </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
      </div>
    </div>
  </div>
</div>
      </form>
  <div class="container">
       
  <div class="bouttonevenement">
  <div>
    <!--<a class="btn btn-success" href="" >Ajouter une evenement </a>-->
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ajoutevenement">
  Ajouter une evenement
</button>
      <!--href="formuleevenement.php"  type="submit"-->
      </div>
    </div>

    <form method="get" action="modifierevenement.php">
    <div class="panel panel-primary margetop">
    <div class="panel-body">
        <table class=tablecontent>
        <thead class=tablecolor>
         <tr>
            <th>TITRE</th>
            <th>TYPE</th>
            <th>DATE</th>
            <th>HEURE</th>
            <th>ACTION</th>
            </tr>
        
        </thead>
        <tbody>
            <?php while($evenement=$resultatR->fetch()){ ?>
            <tr class=lignecolor>
            <td><?php echo $evenement['titre'] ?></td>
            <td><?php echo $evenement['type'] ?></td>
            <td><?php echo $evenement['dateevenement'] ?></td>
            <td><?php echo $evenement['heureevenement'] ?></td>
            <td>
              <!-- balise modifier supprimer -->
           

            <a  href="modifierevenement.php?idevenement=<?php echo $evenement['idevenement']?>"><img src="../images/pencil-square.svg" alt="edit"><i class="bi bi-pencil-square"></i></a>

            <a onclick="return confirm('Etes vous sûr de vouloir supprimer la evenement')" href="supprimerevenement.php?idevenement=<?php echo $evenement['idevenement']?>"><img src="../assets/image/archive-fill.svg" alt=""><i class="bi bi-trash3-fill" ></i></a></td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
        </div>
        </div>
        </form>
    </div>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/cb35c347cc.js" crossorigin="anonymous"></script>


  </body>
</html>