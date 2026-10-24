<?php
// Recuperation de la variable get['id']
    $id = $_GET["id"];
    require_once ('../database/bdd.php'); // inclusion de la connexion bdd
    $sql = $con->query("DELETE FROM book WHERE id = $id"); //requette suppression
    // Redirection vers la page liste
    header("location: livre.php");
?>