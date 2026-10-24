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
    <title>Auteurs</title>
</head>
<body>
      <!-- header -->
      <?php
        require_once("../src/header.php");
        ?>

    <div class="container">
        <div class="row">
            <div class="container mt-5">
                <img src="../img/ecrivains.jpg" style="height: 60vh;" class="d-block w-100" alt="...">
            </div>
            <div class="container mt-5">
                <h1 class="display-5 text-center">Tous les auteurs</h1>
                <p class="lead text-center">
                    Description de nos auteurs. C'est l'espace idéal pour présenter les auteurs à nos lecteurs et <br> 
                    attirer leur attention sur nos livres.
                </p>
            </div>
            <div class="container mt-5 mb-5">
                <div class="row">
                    <div class="col col-12 col-md-6 col-lg-3  mt-3">
                        <img src="../img/auteurs/chimie/Dmitri_Mendeleïev.jpg" style="width:200px; height:280px;"   class="img-fluid" alt="...">
                        <p class="h6 mt-3">Dimitri Mendeleïev</p>
                </div>
                    <div class="col col-12 col-md-6 col-lg-3  mt-3">
                        <img src="../img/auteurs/chimie/Linus_Pauling.jpg" style="width:200px; height:280px;" class="img-fluid" alt="...">
                        <p class="h6 mt-3">Linus Pauling</p>
                </div>
                    <div class="col col-12 col-md-6 col-lg-3  mt-3">
                        <img src="../img/auteurs/français/antoine_saint_exupery.jpg" style="width:200px; height:280px;"  class="img-fluid" alt="...">
                        <p class="h6 mt-3">Saint Exupery</p>
                    </div>

                <div class="col col-12 col-md-6 col-lg-3  mt-3">
                        <img src="../img/auteurs/français/marcel_proust.jpg" style="width:200px; height:280px;"  class="img-fluid" alt="...">
                        <p class="h6 mt-3">Marcel Proust</p>
                </div>
                <div class="col col-12 col-md-6 col-lg-3  mt-3">
                    <img src="../img/auteurs/français/victor_hugo.jpg" style="width:200px; height:280px;"   class="img-fluid" alt="...">
                    <p class="h6 mt-3">Victor Hugo</p>
            </div>
                <div class="col col-12 col-md-6 col-lg-3  mt-3">
                    <img src="../img/auteurs/physique/einstein.jpg" style="width:200px; height:280px;" class="img-fluid" alt="...">
                    <p class="h6 mt-3">Einstein</p>
            </div>
                <div class="col col-12 col-md-6 col-lg-3  mt-3">
                    <img src="../img/auteurs/histoire/Marc_Bloch.jpg" style="width:200px; height:280px;"  class="img-fluid" alt="...">
                    <p class="h6 mt-3">Marc Bloch</p>
                </div>

            <div class="col col-12 col-md-6 col-lg-3  mt-3">
                    <img src="../img/auteurs/Math/Augustin_Cauchy.jpg" style="width:200px; height:280px;"  class="img-fluid" alt="...">
                    <p class="h6 mt-3">Augustin Cauchy</p>
            </div>
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