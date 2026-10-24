<?php
                            
    //On recupere la base de données
    require_once ('../database/bdd.php');
    
    $id = $_GET['id'];
    $status = $_GET['statuts'];

    // $requete = $con->prepare(" UPDATE users SET statuts=? where id=? ");
    // $requete->execute(array($id,$status));
    $requete = $con->query("UPDATE users SET statuts=$status WHERE id=$id");
    header("location:home.php");
?>

