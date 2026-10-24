<?php
    //Lancer la session
    session_start();
    if(@$_SESSION["autorise"] != "Oui") {
    header("location:../Index.php");
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
    <title>Categories</title>
</head>
<body>

      <!-- header -->
      <?php
        require_once("../src/header.php");
        ?>

        <div class="container mt-5 mb-5">
            <h1 class="text-center">CATÉGORIES</h1>
            <p class="lead text-center">Chercher et découvrir</p>
        </div>
        
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-4">
                  <img src="../img/Colourful Pile of Old Books.webp" style="width:460px; height:340px;"  class="img-fluid" alt="...">
                  <h4 class="text-center mt-4">SELECTIONS</h4>
                  <p class="text-center lead">Accessible à tous</p>
                </div>
                <div class="col-4"></div>
              </div>
              <div class="row justify-content-evenly">
                <div class="col-2"></div>
                <div class="col-4">
                  <img src="../img/Piles of Books.webp" style="width:460px; height:340px;"  class="img-fluid" alt="...">
                  <h4 class="text-center mt-4">CLASSIQUES LITTÉRAIRES</h4>
                  <p class="text-center lead">Il y en a pour tous les goûts</p>
                </div>
              </div>
            </div>

        <div class="container mt-5">
            <h1 class="text-center">LIVRES</h1>
            <p class="lead text-center lead">La création de notre collection</p>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col col-12 col-md-6 col-lg-4  mt-3">
                    <p class="mb-5" style="font-weight:bold;">VOUS N'ÊTES PAS UN ACCUMULATEUR COMPULSIF</p>
                    <img src="../img/Self Help Book.webp" style="width:195px; height:195px;"   class="img-fluid" alt="">
                    <p class="h6 mt-3 lead" style="font-weight:bold;">Annette et Jacky Watts</p>
                    <p class="h6">C'est l'endroit idéal pour tenir vos <br>
                        visiteurs au courant des nouvelles <br>
                        acquisitions ou références littéraires <br>
                         ajoutées à vos étagères. Donnez-leur <br>
                         des détails sur le genre littéraire, le <br>
                         niveau de lecture et les titres similaires <br>
                         pour susciter leur intérêt !
                    </p>
            </div>
                <div class="col col-12 col-md-6 col-lg-4  mt-3">
                    <p class="mb-5" style="font-weight:bold;">ATTENTE. SI LONGUE</p>
                    <img src="../img/Novel.webp" style="width:195px; height:195px;" class="img-fluid" alt="...">
                    <p class="h6 mt-3 lead" style="font-weight:bold;">Anish Rajmani</p>
                    <p class="h6">C'est l'endroit idéal pour tenir vos <br>
                        visiteurs au courant des nouvelles <br>
                        acquisitions ou références littéraires <br>
                        ajoutées à vos étagères. Donnez-leur <br>
                         des détails sur le genre littéraire, le <br>
                          niveau de lecture et les titres similaires <br>
                          pour susciter leur intérêt !
                </p>
            </div>
                <div class="col col-12 col-md-6 col-lg-4  mt-3">
                    <p class="mb-5" style="font-weight:bold;">LE MONDE DE NINI</p>
                    <img src="../img/Drama Novel.webp" style="width:195px; height:195px;"  class="img-fluid" alt="...">
                    <p class="h6 mt-3 lead" style="font-weight:bold;">Mary Chan</p>
                    <p class="h6">C'est l'endroit idéal pour tenir vos <br>
                        visiteurs au courant des nouvelles <br>
                        acquisitions ou références littéraires <br>
                        ajoutées à vos étagères. Donnez-leur <br>
                         des détails sur le genre littéraire, le <br>
                          niveau de lecture et les titres similaires <br>
                          pour susciter leur intérêt !
                </p>
                </div>
            </div>
        </div>

        <div class="container mt-5 mb-5">
            <h1 class="text-center">MAGAZINES ET JOURNAUX</h1>
            <p class="lead text-center lead">S'inscrire à BiblioSchool</p>
        </div>

        <div class="container">
            <div class="row justify-content-between">
                <div class="col-4">
                  <img src="../img/Music Magazine.webp" style="width:460px; height:340px;"  class="img-fluid" alt="...">
                  <h4 class="text-center mt-4">ROLLING ROCK</h4>
                  <p class="text-center lead">Octobre 2025</p>
                </div>
                <div class="col-4"></div>
              </div>
              <div class="row justify-content-evenly">
                <div class="col-2"></div>
                <div class="col-4">
                  <img src="../img/Intellectual Magazine Cover.webp" style="width:460px; height:340px;"  class="img-fluid" alt="...">
                  <h4 class="text-center mt-4">LE QUOTIDIEN DE PARIS</h4>
                  <p class="text-center lead">Octobre 2025</p>
                </div>
              </div>
            </div>

            <div class="container mt-5">
                <h1 class="text-center">COLLECTION NUMÉRIQUE</h1>
                <p class="lead text-center lead">Contenu téléchargeable</p>
            </div>

            <div class="container mt-5">
                <h3 class="text-center">UN OISEAU DANS UNE CAGE D'ACIER</h3>
                <p class="lead text-center lead">Barbara Niels</p>
                <p class="lead text-center"><a href="../img/pdf/FAO - SURVEILLANCE IAHP CHEZ LES OISEAUX SAUVAGES.pdf" style="text-decoration: none;">Consulter</a></p>
            </div>

            <div class="container mt-5 mb-5">
                <h5 class="text-center">C COMME COUTEAU</h5>
                <p class="lead text-center lead">Sam Walsh</p>
                <p class="lead text-center"><a href="../img/pdf/COUTEAUX.pdf" style="text-decoration: none;">Consulter</a></p>
            </div>

            
        <!-- footer -->
        <?php
        require_once("../src/footer.php");
        ?>
<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>