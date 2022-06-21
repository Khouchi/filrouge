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
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Abonnés</title>

    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
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
      .lignecolor{
        background: white;
        text-align: center;
    }
      .tablecolor{
        background: #228B22;
        color: white;
        font-weight: bold;
        font-family:serif;
        padding: 12px 15px;
        text-align: center;
    }
      .tablecontent{
        border-radius: 10px 10px 0 0;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0,0,0,0.15);
        width: 100%;
        height: 100%;
    }
    .pagination {
     display: inline-block;

     
     }

   .pagination a {
     color: green;
     background-color: white;
     float: left;
     margin-top: 20%;
     padding: 8px 16px;
     text-decoration: none;
     border-radius: 30px 30px 30px 30px;
}
  
    </style>
 <link href="navbar-top.css" rel="stylesheet">
 
      
      
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">

  </head>
  <body>
  <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M34CrossFit</title>
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="icon" type="image/x-icon" href="../assets/image/m34crossfit.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="assets/css/style.css">

</head>
<body class="body">
<!--NAV-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark " id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#page-top"><img src="../assets/image/m34crossfit.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
         
               <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                 
               <li class="nav-item"><a class="nav-link" href="profilRH.php">Profil</a></li>
                    <li class="nav-item">
          <a class="nav-link">Abonnes</a>
             <ul>
              <li class="nav-item">
                  <a class="nav-link" href="abonne.php" >Liste Des Abonnés</a> 
              </li> 
              <li class="nav-item">
                  <a class="nav-link" href="archives.php" >Abonnés Archivés</a> 
              </li>
              </ul>
        </li>
                   
            </ul>

        
        <div class="text-end">
        <form class="d-flex">
        <a class="btn btn-outline-success" style="border-radius: 25px;" href="deconnecter.php">Se déconnecter</a>
      </form>
          
          
        </div>
     
    </div>
    </div>
</nav>

    <br>
  <div class="container">
       
       <div class="panel panel-success margetop">
    <div  class="panel-heading" style=" display: inline-block;width: 500px;height: 100px;color:white; font-size:xx-large;">>Liste des Abonnes</div>
    <div class="panel-body">
    <form method="get" action="abonne.php">
       <div class="search-box" style="margin-left:5em">
       <button type="submit" class="btn-search"><i class="fa fa-search " ></i></button>
           <input type="text" name="nomE" class="input-search" placeholder="Tapez pour chercher...">
  </div>
     </form>
        </div>
    <form method="get" action="modifierabonne.php">
    <div class="panel panel-primary margetop">
    <div class="panel-body">
        <table class=tablecontent>
        <thead class=tablecolor>
        <tr>
            <th></th>
            <th>NOM</th>
            <th>ABONNEMENTS</th>
            <th>EMAIL</th>
            <th>TELEPHONE</th>
            <th></th>
          </tr>
        
        </thead>
        <tbody>
            <?php while($abonnes=$resultatR->fetch()){ ?>
            <tr class=lignecolor>
            <td><img style="width:80px;height:80px;border-radius:500px;" src="../images/?php echo $abonnes['photo']?>"/></td>
            <td><?php echo $abonnes['nom'] ?></td>
            <td><?php echo $abonnes['abonnement'] ?></td>
            <td><?php echo $abonnes['email'] ?></td>
            <td><?php echo $abonnes['telephone'] ?></td>
            <td>
              <!-- modifier supprimier active -->
            <a href="modifierabonne.php?idemp=<?php echo $abonnes['idemp']?>" ><img src="../images/pencil-square.svg" alt=""><i class="bi bi-pencil-square"></i></a>
            
            <a onclick="return confirm('Etes vous sûr de vouloir archiver l\'abonnes')" href="supprimerabonne.php?idemp=<?php echo $abonnes['idemp'] ?>">X<i class="bi bi-trash3-fill"></i></a>
            
            <a href="activerabonne.php?idemp=<?php echo $abonnes['idemp']?>&etat=<?php echo $abonnes['etat']?>">
            <?php
                if ($abonnes['etat']==0) {?>
                    <span class="material-icons">Done</span>
              <?php }?>  
            <?php
                if ($abonnes['etat']==1) {?>
                    <span class="material-icons">Close</span>
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

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/cb35c347cc.js" crossorigin="anonymous"></script>

  </body>
</html>
