<?php
   require_once("identifier.php");
  require_once("connexiondb.php");
  $requete="select *from annoncement";
  $resultatR=$pdo->query($requete);
?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.84.0">
    <title>annoncements</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../assets/image/m34crossfit.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">







  </head>
  <body class="fond">
    <?php include('menuRH.php');?>
    <br>
  <form method="post" action="ajouterannonce.php" class="form" >
  <div class="modal fade" id="ajoutannonce" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter une annonce</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <div class="row text-light">
         
         <div class="form-group col-12"> 
            <label>Titre</label>
            <input type="text" name="titre" class="form-control" placeholder="Titre" id="titre">     
         </div>
     </div>
    <div class="row">
         <div class="form-group col-12">
         <label>description</label>
         <textarea id="mytextarea" name="t1" rows="6" cols="35" id="t1"></textarea>
         </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
        <button type="submit" class="btn btn-primary">poster</button>
      </div>
    </div>
  </div>
</div>
      </form>
  <div class="container">
       
  <div class="bouttonannonce">
  <div>
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ajoutannonce">
  Ajouter une annonce
</button>
      </div>
    </div>
       <div class="panel panel-success margetop">
   <!-- <div class="panel-heading">Recherche</div>
    <div class="panel-body">
        contenu
        </div>
    <div class="panel panel-primary margetop">
    <div class="panel-heading">Liste des réunion</div>-->
    <div class="panel-body">
        <table class=tablecontent>
        <thead class=tablecolor>
         <tr>
            <th>TITRE</th>
            <th>CONTENU</th>
            <th>ACTION</th>
            </tr>
        
        </thead>
        <tbody>
            <?php while($annoncement=$resultatR->fetch()){ ?>
            <tr class=lignecolor>
            <td width="25%" valign="top"><?php echo $annoncement['titre'] ?></td>
            <td width="25%"><?php echo $annoncement['description'] ?></td>
            <td>
            <a href="modifierannonce.php?idannonce=<?php echo $annoncement['idannonce']?>"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
            <a onclick="return confirm('Etes vous sûr de vouloir supprimer l\'annonce')" href="supprimerannonce.php?idannonce=<?php echo $annoncement['idannonce']?>"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
        </div>
    </div>
  </div>


<!--JS Bootstrap -->

<script src="https://kit.fontawesome.com/cb35c347cc.js" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
