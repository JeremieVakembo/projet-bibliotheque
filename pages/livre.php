<?php
    //Lancer la session
    session_start();
    if(@$_SESSION["abonne"] != "valide") {
    header("location:abonnement.php");
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
            <div class="container mt-3">
                <h1 class="display-5 text-center">Tous les livres</h1>
                <p class="lead text-center">
                    Description de nos livres. C'est l'espace idéal pour consulter nos livres et <br> 
                    attirer leur attention sur nos livres.
                </p>
            </div>
            <form action="" method="GET">
                <div class="input-group mb-3">
                  <input type="search" class="form-control" name="s" placeholder="Rechercher par titre..." aria-label="Recipient's username" aria-describedby="button-addon2">
                  <button class="btn btn-outline-secondary" name="r" type="submit" id="button-addon2">Rechercher</button>
                </div>
                <i style="color:red">
                        <?php
                             if (isset($message)) {
                                echo $message."</br>";
                             }
                            ?></i>
                </form>

                <section>
                <?php
                        //validation du formulaire
                         if (isset($_GET['r'])){
                         //verifier si user a bien completer tous les champs
                        if(!empty($_GET['s'])){
            
                        //les données utilisateurs
                        $search =  htmlspecialchars($_GET['s']);
                       
                        //On recupere la base de données
                        require_once ('../database/bdd.php');
                        //La requete pour rechercher
                        $rechercher = $con->query("SELECT livre FROM book WHERE livre LIKE '%$search%' ");
                        if ($rechercher->rowCount() > 0) {
                            echo "<h4 class='text-center'>Ce livre existe</h4>";
                        }else{
                            ?>
                            <p class='h4 text-center'>Désole, nous ne possèdons pas ce livre</p>
                            <?php
                        }
                         }
                    }	
                ?>
            </section>

            <div class="container mt-5">
                <div class="row">

                <?php            
                            //On recupere la base de données
                            require_once ('../database/bdd.php');
                            //La requete pour recuperer totes les photos
                            $requete = $con->query("SELECT * FROM book ");
                            
                            if ($requete->rowCount() < 1) {
                                echo "<h4 class='text-center'>Pas disponible pour le moment </h4>";
                            }
                            //Boucle pour affiche les images 
                            while ($data = $requete->fetch()){
                            ?>
                       <div class="col col-12 col-md-6 col-lg-3  mt-3">
                        <a href="#"><img src="../admin/fichiers/<?=$data['photo']?>" style="width:200px; height:280px;"   class="img-fluid" alt="..."></a>
                        
                        <p class="h6 mt-3">Titre : <?=$data['livre']?></p>
                        <p class="h6 mt-3">Auteur : <?=$data['auteur']?></p>
                        <p class="h6 mt-3">Categorie : <?=$data['cat']?></p>
                                

                        <!-- Methode pour recuperer les infos table consultation -->
                        <form class="forms-sample" method="post">
                        <div class="form-group">
                        <!-- <label for="categories" class=" form-control-label">idlivre</label> -->
                        <input hidden type="text" name="id" placeholder="" value="<?= $data['id']; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                        <!-- <label for="categories" class=" form-control-label">iduser</label> -->
                        <input hidden type="text" name="iduser" placeholder="" value="<?php echo $_SESSION['id'];?>" class="form-control">
                        </div>               
                        <button type="submit" name="send" class="btn btn-success me-2">Consulter</button>
                        </form>
                        
                      </div> 
                 <?php
                      }
                    ?>
    <?php
            //Traitement Consultation php                                                         
            if (isset($_POST['send'])){

            $dateS=date('d-m-y');
            $times=date('h:i:s');

			$idlivre =  htmlspecialchars($_POST["id"]);
            $iduser = $_SESSION['id'];
            
            //On recupere la base de données
            require_once ('../database/bdd.php');

            //La requete pour inserer
            $insertion = $con->prepare("INSERT INTO consultation(DateCons,HeureDebut,idlivre,iduser) VALUES(?,?,?,?)");
            $insertion->execute(array($dateS,$times,$idlivre,$iduser));

            $req = $con->query("SELECT id,files,idlivre FROM book INNER JOIN consultation ON book.id= consultation.idlivre WHERE idlivre='$idlivre' ORDER by NumCons DESC LIMIT 1");
            //Boucle pour affiche les images 
            $dat = $req->fetch();
            //rediriger l'utilisateur  vers la page connexion
            echo '<script> window.location="../admin/fichiers/'.$dat['files'].'"</script>';
            
            } 
                          
    ?>
                    
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