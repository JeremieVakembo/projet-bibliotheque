<?php
        require_once ('database/bdd.php');
        //validation du formulaire
        if (isset($_POST['send'])){

        //verifier si user a bien completer tous les champs
        if(!empty(!empty($_POST['mail']) && !empty($_POST['pass']))){

            //les données utilisateurs
            $user =  htmlspecialchars($_POST['mail']);
            $pass = htmlspecialchars($_POST['pass']);

             //La requete pour recuperer les utilisateurs
             $requete = $con->prepare("SELECT * FROM users WHERE email = ? ");
             $requete->execute(array($user));
             $data = $requete->fetch();
             
             
             //Etant que admin 
             if ($user=="admin23@gmail.com" && md5($pass)=="5531a5834816222280f20d1ef9e95f69") {
                    //Lancer la session
                    session_start();

                    //Creation de SESSION
                    $_SESSION["validation"] = "yes";
                    $_SESSION["mail"] = $user;
                    $_SESSION["password"] = $pass;

                    //rediriger l'utilisateur  vers la page index
                    header("refresh:0; url=admin/home.php");        

             }   
            //Verification utilisateur
            if ($data) {
                //Verification de mot de passe avec la fonction <<password_verify>>
                if (password_verify($pass,$data["pass"])) {

                    //Lancer la session
                    session_start();

                    //Creation de SESSION
                    $_SESSION["autorise"] = "Oui";
                    $_SESSION["mail"] = $user;
                    $_SESSION["mdp"] = $pass;
                    $_SESSION['id']=$data['id'];


                    $message = "Connexion en cours...";
                    //rediriger l'utilisateur  vers la page index
                    header("refresh:1; url=pages/Index.php");
                }else {
                $message = "Mot de passe invalide";
                }

              }else {
                $message = "L'utilisateur avec ce mail n'existe pas";
                }

             }
            
              else {
                $message = "Veuilllez remplir vos champs";
                }
        }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Connexion et inscription </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/all.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='webfonts'>
    <link rel="stylesheet" href="style/style.css">
   
</head>
<body class="bg-light">
     <!-- header -->
     <?php
        require_once("head.php");
        ?>
    <div class="container ">
        <div class="row mt-5">
            <div class="col-lg-4 bg-white m-auto rounded-top">
                <h2 class="text-center"> Connexion</h2>
                <p class="text-center text-muted lead"> Se connecter à BIBLIOSCHOOL </p>

                <form action="" method="POST">
                    <div class="input-group  mb-3">
                        <span class="input-group-text">
                            <i class="fa fa-envelope">
                            </i> 
                        </span>
                        <input type="email" name="mail" class="form-control" placeholder="Adresse e-mail  ">
                    </div>
                
                    <div class="input-group  mb-3">
                        <span class="input-group-text">
                            <i class="fa fa-lock">
                            </i> 
                        </span>
                        <input type="password" name="pass" class="form-control" placeholder="Mot de passe ">
                    </div>
                    <div class="d-grid">
                        <button type="submit" name="send" class="btn btn-success">Se connecter</button>
                        <p class="text-center">
                        <i style="color:red">
                        <?php
                             if (isset($message)) {
                                echo $message."</br>";
                             }
                            ?></i>
                              vous n'avez pas de compte ?<a href="inscription.php" style="text-decoration: none;"> Inscription </a>
                        </p>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>
</html> 
<script src='js/bootstrap.js'></script>