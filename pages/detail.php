<?php
    //Lancer la session
    session_start();
    if(@$_SESSION["autorise"] != "Oui") {
    header("location:../Index.php");

    require_once ('database/bdd.php');
    $idlivre = isset($_GET["id"]);
    $iduser = $_SESSION['id'];
    $requete = $con->query("SELECT * FROM book ");
    $dateS=getdate();
    $times=gettimeofday();
    if (isset($_POST['send'])){
    
        //La requete pour inserer
        $insertion = $con->prepare("INSERT INTO consultation(DateCons,HeureDebut, iduser,idlivre) VALUES(?,?,?,?)");
        $insertion->execute(array($dateS, $times,$iduser,$idlivre));
    }
    }
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/style.css">
    <title>Livres</title>
</head>
<body>
      <!-- header -->
      <?php
        require_once("../src/header.php");
        ?>

    <!-- Bloc des livres -->
    <div class="container mb-5">
        <div class="row">
            <!-- <div class="container mt-5">
                <img src="../img/Colourful Pile of Old Books.webp" style="height: 60vh;" class="d-block w-100" alt="...">
            </div> -->
            <div class="container mt-5">
                <h1 class="display-5 text-center">Tous les livres</h1>
                <p class="lead text-center">
                    Description de nos livres. C'est l'espace idéal pour consulter nos livres et <br> 
                    attirer leur attention sur nos livres.
                </p>
            </div>
            <div class="container mt-5">
                <div class="row">
                <?php            
                            //On recupere la base de données
                            require_once ('../database/bdd.php');
                            //La requete pour recuperer totes les photos
                           
                            
                          
                            //Boucle pour affiche les images 
                            while ($data = $requete->fetch()){
                            ?>
                    <div class="col col-12 col-md-6 col-lg-3  mt-3">
                        <form action="detail.php" method="POST" >
                        <a type="submit" name="send" href="../admin/images/pdf/<?=$data['files']?>?id=<?=$data['id']?>"><img src="../admin/images/<?=$data['photo']?>" style="width:300px; height:380px;"   class="img-fluid" alt="..."></a>
                        <!-- <p class="h6 mt-3">Titre : <?=$data['files']?></p> -->
                        <p class="h6 mt-3">Titre : <?=$data['livre']?></p>
                        <p class="h6 mt-3">Auteur : <?=$data['auteur']?></p>
                        <p class="h6 mt-3">Categorie : <?=$data['cat']?></p>
                        </form>
                </div>
                <?php
                        }
                        ?>  
                    
        </div>
    </div>
        </div>
      </div>
  
        <!-- footer -->
        <?php
        require_once("../src/footer.php");
        ?>

<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>