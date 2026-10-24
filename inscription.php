<?php
        //validation du formulaire
        if (isset($_POST['send'])){
        
        //verifier si user a bien completer tous les champs
        if(!empty($_POST['nom']) && !empty($_POST['mail']) && !empty($_POST['pass1']) && !empty($_POST['pass2'])){

            //les données utilisateurs
            $use =  htmlspecialchars($_POST['nom']);
            $mail =  htmlspecialchars($_POST['mail']);
            $pass1 = htmlspecialchars($_POST['pass1']);
            $pass2 = htmlspecialchars($_POST['pass2']);

            //Code pour hasher le mot de passe
            $options = [
            'cost' => 10,
            ];
            $Mot_de_passe = password_hash($pass1, PASSWORD_BCRYPT, $options);

            //Condition pour verifier le mot de passe  
            if (password_verify($pass2,$Mot_de_passe)) {
                
            //On recupere la base de données
            require_once ('database/bdd.php');
            //La requete pour inserer
            $insertion = $con->prepare("INSERT INTO users(nom,email, pass) VALUES(?,?,?)");
            $insertion->execute(array($use,$mail,$Mot_de_passe));
            
            //Affiche le message
            $message = "Votre compte a bien été crée, vous pouvez vous connecter maintenant...";
            //rediriger l'utilisateur  vers la page connexion
            header("refresh:1; url=connexion.php");
            }
            else{
                $message = "Le mot de passe ne correspond pas";
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
    <link rel="stylesheet" href="style/style.css">
   
</head>
<body class="bg-light">
     <!-- header -->
     <?php
        require_once("head.php");
        ?>
    <div class="container ">
        <div class="row mt-3 mb-5">
            <div class="col-lg-4 bg-white m-auto rounded-top">
                <h2 class="text-center"> Inscription</h2>
                <p class="text-center text-muted lead"> Simple et Rapide </p>

                <form action="" method="POST">
                    <div class="input-group  mb-3">
                        <span class="input-group-text">
                            <i class="fa fa-user">
                            </i> 
                        </span>
                        <input type="text" name="nom" class="form-control" placeholder="Nom ">
                    </div>
                    <div class="input-group  mb-3">
                        <span class="input-group-text">
                            <i class="fa fa-envelope">
                            </i> 
                        </span>
                        <input type="email" name="mail" class="form-control" placeholder="Email ">
                    </div>
                    <div class="input-group  mb-3">
                        <span class="input-group-text">
                            <i class="fa fa-lock">
                            </i> 
                        </span>
                        <input type="password" name="pass1" class="form-control" placeholder="Mot de passe ">
                    </div>
                    <div class="input-group  mb-3">
                        <span class="input-group-text">
                            <i class="fa fa-lock">
                            </i> 
                        </span>
                        <input type="password" name="pass2" class="form-control" placeholder="Confirmation mot de passe ">
                    </div>
                    <div class="d-grid">
                        <button type="submit" name="send" class="btn btn-success">S’inscrire</button>
                        <p class="text-center text-muted mt-3">
                        <i style="color:red">
                        <?php
                             if (isset($message)) {
                                echo $message."</br>";
                             }
                            ?></i>
                            En cliquant sur S’inscrire, vous acceptez nos <a href="#" style="text-decoration: none;">  Conditions générales</a>, notre <a href="" style="text-decoration: none;"> Politique de confidentialité </a> et notre <a href="#" style="text-decoration: none;">  Politique d’utilisation</a> des cookies. 
                        </p>
                        <p class="text-center">
                             Avez vous déjà un compte ?<a href="connexion.php" style="text-decoration: none;"> Connexion </a>
                        </p>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>
</html> 
<script src='js/bootstrap.js'></script>