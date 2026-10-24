<?php
    ////Lancer la session
    session_start();
    //Detruire la session
    session_destroy();
    //rediriger l'utilisateur  vers la page connexion
    header("location:../connexion.php");
?>