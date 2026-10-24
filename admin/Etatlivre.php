<?php
    //Lancer la session
    session_start();
    if(@$_SESSION["validation"] != "yes") {
    header("location:../connexion.php");
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Etat en sorti livre</title>
    <!-- Style print pour masquer le button lors de l'impression -->
    <style>
        @media print{
            .btn{
                display: none;
            }
        }
    </style>
</head>
<body>
        <?php
        $Madate = date('l j F Y');
        ?>
        <div class="container mt-5">
        <h5 class="text-end"><?php echo $Madate; ?></h5>
        <h4>College Jean Baptise<br> de la Salle</h4><br>
        <h4 class="text-center">Liste des livres par domaine</h4>
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Livre</th>
            <th scope="col">Date edition</th>
            <th scope="col">Nombre de page</th>
            <th scope="col">Nom auteur</th>
            </tr>
        </thead>
        <?php                    
        //On recupere la base de données
         require_once ('../database/bdd.php');
         //requete 
         $sql = $con-> query("SELECT livre,dat,nbr,auteur FROM book");
         //Boucle pour afficher
         while($data= $sql->fetch()){
        ?>
        <tbody>
            <tr>
            <th scope="row"><?= $data["livre"]?></th>
            <td><?= $data["dat"]?></td>
            <td><?= $data["nbr"]?></td>
            <td><?= $data["auteur"]?></td>
            </tr>
        </tbody>
        <?php
          }
        ?>
        </table>
        <!-- Div contenant le bouton imprimer -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                <button id="imprimer" class="btn btn-success">Imprimer</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Script Etat en sorti -->
    <script>
        //Impression avec Jquery
              $(document).ready(function(){
                $('#imprimer').click(function(){
                window.print();
                });
              });
        </script>
<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>
  