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
    <title>À propos</title>
</head>
<body>

      <!-- header -->
      <?php
        require_once("../src/header.php");
        ?>
        
    <div class="container mt-5">
        <h1 class="text-center">À PROPOS DE BIBLIOSCHOOL</h1>
        <p class="lead text-center">Un espace pour tous</p>
        <p class="lead text-center">
            Depuis 2000, BiblioSchool fait partie intégrante de Paris. Notre mission est de renforcer notre communauté par <br>
            l'alphabétisation et le savoir en offrant une véritable égalité des chances grâce à un accès libre aux ressources. <br>
            Nous ne sommes pas qu'un lieu de lecture, nous sommes un centre de découverte, de créativité et <br>
            d'épanouissement.
        </p>
      </div>

      <div class="container mt-5">
        <h3 class="text-center">CENTRE D'ASSISTANCE</h3>
        <p class="lead text-center">Ce qu'il faut savoir</p>
        <p class="lead text-center">
            Nous avons compilé une liste des questions les plus fréquemment posées ci-dessous. Si vous avez des questions supplémentaires qui <br>
            ne sont pas abordées ici, n'hésitez pas à nous contacter et nous serons ravis de répondre à vos questions.
        </p>
      </div>

      <div class="container mt-5">
        <img src="../img/Break from Reading.webp" style="height: 60vh;" class="d-block w-100" alt="...">
    </div>

    <div class="container mt-5">
        <h3 class="text-center">COMMENT PUIS-JE M'INSCRIRE POUR OBTENIR UNE CARTE DE BIBLIOTHÈQUE ?</h3>
        <p class="lead text-center">
            Ajoutez votre réponse ici. Soignez votre style, soyez clair et concis, et n'hésitez pas à ajouter des exemples ou des images. Relisez ce <br>
            que vous avez écrit pour vous assurer que ceux qui viennent pour la première fois sur votre site comprennent tout de suite votre <br>
            réponse.
        </p>
      </div>


      <div class="container mt-5">
        <img src="../img/Reaching for a Book.webp" style="height: 60vh;" class="d-block w-100" alt="...">
    </div>

    <div class="container mt-5">
        <h3 class="text-center">OÙ PUIS-JE TROUVER LA LISTE DES FRAIS DE RETARD ?</h3>
        <p class="lead text-center">
            Ajoutez votre réponse ici. Soignez votre style, soyez clair et concis, et n'hésitez pas à ajouter des exemples ou des images. Relisez ce <br>
            que vous avez écrit pour vous assurer que ceux qui viennent pour la première fois sur votre site comprennent tout de suite votre <br>
            réponse.
        </p>
      </div>

      <div class="container mt-5">
        <img src="../img/Stack of Books.webp" style="height: 60vh;" class="d-block w-100" alt="...">
    </div>

    <div class="container mt-5 mb-5">
        <h3 class="text-center">COMBIEN D'ARTICLES PUIS-JE CONSULTER EN MÊME TEMPS ?</h3>
        <p class="lead text-center">
            Ajoutez votre réponse ici. Soignez votre style, soyez clair et concis, et n'hésitez pas à ajouter des exemples ou des images. Relisez ce <br>
            que vous avez écrit pour vous assurer que ceux qui viennent pour la première fois sur votre site comprennent tout de suite votre <br>
            réponse.
        </p>
      </div>
      
        <!-- footer -->
        <?php
        require_once("../src/footer.php");
        ?>

<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>