<?php
    //Lancer la session
    session_start();
    if(@$_SESSION["autorise"] != "Oui") {
    header("location:../Index.php");
    }
     ?>

<?php
            require_once ('../database/bdd.php');
            //validation du formulaire
            if (isset($_POST['send'])){

            //verifier si user a bien completer tous les champs
            if(!empty(!empty($_POST['abonne']))){

            //les données utilisateurs
            $abonne =  htmlspecialchars($_POST['abonne']);
            
             //La requete pour recuperer les utilisateurs
             $requete = $con->prepare("SELECT * FROM abonne WHERE num = ? ");
             $requete->execute(array($abonne));
             $data = $requete->fetch();
               
            //Verification utilisateur
                if ($data) {

                    //Creation de SESSION
                    $_SESSION["abonne"] = "valide";

                    $message = "Traitement en cours...";
                    //rediriger l'utilisateur  vers la page index
                    header("refresh:3; url=livre.php");
                }else {
                    $message = "Numero d'abonnement invalide";
                }

             }            
              else {
                $message = "Veuilllez remplir vos champs";
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
    <title>Abonnement</title>
</head>
<body>
        <!-- header -->
        <?php require_once("../src/header.php");?>

    <div class="container mb-5">
        <div class="row">
            <div class="container mt-5">
                <img src="../img/book3.jpg" style="height: 60vh;" class="d-block w-100" alt="...">
            </div>
            <div class="container mt-2">
                <h1 class="text-center">Tout ce qu’il faut savoir pour l’Abonnement</h1>
                <p class="lead text-center">
                  Vous êtes un grand lecteur ? Vous dévorez plusieurs ouvrages chaque semaine ? Alors nous vous proposons une offre qui correspond <br>
                  à vos besoins de grand lecteur, l’abonnement à des livres !
                </p>
            </div>
            <div class="container mt-5">
              <div class="row">
                  <div class="col-sm-6 mt-3">
                      <h1 class="mt-5 text-center">HORAIRES D'OUVERTURE</h1>
                      <p class="h6 text-center">Passez nous voir</p>
                      <p class="h6 text-center">Du lundi au jeudi : de 10h à 20h</p>
                      <p class="h6 text-center">du vendredi au samedi : de 10h à 18h</p>
              </div>
                  <div class="col-sm-6 mt-3">
                      <img src="../img/book4.jpg" style="width:460px; height:340px;" class="img-fluid" alt="...">
              </div>
          </div>
      </div>
        </div>
        <div class="container mt-5">
          <h1 class="display-5 text-center">Abonnement</h1>
                <p class="lead text-center">
                    Description de votre abonnement. C'est l'espace idéal pour saisir votre numéro d'abonnement afin d'acceder à la page livre  et <br> 
                    pour consulter vos livres au choix.
                </p>
                <form action="" method="POST">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" name="abonne" placeholder="Saisissez votre numéro d'abonnement" aria-label="Recipient's username" aria-describedby="button-addon2">
                  <button class="btn btn-outline-secondary" name="send" type="submit" id="button-addon2">Valider</button>
                </div>
                <i style="color:red">
                        <?php
                             if (isset($message)) {
                                echo $message."</br>";
                             }
                            ?></i>
                </form>
      </div>
      </div>
      
        <!-- footer -->
        <?php
        require_once("../src/footer.php");
        ?>
<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>