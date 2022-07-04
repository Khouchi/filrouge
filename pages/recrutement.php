<?php
  
  require_once("identifier.php");
  require_once("connexiondb.php");
  $size=isset($_GET['size'])?$_GET['size']:6;
  $page=isset($_GET['page'])?$_GET['page']:1;
  $offset=($page-1)*$size;

  $poste=isset($_GET['poste'])?$_GET['poste']:"";
  $requete="select *from candidats where poste like '%$poste%' limit $size offset $offset";

  $requetecount="select count(*) countE from candidats where poste like '%$poste%'";
  $resultatR=$pdo->query($requete);

  $resultatcount=$pdo->query($requetecount);
  $tabcount=$resultatcount->fetch();
  $nbcandidats=$tabcount['countE'];

  $reste=$nbcandidats % $size;
  if($reste===0){
      $nbpage=$nbcandidats / $size;
  }
  else $nbpage=floor($nbcandidats/$size)+1;
?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.84.0">
    <title>recrutements</title>
 <!--CSS Bootstap -->
 <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../assets/image/m34crossfit.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    

  </head>
  <body>
    <?php include('menuRH.php');?>
    <br>
  <div class="container">
       
       <div class="panel panel-success margetop">
    <div  class="panel-heading" style=" display: inline-block;width: 500px;height: 100px;color:red; font-size:xx-large;">>Liste des candidats</div>
    <div class="panel-body">
    <form method="get" action="recrutement.php">
       <div class="search-box" style="margin-left:5em">
       <button type="submit" class="btn-search"><i class="fa fa-search " ></i></button>
           <input type="text" name="poste" class="input-search" placeholder="chercher par poste...">
  </div>
     </form>
        </div>
    <form method="get" action="profilcandidat.php">
    <div class="panel panel-primary margetop">
    <div class="panel-body">
        <table class=tablecontent>
        <thead class=tablecolor>
          <br>
         <tr>
            <th>PRENOM</th>
            <th>NOM</th>
            <th>POSTE</th>
            <th>ACTION</th>
            </tr>
        
        </thead>
        <tbody>
            <?php while($candidats=$resultatR->fetch()){ ?>
            <tr class=lignecolor>
            <td><?php echo $candidats['prenom'] ?></td>
            <td><?php echo $candidats['nom'] ?></td>
            <td><?php echo $candidats['poste'] ?></td>
            <td>
            <!-- <a href="modifierabonne.php?idemp=<?php echo $abonnes['idemp']?>" ><img src="../images/pencil-square.svg" alt=""><i class="bi bi-pencil-square"></i></a>
            
            <a onclick="return confirm('Etes vous sûr de vouloir archiver l\'abonnes')" href="supprimerabonne.php?idemp=<?php echo $abonnes['idemp'] ?>"><img src="../assets/image/archive-fill.svg" alt=""><i class="bi bi-trash3-fill"></i></a>
            
            <a href="activerabonne.php?idemp=<?php echo $abonnes['idemp']?>&etat=<?php echo $abonnes['etat']?>"> -->




            <a href="visualisercandidat.php?idcand=<?php echo $candidats['idcand']?>" ><img src="../assets/image/eye.svg" alt="see"><i class="bi bi-eye"></i></a>
            <a onclick="return confirm('Etes vous sûr de vouloir supprimer')" href="supprimercandidat.php?idcand=<?php echo $candidats['idcand'] ?>"><img src="../assets/image/archive-fill.svg" alt=""><i class="bi bi-trash3-fill"></a>
            </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
        <div>
						<ul class="pagination">
							<?php for($i=1;$i<=$nbpage;$i++){ ?>
                                    <li><a href="recrutement.php?page=<?php echo $i; ?>&poste=<?php echo $poste; ?>"><?php echo $i; ?></a></li>
							<?php } ?>	
						</ul>
					</div>
                        
        </div>
    </div>
    </form>
  </div>
      </div>

      <script src="https://kit.fontawesome.com/cb35c347cc.js" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>
