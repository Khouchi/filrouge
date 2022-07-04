<?php
  
  require_once("identifier.php");
  require_once("connexiondb.php");
  $size=isset($_GET['size'])?$_GET['size']:6;
  $page=isset($_GET['page'])?$_GET['page']:1;
  $offset=($page-1)*$size;

  $nomE=isset($_GET['nomE'])?$_GET['nomE']:"";
  $requete="select *from abonnes where nom like '%$nomE%' limit $size offset $offset";

  $requetecount="select count(*) countE from abonnes where nom like '%$nomE%'";
  $resultatR=$pdo->query($requete);

  $resultatcount=$pdo->query($requetecount);
  $tabcount=$resultatcount->fetch();
  $nbabonnes=$tabcount['countE'];

  $reste=$nbabonnes % $size;
  if($reste===0){
      $nbpage=$nbabonnes/ $size;
  }
  else $nbpage=floor($nbabonnes/$size)+1;
?>

  <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste abonnes</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../assets/image/m34crossfit.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    
</head>
<body class="body">
<!--NAV-->
<?php include('menuRH.php');?>
    <br>
  


    <br>
  <div class="container">
       
       <div class="panel panel-success margetop">
   <h1>>Liste des Abonnes</h1> 
    <div class="panel-body">
    <form method="get" action="abonne.php">
       <div class="search-box" style="margin-left:5em">
       <button type="submit" class="btn-search"><i class="fa fa-search " ></i></button>
           <input type="text" name="nomE" class="input-search" placeholder="Tapez pour chercher...">
  </div>
     </form>
        </div>
    <form method="get" action="modifierabonne.php">

</form>
<br>
  <!-- tableau -->

  <div class="table-responsive">
        <table class="table table-striped table-sm ">
          <thead>
            <tr class="btn-success">
              <th scope="col"></th>
              <th scope="col">NOM</th>
              <th scope="col">abonnement</th>
              <th scope="col">EMAIL</th>
              <th scope="col">TELEPHONE</th>
              <th scope="col">salle</th>
              <th scope="col">action</th>
            </tr>
          </thead>
        <tbody>
            <?php while($abonnes=$resultatR->fetch()){ ?>
            <tr class=lignecolor>
            <td><img style="width:80px;height:80px;border-radius:500px;" src="../images/<?php echo $abonnes['photo']?>"/></td>
            <td><?php echo $abonnes['nom'] ?></td>
            <td><?php echo $abonnes['abonnement'] ?></td>
            <td><?php echo $abonnes['email'] ?></td>
            <td><?php echo $abonnes['telephone'] ?></td>
            <td><?php echo $abonnes['salle'] ?></td>
            <td>
              <!-- modifier supprimier active -->
            <a href="modifierabonne.php?idemp=<?php echo $abonnes['idemp']?>" ><img src="../images/pencil-square.svg" alt=""><i class="bi bi-pencil-square"></i></a>
            
            <a onclick="return confirm('Etes vous sûr de vouloir archiver l\'abonnes')" href="supprimerabonne.php?idemp=<?php echo $abonnes['idemp'] ?>"><img src="../assets/image/archive-fill.svg" alt=""><i class="bi bi-trash3-fill"></i></a>
            
            <a href="activerabonne.php?idemp=<?php echo $abonnes['idemp']?>&etat=<?php echo $abonnes['etat']?>">
            <?php
                if ($abonnes['etat']==0) {?>
                    <span class="material-icons"><img src="../assets/image/check-circle-fill.svg" alt=""></span>
              <?php }?>  
            <?php
                if ($abonnes['etat']==1) {?>
                    <span class="material-icons"><img src="../assets/image/x-circle.svg" alt=""></span>
              <?php }?>
             </a>
            </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
        <div>
						<ul class="pagination">
							<?php for($i=1;$i<=$nbpage;$i++){ ?>
                                    <li><a href="abonne.php?page=<?php echo $i; ?>&nomE=<?php echo $nomE; ?>"><?php echo $i; ?></a></li>
							<?php } ?>	
						</ul>
					</div>
                        
        </div>
    </div>
    </form>
  </div>
      </div>






      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/cb35c347cc.js" crossorigin="anonymous"></script>




  </body>
</html>
