<?php
      //Lancer la session
      session_start();
    
      $iduser = $_SESSION['id'];
      $HeureFin=date('h:i:s');
      // $DateCons=date('y-m-d');
      //On recupere la base de données
      require_once ('../database/bdd.php');
      //La requete pour inserer
      $con->query("UPDATE consultation SET HeureFin=\"$HeureFin\" WHERE iduser = \"$iduser\" ");
      header("location:../Index.php");

      //Detruire la session
      session_destroy();
      //rediriger l'utilisateur  vers la page connexion
?>